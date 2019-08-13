<!DOCTYPE html>
<html>
<head>
	<title>Encryption</title>
</head>
<body>
	<form action="" method="POST">
	<table style="padding-top:200px;" width="100%">
		<tr>
			<td align="center">
				
				<input type="text" class="text" name="input" placeholder="Enter words">
				<input type="submit" class="button" name="hasil" value="Process">
				<button type="submit" class="button" onclick="window.location.href='kriptografilatihan/enkripsi2.php'">Reset</button>
			</td>
		</tr>
	</table>
	</form>
	<?php
		if(isset($_POST['hasil'])){
			$input = $_POST['input'];
			$encode = base64_encode($input);
	?>

	<table border="1" style="font-family:sans-serif;margin:50px;margin-left: 380px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>Password Asli</td>
			<td>
				<?php echo $input; ?>
			</td>
		<tr>
			<td>Password MD5</td>
			<td>
				<?php echo md5($input);  ?>
			</td>
		</tr>
		<tr>
			<td>Password Hash</td>
			<td>
				<?php echo password_hash($input, PASSWORD_DEFAULT); ?>
			</td>
		</tr>
		<tr>
			<td>Password Crypt</td>
			<td>
				<?php echo crypt($input, "@#!@as"); ?>
			</td>
		</tr>
		<tr>
			<td>Password Sha1</td>
			<td>
				<?php echo sha1($input); ?>
			</td>
		</tr>	
		<tr>
			<td>Hash</td>
			<td>
				<?php echo hash("sha256",$input); ?>
			</td>
		</tr>
		<tr>
			<td>Password Encode</td>
			<td>
				<?php echo base64_encode($input); ?>
			</td>
		</tr>
		<tr>
			<td>Password Decode</td>
			<td>
				<?php echo base64_decode($encode); ?>
			</td>
		</tr>
		
			
		
	</table>
	<?php
			// echo "password asli : ".$input."<br>";
			// echo "password md5 :".md5($input)."<br>";
			// echo "password hash :".password_hash($input, PASSWORD_DEFAULT)."<br>";
			// echo "password crypt :".crypt($input, "@#!@as")."<br>";
			// echo "password sha1 :".sha1($input)."<br>";
			// echo "password hash :".hash("sha256",$input)."<br>";
			// echo "password encode :".base64_encode($input)."<br>";
			// echo "password decode :".base64_decode($input)."<br>";
		}
		?>
</body>
</html>


<style>
	.text{
 		width: 300px;
 		border: 1px solid grey;
 		height:30px;
 		border-radius: 50px;
 		padding:10px;
 		padding-left:20px;
	 }
	 .button{
    border-radius: 30px;
  	height: 50px;
  	padding:10px;
  	width:110px;
  	border:none;
    background-color: #3b5998;
    color: white;
	 }
</style>