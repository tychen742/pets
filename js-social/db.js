const dotenv = require('dotenv')
dotenv.config() // load the values from the .env file
const mongodb = require('mongodb')

mongodb.connect(process.env.CONNECTIONSTRING, { useNewUrlParser: true, useUnifiedTopology: true }, function (err, client) {
    module.exports = client
    const app = require('./app')
    app.listen(process.env.PORT)
})
