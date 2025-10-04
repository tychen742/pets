<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping Timelines </title>

    <script src="jspsych.js"></script>
    <script src="plugins/jspsych-html-keyboard-response.js"></script>

    <link href="css/jspsych.css" rel="stylesheet" type="text/css">


</head>
<body>

</body>


<script>

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


        timeline_variables: [
            {face: 'happy_face_1.jpg', name: 'Alex'},
            {face: 'happy_face_2.jpg', name: 'Beth'},
            {face: 'happy_face_3.jpg', name: 'Chad'},
            {face: 'happy_face_4.jpg', name: 'Dave'},
        ],
    }

    var trial = {
        type: 'html-keyboard-response',
        stimulus: 'This trial is in a loop. Press R to repeat trial, or C to continue.'
    }

    var loop_node = {
        timeline: [face_name_procedure],
        loop_function: function (data) {
            if (jsPsych.pluginAPI.convertKeyCharacterToKeyCode('r') == data.values()[0].key_press) {
                return true;
            } else {
                return false;
            }
        }
    }


    jsPsych.init(
        {
            timeline: [loop_node]
        }
    )

</script>


</html>