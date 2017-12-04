<?php 
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'cheapoMail';

$name = $_GET['user'];
$pass = hash('sha256',$_GET['pass']);
if($name == 'admin'){
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->query("SELECT * FROM Users WHERE username = '{$name}'");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
     if($row['password'] == $pass){
         session_start();
    echo'<h3> Insert information to add new user</h3>    
        <form action="#" method="get" name="add_form" id="add" class="form_class">
        <strong><label for="firstname">First Name:</label></strong>
        <input type="text" value="" name="firstname" id="firstname"/>
        <br><br>
          <strong><label for="lastname">Last Name:</label></strong>
          <input type="text" value="" name="lastname" id="lastname"/>
          <br><br>
        <strong><label for="username">UserName:</label></strong>
        <input type="text" value="" name="username2" id="user2"/>
        <br><br>
          <strong><label for="password">Password:</label></strong>
          <input type="text" value="" name="passowrd2" id="pass2" required/><br/>
          <br><br>
          <input type="button" name="sub" value="Add" id="btn_add" onclick="add_user()"/>
         </form><br/>
         <input type="button" name="sub" value=Logout id="btn_logout" onclick="logout()"/>
     ';
     }
     else {
         echo 'Username and Password did not match! Please try again<br/>
            <form action="#" method="get" name="search_form" id="search" class="form_class">
            <label>username :</label>
            <input type="text" name="uesername" id="user" /><br/>
            <label>password :</label>
            <input type="text" name="password" id="pass" /><br/>

            <input type="button" name="login" id="btn_search" value="Login" onclick="loginDoc()" />

        </form>';
     }
    }
}
else {
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->query("SELECT * FROM Users WHERE username = '{$name}'");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
        session_start();
     if($row['password'] == $pass){
         session_start();
    echo 'Welcome ' .$name;
     }
     else {
         echo 'Username and Password did not match! Please try again<br/>
            <form action="#" method="get" name="search_form" id="search" class="form_class">
            <label>username :</label>
            <input type="text" name="uesername" id="user" /><br/>
            <label>password :</label>
            <input type="text" name="password" id="pass" /><br/>

            <input type="button" name="login" id="btn_search" value="Login" onclick="loginDoc()" />

        </form>';
     }
    }
}
    // echo '<ul>';
    // foreach ($results as $row) {
    // echo '<li>' . $row['username'] . ' is ruled by ' . $row['password'] . '</li>';
    // }
    // echo '</ul>';
    // echo $pass;