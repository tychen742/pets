function clickBtn() {
    var x = document.getElementById("notes");
    if (x.style.display === "none") {
        showNotes.style.display = "block";
    } else {
        x.style.display = "none"
    }
    alert("Show the notes...");
}
// alert("Show the notes...");

let button = document.getElementById("showNotesBtn");
button.addEventListener("click", clickBtn);

var mouseTest = document.getElementById("mouseTest");
mouseTest.addEventListener("mousedown", downEvent);
mouseTest.addEventListener("mouseup", upEvent);
mouseTest.addEventListener("mousemove", moveEvent);

function downEvent() {
    mouseTest.style.backgroundColor = "yellow";
}
function upEvent() {
    mouseTest.style.backgroundColor = "red";
}
function moveEvent() {
    mouseTest.style.backgroundColor = "green";
}
// let x = document.getElementById("mouseTest");