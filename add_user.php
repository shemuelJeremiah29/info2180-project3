<?php
session_start();
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'cheapoMail';

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$uname = $_GET['user'];
$pass = hash('sha256',$_GET['pass']);
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("INSERT INTO Users VALUES(NULL, :fname, :lname, :uname, :pword)");
    $stmt->execute(array(
    "fname" => $firstname,
    "lname" => $lastname,
    "uname" => $uname,
    "pword" => $pass
));
    // $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $stmt = $conn->query("SELECT * FROM Users");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    echo'User added!';
    echo '<table>
            <tr>
                <th> ID </th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> UserName </th>
            </tr>';
    foreach ($results as $row){
        echo '<tr>
                <td>'. $row['id']. '</td>
                <td>'. $row['firstname']. '</td>
                <td>'. $row['lastname']. '</td>
                <td>'. $row['username']. '</td>
                </tr>';
    } 
    echo '</table><br/>';
    echo 'Do you want to add another user?<br/>';
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
    
    
    ?>