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
