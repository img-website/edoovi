<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edoovi</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!-- header start  -->
    <header class="bg-white  w-full fixed top-0 z-[9999] shadow-sm">
        <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center justify-between">
            <a href="" class="sm:size-16 size-14 *:size-full">
                <img src="../assets/img/edoovi.webp" alt="">
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
                            <img src="../assets/img/edoovi.webp" alt="">
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
                <img class="size-full rounded-3xl" src="../assets/img/blogsHero.jpg" alt="Hero Image">
            </div>
        </div>
    </div>
    <!-- hero section ends -->


    <!-- blog section  -->

    <section class="container px-6 lg:px-8 mx-auto max-w-7xl lg:pb-16 pb-10 overflow-hidden">
        <div class="relative z-10 mb-8 md:mb-12">
            <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold">
                <span class="font-semibold">Explore Tech Insights</span>
                <span class="font-semibold">Fresh Blogs, News, and More!</span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-2 font-semibold text-balance">
                Edoovi school management system has grabbed the best school ERP software award, Best digital transformation award, Best innovative school erp award, Education Excellence Award for consecutive 3 years 2017-2019 by various well recognized associations.
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-12 gap-x-2 gap-y-4  lg:gap-6">
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="size-full rounded-3xl p-4  hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm lg:text-base text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-sm lg:text-base flex items-center gap-2 group" href="#">Read more
                                    <div class="group-hover:translate-x-3 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-6 lg:row-span-2">
                    <div class="size-full rounded-3xl p-4  hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full lg:aspect-[1/.8] object-cover rounded-3xl" src="../assets/img/award1.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm lg:text-base max-lg:text-ellipsis max-lg:overflow-hidden max-lg:line-clamp-2">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-sm lg:text-base flex items-center  gap-2 group" href="#">Read more
                                    <div class="group-hover:translate-x-3 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="size-full rounded-3xl p-4  hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm lg:text-base text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-sm lg:text-base flex items-center gap-2 group" href="#">Read more
                                    <div class="group-hover:translate-x-3 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="size-full rounded-3xl p-4  hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../assets/img/award1.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm lg:text-base text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-sm lg:text-base flex items-center gap-2 group" href="#">Read more
                                    <div class="group-hover:translate-x-3 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="size-full rounded-3xl p-4  hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
                                        </svg>
                                    </div>
                                    <div class="text-xs lg:text-sm">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm lg:text-base text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-sm lg:text-base flex items-center gap-2 group" href="#">Read more
                                    <div class="group-hover:translate-x-3 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-10">
                <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Explore More</button>
            </div>
        </div>
    </section>

    <!-- blog end  -->


    <!-- footer start -->
    <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 gap-y-16 gap-x-12">
                <div class=" lg:pr-8">
                    <img class="w-auto h-16" src="../assets/img/edoovi.webp" alt="" />

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
                            <a href="#" title="" class="flex text-base text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Vidyalaya </a>
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