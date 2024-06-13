@extends('Layout.App')

@section('content')
    <main class="grid grid-cols-1 md:grid-cols-2 h-screen color4">
        <div class="hidden md:flex flex-col items-center justify-center ">
            <img src="{{ asset('assets/login-pict.png') }}" alt="" class="w-[400px] h-[400px]">
            <p class="text-[20px] font-regular text-center mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Aliquam id, consequuntur consectetur exercitationem sapiente doloribus sed impedit eos dolorem molestiae.
            </p>
            <span class="text-[13px] font-medium">&copy; 2024 Copyright Hammer Site</span>
        </div>
        <div class="flex flex-col items-center justify-center pt-5 md:pt-0 px-10 md:px-0">
            <img src="{{ asset('assets/CBIcon.png') }}" alt="" class="w-[45px] mb-[25px]">
            <h2 class="text-[15px] md:text-[30px] font-medium">Masuk ke CodeInformation</h2>
            <form action="" class="max-w-[560px] w-full my-10">
                <div class="mb-4">
                    <label for="card-number-input">Email</label>
                    <div class="relative mt-2">
                        <input type="text" id="card-number-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[50px] pe-10 p-2.5"
                            placeholder="Masukan Email" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <i class="fa-solid fa-envelope text-gray-400"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="card-number-input">Password</label>
                    <div class="relative mt-2">
                        <input type="text" id="card-number-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[50px] pe-10 p-2.5"
                            placeholder="Masukan Email" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <i class="fa-solid fa-key text-gray-400"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <button type="submit" class="color2 py-2 text-center w-full rounded-xl text-white">Masuk</button>
                </div>
            </form>
        </div>
    </main>
@endsection
