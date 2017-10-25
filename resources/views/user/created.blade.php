@if($profile)
@foreach($profile as $prof)
<div class="col-md-8 col-sm-12 col-xs-12">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Мой профиль</span></p>
                        <div class="profile">

                        <form action="{{route('profile_created')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="profile_avatar">
                                    
                                         @if($prof->facebook_id !="")
                                              <label for="uploadbtn" class="uploadButton"><img src="{{asset('assets/image/users')}}/{{$prof->foto}}" alt="{{$prof->name}}"></label>
<input multiple="multiple" style="opacity: 0; z-index: -1;" type="file" name="foto" id="uploadbtn">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            @elseif($prof->facebook_id == ""):
                                              <label for="uploadbtn" class="uploadButton"><img src="{{asset('assets/image/users')}}/{{$prof->foto}}" alt="{{$prof->name}}"></label>
<input multiple="multiple" style="opacity: 0; z-index: -1;" type="file" name="foto" id="uploadbtn">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        @endif
                                        {{--  <input type="file" name="foto">  --}}
                                        {{--  <label for="uploadbtn" class="uploadButton"><img src="{{asset('assets/image/users')}}/{{$prof->foto}}" alt="{{$prof->name}}"></label>
<input style="opacity: 0; z-index: -1;" type="file" name="foto" id="uploadbtn">  --}}
                                        {{--  <a href="#">Загрузить новое фото</a>
                                        <br>
                                        <a href="#">Удалить фото</a>  --}}
                                    </div>
                                    
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="user_title">
                                        <h1>{{$prof->first_name}} {{$prof->last_name}}</h1>
                                    <a href="{{route('profile_created')}}"><i class="fa fa-pencil" aria-hidden="true"></i>Редактировать профиль</a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="user_profile">
                                        <div>
                                            <p>Пол:</p>
                                        <input type="text" name='sex' value="{{$prof->sex}}" name="sex">
                                        </div>
                                        
                                        <div>
                                              <p>Дата рождения:</p>
                                            <input type="text" class="tcal" name='data' value="{{$prof->data_birth}}" name="bday">
                                        </div>
                                     
                                      <div>
                                          <p>Email:</p>
                                        <input type="text" name='email' value="{{$prof->email}}" name="email">
                                      </div>
                                   
                                     <div>
                                         <p>Телефон:</p>
                                        <input type="text" name='phone' value="{{$prof->phone}}" name="phone">
                                     </div>
                                      <div>
                                           <p>Автомобиль:</p>
                                        <input type="text" name='avto' value="{{$prof->avto}}" name="avto">
                                      </div>
                                    
                                       <div>
                                           <p>О себе:</p>
                                        <textarea name="about" id="">{{$prof->about}}</textarea>
                                       </div>
                                       <div class="button_btn">
                                            <button type="submit">Сохранить</button>
                                            <button class="reset" type="reset">Отмена</button>
                                        
                                       </div>
                                       
                                     
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </form>
                        </div>
    @endforeach
@endif