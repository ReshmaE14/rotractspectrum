<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './phpmailer/PHPMailerAutoload.php';

    // Collect form data and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $mail = new PHPMailer;
        // $mail->SMTPDebug = 3;                              // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.allonsy.in';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'no-reply@allonsy.in';              // SMTP username
        $mail->Password = 'e15dMG9SaF(&';                     // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->setFrom('no-reply@allonsy.in', "CSI St. George's Cathedral");
        $mail->addAddress('merlinchristopher196@gmail.com');  // Add a recipient

        $mail->isHTML(true);
        $mail->Subject = "New Quote Submission || CSI St. George's Cathedral";
        $mail->Body    = "
            <div style='background-color:#121212;color:#ffffff;padding:10px 20px'>
                <div style='max-width: 100%;text-align:center;padding:20px 0;'>
                    <img src='https://newchurch.allonsy.in/images/logo.png' alt='Demo' style='max-width:120px;'>
                </div>
                <h3>Hi <span style='text-transform: capitalize;'>Team</span>,</h3>
                <p>We have received an enquiry from our website. <br> Below are the details:</p>
                <h4><strong>Customer Information:</strong></h4>
                <p>Name: $name</p>
                <p>Email Address: $email</p>
                <p>Phone Number: $phone</p>
                <p>Message:</p>
                <p>$message</p>
                <div style='padding: 20px 0;'>
                    <h4>Best Regards,</h4>
                    <p>Team <a href='#' target='_blank' style='text-decoration: none;font-weight:700'>CSI St. George's Cathedral</a></p>
                </div>
            </div>";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'mail.allonsy.in';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@allonsy.in';
            $mail->Password = 'e15dMG9SaF(&';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('no-reply@allonsy.in', "CSI St. George's Cathedral");
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Acknowledgment of Your Contact Form Submission || CSI St. George\'s Cathedral';
            $mail->Body    = "
                <div style='background-color:#121212;color:#ffffff;padding:10px 20px'>
                    <div style='max-width: 100%;text-align:center;padding:20px 0;'>
                        <img src='https://newchurch.allonsy.in/images/logo.png' alt='Demo' style='max-width:120px;'>
                    </div>
                    <h3>Hi <span style='text-transform: capitalize;'>$name</span>,</h3>
                    <p>Thank you for reaching out to us. Our team will get back to you shortly.</p>
                    <div style='padding: 20px 0;'>
                        <h4>Best Regards,</h4>
                        <p>Team <a href='#' target='_blank' style='text-decoration: none;font-weight:700'>CSI St. George's Cathedral</a></p>
                    </div>
                </div>";

            if (!$mail->send()) {
                echo '<script>
                        window.alert("Thank you for the submission!");
                        setTimeout(function() {
                            window.location.href = "./contact.php";
                        }, 1000); // Delay of 2 seconds
                      </script>';
            } else {
                echo '<script>
                        // window.alert("Submission failed.");
                        setTimeout(function() {
                            window.location.href = "./contact.php";
                        }, 1000);
                      </script>';
            }
        }
    } else {
        echo 'Please fill in all fields correctly.';
    }
}
?>
