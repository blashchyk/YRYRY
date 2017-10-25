 					<div class="col-md-9 col-sm-9 col-xs-9">
                     @if($detals)
                        <p class="bread_crumbs"><a href="#">Главная</a> / <a href="">Аренда квартир</a> / <span>{{$detals->city}}, {{$detals->location}}</span></p>
                            <h1>{{$detals->city}}, {{$detals->location}}</h1>
                            <div class="detals_bus">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="big_imeges">
                                            <div class="left">
                                                <img src="{{asset('assets/image/slid_button2.png')}}" alt="">
                                            </div>
                                            <div class="right">
                                                <img src="{{asset('assets/image/slid_button1.png')}}" alt="">
                                            </div>
                                            <img class="big" src="{{asset('assets/image/foto_accomm/')}}/{{$detals->foto}}" alt="">
                                            
                                        </div>
                                        <div class="smal_images">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                <img class="one" src="{{asset('assets/image/room8.png')}}" alt="">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <img class="two" src="{{asset('assets/image/room9.png')}}" alt="">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <img class="three" src="{{asset('assets/image/room10.png')}}" alt="">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <img class="four" src="{{asset('assets/image/room11.png')}}" alt="">
                                            </div> 
                                            </div>
                                           

                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="description">
                                            <h5>Комнат: <span>{{$detals->number_rooms}}</span></h5>
                                            <h5>Спальных мест: <span>{{$detals->berths}}</span></h5>
                                            <h5>Площадь: <span>{{$detals->area}} м<sup>2</sup></span></h5>
                                            <h5>Этаж: <span>{{$detals->floor}}</span></h5>
                                            

                                            <h4>{{$detals->price}} ₴ / сутки</h4>

                                            <h5>Владелец: <span>Иван Сидоров</span></h5> 
                                            <p class="kontakt">Показать контакты</p><img src="{{asset('assets/image/cont.png')}}" alt="">

                                            <h3 class="phones">0934501784</h3>
                                            

                                           @if($user_auth !=0)
                                                <button id="message">Задать вопрос водителю</button>
                                                @else
                                                <a href="{{route('register')}}"><button>Зарегестрироваться</button></a>
                                            @endif
                                            <div class="b-popup">
                                                        <div class="b-popup-content">
                                                            <form action="{{route('message')}}" method="post">
                                                            {{ csrf_field() }}
                                                                <h2>Сообщение</h2>
                                                                <input type="hidden" name="user_id" value="{{$detals->user_id}}">
                                                                <input type="hidden" name="from_whom" value="{{$user_auth}}">
                                                                <textarea name="text"></textarea>

                                                                <button type="submit">Отправить</button>
                                                                <button id="reset" type="reset">Отмена</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                            <p>Опубликовано {{$detals->created_at}}</p>
                                            <p>Просмотрено 15 раз</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="detailed_description">
                                    <div class="row">
                                        <div class="col-md-12  col-sm-12 col-xs-12">
                                            <p>{{$detals->text}}</p>
                                        </div>
                                    </div>
                                    <h6>Дополнительные удобства</h6>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <ul>
                                            @if($detals->wifi == 'on')
                                                <li>Wi-Fi</li>
                                            @endif
                                            @if($detals->shower == 'on')
                                                <li>Душевая кабина</li>
                                            @endif
                                            @if($detals->hairdryer == 'on')
                                                <li>Фен</li>
                                            @endif
                                            @if($detals->iron == 'on')
                                            <li>Утюг</li>
                                            @endif 
                                            @if($detals->loggia == 'on')
                                                <li>Лоджия</li>
                                            @endif
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <ul>
                                            @if($detals->parking == 'on')
                                                <li>Бесплатная парковка</li>
                                            @endif
                                            @if($detals->cable == 'on')
                                            <li>Кабельное ТВ</li>
                                            @endif
                                            @if($detals->kettle =="on")
                                                <li>Электрочайник</li>
                                            @endif
                                            @if($detals->jacuzzi == 'on')
                                                <li>Джакузи</li>
                                            @endif
                                            @if($detals->microwave == 'on')
                                            <li>Микроволновая печь</li>
                                            @endif
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <ul>
                                            @if($detals->washer == 'on')
                                            <li>Стиральная машина</li>
                                            @endif
                                            @if($detals->dishwasher =="on")
                                            <li>Посудомоечная машина</li>
                                            @endif
                                            @if($detals->tv == "on")
                                            <li>Телевизор</li>
                                            @endif
                                            @if($detals->armored_door == 'on')
                                            <li>Бронедверь</li>
                                            @endif
                                            @if($detals->electric_stove == 'on')
                                                <li>Электрическая плита</li>
                                            @endif
                                               
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            </div>