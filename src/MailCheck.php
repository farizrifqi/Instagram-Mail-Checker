<?php
require'Instagram.php';
function checking($email, $password, $devid, $ua, $key){
	$email=trim($email);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$login = proccess(1, $ua, 'accounts/login/', 0, hook('{"device_id":"'.$devid.'","guid":"'.generate_guid().'","username":"'.trim($email).'","password":"'.$password.'","Content-Type":"application/x-www-form-urlencoded; charset=UTF-8"}'));
		$data = json_decode($login[1]);
		if ($data->message != "The username you entered doesn't appear to belong to an account. Please check your username and try again."){
			echo " ".$key." => OK | ".$email. "\n";
		}else{
			echo " ".$key." => BAD | ".$email. "\n";
		}
	}else{
		echo  " ".$key." => BAD | ".$email. " | WRONG MAIL\n";
	}
}
function check($listmail){
	$mailpass = file_get_contents($listmail, FILE_APPEND);
	if (!empty($mailpass)){
		$lm = array_unique(explode("\n", $mailpass));
		$ua = generate_useragent();
		$devid = generate_device_id();
		$count = count($lm);
		$password = "asdBEBAS_AJA342fsdf";
		echo "\n\n.: Checking totals ".$count." emails :.\n\n";
		foreach($lm as $keys => $email){
			$key = $keys+1;
			checking($email, $password, $devid, $ua, $key);
		}
	}else{
		echo "--- INVALID PARAMETERS ---\n Gunakan:\n php Run.php <nama file txt>\n";
		exit;
	}
	}
?>
