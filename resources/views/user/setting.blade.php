
    

  
   				@if($settings)
                   @foreach($settings as $set)
                   	<div class="col-md-8 col-sm-8 col-xs-12">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Настройки аккаунта</span></p>
                            <h1>Настройки аккаунта</h1>
                            <div class="settings">

                                 {!! Form::open(['url' => 'user/settings']) !!}
                                    <p class="title_form">Какие мои данные выводить в публичном профиле:</p>
                                    <div class="input-check">
                                            <input type="checkbox" name="fio" id="fio" @if($set->FIO)checked @endif/>
                                            <label for="fio">ФИО</label>
                                            <br>
                                            <input type="checkbox" name="sex" id="sex" @if($set->sex)checked @endif/>
                                            <label for="sex">Пол</label>
                                            <br>
                                            <input type="checkbox" name="email" id="email" @if($set->email)checked @endif/>
                                            <label for="email">Email</label>
                                            <br>
                                            <input type="checkbox" name="date_birth" id="data" @if($set->date_birth)checked @endif/>
                                            <label for="data">Дата рождения</label>
                                            <br>
                                            <input type="checkbox" id="tel" name="phone" @if($set->phone)checked @endif/>
                                            <label for="tel">Номер телефона</label>
                                            <br>
                                         
                                            <input type="checkbox" id="addres" name="address" @if($set->address)checked @endif/>
                                            <label for="addres">Адрес проживания</label>
                                            <br>
                                        </div>
                                        <p class="title_form">Автоматическое бронирование поездок со мной:</p>
                                        <div class="input-radio">
                                                <input type="radio" name="reservation" value="1" @if($set->reserving == 1)checked @endif>
                                                <label for="reservation">Разрешить</label>
                                                <br>
                                                <input type="radio" name="reservation" value="0"@if($set->reserving == 0)checked @endif>
                                                <label for="reservation">Запретить</label>
                                                
                                        </div>
                                        <p class="title_form">Перемещать мои поездки в архивные, если прошло более:</p>
                                        <div class="archive">
                                            <p><input type="text" value="{{$set->archive}}" name="archive">
                                              <span>дней</span></p>
                                        </div>
                                        <button>Сохранить</button>



                                    {!! Form::close() !!}
                             
                                
                            </div>
</div>
@endforeach
                   @endif
                        