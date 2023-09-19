<?php
include 'config.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the contact form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert data into the ContactUs table
    $sql = "INSERT INTO ContactUs (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        // Execute the statement
        if ($stmt->execute()) {
         //   echo "Contact form data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Send an email using SMTP
    include('smtp/PHPMailerAutoload.php');
   
    $to = $email; // Use the email provided in the form
    $msg = $message; // Use the message provided in the form
    
    // Call the smtp_mailer function with form values
    echo smtp_mailer($to, $msg, $name,$subject);
}

// Function to send an email using SMTP
function smtp_mailer($to, $msg, $name,$subject)
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 0;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "hassantalha243@gmail.com";
    $mail->Password = "uatifbuicqwsgsdn";
    $mail->SetFrom("hassantalha243@gmail.com");
    $emailSignature = '
    <p style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Best Regards,</p>
    <p style="font-family: Arial, sans-serif; font-size: 16px; color: #333;"><strong>[Your Name]</strong></p>
    <p style="font-family: Arial, sans-serif; font-size: 14px; color: #777;">Nikamy_Numlians</p>';
$mail->Body = "Dear <b>$name</b>,<br><br>" . $emailSignature;

    $mail->Subject = "Thank You for Reaching Out";
    $mail->Body = "Dear <b>[$name]</b>,<br>
    Thank you for reaching out to us!<br> We've received your message and appreciate the time you took to contact us. Our team will review your message and get back to you as soon as possible.
    In the meantime,if you have any urgent questions or concerns, please don't hesitate to contact us at <b>Hassantalha809@gmail.com or +92-316-5218752<b>S<br>
    Once again, thank you for choosing us. We look forward to assisting you.
    Best regards,<br>
    <b>Nikamy_Numlians<b>" . $emailSignature;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        //echo "Mail sent successfully";
    }
    // ...

if (!$mail->Send()) {
    echo $mail->ErrorInfo;
} else {
    // Email sent successfully, now redirect to index.php
    header("Location: ../index.php");
    exit(); // Make sure to exit to prevent further execution
}

}
?>
