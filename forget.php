<?php
<?php
require 'config.php';
  require_once 'mail.php';
if(isset($_POST['envoyer'])){
    $emailm=$_POST['email'];
    $result = mysqli_query($conn, "SELECT password FROM registration WHERE email = '$emailm'");
    $row = mysqli_fetch_assoc($result);
    $password = $row['password'];
    $mail->setFrom('llllmmm498@gmail.com', 'Para');
    $mail->addAddress($emailm);

    $mail->Subject = 'your password is ';
    $mail->Body = 'Votre mot de passe est ' .$password;
    $mail->send();
} ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type=email] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input[type=email]:focus {
            outline: none;
            border-color: #4CAF50;
        }
        .form-group button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-group button[type=submit]:hover {
            background-color: #3e8e41;
        }
        .form-group button[type=submit]:focus {
            outline: none;
        }
        .form-group .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <button type="submit" name="envoyer">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>

