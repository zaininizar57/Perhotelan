<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom-css.css">
    <link rel="stylesheet" href="assets\mdi\css\materialdesignicons.min.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <title>Perhotelan</title>
</head>

<body>
    <section class="relative mx-auto">
        <nav class="flex justify-between bg-gray-900 text-white w-full relative">
            <div class="px-5 xl:px-12 py-4 flex w-full items-center">
                <a class="text-3xl font-bold font-heading flex" href="#">
                    <img width="40" src="<?= $base_url . 'assets/images/icon/hotel-icon.png' ?>" alt="">
                    <span>Hotel</span>
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-2">
                    <li><a class="hover:text-gray-200 hover:bg-gray-800 py-3 px-4 rounded shadow-inherit"
                            href="#">Home</a></li>
                    <li><a class="hover:text-gray-200 hover:bg-gray-800 py-3 px-4 rounded shadow-inherit"
                            href="#">About</a></li>
                    <li><a class="hover:text-gray-200 hover:bg-gray-800 py-3 px-4 rounded shadow-inherit"
                            href="#">Hotels</a></li>
                    <li><a class="hover:text-gray-200 hover:bg-gray-800 py-3 px-4 rounded shadow-inherit"
                            href="#">Contact Us</a>
                    </li>
                </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex xl:items-center space-x-5 xl:items-center">
                    <a href="<?= $base_url . 'register' ?>"
                        class="px-6 py-2 bg-white text-black font-bold hover:bg-gray-200 rounded shadow" href="#">
                        Register
                    </a>
                    <a href="<?= $base_url . 'login' ?>"
                        class="px-6 py-2 bg-white text-black font-bold hover:bg-gray-200 rounded shadow" href="#">
                        Login
                    </a>
                </div>
            </div>
            <div class="text-white self-center xl:hidden text-4xl px-4 cursor-pointer" id="burger-mobile-nav-auth">
                <span class="mdi mdi-account-circle"></span>
            </div>
            <a class="navbar-burger self-center mr-5 md:hidden cursor-pointer" id="burger-button">
                <svg id="burger" xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 hover:text-gray-200 transition-transform" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="mdi mdi-close text-2xl hidden transition-transform" id="close"></span>
            </a>
            <div class="hidden px-4 font-semibold font-heading space-y-4 py-8 transition-transform flex-col items-start top-16 w-full bg-gray-700 absolute"
                id="mobile-nav">
                <a href="#" class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inherit">
                    Home
                </a>
                <a href="#" class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inherit">
                    About
                </a>
                <a href="#" class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inherit">
                    Hotels
                </a>
                <a href="#" class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inherit">
                    Contact
                </a>
            </div>
            <div class="hidden px-4 font-semibold font-heading space-y-4 py-8 transition-transform flex-col items-start top-16 w-full bg-gray-700 absolute"
                id="mobile-nav-auth">
                <a href="#" class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inheritl">
                    Register
                </a>
                <a href="<?= $base_url . 'login' ?>"
                    class="hover:text-gray-200 w-full hover:bg-gray-800 py-3 px-4 rounded shadow-inherit">
                    Login
                </a>
            </div>
        </nav>
    </section>
    <!-- Does this resource worth a follow? -->
    <div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank"
                class="flex text-center bg-indigo-400 hover:bg-indigo-500 text-white text-2xl px-6 p-4 rounded-full transition-all shadow-xl hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <span class="mdi mdi-chat"></span>
            </a>
        </div>
    </div>