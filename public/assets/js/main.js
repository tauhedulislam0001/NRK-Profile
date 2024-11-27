    /*===================================
    =           Menu Activeion          =
    ===================================*/
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf("/") + 1);
    var hash = window.location.hash.substr(1);
    if ((curpage == "" || curpage == "/" || curpage == "admin") && hash == "") {
        //$("nav .navbar-nav > li:first-child").addClass("active");
    } else {
        $(".navbar-nav li").each(function () {
            $(this).removeClass("active");
        });
        if (hash != "")
            $(".navbar-nav li a[href*='" + hash + "']")
                .parents("li")
                .addClass("active");
        else
            $(".navbar-nav li a[href*='" + curpage + "']")
                .parents("li")
                .addClass("active");
    }

    /*===================================
    =           Banner slider         =
    ===================================*/
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
      });