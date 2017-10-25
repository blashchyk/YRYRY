@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
	<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>Все попутчики</span></p>
                        <div class="search_content">
                            <h1>Найдено  {{count($companions)}} попутчиков</h1>
                            <div class="sorting">
                                <div>
                                  <p>Сортировать по:</p>
                                <select name="sorting" id="">
                                    <option value="1">Новизне</option>
                                </select>  
                                </div>
                                <div>
                                    <p>Показать по:</p><select name="" id="">
                                        <option value="9">9</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p>страниц на экране</p>
                                </div>
                                
                            </div>
                            <div class="clear"></div>
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
                            </div>
                            
                            <div class="pagination">
                          
                                <div>Показано {{$companions->count()}} из {{count($companions_all)}}</div>
                               
                                @if($companions->lastPage() > 1)
                                 <div>    
                                      {{$companions->links()}}
                                </div>
                                @endif
                               
                                
                            </div>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-3">
                        <div class="search_categories">
                            <h2>Уточнить критерии поиска</h2>
                            <div class="search_input input">
                                <input type="text" placeholder="Откуда">
                                <input type="text" placeholder="Куда">
                                <input type="text" placeholder="Дата">
                                <input type="text" placeholder="Кол-во свободных мест">
                                <select name="avto_type" id="">
                                    <option value="type">Тип Авто</option>
                                </select>
                                <div class="clear"></div>
                                <div class="drive">
                                 <div class="driver_dr">
                                    <div class="row">
                                        <div class="col-md-4col-sm-4">
                                            <p>Водитель:</p>
                                        </div>
                                        <div class="col-md-8 col-sm-4 top">
                                            <label for="man"><input type="radio" name="sex" id="man">Мужчина</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4"></div>
                                        <div class="col-md-8 col-sm-8">
                                            <label for="woman"><input type="radio" name="sex" id="woman">Женщина</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4"></div>
                                        <div class="col-md-8 col-sm-8">
                                            <label for="all"><input type="radio" name="sex" id="all">Все</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="driver-foto">
                                                <label for="foto"><input type="checkbox" name="foto" id="foto" checked>Только с фото</label>
                                            </div>
                                            
                                        </div>
                                        <button class="find_a_trip">Найти поездку</button>
                                    </div>
                                       
                                       
                                          
                                           
                                           
                                           
                                       </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="banner2">
                            <img src="{{asset('assets/image/banner/')}}/{{$side_bar_banner}}" alt="">
                        </div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('side_bar')
   
@endsection

@section('footer')
    @include('site.footer')
@endsection