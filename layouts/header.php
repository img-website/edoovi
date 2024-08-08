<?php
$get_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$arr = explode("?", $get_url, 2);
$actual_link = $arr[0];
if ($_SERVER["HTTP_HOST"] == "localhost") {
    define('f_path', 'http://localhost/edoovi/');
} else if ($_SERVER['HTTP_HOST'] == '192.168.1.50') {
    define('f_path', 'http://159.65.150.18/edoovi/');
} else {
    define('f_path', 'http://159.65.150.18/edoovi/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edoovi</title>
    <link rel="stylesheet" href="<?php echo f_path ?>/assets/css/style.css">
    <!-- swiper link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
    <!-- header start  -->

    <!-- <header class="bg-white  w-full fixed top-0 z-[9999] shadow-sm">
        <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center  justify-between">
            <a href="<?php echo f_path ?> " class="md:size-16 size-10 *:size-full">
                <img src="<?php echo f_path ?>/assets/img/edoovi.webp" alt="">
            </a>
            <div class="md:flex items-center gap-8 hidden ">
                <ul class="flex gap-8">
                    <li><a href="<?php echo f_path ?> " class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base  text-slate-600 ">Home</a></li>
                    <li><a href="<?php echo f_path ?>about" class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
                    <li class="relative group">
                        <a href="<?php echo f_path ?>oursolutions/school-software" class=" flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions
                            <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="bg-white  shadow-md border-gray-100 z-50 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
                            <ul>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="<?php echo f_path ?>oursolutions/school-software">School Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="<?php echo f_path ?>oursolutions/insitute-software">Insitute Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="<?php echo f_path ?>oursolutions/college-software">College Software</a>
                                </li>
                                <li class="">
                                    <a class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 inline-flex " href="<?php echo f_path ?>oursolutions/university-software">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo f_path ?>blogs" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
                    <li><a href="<?php echo f_path ?>clients/" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
                </ul>
                <a href="<?php echo f_path ?>contact/" class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</a>
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
                        <a href="<?php echo f_path ?>" class="*:size-10">
                            <img src="<?php echo f_path ?>assets/img/edoovi.webp" alt="">
                        </a>
                        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                            <span class="sr-only *:">Close menu</span>
                            <svg class="h-6 w-6 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </label>
                    </nav>
                    <div class="flex flex-col bg-white pb-40   h-screen overflow-y-auto !content-between">
                        <ul xlass="h-full  overflow-y-auto bg-white">
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>">Home</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>about">About Us</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>oursolutions/school-software">School Software</a>
                            </li>

                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>oursolutions/insitute-software">Institute Software</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>oursolutions/college-software">College Software</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>oursolutions/university-software">University Software</a>
                            </li>

                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>blogs">BLog</a>
                            </li>
                            <li class="w-full">
                                <a class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex" href="<?php echo f_path ?>clients">Clients</a>
                            </li>
                        </ul>
                        <div class="fixed overflow-hidden sm:w-1/2 w-full bottom-0 bg-white shadow-lg rotate-180 flex items-center justify-between">
                            <div class="flex overflow-hidden justify-between py-5 px-4 rotate-180 bg-white w-full">
                                <a href="<?php echo f_path ?>contact/" class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contact Us</a>
                                <a href="mailto:schoolsoftware@gmail.com" class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Email Us</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </header> -->
    <header class="bg-white w-full fixed top-0 z-[9999] shadow-sm">
        <div class="max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center justify-between">
            <a href="<?php echo f_path ?>" class="md:size-16 size-10 *:size-full">
                <img src="<?php echo f_path ?>/assets/img/edoovi.webp" alt="">
            </a>

            <div class="md:flex items-center gap-8 hidden">
                <ul class="flex gap-8">
                    <li>
                        <a href="<?php echo f_path ?>" class="inline-flex font-medium text-base      <?php echo basename($_SERVER['REQUEST_URI']) == 'edoovi' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo f_path ?>about" class="inline-flex font-medium text-base
                     <?php echo basename($_SERVER['REQUEST_URI']) == 'about' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                            About Us
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="javascript:;" class="flex items-center font-medium text-base <?php echo basename($_SERVER['PHP_SELF']) == 'school-software.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                            Our Solutions
                            <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="bg-white shadow-md border-gray-100 z-50 border translate-y-10 opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible">
                            <ul>
                                <li>
                                    <a href="<?php echo f_path ?>oursolutions/school-software" class="inline-flex w-full text-slate-600 font-medium text-base  px-4 py-2 hover:text-white border-slate-200 hover:bg-violet-400
                                    <?php echo basename($_SERVER['REQUEST_URI']) == 'school-software' ? 'text-white border-b-2 bg-violet-400 ' : ''; ?>">
                                        School Software
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo f_path ?>oursolutions/insitute-software" class="inline-flex w-full text-slate-600 font-medium text-base  px-4 py-2 hover:text-white border-slate-200 hover:bg-violet-400
                                    <?php echo basename($_SERVER['REQUEST_URI']) == 'insitute-software' ? 'text-white border-b-2 bg-violet-400 ' : ''; ?>">
                                        Institute Software
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo f_path ?>oursolutions/college-software" class="inline-flex w-full text-slate-600 font-medium text-base  px-4 py-2 hover:text-white border-slate-200 hover:bg-violet-400
                                    <?php echo basename($_SERVER['REQUEST_URI']) == 'college-software' ? 'text-white border-b-2 bg-violet-400 ' : ''; ?>">
                                        College Software
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo f_path ?>oursolutions/university-software" class="inline-flex w-full text-slate-600 font-medium text-base  px-4 py-2 hover:text-white border-slate-200 hover:bg-violet-400
                                    <?php echo basename($_SERVER['REQUEST_URI']) == 'university-software' ? 'text-white border-b-2 bg-violet-400 ' : ''; ?>">
                                        University Software
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo f_path ?>blogs" class="inline-flex font-medium text-base <?php echo basename($_SERVER['REQUEST_URI']) == 'blogs' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo f_path ?>clients" class="inline-flex font-medium text-base <?php echo basename($_SERVER['REQUEST_URI']) == 'clients' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                            Clients
                        </a>
                    </li>
                </ul>
                <a href="<?php echo f_path ?>contact" class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">
                    Contact Us
                </a>
            </div>

            <input type="checkbox" class="peer/sideToggle hidden" name="sideToggle" id="sideToggle">

            <label for="sideToggle" class="-m-2.5 inline-flex items-center md:hidden justify-center rounded-md p-2.5">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </label>
            <div class="fixed flex flex-col inset-y-0 right-0 z-[1011] w-full select-none text-white bg-white/60 backdrop-blur-lg peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100
            -translate-x-full opacity-0 ms-auto duration-300 h-dvh">
                <div class="flex flex-col border-l h-[100vh] overflow-hidden sm:w-1/2">
                    <nav class="sticky w-full top-0 bg-white py-3 px-6 shadow-lg flex items-center justify-between">
                        <a href="<?php echo f_path ?>" class="*:size-10">
                            <img src="<?php echo f_path ?>assets/img/edoovi.webp" alt="">
                        </a>
                        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </label>
                    </nav>
                    <div class="flex flex-col bg-white pb-40 h-screen overflow-y-auto !content-between">
                        <ul class="h-full overflow-y-auto bg-white">
                            <li class="w-full">
                                <a href="<?php echo f_path ?>" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    Home
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>about" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    About Us
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>oursolutions/school-software" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'school-software.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    School Software
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>oursolutions/institute-software" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'institute-software.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    Institute Software
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>oursolutions/college-software" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'college-software.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    College Software
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>oursolutions/university-software" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'university-software.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    University Software
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>blogs" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    Blogs
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="<?php echo f_path ?>clients" class="hover:bg-violet-400 duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200 w-full inline-flex <?php echo basename($_SERVER['PHP_SELF']) == 'clients.php' ? 'text-red-600 border-b-2 border-red-600' : ''; ?>">
                                    Clients
                                </a>
                            </li>
                        </ul>
                        <div class="fixed overflow-hidden sm:w-1/2 w-full bottom-0 bg-white shadow-lg rotate-180 flex items-center justify-between">
                            <div class="flex overflow-hidden justify-between py-5 px-4 rotate-180 bg-white w-full">
                                <a href="<?php echo f_path ?>contact" class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">
                                    Contact Us
                                </a>
                                <a href="mailto:schoolsoftware@gmail.com" class="text-nowrap bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">
                                    Email Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- header end  -->