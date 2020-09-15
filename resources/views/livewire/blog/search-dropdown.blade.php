<div>
    <div class="search wraper flex justify-center lg:justify-end items-center">
        <div class="relative mt-3">
            <input type="text" wire:model="search" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                   placeholder="search">
            <div class="absolute top-0">
                <svg viewBox="0 0 20 20" fill="currentColor" class="fill-current text-gray-500 w-4 h-4 mt-2 ml-2 search"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>

            <div wire:loading class="spinner top-0 right-0 mt-3 mr-4"></div>

            @if(strlen($search) >= 2)
               <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
                    @if($searchResult->count() > 0)
                        <ul>
                            @foreach($searchResult as $result)
                                <li class="border-b border-gray-700">
                                    <a href="{{route('blog.post',$result->slug)}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                        <img src="{{asset($result->file)}}" alt="{{$result->name}}" class="w-8">
                                        <span class="ml-4">{{$result->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                       <div class="px-3 py-3">No hay resultados para "{{$search}}"</div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
