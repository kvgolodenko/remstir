// Generated by CoffeeScript 1.8.0
(function() {
  var Apollon;

  Apollon = { module: void 0,
		    base_url: void 0,
		    body_id: void 0,
		    menu: void 0,
		    search_оverlay: void 0,
		    search_input: void 0,
		    intent: void 0,
		    footer: void 0,
		    menu_width: void 0,
		    fixed_logo: void 0,
		    url: function(rel_url) {
		      return this.base_url + rel_url.replace(/^\/+/, "");
		    },
		    jsonURL: function(url) {
		      var result;
		      result = url;
		      if (!result) {
		        result = document.location.href;
		      }
		      if (result.indexOf('?') === -1) {
		        result += '?';
		      }
		      if (result.substr(-1) !== '?') {
		        result += '&';
		      }
		      result += '___xhr';
		      return result;
		    },
    init: function() {
      var body, comments, lastScrollTop, main_img_cont, scroll_timeout;
      this.module = $('main');
      this.footer = $('footer');
      this.body_id = $('body').attr('id');
      this.menu = $('nav');
      this.fixed_logo = $('.fixed-logo');
      this.base_url = $('body').data('base-url').replace(/\/+$/, "") + "/";
    	$('body').ready(function(){
    		setTimeout(function() {
    			$('body').removeClass('busy');
    		},500);
    	});
    	var width = $(window).width();
  	  	$('.menu-set.mobile').css({"margin-right": - width});
  	  
    	var bps = String($(document.body).data('responsive-bp'));
    	new ResponsiveBP(_.map(bps.split(","), function (i) { return parseInt(i) } ));
    	
      $('.initially-hidden').removeClass("initially-hidden").hide();
      switch (this.module.attr('id')) {
      case 'home':
          this.Home.init();
          break;
        case 'news':
    	  this.News.init();
    	  break;
        case 'about':
	      this.About.init();
	      break;
        case 'trainers':
          this.Trainers.init();
          break;
        case 'gallery':
          this.Gallery.init();
          break;
        case 'album':
        	this.Album.init();
        	break;
        case 'contact':
          this.Contact.init();
          break;
      }
     

      Apollon.showFileName();
      $('.cancel').on("click", function(){
    	  var upload_clone = $(".upload_file").clone();
    	  $(".upload_file").remove();
    	  $('.cancel').removeClass("shown");
    	  upload_clone.appendTo(".app_btn");
    	  Apollon.showFileName();
    	  $('.filename').text('');
      });
      
      $('.up-to-top').on('click', function(e) {
        e.preventDefault();
        return $('html, body').animate({
          scrollTop: 0
        }, 800);
      });
      if (!Modernizr.touch) {
        this.setMainMarginBottom();
        $(window).on('resize', (function(_this) {
          return function() {
            return _this.setMainMarginBottom();
          };
        })(this));
      }
      this.setMenuSize();
      $(window).on('resize.menu_width', (function(_this) {
        return function() {
          return _this.setMenuSize();
        };
      })(this));
      this.menu = $('nav');
      this.initTransitionLinks();
      this.menu.on('click', function(e) {
        return e.stopPropagation();
      });
      
      $(window).on('resize', function(){
    	  if($('.menu-set.mobile').hasClass('shown')){
    		  $('.menu-set.mobile').css({"margin-right": 0})
    	  }
    	  else{
    		  $('.menu-set.mobile').css({"margin-right": -$(window).width()})
    	  }
      })
      $('#retning_1').on('click', function() {
    	  $('.svg-menu').toggleClass('opened');
    	  $('.menu-set.mobile').toggleClass('shown');
    	  if($('.menu-set.mobile').hasClass('shown')){
    		  $('.menu-set.mobile').animate({"margin-right": 0},300);
    		 $('.menu-set.mobile').css({"display":"table"});
    	  }
    	  else{
    		  $('.menu-set.mobile').animate({"margin-right": -$(window).width()},300);
    		  $('.menu-set.mobile')
    		  setTimeout(function(){
    			  $('.menu-set.mobile').css({"display":"none"});
    		  }
    		  ,330);
    			  
    	  }
      });
      
      
      $(document).on('keyup', (function(_this) {
        return function(e) {
          if (e.which === 27) {
            _this.hideMenu();
            return _this.hideSearchOverlay();
          }
        };
      })(this));
      
      $(document).on('click', (function(_this) {
        return function() {
          return _this.hideMenu();
        };
      })(this));

      $(window).on('scroll', (function(_this) {
        return function() {
          return _this.setFixedLogoVisibility();
        };
      })(this));
      
      $(".menu-items .transition").hover(																	//light menu item
   		   function(){
    	$(this).css({"background-color":"#082EB7"})
   		   },
   		function(){
   	    	$(this).css({"background-color":"inherit"})
   		}
    ); 
      
      if ($("#contact.module").length) {//scroll down to footer
    	  $(window).scroll(function(){
		    		  $('footer').addClass('contact');
		    		  if  ($(window).scrollTop() == $(document).height() - $(window).height()) 
		    		  {
		    			  $('footer').addClass ('shown');
		    		  }
		    		  else{
		    			  $('footer').removeClass('shown');
		    			  $('footer').removeClass('contact');
		    		  }
    			  });
      }
      
      $(document).ready(function(){
    		$('.top_image').on('click', function (event) {
    			event.preventDefault();
    			var id  = $(this).attr('href'),
    				top = $('.top_image').height();
    				console.log(1);
    			$('body,html').animate({scrollTop: top}, 1000);
    		});
    		
    		
    	});
    },
    
    showFileName: function () {
    	$('.upload_file').off('change').on('change', function(e) {
    		var t = e.currentTarget;
      	  console.log(1231564);
      	  var file = t.files[0];
           $('.filename').text(file.name);
           $('.cancel').addClass("shown");
        });
    },
    setFixedLogoVisibility: function() {
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 400) {
        return this.fixed_logo.addClass('hidden');
      } else {
        return this.fixed_logo.removeClass('hidden');
      }
    },
    
    
    
    setMainMarginBottom: function() {},
    
    showMenu: function() {
    },
    hideMenu: function() {
    },
        
    setMenuSize: function() {
      var delta, window_width;
      window_width = $(window).width();
      delta = window_width/2;
      this.menu_width = window_width;
      this.menu.css({
        width: this.menu_width
      });
      if (!$('body').hasClass('menu-is-opened')) {
        return this.menu.css({
          'margin-right': -100 + '%'
        });
      }
    },
    initTransitionLinks: function() {
      var transition_links;
      transition_links = $('a:not([href*="#"])');
      transition_links.off('click.body_fade');
      transition_links.on('click.body_fade', function(e) {
        e.preventDefault();
        $('body').addClass('busy');
        setTimeout(function() {
        	// $('body').removeClass('busy');
          location.href = $(e.currentTarget).attr('href');
        }, 300);
      });
    },
    initIsotope: function(container, item_selector) {
      return setTimeout(function() {
        return container.imagesLoaded(function() {
          return container.isotope({
            itemSelector: item_selector,
            layoutMode: 'masonry'
          });
        });
      }, 50);
    }
  };

  Apollon.About = {
		    init: function() {
		      $('.about').addClass('selected');
		    }
}
Apollon.Album = {
		  init: function() {
			  $('.gallery').addClass('selected');
				    $("a.picture").fancybox();
		  }
}
Apollon.Contact = {
  init: function() {
    $('.contact').addClass('selected');
    ymaps.ready(init);
    var myMap,
    	  myPlacemark;
	      function init(){  
		    	  var myMap = new ymaps.Map("map_canvas", {
		    		  center: [50.93773030310689,34.76941707336368], 
		    		  zoom: 17
		    	  });
		    	  myPlacemark = new ymaps.Placemark([50.93773030310689,34.76941707336368], {
		    		  hintContent: 'Apollon', 
		    		  balloonContent: 'Спортивный клуб Аполлон' 
		    	  },{
		    		  iconLayout: 'default#image',
		    		  iconImageHref: 'img/apollon_logo_small.png',
		    		  iconImageSize: [79, 51],
		    		  iconImageOffset: [-3, -42]
		    	  	}
		    	  );
		    	  myMap.geoObjects.add(myPlacemark);
		   }
    }
}
		
Apollon.Gallery = {
		  init: function() {
			  $('.gallery').addClass('selected');
			  this.animateArticles();
		      return $(window).on('scroll resize', (function(_this) {
		        return function() {
		          return _this.animateArticles();
		        };
		      })(this)); 
		  },
	  animateArticles: function(is_scroll) {
	    var w_height, w_scroll_top;
	    w_scroll_top = $(window).scrollTop();
	    w_height = $(window).height();
	    return  $('.album-tsr, .menu-item-tsr.layer_square').each((function(_this) {
	      return function(i, e) {
	        var offset, t;
	        t = $(e);
	        offset = t.offset().top;
	        if (offset < w_scroll_top + w_height) {
	          return t.addClass('shown');
	        }
	      };
	    })(this));
}
};

Apollon.Trainers = {
		  init: function() {
			  $('.trainers').addClass('selected');
		  }
}
Apollon.News = {
		    load_more: void 0,
		    load_more_btn: void 0,
		    loader: void 0,
		    articles_cont: void 0,
		    articles: void 0,
		    init: function() {
		      this.load_more = $('#news .load-more');
		      this.load_more_btn = $('a', this.load_more);
		      this.loader = $('.loader');
		      this.sign = $('.btn-text');
		      this.menu_item = $('.menu-item');
		      this.articles_cont = $('#news');
		      this.articles
		      
		      $('.news').addClass('selected');
		      
		      this.load_more.on('click', $.proxy(function (e) {
		    	  console.log('1');
					e.preventDefault();
					if (!this.loader.hasClass('visible')) {
						this.loader.addClass('visible');
						$.get(
							this.load_more_btn.prop("href")
						).always(function () {
							this.loader.removeClass('visible');
						}.bind(this)).success($.proxy(function (data) {
							var $data = $(data); 
							this.articles_cont.append($data.find("#news").children());
							$(window).resize();

							var new_lod_more_btn = $data.find("#news .load-more a");
							if (new_lod_more_btn.length) {
								this.load_more_btn.prop("href", new_lod_more_btn.prop("href"));
							} else {
									this.load_more.remove();
							}
						}, 
					this)).error(function () {
							alert('Something went wrong. Please try again later');
						});
					}
				}, this));
		    }};  
  Apollon.Home = {
    load_more: void 0,
    load_more_btn: void 0,
    loader: void 0,
    articles_cont: void 0,
    articles: void 0,
    init: function() {
    	this.load_more = $('#container .home .load-more');
        this.load_more_btn = $('a', this.load_more);
        this.loader = $('.loader');
        this.sign = $('.btn-text');
        this.menu_item = $('.menu-item');
        this.articles_cont = $('.news');
        this.fotorama = $('.fotorama-container');
        this.body = $('body');
        this.articles
      
      																																//load more...
      this.load_more.on('click', $.proxy(function (e) {
			e.preventDefault();
			if (!this.loader.hasClass('visible')) {
				this.loader.addClass('visible');
				$.get(
						this.load_more_btn.prop("href")
				).always(function () {
					this.loader.removeClass('visible');
				}.bind(this)).success($.proxy(function (data) {
					var $data = $(data); 
					this.articles_cont.append($data.find("#home .articles").children());
					$(window).resize();

					var new_lod_more_btn = $data.find("#home .load-more a");
					if (new_lod_more_btn.length) {
						this.load_more_btn.prop("href", new_lod_more_btn.prop("href"));
					} else {
							this.load_more.remove();
					}
				}, 
			this)).error(function () {
					alert('Something went wrong. Please try again later');
				});
			}
		}, this));
      
      $(window).scroll(function(){
    	  if($(window).scrollTop()>40){
    	  }
      });
      
      this.sign.on('click', $.proxy(function (e) {
			e.preventDefault();
			$('.input-form').addClass('visible');
			$('.name').addClass('visible');
			$('.phone').addClass('visible');
			$('.topform-btn-ok').addClass('visible');
			
			$('.topform-btn').remove();
			$('.central-top-form').append('');
      }))
      $('.topform-btn-ok').on('click', $.proxy(function (e) {
    	  e.preventDefault();
    	  $('.top-btn').click();
      }))
       this.sign.on('click', $.proxy(function (e) {
					e.preventDefault();
					$('.input-form').addClass('visible');
					$('.name').addClass('visible');
					$('.phone').addClass('visible');
					$('.topform-btn-ok').addClass('visible');
					$('.g-recaptcha').addClass('show-captcha');
					
					$('.topform-btn').remove();
					$('.central-top-form').append('');
		      }))
		      $('.topform-btn-ok').on('click', $.proxy(function (e) {
		    	  e.preventDefault();
		    	  $('.top-btn').click();
		      }));
      
      
      this.animateArticles();
      return $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateArticles();
        };
      })(this));
    },
    animateArticles: function(is_scroll) {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return  $('.article-tsr, .layer_square, .layer_landscape').each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          }
        };
      })(this));
    }};

  window.Apollon = Apollon;

  $($.proxy(Apollon.init, Apollon));

}).call(this);

