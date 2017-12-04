<?php
session_start();
$name = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>

<head>
    <link rel=stylesheet type="text/css" href="homepage.css">
    <!-- the prototype import wasn't working for some reason and just froze up the page -->
    <script type="text/javascript" src="homepage.js?v=10"></script>
    <title>Cheapo Mail</title>
</head>

<body background="lights.jpg">
    <strong><h1>Welcome to CheapoMail</h1></strong>
    <hr>
    <input type="button" name="sub" value=Logout id="btn_logout" onclick="logout()"/>
    <br><br>
    <div id="menubar">
        <button class="dobutton" id="Compose"><div class= "menu_options">Compose</div></button>
        <button class="dobutton" id="Inbox"><div class= "menu_options">Inbox</div></button>
        <button class="dobutton" id="People"><div class= "menu_options">People</div></button>
        



        <hr>
    </div>
    <div id="pagecontent">
    Welcome <?php print_r($name); ?>!
    </div>

</body>

</html>