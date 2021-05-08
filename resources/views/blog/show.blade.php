@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl mb-4">
            {{ $post->title }}
        </h1>
        <img class="lg:w-1/4 md:w-20 sm:w-20 rounded-xl shadow-2xl center" src="{{ asset('images/' . $post->image_path) }}" width="500" alt="">
    </div>
</div>


<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By, <span class="font-bold italic text-gray-800">
            {{ $post->user->name }}
        </span>
        Created On {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>
@endsection