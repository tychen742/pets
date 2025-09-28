const express = require('express') // router is a list of all routes/URLs
const router = express.Router() // mini application
const userController = require('./controllers/userController')
const postController = require('./controllers/postController')

// User routes
router.get('/', userController.home)
router.post('/register', userController.register)
router.post('/login', userController.login)
router.post('/logout', userController.logout)

// profile routes
router.get('/profile/:username', userController.ifUserExists, userController.profilePostsScreen)

// post routes
router.get('/create-post', userController.mustBeLoggedIn, postController.viewCreateScreen)
router.post('/create-post', userController.mustBeLoggedIn, postController.create)
router.get('/post/:id', postController.viewSingle)

module.exports = router 




// exports can export anything such as var, objects...
// instead of creating functions here in the router, we use functions in the controllers


// MVC: M: model, or business logic (biz rules, model data); V: ; C: controller: middle man, calls appropriate models and views