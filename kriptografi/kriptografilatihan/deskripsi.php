<!DOCTYPE html>
<html>
<head>
	<title>Description</title>
</head>
<body>
<form method="POST">
	<label>Enter Words : </label>
	<input type="text" class="text" name="input">
	<input type="submit" class="button" name="hasil" value="Process">
	<button type="submit" class="button" onclick="window.location.href='kriptografilatihan/deskripsi.php'">Reset</button>
</form>
	<?php 
	if(isset($_POST['hasil'])){
		$teks =$_POST['input'];
		// echo "hasil deskripsi : ".base64_decode($teks);

	?>
	<table border="1" style="font-family:sans-serif;">
		<tr>
			<td align="center" style="background-color: black;color:white;">
				<b>Hasil Deskripsi</b>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo base64_decode($teks);
				?>
			</td>
		</tr>
	</table>
	<?php
	}
 ?>
</body>
</html>

 <style>
 	.text{
 		width: 200px;
 		border: 1px solid grey;
 		height:20px;
 		border-radius: 10px;
	 	}

	 .button{
    border-radius: 30px;
  	height: 30px;
  	width:100px;
  	border:none;
    background-color: #3b5998;
    color: white;
	 }
	 
 </style>