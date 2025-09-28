const bcrypt = require('bcryptjs')
const usersCollection = require('../db').db().collection("users")
const validator = require('validator')
const md5 = require('md5')

let User = function (data, getAvatar) { // constructor function; data sent from caller userController 
    this.data = data // "this" is the current object been created when calling new User(); store data
    this.errors = []
    if (getAvatar == undefined) { getAvatar = false }
    if (getAvatar) { this.getAvatar() }
}

User.prototype.cleanUp = function () { // methods are moved out of constructor to prototype
    if (typeof (this.data.username) != "string") { this.data.username = "" }
    if (typeof (this.data.email) != "string") { this.data.email = "" }
    if (typeof (this.data.password) != "string") { this.data.password = "" }
    // get rid of bogus properties
    this.data = { // updating/overwriting data parameter/properties 
        username: this.data.username.trim().toLowerCase(),
        email: this.data.email.trim().toLowerCase(),
        password: this.data.password
    }
}


User.prototype.validate = function () {
    return new Promise(async (resolve, reject) => {
        if (this.data.username == "") { this.errors.push("You must provide a username.") }
        if (this.data.username != "" && !validator.isAlphanumeric(this.data.username)) { this.errors.push("Only letters and numbers are allowed for username") }
        if (!validator.isEmail(this.data.email)) { this.errors.push("You must provide a valid email address.") }
        if (this.data.password == "") { this.errors.push("You must provide a password.") }
        if (this.data.password.length > 0 && this.data.password.length < 6) { this.errors.push("Password must be at least 6 characters.") }
        if (this.data.password.length > 50) { this.errors.push("Password cannot exceed 50 characters.") }
        if (this.data.username.length > 0 && this.data.username.length < 3) { this.errors.push("Username must be at least 3 characters.") }
        if (this.data.password.length > 30) { this.errors.push("Username cannot exceed 30 characters.") }

        // only if username is valid, then check to see if it's taken already
        if (this.data.username.length > 2 && this.data.username.length < 31 && validator.isAlphanumeric(this.data.username)) {
            let usernameExists = await usersCollection.findOne({ username: this.data.username })
            if (usernameExists) { this.errors.push("That username is already taken.") }
        }

        // only if email is valid, then check to see if it's taken already
        if (validator.isEmail(this.data.email)) {
            let emailExists = await usersCollection.findOne({ email: this.data.email })
            if (emailExists) { this.errors.push("That email is already taken.") }
        }
        resolve()
    })
}

User.prototype.login = function () {
    return new Promise((resolve, reject) => {
        this.cleanUp()
        usersCollection.findOne({ username: this.data.username }).then((attemptedUser) => {
            if (attemptedUser && bcrypt.compareSync(this.data.password, attemptedUser.password)) {
                this.data = attemptedUser
                this.getAvatar()
                resolve("Congrats!") // the callback function
            } else {
                reject("Invalid username/password")
            }
        }).catch(function () {
            reject("Please try again later.")
        })
    })
}

User.prototype.register = function () {
    return new Promise(async (resolve, reject) => {   // ideal to provicde access to functions new objects
        // step 1: validate user data
        this.cleanUp()
        await this.validate() // == user.validate
        // step 2: only if there are no validation errors, save user data to db
        if (!this.errors.length) {
            // hash user password
            let salt = bcrypt.genSaltSync(10)
            this.data.password = bcrypt.hashSync(this.data.password, salt)
            await usersCollection.insertOne(this.data)
            this.getAvatar()
            resolve()
        } else {
            reject(this.errors)
        }
        // step
    })
}

User.prototype.getAvatar = function () {
    this.avatar = `https://gravatar.com/avatar/${md5(this.data.email)}?s=128`
}

User.findByUsername = function (username) {
    return new Promise(function (resolve, reject) {
        if (typeof (username) != "string") {
            reject()
            return
        }
        usersCollection.findOne({ username: username }).then(function (userDoc) {
            if (userDoc) {
                userDoc = new User(userDoc, true)
                userDoc = {
                    _id: userDoc.data._id,
                    username: userDoc.data.username,
                    avatar: userDoc.avatar // note that avar is querried separately in User model
                }
                resolve(userDoc)
            } else {
                reject()
            }
        }).catch(function () {
            reject()
        })
    })
}

module.exports = User  // exported to be imported in the controller file