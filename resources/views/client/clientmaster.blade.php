<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<base href="{{asset('')}}">
	<title>Tung Shop</title>
	<script type="text/javascript" src="client/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="client/css/bootstrap.min.css">
	<link rel="stylesheet" href="client/css/home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="client/css/hi.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="{{route('index')}}" style="text-decoration: none"><img src="{{asset('imgupload/logo.jpg')}}"></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<form id="search" class="col-md-7 col-sm-12 col-xs-12" method="GET" action="{{asset('search/')}}">
					<input type="text" required name="find" placeholder="Nhập từ khóa ..." style="border:solid 1px #E4E4E4;color: black">
					{{-- <input type="submit" name="timkiem" value="Tìm kiếm"> --}}
				</form>
				<div id="cart"  class="col-md-2 col-sm-12 col-xs-12">
					{{-- <a class="display" style="color: black" href="">Giỏ hàng</a> --}}
					<img src="{{asset('client/img/cart.png')}}" style="height: 80px;"><a href="{{asset('cart/showcart/')}}">{{Cart::count()}}</a>	
							    
				</div> 
				{{-- <div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="#">Giỏ hàng</a>
									    
				</div> --}}
			</div>			
		</div>
		
	</header><!-- /header -->
	<div id="menu-ngang-custom">
		  <ul>
			<li><a href="{{asset('/')}}">Trang chủ</a></li>
			<li><a href="{{asset('type/1')}}">Đồng hồ nam</a></li>
			<li><a href="{{asset('type/2')}}">Đồng hồ nữ</a></li>
			{{-- <li><a href="{{asset('gioithieu')}}">Giới thiệu</a></li>
			<li><a href="{{asset('lienhe')}}">Liên hệ</a></li>  --}}
		  </ul>
	</div>
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item" style="background-color:orange">Danh mục sản phẩm</li>
						</ul>
						<ul>
							<li class="menu-item" style="color: #b1130d"><b>Thương hiệu đồng hồ</b></li>
							@foreach($category as $cate)
								<li class="menu-item"><a href="{{asset('category/'.$cate->id)}}">{{$cate->name}}</a></li>
							@endforeach
						</ul>
						<ul>
							<li class="menu-item" style="color: #b1130d"><b>Kiểu dáng</b></li>
							@foreach($productstyle as $style)
								<li class="menu-item"><a href="{{asset('style/'.$style->id)}}">{{$style->name}}</a></li>
							@endforeach
						</ul>
						<ul>
							<li class="menu-item" style="color: #b1130d"><b>Mức giá</b></li>
							<li class="menu-item" name="mucgia" value="one"><a href="{{asset('selling/1')}}">Đồng hồ giá dưới 5 triệu</a></li>
							<li class="menu-item" name="mucgia2" value="tow"><a href="{{asset('selling/2')}}">Đồng hồ giá từ 5 triệu đến 20 triệu</a></li>
							<li class="menu-item"><a href="{{asset('selling/3')}}">Đồng hồ giá từ 20 triệu đến 40 triệu</a></li>
							<li class="menu-item"><a href="{{asset('selling/4')}}">Đồng hồ giá trên 40 triệu</a></li>
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					{{-- <div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<img src="../admin/img/bn1.jpg" alt="" class="img-thumbnail">
						</div>
						<div class="banner-l-item">
							<img src="../admin/img/bn2.jpg" alt="" class="img-thumbnail">
						</div>
						<div class="banner-l-item">
							<img src="../admin/img/bn3.jpg" alt="" class="img-thumbnail">
						</div>
						<div class="banner-l-item">
							<img src="../admin/img/bn4.jpg" alt="" class="img-thumbnail">
						</div>
					</div> --}}
				</div>


	@yield('main')

	<hr>
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-4 col-sm-12 col-xs-12 text-center">						
						<a href="index.php" style="text-decoration: none"><img src="{{asset('imgupload/logo.jpg')}}"></a>	
					</div>
					<div id="hotline" class="col-md-4 col-sm-12 col-xs-12">
						<h3><b>Hotline</b></h3>
						<p>Phone Sale: (+84) 082 743 8683</p>
						<p>Email: thanhtung.contact@gmail.com</p>
					</div>
					<div id="contact" class="col-md-4 col-sm-12 col-xs-12">
						<h3><b>Contact Us</b></h3>
						<p>Address 1: Số 66 Ngõ 178/72 - Hoàng Cầu Đống Đa - Hà Nội</p>
						<p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
					</div>
				</div>				
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>