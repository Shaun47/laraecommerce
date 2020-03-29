@extends('user.app')

@section('main-content')

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="{{asset('user/img/product_details/prodect_details_1.png')}}">
                <img src="{{asset('user/img/product_details/prodect_details_1.png')}}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>{{$product->name}}</h3>
            <h2>${{$product->price}}</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
            </ul>
            <p>
                {{$product->details}}
            </p>
            <p>
                {{$product->description}}
            </p>
            <div class="card_area">
              <!-- <div class="product_count d-inline-block">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div> -->
              <div class="add_to_cart">

                <form action="{{route('cart.store')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$product->id}}">
                  <input type="hidden" name="name" value="{{$product->name}}">
                  <input type="hidden" name="price" value="{{$product->price}}">
                  <button class="btn_3" type="submit">Add to Cart</button>
                </form>
                  <!-- <a href="#" class="btn_3">add to cart</a> -->
                  
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->


    <!-- product_list part start-->
    <section class="product_list best_seller padding_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>You might also like</h2>
          </div>
        </div>
      </div>
      <div class="row">

        @foreach($youMightAlsoLike as $product)
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src="{{asset('user/img/category/category_2.png')}}" alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="{{route('shop.show',$product->slug)}}"><h5>{{$product->name}}</h5></a>
                          <p>${{$product->price}}</p>
                      </div>
                  </div>
              </div>
          </div>
        @endforeach


      </div>
    </div>
  </section>
  <!-- product_list part end-->
@endsection