@extends('online.app')

@section('content')

@include('online.blog.includes.headercssjs')
<body data-rsssl=1 class="page-template page-template-elementor_header_footer page page-id-7668 wp-embed-responsive jeg_toggle_dark jnews jsc_normal elementor-default elementor-template-full-width elementor-page elementor-page-7668">
    <!-- The Main Wrapper
    ============================================= -->
    <div class="jeg_viewport">
        <div class="jeg_navbar_mobile_wrapper">
            
<div class="sticky_blankspace" style="height: 60px;"></div>        </div>		<div data-elementor-type="wp-page" data-elementor-id="7668" class="elementor elementor-7668" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-62e1f56 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="62e1f56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-1355941d elementor-column elementor-col-50 elementor-top-column" data-id="1355941d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-49332dc2 elementor-widget elementor-widget-jnews_element_newsticker_elementor" data-id="49332dc2" data-element_type="widget" data-widget_type="jnews_element_newsticker_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_breakingnews clearfix jnews_module_7668_144_5e04869d8dd17   ">
                <div class="jeg_breakingnews_title"><i class="fa fa-bolt">&nbsp;</i> <span>BÀI HOT</span></div>

                <div class="jeg_news_ticker" data-autoplay='yes' data-delay='3000' data-animation='horizontal'>

                    <div class="jeg_news_ticker_items">
                    	@foreach($tops as $post)
                        <div class="jeg_news_ticker_item jeg_news_ticker_animated">
                <span>
                    <a href="{{route('online.blog.news', $post->id)}}" >{{$post->name}}</a>
                </span>
                <span class="post-date">{{date('d-m-Y', strtotime($post->created_at))}}</span>
            </div>
                @endforeach

                    </div>
                    <div class="jeg_news_ticker_control">
                        <div class="jeg_news_ticker_next jeg_news_ticker_arrow"><span>Tiếp</span></div>
                        <div class="jeg_news_ticker_prev jeg_news_ticker_arrow"><span>Trước</span></div>
                    </div>
                </div>

                <style>.jnews_module_7668_144_5e04869d8dd17 .jeg_breakingnews_title { color: #ffffff; }</style>
            </div>		</div>
				</div>
				<div class="elementor-element elementor-element-55971970 elementor-widget elementor-widget-jnews_slider_1_elementor" data-id="55971970" data-element_type="widget" data-widget_type="jnews_slider_1_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_slider_wrapper jeg_slider_type_1_wrapper jnews_module_7668_145_5e04869d8f287  ">
					<div class='jeg_slider_placeholder'>
						<div class='thumbnail-wrapper'>
							<div class='thumbnail-inner'><div class='thumbnail-container'></div></div>
						</div>
						<i class='fa fa-spin fa-circle-o-notch'></i>
					</div>

                    <div class="jeg_slider_type_1 jeg_slider" data-autoplay="" data-delay="4500" data-hover-action="">
					@foreach($tops as $post)
					@if(isset($post->categories_post->id))
                    <div class="jeg_slide_item">
                    <a href="{{route('online.blog.news', $post->id)}}" class="jeg_slide_img"><div class="thumbnail-container size-500 "><img width="750" height="234" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-750x375 size-jnews-750x375 owl-lazy" alt="Vé xe rẻ được rót vốn từ các nhà đầu tư Châu Á" data-src="{{ asset('upload/posts/'.$post->image)}}" /></div></a>
                    <div class="jeg_slide_caption">
                        <div class="jeg_caption_container">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $post->categories_post->id)}}" class="category-kinh-doanh-khoi-nghiep">{{$post->categories_post->name}}</a>
                            </div>

                            <h2 class="jeg_post_title">
                                <a href="{{route('online.blog.news', $post->id)}}" >{{$post->name}}</a>
                            </h2>
                            <div class="jeg_post_meta"><span class="jeg_meta_author">Bởi <a href="{{route('online.blog.author', $post->users_id->id)}}">{{$post->users_id->name}}</a></span><span class="jeg_meta_date">{{date('d-m-Y', strtotime($post->created_at))}}</span></div>
                        </div>
                    </div>
                	</div>
                	@endif
                	@endforeach


                    </div>
                    <div class="jeg_slider_thumbnail_wrapper">
                        <div class="jeg_slider_thumbnail">
                        	@foreach($posts as $post)
							@if(isset($post->categories_post->id))

                            <div  class="jeg_slide_thumbnail_item post-87632 post type-post status-publish format-standard has-post-thumbnail hentry category-kinh-doanh-khoi-nghiep category-review-thuong-hieu tag-cac-mang-hoa-nganh-xe-khach-viet-nam tag-cai-thien-chat-luong-dich-vu tag-nguon-luc-tang-toc-trong-linh-vuc-van-tai-va-du-lich tag-vexere-duoc-dau-tu tag-vexere-duoc-rot-von tag-vexere-goi-von-thanh-cong"><a href=""><div class="thumbnail-container size-715 "><img width="120" height="38" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 owl-lazy" alt="Vé xe rẻ được rót vốn từ các nhà đầu tư Châu Á" data-src="{{ asset('upload/posts/'.$post->image)}}" /></div></a></div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>		</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-c90581f elementor-column elementor-col-50 elementor-top-column" data-id="c90581f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-79071151 elementor-widget elementor-widget-jnews_block_21_elementor" data-id="79071151" data-element_type="widget" data-widget_type="jnews_block_21_elementor.default">
                <div class="elementor-widget-container">
            <div  class="jeg_postblock_21 jeg_postblock jeg_module_hook jeg_pagination_disable jeg_col_1o3 jnews_module_7668_162_5e04869db2d5f   " data-unique="jnews_module_7668_162_5e04869db2d5f">
                <div class="jeg_block_heading jeg_block_heading_6 jeg_subcat_right">
                    <h3 class="jeg_block_title"><span><i class='fa fa-clock-o'></i>ĐỌC GÌ HÔM NAY</span></h3>

                </div>
                <div class="jeg_block_container">

                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($todays as $today)
                <article class="jeg_post jeg_pl_sm post-5906 post type-post status-publish format-standard has-post-thumbnail hentry category-seo-google-adwords-traffic tag-cac-buoc-seo-1-tu-khoa tag-cac-cach-seo-tu-khoa-len-top tag-cach-chon-tu-khoa-de-seo tag-cach-chon-tu-khoa-lam-seo tag-cach-chon-tu-khoa-seo tag-cach-chon-tu-khoa-seo-hieu-qua tag-cach-danh-gia-tu-khoa-seo tag-cach-seo-1-tu-khoa tag-cach-seo-1-tu-khoa-len-top-google tag-cach-seo-tu-khoa tag-cach-seo-tu-khoa-dai tag-cach-seo-tu-khoa-hieu-qua-nhat tag-cach-seo-tu-khoa-khong-dau tag-cach-seo-tu-khoa-mien-phi tag-cach-seo-tu-khoa-nhanh-nhat tag-cach-seo-tu-khoa-tren-google tag-cach-seo-tu-khoa-tren-youtube tag-cach-tim-tu-khoa-seo tag-cach-xac-dinh-tu-khoa-seo">
                <div class="jeg_thumb">

                    <a href="{{route('online.blog.news', $today->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="120" height="86" src="{{ asset('upload/posts/'.$today->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="Cách bước xác định độ khó của từ khóa trong SEO" data-src="{{ asset('upload/posts/'.$today->image)}}" data-sizes="auto" data-srcset="{{ asset('upload/posts/'.$today->image)}} 120w, {{ asset('upload/posts/'.$today->image)}} 350w, {{ asset('upload/posts/'.$today->image)}} 750w" data-expand="700" /></div></a>
                </div>
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $today->id)}}">{{$today->name}}</a>
                    </h3>
                    <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($today->created_at))}}</a></div></div>
                </div>
            </article>
            @endforeach
            </div>
                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>


            </div>

                <script src="{{asset('js/blog.js')}}"></script>

            </div>      </div>
                </div>
                        </div>
            </div>
        </div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-fccbc86 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="fccbc86" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-45fbd1df elementor-column elementor-col-50 elementor-top-column" data-id="45fbd1df" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-26f6dfa9 elementor-widget elementor-widget-jnews_element_header_elementor" data-id="26f6dfa9" data-element_type="widget" data-widget_type="jnews_element_header_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_block_heading jeg_block_heading_1 jeg_alignleft jnews_module_7668_148_5e04869d95874   ">
                <h3 class="jeg_block_title"><span><i class='fa fa-bullhorn'></i>BÀI VIẾT ĐƯỢC XEM NHIỀU</span></h3>

            </div>		</div>
				</div>
				<div class="elementor-element elementor-element-44f0fb1b elementor-widget elementor-widget-wp-widget-jnews_module_block_8" data-id="44f0fb1b" data-element_type="widget" data-widget_type="wp-widget-jnews_module_block_8.default">
				<div class="elementor-widget-container">
			<div  class="jeg_postblock_8 jeg_postblock jeg_module_hook jeg_pagination_nextprev jeg_col_2o3 jnews_module_7668_149_5e04869d9602f  normal " data-unique="jnews_module_7668_149_5e04869d9602f">

                <div class="jeg_block_container">

                <div class="jeg_posts_wrap">
                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($posts as $post)
                	@if(isset($post->categories_post->id))
                    <article class="jeg_post jeg_pl_md_1 post-52852 post type-post status-publish format-standard has-post-thumbnail hentry category-kien-thuc-ban-hang category-kinh-doanh-khoi-nghiep category-nhan-su-quan-tri tag-bien-phap tag-bien-phap-don-gian-giup-tiet-kiem-chi-phi-cho-doanh-nghiep tag-chi-phi-doanh-nghiep tag-doanh-nghiep tag-giam-chi-phi-doanh-nghiep tag-kinh-doanh tag-quan-ly-doanh-nghiep">
                <div class="jeg_thumb">

                    <a href="{{route('online.blog.news', $post->id)}}"><div class="thumbnail-container animate-lazy  size-500 "><img width="288" height="180" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-360x180 size-jnews-360x180 lazyload wp-post-image" alt="16 những biện pháp đơn giản giúp tiết kiệm chi phí cho doanh nghiệp 2019" data-src="{{ asset('upload/posts/'.$post->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                    <div class="jeg_post_category">
                        <span><a href="{{route('online.blog.menu', $post->categories_post->id)}}" class="category-kien-thuc-ban-hang">{{$post->categories_post->name}}</a></span>
                    </div>
                </div>
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $post->id)}}">{{$post->name}}</a>
                    </h3>
                    <div class="jeg_post_meta"><div class="jeg_meta_author"><span class="by">Bởi</span> <a href="{{route('online.blog.author', $post->users_id->id)}}">{{$post->users_id->name}}</a></div><div class="jeg_meta_date"><a href=""><i class="fa fa-clock-o"></i> {{date('d-m-Y', strtotime($post->created_at))}}</a></div></div>
                </div>
            </article>
           	 		@endif
					@endforeach

                </div>
            </div>
                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            {{-- <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>
                <div class="jeg_block_nav ">
                    <a href="" class="prev disabled" title="Trước"><i class="fa fa-angle-left"></i></a>
                    <a href="" class="next" title="Tiếp"><i class="fa fa-angle-right"></i></a>
                </div>

            </div> --}}

                <script>var jnews_module_7668_149_5e04869d9602f = {"header_icon":"","first_title":"","second_title":"","url":"","header_type":"heading_6","header_background":"","header_secondary_background":"","header_text_color":"","header_line_color":"","header_accent_color":"","header_filter_category":"","header_filter_author":"","header_filter_tag":"","header_filter_text":"All","post_type":"post","content_type":"all","number_post":"5","post_offset":"1","unique_content":"disable","include_post":"","exclude_post":"","include_category":"","exclude_category":"","include_author":"","include_tag":"","exclude_tag":"","sort_by":"random","date_format":"default","date_format_custom":"Y\/m\/d","pagination_mode":"nextprev","pagination_nextprev_showtext":"","pagination_number_post":"5","pagination_scroll_limit":"0","boxed":"","boxed_shadow":"","el_id":"","el_class":"","scheme":"normal","column_width":"auto","title_color":"","accent_color":"","alt_color":"","excerpt_color":"","css":"","paged":1,"column_class":"jeg_col_2o3","class":"jnews_block_8"};</script>
            </div>		</div>
				</div>
				
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-772fc197 elementor-column elementor-col-50 elementor-top-column" data-id="772fc197" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-7ea73d95 elementor-widget elementor-widget-jnews_element_header_elementor" data-id="7ea73d95" data-element_type="widget" data-widget_type="jnews_element_header_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_block_heading jeg_block_heading_7 jeg_alignleft jnews_module_7668_151_5e04869d9973e   ">
                <h3 class="jeg_block_title"><span><i class='fa fa-hand-o-right'></i>BÀI VIẾT NỔI BẬT</span></h3>

            </div>		</div>
				</div>
				<div class="elementor-element elementor-element-315993c8 elementor-widget elementor-widget-wp-widget-jnews_module_block_16" data-id="315993c8" data-element_type="widget" data-widget_type="wp-widget-jnews_module_block_16.default">
				<div class="elementor-widget-container">
			<div  class="jeg_postblock_16 jeg_postblock jeg_module_hook jeg_pagination_disable jeg_col_2o3 jnews_module_7668_152_5e04869d99f2a  normal " data-unique="jnews_module_7668_152_5e04869d99f2a">

                <div class="jeg_block_container">

                <div class="jeg_posts_wrap">
                <div class="jeg_postbig">
                    <article class="jeg_post jeg_pl_lg_5 post-7472 post type-post status-publish format-standard has-post-thumbnail hentry category-facebook-marketing category-kien-thuc-marketing category-thu-thuat-facebook tag-phan-mem-diet-virus-mail tag-phan-mem-diet-virus-spam-mail tag-phan-mem-quet-dia-chi-email tag-phan-mem-quet-email tag-phan-mem-quet-email-facebook tag-phan-mem-quet-email-facebook-mien-phi tag-phan-mem-quet-email-hang-loat tag-phan-mem-quet-email-hieu-qua tag-phan-mem-quet-email-mien-phi tag-phan-mem-quet-email-so-dien-thoai tag-phan-mem-quet-email-tot-nhat tag-phan-mem-quet-email-tu-dong tag-phan-mem-quet-email-tu-facebook tag-phan-mem-quet-mail-hang-loat tag-phan-mem-scan-email-crack">
                        <div class="jeg_thumb">

                <a href="{{route('online.blog.news', $features[0]->id)}}"><div class="thumbnail-container animate-lazy  size-500 "><img width="750" height="375" src="{{ asset('upload/posts/'.$features[0]->image)}}" class="attachment-jnews-750x375 size-jnews-750x375 lazyload wp-post-image" alt="Tổng hợp các phần mềm quét Email diễn đàn và quét mail Facebook tốt nhất 2019" data-src="{{ asset('upload/posts/'.$features[0]->image)}}" data-sizes="auto" data-srcset="{{ asset('upload/posts/'.$features[0]->image)}} 750w, {{ asset('upload/posts/'.$features[0]->image)}} 360w, {{ asset('upload/posts/'.$features[0]->image)}} 1140w" data-expand="700" /></div></a>
                <div class="jeg_post_category">
                    <span><a href="" class="category-facebook-marketing">{{$features[0]->categories_post->name}}</a></span>
                </div>
            </div>
            <div class="jeg_postblock_content">
                <h3 class="jeg_post_title">
                    <a href="{{route('online.blog.news', $features[0]->id)}}">{{$features[0]->name}}</a>
                </h3>
                <div class="jeg_post_meta"><div class="jeg_meta_author"><span class="by">Bởi</span> <a href="{{route('online.blog.author', $features[0]->users_id->id)}}">{{$features[0]->users_id->name}}</a></div><div class="jeg_meta_date"><a href=""><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($features[0]->created_at))}}</a></div><div class="jeg_meta_comment"><a href="" ><i class="fa fa-comment-o"></i> {{$features[0]->comment_count}} </a></div></div>
                <div class="jeg_post_excerpt">
                    <p>{{$features[0]->description}}</p>
                    <a href="{{route('online.blog.news', $features[0]->id)}}">Xem Thêm</a>
                </div>
            </div>
                    </article>
                </div>
                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($features as $feature)
                    <article class="jeg_post jeg_pl_xs_2 post-31542 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online category-ban-hang-tren-facebook-ca-nhan category-ban-hang-tren-fanpage category-ban-hang-tren-group category-facebook-marketing tag-facebook-marketing tag-livestream-fb tag-marketing-0d tag-marketing-0d-la-gi tag-marketing-da-kenh tag-quang-cao-facebook tag-sat-thu-ban-hang tag-tuong-tac-fb">
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $feature->id)}}">{{$feature->name}}</a>
                    </h3>
                </div>
            </article>
            @endforeach

                </div>
            </div>
                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>


            </div>

                <script>var jnews_module_7668_152_5e04869d99f2a = {"header_icon":"","first_title":"","second_title":"","url":"","header_type":"heading_1","header_background":"","header_secondary_background":"","header_text_color":"","header_line_color":"","header_accent_color":"","header_filter_category":"","header_filter_author":"","header_filter_tag":"","header_filter_text":"All","post_type":"post","content_type":"all","number_post":"10","post_offset":"0","unique_content":"disable","include_post":"27417,45192,31542,48774,47777,47994,8177,36328,3895,7472","exclude_post":"","include_category":"","exclude_category":"","include_author":"","include_tag":"","exclude_tag":"","sort_by":"random","date_format":"default","date_format_custom":"Y\/m\/d","excerpt_length":"20","excerpt_ellipsis":"...","pagination_mode":"disable","pagination_nextprev_showtext":"","pagination_number_post":"4","pagination_scroll_limit":"0","boxed":"","boxed_shadow":"","el_id":"","el_class":"","scheme":"normal","column_width":"auto","title_color":"","accent_color":"","alt_color":"","excerpt_color":"","css":"","paged":1,"column_class":"jeg_col_2o3","class":"jnews_block_16"};</script>
            </div>		</div>
				</div>
				{{-- <div class="elementor-element elementor-element-0fb45a3 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="0fb45a3" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item" >
					<a href="https://tranthinhlam.com/blog/">						<span class="elementor-icon-list-icon">
																<i class="fa fa-caret-right" aria-hidden="true"></i>
													</span>
										<span class="elementor-icon-list-text">Blog Marketing hay</span>
											</a>
									</li>
						</ul>
				</div>
				</div> --}}
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				
				{{-- @isset($categories_posts[2]) --}}
				@foreach($categories_posts as $key => $cate_post)
                @if($key == 0)
				<section class="elementor-element elementor-element-5c29cbb3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5c29cbb3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-extended">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-7914ba2f elementor-column elementor-col-100 elementor-top-column" data-id="7914ba2f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
							<div class="elementor-background-overlay"></div>
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b3642a elementor-widget elementor-widget-jnews_element_header_elementor" data-id="44b3642a" data-element_type="widget" data-widget_type="jnews_element_header_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_block_heading jeg_block_heading_1 jeg_alignleft jnews_module_7668_156_5e04869da42ca   ">
                <h3 class="jeg_block_title"><a href='{{route('online.blog.menu', $cate_post->id)}}'><span><i class='fa fa-amazon'></i>{{$cate_post->name}}</span></a></h3>


            </div>		</div>
				</div>
				<div class="elementor-element elementor-element-77364578 elementor-widget elementor-widget-jnews_hero_2_elementor" data-id="77364578" data-element_type="widget" data-widget_type="jnews_hero_2_elementor.default">
				<div class="elementor-widget-container">
					
			<div  class="jeg_heroblock jeg_heroblock_2 jeg_col_3o3 jeg_hero_style_5 jnews_module_7668_157_5e04869da4b4e   owl-carousel" data-margin="16"  data-autoplay="yes"" data-delay="6000"">
				

                <div class="jeg_heroblock_wrapper" style='margin: 0px 0px -16px -16px;'>
                	
                	@foreach($cate_post->post()->get() as $key => $cate_by_post)
                	@if($key == 0)
	                <article class="jeg_post jeg_hero_item_1 post-86757 post type-post status-publish format-standard has-post-thumbnail hentry category-san-thuong-mai-dien-tu tag-banhang-shopee tag-cach-len-top-shopee tag-chuan-seo-lazada tag-chuan-seo-sendo tag-chuan-seo-shopee tag-gan-hashtag-tren-shopee tag-hoc-seo-lazada tag-hoc-seo-sendo tag-hoc-seo-shopee tag-link-shopee tag-seo-lazada tag-seo-tu-khoa-shopee tag-toi-uu-seo-sendo tag-toi-uu-shopee" style="padding: 0 0 16px 16px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category"><a href="{{route('online.blog.menu', $cate_post->id)}}" class="category-san-thuong-mai-dien-tu">{{$cate_post->name}}</a></div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}" >{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_author"><span class="by">Bởi</span> <a href="{{route('online.blog.author', $cate_by_post->users_id->id)}}">{{$cate_by_post->users_id->name}}</a></div><div class="jeg_meta_date"><a href=""><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
			@endif
            @endforeach

            <div class="jeg_heroblock_scroller">
            	    @foreach($cate_post->post()->get() as $key => $cate_by_post)
                	@if($key == 1)
                <article class="jeg_post jeg_hero_item_2 post-84168 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online category-san-thuong-mai-dien-tu tag-ban-hang-hieu-qua-tren-tiki tag-ban-hang-tren-lazada tag-ban-hang-tren-tmdt-2020 tag-kinh-doanh-tren-san-tmdt tag-kinh-doanh-tren-sendo tag-top-5-san-tmdt-hot-2020 tag-watson-tmdt-moi-nhat-tai-viet-nam" style="padding: 0 0 16px 16px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endforeach
                @foreach($cate_post->post()->get() as $key => $cate_by_post)
                @if($key == 2)
                <article class="jeg_post jeg_hero_item_3 post-84139 post type-post status-publish format-standard has-post-thumbnail hentry category-san-thuong-mai-dien-tu tag-bi-quyet-thanh-cong-cua-amazon tag-bi-quyet-thanh-cong-cua-jeff-bezos tag-jeff-bezos tag-jeff-bezos-amazon tag-jeff-bezos-gia-tri-thuc-te tag-jeff-bezos-la-ai tag-jeff-bezos-ly-hon tag-jeff-bezos-tieu-su tag-jeff-bezos-va-vo tag-jeff-bezos-wiki tag-kinh-doanh-tai-amazon tag-ong-chu-amazon-jeff-bezos tag-vo-jeff-bezos" style="padding: 0 0 16px 16px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href={{route('online.blog.menu', $cate_post->id)}}">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endforeach
                @foreach($cate_post->post()->get() as $key => $cate_by_post)
                @if($key == 3)
                <article class="jeg_post jeg_hero_item_4 post-84016 post type-post status-publish format-standard has-post-thumbnail hentry category-kinh-doanh-online category-san-thuong-mai-dien-tu tag-ban-hang-qua-san-thuong-mai-dien-tu tag-nen-ban-hang-qua-san-thuong-mai-dien-tu-nao tag-vi-sao-ban-hang-qua-san-thuong-mai-dien-tu" style="padding: 0 0 16px 16px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endforeach
                @foreach($cate_post->post()->get() as $key => $cate_by_post)
                @if($key == 4)
                <article class="jeg_post jeg_hero_item_5 post-83789 post type-post status-publish format-standard has-post-thumbnail hentry category-san-thuong-mai-dien-tu tag-ban-hang-qua-shopee-hieu-qua tag-cach-ban-hang-qua-shopee tag-cach-seo-tu-khoa-cho-shopee tag-huong-dan-ban-hang-qua-shopee-2019 tag-kinh-nghiem-ban-hang-qua-shopee tag-seo-shopee" style="padding: 0 0 16px 16px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endforeach
            </div>
	            </div>
            </div>
            		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
		@endif
		@endforeach
		{{-- @endisset --}}
				<section class="elementor-element elementor-element-3e812cdf elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3e812cdf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-8408928 elementor-column elementor-col-50 elementor-top-column" data-id="8408928" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				
				<div class="elementor-element elementor-element-175b003 elementor-widget elementor-widget-wp-widget-jnews_module_element_ads" data-id="175b003" data-element_type="widget" data-widget_type="wp-widget-jnews_module_element_ads.default">
				<div class="elementor-widget-container">
					 <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/79177583_106711254140658_8381905634815115264_o.jpg?_nc_cat=110&_nc_ohc=5ECJUQDxDe8AQljX5BEEmZamqeedNDi0HzgfgaufC7CUo1DCR3CQdXoXA&_nc_ht=scontent.fhan2-4.fna&oh=06a7668f52b55012edc10e93bd02c435&oe=5E92053F">
			</div>
				</div>
				@foreach($categories_posts as $key => $cate_post)
                @if($key == 1)
				<div class="elementor-element elementor-element-032e4c3 elementor-widget elementor-widget-jnews_block_20_elementor" data-id="032e4c3" data-element_type="widget" data-widget_type="jnews_block_20_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_postblock_20 jeg_postblock jeg_module_hook jeg_pagination_disable jeg_col_3o3 jnews_module_7668_161_5e04869daf279   " data-unique="jnews_module_7668_161_5e04869daf279">
                <div class="jeg_block_heading jeg_block_heading_1 jeg_subcat_right">
                    <h3 class="jeg_block_title"><a href='{{route('online.blog.menu', $cate_post->id)}}'><span>{{$cate_post->name}}</span></a></h3>

                </div>
                <div class="jeg_block_container">

                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($cate_post->post()->limit(6)->get() as $cate_post)
                <article class="jeg_post jeg_pl_sm post-87518 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online category-ban-hang-tren-facebook-ca-nhan category-ban-hang-tren-fanpage category-ban-hang-tren-group category-cam-nang-nghe-nghiep category-chia-se-tai-lieu-hay category-cong-cu-marketing category-cong-dong-digital-marketing category-content-marketing category-facebook-marketing category-kien-thuc-ban-hang category-kien-thuc-marketing category-kien-thuc-marketing-kien-thuc-marketing category-kien-thuc-mmo category-kinh-doanh-khoi-nghiep category-kinh-doanh-online category-mo-hinh-kinh-doanh category-thu-thuat-facebook category-thu-thuat-marketing category-tiep-thi-lien-ket category-tin-tuc-atp-software category-tin-tuc-khac category-van-hoa-kinh-doanh category-xu-huong-marketing-2020 category-y-tuong-kinh-doanh-2 tag-bat-tich-xanh-facebook tag-dau-tich-xanh-facebook tag-dau-tich-xanh-facebook-la-gi tag-hack-tich-xanh-facebook tag-lam-tich-xanh-facebook tag-lam-tich-xanh-facebook-2019 tag-lam-tich-xanh-facebook-2020 tag-lay-tich-xanh-facebook tag-len-tich-xanh-facebook tag-mua-tich-xanh-facebook tag-tao-tich-xanh-facebook tag-tich-xanh-facebook tag-tich-xanh-facebook-2019 tag-tich-xanh-facebook-2020 tag-tich-xanh-facebook-bao-nhieu-tien tag-tich-xanh-facebook-de-lam-gi tag-tich-xanh-facebook-la-gi tag-tich-xanh-facebook-png tag-tich-xanh-tren-facebook tag-xin-tich-xanh-facebook">
                <div class="jeg_thumb">

                    <a href="{{route('online.blog.news', $cate_post->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="120" height="68" src="{{ asset('upload/posts/'.$cate_post->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="tích-xanh-facebook" data-src="{{ asset('upload/posts/'.$cate_post->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                </div>
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $cate_post->id)}}">{{$cate_post->name}}</a>
                    </h3>
                    <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_post->created_at))}}</a></div></div>
                </div>
            </article>
            @endforeach
            </div>
                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>


            </div>
				<script src="{{asset('js/blog.js')}}"></script>
            </div>      </div>
                </div>
                @endif
                @endforeach
                        </div>
            </div>
        </div>
            @foreach($categories_posts as $key => $cate_post)
                @if($key == 2)
				<div class="elementor-element elementor-element-4284ebc7 elementor-column elementor-col-33 elementor-top-column" data-id="4284ebc7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-48477c33 elementor-widget elementor-widget-jnews_block_21_elementor" data-id="48477c33" data-element_type="widget" data-widget_type="jnews_block_21_elementor.default">
				<div class="elementor-widget-container">

			<div  class="jeg_postblock_21 jeg_postblock jeg_module_hook jeg_pagination_disable jeg_col_1o3 jnews_module_7668_154_5e04869d9e984   " data-unique="jnews_module_7668_154_5e04869d9e984">
                <div class="jeg_block_heading jeg_block_heading_6 jeg_subcat_right">
                    <h3 class="jeg_block_title"><a href='{{route('online.blog.menu', $cate_post->id)}}'><span><i class='fa fa-facebook'></i>{{$cate_post->name}}</span></a></h3>


                </div>
                <div class="jeg_block_container">


                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($cate_post->post()->limit(6)->get() as $cate_post)
                <article class="jeg_post jeg_pl_sm post-87518 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online category-ban-hang-tren-facebook-ca-nhan category-ban-hang-tren-fanpage category-ban-hang-tren-group category-cam-nang-nghe-nghiep category-chia-se-tai-lieu-hay category-cong-cu-marketing category-cong-dong-digital-marketing category-content-marketing category-facebook-marketing category-kien-thuc-ban-hang category-kien-thuc-marketing category-kien-thuc-marketing-kien-thuc-marketing category-kien-thuc-mmo category-kinh-doanh-khoi-nghiep category-kinh-doanh-online category-mo-hinh-kinh-doanh category-thu-thuat-facebook category-thu-thuat-marketing category-tiep-thi-lien-ket category-tin-tuc-atp-software category-tin-tuc-khac category-van-hoa-kinh-doanh category-xu-huong-marketing-2020 category-y-tuong-kinh-doanh-2 tag-bat-tich-xanh-facebook tag-dau-tich-xanh-facebook tag-dau-tich-xanh-facebook-la-gi tag-hack-tich-xanh-facebook tag-lam-tich-xanh-facebook tag-lam-tich-xanh-facebook-2019 tag-lam-tich-xanh-facebook-2020 tag-lay-tich-xanh-facebook tag-len-tich-xanh-facebook tag-mua-tich-xanh-facebook tag-tao-tich-xanh-facebook tag-tich-xanh-facebook tag-tich-xanh-facebook-2019 tag-tich-xanh-facebook-2020 tag-tich-xanh-facebook-bao-nhieu-tien tag-tich-xanh-facebook-de-lam-gi tag-tich-xanh-facebook-la-gi tag-tich-xanh-facebook-png tag-tich-xanh-tren-facebook tag-xin-tich-xanh-facebook">
                <div class="jeg_thumb">

                    <a href="{{route('online.blog.news', $cate_post->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="120" height="68" src="{{ asset('upload/posts/'.$cate_post->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="tích-xanh-facebook" data-src="{{ asset('upload/posts/'.$cate_post->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                </div>
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $cate_post->id)}}">{{$cate_post->name}}</a>
                    </h3>
                    <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_post->created_at))}}</a></div></div>
                </div>
            </article>
            {{-- @endif --}}
            	@endforeach
            </div>

                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>


            </div>
                <script src="{{asset('js/blog.js')}}"></script>
            </div>
            	</div>
				</div>
						</div>
			</div>
		</div>
		@endif
		@endforeach
                        </div>
            </div>
        </section>
                <section class="elementor-element elementor-element-55945e1e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="55945e1e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                <div class="elementor-element elementor-element-2cce3525 elementor-column elementor-col-33 elementor-top-column" data-id="2cce3525" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-column-wrap  elementor-element-populated">
            	@foreach($categories_posts as $key => $cate_post)
                @if($key == 3)
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-6498158f elementor-widget elementor-widget-jnews_element_header_elementor" data-id="6498158f" data-element_type="widget" data-widget_type="jnews_element_header_elementor.default">
                <div class="elementor-widget-container">
            <div  class="jeg_block_heading jeg_block_heading_1 jeg_alignleft jnews_module_7668_163_5e04869db7e27   ">
                <h3 class="jeg_block_title"><a href='{{route('online.blog.menu', $cate_post->id)}}'><span>{{$cate_post->name}}</span></a></h3>

            </div>      </div>
                </div>
                <div class="elementor-element elementor-element-130338cc elementor-widget elementor-widget-jnews_hero_1_elementor" data-id="130338cc" data-element_type="widget" data-widget_type="jnews_hero_1_elementor.default">
                <div class="elementor-widget-container">
            <div  class="jeg_heroblock jeg_heroblock_1 jeg_col_1o3 jeg_hero_style_4 jnews_module_7668_164_5e04869db86f7   owl-carousel" data-margin="12"  data-autoplay="yes"" data-delay="6000"">
                <div class="jeg_heroblock_wrapper" style='margin: 0px 0px -12px -12px;'>
                	@foreach($cate_post->post()->get() as $key => $cate_by_post)
                	@if($key == 0)
                    <article class="jeg_post jeg_hero_item_1 post-87632 post type-post status-publish format-standard has-post-thumbnail hentry category-kinh-doanh-khoi-nghiep category-review-thuong-hieu tag-cac-mang-hoa-nganh-xe-khach-viet-nam tag-cai-thien-chat-luong-dich-vu tag-nguon-luc-tang-toc-trong-linh-vuc-van-tai-va-du-lich tag-vexere-duoc-dau-tu tag-vexere-duoc-rot-von tag-vexere-goi-von-thanh-cong" style="padding: 0 0 12px 12px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category"><a href="{{route('online.blog.menu', $cate_post->id)}}" class="category-kinh-doanh-khoi-nghiep">{{$cate_post->name}}</a></div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}" >{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_author"><span class="by">Bởi</span> <a href="{{route('online.blog.author', $cate_by_post->users_id->id)}}">{{$cate_by_post->users_id->name}}</a></div><div class="jeg_meta_date"><a href=""><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
            	@endforeach
            <div class="jeg_heroblock_scroller">
            	@foreach($cate_post->post()->get() as $key => $cate_by_post)
                	@if($key == 1)
                <article class="jeg_post jeg_hero_item_2 post-87518 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online category-ban-hang-tren-facebook-ca-nhan category-ban-hang-tren-fanpage category-ban-hang-tren-group category-cam-nang-nghe-nghiep category-chia-se-tai-lieu-hay category-cong-cu-marketing category-cong-dong-digital-marketing category-content-marketing category-facebook-marketing category-kien-thuc-ban-hang category-kien-thuc-marketing category-kien-thuc-marketing-kien-thuc-marketing category-kien-thuc-mmo category-kinh-doanh-khoi-nghiep category-kinh-doanh-online category-mo-hinh-kinh-doanh category-thu-thuat-facebook category-thu-thuat-marketing category-tiep-thi-lien-ket category-tin-tuc-atp-software category-tin-tuc-khac category-van-hoa-kinh-doanh category-xu-huong-marketing-2020 category-y-tuong-kinh-doanh-2 tag-bat-tich-xanh-facebook tag-dau-tich-xanh-facebook tag-dau-tich-xanh-facebook-la-gi tag-hack-tich-xanh-facebook tag-lam-tich-xanh-facebook tag-lam-tich-xanh-facebook-2019 tag-lam-tich-xanh-facebook-2020 tag-lay-tich-xanh-facebook tag-len-tich-xanh-facebook tag-mua-tich-xanh-facebook tag-tao-tich-xanh-facebook tag-tich-xanh-facebook tag-tich-xanh-facebook-2019 tag-tich-xanh-facebook-2020 tag-tich-xanh-facebook-bao-nhieu-tien tag-tich-xanh-facebook-de-lam-gi tag-tich-xanh-facebook-la-gi tag-tich-xanh-facebook-png tag-tich-xanh-tren-facebook tag-xin-tich-xanh-facebook" style="padding: 0 0 12px 12px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
           		@endforeach
            	@foreach($cate_post->post()->get() as $key => $cate_by_post)
                @if($key == 2)
                <article class="jeg_post jeg_hero_item_3 post-87415 post type-post status-publish format-standard has-post-thumbnail hentry category-kien-thuc-marketing category-kinh-doanh-khoi-nghiep category-y-tuong-kinh-doanh tag-ma-tran-danh-gia-vi-tri-chien-luoc-va-hanh-dong tag-tgdd-tim-cach-xoay-truc-doanh-thu tag-truc-xoay-trong-kinh-doanh tag-vi-sao-can-phai-co-truc-xoay-trong-kinh-doanh" style="padding: 0 0 12px 12px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}" class="category-kien-thuc-marketing">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
           		@endforeach
            	@foreach($cate_post->post()->get() as $key => $cate_by_post)
                @if($key == 3)
                <article class="jeg_post jeg_hero_item_4 post-87263 post type-post status-publish format-standard has-post-thumbnail hentry category-kien-thuc-marketing category-kinh-doanh-khoi-nghiep tag-bi-quyet-kinh-doanh-giao-duc-cach-marketing-digital-cho-trung-tam-anh-nguthanh-cong-hieu-qua tag-chia-se-kinh-nghiem-mo-trung-tam-tieng-anh tag-hop-tac-mo-trung-tam-tieng-anh-2018 tag-kinh-nghiem-mo-trung-tam-day-hoc tag-kinh-nghiem-mo-trung-tam-day-them tag-kinh-nghiem-xay-dung-trung-tam-day-them tag-mo-hinh-trung-tam-day-them tag-mo-trung-tam-tieng-anh-o-nong-thon tag-muon-mo-trung-tam-ngoai-ngu-can-nhung-gi" style="padding: 0 0 12px 12px;">
                    <div class="jeg_block_container">

                        <span class="jeg_postformat_icon"></span>
                        <div class="jeg_thumb">
                            <a href="{{route('online.blog.news', $cate_by_post->id)}}" ><div class="thumbnail-container thumbnail-background" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" >
                        <div class="lazyloaded" data-src="{{ asset('upload/posts/'.$cate_by_post->image)}}" style="background-image: url({{ asset('upload/posts/'.$cate_by_post->image)}})"></div>
                    </div></a>
                        </div>
                        <div class="jeg_postblock_content">
                            <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $cate_post->id)}}" class="category-kien-thuc-marketing">{{$cate_post->name}}</a>
                            </div>
                            <div class="jeg_post_info">
                                <h2 class="jeg_post_title">
                                    <a href="{{route('online.blog.news', $cate_by_post->id)}}">{{$cate_by_post->name}}</a>
                                </h2>
                                <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($cate_by_post->created_at))}}</a></div></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
           		@endforeach
            </div>
                </div>
            </div>
            <style scoped>.jeg_heroblock.jnews_module_7668_164_5e04869db86f7 .jeg_hero_item_1 .jeg_thumb a > div:before {
                            background: -moz-linear-gradient(180deg, rgba(255,255,255,0.5) 0%, #000000 100%);
                            background: -webkit-linear-gradient(180deg, rgba(255,255,255,0.5) 0%, #000000 100%);
                            background: linear-gradient(180deg, rgba(255,255,255,0.5) 0%, #000000 100%);
                        }</style>       </div>
                </div>
                        </div>
                        @endif
                        @endforeach
            </div>
        </div>
                <div class="elementor-element elementor-element-7ee26c3e elementor-column elementor-col-33 elementor-top-column" data-id="7ee26c3e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        </div>
            </div>
        </div>
                <div class="elementor-element elementor-element-6678d96c elementor-column elementor-col-33 elementor-top-column" data-id="6678d96c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                	@foreach($categories_posts as $key => $cate_post)
                @if($key == 4)
            <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-6cf4317f elementor-widget elementor-widget-jnews_element_header_elementor" data-id="6cf4317f" data-element_type="widget" data-widget_type="jnews_element_header_elementor.default">
                <div class="elementor-widget-container">
            <div  class="jeg_block_heading jeg_block_heading_7 jeg_alignleft jnews_module_7668_165_5e04869dbde39   ">
                <h3 class="jeg_block_title"><span><i class='fa fa-pinterest-p'></i>{{$cate_post->name}}</span></h3>

            </div>      </div>
                </div>
                <div class="elementor-element elementor-element-2e19dfcd elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="2e19dfcd" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
                <div class="elementor-widget-container">
                    <div class="elementor-swiper">
            <div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInUp">
            	
                <div class="swiper-wrapper elementor-slides">
                	@foreach($cate_post->post()->get() as $cate_by_post)
                    <div class="elementor-repeater-item-aa7d0b4 swiper-slide"><div class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--in"></div><div class="elementor-background-overlay"></div><a class="swiper-slide-inner" href="{{route('online.blog.news', $cate_by_post->id)}}"><div class="swiper-slide-contents"><div class="elementor-slide-heading">{{$cate_by_post->name}}</div><div  class="elementor-button elementor-slide-button elementor-size-sm">Xem ngay</div></div></a></div>
                @endforeach
            </div>
                    
                                                            <div class="swiper-pagination"></div>
                                                                <div class="elementor-swiper-button elementor-swiper-button-prev">
                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                            <span class="elementor-screen-only">Previous</span>
                        </div>
                        <div class="elementor-swiper-button elementor-swiper-button-next">
                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                            <span class="elementor-screen-only">Next</span>
                        </div>
                                                </div>
        </div>
                </div>
                </div>
                        </div>
            </div>
            @endif
            @endforeach
        </div>
                        </div>
            </div>
        </section>
                <section class="elementor-element elementor-element-2667a95c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="2667a95c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                <div class="elementor-element elementor-element-36114a0b elementor-column elementor-col-100 elementor-top-column" data-id="36114a0b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-1e94a0d2 elementor-widget elementor-widget-jnews_block_9_elementor" data-id="1e94a0d2" data-element_type="widget" data-widget_type="jnews_block_9_elementor.default">
                <div class="elementor-widget-container">
            <div  class="jeg_postblock_9 jeg_postblock jeg_module_hook jeg_pagination_loadmore jeg_col_3o3 jnews_module_7668_167_5e04869dc1f2e   " data-unique="jnews_module_7668_167_5e04869dc1f2e">
                <div class="jeg_block_heading jeg_block_heading_1 jeg_subcat_right">
                    <h3 class="jeg_block_title"><span><i class='fa fa-newspaper-o'></i>BÀI VIẾT MỚI</span></h3>

                </div>
                <div class="jeg_block_container">

                <div class="jeg_posts_wrap">
                <div class="jeg_posts jeg_load_more_flag">
                	@foreach($post_news as $post_new)
                	@if(isset($post_new->categories_post->id))
                    <article class="jeg_post jeg_pl_md_1 post-87632 post type-post status-publish format-standard has-post-thumbnail hentry category-kinh-doanh-khoi-nghiep category-review-thuong-hieu tag-cac-mang-hoa-nganh-xe-khach-viet-nam tag-cai-thien-chat-luong-dich-vu tag-nguon-luc-tang-toc-trong-linh-vuc-van-tai-va-du-lich tag-vexere-duoc-dau-tu tag-vexere-duoc-rot-von tag-vexere-goi-von-thanh-cong">
                <div class="jeg_thumb">

                    <a href="{{route('online.blog.news', $post_new->id)}}"><div class="thumbnail-container animate-lazy  size-500 "><img width="360" height="113" src="{{ asset('upload/posts/'.$post_new->image)}}" class="attachment-jnews-360x180 size-jnews-360x180 lazyload wp-post-image" alt="Vé xe rẻ được rót vốn từ các nhà đầu tư Châu Á" data-src="{{ asset('upload/posts/'.$post_new->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                    <div class="jeg_post_category">
                        <span><a href="{{route('online.blog.menu', $post_new->categories_post->id)}}" class="category-kinh-doanh-khoi-nghiep">{{$post_new->categories_post->name}}</a></span>
                    </div>
                </div>
                <div class="jeg_postblock_content">
                    <h3 class="jeg_post_title">
                        <a href="{{route('online.blog.news', $post_new->id)}}">{{$post_new->name}}</a>
                    </h3>
                    <div class="jeg_post_meta"><div class="jeg_meta_date"><a href="" ><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($post_new->created_at))}}</a></div></div>
                </div>
            </article>
            @endif
            @endforeach
                </div>
            </div>
                <div class='module-overlay'>
                <div class='preloader_type preloader_dot'>
                    <div class="module-preloader jeg_preloader dot">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="module-preloader jeg_preloader circle">
                        <div class="jnews_preloader_circle_outer">
                            <div class="jnews_preloader_circle_inner"></div>
                        </div>
                    </div>
                    <div class="module-preloader jeg_preloader square">
                        <div class="jeg_square"><div class="jeg_square_inner"></div></div>
                    </div>
                </div>
            </div>
            </div>
            {{-- <div class="jeg_block_navigation">
                <div class='navigation_overlay'><div class='module-preloader jeg_preloader'><span></span><span></span><span></span></div></div>
                <div class="jeg_block_loadmore ">
                    <a href="" class='' data-load='Tải Thêm' data-loading='Đang tải....'> Tải Thêm</a>
                </div>

            </div> --}}
                <script src="{{asset('js/blog.js')}}"></script>
            </div>      </div>
                </div>
                        </div>
            </div>
        </div>
                        </div>
            </div>
        </section>
                        </div>
            </div>
        </div>
        <div class="jscroll-to-top">
            <a href="#back-to-top" class="jscroll-to-top_link"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>

<script type="text/javascript">var jfla = []</script>   
                <script type="text/javascript">
            jQuery('.atp-call a').attr('data-name','/blog');
        </script>
            <div class="box_fixRight">

@include('online.blog.includes.footercssjs')

<script src="{{asset('js/blog.js')}}"></script>
<style>
	.sticky{
		border:none;
	}
</style>
@endsection
