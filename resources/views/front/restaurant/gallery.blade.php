@php
    $restaurant = Auth::user()->restaurant;
@endphp

@extends('front.restaurant.master')

@section('title')
    Gallery - FoodBakery
@endsection

@section('content')
    <div class="main-section">
        @include('front.restaurant.body.header')

        <div class="page-section account-header buyer-logged-in">
            <div class="container">
                <div class="row">
                    <!-- ========== menu Start ========== -->
                    @include('front.restaurant.body.menu')
                    <!-- menu End -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="user-dashboard loader-holder">
                            <div class="user-holder" style=" margin-bottom: 20px; ">
                                <h2>Manage Gallery</h2>
                                <form action="{{ route('restaurant.gallery.upload') }}" method="POST"
                                    enctype="multipart/form-data" id="photoUploadForm"
                                    style="border: 1px solid #ccc; border-radius: 8px; padding: 20px; background: #fdfdfd;">
                                    @csrf

                                    <div id="dropZone"
                                        style="border: 2px dashed #007bff; border-radius: 5px; padding: 30px; text-align: center; cursor: pointer; background-color: #eef6ff;">
                                        <strong>Click or drag images here to upload</strong>
                                        <input type="file" name="photos[]" id="galleryPhotos" accept="image/*" multiple
                                            style="display: none;">
                                    </div>

                                    @error('photos')
                                        <div class="text-danger small mt-2">{{ $message }}</div>
                                    @enderror

                                    @error('photos.*')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror

                                    <div id="previewContainer"
                                        style="margin-top: 20px; display: flex; flex-wrap: wrap; gap: 10px;"></div>

                                    <div class="mb-3" style="margin-top: 20px;">
                                        <label for="is_thumbnail" class="form-label" style="font-weight: bold;">Set First
                                            Image as Thumbnail</label>
                                        <select name="is_thumbnail" id="is_thumbnail" class="form-select"
                                            style="width: 100%; padding: 0 10px;">
                                            <option value="">Select an Option</option>
                                            <option value="1" {{ old('is_thumbnail') == '1' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="0" {{ old('is_thumbnail') == '0' ? 'selected' : '' }}>No
                                            </option>
                                        </select>

                                        @error('is_thumbnail')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="text-end" style="margin-top: 20px;">
                                        <button type="submit" class="btn btn-submit"
                                            style="padding: 4px 20px;">Upload</button>
                                    </div>
                                </form>

                                <div style="width: 100%; margin-top: 40px;">
                                    @if ($restaurant->photoGallery->isNotEmpty())
                                        <div id="gallery-wrapper"
                                            style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: flex-start;">

                                            @foreach ($restaurant->photoGallery as $photo)
                                                <div class="gallery-card"
                                                    style="position: relative; width: calc(33.333% - 10px); max-width: 100%; border-radius: 8px; overflow: hidden; cursor: pointer;">

                                                    <img src="{{ asset('storage/' . $photo->image_url) }}"
                                                        style="width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 8px;">

                                                    <form action="{{ route('restaurant.gallery.delete', $photo->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this image?')"
                                                        class="delete-form"
                                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                                                               display: flex; align-items: center; justify-content: center;
                                                               background: rgba(0, 0, 0, 0.6); opacity: 0; transition: 0.3s;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            style="padding: 10px 15px; font-size: 16px; font-weight: bold;
                                                                   background-color: rgba(255, 255, 255, 0); border: none; color: rgb(255, 255, 255);
                                                                   border-radius: 4px; cursor: pointer;">
                                                            ✕
                                                        </button>
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <h4>You haven't upload any photos</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.querySelector('.delete-form').style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => {
                card.querySelector('.delete-form').style.opacity = '0';
            });
        });
    </script>

    <script>
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('galleryPhotos');
        const previewContainer = document.getElementById('previewContainer');

        dropZone.addEventListener('click', () => fileInput.click());

        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.style.backgroundColor = '#d0e7ff';
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.style.backgroundColor = '#eef6ff';
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.style.backgroundColor = '#eef6ff';
            fileInput.files = e.dataTransfer.files;
            previewImages(fileInput.files);
        });

        fileInput.addEventListener('change', () => {
            previewImages(fileInput.files);
        });

        function previewImages(files) {
            previewContainer.innerHTML = '';
            const fileList = Array.from(files);

            fileList.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const wrapper = document.createElement('div');
                    wrapper.style.position = 'relative';
                    wrapper.style.display = 'inline-block';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.style.borderRadius = '5px';
                    img.style.border = '1px solid #ccc';
                    img.style.margin = '5px';

                    const removeBtn = document.createElement('span');
                    removeBtn.innerHTML = '&times;';
                    removeBtn.style.position = 'absolute';
                    removeBtn.style.top = '5px';
                    removeBtn.style.right = '10px';
                    removeBtn.style.backgroundColor = 'rgba(0,0,0,0.6)';
                    removeBtn.style.color = 'white';
                    removeBtn.style.padding = '0 6px';
                    removeBtn.style.borderRadius = '50%';
                    removeBtn.style.cursor = 'pointer';
                    removeBtn.title = 'Remove';

                    removeBtn.onclick = () => {
                        fileList.splice(index, 1);
                        updateFileList(fileList);
                        previewImages(fileList);
                    };

                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    previewContainer.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });

            updateFileList(fileList);
        }

        function updateFileList(files) {
            const dataTransfer = new DataTransfer();
            files.forEach(file => dataTransfer.items.add(file));
            fileInput.files = dataTransfer.files;
        }
    </script>

@endsection
