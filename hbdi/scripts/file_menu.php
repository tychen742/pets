<?php
include_once("../includes/topnav.php");
include_once("../scripts/utilities.php");
$root_path = 'https://tychen.us/hbdi';

$ip = new Get_IP_Address();
$ip_address = $ip->getRealIpAddr();;


//<!-- ##### begin file modal File Upload PHP processing -->
error_log("reached file_menu.php from file upload modals.php", 0);
//if ((isset($_POST['submitFileUpload'])) && ($_POST['submitFileUpload'] == 'submitFileUpload')) {
// ##### ##### problem submitting to this from modal and had to use JS onclick for this submission. Strange.
if (isset($_POST['submitFileUpload'])) {
    error_log("Got into file_menu.php", 0);

    $id_project = $_POST['id_project'];
    $data = $pdo->query(" SELECT title_project_short FROM projects  WHERE id_project = '$id_project' ")->fetch();
    $title_project_short = $data['title_project_short'];
//    $title_project_short = $_POST['title_project_short'];
    error_log("TPS: $title_project_short", 0);

    $username_hbdi = $_POST['username_hbdi'];
    error_log("username_hbdi: $username_hbdi", 0);
    $compliance = (isset($_POST['compliance'])) ? ($_POST['compliance']) : null;

    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/hbdi/projects/' . $username_hbdi . '/' . $title_project_short . '_files';
    $file_name = basename($_FILES["userfile"]["name"]);
    $target_file = $target_dir . "/" . $file_name;
    $uploadOk = 1;


    // ##### Check file existence, size, special characters in filename #####
    // Check if file already exists
    if (file_exists($target_file)) {
//        echo " <script>
//        showMessage('File already exists. <br> Please choose another file... ');
//        </script> ";
        error_log("Target File $target_file already exists.", 0);
        echo "
        <script> alert(' A file with the same name already exists in this project. Please try again.'); </script>
        ";
        $uploadOk = 0;
    } elseif ($_FILES["userfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
//    else {
//        $file2 = preg_replace("/[^ \w-_.()]/", "_", $file_test);
//        if ($file_test != $file2) {
//            echo "Please do not use space or special characters (\"-\", \"_\", \".\", and \"()\" are okay) in a file name. <br>";
//            echo "Redirecting you to the Project page... <br>";
//            echo "<meta http-equiv=REFRESH CONTENT=5;url=$root_path/projects/" . $username_hbdi . "/" . $tps . ".php>";
//        }
//    }

// ##### uploadOK ==> insert DB #####
    if ($uploadOk == 0) {
        echo "File not uploaded.";
    } elseif ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
            echo "
            <script>
            let text = 'The file " . basename($_FILES["userfile"]["name"]) . " has been successfully uploaded.';
            showMessage(text);
            </script>
            ";

            $id_creator = $pdo->query(" SELECT id_creator FROM projects WHERE id_project = '$id_project' ")->fetch();
            $id_creator = $id_creator['id_creator'];
            $username_hbdi_project = $pdo->query(" SELECT username FROM user WHERE id_user = $id_creator ")->fetch();
            $username_hbdi_project = $username_hbdi_project['username'];
            $date_uploaded = time();
            $token_passing = strval($uid_hbdi) . '_' . strval(time());

            $sql = $pdo->prepare("
INSERT INTO files (id_project, uploaded_by, name_file, date_uploaded, token_passing)
VALUES('$id_project', '$uid_hbdi', '$file_name', '$date_uploaded', '$token_passing') ");
            if ($sql->execute()) {
                error_log("file uploaded and metadata insertion successful.", 0);

                // ##### inserting compliance data to permission_store #####
                $stmt = $pdo->query("
SELECT id_file
FROM  files
WHERE token_passing = '$token_passing'
ORDER BY id_file DESC LIMIT 1");
                $id_file = $stmt->fetch();
                $id_file = $id_file['id_file'];
                error_log("id_file: $id_file");
                if ($compliance != null) {
                    foreach ($compliance as $compliance_data) {
                        error_log("compliance data: $compliance_data");
                        if (($compliance_data == 'dataset') || ($compliance_data == 'document')) {
                            $sql = "UPDATE files SET file_type = '$compliance_data' WHERE id_file = '$id_file'";
                            $pdo->prepare($sql)->execute();
                        } else {
                            $sql = "INSERT INTO permission_store (id_project, id_user, id_file, permission) VALUES ('$id_project', '$uid_hbdi', '$id_file' , '$compliance_data') ";
                            $pdo->prepare($sql)->execute();
                        }
                    }
                    error_log('compliance data inserted into permission_store');
                }
                // ##### end of inserting compliance data to permission_store #####

                error_log("Successful inserting file information into the database.", 0);
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$root_path/projects/$username_hbdi_project/$title_project_short.php>";
                exit();
            } else {
                echo "Error inserting file information into the database. <br >
                                      File upload is successful, though. <br>
                                      Redirecting to the Project page.";
                error_log('project_view.php: file uploaded but error inserting file metadata to DB.', 0);
                // TODO: need previoius_url because project/dashboard/files will all call this
                echo "<meta http-equiv=REFRESH CONTENT=5;url=$root_path/projects/$username_hbdi_project/$title_project_short.php>";
                exit();
            }
        } else {
            // file upload failed
        }
    }
    unset($_POST['submitFileUpload']);
}
//<!-- ##### end of File Upload Modal PHP processing ##### -->


// ##### file Delete File #####
if ((isset($_POST['submitFileDelete'])) && ($_POST['submitFileDelete'] == 'submitFileDelete')) {
    error_log('submitted to delete file from project_view.php', 0);

    if (!isset($_POST['id'])) {
        error_log('checkbox not passed', 0);
    } else {
        $fileChecked = $_POST['id'];

        foreach ($fileChecked as $id_file) {

            $stmt = $pdo->query("SELECT id_project, name_file FROM files WHERE id_file = '$id_file'");
            $result = $stmt->fetch();
            $filename = $result['name_file'];
            $id_project = $result['id_project'];

//            $stmt = $pdo->query("DELETE FROM permission_store WHERE id_file = '$id_file'");
//            $stmt->execute();

            // ##### delete file
            $stmt = $pdo->query("SELECT title_project_short FROM projects WHERE id_project = '$id_project'");
            $result = $stmt->fetch();
            $tps = $result['title_project_short'];
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/hbdi/projects/' . $username_hbdi . '/' . $tps . '_files';
            $target_file = $target_dir . '/' . $filename;
            if (file_exists($target_file)) {
                unlink($target_file);

                // ### mark file as deleted
                try {
                    // TODO: design file purge
                    $stmt = $pdo->prepare(" UPDATE files SET date_deleted = now() WHERE (id_file = '$id_file' AND id_project = '$id_project') ");
                    $stmt->execute();
                    error_log('file mark as deleted in DB. file_menu.php', 0);
                } catch (PDOException $exception) {
                    echo $exception->getMessage();
                    echo "OOPS Delete!";
                }

                $transaction = $pdo->prepare(" INSERT INTO transaction_store (id_user, ip_address, transaction_type, id_file) VALUES ('$uid_hbdi', '$ip_address', 'delete', '$id_file') ");
                $transaction->execute();
            } else {
                $stmt = $pdo->prepare(" DELETE FROM transaction_store WHERE id_file = '$id_file' ");
                $stmt->execute();
                $stmt = $pdo->prepare(" DELETE FROM files WHERE id_file = '$id_file' ");
                $stmt->execute();
                error_log("file record deleted from DB @ file_menu.php");
            }


//            TODO: double check file deleted in directory


        }
    }
}
//<!--// ##### end of file Delete file #####-->


try {
    $sql = " SELECT title_project_short FROM projects WHERE id_project = '$id_project' ";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        $title_project_short = $row['title_project_short'];
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

if (isset($previous_url)) {

    echo "<meta http-equiv=REFRESH CONTENT=1;url=$previous_url>";
} else {

    echo "<meta http-equiv=REFRESH CONTENT=1;url=$root_path/projects/$username_hbdi/$title_project_short.php>";
}
?>