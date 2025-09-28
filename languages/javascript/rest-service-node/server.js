//https://www.freecodecamp.org/news/rest-api-tutorial-rest-client-rest-service-and-api-calls-explained-with-code-examples/

const path = require("path");
const express = require("express")
const bodyParser = require("body-parser")

// const http = require("http;");
// const fs = require("fs");

const app = express();

app.use(bodyParser.json());


const sayHi = (req, res) => {
	res.send("Hi");
};


// ##### this is GET #####
app.get("/", (req, res) => {
	res.sendFile(path.join(__dirname, "index.html"));
});

// ##### this is POST #####
app.post("/add", (req, res) => {
	const { a, b } = req.body;

	res.send( `The sum is: ${a + b}` );

//	res.send({
//		result: paseInt(a) + parseInt(b)
//	});
});


app.listen(5000, () => {
	console.log("Server is running on port 5000.");
});


