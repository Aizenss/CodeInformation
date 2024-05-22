@extends('Layout.App')

@include('Layout.Navbar')
@section('content')

<main>
    <div class=" px-8 py-8">
      <!-- berita pilihan -->
      <h1 class="text-2xl font-bold mb-4">Berita Pilihan</h1>
      <article class="relative overflow-hidden rounded-lg w-full shadow-md transition ">
  <img
    alt=""
    src="{{ asset('assets/news-asset.png') }}"
    class="absolute inset-0 h-full w-full object-cover"
  />
  
  <div class="relative h-80 pt-32 sm:pt-48 lg:pt-64 flex items-end">
    <div class="p-4 sm:p-6">
        <span href="#">
            <h2 class="text-lg font-semibold    text-white">Berikut adalah beberapa tips agar mempermudah kalian untuk menulis html</h2>
        </span>
    </div>
  </div>
</article>



      <!-- berita terbaru -->
      <div class="max-w-7xl mx-auto mt-20 mb-10">
            <h2 class="text-3xl textcolor2 font-bold mb-4">Berita Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-md p-4">
                    <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 1" class="w-full mb-2">
                    <div class="flex justify-start mb-4">
                        <div class="bg-blue-500 text-white px-2 py-1 mr-2 rounded-full text-xs">laravel</div>
                        <div class="bg-red-500 text-white px-2 py-1 rounded-full text-xs">Tips</div>
                    </div>
                    <p class="text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-md p-4">
                    <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 2" class="w-full mb-2">
                    <div class="flex justify-start mb-4">
                        <div class="bg-blue-500 text-white px-2 py-1 mr-2 rounded-full text-xs">laravel</div>
                        <div class="bg-red-500 text-white px-2 py-1 rounded-full text-xs">Tips</div>
                    </div>
                    <p class="text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-md p-4">
                    <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 3" class="w-full mb-2">
                    <div class="flex justify-start mb-4">
                        <div class="bg-blue-500 text-white px-2 py-1 mr-2 rounded-full text-xs">laravel</div>
                        <div class="bg-red-500 text-white px-2 py-1 rounded-full text-xs">Tips</div>
                    </div>
                    <p class="text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-xl shadow-md p-4">
                    <img src="{{ asset('assets/laravel-asset.png') }}" alt="Gambar Berita 4" class="w-full mb-2">
                    <div class="flex justify-start mb-4">
                        <div class="bg-blue-500 text-white px-2 py-1 mr-2 rounded-full text-xs">laravel</div>
                        <div class="bg-red-500 text-white px-2 py-1 rounded-full text-xs">Tips</div>
                    </div>
                    <p class="text-lg font-semibold">Pengenalan mengenai apa itu Laravel ....</p>
                </div>
            </div>
        </div>
      </div>
      <!-- berita Lainnya -->
      
    </div>
</main>


@include('Layout.Footer')

@endsection
