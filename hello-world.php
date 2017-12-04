<?php 
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'cheapoMail';

$username = $_POST['user'];
$password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
echo $password;
if ($username == 'admin' ){
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->query("SELECT username,password FROM Users WHERE username LIKE '%$username%'");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    // if($row['username'] == $username && $row['password'] == $password){
    // echo'<h3> Insert information to add information</h3>';    
    // echo '<form>';
    // echo '<strong><label for="username">UserName:</label></strong>';
    // echo  '<input type="text" value="" name="username" id="user"/>';
    // echo  '<br><br>';
    //       <strong><label for="password">Password:</label></strong>
    //       <input type="password" value="" name="passowrd" id="pass" required/><br/>
    //       <br><br>
    //       <input type="button" name="sub" value="login" id="log" onclick="login()"/>
    //      </form>
    // }
    //echo '<ul>';
    // foreach ($results as $row) {
    // echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    // }
    // echo '</ul>';
}