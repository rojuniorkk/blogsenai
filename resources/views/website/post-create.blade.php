<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Post') }}
        </h2>
    </x-slot>

    <x-slot name="scpBody">
        <script type="text/javascript" src="{{ asset('js/post.js') }}"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                        <div class="flex flex-row gap-x-2 justify-end">
                            <button type="button" class="border p-3 rounded-lg bg-blue-950 text-white"
                                onclick="addNewLine()">Nova linha</button>
                            <div>
                                <button class="border p-3 rounded-lg bg-blue-950 text-white"
                                    type="submit">Publicar</button>
                            </div>
                        </div>

                        <div class="">
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">
                                Titulo
                            </label>
                            <input class="border-0 border-b w-full p-2.5" placeholder='Escreva um título'
                                name="title" type="text" required />
                        </div>

                        <div class="w-full mt-4 p-4">
                            <div class="flex flex-col mt-4 p-4 " id='post-line'>
                                {{-- <div id="post-line-#" class="p-4 mt-4">
                                    <div class="mb-2 flex justify-end">
                                        <button class="material-symbols-outlined text-red-900 text-2xl" onclick="removeLine(this)">delete</button>
                                    </div>
                                    <div class="flex flex-col gap-y-5" >
                                        <input type="text" class="border-0 border-b p-2.5" name="post-line-#[][]" value="" placeholder="Subtitulo">
                                        <textarea class="w-full p-2.5 border-0 border-b p-2.5" name="post-line-#[][]" placeholder="Texto"></textarea>
                                    </div>
                                </div> --}}
                            </div>
                        </div>


                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
