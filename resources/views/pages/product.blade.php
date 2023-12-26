<x-admin.layout>
    <div class="flex flex-col w-full px-1 py-3 space-y-2">

        <!-- first two sections in product page --->
        <div class="flex">
            <!-- New product Button --->
            <button class="flex flex-col items-center justify-center p-2 space-y-2 w-36">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 font-bold fill-white">
                        <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                </span>
                <h1 class="font-sans text-sm font-medium text-white">New product</h1>
            </button>
            <!-- Edit product Button --->
            <button class="flex flex-col items-center justify-center p-2 space-y-2 w-36">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 font-bold fill-white">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                    </svg>
                </span>
                <h1 class="font-sans text-sm font-medium text-white">Edit product</h1>
            </button>
            <!-- Delete product Button --->
            <button class="flex flex-col items-center justify-center p-2 space-y-2 w-36">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 font-bold fill-white">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                    </svg>
                </span>
                <h1 class="font-sans text-sm font-medium text-white">Delete product</h1>
            </button>
            <!-- Print product Button --->
            <button class="flex flex-col items-center justify-center p-4 space-y-2 w-36">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 font-bold fill-white">
                        <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd" />
                    </svg>
                </span>
                <h1 class="font-sans text-sm font-medium text-white">Print</h1>
            </button>
        </div>

        <!-- second  sections in product page  --->
        <!-- component -->
        <div class="py-4 px-3 overflow-x-auto  bg-[#131314] border border-[#414040] ">
            <div class="inline-block w-full px-12 py-4 overflow-hidden align-middle rounded-tl-lg rounded-tr-lg shadow-lg">
                <div class="flex justify-between">
                    <div class="inline-flex w-10/12 h-12 px-2 bg-[#131314] border border-[#414040] rounded lg:px-6">
                        <div class="relative flex flex-wrap items-stretch w-full h-full mb-6">
                            <div class="flex">
                                <span class="flex items-center py-2 text-sm leading-normal whitespace-no-wrap bg-[#131314] border border-r-0 border-none rounded rounded-r-none lg:px-3 text-white  border-[#414040]">
                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                               <!-- search input--->
                            <input type="text" class="relative flex-auto flex-grow flex-shrink px-3 leading-normal bg-inherit tracking-wide  border border-[#414040] border-l-0 border-none rounded rounded-l-none focus:outline-none text-sm text-white placeholder:text-base placeholder:text-gray-400" placeholder="Search product by name">
                        </div>
                    </div>
                    <!-- Product Count --->
                    <h3 class="my-auto font-sans text-base">Products count: <span class="text-lg font-semibold opacity-70">100</span></h3>
                </div>
            </div>
             <!--- Table---->
            <div class="inline-block min-w-full px-8 pt-3 overflow-hidden align-middle bg-[#131314] rounded-bl-lg rounded-br-lg shadow shadow-dashboard">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">ID</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">Fullname</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">Email</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">Phone</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">Status</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-white border-b-2 border-[#414040]">Created At</th>
                            <th class="px-6 py-3 border-b-2 border-[#414040]"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#131314]">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                         <div class="text-sm leading-5 text-white">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-white">Damilare Anjorin</div>
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-white whitespace-no-wrap border-b border-gray-500">damilareanjorin1@gmail.com</td>
                            <td class="px-6 py-4 text-sm leading-5 text-white whitespace-no-wrap border-b border-gray-500">+2348106420637</td>
                            <td class="px-6 py-4 text-sm leading-5 text-white whitespace-no-wrap border-b border-gray-500">
                                <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                <span aria-hidden class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                <span class="relative text-xs">active</span>
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-white whitespace-no-wrap border-b border-gray-500">September 12</td>
                            <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                <button class="px-5 py-2 text-white transition duration-300 border border-[#414040] rounded hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                 <!--- Bottom logical count of Products---->
                <div class="mt-4 mb-4 sm:flex-1 sm:flex sm:items-center sm:justify-between work-sans">
                    <div>
                        <p class="text-sm leading-5 text-white">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">200</span>
                            of
                            <span class="font-medium">2000</span>
                            results
                        </p>
                    </div>
                    <!--- paginate Navigation---->
                    <div>
                        <nav class="relative z-0 inline-flex shadow-sm">
                            <div	>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out [#131314] border border-[#414040] rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-white" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-white transition duration-150 ease-in-out [#131314] border border-[#414040] focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                                    1
                                </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-white transition duration-150 ease-in-out [#131314] border border-[#414040] focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                                    2
                                </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-white transition duration-150 ease-in-out [#131314] border border-[#414040] focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                                    3
                                </a>
                            </div>
                            <div v-if="pagination.current_page < pagination.last_page">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-white transition duration-150 ease-in-out [#131314] border border-[#414040] rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-white" aria-label="Next">
                                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-admin.layout>
