<script>
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                showMonthAfterYear: true,
                yearSuffix: '년',
                ignoreReadonly: true
            });




            $(function() {
                $(".wr_3_datepicker").datepicker({
                  minDate: 0,
                  onClose: function( selectedDate ) {    
                    // 시작일(fromDate) datepicker가 닫힐때
                    // 종료일(toDate)의 선택할수있는 최소 날짜(minDate)를 선택한 시작일로 지정
                    $(".wr_4_datepicker").datepicker( "option", "minDate", selectedDate );
                    }                
                });
            });
            $(function() {
                $(".wr_4_datepicker").datepicker({
                  minDate: 0,
                  onClose: function( selectedDate ) {
                    // 종료일(toDate) datepicker가 닫힐때
                    // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
                    $(".wr_3_datepicker").datepicker( "option", "maxDate", selectedDate );
                  }                


                });
            });
</script>
<script>
                  function sample4_execDaumPostcode() {
                     new daum.Postcode({
                        oncomplete: function (data) {
                           // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                           // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                           // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                           var roadAddr = data.roadAddress; // 도로명 주소 변수
                           var extraRoadAddr = ''; // 참고 항목 변수

                           // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                           // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                           if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                              extraRoadAddr += data.bname;
                           }
                           // 건물명이 있고, 공동주택일 경우 추가한다.
                           if (data.buildingName !== '' && data.apartment === 'Y') {
                              extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data
                                 .buildingName);
                           }
                           // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                           if (extraRoadAddr !== '') {
                              extraRoadAddr = ' (' + extraRoadAddr + ')';
                           }

                           // 우편번호와 주소 정보를 해당 필드에 넣는다.
                           document.getElementById("sample4_roadAddress").value = roadAddr + " ("+data.zonecode+")";


                        }
                     }).open();
                  }
</script>
<script>
    var step = 1;
    var totalStep = $('.esti_write_left').children().length;
    var lastStep = totalStep - 1;


    $(".esti_write_right_next").click(function(){
      var menuPriceTxt = $(".esti_write_rightBox_04 p").text();
      var regex = /[^0-9]/g;
      var menuPrice = menuPriceTxt.replace(regex, "");
      if(menuPrice < 500000 ){
        swal({
          title : '최소 메뉴 주문금액은 50만원 입니다.',
          text : '',
          confirmButtonColor : '#31ba16',
        });
        return false;
      }
      if($(".esti_write_right_next").hasClass("eprev")){
        return false;
      }
      var next = step + 1;
      var nowstepClass = ".self_esti_step"+step;
      var nextstepClass = ".self_esti_step"+next;
      if(step >= lastStep){
        $(".esti_write_right_next").addClass('eprev');
        $(".estiRightDelete").hide();
        
        $(".esti_write_rightBox_07").show();

        $(nowstepClass).hide();
        $(nextstepClass).show();
      } else {
        $(".esti_write_right_prev").removeClass('eprev');
      

        $(nowstepClass).hide();
        $(nextstepClass).show();
        
      }
      step++;
      var stepBar = ".self_esti_bar"+step;
      $(stepBar).addClass("on");
      $(".stepnum").text(step);

      $('html').scrollTop(0);

    });

    $(".esti_write_right_prev").click(function(){
      if($(".esti_write_right_prev").hasClass("eprev")){
        return false;
      }
      var prev = step - 1;
      var nowstepClass = ".self_esti_step"+step;
      var prevstepClass = ".self_esti_step"+prev;
      if(step <= 2){
        $(".esti_write_right_prev").addClass('eprev');
        $(nowstepClass).hide();
        $(prevstepClass).show();
      } else {
        $(".esti_write_right_next").removeClass('eprev');

        $(nowstepClass).hide();
        $(prevstepClass).show();
      }
      $(".estiRightDelete").show();
      $(".esti_write_rightBox_07").hide();
      var stepBar = ".self_esti_bar"+step;
      $(stepBar).removeClass("on");
      step--;
      $(".stepnum").text(step);
      $('html').scrollTop(0);
    });
  </script>

<script>

function menuModal2(e, wrId){
    $(".menudesign_input").prop("checked", false);
    var ModalMenuImg = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("img").attr("src");
    var ModalMenuTxt = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("h3").text();
    var ModalPriceTxt = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("p").text();

    var str = ModalPriceTxt;
    var regex = /[^0-9]/g;
    var ModalPrice = str.replace(regex, "");
    var totalPrice = ModalPrice;
    var totalPiceText = totalPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";

    var apWrId = "d_"+wrId+"";
    $(".menu_modal_btn").attr('id',apWrId);
    $(".menu_select_img2 img").attr("src", ModalMenuImg);
    $(".menu_select_txt2 h3").text(ModalMenuTxt);
    $(".menu_select_total2 p").text(totalPiceText);
    $(".menu_select_modal2").show();

    // modal 초기값


    $(".menudesign_label").click(function(){
      var $e = $(this).siblings(".menudesign_input");
      var e = $(this).siblings(".menudesign_input").val();
      if($e.is(":checked")){
        var e = 0;
        nowTotalPrice(e);
      } else {
        nowTotalPrice(e);
      }
    })


    function nowTotalPrice(e){
      
      var nowTotalPrice = Number(e) + Number(ModalPrice);
      var totalPiceText = nowTotalPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
      $(".menu_select_total2 p").text(totalPiceText);
    }

  }




  
  function menuModal(e, wrId){
    var ModalMenuImg = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("img").attr("src");
    var ModalMenuTxt = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("h3").text();
    var ModalPriceTxt = $(e).parent(".esti_menu_check").siblings(".esti_menu_left").find("p").text();

    var str = ModalPriceTxt;
    var regex = /[^0-9]/g;
    var ModalPrice = str.replace(regex, "");
    
    $(".menu_select_count input").val("50");
    var totalPrice = ModalPrice * $(".menu_select_count input").val();
    var totalPiceText = totalPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";

    var apWrId = "d_"+wrId+"";
    $(".menu_modal_btn").attr('id',apWrId);
    $(".menu_select_img img").attr("src", ModalMenuImg);
    $(".menu_select_txt h3").text(ModalMenuTxt);
    $(".menu_select_total p").text(totalPiceText);
    $(".menu_select_modal1").show();

    // modal 초기값

    function nowTotalPrice(e){
      var nowTotalPrice = e * ModalPrice;
      var totalPiceText = nowTotalPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
      $(".menu_select_total p").text(totalPiceText);
    }


    $(".menu_select_count input").change(function(){
    var inputCount = $(this).val();
    if(inputCount < 50){
      // alert("최소 수량은 50개입니다.");
      swal({
            title : '최소 수량은 50개입니다.',
            text : '',
            confirmButtonColor : '#31ba16',
          })
      $(this).val("50");
      var count = 50;
      nowTotalPrice(count);
      return false;
    } else if(inputCount >= 50000){
      swal({
        title : '최대 주문수량을 초과하였습니다.',
        text : '',
        confirmButtonColor : '#31ba16',
      });
      $(this).val("50");
      nowTotalPrice(count);
      return false;
    } else {
      var count = parseInt($(this).val());
      nowTotalPrice(count);
    }
    });
  }

  function minus(e){
    var $input = $(e).parent().find('input');
      if($input.val() <= 50){
      // alert("최소 수량은 50개입니다.");
      swal({
            title : '최소 수량은 50개입니다.',
            text : '',
            confirmButtonColor : '#31ba16',
          })
          
      return false;
    } else {
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    }
  }
  function plus(e){
    var $input = $(e).parent().find('input');
    if($input.val() >= 50000){
      // alert("최대 주문수량을 초과하였습니다.");
      swal({
            title : '최대 주문수량을 초과하였습니다.',
            text : '',
            confirmButtonColor : '#31ba16',
          });
      return false;
    }else {
      var count = parseInt($input.val()) + 1;
      $input.val(count);
      $input.change();
      return false;
    }
  }
  $('.minus').click(function () {
    var obj = $(this);
    minus(obj);
  });
  $('.plus').click(function () {
    var obj = $(this);
    plus(obj);
  });

  
  // function rightCheck(obj){
  //   var rightMenuTxt = $(".menu_select_txt").text();
  // }

  $(".menu_modal_btn").click(function(){
    var rightMenuTxt = $(".menu_select_txt h3").text();
    var rightMenuCount = $(".menu_select_count input").val();
    var rightMenuTotalPrice = $(".menu_select_total p").text();
    var ModalMenuName  = $(this).siblings(".menu_select_txt").find("h3").text();
    

    var regex = /[^0-9]/g;
    var numWriteLinePrice = rightMenuTotalPrice.replace(regex, "");
    var indiPrice = numWriteLinePrice / rightMenuCount;
    var bnum = $(".menu_modal_btn").attr('id');
    var num = bnum.replace(regex, "");

    

    $(".esti_write_rightBox_01").append("<div class='esti_write_rightBox01_smallBox'><ul class='esti_write_linebox esti_write_linebox"+num+" clearfix' id='esti_write_linebox"+num+"'><li class='esti_write_linebox_left clearfix'><input type='checkbox' id='estiRightDelete"+num+"' class='estiRightDeleteInput' checked disabled><label for='estiRightDelete"+num+"' onclick='estiRightDelete(this);' class='estiRightDelete'></label><p class='esti_right_menutxt'>"+rightMenuTxt+"</p><p class='esti_right_menuCount clearfix'><span class='write_right_minus' onclick='rightMinus(this);'>-</span><input type='number' name='wr_"+num+"_2' class='numberInput esti_write_rightBox01_countInput' value='"+rightMenuCount+"' onchange='rightLinePrice(this)'><span class='write_right_plus' onclick='rightPlus(this);'>+</span></p><input type='hidden' class='right_indi_price' value='"+indiPrice+"'></li><li class='esti_write_linebox_right'><p class='esti_write_lineTotalPrice indiPrice'>"+rightMenuTotalPrice+"</p></li></ul></div>");
    RealTotalPrice();

    $(".esti_write_linebox").each(function(){
      var lineMenuName = $(this).find(".esti_right_menutxt").text();
      var writeId = $(this).attr('id');
      var regex = /[^0-9]/g;
      var numWriteId = writeId.replace(regex, "");

      var writeMenuName = $(this).find(".esti_right_menutxt").text();
      var writeMenuCount = $(this).find(".numberInput").val();
      var writeMenuPrice = $(this).find(".esti_write_lineTotalPrice").text();

      if(ModalMenuName == lineMenuName){
         $(".self_esti_wr_menu").append("<ul class='self_seti_wr_ul clearfix'><li><input name='wr_"+numWriteId+"_1' value='"+writeMenuName+"' type='' class='full_line wr_"+numWriteId+"_1 self_esti_menuname' readonly></li><li><input name='wr_"+numWriteId+"_3' value='"+writeMenuPrice+"' type='text' class='full_line wr_"+numWriteId+"_3' readonly></li></ul>");
      }
    });

    $(".esti_menu_line").each(function(){
      var listMenuTxt = $(this).find(".esti_menu_txt").children("h3").text();
      if(listMenuTxt == rightMenuTxt){
        $(this).find(".esti_menu_checkBtn").hide();
        $(this).find(".esti_menu_deletBtn").show();
      }
    });

    var v = $("#sel").val();
    var numberV = Number(v);

    function topPrice(){
      var sum = 0;
      $(".esti_write_lineTotalPrice").each(function(){
        var numIndiPriceTxt = $(this).text();
        var regex = /[^0-9]/g;
        var numIndiPrice = numIndiPriceTxt.replace(regex, "");
        sum += parseInt(numIndiPrice);
      });
      plusPrice(sum);
    };

    function plusPrice(sumP){
      if(sumP >= 700000 && sumP < 1000000){
        var num = 3;
      } else if(sumP >= 1000000){
        var num = 4;
      } else {
        var num = 2;
      }
      plusTimePrice(num);
    }

    function plusTimePrice(n){
      if(numberV > n){
        var plustime = numberV - n;
        var plusPrice = plustime * 30000;
        var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
        $(".esti_write_rightBox_03 p").text(plusPriceTxt);
      } else {
        $(".esti_write_rightBox_03 p").text("0원");
      }
    };
    topPrice();
    RealTotalPrice();
  });
  
  $(".menu_modal_btn2").click(function(){
    var rightMenuTxt = $(".menu_select_txt2 h3").text();
    var rightMenuTotalPrice = $(".menu_select_total2 p").text();
    var ModalMenuName = $(this).siblings(".menu_select_txt2").find("h3").text();

    var regex = /[^0-9]/g;
    var numWriteLinePrice = rightMenuTotalPrice.replace(regex, "");
    var indiPrice = numWriteLinePrice;
    var bnum = $(".menu_modal_btn").attr('id');
    var num = bnum.replace(regex, "");

    
    if($('.menudesign_input').is(":checked")){
      var designPlus = "<span class='designPlus'>+디자인</span>";
      var designValue = "+디자인";
    } else {
      designPlus = "";
      designValue = "";
    }
    $(".esti_write_rightBox_02").append("<div class='esti_write_rightBox01_smallBox'><ul class='esti_write_second_linebox clearfix' id='esti_write_second_linebox_"+num+"'><li class='esti_write_linebox_left clearfix'><input type='checkbox' id='estiRightDelete"+num+"' class='estiRightDeleteInput' checked disabled><label for='estiRightDelete"+num+"' onclick='estiRightDelete(this);' class='estiRightDelete'></label><p class='esti_right_menutxt esti_right_menutxt2'>"+rightMenuTxt+"</p>"+designPlus+"<input type='hidden' class='right_indi_price' value='"+indiPrice+"'></li><li class='esti_write_linebox_right'><p class='esti_write_lineTotalPrice indiPrice'>"+rightMenuTotalPrice+"</p></li></ul></div>");
    RealTotalPrice();
    num++;

    $(".esti_write_second_linebox").each(function(){
      var lineMenuName = $(this).find(".esti_right_menutxt").text();
      var writeId = $(this).attr('id');
      var regex = /[^0-9]/g;
      var numWriteId = writeId.replace(regex, "");

      var writeMenuName = $(this).find(".esti_right_menutxt").text();
      var writeMenuPrice = $(this).find(".esti_write_lineTotalPrice").text();

      if(ModalMenuName == lineMenuName){
        $(".self_esti_wr_option").append("<ul class='self_seti_wr_ul clearfix'><li><input name='wr_"+numWriteId+"_1' value='"+writeMenuName+"' type='' class='full_line wr_"+numWriteId+"_1 self_esti_menuname' readonly><input type='hidden' value='"+designValue+"'name='wr_"+numWriteId+"_2'></li><li><input name='wr_"+numWriteId+"_3' value='"+writeMenuPrice+"' type='text' class='full_line wr_"+numWriteId+"_3' readonly></li></ul>");
      }
    });


    $(".esti_menu_line").each(function(){
      var listMenuTxt = $(this).find(".esti_menu_txt").children("h3").text();
      if(listMenuTxt == rightMenuTxt){
        $(this).find(".esti_menu_checkBtn").hide();
        $(this).find(".esti_menu_deletBtn").show();
      }
    });

    var v = $("#sel").val();
    var numberV = Number(v);

    function topPrice(){
      var sum = 0;
      $(".esti_write_lineTotalPrice").each(function(){
        var numIndiPriceTxt = $(this).text();
        var regex = /[^0-9]/g;
        var numIndiPrice = numIndiPriceTxt.replace(regex, "");
        sum += parseInt(numIndiPrice);
      });
      plusPrice(sum);
    };

    function plusPrice(sumP){
      if(sumP >= 700000 && sumP < 1000000){
        var num = 3;
      } else if(sumP >= 1000000){
        var num = 4;
      } else {
        var num = 2;
      }
      plusTimePrice(num);
    }

    function plusTimePrice(n){
      if(numberV > n){
        var plustime = numberV - n;
        var plusPrice = plustime * 30000;
        var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
        $(".esti_write_rightBox_03 p").text(plusPriceTxt);
      } else {
        $(".esti_write_rightBox_03 p").text("0원");
      }
    };
    topPrice();
    RealTotalPrice();
  });

  
  function leftDeleteMenu(e){
    var LeftlistMenuTxt = $(e).parents(".esti_menu_check").siblings(".esti_menu_left").find(".esti_menu_txt").children("h3").text();


    swal({
        title: "선택한 메뉴를 삭제 하시겠습니까?", 
        text: LeftlistMenuTxt, 
        type: "warning",
        confirmButtonColor : '#31ba16',
        confirmButtonText : "삭제",
        cancelButtonText : "취소",
        showCancelButton: true
        })
          .then((result) => {
          if (result.value) {
            $(".esti_write_rightBox01_smallBox").each(function(){
            var rightListMenuTxt = $(this).find('.esti_right_menutxt').text();
            if(LeftlistMenuTxt == rightListMenuTxt){
              $(this).remove();
              $(e).hide();
              $(e).siblings(".esti_menu_checkBtn").show();
            }
          });

          $(".self_seti_wr_ul").each(function(){
            var estiWriteSecondMenu = $(this).find(".self_esti_menuname").val();
            if(LeftlistMenuTxt == estiWriteSecondMenu){
              $(this).remove();
            }
          });

          var v = $("#sel").val();
          var numberV = Number(v);

          function topPrice(){
            var sum = 0;
            $(".esti_write_lineTotalPrice").each(function(){
              var numIndiPriceTxt = $(this).text();
              var regex = /[^0-9]/g;
              var numIndiPrice = numIndiPriceTxt.replace(regex, "");
              sum += parseInt(numIndiPrice);
            });
            plusPrice(sum);
          };

          function plusPrice(sumP){
            if(sumP >= 700000 && sumP < 1000000){
              var num = 3;
            } else if(sumP >= 1000000){
              var num = 4;
            } else {
              var num = 2;
            }
            plusTimePrice(num);
          }

          function plusTimePrice(n){
            if(numberV > n){
              var plustime = numberV - n;
              var plusPrice = plustime * 30000;
              var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
              $(".esti_write_rightBox_03 p").text(plusPriceTxt);
            } else {
              $(".esti_write_rightBox_03 p").text("0원");
            }
          };
          topPrice();
          RealTotalPrice();



          swal({
            type: "success",
            title : '삭제 되었습니다.',
            text : '',
            confirmButtonColor : '#31ba16',
          })
          } 
    })






    // if(!confirm("선택한 메뉴를 삭제 하시겠습니까?")){
    //   return false;
    // } else {
    //   $(".esti_write_rightBox01_smallBox").each(function(){
    //     var rightListMenuTxt = $(this).find('.esti_right_menutxt').text();
    //     if(LeftlistMenuTxt == rightListMenuTxt){
    //       $(this).remove();
    //       $(e).hide();
    //       $(e).siblings(".esti_menu_checkBtn").show();
    //       RealTotalPrice();
    //     }
    //   });
    // }

    // $(".esti_write_rightBox01_smallBox").each(function(){
    //     var rightListMenuTxt = $(this).find('.esti_right_menutxt').text();
    //     if(LeftlistMenuTxt == rightListMenuTxt){
    //       $(this).remove();
    //       $(e).hide();
    //       $(e).siblings(".esti_menu_checkBtn").show();
    //       RealTotalPrice();
    //     }
    //   });

  }
  

  $(".menu_select_modal_bg , .menu_select_modal_closeBtn, .menu_modal_btn").click(function(){
    $(".menu_select_modal1").hide();
  });
  $(".menu_select_modal_bg2 , .menu_select_modal_closeBtn2, .menu_modal_btn2").click(function(){
    $(".menu_select_modal2").hide();
  });
  // modal
  
  function rightLinePrice(obj){
    var rightLineIndiPriceTxt = $(obj).parent(".esti_right_menuCount").siblings('.right_indi_price').val();
    var count = $(obj).val();
    if(count < 50){
      // alert("최소 수량은 50개입니다.");
      swal({
            title : '최소 수량은 50개입니다.',
            text : '',
            confirmButtonColor : '#31ba16',
          });
      $(obj).val("50");
      var rightLinePrice = rightLineIndiPriceTxt * 50;
      var rightLinePriceTxt = rightLinePrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";

      $(obj).parents(".esti_write_linebox_left").siblings(".esti_write_linebox_right").find(".esti_write_lineTotalPrice").text(rightLinePriceTxt);
      RealTotalPrice();
      return false;
    }else if(count >= 50000){
      swal({
        title : '최대 주문수량을 초과하였습니다.',
        text : '',
        confirmButtonColor : '#31ba16',
      });
      $(obj).val("50");
    } else {
      var rightLinePrice = rightLineIndiPriceTxt * count;
      var rightLinePriceTxt = rightLinePrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";

      $(obj).parents(".esti_write_linebox_left").siblings(".esti_write_linebox_right").find(".esti_write_lineTotalPrice").text(rightLinePriceTxt);
    }

    var v = $("#sel").val();
    var numberV = Number(v);

    function topPrice(){
      var sum = 0;
      $(".esti_write_lineTotalPrice").each(function(){
        var numIndiPriceTxt = $(this).text();
        var regex = /[^0-9]/g;
        var numIndiPrice = numIndiPriceTxt.replace(regex, "");
        sum += parseInt(numIndiPrice);
      });
      plusPrice(sum);
    };

    function plusPrice(sumP){
      if(sumP >= 700000 && sumP < 1000000){
        var num = 3;
      } else if(sumP >= 1000000){
        var num = 4;
      } else {
        var num = 2;
      }
      plusTimePrice(num);
    }

    function plusTimePrice(n){
      if(numberV > n){
        var plustime = numberV - n;
        var plusPrice = plustime * 30000;
        var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
        $(".esti_write_rightBox_03 p").text(plusPriceTxt);
      } else {
        $(".esti_write_rightBox_03 p").text("0원");
      }
    };
    RealTotalPrice();
    topPrice();
  }

  function rightMinus(e){
    minus(e);
  }
  function rightPlus(e){
    plus(e);
  }

  $(function() {
    $("#sel").change(function() {
      var v = $("#sel").val();
      var numberV = Number(v);

      function topPrice(){
        var sum = 0;
        $(".esti_write_lineTotalPrice").each(function(){
          var numIndiPriceTxt = $(this).text();
          var regex = /[^0-9]/g;
          var numIndiPrice = numIndiPriceTxt.replace(regex, "");
          sum += parseInt(numIndiPrice);
        });
        plusPrice(sum);
      };

      function plusPrice(sumP){
        if(sumP >= 700000 && sumP < 1000000){
          var num = 3;
        } else if(sumP >= 1000000){
          var num = 4;
        } else {
          var num = 2;
        }
        plusTimePrice(num);
      }


      function plusTimePrice(n){
        if(numberV > n){
        var plustime = numberV - n;
        var plusPrice = plustime * 30000;
        var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
          $(".esti_write_rightBox_03 p").text(plusPriceTxt);
        } else {
          $(".esti_write_rightBox_03 p").text("0원");
        }
      };
      topPrice();
      RealTotalPrice();
    });
  });



  function RealTotalPrice(){
    var sum = 0;
    $(".indiPrice").each(function(){
      var numIndiPriceTxt = $(this).text();
      var regex = /[^0-9]/g;
      var numIndiPrice = numIndiPriceTxt.replace(regex, "");
      sum += parseInt(numIndiPrice);
    })
    var sumTxt = sum.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
    $(".esti_write_rightBox_04 p").text(sumTxt);

    var plusPirce = $(".esti_write_rightBox_03 p").text();
    $(".wr_1_9_input").val(plusPirce);
    $(".wr_1_10_input").val(sumTxt);
  }


  function estiRightDelete(e){
    var $input = $(e).siblings(".estiRightDeleteInput");
    var rightMenuTxt = $(e).siblings(".esti_right_menutxt").text();
    var selectPriceTxt = $(e).parents(".esti_write_linebox_left").siblings(".esti_write_linebox_right").find(".esti_write_lineTotalPrice").text();
    var regex = /[^0-9]/g;
    var selectPrice = selectPriceTxt.replace(regex, "");
    if($input.is(":checked")){
      swal({
        title: "선택한 메뉴를 삭제 하시겠습니까?", 
        text: rightMenuTxt, 
        type: "warning",
        confirmButtonColor : '#31ba16',
        confirmButtonText : "삭제",
        cancelButtonText : "취소",
        showCancelButton: true
        })
          .then((result) => {
            if (result.value) {
              sum = 0;
              $(".esti_write_linebox").each(function(){
                var menuPriceTxt = $(this).find(".esti_write_lineTotalPrice").text();
                var regex = /[^0-9]/g;
                var menuPrice = menuPriceTxt.replace(regex, "");
                sum += parseInt(menuPrice);
              });

              if(selectPrice == 20000){
                selectPrice = 0;
              }

              var sumPlusSelect = Number(sum) - Number(selectPrice);
              
              if(sumPlusSelect >= 500000 || step == 1){
                $(".esti_menu_line").each(function(){
                  var listMenuTxt = $(this).find(".esti_menu_txt").children("h3").text();
                  if(listMenuTxt == rightMenuTxt){
                    $(this).find(".esti_menu_checkBtn").show();
                    $(this).find(".esti_menu_deletBtn").hide();
                  }
                });
                $(".self_seti_wr_ul").each(function(){
                  var estiWriteSecondMenu = $(this).find(".self_esti_menuname").val();
                  if(rightMenuTxt == estiWriteSecondMenu){
                    $(this).remove();
                  }
                });
                $(e).parents(".esti_write_rightBox01_smallBox").remove();
                
                var v = $("#sel").val();
                var numberV = Number(v);

                function topPrice(){
                  var sum = 0;
                  $(".esti_write_lineTotalPrice").each(function(){
                    var numIndiPriceTxt = $(this).text();
                    var regex = /[^0-9]/g;
                    var numIndiPrice = numIndiPriceTxt.replace(regex, "");
                    sum += parseInt(numIndiPrice);
                  });
                  plusPrice(sum);
                };

                function plusPrice(sumP){
                  if(sumP >= 700000 && sumP < 1000000){
                    var num = 3;
                  } else if(sumP >= 1000000){
                    var num = 4;
                  } else {
                    var num = 2;
                  }
                  plusTimePrice(num);
                }

                function plusTimePrice(n){
                  if(numberV > n){
                    var plustime = numberV - n;
                    var plusPrice = plustime * 30000;
                    var plusPriceTxt = plusPrice.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "원";
                    $(".esti_write_rightBox_03 p").text(plusPriceTxt);
                  } else {
                    $(".esti_write_rightBox_03 p").text("0원");
                  }
                };
                topPrice();
                RealTotalPrice();

                
                swal({
                  type: "success",
                  title : '삭제 되었습니다.',
                  text : '',
                  confirmButtonColor : '#31ba16',
                })
              } else {
                swal({
                  title : '최소 메뉴 주문금액은 50만원 입니다.',
                  text : '',
                  confirmButtonColor : '#31ba16',
                });
                $($input).prop('checked',true);
                return false;
              }
            } else if (result.dismiss === 'cancel') {
              $($input).prop('checked',true);
              return false;
            }
        })
    }

    // if(!confirm("선택한 메뉴를 삭제 하시겠습니까?")){
    //   return false;
    // } else {
    //   if($input.is(":checked")){
    //   $(".esti_menu_line").each(function(){
    //     var listMenuTxt = $(this).find(".esti_menu_txt").children("h3").text();
    //     if(listMenuTxt == rightMenuTxt){
    //       $(this).find(".esti_menu_checkBtn").show();
    //       $(this).find(".esti_menu_deletBtn").hide();
    //     }
    //   })
    //   $(e).parents(".esti_write_rightBox01_smallBox").remove();
    //   RealTotalPrice();
    // }
    // }

    // if($input.is(":checked")){
    //   $(".esti_menu_line").each(function(){
    //     var listMenuTxt = $(this).find(".esti_menu_txt").children("h3").text();
    //     if(listMenuTxt == rightMenuTxt){
    //       $(this).find(".esti_menu_checkBtn").show();
    //       $(this).find(".esti_menu_deletBtn").hide();
    //     }
    //   })
    //   $(e).parents(".esti_write_rightBox01_smallBox").remove();
    //   RealTotalPrice();
    // }

    

   
  }
</script>


<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("esti_tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>

<script>
  history.pushState(null, null, "#Back");

  $(window).bind("hashchange", function () {
    // history.pushState(null, null, "#Back");

    swal({
        title: "이 페이지에서 나가시겠습니까?", 
        text : "입력하신 정보가 사라집니다!",
        type: "warning",
        confirmButtonText: "확인",
        cancelButtonText : "취소",
        confirmButtonColor : '#DB4455',
        showCancelButton: true
        })
          .then((result) => {
            if (result.value) {
              history.pushState(null, null, null);
              window.location.href = '/';
            } else if (result.dismiss === 'cancel') {
              history.pushState(null, null, "#Back");
            }
        })


    

  });
</script>
