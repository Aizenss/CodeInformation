<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <i class="fa-solid fa-bars text-black"></i>
</button>

<aside id="admin-sidebar"
    class="fixed top-0 left-0 z-40 w-[350px] p-3 h-screen transition-transform -translate-x-full sm:translate-x-0 rounded-lg"
    aria-label="Sidebar">
    <div class="h-full px-3 py-5 overflow-y-auto color3 rounded-xl">
        <div class="flex items-center justify-center gap-2 mb-7">
            <img src="{{ asset('assets/CIcon.png') }}" alt="">
            <span class="text-xl font-bold text-[#2C3333]">CodeInformation</span>
        </div>
        <ul class="space-y-4 flex flex-col justify-start p-0">
            <li>
                <a href="/admin/home" class="flex items-center px-4 {{ request()->is('admin/home') ? 'color2 text-[#E7F6F2] shadow-lg py-3' : 'text-[#2C3333] py-2' }} rounded-lg group no-underline">
                    <i class="fa-solid fa-house text-[25px]"></i>
                    <span class="ms-3 font-semibold text-xl">Beranda</span>
                </a>
            </li>
            <li>
                <a href="/admin/category" class="flex items-center px-4 rounded-lg group no-underline {{ request()->is('admin/category') ? 'color2 text-[#E7F6F2] shadow-lg py-3' : 'text-[#2C3333] py-2' }}">
                    <i class="fa-solid fa-layer-group text-[25px]"></i>
                    <span class="ms-3 font-semibold text-xl">Kategori</span>
                </a>
            </li>
            <li>
                <a href="/admin/news" class="flex items-center px-4 rounded-lg group no-underline {{ request()->is('admin/news') ? 'color2 text-[#E7F6F2] shadow-lg py-3' : 'text-[#2C3333] py-2' }}">
                    <i class="fa-solid fa-newspaper text-[25px]"></i>
                    <span class="ms-3 font-semibold text-xl">Berita</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
