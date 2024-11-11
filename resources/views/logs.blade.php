<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="grid md:grid-cols-4 grid-cols-1 gap-3">

        {{-- foreach --}}
        <article class="md:col-span-3 col-span-1 py-8 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                {{ $log['title'] }}</h2>
            <div class="text-base text-gray-500">
                <a href="#">{{ $log['author'] }}</a> | Comforting your stay
            </div>
            <p class="mb-4">{{ $log['body'] }}</p>
            <a href="/log" class="font-medium text-blue-500 hover:underline">&laquo; Back to log
            </a>
        </article>

    </div>

</x-layout>