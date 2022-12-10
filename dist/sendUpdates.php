<?php
    require 'connection.php';
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


$result = mysqli_query($con, "SELECT * FROM subscribers");
while ($row = mysqli_fetch_object($result))
{
	
	$mail = new PHPMailer(true);

	try {
	    $mail->SMTPDebug = 0;                    
		$mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure ="tls";
        $mail->Port = "587";
        $mail->Username = "keyanschoolpurposes@gmail.com";
        $mail->Password = "mfrjlkptujyhepwj";

	    $mail->setFrom("keyanschoolpurposes@gmail.com", "Overseer");
	    $mail->addAddress($row->email);     
	

	    $mail->isHTML(true);                                 
	    $mail->Subject = 'Newsletter Issue No. 1';
	    $mail->Body    = '<b> Farming & Conservation: A Perfect Mix</b>
        <p> Land preservation simply means restricting the uses of a property over a long time. 
            The uses are limited when private property is acquired in a fee simple transaction by a
            government agency, such as land for a county park, or by a qualified nonprofit organization,
            such as land for a nature preserve.</p>';
	

	    $mail->send();
	    echo 'Message has been sent to ' . $row->email .;
	} catch (Exception $exception) {
	    echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
	}
}