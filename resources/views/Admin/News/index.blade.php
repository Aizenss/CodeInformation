@extends('Layout.App')

@include('Layout.Sidebar')

@section('content')
    <div class="p-8 sm:ml-80">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-medium font-bold text-black">Berita</h1>
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
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Gambar</th>
                        <th scope="col" class="px-6 py-3">Judul Berita</th>
                        <th scope="col" class="px-6 py-3">Deskripsi Berita</th>
                        <th scope="col" class="px-6 py-3">Kategori</th>
                        <th scope="col" class="px-6 py-3">Berita Utama</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $newsItem)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 text-black whitespace-nowrap">{{ $loop->iteration }}</th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $newsItem->image) }}" alt=""
                                    class="w-[100px] rounded-lg">
                            </td>
                            <td class="px-6 py-4 font-semibold text-black">{{ $newsItem->title }}</td>
                            <td class="px-6 py-4 font-medium text-black max-w-[400px] truncate">{{ $newsItem->description }}</td>
                            <td class="px-6 py-4 font-medium text-black">{{ $newsItem->category->name }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('news.toggleFeatured', $newsItem->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" {{ $newsItem->status ? 'checked' : '' }} class="sr-only peer"
                                            onchange="this.form.submit()">
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </form>
                            </td>
                            <td class="flex items-center gap-2 px-6 py-4">
                                <button data-modal-target="detail-modal" data-modal-toggle="detail-modal"
                                    class="block text-black info font-medium rounded-lg text-sm p-3 text-center shadow-lg"
                                    type="button" data-news-id="{{ $newsItem->id }}"
                                    data-news-title="{{ $newsItem->title }}"
                                    data-news-description="{{ $newsItem->description }}"
                                    data-news-image="{{ asset('storage/'.$newsItem->image) }}">
                                    <i class="fa-solid fa-eye text-[20px]"></i>
                                </button>
                                <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                    class="block text-black warning font-medium rounded-lg text-sm p-3 text-center shadow-lg"
                                    type="button" data-news-id="{{ $newsItem->id }}"
                                    data-news-title="{{ $newsItem->title }}"
                                    data-news-description="{{ $newsItem->description }}"
                                    data-news-category-id="{{ $newsItem->category_id }}">
                                    <i class="fa-solid fa-pen-to-square text-[20px]"></i>
                                </button>
                                <button data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                    class="block text-black danger font-medium rounded-lg text-sm p-3 text-center shadow-lg"
                                    type="button" data-news-id="{{ $newsItem->id }}">
                                    <i class="fa-solid fa-trash text-[20px]"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Tambah --}}
    <div id="add-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Tambah Berita</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="add-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Gambar Berita</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                id="file_input" type="file" name="image">
                        </div>
                        <div class="mb-6">
                            <label for="titleNews" class="block mb-2 text-sm font-medium text-gray-900">Judul Berita</label>
                            <input type="text" id="titleNews" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="descriptionNews" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi
                                Berita</label>
                            <textarea id="descriptionNews" name="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                        </div>
                        <div class="mb-6">
                            <label for="categoryNews" class="block mb-2 text-sm font-medium text-gray-900">Kategori
                                Berita</label>
                            <select id="categoryNews" name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-white color2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Edit Berita</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="edit-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form action="{{ route('news.update', ':id') }}" method="post" enctype="multipart/form-data"
                        id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="edit_file_input">Gambar Berita</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                id="edit_file_input" type="file" name="image">
                        </div>
                        <div class="mb-6">
                            <label for="editTitleNews" class="block mb-2 text-sm font-medium text-gray-900">Judul
                                Berita</label>
                            <input type="text" id="editTitleNews" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="editDescriptionNews"
                                class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Berita</label>
                            <textarea id="editDescriptionNews" name="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                        </div>
                        <div class="mb-6">
                            <label for="editCategoryNews" class="block mb-2 text-sm font-medium text-gray-900">Kategori
                                Berita</label>
                            <select id="editCategoryNews" name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-white color2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Delete --}}
    <div id="delete-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Apakah anda yakin ingin menghapus data ini?</h3>
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
                        <form action="{{ route('news.destroy', ':id') }}" method="post" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white danger focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Detail --}}
    <div id="detail-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t">
                    <h3 id="detailTitle" class="text-xl font-semibold text-gray-900">Detail</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="detail-modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <img id="detailImage" src="" alt="" class="w-[500px] h-[300px] rounded-lg mx-auto">
                    <h3 class="font-semibold text-bold">Deskripsi:</h3>
                    <p id="detailDescription" class="font-regular"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addModal = new Modal(document.getElementById('add-modal'));
            const editModal = new Modal(document.getElementById('edit-modal'));
            const deleteModal = new Modal(document.getElementById('delete-modal'));
            const detailModal = new Modal(document.getElementById('detail-modal'));

            // Initialize CKEditor
            let addEditor, editEditor;
            ClassicEditor.create(document.querySelector('#descriptionNews')).then(editor => {
                addEditor = editor;
            }).catch(error => {
                console.error(error);
            });

            ClassicEditor.create(document.querySelector('#editDescriptionNews')).then(editor => {
                editEditor = editor;
            }).catch(error => {
                console.error(error);
            });

            // Validate CKEditor content before form submission
            document.querySelector('form[action="{{ route('news.store') }}"]').addEventListener('submit', function(
                event) {
                if (addEditor.getData().trim() === '') {
                    event.preventDefault();
                    alert('Deskripsi Berita is required.');
                }
            });

            document.querySelector('form[id="edit-form"]').addEventListener('submit', function(event) {
                if (editEditor.getData().trim() === '') {
                    event.preventDefault();
                    alert('Deskripsi Berita is required.');
                }
            });

            document.querySelectorAll('[data-modal-toggle="detail-modal"]').forEach(button => {
                button.addEventListener('click', function() {
                    const newsId = this.getAttribute('data-news-id');
                    const newsTitle = this.getAttribute('data-news-title');
                    const newsDescription = this.getAttribute('data-news-description');
                    const newsImage = this.getAttribute('data-news-image');

                    document.getElementById('detailTitle').textContent = newsTitle;
                    document.getElementById('detailDescription').textContent = newsDescription;
                    document.getElementById('detailImage').setAttribute('src', newsImage);

                    detailModal.show();
                });
            });

            document.querySelectorAll('[data-modal-toggle="edit-modal"]').forEach(button => {
                button.addEventListener('click', function() {
                    const newsId = this.getAttribute('data-news-id');
                    const newsTitle = this.getAttribute('data-news-title');
                    const newsDescription = this.getAttribute('data-news-description');
                    const newsCategoryId = this.getAttribute('data-news-category-id');

                    const editForm = document.getElementById('edit-form');
                    editForm.setAttribute('action', editForm.getAttribute('action').replace(':id',
                        newsId));
                    document.getElementById('editTitleNews').value = newsTitle;
                    document.getElementById('editDescriptionNews').value = newsDescription;
                    document.getElementById('editCategoryNews').value = newsCategoryId;

                    editModal.show();
                });
            });

            document.querySelectorAll('[data-modal-toggle="delete-modal"]').forEach(button => {
                button.addEventListener('click', function() {
                    const newsId = this.getAttribute('data-news-id');

                    const deleteForm = document.getElementById('delete-form');
                    deleteForm.setAttribute('action', deleteForm.getAttribute('action').replace(
                        ':id', newsId));

                    deleteModal.show();
                });
            });
        });
    </script>
@endsection
