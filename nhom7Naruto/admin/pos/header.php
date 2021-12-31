<!DOCTYPE html>
<html>

<head>
	<title>nhom6-ctk42</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/font-awesome/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../public/js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="public/js/clickevent.js"></script>
</head>

<body>
	<div class="header-cashier">
		<div class="container-fluid">
			<div class="row ft-tabs">
				<div class="col-md-3">
					<ul class="tabs-list">
						<ul class="nav navbar-nav float-right" style="float: right!important">
							<li><a href="../login.php" class="nav__link nav__logout">Log Out</a></li>
						</ul>
						<li><a href="#" class="active" data="listtable">Phòng Bàn</a></li>
						<li><a href="#" data="pos">Thực đơn</a></li>
					</ul>
				</div>
				<div class="col-md-4 cashier-search">
					<input type="text" name="txtnamemenu" id="search-menu" placeholder="Nhập tên mặt hàng" class="form-control">
					<div id="result-menu-post">
					</div>
				</div>
			</div>
		</div>
	</div>