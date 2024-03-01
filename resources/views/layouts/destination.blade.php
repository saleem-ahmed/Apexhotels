@include('component.header')
@include('component.message')
<div class="desti-sect">
    <div class="dest-content">
        <h2>Le Yurt Hussaini</h2>
        <p>
            Hussani Valley in Gojal is a stunning location that is sure to attract travellers who appreciate natural
            beauty and adventure. Situated in the heart of the Karakoram Mountains, the valley boasts breathtaking views
            of towering peaks, vast glaciers, and lush meadows. Visitors to the Hussani Valley can enjoy a variety of
            outdoor activities, including trekking, mountaineering, and rock climbing. The valley is also home to a
            thrilling adventure activity called the Hussani Bridge, which is a high-wire rope bridge that crosses the
            Hussani River.
            <span class="dots">...</span>
            <span class="more">
                Guests can traverse the bridge while enjoying panoramic views of the valley and the surrounding
                mountains.
                Guests can combine the excitement of the Hussani Bridge with the beauty of the valley to create a truly
                unforgettable experience. Additionally and stargazing. Overall, the Hussani Valley in Gojal is a
                must-visit
                destination for anyone looking for an adventure in a truly breathtaking setting. By adding it to your
                resort's activity offerings, you can provide your guests with a unique and unforgettable experience that
                they will be sure to remember for a lifetime.
            </span>
        </p>
        <a class="myBtn" href="#">Read More</a>
    </div>
    <div class="dest-img">
        <img src="{{ asset('frontend/images/dest-img1.png') }}" alt="">
    </div>
</div>
<div class="dest-loc">
    <h2>Location</h2>
    <p>
        Hussaini Gojal
    </p>
</div>
{{-- image --}}
<img width="100%" src="{{ asset('frontend/images/map-img1.png') }}" alt="">
<div class="desti-sect">
    <div class="dest-img">
        <img src="{{ asset('frontend/images/dest-img2.png') }}" alt="">
    </div>
    <div class="dest-content">
        <h2>Le Yurt X Moksha Gulmit</h2>
        <p>
            Gulmit Valley is a picturesque location that is sure to attract travellers who appreciate natural beauty and
            cultural heritage. Located in the heart of the Hunza Valley in Northern Pakistan, the valley offers
            breathtaking views of the surrounding mountains, rivers, and glaciers. Visitors to Gulmit Valley can
            experience a variety of outdoor activities, including trekking, hiking, and mountaineering. The valley is
            also home to several cultural and historical sites, such as the Ondra Fort, a 900-year-old fortress
            that<span class="dots">...</span>
            <span class="more">
                provides a glimpse into the region's rich history. Adding Gulmit Valley to your resort's activity
                offerings
                is an excellent way to appeal to travellers looking for a unique and authentic experience.

                Guests can
                combine the beauty of the valley with the opportunity to explore its cultural and historical sites to
                create
                a truly unforgettable experience. Additionally, the valley provides an opportunity for guests to sample
                the
                local cuisine Overall, Gulmit Valley is a must-visit destination for anyone looking to experience the
                natural beauty and cultural heritage of Northern Pakistan. By adding it to your resort's activity
                offerings,
                you can provide your guests with a one-of-a-kind experience that they will be sure to remember for years
                to
                come.
            </span>
            <a class="myBtn" href="#">Read More</a>
        </p>
    </div>

</div>
<div class="dest-loc">
    <h2>Location</h2>
    <p>
        Moksha Gulmit Gojal
    </p>
</div>
{{-- image --}}
<img width="100%" src="{{ asset('frontend/images/map-img2.png') }}" alt="">
<div class="desti-sect">
    <div class="dest-content">
        <h2>Le Yurt Phander</h2>
        <p>
            Phander Valley is a scenic location that is sure to captivate the hearts of nature lovers and outdoor
            enthusiasts. Located in the heart of the Himalayan Mountains, Phander Valle Adding Phander Valley to your
            resort's activity offerings is an excellent way to attract adventure seekers and nature lovers. Guests can
            combine the excitement of the Phander activity with the beauty of the valley to create a truly memorable
            experience.
            <span class="dots">...</span>
            <span class="more"> Additionally, the valley provides an opportunity for guests to explore the surrounding
                natural
                beauty through activities such as hiking,
                bird-watching, and fishing. Overall, Phander Valley offers a
                unique and unforgettable adventure experience that your guests will be sure to remember for years to
                come.
            </span>
            <a class="myBtn" href="#">Read More</a>
        </p>

    </div>
    <div class="dest-img">
        <img src="{{ asset('frontend/images/dest-img3.png') }}" alt="">
    </div>
</div>
<div class="dest-loc">
    <h2>Location</h2>
    <p>
        Phander Valley Gupis Ghizer
    </p>
</div>
{{-- image --}}
<img width="100%" src="{{ asset('frontend/images/map-img3.png') }}" alt="">
<div class="desti-sect">
    <div class="dest-img">
        <img src="{{ asset('frontend/images/dest-img4.png') }}" alt="">
    </div>
    <div class="dest-content">
        <h2>Le Yurt Skardu</h2>
        <p>
            Skardu is a majestic destination nestled in the heart of the Karakoram mountain range in Gilgit-Baltistan,
            Pakistan. Its breathtaking natural beauty and unique landscape make it a must-visit place for adventure
            seekers and nature lovers alike. Skardu is surrounded by stunning peaks, including the world-famous K2, the
            second-highest mountain in the world. The town is situated at an altitude of 2,438 meters, and the
            <span class="dots">...</span>
            <span class="more">
                surrounding area boasts beautiful blue lakes, stunning glaciers, and vast plateaus. Visitors to Skardu can
                indulge in a variety of activities, including trekking, mountaineering, hiking, and fishing. The town also
                has several ancient forts and Buddhist relics that make it a cultural hub. The town is accessible by road
                and air, with daily flights connecting it to the major cities of Pakistan. The people of Skardu are
                welcoming and friendly, and their unique culture and traditions make it a fascinating place to visit. If you
                are looking for a unique and awe-inspiring destination, Skardu is the perfect place for you.
            </span>
            <a href="#" class="myBtn">Read More</a>
        </p>
    </div>

</div>
<div class="dest-loc">
    <h2>Location</h2>
    <p>
        Gamba Skardu
    </p>
</div>
{{-- image --}}
<img width="100%" src="{{ asset('frontend/images/map-img4.png') }}" alt="">

<script>
    const buttons = document.querySelectorAll('.myBtn');

    buttons.forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const dots = button.parentNode.querySelector('.dots');
            const moreText = button.parentNode.querySelector('.more');

            if (dots.style.display === 'none') {
                dots.style.display = 'inline';
                button.innerHTML = 'Read more';
                moreText.style.display = 'none';
                moreText.style.transition = 'height 0.7s ease-in'; // add transition effect
                moreText.style.maxHeight = '0';
            } else {
                dots.style.display = 'none';
                button.innerHTML = 'Read less';
                moreText.style.display = 'inline';
                moreText.style.transition = 'height 0.7s ease-in'; // add transition effect
                moreText.style.maxHeight = '1000px';
            }
        });
    });
</script>
@include('component.footer')
