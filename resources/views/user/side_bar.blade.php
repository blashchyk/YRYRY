	<div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-0">
						<div class="side_bar">
							<p>Мой аккаунт</p>

							<ul>
								<li><a href="{{route('profile')}}"><i class="glyphicon glyphicon-user"></i>Мой профиль</a></li>
								<li><a href="{{route('personal_data')}}"><i class="fa fa-address-card" aria-hidden="true"></i>Персональные данные</a></li>
								<li><a href="{{route('travel')}}"><i class="glyphicon glyphicon-road"></i>Мои поездки</a></li>
								<li><a href="{{route('messages')}}"><i class="glyphicon glyphicon-envelope"></i>Личные сообщения</a></li>
								<li><a href="{{route('alerts')}}"><i class="glyphicon glyphicon-bell"></i>Оповещения</a></li>
								<li><a href="{{route('settings')}}"><i class="fa fa-cog" aria-hidden="true"></i>Настройки аккаунта</a></li>
								<li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-off"></i>Выход</a></li>
							</ul>

							<div class="banner2">
								<img src="{{asset('assets/image/Rectangle 10.png')}}" alt="">
							</div>
						</div>
					</div>
				{{--  </div>  --}}
			</div>