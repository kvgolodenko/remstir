// Generated by CoffeeScript 1.8.0
(function() {
  var Stiralka;

  Stiralka = {
    init: function() {
    	$('body').ready(function(){
    		setTimeout(function() {
    			$('body').removeClass('busy');
    		},500);
		    var width = $(window).width();
		    $('.bp-0 #container header .menu-set').css({"margin-right": - width});
    	});
        var bps = String($(document.body).data('responsive-bp'));
        new ResponsiveBP(_.map(bps.split(","), function (i) { return parseInt(i) } ));
      $('.message').on("click", function(){
        $('.form-layer form .telephone').val('');
        $('.form-layer').fadeIn(300);
      })
      $('.close').on("click",function(){
        $('.form-layer').fadeOut(300);
      });
      $('.sms-form').on("submit", function(e){
        e.preventDefault();
        let data = $('.sms-form').serialize();
        $.post(
          'sendSms',
          data,
        ).success(function(){
        }).fail(function(){
        })
        $('.form-layer').fadeOut(300);
        $('.form-layer form .telephone').val('');
      })
    },
  };
  window.Stiralka = Stiralka;

  $($.proxy(Stiralka.init, Stiralka));

}).call(this);
