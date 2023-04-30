<?php
include '../model/usermodel.php';
$email = $_POST['email'];
$con = getConnection();
$sql = "SELECT * FROM admin WHERE email = '$email'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $new_password = substr(md5(rand()), 0, 8);
    $sql = "UPDATE admin SET password = '$new_password' WHERE email = '$email'";
    $con->query($sql);

    $to = $email;
    $subject = 'New Password';
    $message = 'Your new password is: ' . $new_password;
    $headers = 'From: your_email@example.com' . "\r\n" .
               'Reply-To: your_email@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $response = array('success' => true, 'message' => 'A new password has been sent to your email.');
    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Email not found in database.');
    echo json_encode($response);
}

mysqli_close($con);

?>
