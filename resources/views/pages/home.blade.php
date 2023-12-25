<x-layout>

    <div class="flex flex-col h-screen px-1 py-4 space-y-2 bg-[#212121]">

        <div class="flex flex-row px-2 space-x-8 resizable">

            <!-- Logo -->
            <a href="" class="flex flex-row w-48 my-auto space-x-3">
                <img src="/images/logo.png" class="h-9 w-9" alt="logo">
                <h3 class="my-auto font-sans text-base font-bold tracking-wider text-green-100">Point Of Sells</h3>
            </a>

            <!-- Search Input -->
            <input type="search" placeholder="Search product by name" class="w-full px-4 py-3 text-sm text-white border-0 bg-inherit placeholder:text-base placeholder:text-gray-400 focus:border-none focus:outline-none focus:ring-none">
        </div>

        <div class="flex h-screen overflow-hidden">

            <!-- Left Column -->
            <div class="relative block bg-[#131314] border border-[#414040] border-t-green-700 resizable h-full w-9/12">

                 <!-- Items list heading -->
                <div class="flex justify-between text-white border border-[#414040] border-b-green-700 py-3 px-3 text-sm font-medium">

                    <div>
                        <h2>Product name</h2>
                    </div>

                    <div class="grid grid-cols-3 gap-20">

                        <div>
                            <h2>Quantity</h2>
                        </div>

                        <div>
                            <h2>Price</h2>
                        </div>

                        <div>
                            <h2>Amount</h2>
                        </div>
                    </div>
                </div>

                <!--- ITems List div Section  --->
                <div class="h-full w-full border border-[#535353] text-white text-5xl overflow-y-auto ">
                    <!---   //Items list code goes here  --->
                </div>

                 <!--- Items footer Section --->
                <div class="bg-[#212121] w-full h-36 border border-[#535353] absolute inset-x-0 bottom-0">

                    <!---  Section Main Wrapper --->
                    <div class="grid w-full p-2 mt-3 space-y-3 font-sans text-white place-content-end">

                         <!--- Subtotal Section --->
                        <div class="grid grid-cols-2 gap-28">

                            <div>
                                <h2 class="text-sm font-medium">Subtotal</h2>
                            </div>

                            <div class="text-lg place-self-end">
                                <h2>555555,600.00</h2>
                            </div>

                        </div>

                        <!--- Discount Section --->
                        <div class="grid grid-cols-2 gap-32 border-b-2 border-dashed border-b-[#535353]">

                            <div>
                                <h2 class="text-sm font-medium">Discount</h2>
                            </div>

                            <div class="text-lg place-self-end">
                                <h2>560.00</h2>
                            </div>

                        </div>

                        <!--- Total Section --->
                        <div class="grid grid-cols-2 gap-28">

                            <div>
                                <h2 class="text-xl font-semibold">Total</h2>
                            </div>

                            <div class="text-2xl place-self-end">
                                <h2>5,040.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Left Column -->


             <!-- Right Column For Action Buttons -->
            <div class="relative block w-1/2 h-full p-2 border border-[#535353] border-t-green-700 resizable bg-inherit">

                <!-- Top buttons -->
                <div class="grid grid-cols-3 gap-y-2">

                    <!-- Delete Button -->
                    <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 hover:bg-slate-600 ease-in duration-300 w-60">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                              </svg>
                        </span>
                        <h1 class="font-sans text-sm font-medium text-white">Delete</h1>
                    </button>

                    <!-- Add Quantity Button -->
                    <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                <path d="M6 3a3 3 0 00-3 3v2.25a3 3 0 003 3h2.25a3 3 0 003-3V6a3 3 0 00-3-3H6zM15.75 3a3 3 0 00-3 3v2.25a3 3 0 003 3H18a3 3 0 003-3V6a3 3 0 00-3-3h-2.25zM6 12.75a3 3 0 00-3 3V18a3 3 0 003 3h2.25a3 3 0 003-3v-2.25a3 3 0 00-3-3H6zM17.625 13.5a.75.75 0 00-1.5 0v2.625H13.5a.75.75 0 000 1.5h2.625v2.625a.75.75 0 001.5 0v-2.625h2.625a.75.75 0 000-1.5h-2.625V13.5z" />
                            </svg>
                        </span>
                        <h1 class="font-sans text-sm font-medium text-white">Quantity</h1
                    </button>

                    <!-- New Sale Button -->
                    <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <h1 class="font-sans text-sm font-medium text-white">New sale</h1>
                    </button>

                    <!-- Cash Button -->
                    <button class="p-4 space-y-4 border-2 border-[#535353] h-20 hover:border-green-800  ease-in duration-300 w-60 border-b-4 border-b-green-800">
                        <h1 class="font-sans text-sm font-medium text-white">Cash</h1>
                    </button>

                    <!-- Transfer Button -->
                    <button class="p-4 space-y-4 border-2 border-[#535353] h-20 hover:border-sky-600  ease-in duration-300 w-60 border-b-4 border-b-sky-600">
                        <h1 class="font-sans text-sm font-medium text-white">Transfer</h1>
                    </button>

                    <!-- Cheque Button -->
                    <button class="p-4 space-y-4 border-2 border-[#535353] h-20 hover:border-sky-600 ease-in duration-300 w-60 border-b-4 border-b-sky-600">
                        <h1 class="font-sans text-sm font-medium text-white">Cheque</h1>
                    </button>
                </div>
                <!-- End Top buttons -->

                <!-- Bottom buttons -->
                <div class="bg-[#212121] w-full block absolute inset-x-0 bottom-0 p-2">

                     <!-- Top buttons -->
                    <div class="grid grid-cols-3 gap-y-4">

                        <!-- Save sale Button -->
                        <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 hover:bg-slate-600 ease-in duration-300 w-60">
                            <h1 class="font-sans text-2xl font-semibold text-white">F9</h1>
                            <h1 class="font-sans text-sm font-medium text-white">Save sale</h1>
                        </button>

                        <!-- Refund Button -->
                        <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                    <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <h1 class="font-sans text-sm font-medium text-white">Refund</h1>
                        </button>

                        <!-- Customer Button -->
                        <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                                    <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                                </svg>

                            </span>
                            <h1 class="font-sans text-sm font-medium text-white">Customers</h1>
                        </button>

                        <!-- Void order Button -->
                        <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 bg-red-600 border-[#535353] h-28 hover:bg-red-800 ease-in duration-300 w-60">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>

                            </span>
                            <h1 class="font-sans text-sm font-medium text-white">Void order</h1>
                        </button>

                         <!-- End of the Button -->
                         <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                  </svg>
                            </span>
                            <h1 class="font-sans text-sm font-medium text-white">End of the</h1>
                        </button>


                        <!-- New Sale Button -->
                        <div x-data="{ open: false }" x-init="$refs.loading.classList.add('hidden');">
                        <!-- Sidebar button -->
                            <button @click="open = !open" class="flex items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 w-60 hover:bg-slate-600 ease-in duration-300">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-white">
                                        <path fill-rule="evenodd" d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>

                            <!-- Loading screen -->
                            <div
                            x-ref="loading"
                            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-black"
                            >
                            Loading.....
                            </div>

                            <!-- Sidebar Overlay -->
                            <div x-show="open" @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>

                            <!-- Sidebar -->
                            <div
                            x-show="open"
                            x-transition:enter="transform transition-transform duration-300"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition-transform duration-300"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full"
                            class="fixed top-0 right-0 h-full overflow-y-auto bg-[#212121] shadow-lg w-80">
                                <!-- Close Button -->
                                <button @click="open = false" class="absolute top-0 right-0 p-2 m-4 mt-8 text-white hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                      </svg>
                                </button>

                                <!-- Sidebar Content Components -->
                                <x-home.side-content/>
                            </div>
                        </div>

                        <!-- Payments Button -->
                        <button class="flex flex-col items-center justify-center p-4 space-y-4 border-2 border-[#535353] h-28 hover:bg-green-600 ease-in duration-300 w-96 bg-green-800">
                            <h1 class="font-sans text-2xl font-semibold text-white">F10</h1>
                            <h1 class="font-sans text-sm font-medium text-white">Payments</h1>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
