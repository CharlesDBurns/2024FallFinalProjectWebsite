<?php
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone');
    $username = filter_input(INPUT_POST, 'usrname');

    $camping_experience = filter_input(INPUT_POST, 'camping_experience');
    if ($camping_experience === NULL) {
        $camping_experience = 'Unknown';
    }

    $fav_activity = filter_input(INPUT_POST, 'fav_activity');

    $profile_info = filter_input(INPUT_POST, 'profile_info');
    $profile_info = htmlspecialchars($profile_info);
    $profile_info = nl2br($profile_info, FALSE);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Camping4You- Account Information</title>
</head>
<body>
    <header>
        <h1>Camping4You</h1>
    </header>
    <main>
        <h1>Account Information</h1>

        <label>Name: </label>
        <span><?php echo htmlspecialchars($name); ?></span><br>

        <label>Email Address: </label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Phone Number: </label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Username: </label>
        <span><?php echo htmlspecialchars($username); ?></span><br>

        <label>Password: </label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Level of Camping Experience: </label>
        <span><?php echo htmlspecialchars($camping_experience); ?></span><br>

        <label>Favorite Camping Activity: </label>
        <span><?php echo htmlspecialchars($fav_activity); ?></span><br>

        <label>Information Requested: </label>
        <?php $info = filter_input(INPUT_POST, 'info',
                    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                if ($info !== NULL) {
                    foreach($info as $key => $value) {
                        echo $key + 1 . '. ' . $value . '<br>';
                    }
                } else {
                    echo 'No Information Requested.';
                }
        ?>

        <span>Profile Info: </span><br>
        <span><?php echo $profile_info; ?></span><br>

        <a href="index.php">Back to Home Page</a>

        <p>&nbsp;</p>
    </main>
</body>