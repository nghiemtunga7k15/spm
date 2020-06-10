jQuery(document).ready(function(){
	jQuery('.btn-checkdown-BigAIO a').attr('data-id','67155');
	jQuery('.btn-checkdown-BigAIO a').attr('data-name','BIG All-in-one');

	jQuery('.btn-checkdown-AllInOne a').attr('data-id','67055');
	jQuery('.btn-checkdown-AllInOne a').attr('data-name','All-in-one');

	jQuery('.btn-checkdown-AllInOneMobile a').attr('data-id','76706');
	jQuery('.btn-checkdown-AllInOneMobile a').attr('data-name','All in one Mobile');

	jQuery('.btn-checkdown-SimpleFacebook a').attr('data-id','67057');
	jQuery('.btn-checkdown-SimpleFacebook a').attr('data-name','Simple Facebook');

	jQuery('.btn-checkdown-SimpleAccount a').attr('data-id','67061');
	jQuery('.btn-checkdown-SimpleAccount a').attr('data-name','Simple Account');

	jQuery('.btn-checkdown-CRMProfile a').attr('data-id','67063');
	jQuery('.btn-checkdown-CRMProfile a').attr('data-name','CRM Profile');

	jQuery('.btn-checkdown-SimpleAdsx64 a').attr('data-id','67059');
	jQuery('.btn-checkdown-SimpleAdsx64 a').attr('data-name','Simple Ads x64');

	jQuery('.btn-checkdown-SimpleAdsMacbook a').attr('data-id','84396');
	jQuery('.btn-checkdown-SimpleAdsMacbook a').attr('data-name','Simple ADS Macbook');

	jQuery('.btn-checkdown-SimpleAdsx32 a').attr('data-id','84395');
	jQuery('.btn-checkdown-SimpleAdsx32 a').attr('data-name','Simple ADS x32');

	jQuery('.btn-checkdown-tiktok a').attr('data-id','83929');
	jQuery('.btn-checkdown-tiktok a').attr('data-name','Simple Tiktok');

	jQuery('.btn-checkdown-SimpleInstagram a').attr('data-id','67068');
	jQuery('.btn-checkdown-SimpleInstagram a').attr('data-name','Simple Instagram');

	jQuery('.btn-checkdown-AutoViralContent a').attr('data-id','67070');
	jQuery('.btn-checkdown-AutoViralContent a').attr('data-name','Auto Viral Content');

	jQuery('.btn-checkdown-SimpleZalo a').attr('data-id','67073');
	jQuery('.btn-checkdown-SimpleZalo a').attr('data-name','Simple Zalo');

	jQuery('.btn-checkdown-SimpleFBMobi a').attr('data-id','67077');
	jQuery('.btn-checkdown-SimpleFBMobi a').attr('data-name','Simple FB Mobile');

	jQuery('.btn-checkdown-SimpleUID a').attr('data-id','67081');
	jQuery('.btn-checkdown-SimpleUID a').attr('data-name','Simple UID');

	jQuery('.btn-checkdown-SimpleGraph a').attr('data-id','67083');
	jQuery('.btn-checkdown-SimpleGraph a').attr('data-name','Simple Graph');

	jQuery('.btn-checkdown-SimplePlace a').attr('data-id','67085');
	jQuery('.btn-checkdown-SimplePlace a').attr('data-name','Simple Place');

	jQuery('.btn-checkdown-ATPSEO a').attr('data-id','67087');
	jQuery('.btn-checkdown-ATPSEO a').attr('data-name','ATP SEO');

	jQuery('.btn-checkdown-SumVN a').attr('data-id','67089');
	jQuery('.btn-checkdown-SumVN a').attr('data-name','Sum.VN');

	jQuery('.btn-checkdown-GhiChu a').attr('data-id','67091');
	jQuery('.btn-checkdown-GhiChu a').attr('data-name','GhiChu');

	jQuery('.btn-checkdown-FBSearch a').attr('data-id','67093');
	jQuery('.btn-checkdown-FBSearch a').attr('data-name','FB Search');

	jQuery('.btn-checkdown-UIDOnline a').attr('data-id','67095');
	jQuery('.btn-checkdown-UIDOnline a').attr('data-name','QUĂ‰T UID ONLINE');

	jQuery('.btn-checkdown-FindUID a').attr('data-id','67097');
	jQuery('.btn-checkdown-FindUID a').attr('data-name','FIND UID');

	jQuery('.btn-checkdown-Spliter a').attr('data-id','67099');
	jQuery('.btn-checkdown-Spliter a').attr('data-name','ATP SPLITER');

	jQuery('.btn-checkdown-SeedingMB a').attr('data-id','67101');
	jQuery('.btn-checkdown-SeedingMB a').attr('data-name','Seeding Mobile');

	jQuery('.btn-checkdown-SimpleSeeding a').attr('data-id','67075');
	jQuery('.btn-checkdown-SimpleSeeding a').attr('data-name','Simple Seeding');

	jQuery('.btn-checkdown-WinERP a').attr('data-id','67189');
	jQuery('.btn-checkdown-WinERP a').attr('data-name','DĂ¹ng thá»­ winerp');

	jQuery('.btn-checkdown-ATPWEB a').attr('data-id','67105');
	jQuery('.btn-checkdown-ATPWEB a').attr('data-name','ATP WEB');

	jQuery('.btn-checkdown-ATPCare a').attr('data-id','67107');
	jQuery('.btn-checkdown-ATPCare a').attr('data-name','ATP Care');

	jQuery('.btn-checkdown-SimSo a').attr('data-id','67109');
	jQuery('.btn-checkdown-SimSo a').attr('data-name','Sim Sá»‘ Äáº¹p');

	jQuery('.btn-checkdown-Domain a').attr('data-id','67111');
	jQuery('.btn-checkdown-Domain a').attr('data-name','Mua BĂ¡n TĂªn Miá»n');
	
	jQuery('.btn-checkdown-ATPMedia a').attr('data-id','67113');
	jQuery('.btn-checkdown-ATPMedia a').attr('data-name','ATPMedia');
	
	jQuery('.btn-checkdown-RaoVat a').attr('data-id','67115');
	jQuery('.btn-checkdown-RaoVat a').attr('data-name','ÄÄƒng Tin Rao Váº·t');
	
	jQuery('.btn-checkdown-DaoTao a').attr('data-id','67117');
	jQuery('.btn-checkdown-DaoTao a').attr('data-name','ÄĂ o Táº¡o');
	
	// jQuery('.btn-checkdown-tiktok a').attr('data-id','83929');
	// jQuery('.btn-checkdown-tiktok a').attr('data-name','Simple Tiktok');
	
});
jQuery('#BigAIO .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#BigAIOPopup').removeClass('hide');
});
jQuery('#AllInOne .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#AllInOnePopup').removeClass('hide');
})
jQuery('#AllInOneMobile .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#AllInOneMobilePopup').removeClass('hide');
});
jQuery('#SimpleFacebook .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleFacebookPopup').removeClass('hide');
});
jQuery('#WinERP .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#WinERPPopup').removeClass('hide');
});
jQuery('#SimpleAds .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleAdsPopup').removeClass('hide');
});
jQuery('#SimpleTikTok .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleTikTokPopup').removeClass('hide');
});
jQuery('#SimpleFanpage .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleFanpagePopup').removeClass('hide');
});
jQuery('#SimpleAccount .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleAccountPopup').removeClass('hide');
});
jQuery('#ATPWEB .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#ATPWEBPopup').removeClass('hide');
});
jQuery('#SimpleZalo .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleZaloPopup').removeClass('hide');
});

jQuery('#SimpleInstagram .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleInstagramPopup').removeClass('hide');
});
jQuery('#AutoViralContent .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#AutoViralContentPopup').removeClass('hide');
});
jQuery('#SimpleSeeding .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleSeedingPopup').removeClass('hide');
});
jQuery('#SimpleUID .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleUIDPopup').removeClass('hide');
});

jQuery('#SimpleGraph .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleGraphPopup').removeClass('hide');
});
jQuery('#SimpleLivestream .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleLivestreamPopup').removeClass('hide');
});
jQuery('#SimplePlace .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimplePlacePopup').removeClass('hide');
});
jQuery('#ATPSEO .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#ATPSEOPopup').removeClass('hide');
});
jQuery('#SumVN .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SumVNPopup').removeClass('hide');
});
jQuery('#GhiChu .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#GhiChuPopup').removeClass('hide');
});
jQuery('#SeedingMB .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SeedingMBPopup').removeClass('hide');
});
jQuery('#SimpleFBMobi .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleFBMobiPopup').removeClass('hide');
});
jQuery('#SimpleCare .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimpleCarePopup').removeClass('hide');
});
jQuery('#SimSo .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SimSoPopup').removeClass('hide');
});
jQuery('#Domain .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#DomainPopup').removeClass('hide');
});
jQuery('#FBSearch .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#FBSearchPopup').removeClass('hide');
});
jQuery('#ATPMedia .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#ATPMediaPopup').removeClass('hide');
});
jQuery('#Like .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#LikePopup').removeClass('hide');
});
jQuery('#RaoVat .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#RaoVatPopup').removeClass('hide');
});
jQuery('#DaoTao .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#DaoTaoPopup').removeClass('hide');
});
jQuery('#FindUID .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#FindUIDPopup').removeClass('hide');
});
jQuery('#Spliter .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#SpliterPopup').removeClass('hide');
});
jQuery('#CRMProfile .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#CRMProfilePopup').removeClass('hide');
});
jQuery('#ATPAcademy .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#ATPAcademyPopup').removeClass('hide');
});
jQuery('#ATPBook .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#ATPBookPopup').removeClass('hide');
});
jQuery('#CVCOMVN .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#CVCOMVNPopup').removeClass('hide');
});
jQuery('#VOZ .box-hover .button-quick a').click(function(){
	jQuery('#PopupProduct').removeClass('hide');
	jQuery('.popup-content').addClass('hide');
	jQuery('#VOZPopup').removeClass('hide');
});


jQuery('.close-popup a').click(function(){
	jQuery('#PopupProduct').addClass('hide');
	jQuery('.popup-content').addClass('hide');
});