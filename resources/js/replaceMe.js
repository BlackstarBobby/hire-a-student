/**
 * Created by softiaweb on 17/01/2017.
 */
(function ($) {
    $.replaceMe = function (element, options) {
        var plugin = this;
        var $element = $(element),
            element = element;

        //default options.
        var defaults = {};

        plugin.init = function () {
            plugin.settings = $.extend({}, defaults, options);

        };
        /*
            method that handle external calls.
            $().replaceMe('method','param1','param2');
            $().replaceMe('action');
        */
        plugin.public = function (params) {
            var action = params[0];
            switch (true) {
                //call a public method of current plugin.
                //params values, except first value will be used as method parameters
                case typeof plugin[action] === 'function':
                    var args = Array.from(params);
                    args.shift();
                    plugin[action].apply(plugin, args);
                    break;
                //continue with you cases.
                default:
            }
        };
        plugin.init();
    };
// add the plugin to the jQuery.fn object
    $.fn.replaceMe = function (options) {
        var params = arguments;
        return this.each(function () {
            var $plugin = $(this).data('replaceMe');
            if (undefined === $plugin) {
                var plugin = new $.replaceMe(this, options);
                $(this).data('replaceMe', plugin).addClass('replaceMe');

            } else {
                $plugin.public(params);
            }
        });
    };

}(jQuery));