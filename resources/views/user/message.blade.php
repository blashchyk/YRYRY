				<div class="col-md-8 col-sm-8 col-xs-12">
						<p class="bread_crumbs"><a href="#">Главная</a> / <a href="#">Мой аккаунт</a> / <span>Личные сообщения</span></p>
					
						<div class="content_message">
							<h1>Личные сообщения</h1>
							<p>Новые сообщения </p>
							@if(isset($messages))
								<ul class="messages_send">
									@foreach($messages as $k => $message)
									@if($k !== 0)
										@break
									@endif
										@include('user.message_one',['items'=>$message])
									<div class="reply">
								<h3>Написать сообщение</h3>
								<div class="form_message">
									<form action="{{route('reply')}}" id="form_1" method="post">
									{{ csrf_field() }}
										<input id="message_id" type="hidden" name="messages_id" value="">
										<input id="messanger" type="hidden" name="user_messanger" value="">
										<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
										<textarea name="message" placeholder="Текст сообщения"></textarea>

										<button>Отправить</button>
									</form>
								</div>
								</div>
								@endforeach
								</ul>
								
							@endif							
						</div>
				</div>  