<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?= $base_url . 'assets/css/custom-css.css' ?>">
    <link rel="stylesheet" href="<?= $base_url . 'assets\mdi\css\materialdesignicons.min.css' ?>">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Perhotelan</title>
</head>

<body class="bg-white">
    <header>
        <nav class="p-6">
            <div class="flex justify-between items-center">
                <img width="40" class="mr-4" src="<?= $base_url . 'assets/images/icon/hotel-icon.png' ?>" alt=""
                    style="filter: invert(20);">
                <h1 class="pr-6 border-r-2 text-2xl font-bold text-gray-500">
                    Hotel
                </h1>
                <div class="flex justify-between flex-grow">
                    <div class="flex ml-6 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4 cursor-pointer text-gray-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input class="outline-none text-sm flex-grow bg-gray-100" type="text"
                            placeholder="Search saunas in Finland…" />
                    </div>
                    <div class="md:flex space-x-6 hidden">
                        <form action="logout" method="POST">
                            <button type="submit" name="logout"
                                class="text-gray-500 text-md bg-white rounded border px-4 py-2 hover:shadow hover:bg-gray-200">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Section Hero -->
        <div class="container mx-auto bg-gray-400 h-96 rounded-md flex items-center"
            style="background-image: url('https://source.unsplash.com/random'); background-position: center; background-size: cover;">
            <div class="sm:ml-20 text-gray-50 text-center sm:text-left">
                <h1 class="text-5xl font-bold mb-4">
                    Hotel terbaik <br />
                    recomendasi kami.
                </h1>
                <p class="text-lg inline-block sm:block">The largest online community to rent saunas in Finland.</p>
                <button class="mt-8 px-4 py-2 bg-gray-600 rounded">Cari Hotel</button>
            </div>
        </div>
    </header>