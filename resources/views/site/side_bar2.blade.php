<div class="col-md-3 col-sm-12  col-xs-12">
<div class="side_bar_apartments">
    <div class="col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-6">
                                    <p>Популярные грузовики</p>
                                    <div class="travel">
                                    @if($truckings)
                                    @foreach($truckings as $truck)
                                        <div class="ap">
                                            <img src="{{asset('assets/image/foto_trucking/')}}/{{$truck->foto}}" alt="">
                                            <p class="bus_title">{{$truck->location}} - {{$truck->route}}</p>
                                            <h2 class="bus_pas">{{$truck->data}}</h2>
                                            <p class="price">{{$truck->price}} ₴</p>
                                        </div>
                                        
                                        @endforeach
                                        <a href="{{route('truckings_all')}}">Смотреть все</a>
                                        @endif
                                    </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div class="popular_routes">
                                        <p>Популярные маршруты</p>
                                        <div>
                                            <h2>Киев - Одесса</h2>
                                            <p>84 предложения</p>
                                            <p class="price">от 100 &#8372;</p>
                                        </div>
                                        <div>
                                            <h2>Львов - Хмельницкий</h2>
                                            <p>56 предложений</p>
                                            <p class="price">от 90 &#8372;</p>
                                        </div>
                                        <div>
                                            <h2>Чернигов - Киев</h2>
                                            <p>43 предложения</p>
                                            <p class="price">от 60 &#8372;</p>
                                        </div>
                                        <a href="">Смотреть все</a>	
                                    </div>
                                    <div id="banner2">
                                            <img src="{{asset('assets/image/banner/')}}/{{$side_bar_banner}}" alt="">
                                    </div>
        </div>
    </div>
</div>
</div>