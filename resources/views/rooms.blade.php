<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="grid md:grid-cols-4 grid-cols-1 gap-3">
        {{-- Main Article --}}
        <article class="md:col-span-3 col-span-1 py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Room Types</h2>
            <div class="text-base text-gray-500">
                <a href="#">Novotel Pulomas</a> | Comforting your stay
            </div>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptatum tempora illum
                qui nisi aperiam a
                doloremque rerum numquam delectus nesciunt in corporis aspernatur vitae, perferendis odio dignissimos
                eius
                veniam!</p>
            <a href="#">Book your room now! &raquo;</a>
        </article>

        {{-- Ad --}}
        <article class=" col-span-1 py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Informasi</h2>
            <div class="text-base text-gray-500">
                <a href="#">Novotel Pulomas</a> | Comforting your stay
            </div>
            <p class="mb-4">Lorem ipsum dolor sit amet.</p>
            <a href="#">Book your room now! &raquo;</a>
        </article>

        {{-- foreach --}}
        @foreach ($rooms as $room)
            <article class="md:col-span-3 col-span-1 py-8 max-w-screen-md border-b border-gray-300">
                <a href="/rooms/{{ $room['slug'] }}">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">
                        {{ $room['type'] }} {{ $room['title'] }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $room['title'] }} {{ $room['roomnumber'] }}
                    </a> |
                    {{ $room->created_at->diffForHumans() }} |
                    {{ $room->created_at->format('j F Y') }} | Comforting your stay
                </div>
                <p class="mb-4 text-justify">{{ Str::limit($room['body'], 150) }}</p>
                <a href="rooms/{{ $room['slug'] }}" class="font-medium text-blue-500 hover:underline">Book your room
                    now!
                    &raquo;</a>
            </article>
        @endforeach

    </div>
    <div class="py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Diagram</h2>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eaque voluptas tempora quod enim! Harum illo
            velit quam in labore nobis, accusantium asperiores beatae praesentium quas? Reprehenderit dolorem
            distinctio, ut eum voluptatem tempore vitae ea veritatis ab, velit voluptates pariatur, sit dolorum unde
            ipsam temporibus nam officia facere? Dignissimos, porro quos sed optio reiciendis qui eaque quibusdam non,
            neque perspiciatis, cumque earum id at voluptate facilis deleniti ratione ut laudantium.</p>
    </div>
</x-layout>
