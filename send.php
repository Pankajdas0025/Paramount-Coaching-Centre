<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include PHPMailer library files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
header('Content-Type: text/plain'); // Clean AJAX response
// Database credentials
$host = "localhost";
$dbname = "coaching";
$user = "root";
$pass = "Pankaj#12345";

// Connect using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage();
    exit;
}

// Validation function
function validate_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Handle POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate_input($_POST['name'] ?? '');
    $email = validate_input($_POST['email'] ?? '');
    $phone = validate_input($_POST['telphone'] ?? '');
    $message = validate_input($_POST['message'] ?? '');

    // Validations
    if (!preg_match("/^[a-zA-Z\s]{2,}$/", $name)) {
        echo "❌ Invalid name. Only letters and spaces allowed.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email address.";
        exit;
    }
    if (!preg_match("/^(\+91)?[6-9]\d{9}$/", $phone)) {
        echo "❌ Invalid mobile number.";
        exit;
    }
    if (strlen($message) < 10) {
        echo "❌ Message should be at least 10 characters long.";
        exit;
    }

    // Generate verification code
    $vcode = bin2hex(random_bytes(16));

    // Insert into database
    try {
        $stmt = $pdo->prepare("INSERT INTO data (name, email, phone, message) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $phone, $message])) {
            // PHPMailer setup
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'pd5569121@gmail.com'; // Gmail ID
                $mail->Password = 'carp uidg qexa uvyr';  // Gmail App Password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->CharSet = 'UTF-8';
                $mail->setFrom('pd5569121@gmail.com', 'ABC Coaching Support');
                $mail->addAddress($email); // Fixed variable
                $mail->isHTML(true);
                $mail->Subject = "Email Verification";

                // Email Body (HTML)
                $mail->Body = "
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                </head>
                <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                    <div style='max-width:600px;margin:auto;padding:20px;border-radius:10px;background:#f9f9f9;'>
                        <h2>Hi $name 👋</h2>
                        <p>Thanks for contacting <strong>ABC Coaching Centre</strong>. Please verify your email by clicking the button below:</p>
                        <p style='text-align:center;margin:30px 0;'>
                            <a href='https://blogscriptapp.free.nf/verification?email=$email&vcode=$vcode' style='padding:12px 25px;background:#10b981;color:#fff;text-decoration:none;border-radius:5px;'>✅ Verify My Email</a>
                        </p>
                        <p>If you didn't submit this form, please ignore this email.</p>
                        <hr>
                        <p style='font-size:0.8rem;color:#555;text-align:center;'>&copy; 2025 ABC Coaching Centre</p>
                    </div>
                </body>
                </html>
                ";

                $mail->send();
                echo "✅ Your message has been submitted successfully !";

            } catch (Exception $e) {
                echo "❌ Email could not be sent. Error: {$mail->ErrorInfo}";
            }

        } else {
            echo "❌ Something went wrong. Please try again.";
        }
    } catch (PDOException $e) {
        echo "❌ Database error: " . $e->getMessage();
    }
}
?>
