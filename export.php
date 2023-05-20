<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		require_once 'config.php';

		$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		/* check connection */
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		if (!$mysqli->set_charset("utf8")) {
		    printf("Error loading character set utf8: %s\n", $mysqli->error);
		    exit();
		}

		$csv_export = "Email\tPhone\tName\tBirthDay\r\n";

		$sql = "SELECT * FROM " . DB_PREFIX . "customer WHERE status = 1 AND safe = 0";
		$query = $mysqli->query($sql);
		while($result = $query->fetch_array(MYSQLI_ASSOC)) {
			$temp = json_decode($result['custom_field'], true);
			if (isset($temp[3])&&!empty($temp[3])) {
				$csv_export .= $result['email']."\t";
				$csv_export .= str_replace(',', ' ', $result['telephone'])."\t";
				$csv_export .= $result['firstname'].' '.$result['lastname']."\t";
				$csv_export .= date('d-m-Y', strtotime($temp[3]));
				$csv_export .= "\r\n";

			}
			
		}

$csv_filename = 'export.csv';
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);

?>