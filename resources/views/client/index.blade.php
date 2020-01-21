@extends('client.clientmaster')
@section('main')
<div id="main" class="col-md-9">
	<!-- main -->
	<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
	<div id="slider">
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="client/img/slide1.png" alt="Los Angeles" >
				</div>
				<div class="carousel-item">
					<img src="client/img/slide2.png" alt="Chicago">
				</div>
				<div class="carousel-item">
					<img src="client/img/slide3.png" alt="New York" >
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>
	<div id="wrap-inner">
		<div class="products">
			<h3>Sản phẩm mới</h3>
			<div class="product-list row">
				@foreach($productnew as $pro)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="{{asset('show/'.$pro->id)}}"><img style="height: 150px;" src="{{asset('imgupload/'.$pro->image)}}
						" class="img-thumbnail"></a>
						<p><a href="{{asset('show/'.$pro->id)}}">{{$pro->name}}</a></p>
						<p class="price">{{ number_format($pro->price,0,',','.')}}</p>
						<a href="{{asset('show/'.$pro->id)}}" style="font-style: bold;color:black">Xem chi tiết</a>
						<br>
						<a style="margin-top:35px;color: red" href="{{asset('cart/addspeed/'.$pro->id)}}">Thêm vào giỏ hàng</a> 
					</div>
					@endforeach
				</div>                	                	
			</div>

			<div class="products">
				<h3>Sản phẩm giá rẻ</h3>
				<div class="product-list row">
					@foreach($productre as $pro2)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="{{asset('show/'.$pro2->id)}}"><img style="height: 150px;" src="{{asset('imgupload/'.$pro2->image)}}" class="img-thumbnail"></a>
						<p><a href="{{asset('show/'.$pro2->id)}}">{{$pro2->name}}</a></p>
						<p class="price">{{number_format($pro2->price,0,',','.')}}</p>	  
						
						<a href="{{asset('show/'.$pro2->id)}}" style="font-style: bold;color:black">Xem chi tiết</a>
						<br>
						<a style="margin-top:35px;color: red" href="{{asset('cart/addspeed/'.$pro2->id)}}">Thêm vào giỏ hàng</a>
						
					</div>
					@endforeach
				</div>    
			</div>
		</div>
	</div>
</div>
</div>
</section>	

@stop