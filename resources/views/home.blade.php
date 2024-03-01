<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="shortcut icon" href="{{ asset('frontend/fav-icon.svg') }}" type="image/x-icon">
    <!-- Demo styles -->
</head>

<body>

    @include('component.header')
    <!-- Swiper -->
    <div class="swiper mySwiper1 swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiperslide1">
                <h2>Regeneration | Wellness | Experience </h2>
            </div>
            <div class="swiper-slide swiperslide1">
                <h2>Regeneration | Wellness | Experience </h2>
            </div>
            <div class="swiper-slide swiperslide1">
                <h2>Regeneration | Wellness | Experience </h2>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    {{-- about section starts here --}}
    <div class="about-sect">
        <div class="about-sect-content">
            <div class="inner-content">
                <span>Welcome</span>
                <h2>Apex Hotels and Resorts</h2>
                <p>
                    Experience the beauty and tranquillity of Gilgit-Baltistan with Apex Hotels and Resorts. We offer
                    luxurious, eco-friendly accommodations in four unique locations across the region, each designed to
                    immerse visitors in the rich cultural heritage of the ancient Silk Route.
                </p>
                <button>
                    Read More
                </button>
            </div>
            <div class="inner-img">
                <img src="{{ asset('frontend/images/about-sect-img1.png') }}" alt="about-sect-img" />
                <img src="{{ asset('frontend/images/about-sect-img2.png') }}" alt="about-sect-img" />
                <img src="{{ asset('frontend/images/about-sect-img3.png') }}" alt="about-sect-img" />
            </div>
        </div>
        <div class="about-sect-image">
            <img src="{{ asset('frontend/images/about-sect-img.png') }}" alt="about-sect-img" />
        </div>
    </div>
    {{-- about section ends here --}}
    {{-- services starts here --}}
    <div class="service-sect">
        <div class="service-title">
            <h2>Services And Facilities</h2>
        </div>

        {{-- servives 1 --}}
        <div class="service-card">
            <img src="{{ asset('frontend/images/service-img1.png') }}" alt="">
            <div class="inner-content">
                <h3>ACCOMMODATION</h3>
                <p>At Apex Hotels and Resorts, we are committed to providing our guests with luxurious and comfortable
                    facilities that blend seamlessly with the natural beauty of our surroundings. Our facilities are
                    designed to offer the perfect balance of modern amenities and sustainable living.</p>
                <button>Read More</button>
            </div>
        </div>
        {{-- servives 2 --}}
        <div class="service-card reserve">
            <img src="{{ asset('frontend/images/service-img2.png') }}" alt="">
            <div class="inner-content">
                <h3>Dinning</h3>
                <p>We offer a range of dining options to cater to every palate, from traditional local cuisine to
                    international delicacies. Our talented chefs use only the freshest and locally sourced ingredients
                    to create unforgettable culinary experiences. Whether you want to dine indoors or outdoors with
                    stunning views.
                </p>
                <button>Read More</button>
            </div>
        </div>
        {{-- services 3 --}}
        <div class="service-card">
            <img src="{{ asset('frontend/images/service-img3.png') }}" alt="">
            <div class="inner-content">
                <h3>Facilities</h3>
                <p>Whether you're staying at our flagship Le Yurt locations or any of our other resorts, you can expect
                    to enjoy premium features such as comfortable bedding, elegant furniture, and culture. Our resorts
                    also boast a range of dining options, including locally sourced ingredients and traditional cuisine.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>
    {{-- services endss here --}}
    {{-- location starts here --}}
    <div class="locations">
        <div class="loc-title">
            <h2>Apex Hotel Locations</h2>
            <span>Unlock new memories with us</span>
        </div>
        <div class="loc-content">
            <div class="images-location1">
                <img src="{{ asset('frontend/images/loc-img1.png') }}" alt="">
            </div>
            <div class="images-location2">
                <div style="display:flex; justify-content:space-between;">
                    <img width="49%" src="{{ asset('frontend/images/loc-img2.png') }}" alt="">
                    <img width="49%" src="{{ asset('frontend/images/loc-img3.png') }}" alt="">
                </div>
                <img width="100%" src="{{ asset('frontend/images/loc-img4.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- location ends here --}}
    {{-- room section starts here --}}
    <div class="rooms">
        <div class="rooms-title">
            <h2>Rooms and Suites</h2>
            <p>
                Our rooms are a true testament to our commitment to sustainability and the environment, with every
                detail carefully crafted to provide an experience like no other. From the moment you step into your
                room, you will be greeted by the warmth of natural light and the serene beauty of the surrounding
                landscapes. Our rooms are designed with a perfect blend of traditional and modern architecture, with
                every piece of furniture and decor carefully selected to enhance your experience.
            </p>
        </div>
        <div class="room-image">
            <div class="images">
                <img src="{{ asset('frontend/images/room-img1.png') }}" alt="">
                <img src="{{ asset('frontend/images/room-img2.png') }}" alt="">
                <img src="{{ asset('frontend/images/room-img3.png') }}" alt="">
            </div>
            <button>View More</button>
        </div>
    </div>
    {{-- room section ends here --}}

    {{-- testimonials starts here --}}
    <div class="testimonails">
        <div class="testimonails-title">
            <h2>Testimonials</h2>
            <h3>What They Say</h3>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper2 swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide2">
                    <div class="testimonail-content">
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img1.png') }}" alt="">
                        </div>
                        <div class="inner-content">
                            <p>
                                <img class="quote" src="{{ asset('frontend/images/quote.svg') }}" alt="">
                                During my recent stay at this hotel, I was blown away by the exceptional service. The staff made me feel welcome and comfortable from the moment I arrived.
                            </p>
                            <div class="rating">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('frontend/images/test-img3.png') }}" alt="">
                                <div class="client-name">
                                    <h4>Alex John</h4>
                                    <span>Austira</span>
                                </div>
                            </div>
                        </div>
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide2">
                    <div class="testimonail-content">
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img1.png') }}" alt="">
                        </div>
                        <div class="inner-content">
                            <p>
                                <img class="quote" src="{{ asset('frontend/images/quote.svg') }}" alt="">
                                During my recent stay at this hotel, I was blown away by the exceptional service. The staff made me feel welcome and comfortable from the moment I arrived.
                            </p>
                            <div class="rating">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('frontend/images/test-img3.png') }}" alt="">
                                <div class="client-name">
                                    <h4>Faizan karim</h4>
                                    <span>Islamabad</span>
                                </div>
                            </div>
                        </div>
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide2">
                    <div class="testimonail-content">
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img1.png') }}" alt="">
                        </div>
                        <div class="inner-content">
                            <p>
                                <img class="quote" src="{{ asset('frontend/images/quote.svg') }}" alt="">
                                During my recent stay at this hotel, I was blown away by the exceptional service. The staff made me feel welcome and comfortable from the moment I arrived.
                            </p>
                            <div class="rating">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                                <img src="{{ asset('frontend/images/Star.svg') }}" alt="">
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('frontend/images/test-img3.png') }}" alt="">
                                <div class="client-name">
                                    <h4>Shazia Hyder</h4>
                                    <span>Karachi</span>
                                </div>
                            </div>
                        </div>
                        <div class="inner-images">
                            <img src="{{ asset('frontend/images/test-img2.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </div>
    {{-- testimonials ends here --}}

    @include('component.message')
    @include('component.footer')


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
        var swiper1 = new Swiper(".mySwiper1", {
            grabCursor: true,
            // speed: 500,
            effect: "fade",
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        // swiper 1
        var swiper2 = new Swiper(".mySwiper2", {
            direction: "vertical",
            // grabCursor: true,
            // effect: "creative",
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 3500,
            //     disableOnInteraction: false,
            // },
            // creativeEffect: {
            //     prev: {
            //         shadow: true,
            //         translate: [0, 0, -400],
            //     },
            //     next: {
            //         translate: ["100%", 0, 0],
            //     },
            // },

        });
    </script>
