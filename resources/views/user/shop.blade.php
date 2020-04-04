@extends('user.app')

@section('main-content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


        <!--================Category Product Area =================-->
        <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('shop.index',['category' => $category->slug])}}">{{$category->name}}</a>
                                    </li>
                                   @endforeach
                                  
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Product filters</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <p>Brands</p>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Apple</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Asus</a>
                                    </li>
                                    <li class="active">
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Gionee</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Micromax</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Samsung</a>
                                    </li>
                                </ul>
                                <ul class="list">
                                    <p>color</p>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                            <!-- <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <div id="slider-range"></div>
                                    <input type="text" class="js-range-slider" value="" />
                                    <div class="d-flex align-items-center">
                                        <div class="price_text">
                                            <p>Price :</p>
                                        </div>
                                        <div class="price_value d-flex justify-content-center">
                                            <input type="text" class="js-input-from" id="amount" readonly />
                                            <span>to</span>
                                            <input type="text" class="js-input-to" id="amount" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item col-lg-6">
                                    <h2>{{$categoryName}}</h2>
                                </div>
                                <div class="col-lg-6">
                                <strong>Price:</strong>
                            <a href="{{route('shop.index', ['category'=> request()->category, 'sort' => 'low_high'])}}" class="price_color">low to high</a>|<a href="{{route('shop.index', ['category'=> request()->category, 'sort' => 'low_high'])}}" class="price_color">high to low</a>
                                </div>
                                <!-- <div class="product_top_bar_iner product_bar_item d-flex">
                                    <div class="product_bar_single">
                                        <select class="wide">
                                            <option data-display="Default sorting">Default sorting</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="product_bar_single">
                                        <select>
                                            <option data-display="Show 12">Show 12</option>
                                            <option value="1">Show 20</option>
                                            <option value="2">Show 30</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        

                        @forelse ($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="{{asset('user/img/category/category_1.png')}}" alt="">
                                   
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
                        

                        <div class="col-lg-12 text-center">
                            {{$products->appends(request()->input())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection