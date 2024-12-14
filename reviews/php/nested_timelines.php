<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>nested timelines</title>
    <!-- run the main program/class code jspsych.js first -->
    <script src="jspsych.js"></script>
    <!--    then run this code plugin -->
    <script src="./plugins/jspsych-image-keyboard-response.js"></script>

    <link href="./css/jspsych.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>

<script>
    // <1>.  declare the trial
    let judgment_trials = {

        <!-- remember that types -->
        type: 'image-keyboard-response',
        prompt: '<p> Press a number 1-7 to indicate how unusual the image is.</p>',
        choices: ['1','2','3','4','5','6','7'],
        // the array is here below
        timeline: [
            {stimulus: 'happy_face_1.jpg'},
            {stimulus: 'happy_face_2.jpg'},
            {stimulus: 'happy_face_3.jpg'}
        ]
    }

    //  <2>.  run the trial
    jsPsych.init(
        {

            timeline: [judgment_trials]

        }
    )

</script>


</html>