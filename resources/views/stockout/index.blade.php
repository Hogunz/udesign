<x-guest-layout>


    <div class="container mx-auto">

    @if ($message = Session::get('message'))
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success !</span> You have been created new entity.
            </div>
        </div>
        @endif
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Receiving Item
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Quantity
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stockouts as $stockout)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $stockout->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $stockout->receiving->category->category. " - ".$stockout->receiving->size->size }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $stockout->quantity }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $stockout->created_at->format('F d, Y H:i:s') }}
                        </td>
                        <td class="flex flex-row gap-2 py-4 ">
                            @if(!$stockout->trashed())
                            <a href="{{ route('stockout.edit', $stockout->id) }}" class="href">
                                <x-button>EDIT</x-button>
                            </a>
                            <form action="{{ route('stockout.destroy', $stockout->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <x-button class="">Delete</x-button>
                            </form>
                            @else
                            <a href="{{ route('stockout.restore', $stockout->id) }}">Restore</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <a href="{{ route('stockout.create') }}" class="href">
                    <x-button class="mt-4 mb-4">Create</x-button>
                </a>
            </table>
        </div>
    </div>
</x-guest-layout>