@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
    <div class="home_slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Сделайте свою поездку комфортной!</h1>
                        <p>Поиск попутчиков, перевозки попутного груза, аренда легковых и грузовых автомобилей, автобусов и такси, квартир и хостелов - все это стало доступно на одном сайте! С помощью Ururu вы сделаете вашу поездку максимально комфортной.</p>


                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="conteiner_slider">
                              <h2>Вы пассажир?</h2>
                            <ol>
                                <li>Найдите подходящий для Вас маршрут</li>
                                <li>Выберите водителя и/или забронируйте жилье</li>
                                <li>Наслаждайтесь поездкой!</li>
                            </ol>
                            <a href="{{route('companions')}}"><button class="green">Найти поездку</button></a>  
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="conteiner_slider">
                                <h2>Вы водитель/владелец жилья?</h2>
                            <ol>
                                <li>Зарегистрируйтесь на сайте</li>
                                <li>Добавьте объявление в соответствующий раздел</li>
                                <li>Получайте довольных клиентов!</li>
                            </ol>
                             <a href="{{route('register')}}"><button class="orange" >Зарегистрироваться</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="container abs">
                <div class="row main_hide">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Последние объявления</h2>
                        <table>
                            <thead>
                                <tr>
                                    <td>Автор</td>
                                    <td>Маршрут</td>
                                    <td>Дата/Время</td>
                                    <td>Автомобиль</td>
                                    <td>Места/Груз</td>
                                    <td>Цена</td>
                                    <td>Действие</td>
                                </tr>
                            </thead>
                            <tbody>
                            @if($trucking)
                                @foreach($trucking as $truck)
                                <tr>
                                    <td><img src="{{asset('assets/image/foto_trucking/')}}/{{$truck->foto}}" alt="">Иван Сидоров</td>
                                    <td class="bold">{{$truck->location}} - {{$truck->route}}</td>
                                    <td class="datas">{{$truck->data}}</td>
                                    <td>{{$truck->avto}}</td>
                                    <td>{{$truck->weight}} тонн</td>
                                    <td>{{$truck->price}} ₴</td>
                                    <td><a href="{{route('detal_truck', $truck->id)}}">Смотреть</a></td>
                                </tr>
                                @endforeach
                            @endif
                                
                                {{--  <tr>
                                    <td><img src="{{asset('assets/image/')}}/{{$companion->foto}}" alt="">Александр Петров</td>
                                    <td class="bold">{{$companion->location}} - {{$companion->route}}</td>
                                    <td class="datas">{{$companion->data}}</td>
                                    <td>Ford Fiesta</td>
                                    <td>{{$companion->seat}}</td>
                                    <td>{{$companion->price}} ₴</td>
                                    <td><a href="#">Смотреть</a></td>
                                </tr>  --}}
                            @if($transport)
                                @foreach($transport as $trans)
                                    <tr>
                                    <td><img src="{{asset('assets/image/transports/')}}/{{$trans->foto}}" alt="">Петр Иванов</td>
                                    <td class="bold">{{$trans->path}}</td>
                                    <td class="datas">{{$trans->created_at}}</td>
                                    <td>{{$trans->name}}</td>
                                    <td>{{$trans->bulk}} тонн</td>
                                    <td>{{$trans->price}} ₴</td>
                                    <td><a href="{{route('detal_bus', $trans->id)}}">Смотреть</a></td>
                                </tr>
                                @endforeach
                            @endif
                               
                                {{--  <tr>
                                    <td><img src="{{asset('assets/image/foto_accomm')}}/{{$accommodation->foto}}" alt="">Игорь Ковальский</td>
                                    <td class="bold">{{$accommodation->city}}</td>
                                    <td class="datas">{{$accommodation->created_at}}</td>
                                    <td>{{$accommodation->area}}м<sup>2</sup></td>
                                    <td>{{$accommodation->number_rooms}}-комн.квартира</td>
                                    <td>{{$accommodation->price}} ₴</td>
                                    <td><a href="{{route('detal_apartment', $accommodation->id)}}">Смотреть</a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets/image/Rectangle 15 copy 5.png')}}" alt="">Иван Сидоров</td>
                                    <td class="bold">Киев - Одесса</td>
                                    <td class="datas">14 окт в 8:00</td>
                                    <td>MAZ 5t</td>
                                    <td>5 тонн</td>
                                    <td>200 ₴</td>
                                    <td><a href="">Смотреть</a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets/image/Rectangle 5 copy.png')}}" alt="">Александр Петров</td>
                                    <td class="bold">Львов - Хмельницкий</td>
                                    <td class="datas">18 окт в 6:30</td>
                                    <td>Ford Fiesta</td>
                                    <td>2 места</td>
                                    <td>300 ₴</td>
                                    <td><a href="">Смотреть</a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets/image/Rectangle 15 copy 5.png')}}" alt="">Петр Иванов</td>
                                    <td class="bold">Чернигов - Винница</td>
                                    <td class="datas">20 окт в 8:00</td>
                                    <td>MAZ 5t</td>
                                    <td>5 тонн</td>
                                    <td>200 ₴</td>
                                    <td><a href="">Смотреть</a></td>
                                </tr>  --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="category">
                <h2>Категории</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category1.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                            <h3>Поиск попутчиков</h3>
                            <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                            <a href="{{route('companions')}}"><button>Найти поездку</button></a>
                            <a href="{{route('add_trip')}}"><button>Добавить объявление</button></a>
                            </div>
                            

                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category2.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                <h3>Попутный груз</h3>
                                <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                <a href="{{route('truckings')}}"><button>Найти поездку</button></a>
                                <a href="{{route('add_truckings')}}"><button>Добавить объявление</button></a>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category3.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                <h3>Аренда грузовых авто</h3>
                                <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                <a href="{{route('truckings')}}"><button>Найти грузовое авто</button></a>
                                <a href="add_transports"><button>Добавить объявление</button></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category4.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                <h3>Аренда автобуса</h3>
                                <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                <a href="{{route('transports')}}"><button>Найти автобус</button></a>
                                <a href="add_transports"><button>Добавить объявление</button></a>
                            </div>
                                
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="section">
                                    <img src="{{asset('assets/image/category5.png')}}" alt="">
                                    <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                    <h3>Аренда легкового авто</h3>
                                    <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                    <a href="{{route('transports')}}"><button>Найти легковое авто</button></a>
                                    <a href="add_transports"><button>Добавить объявление</button></a>
                                </div>
                                
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="section">
                                    <img src="{{asset('assets/image/category6.png')}}" alt="">
                                    <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                    <h3>Такси</h3>
                                    <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                    <a href="{{route('transports')}}"><button>Найти такси</button></a>
                                    <a href="add_transports"><button>Добавить объявление</button></a>
                                </div>
                                
                            </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category7.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                <h3>Аренда квартир</h3>
                                <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                <a href="{{route('accommodations')}}"><button>Найти квартиру</button></a>
                                <a href="{{route('add_accommodations')}}"><button>Добавить объявление</button></a>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category8.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                                <h3>Аренда домов</h3>
                                <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                                <a href="{{route('house')}}"><button>Найти дом</button></a>
                                <a href="{{route('add_accommodations')}}"><button>Добавить объявление</button></a>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="section">
                                <img src="{{asset('assets/image/category9.png')}}" alt="">
                                <img class="triug" src="{{asset('assets/image/triugolnik.png')}}" alt="">
                            <h3>Хостел</h3>
                            <p>Пассажиры имеют возможность быстрее и дешевле добраться до места назначения, а водители могут сэкономить приличную сумму на бензин.</p>
                            <a href="{{route('hostel')}}"><button>Найти хостел</button></a>
                            <a href="{{route('add_accommodations')}}"><button>Добавить объявление</button></a>
                            </div>
                            
                        </div>
                </div>
                </div>
               
            </div>	
            <div class="about_us">
                <h2>Отзывы о нас</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="section">
                                <img src="{{asset('assets/image/cav.png')}}" alt="">
                                <h3>Екатерина (пассажир)</h3>
                                <h6>г. Киев</h6>
                                <p>Замечательный сервис, пользуюсь регулярно, когда нужно срочно куда-то поехать. Еще ни разу не подводил. Особенно удобно, что и транспорт, и жилье можно подобрать на одном сайте, не тратя лишнее время. Рекомендую!</p>
                        
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="section">
                                   <img src="{{asset('assets/image/cav.png')}}" alt="">
                                <h3>Андрей (водитель)</h3>
                                <h6>г. Запорожье</h6>
                                <p>Сэкономил много денег на топливо благодаря сервису Ururu, да еще и познакомился к интересными людьми. Желающие поехать со мной находятся быстро, а вместе всегда веселее. Буду рекомендовать своим друзьям и знакомым.</p>
                       
                            </div>
                          </div>
                    </div>
                </div>
            </div>	
@endsection



@section('footer')
    @include('site.footer')
@endsection