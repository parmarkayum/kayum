<?php
	require "confrom.php";
	if(isset($_post['submit']))
	{
		$unm=$_REQUEST['unm'];
		$pwd=$_REQUEST['pwd'];
		$sql="SELECT * FROM `login` WHERE `unm`='$unm' AND `pwd`='$pwd'";
		$res=mysqli_query($con,$sql);
		$rdata=mysql_fetch_assoc($res);
		$cont=mysql_num_rows($res);
		if($cont>0)
		{
			header("location:deshbord.php");
		}
		else{
				echo "<script>alert('chack your email and passwod')<script>";
		}
	}
?>