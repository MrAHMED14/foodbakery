<div class="w-100 overflow-auto">
    <table class="table table-bordered" id="userTable" style="min-width: 800px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr data-name="{{ strtolower($user->name) }}">
                    <td style="{{ $user->status === 'blocked' ? 'color: #c33333' : '' }}">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone ?? 'NULL' }}</td>
                    <td>
                        @if ($user->role === \App\Models\User::ROLE_USER)
                            <span class="badge py-1" style="text-transform: uppercase; background-color: #356e97;">
                                <i class="fas fa-user"></i>
                                {{ $user->role }}
                            </span>
                        @elseif ($user->role === \App\Models\User::ROLE_RESTAURANT)
                            <span class="badge py-1" style="text-transform: uppercase; background-color: #a13133;">
                                <i class="fas fa-id-card"></i>
                                {{ $user->role }}
                            </span>
                        @else
                            <span class="badge py-1" style="text-transform: uppercase; background-color: #343a40;">
                                <i class="fas fa-user-shield"></i>
                                {{ $user->role }}
                            </span>
                        @endif
                    </td>
                    <td>
                        <button class="border-0 text-center w-100 bg-transparent" data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $user->id }}">
                            <i class="fa fa-eye text-dark"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="viewModal{{ $user->id }}" tabindex="-1"
                    aria-labelledby="modalLabel{{ $user->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $user->id }}">User Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="w-100" style="position: relative;">
                                    <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('front/extra-images/user-placeholder.png') }}"
                                        style="width: 100px; border-radius: 5px; aspect-ratio: 1 / 1;  object-fit: cover; object-position: center;">
                                </div>
                                <h3 style="margin-top: 2rem;">{{ $user->name }}</h3>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>Phone:</strong> {{ $user->phone ?? 'NULL' }}</p>
                                <p><strong>Email verified:</strong>
                                    {{ $user->email_verified_at ? 'Yes - at ' . $user->email_verified_at : 'none' }}
                                </p>
                                <p><strong>Created at:</strong> {{ $user->created_at }}</p>
                                <p><strong>Role:</strong> <span
                                        style="text-transform: capitalize;">{{ $user->role }}</span></p>

                                @if ($user->role === \App\Models\User::ROLE_RESTAURANT)
                                    <p style="margin: 0"><strong>Restaurant Name:</strong>
                                        {{ $user->restaurant->name }}</p>
                                    <a style="margin-bottom: 1rem;"
                                        href="{{ route('admin.restaurants', ['search' => $user->restaurant->email]) }}">View
                                        restaurant profile card</a>
                                @endif

                                @if ($user->role !== \App\Models\User::ROLE_ADMIN)
                                    <div class="modal-footer justify-content-start align-items-end p-0">
                                        <form action="{{ route('admin.users.updateStatus', $user->id) }}"
                                            onsubmit="return confirm('Are you certain you want to update this user\'s status?');"
                                            method="POST" class="d-flex justify-content-start align-items-end gap-2">
                                            @csrf
                                            @method('PUT')
                                            <div class="min-width: 250px;">
                                                <label for="status">Status</label>
                                                <select name="status" class="form-select">
                                                    <option value="active"
                                                        {{ $user->status === 'active' ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="blocked"
                                                        {{ $user->status === 'blocked' ? 'selected' : '' }}>Blocked
                                                    </option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn bg-info text-white">Update</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-nation">
            {{ $users->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
