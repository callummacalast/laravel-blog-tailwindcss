@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>

            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase ">Read More</a>
        
        </div>
    </div>
</div>


<div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>

            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378__480.jpg" width="600" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-500">
                Stuggling to be a better web devloper
            </h2>

            <p class="py-8 text-gray-500 text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis deleniti odio voluptatibus voluptate vel autem, repudiandae ab magnam. Non dicta obcaecati maxime voluptate ullam quia laborum, illum incidunt nemo facilis.
            </p>
            <p class="font-extrabold tetx-gray-600 text-lg pb-9">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi rerum recusandae quisquam error necessitatibus eos harum odit rem dignissimos dolorum aut aspernatur, quia iusto expedita assumenda quasi, molestias quidem. Sequi!
            </p>

            <a href="/blog"
            class="bg-blue-500 text-gray-100 text-1 font-extrabold py-3 px-8 rounded-3xl">
                Find out more
            </a>

        </div>

    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-lg">
         I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        UX Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-500">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo dolores fugit accusantium incidunt? Aliquam officia et deserunt quas ipsa ratione culpa provident, dolores quis sequi. Impedit molestias delectus debitis?
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quod minus adipisci provident soluta reiciendis voluptates dolores ad tempore alias deserunt laboriosam architecto aliquam non dolorem, eos unde iusto ipsa.
            </h3>
            <a href="" class="uppercase bg-trasnparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>

       
    </div>
    <div>

        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378__480.jpg" width="600" alt="">
    </div>

</div>

@endsection