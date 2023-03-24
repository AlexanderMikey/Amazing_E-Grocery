@extends('templates.main')
@section('title', 'Home')

@section('content')
    <div class="container-lg home d-flex flex-column mt-4">
        <div class="row justify-content-center mb-5">
            @foreach ($products as $product)
                <div class="col-12 col-md my-3">
                    <div class="card background border-0 rounded-4 p-2">
                        <div class="d-flex justify-content-center m-2 p-1 bg-white rounded-4">
                            <img class="img-fluid cloth-image rounded-4"src="{{ asset('/storage/images/' . $product->image) }}" alt="Card image cap">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="text-center mb-2 fs-5">{{ $product->name }}</h5>
                            <a href="{{ route('detailProduct', $product->id) }}" class="text-center">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mx-3 mb-4 mt-auto d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
