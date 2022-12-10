<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.alert {
  padding: 20px;
  background-color: #249225;
  color: white;
  z-index: -2;
  margin-top: 20px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

<?php
    require 'connection.php';
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure ="tls";
        $mail->Port = "587";
        $mail->Username = "keyanschoolpurposes@gmail.com";
        $mail->Password = "mfrjlkptujyhepwj";
       
        $mail->setFrom("keyanschoolpurposes@gmail.com", "Overseer");
        $mail->isHTML(true);
    
        $mail->addAddress($_POST["email"]);
        $mail->Subject = "Welcome!";
        $mail->Body = "Thank you for subscribing to our newsletter. We have so many things to share with you.";

        if( $mail->send()){
                $email = $_POST["email"];
            
                $sql = "INSERT INTO subscribers(id, email) VALUES('', '$email')";
                $res = mysqli_query($con, $sql);
                
                echo "You have successfully subscribed to our newsletter.";           
            }else{   
            echo "Error getting email address.";
        }

      
    ?>
  </div>
</body>
</html>
    
    
