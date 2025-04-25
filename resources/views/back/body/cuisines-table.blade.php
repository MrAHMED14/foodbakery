<div class="w-100 overflow-auto">
    <table class="table table-bordered" id="cusineTypeTable" style="min-width: 800px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cusineTypes as $cusineType)
                <tr data-name="{{ strtolower($cusineType->name) }}">
                    <td>{{ $cusineType->id }}</td>
                    <td>{{ $cusineType->name }}</td>
                    <td>{{ $cusineType->description ?? 'NULL' }}</td>
                    <td>
                        <span class="badge py-1 {{ $cusineType->is_popular ? 'bg-success' : 'bg-info' }}"
                            style="width: fit-content; text-transform: uppercase;">
                            {{ $cusineType->is_popular ? 'popular' : 'normal' }}
                        </span>
                    </td>
                    <td>
                        <button class="border-0 text-center w-100 bg-transparent" data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $cusineType->id }}">
                            <i class="fa fa-eye text-dark"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="viewModal{{ $cusineType->id }}" tabindex="-1"
                    aria-labelledby="viewModalLabel{{ $cusineType->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel{{ $cusineType->id }}">
                                    Edit Cuisine Type #{{ $cusineType->id }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <form method="POST" action="{{ route('admin.cuisines.update', $cusineType->id) }}"
                                    id="updateCuisineForm{{ $cusineType->id }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="name{{ $cusineType->id }}" class="form-label">Name</label>
                                        <input type="text" name="name" id="name{{ $cusineType->id }}"
                                            class="form-control" value="{{ old('name', $cusineType->name) }}" required>

                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description{{ $cusineType->id }}"
                                            class="form-label">Description</label>
                                        <textarea name="description" id="description{{ $cusineType->id }}" rows="3" class="form-control">{{ old('description', $cusineType->description) }}</textarea>

                                        @error('description')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="is_popular{{ $cusineType->id }}" class="form-label">Popularity
                                            Status</label>
                                        <select name="is_popular" id="is_popular{{ $cusineType->id }}"
                                            class="form-select">
                                            <option value="1" {{ $cusineType->is_popular ? 'selected' : '' }}>
                                                Popular</option>
                                            <option value="0" {{ !$cusineType->is_popular ? 'selected' : '' }}>
                                                Normal</option>
                                        </select>

                                        @error('is_popular')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer justify-content-start items-center">
                                <button type="submit" form="updateCuisineForm{{ $cusineType->id }}"
                                    class="btn bg-success text-white">
                                    Update
                                </button>

                                <form action="{{ route('admin.cuisines.destroy', $cusineType->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this cuisine type?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-danger text-white">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No cusine types found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-nation">
            {{ $cusineTypes->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
