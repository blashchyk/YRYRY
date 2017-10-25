                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>Добавить поездку</span></p>
                            <h1>Добавить поездку</h1>
                            <div class="add_trip">
							
								<form action="{{route('add_trip')}}" method="post">
                                {{ csrf_field() }}
									<div class="row input">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" placeholder="Откуда" name="location" required>
                                           <input type="text" placeholder="Дата" name="data" class="tcal" required>
                                            <input type="text" placeholder="Время выезда" name="data_time" >
                                           
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="text" placeholder="Куда" name="route" required>
                                               <input type="text" placeholder="Кол-во свободных мест" name="number_of_available_seats" required>
                                                <input type="text" placeholder="Время прибытия" name="arrival_time">
                                               
                                            </div>
                                    </div>
                                    <div class="dop_info">
                                        <div>
                                    
                                            <table>
													<tr><td>Кто едет:</td><td><input type="radio" name="sex" id="sex" value="мужчина" checked><label for="sex">Мужчина</label></td><td><input type="radio" name="sex" value="женщина" id="sex">
													<label for="sex">Женщина</label></td><td><input type="radio" name="sex" id="sex" value="семья">
														<label for="sex">Семья</label></td><td><input type="radio" name="sex" id="sex" value="компания">
															<label for="sex">Компания</label></td></tr>
													<tr><td>Ищу:</td><td><input type="radio" name="search" id="" value="попутчик" checked>
													<label for="search">Попутчика</label></td><td><input type="radio" name="search" id="search" value="груз">
													<label for="search">Груз</label></td><tr>
													<tr><td><p>Приму предложения от:</p></td><td><input type="radio" name="proposal" id="proposal" value='мужчина'>
														<label for="search">Мужчины</label></td><td><input type="radio" name="proposal" id="proposal" value="женжина">
														<label for="search">Женщины</label></td><td><input type="radio" name="proposal" id="proposal" value="все" checked>
														<label for="search">Всех</label></td></tr>
												</table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <input class="input_one" type="text" placeholder="Мой email" value="{{$user->email}}">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <input class="input_one" type="text" placeholder="Мой телефон">
                                                </div>
                                            </div>
                                            <textarea class="testarea_one" name="text" id="" cols="30" rows="10" placeholder="Комментарий"></textarea>
                                            <p class="foto_p">Фотo:</p>
											<div class="file">
                                            <input type="file" name="foto">
													{{--  <button class="file_btn" type="file" name="foto">Выбрать файл...</button>
													<p>Файл не выбран</p>  --}}
											</div>
										
											<div class="clear"></div>
											<button class="accom" type="submit">Опубликовать</button>
                                    </div>
								</form>
								
								
                            </div>
                            </diV>