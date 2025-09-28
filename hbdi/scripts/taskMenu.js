document.write("<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>");


// ##### Add Task; ID: #taskAdd #####
$(document).ready(function () {
    $('#submitTaskAdd').click(function (e) {
        //     $('#taskAddForm').submit(function (e) {
        // form submission will cause bootstrap modal not closing
        e.preventDefault();

        console.log("add process reached taskMenu.js VVVVV");

        var formData = new FormData($('taskAddForm')[0]);
        var submitTaskAdd = $("#submitTaskAdd").val();
        var created_by = $("#created_by").val();
        console.log("created_by: " + created_by); // works!
        var id_project = $("#id_project_task_add").val();
        var title_task = $('#title_task').val();
        var date_due = $('#date_due').val();
        var assigned_to = $('#assigned_to').val();
        var priority = $('#priority').val();
        var taskDescription = $('#taskDescription').val();
        var remark = $('#remark').val();

        $.ajax({
            method: 'POST',
            url: 'https://tychen.us/hbdi/scripts/task_menu.php',
            // data: $("#taskAddForm").serialize(),
            // data: formData,
            data:
                {
                    'submitTaskAdd': submitTaskAdd,
                    'created_by': created_by,
                    'id_project': id_project,
                    'title_task': title_task,
                    'date_due': date_due,
                    'assigned_to': assigned_to,
                    'priority': priority,
                    'taskDescription': taskDescription,
                    'remark': remark,
                },
            dataType: 'json',
            // contentType: false,
            // processData: false,
            success: function (result) {
                console.log(result.message);
                // $('#taskList').fadeOut('slow');
                // $("#taskList").load(location.href + " #taskList");
                $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1;
                setTimeout(fadeIn, 5000);
            },
        });

        // $('#taskAddModal').modal('toggle');
        // return false;

    });


});
// ##### end of Add Task; ID: #taskAdd #####

// ##### Acknowledge Task; ID: #taskAcknowledge #####
$(document).ready(function () {
    $('#submitTaskAcknowledge').on('click', function () {
        // e.preventDefault();
        if (confirm("Please confirm the task Acknowledgement request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let submitTaskAcknowledge = $('#submitTaskAcknowledge').val();
            console.log('id[]: ' + id[0]);
            if (id.length === 0) //tell you if the array is empty
            {
            } else {
                $.ajax({
                    url: "https://tychen.us/hbdi/scripts/task_menu.php",
                    method: 'POST',
                    data: {
                        submitTaskAcknowledge: submitTaskAcknowledge,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                            $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            $('.content-item-wrap#' + id[i] + '').reload('slow');
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
// ##### end of Acknowledge Task; ID: #taskAcknowledge #####
// ##### Working On It Task; ID: #taskWorking #####
$(document).ready(function () {
    $('#submitTaskWorking').on('click', function () {
        console.log("TTTTT")
        // e.preventDefault();
        if (confirm("Please confirm the task Working On It request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let submitTaskWorking = $('#submitTaskWorking').val();
            console.log('id[]: ' + id[0]);
            if (id.length === 0) //tell you if the array is empty
            {
            } else {
                $.ajax({
                    url: "https://tychen.us/hbdi/scripts/task_menu.php",
                    method: 'POST',
                    data: {
                        submitTaskWorking: submitTaskWorking,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                            $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            // $("#taskList").load(location.href + " #taskList");
                            $('.content-item-wrap#' + id[i] + '').reload('slow');
                            // setTimeout(function(){ $("#taskList").load(location.href + " #taskList") }, 3000);
                            // $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1; setTimeout(fadeIn, 5000);
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
// #####  Task; ID: #taskWorking #####


// ##### Complete Done Task; ID: #taskComplete #####
$(document).ready(function () {
    $('#submitTaskComplete').click(function () {
        if (confirm("Please confirm the task Completion request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let submitTaskComplete = $('#submitTaskComplete').val();
            console.log('id[]: ' + id[0]);
            if (id.length === 0) //tell you if the array is empty
            {
            } else {
                $.ajax({
                    url: 'https://tychen.us/hbdi/scripts/task_menu.php',
                    method: 'POST',
                    data: {
                        submitTaskComplete: submitTaskComplete,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                            $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1;
                            setTimeout(fadeIn, 5000);
                            // $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1; setTimeout(fadeIn, 5000);
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
// #####  Task; ID: #taskComplete #####

// ##### Verify Task; ID: #taskVerify #####
$(document).ready(function () {
    $('#submitTaskVerify').click(function () {
        if (confirm("Please confirm the task Verification request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let submitTaskVerify = $('#submitTaskVerify').val();
            console.log('id[]: ' + id[0]);
            if (id.length === 0) //tell you if the array is empty
            {
                console.log('no id checked.');
            } else {
                $.ajax({
                    url: 'https://tychen.us/hbdi/scripts/task_menu.php',
                    method: 'POST',
                    data: {
                        submitTaskVerify: submitTaskVerify,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                            $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            $("#taskList").load(location.href + " #taskList");

                            // $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1;
                            // setTimeout(fadeIn, 5000);
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
// ##### Verify Task; ID: #taskVerify #####


// ##### Delete Task ID: #taskDelete #####
$(document).ready(function () {
    $('#submitTaskDelete').click(function () {
        if (confirm("Please confirm the task deletion request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let submitTaskDelete = $('#submitTaskDelete').val();
            console.log('id[]: ' + id[0]);
            if (id.length === 0) //tell you if the array is empty
            {
            } else {
                // confirm("Not zero checked");
                console.log('before ajax.'),
                    $.ajax({
                        url: 'https://tychen.us/hbdi/scripts/task_menu.php',
                        method: 'POST',
                        data: {
                            submitTaskDelete: submitTaskDelete,
                            id: id
                        },
                        success: function () {
                            for (var i = 0; i < id.length; i++) {
                                $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                                $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                                $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                                $("#taskList").load(location.href + " #taskList").style.opacity = opacity + 0.1;
                                setTimeout(fadeIn, 5000);
                            }
                        }
                    });
            }
        } else {
            return false;
        }
    });
});
// ##### Delete Task ID: #taskDelete #####


<!-- ##### Archive Task Archive Ajax ##### -->
$(document).ready(function () {
    $('#submitTaskArchive').click(function () {
        if (confirm("Please confirm the task archive request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });

            let submitTaskArchive = $('#submitTaskArchive').val();
            console.log('id[]: ' + id[0]);
            // console.log('id[] ' + id[1]);
            // confirm("Keep going? ");
            if (id.length === 0) //tell you if the array is empty
            {
                // alert("Please Select at least one checkbox");
            } else {
                // confirm("Not zero checked");
                console.log('before ajax.'),
                    $.ajax({
                        url: 'https://tychen.us/hbdi/scripts/task_menu.php',
                        method: 'POST',
                        data: {
                            submitTaskArchive: submitTaskArchive,
                            id: id
                        },
                        success: function () {
                            for (var i = 0; i < id.length; i++) {
                                $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                                $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                                $('.content-item-wrap#' + id[i] + '').reload('slow');

                            }
                        }
                    });
            }
        } else {
            return false;
        }
    });


});

<!-- ##### End of Archive Task Archive Ajax ##### -->


if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}