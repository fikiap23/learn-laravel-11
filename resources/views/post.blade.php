<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h1 class="text-3xl font-semibold text-gray-700 hover:underline">{{ $post['title'] }}</h1>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts"
            class="inline-block px-5 py-3 mt-4 text-sm font-medium text-white bg-gray-800 rounded hover:bg-gray-700">
            &laquo; Back to posts
        </a>
    </article>
</x-layout>
