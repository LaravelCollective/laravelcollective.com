(function($){
	
	"use strict";
		
	$(window).on({
		resize: function() {
			window.windowWidth = $(this).width();	
			window.windowHeight = $(this).height();	
		}
	});
	
	$(function() {
		// On DOM loaded
		
		/* # -- SOME INITS
		================================================== */
		countdown.init();
		captcha.init();
		slider.init();
		
		$(window).resize();
		
		/* # -- SOME BINDS
		================================================== */
		
		$(document)
		
			// Go to the first page
			.on('click', '#hello .just-scroll', function() {
				
				var tScroll = $('#hello').next().offset().top;
				
				$('html, body')
					.stop(true, true)
					.animate({ scrollTop: tScroll }, 800, 'easeInOutExpo');
			})
			
			// Navigation
			.on('mouseenter', '#main-btn', function() {
				
				if ( windowWidth > 768 ) {
					
					$('#countdown-screen nav > ul')
						.show()
						.stop(true, false)
						.animate({ opacity: 1 });
						
					$(this)
						.stop(true, false)
						.animate({ marginTop: -32, opacity: 0 });
				}
			})
			.on('mouseleave', '#countdown-screen nav', function() {
				
				if ( windowWidth > 768 ) {
					
					$('#main-btn')
						.stop(true, false)
						.animate({ marginTop: 0, opacity: 1 });
					
					$('#countdown-screen nav > ul')
						.stop(true, false)
						.animate({opacity: 0}, function() { 
							$(this).hide();
						});
				}
			})
			.on('click', '#countdown-screen nav a', function(e) {
			
				var isHash = $(this).attr('href').charAt(0) == '#';
				
				if ( true == isHash ) {
					e.preventDefault();
					
					var t = $($(this).attr('href')).offset().top;
					$('html, body').animate({scrollTop: t}, 1000, 'easeOutExpo');
				}
			})
			.on('submit', '#follow form', function(e) {
				
				e.preventDefault();
			
				$(this).hide();
				$('#follow .body .loading')
					.css({ opacity: 0 })
					.show()
					.animate({ opacity: 1 });
				
				sendAjax( 'engine/subscribe.php', this, followCallback );
			})
			.on('submit', '#feedback form', function(e) {
				
				e.preventDefault();
			
				$(this).hide();
				$('#feedback .body .loading')
					.css({ opacity: 0 })
					.show()
					.animate({ opacity: 1 });
				
				sendAjax( 'engine/feedback.php', this, feedbackCallback );
			});
	});
	
	/* # -- Ajax Callbacks
	================================================== */
	var followCallback = function(data) {
		
		$('#follow .body .loading').animate({opacity: 0}, function() {
			
			var t = ( 1 == data.status ) ? 'You were subscribed successfully!' : data.text;
			
			$(this).hide();
			$('#follow .body .response').show().text(t).animate({opacity: 1});
			
			if ( 1 != data.status ) {
				setTimeout(function() {
					$('#follow .body .response').animate({opacity: 0}, function(){
						
						$(this).hide();
						$('#follow .body form').show().animate({opacity: 1});
					});
				}, 2000);
			}
		});
	}
	
	var feedbackCallback = function(data) {
		$('#feedback .body .loading').animate({opacity: 0}, function() {
		
			var t = ( 1 == data.status ) ? 'Thank you for your response!' : data.text;
			
			$(this).hide();
			$('#feedback .body .response').show().text(t).animate({opacity: 1});
			
			setTimeout(function() {
				$('#feedback .body .response').animate({opacity: 0}, function(){
						
					$('#feedback .body form').show().animate({opacity: 1});	
					$(this).hide();
					
					if ( 1 == data.status ) {
					
						$('#feedback form').find('input[type="text"], input[type="email"], textarea').val("");
						$('#feedback form .acts img').trigger('click');
					}
				});
			}, 2000);
		});
	}

	
	/* # -- CountDown Script
	================================================== */
	var countdown = {
		init: function() {
			
			if ( 0 == $('#countdown-screen').length ) return false;
			
			if ( true == config.debugMod ) {
				console.log('COUNTDOWN INIT');
			}
			
			// Create some HTML for countdown
			var __divTPL = '<div><div></div><div class="last"></div></div>';
			$('#countdown .body > div').each(function(k){
				var m = ( 0 == k ) ? 3 : 2;
				for ( var i = 0; i < m; i++ ) {
					$(this).append(__divTPL);
				}
			});
			
			$('#cd').countdown({
				until: 		new Date( config.end ),
				compact: 	true,
				onTick: 	countdown.tick,
				serverSync: countdown.serverTime,
				expiryUrl: 	config.expiryUrl
			});
			
			// Show Countdown
			var t = ( navigator.userAgent.match( /MSIE/ ) ) ? 2500 : 0;
			
			setTimeout(function() {
				$('#countdown .loading').animate({ opacity: 0 }, function(){
					$(this).hide();
					$('#countdown .body').css({
						opacity: 0, 
						display: 'inline-block'
					}).animate({ opacity: 1 }, 1000, 'easeInOutCirc');
				});	
			}, t);
		},
		
		tick: function(time) {
			// Every sec
			
			time.splice(0, 3);
			
			var arrOfNum = [];
			$.each(time, function(key, val){
				
				var strVal = val.toString();				
				var max = ( 0 == key ) ? 3 : 2;
				
				if ( strVal.length < max ) {
					for ( var i = 1; i = max - strVal.length; i++ ) {
						strVal = '0' + strVal;	
					}
				}
				
				var tempArr = strVal.split("");
				$.each(tempArr, function(k, num){
					arrOfNum.push(num);
				});
			});
			
			$('#countdown .body > div .last').each(function(key){
				
				var $curr = $(this).prev();
				var currH = $curr.height();
								
				if ( $curr.text() == arrOfNum[key] ) return true;
				
				$(this).text(arrOfNum[key]);
				
				$(this).css({opacity: 0}).animate({opacity: 1}, config.countdownSpeed, config.countdownAnimType);
				$curr.animate({marginTop: -currH, opacity: 0}, config.countdownSpeed, config.countdownAnimType, function(){
					$(this).text(arrOfNum[key]).css({marginTop: 0, opacity: 1});
				});
			});
		},
		
		serverTime: function() {
		
			// Sync time with server (local time)
		    var time = null;
		    
		    if ( false == config.countdownServer ) {
		    	return time;
		    }
		    
		    $.ajax({url: 'engine/server-time.php', 
		        async: false, dataType: 'text', 
		        success: function( text ) { 
		            time = new Date( text ); 
		        }, error: function( http, message, exc ) { 
		            time = new Date(); 
		            if ( true == config.debugMod ) {
		            	console.log('SERVER TIME ERROR:', http, message, exc);
		            }
				}
		    }); 
		    return time; 
		}
	}
	
	function sendAjax( ajaxurl, obj, callback ) {
		
		$.ajax({
			type: 'POST',
			dataType: 'json',
			
			url: ajaxurl,
			data: $(obj).serialize(),
			
			success: function(d) { callback(d); },
			error: function( jqXHR, textStatus, errorThrown ) {
				if ( true == config.debugMod ) {
					console.log('AJAX FORM ERROR:', textStatus, jqXHR, errorThrown);	
				}
			}
		});
	}
	
	var captcha = {
		init: function() {
			
			if ( 0 == $('#feedback').length ) return false;
			
			this.randSet();
			
			$(document).on('click', '#feedback form .acts img', captcha.randSet);
		},
		
		randSet: function() {
			$.ajax({
				url: 'engine/captcha-random.php',
				success: function(d) { 
					if ( true == config.debugMod ) {
						console.log('CAPTCHA SUCCESS');	
					}
					
					if ( d == 'no') {
						$('#feedback form .acts').find('input[name="code"]').remove()
							.end().find('img').remove();
					} else { captcha.imageUp(); }
				},
				error: function( textStatus, jqXHR, errorThrown ) {
					if ( true == config.debugMod ) {
						console.log('CAPTCHA ERROR: ', textStatus, jqXHR, errorThrown);
					}
				}
			});
		},
		
		imageUp: function() {
			var hash = Math.random() * 1000000;
			var $feedbackCode = $('#feedback form .acts');	
				$feedbackCode.find('img').remove();
				$feedbackCode.find('input[name="code"]').after('<img src="engine/captcha-image.php?hash=' + hash + '">');
		}
	}
	
	var slider = {
		ind: 0,
		len: config.photos.length - 1,
		init: function() {
			
			var $background = $('#background');
			
			if ( 0 == $background.length ) return false;
			
			$background.find('.loading').show();
			
			var tpl = '';
			$.each(config.photos, function(k, v){
				tpl += '<div style="background-image: url(/coming-soon/img/slider/' + v + ' );"></div>';
			});
			
			$background.find('.photos').html(tpl);
			$background.find('.photos > div').hide().first().show().addClass('curr');

			$(window).on({
				load: function() {
					$background.find('.photos')
						.css({ opacity: 0 })
						.show()
						.animate({ opacity: 1 });
					
					if ( slider.len < 1 ) return false;
					
					setInterval(function() {
						slider.slide();
					}, config.slideSpeed);
				}
			});
		},
		
		slide: function() {
			
			slider.ind++;
			
			if ( slider.ind > slider.len ) { slider.ind = 0; }
			
			$('#background .photos > div').css({ zIndex: -1 }).eq(slider.ind)
				.show()
				.css({ opacity: 0, zIndex: 1 })
				.animate({ opacity: 1 }, function(){
					
					$('#background .curr').hide().removeClass('curr');
					$(this).addClass('curr');
				});
		}
	}
		
})(jQuery);