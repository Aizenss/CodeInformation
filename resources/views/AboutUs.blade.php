@extends('Layout.App')
@include('Layout.Navbar')

@section('content')
    <div class="mt-5 text-center">
        <h1 class="font-bold inline-block">Tentang<span class="textcolor2"> Kami</span></h1>
        <hr class="hr-title mt-2 w-1/5 mx-auto border-b-2">
    </div>

    <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-4 px-10 md:px-32">
        <div>
            <img src="{{ asset('assets/CBIcon.png') }}" alt="CBI Logo" class="w-32 h-32 mx-auto my-32">
        </div>
        <div>
            <h2 class="font-bold text-xl mb-2">Bagaimana Kami Memulai</h2>
            <p class="text-sm leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sunt unde repellat inventore laudantium sint quas quam quasi recusandae minus enim, qui, nostrum officia obcaecati saepe? Consectetur iure repellat officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sunt unde repellat inventore laudantium sint quas quam quasi recusandae minus enim, qui, nostrum officia obcaecati saepe? Consectetur iure repellat officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
            </p>
        </div>
    </div>

    <div class="mt-5 text-center">
        <h1 class="font-bold inline-block">Tim<span class="textcolor2"> Kami</span></h1>
        <hr class="hr-title mt-2 w-1/5 mx-auto border-b-2">
    </div>

    <div class="mt-5 grid grid-cols-1 md:grid-cols-4 gap-4 px-4 md:px-16 mb-20">
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 1" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Irsyad Andhika</h3>
            <p class="text-regular font-semibold textcolor2">UI/UX & Frontend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 1" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Juangga Deka</h3>
            <p class="text-regular font-semibold textcolor2">Backend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 1" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Tegar Benaya</h3>
            <p class="text-regular font-semibold textcolor2">Frontend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 1" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Fergidion Sagita</h3>
            <p class="text-regular font-semibold textcolor2">Frontend</p>
        </div>
    </div>

    @include('Layout.Footer')
@endsection
