<?php
/* www/pages/introduce.php */
include_once('../common.php');

// 페이지 제목

$g5['title'] = "인사말";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');

?>



<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="pt-20">
    <div class="container px-5 py-20">
        <div class="tab">
            <ul class="list-none flex lg:w-2/4 mx-auto">
                <li class="bg-white text-white border border-[#888888] basis-2/4 border-r-0">
                    <a href="/pages/greeting.php" class="text-[#666666] text-lg py-4 text-center block">인사말</a>
                </li>
                <li class="bg-[#0f4546] border border-[#0f4546] basis-2/4">
                    <a href="/pages/introduce.php" class="text-white text-lg py-4 text-center block">사업소개</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="relative">
    <div class="absolute bg-[#fff7e9] h-[300px] w-full -z-10"></div>
    <div class="container px-5 py-20">
        <p class="text-sm text-[#222222] text-center pb-4 tracking-tight font-medium">양평의 호재와 함께 프리미엄을 누리다.</p>
        <h3 class="text-2xl text-[#0f4546] text-center font-medium">생활의 품격을 높이다</h3>
        <img src="<?php echo G5_IMG_URL ?>/img_introduce.png" class="mx-auto pt-10">
        <div class="pt-20 mx-auto xl:w-2/4">
            <table class="table w-full">
                <tbody class="text-base border-y-2 border-y-[#0f4546]">
                    <tr class="border-b border-b-[#ccc]">
                        <td class="bg-[#f9f9f9] py-4 lg:px-10 px-3 text-center text-[#0f4546]">사업명</td>
                        <td class="bg-white py-4 lg:px-10 px-3 text-center text-[#222222]">노트르빌(Notre Ville)</td>
                    </tr>
                    <tr class="border-b border-b-[#ccc]">
                        <td class="bg-[#f9f9f9] py-4 lg:px-10 px-3 text-center text-[#0f4546]">위치</td>
                        <td class="bg-white py-4 lg:px-10 px-3 text-center text-[#222222]">경기도 양평군 강하면 성덕리 155 -1 외 7필지</td>
                    </tr>
                    <tr class="border-b border-b-[#ccc]">
                        <td class="bg-[#f9f9f9] py-4 lg:px-10 px-3 text-center text-[#0f4546]">연면적</td>
                        <td class="bg-white py-4 lg:px-10 px-3 text-center text-[#222222]">472 ㎡</td>
                    </tr>
                    <tr class="border-b border-b-[#ccc]">
                        <td class="bg-[#f9f9f9] py-4 lg:px-10 px-3 text-center text-[#0f4546]">건축규모</td>
                        <td class="bg-white py-4 lg:px-10 px-3 text-center text-[#222222]">지상1층 ~ 2층</td>
                    </tr>
                    <tr>
                        <td class="bg-[#f9f9f9] py-4 lg:px-10 px-3 text-center text-[#0f4546]">건축타입</td>
                        <td class="bg-white py-4 lg:px-10 px-3 text-center text-[#222222]">122.58 ㎡ <b class="text-lg">A</b>  / 129.35 ㎡ <b class="text-lg">B</b> / 124.72 ㎡ <b class="text-lg">C</b> / 122.58 ㎡ <b class="text-lg">D</b> </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-[#888888] pt-10 flex flex-col items-end">
                <p class="text-left">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.</p>
                <p class="text-left">※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.</p>
                <p class="text-left">※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
            </div>
        </div>

    </div>
</div>



<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->


<?php
include_once(G5_PATH.'/tail.php');
?>