 					@if($profile)
                 
                        @foreach($profile as $prof)
  <div class="col-md-8 col-sm-12 col-xs-12">
                     <p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Мой профиль</span></p>
                        <div class="profile">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="profile_avatar">
                                        @if($prof->facebook_id !="")
                                            <img src="{{$prof->foto}}" alt="{{$prof->name}}">
                                            @elseif($prof->facebook_id == ""):
                                            <img src="{{asset('assets/image/users')}}/{{$prof->foto}}" alt="{{$prof->name}}">
                                        @endif
{{--                                          
                                        <a href="#">Загрузить новое фото</a>
                                        <br>
                                        <a href="#">Удалить фото</a>  --}}
                                    </div>
                                    
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="user_title">
                                        <h1>{{$prof->first_name}} {{$prof->last_name}}</h1>
                                    <a href="{{route('profile_created')}}"><i class="fa fa-pencil" aria-hidden="true"></i>Редактировать профиль</a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="user_profile1">
                                        <table>
                                            <tr><td>Пол:</td><td>{{$prof->sex}}</td></tr>
                                            <tr><td>Дата рождения:</td><td>{{$prof->data_birth}}</td></tr>
                                            <tr><td>Email:</td><td>{{$prof->email}}</td></tr>
                                            <tr><td>Телефон:</td><td>{{$prof->phone}}</td></tr>
                                            <tr><td>Автомобиль:</td><td>{{$prof->avto}}</td></tr>
                                            <tr><td>О себе:</td><td>
                                                {{$prof->about}}</td></tr>
                                        </table>
                    
                                
                                     
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                     @endif
                   