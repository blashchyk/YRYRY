<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{$title}}</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/tcal.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
   /*
	Stylesheet for Tigra Calendar v5.0
	Product is Public Domain (Free for any kind of applicaiton, customization and derivative works are allowed) 
	URL: http://www.softcomplex.com/products/tigra_calendar/

	- all image paths are relative to path of stylesheet
	- the styles below can be moved into the document or in existing stylesheet

*/

/* input box in default state */ 
.tcalInput {
	background: url('{{asset("assets/image/img/cal.gif")}}') 100% 50% no-repeat;
	padding-right: 20px;
	cursor: pointer;
}

/* additional properties for input boxe in activated state, above still applies unless in conflict */
.tcalActive {
	background-image: url('{{asset("assets/image/img/no_cal.gif")}}');
}
/* container of calendar's pop-up */
#tcal {
	position: absolute;
	visibility: hidden;
	z-index: 100;
	width: 170px;
	background-color: white;
	margin-top: 2px;
	padding: 0 2px 2px 2px;
	border: 1px solid silver;

	-moz-box-shadow: 3px 3px 4px silver;
	-webkit-box-shadow: 3px 3px 4px silver;
	box-shadow: 3px 3px 4px silver;
	-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='silver')";
	filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='silver');
}

/* table containing navigation and current month */
#tcalControls {
	border-collapse: collapse;
	border: 0;
	width: 100%;
}
#tcalControls td {
	border-collapse: collapse;
	border: 0;
	padding: 0;
	width: 16px;
	background-position: 50% 50%;
	background-repeat: no-repeat;
	cursor: pointer;
}
#tcalControls th {
	border-collapse: collapse;
	border: 0;
	padding: 0;
	line-height: 25px;
	font-size: 10px;
	text-align: center;
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
	white-space: nowrap;
}
#tcalPrevYear { background-image: url('{{asset("assets/image/img/prev_year.gif")}}'); }
#tcalPrevMonth { background-image: url('{{asset("assets/image/img/prev_mon.gif")}}'); }
#tcalNextMonth { background-image: url('{{asset("assets/image/img/next_mon.gif")}}'); }
#tcalNextYear { background-image: url('{{asset("assets/image/img/next_year.gif")}}'); }

/* table containing week days header and calendar grid */
#tcalGrid {
	border-collapse: collapse;
	border: 1px solid silver;
	width: 100%;
}
#tcalGrid th {
	border: 1px solid silver;
	border-collapse: collapse;
	padding: 3px 0;
	text-align: center;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
	background-color: gray;
	color: white;
}
#tcalGrid td {
	border: 0;
	border-collapse: collapse;
	padding: 2px 0;
	text-align: center;
	font-family: Tahoma, Geneva, sans-serif;
	width: 14%;
	font-size: 11px;
	cursor: pointer;
}		
#tcalGrid td.tcalOtherMonth { color: silver; }
#tcalGrid td.tcalWeekend { background-color: #ACD6F5; }
#tcalGrid td.tcalToday { border: 1px solid red; }
#tcalGrid td.tcalSelected { background-color: #FFB3BE; }		

   </style>
  </head>
  <body>
    <div class="wrapper">
	@yield('header')
				{{--  <div class="content">
			<div class="container">
				<div class="row">  --}}
		
					{{--  <div class="col-md-9">  --}}
                        @yield('content')
					{{--  </div>  --}}
					{{--  <div class=" col-md-3">  --}}
						@yield('side_bar')
					{{--  </div>  --}}

		@yield('footer')
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    

  </body>
</html>