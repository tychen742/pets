const express = require('express')
const session = require('express-session')
const MongoStore = require('connect-mongo')(session)
const flash = require('connect-flash')
const app = express()   

let sessionOptions = session({
    secret: "I am getting good at JavaScrip.",
    store: new MongoStore({ client: require('./db') }),
    resave: false,
    saveUninitialized: false,
    cookie: { maxAge: 1000 * 60 * 60 * 24, httpOnly: true }
})

app.use(sessionOptions)
app.use(flash())

app.use(function (req, res, next) {
    // make curent user id available on the req object
    if (req.session.user) {req.visitorId = req.session.user._id} else {req.visitorId = 0 }

    // make user session data available from within view templates
    res.locals.user = req.session.user
    next()
})

const router = require('./router') // "require" executes the file and return the exports

app.use(express.urlencoded({ extended: false })) // add request data into the req object
app.use(express.json()) // now express can send json data

app.use(express.static('public'))   // tell express where the static pages (html, css...) are
app.set('views', 'views')           // app.js is the main in package.json 
app.set('view engine', 'ejs')

app.use('/', router)

module.exports = app