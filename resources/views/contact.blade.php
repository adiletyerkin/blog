@extends('layouts.app')

@section('title-block')
	CONTACT PAGE
@endsection

@section('content')

<main >

<div class="container">
    <div class="row">
        <div class="header-group-block">
            <h1><span>Контакты </span> </h1>

            <div class="breadcrumbs clearfix" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="/" title="Главная">
						<span itemprop="name">Главная</span>
					</a>
				</span><span class="arrow-space">&gt;</span>
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="/about" title="О компании">
						<span itemprop="name">О компании</span>
					</a>
				</span><span class="arrow-space">&gt;</span>
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<span itemprop="name">Контакты</span>
				</span>
			</div>        
		</div>
    </div>
</div>
<br>


<section >
    <div >
        <div class="container">
            <div >
                <div >
                    <div>
                    	
                    	<div >

	<div style="clear: both;">
	</div>


	<div class="col-md-4">
		<h2>Наши контакты </h2>
		<div class="con_block">
			<p class="nname cphone"> <b>Телефоны:</b></p>
			<p>+7 (700) 405 55 55</p>
			<p>+7 (707) 555 55 31</p>
			<p> <b>What'sApp:</b></p>
			<p> +7 (707) 555 55 31</p>
		</div>

		<div class="con_block">
			<p class="nname cmail"><b>E-mail:</b></p>
			<p> <a href="mailto:info@time4u.kz">info@time4u.kz</a></p>
		</div>

		<div class="con_block">
			<p class="nname cadress"><b>Адрес:</b></p>
			<p> г. Алматы ул. Макатаева&nbsp;117, блок "Б",</p>
			<p> 1 этаж (вход с улицы)</p>
		</div>
 <br>
	</div>
	<div class="col-md-8">
		<h2>Напишите нам </h2>
		<form method="post" action="/company/contacts/#feedback-form">
	        <div class="form-group">
	            <label for="feedback-name" >Имя ( * )</label>
	            <input type="text" name="feedback-name" class="form-control" value="">
	        </div>
	        <div class="form-group">
	            <label for="feedback-email">Email ( * )</label>
	            <input type="text" name="feedback-email" class="form-control" value="">
	     	</div>
	            <label for="feedback-phone">Телефон ( * )</label>
	            <input type="text" name="feedback-phone" class="form-control" value="">
	        <div class="form-group">
	            <label for="feedback-home-phon">Телефон ( * )</label>
	            <input type="text" name="feedback-home-phone" class="form-control" value="">
	        </div>
	    	<div class="form-group">
	            <label for="feedback-message">Сообщение ( * )</label>
	            <textarea name="feedback-message" class="form-control"></textarea>
	        </div>
	       
	            <button type="submit" name="feedback-submit" class="btn btn-success">Отправить</button>
        
    </form>
    		<br>
   </div>
    	<br>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d726.3577829151393!2d76.92775626789673!3d43.263342877075274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd64b8470b14d3c0f!2sBUY+TIME+4U!5e0!3m2!1sru!2skz!4v1540304560163" width="600" height="450" frameborder="0" style="border:0" allowfullscreen="">
	 </iframe>

</div>

 <br>                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



</main>
<br>
@endsection
	
