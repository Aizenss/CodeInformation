@extends('Layout.App')

@include('Layout.Navbar')

@section('content')

<div class="max-w-5xl mx-auto mt-14 px-4">
    <h1 class="text-center text-2xl md:text-4xl font-bold mb-6">Berikut adalah beberapa tips agar mempermudah kalian untuk menulis HTML</h1>

    <div class="flex justify-center mb-6">
        <img src="{{ asset('assets/news-asset.png') }}" alt="Gambar Berita" class="w-full md:w-2/3 object-cover rounded-lg">
    </div>

    <div class="mb-4">
        <p class="text-left text-sm md:text-lg font-semibold">24 Januari 2024 - CodeInformation</p>
    </div>

    <div class="mb-8">
        <p class="text-left text-base md:text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odit cupiditate ad cumque blanditiis nesciunt eum voluptas doloribus laudantium ratione? Quo id tempore voluptatem incidunt a aliquid ut necessitatibus sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolor aut iusto numquam voluptates molestias inventore! Aliquam eos eius esse vel labore fugiat tenetur iure cupiditate, eveniet, unde assumenda fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsam iste, obcaecati quod ad cumque expedita! Tenetur ullam corporis quaerat doloremque atque quam nam laboriosam tempora odit. Non, alias ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at distinctio deleniti autem. Suscipit voluptas eos quas ipsa nemo voluptatum recusandae cum a placeat, quod minima consectetur praesentium provident non.</p>
        <p class="text-left text-base md:text-base leading-relaxed">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sequi quod quisquam possimus quis, aliquid fugiat sunt itaque nemo, voluptatum odio harum culpa nulla praesentium eius optio ut reprehenderit consectetur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique provident magnam, consequuntur aspernatur praesentium cum voluptates commodi numquam hic, ipsam expedita. Recusandae voluptatibus ea eum molestias tenetur laborum quidem temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum cupiditate, maiores nisi voluptates dolor repellat, est dolorem nostrum facere expedita dicta consequuntur culpa aspernatur quod, quis iusto ex quasi sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla officia sapiente laudantium dolores blanditiis sunt obcaecati natus perferendis officiis error animi nostrum corrupti vero, explicabo ad. Eum suscipit fugit neque.</p>
    </div>

    <div class="flex justify-start mb-4 flex-wrap gap-2">
        <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">laravel</div>
        <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">Tips</div>
    </div>
</div>

<div class="max-w-7xl mx-auto mt-20 mb-10 px-4">
    <h2 class="text-2xl md:text-3xl textcolor2 font-bold mb-4">Berita Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Card 1 -->
        <a href="#" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
            <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 1" class="w-full mb-2 rounded-lg">
            <div class="flex justify-start mb-4 flex-wrap gap-2">
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">laravel</div>
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">Tips</div>
            </div>
            <p class="text-black text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
        </a>
        <!-- Card 2 -->
        <a href="#" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
            <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 2" class="w-full mb-2 rounded-lg">
            <div class="flex justify-start mb-4 flex-wrap gap-2">
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">laravel</div>
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">Tips</div>
            </div>
            <p class="text-black text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
        </a>
        <!-- Card 3 -->
        <a href="#" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
            <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 3" class="w-full mb-2 rounded-lg">
            <div class="flex justify-start mb-4 flex-wrap gap-2">
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">laravel</div>
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">Tips</div>
            </div>
            <p class="text-black text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
        </a>
        <!-- Card 4 -->
        <a href="#" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
            <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 4" class="w-full mb-2 rounded-lg">
            <div class="flex justify-start mb-4 flex-wrap gap-2">
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">laravel</div>
                <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">Tips</div>
            </div>
            <p class="text-black text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
        </a>
    </div>
</div>

@include('Layout.Footer')
@endsection