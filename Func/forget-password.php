<?php include "./php_actions/insert-signin.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
</head>

<body>

    <?php include "_header.php" ?>

    <div class="verify">
        <?php if (isset($_SESSION['reset-msg']))
            echo $_SESSION['reset-msg'];
            unset($_SESSION['reset-msg']);
        ?>
    </div>

    <div class="signin-container">
        <h2 class=" x">Forget Password</h2>

        <div class="forms-body">
            <form action="" method="post" class="login-form">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>"><br>

                <input type="submit" name="reset-pass-submit" value="Send Mail" class="sub"><br>
            </form>
        </div>
    </div>

    <?php include "_footer.php" ?>
</body>

</html>