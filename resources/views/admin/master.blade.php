<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<title>@yield('title')</title>
	<link href="backend/css/bootstrap.min.css" rel="stylesheet">
	<link href="backend/css/datepicker3.css" rel="stylesheet">
	<link href="backend/css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="backend/ckeditor/ckeditor.js"></script>
	<script src="backend/js/lumino.glyphs.js"></script>
	<style type="text/css">
		/*#logout {
		  display: none;
		  position: absolute;
		}

		#showlogout:hover + #logout {
		  display: block ;
		}*/
		

		li .dropdown:hover .dropbtn {
		  background-color: red;
		}

		li.dropdown {
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {background-color: #f1f1f1;}

		.dropdown:hover .dropdown-content {
		  display: block;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="{{asset('admin/')}}"><img src="{{asset('imgupload/logo.jpg')}}"></a>
				<ul class="user-menu">
					{{-- <li class="dropdown pull-right">
						<a id="showlogout" href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->name}} <span class="caret"></span></a>
						<ul class="dropdown-menu " role="menu" id="logout">
							<li><a href="{{asset('admin/out')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li> --}}
					<li class="dropdown">
					    <a href="javascript:void(0)" class="dropbtn"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->name}} <span class="caret"></span></a>
					    <div class="dropdown-content">
					      {{-- <a href="{{asset('admin/changepass/'.Auth::user()->id)}}">Change password</a> --}}
					      <a href="{{asset('admin/out')}}">Logout</a>
					      {{-- <a href="#">Change password</a> --}}
					      
					    </div>
					</li>
				</ul>
			</div>
			
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{asset('admin/')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{route('product.index')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Sản phẩm</a></li>
			<li><a href="{{route('category.index')}}"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg>Thương hiệu</a></li>
			<li><a href="{{route('productstyle.index')}}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Kiểu dáng</a></li>
			<li><a href="{{asset('admin/order')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Đơn hàng</a></li>
			{{-- <li><a href="{{route('')}}">Liên hệ</a></li> --}}
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->

	@yield('main')
	<script src="backend/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
	</script>
	{{-- <script src="backend/js/ajax.js"></script> --}}

	<script src="backend/js/bootstrap.min.js"></script>
	<script src="backend/js/chart.min.js"></script>
	<script src="backend/js/chart-data.js"></script>
	<script src="backend/js/easypiechart.js"></script>
	<script src="backend/js/easypiechart-data.js"></script>
	<script src="backend/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
				$(this).find('em:first').toggleClass("glyphicon-minus");      
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
</script>	
</body>

</html>
