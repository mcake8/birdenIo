<?php include('header.php');?>
<?php include('menu.php');?>
<div class="wraping">
	<div class="descriping">
		<div class="descriping-title">Описание аниме</div>
		<form >
			<div class="input-title">Заголовок</div>
			<input type="text" placeholder="Введите логин">	
			<div class="input-title">Производство</div>
			<input type="text" placeholder="Введите логин">	
			<div class="input-title">Жанр</div>
			<input type="text" placeholder="Введите логин">
			<div class="input-title">Тип аниме</div>
			<input type="text" placeholder="Введите логин">
			<div class="input-title">Дата выпуска</div>
			<input type="text" placeholder="Введите логин">
			<div class="input-title">Описание</div>
			<textarea placeholder="Введите логин"></textarea>
			<button>Сохранить описание</button>
		</form>
	</div>
	<div class="series-list">
		<div class="descriping-title">Список серий</div>
		<div class="input-title">Существующие серии:</div>
		<div class="url-number">
			<div class="numer">№1</div>
			<a href="#"></a>
			<div class="anime-source">www.anime.com/data1.mp4</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>