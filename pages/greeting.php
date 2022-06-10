<?php
/* www/pages/greeting.php */
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
                <li class="bg-[#0f4546] border border-[#0f4546] basis-2/4">
                    <a href="/pages/greeting.php" class="text-white text-lg py-4 text-center block">인사말</a>
                </li>
                <li class="bg-white text-white border border-[#888888] basis-2/4 border-l-0">
                    <a href="/pages/introduce.php" class="text-[#666666] text-lg py-4 text-center block">사업소개</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-greeting">
    <div class="container px-5 lg:py-48 py-32">
        <h1 class="text-white text-3xl text-center">더 큰 관점으로 자연과 함께 성장하다</h1>
        <h3 class="text-lg text-white text-center font-light lg:pt-32 pt-10">
        집이란 단순히 쉬는 곳만이 아닌 삶을 함께해 나가는 공간입니다.<br>
        그렇기에 공간을 만드는 것은 어떠한 것보다도 <span class="text-xl text-[#fbb900] font-medium">안전성, 편안함, 디자인</span> 모두를 갖추어야 합니다.<br>
        저희 ‘노트르빌’은 30년간의 시공 경험을 기반으로, 고객분들의 주거공간을 안전하게 편안하게 <br>
        자연과 어우러지게 디자인하여 도심 속에서 느끼지 못할 <br>
        <span class="text-xl text-[#fbb900] font-medium">푸근함과 편안한 공간</span>을 만들기 위해 온 마음을 다하겠습니다.<br>
        </h3>
    </div>
</div>



<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->


<?php
include_once(G5_PATH.'/tail.php');
?>