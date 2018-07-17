(function($) {
    var methods = {
        to_top: function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
            return false;
        }
    };

    $.fn.tottTop = function(options) {

        var settings = $.extend({
            scrollTop: 800, // Высота с которой будет показываться кнопка
            duration: 1000, // Длительность анимации скролла
            scrtollTopBtnDuration: 400 // Длительность анимации отображения кнопки
        }, options);

        return this.each(function() {
            var $this = $(this);

            var win = $(window);

            win.scroll(function() {
                if (win.scrollTop() > settings.scrollTop) {
                    $this.fadeIn(settings.scrtollTopBtnDuration);
                } else {
                    $this.fadeOut(settings.scrtollTopBtnDuration);
                }
            });

            $this.click(methods.to_top);
        });

    };
})(jQuery);
