<div class="col-md-7 col-sm-9">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>О сервисе</span></p>
                            <h1>О сервисе</h1>
                            <div class="about_service">
                            @if($abouts)
                                @foreach($abouts as $about)
<h3>{{$about->title}}</h3>
                            <p>{!!$about->description!!}</p>
                           
                                @endforeach
                            @endif
                           
								
                            </div>


                   
                        
					</div>