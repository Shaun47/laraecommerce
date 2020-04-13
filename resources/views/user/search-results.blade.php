@extends('user.app')

@section('main-content')
   
@include('user.partials.error')

        <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                    <h1>Search Results</h1>

                    <p>{{$products->count()}} Result(s) for '{{request()->input('query')}}'</p>
                    <div class="row">
                    @forelse ($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="">
                                   
                                    <div class="category_product_text">
                                        <a href="{{route('shop.show',$product->slug)}}"><h5>{{$product->name}}</h5></a>
                                        <p>${{$product->price}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <p>No item found</p>
                        @endforelse
                    </div>
                    <div class="col-lg-12 text-center">
                            {{$products->appends(request()->input())->links()}}
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection