@extends('welcome')

@section('content')
    @if (count($products) === 0)
    <div class="d-flex justify-content-center">
        <p class="text-muted">There is no data...</p>
    </div>
    <div class="d-flex justify-content-center">
        <a href="orderEvent" class="btn btn-dark">Add Product</a>
    </div>
    @elseif (count($products) > 0)

    <h1 class="text-center">Order</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($products as $index => $product)
                            <div class="col-sm-6">
                                <div class="card border-0" style="width: 18rem;">

                                    {{-- <img src="{{ $product->img_path }}" class="card-img-top" alt="..."> --}}
                                    {{-- <img src="../storage/image/p1Fczj6eHqNMtPcxtLiDKrTMz4vdfLgefP0xBYn5.png" class="card-img-top" alt="..."> --}}
                                    {{-- image/p1Fczj6eHqNMtPcxtLiDKrTMz4vdfLgefP0xBYn5.png --}}
                                    {{-- <img src="asset('/images/'.{{ $product->img_path}})" class="card-img-top" alt="..."> --}}
                                    {{-- {{ $product->img_path }} --}}
                                    {{-- <img src="{{ url('storage/app/image/'.$product->img_path) }}" /> --}}

                                    <img src="storage/image/p1Fczj6eHqNMtPcxtLiDKrTMz4vdfLgefP0xBYn5.png" />
                                    <p>{{ $product->img_path }}</p>
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $product->name }}</h6>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <h4 class="card-text">$ {{ $product->price }}.00</h4>
                                        <div><a href="{{ route('content.orderDetail',$product->id) }}" class="btn bg-success text-white">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endsection
