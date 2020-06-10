<div class="col-md-12">
									<h3 class="title">{{$product->short_describe}}</h3>
									<div class="hr"></div>
								</div>
								<div class="col-md-5">
									<p class="image-product"><img src="{{ asset('upload/products/'.$product->image)}}" alt="all-in-one"></p>

											@foreach($categoriespostss as $key => $category1)
											@if($category1->id==$product->product_category)
											<div class="icon"><img src="{{ asset('upload/categorys/'.$category1->image)}}" alt=""></div>
											@endif
											@endforeach

									</div>
								<div class="col-md-7 content-body">
									<p class="titletag"><span id="idpro">{{$product->name}}</span> Giá: {{$product->price}}</p>
									<table>


										<tr>
											<td colspan="2"><p class="description" style="display: inline-block;"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"></p><b>Tính năng nổi bật:</b>
											<br>
											&emsp;{{$product->feature}}
											</td>

										</tr>
										<tr>
											<td colspan="2"><p class="description" style="display: inline-block;"><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"></p><b>Mô tả:</b>
												<br>
												&emsp;{{$product->description}}
											</td>

										</tr>
									</table>
									{{-- <p class="description">{{$product->feture}}<br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check">


										<br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check">  <br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check">  <br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"> <br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"> <b>Simple Fanpage:</b><br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"> <b>Simple Zalo:</b> <br><img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/check-icon.png" alt="check"> <b>Simple Instagram:</b></p> --}}
								</div>
								<div class="col-md-12">
									{{-- <p class="description">Bộ công cụ giúp chủ doanh nghiệp, chủ shop TỰ ĐỘNG HÓA được nhiều hoạt động thiết thực trong quá trình làm marketing, bán hàng, cskh trên Facebook, Zalo & Instagram</p> --}}
									<p class="button"><a href="{{ asset('upload/landingPages/'.$product->link_product_detail)}}" class="btn btn-default" target="_blank">XEM CHI TIẾT</a> <a href="javascript:void(0)" class="btn btn-second btn-form-crm" data-name="BUFF Livestream">SỬ DỤNG NGAY</a></p>
								</div>
