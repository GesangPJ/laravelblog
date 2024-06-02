<!--
Halaman untuk menampilkan daftar postingan
-->
<x-layout>
    <x-slot:title>{{$halaman}}</x-slot:title>
    <h2>Blog Test</h2>
<br>
@foreach ($posts as $post )
<div class="max-w-2xl p-6 overflow-hidden rounded-lg shadow dark:bg-gray-50 dark:text-gray-800">

    <article>
        <a href="/blog/{{$post['slug']}}" class="hover:underline">
            <h2 class="text-xl font-bold">{{$post['title']}}</h2>
        </a>
        <p class="mt-4 dark:text-gray-600">{{  Str::limit($post['body'],150)}}</p>
        <br>
        <a href="/blog/{{$post['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        <div class="flex items-center mt-8 space-x-4">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="w-10 h-10 rounded-full dark:bg-gray-500">
            <div>
                <h3 class="text-sm font-medium">{{$post['name']}}</h3>
                <time datetime="2021-02-18" class="text-sm dark:text-gray-600">Feb 18th 2021</time>
            </div>
        </div>
    </article>

</div><br>
@endforeach


</x-layout>

