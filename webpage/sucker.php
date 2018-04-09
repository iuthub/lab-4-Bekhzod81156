<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
		<?php
		if((empty($_REQUEST["name"])) || (empty($_REQUEST["selectsection"])) || (empty($_REQUEST["creditcard"])) || (empty($_REQUEST["bb"])))
		{
		?>
		<body>
		<h1>Sorry</h1>
		<p>You didn't fill out the from completely.</p><a href="buyagrade.html">Try Again?</a>
		</body>
		<?php 	
		} 
		
		else /*(($_GET["name"]) && ($_GET["selectsection"]) && ($_GET["creditcard"]) && ($_GET["bb"]))*/
		{
			$name=$_GET["name"];
			$select=$_GET["selectsection"];
			$credit = $_GET["bb"];
			$number= ($_GET["creditcard"]);
			$data = array($name, $select, $credit, $number);
			$text = implode(" ;", $data) ."<br />";
			file_put_contents("sucker.txt", $text,FILE_APPEND);
		?>	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $select ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $number?>(<?= $credit ?>)</dd>

		</dl>
		<p>Here are all the suckers who have submitted here:</p>
		<br /><?= file_get_contents("sucker.txt")  ?>
	</body> 
	
		<?php 
		} 
		?>
	</head>


</html>  