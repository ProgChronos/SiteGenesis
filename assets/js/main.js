(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 10,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:2
            },
            768:{
                items:4
            },
            992:{
                items:5
            }
        }
    });
    
})(jQuery);


window.sr = ScrollReveal({reset: true});

sr.reveal('.adao-eva',{duration:3000 , scale: 0.85 });
sr.reveal('.matuzalem',{duration:1000});

sr.reveal('.enoque',{duration:1000 });

sr.reveal('.noe',{duration:1000 });



const sections = document.querySelectorAll('section');
const div = document.querySelector('nav');

// Cria uma nova instância do Intersection Observer para cada seção
const observers = [];

sections.forEach((section, index) => {
  const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        nav.classList.add(`changed-section${index + 1}`);  // Adiciona a classe correspondente à seção atual
      } else {
        nav.classList.remove(`changed-section${index + 1}`);  // Remove a classe correspondente à seção atual
      }
    });
  });

  observer.observe(section);
  observers.push(observer);
});


// Indicador scrooll

const indicador = document.querySelector('#indicador');
const maxHeight = document.body.scrollHeight - window.innerHeight;

window.addEventListener('scroll',()=>{
    const percent = (window.scrollY / maxHeight) * 100;
    indicador.style.width = `${percent}%`;
})


// NAVBAR

const nav = document.getElementById('my-nav');
const toggleButton = document.getElementById('toggle-button');

toggleButton.addEventListener('click', function() {
  const isExpanded = toggleButton.getAttribute('aria-expanded');
  
  if (isExpanded === 'true') {
    nav.style.borderRadius = '90px'; // Define o novo valor do border-radius quando o menu está expandido
  } else {
    nav.style.borderRadius = '20px'; // Define o valor padrão do border-radius quando o menu não está expandido
  }
});