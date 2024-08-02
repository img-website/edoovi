<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edoovi</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- swiper link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
<!-- header start  -->

<header class="bg-white shadow-sm w-full fixed top-0 z-[9999] ">
    <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center justify-between">
      <a href="" class="size-16 *:size-full">
        <img src="./assets/img/edoovi.webp" alt="">
      </a>
    <div class="md:flex items-center gap-8 hidden ">
    <ul class="flex gap-8">
        <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Home</a></li>
        <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
        <li class="relative group"><a href="" class="flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions 
          <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path></svg>
          </span>
      </a>
      <div class="bg-white shadow-md border-gray-100 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
    <ul>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >School Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Insitute Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >College Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >University Software</a>
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
        
      <label for="sideToggle" class="-m-2.5 inline-flex items-center md:hidden justify-center rounded-md p-2.5">
            <span class="sr-only">Open menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
          </label>
        <div class="fixed flex flex-col h-screen inset-y-0 right-0 z-[1011] w-full overflow-y-auto select-none text-white  sm:max-w-sm bg-red-500  peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100 translate-x-full opacity-0 duration-300">
        <div class=" bg-white top-0 left-0 w-full ">
      <nav class="sticky top-0 p-3 bg-white shadow-lg flex items-center justify-between">
      <a href="" class="*:size-14">
        <img src="./assets/img/edoovi.webp" alt="">
      </a>
      <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </label>
      </nav>
      <div>
      <ul>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Home</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >About Us</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >School Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >College Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Insitute Software</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >University Software</a>
      </li>
    
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Blogs</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Clients</a>
      </li>
      <li class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
        <a href="" >Contact</a>
      </li>
    </ul>


    </div>
    <div class="flex justify-between p-4  mt-auto ">
    <button class="h-max bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</button>
    <button class="h-max mt-auto bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant Us</button>
      </div>
      </div>
    </div>
    </div>
    

</header>
 <!-- header end  -->



  <!-- hero section  -->
  <section class="relative lg:h-full lg:pt-20 md:pt-28 pt-32 max-lg:pb-8 ">
    <div class="mx-auto max-w-7xl lg:px-8 px-6 h-full ">
      <div class="flex items-center flex-wrap lg:h-full max-lg:flex-col-reverse lg:gap-0 gap-5">
        <div class="lg:w-1/2 w-full lg:pe-5 max-lg:text-center">
          <div class="text-slate-900 xl:text-7xl md:text-6xl sm:text-5xl text-4xl font-semibold "> Investing in  knowledge and <span class="text-orange-500">Your Future</span></div>
          <div class="text-gray-500 text-sm mt-3 font-medium leading-normal pe-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident animi veniam cupiditate et nobis, omnis similique distinctio iste maxime enim quo. Quod autem dolorem dolores?</div>
          <div class="grid grid-cols-3 items-center mt-5">
            <div>
            <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-7 rounded-full shadow-xl shadow-violet-200/95 font-medium sm:text-base text-sm text-white">Contact </button>
            </div>
            <div>
              <div class="text-slate-900 md:text-4xl text-2xl font-semibold">50<span class="text-xl">+</span></div>
              <div class="text-gray-500 sm:text-sm text-xs">Career Courses</div>
            </div>
            <div>
              <div class="text-slate-900 md:text-4xl text-2xl font-semibold">1M<span class="text-xl">+</span></div>
              <div class="text-gray-500 sm:text-sm text-xs">Our  Students</div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/2 w-full flex flex-col items-center justify-center lg:aspect-square aspect-[3/2]  shrink-0 relative">
        <div class='md:w-[500px] sm:w-[400px] w-80 aspect-square rounded-full bg-[#F6F4FC] md:p-10 p-4'>
            <div class='w-full aspect-square rounded-full bg-[#EFECFE] md:p-10 p-4 '>
                <div class='w-full aspect-square rounded-full bg-[#DCD6FE] md:p-10 p-4 '>
                    <div class='w-full relative aspect-square rounded-full bg-[#9985FC] '>
                        <div class='w-full absolute inset-x-0 bottom-0 md:aspect-[9/14] aspect-[9/12] px-2 rounded-full flex items-end'>
                            <Image class='rounded-full size-full object-cover object-bottom' src="./assets/img/heroImg.png" alt='sdf' />
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- hero section end  -->

<!-- career course  -->

<section class=" py-20">
<div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 ">
<div class="col-auto ">
    <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-2xl   bg-gradient-to-r from-[#f396b5] via-[#f396b5] to-[#e97199]
    before:absolute before:inset-10 before:bg-transparent before:bottom-3 before:-z-10 before:shadow-xl before:shadow-[#fd97b8]">
     <div class="*:size-7 sm:*:size-9 text-white pb-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12.48 3 7.73 7.75 3 12.59a2 2 0 0 0 0 2.82l4.3 4.3A1 1 0 0 0 8 20h12v-2h-7l7.22-7.22a2 2 0 0 0 0-2.83L15.31 3a2 2 0 0 0-2.83 0zM8.41 18l-4-4 4.75-4.84.74-.75 4.95 4.95-4.56 4.56-.07.08z"></path></svg>
     </div>
     <div class="text-white text-base sm:text-lg font-semibold sm:font-bold pb-2 sm:pb-3 border-b border-white/50">
       <span class="w-full block ">UI/UX</span> 
         <span> Design</span>
     </div>
    </div>
</div>
<div class="col-auto ">
    <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-2xl     bg-gradient-to-r from-[#a9a0d5]/90 via-[#a497e5] to-[#948eb5]
    before:absolute before:inset-10 before:bg- before:bottom-3 before:-z-10 before:shadow-xl before:shadow-[#a497e5]">
     <div class=" *:size-7 sm:*:size-9 text-white pb-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM92.8,145.6a8,8,0,1,1-9.6,12.8l-32-24a8,8,0,0,1,0-12.8l32-24a8,8,0,0,1,9.6,12.8L69.33,128Zm58.89-71.4-32,112a8,8,0,1,1-15.38-4.4l32-112a8,8,0,0,1,15.38,4.4Zm53.11,60.2-32,24a8,8,0,0,1-9.6-12.8L186.67,128,163.2,110.4a8,8,0,1,1,9.6-12.8l32,24a8,8,0,0,1,0,12.8Z"></path></svg>
     </div>
     <div class="text-white text-base sm:text-lg font-semibold sm:font-bold pb-2 sm:pb-3 border-b border-white/50">
       <span class="w-full block">Web</span> 
         <span> Development</span>
     </div>
    </div>
</div>
<div class="col-auto ">
    <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-2xl     bg-gradient-to-r from-[#8fd9ed] via-[#78d1e9] to-[#65b5cb]
    before:absolute before:inset-10 before:bg-transparent before:bottom-3 before:-z-10 before:shadow-xl before:shadow-[#78d1e9]">
     <div class="*:size-7 sm:*:size-9 text-white pb-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M11,15 C14,15 19,19 19,19 L19,3 C19,3 14,7 11,7 C11,7 11,15 11,15 Z M5,15 L8,23 L12,23 L9,15 M19,14 C20.657,14 22,12.657 22,11 C22,9.343 20.657,8 19,8 M11,19 C11.9999997,18.9999994 14,18 14,16 M2,11 C2,7.88888889 3.7912,7 6,7 L11,7 L11,15 L6,15 C3.7912,15 2,14.1111111 2,11 Z"></path></svg>
     </div>
     <div class="text-white text-base sm:text-lg font-semibold sm:font-bold pb-2 sm:pb-3 border-b border-white/50">
       <span class="w-full block">Digital</span> 
         <span> Marketing</span>
     </div>
    </div>
</div>
<div class="col-auto ">
    <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-2xl   bg-gradient-to-r from-[#ffc683] via-[#ffb55f] to-[#fda43c]
    before:absolute before:inset-10 before:bg-transparent before:bottom-3 before:-z-10 before:shadow-xl before:shadow-[#ffb55f]">
     <div class=" *:size-7 sm:*:size-9 text-white pb-4">
        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M3 16v-6a2 2 0 1 1 4 0v6"></path><path d="M3 13h4"></path><path d="M10 8v6a2 2 0 1 0 4 0v-1a2 2 0 1 0 -4 0v1"></path><path d="M20.732 12a2 2 0 0 0 -3.732 1v1a2 2 0 0 0 3.726 1.01"></path></svg>
     </div>
     <div class="text-white text-base sm:text-lg font-semibold sm:font-bold pb-2 sm:pb-3 border-b border-white/50">
       <span class="w-full block">Practical</span> 
         <span> Learning</span>
     </div>
    </div>
</div>
<div class="col-span-2 sm:col-auto">
     <div class="size-full flex justify-center items-center flex-row sm:flex-col gap-x-3 sm:gap-y-4">
        <div class="order-2 sm:order-1 *:size-6 rounded-full text-white bg-[#937ffb] px-4 py-4 shadow-md shadow-[#937ffb]">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path></svg>
        </div>
        <div class="order-1 sm:order-2 font-semibold">Browse All</div>
     </div>
</div>
</div>
</div>
</section>
 <!-- career Courses end  -->


<!-- logo section  -->

<div class="">
    <div class="overflow-hidden px-5 py-12">
        <div class="relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10">
            <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                <span class="font-normal">Our Esteemed </span>
                <span class="font-bold text-theme1">Clients</span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
                Embark on an Automation Journey with Us
            </div>
        </div>
        <div class="mt-8">
            <div class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper05.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper04.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper05.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        <div class="mt-8">
            <div class="swiper  mySwiper3 swiper-initialized swiper-horizontal swiper-backface-hidden" dir="rtl">
                <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0201.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0202.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0203.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0201.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0202.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0203.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px; margin-right: 15px;">
                        <div class="size-full">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0201.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
</div>

 <!-- logo section end  -->

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            loop: true,
            speed: 4000,
            slidesPerView: "auto",
            centeredSlides: false,
            allowTouchMove: false,
            // slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                enabled: true,
                delay: 0
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.8,
                },
                360: {
                    slidesPerView: 1.8,
                },
                576: {
                    slidesPerView: 2.8,
                },
                768: {
                    slidesPerView: 5,
                },
                992: {
                    slidesPerView: 6,
                },
                1200: {
                    slidesPerView: 6,
                },
                1400: {
                    slidesPerView: 6,
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper3", {
            loop: true,
            speed: 4000,
            slidesPerView: "auto",
            centeredSlides: false,
            allowTouchMove: false,
            // slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                enabled: true,
                delay: 0
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.8,
                },
                360: {
                    slidesPerView: 1.8,
                },
                576: {
                    slidesPerView: 2.8,
                },
                768: {
                    slidesPerView: 5,
                },
                992: {
                    slidesPerView: 6,
                },
                1200: {
                    slidesPerView: 6,
                },
                1400: {
                    slidesPerView: 6,
                },
            },
        });
    </script>


</html>