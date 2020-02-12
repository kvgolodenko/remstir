/**
 * jQuery Textarea Characters Counter Plugin
 * by Alex Ostapov
 */
(function($){  
	$.fn.textareaCharsCount = function(options) {
		var defaults = {
			callback: null,
			max_length: 0,
			warning_at: 0,
			count_chars: true,
			count_words: false
		};  
		var options = $.extend(defaults, options);
		
		var container = $(this);
		if (options.callback === null) {
			return;
		}

		container
			.bind('keyup', function(event) {
				limitTextAreaByCharacterCount();
			})
			.bind('mouseover', function(event) {
				setTimeout(function() {
					limitTextAreaByCharacterCount();
				}, 10);
			})
			.bind('paste', function(event){
				setTimeout(function() {
					limitTextAreaByCharacterCount();
				}, 10);
			});
		
		function limitTextAreaByCharacterCount() {
			var content = container.val();
			var content_length = content.length;
			var chars;
			var words;
			var warning;
			
			if (options.count_chars) {
				//If copied content is already more than max_length, chop it to max_length.
				if (options.max_length && content_length >= options.max_length) {
					content = content.substring(0, options.max_length); 				
				}

				var count = 0;
				for (var i = 0; i < content_length; i++) {
					if (content.charAt(i) == '\n') {
						count++;
					}
				}
				var system_max_length = 0;
				
				var is_win = (navigator.appVersion.toLowerCase().indexOf('win') != -1);
				if (is_win) {
					/**
					 * Count new line character.
					 * For windows, it occupies 2 characters
					 */
					 system_max_length = options.max_length - count;
				} else {
					 system_max_length = options.max_length
				}
				
				if (options.max_length && content_length > system_max_length) {
					//avoid scroll bar moving
					var originalScrollTopPosition = this.scrollTop;
					container.val(content.substring(0, system_max_length));
					this.scrollTop = originalScrollTopPosition;
				}
				
				warning = options.warning_at && (system_max_length - content_length <= options.warning_at);
				
				chars = container.val().length + (is_win ? count : 0);
			}
			
			if (options.count_words) {
				words = countWord(getCleanedWordString(container.val()));
			}
			
			options.callback(chars, words, warning);
		}
		
		function getCleanedWordString(content) {
			var fullStr = content + " ";
			var initial_whitespace_rExp = /^[^A-Za-z0-9]+/gi;
			var left_trimmedStr = fullStr.replace(initial_whitespace_rExp, "");
			var non_alphanumerics_rExp = rExp = /[^A-Za-z0-9]+/gi;
			var cleanedStr = left_trimmedStr.replace(non_alphanumerics_rExp, " ");
			var splitString = cleanedStr.split(" ");
			return splitString;
		}
		
		function countWord(cleanedWordString) {
			return cleanedWordString.length - 1;
		}
	};  
})(jQuery);