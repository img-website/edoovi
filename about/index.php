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
                    <li><a href="../index.php" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Home</a></li>
                    <li><a href="./about" class="active [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
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
                                <li class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/school-software">School Software</a>
                                </li>
                                <li class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/insitute-software">Insitute Software</a>
                                </li>
                                <li class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/college-software">College Software</a>
                                </li>
                                <li class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/university-software">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../blogs" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
                    <li><a href="../clients/" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
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
    <div class="relative lg:h-full md:pt-28 pt-24 pb-6 sm:pb-10 px-3 lg:px-5">
        <div class="grid p-7 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center mx-auto max-w-7xl lg:px-8 px-6 h-full ">
            <div class="md:col-span-4">
                <div class="text-slate-900 md:text-6xl sm:text-5xl text-4xl font-semibold "> Unlock Digital Potential: <span class="text-orange-500">Edoovi School Software for Tomorrow's Education</span></div>
            </div>

            <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
                <img class="size-full rounded-3xl" src="../assets/img/about-hero.jpg" alt="Hero Image">
            </div>
        </div>
    </div>
    <!-- hero section ends -->

    <!-- about Section start -->
     <section class="relative">
        <div class="absolute -z-10 top-0 !right-0 [background:radial-gradient(circle,_rgba(255,200,_200,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>
        <div class="absolute -z-10 bottom-0 !left-0 [background:radial-gradient(circle,_rgba(255,281,_231,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>

        <div class="max-w-7xl px-6 lg:px-8 py-6 md:py-10 lg:pt-20 lg:pb-20 mx-auto">
            <div class="max-w-3xl mb-10 lg:mb-14">
                <h2 class="font-semibold text-2xl md:text-4xl md:leading-tight">
                    Our Journey
                </h2>
                <p class="mt-1 text-lg">
                    Launched in 2002, Edoovi provides an end-to-end cloud management solution for educational institutions.
                </p>
            </div>
    
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                <div class="aspect-[22/9] lg:aspect-square">
                    <img class="size-full object-cover rounded-3xl" src="../assets/img/about-about.jpg" alt="Features Image">
                </div>
    
                <div>
                    <div class="mb-4">
                        <h3 class="text-theme1 text-sm font-medium">
                            Milestones
                        </h3>
                    </div>
    
                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-theme1 font-semibold text-sm uppercase rounded-full">
                                    1
                                </span>
                            </div>
                        </div>
    
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm lg:text-base">
                                Fully lined with Office 365, Google G-Suite, LMS, and various other systems, our comprehensive ERP platform meets all of the educational institution’s demands via a variety of capabilities.
                            </p>
                        </div>
                    </div>
    
                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-theme1 font-semibold text-sm uppercase rounded-full">
                                    2
                                </span>
                            </div>
                        </div>
    
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm lg:text-base">
                                Our ERP software also helps build strong communication and collaboration channels with teachers, students, parents, candidates, and alumni.
                            </p>
                        </div>
                    </div>
    
                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-theme1 font-semibold text-sm uppercase rounded-full">
                                    3
                                </span>
                            </div>
                        </div>
    
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm md:text-base">
                                Since its launch, 1800+ educational institutions have been using this software to manage admissions, sales, registration, timetabling, academic, learning, finance, payments, transportation, and library operations effectively.
                            </p>
                        </div>
                    </div>
    
                    <div class="flex gap-x-5 ms-1">
                        <div class="relative">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-theme1 font-semibold text-sm uppercase rounded-full">
                                    4
                                </span>
                            </div>
                        </div>
    
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm md:text-base">
                                Edoovi ERP is used by most of the reputed educational institutes in 23+states and 8+ countries worldwide.
                            </p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
     </section>
    <!-- about Section ends -->

    <!-- mission section start -->
    <div class="relative isolate py-6 md:py-8 lg:py-16">
    <div class="absolute -z-10 top-0 !right-0 [background:radial-gradient(circle,_rgba(255,281,_231,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full flex flex-wrap items-center justify-between">
            <div class="w-full md:w-1/2 lg:w-2/3">
                <div class=" relative z-20 mx-auto lg:max-w-3xl lg:mx-0 lg:w-3xl lg:flex-none lg:pr-4">
                    <p class="mt-4 max-md:text-3xl max-xl:text-5xl text-5xl text-gray-800 tracking-wide"><span class="font-semibold">Our Mission</p>
                    <p class="py-3 md:mt-4 text-sm md:text-lg leading-[130%] text-gray-800">
                        Our Mission is to deliver cost-effective and reasonable ERP solutions for educational institutions worldwide. With maximum attention, we aim to provide an outstanding ERP system to educational institutions for enhancing and streamlining their day-to-day tasks.
                    </p>
                </div>
            </div>
            <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 -mb-24 lg:-mb-36 mx-auto">
                <div class="aspect-[5/4] rounded-3xl overflow-hidden border-[20px] border-[solid] border-white">
                    <img src="../assets/img/vision.jpg" alt="" class="size-full object-center rounded-2xl">
                </div>
            </div>
        </div>
        <div class="w-full bg-purple-50 py-14 lg:py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full flex flex-wrap items-center justify-between">
                <div class="w-2/3 md:w-1/2 lg:w-1/3 rounded-3xl overflow-hidden hidden md:flex -mb-72">
                    <div class="aspect-[3/2.7] rounded-3xl overflow-hidden border-[20px] border-[solid] border-white">
                        <img src="../assets/img/mission.jpg" alt="" class="size-full object-cover object-center rounded-2xl overflow-hidden">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-2/3 md:ps-10 mt-7 md:mt-0">
                    <div class=" relative z-20 mx-auto max-w-3xl lg:mx-0 lg:w-3xl lg:flex-none lg:pr-4">
                        <p class="mt-7 max-md:text-3xl max-xl:text-5xl text-5xl tracking-wide"><span class="font-semibold">Our Vision</p>
                        <p class="mt-4 text-sm md:text-lg leading-[130%]">
                            "Empower educational services in an ever-changing environment to provide students and instructors with improved possibilities for continual improvement."
                        </p>
                        <ul class="space-y-2 sm:space-y-4 mt-6">
                            <li class="flex gap-x-3">
                                <span class="mt-0.5 min-w-7 size-7 flex justify-center items-center rounded-full text-theme1">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M240,128a15.79,15.79,0,0,1-10.5,15l-63.44,23.07L143,229.5a16,16,0,0,1-30,0L89.94,166.06,26.5,143a16,16,0,0,1,0-30L89.94,89.94,113,26.5a16,16,0,0,1,30,0l23.07,63.44L229.5,113A15.79,15.79,0,0,1,240,128Z"></path>
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base">
                                        We are committed to growing and becoming a market leader in the educational sector by delivering high-quality institutional features.
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span class="mt-0.5 min-w-7 size-7 flex justify-center items-center rounded-full text-theme1">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M240,128a15.79,15.79,0,0,1-10.5,15l-63.44,23.07L143,229.5a16,16,0,0,1-30,0L89.94,166.06,26.5,143a16,16,0,0,1,0-30L89.94,89.94,113,26.5a16,16,0,0,1,30,0l23.07,63.44L229.5,113A15.79,15.79,0,0,1,240,128Z"></path>
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base">
                                        We are committed to growing and becoming a market leader in the educational sector by delivering high-quality institutional features.
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span class="mt-0.5 min-w-7 size-7 flex justify-center items-center rounded-full text-theme1">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M240,128a15.79,15.79,0,0,1-10.5,15l-63.44,23.07L143,229.5a16,16,0,0,1-30,0L89.94,166.06,26.5,143a16,16,0,0,1,0-30L89.94,89.94,113,26.5a16,16,0,0,1,30,0l23.07,63.44L229.5,113A15.79,15.79,0,0,1,240,128Z"></path>
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base">
                                        We are committed to growing and becoming a market leader in the educational sector by delivering high-quality institutional features.
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mission section ends -->

    <!-- why us section start -->
    <div class="relative py-6 md:py-12 lg:py-10 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative">
            <div class="select-none relative">
                <div class="flex w-full h-auto items-center flex-wrap lg:gap-0 gap-3">
                    <div class="lg:w-[60%] lg:pe-10 pe-0 w-[100%] lg:order-1 order-2">
                        <p class="
                    max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black

                    first:*:font-semibold

                    
                "> <span>Why Us?</span>
                        </p>
                        <div class="md:text-lg text-sm opacity-70 mt-3 mb-lg-1">
                            A perfect school management software has speed, security, accuracy, and a wide range of functions and modules. More than 1300+ schools around the country rely on our comprehensive product and exceptional service. We have a global client base of happy customers.
                        </div>
                        <div class="md:text-lg text-sm opacity-70 mt-3 mb-lg-1">
                            Our school management software uses cloud computing to store data that can be accessed at any time. Also, data backup is automated, so data recovery is not an issue.
                        </div>
                        <div class="md:text-lg text-sm opacity-70 mt-3 mb-lg-1">
                            Save and keep data on decentralized databases does not guarantee data security or recovery. Our school ERP system uses the cloud to store data, saving time and providing advantages like dependability, portability, backup, and high speed
                        </div>
                    </div>
                    <div class="lg:w-[40%] flex items-center justify-center w-[100%] lg:order-2 order-1 overflow-hidden rounded-3xl">
                        <div class="aspect-[3/2.8] object-cover size-full *:size-full"> <img src="../assets/img/whyUs.jpg" alt="Why Choose IMG Global Infotech for On-demand Food Delivery App Development?">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why us section ends -->

    <!-- testimonial section start -->
    <div class="overflow-hidden relative">
    <div class="absolute -z-10 top-0 !right-0 [background:radial-gradient(circle,_rgba(255,200,_200,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>

        <div class="relative max-w-[85rem] px-4 py-6 sm:py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl w-3/4 lg:w-1/2 mb-6 sm:mb-10 md:mb-8">
                <div class="relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10">
                    <p class="text-balance max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                        <span class="font-semibold">Why Institutes Love Edoovi ERP System?</span>
                    </p>
                    <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
                        Our Client Says
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 end-0 transform lg:translate-x-32" aria-hidden="true">
                <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z" fill="currentColor" class="fill-orange-500" />
                    <path d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z" fill="currentColor" class="fill-cyan-500" />
                    <path d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z" fill="currentColor" class="fill-red" />
                </svg>
            </div>

            <div class="swiper testimonailSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7]">
                                        <img class="rounded-3xl size-full" src="../assets/img/tesimonial01.jpg" alt="Avatar">
                                    </div>

                                    <div class="lg:col-span-4">
                                        <blockquote>

                                            <p class="text-lg font-medium text-gray-800  lg:leading-normal text-ellipsis line-clamp-5">
                                                "In the ever-evolving landscape of financial technology, India stands at the forefront of innovation, with a myriad of fintech app development companies paving the way for ground-breaking solutions. As we step into 2024, the significance of mobile applications in the financial sector has reached unprecedented heights, reshaping the way we manage, invest, and transact."
                                            </p>

                                            <footer class="mt-6">
                                                <div class="flex items-center">
                                                    <div class="lg:hidden shrink-0">
                                                        <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Avatar">
                                                    </div>
                                                    <div class="ms-4 lg:ms-0">
                                                        <p class="font-medium text-gray-800">
                                                            Jaimin raj
                                                        </p>
                                                        <p class="text-sm text-gray-600">
                                                            Director, P.P. Savani School, Surat
                                                        </p>
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7]">
                                        <img class="rounded-3xl size-full" src="../assets/img/militryLogo.svg" alt="Avatar">
                                    </div>

                                    <div class="lg:col-span-4">
                                        <blockquote>

                                            <p class="text-lg font-medium text-gray-800  lg:leading-normal text-ellipsis line-clamp-5">
                                                "In the ever-evolving landscape of financial technology, India stands at the forefront of innovation, with a myriad of fintech app development companies paving the way for ground-breaking solutions. As we step into 2024, the significance of mobile applications in the financial sector has reached unprecedented heights, reshaping the way we manage, invest, and transact. The statistics speak volumes about this digital revolution. According to recent surveys, mobile banking users in India are expected to surpass 800 million by the end of 2023, underscoring the role of fintech apps in our daily financial activities. As technology continues to influence every aspect."
                                            </p>

                                            <footer class="mt-6">
                                                <div class="flex items-center">
                                                    <div class="lg:hidden shrink-0">
                                                        <img class="size-12 rounded-full" src="https://edoovi.com/uploads/client/1704785350.svg" alt="Avatar">
                                                    </div>
                                                    <div class="ms-4 lg:ms-0">
                                                        <p class="font-medium text-gray-800">
                                                            Mr. Viral Shah
                                                        </p>
                                                        <p class="text-sm text-gray-600">
                                                            Trustee, A-one School, Jaipur
                                                        </p>
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7]">
                                        <img class="rounded-3xl size-full" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Avatar">
                                    </div>

                                    <div class="lg:col-span-4">
                                        <blockquote>

                                            <p class="text-lg font-medium text-gray-800  lg:leading-normal text-ellipsis line-clamp-5">
                                                "In the ever-evolving landscape of financial technology, India stands at the forefront of innovation, with a myriad of fintech app development companies paving the way for ground-breaking solutions. As we step into 2024, the significance of mobile applications in the financial sector has reached unprecedented heights, reshaping the way we manage, invest, and transact."
                                            </p>

                                            <footer class="mt-6">
                                                <div class="flex items-center">
                                                    <div class="lg:hidden shrink-0">
                                                        <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Avatar">
                                                    </div>
                                                    <div class="ms-4 lg:ms-0">
                                                        <p class="font-medium text-gray-800">
                                                            Jaimin raj
                                                        </p>
                                                        <p class="text-sm text-gray-600">
                                                            Director, P.P. Savani School, Surat
                                                        </p>
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7]">
                                        <img class="rounded-3xl size-full" src="https://edoovi.com/uploads/client/1704785350.svg" alt="Avatar">
                                    </div>

                                    <div class="lg:col-span-4">
                                        <blockquote>

                                            <p class="text-lg font-medium text-gray-800  lg:leading-normal text-ellipsis line-clamp-5">
                                                "In the ever-evolving landscape of financial technology, India stands at the forefront of innovation, with a myriad of fintech app development companies paving the way for ground-breaking solutions. As we step into 2024, the significance of mobile applications in the financial sector has reached unprecedented heights, reshaping the way we manage, invest, and transact. The statistics speak volumes about this digital revolution. According to recent surveys, mobile banking users in India are expected to surpass 800 million by the end of 2023, underscoring the role of fintech apps in our daily financial activities. As technology continues to influence every aspect."
                                            </p>

                                            <footer class="mt-6">
                                                <div class="flex items-center">
                                                    <div class="lg:hidden shrink-0">
                                                        <img class="size-12 rounded-full" src="https://edoovi.com/uploads/client/1704785350.svg" alt="Avatar">
                                                    </div>
                                                    <div class="ms-4 lg:ms-0">
                                                        <p class="font-medium text-gray-800">
                                                            Mr. Viral Shah
                                                        </p>
                                                        <p class="text-sm text-gray-600">
                                                            Trustee, A-one School, Jaipur
                                                        </p>
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- testimonial section ends -->

    <!-- cta start -->
    <div class="py-6 md:py-8 lg:py-10 select-none">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 shadow-2xl rounded-2xl sm:rounded-3xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24 bg-[url('../../assets/img/school-cta.jpg')] bg-cover bg-left after:absolute after:top-0 after:left-0 after:bg-black/60 after:size-full">
                <div class="max-w-3xl lg:mx-0 lg:flex-auto py-6 md:py-8 lg:py-10 lg:text-left relative z-[1]">
                    <div class="max-sm:text-xl max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-white font-normal empty:hidden max-sm:text-center">Still Have Any Query?
                        <div class="font-bold text-white mt-2">We would love to answer. Let’s schedule free demonstration of Edoovi School ERP Software.
                        </div>
                    </div>
                    <div class="md:mt-10 mt-5 flex items-center gap-x-6 empty:hidden max-sm:justify-center">
                    <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl  font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta Ends -->

    <!-- footer -->
    <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 md:gap-y-16 gap-y-10 gap-x-12">
                <div class=" lg:pr-8">
                    <a href="./index.php">
                        <img class="w-auto h-16" src="./assets/img/edoovi.webp" alt="" />
                    </a>

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
                            <a href="./about/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Edoovi </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./clients/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Clients </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./privacy-policy/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500">Privacy Policy </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./terms-conditions/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Terms Of Use </a>
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
                            <a href="./oursolutions/school-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> School Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./oursolutions/college-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> College Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./oursolutions/university-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> University Software </a>
                        </li>
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="./blogs/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Blogs </a>
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