<div>
    @if($team->count()> 0)
        <section class="our__team py-8">
            <div class="wraper">
                <div class="our__team__content">
                    <h2 class="our__team__title text-gray-400">Nuestro Equipo</h2>
                    <blockquote class="person">
                        <img loading="lazy" class="person__img" src="{{asset($current->photo)}}" alt="{{$current->name}}">
                        <div class="person__descripcion">
                            <h3 class="person__nombre text-gray-400">{{$current->name}}</h3>
                            <p class="person__profesion">{{$current->profession}}</p>
                            <cite class="text-gray-400">“{{$current->phrase}}”</cite>
                        </div>
                    </blockquote>
                    <div class="peoples">
                        @foreach($team as $person)
                            <div class="worker">
                                <img loading="lazy" class="worker__img" src="{{$person->photo}}" alt="{{$person->name}}">
                                <div class="worker__descripcion">
                                    <h3 class="worker__nombre">{{$person->name}}</h3>
                                    <p class="worker__profesion">{{$person->profession}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
