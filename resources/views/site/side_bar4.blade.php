 <div class="col-md-3 col-sm-3 col-xs-12">
 <div class="side_bar_apartments">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-6">
                                    <p>Новые квартиры</p>
                                    <div class="travel">
                                    @if($accommodations)
                                    @foreach($accommodations as $accommodation)
                                        <div class="ap">
                                            <img src="{{asset('assets/image/foto_accomm/')}}/{{$accommodation->foto}}" alt="">
                                            <p class="bus_title">{{$accommodation->city}}</p>
                                            <h2 class="bus_pas">{{$accommodation->number_rooms}}-комн. квартира</h2>
                                            <p class="price">{{$accommodation->price}} ₴ / сутки</p>
                                        </div>
                                        
                                        @endforeach
                                        <a href="{{route('accommodations_all')}}">Смотреть все</a>
                                        @endif
                                    </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-6">
                                        
                                    <div class="popular_routes">
                                        <p>Популярные отели</p>
                                        <div>
                                            <h2>Отель Премьер Палас</h2>
                                            <p>Киев, Украина</p>
                                            <p class="price">от 7000 &#8372; / сутки</p>
                                        </div>
                                        <div>
                                            <h2>Гостиница Крещатик</h2>
                                            <p>Киев, Украина</p>
                                            <p class="price">от 3000 &#8372; / сутки</p>
                                        </div>
                                            <div>
                                                <h2>PANORAMA Lviv Hotel</h2>
                                                <p>Львов, Ураина</p>
                                                <p class="price">от 1400 &#8372; / сутки</p>
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