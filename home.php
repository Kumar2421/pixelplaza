<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixelplaza || All the assets you need, in one place</title>
    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    /* WebKit-based browsers */
::-webkit-scrollbar {
    width: 12px; /* Set the width of the scrollbar */
}

/* Track of the scrollbar */
::-webkit-scrollbar-track {
    background: #f1f1f1; /* Default track color */
}

/* Handle of the scrollbar */
::-webkit-scrollbar-thumb {
    background-color: #007bff; /* Blue color for the scrollbar handle */
    border-radius: 10px; /* Rounded edges for the handle */
    border: 3px solid #f1f1f1; /* Optional border for the thumb */
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

</style>
<body class="bg-gray-100">
    <!-- ========= NAV BAR & SLIDESHOW ========= -->
    <div class="relative bg-cover bg-center  h-[64vh] md:h-[]  lg:h-[70vh] transition-all duration-1000 ease-in-out" id="slideshow" >
        <nav class="absolute z-10 inset-x-0 top-0 p-4 bg-black bg-opacity-60 md:bg-transparent md:bg-opacity-0 flex items-center justify-between flex-wrap">

            <div class="block md:hidden">
                <button id="menu-toggle" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <div id="menu" class="w-full md:flex md:items-center md:w-auto hidden md:block">
                <ul class="flex flex-col md:flex-row md:space-x-6 space-y-4 md:space-y-0">
                    <li> <!-- Logo and Nav Links -->
                        <p class="flex items-center flex-shrink-0 -mt-2 text-white"><span class="text-3xl font-bold text-blue-500">pixalplaza</span></p>
                    </li>
                    <li><a href="#" class="text-white hover:text-gray-300 font-bold">Vectors</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300 font-bold">Photos</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300 font-bold">PSD</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300 font-bold">3D</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300 font-bold">Fonts</a></li>
                    <li class="relative group">
                        <button class="text-white hover:text-gray-300 font-bold flex items-center">
                            Categories
                            <!-- Arrow Element -->
                            <svg class="ml-2 w-4 h-4 text-white group-hover:text-gray-300 transition-transform duration-300 ease-in-out transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <ul class="absolute hidden group-hover:block bg-black text-gray-400 mt-1 rounded-lg w-48 p-4 transition-opacity duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                            <li><a href="#" class="block px-4 py-2 hover:text-white font-bold">Backgrounds</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:text-white font-bold">Illustrations</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:text-white font-bold">Cartoons</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:text-white font-bold text-nowrap">Business Cards</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="flex mt-4 md:mt-0 space-x-4">
                <a href="logout.php" class="text-white px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition-colors">Log out</a>
                <a href="login.html" class="text-white px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition-colors">Sign up</a>
            </div>
        </nav>

        <!-- ========= HEADER SECTION ========= -->
        <div class="flex flex-col flex-row items-center justify-center text-center text-white py-16 py-32 px-4">
            <div class="md:w-4/5">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">All the assets you need, in one place</h1>
                <p class="text-lg md:text-xl mb-6">Find and download the best high-quality photos, designs, and mockups</p>
                <div class="mt-6 flex justify-center space-x-1 relative">
                    <div class="relative w-3/5">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                        </span>
                        <input type="text" placeholder="Search all resources" class="border rounded py-2 pl-10 pr-4 bg-white text-black w-full focus:ring-transparent focus:outline-none">                    </div>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded"><i class="fa fa-search"></i>Search</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Script for mobile menu toggle -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>





    <!-- ========= JAVASCRIPT FOR SLIDESHOW ========= -->
    <script>
        const images = [
            'imgs/view-mountain-with-dreamy-aesthetic.jpg',
            'imgs/view-rock-formations-with-nature-landscape.jpg',
            'imgs/cloud-forest-landscape.jpg',
            'imgs/indian-city-scene (1).jpg',
            'imgs/th.jpeg',
            'imgs/2151823119.jpg',
            'imgs/2149063332.jpg'
        ];
        let currentIndex = 0;

        function changeBackground() {
            const slideshow = document.getElementById('slideshow');
            slideshow.style.backgroundImage = `url('${images[currentIndex]}')`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        changeBackground();
        setInterval(changeBackground, 1000);
    </script>


    <!-- ========= EXPLORE TRENDING ========= -->
    <div class="text-center py-10">
        <strong class="text-3xl text-blue-500">Explore </strong>
        <span class="text-3xl text-gray-700">trending categories</span>
        <p class="text-gray-500 mt-3">Check what’s popular and make your project trendy.</p>
    </div>

    <div class="container mx-auto px-5 pb-5 img-grid-light-bg">
        <!-- First Row -->
        <div class="grid grid-cols-2 gap-5 mx-5">
            <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <img src="imgs/christmas-background.png" alt="Christmas Background" class="w-full rounded-2xl">
                <div class="absolute bottom-0 left-0 text-white p-2  font-bold"></div>
            </div>
            <div class="grid-row-2">
                <div class="grid grid-cols-2 gap-5">
                    <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img src="imgs/back.jpg" alt="Selfies" class="w-full rounded-2xl">
                        <div class="absolute bottom-0 left-0 text-white p-2  font-bold"></div>
                    </div>
                    <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img src="imgs/football.png" alt="Football" class="w-full rounded-2xl">
                        <div class="absolute bottom-0 left-0 text-white p-2  font-bold"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out my-2">
                        <img src="imgs/beautiful-butterfly-front-view-flower-closeup-insect-beautiful-butterfly-stay-flower (1).jpg" alt="Selfies" class="w-full rounded-2xl ">
                        <div class="absolute bottom-0 left-0 text-white p-2  font-bold"></div>
                    </div>
                    <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out my-2">
                        <img src="imgs/2151474142 (1).jpg" alt="Football" class="w-full rounded-2xl">
                        <div class="absolute bottom-0 left-0 text-white p-2  font-bold"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Row -->
        <div class="grid  grid-cols-4 gap-5 mt-5 mx-5">
            <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <img src="imgs/world-cup.png" alt="World Cup 2022" class="w-full rounded-2xl">
                <div class="absolute bottom-0 left-0 text-white p-2  font-bold">  </div>
            </div>
            <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <img src="imgs/winter-background.png" alt="Winter Background" class="w-full rounded-2xl">
                <div class="absolute bottom-0 left-0 text-white p-2  font-bold"> </div>
            </div>
            <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <img src="imgs/xmas.png" alt="Christmas 2022" class="w-full rounded-2xl">
                <div class="absolute bottom-0 left-0 text-white p-2  font-bold"> </div>
            </div>
            <div class="relative transform hover:scale-105 transition-transform duration-300 ease-in-out">
                <img src="imgs/ui-mockups.png" alt="UI Mockups" class="w-full rounded-2xl">
                <div class="absolute bottom-0 left-0 text-white p-2  font-bold"> </div>
            </div>
        </div>
    </div>



    <!-- ========= UNLOCK YOUR INNER CREATOR ========= -->
    <div class="py-16 bg-gray-100">
        <div class="text-center">
            <p class="text-3xl font-semibold text-gray-800">Unlock Your Inner Creator</p>
            <p class="text-gray-500 mt-4">Get inspiration with curated collections to boost your project’s engagement.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 justify-center mt-10">
            <div class="relative group">
                <img src="imgs/breakfast.png" alt="Breakfast" class="rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105">
                <div class="absolute bottom-2 left-5 text-white font-bold p-4 rounded">Breakfast</div>
            </div>
            <div class="relative group">
                <img src="imgs/cat-love.png" alt="Loves Cat" class="rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105">
                <div class="absolute bottom-2 left-5 text-white font-bold p-4 rounded">Loves Cat</div>
            </div>
            <div class="relative group">
                <img src="imgs/christmas-gift.png" alt="Christmas Gift" class="rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105">
                <div class="absolute bottom-2 left-5 text-white font-bold p-4 rounded">Christmas Gift</div>
            </div>
            <div class="relative group">
                <img src="imgs/freepik-by-.png" alt="Photography" class="rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105">
                <div class="absolute bottom-2 left-5 text-white font-bold p-4 rounded">Photography</div>
            </div>
        </div>
    </div>



    <!-- ========= SMART CHOICE ========= -->
    <div class="py-16 bg-gray-50">
        <div class="text-center">
            <p class="text-3xl text-gray-800">The smartest choice for creatives like you</p>
            <p class="text-gray-500 mt-4">Find the perfect asset for your design or photography projects.</p>
        </div>
        <div class="flex flex-wrap justify-center mt-10 gap-10">
            <div class="flex items-center space-x-4">
                <div class="text-blue-500"><i class="fa fa-star"></i></div>
                <div>
                    <p class="text-lg font-semibold">High-quality stock content</p>
                    <p class="text-gray-500">Download scroll-stopping images to make your projects stand out.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-blue-500"><i class="fa fa-diamond"></i></div>
                <div>
                    <p class="text-lg font-semibold">Ready-to-use assets</p>
                    <p class="text-gray-500">Access thousands of ready-to-publish images and designs quickly.</p>
                </div>
            </div>
        </div>
    </div>



    <!-- ========= FOOTER SECTION ========= -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Content Column -->
                <div>
                    <h6 class="text-xl font-semibold mb-4">CONTENT</h6>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-gray-400">Calendar and festivals</a></li>
                        <li><a href="#" class="hover:text-gray-400">New Assets</a></li>
                        <li><a href="#" class="hover:text-gray-400">The most popular content</a></li>
                        <li><a href="#" class="hover:text-gray-400">Search trends</a></li>
                        <li><a href="#" class="hover:text-gray-400">Blog</a></li>
                    </ul>
                </div>
                <!-- Information Column -->
                <div>
                    <h6 class="text-xl font-semibold mb-4">INFORMATION</h6>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-gray-400">Pricing</a></li>
                        <li><a href="#" class="hover:text-gray-400">About us</a></li>
                        <li><a href="#" class="hover:text-gray-400">Business</a></li>
                        <li><a href="#" class="hover:text-gray-400">Jobs</a></li>
                        <li><a href="#" class="hover:text-gray-400">Sell your content</a></li>
                    </ul>
                </div>

                <!-- Social Media and Signup Column -->
                <div>
                    <h6 class="text-xl font-semibold mb-4">SOCIAL MEDIA</h6>
                    <div class="flex space-x-4 ">
                        <a href="#" class="text-[#1877F2] hover:text-[#1565C0] transition-colors duration-300 ">
                            <i class="fa fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" class="text-[#1DA1F2] hover:text-[#0D8AE8] transition-colors duration-300">
                            <i class="fa fa-twitter fa-2x"></i>
                        </a>
                        <a href="#" class="text-[#E60023] hover:text-[#BF1A2C] transition-colors duration-300">
                            <i class="fa fa-pinterest fa-2x"></i>
                        </a>
                        <a href="#" class="text-[#C13584] hover:text-[#A62C6F] transition-colors duration-300">
                            <i class="fa fa-instagram fa-2x"></i>
                        </a>
                        <a href="#" class="text-[#FF0000] hover:text-[#CC0000] transition-colors duration-300">
                            <i class="fa fa-youtube fa-2x"></i>
                        </a>
                    </div>
                    <span class="block text-gray-400 text-nowrap mb-4">Get exclusive assets sent straight to your inbox</span>
                    <div class="flex "><button class="bg-blue-600 text-white font-bold px-4 py-2 text-nowrap rounded hover:bg-blue-700">Sign up</button><strong><span class="text-4xl font-bold text-blue-500 block sm:hidden px-4">pixalplaza</span></strong></div>

                </div>
            </div>
            <hr class="my-8 border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center text-gray-400">
                <!-- Footer Bottom Section -->
                <div class="flex items-center space-x-4 mb-4 md:mb-0">
                    <strong><span class="text-4xl font-bold text-blue-500 hidden md:block px-4">pixalplaza</span></strong>
                    <span>Copyright &COPY; All rights reserved</span>
                </div>

            </div>

        </div>
    </footer>

</body>

</html>