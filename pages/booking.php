<?php
/* www/pages/introduce.php */
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
                <li class="bg-white text-white border border-[#888888] basis-2/4 border-r-0">
                    <a href="/pages/complex.php" class="text-[#666666] text-lg py-4 text-center block">조감도</a>
                </li>
                <li class="bg-[#0f4546] border border-[#0f4546] basis-2/4">
                    <a href="/pages/booking.php" class="text-white text-lg py-4 text-center block">필지 예약</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container px-5 pb-20">
    <img src="<?php echo G5_IMG_URL ?>/img_booking.png" class="mx-auto">
    <h3 class="text-2xl text-[#0f4546] text-center font-medium pt-10">필지 상세 안내</h3>
    <table class="table md:text-base text-sm mx-auto mt-10 xl:w-3/4 text-center text-[#222222] w-full">
        <thead>
            <tr class="border-b border-b-[#cccccc]">
                <td></td>
                <td class="text-[#666666] py-4 lg:px-10 px-1">전용 면적</td>
                <td class="text-[#666666] py-4 lg:px-10 px-1">공용 면적</td>
                <td class="text-[#666666] py-4 lg:px-10 px-1">분양 면적</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="4" class="text-[#eb2231] py-4 lg:px-10 px-1 font-semibold">분양 중</td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-1
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">472 ㎡</p>
                    <p class="inline-block pl-3">142.78 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">566.5 ㎡</p>
                    <p class="inline-block pl-3">171.35 평</p>
                </td>
            </tr>
            <tr class="bg-[#f9f9f9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-2
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">436 ㎡</p>
                    <p class="inline-block pl-3">131.89 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">530.5 ㎡</p>
                    <p class="inline-block pl-3">160.46 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-3
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">407 ㎡</p>
                    <p class="inline-block pl-3">123.12 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">501.5 ㎡</p>
                    <p class="inline-block pl-3">151.69 평</p>
                </td>
            </tr>
            <tr class="bg-[#f9f9f9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-4
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">402 ㎡</p>
                    <p class="inline-block pl-3">121.61 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">496.5 ㎡</p>
                    <p class="inline-block pl-3">150.18 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-5
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">490 ㎡</p>
                    <p class="inline-block pl-3">148.23 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">584.5 ㎡</p>
                    <p class="inline-block pl-3">176.80 평</p>
                </td>
            </tr>
            <tr class="bg-[#f9f9f9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    1-6
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">474 ㎡</p>
                    <p class="inline-block pl-3">143.39 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">568.5 ㎡</p>
                    <p class="inline-block pl-3">171.96 평</p>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td colspan="4" class="text-[#0f4546] py-4 lg:px-10 px-1 font-semibold">예 정</td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-1
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">414 ㎡</p>
                    <p class="inline-block pl-3">125.24 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">508.5 ㎡</p>
                    <p class="inline-block pl-3">153.81 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-2
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">405 ㎡</p>
                    <p class="inline-block pl-3">122.51 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">499.5 ㎡</p>
                    <p class="inline-block pl-3">151.09 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-3
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">400 ㎡</p>
                    <p class="inline-block pl-3">121.00 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">494.5 ㎡</p>
                    <p class="inline-block pl-3">149.57 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-4
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">518 ㎡</p>
                    <p class="inline-block pl-3">156.70 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">612.5 ㎡</p>
                    <p class="inline-block pl-3">185.27 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-5
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">420 ㎡</p>
                    <p class="inline-block pl-3">127.05 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">514.5 ㎡</p>
                    <p class="inline-block pl-3">155.62 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-6
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">432 ㎡</p>
                    <p class="inline-block pl-3">130.68 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">526.5 ㎡</p>
                    <p class="inline-block pl-3">159.25 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-7
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">416 ㎡</p>
                    <p class="inline-block pl-3">125.84 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">510.5 ㎡</p>
                    <p class="inline-block pl-3">154.41 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-8
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">412 ㎡</p>
                    <p class="inline-block pl-3">124.63 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">506.5 ㎡</p>
                    <p class="inline-block pl-3">153.20 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-9
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">408 ㎡</p>
                    <p class="inline-block pl-3">123.42 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">502.5 ㎡</p>
                    <p class="inline-block pl-3">151.99 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-10
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">410 ㎡</p>
                    <p class="inline-block pl-3">124.03 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">504.5 ㎡</p>
                    <p class="inline-block pl-3">152.60 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-11
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">532 ㎡</p>
                    <p class="inline-block pl-3">160.93 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">626.5 ㎡</p>
                    <p class="inline-block pl-3">189.50 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-12
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">411 ㎡</p>
                    <p class="inline-block pl-3">124.33 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">505.5 ㎡</p>
                    <p class="inline-block pl-3">152.90 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-13
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">406 ㎡</p>
                    <p class="inline-block pl-3">122.82 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">500.5 ㎡</p>
                    <p class="inline-block pl-3">151.39 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    2-14
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">409 ㎡</p>
                    <p class="inline-block pl-3">123.72 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">503.5 ㎡</p>
                    <p class="inline-block pl-3">152.30 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-1
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">472 ㎡</p>
                    <p class="inline-block pl-3">142.78 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">566.5 ㎡</p>
                    <p class="inline-block pl-3">171.35 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-2
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">472 ㎡</p>
                    <p class="inline-block pl-3">142.78 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">566.5 ㎡</p>
                    <p class="inline-block pl-3">171.35 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-3
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">473 ㎡</p>
                    <p class="inline-block pl-3">143.08 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">567.5 ㎡</p>
                    <p class="inline-block pl-3">171.66 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-4
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">406 ㎡</p>
                    <p class="inline-block pl-3">122.82 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">500.5 ㎡</p>
                    <p class="inline-block pl-3">151.39 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-5
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">412 ㎡</p>
                    <p class="inline-block pl-3">124.63 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">506.5 ㎡</p>
                    <p class="inline-block pl-3">153.20 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-6
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">406 ㎡</p>
                    <p class="inline-block pl-3">122.82 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">500.5 ㎡</p>
                    <p class="inline-block pl-3">151.39 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    3-7
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">409 ㎡</p>
                    <p class="inline-block pl-3">123.72 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">503.5 ㎡</p>
                    <p class="inline-block pl-3">152.30 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-1
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">415 ㎡</p>
                    <p class="inline-block pl-3">125.54 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">509.5 ㎡</p>
                    <p class="inline-block pl-3">154.11 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-2
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">462 ㎡</p>
                    <p class="inline-block pl-3">139.76 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">556.5 ㎡</p>
                    <p class="inline-block pl-3">168.33 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-3
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">411 ㎡</p>
                    <p class="inline-block pl-3">124.33 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">505.5 ㎡</p>
                    <p class="inline-block pl-3">152.90 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-4
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">401 ㎡</p>
                    <p class="inline-block pl-3">121.30 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">495.5 ㎡</p>
                    <p class="inline-block pl-3">149.88 평</p>
                </td>
            </tr>
            <tr>
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-5
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">426 ㎡</p>
                    <p class="inline-block pl-3">128.87 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">520.5 ㎡</p>
                    <p class="inline-block pl-3">157.44 평</p>
                </td>
            </tr>
            <tr class="bg-[#fff7e9]">
                <td class="py-4 lg:px-10 px-1 whitespace-nowrap">
                    4-6
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">440 ㎡</p>
                    <p class="inline-block pl-3">133.10 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">94.5 ㎡</p>
                    <p class="inline-block pl-3">28.57 평</p>
                </td>
                <td class="py-4 lg:px-10 px-1">
                    <p class="relative inline-block sm:pr-4 sm:before:absolute sm:before:bg-[#cccccc] sm:before:h-3 sm:before:w-[1px] sm:before:content-[''] sm:before:right-0 sm:before:bottom-1">534.5 ㎡</p>
                    <p class="inline-block pl-3">161.67 평</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->


<?php
include_once(G5_PATH.'/tail.php');
?>