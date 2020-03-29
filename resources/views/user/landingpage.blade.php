@extends('user.app')

    @section('main-content')


    @include('user.partials.banner')
    <!-- new arrival part here -->
    <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="arrival_tittle">
                        <h2>new arrival</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="arrival_filter_item filters">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container">


                        <div class="single_arrivel_item weidth_1 mix shoes">
                            <img src="{{asset('user/img/arrivel/arrivel_5.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>{{$product1[0]->name}}</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>${{$product1[0]->price}}</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>

                        @foreach($products as $product)

                        <div class="single_arrivel_item weidth_2 mix women">
                            <img src="{{asset('user/img/arrivel/arrivel_2.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>{{$product->name}}</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>${{$product->price}}</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        
                        
                        
                        


                        
                        <div class="single_arrivel_item weidth_1 mix shoes men">
                            <img src="{{asset('user/img/arrivel/arrivel_6.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>{{$product2[0]->name}}</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>${{$product2[0]->price}}</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- new arrival part end -->
    @endsection