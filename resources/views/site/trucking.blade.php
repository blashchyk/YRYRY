
 
 <div class="col-md-8 col-offset-1 col-sm-9 col-xs-12">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>Аренда грузовый автомобилей</span></p>
                            <h1>Аренда грузовых автомобилей</h1>
                            <div class="bus_rental">
                            <form action="{{route('search_truckings')}}" mathod="post">
                               {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="btn_bus_search">
                                            <input id="search4" type="text" placeholder="Откуда" name="location" required>
                                            <div class="search4">
                                                <ul>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <button class="btn_bus"><img src="{{asset('assets/image/button_search.png')}}" alt=""></button>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-4">
                                            <input type="text" placeholder="Куда" name="route" required>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" placeholder="Дата" name="data" class="tcal" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="bus_price">
                                           
                                             Цена: <input type="text" placeholder="От" name="min_price"> -
                                            <input type="text" placeholder="До" name="max_price">  

                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 weight">
                                        <div>
                                                Масса, т: <input type="text" placeholder="От" name="min_weight"> -
                                                <input type="text" placeholder="До" name="max_weight"> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 bulk" >
                                        <div>
                                                Объем, м<sup>3</sup> <input type="text" placeholder="От" name="min_bulk"> -
                                                <input type="text" placeholder="До" name="max_bulk">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="search_bus_section">
                                            
                                            <div><label for="foto"><input type="checkbox" name="foto" id="folo" checked>Только с фото</label></div>
                                        <button class="search_bus">Найти автобус</button>
                                        </div>
                                        
                                    </div>
                                </div>

                            </form>
                            </div>

                            <h3>Новые грузовые автомобили</h3>


                            <div class="new_bus">
                             @if($truckings)
                                @foreach($truckings as $trucking)
                                    {{--  <div class="bus active">  --}}
                                    <div class="bus">
                                    <div class="img">
                                        <img src="{{asset('assets/image/foto_trucking/'.$trucking->foto)}}" alt=""> 
                                        <p>5 фото</p>
                                    </div>
                                    <div class="text_bus">
                                    
                                        <a href="{{route('detal_truck', $trucking->id)}}"><h4>{{$trucking->location}} - {{$trucking->route}}</h4></a>
                                        <p class="territory">{{$trucking->created_at}}</p>
                                        <p class="price">{{$trucking->price}} ₴ </p>
                                        <p class="places">Авто: {{$trucking->avto}}, масса: {{$trucking->weight}}т, объем: {{$trucking->bulk}} м3, год выпуса: {{$trucking->year}}</p>
                                        <p class="text">{{$trucking->text}}</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                @endforeach
                                
                            @endif

                                        <a href="{{route('truckings_all')}}">Смотреть все</a>
                            </div>
                        </div>