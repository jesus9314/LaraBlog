<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{$post->name}}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                    <img src="{{Storage::url($post->image->url)}}" alt="" class="w-full h-80 object-cover object-center">
                    @else
                    <img src="https://cdn.pixabay.com/photo/2023/03/20/02/11/bridge-7863619_1280.jpg" alt="" class="w-full h-80 object-cover object-center">
                    @endif
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4"> Mas en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similars as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                @if ($similar->image)
                                <img class="w-18 h-20" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                <img class="w-18 h-20" src="https://cdn.pixabay.com/photo/2023/03/20/02/11/bridge-7863619_1280.jpg" alt="">
                                @endif
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
