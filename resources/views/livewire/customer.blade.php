<div class="my-8">
    @if($customers->count() > 0)
        <div class="wraper text-gray-400">
            <h2>Nuestos Clientes</h2>
            <p class="text-center text-sm md:text-lg"></p>
            <div class="splide my-8">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach($customers as $customer)
                            @if($customer->show)
                                <div class="splide__slide flex items-center justify-center flex-wrap max-w-sm rounded-lg shadow-ld">
                                    <a href="{{$customer->url}}"><img src="{{asset('storage/'.$customer->image)}}" class="w-10/12" alt="{{$customer->desription}}"></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    <script src="{{asset('js/splide.min.js')}}"></script>
    <script>
        new Splide( '.splide',{
            type: 'loop',
            cover:true,
            autoplay: true,
            height: '10rem',
        }).mount();
    </script>
    @endif
</div>
