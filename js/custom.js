jQuery(document).ready(function($) {


    /* =========================================
    ================ Drop Down Menu  ==========
    =============================================*/

    $("ul#primary-menu li").hover(function() {
        var isHovered = $(this).is(":hover");
        if (isHovered) {
            $(this).children("ul").stop().slideDown(300);
        } else {
            $(this).children("ul").stop().slideUp(300);
        }
    });


    // Mobile Menu toggle

    // Toggle Menu
    $(function() {
        popupSet();
    });

    function popupSet() {
        $(".btn_area").find(".slide_top").each(function() {
            $(this).click(function() {
                var popupH = $("#matelpopup").outerWidth(true);

                if ($(this).hasClass("slide_top")) {
                    if (!$("#matelpopup").hasClass("open")) {
                        $("#matelpopup").addClass("open");
                        $("#matelpopup").not(":animated").animate({
                            "right": -popupH,
                            "top": 0
                        }, 100, function() {
                            $(this).show().not(":animated").animate({
                                "right": 0
                            }, 300);
                        });
                    } else {
                        $("#matelpopup").removeClass("open");
                        $("#matelpopup").not(":animated").animate({
                            "right": -popupH,
                            "top": 0
                        }, 300, function() {
                            $(this).hide();
                        });
                    }
                }
            });
        });
    }







});