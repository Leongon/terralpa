/**
 * fullPage Pure Javascript v.0.0.9 (Alpha) - Not support given until Beta version.
 * https://github.com/alvarotrigo/fullPage.js
 * MIT licensed
 *
 * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo
 */
(function (n, m, C, v, e) { "function" === typeof define && define.amd ? define(function () { n.fullpage = v(m, C); return n.fullpage }) : "object" === typeof exports ? module.exports = v(m, C) : m.fullpage = v(m, C) })(this, window, document, function (n, m, C) {
    function v(a, b) { for (var d in b) b.hasOwnProperty(d) && null !== d && (a.style[d] = b[d]); return a } function e(a, b) { b = b || m; return b.querySelector(a) } function p(a, b) { b = b || m; return b.querySelectorAll(a) } function q(a) { for (var b = 0; a = a.previousSibling;)3 == a.nodeType && /^\s*$/.test(a.data) || b++; return b }
    function ua(a, b) { a.style.display = "undefined" !== typeof b ? b ? "block" : "none" : "block" == a.style.display ? "none" : "block"; return a } function w(a, b) { return !!a.className.match(new RegExp("(\\s|^)" + b + "(\\s|$)")) } function B(a, b) { a && w(a, b) && (a.className = a.className.replace(new RegExp("(\\s|^)" + b + "(\\s|$)"), "")) } function t(a, b) { a && !w(a, b) && (a.className += " " + b) } function I(a, b) { return a && (b(a) ? a : I(a.parentNode, b)) } function R() { return "innerHeight" in n ? n.innerHeight : m.documentElement.offsetHeight } function J(a) {
        a.preventDefault ?
        a.preventDefault() : a.returnValue = !1
    } function z(a) { var b = {}; return a && "[object Function]" === b.toString.call(a) } function K(a, b, d) { b = b.split(" "); for (var c = 0, e = b.length; c < e; c++)m.addEventListener ? a.addEventListener(b[c], d, !1) : a.attachEvent(b[c], d, !1) } function ea(a, b, d, c) { var f = Sa(a), e = b - f, h = 0; S = !0; var k = function () { if (S) { var b; h += 20; b = Math.easeInOutCubic(h, f, e, d); va(a, b); h < d ? setTimeout(k, 20) : "undefined" !== typeof c && c() } else h < d && c() }; k() } function fa() {
        var a = m.documentElement; return (n.pageYOffset || a.scrollTop) -
            (a.clientTop || 0)
    } function wa(a) { for (a = a.nextSibling; a && 1 != a.nodeType;)a = a.nextSibling; return a } function xa(a) { for (a = a.previousSibling; a && 1 != a.nodeType;)a = a.previousSibling; return a } function Sa(a) { return a.self != n && w(a, "fp-slides") ? a.scrollLeft : !c.autoScrolling || c.scrollBar ? fa() : a.offsetTop } function va(a, b) { !c.autoScrolling || c.scrollBar || a.self != n && w(a, "fp-slides") ? a.self != n && w(a, "fp-slides") ? a.scrollLeft = b : a.scrollTo(0, b) : a.style.top = b + "px" } function ya(a, b) {
        T("autoScrolling", a, b); var d = e(".fp-section.active");
        c.autoScrolling && !c.scrollBar ? (v(m.body, { overflow: "hidden", height: "100%" }), v(m.getElementsByTagName("html")[0], { overflow: "hidden", height: "100%" }), ga(c.recordHistory, "internal"), v(r, { "-ms-touch-action": "none", "touch-action": "none" }), d && L(d.offsetTop)) : (v(m.body, { overflow: "visible", height: "100%" }), v(m.getElementsByTagName("html")[0], { overflow: "visible", height: "100%" }), ga(!1, "internal"), v(r, { "-ms-touch-action": "", "touch-action": "" }), L(0), d = U(d.offsetTop), d.element.scrollTo(0, d.options))
    } function ga(a,
        b) { T("recordHistory", a, b) } function M(a, b) { T("scrollingSpeed", a, b) } function V() { var a = xa(e(".fp-section.active")); a && A(a, null, !0) } function ha() { var a = wa(e(".fp-section.active")); a && A(a, null, !1) } function W(a, b) { var d = za(a); "undefined" !== typeof b ? ia(a, b) : d && A(d) } function X() { Aa("next") } function Y() { Aa("prev") } function Ba(a) {
            if (!w(r, "fp-destroyed")) {
                u = !0; Ca = R(); for (var b = p(".fp-section"), d = 0; d < b.length; ++d) { var f = b[d], l = e(".fp-slides", f), f = p(".fp-slide", f); l && 1 < f.length && N(l, e(".fp-slide.active", l)) } b =
                    e(".fp-section.active"); q(b) && L(b.offsetTop); u = !1; z(c.afterResize) && a && c.afterResize.call(r); z(c.afterReBuild) && !a && c.afterReBuild.call(r)
            }
        } function Ta() {
            var a = m.createElement("div"); a.setAttribute("id", "fp-nav"); var b = m.createElement("ul"); a.appendChild(b); m.body.appendChild(a); x = e("#fp-nav"); x.style.color = c.navigationColor; t(x, c.navigationPosition); c.showActiveTooltip && t(x, "fp-show-active"); a = ""; for (b = 0; b < p(".fp-section").length; b++) {
                var d = ""; c.anchors.length && (d = c.anchors[b]); a = a + '<li><a href="#' +
                    d + '"><span></span></a>'; d = c.navigationTooltips[b]; typeof d !== C && "" !== d && (a += '<div class="fp-tooltip ' + c.navigationPosition + '">' + d + "</div>"); a += "</li>"
            } b = e("ul", x); b.innerHTML += a; a = p(".fp-slidesNav a"); for (b = 0; b < a.length; b++)K(a[b], "click onclick touchstart", function (a) { a = n.event || a || a.originalEvent; J(a); a = q(this.parentNode); A(p(".fp-section")[a], null, !1) })
        } function Ua() {
            var a; if (!c.autoScrolling || c.scrollBar) {
                for (var b = fa(), d = 0, f = Math.abs(b - p(".fp-section")[0].offsetTop), l = p(".fp-section"), g = 0; g <
                    l.length; ++g) { var h = Math.abs(b - l[g].offsetTop); h < f && (d = g, f = h) } a = p(".fp-section")[d]
            } if (!c.autoScrolling || c.scrollBar) {
                if (!w(a, "active")) {
                    ja = !0; b = e(".fp-section.active"); d = q(b) + 1; f = Da(a); l = a.getAttribute("data-anchor"); g = q(a) + 1; if (h = e(".fp-slide.active", a)) var k = h.getAttribute("data-anchor"), m = q(h); E && (B(b, "active"), t(a, "active"), z(c.onLeave) && c.onLeave.call(b, d, g, f), z(c.afterLoad) && c.afterLoad.call(a, l, g), Z(l, 0), c.anchors.length && (F = l, ka(m, k, l, g))); clearTimeout(Ea); Ea = setTimeout(function () { ja = !1 },
                        100)
                } c.fitToSection && (clearTimeout(Fa), Fa = setTimeout(function () { if (E && !c.autoScrolling || c.scrollBar) q(e(".fp-section.active")) == q(a) && (u = !0), A(a), u = !1 }, c.fitToSectionDelay))
            }
        } function aa(a) { "down" == a ? ha() : V() } function la(a) {
            var b = n.event || a || a.originalEvent; ma(b) && (c.autoScrolling && J(a), a = e(".fp-section.active"), a = p(".fp-slides", a), E && !G && (b = Ga(b), O = b.y, ba = b.x, a && Math.abs(ca - ba) > Math.abs(P - O) ? Math.abs(ca - ba) > ("innerWidth" in n ? n.innerWidth : m.documentElement.offsetWidth) / 100 * c.touchSensitivity && (ca >
                ba ? X() : Y()) : c.autoScrolling && Math.abs(P - O) > R() / 100 * c.touchSensitivity && (P > O ? aa("down") : O > P && aa("up"))))
        } function ma(a) { return "undefined" === typeof a.pointerType || "mouse" != a.pointerType } function na(a) { a = n.event || a || a.originalEvent; c.fitToSection && (S = !1); ma(a) && (a = Ga(a), P = a.y, ca = a.x) } function Ha(a, b) { for (var d = 0, c = a.slice(Math.max(a.length - b, 1)), e = 0; e < c.length; e++)d += c[e]; return Math.ceil(d / b) } function Va(a) {
            var b = (new Date).getTime(); if (c.autoScrolling) {
                a = n.event || a || a.originalEvent; var d = a.wheelDelta ||
                    -a.deltaY || -a.detail, f = Math.max(-1, Math.min(1, d)); 149 < H.length && H.shift(); H.push(Math.abs(d)); c.scrollBar && J(a); a = b - Ia; Ia = b; 200 < a && (H = []); E && (b = Ha(H, 10), a = Ha(H, 70), b >= a && (0 > f ? aa("down") : aa("up"))); return !1
            } c.fitToSection && (S = !1)
        } function Aa(a) {
            var b = e(".fp-section.active"); if ((b = e(".fp-slides", b)) && !G) {
                var d = e(".fp-slide.active", b), f; f = "prev" === a ? xa(d) : wa(d); if (!f) {
                    if (!c.loopHorizontal) return; f = d.parentNode.firstChild; for (var l = []; f; f = f.nextSibling)1 == f.nodeType && f != d && l.push(f); f = "prev" === a ? l[l.length -
                        1] : l[0]
                } G = !0; N(b, f)
            }
        } function A(a, b, d) {
            if (null !== a && (b = { element: a, callback: b, isMovementUp: d, dtop: a.offsetTop, yMovement: Da(a), anchorLink: a.getAttribute("data-anchor"), sectionIndex: q(a), activeSlide: e(".fp-slide.active", a), activeSection: e(".fp-section.active"), leavingSection: q(e(".fp-section.active")) + 1, localIsResizing: u }, !(q(b.activeSection) == b.sectionIndex && !u || c.scrollBar && fa() === b.dtop))) {
                if (b.activeSlide) var f = b.activeSlide.getAttribute("data-anchor"), l = q(b.activeSlide); d = p(".fp-section"); for (var g =
                    0; g < d.length; g++)B(d[g], "active"); t(a, "active"); E = !1; ka(l, f, b.anchorLink, b.sectionIndex); z(c.onLeave) && !b.localIsResizing && c.onLeave.call(b.activeSection, b.leavingSection, b.sectionIndex + 1, b.yMovement); Wa(b); F = b.anchorLink; Z(b.anchorLink, b.sectionIndex)
            }
        } function Wa(a) { if (c.css3 && c.autoScrolling && !c.scrollBar) Ja("translate3d(0px, -" + a.dtop + "px, 0px)", !0), c.scrollingSpeed ? setTimeout(function () { oa(a) }, c.scrollingSpeed) : oa(a); else { var b = U(a.dtop); ea(b.element, b.options, c.scrollingSpeed, function () { oa(a) }) } }
    function U(a) { var b = {}; c.autoScrolling && !c.scrollBar ? (b.options = -a, b.element = e(".fullpage-wrapper")) : (b.options = a, b.element = n); return b } function oa(a) { z(c.afterLoad) && !a.localIsResizing && c.afterLoad.call(a.element, a.anchorLink, a.sectionIndex + 1); E = !0; z(a.callback) && a.callback.call(this) } function Xa() { var a = n.location.hash.replace("#", "").split("/"), b = a[0], a = a[1]; b && ia(b, a) } function Ya(a) { var b = this; b.self == n && (b = a.target || a.srcElement); w(b, "fp-prev") ? Y() : X() } function Ka() {
        if (!ja) {
            var a = n.location.hash.replace("#",
                "").split("/"), b = a[0], a = a[1]; if (b.length) { var d = "undefined" === typeof F, c = "undefined" === typeof F && "undefined" === typeof a && !G; (b && b !== F && !d || c || !G && pa != a) && ia(b, a) }
        }
    } function N(a, b) {
        var d = q(b), f = I(a, function (a) { return w(a, "fp-section") }), l = q(f), g = f.getAttribute("data-anchor"), h = e(".fp-slidesNav", f), k = La(b), m = u; if (c.onSlideLeave) { var n = e(".fp-slide.active", f), r = q(n), v; v = r == d ? "none" : r > d ? "left" : "right"; m || "none" === v || z(c.onSlideLeave) && c.onSlideLeave.call(n, g, l + 1, r, v, d) } n = p(".fp-slide", f); for (r = 0; r < n.length; r++)B(n[r],
            "active"); t(b, "active"); !c.loopHorizontal && c.controlArrows && (ua(e(".fp-controlArrow.fp-prev", f), 0 !== d), ua(e(".fp-controlArrow.fp-next", f), !b.is(":last-child"))); w(f, "active") && ka(d, k, g, l); var x = function () { m || z(c.afterSlideLoad) && c.afterSlideLoad.call(b, g, l + 1, k, d); G = !1 }; c.css3 ? (f = "translate3d(-" + Math.round(b.offsetLeft) + "px, 0px, 0px)", n = e(".fp-slidesContainer", a), Ma(n, 0 < c.scrollingSpeed), Na(n, f), setTimeout(function () { x() }, c.scrollingSpeed, c.easing)) : ea(a, Math.round(b.offsetLeft), c.scrollingSpeed,
                function () { x() }); c.slidesNavigation && (B(e(".active", h), "active"), h = p("li", h)[d], h = e("a", h), t(h, "active"))
    } function Za() { if (qa) { if ("text" !== m.activeElement.getAttribute("type")) { var a = R(); Math.abs(a - ra) > 20 * Math.max(ra, a) / 100 && (Ba(!0), ra = a) } } else clearTimeout(Oa), Oa = setTimeout(function () { Ba(!0) }, 350) } function Ma(a) { var b = "all " + c.scrollingSpeed + "ms " + c.easingcss3; B(a, "fp-notransition"); v(a, { "-webkit-transition": b, transition: b }); return a } function Z(a, b) {
        if (c.menu) {
            var d = e(c.menu); d && (B(e(".active", d),
                "active"), t(e('[data-menuanchor="' + a + '"]', d), "active"))
        } c.navigation && (B(e(".active", x), "active"), a ? t(e('a[href="#' + a + '"]', x), "active") : (d = p("li", x)[b], t(e("a", d), "active")))
    } function Da(a) { var b = q(e(".fp-section.active")); a = q(a); return b == a ? "none" : b > a ? "up" : "down" } function Ja(a, b) { b ? Ma(r) : t(r, "fp-notransition"); Na(r, a); setTimeout(function () { B(r, "fp-notransition") }, 10) } function za(a) { var b = e('.fp-section[data-anchor="' + a + '"]'); b || (b = p(".fp-section")[a - 1]); return b } function ia(a, b) {
        var d = za(decodeURI(a));
        "undefined" === typeof b && (b = 0); a === F || w(d, "active") ? Pa(d, b) : A(d, function () { Pa(d, b) })
    } function Pa(a, b) { if ("undefined" !== typeof b) { var d = e(".fp-slides", a), c; c = e(".fp-slides", a); var l = e('.fp-slide[data-anchor="' + b + '"]', c); c && !l && (l = p(".fp-slide", c)[b]); (c = l) && N(d, c) } } function ka(a, b, d, f) { f = ""; c.anchors.length && (a ? ("undefined" !== typeof d && (f = d), "undefined" === typeof b && (b = a), pa = b, Qa(f + "/" + b)) : ("undefined" !== typeof a && (pa = b), Qa(d))); sa() } function Qa(a) {
        if (c.recordHistory) location.hash = a; else if (qa || ta) history.replaceState(C,
            C, "#" + a); else { var b = n.location.href.split("#")[0]; n.location.replace(b + "#" + a) }
    } function La(a) { var b = a.getAttribute("data-anchor"); a = q(a); b || (b = a); return b } function sa(a) { a = e(".fp-section.active"); var b = e(".fp-slide.active", a), d = a.getAttribute("data-anchor"); a = q(a); a = String(a); c.anchors.length && (a = d); b && (b = La(b), a = a + "-" + b); a = a.replace("/", "-").replace("#", ""); m.body.className = m.body.className.replace(RegExp("\\b\\s?fp-viewing-[^\\s]+\\b", "g"), ""); t(m.body, "fp-viewing-" + a) } function da(a, b, c, f, e) {
        a.addEventListener ?
        (a.addEventListener(c, b, !1), "undefined" !== typeof e && a.addEventListener(e, b, !1)) : a.attachEvent(f, b)
    } function Ga(a) { var b = []; b.y = "undefined" !== typeof a.pageY && (a.pageY || a.pageX) ? a.pageY : a.touches[0].pageY; b.x = "undefined" !== typeof a.pageX && (a.pageY || a.pageX) ? a.pageX : a.touches[0].pageX; ta && ma(a) && (b.y = a.touches[0].pageY, b.x = a.touches[0].pageX); return b } function $a(a, b) {
        M(0, "internal"); "undefined" !== typeof b && (u = !0); var c = I(a, function (a) { return w(a, "fp-slides") }); N(c, a); "undefined" !== typeof b && (u = !1);
        M(Q.scrollingSpeed, "internal")
    } function L(a) { c.scrollBar ? (a = U(a), va(a.element, a.options, 0)) : c.css3 ? Ja("translate3d(0px, -" + a + "px, 0px)", !1) : r.style.top = -a + "px" } function Na(a, b) { v(a, { "-webkit-transform": b, "-moz-transform": b, "-ms-transform": b, transform: b }) } function T(a, b, d) { c[a] = b; "internal" !== d && (Q[a] = b) } var c, G = !1, qa = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/), ta = "ontouchstart" in n || 0 < navigator.msMaxTouchPoints ||
        navigator.maxTouchPoints, Ca = R(), u = !1, F, pa, E = !0, H = [], x, S, Q, r; Math.easeInOutCubic = function (a, b, c, e) { return 1 > (a /= e / 2) ? c / 2 * a * a * a + b : c / 2 * ((a -= 2) * a * a + 2) + b }; var Ea, Fa, ja = !1, P = 0, ca = 0, O = 0, ba = 0, Ia = (new Date).getTime(); m.addEventListener ? n.addEventListener("hashchange", Ka, !1) : n.attachEvent("onhashchange", Ka); var Ra; m.onkeydown = function (a) {
            clearTimeout(Ra); var b = m.activeElement.tagName; if ("SELECT" !== b && "INPUT" !== b && c.keyboardScrolling && c.autoScrolling) {
                a = n.event || a || a.originalEvent; for (var d = a.charCode || a.keyCode,
                    b = [40, 38, 32, 33, 34], e = 0; e < b.length; e++)b[e] == d && J(a); var l = a.shiftKey; Ra = setTimeout(function () { switch (d) { case 38: case 33: V(); break; case 32: if (l) { V(); break } case 40: case 34: ha(); break; case 36: W(1); break; case 35: W(p(".fp-section").length); break; case 37: Y(); break; case 39: X() } }, 150)
            }
        }; null !== e(".fp-slidesNav a") && K(e(".fp-slidesNav a"), "click onclick touchstart", function (a) {
            J(a); a = I(this, function (a) { return w(e1, "fp-section") }); a = e(".fp-slides", a); var b = I(this, function (a) { return "li" === a.tagName }), b = q(b),
                b = p(".fp-slide", a)[b]; N(a, b)
        }); var ra = Ca, Oa; return {
            initialize: function (a, b) {
                var d = {
                    menu: !1, anchors: [], navigation: !1, navigationPosition: "right", navigationColor: "#000", navigationTooltips: [], showActiveTooltip: !1, slidesNavigation: !1, slidesNavPosition: "bottom", scrollBar: !1, css3: !0, scrollingSpeed: 700, autoScrolling: !0, fitToSection: !0, fitToSectionDelay: 1E3, easingcss3: "ease", loopHorizontal: !0, touchSensitivity: 5, keyboardScrolling: !0, recordHistory: !0, controlArrows: !0, sectionSelector: ".section", slideSelector: ".slide",
                    afterLoad: null, onLeave: null, afterRender: null, afterResize: null, afterReBuild: null, afterSlideLoad: null, onSlideLeave: null
                }, f = b; "object" !== typeof f && (f = {}); for (var l in f) d.hasOwnProperty(l) && (d[l] = f[l]); c = d; d = c; if (null === d || "object" !== typeof d) Q = d; else { var f = d.constructor(), g; for (g in d) d.hasOwnProperty(g) && (f[g] = d[g]); Q = f } r = e(a); B(r, "fp-destroyed"); for (g = 0; g < c.anchors.length; g++)d = c.anchors[g], (m.getElementById("#" + d) || p('[name="' + d + '"]').length) && console && console.error && console.error("fullPage: data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE).");
                if (c.css3) { g = c; var d = m.createElement("p"), h, f = { webkitTransform: "-webkit-transform", OTransform: "-o-transform", msTransform: "-ms-transform", MozTransform: "-moz-transform", transform: "transform" }; m.body.insertBefore(d, null); for (var k in f) d.style[k] !== C && (d.style[k] = "translate3d(1px,1px,1px)", h = n.getComputedStyle(d).getPropertyValue(f[k])); m.body.removeChild(d); g.css3 = h !== C && 0 < h.length && "none" !== h } null !== r ? (v(r, { height: "100%", position: "relative" }), t(r, "fullpage-wrapper"), t(e("html"), "fp-enabled")) : console &&
                    console.error && console.error("fullPage: Error! Fullpage.js needs to be initialized with a selector. For example: fullpage('#fullpage');"); da(e(".fullpage-wrapper"), Va, "mousewheel", "onmousewheel", "wheel"); if (qa || ta) h = e(".fullpage-wrapper"), m.addEventListener && (k = n.PointerEvent ? { down: "pointerdown", move: "pointermove" } : { down: "MSPointerDown", move: "MSPointerMove" }, h.removeEventListener("touchstart", na), h.removeEventListener(k.down, na), h.removeEventListener("touchmove", la), h.removeEventListener(k.move, la),
                        K(h, "touchstart " + k.down, na), K(h, "touchmove " + k.move, la)); da(n, Za, "resize", "onresize"); da(n, Ua, "scroll", "onscroll", "onscroll"); k = p(c.sectionSelector); for (h = 0; h < k.length; ++h)t(k[h], "fp-section"); k = p(c.slideSelector); for (h = 0; h < k.length; ++h)t(k[h], "fp-slide"); c.navigation && Ta(); k = p(".fp-section"); for (h = 0; h < k.length; h++)if (f = h, g = k[h], d = p(".fp-slide", g), l = d.length, f || null !== e(".fp-section.active") || t(g, "active"), "undefined" !== typeof c.anchors[f] && (g.setAttribute("data-anchor", c.anchors[f]), w(g, "active") &&
                            Z(c.anchors[f], f)), 0 < l) {
                                var y = 100 * l, f = 100 / l; g.innerHTML = '<div class="fp-slides"><div class="fp-slidesContainer">' + g.innerHTML + "</div></div>"; d = p(".fp-slide", g); e(".fp-slidesContainer", g).style.width = y + "%"; if (c.controlArrows && 1 < l) {
                                    var y = g, u = m.createElement("div"); u.className = "fp-controlArrow fp-prev"; var D = m.createElement("div"); D.className = "fp-controlArrow fp-next"; var A = e(".fp-slides", y); A.parentNode.appendChild(u); A.parentNode.appendChild(D); c.loopHorizontal || (e(".fp-controlArrow.fp-prev", y).style.display =
                                        "none")
                                } if (c.slidesNavigation) { y = g; u = m.createElement("div"); u.className = "fp-slidesNav"; D = m.createElement("ul"); u.appendChild(D); y.appendChild(u); y = e(".fp-slidesNav", y); u = e("ul", y); t(y, c.slidesNavPosition); D = ""; for (A = 0; A < l; A++)D += '<li><a href="#"><span></span></a></li>'; u.innerHTML += D; y.style["margin-left"] = "-" + y.offsetWidth / 2 + "px"; l = p("li", y)[0]; t(e("a", l), "active") } for (l = 0; l < d.length; l++)d[l].style.width = f + "%"; e(".fp-slide.active", g); t(d[0], "active")
                        } h = p(".fp-controlArrow"); for (k = 0; k < h.length; k++)K(h[k],
                            "click onclick touchstart", Ya); ya(c.autoScrolling, "internal"); h = e(".fp-section.active"); k = e(".fp-slide.active", h); g = q(e(".fp-section.active")); k && (0 !== g || 0 === g && 0 !== q(k)) && $a(k); c.navigation && (x.style["margin-top"] = "-" + x.offsetHeight / 2 + "px", k = p("li", x)[q(e(".fp-section.active"))], t(e("a", k), "active")); k = e(".fp-section.active"); z(c.afterLoad) && c.afterLoad.call(k, k.getAttribute("data-anchor"), q(k) + 1); z(c.afterRender) && c.afterRender.call(r); k = n.location.hash.replace("#", "").split("/")[0]; k.length && (g =
                                e('[data-anchor="' + k + '"]'), !c.animateAnchor && g.length && (c.autoScrolling ? L(g.offsetTop) : (L(0), sa(k), d = U(g.offsetTop), ea(d.element, d.options, 0)), Z(k, null), z(c.afterLoad) && c.afterLoad.call(g, k, q(g) + 1), B(h, "active"), t(g, "active"))); sa(); da(m, Xa, "DOMContentLoaded", "DOMContentLoaded", "DOMContentLoaded")
            }, moveSectionUp: V, moveSectionDown: ha, moveTo: W, silentMoveTo: function (a, b) { M(0, "internal"); W(a, b); M(Q.scrollingSpeed, "internal") }, moveSlideRight: X, moveSlideLeft: Y, setAutoScrolling: ya, setFitToSection: function (a,
                b) { T("fitToSection", a, b) }, setKeyboardScrolling: function (a) { c.keyboardScrolling = a }, setRecordHistory: ga, setScrollingSpeed: M
        }
});
