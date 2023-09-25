<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

$wr_1 = explode("|",$write["wr_1"]);
$wr_2 = explode("|",$write["wr_2"]);
$wr_3 = explode("|",$write["wr_3"]);
$wr_4 = explode("|",$write["wr_4"]);
$wr_5 = explode("|",$write["wr_5"]);
$wr_6 = explode("|",$write["wr_6"]);
$wr_7 = explode("|",$write["wr_7"]);
$wr_8 = explode("|",$write["wr_8"]);
$wr_9 = explode("|",$write["wr_9"]);
$wr_10 = explode("|",$write["wr_10"]);
$wr_11 = explode("|",$write["wr_11"]);
$wr_12 = explode("|",$write["wr_12"]);
$wr_13 = explode("|",$write["wr_13"]);
$wr_14 = explode("|",$write["wr_14"]);
$wr_15 = explode("|",$write["wr_15"]);
$wr_16 = explode("|",$write["wr_16"]);
$wr_17 = explode("|",$write["wr_17"]);
$wr_18 = explode("|",$write["wr_18"]);
$wr_19 = explode("|",$write["wr_19"]);
$wr_20 = explode("|",$write["wr_20"]);
$wr_21 = explode("|",$write["wr_21"]);
$wr_22 = explode("|",$write["wr_22"]);
$wr_23 = explode("|",$write["wr_23"]);
$wr_24 = explode("|",$write["wr_24"]);
$wr_25 = explode("|",$write["wr_25"]);
$wr_26 = explode("|",$write["wr_26"]);
$wr_27 = explode("|",$write["wr_27"]);

$wr_70 = explode("|",$write["wr_70"]);
$wr_71 = explode("|",$write["wr_71"]);
$wr_72 = explode("|",$write["wr_72"]);
$wr_73 = explode("|",$write["wr_73"]);


$wr_1_1 = $wr_1[0];
$wr_1_2 = $wr_1[1];
$wr_1_3 = $wr_1[2];
$wr_1_4 = $wr_1[3];
$wr_1_5 = $wr_1[4];
$wr_1_6 = $wr_1[5];
$wr_1_7 = $wr_1[6];
$wr_1_8 = $wr_1[7];
$wr_1_9 = $wr_1[8];
$wr_1_10 = $wr_1[9];

$wr_2_1 = $wr_2[0];
$wr_2_2 = $wr_2[1];
$wr_2_3 = $wr_2[2];
$wr_2_4 = $wr_2[3];
$wr_2_5 = $wr_2[4];
$wr_2_6 = $wr_2[5];
$wr_2_7 = $wr_2[6];
$wr_2_8 = $wr_2[7];
$wr_2_9 = $wr_2[8];
$wr_2_10 = $wr_2[9];

$wr_3_1 = $wr_3[0];
$wr_3_2 = $wr_3[1];
$wr_3_3 = $wr_3[2];
$wr_3_4 = $wr_3[3];
$wr_3_5 = $wr_3[4];
$wr_3_6 = $wr_3[5];
$wr_3_7 = $wr_3[6];
$wr_3_8 = $wr_3[7];
$wr_3_9 = $wr_3[8];
$wr_3_10 = $wr_3[9];

$wr_4_1 = $wr_4[0];
$wr_4_2 = $wr_4[1];
$wr_4_3 = $wr_4[2];
$wr_4_4 = $wr_4[3];
$wr_4_5 = $wr_4[4];
$wr_4_6 = $wr_4[5];
$wr_4_7 = $wr_4[6];
$wr_4_8 = $wr_4[7];
$wr_4_9 = $wr_4[8];
$wr_4_10 = $wr_4[9];

$wr_5_1 = $wr_5[0];
$wr_5_2 = $wr_5[1];
$wr_5_3 = $wr_5[2];
$wr_5_4 = $wr_5[3];
$wr_5_5 = $wr_5[4];
$wr_5_6 = $wr_5[5];
$wr_5_7 = $wr_5[6];
$wr_5_8 = $wr_5[7];
$wr_5_9 = $wr_5[8];
$wr_5_10 = $wr_5[9];

$wr_6_1 = $wr_6[0];
$wr_6_2 = $wr_6[1];
$wr_6_3 = $wr_6[2];
$wr_6_4 = $wr_6[3];
$wr_6_5 = $wr_6[4];
$wr_6_6 = $wr_6[5];
$wr_6_7 = $wr_6[6];
$wr_6_8 = $wr_6[7];
$wr_6_9 = $wr_6[8];
$wr_6_10 = $wr_6[9];

$wr_7_1 = $wr_7[0];
$wr_7_2 = $wr_7[1];
$wr_7_3 = $wr_7[2];
$wr_7_4 = $wr_7[3];
$wr_7_5 = $wr_7[4];
$wr_7_6 = $wr_7[5];
$wr_7_7 = $wr_7[6];
$wr_7_8 = $wr_7[7];
$wr_7_9 = $wr_7[8];
$wr_7_10 = $wr_7[9];

$wr_8_1 = $wr_8[0];
$wr_8_2 = $wr_8[1];
$wr_8_3 = $wr_8[2];
$wr_8_4 = $wr_8[3];
$wr_8_5 = $wr_8[4];
$wr_8_6 = $wr_8[5];
$wr_8_7 = $wr_8[6];
$wr_8_8 = $wr_8[7];
$wr_8_9 = $wr_8[8];
$wr_8_10 = $wr_8[9];

$wr_9_1 = $wr_9[0];
$wr_9_2 = $wr_9[1];
$wr_9_3 = $wr_9[2];
$wr_9_4 = $wr_9[3];
$wr_9_5 = $wr_9[4];
$wr_9_6 = $wr_9[5];
$wr_9_7 = $wr_9[6];
$wr_9_8 = $wr_9[7];
$wr_9_9 = $wr_9[8];
$wr_9_10 = $wr_9[9];

$wr_10_1 = $wr_10[0];
$wr_10_2 = $wr_10[1];
$wr_10_3 = $wr_10[2];
$wr_10_4 = $wr_10[3];
$wr_10_5 = $wr_10[4];
$wr_10_6 = $wr_10[5];
$wr_10_7 = $wr_10[6];
$wr_10_8 = $wr_10[7];
$wr_10_9 = $wr_10[8];
$wr_10_10 = $wr_10[9];

$wr_11_1 = $wr_11[0];
$wr_11_2 = $wr_11[1];
$wr_11_3 = $wr_11[2];
$wr_11_4 = $wr_11[3];
$wr_11_5 = $wr_11[4];
$wr_11_6 = $wr_11[5];
$wr_11_7 = $wr_11[6];
$wr_11_8 = $wr_11[7];
$wr_11_9 = $wr_11[8];
$wr_11_10 = $wr_11[9];

$wr_12_1 = $wr_12[0];
$wr_12_2 = $wr_12[1];
$wr_12_3 = $wr_12[2];
$wr_12_4 = $wr_12[3];
$wr_12_5 = $wr_12[4];
$wr_12_6 = $wr_12[5];
$wr_12_7 = $wr_12[6];
$wr_12_8 = $wr_12[7];
$wr_12_9 = $wr_12[8];
$wr_12_10 = $wr_12[9];

$wr_13_1 = $wr_13[0];
$wr_13_2 = $wr_13[1];
$wr_13_3 = $wr_13[2];
$wr_13_4 = $wr_13[3];
$wr_13_5 = $wr_13[4];
$wr_13_6 = $wr_13[5];
$wr_13_7 = $wr_13[6];
$wr_13_8 = $wr_13[7];
$wr_13_9 = $wr_13[8];
$wr_13_10 = $wr_13[9];

$wr_14_1 = $wr_14[0];
$wr_14_2 = $wr_14[1];
$wr_14_3 = $wr_14[2];
$wr_14_4 = $wr_14[3];
$wr_14_5 = $wr_14[4];
$wr_14_6 = $wr_14[5];
$wr_14_7 = $wr_14[6];
$wr_14_8 = $wr_14[7];
$wr_14_9 = $wr_14[8];
$wr_14_10 = $wr_14[9];

$wr_15_1 = $wr_15[0];
$wr_15_2 = $wr_15[1];
$wr_15_3 = $wr_15[2];
$wr_15_4 = $wr_15[3];
$wr_15_5 = $wr_15[4];
$wr_15_6 = $wr_15[5];
$wr_15_7 = $wr_15[6];
$wr_15_8 = $wr_15[7];
$wr_15_9 = $wr_15[8];
$wr_15_10 = $wr_15[9];

$wr_16_1 = $wr_16[0];
$wr_16_2 = $wr_16[1];
$wr_16_3 = $wr_16[2];
$wr_16_4 = $wr_16[3];
$wr_16_5 = $wr_16[4];
$wr_16_6 = $wr_16[5];
$wr_16_7 = $wr_16[6];
$wr_16_8 = $wr_16[7];
$wr_16_9 = $wr_16[8];
$wr_16_10 = $wr_16[9];

$wr_17_1 = $wr_17[0];
$wr_17_2 = $wr_17[1];
$wr_17_3 = $wr_17[2];
$wr_17_4 = $wr_17[3];
$wr_17_5 = $wr_17[4];
$wr_17_6 = $wr_17[5];
$wr_17_7 = $wr_17[6];
$wr_17_8 = $wr_17[7];
$wr_17_9 = $wr_17[8];
$wr_17_10 = $wr_17[9];

$wr_18_1 = $wr_18[0];
$wr_18_2 = $wr_18[1];
$wr_18_3 = $wr_18[2];
$wr_18_4 = $wr_18[3];
$wr_18_5 = $wr_18[4];
$wr_18_6 = $wr_18[5];
$wr_18_7 = $wr_18[6];
$wr_18_8 = $wr_18[7];
$wr_18_9 = $wr_18[8];
$wr_18_10 = $wr_18[9];

$wr_19_1 = $wr_19[0];
$wr_19_2 = $wr_19[1];
$wr_19_3 = $wr_19[2];
$wr_19_4 = $wr_19[3];
$wr_19_5 = $wr_19[4];
$wr_19_6 = $wr_19[5];
$wr_19_7 = $wr_19[6];
$wr_19_8 = $wr_19[7];
$wr_19_9 = $wr_19[8];
$wr_19_10 = $wr_19[9];

$wr_20_1 = $wr_20[0];
$wr_20_2 = $wr_20[1];
$wr_20_3 = $wr_20[2];
$wr_20_4 = $wr_20[3];
$wr_20_5 = $wr_20[4];
$wr_20_6 = $wr_20[5];
$wr_20_7 = $wr_20[6];
$wr_20_8 = $wr_20[7];
$wr_20_9 = $wr_20[8];
$wr_20_10 = $wr_20[9];

$wr_21_1 = $wr_21[0];
$wr_21_2 = $wr_21[1];
$wr_21_3 = $wr_21[2];
$wr_21_4 = $wr_21[3];
$wr_21_5 = $wr_21[4];
$wr_21_6 = $wr_21[5];
$wr_21_7 = $wr_21[6];
$wr_21_8 = $wr_21[7];
$wr_21_9 = $wr_21[8];
$wr_21_10 = $wr_21[9];

$wr_22_1 = $wr_22[0];
$wr_22_2 = $wr_22[1];
$wr_22_3 = $wr_22[2];
$wr_22_4 = $wr_22[3];
$wr_22_5 = $wr_22[4];
$wr_22_6 = $wr_22[5];
$wr_22_7 = $wr_22[6];
$wr_22_8 = $wr_22[7];
$wr_22_9 = $wr_22[8];
$wr_22_10 = $wr_22[9];

$wr_23_1 = $wr_23[0];
$wr_23_2 = $wr_23[1];
$wr_23_3 = $wr_23[2];
$wr_23_4 = $wr_23[3];
$wr_23_5 = $wr_23[4];
$wr_23_6 = $wr_23[5];
$wr_23_7 = $wr_23[6];
$wr_23_8 = $wr_23[7];
$wr_23_9 = $wr_23[8];
$wr_23_10 = $wr_23[9];

$wr_24_1 = $wr_24[0];
$wr_24_2 = $wr_24[1];
$wr_24_3 = $wr_24[2];
$wr_24_4 = $wr_24[3];
$wr_24_5 = $wr_24[4];
$wr_24_6 = $wr_24[5];
$wr_24_7 = $wr_24[6];
$wr_24_8 = $wr_24[7];
$wr_24_9 = $wr_24[8];
$wr_24_10 = $wr_24[9];

$wr_25_1 = $wr_25[0];
$wr_25_2 = $wr_25[1];
$wr_25_3 = $wr_25[2];
$wr_25_4 = $wr_25[3];
$wr_25_5 = $wr_25[4];
$wr_25_6 = $wr_25[5];
$wr_25_7 = $wr_25[6];
$wr_25_8 = $wr_25[7];
$wr_25_9 = $wr_25[8];
$wr_25_10 = $wr_25[9];

$wr_26_1 = $wr_26[0];
$wr_26_2 = $wr_26[1];
$wr_26_3 = $wr_26[2];
$wr_26_4 = $wr_26[3];
$wr_26_5 = $wr_26[4];
$wr_26_6 = $wr_26[5];
$wr_26_7 = $wr_26[6];
$wr_26_8 = $wr_26[7];
$wr_26_9 = $wr_26[8];
$wr_26_10 = $wr_26[9];

$wr_27_1 = $wr_27[0];
$wr_27_2 = $wr_27[1];
$wr_27_3 = $wr_27[2];
$wr_27_4 = $wr_27[3];
$wr_27_5 = $wr_27[4];
$wr_27_6 = $wr_27[5];
$wr_27_7 = $wr_27[6];
$wr_27_8 = $wr_27[7];
$wr_27_9 = $wr_27[8];
$wr_27_10 = $wr_27[9];

$wr_28_1 = $wr_28[0];
$wr_28_2 = $wr_28[1];
$wr_28_3 = $wr_28[2];
$wr_28_4 = $wr_28[3];
$wr_28_5 = $wr_28[4];
$wr_28_6 = $wr_28[5];
$wr_28_7 = $wr_28[6];
$wr_28_8 = $wr_28[7];
$wr_28_9 = $wr_28[8];
$wr_28_10 = $wr_28[9];

$wr_29_1 = $wr_29[0];
$wr_29_2 = $wr_29[1];
$wr_29_3 = $wr_29[2];
$wr_29_4 = $wr_29[3];
$wr_29_5 = $wr_29[4];
$wr_29_6 = $wr_29[5];
$wr_29_7 = $wr_29[6];
$wr_29_8 = $wr_29[7];
$wr_29_9 = $wr_29[8];
$wr_29_10 = $wr_29[9];

$wr_30_1 = $wr_30[0];
$wr_30_2 = $wr_30[1];
$wr_30_3 = $wr_30[2];
$wr_30_4 = $wr_30[3];
$wr_30_5 = $wr_30[4];
$wr_30_6 = $wr_30[5];
$wr_30_7 = $wr_30[6];
$wr_30_8 = $wr_30[7];
$wr_30_9 = $wr_30[8];
$wr_30_10 = $wr_30[9];


$wr_70_1 = $wr_70[0];
$wr_70_2 = $wr_70[1];
$wr_70_3 = $wr_70[2];
$wr_70_4 = $wr_70[3];
$wr_70_5 = $wr_70[4];
$wr_70_6 = $wr_70[5];
$wr_70_7 = $wr_70[6];
$wr_70_8 = $wr_70[7];
$wr_70_9 = $wr_70[8];
$wr_70_10 = $wr_70[9];

$wr_71_1 = $wr_71[0];
$wr_71_2 = $wr_71[1];
$wr_71_3 = $wr_71[2];
$wr_71_4 = $wr_71[3];
$wr_71_5 = $wr_71[4];
$wr_71_6 = $wr_71[5];
$wr_71_7 = $wr_71[6];
$wr_71_8 = $wr_71[7];
$wr_71_9 = $wr_71[8];
$wr_71_10 = $wr_71[9];

$wr_72_1 = $wr_72[0];
$wr_72_2 = $wr_72[1];
$wr_72_3 = $wr_72[2];
$wr_72_4 = $wr_72[3];
$wr_72_5 = $wr_72[4];
$wr_72_6 = $wr_72[5];
$wr_72_7 = $wr_72[6];
$wr_72_8 = $wr_72[7];
$wr_72_9 = $wr_72[8];
$wr_72_10 = $wr_72[9];

$wr_73_1 = $wr_73[0];
$wr_73_2 = $wr_73[1];
$wr_73_3 = $wr_73[2];
$wr_73_4 = $wr_73[3];
$wr_73_5 = $wr_73[4];
$wr_73_6 = $wr_73[5];
$wr_73_7 = $wr_73[6];
$wr_73_8 = $wr_73[7];
$wr_73_9 = $wr_73[8];
$wr_73_10 = $wr_73[9];
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h2 id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
        </h2>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <div class="profile_info">
        	<div class="pf_img"><?php echo get_member_profile_img($view['mb_id']) ?></div>
        	<div class="profile_info_ct">
        		<span class="sound_only">작성자</span> <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong><br>
       		 	<span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
        		<span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
        		<strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
    		</div>
    	</div>

    	<!-- 게시물 상단 버튼 시작 { -->
	    <div id="bo_v_top">
	        <?php ob_start(); ?>

	        <ul class="btn_bo_user bo_v_com">
				<li><a href="<?php echo $list_href ?>" class="btn_b01 btn" title="목록"><i class="fa fa-list" aria-hidden="true"></i><span class="sound_only">목록</span></a></li>
	            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn" title="답변"><i class="fa fa-reply" aria-hidden="true"></i><span class="sound_only">답변</span></a></li><?php } ?>
	            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
	        	<?php if($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
	        	<li>
	        		<button type="button" class="btn_more_opt is_view_btn btn_b01 btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
		        	<ul class="more_opt is_view_btn"> 
			            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>">수정<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;">삭제<i class="fa fa-trash-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;">복사<i class="fa fa-files-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;">이동<i class="fa fa-arrows" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>">검색<i class="fa fa-search" aria-hidden="true"></i></a></li><?php } ?>
			        </ul> 
	        	</li>
	        	<?php } ?>
	        </ul>
	        <script>

            jQuery(function($){
                // 게시판 보기 버튼 옵션
				$(".btn_more_opt.is_view_btn").on("click", function(e) {
                    e.stopPropagation();
				    $(".more_opt.is_view_btn").toggle();
				})
;
                $(document).on("click", function (e) {
                    if(!$(e.target).closest('.is_view_btn').length) {
                        $(".more_opt.is_view_btn").hide();
                    }
                });
            });
            </script>
	        <?php
	        $link_buttons = ob_get_contents();
	        ob_end_flush();
			?>
	    </div>
	    <!-- } 게시물 상단 버튼 끝 -->
    </section>

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <ul class='estimate-stat-ul estimate-stat-tit-ul'>
          <li class='estimate-stat-li estimate-stat-pn'>
              <span class="stretch center">상품명</span>
          </li>
          <li class='estimate-stat-li estimate-stat-DC'>
              <span class="stretch center">수량</span>
          </li>
          <li class='estimate-stat-li estimate-stat-mf'>
              <span class="stretch center">가격</span>
          </li>
        </ul>

        <?php if($wr_2_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_2_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_2_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_2_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_3_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_3_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_3_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_3_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_4_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_4_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_4_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_4_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_5_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_5_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_5_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_5_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_6_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_6_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_6_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_6_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_7_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_7_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_7_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_7_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_8_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_8_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_8_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_8_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_9_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_9_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_9_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_9_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_10_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_10_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_10_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_10_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_11_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_11_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_11_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_11_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_12_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_12_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_12_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_12_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_13_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_13_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_13_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_13_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_14_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_14_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_14_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_14_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_15_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_15_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_15_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_15_3 ?></span>
            </li>
          </ul>
        <?php }?>
        <?php if($wr_16_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_16_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_16_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_16_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_17_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_17_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_17_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_17_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_18_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_18_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_18_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_18_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_19_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_19_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_19_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_19_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_20_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_20_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_20_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_20_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_21_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_21_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_21_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_21_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_22_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_22_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_22_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_22_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_23_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_23_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_23_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_23_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_24_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_24_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_24_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_24_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_25_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_25_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_25_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_25_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_26_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_26_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_26_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_26_3 ?></span>
            </li>
          </ul>
        <?php }?>
        
        <?php if($wr_27_1 != "") {?> 
          <ul class='estimate-stat-ul'>
            <li class='estimate-stat-li estimate-stat-pn'>
                <span class="stretch center"><?php echo $wr_27_1 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-DC'>
                <span class="stretch center"><?php echo $wr_27_2 ?></span>
            </li>
            <li class='estimate-stat-li estimate-stat-mf'>
                <span class="stretch center"><?php echo $wr_27_3 ?></span>
            </li>
          </ul>
        <?php }?>


        
        <ul class='estimate-stat2-ul estimate-stat2-tit-ul'>
          <li class='estimate-stat2-li estimate-stat2-li-subject'>
              <span class="stretch center">상품명</span>
          </li>
          <li class='estimate-stat2-li estimate-stat2-li-price'>
              <span class="stretch center">가격</span>
          </li>
        </ul>

        <?php if($wr_70_1 != "") {?> 
          <ul class='estimate-stat2-ul'>
            <li class='estimate-stat2-li estimate-stat2-li-subject'>
                <span class="stretch center"><?php echo $wr_70_1 ?></span>
                <span class="stretch center"><?php echo $wr_70_2 ?></span>
            </li>
            <li class='estimate-stat2-li estimate-stat2-li-price'>
                <span class="stretch center"><?php echo $wr_70_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_71_1 != "") {?> 
          <ul class='estimate-stat2-ul'>
            <li class='estimate-stat2-li estimate-stat2-li-subject'>
                <span class="stretch center"><?php echo $wr_71_1 ?></span>
                <span class="stretch center"><?php echo $wr_71_2 ?></span>
            </li>
            <li class='estimate-stat2-li estimate-stat2-li-price'>
                <span class="stretch center"><?php echo $wr_71_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_72_1 != "") {?> 
          <ul class='estimate-stat2-ul'>
            <li class='estimate-stat2-li estimate-stat2-li-subject'>
                <span class="stretch center"><?php echo $wr_72_1 ?></span>
                <span class="stretch center"><?php echo $wr_72_2 ?></span>
            </li>
            <li class='estimate-stat2-li estimate-stat2-li-price'>
                <span class="stretch center"><?php echo $wr_72_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <?php if($wr_73_1 != "") {?> 
          <ul class='estimate-stat2-ul'>
            <li class='estimate-stat2-li estimate-stat2-li-subject'>
                <span class="stretch center"><?php echo $wr_73_1 ?></span>
                <span class="stretch center"><?php echo $wr_73_2 ?></span>
            </li>
            <li class='estimate-stat2-li estimate-stat2-li-price'>
                <span class="stretch center"><?php echo $wr_73_3 ?></span>
            </li>
          </ul>
        <?php }?>

        <ul class="estimate_sum_stat" style="margin-top:30px; border-top:2px solid #000;">
          <li class="estimate-sum-stat-subject">
            추가시간금액
          </li>
          <li class="estimate-sum-stat-price">
            <?php echo $wr_1_9 ?>
          </li>
        </ul>

        <ul class="estimate_sum_stat">
          <li class="estimate-sum-stat-subject">
            합계
          </li>
          <li class="estimate-sum-stat-price">
            <?php echo $wr_1_10 ?>
          </li>
        </ul>


        <ul class="self_esti_formLine self_esti_formLine_full clearfix">
            <p class='self_esti_formLine_tit'>
                <span>*</span> 출장지역
            </p>
            <li>
                <p class='view-p1'>
                  <?php echo $wr_1_1 ?>
                </p>
                <p class='view-p1'>
                  <?php echo $wr_1_2 ?>
                </p>
            </li>
        </ul>

        <ul class="self_esti_formLine self_esti_formLine_half clearfix">
            <p class='self_esti_formLine_tit'>
              <span>*</span> 날짜
            </p>
            <li class='clearfix'>
              <p class='view-p1'>
                <?php echo $wr_1_3 ?> ~ <?php echo $wr_1_4 ?>
              </p>
            </li>
        </ul>

        <ul class="self_esti_formLine self_esti_formLine_half clearfix">
            <p class='self_esti_formLine_tit'>
              <span>*</span> 운영시간
            </p>
            <li class='clearfix'>
              <div class="half_line">
                <div class="esti_time_select">
                  <p class="esti_input_subtit">
                    시작시간
                  </p>
                  <div class="clearfix">
                    <p class='view-p1'>
                      <?php echo $wr_1_5 ?> 시
                      <?php echo $wr_1_6 ?> 분
                    </p>
                  </div>
                </div>
              </div>
              <div class="half_line">
                <div class="esti_time_select_wrap">
                  <p class="esti_input_subtit">
                    이용시간
                  </p>
                  <div class="clearfix">
                    <p class='view-p1'>
                      <?php echo $wr_1_7 ?> 시간
                    </p>
                  </div>
                </div>
              </div>
            </li>
          </ul>

        <ul class="self_esti_formLine self_esti_formLine_full clearfix">
          <p class='self_esti_formLine_tit'>
            <span>*</span> 연락처
          </p>
          <li>
            <p class='view-p1'>
              <?php echo $wr_1_8 ?>
            </p>
          </li>
        </ul>

        <ul class="self_esti_formLine self_esti_formLine_full clearfix">
          <p class='self_esti_formLine_tit'>
            <span>*</span> 이메일
          </p>
          <li>
            <p class='view-p1'>
              <?=$view["wr_email"]?>
            </p>
          </li>
        </ul>

        <ul class="self_esti_formLine self_esti_formLine_full clearfix">
          <p class='self_esti_formLine_tit'>
            <span>*</span> 추가요청사항
          </p>
          <li>
            <p class='view-p1'>
              <?php echo get_view_thumbnail($view['content']); ?>
            </p>
          </li>
        </ul>


        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
	?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
               	<i class="fa fa-folder-open" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <br>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <i class="fa fa-link" aria-hidden="true"></i>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <strong><?php echo $link ?></strong>
                </a>
                <br>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>
    
    <?php if ($prev_href || $next_href) { ?>
    <ul class="bo_v_nb">
        <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-chevron-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
        <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-chevron-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
    </ul>
    <?php } ?>

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->