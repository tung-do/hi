@extends('admin.master')
@section('main')
@section('title','Quản trị')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Trang chủ</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$sp}}</div>
						<div class="text-muted">Sản phẩm</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-orange panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$dc}}</div>
						<div class="text-muted">Hoá đơn chờ</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-teal panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$ht}}</div>
						<div class="text-muted">Đơn hoàn thành</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-red panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$hb}}</div>
						<div class="text-muted">Đơn huỷ/bỏ</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-red">
				<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Lịch</div>
				<div class="panel-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div><!--/.col-->
	</div><!--/.row-->
</div>	<!--/.main-->
@stop
