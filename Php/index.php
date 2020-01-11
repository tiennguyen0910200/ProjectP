<!DOCTYPE html>
<html>
<head>
	<title>Dan Nhac Trinh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



	<link rel="stylesheet" type="text/css" href="../Css/aaa.css">
</head>
<body>
	
	<div class="flex">
		<ul class="flex1">
			<i class="fas fa-mobile-alt">&emsp;(+84)983 942 707</i>&emsp;
			<!-- <li><img src="../Img/phone.png"></li> -->
			<i class="fas fa-map-marker-alt">&emsp;Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</i>&emsp;
			<i class="fab fa-facebook">&emsp;Dàn Nhạc Trịnh</i>&emsp;
			<i style="margin-left: 260px;" class="fas fa-sign-in-alt" data-toggle="modal" data-target="#myModal" > Đăng kí</i>&emsp;
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<!-- <div class="modal-header">
							<h4 class="modal-title">Modal Heading</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
					-->
					<!-- Modal body -->
						<!-- <div class="modal-body">
							Modal body..
						</div> -->

						<!-- Modal footer -->
						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div> -->
						<div style="color:black">
							<center><h1>Dang ki</h1></center>
							<hr>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label">Hovaten</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputName" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Gmail</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputGmail" placeholder="Gmail">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">MatKhau</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Gui</button>
								</div>
							</form>
						</div>

						

					</div>
				</div>
			</div>
			<i class="fas fa-sign-in-alt" data-toggle="modal" data-target="#myModal1"> Đăng nhập</i>&emsp;
			<div class="modal" id="myModal1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div style="color:black">
							<center><h1>Dang ki</h1></center>
							<hr>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label">Hovaten</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputName" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">MatKhau</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<a href="" >Quen mat khau</a>

								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Gui</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</ul> 
	</div>
	<br>
	<br>
	

	<nav  class="navbar navbar-expand-lg navbar-light bg-light">
		<img style="margin-left: 200px;" src="../Img/logo.png" width="110px;" height="110px;" alt="">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../Php/admin.php">Trang Chủ <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tư Vấn</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Đám cưới
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Đám hỏi</a>
						<a class="dropdown-item" href="#">Liên hoan</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Nhạc sống</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Giới thiệu</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<i class="fas fa-cart-arrow-down"></i>&emsp;
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button style="margin-right: 240px" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" style="width: 900px; height: 550px" src="../Img/slide1.jpg"  alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" style="width: 900px; height: 550px" src="../Img/slide2.jpg"  alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" style="width: 900px; height: 550px" src="../Img/slide3.jpg"  alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>

	
	<?php include 'database.php';?>
	<div style="justify-content: center;display: flex;">
		<div class = "container">

			<div class = "row">
				<div class = "col-sm-4">
					<h1 style="margin-top: 100px;" >	<?php echo $result[0][1];  ?></h1>
				</div>

				<div class = "col-sm-4">
					<img style="width: 250px; height: 250px;" src="../Img/<?php  echo $result[0][2]; ?>" alt="">

				</div>
				
				<div class = "col-sm-4">

					<center><h1><?php echo $result[0][3];  ?></h1></center>
					<p><center><?php echo $result[0][4];  ?></center></p>
					<center><p style="color: red">"<?php echo $result[0][5];  ?>"</p></center>
				</div>

			</div>
		</div>
		

	</div>
	<hr>
	<br>
	<!-- Dich vụ -->
	<div style="text-align: center;">
		<h1>DỊCH VỤ CỦA CHÚNG TÔI</h1>
		<p>Hãy đến với chúng tôi và góp ý để chúng tôi trở nên hoàn hảo</p>
	</div>
	<?php include 'database.php';?>
	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < count($result1)  ; $i++) { 
				?>

				<div class = "col-sm-3">

					<center><img class="abc" style="width: 200px; height: 200px" src="<?php  echo $result1[$i][1]; ?>"></center>
					<br>
					<center><h5 style="color:red">	<?php echo $result1[$i][2];  ?></h5></center>
					<center><p>	<?php echo $result1[$i][3];  ?></p></center>
				</div>
				

			<?php } ?>
		</div>
		<br>
		<center><a href="../Php/xemnhieuhon.php" class="btn btn-outline-danger my-2 my-sm-0">Xem nhiều hơn</a></center>
	</div>
	<hr>

	
	<div style="background-color: #f6f9f9">
		<?php include 'database.php';?>
		<div class="container">
			<div class="row">
				<div class = "col-sm-6">
					<img style="width: 470px; height: 350px" src="<?php  echo $resultw[0][1]; ?>">
				</div>
				<div class = "col-sm-6">
					<h1><?php echo $resultw[0][2];?></h1>
					<h6><?php echo $resultw[0][3];?></h6>
					<br>
					<p><i class="far fa-check-circle">&emsp;<?php echo $resultw[0][4];?></i></p>
					<p><i class="far fa-check-circle">&emsp;<?php echo $resultw[0][5];?></i></p>
					<p><i class="far fa-check-circle">&emsp;<?php echo $resultw[0][6];?></i></p>

				</div>
			</div>

		</div>

		
	</div>
	<hr>
	<br>
	<!-- NHân viên hiện tại  -->
	<div style="text-align: center;">
		<h1>NHÂN VIÊN HIỆN TẠI</h1>
		<p>Cùng xem họ là những anh chàng đẹp trai hay những cô gái dễ thương nào!!!</p>
	</div>
	<?php include 'database.php';?>

	<div class="container">
		<div class="row">
			<div class = "col-sm-4">
				<img style="width: 270px; height: 270px" src="<?php  echo $result5[1][1]; ?>">
				<img style="width: 270px; height: 270px" src="<?php  echo $result5[2][1]; ?>">
			</div>
			<div class = "col-sm-4">
				<img style="width: 560px; height: 540px;margin-left: -110px;" src="<?php  echo $result5[0][1]; ?>">
			</div>
			<div class = "col-sm-4">
				<img style="width: 270px; height: 270px" src="<?php  echo $result5[3][1]; ?>">
				<img style="width: 270px; height: 270px" src="<?php  echo $result5[4][1]; ?>">
			</div>
		</div>
		<br>
		<center><a href="../Php/xemveho.php" class="btn btn-outline-info my-2 my-sm-0">Xem về họ</a></center>
		
	</div>
	<hr>

	<div style="background-color: #f6f9f9;" >
		<div class="container">
			<div class="row">

				<div style="margin-top: 40px;" class="col-sm-6">
					<h6>Ông Trịnh(GĐ) nói:</h6>
					<br>
					<p><i>"Tôi có điềm đam mê mãnh liệt về âm nhạc từ nhỏ,nhưng ngày xưa thì không đủ điệu kiện để học nên tôi đã từ bỏ.Cho đến một ngày tôi có thể tự xây dựng nên được một dàn nhạc riêng cho chính bản thân mình thì tôi rất trân trọng nó,đặt hết tâm huyết vào nó.Tôi đã cố gắng từng ngày để dàn nhạc của tôi được biết đến nhiều như bây giờ.Các bạn biết không, tôi đã ngoài 50u nhưng tôi vẫn xem youtube để học những giai điệu mới mỗi ngày đó. Nên các bạn cứ tin tưởng khi chọ dàn nhạc chúng tôi nhé!"</i></p>

				</div>
				<div class="col-sm-6">
					<img style="margin-left: 110px; width: 360px; height: 350px;  " src="../Img/cau6ne.jpg" alt="">

				</div>
			</div>
		</div>
	</div>
	<hr>
	<br>
	<!-- video -->
	
	<!-- Liên hệ -->
	<div style="text-align: center;">
		<h1>LIÊN HỆ</h1>
		<p>Hãy liện hệ với chúng tôi khi bạn cần</p>
	</div>
	<div style="text-align: center;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122691.61999027408!2d108.17146182096877!3d16.059618435928083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421f6ae29c8b3f%3A0x9e0d602a6827ba6d!2zQsOqIFRodWkgVHLhu4tuaA!5e0!3m2!1svi!2s!4v1577692014497!5m2!1svi!2s" width="1100px;" height="400px;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<hr>
	<br>
	<!-- Kết -->
	<div style="background: #f6f9f9">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<center>
						<img src="../Img/logo.png" width="280px; height=280px;" alt="">
					</center></div>
					<div class="col-sm-4">
						<center><h3>Dàn nhạc Trịnh</h3>
							<br>
							<i class="fab fa-facebook"></i>Dàn nhạc Trịnh<br>
							<i class="fas fa-phone"></i>(+84)983 942 707
							<i class="fas fa-envelope"></i>trinh.nguyen1968@gmail.com<br>
							<i class="fas fa-map-marker-alt"></i>Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng

						</center></div>
						<div class="col-sm-4">
							<center><h3>Dàn nhạc Trịnh</h3>
								<br>
								<p>Chúng tôi rất vui khi được phục vụ các bạn, luôn mong các bạn có được sự trải nghiệm tốt nhất.Hãy liên lạc với chúng tôi nhé các bạn!!!</p>
								<i>Chúng các bạn ngày vui vẻ!</i>


							</center></div>
						</div>

					</div>
				</div>
				<br>
				<br>
				<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien. All Rights Reserved.</div></center>


			</body>
			</html>