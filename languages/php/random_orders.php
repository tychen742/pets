<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Orders</title>

    <script src="jspsych.js"></script>
    <script src="plugins/jspsych-html-keyboard-response.js"></script>
    <!--    <script src="plugins/jspsych-image-keyboard-response.js"></script>-->

    <link href="css/jspsych.css" rel="stylesheet" type="text/css">

</head>
<body>

</body>

<script>

    // <1.1>. Create Timeline>
    // curly braces means it's a data object
    let face_name_procedure = {
        timeline: [
            {
                type: 'html-keyboard-response',
                stimulus: '+',
                // NO_KEYS means you don't have to do anything
                choices: jsPsych.NO_KEYS,
                trial_duration: 500
            },
            {
                type: 'html-keyboard-response',
                stimulus: jsPsych.timelineVariable('name'),
                trial_duration: 1000,
                choices: jsPsych.NO_KEYS
            },
            {
                type: 'html-keyboard-response',
                stimulus: function () {
                    var html = "<img src='" + jsPsych.timelineVariable('face', true) + "'>";
                    html += "<p>" + jsPsych.timelineVariable('name', true) + "</p>";
                    return html;
                },
                choice: jsPsych.NO_KEYS,
                trial_duration: 2500
            }
        ],


        // <1.2> timeline variables
        // [ ] is an array
        timeline_variables: [
            {face: 'happy_face_1.jpg', name: 'Alex'},
            {face: 'happy_face_2.jpg', name: 'Beth'},
            {face: 'happy_face_3.jpg', name: 'Chad'},
            {face: 'happy_face_4.jpg', name: 'Dave'},
        ],
        randomize_order: true
    }


    // <2> run the timeline with jsPsych
    // the dot notation meaning it's a method/function inside the main class
    // we are passing a data object (a timeline) into the function, so we use { }
    // the parentheses ( ) are from the method/function
    jsPsych.init(
        {
            timeline: [face_name_procedure]
        }
    )
    // if you see a grey bar on screen, it means you did not specify the plugins.
    // or that you did not pass in an array ==> square brackets around the timeline object

</script>

</html>