@extends('frontend.home')
@section('hero')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit your Store</h2>
            <form action="{{ route('update-store', $store->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Store
                            Name</label>
                        <input type="text" name="store_name" id="name" value="{{ $store->store_name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" name="store_category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Male" selected="">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="store_description" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your description here">{{ $store->store_description }}</textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Store
                            Followers</label>
                        <input type="text" name="store_followers" id="name" value="{{ $store->store_followers }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Store
                            Link</label>
                        <input type="text" name="store_insta" id="name" value="{{ $store->store_insta }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <!-- Current Image Display -->
                        @if ($store->store_image)
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Current Image:</p>
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $store->store_image) }}"
                                        class="w-24 h-24 max-w-xs rounded-lg object-cover border-2 border-[#BF8e43] shadow-md">

                                </div>
                            </div>
                        @endif

                        <!-- Fancy Upload Area -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload New
                                Image</label>
                            <div class="flex items-center justify-center w-full">
                                <label for="store_image"
                                    class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-[#BF8e43] rounded-xl cursor-pointer bg-white hover:bg-gray-100 ">
                                    <!-- Upload Icon -->
                                    <div
                                        class="flex flex-col items-center justify-center pt-5 pb-6 text-center transition-transform duration-300 group-hover:scale-105">
                                        <svg class="w-10 h-10 mb-3 text-[#BF8e43]" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                            <span class="font-semibold text-[#BF8e43]">Click to browse</span> or drag and
                                            drop
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 5MB)</p>
                                    </div>
                                    <input id="store_image" name="store_image" type="file" class="hidden"
                                        accept="image/*">

                                    <!-- Animated Border Effect -->
                                    <div
                                        class="absolute inset-0 border-4 border-transparent group-hover:border-[#BF8e43]/30 rounded-xl transition-all duration-500 pointer-events-none">
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Preview Section -->
                        <div id="previewContainer" class="hidden mt-6 transition-all duration-300">
                            <p class="text-sm font-medium text-gray-900 dark:text-white mb-2">Preview:</p>
                            <div class="relative group">
                                <img id="imagePreview"
                                    class="w-24 h-24 max-w-xs rounded-lg object-cover border-2 border-[#BF8e43] shadow-md">

                            </div>
                        </div>
                    </div>

                    <script>
                        const fileInput = document.getElementById('store_image');
                        const preview = document.getElementById('imagePreview');
                        const previewContainer = document.getElementById('previewContainer');
                        const dropArea = document.querySelector('label[for="store_image"]');

                        // Handle file selection
                        fileInput.addEventListener('change', function(e) {
                            handleFiles(e.target.files);
                        });

                        // Drag and drop functionality
                        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                            dropArea.addEventListener(eventName, preventDefaults, false);
                        });

                        ['dragenter', 'dragover'].forEach(eventName => {
                            dropArea.addEventListener(eventName, highlight, false);
                        });

                        ['dragleave', 'drop'].forEach(eventName => {
                            dropArea.addEventListener(eventName, unhighlight, false);
                        });

                        dropArea.addEventListener('drop', function(e) {
                            handleFiles(e.dataTransfer.files);
                        });

                        function handleFiles(files) {
                            const file = files[0];
                            if (file && file.type.match('image.*')) {
                                const reader = new FileReader();

                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                    previewContainer.classList.remove('hidden');
                                    previewContainer.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'nearest'
                                    });
                                };

                                reader.readAsDataURL(file);
                            }
                        }

                        function preventDefaults(e) {
                            e.preventDefault();
                            e.stopPropagation();
                        }

                        function highlight() {
                            dropArea.classList.add('border-[#BF8e43]', 'bg-[#E3E1E0]');
                        }

                        function unhighlight() {
                            dropArea.classList.remove('border-[#BF8e43]', 'bg-[#E3E1E0]');
                        }
                    </script>
                    <div>
                        <button type="submit"
                            class="items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border">
                            Add product
                        </button>
                    </div>
            </form>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="p-4 mt-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>

@endsection
