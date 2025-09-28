<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> multiple trials </title>
    <!-- run the main program/class code jspsych.js first -->
    <script src="jspsych.js"></script>
    <!--    then run this code plugin -->
    <script src="./plugins/jspsych-html-keyboard-response.js"></script>

    <link href="./css/jspsych.css" rel="stylesheet" type="text/css">
</head>

<body>
</body>
<script>

    // using Timeline to run multiple trials

    // with lots of trials, it might be easier to add the trials
    // to the timeline array as they are defined.
    // this is how we create an array:
    // <1>. declare object
    var timeline = [];

    // <2>. create object
    // we push the timelines into the array
    var trial_1 = {
        type: 'html-keyboard-response',
        stimulus: 'This is trial 1.'
    };
    timeline.push(trial_1);

    var trial_2 = {
        type: 'html-keyboard-response',
        stimulus: 'This is trial 2.'
    };
    timeline.push(trial_2);

    var trial_3 = {
        type: 'html-keyboard-response',
        stimulus: 'This is trial 3.'
    };
    timeline.push(trial_3);

    // <3>. run the trial using the jsPsych main class
    // we ask jsPsych to run the array of trials (timeline)
    //    now let us initialize the trial(s)
    jsPsych.init({
            timeline: timeline
        }
    )

</script>


</html>
