@extends('user.app')

@section('main-content')
@if(Session::has('success'))
    <div class="alert alert-block alert-success">
        <i class=" fa fa-check cool-green "></i>
        {{ nl2br(Session::get('success')) }}
    </div>
  @endif


  @if(Cart::count() > 0)
  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Remove</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              


            @foreach(Cart::content() as $item)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{ asset('storage/'.$item->model->image) }}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{$item->model->name}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>${{$item->model->price}}</h5>
                </td>
                <td>
                    <!-- <a href="#">Remove</a> -->
                    <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">Remove</button>
                    </form>
                </td>
                <td>
                  <div class="product_count">
                      <form action="{{route('cart.update',$item->rowId)}}" method="post">
                          @csrf
                          {{method_field('PATCH')}}
                          <div class="row">
                            <div class="col-md-6">
                              <!-- <span class="input-number-decrement"> <i class="ti-minus"></i></span> -->
                              <input class="input-number quantity" name="quantity"  type="text" value="{{$item->qty}}" min="0" max="10">
                              <!-- <span class="input-number-increment"> <i class="ti-plus"></i></span> -->
                            </div>
                            <div class="col-md-6"><button type="submit" class="btn btn-primary">Update</button></div>
                          </div>
                          
                      </form>          
                      
                  </div>
                </td>
                <td>
                  <h5>${{$item->qty*$item->price}}</h5>
                </td>
              </tr>

            @endforeach


              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="{{ route('cart.clear') }}">Clear Cart</a>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  
                </td>
              </tr>     
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>${{Cart::subtotal()}}</h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <h5>Tax</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        : ${{Cart::tax()}}
                        
                      </li>


                     
                      


                    </ul>
                    
                    
                  </div>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <h5>Total</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        : ${{Cart::total()}}
                        
                      </li>


                     
                      


                    </ul>
                    
                    
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="{{route('shop.index')}}">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
@else
<h3>No item in the cart</h3>
@endif
@endsection


@section('extra-js')
<script src="{{asset('js/app.js')}}"></script>
<script>
  // (function(){
  //   const classname = document.getElementsByClassName('quantity');
  //   // console.log(classname);
  //   Array.from(classname).forEach(function(element){
  //     // console.log(element.value);

  //     element.addEventListener("change", function(){
  //       const id = element.getAttribute('data-id');
  //         axios.post('/cart/${id}', {
  //         quantity: this.value
  //       })
  //       .then(function (response) {
  //         console.log(id);
  //       })
  //       .catch(function (error) {
  //         console.log(error);
  //       });
  //     });
  //   });


  // })();
</script>

@endsection