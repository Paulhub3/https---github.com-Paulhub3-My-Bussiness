<x-layout>
    <!-- component -->
    <div class="flex flex-col h-screen md:flex-row md:flex">
        <!-- Left Pane -->
        <div class="grid w-full grid-flow-row mb-10 space-y-32 my-36 lg:w-4/12 md:space-y-16 md:my-24 lg:my-36">

            <!-- Form -->
            <form action="" class="items-center justify-center w-full px-4 space-y-5 md:px-12 md:space-y-7 ">

                <!-- Logo -->
                <a href="" class="flex flex-col items-center justify-center mb-14">
                    <img src="/images/logo.png" class="w-7 lg:w-9" alt="logo">
                    <h3 class="font-sans text-lg font-bold text-gray-700 lg:text-xl">Point Of Sells</h3>
                </a>


                <!-- Employee / Management ID -->
                <div class="space-y-2">
                    <label for="" class="block text-sm font-medium text-gray-700">Employee / Management ID</label>
                    <input type="text" name="" placeholder="Employee / Management ID" class="w-full px-2 py-2 border-2 border-gray-300 rounded md:px-3 md:py-3 focus:border-green-800 focus:border focus:outline-none focus:ring-none placeholder:text-sm placeholder:text-gray-400">
                </div>

                <!-- password -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="w-full px-2 py-2 border-2 border-gray-300 rounded md:px-3 md:py-3 focus:border-green-800 focus:border focus:outline-none focus:ring-none placeholder:text-sm placeholder:text-gray-400">
                </div>

                <!--- Button ---->
                <button  class="w-full px-4 py-3 font-sans text-sm text-center text-white bg-green-800 rounded">Login</button>
            </form>



             <!-- Footer -->
             <div class="bottom-0 flex flex-col items-center justify-center">
                <small class="text-center font-[8px] text-slate-500 lg:text-base">© 2023 <span class="font-medium text-green-800">Point Of Sells</span></small>
            </div>

        </div>


        <!-- Right Pane -->
        <div class="relative w-full h-full bg-gray-600">
           <div class="max-w-md text-center">
                <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid"
                class="object-cover w-full h-full md:absolute md:right-0 md:top-0 opacity-30">
                    <source src="/images/vid_1.mp4" type="video/mp4">
                </video>
           </div>
        </div>
  </div>
</x-layout>
