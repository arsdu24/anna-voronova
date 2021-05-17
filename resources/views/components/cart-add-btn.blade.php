<div class="proButton clearfix">
<form action="/cart/add" method="post" enctype="multipart/form-data"
        class="formAddToCart">
    <input type="hidden" name="id" value="{{$value}}"/>
    @if($type=="add")
    <button class="btn  btnProduct btnAddToCart" type="submit"
            value="Submit" title="Add to Cart">
        <span class="icons icon-handbag"></span>
        <span class="text">Add to Cart</span>
    </button>
    @elseif($type=="options") 
      <a class="btn btnProduct btnAddToCart"
        href="/products/{{$href}}" title="Select options">
        <span class="icons icon-handbag"></span>
        <span class="select_options text">Select options</span>
    </a>
    @endif
</form>

</div>



 