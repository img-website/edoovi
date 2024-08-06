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
        <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</button>
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
                <button class="h-max bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</button>
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
        <h1 class="block text-3xl font-bold text-theme2">Unlock Digital Potential</h1>
        <p class="mt-3 text-3xl sm:text-4xl lg:text-6xl text-theme1 font-semibold">Edoovi School Software for Tomorrow's
          Education</p>
      </div>

      <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
        <img class="size-full rounded-3xl" src="https://images.unsplash.com/photo-1665686376173-ada7a0031a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=700&q=80" alt="Hero Image">
      </div>
    </div>
  </div>
  <!-- hero section ends -->


  <!-- -------schl-softwre -->

  <section class="py-20  relative overflow-hidden">
    <div class="absolute inset-0 size-full ">
      <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/bg/banner-3-bg-1.png" alt="" class="size-full">
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full relative z-10">
      <div class="grid grid-cols-12 gap-y-10 lg:gap-8 group">
        <div class="col-span-12 lg:col-span-6">
          <div class="size-full relative flex items-center justify-center group">
            <div class=" h-full w-[70%]">
              <img class="aspect-[1/1]  object-cover rounded-3xl" src="../../assets/img/students.avif" alt="">
            </div>

            <div class=" absolute -top-7  z-[3] w-[40%] right-0 sm:group-hover:right-[58%]  duration-300 ">
              <img class="aspect-[1/.8] rounded-3xl object-cover" src="../../assets/img/students4.avif" alt="">
            </div>
            <div class=" absolute -bottom-5 z-[3] w-[40%] left-0 sm:group-hover:left-[58%]  duration-300 ">
              <img class="aspect-[1/.8] rounded-3xl object-cover" src="../../assets/img/students5.avif" alt="">
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <div class="size-full">
            <div class="text-balance max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold pb-4">
              What is School Management Software?
            </div>
            <div class="md:text-base text-sm text-black/70 mt-2 font-boldtext-ellipsis line-clamp-[10] overflow-hidden">
              School management software introduces a new platform by embedding new-edge technology into the educational
              sector. The digital platform is capable of managing the school management activities making them smarter.
              The comprehensive features of school management software not only reduce the workload of the institution’s
              employees but also streamline the major functionalities like fee collection, academic timetable
              scheduling, results declaration. School management can focus on other productive activities like
              increasing student enrollment ratio, embedding new ways of learning as they are relieved from the workload
              hassles.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- -------schl-softwre -->


    <!-- --------user-friendly-sec -->

    <section class="py-20">
      <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <div class="absolute -z-10 top-0 !right-0 [background:radial-gradient(circle,_rgba(255,200,_200,_0.5),rgba(255,200,_200,_0.5))] blur-2xl size-72"></div>
        <div class="relative container mx-auto max-w-7xl  z-10 pb-10 ">
          <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-balance tracking-[-0.04em] text-slate-900  font-semibold">
            <span class="font-semibold">We Offer End-To-End Solutions For & </span> <br>
            <span class="font-bold text-slate-900">Every Phase Of School Management.</span>
          </p>
          <div class="md:text-base text-sm text-black/70 mt-2 font-bold text-balance">
            An integrated school management system called Edoovi is created specifically to cater to the requirements of all administrative personnel working in educational institutions. The organization is given a comprehensive and priceless toolkit to handle all school-related operations by the School Management System components.
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-4 bg-gradient-to-b from-violet-300 to-violet-500/90 rounded-3xl">
          <div class="col-auto">
            <div class="size-full p-6 border-r max-lg:border-b
            hover:-translate-y-6 hover:bg-gradient-to-b from-slate-500 to-slate-900 hover:scale-105 duration-300 hover:border-0 hover:rounded-3xl">
              <div class="text-white *:size-14 ">
                <svg stroke="currentColor" fill="none" stroke-width="1.5px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <div class="text-white font-semibold text-xl py-5">
                User Friendly
              </div>
              <div class="md:text-base text-sm text-black/70  text-white">
                Optimized for a smaller build size, faster dev compilation and dozens of other improvements.
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="size-full p-6 border-r max-lg:border-b
              hover:-translate-y-6 hover:bg-gradient-to-b from-slate-500 to-slate-900 hover:scale-105 duration-300 hover:border-0 hover:rounded-3xl">
              <div class="text-white *:size-14 ">
                <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M928 140H96c-17.7 0-32 14.3-32 32v496c0 17.7 14.3 32 32 32h380v112H304c-8.8 0-16 7.2-16 16v48c0 4.4 3.6 8 8 8h432c4.4 0 8-3.6 8-8v-48c0-8.8-7.2-16-16-16H548V700h380c17.7 0 32-14.3 32-32V172c0-17.7-14.3-32-32-32zm-40 488H136V212h752v416z"></path>
                </svg>
              </div>
              <div class="text-white font-semibold text-xl py-5">
                User Friendly
              </div>
              <div class="md:text-base text-sm text-black/70  text-white">
                Optimized for a smaller build size, faster dev compilation and dozens of other improvements.
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="size-full p-6 border-r max-sm:border-b
          hover:-translate-y-6 hover:bg-gradient-to-b from-slate-500 to-slate-900 hover:scale-105 duration-300 hover:border-0 hover:rounded-3xl">
              <div class="text-white *:size-14 ">
                <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M199.05,57.48A100.07,100.07,0,0,0,28,128v56a20,20,0,0,0,20,20H64a20,20,0,0,0,20-20V144a20,20,0,0,0-20-20H36.08A92,92,0,0,1,128,36h.7a91.75,91.75,0,0,1,91.22,88H192a20,20,0,0,0-20,20v40a20,20,0,0,0,20,20h16a20,20,0,0,0,20-20V128A99.43,99.43,0,0,0,199.05,57.48ZM64,132a12,12,0,0,1,12,12v40a12,12,0,0,1-12,12H48a12,12,0,0,1-12-12V132Zm156,52a12,12,0,0,1-12,12H192a12,12,0,0,1-12-12V144a12,12,0,0,1,12-12h28Z"></path>
                </svg>
              </div>
              <div class="text-white font-semibold text-xl py-5">
                User Friendly
              </div>
              <div class="md:text-base text-sm text-black/70  text-white">
                Optimized for a smaller build size, faster dev compilation and dozens of other improvements.
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="size-full p-6 border-r  max-sm:border-b
              hover:-translate-y-6 hover:bg-gradient-to-b from-slate-500 to-slate-900 hover:scale-105 duration-300 hover:border-0 hover:rounded-3xl">
              <div class="text-white *:size-14 ">
                <svg stroke="currentColor" fill="none" stroke-width="1.5px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <div class="text-white font-semibold text-xl py-5">
                User Friendly
              </div>
              <div class="md:text-base text-sm text-black/70  text-white">
                Optimized for a smaller build size, faster dev compilation and dozens of other improvements.
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- --------user-friendly-sec -->
  <!-- why us section start -->

  <div class="relative py-6 md:py-8 lg:py-10 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative">
      <p class="text-balance max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black md:w-1/2 mb-4
                "> <span>India’s Best School
        </span>
        <span> Management Software?</span>
      </p>
      <div class=" relative">
        <div class="flex w-full h-auto items-center flex-wrap">
          <div class="lg:w-[60%] pt-4 md:pt-0 lg:pe-10 pe-0 w-[100%] order-1">
            <p class="
                    max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black

                "> <span>What Is
              </span>
              <span>School Management Software?</span>
            </p>
            <div class="md:text-lg text-sm opacity-70 mt-3 mb-lg-1">
              School management software introduces a new platform by embedding new-edge technology into the educational
              sector. The digital platform is capable of managing the school management activities making them smarter.
              The comprehensive features of school management software not only reduce the workload of the institution’s
              employees but also streamline the major functionalities like fee collection, academic timetable
              scheduling, results declaration. School management can focus on other productive activities like
              increasing student enrollment ratio, embedding new ways of learning as they are relieved from the workload
              hassles.
            </div>
          </div>
          <div class="lg:w-[40%] flex items-center justify-center w-[100%]  overflow-hidden rounded-3xl order-2 ">
            <div class="aspect-[3/2.8] object-cover size-full *:size-full"> <img src="../../assets/img/whyUs.jpg" alt="Why Choose IMG Global Infotech for On-demand Food Delivery App Development?">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- why us section ends -->

  <!-- counter-start---- -->
  <section class="py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
      <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-5 mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="col-auto group" >
          <div id="experience" class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#ff7600]  border-2 border-orange-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-orange-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center items-center group-hover:scale-105 duration-300 w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-orange-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width=".6px" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <g id="Globe">
                    <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                  </g>
                </svg>
                <g id="Globe">
                  <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                </g>
                </svg>
              </div>
              
              
              <div id="count1" class="py-2 font-semibold text-xl text-center" ><span>22</span> <span>+</span></div>
              <div class="text-center  text-base leading-5 font-medium   text-orange-500">
                Years <br> Experience
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div id="clients" class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#06b6d4]  border-2 border-cyan-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-cyan-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center group-hover:scale-105 duration-300 items-center w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-cyan-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="184" cy="232" r="24"></circle>
                  <path d="M256.05 384c-45.42 0-83.62-29.53-95.71-69.83a8 8 0 0 1 7.82-10.17h175.69a8 8 0 0 1 7.82 10.17c-11.99 40.3-50.2 69.83-95.62 69.83z"></path>
                  <circle cx="328" cy="232" r="24"></circle>
                  <circle cx="256" cy="256" r="208" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                </svg>
              </div>
              <div id="count2" class="py-2 font-semibold text-xl text-center">1600+</div>
              <div class="text-center  text-base font-medium leading-5  text-cyan-500">
                Happy <br> Clients
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div id="retention" class="size-full bg-white flex relative  border-2 group-hover:[box-shadow:0px_0px_18px_-5px_#f4375e]  border-rose-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-rose-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center items-center group-hover:scale-105 duration-300 w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-rose-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width=".6px" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <g id="Globe">
                    <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                  </g>
                </svg>
                <g id="Globe">
                  <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                </g>
                </svg>
              </div>
              <div id="count3" class="py-2 font-semibold text-xl text-center">96%</div>
              <div class="text-center  text-base font-medium leading-5 text-rose-500">
                Client <br> Retention
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div id="reports" class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#d956ef]  border-2 border-fuchsia-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-fuchsia-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center items-center group-hover:scale-105 duration-300 w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-fuchsia-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fill="none" d="M0 0h24v24H0V0z"></path>
                  <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9 14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                  <circle cx="12" cy="16" r="1"></circle>
                  <path d="M11 7h2v7h-2z"></path>
                </svg>
              </div>
              <div id="count4" class="py-2 font-semibold text-xl text-center">1500+</div>
              <div class="text-center  text-base font-medium leading-5  text-fuchsia-500">
                Reports
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div id="trained" class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#ec4899]  border-2 border-pink-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-pink-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center items-center group-hover:scale-105 duration-300 w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-pink-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width=".6px" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <g id="Globe">
                    <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                  </g>
                </svg>
                <g id="Globe">
                  <path d="M14.645,2.428a8.1,8.1,0,0,0-1.61-.3,9.332,9.332,0,0,0-3.6.28l-.07.02a9.928,9.928,0,0,0,.01,19.15,9.091,9.091,0,0,0,2.36.34,1.274,1.274,0,0,0,.27.02,9.65,9.65,0,0,0,2.63-.36,9.931,9.931,0,0,0,.01-19.15Zm-.27.96a8.943,8.943,0,0,1,5.84,5.11h-4.26a13.778,13.778,0,0,0-2.74-5.35A8.254,8.254,0,0,1,14.375,3.388Zm-2.37-.09a12.78,12.78,0,0,1,2.91,5.2H9.075A12.545,12.545,0,0,1,12.005,3.3Zm3.16,6.2a13.193,13.193,0,0,1,0,5.01H8.845a12.185,12.185,0,0,1-.25-2.5,12.353,12.353,0,0,1,.25-2.51Zm-5.6-6.09.07-.02a9.152,9.152,0,0,1,1.16-.23A13.618,13.618,0,0,0,8.045,8.5H3.8A9,9,0,0,1,9.565,3.408Zm-6.5,8.6a8.71,8.71,0,0,1,.37-2.51h4.39a13.95,13.95,0,0,0-.23,2.51,13.757,13.757,0,0,0,.23,2.5H3.435A8.591,8.591,0,0,1,3.065,12.008Zm6.57,8.61a8.9,8.9,0,0,1-5.84-5.11h4.24a13.632,13.632,0,0,0,2.77,5.35A8.1,8.1,0,0,1,9.635,20.618Zm-.56-5.11h5.84a12.638,12.638,0,0,1-2.91,5.21A12.872,12.872,0,0,1,9.075,15.508Zm5.3,5.11a11.551,11.551,0,0,1-1.17.24,13.8,13.8,0,0,0,2.75-5.35h4.26A8.924,8.924,0,0,1,14.375,20.618Zm1.8-6.11a13.611,13.611,0,0,0,0-5.01h4.39a8.379,8.379,0,0,1,.37,2.51,8.687,8.687,0,0,1-.36,2.5Z"></path>
                </g>
                </svg>
              </div>
              <div id="count5" class="py-2 font-semibold text-xl text-center">20000+</div>
              <div class="text-center  text-base font-medium leading-5  text-pink-500">
                Professional <br> Trained
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- counter-end---- -->


  <!-- tabs start -->
  <div class="container mx-auto max-w-7xl md:px-6 lg:px-8 py-6 sm:px-6">
    <div class="  ">
      <div class=" mx-auto max-w-7xl z-10 mb-4">
        <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
          <span class="font-normal">The Key Benefit Is You Can Save Money, Save Lots Of Time & Making Best Of Resources.</span>
          <span class="font-bold text-theme1"></span>
        </p>

      </div>
      <div class="">
        <div class="mb-5 sm:mb-10 lg:mb-0  lg:order-2 bg-orange-50 px-4 sm:px-8 rounded-3xl">
          <div class="relative">

          </div>

          <nav class="flex flex-nowrap overflow-x-auto py-4 gap-4 my-5" aria-label="Tabs" role="tablist" aria-orientation="vertical">
            <button type="button" class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Storage</span>

                </span>
              </span>
            </button>

            <button type="button" class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Storage</span>

                </span>
              </span>
            </button>

            <button type="button" class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Storage</span>

                </span>
              </span>
            </button>

            <button type="button" class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-4" aria-controls="tabs-with-card-4" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Storage</span>

                </span>
              </span>
            </button>
            <button type="button" class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-5" aria-controls="tabs-with-card-5" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Storage</span>

                </span>
              </span>
            </button>
          </nav>
        </div>

        <div class="mt-5">
          <div id="tabs-with-card-1" role="tabpanel" class="" aria-labelledby="tabs-with-card-item-1">
            <div class="grid grid-cols-3 gap-2">

              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-with-card-2" class="hidden " role="tabpanel" aria-labelledby="tabs-with-card-item-2">
          <div class="grid grid-cols-3 gap-2">

            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-with-card-3" class="hidden " role="tabpanel" aria-labelledby="tabs-with-card-item-3">
          <div class="grid grid-cols-3 gap-2">

            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tabs-with-card-4" class="hidden " role="tabpanel" aria-labelledby="tabs-with-card-item-4">
          <div class="grid grid-cols-3 gap-2">

            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3"> Management System</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tabs-with-card-5" class="hidden " role="tabpanel" aria-labelledby="tabs-with-card-item-3">
          <div class="grid grid-cols-3 gap-2">

            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
            <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
              <div class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
              </div>
              <div class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
              </div>
              <div class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
              </div>
              <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
              </div>
              <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold mb-3">Our Management</span>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:size-7">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Follow up details</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tabs end -->

  <!-- key benifit tabs -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabs = document.querySelectorAll('[data-hs-tab]');
      const tabPanels = document.querySelectorAll('[role="tabpanel"]');

      // Function to set active tab
      const setActiveTab = (tab) => {
        // Remove active classes from all tabs
        tabs.forEach(t => {
          t.classList.remove('bg-white', 'shadow-md', 'border-transparent', 'text-blue-600');
          t.setAttribute('aria-selected', 'false');
        });

        // Hide all tab panels
        tabPanels.forEach(panel => panel.classList.add('hidden'));

        // Add active classes to the selected tab
        tab.classList.add('bg-white', 'shadow-md', 'border-transparent', 'text-blue-600');
        tab.setAttribute('aria-selected', 'true');

        // Show the associated tab panel
        const contentId = tab.getAttribute('data-hs-tab');
        document.querySelector(contentId).classList.remove('hidden');
      };

      // Set the first tab as active by default
      const firstTab = tabs[0];
      setActiveTab(firstTab);

      // Add click event listeners to all tabs
      tabs.forEach(tab => {
        tab.addEventListener('click', () => {
          setActiveTab(tab);
        });
      });
    });
  </script>

<script>
//     document.addEventListener("DOMContentLoaded", function() {
//     const stats = {
//         experience: 22,
//         clients: 1600,
//         retention: 96,
//         reports: 1500,
//         trained: 20000
//     };

//     Object.keys(stats).forEach(key => {
//         let element = document.getElementById(key).firstElementChild;
//         animateValue(element, 0, stats[key], 2000);
//     });
// });

// function animateValue(obj, start, end, duration) {
//     let startTimestamp = null;
//     const step = (timestamp) => {
//         if (!startTimestamp) startTimestamp = timestamp;
//         const progress = Math.min((timestamp - startTimestamp) / duration, 1);
//         obj.innerHTML = Math.floor(progress * (end - start) + start);
//         if (progress < 1) {
//             window.requestAnimationFrame(step);
//         }
//     };
//     window.requestAnimationFrame(step);
// }


document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, 22 , 1000);
 counter("count2", 0, 100, 1000);
 counter("count3", 0, 21, 1000);
  counter("count4", 10, 56, 1000);
});
</script>


</body>

</html>