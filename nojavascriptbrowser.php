<?php 
	session_start();
?>
<!DOCTYPE html>
<html style="height:100%">
<head>
	<title>403 Forbidden</title>
	<script defer src="fontawesome/all.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
	<script type="text/javascript">
		window.location="<?php echo $_SESSION["webpage"]; ?>";
	</script>
</head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
	<div style="height:auto; min-height:100%; ">     
		<div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
	        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">403</h1>
			<h2 style="margin-top:20px;font-size: 30px;">Forbidden</h2>
			<p>Access to this resource on the server is denied!</p>
			<p style="color: red;font-weight: bold;"><i class="fas fa-exclamation-triangle"></i> Javascript Disabled</p>
		</div>
	</div>
</body>
</html>