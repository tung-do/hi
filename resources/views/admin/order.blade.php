@extends('admin.master')
@section('main')
@section('title','Đơn hàng')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Đơn hàng</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách đơn hàng</div>
				
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Đang chờ</a></li>
					<li><a data-toggle="tab" href="#menu1">Đang giao</a></li>
					<li><a data-toggle="tab" href="#menu2">Hoàn thành</a></li>
					<li><a data-toggle="tab" href="#menu3">Huỷ bỏ</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3>Đang chờ</h3>
						
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered" id="id-bang">
									<thead>
										<tr class="bg-primary">
											<th>Mã đơn</th>
											<th>Tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Tổng tiền</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($order as $value)
										<tr>
											<td>{{$value->code_order}}</td>
											<td>{{$value->namekh}}</td>
											<td width="200px">{{$value->diachikh}}</td>
											<td>{{$value->emailkh}}</td>
											<td>{{$value->phonekh}}</td>
											<td>{{ number_format($value->monney)}}₫</td>
											<td>Đang chờ</td>
											<td>
												<button class="btn btn-primary detail" data-toggle="modal" data-target="#detail" data-id="{{$value->id}}">Chi tiết</button>
												<a class="btn btn-success" href="{{asset('admin/order/danggiao/'.$value->id)}}">Đang giao</a>
												<a class="btn btn-danger" href="{{asset('admin/order/huybo/'.$value->id)}}">Huỷ bỏ</a>
												
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="pull-right">{{$order->links()}}</div>
							</div>
							<div class="clearfix"></div>
						</div>
						{{-- Chi tiết --}}
						<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="exampleModalLabel">Chi tiết</h4>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row" style="margin: 5px">
											<div class="col-lg-12">
												<table class="table table-bordered" id="id-bang">
													<thead>
														<tr class="bg-primary">
															<th>Mã đơn</th>
															<th>Tên sản phẩm</th>
															<th>Số lượng</th>
															<th>Giá tiền</th>
														</tr>
													</thead>
													<tbody id="tablechitiet">
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>
						</div>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								$('.detail').click(function(){
									let idorder = $(this).data('id');
									$.ajax({
										url:'getorder',
										data:{
											idorder:idorder
										},
										dataType: 'json',
										type:'get',
										success : function($data){
											let html = '';
											$.each($data,function($key,$value){
												html += '<tr>';
													html += '<td>';
														html += $value['code_oder'];
													html += '</td>';
													html += '<td>';
														html += $value['nameProduct'];
													html += '</td>';
													html += '<td>';
														html += $value['quantity'];
													html += '</td>';
													html += '<td>';
														html += $value['price'];
													html += '</td>';
												html += '</tr>';
											});
											$('#tablechitiet').html(html);
										}
									});
								});
							});
						</script>
					</div>
					<div id="menu1" class="tab-pane fade">
						<h3>Đang giao</h3>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered" id="id-bang">
									<thead>
										<tr class="bg-primary">
											<th>Mã đơn</th>
											<th>Tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Tổng tiền</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($danggiao as $value)
										<tr>
											<td>{{$value->code_order}}</td>
											<td>{{$value->namekh}}</td>
											<td width="200px">{{$value->diachikh}}</td>
											<td>{{$value->emailkh}}</td>
											<td>{{$value->phonekh}}</td>
											<td>{{ number_format($value->monney)}}₫</td>
											<td>Đang giao</td>
											<td>
												<button class="btn btn-primary detail1" data-toggle="modal" data-target="#detail1" data-id="{{$value->id}}">Chi tiết</button>
												<a class="btn btn-success" href="{{asset('admin/order/hoanthanh/'.$value->id)}}">Hoàn thành</a>
												<a class="btn btn-danger" href="{{asset('admin/order/huybo/'.$value->id)}}">Huỷ bỏ</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="pull-right">{{$order->links()}}</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="modal fade" id="detail1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="exampleModalLabel">Chi tiết</h4>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row" style="margin: 5px">
											<div class="col-lg-12">
												<table class="table table-bordered" id="id-bang">
													<thead>
														<tr class="bg-primary">
															<th>Mã đơn</th>
															<th>Tên sản phẩm</th>
															<th>Số lượng</th>
															<th>Giá tiền</th>
														</tr>
													</thead>
													<tbody id="tablechitiet1">
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>
						</div>




						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								$('.detail1').click(function(){
									let idorder = $(this).data('id');
									$.ajax({
										url:'getorder',
										data:{
											idorder:idorder
										},
										dataType: 'json',
										type:'get',
										success : function($data){
											let html = '';
											$.each($data,function($key,$value){
												html += '<tr>';
													html += '<td>';
														html += $value['code_oder'];
													html += '</td>';
													html += '<td>';
														html += $value['nameProduct'];
													html += '</td>';
													html += '<td>';
														html += $value['quantity'];
													html += '</td>';
													html += '<td>';
														html += $value['price'];
													html += '</td>';
												html += '</tr>';
											});
											$('#tablechitiet1').html(html);
										}
									});
								});
							});
						</script>
					</div>


					<div id="menu2" class="tab-pane fade">
						<h3>Hoàn thành</h3>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered" id="id-bang">
									<thead>
										<tr class="bg-primary">
											<th>Mã đơn</th>
											<th>Tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Tổng tiền</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($hoanthanh as $value)
										<tr>
											<td>{{$value->code_order}}</td>
											<td>{{$value->namekh}}</td>
											<td width="200px">{{$value->diachikh}}</td>
											<td>{{$value->emailkh}}</td>
											<td>{{$value->phonekh}}</td>
											<td>{{ number_format($value->monney)}}₫</td>
											<td>
												@if($value->status==2)
												{{"Hoàn thành"}}
												{{-- @elseif($value->idSex==4)
												{{"Nữ"}}
												@elseif($value->idSex==5)
												{{"Tất cả"}} --}}
												@endif
											</td>
											<td>
												<button class="btn btn-primary detail2" data-toggle="modal" data-target="#detail2" data-id="{{$value->id}}">Chi tiết</button>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="pull-right">{{$order->links()}}</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="modal fade" id="detail2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="exampleModalLabel">Chi tiết</h4>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row" style="margin: 5px">
											<div class="col-lg-12">
												<table class="table table-bordered" id="id-bang">
													<thead>
														<tr class="bg-primary">
															<th>Mã đơn</th>
															<th>Tên sản phẩm</th>
															<th>Số lượng</th>
															<th>Giá tiền</th>
														</tr>
													</thead>
													<tbody id="tablechitiet2">
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>
						</div>




						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								$('.detail2').click(function(){
									let idorder = $(this).data('id');
									$.ajax({
										url:'getorder',
										data:{
											idorder:idorder
										},
										dataType: 'json',
										type:'get',
										success : function($data){
											let html = '';
											$.each($data,function($key,$value){
												html += '<tr>';
													html += '<td>';
														html += $value['code_oder'];
													html += '</td>';
													html += '<td>';
														html += $value['nameProduct'];
													html += '</td>';
													html += '<td>';
														html += $value['quantity'];
													html += '</td>';
													html += '<td>';
														html += $value['price'];
													html += '</td>';
												html += '</tr>';
											});
											$('#tablechitiet2').html(html);
										}
									});
								});
							});
						</script>


					</div>
					<div id="menu3" class="tab-pane fade">
						<h3>Huỷ bỏ</h3>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered" id="id-bang">
									<thead>
										<tr class="bg-primary">
											<th>Mã đơn</th>
											<th>Tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Tổng tiền</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($huybo as $value)
										<tr>
											<td>{{$value->code_order}}</td>
											<td>{{$value->namekh}}</td>
											<td width="200px">{{$value->diachikh}}</td>
											<td>{{$value->emailkh}}</td>
											<td>{{$value->phonekh}}</td>
											<td>{{ number_format($value->monney)}}₫</td>
											<td>
												@if($value->status==3)
												{{"Huỷ bỏ"}}
												{{-- @elseif($value->idSex==4)
												{{"Nữ"}}
												@elseif($value->idSex==5)
												{{"Tất cả"}} --}}
												@endif
											</td>
											<td>
												<button class="btn btn-primary detail3" data-toggle="modal" data-target="#detail3" data-id="{{$value->id}}">Chi tiết</button>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="pull-right">{{$order->links()}}</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="modal fade" id="detail3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="exampleModalLabel">Chi tiết</h4>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row" style="margin: 5px">
											<div class="col-lg-12">
												<table class="table table-bordered" id="id-bang">
													<thead>
														<tr class="bg-primary">
															<th>Mã đơn</th>
															<th>Tên sản phẩm</th>
															<th>Số lượng</th>
															<th>Giá tiền</th>
														</tr>
													</thead>
													<tbody id="tablechitiet3">
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>
						</div>




						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								$('.detail3').click(function(){
									let idorder = $(this).data('id');
									$.ajax({
										url:'getorder',
										data:{
											idorder:idorder
										},
										dataType: 'json',
										type:'get',
										success : function($data){
											let html = '';
											$.each($data,function($key,$value){
												html += '<tr>';
													html += '<td>';
														html += $value['code_oder'];
													html += '</td>';
													html += '<td>';
														html += $value['nameProduct'];
													html += '</td>';
													html += '<td>';
														html += $value['quantity'];
													html += '</td>';
													html += '<td>';
														html += $value['price'];
													html += '</td>';
												html += '</tr>';
											});
											$('#tablechitiet3').html(html);
										}
									});
								});
							});
						</script>


					</div>
				</div>

				
			</div><!--/.row-->
			

			<script type="text/javascript">
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
			</script>

		</div>	<!--/.main-->
		@stop