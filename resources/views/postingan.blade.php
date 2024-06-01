<!--
Halaman untuk menampilkan postingan secara full
-->
<x-layout>
    <x-slot:title>Blog Post</x-slot:title>
    <h2>Blog Test</h2>
<br>

    <article class="py-8 max-w-screen-md">

        <h3 class="mb-1 text-3xl font-bold text-grey-800">
            {{$post['title']}}
        </h3>
        <div class="mb-1 text-base text-gray-500">
            <a href="#">{{$post['name']}} </a>
        </div>
        <p class="text-justify font-base my-4 ">
            {{ $post['body']}}
        </p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>

    </article>


</x-layout>

