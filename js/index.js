$('.skill-per').each(function() {
    var $this = $(this);
    var per = $this.attr('per');
    $this.css("width", per + '%');
    $({
        animatedValue: 0
    }).animate({
        animatedValue: per
    }, {
        duration: 1000,
        step: function() {
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        },
        complete: function() {
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        }
    });
});

const scrollUp = document.querySelector('.scrollUp');
window.addEventListener('scroll', () => {
    if (window.pageYoffset > 100) {
        scrollUp.classList.add("active");
    } else {
        scrollUp.classList.remove("active");
    }
});

jQuery(document).ready(function($) {
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });
});

$('#year').text(new Date().getFullYear());

$('.carousel').carousel({
    interval: 2500,
    pus: 'hover'
});