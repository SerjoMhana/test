<?php




//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
// $subject= $_POST['subject'];
$message= $_POST['message'];
$to ="mghoma99@gmail.com";
$subject = "Mail From Tech spark";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n  Subject = " . $subject ."\r\n message =" . $message;
 $headers = "From: serjomh44@gmail.com" . "\r\n" ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect







































    // use PHPMailer\PHPMailer\PHPMailer;

    // if (isset($_POST['name']) && isset($_POST['email'])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     // $subject = $_POST['subject'];
    //     $body = $_POST['body'];

    //     require_once "PHPMailer/PHPMailer.php";
    //     require_once "PHPMailer/SMTP.php";
    //     require_once "PHPMailer/Exception.php";

    //     $mail = new PHPMailer();

    //     //SMTP Settings
    //     $mail->isSMTP();
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->SMTPAuth = true;
    //     $mail->Username = "serjomh33@gmail.com";
    //     $mail->Password = 'pumowqyjxgcbyeai';
    //     $mail->Port = 465; //587
    //     $mail->SMTPSecure = "ssl"; //tls

    //     //Email Settings
    //     $mail->isHTML(true);
    //     $mail->setFrom($email, $name);
    //     $mail->addAddress("serjomh33@gmail.com");
    //     // $mail->Subject = $subject;
    //     $mail->Body = $body;


    //     $mail->send()

    //     if ($mail->send()) {
    //         $status = "success";
    //         $response = "Email is sent!";
    //     } else {
    //         $status = "failed";
    //         $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    //     }

    //     exit(json_encode(array("status" => $status, "response" => $response)));
    // }
























?>

