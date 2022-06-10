<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" class="bg-[#d9d6d6]">
    <div class="container px-5 py-20">
        <div class="xl:flex items-center">
            <div class="basis-1/5">
                <a href="<?php echo G5_URL ?>" class="flex items-center h-full">
                    <img src="<?php echo G5_IMG_URL ?>/ft_logo.png" alt="<?php echo $config['cf_title']; ?>">
                </a>
            </div>
            <div class="basis-3/5 xl:pt-0 pt-5">
                <div class="flex space-x-5">
                    <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="text-sm text-[#444444] font-medium">개인정보처리방침</a>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>" class="text-sm text-[#444444] font-medium">이용약관</a>
                </div>
                <div class="lg:flex pt-5 items-center">
                    <p class="text-sm text-[#666666] lg:pr-3 relative lg:before:absolute lg:before:bg-[#cccccc] lg:before:h-3 lg:before:w-[1px] lg:before:content-[''] lg:before:right-0 lg:before:bottom-1 text-left">(주)에스엘디앤씨</p>
                    <p class="text-sm text-[#666666] lg:px-3 relative lg:before:absolute lg:before:bg-[#cccccc] lg:before:h-3 lg:before:w-[1px] lg:before:content-[''] lg:before:right-0 lg:before:bottom-1 text-left">사업자등록번호: 313-87-00019</p> 
                    <p class="text-sm text-[#666666] lg:pl-3 text-left">주소: 인천광역시 서구 검당로 505, 308호(마전동, 이지프라자)</p> 
                </div>
                <div class="lg:flex lg:pt-1 items-center">
                    <p class="text-sm text-[#666666] lg:pr-3 relative lg:before:absolute lg:before:bg-[#cccccc] lg:before:h-3 lg:before:w-[1px] lg:before:content-[''] lg:before:right-0 lg:before:bottom-1 text-left">업태: 부동산매매업</p>
                    <p class="text-sm text-[#666666] lg:px-3 relative lg:before:absolute lg:before:bg-[#cccccc] lg:before:h-3 lg:before:w-[1px] lg:before:content-[''] lg:before:right-0 lg:before:bottom-1 text-left">종목: 부동산개발공급</p> 
                    <p class="text-sm text-[#666666] lg:px-3 relative lg:before:absolute lg:before:bg-[#cccccc] lg:before:h-3 lg:before:w-[1px] lg:before:content-[''] lg:before:right-0 lg:before:bottom-1 text-left">대표: 함제훈</p> 
                    <p class="text-sm text-[#666666] lg:pl-3 text-left">개인정보보호책임자: 함제훈</p> 
                </div>
                <p class=" text-sm text-[#666666] text-left pt-5">Copyright &copy; notreville.All Rights Reserved.</p>
            </div>
            <div class="basis-1/5">
                <a href="tel:031-772-4006" class="text-2xl flex items-center text-[#216162] font-bold lg:justify-end lg:pt-0 pt-5">
                    <img src="<?php echo G5_IMG_URL ?>/icon_phone.png" class="pr-2">031-772-4006
                </a>
            </div>
        </div>
    </div>

    <!--
    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>

            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
	    </div>
	</div>      
        <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div>
        <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>
        -->
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");