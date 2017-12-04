window.onload=function(){
	document.getElementById("Compose").onclick= compose_message;
	
}


function compose_message(){
	console.log("The on click works");
	var compose_panel=[
		'<div id ="compose_window">',
		'<div id="new_message">',
		'<div id="header"><strong> New Message </strong></div>',
		'</div>',
		'<form>',
		'<fieldset>',
		'<strong>To</strong><br> <input type="text" id ="recipient" name="recipient" class="textfield"> <br>',
		'<strong>Subject</strong><br> <input type="text" id="subject" name="subject" class="textfield"> <br><br>',
		'<strong>Message</strong><br> <textarea  id = "message_content" name="message_content" cols="40" rows="5"></textarea> <br>',
		'<button id="Send"> <strong> Send </strong> </button>',
		'</fieldset>',
		'</form>',
		'</div>',
		'<div id="Response"></div>',

	].join('');
	document.getElementById("pagecontent").innerHTML= compose_panel; 
	var recep= document.getElementById("recipient"); 
	var subject= document.getElementById('subject'); 
	var message_content= document.getElementById("message_content"); 
	document.getElementById("Send").onclick= insert_data; 

}
