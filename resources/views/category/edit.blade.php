<x-guest-layout>

    <div class="container mx-auto">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <form action="{{ route('category.update', $category->id ) }}" method="post">
                @csrf
                @method('put')
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                             Category
                            </th>
                            <th scope="col" class="py-3 px-6">
                              Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            </th>
                            <td class="py-4 px-6">
                                <x-input name="category" value="{{$category->category}}" class="border py-1.5 px-2">
                                </x-input>
                            </td>

                        </tr>
                    </tbody>
                </table>

        </div>
        <div class="text-center">
            <x-button type="submit" class="my-6">UPDATE</x-button>
            <a href="/" class="href">
                <x-button type="button" class="my-6">BACK</x-button>
            </a>
        </div>
        </form>
    </div>


</x-guest-layout>