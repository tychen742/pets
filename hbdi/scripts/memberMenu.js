function loadMemberMenuCheck() {
    let checked = false;
    let i;
    let checks = [];
    let text = document.getElementsByName("memberMenuCheck[]");
    for (i = 0; i < text.length; i++) {
        if (text[i].checked) {
            checked = true;
        }
    }
    if (checked) {
        document.getElementById("submitMemberRemove").style.display = "inline-block";
    } else {
        document.getElementById("submitMemberRemove").style.display = "none";
        // return checked;
    }
}


<!-- ### AJAX Add Member/User ### -->
$(document).ready(function () {
    // $('#memberAdd').submit(function () {
    // e.preventDefault();
    //
    // let form = $(this);
    // // let url = 'https://tychen.us/hbdi/scripts/member_menu.php';
    // let url = form.attr('action');
    //
    // // let id = [];
    // // $(':checkbox:checked').each(function (i) {
    // //     id[i] = $(this).val();
    // // });
    //
    // let submitMemberAdd = $('#submitMemberAdd').val();
    //
    // $.ajax({
    //     url: url,
    //     method: 'POST',
    //     submitMemberAdd: submitMemberAdd,
    //     data: form.serialize(),
    //     success: function () {
    //         // for (var i = 0; i < id.length; i++) {
    //             // $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
    //             // $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
    //             // $('.content-item-wrap#' + id[i] + '').fadeIn(1000).show();
    //             $("#memberList").load(location.href + " #memberList");
    //             $("#memberList").load(location.href + " #memberList").css('background-color', '#ccc');
    //         // }
    //     }
    // });
    $('#submitMemberAdd').click(function () {
        if (confirm("Please confirm the team member addition request.")) {

            console.log("add process reached memberMenu.js");

            let id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            let roles = [];

// https://stackoverflow.com/questions/5104373/ajax-call-on-multiple-selection-in-select-box
            $('#role_member_add option').each(function (i) {
                if (this.selected == true) {
                    roles.push(this.value);
                }
            });
            // roles[i] = $(this).val();
            // console.log(id[i] , ' ' , roles[i]);
            // });

            // let role = $("#role_member_add").val();

            let id_project = $("#id_project_member_add").val();

            console.log('id_project_number_add: ', id_project);

            let submitMemberAdd = $("#submitMemberAdd").val();

            $("#role_member_add").prop('selected',false);

            if (id.length === 0) //tell you if the array is empty
            {
                // say something
            } else {
                // confirm("Not zero checked");
                console.log('before ajax @memberMenu.js');
                $.ajax({
                    // url: 'https://tychen.us/hbdi/scripts/member_menu.php',
                    url: 'https://tychen.us/hbdi/scripts/member_menu.php',
                    method: 'POST',
                    data: {
                        submitMemberAdd: submitMemberAdd,
                        id_project: id_project,
                        role_member_add: roles,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc').fadeIn('slow');
                            // $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            $("#memberList").load(location.href + " #memberList");
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
// });
<!-- ### end of AJAX Add Member/User ### -->


<!-- ### AJAX delete user ### -->
$(document).ready(function () {
    $('#submitMemberRemove').click(function () {
        if (confirm("Please confirm the team member removal request.")) {
            let id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            console.log('id[]: ' + id[0]);
            let id_project = $("#id_project_member").val();
            console.log('id_project_number: ', id_project);

            let submitMemberRemove = $("#submitMemberRemove").val();


            if (id.length === 0) //tell you if the array is empty
            {
            } else {
                // confirm("Not zero checked");
                // console.log('before ajax @memberMenu.js');
                $.ajax({
                    url: 'https://tychen.us/hbdi/scripts/member_menu.php',
                    method: 'POST',
                    data: {
                        submitMemberRemove: submitMemberRemove,
                        id_project: id_project,
                        id: id
                    },
                    success: function () {
                        for (var i = 0; i < id.length; i++) {
                            // $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc').fadeIn('slow');
                            $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                            // $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                            // $("#memberList").load(location.href + " #memberList");
                            $("#memberList").load(location.href + " #memberList").fadeIn(1000);
                        }
                    }
                });
            }
        } else {
            return false;
        }
    });
});
<!-- ### end of AJAX delete user ### -->

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}