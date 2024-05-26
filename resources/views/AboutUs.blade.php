@extends('Layout.App')
@include('Layout.Navbar')

@section('content')
    <div class="mt-5 text-center">
        <h1 class="font-bold text-2xl md:text-4xl inline-block">Tentang<span class="textcolor2"> Kami</span></h1>
        <hr class="hr-title mt-2 w-1/5 mx-auto border-b-2">
    </div>

    <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-4 px-10 md:px-32">
        <div class="flex justify-center">
            <img src="{{ asset('assets/CBIcon.png') }}" alt="CBI Logo" class="w-32 h-32 mx-auto my-12 md:my-32">
        </div>
        <div>
            <h2 class="font-bold text-xl md:text-2xl mb-4">Bagaimana Kami Memulai</h2>
            <p class="text-base md:text-lg leading-relaxed mb-4">
                CodeInformation adalah hasil kolaborasi empat siswa yang bersemangat dan berdedikasi untuk menyelesaikan sebuah tugas akademik. Website ini didirikan dengan tujuan untuk menyediakan sumber daya dan tips berguna bagi para penggemar coding, baik yang masih pemula maupun yang sudah berpengalaman. Kami menyadari pentingnya berbagi pengetahuan dan pengalaman dalam dunia pemrograman, dan melalui CodeInformation, kami berharap dapat memberikan kontribusi positif bagi komunitas coder.
            </p>
        </div>
    </div>

    <div class="mt-10 text-center">
        <h1 class="font-bold text-2xl md:text-4xl inline-block">Tim<span class="textcolor2"> Kami</span></h1>
        <hr class="hr-title mt-2 w-1/5 mx-auto border-b-2">
    </div>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-4 px-4 md:px-16 mb-20">
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 1" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Irsyad Andhika</h3>
            <p class="text-regular font-semibold textcolor2">UI/UX & Frontend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 2" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Juangga Deka</h3>
            <p class="text-regular font-semibold textcolor2">Backend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 3" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Tegar Benaya</h3>
            <p class="text-regular font-semibold textcolor2">Frontend</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/member.png') }}" alt="Member 4" class="w-32 h-32 rounded-full border-[6px] border-[#A5C9CA] mx-auto mb-4">
            <h3 class="font-semibold text-xl">Fergidion Sagita</h3>
            <p class="text-regular font-semibold textcolor2">Frontend</p>
        </div>
    </div>

    @include('Layout.Footer')
@endsection
