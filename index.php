<!DOCTYPE HTML>
<meta charset="UTF-8">
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" />
<style>
body {background-color: powderblue; margin:10px;}
</style>
	<title></title>
</head>
<body>
    <h1 class="text-justify">Google Translator By Sahid</h1>
	
	<form action="" method="POST">
	
	 <div class="row">
	  <div class="col-md-2">
	   <select class="form-control" name="Option">
		<option value="1">English To Bengali</option>
		<option value="2">Bengali To English</option>
	   </select>
	  </div>
	  <div class="col-md-9">
	    <input type="text"  name="input" class="form-control" placeholder="Enter Subject for translating">
	  </div>
	 </div>
	<div class="row">
	  <div class="col-md-2">
	  </div>
	  <div class="col-md-2"> <input class="btn  btn-primary" type="submit" name="submit" /></div>
	</div>
	</form>
	
	<?php
	use \Statickidz\GoogleTranslate;
	require_once ('vendor/autoload.php');
	 if(isset($_POST['submit']))
	 {
	$option = isset($_POST['Option']) ? $_POST['Option'] : false;
    if ($option) {
		
      } else {
      echo "task option is required"; 
      }
		 $input=$_POST['input'];
		 if($option==1)
		 {
		  if (strlen($input) == strlen(utf8_decode($input)))
			 {
			 echo " <strong>Your Sentense is:  </strong>";
			 echo '<h2>'.$input.'</h2>';
			 echo "<br />";
			 $source = 'en';
			 $target = 'bn';
			 $trans = new GoogleTranslate();
			 $result = $trans->translate($source, $target, $input);
			 echo "<strong>Translated Sentense is:  </strong>";
			 echo '<h1>'.$result.'</h1>';
			 }
		 else 
		 {
           echo "Not Possible because you want English to Bengali, Not Bengali to English";
		 }

		 }
		 else
		 {
			 if(strlen($input)!=strlen(utf8_decode($input)))
			 {
				 echo " <strong>Your Sentense is:  </strong>";
				 echo '<h2>'.$input.'</h2>';
				 echo "<br />";
				 $source = 'bn';
				 $target = 'en';
				 $trans = new GoogleTranslate();
				 $result = $trans->translate($source, $target, $input);
				 echo "<strong>Translated Sentense is:  </strong>";
				 echo '<h1>'.$result.'</h1>';
			 }
			 else
			 {
				            echo "Not Possible because you want Bengali to English, Not English to Bengali";

      		 }
		
		 }
	 }
	?>
</body>
</html>