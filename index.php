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
        <img src="../assets/img/edoovi.webp" alt="">
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
</body>



</html>