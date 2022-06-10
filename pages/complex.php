<?php
/* www/pages/greeting.php */
include_once('../common.php');

// 페이지 제목

$g5['title'] = "단지안내";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');

?>



<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="pt-20">
    <div class="container px-5 py-20">
        <div class="tab">
            <ul class="list-none flex lg:w-2/4 mx-auto">
                <li class="bg-[#0f4546] border border-[#0f4546] basis-2/4">
                    <a href="/pages/complex.php" class="text-white text-lg py-4 text-center block">조감도</a>
                </li>
                <li class="bg-white text-white border border-[#888888] basis-2/4 border-l-0">
                    <a href="/pages/booking.php" class="text-[#666666] text-lg py-4 text-center block">필지 예약</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container px-5 pb-20 text-center">
    <p class="border-y border-y-[#b08650] text-[#b08650] font-nanum uppercase tracking-widest inline-block">notre ville</p>
    <h3 class="text-2xl text-[#0f4546] text-center font-medium pt-10">친환경 프리미엄 입지를 만나다.</h3>
    <p class="text-sm text-[#666666] text-center pb-4 tracking-tight font-normal pt-4">당신이 꿈꿔왔던 전원주택에서 숨겨져 있던 가치를 발견하세요. 귀하의 안목이 프리미엄 명품 단지를 만듭니다.</p>
    <img src="<?php echo G5_IMG_URL ?>/img_complex.png" class="pt-10 mx-auto">
    <div class="text-[#888888] pt-10 flex flex-col items-end">
        <p class="text-left">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.</p>
        <p class="text-left">※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.</p>
        <p class="text-left">※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
        <p class="text-left">※ 본 홍보물 상의 건물은 임의로 배치된 것으로 추후 변경될 수 있습니다.  </p>
    </div>
</div>



<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->


<?php
include_once(G5_PATH.'/tail.php');
?>