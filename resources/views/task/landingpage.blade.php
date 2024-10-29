<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Optional: if you have additional styles -->
</head>
<body class="font-sans bg-gray-900 text-white">

    <div class="bg-black sticky top-0 h-12">
        <div class="flex items-center justify-between px-10 h-full text-white">
            <h1 class="text-2xl text-green-500">Raihan Warmanda</h1>
            <div class="flex flex-grow justify-center">
                <ul class="flex space-x-8">
                    <li class="font-bold">Home</li>
                    <li>Movies</li>
                    <li>Series</li>
                    <li>Popular</li>
                    <li>Trends</li>
                </ul>
            </div>
            <div class="flex items-center space-x-4">
                <img class="w-8 h-8 rounded-full object-cover" src="profile.jpg" alt="Profile">
                <div class="flex items-center space-x-1">
                    <span>Profile</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="flex items-center w-10 h-5 bg-white rounded-full relative">
                    <i class="fas fa-moon text-goldenrod"></i>
                    <i class="fas fa-sun text-goldenrod"></i>
                    <div class="w-5 h-5 bg-black absolute right-0 rounded-full cursor-pointer transition-transform duration-1000"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 h-full w-12 bg-black flex flex-col items-center pt-14">
        <i class="left-menu-icon fas fa-search text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-home text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-users text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-bookmark text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-tv text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-hourglass-start text-white text-2xl mb-10"></i>
        <i class="left-menu-icon fas fa-shopping-cart text-white text-2xl mb-10"></i>
    </div>

    <div class="ml-12">
        <div class="relative h-96 bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
            <img class="w-48" src="f-t-1.png" alt="Featured Title">
            <p class="text-gray-400 my-6">Film fantastic yang banyak di tonton</p>
            <button class="bg-green-500 text-white py-2 px-4 rounded-lg font-bold">WATCH</button>
        </div>

        <div class="px-5">
            <h1 class="text-3xl">NEW RELEASES</h1>
            <div class="relative overflow-hidden">
                <div class="flex space-x-8">
                    <div class="relative">
                        <img class="w-64 h-48 rounded-lg transition-transform duration-1000 transform hover:scale-110" src="1.jpeg" alt="">
                        <span class="absolute top-2 left-3 text-lg bg-gray-800 p-2 rounded">Her</span>
                        <p class="absolute top-20 left-3 bg-gray-800 p-1 rounded">perang antara dua saudara memperebutkan harta</p>
                        <button class="absolute bottom-4 left-3 bg-green-500 text-white py-1 px-3 rounded">Watch</button>
                    </div>
                    <!-- Repeat for other movie items -->
                </div>