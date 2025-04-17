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
                        <span class="badge {{ $restaurant->is_verified ? 'bg-success' : 'bg-danger' }}">
                            {{ $restaurant->is_verified ? 'verified' : 'not verified' }}
                        </span>
                    </td>
                    <td>
                        <button class="border-0 text-center w-100 bg-transparent" data-bs-toggle="modal" data-bs-target="#viewModal{{ $restaurant->id }}">
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
                                    class="w-100" style="height: 250px; object-fit: cover; object-position: center; border-radius: 2px;">

                                    <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                    class="ring-1 ring-white "
                                    style="position: absolute; bottom: -20px; left: 20px; width: 100px; border-radius: 5px; outline: 5px solid white; aspect-ratio: 1 / 1;  object-fit: cover; object-position: center;">
                                </div>
                                <h3 style="margin-top: 2rem;">{{ $restaurant->name }}</h3>
                                <p><strong>Description:</strong> {{ $restaurant->description }}</p>
                                <p><strong>City:</strong> {{ $restaurant->city }}</p>
                                <p><strong>Phone:</strong> {{ $restaurant->phone }}</p>
                                <p><strong>Email:</strong> {{ $restaurant->email }}</p>
                                <p><strong>Verified:</strong> {{ $restaurant->is_verified ? 'Yes' : 'No' }}</p>
                                <form method="POST" action="{{ route('admin.toggleVerification', $restaurant->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="is_verified"
                                        value="{{ $restaurant->is_verified ? 0 : 1 }}">
                                    <button class="btn bg-light mt-2" type="submit">
                                        {{ $restaurant->is_verified ? 'Unverify' : 'Verify' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No restaurants found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-nation">
            {{ $restaurants->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
