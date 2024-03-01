@include('component.header');
@include('component.message')

<div class="service-header header-res"></div>

<div class="about-page">
    <div class="about-page-content">
        <h2>Our Services</h2>
        <p>
            Apex Hotels and Resorts is committed to providing exceptional services that cater to the unique needs of
            every guest. From our eco-friendly and sustainable accommodations to our top-notch dining options and
            personalized wellness experiences, we strive to create an unforgettable experience for every visitor. Our
            friendly and knowledgeable staff is dedicated to making sure that every aspect of your stay is perfect, from
            check-in to check-out. Whether you're here for a romantic getaway, a family vacation, or a corporate
            retreat, we have the services and amenities you need to make your stay comfortable, enjoyable, and
            memorable. At Apex Hotels and Resorts, we are passionate about providing a world-class hospitality
            experience that exceeds your expectations and leaves you feeling refreshed, rejuvenated, and inspired.
        </p>
    </div>
    <div class="about-page-image" style="padding: 20px 0px;">
        <img src="{{ asset('frontend/images/servicep-1.png') }}" alt="">
    </div>
</div>
<div class="service-page">
    <div class="service-page-content">
        <h2>Our Facilities</h2>
        <p>
            At Apex Hotels and Resorts, we are committed to providing our guests with luxurious and comfortable
            facilities that blend seamlessly with the natural beauty of our surroundings. Our following facilities are
            designed to offer the perfect balance of modern amenities and sustainable living, ensuring that our guests
            have an unforgettable experience that is both indulgent and eco-friendly:
        </p>
        <ul>
            <li>Luxury and spacious Rooms</li>
            <li>Restaurant </li>
            <li>Complimentary Wifi</li>
            <li>Room Service</li>
            <li>Blanket and Electric Heater</li>
            <li>Running Hot water </li>
            <li>Transportation Services</li>
            <li>Trip activities and Excursions </li>
            <li>Translator and Local Guide</li>
            <li>Security and Logistics Checks </li>
            <li>Visa and Paperwork</li>
            <li>Plane Ticket </li>
            <li>Parking Space</li>
            <li>Playground for Kids</li>
            <li>Event management</li>
        </ul>
    </div>
    <div class="service-page-image">
        <img src="{{ asset('frontend/images/servicep-2.png') }}" alt="">
    </div>
</div>
<div class="service-tabs">
    <div class="tabs">
        <button-flex class="tab active" data-tab-target="#content1" id="air-link">
            <img src="{{ asset('frontend/images/airo.svg') }}" alt="">
            Aeroplane Ticket
        </button-flex>
        <button-flex class="tab" data-tab-target="#content2" id="car-link">
            <img src="{{ asset('frontend/images/car.svg') }}" alt="">
            Car Rental
        </button-flex>
        <button-flex class="tab" data-tab-target="#content3" id="tour-link">
            <img src="{{ asset('frontend/images/tour.svg') }}" alt="">
            Tour Guide
        </button-flex>
    </div>
    <div class="tabs-content-head">
        <div class="tab-content active" id="content1">
            <div class="content">
                <form action="">
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/location.svg') }}" alt="">
                            <input type="text" placeholder="Leaving From">
                            <img class="l-icon" src="{{ asset('frontend/images/search.svg') }}" alt="">
                        </div>
                        <div class="last">
                            <img class="s-icon" src="{{ asset('frontend/images/location.svg') }}" alt="">
                            <input type="text" placeholder="Leaving To">
                            <img class="l-icon" src="{{ asset('frontend/images/search.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/depa.svg') }}" alt="">
                            <input type="text" placeholder="Departure">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="first custom-select">
                            <img class="s-icon" src="{{ asset('frontend/images/class.svg') }}" alt="">
                            <select>
                                <option value="">class</option>
                                <option value="">Word</option>
                                <option value="">Hashtag</option>
                            </select>
                        </div>
                        <div class="last">
                            <img class="s-icon" src="{{ asset('frontend/images/seat.svg') }}" alt="">
                            <input type="text" placeholder="Seats">
                        </div>
                    </div>
                    <button class="mt-2">Proceed</button>
                </form>
                <img class="tab-image" src="{{ asset('frontend/images/airoplane.png') }}" alt="">
            </div>
        </div>
        <div class="tab-content" id="content2">
            <div class="content">
                <form action="">
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/location.svg') }}" alt="">
                            <input type="text" placeholder="Leaving From">
                            <img class="l-icon" src="{{ asset('frontend/images/search.svg') }}" alt="">
                        </div>
                        <div class="last">
                            <img class="s-icon" src="{{ asset('frontend/images/location.svg') }}" alt="">
                            <input type="text" placeholder="Leaving To">
                            <img class="l-icon" src="{{ asset('frontend/images/search.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/depa.svg') }}" alt="">
                            <input type="text" placeholder="Departure">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="last custom-select">
                            <img class="s-icon" src="{{ asset('frontend/images/car-f.svg') }}" alt="">
                            <select name="" id="">
                                <option value="Type of Car">Type of Car</option>
                                <option value="Type of Car">Type of Car</option>
                                <option value="Type of Car">Type of Car</option>
                                <option value="Type of Car">Type of Car</option>
                            </select>
                        </div>
                    </div>
                    <button class="mt-2">proceed</button>
                </form>
                <img class="tab-image2" src="{{ asset('frontend/images/car.png') }}" alt="">
            </div>
        </div>
        <div class="tab-content" id="content3">
            <div class="content">
                <form action="">
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/location.svg') }}" alt="">
                            <input type="text" placeholder="Leaving From">
                            <img class="l-icon" src="{{ asset('frontend/images/search.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="first">
                            <img class="s-icon" src="{{ asset('frontend/images/lang.svg') }}" alt="">
                            <input type="text" placeholder="Language Preference">
                        </div>
                    </div>
                    <div class="leaving">
                        <div class="first custom-select">
                            <img class="s-icon" src="{{ asset('frontend/images/seat.svg') }}" alt="">
                            <select name="" id="">
                                <option value="">Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                    </div>
                    <button class="mt-2">proceed</button>
                </form>
                <img class="tab-image1" src="{{ asset('frontend/images/tour.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<script>
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabTarget = this.dataset.tabTarget;
            const tabContent = document.querySelector(tabTarget);
            const activeTabs = document.querySelectorAll('.active');

            // Remove active class from all tabs
            activeTabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Add active class to current tab and tab content
            this.classList.add('active');
            tabContent.classList.add('active');
        });
    });

</script>
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
@include('component.footer');
