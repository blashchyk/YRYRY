<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav>
						<ul class="admin_menu">
							<li><a href="{{route('admin')}}">Банеры</a></li>
							<li><a href="{{route('admin_travelers')}}">Попутчики</a></li>
							<li><a href="{{route('admin_drivers')}}">Водители</a></li>
							<li><a href="{{route('admin_transports')}}">Аренда транспорта</a></li>
							<li><a href="{{route('admin_accommodations')}}">Аренда помещений</a></li>
							<li><a href="{{route('admin_truckings')}}">Грузоперевозки</a></li>
							<li><a href="{{route('admin_users')}}">Пользователи</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
	</header>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<form action="{{route('admin')}}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
							<div>
								<input type="file" name="header_banner"><p>Верхний баннер</p>
								<img src="{{asset('assets/image/banner/')}}/{{$header_banner}}">
							</div>
							<div>
							<input type="file" name="side_bar_banner"><p>Сайт-бар баннер</p>
                            <img src="{{asset('assets/image/banner/')}}/{{$side_bar_banner}}">
							</div>
							<div>
							<input type="file" name="service_banner1"><p>Баннер сервиса 1</p>
                            <img src="{{asset('assets/image/banner/')}}/{{$service_banner1}}">
							</div>
							<div>
							<input type="file" name="service_banner2"><p>Баннер сервиса 2</p>
                            <img src="{{asset('assets/image/banner/')}}/{{$service_banner2}}">
							</div>
							
						
					</div>
					<div class="info">
						<h2>Информация о сервисе</h2>
							<p>Первый абзац</p>
						<textarea name="text" id="editor1" cols="30" rows="10"></textarea>
						<p>Второй абзац</p>
						<input type="text" name="title1">
						<textarea name="text2" id="editor2" cols="30" rows="10"></textarea>
						<p>Третий абзац</p>
						<input type="text" name="title2">
						<textarea name="text3" id="editor3" cols="30" rows="10"></textarea>
                        <button type="submit">Изменить данные</button>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"
type="text/javascript" charset="utf-8" ></script>
<script>
        var editor = CKEDITOR.replace( 'editor1' );
</script>

<script>
        var editor = CKEDITOR.replace( 'editor2' );
</script>

<script>
        var editor = CKEDITOR.replace( 'editor3' );
</script>
	
</body>
</html>