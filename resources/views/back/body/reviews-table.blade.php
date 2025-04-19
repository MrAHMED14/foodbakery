<div class="w-100 overflow-auto">
    <table class="table table-bordered" id="restaurantTable" style="min-width: 800px;">
        <thead>
            <tr>
                <th>Restaurant</th>
                <th>User</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Reply</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reviews as $review)
                <tr>
                    <td>{{ $review->restaurant->name }}</td>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->rating }}/5</td>
                    <td>{{ $review->comment }}</td>
                    <td>
                        @if ($review->response)
                            <div><strong>Reply:</strong> {{ $review->response->reply }}</div>
                        @else
                            <em>No reply yet</em>
                        @endif
                    </td>
                    <td>
                        <button class="border-0 text-center w-100 bg-transparent" data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $review->id }}">
                            <i class="fa fa-eye text-dark"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="viewModal{{ $review->id }}" tabindex="-1"
                    aria-labelledby="modalLabel{{ $review->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $review->id }}">Review Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <p><strong>Restaurant:</strong><strong><em>#{{ $review->restaurant->id }}</em></strong>
                                    {{ $review->restaurant->name }}</p>
                                <p><strong>User: </strong><strong><em>#{{ $review->user->id }}</em></strong>
                                    {{ $review->user->name }}</p>
                                <p><strong>Rating: </strong> {{ $review->rating }}/5</p>
                                <p><strong>Comment: </strong><br>{{ $review->comment }}</p>
                                <p><small class="text-muted">Posted on
                                        {{ $review->created_at->format('d M Y, H:i') }}</small></p>
                                <form method="POST" action="{{ route('admin.reviews.destroy', $review->id) }}" onsubmit="return confirm('Are you sure you want to delete this Review?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-danger text-white font-semibold"
                                        style="display: flex; align-items: center; gap: 4px;">
                                        <i class="far fa-trash-alt"></i>
                                        Review
                                    </button>
                                </form>

                                @if ($review->response)
                                    <hr>
                                    <p><strong>Reply: </strong><br>{{ $review->response->reply }}</p>
                                    <p><small class="text-muted">Replied on
                                            {{ $review->response->created_at->format('d M Y, H:i') }}</small></p>
                                    <form method="POST"
                                        action="{{ route('admin.replies.destroy', $review->response->id) }}" onsubmit="return confirm('Are you sure you want to delete this Reply?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger text-white font-semibold"
                                            style="display: flex; align-items: center; gap: 4px;">
                                            <i class="far fa-trash-alt"></i>
                                            Reply
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No reviews found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-nation">
            {{ $reviews->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
