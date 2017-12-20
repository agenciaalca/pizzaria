var feed = new Instafeed({
   
    get: 'user',
    userId: 1682189392,
    accessToken: '1682189392.1677ed0.071c60d51d63443987ae5d487e4967d7',
    template: '<div><img src="{{image}}" /></div>',
    target: 'instafeed',
    after: function () {
        $('#instafeed').slick({
            dots: false,
            infinite: true,
            slidesToShow: 10,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    }
});

feed.run();  

