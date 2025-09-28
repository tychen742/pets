// <!-- ### showMessage PHP-MESSAGE ### -->
function showMessage(text) {
    document.getElementById("php-message").style.display = "block";
    setTimeout(function () {
        document.getElementById("php-message").innerHTML = text;
    }, 2000);
}
// <!-- ### end of php-message javascript ### -->




function loadFileMenu() {
    let checked = false;
    let i;
    let checks = [];
    let text = document.getElementsByName("fileCheck[]");
    for (i = 0; i < text.length; i++) {
        if (text[i].checked) {
            checked = true;
        }
    }
    if (checked) {
        document.getElementById("fileMenu").style.display = "inline-block";
    } else {
        document.getElementById("fileMenu").style.display = "none";
    }
}

function loadTaskMenu() {
    let checked = false;
    let i;
    let checks = [];
    let text = document.getElementsByName("taskCheck[]");
    for (i = 0; i < text.length; i++) {
        if (text[i].checked) {
            checked = true;
        }
    }
    if (checked) {
        document.getElementById("taskMenu").style.display = "inline-block";
    } else {
        document.getElementById("taskMenu").style.display = "none";
    }
}

function loadProjectMenu() {
    var checks = [];
    var text = document.getElementById("projectMenu");
    var text2 = "";
    var i;

    $("input:checkbox[name=projectCheck]:checked").each(function () {
        checks.push($(this).val());
    })
    if (checks.length > 0) {
        text.style.display = "inline-block";

    } else {
        text.style.display = "none";
    }
}


function loadMemberAddCheck() {
    let checked = false;
    var i;
    var checks = [];
    var text = document.getElementsByName("memberAddCheck[]");

    for (i = 0; i < text.length; i++) {
        if (text[i].checked) {
            checked = true;
        }
    }
    if (checked) {
        document.getElementById("submitMemberAdd").style.display = "block";
    } else {
        document.getElementById("submitMemberAdd").style.display = "none";
        return checked;
    }
}

