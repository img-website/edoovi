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
      <a href="../../index.php" class="sm:size-16 size-14 *:size-full">
        <img src="../../assets/img/edoovi.webp" alt="">
      </a>
      <div class="md:flex items-center gap-8 hidden ">
        <ul class="flex gap-8">
          <li><a href="../../index.php" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Home</a></li>
          <li><a href="../../about" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
          <li class="relative group"><a href="./oursolutions" class="flex items-center font-medium text-base activeactive [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900  active text-slate-600">Our Solutions
              <span class="*:size-6 *:group-hover:rotate-180 *:duration-300">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
                </svg>
              </span>
            </a>
            <div class="bg-white shadow-md border-gray-100 border translate-y-10  opacity-0 invisible duration-300 !w-60 absolute group-hover:translate-y-0  group-hover:opacity-100 group-hover:visible">
              <ul>
                <li class="active [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="">School Software</a>
                </li>
                <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="../insitute-software">Insitute Software</a>
                </li>
                <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="../college-software">College Software</a>
                </li>
                <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                  <a href="../university-software">University Software</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="../../blogs" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
          <li><a href="../../clients" class="inline-flex font-medium text-base active:text-slate-900 text-slate-600">Clients</a></li>
        </ul>
        <a href="../../contact" class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Contant Us</a>
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
            <a href="../../index.php" class="*:size-14">
              <img src="../../assets/img/edoovi.webp" alt="">
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
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="../../index.php">Home</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="../../about">About Us</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="">School Software</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="./college-software">College Software</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="./insitute-software">Insitute Software</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="./university-software">University Software</a>
              </li>

              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="../../blogs">Blogs</a>
              </li>
              <li class=" [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="../../clients">Clients</a>
              </li>
              <li class="  [&.active]:bg-violet-400 [&.active]:text-white  hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                <a href="../../contact">Contact</a>
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
  <div class="relative lg:h-full md:pt-28 pt-24 pb-10 ">
    <div class="mx-auto max-w-7xl lg:px-8 px-6">
      <div class="grid sm:p-7 p-5 bg-purple-50 rounded-3xl md:grid-cols-7 md:gap-x-8 xl:gap-x-12 md:items-center h-full ">
        <div class="md:col-span-4">
          <div class="text-slate-900 xl:text-6xl md:text-5xl sm:text-4xl text-3xl font-semibold "> School Management Software <span class="text-orange-500">With Cloud
              Based School ERP</span></div>
        </div>

        <div class="md:col-span-3 aspect-[1/0.5] md:aspect-[1/0.9] mt-5 md:mt-0">
          <img class="size-full rounded-3xl object-cover border-8 border-white" src="../../assets/img/photo1.jfif" alt="Hero Image">
        </div>
      </div>
    </div>
  </div>
  <!-- hero section ends -->


  <!-- -------schl-softwre -->

  <section class="py-10 lg:py-16 relative overflow-hidden">
    <div class="absolute inset-0 size-full ">
      <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/bg/banner-3-bg-1.png" alt="" class="size-full">
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full relative z-10">
      <p class="mb-10 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-balance tracking-[-0.04em] text-slate-900  font-semibold">
        <span class="font-semibold">We Offer End-To-End Solutions For</span> <br>
        <span class="font-bold text-slate-900">Every Phase Of School Management.</span>
      </p>
      <div class="grid grid-cols-12 items-center gap-y-10 lg:gap-8 group">
        <div class="col-span-12 lg:col-span-6">
          <div class="size-full relative flex items-center justify-center group">
            <div class=" h-full w-[70%]">
              <img class="aspect-[1/1]  object-cover rounded-3xl" src="../../assets/img/students.avif" alt="">
            </div>

            <div class=" absolute -top-7  z-[3] w-[40%] right-0 sm:group-hover:right-[58%]  duration-300 ">
              <img class="aspect-[1/.8] pointer-events-none rounded-3xl object-cover" src="../../assets/img/students4.avif" alt="">
            </div>
            <div class=" absolute -bottom-5 pointer-events-none z-[3] w-[40%] left-0 sm:group-hover:left-[58%]  duration-300 ">
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

  <section class="py-6 md:py-8 lg:py-10">
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
            <div class="text-white *:sm:size-14 *:size-10 ">
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
            <div class="text-white *:sm:size-14 *:size-10 ">
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
            <div class="text-white *:sm:size-14 *:size-10 ">
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
            <div class="text-white *:sm:size-14 *:size-10 ">
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

  <div class="relative py-8 md:py-10 lg:py-16 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative">

      <div class=" relative">
        <div class="flex w-full h-auto items-center flex-wrap">
          <div class="lg:w-[40%] flex items-center justify-center w-[100%]  overflow-hidden rounded-3xl">
            <div class="aspect-[3/2.8] object-cover size-full *:size-full *:object-cover"> <img src="../../assets/img/managment.jfif" alt="img">

            </div>
          </div>
          <div class="lg:w-[60%] pt-4 md:pt-0 lg:ps-10 pe-0 w-[100%]">
            <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-balance tracking-[-0.04em] text-slate-900  font-semibold">
              <span class="font-semibold">The Importance Of The School Management System? </span> <br>
              <span class="font-bold text-slate-900"></span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-2 font-boldtext-ellipsis line-clamp-[10] overflow-hidden">
              In today’s world, administration & management of organizations, particularly educational institutions, has become a tedious and complex task. There are various activities and curriculum tasks, which needs to handle with careful planning, to the point control of the administrative process and systematic approach to help students, their parents, teachers and even the management of the educational institution. Edoovi school management System is a powerful tool to manage all your administrative task with a single line integrated system.
              In today’s world, administration & management of organizations, particularly educational institutions, has become a tedious and complex task. There are various activities and curriculum tasks, which needs to handle with careful planning, to the point control of the administrative process and systematic approach to help students, their parents, teachers and even the management of the educational institution. Edoovi school management System is a powerful tool to manage all your administrative task with a single line integrated system.
              In today’s world, administration & management of organizations, particularly educational institutions, has become a tedious and complex task. There are various activities and curriculum tasks, which needs to handle with careful planning, to the point control of the administrative process and systematic approach to help students, their parents, teachers and even the management of the educational institution. Edoovi school management System is a powerful tool to manage all your administrative task with a single line integrated system.
            </div>
          </div>

        </div>
        <div class="absolute  bottom-[-40px] left-[-40px] [background:radial-gradient(circle,_rgba(255,231,_186,_0.5),rgba(255,200,_200,_0.5))] blur-2xl -z-10 md:size-60 size-28"></div>
      </div>
    </div>
  </div>
  <!-- why us section ends -->

  <!-- counter-start---- -->
  <section class="py-6 md:py-8 lg:py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
      <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-5 mx-auto  relative">
        <div class="col-auto group">
          <div class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#ff7600]  border-2 border-orange-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-orange-500 after:-bottom-2 after:-left-2">
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


              <div class="py-2 font-semibold text-xl text-center flex items-center">
                <div id="count1">
                  <span>22</span>
                </div>
                <div>
                  <span>+</span>
                </div>
              </div>
              <div class="text-center  text-base leading-5 font-medium   text-orange-500">
                Years <br> Experience
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#06b6d4]  border-2 border-cyan-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-cyan-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center group-hover:scale-105 duration-300 items-center w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-cyan-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="184" cy="232" r="24"></circle>
                  <path d="M256.05 384c-45.42 0-83.62-29.53-95.71-69.83a8 8 0 0 1 7.82-10.17h175.69a8 8 0 0 1 7.82 10.17c-11.99 40.3-50.2 69.83-95.62 69.83z"></path>
                  <circle cx="328" cy="232" r="24"></circle>
                  <circle cx="256" cy="256" r="208" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                </svg>
              </div>

              <div class="py-2 font-semibold text-xl text-center flex items-center">
                <div id="count2">
                  <span>1600</span>
                </div>
                <div>
                  <span>+</span>
                </div>
              </div>
              <div class="text-center  text-base font-medium leading-5  text-cyan-500">
                Happy <br> Clients
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div class="size-full bg-white flex relative  border-2 group-hover:[box-shadow:0px_0px_18px_-5px_#f4375e]  border-rose-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-rose-500 after:-bottom-2 after:-left-2">
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
              <div class="py-2 font-semibold text-xl text-center flex items-center">
                <div id="count3">
                  <span>96</span>
                </div>
                <div>
                  <span>%</span>
                </div>
              </div>
              <div class="text-center  text-base font-medium leading-5 text-rose-500">
                Client <br> Retention
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#d956ef]  border-2 border-fuchsia-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-fuchsia-500 after:-bottom-2 after:-left-2">
            <div class="flex flex-col justify-center items-center group-hover:scale-105 duration-300 w-full p-2 border-r-4 border-b-4 border-slate-200  bg-slate-100 rounded-3xl  m-4">
              <div class="*:size-14  text-fuchsia-500 text-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fill="none" d="M0 0h24v24H0V0z"></path>
                  <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9 14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                  <circle cx="12" cy="16" r="1"></circle>
                  <path d="M11 7h2v7h-2z"></path>
                </svg>
              </div>
              <div class="py-2 font-semibold text-xl text-center flex items-center">
                <div id="count4">
                  <span>1500</span>
                </div>
                <div>
                  <span>+</span>
                </div>
              </div>
              <div class="text-center  text-base font-medium leading-5  text-fuchsia-500">
                Reports
              </div>

            </div>
          </div>
        </div>
        <div class="col-auto group">
          <div class="size-full bg-white flex relative group-hover:[box-shadow:0px_0px_18px_-5px_#ec4899]  border-2 border-pink-500 before:absolute before:w-1/3 before:h-1/2 rounded-3xl   after:absolute after:size-[40%] after:rounded-bl-3xl after:border-l-[12px] after:border-b-[12px] after:border-pink-500 after:-bottom-2 after:-left-2">
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
              <div class="py-2 font-semibold text-xl text-center flex items-center">
                <div id="count5">
                  <span>20000</span>
                </div>
                <div>
                  <span>+</span>
                </div>
              </div>
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
  <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-8 md:py-10 lg:py-16">
    <div class="  ">
      <div class=" mx-auto max-w-7xl z-10 mb-4">
        <p class= " text-balance max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
          <span class="font-semibold">The Key Benefit Is You Can Save Money, </span>
      
          <span class="font-semibold"> Save Lots Of Time & Making Best Of Resources.</span>
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
            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">

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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Admission Form</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Direct Link with student management</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                        </path>
                      </svg>
                    </span>
                    <span class="text-sm leading-tight">Configurable with website for online admission</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="*:sm:size-7 *:size-5">
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
          <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">

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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
          <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">

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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
          <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">

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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
          <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">

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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Inquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Admission Form</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Convert inquiry into confirmation</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Direct Link with student management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="1.5px" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                      <path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                      </path>
                    </svg>
                  </span>
                  <span class="text-sm leading-tight">Configurable with website for online admission</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="*:sm:size-7 *:size-5">
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

  <!-- accordion start  -->

  <section class="bg-white py-6 md:py-8 lg:py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
      <div class="flex max-md:flex-col gap-5 items-center relative *:relative *:z-20 overflow-hidden sm:py-16 py-14 rounded-3xl">
        <img class="w-full aspect-[3/1] object-cover !absolute inset-0 !z-10 rounded-3xl shadow-xl h-full shadow-gray-900/50 overflow-hidden" src="  ../../assets/img/faq.jpg">
        <div class="md:w-5/12 w-full shrink-0 h-full">
        </div>
        <div class="grow md:p-7 p-4 bg-white backdrop-blur-md rounded-l-3xl">
          <div class="w-full">
            <div class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold text-balance">
              Get access to frequently asked & questions and answers</div>
            <div class="md:text-base text-sm text-black/70 mt-2 font-semibold text-balance mb-5">
              Have any questions in mind?</div>
            <div>

              <div class="relative  flex flex-col mb-3">
                <input class="peer/mm hidden" type="radio" checked="" name="mmMenu" id="mmCompany 0" 0="">
                <label for="mmCompany 0" class="flex items-center gap-x-[2px] bg-gradient-to-r from-violet-500 via-violet-800 to-violet-500  sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5  after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45  after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-violet-900 peer-checked/mm:via-violet-500 peer-checked/mm:to-violet-900 peer-checked/mm:w-full peer-checked/mm:after:top-6 peer-checked/mm:rounded-full  ">
                  Which Are The Most Important Features Of School ERP Software?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200 p-6 pt-12 peer-checked/mm:block hidden">
                  <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                    <div class="w-full text-xs xl:text-sm ">
                      <div class="flex items-center gap-x-3 py-2 relative">
                        <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                          Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the first item's accordion body.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative  flex flex-col mb-3">
                <input class="peer/mm hidden" type="radio" checked="" name="mmMenu" id="mmCompany 1" 1="">
                <label for="mmCompany 1" class="flex items-center gap-x-[2px] bg-gradient-to-r from-violet-500 via-violet-800 to-violet-500  sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5  after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45  after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-violet-900 peer-checked/mm:via-violet-500 peer-checked/mm:to-violet-900 peer-checked/mm:w-full peer-checked/mm:after:top-6 peer-checked/mm:rounded-full   ">
                  How Much Does A School Software Cost?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200 p-6 pt-12 peer-checked/mm:block hidden">
                  <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                    <div class="w-full text-xs xl:text-sm ">
                      <div class="flex items-center gap-x-3 py-2 relative">
                        <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                          Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative  flex flex-col mb-3">
                <input class="peer/mm hidden" type="radio" checked="" name="mmMenu" id="mmCompany 2" 2="">
                <label for="mmCompany 2" class="flex items-center gap-x-[2px] bg-gradient-to-r from-violet-500 via-violet-800 to-violet-500  sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6 after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5  after:border-solid after:border-white after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45  after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-violet-900 peer-checked/mm:via-violet-500 peer-checked/mm:to-violet-900 peer-checked/mm:w-full peer-checked/mm:after:top-6 peer-checked/mm:rounded-full   ">
                  Are Cloud Based School Management Software Secure?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200 p-6 pt-12 peer-checked/mm:block hidden">
                  <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                    <div class="w-full text-xs xl:text-sm ">
                      <div class="flex items-center gap-x-3 py-2 relative">
                        <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                          Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- accordion end  -->
  <!-- logo section  -->

  <div class="overflow-hidden py-6 md:py-8 lg:py-10">
    <div class="relative container mx-auto max-w-7xl px-6 lg:px-8 z-10 mb-10">
      <p class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-slate-900  font-semibold">
        <span class="font-semibold">Our Esteemed </span>
        <span class="font-bold text-slate-900">Clients</span>
      </p>
      <div class="md:text-base text-sm text-black/70 mt-2 font-bold">
        Embark on an Automation Journey with Us
      </div>
    </div>
    <div class="mt-3 sm:mt-8">
      <div class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
          <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper03.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper01.png" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper05.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper03.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper04.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper05.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper03.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
    <div class="mt-3 ">
      <div class="swiper  mySwiper3 swiper-initialized swiper-horizontal swiper-backface-hidden" dir="rtl">
        <div class="swiper-wrapper !ease-linear" id="swiper-wrapper-dd31f7415a72d890" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-382.4px, 0px, 0px);">
          <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0201.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 7" data-swiper-slide-index="0" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0202.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0203.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 7" data-swiper-slide-index="2" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0201.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="3" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0202.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="5 / 7" data-swiper-slide-index="4" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0203.svg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 176.2px;">
            <div class="size-full border rounded-3xl px-4 py-2 shadow-sm duration-300 hover:scale-95">
              <div class="img sm:h-[83px] h-16 w-auto">
                <img class="size-full object-contain" src="../../assets/img/swiper0201.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>

  <!-- logo section end  -->
  <!-- cta start -->
  <div class="md:py-16 sm:py-10 py-8 select-none">
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
                    <div class="size-full rounded-3xl p-4 relative max-sm:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] sm:hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-1">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 ms-auto">
                                    <div class="*:text-sm">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm font-medium leading-tight">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-black font-medium text-sm lg:text-base inline-flex items-center gap-1 group before:absolute before:inset-0 before:z-10 " href="../../blogs/blogInner/">Read more
                                    <div class="group-hover:translate-x-2 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-6 lg:row-span-2">
                    <div class="relative size-full rounded-3xl p-4  max-sm:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] sm:hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full lg:aspect-[1/.8] object-cover rounded-3xl" src="../../assets/img/award1.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 ms-auto">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
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
                                <a class="text-sm lg:text-base flex items-center  gap-1 group before:absolute before:inset-0 before:z-10" href="../../blogs/blogInner/">Read more
                                    <div class="group-hover:translate-x-2 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="relative size-full rounded-3xl p-4  max-sm:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] sm:hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 ms-auto">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-black font-medium text-sm lg:text-base inline-flex items-center gap-1 group before:absolute before:inset-0 before:z-10" href="../../blogs/blogInner/">Read more
                                    <div class="group-hover:translate-x-2 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="relative size-full rounded-3xl p-4  max-sm:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] sm:hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../../assets/img/award1.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 ms-auto">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-black font-medium text-sm lg:text-base inline-flex items-center gap-1 group before:absolute before:inset-0 before:z-10" href="../../blogs/blogInner/">Read more
                                    <div class="group-hover:translate-x-2 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="relative size-full rounded-3xl p-4  max-sm:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)] sm:hover:[box-shadow:0px_0px_32px_0px_rgba(36,40,46,.12)]">
                        <div class=" w-full rounded-3xl">
                            <img class="size-full object-cover rounded-3xl" src="../../assets/img/award2.png" alt="">
                        </div>
                        <div class="text-box  ">
                            <div class="date flex py-2 lg:py-4 items-center gap-2 lg:gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        09/01/2024
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 ms-auto">
                                    <div class="*:text-sm">
                                       <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
                                    </div>
                                    <div class="text-xs lg:text-sm leading-normal font-medium">
                                        Rupendra Chauhan
                                    </div>
                                </div>
                            </div>
                            <div class="heading text-lg lg:text-xl font-semibold pb-2 lg:pb-4 ">
                                Leading the Way in School ERP Software Solutions
                            </div>
                            <div class="text-sm text-ellipsis   line-clamp-2 overflow-hidden">
                                Embarking on the exhilarating journey of creating a social media app like TikTok is a venture brimming with boundless possibilities and untapped potential. As we dive into the realm of social app development, the burning
                            </div>
                            <div class="pt-2 lg:pt-4">
                                <a class="text-black font-medium text-sm lg:text-base inline-flex items-center gap-1 group before:absolute before:inset-0 before:z-10" href="../../blogs/blogInner/">Read more
                                    <div class="group-hover:translate-x-2 duration-300 *:size-4">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center sm:mt-10 mt-5">
                <button class="bg-gradient-to-b from-violet-300 to-violet-500/90 py-2 px-4 rounded-full shadow-xl shadow-violet-200/95 font-medium text-base text-white duration-300 hover:[box-shadow:0px_0px_10px_0px_#e39943] hover:bg-gradient-to-r hover:from-[#fdad50] hover:via-[#ffa944] hover:to-[#ff971d]">Explore More</button>
            </div>
        </div>
    </section>

  <!-- blog end  -->
  <!-- footer start -->
  <section class="py-10 bg-slate-800 sm:pt-16 lg:pt-24 relative">
    <div class="Edoovipx-4 mx-auto px-6 lg:px-8 max-w-7xl">
      <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 md:gap-y-16 gap-y-10 gap-x-12">
        <div class=" lg:pr-8 *:inline-block">
          <a href="../../index.php">
            <img class="w-auto h-16" src="../../assets/img/edoovi.webp" alt="" />
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
              <a href="../../about/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> About Edoovi </a>
            </li>

            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../clients/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Clients </a>
            </li>

            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../privacy-policy/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500">Privacy Policy </a>
            </li>

            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../terms-conditions/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Terms Of Use </a>
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
              <a href="../../oursolutions/school-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> School Software </a>
            </li>

            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../oursolutions/college-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> College Software </a>
            </li>

            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../oursolutions/university-software/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> University Software </a>
            </li>
            <li class="flex items-center gap-2 group">
              <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rotate-45 bg-violet-500 opacity-75"></span>
                <span class="relative inline-flex rotate-45 h-3 w-3 bg-violet-500"></span>
              </span>
              <a href="../../blogs/" title="" class="flex sm:text-base text-sm text-white transition-all duration-200 hover:text-orange-500 focus:text-orange-500"> Blogs </a>
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
  <!-- footer Ends -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
      counter("count1", 0, 22, 1000);
      counter("count2", 0, 160, 1000);
      counter("count3", 0, 96, 1000);
      counter("count4", 0, 150, 1000);
      counter("count5", 0, 200, 100);

    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper2", {
      loop: true,
      speed: 4000,
      slidesPerView: "auto",
      centeredSlides: false,
      allowTouchMove: false,
      // slidesPerView: 3,
      spaceBetween: 10,
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
      spaceBetween: 10,
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


</body>

</html>