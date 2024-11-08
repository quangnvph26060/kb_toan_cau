window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "AW-16667317286", {
    allow_enhanced_conversions: true,
});

// ------------------------------------

window.ladi_viewport = function (b) {
    var a = document;
    b = b ? b : "innerWidth";
    var c = window[b];
    var d = true;
    if (
        typeof window.ladi_is_desktop == "undefined" ||
        window.ladi_is_desktop == undefined
    ) {
        window.ladi_is_desktop = !d;
    }
    var e = 960;
    var f = 420;
    var g = "";
    if (!d) {
        g = "width=" + e + ",user-scalable=no,initial-scale=1.0";
    } else {
        var h = 1;
        var i = f;
        if (i != c) {
            h = c / i;
        }
        g =
            "width=" +
            i +
            ",user-scalable=no,initial-scale=" +
            h +
            ",minimum-scale=" +
            h +
            ",maximum-scale=" +
            h;
    }
    var j = a.getElementById("viewport");
    if (!j) {
        j = a.createElement("meta");
        j.id = "viewport";
        j.name = "viewport";
        a.head.appendChild(j);
    }
    j.setAttribute("content", g);
};
window.ladi_viewport();
window.ladi_fbq_data = [];
window.ladi_fbq = function () {
    window.ladi_fbq_data.push(arguments);
};
window.ladi_ttq_data = [];
window.ladi_ttq = function () {
    window.ladi_ttq_data.push(arguments);
};

// -----------------------------------------------------

window.lazyload_run = function (dom, is_first, check_dom_rect) {
    if (
        check_dom_rect &&
        (document.body.clientWidth <= 0 || document.body.clientheight <= 0)
    ) {
        return setTimeout(function () {
            window.lazyload_run(dom, is_first, check_dom_rect);
        }, 1);
    }
    var style_lazyload = document.getElementById("style_lazyload");
    var list_element_lazyload = dom.querySelectorAll(
        "body.lazyload .ladi-overlay, body.lazyload .ladi-box, body.lazyload .ladi-button-background, body.lazyload .ladi-collection-item, body.lazyload .ladi-countdown-background, body.lazyload .ladi-form-item-background, body.lazyload .ladi-form-label-container .ladi-form-label-item.image, body.lazyload .ladi-frame-background, body.lazyload .ladi-gallery-view-item, body.lazyload .ladi-gallery-control-item, body.lazyload .ladi-headline, body.lazyload .ladi-image-background, body.lazyload .ladi-image-compare, body.lazyload .ladi-list-paragraph ul li, body.lazyload .ladi-section-background, body.lazyload .ladi-survey-option-background, body.lazyload .ladi-survey-option-image, body.lazyload .ladi-tabs-background, body.lazyload .ladi-video-background, body.lazyload .ladi-banner, body.lazyload .ladi-spin-lucky-screen, body.lazyload .ladi-spin-lucky-start"
    );
    var docEventScroll = window;
    for (var i = 0; i < list_element_lazyload.length; i++) {
        var rect = list_element_lazyload[i].getBoundingClientRect();
        if (
            rect.x == "undefined" ||
            rect.x == undefined ||
            rect.y == "undefined" ||
            rect.y == undefined
        ) {
            rect.x = rect.left;
            rect.y = rect.top;
        }
        var offset_top = rect.y + window.scrollY;
        if (
            offset_top >= window.scrollY + window.innerHeight ||
            window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight
        ) {
            list_element_lazyload[i].classList.add("ladi-lazyload");
        }
    }
    if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {
        style_lazyload.parentElement.removeChild(style_lazyload);
    }
    document.body.classList.remove("lazyload");
    var currentScrollY = window.scrollY;
    var stopLazyload = function (event) {
        if (event.type == "scroll" && window.scrollY == currentScrollY) {
            currentScrollY = -1;
            return;
        }
        docEventScroll.removeEventListener("scroll", stopLazyload);
        list_element_lazyload =
            document.getElementsByClassName("ladi-lazyload");
        while (list_element_lazyload.length > 0) {
            list_element_lazyload[0].classList.remove("ladi-lazyload");
        }
    };
    if (is_first) {
        var scrollEventPassive = null;
        try {
            var opts = Object.defineProperty({}, "passive", {
                get: function () {
                    scrollEventPassive = {
                        passive: true,
                    };
                },
            });
            window.addEventListener("testPassive", null, opts);
            window.removeEventListener("testPassive", null, opts);
        } catch (e) {}
        docEventScroll.addEventListener(
            "scroll",
            stopLazyload,
            scrollEventPassive
        );
    }
    return dom;
};
window.lazyload_run(document, true, true);

// --------------------------------------------------

(function () {
    var run = function () {
        if (
            typeof window.LadiPageScript == "undefined" ||
            typeof window.ladi == "undefined" ||
            window.ladi == undefined
        ) {
            setTimeout(run, 100);
            return;
        }
        window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
        window.LadiPageScript.runtime.ladipage_id = "66c9a65e40c3bb0012b4b71d";
        window.LadiPageScript.runtime.publish_platform = "LADIPAGEDNS";
        window.LadiPageScript.runtime.is_mobile_only = true;
        window.LadiPageScript.runtime.version = "1730427555274";
        window.LadiPageScript.runtime.cdn_url =
            "https://w.ladicdn.com/v4/source/";
        window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = [
            "chuabenhdalieumaia.vn",
        ];
        window.LadiPageScript.runtime.DOMAIN_FREE = [
            "preview.ldpdemo.com",
            "ldp.page",
        ];
        window.LadiPageScript.runtime.bodyFontSize = 12;
        window.LadiPageScript.runtime.store_id = "5e69a8046e15317a387252bb";
        window.LadiPageScript.runtime.time_zone = 7;
        window.LadiPageScript.runtime.currency = "VND";
        window.LadiPageScript.runtime.tracking_page = "@@tracking_page";
        window.LadiPageScript.runtime.convert_replace_str = true;
        window.LadiPageScript.runtime.desktop_width = 960;
        window.LadiPageScript.runtime.mobile_width = 420;
        window.LadiPageScript.runtime.formdata = true;
        window.LadiPageScript.runtime.tracking_button_click = true;
        window.LadiPageScript.runtime.publish_time = 1730689756508;
        window.LadiPageScript.runtime.lang = "vi";
        window.LadiPageScript.run(true);
        window.LadiPageScript.runEventScroll();
    };
    run();
})();
