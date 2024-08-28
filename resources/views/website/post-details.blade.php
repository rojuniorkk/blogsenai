<x-app-layout>
    <x-slot name="header">
        <section class="relative ">
            <section>
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">{{ $post->title }}</h2>

                <section>
                    <span>Feito por <a class="underline" href="#">{{ $post->user->username }}</a></span>
                    -
                    <span>{{ $post->updated_at->diffForHumans() }}</span>
                </section>
            </section>

            @if (Auth::check() && Auth::user()->id == $post->user_id)
                <section class="absolute bottom-0 right-0 p-2 flex justify-end gap-2">

                    <form action="{{ route('post.action') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <button type="submit" name="action" value="edit" class="material-symbols-outlined rounded-lg text-yellow-500 p-1">edit</button>
                        <button type="submit" name="action" value="delete" class="material-symbols-outlined rounded-lg text-red-500 p-1">delete</button>
                    </form>

                </section>
            @endif
        </section>

    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 w-full my-4 mx-8 text-gray-900 flex flex-col gap-y-6">

                    @foreach ($post->elements as $a)
                        <div class="">
                            <h1 class="font-semibold text-xl">{{ $a->subtitle }}</h1>
                            <p class="text-justify p-2">{{ $a->text }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
