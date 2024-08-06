<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edoovi</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!-- header start  -->
    <header class="bg-white  w-full fixed top-0 z-[9999] shadow-sm">
        <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center justify-between">
            <a href="" class="sm:size-16 size-14 *:size-full">
                <img src="../../assets/img/edoovi.webp" alt="">
            </a>
            <div class="md:flex items-center gap-8 hidden ">
                <ul class="flex gap-8">
                    <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Home</a></li>
                    <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
                    <li class="relative group"><a href="" class="flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions
                            <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="bg-white shadow-md border-gray-100 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
                            <ul>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="">School Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="">Insitute Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="">College Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
                    <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
                </ul>
                <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</button>
            </div>

            <input type="checkbox" class="peer/sideToggle hidden" name="sideToggle" id="sideToggle">

            <label for="sideToggle" class="-m-2.5 inline-flex items-center md:hidden justify-center rounded-md p-2.5 ">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </label>
            <div class="fixed flex flex-col inset-y-0 right-0 z-[1011] w-full overflow-y-auto select-none text-white bg-white/60 backdrop-blur-lg peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100
                translate-x-full opacity-0 duration-300">
                <div class="ms-auto overflow-y-auto w-full border-l h-screen  sm:w-1/2">
                    <nav class="sticky top-0 bg-white  p-3 ms-auto shadow-lg flex items-center justify-between">
                        <a href="" class="*:size-14">
                            <img src="./assets/img/edoovi.webp" alt="">
                        </a>
                        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                            <span class="sr-only *:">Close menu</span>
                            <svg class="h-6 w-6 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </label>
                    </nav>
                    <div class="flex flex-col !content-between">
                        <ul>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">Home</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">About Us</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">School Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">College Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">Insitute Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">University Software</a>
                            </li>

                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">Blogs</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">Clients</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="">Contact</a>
                            </li>
                        </ul>
                        <div class="mt-auto ">
                            <div class="flex justify-between px-4 pt-10 bg-white w-full">
                                <button class="h-max bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</button>
                                <button class="h-max mt-auto bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white ">Email Us</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <!-- header end  -->

    <!-- hero section start -->
    <div class="relative lg:h-full md:pt-28 pt-24 pb-6 sm:pb-10 px-3 lg:px-5">
        <div class="grid p-7 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center mx-auto max-w-7xl lg:px-8 px-6 h-full ">
            <div class="md:col-span-4">
                <div class="text-slate-900 md:text-6xl sm:text-5xl text-4xl font-semibold "> School Management Software
                    <span class="text-orange-500">With Cloud Based School ERP</span>
                </div>
            </div>

            <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
                <img class="size-full rounded-3xl" src="../../assets/img/blogInnerHero.jpg" alt="Hero Image">
            </div>
        </div>
    </div>
    <!-- hero section ends -->

    <!-- blogInner section start -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <div class="lg:col-span-2">
                <div class="py-8 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">

                        <h2 class="text-3xl font-bold text-theme1">Elevating E-commerce Excellence: Unleashing the Potential of CodeIgniter for Dynamic Website Development</h2>

                        <div class="flex flex-wrap gap-2 items-center gap-x-5">
                            <div class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                By Mohit Jangid
                            </div>
                            <div class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                Jan 11, 2024
                            </div>
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                Technology
                            </a>
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                PHP
                            </a>
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                CodeIgniter e-commerce development
                            </a>
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                E-commerce website design with CodeIgniter
                            </a>
                        </div>

                        <p class="text-lg text-gray-800">
                            In the ever-evolving landscape of e-commerce, the choice of a robust and versatile framework is crucial for creating dynamic and efficient websites. Enter CodeIgniter, a PHP framework that has been gaining traction for its simplicity, speed, and flexibility. Let's delve into how CodeIgniter seamlessly integrates into the e-commerce development landscape, offering a winning combination for crafting cutting-edge online stores.
                        </p>

                        <p class="text-lg text-gray-800">
                            Lightweight and Efficient CodeIgniter's lightweight nature is a significant advantage in the realm of e-commerce. Its minimal footprint ensures rapid performance, making it an ideal choice for creating responsive and fast-loading online stores. Whether your customers are browsing on a desktop or a mobile device, CodeIgniter ensures a seamless and enjoyable shopping experience.
                        </p>

                        <div class="text-center">
                            <div class="grid lg:grid-cols-2 gap-3">
                                <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                                    <figure class="relative w-full h-60">
                                        <img class="size-full absolute top-0 start-0 object-cover rounded-3xl" src="../../assets/img/blogInner01.jpg" alt="Blog Image">
                                    </figure>
                                    <figure class="relative w-full h-60">
                                        <img class="size-full absolute top-0 start-0 object-cover rounded-3xl" src="../../assets/img/blogInner02.jpg" alt="Blog Image">
                                    </figure>
                                </div>
                                <figure class="relative w-full h-72 sm:h-96 lg:h-full">
                                    <img class="size-full absolute top-0 start-0 object-cover rounded-3xl" src="../../assets/img/blogInner03.jpg" alt="Blog Image">
                                </figure>
                            </div>
                        </div>

                        <p class="text-lg text-gray-800">
                            MVC Architecture for Organized Development CodeIgniter's Model-View-Controller (MVC) architecture enhances the organization and maintainability of your e-commerce project. The clear separation of concerns allows developers to focus on specific aspects of the application, resulting in cleaner code and a more efficient development process. This architectural pattern is particularly beneficial when dealing with the complexities of e-commerce websites.
                        </p>

                        <p class="text-lg text-gray-800">
                            Responsive Design at Its Core In the era of diverse devices, ensuring your
                            <a class="text-theme1 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
                                e-commerce website
                            </a>,
                            is accessible and visually appealing on all platforms is paramount. CodeIgniter facilitates the creation of responsive layouts, adapting seamlessly to various screen sizes and resolutions. This responsiveness not only enhances user experience but also positively impacts search engine rankings, contributing to the overall success of your online store.
                        </p>

                        <blockquote class="text-center p-4 sm:px-7">
                            <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal xl:text-2xl xl:leading-normal">
                                Efficient Database Integration with Active Record CodeIgniter's Active Record implementation simplifies database interactions, providing an intuitive and secure way to handle data.
                            </p>
                        </blockquote>

                        <figure>
                            <img class="w-full object-cover rounded-3xl" src="../../assets/img/blogInner04.jpg" alt="Blog Image">
                        </figure>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Meta Elements for SEO Excellence</h3>

                            <p class="text-lg text-gray-800">
                                Meta Title: A Winning Combination for Dynamic Website Innovation Crafting a compelling meta title is essential for conveying the essence of your blog. In this context, it emphasizes the synergy between CodeIgniter and e-commerce, positioning them as a winning combination for dynamic website innovation.
                            </p>
                        </div>

                        <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800">
                            <li class="ps-2">
                                Meta Description: Unleash the Full Potential of CodeIgniter The meta description serves as a teaser, offering a glimpse into the blog's content. It highlights the blog's focus on unlocking the full potential of CodeIgniter for crafting cutting-edge e-commerce websites.
                            </li>
                            <li class="ps-2">
                                Keywords: Optimizing for Discovery Including relevant keywords such as <a class="text-theme1 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">CodeIgniter e-commerce development,</a> dynamic website layouts with CodeIgniter, and CodeIgniter features for online shopping enhances the blog's visibility on search engines, attracting developers and businesses interested in leveraging CodeIgniter for e-commerce solutions.
                            </li>
                        </ul>

                        <p class="text-lg text-gray-800">
                            In conclusion, CodeIgniter emerges as a powerful ally for those seeking to elevate their e-commerce ventures. Its lightweight yet efficient nature, combined with features like MVC architecture and responsive design, positions CodeIgniter as a formidable framework for crafting dynamic and feature-rich online stores. Whether you're a seasoned developer or a business owner entering the digital marketplace, embracing CodeIgniter is a strategic move towards e-commerce excellence.
                        </p>

                        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-y-5 lg:gap-y-0">
                            <div>
                                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                    Plan
                                </a>
                                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                    Web development
                                </a>
                                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                    Free
                                </a>
                                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" href="#">
                                    Team
                                </a>
                            </div>

                            <div class="flex justify-end items-center gap-x-1.5">
                                <div class="hs-tooltip inline-block">
                                    <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                        </svg>
                                        875
                                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                            Like
                                        </span>
                                    </button>
                                </div>

                                <div class="block h-3 border-e border-gray-300 mx-3"></div>

                                <div class="hs-tooltip inline-block">
                                    <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
                                        </svg>
                                        16
                                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                            Comment
                                        </span>
                                    </button>
                                </div>

                                <div class="block h-3 border-e border-gray-300 mx-3"></div>

                                <div class="hs-dropdown relative inline-flex">
                                    <button id="hs-blog-article-share-dropdown" type="button" class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                            <polyline points="16 6 12 2 8 6" />
                                            <line x1="12" x2="12" y1="2" y2="15" />
                                        </svg>
                                        Share
                                    </button>
                                    <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2" role="menu" aria-orientation="vertical" aria-labelledby="hs-blog-article-share-dropdown">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-xl text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10" href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                            </svg>
                                            Copy link
                                        </a>
                                        <div class="border-t border-gray-600 my-2"></div>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-xl text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10" href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                            </svg>
                                            Share on Twitter
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-xl text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10" href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                            </svg>
                                            Share on Facebook
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-xl text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10" href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                            </svg>
                                            Share on LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-50 lg:via-transparent lg:to-transparent">
                <div class="sticky top-0 start-0 py-8 lg:ps-8">
                    <div class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8">
                        <a class="block shrink-0 focus:outline-none" href="#">
                            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                        </a>

                        <a class="group grow block focus:outline-none" href="">
                            <h5 class="group-hover:text-gray-600 group-focus:text-gray-600 text-sm font-semibold text-gray-800">
                                Leyla Ludic
                            </h5>
                            <p class="text-sm text-gray-500">
                                UI/UX enthusiast
                            </p>
                        </a>

                        <div class="grow">
                            <div class="flex justify-end">
                                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <line x1="19" x2="19" y1="8" y2="14" />
                                        <line x1="22" x2="16" y1="11" y2="11" />
                                    </svg>
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <a class="group flex items-center gap-x-6 focus:outline-none" href="#">
                            <div class="grow">
                                <span class="text-sm font-bold text-gray-800 group-hover:text-theme1 group-focus:text-theme1">
                                    Elevating E-commerce Excellence: Unleashing the Potential of CodeIgniter for Dynamic Website Development
                                </span>
                            </div>

                            <div class="shrink-0 relative rounded-xl overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="../../assets/img/blog1.png" alt="Blog Image">
                            </div>
                        </a>

                        <a class="group flex items-center gap-x-6 focus:outline-none" href="#">
                            <div class="grow">
                                <span class="text-sm font-bold text-gray-800 group-hover:text-theme1 group-focus:text-theme1">
                                    Empowering E-commerce: Unveiling the Power of PHP and Laravel for Seamless Website Development
                                </span>
                            </div>

                            <div class="shrink-0 relative rounded-xl overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="https://images.unsplash.com/photo-1542125387-c71274d94f0a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Blog Image">
                            </div>
                        </a>

                        <a class="group flex items-center gap-x-6 focus:outline-none" href="#">
                            <div class="grow">
                                <span class="text-sm font-bold text-gray-800 group-hover:text-theme1 group-focus:text-theme1">
                                    Leading the Way in School ERP Software Solutions
                                </span>
                            </div>

                            <div class="shrink-0 relative rounded-xl overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="https://images.unsplash.com/photo-1586232702178-f044c5f4d4b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Blog Image">
                            </div>
                        </a>

                        <a class="group flex items-center gap-x-6 focus:outline-none" href="#">
                            <div class="grow">
                                <span class="text-sm font-bold text-gray-800 group-hover:text-theme1 group-focus:text-theme1">
                                    Leading the Way in School ERP Software Solutions
                                </span>
                            </div>

                            <div class="shrink-0 relative rounded-xl overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="../../assets/img/blog2.jpg" alt="Blog Image">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blogInner section Ends -->

    <!-- footer start -->
    <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 gap-y-16 gap-x-12">
                <div class=" lg:pr-8">
                    <img class="w-auto h-16" src="../../assets/img/edoovi.webp" alt="" />

                    <p class="text-base leading-relaxed text-white mt-7">Edoovi is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution.</p>
                </div>

                <div class="md:ms-auto">
                    <p class="text-base font-semibold tracking-widest text-white uppercase relative before:absolute before:border-b-2 before:border-orange-500 before:w-1/4 before:inset-0">About</p>

                    <ul class=" mt-6 flex flex-col gap-3">
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Edoovi </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Clients </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500">Privacy Policy </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Terms Of Use </a>
                        </li>
                    </ul>
                </div>

                <div class="md:ms-auto">
                    <p class="text-base font-semibold tracking-widest text-white uppercase relative before:absolute before:border-b-2 text-nowrap before:border-orange-500 before:w-1/2 before:inset-0">Product & Services</p>

                    <ul class=" mt-6 flex flex-col gap-3">
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Features </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> School Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> College Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> University Software </a>
                        </li>
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-orange-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-orange-500"></span>
                            </span>
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Blogs </a>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="my-10 border-gray-200" />
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex gap-2 sm:gap-3  ">

                    <a href="" class="flex items-center rounded-full gap-3 sm:px-4 px-2 border-2 border-white py-2">
                        <svg class="size-5 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 9h-1v7h1c0.275 0 0.5-0.225 0.5-0.5v-6c0-0.275-0.225-0.5-0.5-0.5z"></path>
                            <path d="M11.5 9c-0.275 0-0.5 0.225-0.5 0.5v6c0 0.275 0.225 0.5 0.5 0.5h1v-7h-1z"></path>
                            <path d="M16 8c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 0.96 0.169 1.88 0.479 2.732-0.304 0.519-0.479 1.123-0.479 1.768 0 1.763 1.304 3.222 3 3.464v-6.928c-0.499 0.071-0.963 0.248-1.371 0.506-0.084-0.417-0.129-0.849-0.129-1.292 0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5c0 0.442-0.044 0.874-0.128 1.292-0.408-0.259-0.873-0.435-1.372-0.507v6.929c1.696-0.243 3-1.701 3-3.464 0-0.645-0.175-1.249-0.479-1.768 0.31-0.853 0.479-1.773 0.479-2.732z"></path>
                        </svg>
                        <span class="text-sm font-semibold text-white mt-1">Customer Support</span>
                    </a>
                    <a href="" class="flex items-center rounded-full gap-3 sm:px-4 px-2 border-2 border-white py-2">
                        <svg class="size-5 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M21 6h-7.59l3.29-3.29L16 2l-4 4-4-4-.71.71L10.59 6H3a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8a2 2 0 0 0-2-2zm0 14H3V8h18v12zM9 10v8l7-4z"></path>
                        </svg>
                        <span class="text-sm font-semibold text-white mt-1">Live Demo</span>
                    </a>


                </div>
                <p class="text-sm mt-3 md:mt-0 text-white">© Copyright 2024, All Rights Reserved by Edoovi</p>
            </div>
        </div>
    </section>
    <!-- footer Ends -->





    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>