<div class="col-md-9 col-sm-9 col-xs-12">

<p class="bread_crumbs"><a href="#">Главная</a> / <span>Добавить аренду жилья</span></p>
                            <h1>Добавить аренду жилья</h1>
                            <div class="add_accom">
								<h3>Что вы сдаете в аренду?</h3>
								<form action="{{route('add_accommodations')}}" method="post" enctype="multipart/form-data">
								 {{ csrf_field() }}
									<div class="add_accom_button">
										<button name="apartment" class="active" type="reset">Квартира</button>
										<input type="hidden" name="appartament" value="apartment">
										<button  name="house" type="reset">Дом</button>
										<button name="hostel" type="reset">Хостел</button>
										<button name="hotel" type="reset">Отель</button>
									</div>
									<div class="add_accom_forms">
										<p>Сроки сдачи:</p>
										<input type="radio" name="data_accom" value="by_the_day" id="check1" checked>
										<label for="check1">Посуточно</label>
										<input type="radio" name="data_accom" value="long_term" id="check2">
										<label for="check2">Длительные срок</label>
										<div class="clear"></div>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="input">
													<input type="text" placeholder="Город" name="city" required>
												<input type="text" placeholder="Кол-во комнат" name="rooms" required>
												<input type="text" placeholder="Площадь (м2)" name="area" required>
												</div>
												
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="input">
													<input type="text" placeholder="Цена за сутки (грн.)" name="price" required>
												<input type="text" placeholder="Кол-во спальных мест" name="berths" required>
												<input type="text" placeholder="Этаж" name="floor" required>
												</div>
												
											</div>
											
										</div>

										<input class="input_one" type="text" placeholder="Адрес квартиры" name="addres" required>
										<p>Дополнительные удобства</p>
										<div class="clear"></div>
										<div class="row checkboxes">
											<div class="col-md-4 col-sm-4 col-xs-5" >
												<ul>
													<li><input type="checkbox" name="wifi" id="wifi"  checked><label for="wifi">Wi-Fi</label></li>
													<li><input type="checkbox" name="shower" id="shower"><label for="shower">Душевая кабина</label></li>
													<li><input type="checkbox" name="hairdryer" id="hairdryer"><label for="hairdryer">Фен</label></li>
													<li><input type="checkbox" name="iron" id="iron"><label for="iron">Утюг</label></li>
													<li><input type="checkbox" name="loggia" id="loggia"><label for="loggia">Лоджия</label></li>
												</ul>
												
												
												
												
												
											</div>
											<div class="col-md-4 col-sm-4 col-xs-7">
												<ul class="marg">
													<li><input type="checkbox" name="parking" id="parking"><label for="parking">Бесплатная парковка</label></li>
													<li><input type="checkbox" name="cable" id="cable"><label for="cable">Кабельное ТВ</label></li>
													<li><input type="checkbox" name="kettle" id="kettle"><label for="kettle">Электрочайник</label></li>
													<li><input type="checkbox" name="jacuzzi" id="jacuzzi"><label for="jacuzzi">Джакузи</label></li>
													<li><input type="checkbox" name="microwave" id="microwave"><label for="microwave">Микроволновая печь</label></li>
												</ul>
													
													
													
													
													
											</div>
											<div class="col-md-4 col-sm-4 col-xs-12">
												<ul class="marg">
													<li><input type="checkbox" name="washer" id="washer"><label for="washer">Стиральная машина</label></li>
													<li><input type="checkbox" name="dishwasher" id="dishwasher"><label for="dishwasher">Посудомоечная машина</label></li>
													<li><input type="checkbox" name="tv" id=""><label for="tv">Телевизор</label></li>
													<li><input type="checkbox" name="armored_door" id="armored_door"><label for="armored_door">Бронедверь</label></li>
													<li><input type="checkbox" name="electric_stove" id="electric_stove"><label for="electric_stove">Электрическая плита</label></li>
												</ul>
													
													
													
													
													
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<input class="input_one" type="email" placeholder="Мой email" value="{{Auth::user()->email}}" required>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
													<input class="input_one" type="text" placeholder="Мой телефон" value="{{Auth::user()->phone}}" required>
											</div>
										</div>
										<textarea class="testarea_one" name="text" id="" placeholder="Комментарий" required></textarea>
										<p>Фотo:</p>
										<div class="file">
												{{--  <button class="file_btn">Выбрать файл...</button>
												<p>Файл не выбран</p>  --}}
												<input type="file" name="foto">
										</div>
									
										<div class="clear"></div>
										<button class="accom">Опубликовать</button>
									</div>
								</form>
								
								
                            </div>

							</div>