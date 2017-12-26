<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Love calculator</title>
	<style>
	.percent{
		font-size: 72px;
	}
	.name{
		font-size: 30px;
		text-transform: uppercase;
		color: red;
	}
		#one,#two{
			float: left;
		}
		#two{
			margin-left: 20%;
		}

		
	</style>
</head>
<body>
<form action="#" method="POST">
Enter Person One: <input type="text" name="name1">
<br>Enter Person Two:&nbsp;<input type="text" name="name2">
<br>
<input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$name1= $_POST['name1'] ;
$name2= $_POST['name2'];
if($name1=='' || $name2==''){
	?>
	<script>alert('Please Give Names')</script>
	<?php
	header("Refresh:0");
}
$temp1=rand(0,100);
$temp2=100-$temp1;
?>
<div id="one">
<span class='percent'><?php echo $temp1."%"; ?></span>
<br>
<span class="name"><?php echo $name1; ?></span>
<br>
</div>
<div id="two">
<span class="percent"><?php echo $temp2.'%'; ?></span>	
<br>
<span class="name"><?php echo $name2; ?></span>
</div>
<?php
}
?>
</body>
</html>