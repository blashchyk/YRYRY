@extends('layouts.site')



@section('header')
    @include('site.header')
@endsection
@section('content')

<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Мой профиль</span></p>
 
					</div>
					<div class="col-md-3 ">

                    </div>
                   
                </div> 
                <div class="auth">
                    <h1>Войти в аккаунт</h1>
                    <div class="autorization">
                        <a href="{{route('auth_vk')}}"><button class="vk">Войти с помощью VK</button></a>
                        
                        <a href="{{route('auth_facebook')}}"><button class="facebook">Войти с помощью Facebook</button></a>

                        <p>Вход с помощью учетной записи</p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}    
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Ваш email">
                        
                        <input id="password" type="password" name="password" required placeholder="Пароль">
                        {{--  <div>
                            <a href="#">Забыли пароль?</a>
                            <a href="#">Зарегистрировать аккаунт</a>
                        </div>  --}}
                        <div class="chek">
                            
                            
                            <label for="check"><input type="checkbox" name="check" id="check">Запомнить меня на этом компьютере</label>
                        </div>
                        <button type="submit">Войти в аккаунт</button>
                        </form>
                    </div>
                </div>
                
			</div>
		</div>
@endsection

@section('footer')
    @include('site.footer')
@endsection
