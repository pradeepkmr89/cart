@extends('layout')
   
@section('content')
    
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
            <!-- bbb_deals -->
            <div class="bbb_deals">
            
                 <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><img src="{{ $product->image }}" alt="{{ $product->name }}"></div>
                        <div class="bbb_deals_content">
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_category">{{ $product->name }}</div>
                                <div class="bbb_deals_item_price_a ml-auto">$ {{ $product->price }} </div>
                            </div>
                            
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                     <div class="sold_stars ml-auto">  
                                      <p class="btn-holder">
                                        <a href="javascript:void(0);" class="btn btn-warning btn-block text-center addcart" data-id="{{$product->id}}" role="button">Add to cart</a> </p>
                                  </div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    @endforeach
</div>
    
@endsection
@section('scripts')

 <script type="text/javascript">
  $(document).ready(function(){ 
    $(".addcart").click(function (e) {
        e.preventDefault(); 
        var productid = $(this).data('id');  
        var url =  '{{ url("add-to-cart") }}'+'/'+productid;
        $.ajax({ 
            url: url,
            method: "get", 
            success: function (response) {
                if(response.status =='success'){

                $("#res").html(`<div class="alert alert-success">Product added to cart successfully!</div>`);
                $("#totalcart").html(response.totalcart)
                }
              // window.location.reload();
            }
        });
    });
    });
   
  
</script>
     
@endsection