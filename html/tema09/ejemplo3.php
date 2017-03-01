<?php 
	$fp = fopen("/tmp/lock.txt", "r+");
	if (flock($fp, LOCK_EX)) {
		ftruncate ($fp,0);
		fwrite($fp, "escribimos algo\n");
		fflush($fp);
		flock($fp, LOCK_UN);
	}else{
		echo "No he podio bloquear el fichero";

	}
	fclose($fp);
 ?>