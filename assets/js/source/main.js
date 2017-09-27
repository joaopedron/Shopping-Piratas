(function($) {

    // header main menu underline
    $('.menu').find('a').append('<span></span>');
    // # header main menu underline

    // Mega-menu hover effect
    $('.menu-right').find('a').append('<span></span>');
    // # Mega-menu hover effect

    // Mega-menu hover effect
    $('.menu-left').find('a').append('<span></span>');
    // # Mega-menu hover effect

    // search-bar active effect
    $('.site-menu').find('i').on('click', function(){
            $(this).closest('form').toggleClass('search-active');
        });
    // # search-bar active effect

     $('.owl-home').owlCarousel({
        stagePadding: 0,
        items: 1,
        loop: true,
        margin:0,
        singleItem:true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        nav:true,
        pagination: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"]
    });


    $('.owl-store').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            768: {
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });

    $('.owl-movie').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 4
            }
        }
    });

    $('.owl-single-lojas').owlCarousel({
        loop: true,
        margin: 30,
        pagination: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 1
            },
            1000:{
                items: 1
            }
        }
    });







    var feed = new Instafeed({
            get: 'user',
            userId: 3291966634,
            accessToken: '3291966634.5ef4477.33502edb6fb24c658655d72208478db3',
            target: 'instagram',
            resolution: 'standard_resolution',
            limit: 6,
            after: function() {
                var el = document.getElementById('instagram');
                if (el.classList)
                    el.classList.add('show');
                else
                    el.className += ' ' + 'show';
            }
    });

    window.onload = function() {
        feed.run();
        var _gauges = _gauges || [];
        (function() {
            var t   = document.createElement('script');
            t.type  = 'text/javascript';
            t.async = true;
            t.id    = 'gauges-tracker';
            t.setAttribute('data-site-id', '4404bf0665e1422f97495bc1ca2fda15');
            t.src = '//secure.gaug.es/track.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(t, s);
        })();
    };

    (function(d) {
        var config = {
          kitId: 'nbu0boe',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);


})(jQuery);

// 1538602526.c6e7c17.0b51dbebc4dd41528baca6958e539204 acess-token
// 4404bf0665e1422f97495bc1ca2fda15 ?code=
