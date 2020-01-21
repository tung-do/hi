@extends('client.clientmaster')
@section('main')
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="wrap-inner">
						<div class="products">
							<h3>{{$tieude}}</h3>
							<div class="product-list row">
								@foreach($s1 as $s)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="{{asset('show/'.$s->id)}}"><img style="height: 150px;" src="{{asset('imgupload/'.$s->image)}}
										" class="img-thumbnail"></a>
									<p><a href="{{asset('show/'.$s->id)}}">{{$s->name}}</a></p>
									<p class="price">{{$s->price}}</p>
										<a href="{{asset('show/'.$s->id)}}" style="font-style: bold;color:black">Xem chi tiết</a>
										<br>
										<a style="margin-top:35px;color: red" href="{{asset('cart/addspeed/'.$s->id)}}">Thêm vào giỏ hàng</a> 
								</div>
								@endforeach
							</div>                	                	
						</div>
						{{-- <div class="pull-right">{{$sex->links()}}</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>	

@stop