@extends('layouts.template')

@section('content')
    <div class="page-content">
        <section class="banner">
            <div class="content-left">
                <h1 class="brand-title">SutterSnap</h1>
                <p class="p-brand">Capture Every Moment, Share Your Vision, and Discover the World Through the Lens of
                    Creativity.</p>
                <div class="btn-upload">
                    <a href="{{ route('images.create') }}" class="upload">Upload</a>
                </div>
            </div>
            <div class="content-right">
                <img src="{{ Storage::url('banner-img/Rectangle 4.png') }}" alt="" class="img-featured">
                <div class="content-featured">
                    <h1 class="featured-title">Featured</h1>
                    <p class="account-featured">Photo by</p>
                </div>
            </div>
        </section>
        <section class="galeri">
            <div class="card-galeri" data-aos="fade-up">
                @forelse ($images as $i)
                    <div class="galeri-item">
                        <div class="btn-action">
                            <button class="download"><i class="fa-solid fa-arrow-down"></i></button>
                            <div class="btn-right">
                                <button class="like"><i class="fa-regular fa-heart"></i></button>
                                <button class="save"><i class="fa-regular fa-bookmark"></i></button>
                            </div>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal-{{ $i->id }}">
                            <img class="thumbnail" src="{{ Storage::url('images_url/' . $i->image_url) }}"
                                alt="{{ $i->title }}">
                        </a>
                        <div class="profile">
                            <img src="{{ Storage::url('user-deafult/Group 112.png') }}" alt="" class="pp_sender">
                            <div class="name_sender">
                                <h4 class="name">{{ $i->user->name }}</h4>
                                <p class="status">online</p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="imageModal" class="modal">
                        <!-- Tombol Close di luar konten -->
                        <span class="close">&times;</span>

                        <!-- Tombol Next dan Prev di luar konten -->
                        <span class="prev">&#10094;</span>
                        <span class="next">&#10095;</span>

                        <!-- Konten Modal -->
                        <div class="modal-content">
                            <img id="modalImage" src="" alt="Image">
                            <div id="imageInfo">
                                <!-- Informasi gambar atau deskripsi -->
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Data masih kosong</p>
                @endforelse
            </div>
        </section>
    </div>
    <x-search />
    <x-loginn />
@endsection
