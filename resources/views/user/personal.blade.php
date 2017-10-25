 					@if($profile)
                     @foreach($profile as $prof)
                     <div class="col-md-8 col-sm-8 col-xs-12">
                    <p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Персональные данные</span></p>
                            <h1>Мои личные данные</h1>
                            <div class="personal_data">
                                <table>
                                    <tr><td>Пол:</td><td>{{$prof->sex}}</td></tr>
                                    <tr><td>Фамилия:</td><td>{{$prof->last_name}}</td></tr>
                                    <tr><td>Имя:</td><td>{{$prof->first_name}}</td></tr>
                                    <tr><td>Отчество:</td><td>{{$prof->patronymic}}</td></tr>
                                    <tr><td>Логин:</td><td>{{$prof->login}}</td></tr>
                                    <tr><td>Дата рождения:</td><td>{{$prof->data_birth}}</td></tr>
                                    <tr><td>Email:</td><td>{{$prof->email}}</td></tr>
                                    <tr><td>Телефон:</td><td>{{$prof->phone}}</td></tr>
                                    <tr><td>Адрес проживания:</td><td>{{$prof->addres}}</td></tr>
                                </table>
                            </div>
                            </div>
                            @endforeach
                            @endif