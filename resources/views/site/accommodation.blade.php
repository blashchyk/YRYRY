					<div class="col-md-8 col-offset-1 col-sm-9 col-xs-12">
<p class="bread_crumbs"><a href="#">Главная</a> / <span>Аренда жилья</span></p>
                            <h1>Аренда жилья</h1>
                            <form method="post" action="{{route('search_accommodation')}}">
                            {{ csrf_field() }}
                            <div class="rental_property">
                                <div class="rental_btn add_accom_button">
                                    <button name="apartment" class="active" value="1"type="reset">Квартира</button>
                                    <input type="hidden" name="appartament" value="apartment">
                                    <button name="house" type="reset">Дом</button>
                                    <button name="hostel" type="reset">Хостел</button>
                                    <button name="hotel" type="reset">Отель</button>
                                </div>

                                <div class="property">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="number_rooms">
                                               <label for="1"><input type="radio" name="number_rooms" value="1" id="1" checked>1-комн.</label>
                                                <label for="2"><input type="radio" name="number_rooms" value="2" id="2">2-комн.</label>
                                                <label for="3"><input type="radio" name="number_rooms" value="3" id="3">3-комн.</label>
                                                <label for="4"><input type="radio" name="number_rooms" value="4" id="4">4-комн. и больше</label> 
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="foto_rooms">
                                                <label for="foto"><input type="checkbox" name="foto" id="foto" checked>Только с фото</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="data_rooms">
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                <input name="city" id="search3" type="text" placeholder="Город" required>
                                                <div class="search3">
                                                <ul>
                                                @if($city_accommodations)
                                                @foreach($city_accommodations as $city)
                                                <li>{{$city->city}}</li>
                                                @endforeach
                                                @endif
                                                </ul>
                                                </div>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <input class="tcal" type="text" name="arrival_date" placeholder="Дата въезад"> - 
                                            <input class="tcal" type="text" name="departure" placeholder="Дата выезда">
                                        </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="price_rooms">
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                            
                                            Цена за сутки:
                                            <input type="text" placeholder="От" name="price_from" required> - 
                                            <input type="text" placeholder="До" name="price_up_to" required>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <input type="text" placeholder="Общая площадь, м2" name="total_area">
                                            <input type="text" placeholder="Кол-во спальных мест" name="number_of_berths">
                                        </div>
                                        </div>
                                        <button class="btn_rooms">Найти квартиру</button>
                                    </div>
                                    
                                </div>
                            </div>
                            </form>
                            <h3>Популярные {{$type}}</h3>
                            <div class="new_bus">
                            @if($accommodations)
                                @foreach($accommodations as $accommodation)
                                 {{--  <div class="bus active">  --}}
                                 <div class="bus">
                                    <div class="img">
                                        <img src="{{asset('assets/image/'.$accommodation->foto)}}" alt=""> 
                                        <p>15 фото</p>
                                    </div>
                                    <div class="text_bus">
                                        <a href="{{route('detal_apartment', $accommodation->id)}}"><h4>{{$accommodation->city}}, {{$accommodation->location}}</h4></a>
                                        <p class="territory">{{$accommodation->number_rooms}}-комн. квартира</p>
                                        <p class="price">{{$accommodation->price}} ₴ / сутки</p>
                                        
                                        <p class="text">{{$accommodation->text}}</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                @endforeach
                            @endif
                                        @if($route == 'accommodations_all_house')
                                        <a href="{{route('accommodations_all_house')}}">Смотреть все</a>
                                        @endif
                                        @if($route =='accommodations_all')
                                        <a href="{{route('accommodations_all')}}">Смотреть все</a>
                                        @endif
                                        @if($route == 'accommodations_all_hostel')
                                            <a href="{{route('accommodations_all_hostel')}}">Смотреть все</a>
                                        @endif
                            </div>
                            </div>