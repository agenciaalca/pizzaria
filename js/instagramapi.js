var feed = new Instafeed({
   
    get: 'user',
    userId: 322548972,
    accessToken: '322548972.1677ed0.6c838619fa454449ac3b0acb3df8314e',
    template: '<div><img src="{{image}}" /></div>',
    target: 'instafeed',
    after: function () {
        $('#instafeed').slick({
            dots: true,
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
                        infinite: true,
                        dots: true
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

