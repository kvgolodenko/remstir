Envelope = 
	module:			undefined
	base_url:		undefined
	body_id:		undefined
	menu:			undefined
	search_оverlay:	undefined
	search_input:	undefined
	intent:			undefined
	footer: 		undefined
	menu_width:		undefined
	fixed_logo:		undefined

	url: (rel_url) ->
		return @base_url + rel_url.replace /^\/+/, ""

	jsonURL: (url) ->
		result = url
		unless result then result = document.location.href
		if result.indexOf('?') == -1 then result += '?'
		if result.substr(-1) != '?' then result += '&'
		result += '___xhr'
		result

	init: ->
		@module			= $ 'main'
		@footer			= $ 'footer'
		@body_id		= $('body').attr 'id'
		@menu 			= $ 'nav'
		@search_оverlay	= $ '.search-overlay'
		@search_input	= $ 'input', @search_оverlay
		@fixed_logo		= $ '.fixed-logo'
		@base_url		= $ 'body'
			.data 'base-url'
			.replace(/\/+$/, "") + "/"
	

		$('body').imagesLoaded ->
			$('body').removeClass 'busy'
	
		$('.initially-hidden')
			.removeClass "initially-hidden"
			.hide()

		switch @module.attr 'id'
			when 'home' then @Home.init()
			when 'press' then @Press.init()
			when 'archive' then @Archive.init()
			when 'filtered_overview' then @Filtered_Overview.init()
			when 'article' then @Article.init()
			when 'search_results' then @Search_Results.init()
			# else
		
		# header animations

		lastScrollTop = 0
		body = $ 'body'
		scroll_timeout = 0
		$(window).on 'scroll', () ->
			clearTimeout(scroll_timeout)
			scroll_timeout = setTimeout ->
				st = $(window).scrollTop()
				if st > lastScrollTop
					if st > 305
						body.addClass 'hide-categories'
				else
					body.removeClass 'hide-categories'
				lastScrollTop = st;

				if st > 305 and !body.hasClass('scrolled-down')
					body.addClass 'scrolled-down'
				else if st <= 305 and body.hasClass('scrolled-down')
					body.removeClass 'scrolled-down'
			, 40

		
		# update @body_id on resize
		$(window).on 'resize.body_id', (e) =>
			id = $('body').attr 'id'
			@body_id = id if @body_id != id

		# up to top animations
		$('.up-to-top').on 'click', (e) ->
			e.preventDefault()
			$('html, body').animate
				scrollTop: 0
				800

		# margin bottom for main tag
		unless Modernizr.touch
			@setMainMarginBottom()
			$(window).on 'resize', =>
				@setMainMarginBottom()

		#menu
		@setMenuSize()
		$(window).on 'resize.menu_width', =>
			@setMenuSize()
		
		@menu = $('nav')
		@initTransitionLinks()
		@menu.on 'click', (e) ->
			e.stopPropagation();
		$('.menu-btn').on 'click', (e) =>
			e.preventDefault()
			e.stopPropagation();
			unless $('body').hasClass 'menu-is-opened'
				@showMenu()
			else
				@hideMenu()
		
		$(document).on 'keyup', (e) =>
			if e.which == 27
				@hideMenu()
				@hideSearchOverlay()
		$(document).on 'click', =>
			@hideMenu()

		#video
		$('.watch-video-btn').on 'click', (e) ->
			video = $(e.currentTarget).closest '.video'
			video_url = video.data 'video-url'

			if video_url.match(/^https?:\/\/vimeo.com\/\d+$/)
				$.ajax
					url: "https://vimeo.com/api/oembed.json?url=#{video_url}&autoplay=true"
				.done (data) ->
					video.addClass 'playing'
						.append($('<div class="iframe-cont">').append(data.html))
					setTimeout ->
						$('.iframe-cont').addClass 'visible'
					,300
				.error ->
					alert 'Vimeo error.'
			else 
				if video_url.match /^https?:\/\/www.youtube.com\/watch/
					video_id = video_url.split('v=')[1]
					ampersandPosition = video_id.indexOf '&'
					if ampersandPosition != -1
						video_id = video_id.substring 0, ampersandPosition
				else if video_url.match /^https?:\/\/youtu.be\//
					video_id = video_url.replace('http://youtu.be/', '').replace 'https://youtu.be/', ''
				else
					alert 'Youtube error'
					return
				iframe = $('<iframe>').attr
					id: 'player'
					type: 'text/html'
					src: 'https://www.youtube.com/embed/' + video_id + '?enablejsapi=1&autoplay=1'
					frameborder: 0
				video.addClass 'playing'
					.append($('<div class="iframe-cont">').append(iframe))
				setTimeout ->
					$('.iframe-cont').addClass 'visible'
				,300


		# comments on articles animations
		comments = $ '.comments'
		if comments.length
			# comments.hide 0
			$('.comments-link').on 'click', (e) ->
				e.preventDefault()
				fb_comments = $ '.fb-comments', comments
				if comments.hasClass 'opened'
					comments.height fb_comments.height()
					comments.removeClass 'opened'
					comments.animate
						'height': 0
					, 300, ->
						comments.removeClass 'static'
				else
					if fb_comments.length
						comments.addClass 'opened'
						comments.animate
							'height': fb_comments.height()
						, 300, ->
							comments.addClass 'static'

		#search overlay animations
		$(window).on 'keyup', (e) =>
			if e.keyCode <= 90 and e.keyCode >= 48 and !@search_оverlay.hasClass('visible')
				@showSearchOverlay(String.fromCharCode(e.keyCode)) unless $('body').hasClass 'menu-is-opened'
		$(window).on 'keydown', (e) =>
			if e.keyCode <= 90 and e.keyCode >= 48 and @search_input.is(':focus')
				e.preventDefault()
				if @search_input.val() == 'Type to search'
					@search_input.val String.fromCharCode(e.keyCode)
				else
					char = if @search_input.val().length then String.fromCharCode(e.keyCode).toLowerCase() else String.fromCharCode(e.keyCode)
					@search_input.val(@search_input.val() + char)

		


		$('.search-btn').on 'click', (e) =>
			e.preventDefault()
			e.stopPropagation()
			if $('body').hasClass 'menu-is-opened'
				@hideMenu()
				setTimeout =>
					@showSearchOverlay()
				, 300
			else
				@showSearchOverlay()

		$('.close-search').on 'click', (e) =>
			e.preventDefault()
			e.stopPropagation()
			@hideSearchOverlay()

		$(window).on 'scroll', =>
			@setFixedLogoVisibility()

		main_img_cont = $ '.main-img-cont'
		if main_img_cont.length
			# main_img_cont.imagesLoaded ->
			main_img_cont.addClass 'init'


	setFixedLogoVisibility: ->
		if $(window).scrollTop() + $(window).height() > $(document).height() - 400
			@fixed_logo.addClass 'hidden'
		else
			@fixed_logo.removeClass 'hidden'



	setMainMarginBottom: ->
		@module.css 'margin-bottom', @footer.outerHeight()

	showSearchOverlay: (symbol) ->
		$('.menu-btn').addClass 'hidden'
		@search_input.val symbol if symbol
		@search_оverlay.addClass 'visible'


		@search_input.trigger 'focus'
		tmpStr = @search_input.val()
		@search_input.val ''
		@search_input.val tmpStr

	hideSearchOverlay: ->
		$('.menu-btn').removeClass 'hidden'
		@search_оverlay.removeClass 'visible'

	showMenu: ->
		$('body').addClass 'menu-animate'
		@menu.stop(true, true).animate
			'margin-right': 0
		, 300, =>
			$('body').addClass 'menu-is-opened'


	hideMenu: ->
		$('body').removeClass 'menu-is-opened'

		setTimeout =>
			$('body').removeClass 'menu-animate'
			@menu.stop(true, true).animate
				'margin-right': - @menu_width + 'px'
			, 300
		, 300


	setMenuSize: ->
		window_width = $(window).width()
		resp_state = window.intent.axes.width.current
		switch resp_state
			when 'standard' then delta = 475
			when 'tabletlandscape' then delta = 300
			when 'tabletportrait' then delta = 301
			when 'mobile' then delta = window_width / 2
		@menu_width = Math.ceil(window_width - (window_width / 2 - delta))
		@menu.css
			width: @menu_width
		unless $('body').hasClass 'menu-is-opened'
			@menu.css
				'margin-right': - @menu_width + 'px'


	initTransitionLinks: ->
		transition_links = $('a.transition')
		transition_links.off 'click.body_fade'
		transition_links.on 'click.body_fade', (e) ->
			e.preventDefault()
			$('body').addClass 'busy'
			setTimeout ->
				location.href = $(e.currentTarget).attr 'href'
			, 300

	initIsotope: (container, item_selector) ->
		setTimeout ->
			container.imagesLoaded ->
				container.isotope
					itemSelector: item_selector
					layoutMode: 'masonry'
		, 50

Envelope.Home =
	load_more:		undefined
	load_more_btn:	undefined
	loader:			undefined
	articles_cont: 	undefined
	articles:		undefined

	init: ->
		@load_more 		= $ '.load-more'
		@load_more_btn	= $ 'a', @load_more
		@loader 		= $ '.loader'
		@articles_cont	= $ '.articles'
		@articles 		= $ '.article-tsr, .baner'

		@load_more_btn.on 'click', (e) =>
			e.preventDefault()
			@loader.addClass 'visible'
			t = $(e.currentTarget);
			$.post(
				Envelope.url 'load_index'
				{
					page:			t.attr 'data-page'
					last_count:		t.attr 'data-last-count'
					baner_count:	t.attr 'data-baner-count'
					last_tv_index:	t.attr 'data-last-tv-index'
				}
				'ajax'
			).success((data) =>
				if data.status == 0
					new_items = []
					for a in data.articles
						new_items.push $(a)
					new_items = $($.map(new_items, (el) ->						
						return el.get()
					))

					new_items.imagesLoaded =>
						@loader.removeClass 'visible'
						@articles_cont.append new_items
						window.intent.elements document
						Envelope.initTransitionLinks()
						if @articles_cont.data('articles-amount') > $('.article-tsr').length
							t.attr
								'data-page':			parseInt(t.attr('data-page'), 10) + 1
								'data-last-count':		data.last_count
								'data-baner-count':		data.baner_count
								'data-last-tv-index':	data.last_tv_index
						else
							@load_more.remove()
						@articles 		= $ '.article-tsr, .baner'
						setTimeout =>
							@animateArticles()
							$(window).trigger 'scroll'
						, 300
				else
					@loader.removeClass 'visible'
					alert 'Something went wrong. Please try again later'
			).error(() =>
				@loader.removeClass 'visible'
				alert 'Something went wrong. Please try again later'
			)

		@animateArticles()
		$(window).on 'scroll resize', =>
			@animateArticles()

	animateArticles: (is_scroll) ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@articles.each (i, e) =>
			t = $(e)
			offset = t.offset().top

			# t.attr('data-scroll-top', t.scroll().top)
			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'
			

Envelope.Press =
	load_more:		undefined
	load_more_btn:	undefined
	loader: 		undefined
	articles_cont: 	undefined
	articles:		undefined

	init: ->
		Envelope.initIsotope($('.press-articles'), '.press-article-tsr')

		@load_more 		= $ '.load-more'
		@load_more_btn	= $ 'a', @load_more
		@loader 		= $ '.loader'
		@articles_cont	= $ '.press-articles'
		@articles 		= $ '.press-article-tsr'

		@animateArticles()
		$(window).on 'scroll resize', =>
			@animateArticles()
		@load_more_btn.on 'click', (e) =>
			e.preventDefault()
			@loader.addClass 'visible'
			t = $(e.currentTarget);
			$.post(
				Envelope.url 'load_press'
				{
					page: t.attr 'data-page'
				}
				'ajax'
			).success((data) =>
				if data.status == 0
					new_items = []
					for a in data.articles
						new_items.push $(a)
					new_items = $($.map(new_items, (el) ->
						return el.get()
					))
					new_items.imagesLoaded =>
						@loader.removeClass 'visible'
						@articles_cont.append(new_items)
						window.intent.elements document
						@articles_cont.isotope('appended', new_items)
						if @articles_cont.data('articles-amount') > $('.press-article-tsr').length
							t.attr
								'data-page': parseInt(t.attr('data-page'), 10) + 1
						else
							@load_more.remove()
						@articles 		= $ '.press-article-tsr'
						setTimeout =>
							@animateArticles()
							$(window).trigger 'scroll'
						, 300
				else
					@loader.removeClass 'visible'
					alert 'Something went wrong. Please try again later'
			).error(() =>
				@loader.removeClass 'visible'
				alert 'Something went wrong. Please try again later'
			)

	animateArticles: (is_scroll) ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@articles.each (i, e) =>
			t = $(e)
			offset = t.offset().top

			# t.attr('data-scroll-top', t.scroll().top)
			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'

Envelope.Filtered_Overview =
	load_more:		undefined
	load_more_btn:	undefined
	loader:			undefined
	articles_cont: 	undefined
	articles:		undefined

	init: ->
		Envelope.initIsotope($('.filtered-articles'), '.filtered-article-tsr, .filtered-baner')

		@load_more 		= $ '.load-more'
		@load_more_btn	= $ 'a', @load_more
		@loader 		= $ '.loader'
		@articles_cont	= $ '.filtered-articles'
		@articles 		= $ '.filtered-article-tsr, .filtered-baner'


		window.intent.on 'width:', (e) =>
			@articles_cont.isotope 'layout'

		@animateArticles()
		$(window).on 'scroll resize', =>
			@animateArticles()

		switch @load_more_btn.attr 'data-selector-type'
			when 'category'
				load_url	= Envelope.url 'load_category'
				is_archived	= 0
			when 'tag'
				load_url	= Envelope.url 'load_tag'
				is_archived	= 0
			when 'archived_category'
			 	load_url	= Envelope.url 'load_category'
			 	is_archived	= 1
			when 'archived_tag'
			 	load_url	= Envelope.url 'load_tag'
			 	is_archived	= 1

		@load_more_btn.on 'click', (e) =>
			@loader.addClass 'visible'
			e.preventDefault()
			t = $(e.currentTarget);
			$.post(
				load_url
				{
					page: t.attr 'data-page'
					selector_id: t.attr 'data-selector-id'
					is_archived: is_archived
				}
				'ajax'
			).success((data) =>
				if data.status == 0
					new_items = []
					for a in data.articles
						new_items.push $(a)
					new_items = $($.map(new_items, (el) ->
						return el.get()
					))
					new_items.imagesLoaded =>
						@loader.removeClass 'visible'
						@articles_cont.append(new_items)
						window.intent.elements document
						@articles_cont.isotope('appended', new_items)
						if @articles_cont.data('articles-amount') > $('.filtered-article-tsr').length
							t.attr
								'data-page': parseInt(t.attr('data-page'), 10) + 1
						else
							@load_more.remove()
						@articles 		= $ '.filtered-article-tsr, .filtered-baner'
						setTimeout =>
							@animateArticles()
							$(window).trigger 'scroll'
						, 300
				else
					@loader.removeClass 'visible'
					alert 'Something went wrong. Please try again later'
			).error(() =>
				@loader.removeClass 'visible'
				alert 'Something went wrong. Please try again later'
			)
	animateArticles: (is_scroll) ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@articles.each (i, e) =>
			t = $(e)
			offset = t.offset().top

			# t.attr('data-scroll-top', t.scroll().top)
			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'

		

Envelope.Archive =
	load_more:		undefined
	load_more_btn:	undefined
	loader: 		undefined
	articles_cont: 	undefined
	articles:		undefined

	init: ->
		Envelope.initIsotope($('.press-articles'), '.press-article-tsr')

		@load_more 		= $ '.load-more'
		@load_more_btn	= $ 'a', @load_more
		@loader 		= $ '.loader'
		@articles_cont	= $ '.press-articles'
		@articles 		= $ '.press-article-tsr'

		@animateArticles()
		$(window).on 'scroll resize', =>
			@animateArticles()

		@load_more_btn.on 'click', (e) =>
			@loader.addClass 'visible'
			e.preventDefault()
			t = $(e.currentTarget);
			$.post(
				Envelope.url 'load_archive'
				{
					page: t.attr 'data-page'
				}
				'ajax'
			).success((data) =>
				if data.status == 0
					new_items = []
					for a in data.articles
						new_items.push $(a)
					new_items = $($.map(new_items, (el) ->
						return el.get()
					))
					new_items.imagesLoaded =>
						@loader.removeClass 'visible'
						@articles_cont.append(new_items)
						window.intent.elements document
						@articles_cont.isotope('appended', new_items)
						if @articles_cont.data('articles-amount') > $('.press-article-tsr').length
							t.attr
								'data-page': parseInt(t.attr('data-page'), 10) + 1
						else
							@load_more.remove()
						@articles 		= $ '.press-article-tsr'
						setTimeout =>
							@animateArticles()
							$(window).trigger 'scroll'
						, 300
				else
					@loader.removeClass 'visible'
					alert 'Something went wrong. Please try again later'
			).error(() =>
				@loader.removeClass 'visible'
				alert 'Something went wrong. Please try again later'
			)

	animateArticles: () ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@articles.each (i, e) =>
			t = $(e)
			offset = t.offset().top

			# t.attr('data-scroll-top', t.scroll().top)
			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'
Envelope.Search_Results =
	articles:		undefined
	init: ->
		Envelope.initIsotope($('.found-articles'), '.search-article-tsr')
		@articles 		= $ '.search-article-tsr'

		@animateArticles()
		$(window).on 'scroll resize', =>
			@animateArticles()
	animateArticles: () ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@articles.each (i, e) =>
			t = $(e)
			offset = t.offset().top

			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'	

Envelope.Article =
	bottom_images:		undefined
	relative_container:	undefined
	main_img_cont:		undefined
	bg_links:			undefined

	init: ->
		@relative_container = $ '.relative-container'
		@bottom_images		= $ '.bottom-image'
		@main_img_cont		= $ '.main-img-cont'
		@bg_links			= $ '.bg-link'
		@animateImages()

		@main_img_cont.imagesLoaded =>
			@setBgLinksSize()
		$(window).on 'resize', =>
			@setBgLinksSize()

		$(window).on 'scroll resize', =>
			@animateImages()

		$('.bg-link').on 'mouseover', (e) =>
			t = $ e.currentTarget
			if t.hasClass 'prev-bg-link'
				#move right
				@relative_container.removeClass('move-left').addClass 'move-right'
			else if t.hasClass 'next-bg-link'
				#move left
				@relative_container.removeClass('move-right').addClass 'move-left'
		.on 'mouseleave', () =>
			@relative_container.removeClass('move-left').removeClass 'move-right'

	setBgLinksSize: ->
		@bg_links.height(@main_img_cont.height())
		@bg_links.width ($(window).width() - @main_img_cont.children('.hover-area').width()) / 2


	animateImages: ->
		w_scroll_top	= $(window).scrollTop()
		w_height		= $(window).height()
		@bottom_images.add('.baner').each (i, e) =>
			t = $(e)
			offset = t.offset().top

			if offset > w_scroll_top && offset < w_scroll_top + w_height
				t.addClass 'shown'
			else if offset >= (w_scroll_top + w_height)
				t.removeClass 'shown'






























window.Envelope = Envelope



# The Application entry point
$($.proxy(Envelope.init, Envelope));
