  					<div class="col-md-8 col-offset-1 col-sm-9 col-xs-12">
  <p class="bread_crumbs"><a href="#">Главная</a> / <span>Аренда автобусов</span></p>
                            <h1>Аренда автобусов</h1>
                            <div class="bus_rental">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="btn_bus_search">
                                        <form action="{{route('search_transport')}}" method="post">
                                         {{ csrf_field() }}
                                            <input type="text" placeholder="Откуда" name="location">
                                            <button class="btn_bus"><img src="{{asset('assets/image/button_search.png')}}" alt=""></button>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                            <input type="text" placeholder="Куда" name="route">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" placeholder="Дата" name="data">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="bus_price">
                                           
                                             Цена: <input type="text" placeholder="От" name="min_name"> -
                                            <input type="text" placeholder="До" name="max_name">  

                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" placeholder="Марка автобуса" name="brand">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" placeholder="Кол-во мест" name="seats">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="search_bus_section">
                                            <button class="search_bus">Найти автобус</button>
                                            <div><label for="foto"><input type="checkbox" name="foto" id="folo" checked>Только с фото</label></div>
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                                <form>
                            </div>

                            <h3>Новые автобусы</h3>
                            <div class="new_bus">

                            @if($transports)
                                @foreach($transports as $transport)
                                {{--  <div class="bus active">  --}}
                               
                                <div class="bus">
                                        <div class="img">
                                            <img src="{{asset('assets/image/transports/'.$transport->foto)}}" alt=""> 
                                            <p>5 фото</p>
                                        </div>
                                        <div class="text_bus">
                                            <a href="{{route('detal_bus', $transport->id)}}"><h4>{{$transport->name}}</h4></a>
                                            <p class="territory">{{$transport->path}}</p>
                                            <p class="price">{{$transport->price}} ₴ </p>
                                            <p class="places">Количество пассажирских мест: <span>{{$transport->seat}}</span></p>
                                            <p class="text">{{$transport->text}}</p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                @endforeach
                                    
                            @endif

                                        <a href="{{route('transports_all')}}">Смотреть все</a>
                            </div>
                            </div>