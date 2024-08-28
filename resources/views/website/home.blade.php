<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-4 flex justify-end">
                <a href="{{ route('post.new') }}"
                    class="material-symbols-outlined border rounded-lg bg-blue-950 text-white p-2">stylus</a>
            </div>

            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    @if (count($posts) > 0)
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

                            @foreach ($posts as $post)
                                <section
                                    class="flex bg-white shadow-md flex-col p-4 border rounded-lg hover:scale-[1.1] transition duration-300 ease-in-out">
                                    <span class="text-xl font-semibold">{{ Str::limit($post->title, 30) }}</span>

                                    <section class="flex flex-col text-sm">
                                        <span class="">Postado há {{ $post->created_at->diffForHumans() }}</span>
                                        <a href="#"
                                            class="text-blue-950 hover:underline">@<span>{{ $post->user->username }}</span></a>
                                    </section>

                                    <span class="flex justify-end">
                                        <a class="material-symbols-outlined"
                                            href="{{ route('post.show', $post->id) }}">open_in_full</a>
                                    </span>
                                </section>
                            @endforeach

                        </div>
                    @else
                        <div class="flex flex-col text-center w-full">
                            <span class="material-symbols-outlined text-9xl">sentiment_sad</span>
                            <span class="text-3xl">Nenhum post foi publicado ainda...</span>
                            <span class="text-lg">Vamos publicar um?
                                <a class="hover:underline text-blue-950" href="{{ route('post.new') }}">Clique aqui</a>
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
