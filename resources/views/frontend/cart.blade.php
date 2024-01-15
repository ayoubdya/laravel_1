@extends('layouts.customer')


@section('title')
My Cart
@endsection

@section('content')
<div class="py-5">

</div>
<div class="py-3 mb-3 mt-2 shadow-sm backgroundofroutes border-top">
  <div class="container">
    <h6 class="mb-0">
      <a href="{{url('/')}}">Home</a>/
      <a href="{{url('cart')}}">Cart</a>
    </h6>
  </div>
</div>
<div class="container my-2">
  <div class="card shadow mycartitems ">
    @if($cartItem->count() > 0)
    <div class="card-body">
      @php
      $total = 0;
      @endphp
      @foreach ($cartItem as $item)
      <div class="row product_data border-bottom border-light my-4 d-flex justify-content-around align-items-center ">
        <div class="col-md-2">
          <img src="{{asset('upload/product/'.$item->products->image)}}" height="80px" width="90px" alt="Image Here">
        </div>
        <div class="col-md-3 text-center ">
          <h5>{{$item->products->name}}</h5>
        </div>
        <div class="col-md-2 text-center ">
          <h5>MAD {{$item->products->selling_price}}</h5>
        </div>
        <div class="col-md-3">
          <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
          @if($item->products->qty >= $item->prod_qty)
          <label for="quantity">Quantity</label>
          <div class="input-group text-center mb-3" style="width:8.125rem">
            <button class="input-group-text changeQuantity decrement-btn">-</button>
            <input type="text" value="{{$item->prod_qty}}" readonly
              class="form-control bg-light quantity_input text-center">
            <button class="input-group-text changeQuantity increment-btn">+</button>
          </div>
          @php
          $total += $item->products->selling_price * $item->prod_qty;
          @endphp
          @else
          <h5>Out of Stock</h5>
          @endif

        </div>
        <div class="col-md-2">
          <button class="btn btn-outline-danger deleteCartItem"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </div>

      @endforeach
    </div>
    <div class="card-footer d-flex flex-column">
      <div class="d-flex align-items-center justify-content-end text-center">
        <h6 class="float-end">Total Price : MAD {{$total}}</h6>
      </div>
      <hr>
      <div class="d-flex align-items-center justify-content-end">
        <a href="{{url('checkout')}}" class="btn btn-outline-success float-end ">Check out</a>
      </div>
    </div>

    @else
    <div class="card-body d-flex align-items-center justify-content-center flex-column">
      <h2 class="p-2 m-1">Your <i class="fa fa-shopping-cart"></i>Cart is Empty</h2>
      <a href="{{url('category')}}" class="btn p-2 m-1 btn-outline-primary float-end">Continue Shopping</a>
    </div>
    @endif
  </div>
  <div class="py-5">

  </div>
  <div class="py-4">

  </div>
  <div class="py-5">

  </div>
  <div class="py-5">

  </div>
</div>

@endsection


@section('scripts')
<script>

  $(document).ready(function ()        ement - btn').click(function (e) {
      e.lt();
  var inc_      is).closest('.product_data').find('.quantity_input').val();

  var value = pa      alue, 10);
  value = isNaN(value);
  if (value < 10) {
    $(this).c uc        quantity_        e);
  }
    })
  $('.decrement-btn').click(function (e) {
    fa.log('hello')

    var dec_value = $(th      '.product_data').fin      _input').val();
    parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value          value--;
    $(this).closest(ta').find('.quantity_input').val(v       } 
    })

   ar        nction(e        entDefault();
  $.ajaxSetup({
    headers: {
      'X-CSR      'm = "sr    ]').attr('content')
    }
  });

  d_id = $(this).close      _data').find(';

  $.d: "POST",
    url: "delete-cart-item",
      data: {
         d'                  success: f ction (response) {
          // window.location.reload();
        mycartite        on.hre + " .myca            swal("Done!", `${resp        succss")
  })

  $('.cha        ick              e.preventDe fault();
  {
      'X-CSRF-TOKEN': $('m          "]').attr('content')
    }
      });

  var prod_          ('.product_data').find('.prod_id').val();
  (t('.    daa'.quantity_input').val();

      $.ajax({
    d: "POST",
    u      cart",
                  'prod_id            'prod_qty': prod_qty
        },
    success: function (ocati      
        }
     })
    })
  }) 
</script>

@endsection