
    	
    	var ResponsiveBP = function (breakpoints, prefix) {
    		
    		// private variables
    		this.breakpoints = _.sortBy(breakpoints);
    		this.prefix = prefix || 'bp';
    		this.current_bp = undefined;

    		// initialization
    		var selector = _.map(this.breakpoints, function (el) {
    			return '[data-' + this.prefix + '-' + el + ']'; 
    		}.bind(this)).join(',');
    		$(selector).each(function (i, item) {
    			var item = $(item);
    			item
	    			.data(this.prefix + '-parent', item.parent())
	    			.data(this.prefix + '-prev', item.prev())
	    			.data(this.prefix + '-next', item.next());
    		}.bind(this));
    		$(":data(" + this.prefix + "-init)").each(function (i, item) {
    			_.bind(new Function ("parent", "prev", "next", $(item).data(this.prefix + "-init")), item)($(this).data(this.prefix + '-parent'), $(this).data(this.prefix + '-prev'), $(this).data(this.prefix + '-next'));
    		}.bind(this));
    		$(window).resize(_.throttle(this.onWindowResize.bind(this), 300)).resize();
    	};
    	
    	ResponsiveBP.prototype = {
    		
    		onWindowResize: function (e) {
    			// determine the current responsive preakpoint
    			var width = $(window).width();
    			var new_bp = _.first(this.breakpoints);
    			_.each(this.breakpoints, function (bp) {
    				if (width >= bp) new_bp = bp;
    			});
    			if (new_bp != this.current_bp) {
    				this.current_bp = new_bp;
    				this.update();
    			}
    		},
    		
    		
    		update: function () {
    			// set the body class
    			$(document.body)
    				.removeClass(_.map(this.breakpoints, function (val) { return this.prefix + "-" + val }.bind(this)).join(" "))
    				.addClass(this.prefix + "-" + this.current_bp);
    			$(":data(" + this.prefix + "-" + this.current_bp + ")").each(function (i, item) {
    				_.each($(item).data(this.prefix + "-" + this.current_bp).split(';'), function (command) {
    					// update the fotorama
    					var fotorama_match = command.match(/fotorama:(height|width)=(.+)/);
    					if (fotorama_match) {
    						var fotorama = $(item).data('fotorama');
    						// proceed only if the fotorama is initialized
    						if (fotorama) {
    							if (fotorama.options[fotorama_match[1]] != fotorama_match[2]) {
    								var fotorama_parameters = {};
    								fotorama_parameters[fotorama_match[1]] = fotorama_match[2];
    								fotorama.resize(fotorama_parameters);
    							}
    						}
    					} else if (command == 'origin') {
    						// move to the origin
    						if ($(item).data(this.prefix + '-prev').length) {
    							$(item).insertAfter($(item).data(this.prefix + '-prev'));
    						} else if ($(item).data(this.prefix + '-next').length) {
    							$(item).insertBefore($(item).data(this.prefix + '-next'));
    						} else {
    							$(item).appendTo($(item).data(this.prefix + '-parent'));
    						}
    					} else {
    						// move to the reference element
    						var position_match = command.match(/(before|after|append|prepend):(.+)/);
    						if (position_match) {
    							var reference_selector = position_match[2];
    							var reference;
    							// apply a command to parent, next of previous items
    							if (reference_selector.match(/^(parent|next|prev)$/)) {
    								reference = $(item).data(this.prefix + '-' + reference_selector);
    							} else {
    								// apply a command to jquery selector
    								reference = $(reference_selector);
    							}
    							reference[position_match[1]](item);
    						} else {
    							// eval the code
    							new Function ($(item).data(this.prefix + "-" + App.current_bp)).bind(item)();
    						}
    					}
    				}.bind(this));
    			}.bind(this));
    		}
    		
    		
    	};
    	
