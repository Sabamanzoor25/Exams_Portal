<?php
session_start();
include_once '../DB/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['updatedata'])) {
        $id = $_POST['update_id'];
        $dept = $_POST['dept_edit'];
        $batch = $_POST['batch_edit'];
        $semester = $_POST['semester_edit'];
        $std_name = $_POST['std_edit'];

        $query = "UPDATE `exam` SET `Department` = '$dept' , `batch` = '$batch', 
                    `Semester` = '$semester', `Username` = '$std_name'   WHERE `exam`.`ID` = $id";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            

            $_SESSION['update_status'] = "success";
            header('Location: ../main.php');
        } 
        else {
            $_SESSION['update_status'] = 'error';
            echo json_encode(['status' => 'error', 'message' => 'Error updating data. Please try again.']);
     
        }
    }
}
?>