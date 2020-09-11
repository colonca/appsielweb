<div class="wraper comments max-h-5xl overflow-x-hidden overflow-y-auto">
    <livewire:blog.comment :post="$post" message="Deja una respuesta"/>
    @foreach($comments as $comment)
        <div class="w-full md:w-8/12 mx-auto flex my-4">
            @php($random = rand(0,4))
            <img src="{{asset("svg/patterns/random-$random.svg")}}" alt="patterns" class="w-16 h-16 object-cover" style="color:#68E1FD">
            <div class="ml-1 flex-1">
                <div class="flex items-center flex-wrap">
                    <div class="text-sm md:text-lg font-semibold text-gray-400 ml-2">{{$comment->name}}</div>
                    <div class="text-sm md:text-lg text-gray-700 ml-2">dice:</div>
                    <span class="ml-2 text-gray-700 text-sm">{{date('d M, Y \a \l\a\s h:i a',strtotime($comment->created_at))}}</span>
                </div>
                <div class="w-full px-2 py-1">
                    <p class="rounded bg-gray-800 py-2 px-4">{{$comment->body}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
