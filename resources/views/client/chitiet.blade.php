@extends('client.clientmaster')
@section('main')
			<div id="main" class="col-md-9">
				<div id="wrap-inner">
					<div id="product-info">
							<div class="clearfix"></div>
							<h3 style="color:#ff9600;"><?php echo $show['name'];?></h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img style="height: 250px;width:200px" src="{{asset('imgupload/'.$show->image)}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{ number_format($show->price,0,',','.')}}₫</span></p>
									<p>Thương hiệu: {{$show->Category->name}}</p> 
									<p>Số lượng: {{$show->quantity}}</p>
									<p>Kiểu dáng: {{$show->ProductStyle->name}}</p>
									<p class="btn btn-danger"><a href="{{asset('cart/add/'.$show->id)}}" >Đặt hàng</a></p>
									{{-- <p class="add-cart text-center"><a href="#">Đặt hàng online</a></p> --}}
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3 style="color:#ff9600;">Chi tiết sản phẩm</h3>
							<p class="text-justify">{!!$show->description!!}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>	
@stop