@extends('Layout.App')

@include('Layout.Sidebar')

@section('content')
    <div class="p-8 sm:ml-80">
        <h1 class="text-medium font-medium text-black">Selamat Datang, Admin</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-8">
            <div class="flex items-center gap-3 bg-[#A5C9CA] rounded-xl shadow-xl p-4">
                <div>
                    <i class="fa-solid fa-newspaper text-[40px]"></i>
                </div>
                <div>
                    <span class="text-[30px] font-medium">45 Berita</span>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-[#A5C9CA] rounded-xl shadow-xl p-4">
                <div>
                    <i class="fa-solid fa-layer-group text-[40px]"></i>
                </div>
                <div>
                    <span class="text-[30px] font-medium">45 Kategori</span>
                </div>
            </div>
        </div>
    </div>
@endsection
