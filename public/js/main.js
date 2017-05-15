/*global $*/
// ボタンの表示・非表示を切り替える設定
function updateButton() {
    if ($(this).scrollTop() >= 300) {   //300px以上スクロールされたときの設定
        // ボタンを表示
        $(".back-to-top").fadeIn();
    } else {
        // ボタン非表示
        $(".back-to-top").fadeOut();
    }
}

$(document).ready(function() {
    updateButton();
    // スクロールさせる度にupdateButtonを実行
    $(window).scroll(updateButton);
    
    // ボタンをクリックしたらページトップにスクロールする
    $(".back-to-top").click(function() {
        $("html, body").animate({
            scrollTop: 0,
        }, 600);
        
        // ボタンのhrefに移動しない設定
        return false;
    });
});
