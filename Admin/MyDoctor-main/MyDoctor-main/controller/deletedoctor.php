<?php
include '../model/db.php';

    $id = $_GET["id"];
    $con = getConnection();
    $sql = "DELETE FROM `doctor` WHERE `id` = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
    $msg = "Doctor with ID $id has been deleted.";
    } else {
    $msg = "Error deleting doctor with ID $id: " . mysqli_error($con);
    }
    header("Location: ../model/doctorlistdb.php?msg=" . urlencode($msg));
    exit();
    ?>