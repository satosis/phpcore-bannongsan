<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/admin/layout1/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
</head>
<body style="background-repeat: repeat-x;
background-image: url(../assets/frontend/images/bglogin.jpg);">
<div class="container" style="margin-top:150px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center";><h4>Đăng nhập</h4></div>
				<div class="panel-body">
					<form method="post" action="index.php?controller=login&action=login">
					<div class="row" style="margin-top:20px;">
						<div class="col-md-2">Email</div>
						<div class="col-md-9"><input type="email" name="email" value="admin@gmail.com" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:20px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-9"><input type="password" name="password" value="123456789" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:20px;">
						<div class="col-md-2"></div>
						<div class="col-md-9"><input type="submit" value="Đăng Nhập" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger"></div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
