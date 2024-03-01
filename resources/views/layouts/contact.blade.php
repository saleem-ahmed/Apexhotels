@include('component.header');
@include('component.message')
<div class="conatct">

    <form action="">
        <h2>We are here to help you</h2>
        <div class="leaving">
            <div class="first">
                <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}" alt="">
                <input type="text" placeholder="Name">
            </div>
        </div>
        <div class="leaving">
            <div class="first">
                <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}" alt="">
                <input type="text" placeholder="Email">

            </div>
            <div class="last">
                <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}" alt="">
                <input type="text" placeholder="Phone">

            </div>
        </div>
        <div class="leaving">
            <div class="first">
                <img class="s-icon" src="{{ asset('frontend/images/subject.svg') }}" alt="">
                <input type="text" placeholder="Subject">
            </div>
        </div>
        <div class="leaving">
            <div class="first">
                <img class="s-icon" src="{{ asset('frontend/images/message.svg') }}" alt="">
                <input type="text" placeholder="Message">
            </div>
        </div>
        <BUtton>Send Message</BUtton>
    </form>
    <img class="contact-img" src="{{ asset('frontend/images/contct-img.png') }}" alt="">
</div>

@include('component.footer');
