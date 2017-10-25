<div class="col-md-9 col-sm-9 col-xs-12">
                        <p class="bread_crumbs"><a href="#">Главная</a> / <span>Добавить аренду транспорта</span></p>
                            <h1>Добавить аренду транспорта</h1>
                            <div class="add_transport">
								<h3>Что вы сдаете в аренду?</h3>
								<form action="{{route('add_transports')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
									<div class="add_accom_button">
										<button type="reset">Грузовик</button>
										<button type="reset" class="active" name="bus" value="bus">Автобус</button>
										
										<button type="reset">Легковое авто</button>
										
									</div>
									<div class="add_transport_forms">
										<div class="row input">
                                            <div class="col-md-6 col-sm-6  col-xs-6">
                                                <input type="text" placeholder="Город" name="city" required>
                                                <input type="text" placeholder="Объем (м3)" name="bulk">
                                                <input type="text" placeholder="Длина грузового места" name="length_of_package">
                                                <input type="text" placeholder="Марка и модель" name="brand" required>
                                                <input type="text" placeholder="Мой email" name="email" required>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="text" placeholder="Цена за сутки (грн.)" name="price" required>
                                                <input type="text" placeholder="Масса (т)" name="weight">
                                                <input type="text" placeholder="Ширина грузового места" neme="width_of_package">
                                                <input type="text" placeholder="Год выпуска" name="year" required>
                                                <input type="text" placeholder="Мой телефон" name="phone" required>
											</div>
											
                                           
										
											
										</div>
									 <textarea class="testarea_one" name="text" id="" cols="30" rows="10" placeholder="Комментарий" required></textarea>
									 <p>Фотo:</p>
									 <div class="file">
									 	<input type="file" name="foto">
											 {{--  <button class="file_btn">Выбрать файл...</button>
											 <p>Файл не выбран</p>  --}}
									 </div>
								 
									 <div class="clear"></div>
									 <button class="accom">Опубликовать</button>
									</div>
								</form>
								
								
                            </div>
					</div>