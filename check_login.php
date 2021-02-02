<?php
require_once 'google/recaptcha/autoload.php';

$username = $_POST['username'];
$password = $_POST['password'];

// 註冊或查詢你的 API Keys: https://www.google.com/recaptcha/admin
$secret = '6LeTDkUaAAAAAId92_zygI_u6KGoASRqzedtqgw-';//請換成自己申請的private私鑰

if (isset($_POST['g-recaptcha-response'])) {
	if(empty($_POST['g-recaptcha-response'])){
		echo '請勾選我不是機器人!';exit;
	}
	
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	// 確認驗證碼與 IP
	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


	if (!$resp->isSuccess()) {
		echo '驗證碼錯誤!';exit;
	}

}else{
	echo '驗證碼錯誤!';exit;
}

if($username=="test" && $password=="1234"){
	echo "登入成功!"; exit;
}else{
	echo "帳密錯誤!";exit;
}

?>