<?php
/* www/pages/greeting.php */
include_once('../common.php');

// 페이지 제목

$g5['title'] = "타입안내";

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
                    <a href="/pages/complex.php" class="text-white text-lg py-4 text-center block">타입안내</a>
                </li>
                <li class="bg-white text-white border border-[#888888] basis-2/4 border-l-0">
                    <a href="javascript:alert('현재 준비중인 메뉴입니다.');" class="text-[#666666] text-lg py-4 text-center block">마감재(준비중)</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container px-5 pb-20">
    <div class="tablist">
        <ul class="list-none flex w-full text-center font-nanum">
            <li class="current tab-link bg-[#f5f5f5] border border-[#e9e6e6] basis-1/4 py-5 text-[#333333] cursor-pointer" data-tab="tab-1"><b class="lg:text-3xl text-2xl">A</b> TYPE</li>
            <li class="tab-link bg-[#f5f5f5] border-y border-y-[#e9e6e6] basis-1/4 py-5 text-[#333333] cursor-pointer" data-tab="tab-2"><b class="lg:text-3xl text-2xl">B</b> TYPE</li>
            <li class="tab-link bg-[#f5f5f5] border border-[#e9e6e6] basis-1/4 py-5 text-[#333333] cursor-pointer" data-tab="tab-3"><b class="lg:text-3xl text-2xl">C</b> TYPE</li>
            <li class="tab-link bg-[#f5f5f5] border border-[#e9e6e6] basis-1/4 py-5 border-l-0 text-[#333333] cursor-pointer" data-tab="tab-4"><b class="lg:text-3xl text-2xl">D</b> TYPE</li>
        </ul>
        <div id="tab-1" class="tab-content current">
            <div class="grid grid-cols-3 border border-[#e9e6e6]">
                <div class="bg-[#0f4546] xl:p-20 sm:p-10 p-5 lg:col-span-1 col-span-3">
                    <table class="table table-auto w-full">
                        <thead>
                            <tr class="border-y-2 border-[#a5d4d5]">
                                <td colspan="2" class="flex justify-between p-3 items-center">
                                    <p class="text-[#a5d4d5] uppercase font-nanum"><b class="text-5xl">A</b> type</p>
                                    <p class="rounded-full bg-[#f9f9f9] text-[#777777] py-2 px-4">12세대</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">1층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">70.34 ㎡</span>
                                        <span class="inline-block pl-3">21.28 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">2층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">52.24 ㎡</span>
                                        <span class="inline-block pl-3">15.80 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">연면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">122.58 ㎡</span>
                                        <span class="inline-block pl-3">37.08 평</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">1F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_a_1f.png" class="mx-auto pt-5">
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">2F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_a_2f.png" class="mx-auto pt-5">
                </div>
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 mt-10">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">1F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_a_1f_3d.png" class="mx-auto py-10">
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 border-t-0">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">2F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_a_2f_3d.png" class="mx-auto py-10">
            </div>
            <div class="bg-[#d3d6d6]/30 lg:p-10 p-5 text-center">
                <p class="lg:text-base text-sm text-[#888888] text-left inline-block">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.<br>
                ※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.<br>
                ※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
            </div>
            <img src="<?php echo G5_IMG_URL?>/img_a_real_01.jpg" class="w-full">
            <img src="<?php echo G5_IMG_URL?>/img_a_real_02.jpg" class="w-full">
        </div>
        <div id="tab-2" class="tab-content">
            <div class="grid grid-cols-3 border border-[#e9e6e6]">
                <div class="bg-[#0f4546] xl:p-20 sm:p-10 p-5 lg:col-span-1 col-span-3">
                    <table class="table table-auto w-full">
                        <thead>
                            <tr class="border-y-2 border-[#a5d4d5]">
                                <td colspan="2" class="flex justify-between p-3 items-center">
                                    <p class="text-[#a5d4d5] uppercase font-nanum"><b class="text-5xl">B</b> type</p>
                                    <p class="rounded-full bg-[#f9f9f9] text-[#777777] py-2 px-4">00세대</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">1층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">72.51 ㎡</span>
                                        <span class="inline-block pl-3">21.93 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">2층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">56.84 ㎡</span>
                                        <span class="inline-block pl-3">17.19 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">연면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">129.35 ㎡</span>
                                        <span class="inline-block pl-3">39.13 평</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">1F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_b_1f.png" class="mx-auto pt-5">
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">2F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_b_2f.png" class="mx-auto pt-5">
                </div>
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 mt-10">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">1F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_b_1f_3d.png" class="mx-auto py-10">
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 border-t-0">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">2F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_b_2f_3d.png" class="mx-auto py-10">
            </div>
            <div class="bg-[#d3d6d6]/30 lg:p-10 p-5 text-center">
                <p class="lg:text-base text-sm text-[#888888] text-left inline-block">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.<br>
                ※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.<br>
                ※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
            </div>
            <img src="<?php echo G5_IMG_URL?>/img_b_real_01.jpg" class="w-full">
        </div>
        <div id="tab-3" class="tab-content">
            <div class="grid grid-cols-3 border border-[#e9e6e6]">
                <div class="bg-[#0f4546] xl:p-20 sm:p-10 p-5 lg:col-span-1 col-span-3">
                    <table class="table table-auto w-full">
                        <thead>
                            <tr class="border-y-2 border-[#a5d4d5]">
                                <td colspan="2" class="flex justify-between p-3 items-center">
                                    <p class="text-[#a5d4d5] uppercase font-nanum"><b class="text-5xl">C</b> type</p>
                                    <p class="rounded-full bg-[#f9f9f9] text-[#777777] py-2 px-4">00세대</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">1층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">78.84 ㎡</span>
                                        <span class="inline-block pl-3">23.85 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">2층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">45.88 ㎡</span>
                                        <span class="inline-block pl-3">13.88 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">연면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">124.72 ㎡</span>
                                        <span class="inline-block pl-3">37.73 평</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">1F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_c_1f.png" class="mx-auto pt-5">
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">2F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_c_2f.png" class="mx-auto pt-5">
                </div>
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 mt-10">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">1F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_c_1f_3d.png" class="mx-auto py-10">
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 border-t-0">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">2F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_c_2f_3d.png" class="mx-auto py-10">
            </div>
            <div class="bg-[#d3d6d6]/30 lg:p-10 p-5 text-center">
                <p class="lg:text-base text-sm text-[#888888] text-left inline-block">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.<br>
                ※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.<br>
                ※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
            </div>
            <img src="<?php echo G5_IMG_URL?>/img_c_real_01.jpg" class="w-full">
        </div>
        <div id="tab-4" class="tab-content">
            <div class="grid grid-cols-3 border border-[#e9e6e6]">
                <div class="bg-[#0f4546] xl:p-20 sm:p-10 p-5 lg:col-span-1 col-span-3">
                    <table class="table table-auto w-full">
                        <thead>
                            <tr class="border-y-2 border-[#a5d4d5]">
                                <td colspan="2" class="flex justify-between p-3 items-center">
                                    <p class="text-[#a5d4d5] uppercase font-nanum"><b class="text-5xl">D</b> type</p>
                                    <p class="rounded-full bg-[#f9f9f9] text-[#777777] py-2 px-4">00세대</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">1층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">74.48 ㎡</span>
                                        <span class="inline-block pl-3">22.53 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-dashed border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">2층면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">47.10 ㎡</span>
                                        <span class="inline-block pl-3">14.55 평</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-b border-b-[#cccccc]">
                                <td class="p-3 flex justify-between items-center">
                                    <p class="text-white text-sm">연면적</p>
                                    <p class="text-white text-sm">
                                        <span class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-2.5 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">122.58 ㎡</span>
                                        <span class="inline-block pl-3">37.08 평</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">1F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_d_1f.png" class="mx-auto pt-5">
                </div>
                <div class="bg-white p-10 lg:col-span-1 col-span-3">
                    <p class="text-lg text-[#555555] font-nanum font-bold">2F</p>
                    <img src="<?php echo G5_IMG_URL?>/img_type_d_2f.png" class="mx-auto pt-5">
                </div>
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 mt-10">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">1F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_d_1f_3d.png" class="mx-auto py-10">
            </div>
            <div class="border border-[#0f4546] lg:p-10 p-5 border-t-0">
                <p class="rounded-full bg-[#0f4546] text-white lg:text-2xl text-sm inline-block py-2 px-10 font-nanum font-semibold">2F</p>
                <img src="<?php echo G5_IMG_URL?>/img_type_d_2f_3d.png" class="mx-auto py-10">
            </div>
            <div class="bg-[#d3d6d6]/30 lg:p-10 p-5 text-center">
                <p class="lg:text-base text-sm text-[#888888] text-left inline-block">※ 본 홍보물의 이미지, CG는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.<br>
                ※ 본 사업은 설계, 분양 세대수 및 연면적 등은 제작 시 오자 및 인허가 과정에서 변경될 수 있습니다.<br>
                ※ 본 홍보물 상의 개발계획 등은 관계 기관의 사정에 따라 변동될 수 있으며, 당사와 무관합니다.</p>
            </div>
            <img src="<?php echo G5_IMG_URL?>/img_d_real_01.jpg" class="w-full">
        </div>
    </div>
</div>

<script>

    $('.tab-link').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.tab-link').removeClass('current');
        $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');

    });


</script>


<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->


<?php
include_once(G5_PATH.'/tail.php');
?>