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
                        <div class="worker">
                            <img class="worker__img" src="./images/Selmary.jpg" alt="Selmary Medina Pérez">
                            <div class="worker__descripcion">
                                <h3 class="worker__nombre">Selmary Medina Pérez</h3>
                                <p class="worker__profesion">Community Manager</p>
                            </div>
                        </div>
                        <div class="worker">
                            <img class="worker__img" src="./images/jonny.jpg" alt="Camilo Andres Colon Cañizares">
                            <div class="worker__descripcion">
                                <h3 class="worker__nombre">Camilo Andres Colon Cañizares</h3>
                                <p class="worker__profesion">fullstack</p>
                            </div>
                        </div>
                        <div class="worker">
                            <img class="worker__img" src="./images/jordan.jpg" alt="Jordan Jhonsson Cuadro Negrete">
                            <div class="worker__descripcion">
                                <h3 class="worker__nombre">Jordan Jhonsson Cuadro Negrete</h3>
                                <p class="worker__profesion">Backend</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
