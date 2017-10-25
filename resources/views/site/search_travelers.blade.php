					<div class="col-md-9 col-sm-9 col-xs-12">
<p class="bread_crumbs"><a href="#">Главная</a> / <span>Найти попутчиков</span></p>
							<h1>Поиск попутчиков</h1>
							
							<div class="search_travelers">
							<form method="post" action="{{route('search_travels')}}">
							{{ csrf_field() }}
								<div class="row">
									<div class="col-md-5 col-sm-5  col-xs-5">
										<p>Ищу:</p>
										<label for="men"><input type="radio" name="sex" id="men" checked value="мужчина">Мужчину</label>
										<label for="women"><input type="radio" name="sex" id="women" value="женщина">Женщину</label>
										<label for="all"><input type="radio" name="sex" id="all" value="все">Всех</label>
										
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">										
											<label for="foto_travelers"><input type="checkbox" name="foto" id="foto_travelers">Только с фото</label>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<div class="age">
											<p>Возраст:</p>
											<input type="text" placeholder="От" name="age_min">
											<span>-</span>
											<input type="text" placeholder="До" name="age_max">
										</div>
									</div>
								</div>
								<div class="row search_travel">
									<div class="col-md-12 col-sm-12 col-xs-12">
									
										<input id="search1" type="text" placeholder="Откуда" name="location" required>
										<div class="search1">
											<ul>
												@if($city_location)
													@foreach($city_location as $city)
														<li>{{$city->location}}</li>
													@endforeach
												@endif
											</ul>
										</div>
										<button class="choose" type="reset"><img src="{{asset('assets/image/button_search.png')}}" alt=""></button>
										<input id="search2" class="marg" type="text" placeholder="Куда" name="route" required>
										<div class="search2">
											<ul>
												@if($city_route)
													@foreach($city_route as $city)
														<li>{{$city->location}}</li>
													@endforeach
												@endif
											</ul>
										</div>
										<input class="marg tcal" type="text" placeholder="Дата" name="data" required>
									</div>
										
								</div>
								{{--  <input type="submit" value="Отправить">	  --}}
								<button class="search_passenger">Найти пассажира</button>
							</form>
							</div>
                      

                           
                        <div class="popular_travelers">
							<h2>Популярные попутчики</h2>

							@if($companions)
								@foreach($companions as $companion)
									<div class="row activet">
										<div class="col-md-3 col-sm-4 col-xs-4">
											<div class="user_title">
												<a href="{{route('detal_companion', $companion->id)}}"><img src="{{asset('assets/image/users/'.$companion->foto)}}" alt=""></a>
												<p>{{$companion->name}}</p>
												<h3>{{$companion->location}}-{{$companion->route}}</h3>
												<p class="pop_data">{{$companion->data}}</p>
											</div>
											
										</div>
										<div class="col-md-6 col-sm-5 col-xs-5">
											<div class="messages">
												<p>{{$companion->text}}</p>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-3">
											<div class="places">
												<img src="{{asset('assets/image/Forma 1 copy 5.png')}}" alt="">
												<p>{{$companion->seat}}</p>
											</div>
											
										</div>
							</div>
								@endforeach
							@endif

							<div class="more_info">
								<a href="{{route('companions_all')}}">Смотреть всех</a>
							</div>
											
						</div>
						</div>