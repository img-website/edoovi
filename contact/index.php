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
            <a href="../index.php" class="sm:size-16 size-14 *:size-full">
                <img src="../assets/img/edoovi.webp" alt="">
            </a>
            <div class="md:flex items-center gap-8 hidden ">
                <ul class="flex gap-8">
                    <li><a href="../index.php" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Home</a></li>
                    <li><a href="../about" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
                    <li class="relative group">
                        <a href="../oursolutions/school-software" class="flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions
                            <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="bg-white shadow-md border-gray-100 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
                            <ul>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/school-software">School Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/insitute-software">Insitute Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/college-software">College Software</a>
                                </li>
                                <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/university-software">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../blogs" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
                    <li><a href="../clients/" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
                </ul>
                    <a href="../contact/" class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</a>
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
                        <a href="/" class="*:size-14">
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
                                <a href="/">Home</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="./about/">About Us</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/school-software">School Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/college-software/">College Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/insitute-software/">Insitute Software</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/university-software/">University Software</a>
                            </li>

                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../blogs/">Blogs</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../clients/">Clients</a>
                            </li>
                            <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../contact/">Contact</a>
                            </li>
                        </ul>
                        <div class="mt-auto ">
                            <div class="flex justify-between px-4 pt-10 bg-white w-full">
                                <a href="../contact/" class="h-max bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</a>
                                <button class="h-max mt-auto bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d] ">Email Us</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <!-- header end  -->

    <!-- hero section start -->
    <div class="relative lg:h-full md:pt-28 pt-24 pb-10 px-3 lg:px-5">
        <div class="grid p-7 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center mx-auto max-w-7xl lg:px-8 px-6 h-full ">
            <div class="md:col-span-4">
                <div class="text-slate-900 md:text-6xl sm:text-5xl text-4xl font-semibold "> School Management Software  <span class="text-orange-500">With Cloud
                Based School ERP</span></div>
            </div>

            <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
                <img class="size-full rounded-3xl" src="../assets/img/contact.avif" alt="Hero Image">
            </div>
        </div>
    </div>
    <!-- hero section ends -->


   
    <!-- form section start -->
    <section class="relative mb-20 overflow-hidden ">
        <div class="absolute  top-0 !right-0 [background:radial-gradient(circle,_rgba(255,231,_186,_0.7),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>

        <div class="flex justify-center items-center mx-auto max-w-7xl lg:px-8 px-6  relative z-10">
            <!-- COMPONENT CODE -->
            <div class="">

                <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-64 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold text-balance">Get in touch for any kind of help and informations</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="First Name*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Last Name*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" placeholder="Phone*" />
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">
                            Send Message
                        </button>
                    </div>
                </div>

                <div class="w-full lg:-mt-[400px] lg:w-2/5 sm:p-10 p-8 ml-auto bg-gradient-to-r from-[#8f7ceb]/90 via-[#856dfb] to-[#8777e3] rounded-3xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase sm:text-4xl text-3xl my-4">Drop in our office</h1>
                        <p class="text-white/90 sm:text-base text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            tincidunt arcu diam,
                            eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                        </p>

                        <div class="flex my-4 w-2/3 ">

                            <div class="flex flex-col">
                                <h2 class="text-2xl text-white font-medium">Main Office</h2>
                                <ul class="flex flex-col gap-1 mt-3">
                                    <li>
                                        <a href="javascript:;" class="text-white/90 flex items-center "><span class="flex items-center mr-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                                </svg></span>35 Oakridge Lane, NJ 08102</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="text-white/90 flex items-center "><span class="flex items-center mr-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z"></path>
                                                </svg></span> +91 -8696123456</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="text-white/90 flex items-center "><span class="flex items-center mr-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"></path>
                                                </svg></span> schoolsoftware@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex mt-4 w-2/3 ">
                            <div class=" flex justify-center space-x-2">
                                <a href="#!" type="button" class="rounded-full bg-[#3b5998] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="flex items-center justify-center">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"></path>
                                        </svg>
                                    </span>
                                </a>

                                <a href="#!" type="button" class="rounded-full bg-[#55acee] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="mx-auto flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg>
                                    </span>
                                </a>

                                <a href="#!" type="button" class="rounded-full bg-[#dd4b39] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="mx-auto flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 488 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                        </svg>
                                    </span>
                                </a>

                                <a href="#!" type="button" class="rounded-full bg-[#ac2bac] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="mx-auto flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </span>
                                </a>

                                <a href="#!" type="button" class="rounded-full bg-[#0082ca] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="mx-auto flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                        </svg>
                                    </span>
                                </a>

                                <a href="#!" type="button" class="rounded-full bg-[#333333] p-3 uppercase leading-normal text-white shadow-dark-3 border border-white size-10 shadow-black/30 transition duration-150 ease-in-out hover:scale-95 focus:shadow-dark-1 focus:outline-none focus:ring-0 active:shadow-1 dark:text-white" data-twe-ripple-init data-twe-ripple-color="light">
                                    <span class="mx-auto flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 496 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- form section end  -->

<!-- card section  -->

<section class="md:pb-16 pb-10">
  <div class="mx-auto max-w-7xl lg:px-10 px-6">
    <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-5">
      <div>
          <div id="contact-card" class="overflow-hidden z-20 bg-purple-800 h-full text-white p-6 rounded-lg shadow-lg relative after:absolute after:inset-0 after:bg-[url('../../assets/img/dot.png')] after:-z-10 duration-300 hover:scale-95 before:absolute before:size-24 before:bg-slate-50/10 before:rounded-full before:-right-5 before:-bottom-5">
            <h2 class="text-2xl font-bold pb-6 relative before:absolute before:left-0 before:bottom-4 before:min-w-12 before:h-[1px] before:bg-white">India Office</h2>
            <p class="mb-2 text-sm">100 Franklin Ave, Nutley, NJ 07110, United States</p>
            <p class="mb-2 text-sm">Mon – Fri: 8:30am – 6pm
            Sat: 10am – 2pm</p>
            <p class="mb-2 text-sm">For Sales Inquiry: <span id="phone">+ (123) 1800-567-8990</span></p>
        </div>
      </div>
      <div>
          <div id="contact-card" class="overflow-hidden z-20 bg-blue-800 h-full text-white p-6 rounded-lg shadow-lg relative after:absolute after:inset-0 after:bg-[url('../../assets/img/dot.png')] after:-z-10 duration-300 hover:scale-95 before:absolute before:size-24 before:bg-slate-50/10 before:rounded-full before:-right-5 before:-bottom-5">
            <h2 class="text-2xl font-bold pb-6 relative before:absolute before:left-0 before:bottom-4 before:min-w-12 before:h-[1px] before:bg-white">India Office</h2>
            <p class="mb-2 text-sm">372 King’s Road, London, SW3 5UZ</p>
            <p class="mb-2 text-sm">Mon – Fri: 8:30am – 6pm
            Sat: 10am – 2pm</p>
            <p class="mb-2 text-sm">For Sales Inquiry: <span id="phone">+ (123) 1800-567-8990</span></p>
        </div>
      </div>
      <div>
          <div id="contact-card" class="overflow-hidden z-20 bg-pink-800 h-full text-white p-6 rounded-lg shadow-lg relative after:absolute after:inset-0 after:bg-[url('../../assets/img/dot.png')] after:-z-10 duration-300 hover:scale-95 before:absolute before:size-24 before:bg-slate-50/10 before:rounded-full before:-right-5 before:-bottom-5">
            <h2 class="text-2xl font-bold pb-6 relative before:absolute before:left-0 before:bottom-4 before:min-w-12 before:h-[1px] before:bg-white">India Office</h2>
            <p class="mb-2 text-sm">372 King’s Road, London, SW3 5UZ</p>
            <p class="mb-2 text-sm">Mon – Fri: 8:30am – 6pm
            Sat: 10am – 2pm</p>
            <p class="mb-2 text-sm">For Sales Inquiry: <span id="phone">+ (123) 1800-567-8990</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- end  -->





    <!-- footer -->
    <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 md:gap-y-16 gap-y-10 gap-x-12">
                <div class=" lg:pr-8">
                    <img class="w-auto h-16" src="../assets/img/edoovi.webp" alt="" />

                    <p class="sm:text-base text-sm leading-relaxed text-white mt-7">Edoovi is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution.</p>
                </div>

                <div class="md:ms-auto">
                    <p class="text-base font-semibold tracking-widest text-white uppercase relative before:absolute before:border-b-2 before:border-violet-500 before:w-1/4 before:inset-0">About</p>

                    <ul class=" mt-6 flex flex-col gap-3">
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Edoovi </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Clients </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500">Privacy Policy </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Terms Of Use </a>
                        </li>
                    </ul>
                </div>

                <div class="md:ms-auto">
                    <p class="text-base font-semibold tracking-widest text-white uppercase relative before:absolute before:border-b-2 text-nowrap before:border-violet-500 before:w-1/2 before:inset-0">Product & Services</p>

                    <ul class=" mt-6 flex flex-col gap-3">
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Features </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> School Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> College Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> University Software </a>
                        </li>
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="#" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Blogs </a>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="sm:my-10 my-7 border-gray-200" />
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex gap-2 sm:gap-3  ">

                    <a href="" class="flex items-center rounded-full gap-3 sm:px-4 px-2 border-2 border-white py-2">
                        <svg class=" sm:size-5 size-4 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 9h-1v7h1c0.275 0 0.5-0.225 0.5-0.5v-6c0-0.275-0.225-0.5-0.5-0.5z"></path>
                            <path d="M11.5 9c-0.275 0-0.5 0.225-0.5 0.5v6c0 0.275 0.225 0.5 0.5 0.5h1v-7h-1z"></path>
                            <path d="M16 8c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 0.96 0.169 1.88 0.479 2.732-0.304 0.519-0.479 1.123-0.479 1.768 0 1.763 1.304 3.222 3 3.464v-6.928c-0.499 0.071-0.963 0.248-1.371 0.506-0.084-0.417-0.129-0.849-0.129-1.292 0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5c0 0.442-0.044 0.874-0.128 1.292-0.408-0.259-0.873-0.435-1.372-0.507v6.929c1.696-0.243 3-1.701 3-3.464 0-0.645-0.175-1.249-0.479-1.768 0.31-0.853 0.479-1.773 0.479-2.732z"></path>
                        </svg>
                        <span class="sm:text-sm text-xs font-semibold text-white mt-1">Customer Support</span>
                    </a>
                    <a href="" class="flex items-center rounded-full gap-3 sm:px-4 px-2 border-2 border-white py-2">
                        <svg class=" sm:size-5 size-4 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M21 6h-7.59l3.29-3.29L16 2l-4 4-4-4-.71.71L10.59 6H3a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8a2 2 0 0 0-2-2zm0 14H3V8h18v12zM9 10v8l7-4z"></path>
                        </svg>
                        <span class="sm:text-sm text-xs font-semibold text-white mt-1">Live Demo</span>
                    </a>


                </div>
                <p class="sm:text-sm text-xs mt-3 md:mt-0 text-white">© Copyright 2024, All Rights Reserved by Edoovi</p>
            </div>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- testimonial swiper -->
    <script>
        var swiper = new Swiper(".testimonailSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
        });
    </script>

</body>

</html>