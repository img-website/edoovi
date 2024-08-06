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
          <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a>
          </li>
          <li class="relative group"><a href=""
              class="flex items-center font-medium text-base active:text-slate-900 text-slate-600">Our Solutions
              <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                  width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z">
                  </path>
                </svg>
              </span>
            </a>
            <div
              class="bg-white shadow-md border-gray-100 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
              <ul>
                <li
                  class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="">School Software</a>
                </li>
                <li
                  class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="">Insitute Software</a>
                </li>
                <li
                  class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="">College Software</a>
                </li>
                <li
                  class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="">University Software</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
          <li><a href="" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
        </ul>
        <button
          class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant
          Us</button>
      </div>

      <input type="checkbox" class="peer/sideToggle hidden" name="sideToggle" id="sideToggle">

      <label for="sideToggle" class="-m-2.5 inline-flex items-center md:hidden justify-center rounded-md p-2.5 ">
        <span class="sr-only">Open menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          aria-hidden="true">
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
              <svg class="h-6 w-6 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </label>
          </nav>
          <div class="flex flex-col !content-between">
            <ul>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">Home</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">About Us</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">School Software</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">College Software</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">Insitute Software</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">University Software</a>
              </li>

              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">Blogs</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">Clients</a>
              </li>
              <li
                class=" hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">Contact</a>
              </li>
            </ul>
            <div class="mt-auto ">
              <div class="flex justify-between px-4 pt-10 bg-white w-full">
                <button
                  class="h-max bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white">Contant
                  Us</button>
                <button
                  class="h-max mt-auto bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white ">Email
                  Us</button>
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
    <div
      class="grid p-7 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center mx-auto max-w-7xl lg:px-8 px-6 h-full ">
      <div class="md:col-span-4">
        <h1 class="block text-3xl font-bold text-theme2">Unlock Digital Potential</h1>
        <div class="text-slate-900 md:text-6xl sm:text-5xl text-4xl font-semibold "> USchool Management Software With 
           <span class="text-orange-500">Cloud
           Based School ERP</span></div>
      </div>

      <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
        <img class="size-full rounded-3xl"
          src="https://images.unsplash.com/photo-1665686376173-ada7a0031a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=700&q=80"
          alt="Hero Image">
      </div>
    </div>
  </div>
  <!-- hero section ends -->
  <!-- why us section start -->

  <section class="py-20  relative overflow-hidden">
          <div class="absolute inset-0 size-full ">
            <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/bg/banner-3-bg-1.png" alt="" class="size-full">
        </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full relative z-10">
      <div class="grid grid-cols-12 gap-y-10 lg:gap-8 group items-center">
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
  <!-- why us section ends -->
  <!-- tabs start -->
  <div class="container mx-auto max-w-7xl md:px-6 lg:px-8 py-6 sm:px-6">
    <div class="  ">
      <div class=" mx-auto max-w-7xl px-6 lg:px-8 z-10 mb-4">
        <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
          <span class="font-normal text-balance.">The Key Benefit Is You Can Save Money, Save Lots Of Time & Making Best Of Resources.</span>
          <span class="font-bold text-theme1"></span>
        </p>

      </div>
      <div class="max-w-7xl mx-auto px-6 lg:px-8  ">
        <div class="mb-5 sm:mb-10 lg:mb-0  lg:order-2 bg-orange-50 px-4 sm:px-8 rounded-3xl">
          <div class="relative">

          </div>

          <nav class="flex flex-nowrap overflow-x-auto py-4 gap-4 my-5" aria-label="Tabs" role="tablist"
            aria-orientation="vertical">
            <button type="button"
              class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90"
              id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-1"
              aria-controls="tabs-with-card-1" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2"
                  viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Core Modules</span>

                </span>
              </span>
            </button>

            <button type="button"
              class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90"
              id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2"
              aria-controls="tabs-with-card-2" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2"
                  viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Resource Management</span>

                </span>
              </span>
            </button>

            <button type="button"
              class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90"
              id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-3"
              aria-controls="tabs-with-card-3" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2"
                  viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Communication Management</span>

                </span>
              </span>
            </button>

            <button type="button"
              class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90"
              id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-4"
              aria-controls="tabs-with-card-4" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2"
                  viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Data Managemen</span>

                </span>
              </span>
            </button>
            <button type="button"
              class="text-start lg:hover:bg-purple-50 shadow-xl focus:outline-none px-4 py-2 rounded-full focus:text-white bg-violet-50 focus:bg-gradient-to-b focus:from-violet-300 focus:to-violet-500/90"
              id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-5"
              aria-controls="tabs-with-card-5" role="tab">
              <span class="flex gap-x-3 items-center flex-nowrap">
                <svg class="shrink-0 size-6 md:size-7 " stroke="currentColor" fill="none" stroke-width="2"
                  viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
                </svg>
                <span class="grow">
                  <span class="block text-sm font-medium text-nowrap ">Integrations</span>

                </span>
              </span>
            </button>
          </nav>
        </div>

        <div class="mt-5 max-w-7xl mx-auto">
          <div id="tabs-with-card-1" role="tabpanel" class=""
            aria-labelledby="tabs-with-card-item-1">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 ">

              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Admission Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
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

        <div id="tabs-with-card-2" class="hidden " role="tabpanel"
          aria-labelledby="tabs-with-card-item-2">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 ">

<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
<div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
  <div
    class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
  </div>
  <div
    class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
  </div>
  <div
    class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
  </div>
  <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
  </div>
  <div class="z-10 flex flex-col justify-evenly w-full h-full">
    <span class="text-2xl font-bold mb-3"> optio obcaecati.</span>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Inquiry</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Form</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Direct Link with student management</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Configurable with website for online admission</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="*:size-7">
        <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
          height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
          </path>
        </svg>
      </span>
      <span class="text-sm leading-tight">Admission Follow up details</span>
    </div>
  </div>
</div>
</div>
        </div>

        <div id="tabs-with-card-3" class="hidden " role="tabpanel"
          aria-labelledby="tabs-with-card-item-3">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 ">

              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> incidunt numquam.</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="tabs-with-card-4" class="hidden " role="tabpanel"
          aria-labelledby="tabs-with-card-item-4">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 ">

              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3"> Management System</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="tabs-with-card-5" class="hidden " role="tabpanel"
          aria-labelledby="tabs-with-card-item-3">
           <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 ">

              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Follow up details</span>
                  </div>
                </div>
              </div>
              <div class="p-4 duration-500 shadow-2xl group bg-white overflow-hidden z-50 relative rounded-3xl text-neutral-900 flex flex-col justify-evenly before:absolute before:size-full before:bg-white/70 before:inset-0 before:backdrop-blur-sm before:z-10">
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-violet-400/50 right-1 -bottom-24">
                </div>
                <div
                  class="absolute  bg-orange-400/50  blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 group-hover:bg-orange-400/50 right-12 bottom-12">
                </div>
                <div
                  class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 group-hover:bg-orange-400/50 bg-orange-400/30  right-1 -top-12">
                </div>
                <div class="absolute bg-violet-500/30 blur duration-500 group-hover:-translate-y-28 group-hover:blur-none w-24 h-24 group-hover:bg-violet-700/50 rounded-full">
                </div>
                <div class="z-10 flex flex-col justify-evenly w-full h-full">
                  <span class="text-2xl font-bold mb-3">Our Management</span>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:size-7">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512"
                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
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
</body>

</html>