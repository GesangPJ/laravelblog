<!--
Halaman untuk menampilkan daftar postingan
-->

<x-layout>
    <x-slot:title>{{$halaman}}</x-slot:title>
    <h2>Blog Test</h2>
<br>

@foreach ($posts as $post )

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/blog/{{$post['slug']}}" class="hover:underline">
        <h3 class="mb-1 text-3xl font-bold text-grey-800">
            {{$post['title']}}
        </h3></a>
        <div class="mb-1 text-base text-gray-500">
            <a href="#">{{$post['name']}} </a>
        </div>
        <p class="font-light my-4">
            {{  Str::limit($post['body'],150)}}
        </p>
        <a href="/blog/{{$post['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>

    </article>
    @endforeach


</x-layout>

