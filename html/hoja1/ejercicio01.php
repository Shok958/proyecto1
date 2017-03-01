<?php
	$pesetas = 55;
	$ratio = 166.386;
	$euros = $pesetas/$ratio;
	$euros = round($euros,2);
	echo "$pesetas pesetas son $euros €"
?>