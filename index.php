<?php

setcookie("hint", base64_encode(gzencode("Good work decoding this data, but this is not the content you are looking for.  Take a look at the links in the page, and good luck! -Josh")));

print "
<html>
<head>
<style type=\"text/css\">
h1, p, a {font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;}
body, input{font-family:Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 75%;}

.inputtext { 
width: 160px; 
height: 18px;
border : 1px solid Black;
background-color : #CCCCCC;
color : #0E1930;
font-size : 12px;
font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
font-weight : bold; }
</style>

</head>
";

if (isset($_POST['name'], $_POST['password'])) {
	print "<h1>Login Failed.</h1></body></html>";
	exit;
}

print "
<body>

<form action=\"index.php\" method=\"post\">
<fieldset>
<legend>You are logged in as: guest</legend>
Name: <input type=\"text\" name=\"name\" class=\"inputtext\" /> 
Password: <input type=\"password\" name=\"password\" class=\"inputtext\" />
<input type=\"submit\" value=\"Submit\" />
</fieldset>
</form>
<br />
<p>
<h1>Resources</h1>
</p>

<p>
<ul>
<li><a href=\"Z3Vlc3QK/Droids.wav\">Droids.wav</a></li>
<li><a href=\"Z3Vlc3QK/Friday Meeting Notes.pdf\">Friday Meeting Notes.pdf</a></li>
<li><a href=\"Z3Vlc3QK/Coffee Table Book Proposal.pdf\">Coffee Table Book Proposal.pdf</a></li>
</ul> 

<br />
<p>
Login with your credentials to access your file resources.  For assistance, contact <b>administrator</b>.</p>

</body>
</html>
";
