$(document).ready(function () {
    $("#news_slider").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 3,
                nav: false,
                dots: false,
            },
            1000: {
                items: 4,
                nav: false,
                dots: false,

            }
        }
    });
});
$(document).ready(function () {
    $("#brands").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 2,
                nav: false,
                dots: false,
            },
            600: {
                items: 4,
                nav: false,
                dots: false,
            },
            1000: {
                items: 8,
                nav: false,
                dots: true,

            }
        }
    });
});
$(document).ready(function () {
    $("#testimonials").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 1,
                nav: false,
                dots: false,
            },
            1000: {
                items: 1,
                nav: false,
                dots: false,

            }
        }
    });
});
$(document).ready(function () {
    $("#best_sellers").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 2,
                nav: false,
                dots: false,
            },
            600: {
                items: 2,
                nav: false,
                dots: false,
            },
            1000: {
                items: 5,
                nav: false,
                dots: false,

            }
        }
    });
});
$(document).ready(function () {
    $("#recent_prod").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 2,
                nav: false,
                dots: false,
            },
            600: {
                items: 2,
                nav: false,
                dots: false,
            },
            1000: {
                items: 5,
                nav: false,
                dots: false,

            }
        }
    });
});
//counter js

(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};

        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from: $(this).data('from'),
                to: $(this).data('to'),
                speed: $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals: $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof (settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof (settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
        formatter: function (value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });

    // start all the timers
    $('.timer').each(count);

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
});

//swipe 
$(".carousel").swipe({

    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');

    },
    allowPageScroll: "vertical"

});