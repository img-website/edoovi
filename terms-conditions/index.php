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
                    <li><a href="../about" class="[&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">About Us</a></li>
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
                                <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/school-software">School Software</a>
                                </li>
                                <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/insitute-software">Insitute Software</a>
                                </li>
                                <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/college-software">College Software</a>
                                </li>
                                <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                    <a href="../oursolutions/university-software">University Software</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../blogs" class="active [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 inline-flex font-medium text-base active:text-slate-900 text-slate-600">Blogs</a></li>
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
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="/">Home</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="./about/">About Us</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/school-software">School Software</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/college-software/">College Software</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/insitute-software/">Insitute Software</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../oursolutions/university-software/">University Software</a>
                            </li>

                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../blogs/">Blogs</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
                                <a href="../clients/">Clients</a>
                            </li>
                            <li class=" [&.active]:text-slate-950 [&.active]:border-b-[2px] [&.active]:border-b-slate-900 hover:bg-violet-400 w-full duration-300 text-slate-600 font-semibold px-4 py-2 hover:text-white border-b border-slate-200">
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
  <section class='relative  sm:h-[45vh] h-[40vh] bg-gray-50 sm:mt-24 mt-20'>
    <div class='absolute inset-0 after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-tr from-slate-900/50 via-slate-900/50 to-slate-900'>
        <img src="https://img.freepik.com/free-photo/standard-quality-control-collage-concept_23-2149595831.jpg?t=st=1722930680~exp=1722934280~hmac=3d894c6e028aaae6eef686a28a8bf2a3781dcf10369c45955b58fac123325834&w=740" alt="banner" class='size-full object-cover' />
    </div> 
        <div class='mx-auto max-w-7xl lg:px-8 sm:px-6 px-4  h-full w-full relative z-10 '>
            <div class='flex items-center justify-center text-center h-full'>
            <div class='w-full'>
                <div class='text-white  lg:text-5xl sm:text-4xl text-3xl font-medium leading-tight'>Terms & Conditions </div>
                <div class='lg:text-xl sm:text-lg text-slate-800 py-5'>
                <ul class='flex items-center justify-center'>
                    <li>
                    <Link>
                        <a href="index.php" class=" text-white flex items-center lg:text-base text-sm font-medium duration-300 hover:text-theme1">
                            Home <span class='ps-2'>/</span>
                        </a>
                    </Link>
                    </li>
                    <li class='flex ps-2 items-center lg:text-base text-sm font-medium duration-300 text-white'>
                        Terms & Conditions
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
</section> 
<section class="relative lg:px-8 px-6 md:py-16 py-10">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-bold text-center text-gray-800">Terms & Conditions</h1>
            <!-- <h2 class="text-2xl font-semibold text-center text-gray-700 mt-4">An Arangetram Journey in Bharatanatyam</h2> -->
                <p class="text-gray-600 mt-4">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
                <p class="text-gray-600 mt-4">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                </p>
            <section class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700">Where can I get some?</h3>
                <ul class="text-gray-600 mt-4">
                    <li class="list-disc ms-3">If you are going to use a passage of Lorem Ipsum </li>
                    <li class="list-disc ms-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                    <li class="list-disc ms-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</li>
                    <li class="list-disc ms-3">If you are going to use a passage of Lorem Ipsum</li>
                    <li class="list-disc ms-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
              
                </ul>
            </section>
            
            <section class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700">Management of personal data</h3>
                <p class="text-gray-600 mt-4">
                    You can view or edit your personal data online for many of our services. You can also make choices about our collection and use of your data. How you can access or control your personal data will depend on which services you use. You can choose whether you wish to receive promotional communications from our web site by email, SMS, physical mail, and telephone. If you receive promotional email or SMS messages from us and would like to opt out, you can do so by following the directions in that message.
                </p>
                <p class="text-gray-600 mt-4">
                    You can also make choices about the receipt of promotional email, telephone calls, and postal mail by visiting and signing into Company Promotional Communications Manager, which allows you to update contact information, manage contact preferences, opt out of email subscriptions, and choose whether to share your contact information with our partners. These choices do not apply to mandatory service communications that are part of certain web site services.
                </p>
            </section>
            
            <section class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700">Information We Collect</h3>
                <p class="text-gray-600 mt-4">
                    Our store collects data to operate effectively and provide you the best experiences with our services. You provide some of this data directly, such as when you create a personal account. We get some of it by recording how you interact with our services by, for example, using technologies like cookies, and receiving error reports or usage data from software running on your device. We also obtain data from third parties (including other companies). For example, we supplement the data we collect by purchasing demographic data from other companies. We also use services from other companies to help us determine a location based on your IP address in order to customize certain services to your location. The data we collect depends on the services and features you use.
                </p>
            </section>
            
            <section class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700">How We Use Your Information</h3>
                <p class="text-gray-600 mt-4">
                Our web site uses the data we collect for three basic purposes: to operate our business and provide (including improving and personalizing) the services we offer, to send communications, including promotional communications, and to display advertising. In carrying out these purposes, we combine data we collect through the various web site services you use to give you a more seamless, consistent and personalized experience. However, to enhance privacy, we have built in technological and procedural safeguards designed to prevent certain data combinations. For example, we store data we collect from you when you are unauthenticated (not signed in) separately from any account information that directly identifies you, such as your name, email address or phone number.
                </p>
             
            </section>
            
            <section class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700">Sharing Your Information</h3>
                <p class="text-gray-600 mt-4">
                    We share your personal data with your consent or as necessary to complete any transaction or provide any service you have requested or authorized. For example, we share your content with third parties when you tell us to do so. When you provide payment data to make a purchase, we will share payment data with banks and other entities that process payment transactions or provide other financial services, and for fraud prevention and credit risk reduction. In addition, we share personal data among our controlled affiliates and subsidiaries.
                </p>
                <p class="text-gray-600 mt-4">
                    We also share personal data with vendors or agents working on our behalf for the purposes described in this statement. For example, companies we've hired to provide customer service support or assist in protecting and securing our systems and services may need access to personal data in order to provide those functions. In such cases, these companies must abide by our data privacy and security requirements and are not allowed to use personal data they receive from us for any other purpose. We may also disclose personal data as part of a corporate transaction such as a merger or sale of assets.
                </p>
            </section>
        </div>
    </div>
</section>
</body>
</html>