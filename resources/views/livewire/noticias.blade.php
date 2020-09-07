<div>
    @if($posts->count()>0)
    <div class="wraper mx-auto my-16">
        <h2 class="text-gray-400">Ultimas noticias</h2>
        <div class="md:flex justify-center items center mt-12">
            @foreach($posts as $post)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img loading="lazy" class="w-full h-48 object-cover" src="{{asset($post->file)}}" alt="Sunset in the mountains">
                <div class="px-6 py-2">
                    <a href="" class="font-bold text-xl mb-2">{{$post->name}}</a>
                    <p class="text-gray-700 text-base">
                        {{$post->except}}
                    </p>
                </div>
                <a href="{{route('blog.post',$post->slug)}}" class="px-6 py-2 flex items-center mt-4 text-indigo-500 hover:text-indigo-600">
                    <p class="mr-6">Leer más</p>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-right w-4 h-6"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>

