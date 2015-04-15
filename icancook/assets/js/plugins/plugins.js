(function ( $ ) {

	"use strict";

	$.fn.tesla_filters = function( options ) {

		return this.each(function(i, e){

			var $e = $(e);

			var settings = $.extend({

				categories: '[data-category]'

			},options,{

				categories: $e.attr('data-tesla-category')

			});

			var categories = $e.find(settings.categories);

			categories.click(function(ev){

				var t = $(this);

				var cat_array;

				if(t.hasClass('active')){

					if(''===t.attr('data-category')){

						categories.filter('[data-category=""]').removeClass('active');

						categories.filter('[data-category!=""]').addClass('active');

					}else{

						categories.filter(t).removeClass('active');

						if(!categories.filter('.active').length)
							categories.filter('[data-category=""]').addClass('active');
						
					}

				}else{

					if(''===t.attr('data-category')){

						categories.filter('[data-category=""]').addClass('active');

						categories.filter('[data-category!=""]').removeClass('active');

					}else{

						categories.filter('[data-category=""]').removeClass('active');

						categories.filter(t).addClass('active');
						
					}

				}

				cat_array = categories.filter('.active[data-category!=""]').map(function(){

					return $(this).attr('data-category');

				}).get();

				$e.trigger('teslaFiltersChange', {'categories': cat_array});

				if(ev.preventDefault)
					ev.preventDefault();
				else
					return false;

			});

		});

	};

	$(function(){

		$('[data-tesla-plugin="filters"]').tesla_filters();

	});

}( jQuery ));