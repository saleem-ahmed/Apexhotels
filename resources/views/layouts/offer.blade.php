@include('component.header')
@include('component.message')
<div class="offers">
    <div class="offer">
        <div class="inner-offer">
            <span>Offer 1</span>
            <span>Stay More Save More</span>
        </div>
        <div class="offer-text">
            <span>Stay More Save More</span>
            <p>Stay for 7 nights could receive a 20% discount on your room rate.</p>
        </div>
        <div class="offer-img">
            <img width="100%" src="{{ asset('frontend/images/offer-img1.png') }}" alt="">
        </div>
    </div>
</div>
<div class="offers">
    <div class="offer">
        <div class="offer-img">
            <img width="100%" src="{{ asset('frontend/images/offer-img2.png') }}" alt="">
        </div>
        <div class="offer-text">
            <span>Family Package</span>
            <p>10% off on the Booking of a minimum of 3 rooms</p>
        </div>
        <div class="inner-offer">
            <span>Offer 2</span>
            <span>Family Package</span>
        </div>
    </div>
</div>
<div class="offers">
    <div class="offer">
        <div class="inner-offer">
            <span>Offer 3</span>
            <span>Off-Season Specials</span>
        </div>
        <div class="offer-text">
            <span>Off-Season Specials</span>
            <p>25 to 20% discount in winters</p>
        </div>
        <div class="offer-img">
            <img width="100%" src="{{ asset('frontend/images/offer-img3.png') }}" alt="">
        </div>
    </div>
</div>
<div class="offers">
    <div class="offer">
        <div class="offer-img">
            <img width="100%" src="{{ asset('frontend/images/offer-img4.png') }}" alt="">
            <img width="100%" src="{{ asset('frontend/images/offer-img5.png') }}" alt="">
        </div>
        <div class="offer-text">
            <span>Adventure Package</span>
            <h3>At Hussaini, Hunza</h3>
            <ul>
                <li>Free visit to Famous,</li>
                <li>Hussaini Bridge,</li>
                <li>Free ride to Borit Lake,</li>
                <li>Free ride to Attabad Lake and Free trek to Passu Glacier viewpoint</li>
            </ul>
            <h3>At Skardu Resort</h3>
            <ul>
                <li>Free Ride to Shangrila Resort, </li>
                <li>Free ride to the Skardu Cold desert,</li>
            </ul>
            <h3>At Phandar</h3>
            <ul>
                <li>Free visit to Phandar lake,</li>
                <li>Trout fishing and Free Guide</li>
            </ul>
        </div>
        <div class="inner-offer">
            <span>Offer 4</span>
            <span>Adventure Package</span>
        </div>
    </div>
</div>

@include('component.footer')
