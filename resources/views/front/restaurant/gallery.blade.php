@php
    $restaurant = Auth::user()->restaurant;
@endphp

@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
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
                                <form action="{{ route('restaurant.gallery.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="galleryPhotos" class="form-label">Upload Photos</label>
                                        <input class="form-control" type="file" name="photos[]" id="galleryPhotos" multiple accept="image/*" required>
                                        @error('photos.*')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn-submit" style="margin-top: 20px;">Upload</button>
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

                                                    <form action="{{ route('restaurant.gallery.delete', $photo->id) }}" method="POST"
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
@endsection
