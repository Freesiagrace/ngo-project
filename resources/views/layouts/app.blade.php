<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Review App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-900 text-white">

<nav class="bg-gray-900 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-2xl font-bold" href="{{ url('/') }}">NGO</a>
        <div class="hidden md:flex space-x-10 ml-16">
            <a href="{{ url('/') }}" class="hover:text-gray-400">Home</a>
            <a href="{{ route('about') }}" class="hover:text-gray-400">About Us</a>
            <a href="#" class="hover:text-gray-400">Contact</a>
            <a href="#" class="hover:text-gray-400">Blogs</a>
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('donate') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded h-9 w-24 text-center">Donate</a>
            <a href="{{ route('sponsor') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-4 py-2 rounded h-9 w-24 text-center">Sponsor</a>
        </div>
    </div>
</nav>

<div class="container mx-auto p-2">
    @yield('content')
</div>

<footer class="bg-gray-900 text-gray-300 py-6">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            <h1 class="text-lg font-bold text-pink-300">ShareForCare</h1>
            <p class="text-sm">Bringing communities together to help those in need.</p>
        </div>

        <div class="flex space-x-4">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-500" aria-label="Facebook">
                <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400" aria-label="Twitter">
                <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-pink-500" aria-label="Instagram">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-700" aria-label="LinkedIn">
                <i class="fab fa-linkedin fa-lg"></i>
            </a>
        </div>
    </div>
    <hr class="my-4 border-gray-700" />
    <div class="text-center text-sm">
        <p>&copy; <span id="year"></span> ShareForCare. All rights reserved.</p>
        <p>Made with ❤️ by ShareForCare Team</p>
    </div>
</footer>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
</body>
</html>
