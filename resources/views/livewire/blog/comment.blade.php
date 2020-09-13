<div class="w-full md:w-8/12 mx-auto">
    <div class="mt-1 text-sm md:text-2xl lg:text-4xl text-left leading-tight font-semibold text-gray-400 py-2 border-b border-gray-400">{{$message}}</div>
    <div class="text-sm my-2 text-gray-700 font-semibold">Comenta como invitado</div>
    <div class="relative">
        <textarea name="" id="" placeholder="Escribe tu comentario" cols="30" rows="2" class="w-full py-4 px-8 pl-20  bg-gray-800 rounded focus:outline-none text-gray-400" wire:model.lazy="body"></textarea>
        <div class="absolute top-0 px-4 py-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="#9c92ac"><path d="M12 0h18v6h6v6h6v18h-6v6h-6v6H12v-6H6v-6H0V12h6V6h6V0zm12 6h-6v6h-6v6H6v6h6v6h6v6h6v-6h6v-6h6v-6h-6v-6h-6V6zm-6 12h6v6h-6v-6zm24 24h6v6h-6v-6z"></path></g></svg>
        </div>
    </div>
    <div class="flex items-center flex-wrap">
        <div class="relative mr-2">
            <input type="text" class="bg-gray-800 text-sm rounded w-64 px-4 pl-8 py-1 focus:outline-none" placeholder="Nombre *" wire:model="name">
            <div class="absolute top-0">
                <svg class="mt-1 ml-1 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>

            </div>
        </div>
        <div class="relative mt-1 md:mt-0">
            <input type="text" class="bg-gray-800 text-sm rounded w-64 px-4 pl-8 py-1 focus:outline-none" placeholder="Email *" wire:model="email">
            <div class="absolute top-0">
                <svg class="mt-1 ml-1 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
            </div>
        </div>
    </div>
    <button class="mt-2 py-1 px-8 bg-gray-800 rounded font-semibold focus:outline-none focus:shadow-outline">Publicar comentario</button>
</div>
