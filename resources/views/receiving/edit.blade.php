<x-guest-layout>


    <div class="container mx-auto">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <form action="{{ route('receiving.update', $receiving->id ) }}" method="post">
                @csrf
                @method('put')
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Size
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Category
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $receiving->id }}
                            </th>
                            <td class="py-4 px-6">
                            <x-select name="size" id="">
                                @foreach($sizes as $size) 
                                <option value="{{ $size->id }}">
                                    {{ $size->size }}
                                </option>
                                @endforeach
                               </x-select>
                            </td>
                            <td class="py-4 px-6">
                            <x-select name="category" id="">
                                @foreach($categories as $category) 
                                <option value="{{ $category->id }}">
                                    {{ $category->category }}
                                </option>
                                @endforeach
                               </x-select>
                            </td>
                            <td class="py-4 px-6">
                                <x-input name="price" value="{{$receiving->price}}" class="border py-1.5 px-2">
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