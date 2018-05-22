/**
 * Created by softiaweb on 17/01/2017.
 */
(function ($) {
    $.studTimePicker = function (element, options) {
        var plugin = this;
        var $element = $(element),
            element = element;

        //default options.
        var defaults = {
            locale: 'ro'
        };

        plugin.init = function () {
            plugin.settings = $.extend({}, defaults, options);

        };
        /*
            method that handle external calls.
            $().studTimePicker('method','param1','param2');
            $().studTimePicker('action');
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
    $.fn.studTimePicker = function (options) {
        var params = arguments;
        return this.each(function () {
            var $plugin = $(this).data('studTimePicker');
            if (undefined === $plugin) {
                var plugin = new $.studTimePicker(this, options);
                $(this).data('studTimePicker', plugin).addClass('studTimePicker');

            } else {
                $plugin.public(params);
            }
        });
    };

}(jQuery));