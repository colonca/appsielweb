<div>
    <div class="contacto-hero">
        <div class="wraper">
            <div class="contacto-hero__descripcion">
                <h1>CONTACTO</h1>
                <p>Solicita información para desarrollar tu proyecto.<br>
                    Presupuesto diseño web, tiendas online, apps y desarrollo web.</p>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.84,86.34 C78.72,197.86 576.46,-20.22 231.09,152.45 L564.61,83.38 L-7.62,146.53 Z" style="stroke: none; fill: #6E2AB6;"></path></svg></div>
    </div>

    <main class="contacto">
        <div class="wraper">
            <div class="contacto__content">
                <div class="contacto__form">
                    <h3>Solicita Información</h3>
                    <p class="text-gray-400">¿Qué necesitas? - Especifique todos los detalles posibles para realizar un estudio de viabilidad del proyecto.</p>
                    @if(!$enviado)
                        <form  wire:submit.prevent="guardar" >
                            <div class="form-group text-gray-400">
                                <label for="">Nombre <span>*<span> @error('nombre') <span>{{$message}}</span> @enderror</span></span></label>
                                <input class="pl-2 bg-gray-800 rounded focus:outline-none text-gray-400" placeholder="Escribe tu nombre aquí" type="text" wire:model="nombre">
                            </div>
                            <div class="form-group text-gray-400">
                                <label for="">Email <span>* <span> @error('email') <span>{{$message}}</span> @enderror</span></span></label>
                                <input class="pl-2 bg-gray-800 rounded focus:outline-none text-gray-400" type="text" placeholder="example@mail.com" wire:model="email" required>
                            </div>
                            <div class="form-group text-gray-400">
                                <label for="">Telefono <span>* @error('telefono') <span>{{$message}}</span> @enderror</span></label>
                                <input type="text" class="pl-2 bg-gray-800 rounded focus:outline-none text-gray-400" placeholder="+57 (314) 656 1062" wire:model="telefono" required>

                            </div>
                            <div class="form-group text-gray-400">
                                <label for="">Presupuesto</label>
                                <input type="text" class="pl-2 bg-gray-800 rounded focus:outline-none text-gray-400" placeholder="$5.555.555" wire:model.lazy="presupuesto">
                            </div>
                            <div class="form-group text-gray-400">
                                <label for="">Consulta <span>* <span> @error('consulta') <span>{{$message}}</span> @enderror</span></span></label>
                                <textarea class="pl-2 bg-gray-800 rounded focus:outline-none text-gray-400" cols="30" rows="10" placeholder="¿En qué podemos ayudarte?" wire:model.lazy="consulta" required></textarea>
                            </div>

                            <button type="submit" style="cursor: pointer;" class="mt-2 py-1 px-8 bg-gray-800 rounded font-semibold focus:outline-none focus:shadow-outline">Enviar</button>
                        </form>
                    @else
                        <p>Tu propuesta ha sido enviada.</p>
                        <p>Nos pondremos en contacto contigo lo antes posible.</p>
                    @endif
                </div>
                <div class="contacto__logo">
                    <img loading="lazy" src="{{asset('images/abstract-communication.png')}}" width="250px" height="250px" alt="ilustracion">
                </div>
            </div>
        </div>
    </main>
</div>
