@extends('Layout.App')

@include('Layout.Sidebar')

@section('content')
    <div class="p-8 sm:ml-80">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-medium font-bold text-black">Kategori</h1>
            </div>
            <div>
                <button data-modal-target="add-modal" data-modal-toggle="add-modal"
                    class="block text-white color2 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                    Tambah
                </button>
            </div>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left rtl:text-right">
                <thead class="text-xs text-white uppercase color2">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 text-black whitespace-nowrap">
                            1
                        </th>
                        <td class="px-6 py-4 font-semibold text-black">
                            Laravel
                        </td>
                        <td class="flex items-center gap-2 px-6 py-4">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                class="block text-black warning font-medium rounded-lg text-sm p-3 text-center shadow-lg"
                                type="button">
                                <i class="fa-solid fa-pen-to-square text-[20px]"></i>
                            </button>
                            <button data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                class="block text-black danger font-medium rounded-lg text-sm p-3 text-center shadow-lg"
                                type="button">
                                <i class="fa-solid fa-trash text-[20px]"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div id="add-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah data kategori
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="add-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form action="">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" data-modal-hide="add-modal"
                                class="text-white color2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit data kategori
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="edit-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form action="">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="kategori" required />
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" data-modal-hide="edit-modal"
                                class="text-white color2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="delete-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Apakah anda yakin ingin menghapus data ini?
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="delete-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4 text-center">
                    <p>Jika anda menghapus data ini, data tidak dapat dikembalikan</p>
                    <div class="flex justify-center">
                        <button type="submit" data-modal-hide="delete-modal"
                            class="text-white danger focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
