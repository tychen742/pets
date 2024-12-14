<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Timeline Variables </title>

    <script src="jspsych.js"></script>
    <script src="./plugins/jspsych-html-keyboard-response.js"></script>
    <script src="./plugins/jspsych-image-keyboard-response.js"></script>
    <link href="./css/jspsych.css" rel="stylesheet" type="text/css">


</head>
<body>

</body>


<script>
    // choices, not choice
    // note spelling as JS is hard to debug

    // <1>.    create timeline object
    let face_name_procedure = {

        timeline: [
            {
                type: 'html-keyboard-response',
                stimulus: '+',
                // NO_KEYS means you don't have to do anything
                choices: jsPsych.NO_KEYS,
                trial_duration: 1500
            },
            {
                type: 'image-keyboard-response',
                stimulus: jsPsych.timelineVariable('face'),
                choices: jsPsych.NO_KEYS,
                trial_duration: 2500
            }
        ],

        timeline_variables: [
            {face: 'happy_face_1.jpg'},
            {face: 'happy_face_2.jpg'},
            {face: 'happy_face_3.jpg'},
            {face: 'happy_face_4.jpg'}
        ]
    }

    // <2>.  initiate jsPsych
    jsPsych.init(
        {
            timeline: [face_name_procedure]

        }
    )


</script>


</html>