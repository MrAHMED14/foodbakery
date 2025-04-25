<div class="w-100 overflow-auto">
    <table class="table table-bordered" id="restaurantTable" style="min-width: 800px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($restaurants as $restaurant)
                <tr data-name="{{ strtolower($restaurant->name) }}"
                    data-verified="{{ $restaurant->is_verified ? '1' : '0' }}">
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->city }}</td>
                    <td>{{ $restaurant->phone }}</td>
                    <td>
                        <span class="badge py-1 px-1 {{ $restaurant->is_verified ? 'bg-success' : 'bg-danger' }}"
                            style="width: fit-content; display: flex;align-items: flex-end;gap: 4px; text-align: center;">
                            <i class="fa {{ $restaurant->is_verified ? 'fa-check' : 'fa-times' }}" aria-hidden="true"></i>
                            {{ $restaurant->is_verified ? 'verified' : 'unverified' }}
                        </span>
                    </td>
                    <td>
                        <button class="border-0 text-center w-100 bg-transparent" data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $restaurant->id }}">
                            <i class="fa fa-eye text-dark"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="viewModal{{ $restaurant->id }}" tabindex="-1"
                    aria-labelledby="modalLabel{{ $restaurant->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $restaurant->id }}">Restaurant Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="w-100" style="position: relative;">
                                    <img src="{{ $restaurant->cover_photo ? asset('storage/' . $restaurant->cover_photo) : asset('front/extra-images/cover-placeholder.png') }}"
                                        class="w-100"
                                        style="height: 250px; object-fit: cover; object-position: center; border-radius: 2px;">

                                    <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                        class="ring-1 ring-white "
                                        style="position: absolute; bottom: -20px; left: 20px; width: 100px; border-radius: 5px; outline: 5px solid white; aspect-ratio: 1 / 1;  object-fit: cover; object-position: center;">
                                </div>
                                <h3 style="margin-top: 2rem;">{{ $restaurant->name }}</h3>
                                <p><strong>Description:</strong> {{ $restaurant->description }}</p>
                                <p><strong>State:</strong> {{ $restaurant->state }}</p>
                                <p><strong>City:</strong> {{ $restaurant->city }}</p>
                                <p><strong>Address:</strong> {{ $restaurant->address }}</p>
                                <p><strong>Phone:</strong> {{ $restaurant->phone }}</p>
                                <p><strong>Email:</strong> {{ $restaurant->email }}</p>
                                <p><strong>Cuisine types:</strong>
                                    @if ($restaurant->cuisines->isEmpty())
                                        NULL
                                    @endif
                                    @foreach ($restaurant->cuisines as $cuisine)
                                        <span>{{ $cuisine->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        </span>
                                    @endforeach
                                </p>
                                <p><strong>Created At:</strong> {{ $restaurant->created_at->format('d M Y, H:i') }}</p>
                                <p><strong>Verified:</strong> {{ $restaurant->is_verified ? 'Yes' : 'No' }}</p>

                                <div class="mt-3 w-100">
                                    @if ($restaurant->photoGallery->isNotEmpty())
                                        <div class="restaurant-gallery mt-3">
                                            <div id="lightgallery" style="display: flex; flex-wrap: wrap; gap: 10px;">
                                                @foreach ($restaurant->photoGallery->take(4) as $index => $photo)
                                                    <a href="{{ asset('storage/' . $photo->image_url) }}"
                                                        data-lg-size="1600-1067"
                                                        style="flex: 1 1 calc(25% - 10px); max-width: calc(25% - 10px); position: relative; border-radius: 8px; overflow: hidden; display: block;">
                                                        <img src="{{ asset('storage/' . $photo->image_url) }}"
                                                            alt="Gallery Image"
                                                            style="width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 8px;">

                                                        @if ($index === 3 && $restaurant->photoGallery->count() > 4)
                                                            <div
                                                                style="
                                                                position: absolute;
                                                                top: 0;
                                                                left: 0;
                                                                width: 100%;
                                                                height: 100%;
                                                                background: rgba(0, 0, 0, 0.6);
                                                                color: white;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                font-size: 1.5rem;
                                                                font-weight: bold;">
                                                                +{{ $restaurant->photoGallery->count() - 4 }}
                                                            </div>
                                                        @endif
                                                    </a>
                                                @endforeach

                                                {{-- Hidden images for LightGallery --}}
                                                @foreach ($restaurant->photoGallery->slice(4) as $photo)
                                                    <a href="{{ asset('storage/' . $photo->image_url) }}"
                                                        data-lg-size="1600-1067" style="display: none;">
                                                        <img src="{{ asset('storage/' . $photo->image_url) }}"
                                                            alt="Gallery Image" style="display: none;">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="alert alert-warning text-center">
                                            <i class="fa-solid fa-triangle-exclamation"></i>
                                            <h5>No gallery images available for this restaurant.</h5>
                                        </div>
                                    @endif
                                </div>

                                <div style="margin-top: 20px;">
                                    @if ($restaurant->menus->isEmpty())
                                        <div class="alert alert-warning text-center">
                                            <i class="fa-solid fa-triangle-exclamation"></i>
                                            <h5>No menu available for this restaurant.</h5>
                                        </div>
                                    @endif

                                    @foreach ($restaurant->menus as $menu)
                                        <div class="mb-4">
                                            <h5 class="mb-1">{{ $menu->name }}</h5>
                                            <p class="text-muted">{{ $menu->description }}</p>

                                            <div class="vstack">
                                                @foreach ($menu->dishes as $dish)
                                                    <div class="card flex-row shadow-sm">
                                                        <a href="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/dish-placeholder.png') }}"
                                                            class="single-lightbox" data-lg-size="1400-933"
                                                            data-lg-id="dish-{{ $dish->id }}">
                                                            <img src="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/dish-placeholder.png') }}"
                                                                alt="{{ $dish->description }}"
                                                                style="width: 150px; height: 150px;aspect-ratio: 1 / 1;object-fit: cover; object-position: center; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;">
                                                        </a>
                                                        <div
                                                            class="card-body d-flex flex-column justify-content-between">
                                                            <div>
                                                                <h5 class="card-title mb-1">{{ $dish->name }}</h5>
                                                                <p class="card-text text-muted small mb-2">
                                                                    {{ $dish->description }}</p>
                                                            </div>
                                                            <span class="fw-bold"
                                                                style="color: #c33333;">£{{ $dish->price }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="map-sec-holder">
                                    <div class="cs-map-section" style="border-radius: 10px;">
                                        <div id="restaurantMap{{ $restaurant->id }}"
                                            style="width: 100%; height: 400px; border-radius: 10px; z-index: 10;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer justify-content-start align-items-end">
                                <form id="popularFilterForm" class="d-flex gap-2" action="{{ route('admin.togglePopularity', $restaurant->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div style="min-width: 150px;">
                                        <label for="is_popular">Popular</label>
                                        <select name="is_popular" id="popularFilter" class="form-select">
                                            <option value="1" {{ $restaurant->is_popular ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="0" {{ !$restaurant->is_popular ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                    </div>

                                    <div style="min-width: 150px;">
                                        <label for="is_featured">Featured</label>
                                        <select name="is_featured" id="featuredFilter" class="form-select">
                                            <option value="1" {{ $restaurant->is_featured ? 'selected' : '' }}>
                                                Yes
                                            </option>
                                            <option value="0" {{ !$restaurant->is_featured ? 'selected' : '' }}>
                                                No
                                            </option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn bg-info text-white">Submit</button>
                                </form>

                                <form method="POST"
                                    action="{{ route('admin.toggleVerification', $restaurant->id) }}"
                                    onsubmit="return confirm('Are you sure you want to {{ $restaurant->is_verified ? 'unverify' : 'verify' }} this restaurant?');">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="is_verified"
                                        value="{{ $restaurant->is_verified ? 0 : 1 }}">
                                    <button
                                        class="btn text-white font-semibold mt-2 {{ $restaurant->is_verified ? 'bg-danger' : 'bg-success' }}"
                                        type="submit"
                                        style="display: flex;align-items: center;gap: 4px; text-align: center;">
                                        <i class="fa {{ $restaurant->is_verified ? 'fa-times' : 'fa-check' }}"
                                            aria-hidden="true"></i>
                                        {{ $restaurant->is_verified ? 'Unverify' : 'Verify' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    const lat{{ $restaurant->id }} = {{ $restaurant->latitude ?? 0 }};
                    const lng{{ $restaurant->id }} = {{ $restaurant->longitude ?? 0 }};

                    let restaurantMap{{ $restaurant->id }} = L.map('restaurantMap{{ $restaurant->id }}', {
                        center: [lat{{ $restaurant->id }}, lng{{ $restaurant->id }}],
                        zoom: 17,
                        zoomControl: true,
                        dragging: true,
                    });

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(restaurantMap{{ $restaurant->id }});

                    L.marker([lat{{ $restaurant->id }}, lng{{ $restaurant->id }}]).addTo(restaurantMap{{ $restaurant->id }});

                    const mapModal{{ $restaurant->id }} = document.getElementById('viewModal{{ $restaurant->id }}');
                    mapModal{{ $restaurant->id }}.addEventListener('shown.bs.modal', function() {
                        setTimeout(() => {
                            restaurantMap{{ $restaurant->id }}.invalidateSize();
                            restaurantMap{{ $restaurant->id }}.setView([lat{{ $restaurant->id }},
                                lng{{ $restaurant->id }}
                            ]);
                        }, 300);
                    });
                </script>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No restaurants found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.single-lightbox').forEach(function(el) {
                lightGallery(el, {
                    dynamic: false,
                    download: false,
                    selector: 'this',
                    controls: false,
                    loop: false,
                    closable: true,
                    thumbnail: false,
                    plugins: [lgZoom],
                });
            });

            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                thumbnail: true,
                zoom: true,
                download: false,
                fullScreen: true,
                selector: 'a'
            });
        });
    </script>

    {{-- Pagination --}}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="page-nation">
                {{ $restaurants->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
