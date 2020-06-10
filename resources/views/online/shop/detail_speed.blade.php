<div class="col-md-12">
    <h3 class="title">{{$product->short_describe}}</h3>
    <div class="hr"></div>
</div>
<div class="col-md-5">
    <p class="image-product"><img src="{{ asset('upload/products/'.$product->image)}}" alt="all-in-one"></p>
    @foreach($categories as $key => $category1)
        @if($category1->id==$product->product_category)
            <div class="icon"><img src="{{ asset('upload/categorys/'.$category1->image)}}" alt=""></div>
        @endif
    @endforeach
</div>
<div class="col-md-7 content-body">
    <p class="titletag"><span id="idpro">{{$product->name}}</span> Giá: {{$product->price}}</p>
    <table>
        <tr>
            <td colspan="2"><p class="description" style="display: inline-block;"><img
                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png"
                        alt="check"></p><b>Tính năng nổi bật:</b>
                <br>
                &emsp;{{$product->feature}}
            </td>
        </tr>
        <tr>
            <td colspan="2"><p class="description" style="display: inline-block;"><img
                        src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png"
                        alt="check"></p><b>Mô tả:</b>
                <br>
                &emsp;{{$product->description}}
            </td>
        </tr>
    </table>
 </div>
<div class="col-md-12">
    <p class="button"><a href="{{ asset('shop/landing/'.$product->id)}}" class="btn btn-default"
                         target="_blank">XEM CHI TIẾT</a> <a href="javascript:void(0)"
                                                             class="btn btn-second btn-form-crm"
                                                             data-name="BUFF Livestream">SỬ DỤNG NGAY</a></p>
</div>
