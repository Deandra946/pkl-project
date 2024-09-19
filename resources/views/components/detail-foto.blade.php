<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <!-- Tombol Close di luar modal -->
            <button type="button" class="btn-close btn-close-outside" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                @forelse ($image as $i )
                    <div class="left-modal">
                        <img src="{{ Storage::url('images_url/' . $i->image_url) }}" alt="">
                    </div>
                    <div class="right-modal">

                    </div>
                @empty
                    
                @endforelse
                    
                
            </div>
        </div>
    </div>
</div>
