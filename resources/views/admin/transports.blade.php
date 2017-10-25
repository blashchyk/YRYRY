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
					@if($transports)
                    <form method="post" action="{{route('admin_transports')}}">
                    {{ csrf_field() }}
                        @foreach($transports as $transport)
                        <div class="transport">
                            <div>
                                <h3>{{$transport->name}}</h3>
                                <p>Маршрут: {{$transport->path}}</p>
                                <p>Цена: {{$transport->price}}</p>
                                <p>Мест: {{$transport->seat}}</p>
                                <p>{{$transport->text}}</p>
                            </div>
                            <button name="del" value="{{$transport->id}}">Удалить</button>
                        </div>
                        @endforeach
                        </form>
                    @endif
				</div>
			</div>
		</div>
	</div>
	    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"
type="text/javascript" charset="utf-8" ></script>
<script>
        var editor = CKEDITOR.replace( 'editor1' );
</script>
	
</body>
</html>