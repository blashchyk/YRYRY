@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection
@section('content')
	<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>Регистрация</span></p>
 
					</div>
					<div class="col-md-3 col-sm-3">

                    </div>
                </div> 
                <div class="check_in">
                    <h1>Присоединяйтесь к нам!</h1>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <h2>Привяжите свои учетные записи соцсетей к Уруру за несколько секунд</h2>
                                    
                                    <a href="{{route('auth_vk')}}"><button class="vk">Войти с помощью VK</button></a>
                                    <a href="{{route('auth_facebook')}}"><button class="facebook">Войти с помощью Facebook</button></a>
                                   
                                    <p>Мы ничего не публикуем без вашего согласия</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="register">
                                <div class="row">
                                 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                     {{ csrf_field() }}
                                    <div class="col-md-12 col-sm-12">
                                        <h2>Зарегистрируйтесь обычным способом через email</h2>
                                         
                                        <div class="cheked">
                                            <label for="man"><input type="radio" name="sex" value="мужской" id="man" checked>Мужчина</label>
                                            <label for="woman"><input type="radio" name="sex" id="woman" value="женский" >Женщина</label>
                                        </div>

                                        <div class="row input">
                                            <div class="main_class">
                                                <div class="col-md-6 col-sm-12">
                                                <input tabindex="1" type="text" placeholder="Ваше имя" name="first_name">
                                                <input tabindex="3" type="email" placeholder="Ваш email" name="email">
                                                <input tabindex="5" type="password" name="password" placeholder="Пароль">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                    <input tabindex="2" type="text" placeholder="Ваша фамилия" name="last_name">
                                                    <input class="tcal" tabindex="4" type="text" placeholder="Дата рождения" name="data_birth">
                                                    <input tabindex="6" type="password" placeholder="Подтвердить пароль" name="password_confirmation">
                                            </div>
                                            </div>
                                            
                                        </div>
                                        <div class="agreement">
                                            <label for="agreement"><input type="checkbox" name="" id="agreement" checked>Я ознакомлен и принимаю <a href="#">Условия пользования</a> и <a href="#">Политику конфиденциальности</a></label>
                                        </div>
                                        <button class="register_btn">Зарегистрироваться</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
			</div>
		</div>

@endsection
@section('footer')
    @include('site.footer')
@endsection
