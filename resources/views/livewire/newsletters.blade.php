<section class="newsletter">
    <div class="wraper">
        <div class="newsletter__content">
            <h2 class="newsletter__title">Boletín semanal</h2>
            <p class="text-center md:text-lg ">Suscribete a nuestro newsletter semanal y te haremos llegar la mejor información para impulsar el crecimiento de tu negocio. Además de promociones, descuentos, productos y todo el contenido de tecnología que nuestro maravilloso equipo prepara cada semana.</p>
            <form id="formulario" method="post" wire:submit.prevent="sendEmail">
                @csrf
                <div class="newsletter__suscribete mt-4">
                    <input wire:model.lazy="email" type="email" placeholder="user@example.com" required>
                    <button type="submit">SUSCRÍBETE</button>
                </div>
                @error('email') <span class="error" style="color: purple;">{{ $message }}</span> @enderror
            </form>
        </div>
    </div>
</section>
