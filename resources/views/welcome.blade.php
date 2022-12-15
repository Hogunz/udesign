<x-guest-layout>

    <div class="h-full  w-full py-16 px-4">
        <div class="flex flex-col items-center justify-center">
            <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Login to your account</p>
                <div>
                    <label id="email" class="text-sm font-medium leading-none text-gray-800">
                        Email
                    </label>
                    <input aria-labelledby="email" type="email" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                </div>
                <div class="mt-6  w-full">
                    <label for="pass" class="text-sm font-medium leading-none text-gray-800">
                        Password
                    </label>
                    <div class="relative flex items-center justify-center">
                        <input id="pass" type="password" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                    </div>
                </div>
                <div class="mt-8">
                    <button role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Create my account</button>
                    <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Dont have account? <a href="javascript:void(0)" class="hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer"> Sign up here</a></p>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>