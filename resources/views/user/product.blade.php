<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Winter</title>
  <link rel="icon" href="{{asset('user/img/favicon.png')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('user/css/lightslider.min.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('user/css/all.css')}}">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('user/css/themify-icons.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>

<body class="bg-white">
@include('user.partials.header')

@include('user.partials.error')

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">






              
              @if($product->images)
              @foreach(json_decode($product->images,true) as $image)
                <div data-thumb=" {{ asset('storage/'.$image) }} ">
                  <img src=" {{ asset('storage/'.$image) }}" />
                </div>
              @endforeach
            @endif


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
                      <img src="{{ asset('storage/'.$product->image) }}" alt="">
                      
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





  <!--::footer_part start::-->
  <footer class="footer_part">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-sm-6 col-lg-2">
                  <div class="single_footer_part">
                      <h4>Category</h4>
                      <ul class="list-unstyled">
                          <li><a href="#">Male</a></li>
                          <li><a href="#">Female</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Fashion</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-2">
                  <div class="single_footer_part">
                      <h4>Company</h4>
                      <ul class="list-unstyled">
                          <li><a href="">About</a></li>
                          <li><a href="">News</a></li>
                          <li><a href="">FAQ</a></li>
                          <li><a href="">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="single_footer_part">
                      <h4>Address</h4>
                      <ul class="list-unstyled">
                          <li><a href="#">200, Green block, NewYork</a></li>
                          <li><a href="#">+10 456 267 1678</a></li>
                          <li><span>contact89@winter.com</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                  <div class="single_footer_part">
                      <h4>Newsletter</h4>
                      <div id="mc_embed_signup">
                          <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscribe_form relative mail_part">
                              <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                  onblur="this.placeholder = ' Email Address '">
                              <button type="submit" name="submit" id="newsletter-submit"
                                  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                              <div class="mt-10 info"></div>
                          </form>
                      </div>
                      <div class="social_icon">
                          <a href="#"><i class="ti-facebook"></i></a>
                          <a href="#"><i class="ti-twitter-alt"></i></a>
                          <a href="#"><i class="ti-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="copyright_text">
                      <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <script src="{{asset('user/js/jquery-1.12.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{asset('user/js/popper.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <!-- easing js -->
  <script src="{{asset('user/js/jquery.magnific-popup.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('user/js/lightslider.min.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('user/js/mixitup.min.js')}}"></script>
  <script src="{{asset('user/js/lightslider.min.js')}}"></script>
  <!-- particles js -->
  <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
  <!-- slick js -->
  <script src="{{asset('user/js/slick.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('user/js/waypoints.min.js')}}"></script>
  <script src="{{asset('user/js/contact.js')}}"></script>
  <script src="{{asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.form.js')}}"></script>
  <script src="{{asset('user/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('user/js/mail-script.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('user/js/custom.js')}}"></script>
</body>

</html>