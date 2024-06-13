@extends('Layout.App')

@include('Layout.Navbar')
@section('content')

<main>
    <div class="px-8 py-8">
        <!-- berita pilihan -->
        <h1 class="text-2xl font-bold mb-4">Berita Pilihan</h1>
        @foreach ($primary as $primaryNews)
            <a href="/{{ $primaryNews->slug }}" class="relative block h-[500px] w-full rounded-2xl overflow-hidden mb-10">
                <img alt="Gambar Berita" src="{{ asset('storage/'.$primaryNews->image) }}" class="w-full h-[500px] object-cover rounded-2xl" />
                <span class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white text-xl font-bold bg-slate-300/10 backdrop-blur-lg px-4 py-2 rounded-lg">
                    {{ $primaryNews->title }}
                </span>
            </a>
        @endforeach     
        <!-- berita terbaru -->
        <div class="max-w-7xl mx-auto mt-20 mb-10">
            <h2 class="text-3xl textcolor2 font-bold mb-4">Berita Terbaru</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($latest as $latestNews)
                <a href="/{{ $latestNews->slug }}" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
                    <img src="{{ asset('storage/'.$latestNews->image) }}" alt="Gambar Berita 1" class="w-full h-[150px] object-cover mb-2 rounded-lg">
                    <div class="flex justify-start mb-3 flex-wrap gap-2">
                        <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">{{ $latestNews->category->name }}</div>
                    </div>
                    <p class="text-black text-lg font-semibold truncate">{{ $latestNews->title }}</p>
                </a>
                @endforeach
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-20 mb-10">
            <h2 class="text-3xl textcolor2 font-bold mb-4">Berita Lainnya</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($other as $otherNews)
                <a href="/{{ $otherNews->slug }}" class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
                    <img src="{{ asset('storage/'.$otherNews->image) }}" alt="Gambar Berita 1" class="w-full h-[150px] object-cover mb-2 rounded-lg">
                    <div class="flex justify-start mb-3 flex-wrap gap-2">
                        <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">{{ $otherNews->category->name }}</div>
                    </div>
                    <p class="text-black text-lg font-semibold truncate">{{ $otherNews->title }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- berita Lainnya -->

</main>

@include('Layout.Footer')

@endsection