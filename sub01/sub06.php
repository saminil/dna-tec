<?php
include_once('./_common.php');
$g5['title'] = '오시는 길';
include_once(G5_THEME_PATH.'/head.php');
?>

<style>
    /* 신규 테이블 삽입   */
    table{width:80%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    th,td{border: 1px solid #444444;font-size:100%;padding:20px;}

    /*상세페이지 타이틀 박스 txtBox02 */
    .txtBox02 { 
        /*border-width: 2px; */
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
        /*background-color:#3399ff;*/
        font-size:2.2em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: #bc0000; 
        background-color:rgba(255, 102, 51, 0.2); 
        } /*  출처: https://bssow.tistory.com/127    */
    
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
</style>


        <div class="txtBox02">
		   <span class="fc_pointer">(주)아이지씨인증원 약도</span>
		</div>
		<br>

<div id="ctt_con" class="sub01_03">
	<!--
		* 카카오맵 - 약도서비스
		* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
		* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
	-->
	<p>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 본사 주소</span> : 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 501호 <br><br>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 전&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;화</span> : +82 2 6749 0701<br><br>
            
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 대중&nbsp; 교통</span><br>   
             &nbsp; &nbsp; 지하철 1호선: 가산디지털단지역 7번 출구(도보 12분)<br>
	         &nbsp; &nbsp; 지하철 7호선 : 가산디지털단지역 6번 출구(도보 12분) <br><br>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 승용차</span> : 주차 가능(무료 1시간) <br><br>
     </p>	
         <h2>         
	         <img src="/img/location_IGC_00.gif" alt="(주)아이지씨인증원 찾아오기 지도(약도)" style="display:block;margin:0 auto;"><br><br>
	     </h2>      
	  
	    
	                
	                       
	                                     
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 카카오 지도 보기(지도 이동, 확대&축소 기능)</span>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:10px;margin-top:0px;width:100%;">     
	<!-- 1. 약도 노드 -->
	<div id="daumRoughmapContainer1584435077831" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	
	<!-- 2. 설치 스크립트 -->
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
	
	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1584435077831",
			"key" : "xj65",
			"mapWidth" : "",
			"mapHeight" : ""
		}).render();
	</script>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>