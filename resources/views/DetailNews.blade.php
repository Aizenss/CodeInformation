@extends('Layout.App')

@include('Layout.Navbar')

@section('content')
    <div class="max-w-5xl mx-auto mt-14 px-4">
        <h1 class="text-2xl md:text-4xl font-bold mb-6">{{ $news->title }}</h1>

        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Berita"
                class="w-full md:w-2/3 object-cover rounded-lg">
        </div>

        <div class="mb-4">
            <p class="text-left text-sm md:text-lg font-semibold">
                {{ \Carbon\Carbon::parse($news->created_at)->isoFormat('D MMMM YYYY') }} - CodeInformation</p>

        </div>

        <div class="mb-8">
            {!! html_entity_decode($news->description) !!}
        </div>

        <div class="flex justify-start mb-4 flex-wrap gap-2">
            <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">{{ $news->category->name }}</div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-20 mb-10 px-4">
        <h2 class="text-2xl md:text-3xl textcolor2 font-bold mb-4">Berita Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($other as $otherNews)
                <a href="/{{ $otherNews->slug }}"
                    class="block bg-white rounded-xl shadow-md p-4 transform transition hover:scale-105 no-underline">
                    <img src="{{ asset('storage/' . $otherNews->image) }}" alt="Gambar Berita 1"
                        class="w-full h-[150px] object-cover mb-2 rounded-lg">
                    <div class="flex justify-start mb-3 flex-wrap gap-2">
                        <div class="bg-[#868686] text-white px-2 py-1 rounded-full text-xs">{{ $otherNews->category->name }}
                        </div>
                    </div>
                    <p class="text-black text-lg font-semibold truncate">{{ $otherNews->title }}</p>
                </a>
            @endforeach
        </div>
    </div>

    @include('Layout.Footer')
@endsection
