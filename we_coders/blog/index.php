<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блог");
?><div class="blog-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				 <!-- Запись блога 1 --> <article class="post-wrapper mb-60">
				<div class="post-img hover-bg-opacity">
 <a href="blog_detail1.html"> <img src="/local/templates/we_coders_inner/img/blog/blog1.jpg" alt=""> </a>
				</div>
				<div class="post-content">
					<h3> <a href="blog_detail1.html">Блог на Bitrix</a> </h3>
					<div class="post-meta">
 <a href="#"><i class="fa fa-clock-o"></i> 20 июля </a> - <a href="#"><i class="fa fa-user"></i> Alesya</a> - <a href="#">Разработка</a> - <a href="#"><i class="fa fa-comments"></i> 1 Комментарий</a>
					</div>
					<p>
						 1С-Битрикс — система управления содержимым от российской компании 1С-Битрикс.<br>
						 Имеет несколько "редакций" – лицензионных версий: Старт, Стандарт, Малый бизнес, Бизнес, которые отличаются включаемыми модулями системы.
					</p>
 <a class="read-more btn btn-small" href="blog_detail1.html">Читать <i class="fa fa-arrow-right"></i></a>
				</div>
 </article>
				<!-- Запись блога 2 (видео) --> <article class="post-wrapper mb-60">
				<div class="embed-responsive embed-responsive-16by9">
					 <iframe src="https://player.vimeo.com/video/79876010"></iframe>
				</div>
				<div class="post-content">
					<h3> <a href="blog_detail2.html">Дизайн во всём</a> </h3>
					<div class="post-meta">
 <a href="#"><i class="fa fa-clock-o"></i> 17 июля </a> - <a href="#"><i class="fa fa-user"></i> Anya</a> - <a href="#">Дизайн</a> - <a href="#"><i class="fa fa-comments"></i> 2 Комментария</a>
					</div>
					<p>
						 Считается, что дизайн призван не только к художественному конструированию, но должен участвовать в решении более широких проблем функционирования производства, существования людей в предметной среде..
					</p>
 <a class="read-more btn btn-small" href="blog_detail2.html">Читать <i class="fa fa-arrow-right"></i></a>
				</div>
 </article>
				<!-- Пагинация (постраничная навигация) -->
				<ul class="pagination mt-50">
					<li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
					<li><span class="current">1</span></li>
					<li> <a href="#">2</a> </li>
					<li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
				</ul>
			</div>
			 <!-- Правая колонка -->
			<div class="col-md-4 col-sm-12 col-xs-12 mt-sm-40 mt-xs-40">
				 <!-- Поиск -->
				<div class="widget mb-60">
					<form class="search-form" action="#">
 <input type="text" placeholder="Поиск"> <button><i class="fa fa-search"></i></button>
					</form>
				</div>
				 <!-- Категории -->
				<div class="widget mb-60">
					<h4 class="sidebar-title text-uppercase mb-35 pb-10">Категории</h4>
					<ul class="widget-cat">
						<li> <a href="#">Web-Дизайн</a> </li>
						<li> <a href="#">События</a> </li>
						<li> <a href="#">Разработка</a> </li>
						<li> <a href="#">Разное</a> </li>
					</ul>
				</div>
				 <!-- Популярные теги -->
				<div class="widget mb-60">
					<h4 class="sidebar-title text-uppercase mb-35 pb-10">Популярные теги</h4>
					<ul class="tag">
						<li> <a href="#">PHP</a> </li>
						<li> <a href="#">UI/UX</a> </li>
						<li> <a href="#">Дизайн</a> </li>
						<li class="active"> <a href="#">Портфолио</a> </li>
						<li> <a href="#">UI &amp; UX</a> </li>
						<li> <a href="#">Html5</a> </li>
						<li> <a href="#">Css3</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
 <br>
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"search_blog", 
	array(
		"COMPONENT_TEMPLATE" => "search_blog",
		"PAGE" => "1111111",
		"USE_SUGGEST" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>