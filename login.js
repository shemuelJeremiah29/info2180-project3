window.onload = function() {

}

function loginDoc() {
    var username = document.getElementById("user").value;
    console.log(username);
    var password = document.getElementById("pass").value;
    console.log(password);


    var url;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("login").innerHTML =
                this.responseText;
        }

    };


    // url = "login.php?user=" + username + "&pass=" + password;
    // console.log(url);


    xmlhttp.open("POST", "login.php", true);
    xmlhttp.send();

}

function add_user() {
    var firstname = document.getElementById("firstname").value;  
    console.log(username);
    var lastname = document.getElementById("lastname").value;
    console.log(password);
    var username = document.getElementById("user2").value;
    console.log(username);
    var password = document.getElementById("pass2").value;
    console.log(password);
    var passtest = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})/;
    if (!(passtest.test(password))) {
        alert("Password not valid");
        return false;
    }
    
   
    var url;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("login").innerHTML =
                this.responseText;
        }

    };


    // url = "add_user.php?firstname=" + firstname + "&lastname=" + lastname + "&user=" + username + "&pass=" + password;
    // console.log(url);


    xmlhttp.open("POST", "login.php", true);
    xmlhttp.send();

}

function logout() {

    var url;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("login").innerHTML =
                this.responseText;
        }

    };


    // url = "logout.php?";
    // console.log(url);


    xmlhttp.open("POST", "logout.php", true);
    xmlhttp.send();

}

function clearTags(text) {
    var txt = text;
    var rex = /(<([^>]+)>)/ig;
    return txt.replace(rex, "  ");

}
