$(function () {

    var jElement = $('#header');

    $(window).scroll(function () {
        if ($(this).scrollTop() == 0) {
            jElement.css({
                'background-color': 'rgba(69,119,142,0.7)',
                'box-shadow': '',
            });
        } else {
            jElement.css({ 
                'background-color': '#244965',
                'box-shadow': 'black 0px 0px 5px 0px',
                'text-shadow': ''
            });
        }
    });
    $(window).ready(function () {
        if ($(this).scrollTop() == 0) {
            jElement.css({
                'background-color': 'rgba(69,119,142,0.7)',
                'box-shadow': '',
            });
        } else {
            jElement.css({ 
                'background-color': '#244965',
                'box-shadow': 'black 0px 0px 5px 0px',
                'text-shadow': ''
            });
        }
    });
});