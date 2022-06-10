<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<div class="min-h-screen bg-main relative bg-cover">
    <div class="text-white absolute left-2/4 top-[45%] -translate-x-2/4 container px-5">
        <h1 class="text-center text-2xl font-nanum tracking-widest">PROUD NATURE</h1>
        <h1 class="text-center md:text-6xl text-4xl pt-2 keep-all leading-tight">친환경 대단지의 자부심을 세우다</h1>
    </div>
    <div class="absolute bg-[#fbb900] h-[80px] w-full bottom-0">
        <a href="javascript:void(0);" class="text-2xl flex justify-center items-center h-full text-[#1d1d1b]">관심 고객 등록
            <img src="<?php echo G5_IMG_URL ?>/icon_arrow_right.png" class="pl-2">
        </a>
    </div>
</div>
<div class="container py-20 px-5">
    <div class="grid md:grid-cols-3 md:gap-x-10 gap-y-10">
        <div class="col-span-1 lg:flex items-start">
            <img src="<?php echo G5_IMG_URL ?>/icon_house.png" class="pl-2">
            <div class="pl-4 pt-3">
                <h3 class="text-[#222222] text-2xl">확실한 시공 및 분양</h3>
                <h5 class="text-lg text-[#555555] font-medium tracking-tighter pt-4">시공 능력 평가 상위 4% 시공사</h5>
            </div>
        </div>
        <div class="col-span-1 lg:flex items-start">
            <img src="<?php echo G5_IMG_URL ?>/icon_docu.png" class="pl-2">
            <div class="pl-4 pt-3">
                <h3 class="text-[#222222] text-2xl">신뢰 높은 운영</h3>
                <h5 class="text-lg text-[#555555] font-medium tracking-tighter pt-4">노르트빌의 안전한 계약 절차</h5>
            </div>
        </div>
        <div class="col-span-1 lg:flex items-start">
            <img src="<?php echo G5_IMG_URL ?>/icon_design.png" class="pl-2">
            <div class="pl-4 pt-3">
                <h3 class="text-[#222222] text-2xl">특화된 디자인</h3>
                <h5 class="text-lg text-[#555555] font-medium tracking-tighter pt-4">차별화된 고급스러운 설계</h5>
            </div>
        </div>
    </div>
</div>
<div class="bg-[#0f4546] py-20">
    <div class="container px-5">
        <p class="text-sm uppercase text-white text-center font-nanum pb-4 tracking-wider">premium place</p>
        <h3 class="text-2xl text-white text-center"><span class="text-[#ffe08a]">양평의 호재</span>와 함께 프리미엄을 누리다</h3>
        <div class="grid lg:grid-cols-3 lg:gap-x-10 gap-y-10 pt-20">
            <a class="card relative hover:after:bg-[#56471e]/80 hover:after:content-['자세히보기'] hover:after:w-full hover:after:absolute hover:after:bottom-0 hover:after:left-0 hover:after:h-full hover:after:transition-all hover:after:duration-700 text-lg text-white text-center after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-52 hover:before:left-2/4 hover:before:-translate-x-2/4 hover:before:z-20 after:h-0 before:bottom-24 hover:before:duration-700" href="javascript:void(0);">
                <div class="card-img relative">
                    <img src="<?php echo G5_IMG_URL ?>/img_traffic.png" class="w-full">
                    <span class="absolute text-white bottom-0 right-0 font-light pr-4 pb-3 select-none text-xs">이미지컷</span>
                </div>
                <div class="card-body bg-white py-10 text-center">
                    <span class="rounded-full border border-[#939393] font-nanum py-1 px-4 text-[#939393] text-xs">Traffic</span>
                    <h5 class="text-lg text-[#222222] pt-4 font-bold">편리한 입지환경</h5>
                    <p class="text-base text-[#555555] pt-4 mx-auto">수도권 소통이 편한 전원주택 <br> 서울에서 양평까지 27km에 이르는 <br> 고속도로 건설 예정으로 이동 시간 단축 예정</p>
                </div>
            </a>
            <a class="card relative hover:after:bg-[#56471e]/80 hover:after:content-['자세히보기'] hover:after:w-full hover:after:absolute hover:after:bottom-0 hover:after:left-0 hover:after:h-full hover:after:transition-all hover:after:duration-700 text-lg text-white text-center after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-52 hover:before:left-2/4 hover:before:-translate-x-2/4 hover:before:z-20 after:h-0 before:bottom-24 hover:before:duration-700" href="javascript:void(0);">
                <div class="card-img relative">
                    <img src="<?php echo G5_IMG_URL ?>/img_infra.png" class="w-full">
                    <span class="absolute text-white bottom-0 right-0 font-light pr-4 pb-3 select-none text-xs">이미지컷</span>
                </div>
                <div class="card-body bg-white py-10 text-center">
                    <span class="rounded-full border border-[#939393] font-nanum py-1 px-4 text-[#939393] text-xs">Infra</span>
                    <h5 class="text-lg text-[#222222] pt-4 font-bold">수준 높은 인프라</h5>
                    <p class="text-base text-[#555555] pt-4 mx-auto">교육 시설 밒 편의 시설이 인접한 입지조건 <br> 초/중/고 교육시설 20분 이내 <br> 대형마트 20분, 양평역 20분</p>
                </div>
            </a>
            <a class="card relative hover:after:bg-[#56471e]/80 hover:after:content-['자세히보기'] hover:after:w-full hover:after:absolute hover:after:bottom-0 hover:after:left-0 hover:after:h-full hover:after:transition-all hover:after:duration-700 text-lg text-white text-center after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-52 hover:before:left-2/4 hover:before:-translate-x-2/4 hover:before:z-20 after:h-0 before:bottom-24 hover:before:duration-700" href="javascript:void(0);">
                <div class="card-img relative">
                    <img src="<?php echo G5_IMG_URL ?>/img_vision.png" class="w-full">
                    <span class="absolute text-white bottom-0 right-0 font-light pr-4 pb-3 select-none text-xs">이미지컷</span>
                </div>
                <div class="card-body bg-white py-10 text-center">
                    <span class="rounded-full border border-[#939393] font-nanum py-1 px-4 text-[#939393] text-xs">Vision</span>
                    <h5 class="text-lg text-[#222222] pt-4 font-bold">높이가 다른 미래가치</h5>
                    <p class="text-base text-[#555555] pt-4 mx-auto">문화, 관광 육성이 꾸준하게 발전하는 양평 <br> 서울·양평 간 고속도로 맟 도로 개발에 따른 <br> 양평의 가치 상승</p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="swiper-container main-swiper overflow-hidden relative">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiper-main-01 bg-cover relative">
            <div class="absolute left-2/4 top-[45%] -translate-x-2/4 text-white">
                <p class="text-sm font-nanum uppercase text-center tracking-wider">interior</p>
                <h3 class="text-2xl text-center pt-4">자연 속에 모던함을 담다</h3>
            </div>
        </div>
        <div class="swiper-slide swiper-main-02 bg-cover relative">
            <div class="absolute left-2/4 top-[45%] -translate-x-2/4 text-white">
                <p class="text-sm font-nanum uppercase text-center tracking-wider">interior</p>
                <h3 class="text-2xl text-center pt-4">자연 속에 모던함을 담다</h3>
            </div>
        </div>
        <div class="swiper-slide swiper-main-03 bg-cover relative">
            <div class="absolute left-2/4 top-[45%] -translate-x-2/4 text-white">
                <p class="text-sm font-nanum uppercase text-center tracking-wider">interior</p>
                <h3 class="text-2xl text-center pt-4">자연 속에 모던함을 담다</h3>
            </div>
        </div>
        <div class="swiper-slide swiper-main-04 bg-cover relative">
            <div class="absolute left-2/4 top-[45%] -translate-x-2/4 text-white">
                <p class="text-sm font-nanum uppercase text-center tracking-wider">interior</p>
                <h3 class="text-2xl text-center pt-4">자연 속에 모던함을 담다</h3>
            </div>
        </div>
        <div class="swiper-slide swiper-main-05 bg-cover relative">
            <div class="absolute left-2/4 top-[45%] -translate-x-2/4 text-white">
                <p class="text-sm font-nanum uppercase text-center tracking-wider">interior</p>
                <h3 class="text-2xl text-center pt-4">자연 속에 모던함을 담다</h3>
            </div>
        </div>
    </div>
    <div class="container px-5 absolute left-2/4 top-2/4 -translate-x-2/4 z-10">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="bg-[#f9f9f9]">
    <div class="container px-5 py-20">
        <p class="text-sm uppercase text-[#999999] text-center font-nanum pb-4 tracking-wider">DESIGN TYPE</p>
        <h3 class="text-2xl text-[#222222] text-center">생활의 품격을 높이다</h3>
        <div class="grid lg:grid-cols-2 pt-20 w-3/4 gap-x-10 mx-auto gap-y-10 typebox">
            <a class="col-span-1 relative after:bg-[#1e5ba3]/80 after:content-['A타입'] after:w-full after:absolute after:bottom-0 after:left-0 after:h-[85px] hover:after:h-full after:transition-all after:duration-700 text-lg text-white text-center hover:after:content-['자세히보기'] after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-20 before:left-2/4 before:-translate-x-2/4 hover:before:z-20 before:bottom-10 hover:before:transition-all hover:before:duration-1000 sm:hover:before:block hover:before:hidden" href="javascript:void(0);"> 
                <img src="<?php echo G5_IMG_URL ?>/img_type_01.png" class="w-full">
            </a>
            <a class="col-span-1 relative after:bg-[#64b03a]/80 after:content-['B타입'] after:w-full after:absolute after:bottom-0 after:left-0 after:h-[85px] hover:after:h-full after:transition-all after:duration-700 text-lg text-white text-center hover:after:content-['자세히보기'] after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-20 before:left-2/4 before:-translate-x-2/4 hover:before:z-20 before:bottom-10 hover:before:transition-all hover:before:duration-1000 sm:hover:before:block hover:before:hidden" href="javascript:void(0);"> 
                <img src="<?php echo G5_IMG_URL ?>/img_type_02.png" class="w-full">
            </a>
            <a class="col-span-1 relative after:bg-[#0f4546]/80 after:content-['C타입'] after:w-full after:absolute after:bottom-0 after:left-0 after:h-[85px] hover:after:h-full after:transition-all after:duration-700 text-lg text-white text-center hover:after:content-['자세히보기'] after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-20 before:left-2/4 before:-translate-x-2/4 hover:before:z-20 before:bottom-10 hover:before:transition-all hover:before:duration-1000 sm:hover:before:block hover:before:hidden" href="javascript:void(0);"> 
                <img src="<?php echo G5_IMG_URL ?>/img_type_03.png" class="w-full">
            </a>
            <a class="col-span-1 relative after:bg-[#0a3350]/80 after:content-['D타입'] after:w-full after:absolute after:bottom-0 after:left-0 after:h-[85px] hover:after:h-full after:transition-all after:duration-700 text-lg text-white text-center hover:after:content-['자세히보기'] after:flex after:justify-center after:items-center hover:before:content-[''] hover:before:w-[27px] hover:before:h-[27px] hover:before:absolute hover:before:bottom-20 before:left-2/4 before:-translate-x-2/4 hover:before:z-20 before:bottom-10 hover:before:transition-all hover:before:duration-1000 sm:hover:before:block hover:before:hidden" href="javascript:void(0);"> 
                <img src="<?php echo G5_IMG_URL ?>/img_type_04.png" class="w-full">
            </a>
        </div> 
    </div>
</div>

<div class="bg-white">
    <div class="container px-5 py-20">
        <p class="text-sm uppercase text-[#999999] text-center font-nanum pb-4 tracking-wider">location</p>
        <h3 class="text-2xl text-[#222222] text-center">찾아오시는 길</h3>
        <div class="map pt-20">
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <div id="daumRoughmapContainer1654753916758" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

            <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

            <!-- 3. 실행 스크립트 -->
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1654753916758",
                    "key" : "2ajb5",
                    "mapHeight" : "500"
                }).render();
            </script>
        </div>
        <div class="pt-10 flex items-center justify-center space-x-64">
            <div class="flex items-center">
                <p class="text-sm text-[#666666] pr-3 relative before:absolute before:bg-[#cccccc] before:h-3 before:w-[1px] before:content-[''] before:right-0 before:bottom-1">노트르빌 현장 위치</p>
                <p class="text-base text-[#444444] pl-3">경기도 양평군 강하면 성덕리 155-1</p>
            </div>
            <div class="flex items-center">
                <p class="text-sm text-[#666666] pr-3 relative before:absolute before:bg-[#cccccc] before:h-3 before:w-[1px] before:content-[''] before:right-0 before:bottom-1">대표전화</p>
                <p class="text-base text-[#444444] pl-3">031 - 772 - 4006</p>
            </div>
        </div>
    </div>
</div>

<script>
        new Swiper('.main-swiper', {
        navigation : {
            nextEl : '.swiper-button-next', 
            prevEl : '.swiper-button-prev',
	    },
    });
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');