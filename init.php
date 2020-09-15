<?php
#session_start();

function init ($numconds) {

	$subjFile = "results/subj.txt";
	$condFile = "results/cond.txt";

	// $numconds is the REAL number of conditions.

	//$numconds = $numconds - 1; 			// Don't change this.

	$fh = fopen($subjFile,'r');			// process subject number (max 99999)
	$subj = fread($fh,5);
	fclose($fh);

	$strresults = $subj + 1;

	$fh = fopen($subjFile,'w');
	fwrite($fh,$strresults);
	fclose($fh);

	$fh = fopen($condFile,'r');			// process condition number (max 99)
	$num = fread($fh,2);
	fclose($fh);

	$strresults = $num + 1;

	if ($num > $numconds) {
		$strresults = "0";
	}

	$fh = fopen($condFile,'w');
	fwrite($fh,$strresults);
	fclose($fh);

	if ($num == 0 || $num == 3) {
		$insdat = file_get_contents("./results/poordat.csv");
	}
	else {
		$insdat = file_get_contents("./results/richdat.csv");
	}

	$borrow = file_get_contents("./results/canborrow.txt");

	$_SESSION['cond'] = $num;			// set condition and subject variables
	$_SESSION['subjnum'] = $subj;
	$_SESSION['insdata'] = $insdat;
	$_SESSION['cborrow'] = $borrow;

}

function ipCheck() {
	$ipFile = "./results/ip.txt";
	$file = file_get_contents($ipFile);
	$ip = $_SERVER['REMOTE_ADDR'];

	if(strpos($file, $ip)===false) {
		$fh = fopen($ipFile,'a');
		$strresults = "ip" . $ip . "\n";
		fwrite($fh,$strresults);
		fclose($fh);
		return false;
	}
	else {
		return true;
	}
}

?>
