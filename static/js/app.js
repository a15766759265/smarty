
var box_swipe1 = $(".box_swipe ul li").index();
for (var i = 0; i < box_swipe1; i++) {
    $(".banner_page").append("<a href=\"#\" class=\"b_p_link\"></a>");
}
$(function () {
    new Swipe(document.getElementById('banner_box'), {
        speed: 500,
        auto: 3000,
        callback: function () {
            var lis = $(this.element).next(".banner_page").children();
            lis.removeClass("banner_page_clo").eq(this.index).addClass("banner_page_clo");
        }
    });
});
$(document).ready(function () {
  
    $(".mall_quantity_btn .mall_quantity_cancel").live("click", function () {
        $(".wap_bg").hide();
        $(".mall_quantity").hide();
    });
    $(".mall_tips_open").live("click", function () {
        $(this).text("收起").removeClass("mall_tips_open").addClass("mall_tips_close").parent().find(".mall_tips_text").show();
    });
    $(".mall_tips_close").live("click", function () {
        $(this).text("查看门票说明").removeClass("mall_tips_close").addClass("mall_tips_open").parent().find(".mall_tips_text").hide();
    });
});