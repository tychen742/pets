<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>nested timeline 2</title>

    <!--    Don't forget to link the the main class, plugins, css-->
    <script src="jspsych.js"></script>
    <script src="./plugins/jspsych-image-keyboard-response.js"></script>
    <link href="./css/jspsych.css" rel="stylesheet" type="text/css">

</head>
<body>

</body>

<script>
    // the curly braces after the variable name means it's an objected passed to the function
    let judgement_trials = {

        type: 'image-keyboard-response',
        prompt: '<p>Please press a number bentween 1 and 7 to indicate how unusual the image is.</p>',
        choices: ['1', '2', '3', '4', '5', '6', '7'],
        timeline: [
            {stimulus: 'happy_face_1.jpg'},
            {stimulus: 'happy_face_2.jpg', prompt: '<p> Press 1 for this trial.  </p>'},
            {stimulus: 'happy_face_3.jpg'}
        ]
    }

    jsPsych.init({
        timeline: [judgement_trials]
    })

</script>


</html>