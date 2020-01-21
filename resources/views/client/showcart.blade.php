@extends('client.clientmaster')
@section('main')
				<div id="main" class="col-md-9">
					<script type="text/javascript">
						function update(qty,rowId){
							$.get(
								'{{asset('cart/updatecart')}}',
								{sl:qty,rowId:rowId},
								function(){
									location.reload();
								}
								);
						}
					</script>
					<div id="wrap-inner">
						@if(Cart::count() > 0)
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									@foreach($cartshow as $cart)
									<tr>
										<td><img style="height: 150px;width:150px" class="img-responsive" src="{{asset('imgupload/'.$cart->options->image)}}"></td>
										<td>{{$cart->name}}</td>
										<td>
											<div class="form-group data">
												<p class="idsp" style="display: none;">{{$cart->options->idsp}}</p>
												{{-- <input type="text" class="rowId" value="{{$cart->rowId}}" style="display: none;"> --}}
												
												<input class="form-control sl"  min="1" type="number" value="{{$cart->qty}}" onchange="update(this.value,'{{$cart->rowId}}')">
											</div>
										</td>
										<td><span class="price">{{ number_format($cart->price)}}₫</span></td>
										<td><span class="price" id="tt">{{number_format($cart->price*$cart->qty)}}₫</span></td>
										<td><a class="btn btn-danger" href="{{asset('cart/delete/'.$cart->rowId)}}">Xóa</a></td>
									</tr>
									@endforeach
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price tongtien">{{$total}}₫</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{asset('/')}}" class="btn btn-primary">Mua tiếp</a>
										<a href="{{asset('cart/delete/allcart')}}" class="btn btn-danger">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>

						<div id="xac-nhan">
							<h3 >Xác nhận mua hàng</h3>
							<form>
								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control emailkh" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control namekh" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="text" class="form-control phonekh" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control diachikh" id="add" name="add">
								</div>
								<div class="form-group text-right">
									<button type="button" class="btn btn-warning mualuon">Thực hiện đơn hàng</button>
								</div>
							</form>
						</div>
						@else
						<center>Giỏ hàng rỗng</center>
						@endif
					</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
					<script type="text/javascript">
						$.ajaxSetup({
									headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
								});
					</script>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.mualuon').click(function(){
								var emailkh = $('.emailkh').val();
								var namekh = $('.namekh').val();
								var phonekh = $('.phonekh').val();
								var diachikh = $('.diachikh').val();
								var monney = $('.tongtien').text();
								monney = monney.replace('₫','');
								// alert(tongtien);
								$.ajax({
									url:'cart',
									data:{
										emailkh:emailkh,
										namekh:namekh,
										phonekh:phonekh,
										diachikh:diachikh,
										monney:monney
									},
									dataType:'json',
									type:'post',
									
									success:function(data){
										location.href='hoanthanh/';
									}
								});
							});
						});
					</script>
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->
@stop
	