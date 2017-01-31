define('URFU/CMS/Urfu/Slider', function () {
	var disabled = false,
		sliderContainer,
		text_width,
		image_width,
		interval,
		generic;

	var init = function (slider) {
		require(['URFU/CMS/Urfu/Generic'], function (Generic) {
			sliderContainer = slider;
			generic = Generic;
			//image_width = $('.slider-wrap-item .image', sliderContainer).width();
			//text_width = $('.slider-wrap-item .slider-item', sliderContainer).not('.image').width();

			resizeGallery();

			$('.next', sliderContainer).on('click', nextSlide);
			$('.prev', sliderContainer).on('click', prevSlide);
			var gallery = $('.promo-slider-list');
			gallery.on('swiperight', prevSlide);
			gallery.on('swipeleft', nextSlide);

			$('#promo-slider-loading').fadeOut();

			$(window)
				.on('resize', function() {
					resizeGallery();
				});
		});
	};

	var resizeGallery = function () {
		var items = $('.slider-wrap-item', sliderContainer),
			items_container = $('.promo-slider-list', sliderContainer);

		var	item_active,
			center;

		image_width = $('.slider-wrap-item .image', sliderContainer).width();
		text_width = $('.slider-wrap-item .slider-item', sliderContainer).not('.image').width();

		$('.slider-wrap-item', sliderContainer).removeClass('alpha').css({marginLeft: 0});

		if (items.length > 1) {
			item_active = $('.slider-wrap-item').eq(1).addClass('active');
			if (generic.isMobileViewport() || generic.isTabletViewport()) {
				item_active.prev().css({marginLeft: '-100%'});
			} else {
				$('.image', item_active.next()).css({marginLeft: -text_width});
				$('.image', item_active.prev()).css({marginLeft: -text_width});
			}
			$('.image', item_active).css({marginLeft: 0});
			center = item_active.position().left + (image_width + text_width) / 2;
			item_active.next().addClass('alpha').prev().prev().addClass('alpha');

			clearInterval(interval);
			setInterval();
		} else {
			item_active = $('.slider-wrap-item').eq(0).addClass('active');
			$('.image', item_active).css({marginLeft: 0});
			center = item_active.position().left + (image_width + text_width) / 2;
			$('.next', sliderContainer).hide();
			$('.prev', sliderContainer).hide();
		}

		var items_container_width = items.length * image_width + text_width;
		items_container.css({width: items_container_width, marginLeft: -1 * center });
	};

	var setInterval = function() {
		//stop slider on main page urfu.ru
		// if (window.location.host != 'urfu.ru' && window.location.host != 'magister.urfu.ru') {
			interval = window.setInterval(nextSlide, 10000);
		// }

	};

	var nextSlide = function (e) {
		if (e !== undefined) {
			e.preventDefault();
		}
		if (!disabled) {
			disabled = true;
			if (generic.isMobileViewport() || generic.isTabletViewport()) {
				$('.alpha', sliderContainer).removeClass('alpha');

				$('.slider-wrap-item.active', sliderContainer).next().css({marginLeft: 0});
				$('.slider-wrap-item.active', sliderContainer).animate({marginLeft: '-100%'}, 1000, function () {
					$('.slider-wrap-item:first-child', sliderContainer).detach().css({marginLeft: 0}).appendTo(".promo-slider-list");
					$('.slider-wrap-item.active', sliderContainer).removeClass('active').next().addClass('active')
						.next().addClass('alpha').prev().prev().addClass('alpha');

					disabled = false;
				});
			} else {
				$('.alpha', sliderContainer).removeClass('alpha');

				$('.slider-wrap-item.active .image', sliderContainer).animate({marginLeft: -1 * text_width}, 1000);
				$('.slider-wrap-item.active', sliderContainer).next().find('.image').animate({marginLeft: 0}, 1000);
				$('.slider-wrap-item:first-child', sliderContainer).clone().css({marginLeft: 0}).appendTo(".promo-slider-list");
				$('.slider-wrap-item:first-child', sliderContainer).animate({marginLeft: -1 * image_width}, 1000, function () {
					$('.slider-wrap-item:first-child', sliderContainer).remove();
					$('.slider-wrap-item.active', sliderContainer).removeClass('active').next().addClass('active')
						.next().addClass('alpha').prev().prev().addClass('alpha');

					disabled = false;
				});
			}
			clearInterval(interval);
			setInterval();
		}
	};

	var prevSlide = function (e) {
		if (e !== undefined) {
			e.preventDefault();
		}
		if (!disabled) {
			disabled = true;

			if (generic.isMobileViewport() || generic.isTabletViewport()) {
				$('.alpha', sliderContainer).removeClass('alpha');

				$('.slider-wrap-item.active', sliderContainer).prev().css({marginLeft: '-100%'});
				$('.slider-wrap-item.active', sliderContainer).prev().animate({marginLeft: 0}, 1000, function () {
					$('.slider-wrap-item:last-child', sliderContainer).detach().css({marginLeft: '-100%'}).insertBefore(".slider-wrap-item:first-child");
					$('.slider-wrap-item.active', sliderContainer).removeClass('active').prev().addClass('active')
						.next().addClass('alpha').prev().prev().addClass('alpha');

					disabled = false;
				});
			} else {
				$('.alpha', sliderContainer).removeClass('alpha');

				$('.slider-wrap-item.active .image', sliderContainer).animate({ marginLeft: -1 * text_width }, 1000);
				$('.slider-wrap-item.active', sliderContainer).prev().find('.image').animate({ marginLeft: 0 }, 1000);
				$('.slider-wrap-item:last-child', sliderContainer).clone().insertBefore(".slider-wrap-item:first-child").css({ marginLeft: -1 * image_width }).animate({ marginLeft: 0 }, 1000, function () {
					$('.slider-wrap-item:last-child', sliderContainer).remove();
					$('.slider-wrap-item.active', sliderContainer).removeClass('active').prev().addClass('active')
						.next().addClass('alpha').prev().prev().addClass('alpha');

					disabled = false;
				});
			}
			clearInterval(interval);
			setInterval();
		}
	};

	return {
		init: init,
		nextSlide: nextSlide,
		prevSlide: prevSlide
	};
});
	