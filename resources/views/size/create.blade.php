<x-guest-layout>


    <div class="container mx-auto">

        <div class="overflow-x-auto relative ">
            <form action="{{ route('size.store') }}" method="post">
                @csrf
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Size
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <x-input name="size" class="border py-1.5 px-2">
                                </x-input>
                            </th>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <x-button type="submit" class="my-6">ADD</x-button>
                    <a href="#" class="href">
                        <x-button type="button" class="my-6">BACK</x-button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>