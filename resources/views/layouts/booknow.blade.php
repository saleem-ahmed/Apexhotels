@include('component.header')
@include('component.message')
<div class="book-header header-res"></div>
<div class="book-span">
    <span>Available rooms at Hunza Resort</span>
</div>
<div class="books-cards">
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img1.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}" alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}" alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
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
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img2.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Email">

                                </div>
                                <div class="last">
                                    <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Phone">

                                </div>
                            </div>
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img3.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Email">

                                </div>
                                <div class="last">
                                    <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Phone">

                                </div>
                            </div>
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img1.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Email">

                                </div>
                                <div class="last">
                                    <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Phone">

                                </div>
                            </div>
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img2.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Email">

                                </div>
                                <div class="last">
                                    <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Phone">

                                </div>
                            </div>
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="book-card">
        <img src="{{ asset('frontend/images/book-img3.png') }}" alt="">
        <div class="card-content">
            <div class="rating">
                <span>Deluxe Room</span>
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
                <img src="{{ asset('frontend/images/rating.svg') }}" alt="">
            </div>
            <div class="list">
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Breakfast
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    TV
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free Wifi
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Free toiletries
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    AC
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Room Service 24-hours
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Telephone
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Kids Play area
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Window
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Refrigerator
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Pet friendly
                </li>
                <li>
                    <img src="{{ asset('frontend/images/bullet.svg') }}" alt="">
                    Wardrobe
                </li>
            </div>
            <div class="price">
                <div style="display:flex;gap:16px">
                    <p>PKR 13000</p>
                </div>
                <button id="myBtn">Book Now</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">

                        <img class="close" src="{{ asset('frontend/images/close.svg') }}" alt="">
                        <form action="">
                            <label for="">Full Name</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/name.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <label for="">Contact Info</label>
                            <div class="leaving">
                                <div class="first">
                                    <img class="s-icon" src="{{ asset('frontend/images/mail2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Email">

                                </div>
                                <div class="last">
                                    <img class="s-icon" src="{{ asset('frontend/images/phone2.svg') }}"
                                        alt="">
                                    <input type="text" placeholder="Phone">

                                </div>
                            </div>
                            <label for="">Destination</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Hunza</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">
                                    <input type="date" placeholder="Subject">
                                </div>
                            </div>
                            <label for="">Details</label>
                            <div class="leaving">
                                <div class="last">
                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">Word</option>
                                        <option value="">Hashtag</option>
                                    </select>
                                </div>
                                <div class="first">

                                    <select>
                                        <option value="">Rooms</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <BUtton>Book now</BUtton>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<script>

    var modal = document.querySelector('.modal');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    span.onclick = () => {
        modal.style.display = "none";
    }
    var buttons = document.querySelectorAll('#myBtn');
    buttons.forEach(function(button) {
        button.addEventListener('click', () => {
            modal.style.display = "block";
        });
    });
</script>
@include('component.footer')
