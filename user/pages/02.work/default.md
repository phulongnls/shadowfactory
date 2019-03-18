---
title: Work
media_order: SF_Web_Video-fe6432fe6df30c2cf26cf8f68bc9b503.mp4
process:
    markdown: true
    twig: true
twig_first: true
template: work
content:
    items: '@self.children'
    order:
        by: folder
        dir: asc
---

<style type="text/css">
	body {
		margin: 0;
		background: #010101;
	}
	.outer-grid {
		display: grid;
		grid-template-columns: [viewport-start] minmax(0,1fr) [container-start] minmax(100px,1600px) [container-end] minmax(0,1fr) [viewport-end];
	}
	.banner-page.work {
		height: 70vh;
	}
	.banner-page video {
		width: 100%;
		height: 100%;
		object-position: 50% 50%;
	    object-fit: cover;
	    pointer-events: none;
	}
	.banner-page .full {
	    height: 70vh;
	    width: 100%;
	    overflow: hidden;
	    background: #1d1d1d;
	    grid-column: viewport;
	}
	.banner-page .bg {
		grid-column: viewport;
		height: 100vh;
	}
	.list-works {
		grid-column: container;
		display: grid;
		grid-gap: 24px;
		grid-template-rows: 100px 1fr;
		margin-bottom: 30px;
		padding-bottom: 18px;
	}
	.list-works .filter {
		display: flex;
		justify-content: flex-start;
	}
	.list-works .filter button {
		font-size: 20px;
		border: none;
		outline: none;
		color: #656363;
		background: transparent;
		padding: 6px 24px;
		cursor: pointer;
		text-transform: uppercase;
	}
	.list-works .filter button.active {
		color: #ffcc04;
	}
	.list-works .grid-item {
		display: flex;
	}
	.col1 {
		width: calc(25% - 12px);
	}
	.col2 {
		width: calc(50% - 12px);
	}
	.col3 {
		width: calc(75% - 12px);
	}
	.col4 {
		width: 100%;
	}
	.row1 {
	    height: 350px;
	}
	.row2 {
	    height: 712px;
	}
	.list-works .grid-item .item {
		display: flex;
		overflow: hidden;
		position: relative;
		margin-bottom: 12px;
	}
	.list-works .grid-item .item img {
		object-fit: cover;
		width: 100%;
		height: 100%;
	}
	.list-works .grid-item .item.objBottom img {
	    object-position: bottom;
	}
	.list-works .grid-item .item .title {
		width: 100%;
		height: 100%;
		position: absolute;
		margin: 0;
	    background: rgba(0,0,0,.65);
    	transition: all .8s ease-in-out;
	}
	.list-works .grid-item .item .title a {
		display: flex;
		width: 100%;
		height: 100%;
		justify-content: flex-start;
		align-items: flex-end;
		position: absolute;
		padding: 12px;
	    top: 300px;
	    transition: all .25s ease-in;
	    text-decoration: none;
    	color: #f1f1f1;
    }
    .list-works .grid-item .item:hover .title {
    	background: linear-gradient(transparent,transparent,rgba(0,0,0,.8));
    	transition: all .8s ease-in-out;
    }
    .list-works .grid-item .item:hover a {
    	top: 0;
	    transition: all .25s ease-out;
    }
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

{% set video = page.media.videos|first %}
<div class="outer-grid banner-page work">
	<div class="full">
		{% if video.url %}
		<div class="bg">
			<video autoplay="true" loop src="{{ video.url }}"></video>
		</div>
		{% endif %}
	</div>
</div>
{% if page.collection() %}
<div class="outer-grid">
	<div class="list-works grid">
		<div class="filter">
			{% set works = taxonomylist.get()['work'] %}
			<button class="active" data-filter="*">ALL</button>
			{% for key, item in works %}
				<button data-filter=".{{ key|camelize }}">{{ key }}</button>
			{% endfor %}
		</div>
		<div class="grid-item">
			<div class="grid-sizer row1 col1"></div> 
			{% for work in page.collection() %}
				{% set image =  work.media.images|first  %}
				{% set image = image.url %}
				{% if (work.metadata['classall']['content']) %}
					{% set classSize = work.metadata['classall']['content'] %}
				{% else %}
					{% set classSize = 'row1 col1' %}
				{% endif %}
				{% if (work.metadata['classtype']['content']) %}
					{% set classSize1 = work.metadata['classtype']['content'] %}
				{% else %}
					{% set classSize1 = 'row1 col1' %}
				{% endif %}
				<div class="item {{ classSize }} {{ work.taxonomy['work'][0]|camelize }}" data-all="{{ classSize }}" data-type="{{ classSize1 }}">
				    <img class="lazy" data-src="{{ image }}" alt="{{ work.title }}" style="display: none;" data-srcset="{{ image }} 1200w, {{ image }} 1024w, {{ image }} 969w, {{ image }} 768w, {{ image }} 640w, {{ image }} 480w, {{ image }} 320w" data-sizes="auto">
				    <h4 class="title"><a href="{{ work.url }}">{{ work.title }}</a></h4>
				</div>
			{% endfor %}
		</div>
	</div>
</div>
{% endif %}
<script type="text/javascript">
	$('.lazy').Lazy();
	var $grid = $('.list-works .grid-item').isotope({
	  		itemSelector: '.item',
	  		layoutMode: 'masonry',
	  		percentPosition: true,
	  		masonry: {
	  	    	columnWidth: '.grid-sizer',
	  	    	gutter: 12
	  	  	}
	});

	$('.list-works .filter').on( 'click', 'button', function() {
		if (!$(this).hasClass('active')) {
			$('.list-works .filter button').removeClass('active');
			$(this).addClass('active');
		  	var filterValue = $( this ).attr('data-filter');
		  	if (filterValue == '*') {
		  		$('.list-works .grid-item .item').each(function(e) {
		  			var classAll = $(this).data('all');
		  			var classType = $(this).data('type');
		  			$(this).removeClass(classType);
		  			$(this).addClass(classAll);
		  		});
		  	} else {
		  		$('.list-works .grid-item .item').each(function(e) {
		  			var classAll = $(this).data('all');
		  			var classType = $(this).data('type');
		  			$(this).removeClass(classAll);
		  			$(this).addClass(classType);
		  		});
		  	}
		  	$grid.imagesLoaded().progress( function() {
		  		$grid.isotope({ filter: filterValue });
		  	});
		}
	});
</script>
