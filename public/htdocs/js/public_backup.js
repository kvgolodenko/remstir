// Generated by CoffeeScript 1.8.0
(function() {
  var Envelope;

  Envelope = {
    module: void 0,
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
      this.search_оverlay = $('.search-overlay');
      this.search_input = $('input', this.search_оverlay);
      this.fixed_logo = $('.fixed-logo');
      this.base_url = $('body').data('base-url').replace(/\/+$/, "") + "/";
      $('body').imagesLoaded(function() {
        return $('body').removeClass('busy');
      });
      $('.initially-hidden').removeClass("initially-hidden").hide();
      switch (this.module.attr('id')) {
        case 'home':
          this.Home.init();
          break;
        case 'press':
          this.Press.init();
          break;
        case 'archive':
          this.Archive.init();
          break;
        case 'filtered_overview':
          this.Filtered_Overview.init();
          break;
        case 'article':
          this.Article.init();
          break;
        case 'search_results':
          this.Search_Results.init();
      }
      lastScrollTop = 0;
      body = $('body');
      scroll_timeout = 0;
      $(window).on('scroll', function() {
        clearTimeout(scroll_timeout);
        return scroll_timeout = setTimeout(function() {
          var st;
          st = $(window).scrollTop();
          if (st > lastScrollTop) {
            if (st > 305) {
              body.addClass('hide-categories');
            }
          } else {
            body.removeClass('hide-categories');
          }
          lastScrollTop = st;
          if (st > 305 && !body.hasClass('scrolled-down')) {
            return body.addClass('scrolled-down');
          } else if (st <= 305 && body.hasClass('scrolled-down')) {
            return body.removeClass('scrolled-down');
          }
        }, 40);
      });
      $(window).on('resize.body_id', (function(_this) {
        return function(e) {
          var id;
          id = $('body').attr('id');
          if (_this.body_id !== id) {
            return _this.body_id = id;
          }
        };
      })(this));
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
      $('.menu-btn').on('click', (function(_this) {
        return function(e) {
          e.preventDefault();
          e.stopPropagation();
          if (!$('body').hasClass('menu-is-opened')) {
            return _this.showMenu();
          } else {
            return _this.hideMenu();
          }
        };
      })(this));
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
      $('.watch-video-btn').on('click', function(e) {
        var ampersandPosition, iframe, video, video_id, video_url;
        video = $(e.currentTarget).closest('.video');
        video_url = video.data('video-url');
        if (video_url.match(/^https?:\/\/vimeo.com\/\d+$/)) {
          return $.ajax({
            url: "https://vimeo.com/api/oembed.json?url=" + video_url + "&autoplay=true"
          }).done(function(data) {
            video.addClass('playing').append($('<div class="iframe-cont">').append(data.html));
            return setTimeout(function() {
              return $('.iframe-cont').addClass('visible');
            }, 300);
          }).error(function() {
            return alert('Vimeo error.');
          });
        } else {
          if (video_url.match(/^https?:\/\/www.youtube.com\/watch/)) {
            video_id = video_url.split('v=')[1];
            ampersandPosition = video_id.indexOf('&');
            if (ampersandPosition !== -1) {
              video_id = video_id.substring(0, ampersandPosition);
            }
          } else if (video_url.match(/^https?:\/\/youtu.be\//)) {
            video_id = video_url.replace('http://youtu.be/', '').replace('https://youtu.be/', '');
          } else {
            alert('Youtube error');
            return;
          }
          iframe = $('<iframe>').attr({
            id: 'player',
            type: 'text/html',
            src: 'https://www.youtube.com/embed/' + video_id + '?enablejsapi=1&autoplay=1',
            frameborder: 0
          });
          video.addClass('playing').append($('<div class="iframe-cont">').append(iframe));
          return setTimeout(function() {
            return $('.iframe-cont').addClass('visible');
          }, 300);
        }
      });
      comments = $('.comments');
      if (comments.length) {
        $('.comments-link').on('click', function(e) {
          var fb_comments;
          e.preventDefault();
          fb_comments = $('.fb-comments', comments);
          if (comments.hasClass('opened')) {
            comments.height(fb_comments.height());
            comments.removeClass('opened');
            return comments.animate({
              'height': 0
            }, 300, function() {
              return comments.removeClass('static');
            });
          } else {
            if (fb_comments.length) {
              comments.addClass('opened');
              return comments.animate({
                'height': fb_comments.height()
              }, 300, function() {
                return comments.addClass('static');
              });
            }
          }
        });
      }
      $(window).on('keyup', (function(_this) {
        return function(e) {
          if (e.keyCode <= 90 && e.keyCode >= 48 && !_this.search_оverlay.hasClass('visible')) {
            if (!$('body').hasClass('menu-is-opened')) {
              return _this.showSearchOverlay(String.fromCharCode(e.keyCode));
            }
          }
        };
      })(this));
//      $(window).on('keydown', (function(_this) {
//        return function(e) {
//          var char;
//          if (e.keyCode <= 90 && e.keyCode >= 48 && _this.search_input.is(':focus')) {
//            e.preventDefault();
//            if (_this.search_input.val() === 'Type to search') {
//              return _this.search_input.val(String.fromCharCode(e.keyCode));
//            } else {
//              char = _this.search_input.val().length ? String.fromCharCode(e.keyCode).toLowerCase() : String.fromCharCode(e.keyCode);
//              return _this.search_input.val(_this.search_input.val() + char);
//            }
//          }
//        };
//      })(this));
//      $('.search-btn').on('click', (function(_this) {
//        return function(e) {
//          e.preventDefault();
//          e.stopPropagation();
//          if ($('body').hasClass('menu-is-opened')) {
//            _this.hideMenu();
//            return setTimeout(function() {
//              return _this.showSearchOverlay();
//            }, 300);
//          } else {
//            return _this.showSearchOverlay();
//          }
//        };
//      })(this));
//      $('.close-search').on('click', (function(_this) {
//        return function(e) {
//          e.preventDefault();
//          e.stopPropagation();
//          return _this.hideSearchOverlay();
//        };
//      })(this));
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
      
      $(window).scroll(function() 																	//scroll down to footer
    		  {
    		       if  ($(window).scrollTop() == $(document).height() - $(window).height()) 
    		       {
    		    	   $('footer').addClass ('shown');
    		       }
    		       else{
    		    	   $('footer').removeClass('shown')
    		       }
    		  });
      
      
//      $(".upload_btn").on('click', function(){
//    	  $('.upload_file').click();
//    	  console.log(1);
//      }
//      );
//      $(".fotorama__html a").hover(																	//light fotorama href
//      		   function(){
//       	$(this).css({"opacity":"0.4"})
//       	   },
//      		function(){
//      	    	$(this).css({"opacity":"1"})
//       	   }
//       ); 
    	  $('.submit_btn').on('click', function(){
    		  alert ("Send E-mail?");
    	  });
      $(document).ready(function(){
    		$('.top_image').on('click', function (event) {
    			event.preventDefault();
    			var id  = $(this).attr('href'),
    				top = $('.top_image').height();
    			$('body,html').animate({scrollTop: top}, 1000);
    			console.log(top);
    		});
    	});
      main_img_cont = $('.main-img-cont');
      if (main_img_cont.length) {
        return main_img_cont.addClass('init');
      }
    },
    setFixedLogoVisibility: function() {
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 400) {
        return this.fixed_logo.addClass('hidden');
      } else {
        return this.fixed_logo.removeClass('hidden');
      }
    },
    setMainMarginBottom: function() {
     // return this.module.css('margin-bottom', this.footer.outerHeight());
    },
    showSearchOverlay: function(symbol) {
      var tmpStr;
     // $('.menu-btn').addClass('hidden');
      if (symbol) {
        this.search_input.val(symbol);
      }
      this.search_оverlay.addClass('visible');
      this.search_input.trigger('focus');
      tmpStr = this.search_input.val();
      this.search_input.val('');
      return this.search_input.val(tmpStr);
    },
    hideSearchOverlay: function() {
      $('.menu-btn').removeClass('hidden');
      return this.search_оverlay.removeClass('visible');
    },
    showMenu: function() {
      $('body').addClass('menu-animate');
      return this.menu.stop(true, true).animate({
        'margin-right': 0
      }, 300, (function(_this) {
        return function() {
          return $('body').addClass('menu-is-opened');
        };
      })(this));
    },
    hideMenu: function() {
      $('body').removeClass('menu-is-opened');
      return setTimeout((function(_this) {
        return function() {
          $('body').removeClass('menu-animate');
          return _this.menu.stop(true, true).animate({
            'margin-right': -_this.menu_width + 'px'
          }, 300);
        };
      })(this), 300);
    },
    
       
        
    setMenuSize: function() {
      var delta, resp_state, window_width;
      window_width = $(window).width();
      resp_state = window.intent.axes.width.current;
      delta = window_width/2;
      this.menu_width = Math.ceil(window_width - (window_width / 2 - delta));
      this.menu.css({
        width: this.menu_width
      });
      if (!$('body').hasClass('menu-is-opened')) {
        return this.menu.css({
          'margin-right': -this.menu_width + 'px'
        });
      }
    },
    initTransitionLinks: function() {
      var transition_links;
      transition_links = $('a.transition');
      transition_links.off('click.body_fade');
      transition_links.on('click.body_fade', function(e) {
        e.preventDefault();
        $('body').addClass('busy');
        setTimeout(function() {
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

  Envelope.Home = {
    load_more: void 0,
    load_more_btn: void 0,
    loader: void 0,
    articles_cont: void 0,
    articles: void 0,
    init: function() {
      this.load_more = $('.load-more');
      this.load_more_btn = $('a', this.load_more);
      this.loader = $('.loader');
      this.articles_cont = $('.articles');
      this.articles = $('.article-tsr, .baner');
      this.load_more_btn.on('click', (function(_this) {
        return function(e) {
          var t;
          e.preventDefault();
          _this.loader.addClass('visible');
          t = $(e.currentTarget);
          return $.post(Envelope.url('load_index'), {
            page: t.attr('data-page'),
            last_count: t.attr('data-last-count'),
            baner_count: t.attr('data-baner-count'),
            last_tv_index: t.attr('data-last-tv-index')
          }, 'ajax').success(function(data) {
            var a, new_items, _i, _len, _ref;
            if (data.status === 0) {
              new_items = [];
              _ref = data.articles;
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                a = _ref[_i];
                new_items.push($(a));
              }
              new_items = $($.map(new_items, function(el) {
                return el.get();
              }));
              return new_items.imagesLoaded(function() {
                _this.loader.removeClass('visible');
                _this.articles_cont.append(new_items);
                window.intent.elements(document);
                Envelope.initTransitionLinks();
                if (_this.articles_cont.data('articles-amount') > $('.article-tsr').length) {
                  t.attr({
                    'data-page': parseInt(t.attr('data-page'), 10) + 1,
                    'data-last-count': data.last_count,
                    'data-baner-count': data.baner_count,
                    'data-last-tv-index': data.last_tv_index
                  });
                } else {
                  _this.load_more.remove();
                }
                _this.articles = $('.article-tsr, .baner');
                return setTimeout(function() {
                  _this.animateArticles();
                  return $(window).trigger('scroll');
                }, 300);
              });
            } else {
              _this.loader.removeClass('visible');
              return alert('Something went wrong. Please try again later');
            }
          }).error(function() {
            _this.loader.removeClass('visible');
            return alert('Something went wrong. Please try again later');
          });
        };
      })(this));
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
      return this.articles.each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  Envelope.Press = {
    load_more: void 0,
    load_more_btn: void 0,
    loader: void 0,
    articles_cont: void 0,
    articles: void 0,
    init: function() {
      Envelope.initIsotope($('.press-articles'), '.press-article-tsr');
      this.load_more = $('.load-more');
      this.load_more_btn = $('a', this.load_more);
      this.loader = $('.loader');
      this.articles_cont = $('.press-articles');
      this.articles = $('.press-article-tsr');
      this.animateArticles();
      $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateArticles();
        };
      })(this));
      return this.load_more_btn.on('click', (function(_this) {
        return function(e) {
          var t;
          e.preventDefault();
          _this.loader.addClass('visible');
          t = $(e.currentTarget);
          return $.post(Envelope.url('load_press'), {
            page: t.attr('data-page')
          }, 'ajax').success(function(data) {
            var a, new_items, _i, _len, _ref;
            if (data.status === 0) {
              new_items = [];
              _ref = data.articles;
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                a = _ref[_i];
                new_items.push($(a));
              }
              new_items = $($.map(new_items, function(el) {
                return el.get();
              }));
              return new_items.imagesLoaded(function() {
                _this.loader.removeClass('visible');
                _this.articles_cont.append(new_items);
                window.intent.elements(document);
                _this.articles_cont.isotope('appended', new_items);
                if (_this.articles_cont.data('articles-amount') > $('.press-article-tsr').length) {
                  t.attr({
                    'data-page': parseInt(t.attr('data-page'), 10) + 1
                  });
                } else {
                  _this.load_more.remove();
                }
                _this.articles = $('.press-article-tsr');
                return setTimeout(function() {
                  _this.animateArticles();
                  return $(window).trigger('scroll');
                }, 300);
              });
            } else {
              _this.loader.removeClass('visible');
              return alert('Something went wrong. Please try again later');
            }
          }).error(function() {
            _this.loader.removeClass('visible');
            return alert('Something went wrong. Please try again later');
          });
        };
      })(this));
    },
    animateArticles: function(is_scroll) {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return this.articles.each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  
  
  Envelope.Filtered_Overview = {
    load_more: void 0,
    load_more_btn: void 0,
    loader: void 0,
    articles_cont: void 0,
    articles: void 0,
    init: function() {
      var is_archived, load_url;
      Envelope.initIsotope($('.filtered-articles'), '.filtered-article-tsr, .filtered-baner');
      this.load_more = $('.load-more');
      this.load_more_btn = $('a', this.load_more);
      this.loader = $('.loader');
      this.articles_cont = $('.filtered-articles');
      this.articles = $('.filtered-article-tsr, .filtered-baner');
      window.intent.on('width:', (function(_this) {
        return function(e) {
          return _this.articles_cont.isotope('layout');
        };
      })(this));
      this.animateArticles();
      $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateArticles();
        };
      })(this));
      switch (this.load_more_btn.attr('data-selector-type')) {
        case 'category':
          load_url = Envelope.url('load_category');
          is_archived = 0;
          break;
        case 'tag':
          load_url = Envelope.url('load_tag');
          is_archived = 0;
          break;
        case 'archived_category':
          load_url = Envelope.url('load_category');
          is_archived = 1;
          break;
        case 'archived_tag':
          load_url = Envelope.url('load_tag');
          is_archived = 1;
      }
      return this.load_more_btn.on('click', (function(_this) {
        return function(e) {
          var t;
          _this.loader.addClass('visible');
          e.preventDefault();
          t = $(e.currentTarget);
          return $.post(load_url, {
            page: t.attr('data-page'),
            selector_id: t.attr('data-selector-id'),
            is_archived: is_archived
          }, 'ajax').success(function(data) {
            var a, new_items, _i, _len, _ref;
            if (data.status === 0) {
              new_items = [];
              _ref = data.articles;
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                a = _ref[_i];
                new_items.push($(a));
              }
              new_items = $($.map(new_items, function(el) {
                return el.get();
              }));
              return new_items.imagesLoaded(function() {
                _this.loader.removeClass('visible');
                _this.articles_cont.append(new_items);
                window.intent.elements(document);
                _this.articles_cont.isotope('appended', new_items);
                if (_this.articles_cont.data('articles-amount') > $('.filtered-article-tsr').length) {
                  t.attr({
                    'data-page': parseInt(t.attr('data-page'), 10) + 1
                  });
                } else {
                  _this.load_more.remove();
                }
                _this.articles = $('.filtered-article-tsr, .filtered-baner');
                return setTimeout(function() {
                  _this.animateArticles();
                  return $(window).trigger('scroll');
                }, 300);
              });
            } else {
              _this.loader.removeClass('visible');
              return alert('Something went wrong. Please try again later');
            }
          }).error(function() {
            _this.loader.removeClass('visible');
            return alert('Something went wrong. Please try again later');
          });
        };
      })(this));
    },
    animateArticles: function(is_scroll) {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return this.articles.each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  Envelope.Archive = {
    load_more: void 0,
    load_more_btn: void 0,
    loader: void 0,
    articles_cont: void 0,
    articles: void 0,
    init: function() {
      Envelope.initIsotope($('.press-articles'), '.press-article-tsr');
      this.load_more = $('.load-more');
      this.load_more_btn = $('a', this.load_more);
      this.loader = $('.loader');
      this.articles_cont = $('.press-articles');
      this.articles = $('.press-article-tsr');
      this.animateArticles();
      $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateArticles();
        };
      })(this));
      return this.load_more_btn.on('click', (function(_this) {
        return function(e) {
          var t;
          _this.loader.addClass('visible');
          e.preventDefault();
          t = $(e.currentTarget);
          return $.post(Envelope.url('load_archive'), {
            page: t.attr('data-page')
          }, 'ajax').success(function(data) {
            var a, new_items, _i, _len, _ref;
            if (data.status === 0) {
              new_items = [];
              _ref = data.articles;
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                a = _ref[_i];
                new_items.push($(a));
              }
              new_items = $($.map(new_items, function(el) {
                return el.get();
              }));
              return new_items.imagesLoaded(function() {
                _this.loader.removeClass('visible');
                _this.articles_cont.append(new_items);
                window.intent.elements(document);
                _this.articles_cont.isotope('appended', new_items);
                if (_this.articles_cont.data('articles-amount') > $('.press-article-tsr').length) {
                  t.attr({
                    'data-page': parseInt(t.attr('data-page'), 10) + 1
                  });
                } else {
                  _this.load_more.remove();
                }
                _this.articles = $('.press-article-tsr');
                return setTimeout(function() {
                  _this.animateArticles();
                  return $(window).trigger('scroll');
                }, 300);
              });
            } else {
              _this.loader.removeClass('visible');
              return alert('Something went wrong. Please try again later');
            }
          }).error(function() {
            _this.loader.removeClass('visible');
            return alert('Something went wrong. Please try again later');
          });
        };
      })(this));
    },
    animateArticles: function() {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return this.articles.each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  Envelope.Search_Results = {
    articles: void 0,
    init: function() {
      Envelope.initIsotope($('.found-articles'), '.search-article-tsr');
      this.articles = $('.search-article-tsr');
      this.animateArticles();
      return $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateArticles();
        };
      })(this));
    },
    animateArticles: function() {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return this.articles.each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  Envelope.Article = {
    bottom_images: void 0,
    relative_container: void 0,
    main_img_cont: void 0,
    bg_links: void 0,
    init: function() {
      this.relative_container = $('.relative-container');
      this.bottom_images = $('.bottom-image');
      this.main_img_cont = $('.main-img-cont');
      this.bg_links = $('.bg-link');
      this.animateImages();
      this.main_img_cont.imagesLoaded((function(_this) {
        return function() {
          return _this.setBgLinksSize();
        };
      })(this));
      $(window).on('resize', (function(_this) {
        return function() {
          return _this.setBgLinksSize();
        };
      })(this));
      $(window).on('scroll resize', (function(_this) {
        return function() {
          return _this.animateImages();
        };
      })(this));
      return $('.bg-link').on('mouseover', (function(_this) {
        return function(e) {
          var t;
          t = $(e.currentTarget);
          if (t.hasClass('prev-bg-link')) {
            return _this.relative_container.removeClass('move-left').addClass('move-right');
          } else if (t.hasClass('next-bg-link')) {
            return _this.relative_container.removeClass('move-right').addClass('move-left');
          }
        };
      })(this)).on('mouseleave', (function(_this) {
        return function() {
          return _this.relative_container.removeClass('move-left').removeClass('move-right');
        };
      })(this));
    },
    setBgLinksSize: function() {
      this.bg_links.height(this.main_img_cont.height());
      return this.bg_links.width(($(window).width() - this.main_img_cont.children('.hover-area').width()) / 2);
    },
    animateImages: function() {
      var w_height, w_scroll_top;
      w_scroll_top = $(window).scrollTop();
      w_height = $(window).height();
      return this.bottom_images.add('.baner').each((function(_this) {
        return function(i, e) {
          var offset, t;
          t = $(e);
          offset = t.offset().top;
          if (offset > w_scroll_top && offset < w_scroll_top + w_height) {
            return t.addClass('shown');
          } else if (offset >= (w_scroll_top + w_height)) {
            return t.removeClass('shown');
          }
        };
      })(this));
    }
  };

  window.Envelope = Envelope;

  $($.proxy(Envelope.init, Envelope));

}).call(this);

