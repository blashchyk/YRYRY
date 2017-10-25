<footer>
			<div class="container">
			<div class="row">
			<ul>
				<li><a href="{{route('companions')}}">Поиск попутчиков</a></li>
				<li><a href="{{route('truckings')}}">Грузоперевозки</a></li>
				<li><a href="{{route('transports')}}">Аренда транспорта</a></li>
				<li><a href="{{route('accommodations')}}">Аренда жилья</a></li>
				<li><a href="{{route('about')}}">о сервисе</a></li>
				{{--  <li><a href="#">добавить объявление</a></li>  --}}
			</ul>
			
			</div>
			<p>©2016 Ururu - все для комфортной поездки. Все права защищены.</p>
			</div>
		</footer>

        	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.textchange.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/tcal.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>