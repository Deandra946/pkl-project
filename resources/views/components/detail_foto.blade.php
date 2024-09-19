<!-- Modal -->
<div class="modal fade" id="imageModal-{{ $image->id }}" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ Storage::url('images_url/' . $image->image_url) }}" alt="{{ $image->title }}" class="img-fluid">
                <p>{{ $image->description ?? 'No description available' }}</p>
                <p>Uploaded by: {{ $image->user->name }}</p>

                <!-- Navigation arrows -->
                
            </div>
        </div>
    </div>
</div>
