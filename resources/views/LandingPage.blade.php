@extends('Layout.App')

@include('Layout.Navbar')
@section('content')

<main>
    <div class="px-8 py-8">
        <!-- berita pilihan -->
        <h1 class="text-2xl font-bold mb-4">Berita Pilihan</h1>
        <a href="/detail-news" class="relative overflow-hidden rounded-lg w-full shadow-md transition transform hover:scale-105">
            <img alt="Gambar Berita" src="{{ asset('assets/news-asset.png') }}" class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative h-64 sm:h-80 md:h-96 lg:h-112 flex items-end">
                <div class="p-4 sm:p-6 bg-gradient-to-t from-black to-transparent w-full">
                    <h2 class="text-lg font-semibold text-white">Berikut adalah beberapa tips agar mempermudah kalian untuk menulis html</h2>
                </div>
            </div>
        </a>
        <!-- berita terbaru -->
        <div class="max-w-7xl mx-auto mt-20 mb-10">
            <h2 class="text-3xl textcolor2 font-bold mb-4">Berita Terbaru</h2>
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
    </div>
    <!-- berita Lainnya -->

</main>

@include('Layout.Footer')

@endsection