<?php 
if(isset($_GET['erase'])) {
	echo "Erasing tokens from server ...\n" ;
	$filename = "state.".$_GET["state"].".txt" ;	
	if (file_exists($filename)) {
        	unlink($filename);
		echo "Token erased\n" ;
	} else {
		echo "Token no found\n" ;
	}
} else {
	if(isset($_GET['error'])) {
		echo "<b>Error</b> <br><br>" ;
		echo $_GET['error'] ;
	} else {
		echo "<b> Success : <?b><br><br>" ;
		echo "state: ".$_GET["state"] ;
		$file = fopen( "state.".$_GET["state"].".txt","w");
		echo fwrite($file,$_GET["code"]);
		fclose($file);
	}
}

?>
