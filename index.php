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

<header class="bg-white  w-full fixed top-0 z-[9999] shadow-sm">
    <div class=" max-w-7xl mx-auto py-3 px-6 lg:px-8 flex items-center justify-between">
            <a href="" class="sm:size-16 size-14 *:size-full">
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
        <div class="sm:flex hidden bg-white shadow-md rounded-xl overflow-hidden absolute sm:top-20 top-12 lg:left-0 sm:left-32 left-16 ">
            <div class="relative flex flex-col-reverse bg-white p-4  dark:bg-slate-800 dark:highlight-white/5">
        
                <figcaption class="flex items-center space-x-4">
                        <div class="flex-none size-10 p-2 rounded-full object-cover flex items-center justify-center bg-orange-100">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="size-7" xmlns="http://www.w3.org/2000/svg"><path d="M256 24c-64 0-96 48-96 64-48-16-112 0-144 32 0 176 128 368 240 368s240-192 240-368c-32-32-96-48-144-32 0-16-32-64-96-64zm0 23c22.5 0 41 18.46 41 41 0 22.5-18.5 41-41 41s-41-18.5-41-41c0-22.54 18.5-41 41-41zm0 18c-12.8 0-23 10.19-23 23 0 12.8 10.2 23 23 23s23-10.2 23-23c0-12.81-10.2-23-23-23zm-96.7 26.34l13.1 9.76c25.3 18.9 41.9 34 72 51.1 3.8 2.1 6.7 6.1 7.7 10 .9 4 .4 7.6-.6 10.9-2 6.6-5.9 12.5-10.6 18-4.7 5.5-10.2 10.4-16.1 13.9-5.8 3.5-12.6 6.8-20.6 3.2-22-10.2-35-26.5-41.3-44.6-6.3-18.1-6.4-37.6-4.9-56zm193.4 0l1.3 16.26c1.5 18.4 1.4 37.9-4.9 56-6.3 18.1-19.3 34.4-41.3 44.6-8 3.6-14.8.3-20.6-3.2-5.9-3.5-11.4-8.4-16.1-13.9-4.7-5.5-8.6-11.4-10.6-18-1-3.3-1.5-6.9-.6-10.9 1-3.9 3.9-7.9 7.7-10 30.1-17.1 46.7-32.2 72-51.1zM175.4 126.1c.1 11.2 1.2 22.1 4.5 31.6 4.9 14 13.7 25.5 31.3 33.8-.5-.3 1.4-.2 4.4-1.9 3.6-2.2 8-6.1 11.6-10.3 3.6-4.1 6.3-8.8 7-11.3.3-.7.2-.6.2-.9-3.6-2.1-7.1-4.1-10.4-6.2a8 16 0 0 1-8 15.1 8 16 0 0 1-8-16 8 16 0 0 1 1.3-8.6c-12.3-8.4-22.9-16.8-33.9-25.3zm35.8 65.4c.1.1.3.2.6.3zm125.4-65.4c-11 8.5-21.6 16.9-33.9 25.3a8 16 0 0 1 1.3 8.6 8 16 0 0 1-8 16 8 16 0 0 1-8-15.1c-3.3 2.1-6.8 4.1-10.4 6.2 0 .3-.1.2.2.9.7 2.5 3.4 7.2 7 11.3 3.6 4.2 8 8.1 11.6 10.3 3 1.7 4.9 1.6 4.4 1.9 17.6-8.3 26.4-19.8 31.3-33.8 3.3-9.5 4.4-20.4 4.5-31.6zm-35.8 65.4l-.6.3c.3-.1.5-.2.6-.3zm-183.6-15.1l34.7 33.1-12.4 13-34.7-33.1zm277.6 0l12.4 13-34.7 33.1-12.4-13zM93.74 201l34.66 33.1-12.4 13L81.31 214zm324.56 0l12.4 13-34.7 33.1-12.4-13zM256 225c65.8 0 119 53.2 119 119s-53.2 119-119 119-119-53.2-119-119 53.2-119 119-119zm-185.74.5L105 258.7l-12.48 13-34.7-33.2zm371.54 0l12.4 13-34.7 33.2-12.4-13zm-154.1 19.1c-23.7.4-63.2 12.3-63.7 35.4-.2 10.4 2.9 21 7.8 31 6.8-5 15.2-8 24.2-8 11.8 0 22.4 5.1 29.9 13.1 19-24.9 29.7-56 18.1-68.1-2-2.1-6.9-3.3-13.4-3.4zM256 321c-12.8 0-23 10.2-23 23s10.2 23 23 23 23-10.2 23-23-10.2-23-23-23zm-55.6 9.8c-25.1-.3-47.6 6.3-51.5 19.6-3.7 12.9 40.6 68 67.6 53.2 9.1-4.9 16.8-12.9 23-22.1-14.4-6.4-24.5-20.9-24.5-37.5 0-4.2.6-8.2 1.8-12-5.5-.7-11-1.1-16.4-1.2zm96.3 8.7c.2 1.5.3 3 .3 4.5 0 19.3-13.7 35.7-31.8 39.9 12.1 28.8 33.6 53.6 49.9 49.6 13-3.2 38.6-69.2 12.3-85.2-8.8-5.4-19.6-8.1-30.7-8.8z"></path></svg>
                        </div>


                    <div class="flex-auto"><div class="sm:text-base text-sm text-slate-900 font-semibold dark:text-slate-300">
                        <a href="javascript:;" tabindex="0"><span class="absolute inset-0"></span>Successful Year</a>
                    </div>
                    <div class="text-slate-900 sm:text-sm text-xs">1M<span class="text-xs font-medium">+</span></div>

                    </div>
                </figcaption>
            </div>
        </div>
        <div class="sm:flex hidden bg-white shadow-md rounded-xl overflow-hidden absolute sm:bottom-28 bottom-20 lg:left-0 sm:left-20 left-10 ">
            <div class="relative flex flex-col-reverse bg-white p-4  dark:bg-slate-800 dark:highlight-white/5">
        
                <figcaption class="flex items-center space-x-4">
                        <div class="flex-none size-10 p-3 rounded-full object-cover flex items-center justify-center bg-blue-100">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="size-7" xmlns="http://www.w3.org/2000/svg"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                        </div>
                    <div class="flex-auto"><div class="sm:text-base text-sm text-slate-900 font-semibold dark:text-slate-300">
                        <a href="javascript:;" tabindex="0"><span class="absolute inset-0"></span>client retention</a>
                    </div>
                    <div class="text-slate-900 sm:text-sm text-xs">96<span class="text-xs font-medium">%</span></div>

                    </div>
                </figcaption>
            </div>
        </div>
        <div class="sm:flex hidden bg-white shadow-md rounded-xl overflow-hidden absolute bottom-1/2 lg:right-0 sm:right-20 right-10">
            <div class="relative flex flex-col-reverse bg-white p-4  dark:bg-slate-800 dark:highlight-white/5">
        
                <figcaption class="flex items-center space-x-4">
                        <div class="flex-none size-10 p-2 rounded-full object-cover flex items-center justify-center bg-purple-100">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="size-7" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                        </div>
                    <div class="flex-auto"><div class="sm:text-base text-sm text-slate-900 font-semibold dark:text-slate-300">
                        <a href="javascript:;" tabindex="0"><span class="absolute inset-0"></span>Satisfied Clients</a>
                    </div>
                    <div class="text-slate-900 sm:text-sm text-xs">1600<span class="text-xs font-medium">+</span></div>

                    </div>
                </figcaption>
            </div>
        </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- hero section end  -->

<!-- career course  -->

<section class=" py-20">
    <div class="relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10 mb-10">
        <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
            <span class="font-normal">Browse Top Essentail</span>
            <br>
            <span class="font-bold text-orange-500">Career Courses</span>
        </p>
        <!-- <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
            Embark on an Automation Journey with Us
        </div> -->
    </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 ">
    <div class="col-auto ">
        <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-3xl   bg-gradient-to-r from-[#ed6190] via-[#ff5890] to-[#ff3679]
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
        <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-3xl     bg-gradient-to-r from-[#8f7ceb]/90 via-[#856dfb] to-[#8777e3]
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
        <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-3xl     bg-gradient-to-r from-[#6ab6cb] via-[#46c3e5] to-[#09afdd]
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
        <div class="size-full px-5 pt-2 sm:pt-4 lg:pt-6 pb-4 sm:pb-7 relative rounded-3xl   bg-gradient-to-r from-[#fdad50] via-[#ffa944] to-[#ff971d]
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
                <span class="font-bold text-orange-500">Clients</span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
                Embark on an Automation Journey with Us
            </div>
        </div>
        <div class="mt-3 sm:mt-8">
            <div class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper05.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper04.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper05.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper03.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        <div class="mt-3 sm:mt-8">
            <div class="swiper  mySwiper3 swiper-initialized swiper-horizontal swiper-backface-hidden" dir="rtl">
                <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0201.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0202.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0203.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0201.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0202.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
                            <div class="img h-[83px] w-auto">
                                <img class="size-full object-contain" src="./assets/img/swiper0203.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px;">
                        <div class="size-full border rounded-3xl px-4 py-2 shadow-inner">
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


<!-- seamless solution for  -->
<section class="relative md:py-16 py-10">
    <div class="relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10 mb-10">
        <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
            <span class="font-normal">Seamless Solutions for</span>
            <br>
            <span class="font-bold text-orange-500">Institutional Management</span>
        </p>
        <!-- <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
        Edoovi Provide
        </div> -->
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full ">
    <div class="grid grid-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-9">
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl  [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]   flex flex-col justify-center items-center text-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Verified School Profile
          </div>
          <div class="text-center">
            WhatsApp Business API enables Schools with Green Badge upon profile verification that confirms school authenticity.
          </div>
        </div>
    </div>
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl  [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]  text-center flex flex-col justify-center items-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Use Number Of Your Choice
          </div>
          <div class="text-center">
            No restriction on Number, choose the number you want for WhatsApp Business Solution. It can be Mobile, landline, or toll-free.
          </div>
        </div>
    </div>
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl text-center [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] flex flex-col justify-center items-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Broadcast To All
          </div>
          <div class="text-center">
            Send Bulk Messages to all Students, Parents, Teachers in Single Click with WhatsApp Business Solutions.
          </div>
        </div>
    </div>
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl text-center [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]  flex flex-col justify-center items-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10z"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Secure Encrypted Chat
          </div>
          <div class="text-center">
            All chat with clients is in encrypted form. WhatsApp ensures completely secure and reliable communication for seamless experience.
          </div>
        </div>
    </div>
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl text-center [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] flex flex-col justify-center items-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><circle cx="128" cy="256" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><circle cx="384" cy="112" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><circle cx="384" cy="400" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m169.83 279.53 172.34 96.94m0-240.94-172.34 96.94"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Rich Media Sharing
          </div>
          <div class="text-center">
            Take Advantage of WhatsApp's ability to share rich media content like Photos, Video, Location, Documents, Link, etc. with your Users.
          </div>
        </div>
    </div>
    <div class="col-auto group">
        <div class="size-full p-5 rounded-3xl  text-center [box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] flex flex-col justify-center items-center
         group-hover:bg-gradient-to-r from-[skyblue]/20 via-[skyblue]/50 to-[skyblue]/20 group-hover:border-transparent duration-300 transition-all 
         group-hover:scale-95">
          <div class="*:size-12 sm:*:size-14">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect width="336" height="336" x="128" y="128" fill="none" stroke-linejoin="round" stroke-width="32" rx="57" ry="57"></rect><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m383.5 128 .5-24a56.16 56.16 0 0 0-56-56H112a64.19 64.19 0 0 0-64 64v216a56.16 56.16 0 0 0 56 56h24"></path></svg>
          </div>
          <div class="py-3 font-semibold text-xl ">
            Easy API Integration
          </div>
          <div class="text-center">
            Edoovi offers Integrated Solutions with school management System with the facility to design personalized ChatBot.
          </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- end  -->


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