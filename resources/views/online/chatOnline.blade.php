{{-- =====================fb-zalo-group===================== --}}
<div class="box_fixRight">
	<div class="box_content">
		<a href="https://www.facebook.com/messages/t/vnp.softwarevn" target="_blank" class="item item_1">Liên hệ Fanpage VNPSoftware</a>
		<a href="https://zalo.me/0378557797" target="_blank" class="item item_2">Liên hệ hỗ trợ qua Zalo</a>
		<a href="https://www.facebook.com/vnp.softwarevn/"  target="_blank" class="item item_3">Tham gia group Facebook hỗ trợ</a>
	</div>
</div>
<style type="text/css">
.box_fixRight {
	position: fixed;
	top: 250px;
	left: -285px;
	width: auto;
	transition: all 0.2s ease-in-out 0s;
	z-index: 999;
}
.box_fixRight .box_content {
	background: #fff;
	padding: 10px;
	box-shadow: 10px 0px 10px #8888887d;
	border-radius: 0px 10px 10px 0px;
	text-align: right;
}
.box_fixRight .box_content .item {
	display: block;
	padding: 13px 47px 13px 10px;
	color: #111;
	font-weight: 500;
	font-size: 18px;
}
.box_fixRight .box_content .item:hover{
	color:#184b9b
}
.box_fixRight .box_content .item.item_1 {
	background: url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/messenger.png) no-repeat right;
}
.box_fixRight .box_content .item.item_2 {
	background: url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/zalo.png) no-repeat right;
}
.box_fixRight .box_content .item.item_3 {
	background: url(https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/group-facebook.png) no-repeat right;
}
.box_fixRight:hover {
	left: 0;
	transition: all 0.2s ease-in-out 0s;
}
@media (max-width: 549px){
	.box_fixRight{
		display:none
	}
}
</style>
{{-- =====================END fb-zalo-group===================== --}}

{{-- =====================Call===================== --}}
<div class="hotline-phone-ring-wrap" id="hotline-phone-1">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
			<a href="tel:0378557797" class="pps-btn-img">
				<img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/icon-2.png" alt="Hotline" width="50" data-pin-no-hover="true">
			</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:0378557797">
			<span class="text-hotline">0378.5577.97 </span>
		</a>
	</div>
</div>
<div class="hotline-phone-ring-wrap2" id="hotline-phone-2">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
			<a href="tel:0966842948" class="pps-btn-img">
				<img src="https://atpsoftware.vn/wp-content/themes/jnews-child/template/img/icon-2.png" alt="Hotline" width="50" data-pin-no-hover="true">
			</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:0966842948">
			<span class="text-hotline">0966.8429.48</span>
		</a>
	</div>
</div>
<style type="text/css">
.hotline-phone-ring-wrap {
	position: fixed;
	bottom: 0;
	left: 0;
	z-index: 999999;
}
.hotline-phone-ring-wrap2 {
	position: fixed;
	bottom: 100px;
	left: 0;
	z-index: 999999;
}
.hotline-phone-ring {
	position: relative;
	visibility: visible;
	background-color: transparent;
	width: 110px;
	height: 110px;
	cursor: pointer;
	z-index: 11;
	-webkit-backface-visibility: hidden;
	-webkit-transform: translateZ(0);
	transition: visibility .5s;
	left: 0;
	bottom: 0;
	display: block;
}
.hotline-phone-ring-circle {
	width: 110px;
	height: 110px;
	top: 0;
	left: 0;
	position: absolute;
	background-color: transparent;
	border-radius: 100%;
	border: 2px solid #1564a7;
	-webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
	animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
	transition: all .5s;
	-webkit-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
	width: 80px;
	height: 80px;
	top: 16px;
	left: 16px;
	position: absolute;
	background-color: rgba(21, 100, 167, 0.7);
	border-radius: 100%;
	border: 2px solid transparent;
	-webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
	animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
	transition: all .5s;
	-webkit-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
	background-color: #1564a7;
	width: 50px;
	height: 50px;
	top: 31px;
	left: 31px;
	position: absolute;
	background-size: 20px;
	border-radius: 100%;
	border: 2px solid transparent;
	-webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
	animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
	-webkit-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	align-items: center;
	justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
	width: 33px;
	height: 33px;
}
.hotline-bar {
	position: absolute;
	background: #1564a7;
	height: 45px;
	width: 165px;
	line-height: 40px;
	border-radius: 3px;
	padding: 0 10px;
	background-size: 100%;
	cursor: pointer;
	transition: all 0.8s;
	-webkit-transition: all 0.8s;
	z-index: 9;
	border-radius: 50px !important;
	left: 42px;
	bottom: 31px;
}
.hotline-bar > a {
	color: #fff;
	text-decoration: none;
	font-size: 16px;
	font-weight: bold;
	text-indent: 32px;
	letter-spacing: 1px;
	display: block;
	line-height: 45px;
	font-family: Arial;
}
.hotline-bar > a:hover,
.hotline-bar > a:active {
	color: #fff;
}
@-webkit-keyframes phonering-alo-circle-anim {
	0% {
		-webkit-transform: rotate(0) scale(0.5) skew(1deg);
		-webkit-opacity: 0.1;
	}
	30% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		-webkit-opacity: 0.5;
	}
	100% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
		-webkit-opacity: 0.1;
	}
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
	0% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		opacity: 0.6;
	}
	50% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
		opacity: 0.6;
	}
	100% {
		-webkit-transform: rotate(0) scale(0.7) skew(1deg);
		opacity: 0.6;
	}
}
@-webkit-keyframes phonering-alo-circle-img-anim {
	0% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	}
	10% {
		-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
	}
	20% {
		-webkit-transform: rotate(25deg) scale(1) skew(1deg);
	}
	30% {
		-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
	}
	40% {
		-webkit-transform: rotate(25deg) scale(1) skew(1deg);
	}
	50% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	}
	100% {
		-webkit-transform: rotate(0) scale(1) skew(1deg);
	}
}
@media (max-width: 768px) {
	.hotline-bar {
		display: none;
	}
	.hotline-phone-ring-wrap {
		display: none !important
	}
	.hotline-phone-ring-wrap2 {
		display: none !important
	}     
}
</style>
{{-- =====================END Call===================== --}}
