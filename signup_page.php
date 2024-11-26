<!DOCTYPE html>
<html>
<head>
    <title>Camping4You- Sign Up</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <header>
        <h1>Camping4You</h1>
    </header>
    <main>
        <div>
            <a href="cart_mainpage.php">Shopping</a>
            <a href="index.php">Home</a>
        </div>
        <hl>Account Sign Up</h1>
        <form action="display_accountinfo.php" method="post">
        
        <fieldset>
        <legend>Account Information</legend>
            <label>Name:</label>
            <input type="text" name="name" value="" class="textbox">
            <br>

            <label>E-Mail:</label>
            <input type="text" name="email" value="" class="textbox">
            <br>

            <label>Phone Number:</label>
            <input type="text" name="phone" value="" class="textbox">
            <br>

            <label>Username</label>
            <input type="text" name="usrname" value="" class="textbox">
            <br>
            <label>Password:</label>
            <input type="password" name="password" value="" class="textbox">
            <br>
            <label>Re-enter Password:</label>
            <input type="password" name="repassword" value="" class="textbox">
        </fieldset>

        <fieldset>
        <legend>Additional Info</legend>

        <p>Choose How Much Camping Experience You Have: </p>

        <input type="radio" name="camping_experience" value="beginner">
        Beginner Camper<br>
        <input type="radio" name="camping_experience" value="intermediate"> 
        Intermediate Camper<br>
        <input type="radio" name="camping_experience" value="pro"> 
        Camping Pro<br>

        <p>What would you like to be informed about?</p>

        <input type="checkbox" name="info[]" value="new_products"> 
        Inform me of new products!<br>
        <input type="checkbox" name="info[]" value="promotions"> 
        Inform me of any new promotions!<br>
        <input type="checkbox" name="info[]" value="site_updates"> 
        Inform me of updates to the website!<br>

        <p>What's your favorite camping activity?</p>

        <select name="fav_activity">
            <option value= "hiking">Hiking</option>
            <option value= "canoeing">Canoeing</option>
            <option value= "mclimbing">Mountain Climbing</option>
            <option value= "none" selected>None</option>
        </select>

        <p>Profile Info</p>

        <textarea name="profile_info" rows= "5" cols= "50">
            Tell us about you!
        </textarea>
        </fieldset>

        <input type="submit" value="Submit">
        <br>

        </form>
    </main>
</body>