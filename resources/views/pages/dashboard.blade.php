<x-admin.layout>
    <div class="flex flex-col w-full py-3 space-y-2">

        <!-- first two sections in dashboard page --->
        <div class="flex flex-col space-y-2 lg:space-x-2 lg:flex lg:flex-row">
            <!-- Main Profit or total --->
            <div class="block lg:w-7/12 h-52 my-auto bg-[#131314] py-4 px-8 border border-[#414040] relative">

                <h3 class="font-sans text-xl text-justify lg:text-3xl opacity-90">Total Calculated Amout</h3>

                <div class="absolute inset-x-0 flex justify-between px-8 py-4 bottom-8 lg:left-20">

                    <h2 class="font-sans text-2xl tracking-wider lg:text-4xl opacity-60">90,000.00</h2>

                    <h2 class="font-sans text-base font-medium tracking-wide text-green-600 opacity-90">Profit</h2>
                </div>
            </div>

            <!--Total Sales this month --->
            <div class="block lg:w-5/12 h-52 my-auto bg-[#131314] py-4 px-8 border border-[#414040]">

                <h3 class="font-sans text-lg text-justify lg:text-xl opacity-90">Total Sales</h3>

                <h2 class="font-sans text-xl font-medium tracking-wider lg:text-2xl opacity-60">90,000.00</h2>

                <div class="flex justify-between mt-6">
                    <div>
                        <h4 class="font-sans text-sm text-justify opacity-90">Top Performing month:</h4>
                        <h2 class="font-sans text-base font-medium text-justify lg:text-lg opacity-90">September</h2>
                    </div>
                    <h2 class="font-sans text-xl font-medium text-justify lg:text-2xl opacity-60">100,000.00</h2>
                </div>
            </div>
        </div>


        <!-- Second sections in dashboard page --->
        <div class="flex flex-col space-y-2 lg:space-x-2 lg:flex lg:flex-row">
            <!--Total Sales this month --->
            <div class="block lg:w-8/12  my-auto bg-[#131314] py-4 px-8 border border-[#414040] h-full">

                <h3 class="font-sans text-xl text-justify lg:text-2xl opacity-90">Top Product</h3>

                 <!-- Heading  --->
                <div class="flex justify-between mt-6 border-b-2 border-sky-600">
                    <div>
                        <h4 class="font-sans text-sm text-justify opacity-90">Product</h4>
                    </div>
                    <h2 class="font-sans text-sm font-medium text-justify opacity-60">Total</h2>
                </div>

                 <!-- List of products --->
                <div class="flex justify-between mt-6 border-b border-[#414040]">
                    <div>
                        <h4 class="font-sans text-sm text-justify opacity-90">Pepsi</h4>
                    </div>
                    <h2 class="font-sans text-sm font-medium text-justify opacity-60">30,000.00</h2>
                </div>
            </div>



            <div class="block lg:w-4/12 h-44 my-auto bg-[#131314] py-4 px-8 border border-[#414040] relative">

                <div class="flex justify-between mt-6">
                    <h3 class="font-sans text-lg text-justify lg:text-xl opacity-90">hourly Sales(Amount)</h3>

                    <select name="" id="" class="font-sans text-base font-medium  bg-[#414040]">
                        <option value="">Amount</option>
                        <option value="">Count</option>
                    </select>
                </div>

                <div class="absolute inset-x-0 px-8 py-4 bottom-6">
                    <h2 class="font-sans font-medium tracking-wider lg:text-3xl opacity-60 text">90,000.00</h2>
                </div>
            </div>
        </div>

    </div>
</x-admin.layout>
