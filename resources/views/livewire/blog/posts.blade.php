<div class="wraper">
    @if($posts->count() > 0)
        @foreach($posts  as $post)
            <div class="w-full md:w-8/12 mx-auto my-16">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 w-full lg:w-1/3">
                        <img loading="lazy" class="rounded-lg md:w-full h-auto" src="{{asset($post->file)}}" alt="Woman paying for a purchase">
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-400 hover:underline pb-2 border-b border-gray-400">{{$post->name}}</a>
                        <div class="tracking-wide mt-1 text-sm text-gray-600 font-light flex items-center">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="view-grid w-6 h-6"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            <p class="uppercase mr-4">{{$post->category->name}}</p>
                            <p>{{date('j F, Y', strtotime($post->created_at))}}</p>
                        </div>
                        <p class="mt-2 text-gray-600">{{$post->except}}</p>
                        <a href="{{route('blog.post',$post->slug)}}" class="flex items-center mt-4 text-indigo-500 hover:text-indigo-600">
                            <p class="mr-6">Leer más</p>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-right w-4 h-6"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <div class="text-sm md:text-4xl text-center text-gray-400 tracking-wide my-16">Aun no se han publicado posts</div>
    @endif

</div>
