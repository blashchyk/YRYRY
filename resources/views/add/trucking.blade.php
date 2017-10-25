                      <div class="col-md-9 col-sm-9">
                      <p class="bread_crumbs"><a href="#">Главная</a> / <span>Добавить грузоперевозку</span></p>
                            <h1>Добавить грузоперевозку</h1>
                            <div class="add_cargo_transportation">
							
								<form action="{{route('add_truckings')}}" method="post" enctype="multipart/form-data">
                                   {{ csrf_field() }}
									<div class="row input">
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="Откуда" name="location">
                                           <input type="text" placeholder="Дата" name="data" class="tcal">
                                            <input type="text" placeholder="Время поездки" name="data_time" class="tcal">
                                            <input type="text" placeholder="Длина грузового места (м)" name="length_package">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                                <input type="text" placeholder="Куда" name="route">
                                               <input type="text" placeholder="Максимальный вес груза (т)" name="maximum_load_weight">
                                                <input type="text" placeholder="Время прибытия" name="arrival time">
                                                <input type="text" placeholder="Ширина грузового места (м)" name="width_package">
                                            </div>
                                    </div>
                                    <div class="dop_info">
										<table>
											<tr><td>Кто едет:</td><td><input type="radio" name="sex" id="sex" value="мужчина" checked><label for="sex">Мужчина</label></td><td><input type="radio" name="sex" id="sex" value="женщина">
											<label for="sex">Женщина</label></td></tr>
											<tr><td>Ищу:</td><td><input type="radio" name="search" id="" value="попутчик">
                                            <label for="search">Попутчика</label></td><td><input type="radio" name="search" id="search" value="груз">
                                            <label for="search">Груз</label></td><tr>
											<tr><td><p>Приму предложения от:</p></td><td><input type="radio" name="proposal" id="proposal" value="мужчина">
                                                <label for="search">Мужчины</label></td><td><input type="radio" name="proposal" id="proposal" value="женщина">
                                                <label for="search">Женщины</label></td><td><input type="radio" name="proposal" id="proposal" value="все" checked>
                                                <label for="search">Всех</label></td></tr>
										</table>
                                     
                                   
                                            <div class="row input">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" placeholder="Мой email" name="email" value="{{$user->email}}">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                        <input type="text" placeholder="Мой телефон" name="tel">
                                                </div>
                                            </div>
                                            <textarea class="testarea_one" name="text" id="" cols="30" rows="10" placeholder="Комментарий"></textarea>
											<p class="rigth">Фотo:</p>
											<div class="file">
													{{--  <button class="file_btn">Выбрать файл...</button>
													<p>Файл не выбран</p>  --}}
                                                    <input type="file" name="foto">
											</div>
										
											<div class="clear"></div>
											<button class="accom" type="submit">Опубликовать</button>
                                    </div>
								</form>
								
								
                            </div>
                            </div>