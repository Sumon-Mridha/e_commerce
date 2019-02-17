@extends('layouts.app')
@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title m-b-30">Single Images</h4>

                            <div class="row">
                                @if (isset($products))
                                    @foreach ($products as $product)
                                        <div class="col-md-6 col-lg-3">
                                            <!-- Simple card -->
                                            <div class="card m-b-30">
                                                <img class="card-img-top img-fluid" src="{{ asset('images/small/img-1.jpg') }}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->name }}</h5>
                                                    <p class="card-text">{{$product->description}}</p>
                                                    <label>Cost: {{ $product->price }}</label>
                                                    <label style="float:right;">Store: {{ $product->store_amount }}</label><br>
                                                    <form action="">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id}}">
                                                        <button class="btn btn-primary waves-effect waves-light" style="width: 45%;">Buy</button>
                                                        <a href="#" class="btn btn-custom waves-effect waves-light" style="width: 45%;">Add to Wishlist</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    @endforeach
                                @else
                                    <p>There is no products available...!!!</p>
                                @endif
                                
                            </div>

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
@endsection