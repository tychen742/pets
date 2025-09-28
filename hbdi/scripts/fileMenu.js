// ##### Add File; ID: #fileAdd #####
$(document).ready(function () {
    $('#submitFileUploadXXXXX').on('click', function () {

        var file_data = $('#userfile').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        let submitFileUpload = $('#submitFileUpload').val();
        // alert(form_data);
        $.ajax({
            url: 'https://tychen.us/hbdi/scripts/file_menu.php', // point to server-side PHP script
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            // submitFileUpload: submitFileUpload,
            data: form_data,
            method: 'post',
            success: function () {
                // alert(); // display response from the PHP script, if any
            }
        });
    });
});
// ##### Add File; ID: #fileAdd #####


// ##### Delete File ID: #fileDelete #####
$(document).ready(function () {
    $('#fileDelete').click(function () {
        if (confirm("Please confirm the file deletion request.")) {
            var id = [];
            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            console.log('id[]: ' + id[0]);
            let submitFileDelete = ('#submitFileDelete').val();
            // console.log('id[]: ' + id[1]);
            // confirm("Keep going? ");
            if (id.length === 0) //tell you if the array is empty
            {
                // alert("Please Select at least one checkbox");
            } else {
                // confirm("Not zero checked");
                console.log('before ajax.'),
                    $.ajax({
                        url: 'https://tychen.us/hbdi/scripts/file_menu.php',
                        method: 'POST',
                        data: {
                            submitFileDelete: submitFileDelete,
                            id: id
                        },
                        success: function () {
                            for (var i = 0; i < id.length; i++) {
                                $('.content-item-wrap#' + id[i] + '').css('background-color', '#ccc');
                                $('.content-item-wrap#' + id[i] + '').fadeOut('slow');
                                $('.content-item-wrap#' + id[i] + '').fadeIn('slow');
                                $("#fileList").load(location.href + " #fileList").fadeIn('slow');

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