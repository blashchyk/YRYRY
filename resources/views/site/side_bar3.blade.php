<div class="col-md-3 col-sm-3 col-xs-12">
    <div class="side_bar_apartments">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-6">
                    <p>Популярные автобусы</p>
                    <div class="travel">
                    @if($transports)
                        @foreach($transports as $transport)
                        <div class="ap">
                            <img src="{{asset('assets/image/transports/')}}/{{$transport->foto}}" alt="">
                            <p class="bus_title">{{$transport->name}}</p>
                            <h2 class="bus_pas">{{$transport->path}}</h2>
                            <p class="price">{{$transport->price}} ₴</p>
                        </div>
                        @endforeach
                        <a href="{{route('transports_all')}}">Смотреть все</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-5">
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
                <div>
        </div>
        
    </div>
</div>