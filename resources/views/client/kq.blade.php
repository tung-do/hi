@extends('client.clientmaster')
@section('main')
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="wrap-inner">
						<div class="products">
							<h3>Tìm kiếm với từ khóa: <span>{{$key}}</span></h3>
							<div class="product-list row">
								@foreach($kq as $kq)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="{{asset('show/'.$kq->id)}}"><img style="height: 150px;" src="{{asset('imgupload/'.$kq->image)}}
										" class="img-thumbnail"></a>
										<p><a href="{{asset('show/'.$kq->id)}}">{{$kq->name}}</a></p>
										<p class="price">{{ number_format($kq->price,0,',','.')}}</p>
										<a href="{{asset('show/'.$kq->id)}}" style="font-style: bold;color:black">Xem chi tiết</a>
										<br>
										<a style="margin-top:35px;color: red" href="{{asset('cart/addspeed/'.$kq->id)}}">Thêm vào giỏ hàng</a> 
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