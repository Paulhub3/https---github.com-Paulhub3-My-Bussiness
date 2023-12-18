<x-layout>
    <!-- component -->
    <div class="flex flex-col h-screen md:flex-row md:flex">
        <!-- Left Pane -->
        <div class="grid w-full grid-rows-3 gap-8 bg-white md:grid md:grid-rows-3 md:mb-20 md:w-4/12 md:gap-96 md:mt-20">

            <!-- Logo -->
            <a href="" class="flex flex-col items-center justify-center">
                <img src="/images/logo.png" class="w-7 lg:w-9" alt="logo">
                <h3 class="font-sans text-lg font-bold text-gray-700 lg:text-xl">Point Of Sells</h3>
            </a>

            <div class="flex flex-col items-center justify-center w-full">

                <!-- user svg -->
                <div class="px-6 py-6 mx-auto bg-green-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Text-->
                <div class="w-full mt-9 lg:mt-12">
                    <h5 class="font-sans text-base font-semibold text-center lg:text-lg text-slate-700">You are Logged Out</h5>
                    <p class="text-sm font-normal text-center lg:text-base text-slate-500">Sign in to continue</p>
                </div>
                <!--- Button ---->
                <a href="/login" class="w-9/12 px-4 py-3 mt-6 font-sans text-sm text-center text-white bg-green-800 rounded">Sign In</a>
            </div>

             <!-- Footer -->
             <div class="flex flex-col items-center justify-center">
                <small class="text-center font-[8px] text-slate-500 lg:text-base">© 2023 <span class="font-medium text-green-800">Point Of Sells</span></small>
            </div>

        </div>

        <!-- Right Pane -->
        <div class="flex items-center justify-center w-full bg-gray-600 md:flex md:relative">
            <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid"
            class="object-cover w-full h-full md:absolute md:right-0 md:top-0 opacity-30">
                <source src="/images/vid_1.mp4" type="video/mp4">
            </video>
        </div>
  </div>
</x-layout>
