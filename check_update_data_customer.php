<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	header('Content-Type: text/html; charset=utf-8');
	$serverName = "localhost";
	$userName = "fsoftpro_pan";
	$userPass = "eiK2cW5qk";
	$dbName = "fsoftpro_pan";
  	$mysqli = new mysqli($serverName, $userName, $userPass, $dbName);
	$mysqli->set_charset("utf8");
  	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	$url = "http://www.pan-sportswear.com/TH/api.php?func=mb";
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result = curl_exec($ch);
    curl_close($ch);

    function token($length = 32) {
		// Create random token
		$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		
		$max = strlen($string) - 1;
		
		$token = '';
		
		for ($i = 0; $i < $length; $i++) {
			$token .= $string[mt_rand(0, $max)];
		}	
		
		return $token;
	}
	$result = utf8_encode( $result );
	$result_json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/','', $result), true );
	// var_dump($result_json);
	foreach($result_json as $key => $val){
		$salt = token(9);
		$sql = "INSERT INTO oc_customer SET 
		customer_group_id = '1', 
		firstname = '" . $val['fistname'] . "', 
		lastname = '" . $val['lastname'] . "', 
		email = '" . $val['email'] . "', 
		telephone = '" . $val['mobile'] . "', 
		custom_field = '" . json_encode(array()) . "', 
		newsletter = '1', 
		salt = '" . $salt . "', 
		password = '" . sha1($salt . sha1($salt . sha1($val['password']))) . "', 
		status = '1', 
		safe = '0', 
		date_added = NOW()";
		// echo $sql."<br>";
		$query 		= $mysqli->query($sql);
	}

	// foreach($result_json as $key => $val){
	// 	$sql = "SELECT * FROM oc_product where ref_product_id = '".$val['product_id']."' and ref_product_id is not null";
	// 	$query 		= $mysqli->query($sql);
	// 	$num_rows 	= $query->num_rows;

	// 	if($num_rows==0){
	// 		$sql = "INSERT INTO oc_product (
	// 			`ref_product_id`,
	// 			`image`,
	// 			`model`,
	// 			`price`,
	// 			`code`,
	// 			`quantity`,
	// 			`stock_status_id`,
	// 			`shipping`,
	// 			`date_available`,
	// 			`weight_class_id`,
	// 			`length_class_id`,
	// 			`subtract`,
	// 			`minimum`,
	// 			`sort_order`,
	// 			`status`,
	// 			`date_added`,
	// 			`date_modified`
	// 		) VALUES (
	// 			'".$val['product_id']."',
	// 			'catalog/product_ow/".$val['pic1']."',
	// 			'".$val['model_name']."',
	// 			'".$val['price']."',
	// 			'".$val['code']."',
	// 			'100',
	// 			'6',
	// 			'1',
	// 			'2018-06-15',
	// 			'1',
	// 			'1',
	// 			'1',
	// 			'1',
	// 			'1',
	// 			'1',
	// 			'2018-04-24 11:44:50',
	// 			'2018-04-24 11:44:50'
	// 		)";
	// 		$query 		= $mysqli->query($sql);
	// 		$lastinset = $mysqli->insert_id;

	// 		$sql_product_description = "INSERT INTO oc_product_description (
	// 			`product_id`,
	// 			`language_id`,
	// 			`name`,
	// 			`description`,
	// 			`meta_title`,
	// 			`meta_description`,
	// 			`meta_keyword`
	// 		) VALUES (
	// 			'".$val['product_id']."',
	// 			'1',
	// 			'".$val['model_name']."',
	// 			'".htmlentities($val['detail'])."',
	// 			'".$val['title']."',
	// 			'".$val['description']."',
	// 			'".$val['keyword']."'
	// 		)";
	// 		$query 		= $mysqli->query($sql_product_description);
	// 		$sql_product_description_2 = "INSERT INTO oc_product_description (
	// 			`product_id`,
	// 			`language_id`,
	// 			`name`,
	// 			`description`,
	// 			`meta_title`,
	// 			`meta_description`,
	// 			`meta_keyword`
	// 		) VALUES (
	// 			'".$val['product_id']."',
	// 			'2',
	// 			'".$val['model_name']."',
	// 			'".htmlentities($val['detail'])."',
	// 			'".$val['title']."',
	// 			'".$val['description']."',
	// 			'".$val['keyword']."'
	// 		)";
	// 		$query 		= $mysqli->query($sql_product_description_2);

	// 		if(!empty($val['pic2'])){
	// 			$sql_image = "INSERT INTO oc_product_image (
	// 				`product_id`,
	// 				`image`
	// 			) VALUES (
	// 				'".$lastinset."',
	// 				'catalog/product_ow/".$val['pic2']."'
	// 			)";
	// 			$mysqli->query($sql_image);
	// 		}
	// 		if(!empty($val['pic3'])){
	// 			$sql_image = "INSERT INTO oc_product_image (
	// 				`product_id`,
	// 				`image`
	// 			) VALUES (
	// 				'".$lastinset."',
	// 				'catalog/product_ow/".$val['pic3']."'
	// 			)";
	// 			$mysqli->query($sql_image);
	// 		}
	// 		if(!empty($val['pic4'])){
	// 			$sql_image = "INSERT INTO oc_product_image (
	// 				`product_id`,
	// 				`image`
	// 			) VALUES (
	// 				'".$lastinset."',
	// 				'catalog/product_ow/".$val['pic4']."'
	// 			)";
	// 			$mysqli->query($sql_image);
	// 		}
	// 		if(!empty($val['pic5'])){
	// 			$sql_image = "INSERT INTO oc_product_image (
	// 				`product_id`,
	// 				`image`
	// 			) VALUES (
	// 				'".$lastinset."',
	// 				'catalog/product_ow/".$val['pic5']."'
	// 			)";
	// 			$mysqli->query($sql_image);
	// 		}
	// 		if(!empty($val['pic6'])){
	// 			$sql_image = "INSERT INTO oc_product_image (
	// 				`product_id`,
	// 				`image`
	// 			) VALUES (
	// 				'".$lastinset."',
	// 				'catalog/product_ow/".$val['pic6']."'
	// 			)";
	// 			$mysqli->query($sql_image);
	// 		}
	// 	}else{

	// 		$sql = "UPDATE oc_product SET (
	// 			`ref_product_id`='".$val['product_id']."' ,
	// 			`image`='".$val['pic1']."',
	// 			`model`='".$val['model_name']."',
	// 			`price='".$val['price']."',
	// 			`code`='".$val['code']."' ) 
	// 			WHERE ref_product_id = '".$val['product_id'];
	// 		$query 		= $mysqli->query($sql);
	// 	}
	// }
	$mysqli->close();
?>