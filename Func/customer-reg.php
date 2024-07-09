<?php include "./php_actions/insert-customer-reg.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Sign Up</title>
</head>

<body>
    <?php include "_header.php" ?>

    <div class="container customer-container">

        <form action="" method="post" class="box">
            <h2>Create Your Ecommerce Account</h2><br>

            <div class="top">

                <div class="left">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"
                        value="<?php if (isset($username)) echo $username; ?>"><br>
                    <div class="msg username-msg">
                        <?php
                        if (isset($error['userErr']))
                            echo $error['userErr'];
                        ?>
                    </div>

                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword"><br>
                    <div class="msg cpass-msg">
                        <?php
                        if (isset($error['cpassErr']))
                            echo $error['cpassErr'];
                        ?>
                    </div>

                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php if (isset($fname)) echo $fname; ?>"><br>
                    <div class="msg fname-msg">
                        <?php
                        if (isset($error['fnameErr']))
                            echo $error['fnameErr'];
                        ?>
                    </div>
                </div>

                <div class="right">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"><br>
                    <div class="msg pass-msg">
                        <?php
                        if (isset($error['passErr']))
                            echo $error['passErr'];
                        ?>
                    </div>

                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>"><br>
                    <div class="msg email-msg">
                        <?php
                        if (isset($error['emailErr']))
                            echo $error['emailErr'];
                        ?>
                    </div>

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php if (isset($lname)) echo $lname; ?>"><br>
                    <div class="msg lname-msg">
                        <?php
                        if (isset($error['lnameErr']))
                            echo $error['lnameErr'];
                        ?>
                    </div>
                </div>
            </div>


            <div class="bot">

                <div class="dob">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob"
                        value="<?php if (isset($dob_persistence)) echo $dob_persistence; ?>"><br>
                    <div class="msg dob-msg">
                        <?php
                        if (isset($error['dobErr']))
                            echo $error['dobErr'];
                        ?>
                    </div>
                </div>


                <div class="gen">
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="male" id="male"
                        <?php if (isset($gender) && $gender == "male") echo "checked" ?>>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female"
                        <?php if (isset($gender) && $gender == "female") echo "checked" ?>>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="other" id="other"
                        <?php if (isset($gender) && $gender == "other") echo "checked" ?>>
                    <label for="other">Other</label>

                    <div class="msg gender-msg">
                        <?php
                        if (isset($error['genderErr']))
                            echo $error['genderErr'];
                        ?> </div>
                </div>

                <div class="tc">
                    <input type="checkbox" name="terms" value="terms" id="terms"
                        <?php if (isset($terms) && $terms == "terms") echo "checked" ?>>
                    <label for="terms">I agree terms and condition</label>
                    <div class="msg terms-msg">
                        <?php
                        if (isset($error['termsErr']))
                            echo $error['termsErr'];
                        ?>
                    </div>
                </div>

                <input type="submit" name="submit" value="Create Account" class="sub">
            </div>
        </form>
    </div>

    <?php include "_footer.php" ?>
</body>

</html>