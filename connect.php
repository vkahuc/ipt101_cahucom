<html>
<head>
<body>
    <h1>Hello <?php echo $_POST['fName'];?>&nbsp<?php echo $_POST['lName'];?></h1>
    <h1>Your email is <?php echo $_POST['email']?></h1>
    <h3>Your password has <?php echo strlen($_POST['pwd']);?> Character(s)</h3>
    <h3><?php
        if($_POST['pwd'] == $_POST['cPwd']) {
            echo "Your password is equal to confirm password";
        }
        else {
            echo "Your password is not match to confirm password";
        }
    ?></h3>
</body>
</head>
</html>