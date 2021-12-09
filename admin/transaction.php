<?php 
require_once('session_login.php');
 ?>

 <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="Group3/images/icon3.png" />
		<link rel="shortcut icon" type="image/x-icon" href="images/icon3.png">
		<title>DAMP ADMIN</title>
		<body style="background-color:lightsteelblue;">

		
   	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

     
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

	</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">DAMP TICKECTING ADMIN</a>
		<ul class="nav navbar-nav">
			<li class=""><a href="reservation.php">Reserved
			<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
			</a></li>
			<li class="active"><a href="transaction.php">Transaction
			<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
			</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	    </ul>
	</div>
</nav>
<br />
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div id="trans-table"></div>
	</div>
	<div class="col-md-1"></div>
</div>


<?php require_once('modal/view_passenger.php'); ?>
<?php require_once('modal/message.php'); ?>
<?php require_once('modal/confirmation.php'); ?>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>
	
<script type="text/javascript">
	function showAllTransaction()
	{
		$.ajax({
				url: '../data/get_all_transaction.php',
				type: 'post',
				// data: {},
				success: function (data) {
					$('#trans-table').html(data);
				},
				error: function(){
					alert('Error: L70+');
				}
			});
	}//end transaction
	showAllTransaction();

</script>

</body>
</html>