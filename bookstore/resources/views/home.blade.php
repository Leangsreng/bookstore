@extends('layouts.app')

@section('promo')
    <div class="row">
        <div class="col mt-4">
            <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3" id="promo-banner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner1.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner2.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner3.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner4.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner5.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner6.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner7.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner8.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('categories')
    <div class="row">
        <div class="col mt-4">
            <h5 class="fw-semibold mt-3">CATEGORIES</h5>
        </div>
    </div>
    <div class="row">
        <div class="d-flex mt-3 mb-4 align-items-center justify-content-between text-center">
            <ul class="list-group list-group-horizontal list-unstyled">
                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg1"
                        src="{{ asset('img/categories/novel.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg1">Novel</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg2"
                        src="{{ asset('img/categories/biography.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg2">Biography</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg3"
                        src="{{ asset('img/categories/comics.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg3">Comics</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg4"
                        src="{{ asset('img/categories/magazine.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg4">Magazine</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg5"
                        src="{{ asset('img/categories/dictionary.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg5">Dictionary</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg6"
                        src="{{ asset('img/categories/script.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg6">Script</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg7"
                        src="{{ asset('img/categories/manga.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg7">Manga</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg8"
                        src="{{ asset('img/categories/encyclopedia.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg8">Encyclopedia</label>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('recommendations')
    <!-- RECOMMENDATIONS -->
    <h5 class="fw-semibold mt-4">RECOMMENDATIONS</h5>
   
    <div class="d-flex justify-content-between text-center mt-3">
        @forelse ($products as $item)
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/' . $item->image) }}" alt="{{ $item->title }}"
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">{{ $item->name ?: 'No title available' }}</h5>
                <span class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">{{ $item->category ?: 'Novel' }}</span>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">$</small>
                            <big class="me-1" style="color: rgb(67, 170, 255)">{{ $item->harga ?: 'N/A' }}</big>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="{{ route('products.show', $item->id) }}"></a>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    <p class="card-text">No products available.</p>
                </div>
            </div>
        @endforelse
    </div>
@endsection



