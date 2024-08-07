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
        <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center  justify-between">
            <a href="../index.php" class="md:size-16 size-10 *:size-full">
                <img src="../assets/img/edoovi.webp" alt="">
            </a>
            <div class="md:flex items-center gap-8 hidden ">
                <ul class="flex gap-8">
                    <li><a href="../index.php" class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base  text-slate-600">Home</a></li>
                    <li><a href="../about" class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
                    <li class="relative group">
                        <a href="../oursolutions/school-software" class=" flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions
                            <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="bg-white  shadow-md border-gray-100 z-50 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
                            <ul>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="../oursolutions/school-software">School Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="../oursolutions/insitute-software">Insitute Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="../oursolutions/college-software">College Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="../oursolutions/university-software">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../blogs" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
                    <li><a href="" class=" active [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
                </ul>
                <a href="../contact" class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</a>
            </div>

            <input type="checkbox" class="peer/sideToggle hidden" name="sideToggle" id="sideToggle">

            <label for="sideToggle" class="-m-2.5 inline-flex items-center md:hidden justify-center rounded-md p-2.5 ">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </label>
            <div class="fixed flex flex-col inset-y-0 right-0 z-[1011] w-full select-none text-white bg-white/60 backdrop-blur-lg peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100
     -translate-x-full opacity-0 ms-auto duration-300 h-dvh">
                <div class=" flex flex-col  border-l h-[100vh]  overflow-hidden sm:w-1/2">
                    <nav class="sticky w-full top-0 bg-white  py-3 px-6  shadow-lg flex items-center justify-between">
                        <a href="../index.php" class="*:size-10">
                            <img src="../assets/img/edoovi.webp" alt="">
                        </a>
                        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                            <span class="sr-only *:">Close menu</span>
                            <svg class="h-6 w-6 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </label>
                    </nav>
                    <div class="flex flex-col bg-white pb-40   h-screen overflow-y-auto !content-between">
                        <ul xlass="h-max bg-white">
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../index.php">Home</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../about">About Us</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../oursolutions/school-software">School Software</a>
                            </li>

                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../oursolutions/insitute-software">Institute Software</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../oursolutions/college-software">College Software</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../oursolutions/university-software">University Software</a>
                            </li>

                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../blogs">BLog</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="../clients">Clients</a>
                            </li>
                        </ul>
                        <div class="fixed overflow-hidden sm:w-1/2 w-full bottom-0 bg-white shadow-lg rotate-180 flex items-center justify-between">
                            <div class="flex overflow-hidden justify-between py-5 px-4 rotate-180 bg-white w-full">
                                <button class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contact Us</button>
                                <button class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Email Us</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </header>
    <!-- header end  -->

    <!-- hero section start -->
    <div class="relative lg:h-full md:pt-28 pt-24 pb-10 ">
        <div class="mx-auto max-w-7xl lg:px-8 px-6">
            <div class="grid sm:p-7 p-5 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center h-full ">
                <div class="md:col-span-4">
                    <div class="text-slate-900 xl:text-6xl md:text-5xl sm:text-4xl text-3xl font-semibold "> School Management Software <span class="text-orange-500">With Cloud
                            Based School ERP</span></div>
                </div>

                <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
                    <img class="size-full rounded-3xl object-cover border-8 border-white" src="../assets/img/clientHero.jpg" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
    <!-- hero section ends -->


    <!-- testimonial section start -->
    <div class="absolute -z-10 -top-10 !right-0 [background:radial-gradient(circle,_rgba(255,200,_200,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>
    <div class="relative mx-auto max-w-7xl lg:px-8 px-6">
        <div class="absolute -z-10 top-0 !right-0 [background:radial-gradient(circle,_rgba(255,200,_200,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>

        <div class="relative lg:py-16 sm:py-10 py-8 mx-auto">
            <div class="w-full md:max-w-2xl md:w-3/4 lg:w-2/5 mb-6 sm:mb-10 md:mb-8">
                <div class="relative container mx-auto max-w-7xl z-10">
                    <p class="text-balance max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold">
                        <span class="font-semibold">Why Institutes Love </span>
                        <span class="font-bold text-slate-900">Edoovi ERP System?</span>
                    </p>
                    <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
                        Our Client Says
                    </div>
                </div>
            </div>


            <div class="swiper testimonailSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden rounded-3xl">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="rounded-3xl border-white border overflow-hidden bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7] bg-white">
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
                                        <!-- End Blockquote -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="rounded-3xl bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7] bg-white">
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
                                        <!-- End Blockquote -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="rounded-3xl bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7] bg-white">
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
                                        <!-- End Blockquote -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden">
                            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                                <div aria-hidden="true" class="flex -z-[1] absolute start-0">
                                    <div class="rounded-3xl bg-purple-400 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
                                </div>

                                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                                    <div class="hidden lg:col-span-2 shadow-2xl rounded-3xl lg:flex items-center justify-center aspect-[1/0.7] bg-white">
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
                                        <!-- End Blockquote -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- testimonial section ends -->

    <!-- cta start -->
    <div class="pb-7 md:pb-8 lg:pb-10 select-none">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 shadow-2xl rounded-2xl sm:rounded-3xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24 bg-[url('../../assets/img/school-cta.jpg')] bg-cover bg-left after:absolute after:top-0 after:left-0 after:bg-black/60 after:size-full">
                <div class="max-w-3xl lg:mx-0 lg:flex-auto py-6 md:py-8 lg:py-10 lg:text-left relative z-[1]">
                    <div class="max-sm:text-xl max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-white font-normal empty:hidden max-sm:text-center">Still Have Any Query?
                        <div class="font-bold text-white mt-2">We would love to answer. Let’s schedule free demonstration of Edoovi School ERP Software.
                        </div>
                    </div>
                    <div class="md:mt-10 mt-5 flex items-center gap-x-6 empty:hidden max-sm:justify-center">
                        <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl  font-medium text-base text-white">Contant Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta Ends -->

    <!-- footer -->
    <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
        <div class="Edoovipx-4 mx-auto px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 md:gap-y-16 gap-y-10 gap-x-12">
                <div class=" lg:pr-8">
                    <a href="../index.php">
                        <img class="w-auto h-16" src="../assets/img/edoovi.webp" alt="" />
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
                            <a href="../about/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Edoovi </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../clients/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Clients </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../privacy-policy/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500">Privacy Policy </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../terms-conditions/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Terms Of Use </a>
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
                            <a href="../oursolutions/school-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> School Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../oursolutions/college-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> College Software </a>
                        </li>

                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../oursolutions/university-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> University Software </a>
                        </li>
                        <li class="flex items-center gap-2 group">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
                            </span>
                            <a href="../blogs/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Blogs </a>
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