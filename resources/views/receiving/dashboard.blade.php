<x-guest-layout>
    <div class="container mx-auto">
        <p class="text-black/50 dark:text-gray-400 text-center uppercase text-2xl font-bold mt-8">Stocks</p>
        <hr class="mx-auto w-24  h-1 bg-gray-100 rounded border-0  dark:bg-gray-700 ">
        <p class="text-black/50 dark:text-gray-400  uppercase text-2xl font-bold p-8"></p>


        <div class="grid grid-cols-4 gap-4 place-items-center h-56">
            @for($i = 0; $i < 7; $i++) 
                <a href="#" class="block max-w-sm w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Small</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">20</p>
                </a>
                @endfor
        </div>
    </div>
</x-guest-layout>