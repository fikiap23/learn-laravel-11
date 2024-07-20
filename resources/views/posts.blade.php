<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}">
                <h1 class="text-3xl font-semibold text-gray-700 hover:underline">{{ $post['title'] }}</h1>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 10 Juli 2024
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
            <a href="/posts/{{ $post['slug'] }}"
                class="inline-block px-5 py-3 mt-4 text-sm font-medium text-white bg-gray-800 rounded hover:bg-gray-700">Read
                more
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
