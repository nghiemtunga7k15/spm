@extends('online.app')

@section('content')
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="vi-VN"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="vi-VN"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="vi-VN"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="vi-VN"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="vi-VN"> <!--<![endif]-->

<!-- Mirrored from atpsoftware.vn/tich-xanh-facebook.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 01:35:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=yes' />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="{{asset('template/blog/xmlrpc.php')}}" />
			<script type="text/javascript">
              var jnews_ajax_url = 'https://atpsoftware.vn/?ajax-request=jnews'
			</script>
<link rel="stylesheet" href="{{asset('template/blog/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" href="{{asset('template/blog/feed')}}" />
<link rel="alternate" type="application/rss+xml" href="{{asset('template/blog/comments/feed')}}" />
<link rel="alternate" type="application/rss+xml" href="{{asset('template/blog/facebook-marketing/feed')}}" />
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
    <link rel='stylesheet' id='bdt-uikit-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit-3.2.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='element-pack-site-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site-4.3.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='{{asset('template/blog/wp-includes/css/dist/block-library/style.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='kk-star-ratings-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/kk-star-ratings/public/css/kk-star-ratings-4.1.3.css')}}' type='text/css' media='all' />
<style id='kk-star-ratings-inline-css' type='text/css'>
.kk-star-ratings .kksr-stars .kksr-star {
        margin-right: 4px;
    }
    [dir="rtl"] .kk-star-ratings .kksr-stars .kksr-star {
        margin-left: 4px;
        margin-right: 0;
    }
</style>
<link rel='stylesheet' id='toc-screen-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/table-of-contents-plus/screen.min-1509.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wpdiscuz-font-awesome-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.0.6/css/fontawesome-all.min-5.3.5.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wpdiscuz-frontend-css-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/css/wpdiscuz-5.3.5.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wpdiscuz-user-content-css-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/css/wpdiscuz-user-content-5.3.5.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='dlm-frontend-css'  href='{{asset('template/blog/wp-content/plugins/download-monitor/assets/css/frontend.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-parent-style-css'  href='{{asset('template/blog/wp-content/themes/jnews/style.css')}}' type='text/css' media='all' />

<link rel='stylesheet' id='mediaelement-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/mediaelement/mediaelementplayer-legacy.min-4.2.13-9993131.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='{{asset('template/blog/wp-includes/js/mediaelement/wp-mediaelement.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-elementor-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/themes/jnews/assets/css/elementor-frontend-1.0.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-style-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/themes/jnews-child/style-1.0.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-darkmode-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/themes/jnews/assets/css/darkmode-1.0.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-select-share-css'  href='{{asset('template/blog/wp-content/plugins/jnews-social-share/assets/css/plugin.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='jnews-push-notification-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/jnews-push-notification/assets/css/plugin-5.0.2.css')}}' type='text/css' media='all' />
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/jquery/jquery-1.12.4-wp.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/jquery/jquery-migrate.min-1.4.1.js')}}'></script>
<link rel='stylesheet' id='jnews-frontend-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/themes/jnews/assets/dist/frontend.min-1.0.0.css')}}' type='text/css' media='all' /> 
<meta name="generator" content="WordPress 5.3.2" />
<script type="application/ld+json">{
    "@context": "https://schema.org/",
    "@type": "CreativeWorkSeries",
    "name": "T&iacute;ch Xanh Facebook L&agrave; G&igrave;? C&aacute;c Bước L&agrave;m Dấu Tick Xanh Tr&ecirc;n Facebook",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "bestRating": "5",
        "ratingCount": "1"
    }
}</script>        
            		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TWN77TT');</script>
	      <meta name="onesignal" content="wordpress-plugin"/>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>

<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","@id":"https:\/\/atpsoftware.vn\/#organization","url":"https:\/\/atpsoftware.vn\/","name":"","logo":{"@type":"ImageObject","url":""},"sameAs":["https:\/\/www.facebook.com\/atpsoftware.tools"]}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"https:\/\/atpsoftware.vn\/#website","url":"https:\/\/atpsoftware.vn\/","name":"","potentialAction":{"@type":"SearchAction","target":"https:\/\/atpsoftware.vn\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<link rel="icon" href="https://img.atpsoftware.vn/2018/01/cropped-FAV-32x32.png" sizes="32x32" />
<link rel="icon" href="https://img.atpsoftware.vn/2018/01/cropped-FAV-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://img.atpsoftware.vn/2018/01/cropped-FAV-180x180.png" />
<meta name="msapplication-TileImage" content="https://img.atpsoftware.vn/2018/01/cropped-FAV-270x270.png" />
<style id="jeg_dynamic_css" type="text/css" data-type="jeg_custom-css">.jeg_container, .jeg_content, .jeg_boxed .jeg_main .jeg_container, .jeg_autoload_separator { background-color : ; } body,.newsfeed_carousel.owl-carousel .owl-nav div,.jeg_filter_button,.owl-carousel .owl-nav div,.jeg_readmore,.jeg_hero_style_7 .jeg_post_meta a,.widget_calendar thead th,.widget_calendar tfoot a,.jeg_socialcounter a,.entry-header .jeg_meta_like a,.entry-header .jeg_meta_comment a,.entry-content tbody tr:hover,.entry-content th,.jeg_splitpost_nav li:hover a,#breadcrumbs a,.jeg_author_socials a:hover,.jeg_footer_content a,.jeg_footer_bottom a,.jeg_cartcontent,.woocommerce .woocommerce-breadcrumb a { color : #000000; } a,.jeg_menu_style_5 > li > a:hover,.jeg_menu_style_5 > li.sfHover > a,.jeg_menu_style_5 > li.current-menu-item > a,.jeg_menu_style_5 > li.current-menu-ancestor > a,.jeg_navbar .jeg_menu:not(.jeg_main_menu) > li > a:hover,.jeg_midbar .jeg_menu:not(.jeg_main_menu) > li > a:hover,.jeg_side_tabs li.active,.jeg_block_heading_5 strong,.jeg_block_heading_6 strong,.jeg_block_heading_7 strong,.jeg_block_heading_8 strong,.jeg_subcat_list li a:hover,.jeg_subcat_list li button:hover,.jeg_pl_lg_7 .jeg_thumb .jeg_post_category a,.jeg_pl_xs_2:before,.jeg_pl_xs_4 .jeg_postblock_content:before,.jeg_postblock .jeg_post_title a:hover,.jeg_hero_style_6 .jeg_post_title a:hover,.jeg_sidefeed .jeg_pl_xs_3 .jeg_post_title a:hover,.widget_jnews_popular .jeg_post_title a:hover,.jeg_meta_author a,.widget_archive li a:hover,.widget_pages li a:hover,.widget_meta li a:hover,.widget_recent_entries li a:hover,.widget_rss li a:hover,.widget_rss cite,.widget_categories li a:hover,.widget_categories li.current-cat > a,#breadcrumbs a:hover,.jeg_share_count .counts,.commentlist .bypostauthor > .comment-body > .comment-author > .fn,span.required,.jeg_review_title,.bestprice .price,.authorlink a:hover,.jeg_vertical_playlist .jeg_video_playlist_play_icon,.jeg_vertical_playlist .jeg_video_playlist_item.active .jeg_video_playlist_thumbnail:before,.jeg_horizontal_playlist .jeg_video_playlist_play,.woocommerce li.product .pricegroup .button,.widget_display_forums li a:hover,.widget_display_topics li:before,.widget_display_replies li:before,.widget_display_views li:before,.bbp-breadcrumb a:hover,.jeg_mobile_menu li.sfHover > a,.jeg_mobile_menu li a:hover,.split-template-6 .pagenum { color : #f15e22; } .jeg_menu_style_1 > li > a:before,.jeg_menu_style_2 > li > a:before,.jeg_menu_style_3 > li > a:before,.jeg_side_toggle,.jeg_slide_caption .jeg_post_category a,.jeg_slider_type_1 .owl-nav .owl-next,.jeg_block_heading_1 .jeg_block_title span,.jeg_block_heading_2 .jeg_block_title span,.jeg_block_heading_3,.jeg_block_heading_4 .jeg_block_title span,.jeg_block_heading_6:after,.jeg_pl_lg_box .jeg_post_category a,.jeg_pl_md_box .jeg_post_category a,.jeg_readmore:hover,.jeg_thumb .jeg_post_category a,.jeg_block_loadmore a:hover, .jeg_postblock.alt .jeg_block_loadmore a:hover,.jeg_block_loadmore a.active,.jeg_postblock_carousel_2 .jeg_post_category a,.jeg_heroblock .jeg_post_category a,.jeg_pagenav_1 .page_number.active,.jeg_pagenav_1 .page_number.active:hover,input[type="submit"],.btn,.button,.widget_tag_cloud a:hover,.popularpost_item:hover .jeg_post_title a:before,.jeg_splitpost_4 .page_nav,.jeg_splitpost_5 .page_nav,.jeg_post_via a:hover,.jeg_post_source a:hover,.jeg_post_tags a:hover,.comment-reply-title small a:before,.comment-reply-title small a:after,.jeg_storelist .productlink,.authorlink li.active a:before,.jeg_footer.dark .socials_widget:not(.nobg) a:hover .fa,.jeg_breakingnews_title,.jeg_overlay_slider_bottom.owl-carousel .owl-nav div,.jeg_overlay_slider_bottom.owl-carousel .owl-nav div:hover,.jeg_vertical_playlist .jeg_video_playlist_current,.woocommerce span.onsale,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.jeg_popup_post .caption,.jeg_footer.dark input[type="submit"],.jeg_footer.dark .btn,.jeg_footer.dark .button,.footer_widget.widget_tag_cloud a:hover { background-color : #f15e22; } .jeg_block_heading_7 .jeg_block_title span, .jeg_readmore:hover, .jeg_block_loadmore a:hover, .jeg_block_loadmore a.active, .jeg_pagenav_1 .page_number.active, .jeg_pagenav_1 .page_number.active:hover, .jeg_pagenav_3 .page_number:hover, .jeg_prevnext_post a:hover h3, .jeg_overlay_slider .jeg_post_category, .jeg_sidefeed .jeg_post.active, .jeg_vertical_playlist.jeg_vertical_playlist .jeg_video_playlist_item.active .jeg_video_playlist_thumbnail img, .jeg_horizontal_playlist .jeg_video_playlist_item.active { border-color : #f15e22; } .jeg_tabpost_nav li.active, .woocommerce div.product .woocommerce-tabs ul.tabs li.active { border-bottom-color : #f15e22; } .jeg_post_meta .fa, .entry-header .jeg_post_meta .fa, .jeg_review_stars, .jeg_price_review_list { color : ; } .jeg_share_button.share-float.share-monocrhome a { background-color : ; } h1,h2,h3,h4,h5,h6,.jeg_post_title a,.entry-header .jeg_post_title,.jeg_hero_style_7 .jeg_post_title a,.jeg_block_title,.jeg_splitpost_bar .current_title,.jeg_video_playlist_title,.gallery-caption { color : ; } .split-template-9 .pagenum, .split-template-10 .pagenum, .split-template-11 .pagenum, .split-template-12 .pagenum, .split-template-13 .pagenum, .split-template-15 .pagenum, .split-template-18 .pagenum, .split-template-20 .pagenum, .split-template-19 .current_title span, .split-template-20 .current_title span { background-color : ; } .entry-content .content-inner p, .entry-content .content-inner span, .entry-content .intro-text { color : ; } .entry-content .content-inner a { color : ; } .jeg_topbar .jeg_nav_row, .jeg_topbar .jeg_search_no_expand .jeg_search_input { line-height : px; } .jeg_topbar .jeg_nav_row, .jeg_topbar .jeg_nav_icon { height : px; } .jeg_topbar, .jeg_topbar.dark, .jeg_topbar.custom { background : ; } .jeg_topbar, .jeg_topbar.dark { border-color : ; color : ; border-top-width : px; border-top-color : ; } .jeg_topbar .jeg_nav_item, .jeg_topbar.dark .jeg_nav_item { border-color : ; } .jeg_topbar a, .jeg_topbar.dark a { color : ; } .jeg_midbar { height : px; background-image : url(""); } .jeg_midbar, .jeg_midbar.dark { background-color : #1e2f7f; border-bottom-width : px; border-bottom-color : ; color : ; } .jeg_midbar a, .jeg_midbar.dark a { color : ; } .jeg_header .jeg_bottombar.jeg_navbar,.jeg_bottombar .jeg_nav_icon { height : px; } .jeg_header .jeg_bottombar.jeg_navbar, .jeg_header .jeg_bottombar .jeg_main_menu:not(.jeg_menu_style_1) > li > a, .jeg_header .jeg_bottombar .jeg_menu_style_1 > li, .jeg_header .jeg_bottombar .jeg_menu:not(.jeg_main_menu) > li > a { line-height : px; } .jeg_header .jeg_bottombar.jeg_navbar_wrapper:not(.jeg_navbar_boxed), .jeg_header .jeg_bottombar.jeg_navbar_boxed .jeg_nav_row { background : #00214f; } .jeg_header .jeg_navbar_menuborder .jeg_main_menu > li:not(:last-child), .jeg_header .jeg_navbar_menuborder .jeg_nav_item, .jeg_navbar_boxed .jeg_nav_row, .jeg_header .jeg_navbar_menuborder:not(.jeg_navbar_boxed) .jeg_nav_left .jeg_nav_item:first-child { border-color : ; } .jeg_header .jeg_bottombar, .jeg_header .jeg_bottombar.jeg_navbar_dark { color : ; } .jeg_header .jeg_bottombar a, .jeg_header .jeg_bottombar.jeg_navbar_dark a { color : ; } .jeg_header .jeg_bottombar a:hover, .jeg_header .jeg_bottombar.jeg_navbar_dark a:hover, .jeg_header .jeg_bottombar .jeg_menu:not(.jeg_main_menu) > li > a:hover { color : ; } .jeg_header .jeg_bottombar, .jeg_header .jeg_bottombar.jeg_navbar_dark, .jeg_bottombar.jeg_navbar_boxed .jeg_nav_row, .jeg_bottombar.jeg_navbar_dark.jeg_navbar_boxed .jeg_nav_row { border-top-width : px; border-bottom-width : px; } .jeg_header_wrapper .jeg_bottombar, .jeg_header_wrapper .jeg_bottombar.jeg_navbar_dark, .jeg_bottombar.jeg_navbar_boxed .jeg_nav_row, .jeg_bottombar.jeg_navbar_dark.jeg_navbar_boxed .jeg_nav_row { border-top-color : ; border-bottom-color : ; } .jeg_mobile_bottombar { height : px; line-height : px; } .jeg_mobile_midbar, .jeg_mobile_midbar.dark { background : #1e2f7f; color : ; border-top-width : px; border-top-color : ; } .jeg_mobile_midbar a, .jeg_mobile_midbar.dark a { color : ; } .jeg_header .socials_widget > a > i.fa:before { color : ; } .jeg_header .socials_widget > a > i.fa { background-color : ; } .jeg_aside_item.socials_widget > a > i.fa:before { color : ; } .jeg_top_date { color : ; background : ; } .jeg_header .jeg_button_1 .btn { background : ; color : ; border-color : ; } .jeg_header .jeg_button_1 .btn:hover { background : ; } .jeg_header .jeg_button_2 .btn { background : ; color : ; border-color : ; } .jeg_header .jeg_button_2 .btn:hover { background : ; } .jeg_header .jeg_button_3 .btn { background : ; color : ; border-color : ; } .jeg_header .jeg_button_3 .btn:hover { background : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_1 { border-top-width : px; border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_1 a { border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_2 { border-top-width : px; border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_2 a { border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_3 { border-top-width : px; border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_3 a { border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_4 { border-top-width : px; border-top-color : ; } .jeg_header .jeg_vertical_menu.jeg_vertical_menu_4 a { border-top-color : ; } .jeg_lang_switcher { color : ; background : ; } .jeg_nav_icon .jeg_mobile_toggle.toggle_btn { color : ; } .jeg_navbar_mobile_wrapper .jeg_nav_item a.jeg_mobile_toggle, .jeg_navbar_mobile_wrapper .dark .jeg_nav_item a.jeg_mobile_toggle { color : #ffffff; } .cartdetail.woocommerce .jeg_carticon { color : ; } .cartdetail.woocommerce .cartlink { color : ; } .jeg_cart.cartdetail .jeg_cartcontent { background-color : ; } .cartdetail.woocommerce ul.cart_list li a, .cartdetail.woocommerce ul.product_list_widget li a, .cartdetail.woocommerce .widget_shopping_cart_content .total { color : ; } .cartdetail.woocommerce .cart_list .quantity, .cartdetail.woocommerce .product_list_widget .quantity { color : ; } .cartdetail.woocommerce .widget_shopping_cart_content .total { border-top-color : ; border-bottom-color : ; } .cartdetail.woocommerce .widget_shopping_cart_content .button { background-color : ; } .cartdetail.woocommerce a.button { color : ; } .cartdetail.woocommerce a.button:hover { background-color : ; color : ; } .jeg_cart_icon.woocommerce .jeg_carticon { color : ; } .jeg_cart_icon .jeg_cartcontent { background-color : ; } .jeg_cart_icon.woocommerce ul.cart_list li a, .jeg_cart_icon.woocommerce ul.product_list_widget li a, .jeg_cart_icon.woocommerce .widget_shopping_cart_content .total { color : ; } .jeg_cart_icon.woocommerce .cart_list .quantity, .jeg_cart_icon.woocommerce .product_list_widget .quantity { color : ; } .jeg_cart_icon.woocommerce .widget_shopping_cart_content .total { border-top-color : ; border-bottom-color : ; } .jeg_cart_icon.woocommerce .widget_shopping_cart_content .button { background-color : ; } .jeg_cart_icon.woocommerce a.button { color : ; } .jeg_cart_icon.woocommerce a.button:hover { background-color : ; color : ; } .jeg_nav_account, .jeg_navbar .jeg_nav_account .jeg_menu > li > a, .jeg_midbar .jeg_nav_account .jeg_menu > li > a { color : ; } .jeg_menu.jeg_accountlink li > ul { background-color : ; } .jeg_menu.jeg_accountlink li > ul, .jeg_menu.jeg_accountlink li > ul li > a, .jeg_menu.jeg_accountlink li > ul li:hover > a, .jeg_menu.jeg_accountlink li > ul li.sfHover > a { color : ; } .jeg_menu.jeg_accountlink li > ul li:hover > a, .jeg_menu.jeg_accountlink li > ul li.sfHover > a { background-color : ; } .jeg_menu.jeg_accountlink li > ul, .jeg_menu.jeg_accountlink li > ul li a { border-color : ; } .jeg_header .jeg_search_wrapper.search_icon .jeg_search_toggle { color : ; } .jeg_header .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form, .jeg_header .jeg_search_popup_expand .jeg_search_result { background : ; } .jeg_header .jeg_search_expanded .jeg_search_popup_expand .jeg_search_form:before { border-bottom-color : ; } .jeg_header .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form, .jeg_header .jeg_search_popup_expand .jeg_search_result, .jeg_header .jeg_search_popup_expand .jeg_search_result .search-noresult, .jeg_header .jeg_search_popup_expand .jeg_search_result .search-all-button { border-color : ; } .jeg_header .jeg_search_expanded .jeg_search_popup_expand .jeg_search_form:after { border-bottom-color : ; } .jeg_header .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form .jeg_search_input { background : ; border-color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_form .jeg_search_button { color : ; } .jeg_header .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form .jeg_search_input, .jeg_header .jeg_search_popup_expand .jeg_search_result a, .jeg_header .jeg_search_popup_expand .jeg_search_result .search-link { color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_form .jeg_search_input::-webkit-input-placeholder { color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_form .jeg_search_input:-moz-placeholder { color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_form .jeg_search_input::-moz-placeholder { color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_form .jeg_search_input:-ms-input-placeholder { color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_result { background-color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_result, .jeg_header .jeg_search_popup_expand .jeg_search_result .search-link { border-color : ; } .jeg_header .jeg_search_popup_expand .jeg_search_result a, .jeg_header .jeg_search_popup_expand .jeg_search_result .search-link { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_toggle i, .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_button, .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input { border-bottom-color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input::-webkit-input-placeholder { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input:-moz-placeholder { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input::-moz-placeholder { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand .jeg_search_input:-ms-input-placeholder { color : ; } .jeg_header .jeg_search_expanded .jeg_search_modal_expand { background : ; } .jeg_navbar_mobile .jeg_search_wrapper .jeg_search_toggle, .jeg_navbar_mobile .dark .jeg_search_wrapper .jeg_search_toggle { color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_form, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result { background : ; } .jeg_navbar_mobile .jeg_search_expanded .jeg_search_popup_expand .jeg_search_toggle:before { border-bottom-color : ; } .jeg_navbar_mobile .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result .search-noresult, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result .search-all-button { border-color : ; } .jeg_navbar_mobile .jeg_search_expanded .jeg_search_popup_expand .jeg_search_toggle:after { border-bottom-color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_form .jeg_search_input { background : ; border-color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_form .jeg_search_button { color : ; } .jeg_navbar_mobile .jeg_search_wrapper.jeg_search_popup_expand .jeg_search_form .jeg_search_input, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result a, .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_result .search-link { color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_input::-webkit-input-placeholder { color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_input:-moz-placeholder { color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_input::-moz-placeholder { color : ; } .jeg_navbar_mobile .jeg_search_popup_expand .jeg_search_input:-ms-input-placeholder { color : ; } .jeg_nav_search { width : %; } .jeg_header .jeg_search_no_expand .jeg_search_form .jeg_search_input { background-color : ; border-color : ; } .jeg_header .jeg_search_no_expand .jeg_search_form button.jeg_search_button { color : ; } .jeg_header .jeg_search_wrapper.jeg_search_no_expand .jeg_search_form .jeg_search_input { color : ; } .jeg_header .jeg_search_no_expand .jeg_search_form .jeg_search_input::-webkit-input-placeholder { color : ; } .jeg_header .jeg_search_no_expand .jeg_search_form .jeg_search_input:-moz-placeholder { color : ; } .jeg_header .jeg_search_no_expand .jeg_search_form .jeg_search_input::-moz-placeholder { color : ; } .jeg_header .jeg_search_no_expand .jeg_search_form .jeg_search_input:-ms-input-placeholder { color : ; } .jeg_header .jeg_search_no_expand .jeg_search_result { background-color : ; } .jeg_header .jeg_search_no_expand .jeg_search_result, .jeg_header .jeg_search_no_expand .jeg_search_result .search-link { border-color : ; } .jeg_header .jeg_search_no_expand .jeg_search_result a, .jeg_header .jeg_search_no_expand .jeg_search_result .search-link { color : ; } #jeg_off_canvas .jeg_mobile_wrapper .jeg_search_result { background-color : ; } #jeg_off_canvas .jeg_search_result.with_result .search-all-button { border-color : ; } #jeg_off_canvas .jeg_mobile_wrapper .jeg_search_result a,#jeg_off_canvas .jeg_mobile_wrapper .jeg_search_result .search-link { color : ; } .jeg_header .jeg_menu.jeg_main_menu > li > a { color : ; } .jeg_menu_style_1 > li > a:before, .jeg_menu_style_2 > li > a:before, .jeg_menu_style_3 > li > a:before { background : ; } .jeg_header .jeg_menu_style_4 > li > a:hover, .jeg_header .jeg_menu_style_4 > li.sfHover > a, .jeg_header .jeg_menu_style_4 > li.current-menu-item > a, .jeg_header .jeg_menu_style_4 > li.current-menu-ancestor > a, .jeg_navbar_dark .jeg_menu_style_4 > li > a:hover, .jeg_navbar_dark .jeg_menu_style_4 > li.sfHover > a, .jeg_navbar_dark .jeg_menu_style_4 > li.current-menu-item > a, .jeg_navbar_dark .jeg_menu_style_4 > li.current-menu-ancestor > a { background : #f15e22; } .jeg_header .jeg_menu.jeg_main_menu > li > a:hover, .jeg_header .jeg_menu.jeg_main_menu > li.sfHover > a, .jeg_header .jeg_menu.jeg_main_menu > li > .sf-with-ul:hover:after, .jeg_header .jeg_menu.jeg_main_menu > li.sfHover > .sf-with-ul:after, .jeg_header .jeg_menu_style_4 > li.current-menu-item > a, .jeg_header .jeg_menu_style_4 > li.current-menu-ancestor > a, .jeg_header .jeg_menu_style_5 > li.current-menu-item > a, .jeg_header .jeg_menu_style_5 > li.current-menu-ancestor > a { color : ; } .jeg_navbar_wrapper .sf-arrows .sf-with-ul:after { color : ; } .jeg_navbar_wrapper .jeg_menu li > ul { background : ; } .jeg_navbar_wrapper .jeg_menu li > ul li > a { color : ; } .jeg_navbar_wrapper .jeg_menu li > ul li:hover > a, .jeg_navbar_wrapper .jeg_menu li > ul li.sfHover > a, .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-item > a, .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-ancestor > a { background : ; } .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li:hover > a, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.sfHover > a, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-item > a, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-ancestor > a, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li:hover > .sf-with-ul:after, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.sfHover > .sf-with-ul:after, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-item > .sf-with-ul:after, .jeg_header .jeg_navbar_wrapper .jeg_menu li > ul li.current-menu-ancestor > .sf-with-ul:after { color : ; } .jeg_navbar_wrapper .jeg_menu li > ul li a { border-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_subcat { background-color : ; border-right-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_subcat li.active { border-color : ; background-color : ; } .jeg_navbar_wrapper .jeg_megamenu .sub-menu .jeg_newsfeed_subcat li a { color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_subcat li.active a { color : ; } .jeg_megamenu .sub-menu { background-color : ; } .jeg_megamenu .sub-menu .newsfeed_overlay { background-color : ; } .jeg_megamenu .sub-menu .newsfeed_overlay .jeg_preloader span { background-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_list .jeg_newsfeed_item .jeg_post_title a { color : ; } .jeg_newsfeed_tags h3 { color : ; } .jeg_navbar_wrapper .jeg_newsfeed_tags li a { color : ; } .jeg_newsfeed_tags { border-left-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_list .newsfeed_carousel.owl-carousel .owl-nav div { color : ; background-color : ; border-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_list .newsfeed_carousel.owl-carousel .owl-nav div:hover { color : ; background-color : ; border-color : ; } .jeg_megamenu .sub-menu .jeg_newsfeed_list .newsfeed_carousel.owl-carousel .owl-nav div.disabled { color : ; background-color : ; border-color : ; } .jnews .jeg_header .jeg_menu.jeg_top_menu > li > a { color : ; } .jnews .jeg_header .jeg_menu.jeg_top_menu > li a:hover { color : ; } .jnews .jeg_top_menu.sf-arrows .sf-with-ul:after { color : ; } .jnews .jeg_menu.jeg_top_menu li > ul { background-color : ; } .jnews .jeg_menu.jeg_top_menu li > ul, .jnews .jeg_menu.jeg_top_menu li > ul li > a, .jnews .jeg_menu.jeg_top_menu li > ul li:hover > a, .jnews .jeg_menu.jeg_top_menu li > ul li.sfHover > a { color : ; } .jnews .jeg_menu.jeg_top_menu li > ul li:hover > a, .jnews .jeg_menu.jeg_top_menu li > ul li.sfHover > a { background-color : ; } .jnews .jeg_menu.jeg_top_menu li > ul, .jnews .jeg_menu.jeg_top_menu li > ul li a { border-color : ; } #jeg_off_canvas.dark .jeg_mobile_wrapper, #jeg_off_canvas .jeg_mobile_wrapper { background : ; } .jeg_mobile_wrapper .nav_wrap:before { background : ; } .jeg_mobile_wrapper { background-image : url(""); } .jeg_footer_content,.jeg_footer.dark .jeg_footer_content { background-color : ; } .jeg_footer_secondary,.jeg_footer.dark .jeg_footer_secondary,.jeg_footer_bottom,.jeg_footer.dark .jeg_footer_bottom,.jeg_footer_sidecontent .jeg_footer_primary { color : ; } .jeg_footer_bottom a,.jeg_footer.dark .jeg_footer_bottom a,.jeg_footer_secondary a,.jeg_footer.dark .jeg_footer_secondary a,.jeg_footer_sidecontent .jeg_footer_primary a,.jeg_footer_sidecontent.dark .jeg_footer_primary a { color : ; } .jeg_menu_footer a,.jeg_footer.dark .jeg_menu_footer a,.jeg_footer_sidecontent .jeg_footer_primary .col-md-7 .jeg_menu_footer a { color : ; } .jeg_menu_footer a:hover,.jeg_footer.dark .jeg_menu_footer a:hover,.jeg_footer_sidecontent .jeg_footer_primary .col-md-7 .jeg_menu_footer a:hover { color : ; } .jeg_menu_footer li:not(:last-child):after,.jeg_footer.dark .jeg_menu_footer li:not(:last-child):after { color : ; } body,input,textarea,select,.chosen-container-single .chosen-single,.btn,.button { font-family: "Roboto", Helvetica,Arial,sans-serif; } .jeg_header, .jeg_mobile_wrapper { font-family: "Roboto", Helvetica,Arial,sans-serif; } .jeg_thumb .jeg_post_category a,.jeg_pl_lg_box .jeg_post_category a,.jeg_pl_md_box .jeg_post_category a,.jeg_postblock_carousel_2 .jeg_post_category a,.jeg_heroblock .jeg_post_category a,.jeg_slide_caption .jeg_post_category a { background-color : ; color : ; } .jeg_overlay_slider .jeg_post_category,.jeg_thumb .jeg_post_category a,.jeg_pl_lg_box .jeg_post_category a,.jeg_pl_md_box .jeg_post_category a,.jeg_postblock_carousel_2 .jeg_post_category a,.jeg_heroblock .jeg_post_category a,.jeg_slide_caption .jeg_post_category a { border-color : ; } </style><style type="text/css">.no_thumbnail{display: none;}</style>		<style type="text/css" id="wp-custom-css">
			.jeg_header .jeg_logo img {
    width: 250px;
}
.jeg_main_menu>li {
    margin: 0 30px;
}
.jeg_megamenu .custom-mega-menu {
    padding: 0;
}
.jeg_menu .custom-mega-menu a.elementor-button {
    display: inline-block;
}		</style>
		</head>
<body data-rsssl=1 class="post-template-default single single-post postid-87518 single-format-standard wp-embed-responsive jeg_toggle_dark jeg_single_tpl_1 jnews jsc_normal elementor-default">
    <div class="post-wrapper">
        <div class="post-wrap" >
            <div class="jeg_main ">
                <div class="jeg_container">
                    <div class="jeg_content jeg_singlepage">
    <div class="container">
        <div class="row">
            <div class="jeg_main_content col-md-8">
                <div class="jeg_inner_content">
                    
                                                <div class="jeg_breadcrumbs jeg_breadcrumb_container">
                            <div id="breadcrumbs"><span class="">
                <a href="{{route('online-home')}}">Trang chủ</a>
            </span><i class="fa fa-angle-right"></i><span class="breadcrumb_last_link">
                <a href="">{{$post->name}}</a>
            </span></div>                        </div>
                        
                        <div class="entry-header">
    	                    
                            <h1 class="jeg_post_title">{{$post->name}}</h1>

                            
                            <div class="jeg_meta_container"><div class="jeg_post_meta jeg_post_meta_1">

    <div class="meta_left">
                    <div class="jeg_meta_author">
                <img alt='User' src='{{ asset('upload/users/'.$post->users_id->image)}}' srcset='{{ asset('upload/users/'.$post->users_id->image)}}' class='avatar avatar-80 photo' height='80' width='160' />                <span class="meta_text">Bởi</span>
                <a href="{{route('online.blog.author', $post->users_id->id)}}">{{$post->users_id->name}}</a>            </div>
        
                    <div class="jeg_meta_date">
                <a href="">{{date('d-m-Y', strtotime($post->created_at))}}</a>
            </div>
        
                    <div class="jeg_meta_category">
                <span><span class="meta_text">Trong</span>
                    <a href="{{route('online.blog.menu', $post->categories_post->id)}}" rel="category tag">{{$post->categories_post->name}}</a>
                </span>
            </div>
        
	        </div>

    <div class="meta_right">
                            <div class="jeg_meta_comment"><a class="toc_list_scoll" href="#wc-textarea-0_0"><i class="fa fa-comment-o"></i> {{$post->comment_count}}</a></div>
            </div>
</div>
</div>
                        </div>

                        <div class="jeg_featured featured_image"><a href=""><div class="thumbnail-container animate-lazy" style="padding-bottom:56.222%"><img width="667" height="375" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-750x375 size-jnews-750x375 lazyload wp-post-image" alt="tích-xanh-facebook" data-src="{{ asset('upload/posts/'.$post->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div><p class="wp-caption-text">{{$post->name}}</p></a></div>
                        <div class="jeg_share_top_container"><div class="jeg_share_button clearfix">
                <div class="jeg_share_stats">
                    <div class="jeg_share_count">
                        <div class="counts">{{$post->post_share}}</div>
                        <span class="sharetext">Chia Sẻ</span>
                    </div>
                    <div class="jeg_views_count">
                    <div class="counts">{{$post->post_view}}</div>
                    <span class="sharetext">Lượt Xem</span>
                </div>
                </div>
            </div></div>
                        <div class="jeg_ad jeg_article jnews_content_top_ads "><div class='ads-wrapper  '></div></div>
                        <div class="entry-content no-share">
                            <div class="jeg_share_button share-float jeg_sticky_share clearfix share-monocrhome">
                                <div class="jeg_share_float_container"></div>                            </div>

                            <div class="content-inner ">
                                {{-- <div style="display: none;"
    class="kk-star-ratings kksr-valign-top kksr-align-left "
    data-id="87518"
    data-slug="">
    <div class="kksr-stars">
    <div class="kksr-stars-inactive">
            <div class="kksr-star" data-star="1">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star" data-star="2">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star" data-star="3">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star" data-star="4">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star" data-star="5">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
    </div>
    <div class="kksr-stars-active" style="width: 140px;">
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
            <div class="kksr-star">
            <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
        </div>
    </div>
</div>
    <div class="kksr-legend">
            <strong class="kksr-score">5</strong>
        <span class="kksr-muted">/</span>
        <strong>5</strong>
        <span class="kksr-muted">(</span>
        <strong class="kksr-count">1</strong>
        <span class="kksr-muted">
            vote        </span>
        <span class="kksr-muted">)</span>
    </div>
</div> --}}

<p><span id="menu1"><amp-fit-text layout="fixed-height" min-font-size="6" max-font-size="72" height="80">{{$post->description}}</amp-fit-text></p></span>

<span id="menu2">{{$post->content}}</span>

<p class="has-text-align-right">{{$post->note}}</p>
                                
	                            
      <div class="jeg_post_tags"><span>Tags:</span>
        @foreach($post->tag_post()->get() as $tag)
        <a href="{{route('online.blog.tag', $tag->id)}}" rel="tag">{{$tag->name}}</a>
        @endforeach
      </div>
                                                            </div>

                            <div class="jeg_share_bottom_container"><div class="jeg_share_button share-bottom clearfix">
                <div class="jeg_sharelist">
                    <div class="fb-share-button" data-href="{{route('online.blog.news', $post->id)}}" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    {{-- <a href="{{$post->users_id->facebook}}" rel='nofollow' class="jeg_btn-facebook expanded"><i class="fa fa-facebook-official"></i><span>Chỉa Sẻ</span></a> --}}
                    {{-- <a href="{{$post->users_id->email}}" rel='nofollow' class="jeg_btn-pinterest expanded"><i class="fa fa-google"></i><span>Gmail</span></a> --}}
                    
                </div>
            </div></div>
                            <div class='jeg_push_notification single_post'>
                        
                    </div>                        </div>

                        <div class="jeg_ad jeg_article jnews_content_bottom_ads "><div class='ads-wrapper  '></div></div><div class="jnews_prev_next_container"></div><div class="jnews_author_box_container"><div class="jeg_authorbox">
    <div class="jeg_author_image">
        <img alt='Duy Nguyễn' src='{{ asset('upload/users/'.$post->users_id->image)}}' srcset='{{ asset('upload/users/'.$post->users_id->image)}}' class='avatar avatar-80 photo' height='80' width='80' />    </div>
    <div id="author" class="jeg_author_content">
        <h3 class="jeg_author_name">
            <a href="{{route('online.blog.author', $post->users_id->id)}}">{{$post->users_id->name}}</a>
        </h3>
        <p class="jeg_author_desc">{{$post->users_id->email}}</p>
            </div>
</div>

</div><div class="jnews_related_post_container"></div><div class="jnews_popup_post_container">
    <section class="jeg_popup_post">
        <span class="caption">Bài Mới!!!</span>
                        @foreach($post_news as $post_new)
                    <div class="jeg_popup_content">
                <div class="jeg_thumb">
                                        <a href="{{route('online.blog.news', $post_new->id)}}">
                        <div class="thumbnail-container animate-lazy  size-1000 "><img width="75" height="63" src="{{ asset('upload/posts/'.$post_new->image)}}" class="attachment-jnews-75x75 size-jnews-75x75 lazyload wp-post-image" alt="" data-src="{{ asset('upload/posts/'.$post_new->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div>                    </a>
                </div>
                <h3 class="post-title">
                    <a href="{{route('online.blog.news', $post_new->id)}}">{{$post_new->name}}</a>
                </h3>
            </div>
                    @endforeach
        <a href="" class="jeg_popup_close"><i class="fa fa-close"></i></a>
    </section>

</div><div class="jnews_comment_container">    <div class="wpdiscuz_top_clearing"></div>
    <div id="comments" class="comments-area"><div id="respond" style="width: 0;height: 0;clear: both;margin: 0;padding: 0;"></div>            <h3 id="wc-comment-header">
                                Đừng ngần ngại c&ugrave;ng nhau thảo luận về b&agrave;i viết nh&eacute; !!!!            </h3>
                    <div id="wpcomm" class="wpdiscuz_unauth wpd-default">
            <div class="wpdiscuz-form-top-bar">
                <div class="wpdiscuz-ftb-left">
                                                            <div id="wc_show_hide_loggedin_username">
                                            </div>
                </div>
                                <div class="wpd-clear"></div>
            </div>


                        <div class="wc_social_plugin_wrapper">
                            </div>
                    <div class="wc-form-wrapper wc-main-form-wrapper"  id='wc-main-form-wrapper-0_0' >
            <div class="wpdiscuz-comment-message" style="display: block;"></div>
                                        <form class="wc_comm_form wc_main_comm_form" method="post"  enctype="multipart/form-data">
                    <div class="wc-field-comment">
                        <div class="wpdiscuz-item wc-field-textarea" >
                            <div class="wpdiscuz-textarea-wrap ">

                                                                                                        <div class="wc-field-avatararea">
                                        <img alt='avatar' src='https://secure.gravatar.com/avatar/?s=40&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo avatar-default' height='40' width='40' />                                    </div>
                                
                                <textarea id="wc-textarea-0_0"   placeholder="Start the discussion..." required name="wc_comment" class="wc_comment wpd-field" disabled=""></textarea>
                                                                                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="wc-form-footer"  style="display: none;"> 
                                <div class="wpd-form-row">
                    <div class="wpd-form-col-left">
                        <div class="wpdiscuz-item wc_name-wrapper">
                                                <input value="" required="required" class="wc_name wpd-field" type="text" name="wc_name" placeholder="Tên*" maxlength="50" pattern=".{3,50}" title="">
                            </div>
                        <div class="wpdiscuz-item wc_email-wrapper">
                                                <input value="" required="required" class="wc_email wpd-field" type="email" name="wc_email" placeholder="Địa chỉ email*">
                            </div>
                    </div>
                <div class="wpd-form-col-right">
                    <div class="wc-field-captcha wpdiscuz-item wc_captcha-wrapper">
            <div class="wc-captcha-input">
                <input type="text" maxlength="5" value="" autocomplete="off" required="required" name="wc_captcha"  class="wpd-field wc_field_captcha" placeholder="Mã xác nhận" title="Insert the CAPTCHA code">
            </div>
            <div class="wc-label wc-captcha-label">
                                <a class="wpdiscuz-nofollow" href="" rel="nofollow"><img alt="wpdiscuz_captcha" class="wc_captcha_img" src="https://atpsoftware.vn/wp-content/plugins/wpdiscuz/utils/captcha/captcha.php?key=c5e0a133ced92e"  width="80" height="26"/></a><a class="wpdiscuz-nofollow wc_captcha_refresh_img" href="" rel="nofollow"><img  alt="refresh" class="" src="https://atpsoftware.vn/wp-content/plugins/wpdiscuz/assets/img/captcha-loading.png" width="16" height="16"/></a>
                <input type="hidden" id="c5e0a133ced92e" class="wpdiscuz-cnonce" name="cnonce" value="c5e0a133ced92e" />
            </div>
            <div class="clearfix"></div>
        </div>
                <div class="wc-field-submit">
                                            
                                            <label class="wpd_label" title="Notify of new replies to this comment">
                            <input id="wc_notification_new_comment-0_0" class="wc_notification_new_comment-0_0 wpd_label__checkbox" value="comment" type="checkbox" name="wpdiscuz_notification_type" />
                            <span class="wpd_label__text">
                                <span class="wpd_label__check">
                                    <i class="fas fa-bell wpdicon wpdicon-on"></i>
                                    <i class="fas fa-bell-slash wpdicon wpdicon-off"></i>
                                </span>
                            </span>
                        </label>
                                                                <input class="wc_comm_submit wc_not_clicked button alt" type="submit" name="submit" value="GỬI COMMENT">
        </div>
                </div>
                    <div class="clearfix"></div>
        </div>
                            </div>
                    <div class="clearfix"></div>
                    <input type="hidden" class="wpdiscuz_unique_id" value="0_0" name="wpdiscuz_unique_id">
                </form>
                        </div>
                <div id = "wpdiscuz_hidden_secondary_form" style = "display: none;">
                    <div class="wc-form-wrapper wc-secondary-form-wrapper"  id='wc-secondary-form-wrapper-wpdiscuzuniqueid'  style='display: none;' >
            <div class="wpdiscuz-comment-message" style="display: block;"></div>
                            <div class="wc-secondary-forms-social-content"></div><div class="clearfix"></div>
                                        <form class="wc_comm_form wc-secondary-form-wrapper" method="post"  enctype="multipart/form-data">
                    <div class="wc-field-comment">
                        <div class="wpdiscuz-item wc-field-textarea" >
                            <div class="wpdiscuz-textarea-wrap ">

                                                                                                        <div class="wc-field-avatararea">
                                        <img alt='avatar' src='https://secure.gravatar.com/avatar/?s=48&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/?s=96&#038;d=mm&#038;r=g 2x' class='avatar avatar-48 photo avatar-default' height='48' width='48' />                                    </div>
                                
                                <textarea id="wc-textarea-wpdiscuzuniqueid"   placeholder="Join the discussion..." required name="wc_comment" class="wc_comment wpd-field"></textarea>
                                                                                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="wc-form-footer"  style="display: none;"> 
                                <div class="wpd-form-row">
                    <div class="wpd-form-col-left">
                        <div class="wpdiscuz-item wc_name-wrapper">
                                                <input value="" required="required" class="wc_name wpd-field" type="text" name="wc_name" placeholder="Tên*" maxlength="50" pattern=".{3,50}" title="">
                            </div>
                        <div class="wpdiscuz-item wc_email-wrapper">
                                                <input value="" required="required" class="wc_email wpd-field" type="email" name="wc_email" placeholder="Địa chỉ email*">
                            </div>
                    </div>
                <div class="wpd-form-col-right">
                    <div class="wc-field-captcha wpdiscuz-item wc_captcha-wrapper">
            <div class="wc-captcha-input">
                <input type="text" maxlength="5" value="" autocomplete="off" required="required" name="wc_captcha"  class="wpd-field wc_field_captcha" placeholder="Mã xác nhận" title="Insert the CAPTCHA code">
            </div>
            <div class="wc-label wc-captcha-label">
                                <a class="wpdiscuz-nofollow" href="" rel="nofollow"><img alt="wpdiscuz_captcha" class="wc_captcha_img" src="https://atpsoftware.vn/wp-content/plugins/wpdiscuz/utils/captcha/captcha.php?key=c5e0a133cedbd5"  width="80" height="26"/></a><a class="wpdiscuz-nofollow wc_captcha_refresh_img" href="" rel="nofollow"><img  alt="refresh" class="" src="https://atpsoftware.vn/wp-content/plugins/wpdiscuz/assets/img/captcha-loading.png" width="16" height="16"/></a>
                <input type="hidden" id="c5e0a133cedbd5" class="wpdiscuz-cnonce" name="cnonce" value="c5e0a133cedbd5" />
            </div>
            <div class="clearfix"></div>
        </div>
                <div class="wc-field-submit">
                                            
                                            <label class="wpd_label" title="Notify of new replies to this comment">
                            <input id="wc_notification_new_comment-wpdiscuzuniqueid" class="wc_notification_new_comment-wpdiscuzuniqueid wpd_label__checkbox" value="comment" type="checkbox" name="wpdiscuz_notification_type" />
                            <span class="wpd_label__text">
                                <span class="wpd_label__check">
                                    <i class="fas fa-bell wpdicon wpdicon-on"></i>
                                    <i class="fas fa-bell-slash wpdicon wpdicon-off"></i>
                                </span>
                            </span>
                        </label>
                                                                <input class="wc_comm_submit wc_not_clicked button alt" type="submit" name="submit" value="GỬI COMMENT">
        </div>
                </div>
                    <div class="clearfix"></div>
        </div>
                            </div>
                    <div class="clearfix"></div>
                    <input type="hidden" class="wpdiscuz_unique_id" value="wpdiscuzuniqueid" name="wpdiscuz_unique_id">
                </form>
                        </div>
                </div>
                                           

                                    <div class="wpdiscuz-front-actions">
                                                                        <div class="clearfix"></div>
                    </div>
                                
                                <div id="wcThreadWrapper" class="wc-thread-wrapper">
                                    
                    <div class="wpdiscuz-comment-pagination">
                                            </div>
                </div>
                <div class="wpdiscuz_clear"></div>
                                            </div>
        </div>
        <div id="wpdiscuz-loading-bar" class="wpdiscuz-loading-bar wpdiscuz-loading-bar-unauth"></div>
        </div>
                                    </div>
            </div>
            
<div class="jeg_sidebar  jeg_sticky_sidebar col-md-4">
    <div class="widget widget_jnews_module_element_ads" id="jnews_module_element_ads-2">
        <div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Mục lục</p>
    <ul class="toc_list">
        <li><a class="toc_list_scoll" href="#menu1"><span class="toc_number toc_depth_1">1</span> {{$post->description}}</a></li>
        <li><a class="toc_list_scoll" href="#author"><span class="toc_number toc_depth_1">3</span> Tác giả</a></li>
    </ul>
</div>
    </div><div class="widget widget_jnews_tab_post" id="jnews_tab_post-3"><div class="jeg_tabpost_widget"><ul class="jeg_tabpost_nav">
                <li data-tab-content="jeg_tabpost_1" class="active">Nổi Bật</li>
                <li data-tab-content="jeg_tabpost_2">Bình Luận</li>
                <li data-tab-content="jeg_tabpost_3">Mới Nhất</li>
            </ul><div class="jeg_tabpost_content"><div class="jeg_tabpost_item active" id="jeg_tabpost_1"><div class="jegwidgetpopular">
                @foreach($posts as $post)
                <div class="jeg_post jeg_pl_sm post-9189 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-atp-software category-viet-by-tran-thinh-lam tag-access-token tag-access-token-facebook tag-get-token tag-huong-dan-lay-token-facebook tag-lay-token-full-quyen tag-token-facebook-la-gi tag-token-full-quyen tag-token-la-gi">
                    <div class="jeg_thumb">
                        <a href="{{route('online.blog.news', $post->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="120" height="86" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="Token Facebook Là Gì? Cách lấy token Facebook đơn giản nhất?" data-src="{{ asset('upload/posts/'.$post->image)}}" data-sizes="auto" data-srcset="{{ asset('upload/posts/'.$post->image)}} 120w, {{ asset('upload/posts/'.$post->image)}} 350w, {{ asset('upload/posts/'.$post->image)}} 750w" data-expand="700" /></div></a>
                    </div>
                    <div class="jeg_postblock_content">
                        <h3 class="jeg_post_title"><a property="url" href="{{route('online.blog.news', $post->id)}}">{{$post->name}}</a></h3>
                        <div class="jeg_post_meta">
                    <div class="jeg_meta_date"><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($post->created_at))}}</div>
                </div>
                    </div>
                </div>
                @endforeach
            </div></div><div class="jeg_tabpost_item" id="jeg_tabpost_2"><div class="jegwidgetpopular">
                @foreach($post_comments as $post_comment)
                <div class="jeg_post jeg_pl_sm post-11140 post type-post status-publish format-standard has-post-thumbnail hentry category-thu-thuat-facebook category-uncategorized tag-cach-mo-khoa-faq tag-cach-mo-khoa-fb-bi-faq tag-huong-dan-mo-khoa-faq tag-mo-khoa-facebook-bi-faq tag-mo-khoa-faq-facebook tag-mo-khoa-faq-facebook-2017 tag-mo-khoa-faq-mao-danh tag-mo-khoa-faq-nguyen-thuy tag-mo-khoa-tai-khoan-bi-faq tag-mo-khoa-tai-khoan-facebook-faq">
                    <div class="jeg_thumb">
                        
                        <a href="{{route('online.blog.news', $post_comment->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="120" height="68" src="{{ asset('upload/posts/'.$post_comment->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="Hỏi &#8211; đáp về tư duy ứng dụng phần mềm Simple Account" data-src="{{ asset('upload/posts/'.$post_comment->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                    </div>
                    <div class="jeg_postblock_content">
                        <h3 class="jeg_post_title"><a property="url" href="{{route('online.blog.news', $post_comment->id)}}">{{$post_comment->name}}</a></h3>
                        <div class="jeg_post_meta">
                    <div class="jeg_meta_like"><i class="fa fa-comment-o"></i> {{$post_comment->comment_count}}</div>
                </div>
                    </div>
                </div>
                @endforeach
                </div></div><div class="jeg_tabpost_item" id="jeg_tabpost_3"><div class="jegwidgetpopular">
                    @foreach($post_news as $post_new)
                    <div class="jeg_post jeg_pl_sm post-87813 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online tag-ban-hang-qua-doi-thoai tag-hinh-thuc-ban-hang tag-ky-nang-ban-hang">
                    <div class="jeg_thumb">
                        
                        <a href="{{route('online.blog.news', $post_new->id)}}"><div class="thumbnail-container animate-lazy  size-715 "><img width="95" height="86" src="{{ asset('upload/posts/'.$post_new->image)}}" class="attachment-jnews-120x86 size-jnews-120x86 lazyload wp-post-image" alt="Tương lai của hình thức bán hàng qua đối thoại: Lợi ích mạng lại cho thương hiệu" data-src="{{ asset('upload/posts/'.$post_new->image)}}" data-sizes="auto" data-srcset="" data-expand="700" /></div></a>
                    </div>
                    <div class="jeg_postblock_content">
                        <h3 class="jeg_post_title"><a property="url" href="{{route('online.blog.news', $post_new->id)}}">{{$post_new->name}}</a></h3>
                        <div class="jeg_post_meta">
                    <div class="jeg_meta_like"><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($post_new->created_at))}}</div>
                </div>
                    </div>
                </div>
                @endforeach
                </div></div></div></div></div></div>        </div>

        <div class="jeg_ad jeg_article jnews_article_bottom_ads">
            <div class='ads-wrapper  '></div>            
        </div>

    </div>
</div>
		<div data-elementor-type="section" data-elementor-id="87712" class="elementor elementor-87712" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-a90ba43 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="a90ba43" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-cecf02e elementor-column elementor-col-100 elementor-top-column" data-id="cecf02e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-f09fbb2 elementor-widget elementor-widget-heading" data-id="f09fbb2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<div class="elementor-heading-title elementor-size-default">Cẩm nang kinh doanh hay cho người mới bắt đầu</div>		</div>
				</div>
				<div class="elementor-element elementor-element-db9f26c elementor-widget elementor-widget-jnews_slider_3_elementor" data-id="db9f26c" data-element_type="widget" data-widget_type="jnews_slider_3_elementor.default">
				<div class="elementor-widget-container">
			<div  class="jeg_slider_wrapper jeg_slider_type_3_wrapper jeg_col_3o3 jnews_module_87518_2_5e0a133d17d28  ">
					<div class='jeg_slider_placeholder'>
						<div class='thumbnail-wrapper'>
							<div class='thumbnail-inner' style="margin-right: 5px;flex: 0 1 30px;"><div class='thumbnail-container'></div></div><div class='thumbnail-inner' style='margin-right: 5px;'><div class='thumbnail-container size-1400'></div></div><div class='thumbnail-inner' style='margin-right: 5px;'><div class='thumbnail-container size-1400'></div></div><div class='thumbnail-inner' style='margin-right: 5px;'><div class='thumbnail-container size-1400'></div></div><div class='thumbnail-inner' style='margin-right: 5px;'><div class='thumbnail-container size-1400'></div></div><div class='thumbnail-inner' style="flex: 0 1 30px;"><div class='thumbnail-container'></div></div>
						</div>
						<i class='fa fa-spin fa-circle-o-notch'></i>
					</div>
                    <div class="jeg_slider_type_3 jeg_slider" data-items="4" data-autoplay="" data-delay="3000">
                            @foreach($posts as $post)
                        <div class="jeg_slide_item post-87813 post type-post status-publish format-standard has-post-thumbnail hentry category-ban-hang-online tag-ban-hang-qua-doi-thoai tag-hinh-thuc-ban-hang tag-ky-nang-ban-hang">
                    
                    <a href="">
                        <div class="thumbnail-container size-1400 "><img width="360" height="325" src="{{ asset('upload/posts/'.$post->image)}}" class="attachment-jnews-360x504 size-jnews-360x504" alt="" /></div>
                    </a>
                    <div class="jeg_slide_caption">
                        <div class="jeg_caption_container">
                            {{-- <div class="jeg_post_category">
                                <a href="{{route('online.blog.menu', $categoriesposts->id)}}">{{$post->categories_post->name}}</a>
                            </div> --}}
                            <h2 class="jeg_post_title">
                                <a href="{{route('online.blog.news', $post->id)}}">{{$post->name}}</a>
                            </h2>
                            <p class="jeg_post_excerpt">{{$post->description}}</p>
                            <div class="jeg_post_meta">
					
                    <span class="jeg_meta_date"><i class="fa fa-clock-o"></i> 30/12/2019</span>
                </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    </div>
                </div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-ed71adf elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ed71adf" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-f60ed2f elementor-column elementor-col-100 elementor-top-column" data-id="f60ed2f" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-b46efea elementor-widget elementor-widget-heading" data-id="b46efea" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<div class="elementor-heading-title elementor-size-default">Đã trót tới đây,<br>
<strong>sao không một lần ghé thăm nhà VNP SOFTWARE</strong></div>		</div>
				</div>
				<div class="elementor-element elementor-element-10b6541 elementor-align-center elementor-widget elementor-widget-button" data-id="10b6541" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="{{route('online-home')}}" class="elementor-button-link elementor-button elementor-size-md elementor-animation-pulse-shrink" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Xem VNP SOFTWARE có gì</span>
		</span>
					</a>
		</div>
				</div>
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
		                </div>
            </div>

            <div id="post-body-class" class="post-template-default single single-post postid-87518 single-format-standard wp-embed-responsive jeg_toggle_dark jeg_single_tpl_1 jnews jsc_normal elementor-default"></div>

            
        </div>

        <div class="post-ajax-overlay">
    <div class="preloader_type preloader_dot">
        <div class="newsfeed_preloader jeg_preloader dot">
            <span></span><span></span><span></span>
        </div>
        <div class="newsfeed_preloader jeg_preloader circle">
            <div class="jnews_preloader_circle_outer">
                <div class="jnews_preloader_circle_inner"></div>
            </div>
        </div>
        <div class="newsfeed_preloader jeg_preloader square">
            <div class="jeg_square"><div class="jeg_square_inner"></div></div>
        </div>
    </div>
</div>
    </div>
    </div>

<script type="text/javascript">var jfla = ["view_counter"]</script>

	<div class="jeg_read_progress_wrapper"></div><link rel='stylesheet' id='elementor-frontend-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/css/frontend.min-2.8.2.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-44486-css'  href='{{asset('template/blog/elementor/css/post-44486ver=1576923332.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-44534-css'  href='{{asset('template/blog/elementor/css/post-44534ver=1576925285.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-44535-css'  href='{{asset('template/blog/elementor/css/post-44535ver=1576925104.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-87712-css'  href='{{asset('template/blog/elementor/css/post-87712ver=1577524982.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-42470-css'  href='{{asset('template/blog/elementor/css/post-42470ver=1576921860.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min-5.5.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/animations/animations.min-2.8.2.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor-pro/assets/css/frontend.min-2.7.3.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='{{asset('template/blog/elementor/css/globalver=1576921867.css')}}' type='text/css' media='all' />

<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min-5.9.0.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'  href='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min-5.9.0.css')}}' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var kk_star_ratings = {"action":"kk-star-ratings","endpoint":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"b486bc8194"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/kk-star-ratings/public/js/kk-star-ratings-4.1.3.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var tocplus = {"visibility_show":"Hi\u1ec7n","visibility_hide":"\u1ea8n","width":"Auto"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/table-of-contents-plus/front.min-1509.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/third-party/wpdccjs/wpdcc-5.3.5.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/third-party/autogrow/jquery.autogrowtextarea.min-5.3.5.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/jquery/jquery.form.min-4.2.1.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpdiscuzAjaxObj = {"url":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","customAjaxUrl":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/wpdiscuz\/utils\/ajax\/wpdiscuz-ajax.php","wpdiscuz_options":{"wc_hide_replies_text":"Hide Replies","wc_show_replies_text":"View Replies","wc_msg_required_fields":"Please fill out required fields","wc_invalid_field":"Some of field value is invalid","wc_error_empty_text":"please fill out this field to comment","wc_error_url_text":"url is invalid","wc_error_email_text":"email address is invalid","wc_invalid_captcha":"Invalid Captcha Code","wc_login_to_vote":"You Must Be Logged In To Vote","wc_deny_voting_from_same_ip":"You are not allowed to vote for this comment","wc_self_vote":"You cannot vote for your comment","wc_vote_only_one_time":"You've already voted for this comment","wc_voting_error":"Voting Error","wc_held_for_moderate":"Comment awaiting moderation","wc_comment_edit_not_possible":"Sorry, this comment no longer possible to edit","wc_comment_not_updated":"Sorry, the comment was not updated","wc_comment_not_edited":"You've not made any changes","wc_new_comment_button_text":"new comment","wc_new_comments_button_text":"new comments","wc_new_reply_button_text":"new reply on your comment","wc_new_replies_button_text":"new replies on your comments","wc_msg_input_min_length":"Input is too short","wc_msg_input_max_length":"Input is too long","wc_follow_user":"Follow this user","wc_unfollow_user":"Unfollow this user","wc_follow_success":"You started following this comment author","wc_follow_canceled":"You stopped following this comment author.","wc_follow_email_confirm":"Please check your email and confirm the user following request.","wc_follow_email_confirm_fail":"Sorry, we couldn't send confirmation email.","wc_follow_login_to_follow":"Please login to follow users.","wc_follow_impossible":"We are sorry, but you can't follow this user.","wc_follow_not_added":"Following failed. Please try again later.","is_user_logged_in":false,"commentListLoadType":"0","commentListUpdateType":"0","commentListUpdateTimer":"30","liveUpdateGuests":"1","wc_comment_bg_color":"#FEFEFE","wc_reply_bg_color":"#F8F8F8","wpdiscuzCommentsOrder":"asc","wpdiscuzCommentOrderBy":"comment_date_gmt","commentsVoteOrder":false,"wordpressThreadCommentsDepth":"5","wordpressIsPaginate":"","commentTextMaxLength":null,"storeCommenterData":100000,"isCaptchaInSession":true,"isGoodbyeCaptchaActive":false,"socialLoginAgreementCheckbox":"1","enableFbLogin":0,"enableFbShare":0,"facebookAppID":"","facebookUseOAuth2":0,"enableGoogleLogin":0,"googleAppID":"","cookiehash":"b6c1764c288a03eba4de1091682b69ff","isLoadOnlyParentComments":0,"ahk":"iqp7xy7@2eofq*jk^9#k%3nh8m5foqb9","enableDropAnimation":1,"isNativeAjaxEnabled":1,"cookieCommentsSorting":"wpdiscuz_comments_sorting","enableLastVisitCookie":0,"version":"5.3.5","wc_post_id":87518,"loadLastCommentId":0,"lastVisitKey":"wpdiscuz_last_visit","isCookiesEnabled":true,"wc_captcha_show_for_guest":1,"wc_captcha_show_for_members":"0","is_email_field_required":1}};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/js/wpdiscuz-5.3.5.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpdiscuzUCObj = {"msgConfirmDeleteComment":"Are you sure you want to delete this comment?","msgConfirmCancelSubscription":"Are you sure you want to cancel this subscription?","msgConfirmCancelFollow":"Are you sure you want to cancel this follow?"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/js/wpdiscuz-user-content-5.3.5.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/wpdiscuz/assets/third-party/lity/lity-5.3.5.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var og_ajax_object = {"ajax_url":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/themes/jnews-child/script.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-includes/js/comment-reply.min.js')}}'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"vi","strings":{"mejs.install-flash":"B\u1ea1n \u0111ang s\u1eed d\u1ee5ng tr\u00ecnh duy\u1ec7t kh\u00f4ng h\u1ed7 tr\u1ee3 Flash player. Vui l\u00f2ng b\u1eadt ho\u1eb7c c\u00e0i \u0111\u1eb7t \n phi\u00ean b\u1ea3n m\u1edbi nh\u1ea5t t\u1ea1i https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"T\u1eaft hi\u1ec3n th\u1ecb to\u00e0n m\u00e0n h\u00ecnh","mejs.fullscreen-on":"Hi\u1ec3n th\u1ecb to\u00e0n m\u00e0n h\u00ecnh ","mejs.download-video":"T\u1ea3i video v\u1ec1","mejs.fullscreen":"To\u00e0n m\u00e0n h\u00ecnh","mejs.time-jump-forward":["Tua nhanh 1 gi\u00e2y","Chuy\u1ec3n v\u1ec1 ph\u00eda tr\u01b0\u1edbc %1 gi\u00e2y"],"mejs.loop":"Chuy\u1ec3n \u0111\u1ed5i v\u00f2ng l\u1eb7p","mejs.play":"Ch\u1ea1y","mejs.pause":"T\u1ea1m d\u1eebng","mejs.close":"\u0110\u00f3ng","mejs.time-slider":"Th\u1eddi gian tr\u00ecnh chi\u1ebfu","mejs.time-help-text":"S\u1eed d\u1ee5ng c\u00e1c ph\u00edm m\u0169i t\u00ean Tr\u00e1i\/Ph\u1ea3i \u0111\u1ec3 ti\u1ebfn m\u1ed9t gi\u00e2y, m\u0169i t\u00ean L\u00ean\/Xu\u1ed1ng \u0111\u1ec3 ti\u1ebfn m\u01b0\u1eddi gi\u00e2y.","mejs.time-skip-back":["B\u1ecf qua 1 gi\u00e2y","L\u00f9i l\u1ea1i %1 gi\u00e2y"],"mejs.captions-subtitles":"Ph\u1ee5 \u0111\u1ec1","mejs.captions-chapters":"C\u00e1c m\u1ee5c","mejs.none":"Tr\u1ed1ng","mejs.mute-toggle":"B\u1eadt\/t\u1eaft ch\u1ebf \u0111\u1ed9 im l\u1eb7ng","mejs.volume-help-text":"S\u1eed d\u1ee5ng c\u00e1c ph\u00edm m\u0169i t\u00ean L\u00ean\/Xu\u1ed1ng \u0111\u1ec3 t\u0103ng ho\u1eb7c gi\u1ea3m \u00e2m l\u01b0\u1ee3ng.","mejs.unmute":"B\u1eadt ti\u1ebfng","mejs.mute":"T\u1eaft ti\u1ebfng","mejs.volume-slider":"\u00c2m l\u01b0\u1ee3ng Tr\u00ecnh chi\u1ebfu","mejs.video-player":"Tr\u00ecnh ch\u01a1i Video","mejs.audio-player":"Tr\u00ecnh ch\u01a1i Audio","mejs.ad-skip":"B\u1ecf qua qu\u1ea3ng c\u00e1o","mejs.ad-skip-info":["B\u1ecf qua trong 1 gi\u00e2y","B\u1ecf qua trong %1 gi\u00e2y"],"mejs.source-chooser":"Ch\u1ecdn ngu\u1ed3n","mejs.stop":"D\u1eebng","mejs.speed-rate":"T\u1ed1c \u0111\u1ed9","mejs.live-broadcast":"Tr\u1ef1c ti\u1ebfp","mejs.afrikaans":"Ti\u1ebfng Nam Phi","mejs.albanian":"Ti\u1ebfng Albani","mejs.arabic":"Ti\u1ebfng \u1ea2 R\u1eadp","mejs.belarusian":"Ti\u1ebfng Belarus","mejs.bulgarian":"Ti\u1ebfng Bulgari","mejs.catalan":"Ti\u1ebfng Catalan","mejs.chinese":"Ti\u1ebfng Trung Qu\u1ed1c","mejs.chinese-simplified":"Ti\u1ebfng Trung Qu\u1ed1c (gi\u1ea3n th\u1ec3)","mejs.chinese-traditional":"Ti\u1ebfng Trung ( Ph\u1ed3n th\u1ec3 )","mejs.croatian":"Ti\u1ebfng Croatia","mejs.czech":"Ti\u1ebfng S\u00e9c","mejs.danish":"Ti\u1ebfng \u0110an M\u1ea1ch","mejs.dutch":"Ti\u1ebfng H\u00e0 Lan","mejs.english":"Ti\u1ebfng Anh","mejs.estonian":"Ti\u1ebfng Estonia","mejs.filipino":"Ti\u1ebfng Philippin","mejs.finnish":"Ti\u1ebfng Ph\u1ea7n Lan","mejs.french":"Ti\u1ebfng Ph\u00e1p","mejs.galician":"Ti\u1ebfng Galicia","mejs.german":"Ti\u1ebfng \u0110\u1ee9c","mejs.greek":"Ti\u1ebfng Hy L\u1ea1p","mejs.haitian-creole":"Ti\u1ebfng Haiti","mejs.hebrew":"Ti\u1ebfng Do Th\u00e1i","mejs.hindi":"Ti\u1ebfng Hindu","mejs.hungarian":"Ti\u1ebfng Hungary","mejs.icelandic":"Ti\u1ebfng Ailen","mejs.indonesian":"Ti\u1ebfng Indonesia","mejs.irish":"Ti\u1ebfng Ailen","mejs.italian":"Ti\u1ebfng \u00dd","mejs.japanese":"Ti\u1ebfng Nh\u1eadt","mejs.korean":"Ti\u1ebfng H\u00e0n Qu\u1ed1c","mejs.latvian":"Ti\u1ebfng Latvia","mejs.lithuanian":"Ti\u1ebfng Lithuani","mejs.macedonian":"Ti\u1ebfng Macedonia","mejs.malay":"Ti\u1ebfng Malaysia","mejs.maltese":"Ti\u1ebfng Maltese","mejs.norwegian":"Ti\u1ebfng Na Uy","mejs.persian":"Ti\u1ebfng Ba T\u01b0","mejs.polish":"Ti\u1ebfng Ba Lan","mejs.portuguese":"Ti\u1ebfng B\u1ed3 \u0110\u00e0o Nha","mejs.romanian":"Ti\u1ebfng Romani","mejs.russian":"Ti\u1ebfng Nga","mejs.serbian":"Ti\u1ebfng Serbia","mejs.slovak":"Ti\u1ebfng Slovakia","mejs.slovenian":"Ti\u1ebfng Slovenia","mejs.spanish":"Ti\u1ebfng T\u00e2y Ban Nha","mejs.swahili":"Ti\u1ebfng Swahili","mejs.swedish":"Ti\u1ebfng Th\u1ee5y \u0110i\u1ec3n","mejs.tagalog":"Ti\u1ebfng Tagalog","mejs.thai":"Ti\u1ebfng Th\u00e1i","mejs.turkish":"Ti\u1ebfng Th\u1ed5 Nh\u0129 K\u00ec","mejs.ukrainian":"Ti\u1ebfng Ukraina","mejs.vietnamese":"Ti\u1ebfng Vi\u1ec7t","mejs.welsh":"Ti\u1ebfng Welsh","mejs.yiddish":"Ti\u1ebfng Yiddish"}};
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/mediaelement/mediaelement-and-player.min-4.2.13-9993131.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-includes/js/mediaelement/mediaelement-migrate.min.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-includes/js/mediaelement/wp-mediaelement.min.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/hoverIntent.min-1.8.1.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/imagesloaded.min-3.2.0.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jnewsoption = {"popup_script":"magnific","single_gallery":"","ismobile":"","isie":"","sidefeed_ajax":"","lang":"vi","module_prefix":"jnews_module_ajax_","live_search":"1","postid":"87518","isblog":"1","admin_bar":"0","follow_video":"","follow_position":"top_right","rtl":"0","gif":"","site_slug":"\/","site_domain":"atpsoftware.vn"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/themes/jnews/assets/dist/frontend.min-1.0.0.js')}}'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://atpsoftware.vn/wp-content/themes/jnews/assets/js/html5shiv.min.js?ver=1.0.0'></script>
<![endif]-->
<script type='text/javascript'>
/* <![CDATA[ */
var jnews_select_share = {"is_customize_preview":""};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/plugins/jnews-social-share/assets/js/plugin.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/jnews-push-notification/assets/js/plugin-5.0.2.js')}}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"74f11e301b","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min-4.3.0.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/js/frontend-modules.min-2.8.2.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-includes/js/jquery/ui/position.min-1.11.4.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/dialog/dialog.min-4.7.3.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min-4.0.2.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/lib/swiper/swiper.min-4.4.6.js')}}'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.2","urls":{"assets":"https:\/\/atpsoftware.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":87518,"title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","excerpt":"t\u00edch-xanh-facebook"}};
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor/assets/js/frontend.min-2.8.2.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min-4.3.0.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min-2.7.3.js')}}'></script>
<script type='text/javascript'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/atpsoftware.vn\/wp-admin\/admin-ajax.php","nonce":"41ed7cd338","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"vi","app_id":""}};
</script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/cache/busting/1/wp-content/plugins/elementor-pro/assets/js/frontend.min-2.7.3.js')}}'></script>
<script type='text/javascript' src='{{asset('template/blog/wp-content/themes/jnews/assets/js/admin/elementor-frontend.js')}}'></script>
<div class="jeg_ad jnews_mobile_sticky_ads "></div><script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"article","mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/atpsoftware.vn\/tich-xanh-facebook.html"},"dateCreated":"2019-12-25 17:43:39","datePublished":"2019-12-25 17:43:39","dateModified":"2019-12-25 10:55:06","url":"https:\/\/atpsoftware.vn\/tich-xanh-facebook.html","headline":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","name":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","articleBody":"<!-- wp:paragraph {\"ampFitText\":true} -->\n<p><amp-fit-text layout=\"fixed-height\" min-font-size=\"6\" max-font-size=\"72\" height=\"80\">D\u1ea5u t\u00edch xanh facebook l\u00e0 ch\u1ee9ng th\u1ef1c c\u1ee7a Facebook v\u1ec1 m\u1ed9t t\u00e0i kho\u1ea3n ng\u01b0\u1eddi d\u00f9ng l\u00e0 ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng, ng\u01b0\u1eddi c\u1ee7a c\u00f4ng ch\u00fang. Tick xanh Facebook c\u0169ng l\u00e0 ch\u1ee9ng th\u1ef1c cho fanpage \u0111\u1ea1i di\u1ec7n cho t\u1ed5 ch\u1ee9c, th\u01b0\u01a1ng hi\u1ec7u n\u1ed5i ti\u1ebfng, mang t\u00ednh ch\u1ea5t to\u00e0n c\u1ea7u<\/amp-fit-text><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":1} -->\n<h1 id=\"ecc7\">T\u00edch xanh Facebook l\u00e0 g\u00ec ?<\/h1>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>T\u00edch xanh Facebook, hay c\u00f2n g\u1ecdi l\u00e0 verify Facebook. V\u00e0 n\u00f3 \u0111\u01b0\u1ee3c hi\u1ec3u l\u00e0 x\u00e1c th\u1ef1c c\u1ee7a Facebook v\u1ec1:<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 M\u1ed9t profile c\u00e1 nh\u00e2n c\u1ee7a ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 M\u1ed9t trang fanpage c\u1ed9ng \u0111\u1ed3ng, t\u1ed5 ch\u1ee9c hay th\u01b0\u01a1ng hi\u1ec7u mang t\u1ea7m c\u1ee1 qu\u1ed1c t\u1ebf<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Nh\u01b0 v\u1eady, n\u1ebfu c\u00e1c b\u1ea1n mu\u1ed1n fanpage, hay t\u00e0i kho\u1ea3n Facebook c\u00e1 nh\u00e2n c\u00f3 m\u00ecnh c\u00f3 d\u1ea5u t\u00edch xanh, c\u00e1c b\u1ea1n c\u1ea7n ph\u1ea3i \u0111\u1ea3m b\u1ea3o nh\u1eefng \u0111i\u1ec1u ki\u1ec7n k\u1ec3 tr\u00ean: N\u1ed5i ti\u1ebfng v\u00e0 th\u01b0\u01a1ng hi\u1ec7u t\u1ea7m c\u1ee1<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image {\"align\":\"center\",\"className\":\"is-style-default\"} -->\n<div class=\"wp-block-image is-style-default\"><figure class=\"aligncenter\"><img src=\"https:\/\/miro.medium.com\/max\/1547\/0*4NIEZI6w199fulsi.jpg\" alt=\"\"\/><figcaption>Trang Fanpage Ngh\u1ec7 s\u0129 Ho\u00e0i Linh  c\u00f3 h\u01a1n 10tr l\u01b0\u1ee3t theo d\u00f5i<\/figcaption><\/figure><\/div>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph -->\n<p><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>L\u01b0u \u00fd<\/strong>: Facebook c\u0169ng n\u00f3i r\u1eb1ng: \u201cKh\u00f4ng ph\u1ea3i t\u1ea5t c\u1ea3 nh\u1eefng ng\u01b0\u1eddi c\u1ee7a c\u00f4ng ch\u00fang, ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng v\u00e0 th\u01b0\u01a1ng hi\u1ec7u tr\u00ean Facebook \u0111\u1ec1u c\u00f3 huy hi\u1ec7u m\u00e0u xanh da tr\u1eddi\u201d<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":1} -->\n<h1 id=\"59e7\">Tick xanh Facebook d\u00f9ng \u0111\u1ec3 l\u00e0m g\u00ec ?<\/h1>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Nh\u01b0 \u0111\u00e3 n\u00f3i \u1edf ph\u1ea7n tr\u00ean, t\u00edch xanh ch\u00ednh l\u00e0 verify Facebook. V\u1edbi d\u1ea5u t\u00edch xanh, Facebook x\u00e1c nh\u1eadn \u0111\u00e2y l\u00e0 m\u1ed9t t\u00e0i kho\u1ea3n Facebook ch\u00ednh ch\u1ee7 c\u1ee7a ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng. C\u00f2n \u0111\u1ed1i v\u1edbi fanpage, \u0111\u00f3 l\u00e0 m\u1ed9t fanpage \u0111\u1ea1i di\u1ec7n cho m\u1ed9t t\u1ed5 ch\u1ee9c, c\u1ed9ng \u0111\u1ed3ng, doanh nghi\u1ec7p hay m\u1ed9t th\u01b0\u01a1ng hi\u1ec7u l\u1edbn, ph\u1ed5 bi\u1ebfn<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"c140\">V\u1edbi t\u00e0i kho\u1ea3n c\u00e1 nh\u00e2n<\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>\u2013 X\u00e1c nh\u1eadn t\u00e0i kho\u1ea3n ch\u00ednh ch\u1ee7<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 X\u00e1c nh\u1eadn t\u00e0i kho\u1ea3n c\u1ee7a ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 Tr\u00e1nh m\u1ea1o danh, l\u1eeba \u0111\u1ea3o<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 \u0110\u1ea3m b\u1ea3o kh\u00f4ng b\u1ecb kh\u00f3a, hack<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image {\"id\":87568,\"width\":989,\"height\":528,\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image size-large is-resized\"><a href=\"https:\/\/atpsoftware.vn\/\"><img src=\"https:\/\/img.atpsoftware.vn\/2019\/12\/btd.png\" alt=\"\" class=\"wp-image-87568\" width=\"989\" height=\"528\"\/><\/a><figcaption>Trang c\u00e1 nh\u00e2n c\u1ee7a th\u1ee7 m\u00f4n B\u00f9i Ti\u1ebfn D\u0169ng c\u0169ng c\u00f3 h\u01a1n 3tr l\u01b0\u1ee3t theo d\u00f5i<\/figcaption><\/figure>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph {\"ampFitText\":true} -->\n<p><amp-fit-text layout=\"fixed-height\" min-font-size=\"6\" max-font-size=\"72\" height=\"80\"><\/amp-fit-text><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"4e60\">V\u1edbi fanpage<\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>\u2013 Kh\u1eb3ng \u0111\u1ecbnh v\u1ecb th\u1ebf th\u01b0\u01a1ng hi\u1ec7u l\u1edbn<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 L\u1ea5y \u0111\u01b0\u1ee3c ni\u1ec1m tin n\u01a1i ng\u01b0\u1eddi d\u00f9ng \u0111\u1ec3 ph\u1ee5c v\u1ee5 kinh doanh, hay b\u1ea5t k\u1ef3 m\u1ee5c ti\u00eau n\u00e0o \u0111\u00f3<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 V\u00e0 \u0111i\u1ec1u quan tr\u1ecdng n\u1eefa l\u00e0 v\u1edbi fanpage t\u00edch xanh, c\u00e1c b\u1ea1n c\u00f3 th\u1ec3 tri\u1ec3n khai c\u00e1c chi\u1ebfn d\u1ecbch qu\u1ea3ng c\u00e1o livestream. Ngh\u0129a l\u00e0 c\u00e1c b\u1ea1n c\u00f3 th\u1ec3 ch\u1ea1y qu\u1ea3ng c\u00e1o ngay \u1edf th\u1eddi \u0111i\u1ec3m livestream b\u00e1n h\u00e0ng, k\u00e9o view c\u1ef1c k\u1ef3 hi\u1ec7u qu\u1ea3<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https:\/\/miro.medium.com\/max\/1532\/0*qkRmehxZNsY16sF9.jpg\" alt=\"\"\/><\/figure>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph -->\n<p><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":1} -->\n<h1 id=\"8297\">Facebook verify d\u1ea5u t\u00edch xanh nh\u01b0 th\u1ebf n\u00e0o ?<\/h1>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Mu\u1ed1n s\u1edf h\u1eefu d\u1ea5u t\u00edch xanh cho profile hay l\u00e0 Facebook c\u00e1 nh\u00e2n, th\u00ec c\u00e1c b\u1ea1n c\u1ea7n g\u1eedi y\u00eau c\u1ea7u l\u00ean Facebook v\u00e0 \u0111\u1ee3i x\u00e9t duy\u1ec7t<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>V\u00e0 qu\u00e1 tr\u00ecnh x\u00e9t duy\u1ec7t n\u00e0y s\u1ebd kh\u00f4ng ph\u1ea3i x\u00e9t duy\u1ec7t t\u1eeb \u0111\u1ed9ng, m\u00e0 s\u1ebd c\u00f3 \u0111\u1ed9i ng\u0169 k\u1ef9 thu\u1eadt ng\u01b0\u1eddi th\u1eadt ri\u00eang ti\u1ebfp nh\u1eadn y\u00eau c\u1ea7u c\u1ee7a c\u00e1c b\u1ea1n. Sau \u0111\u00f3 ki\u1ec3m tra qua t\u1ea5t c\u1ea3 c\u00e1c ti\u00eau ch\u00ed, n\u1ebfu profile hay fanpage \u0111\u00e1p \u1ee9ng \u0111\u1ee7 c\u00e1c \u0111i\u1ec1u ki\u1ec7n, th\u00ec Facebook m\u1edbi x\u00e1c th\u1ef1c v\u00e0 c\u1ea5p d\u1ea5u t\u00edch xanh cho c\u00e1c b\u1ea1n<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":1} -->\n<h1 id=\"142d\">H\u01b0\u1edbng d\u1eabn c\u00e1ch l\u00e0m d\u1ea5u t\u00edch xanh tr\u00ean Facebook<\/h1>\n<!-- \/wp:heading -->\n\n<!-- wp:heading -->\n<h2 id=\"84f8\">\u0110i\u1ec1u ki\u1ec7n t\u1ea1o d\u1ea5u t\u00edch xanh<\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>\u2013 \u0110\u1ed1i v\u1edbi fanpage, ph\u1ea3i c\u00f3 t\u1ed1i thi\u1ec3u 100k like<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 \u0110\u1ed1i v\u1edbi Facebook c\u00e1 nh\u00e2n, ph\u1ea3i c\u00f3 t\u1ed1i thi\u1ec3u 100k l\u01b0\u1ee3t theo d\u00f5i<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 \u0110\u1ed3ng th\u1eddi, ph\u1ea3i c\u00f3 t\u1ed1i thi\u1ec3u 10 trang b\u00e1o l\u1edbn c\u00f3 b\u00e0i vi\u1ebft c\u1ee5 th\u1ec3 nh\u1eafc \u0111\u1ebfn fanpage hay profile c\u00e1 nh\u00e2n n\u00e0y. \u0110\u1ed3ng th\u1eddi trong b\u00e0i b\u00e1o c\u1ea7n g\u1eafn link trang tr\u00ean \u0111\u00f3 \u0111\u1ec3 l\u00e0m b\u1eb1ng ch\u1ee9ng<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"73e4\">C\u00e1ch x\u00e1c minh trang Facebook<\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>\u0110\u1ed1i v\u1edbi fanpage hay Facebook c\u00e1 nh\u00e2n, th\u00ec c\u00e1c b\u01b0\u1edbc t\u1ea1o d\u1ea5u t\u00edch xanh c\u0169ng t\u01b0\u01a1ng t\u1ef1 nhau nh\u00e9 c\u00e1c b\u1ea1n. Sau \u0111\u00e2y <a href=\"https:\/\/atpsoftware.vn\/\">ATPsofrware <\/a>s\u1ebd h\u01b0\u1edbng d\u1eabn c\u00e1c b\u1ea1n c\u00e1ch b\u01b0\u1edbc \u0111\u1ec3 x\u00e1c minh v\u1edbi Facebook:<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+<strong>&nbsp;B\u01b0\u1edbc 1<\/strong>: Truy c\u1eadp link:&nbsp;<a rel=\"noreferrer noopener\" href=\"https:\/\/www.facebook.com\/help\/contact\/342509036134712\/\" target=\"_blank\">https:\/\/www.facebook.com\/help\/contact\/342509036134712\/<\/a><\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https:\/\/miro.medium.com\/max\/962\/0*ZV1iOA786G5yt77o.jpg\" alt=\"\"\/><\/figure>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph -->\n<p><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+&nbsp;<strong>B\u01b0\u1edbc 2<\/strong>: Ch\u1ecdn Lo\u1ea1i x\u00e1c minh<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>N\u1ebfu mu\u1ed1n l\u00e0m d\u1ea5u t\u00edch xanh cho Facebook c\u00e1 nh\u00e2n, th\u00ec b\u1ea1n nh\u1ea5p v\u00e0o Trang c\u00e1 nh\u00e2n, n\u1ebfu l\u00e0 fanpage th\u00ec ch\u1ecdn Trang nh\u00e9<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u1ede \u0111\u00e2y m\u00ecnh s\u1ebd ch\u1ecdn Trang th\u1eed nh\u00e9<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https:\/\/miro.medium.com\/max\/944\/0*sseIagXkOB7fa59w.jpg\" alt=\"\"\/><\/figure>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph -->\n<p><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+&nbsp;<strong>B\u01b0\u1edbc 3<\/strong>: Ch\u1ecdn Trang mu\u1ed1n x\u00e1c minh<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>\u1ede ph\u1ea7n n\u00e0y, n\u1ebfu b\u1ea1n c\u00f3 nhi\u1ec1u fanpage \u0111\u1ee7 \u0111i\u1ec1u ki\u1ec7n x\u00e1c minh d\u1ea5u t\u00edch xanh. Facebook s\u1ebd hi\u1ec3n th\u1ecb menu c\u00e1c fanpage \u0111\u1ec3 c\u00e1c b\u1ea1n ch\u1ecdn trang mu\u1ed1n x\u00e1c minh<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>M\u00e0 do hi\u1ec7n t\u1ea1i m\u00ecnh kh\u00f4ng c\u00f3 trang n\u00e0o \u0111\u00e1p \u1ee9ng \u0111\u1ee7 nh\u1eefng \u0111i\u1ec1u ki\u1ec7n d\u1ea5u t\u00edch xanh \u1edf tr\u00ean. N\u00ean Facebook n\u00f3 th\u00f4ng b\u00e1o l\u00e0: \u201cB\u1ea1n kh\u00f4ng c\u00f3 trang \u0111\u01b0\u1ee3c qu\u1ea3n tr\u1ecb n\u00e0o \u0111\u1ee7 \u0111i\u1ec1u ki\u1ec7n\u201d<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>L\u01b0u \u00fd<\/strong>: N\u1ebfu mu\u1ed1n l\u00e0m d\u1ea5u t\u00edch xanh cho Facebook c\u00e1 nh\u00e2n, c\u00e1c b\u1ea1n c\u1ea7n nh\u1eadp li\u00ean k\u1ebft trang profile v\u00e0o \u00f4 nh\u00e9<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https:\/\/miro.medium.com\/max\/942\/0*055wuc58fiEn69bs.jpg\" alt=\"\"\/><\/figure>\n<!-- \/wp:image -->\n\n<!-- wp:paragraph -->\n<p><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+&nbsp;<strong>B\u01b0\u1edbc 4<\/strong>: T\u1ea3i l\u00ean \u1ea3nh ch\u1ee5p gi\u1ea5y t\u1edd t\u00f9y th\u00e2n<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Bao g\u1ed3m:<\/strong><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u0110\u1ec3 x\u00e9t duy\u1ec7t y\u00eau c\u1ea7u c\u1ee7a b\u1ea1n, ch\u00fang t\u00f4i c\u1ea7n \u00edt nh\u1ea5t m\u1ed9t trong c\u00e1c gi\u1ea5y t\u1edd ch\u00ednh th\u1ee9c sau \u0111\u00e2y.<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>N\u1ebfu t\u00e0i kho\u1ea3n c\u1ee7a b\u1ea1n \u0111\u1ea1i di\u1ec7n cho m\u1ed9t ng\u01b0\u1eddi:<\/strong><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 Gi\u1ea5y t\u1edd t\u00f9y th\u00e2n c\u00f3 \u1ea3nh ch\u1ee5p do ch\u00ednh ph\u1ee7 c\u1ea5p v\u00e0 n\u00eau r\u00f5 t\u00ean c\u00f9ng ng\u00e0y sinh c\u1ee7a b\u1ea1n (v\u00ed d\u1ee5: b\u1eb1ng l\u00e1i xe ho\u1eb7c h\u1ed9 chi\u1ebfu)<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>N\u1ebfu t\u00e0i kho\u1ea3n c\u1ee7a b\u1ea1n \u0111\u1ea1i di\u1ec7n cho \u0111\u1ed1i t\u01b0\u1ee3ng kh\u00e1c (kh\u00f4ng ph\u1ea3i ng\u01b0\u1eddi), h\u00e3y cung c\u1ea5p t\u00e0i li\u1ec7u c\u00f3 con d\u1ea5u\/d\u1ea5u b\u1ea3n quy\u1ec1n ch\u00ednh th\u1ee9c c\u1ee7a t\u1ed5 ch\u1ee9c:<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 S\u1ed1 \u0111i\u1ec7n tho\u1ea1i ho\u1eb7c ho\u00e1 \u0111\u01a1n ti\u1ec7n \u00edch c\u1ee7a t\u1ed5 ch\u1ee9c<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 Ch\u1ee9ng nh\u1eadn th\u00e0nh l\u1eadp<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 \u0110i\u1ec1u l\u1ec7 c\u00f4ng ty<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 T\u00e0i li\u1ec7u v\u1ec1 vi\u1ec7c \u0111\u00f3ng thu\u1ebf ho\u1eb7c mi\u1ec5n thu\u1ebf c\u1ee7a t\u1ed5 ch\u1ee9c<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+&nbsp;<strong>B\u01b0\u1edbc 5<\/strong>: Th\u00eam th\u00f4ng tin b\u1ed5 sung<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Ph\u1ea7n n\u00e0y c\u00e1c b\u1ea1n ch\u1ec9 c\u1ea7n th\u00eam l\u00fd do c\u00e1c b\u1ea1n mu\u1ed1n t\u1ea1o d\u1ea5u tick xanh cho fanpage hay trang Facebook c\u00e1 nh\u00e2n c\u1ee7a m\u00ecnh<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:image {\"align\":\"center\",\"id\":3837,\"className\":\"is-style-default\"} -->\n<div class=\"wp-block-image is-style-default\"><figure class=\"aligncenter\"><img src=\"https:\/\/img.atpsoftware.vn\/2019\/12\/cach-lam-dau-tich-xanh-tren-facebook-ca-nhan.jpg\" alt=\"c\u00e1ch l\u00e0m t\u00edch xanh facebook\" class=\"wp-image-3837\"\/><\/figure><\/div>\n<!-- \/wp:image -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+<strong>&nbsp;B\u01b0\u1edbc 6<\/strong>: Xong h\u1ebft th\u00ec ch\u1ecdn G\u1eedi<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>+&nbsp;<strong>B\u01b0\u1edbc 7<\/strong>: \u0110\u1ee3i t\u1ea7m 1 tu\u1ea7n, \u0111\u1ec3 xem Facebook c\u00f3 duy\u1ec7t y\u00eau c\u1ea7u x\u00e1c minh c\u1ee7a b\u1ea1n kh\u00f4ng nh\u00e9<\/h3>\n<!-- \/wp:heading -->\n\n<!-- wp:heading -->\n<h2><strong>L\u01b0u \u00fd khi l\u00e0m d\u1ea5u t\u00edch xanh tr\u00ean Facebook<\/strong><\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>N\u1ebfu mu\u1ed1n l\u00e0m d\u1ea5u t\u00edch xanh, ngo\u00e0i vi\u1ec7c th\u00f4ng tin gi\u1ea5y t\u1edd \u0111\u1ea7y \u0111\u1ee7, fanpage hay profile xu\u1ea5t hi\u1ec3n tr\u00ean m\u1eb7t b\u00e1o. Th\u00ec \u0111\u1ed1i v\u1edbi fanpage hay profile, c\u00e1c b\u1ea1n c\u1ea7n \u0111\u1ea3m b\u1ea3o s\u1ef1 ho\u1ea1t \u0111\u1ed9ng t\u1ef1 nhi\u00ean, like v\u00e0 theo d\u00f5i t\u0103ng l\u00ean ho\u00e0n to\u00e0n t\u1ef1 nhi\u00ean<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Ch\u1ee9 kh\u00f4ng ph\u1ea3i l\u00e0 s\u1eed d\u1ee5ng c\u00e1c th\u1ee7 thu\u1eadt spam, tool \u0111\u1ec3 k\u00e9o nhanh l\u01b0\u1ee3t like, theo d\u00f5i. B\u1edfi n\u1ebfu mu\u1ed1n verify th\u00e0nh c\u00f4ng, \u0111\u1ed9i ng\u0169 k\u1ef9 thu\u1eadt Facebook h\u1ecd s\u1ebd ph\u00ea duy\u1ec7t r\u1ea5t r\u1ea5t k\u1ef9<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>V\u00e0 khi \u0111\u00f3, h\u1ecd d\u1ec5 d\u00e0ng ph\u00e1t hi\u1ec7n \u0111\u01b0\u1ee3c h\u00e0nh vi spam, hay s\u00e0i tool \u0111\u1ec3 k\u00e9o like, follow. L\u00fac n\u00e0y, nhi\u1ec1u kh\u1ea3 n\u0103ng c\u00e1c b\u1ea1n s\u1ebd kh\u00f4ng c\u00f2n b\u1ea5t k\u1ef3 c\u01a1 h\u1ed9i n\u00e0o \u0111\u1ec3 verify Facebook cho t\u00e0i kho\u1ea3n n\u00e0y n\u1eefa<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:heading -->\n<h2><strong>C\u00f3 n\u00ean s\u1eed d\u1ee5ng d\u1ecbch v\u1ee5 t\u1ea1o d\u1ea5u t\u00edch xanh kh\u00f4ng ?<\/strong><\/h2>\n<!-- \/wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Ch\u1eafc ch\u1eafn l\u00e0 Kh\u00f4ng nh\u00e9 c\u00e1c b\u1ea1n. B\u1edfi \u0111\u01a1n gi\u1ea3n, \u0111\u00e2y l\u00e0 b\u01b0\u1edbc x\u00e1c minh h\u1ec7 tr\u1ecdng \u1ea3nh h\u01b0\u1edfng tr\u1ef1c ti\u1ebfp \u0111\u1ebfn ph\u00eda ng\u01b0\u1eddi d\u00f9ng. V\u00ec n\u00f3 li\u00ean quan \u0111\u1ebfn:<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 M\u1ea1o danh, l\u1eeba \u0111\u1ea3o<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 C\u00e1ch t\u00ednh n\u0103ng, \u0111\u1eb7c bi\u1ec7t l\u00e0 qu\u1ea3ng c\u00e1o livestream<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 Tr\u1ea3i nghi\u1ec7m ng\u01b0\u1eddi d\u00f9ng<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>\u2013 . . . V\u00ec nh\u1eefng \u0111i\u1ec1u tr\u00ean m\u00e0 Facebook l\u00e0m r\u1ea5t g\u1eaft v\u1ee5 tick xanh n\u00e0y nh\u00e9 c\u00e1c b\u1ea1n<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Khi \u0111\u00f3, b\u1ea5t k\u1ef3 con \u0111\u01b0\u1eddng l\u00e1ch lu\u1eadt \u0111\u1ec3 x\u00e1c minh d\u1ea5u t\u00edch xanh kh\u00f4ng s\u1edbm th\u00ec mu\u1ed9n c\u0169ng s\u1ebd b\u1ecb Facebook \u0111\u1eb7t nghi v\u1ea5n. Khi \u0111\u00f3 nhi\u1ec1u kh\u1ea3 n\u0103ng&nbsp;fanpage b\u1ecb h\u1ee7y \u0111\u0103ng, Facebook c\u00e1 nh\u00e2n b\u1ecb ch\u1eb7n t\u00edn n\u0103ng. V\u00e0 n\u1eb7ng h\u01a1n c\u00f3 th\u1ec3 b\u1ecb x\u00f3a trang,&nbsp;x\u00f3a fanpage<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>K\u1ebft lu\u1eadn<\/strong><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph {\"ampFitText\":true} -->\n<p><amp-fit-text layout=\"fixed-height\" min-font-size=\"6\" max-font-size=\"72\" height=\"80\">Tr\u00ean \u0111\u00e2y l\u00e0 nh\u1eefng th\u00f4ng tin v\u1ec1 d\u1ea5u tick xanh Facebook. C\u00e1c b\u1ea1n quan t\u00e2m c\u00f3 th\u1ec3 t\u00ecm hi\u1ec3u qua nh\u00e9, c\u1ea3m \u01a1n c\u00e1c b\u1ea1n.<\/amp-fit-text><\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Ch\u00fac th\u00e0nh c\u00f4ng ! ! !<\/p>\n<!-- \/wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\"} -->\n<p class=\"has-text-align-right\">S : medium<\/p>\n<!-- \/wp:paragraph -->","author":{"@type":"Person","name":"Duy Nguy\u1ec5n","url":"https:\/\/atpsoftware.vn\/author\/nguyentanduy0336gmail-com","sameAs":["https:\/\/www.facebook.com\/Duyalosoftvn","https:\/\/www.youtube.com\/atpsoftware"]},"articleSection":["B\u00e1n h\u00e0ng online","B\u00e1n h\u00e0ng tr\u00ean Facebook c\u00e1 nh\u00e2n","B\u00e1n h\u00e0ng tr\u00ean Fanpage","B\u00e1n h\u00e0ng tr\u00ean Group","C\u1ea9m nang ngh\u1ec1 nghi\u1ec7p","Chia s\u1ebb t\u00e0i li\u1ec7u hay","C\u00f4ng C\u1ee5 Marketing","C\u1ed9ng \u0110\u1ed3ng Digital Marketing","Content Marketing","Facebook Marketing","Ki\u1ebfn Th\u1ee9c B\u00e1n H\u00e0ng","Ki\u1ebfn th\u1ee9c Marketing","Ki\u1ebfn Th\u1ee9c Marketing Chung","Ki\u00ea\u0301n th\u01b0\u0301c MMO","Kinh doanh - Kh\u1edfi nghi\u1ec7p","Kinh doanh online","M\u00f4 h\u00ecnh kinh doanh","Th\u1ee7 Thu\u1eadt Facebook","Th\u1ee7 Thu\u1eadt Marketing","Ti\u00ea\u0301p thi\u0323 li\u00ean k\u00ea\u0301t","Tin t\u1ee9c ATP Software","Tin T\u1ee9c Kh\u00e1c","V\u0103n h\u00f3a kinh doanh","xu h\u01b0\u1edbng Marketing 2020","\u00dd t\u01b0\u1edfng kinh doanh"],"image":{"@type":"ImageObject","url":"https:\/\/img.atpsoftware.vn\/2019\/12\/t\u00edch-xanh-facebook.png","width":2000,"height":1125},"publisher":{"@type":"Organization","name":"","url":"https:\/\/atpsoftware.vn","logo":{"@type":"ImageObject","url":""},"sameAs":["https:\/\/www.facebook.com\/atpsoftware.tools"]}}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"hentry","entry-title":"T\u00edch Xanh Facebook L\u00e0 G\u00ec? C\u00e1c B\u01b0\u1edbc L\u00e0m D\u1ea5u Tick Xanh Tr\u00ean Facebook","published":"2019-12-25 17:43:39","updated":"2019-12-25 10:55:06"}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/atpsoftware.vn","name":"Trang ch\u1ee7"}},{"@type":"ListItem","position":2,"item":{"@id":"https:\/\/atpsoftware.vn\/blog\/ban-hang-online","name":"B\u00e1n h\u00e0ng online"}},{"@type":"ListItem","position":3,"item":{"@id":"https:\/\/atpsoftware.vn","name":"Trang ch\u1ee7"}},{"@type":"ListItem","position":4,"item":{"@id":"https:\/\/atpsoftware.vn\/blog\/ban-hang-online","name":"B\u00e1n h\u00e0ng online"}}]}</script>
</body>

<!-- Mirrored from atpsoftware.vn/tich-xanh-facebook.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 01:35:47 GMT -->
</html>

<style>
    .sticky{
        border:none;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/blog.js')}}" type="text/javascript"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1577718593 -->
@endsection
