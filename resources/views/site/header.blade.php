		<header>

		
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div class="logo">
								<a href="{{route('home')}}"><img src="{{asset('assets/image/logo.png')}}" alt="logo"></a>
								<p>все для комфортных поездок</p>
							</div>	
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<div class="banner">
							<img src="{{asset('assets/image/banner/')}}/{{$header_banner}}" alt="banner">
						</div>						
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					@if(!Auth::id())
					<div class="entry">
						<a href="{{route('login')}}"><button class="login_head">Войти</button></a>
						<a href="{{route('register')}}"><button class="reg_hed">Регистрация</button></a>
					</div>
						@else
						<div class="user">
							@if(Auth::user()->facebook_id !="")
								<img class="avatar" src="{{Auth::user()->foto}}" alt="user">
								@elseif(Auth::user()->facebook_id =="")
								<img class="avatar" src="{{asset('assets/image/users/')}}/{{Auth::user()->foto}}" alt="user">
							@endif


							
							<p class="user_name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
							<p class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Мой аккаунт <i class="fa fa-angle-down" aria-hidden="true"></i>
							</p>

							<ul class="dropdown-menu">
									<li><a href="{{route('profile')}}">Мой профиль</a></li>
									<li><a href="{{route('personal_data')}}">Персональные данные</a></li>
									<li><a href="{{route('travel')}}">Мои поездки</a></li>
									<li><a href="{{route('messages')}}">Личные сообщения</a></li>
									<li><a href="{{route('alerts')}}">Оповещения</a></li>
									<li><a href="{{route('settings')}}">Настройки аккаунта</a></li>
									<li><a href="{{route('logout')}}">Выход</a></li>
									
								  </ul>
							<div class="forma_1">
								<ul>
									<li><a href="{{route('messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i>									</a></li>
									<li><a href="{{route('alerts')}}"><i class="fa fa-bell" aria-hidden="true"></i>									</a></li>
									<li><a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>
									</a></li>
								</ul>
							</div>
						</div>
					@endif
						
					</div>
				</div>
			</div>
		</header>

		<div class="nav_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12"><div class="btn-group main_menu_down">
   									<button type="button" class="btn btn-default">Меню</button>
      								<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
									<ul class="dropdown-menu main">
										<li><a href="{{route('companions')}}">Поиск попутчиков</a></li>
										<li><a href="{{route('truckings')}}">Грузоперевозки</a></li>
										<li><a href="{{route('transports')}}">Аренда транспорта</a></li>
										<li><a href="{{route('accommodations')}}">Аренда жилья</a></li>
										<li><a href="{{route('about')}}">о сервисе</a></li>
										
									</ul>
    							</div>
						<ul>
							<li><a href="{{route('companions')}}">Поиск попутчиков</a></li>
							<li><a href="{{route('truckings')}}">Грузоперевозки</a></li>
							<li><a href="{{route('transports')}}">Аренда транспорта</a></li>
							<li><a href="{{route('accommodations')}}">Аренда жилья</a></li>
							<li><a href="{{route('about')}}">о сервисе</a></li>
							{{--  <li><a href="#">добавить объявление</a></li>  --}}
							   
						</ul> 
						
					</div>
				</div>
			</div>
		</div>