<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex hotels & Resorts</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/fav-icon.svg') }}" type="image/x-icon">

</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
            <a href="">
                <img src="{{ asset('frontend/images/logo.svg') }}" alt="logo">
            </a>
        </div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">

                <li>
                    <a href="/" class="{{ request()->is('/') ? 'active-nav' : '' }}">Home</a>
                </li>
                <li>
                    <a href="/about" class="{{ request()->is('about') ? 'active-nav' : '' }}">About Us</a>
                </li>
                <li>
                    <a href="/service" class="{{ request()->is('service') ? 'active-nav' : '' }}">Services</a>
                </li>
                <li>
                    <a href="/rooms" class="{{ request()->is('rooms') ? 'active-nav' : '' }}">Rooms</a>
                </li>
                <li>
                    <a href="/destination"
                        class="{{ request()->is('destination') ? 'active-nav' : '' }}">Destinations</a>
                </li>
                <li>
                    <a href="/offer" class="{{ request()->is('offer') ? 'active-nav' : '' }}">Offers</a>
                </li>
                <li class="dropdown">
                    <a href="/blog" class="{{ request()->is('blog') ? 'active-nav' : '' }}">
                        Blogs
                        <ul class="dropdown-block">
                            <li>
                                <a href="/awareness">
                                    Awareness
                                </a>
                            </li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="/contact" class="{{ request()->is('contact') ? 'active-nav' : '' }}">Contact Us</a>
                </li>
                <button id="showCheck">
                    Check Availability
                    <i class="uil uil-angle-down"></i>
                </button>
                <div class="Check">
                    <div class="checks">
                        <img src="{{ asset('frontend/images/check.svg') }}" alt="">
                    <div class="check-in">
                        <label for="">Check In</label>
                        <input type="date">
                    </div>
                    <div class="check-in">
                        <label for="">Check Out</label>
                        <input type="date">
                    </div>
                    <div class="check-in">
                        <label for="">Destination</label>
                        <select name="" id="">
                            <option value="">Hunza</option>
                            <option value="">Phunder</option>
                        </select>
                    </div>
                    <div class="check-in">
                        <label for="">Rooms</label>
                        <select class="custom-select">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="check-in">
                        <label for="">Adults</label>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="check-in">
                        <label for="">Children</label>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <button>
                        <a href="/book">Check Now</a>
                    </button>
                    </div>
                </div>
            </div>
        </ul>
    </nav>

    <script>
        let showCheck = document.getElementById("showCheck");
        let Check = document.querySelector(".Check");
        let ShowDropdown = () => {
            if (Check.style.display == "none") {
                Check.style.display = "block"
            } else {
                Check.style.display = "none"
            }
        }
        showCheck.addEventListener("click", (e) => {
            e.stopPropagation();
            ShowDropdown()
        });
        // window.addEventListener("click", (e) => {
        //     e.stopPropagation();
        //     Check.style.display = "none";
        // });
    </script>
