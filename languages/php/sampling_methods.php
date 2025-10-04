<?php include_once("list.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Repeating Trials </title>

    <script src="jspsych.js"></script>
    <script src="plugins/jspsych-html-keyboard-response.js"></script>

    <link href="css/jspsych.css" rel="stylesheet">

</head>
<body>

</body>

<script>
    // specify timeline parameters
    // in this object, we have 4 variables: timeline, variables, random, and repetitions:
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
        // randomize_order: true,
        // repetitions: 3

        sample: {
            // type: 'without-replacement',
            // type: 'fixed-repetitions',
            // type: 'alternate-groups',
            // groups: [[0, 2], [1, 3]],
            // randomize_group_order: false
            //
            // size: 3,
            // weights: [3, 1, 1, 1]
            type: 'custom',
            fn: function(t){

                return t.reverse();
            }
        }
    }

    // will show nothing if .init is not used
    jsPsych.init(
        {
            timeline: [face_name_procedure]
        }
    )


</script>


</html>