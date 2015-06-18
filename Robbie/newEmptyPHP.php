
<!doctype html><html itemscope="" itemtype="http://schema.org/WebPage" lang="en"><head><meta content="Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for." name="description"><meta content="noodp" name="robots"><meta content="/images/google_favicon_128.png" itemprop="image"><meta content="origin" id="mref" name="referrer">
        <title>Google</title>   
        <script>(function () {
                window.google = {kEI: 'EvtcVZqbKY3zoATrwYDYAw', kEXPI: '18167,3300108,3300130,3300137,3300161,3310754,3312195,3700366,4003510,4023709,4024207,4026110,4028875,4029569,4029815,4032500,4032522,4032524,4032568,4032643,4032645,4032677,4032711,4032925,4032961,4033191,4033307,4033344,4034425,4034618,4034883,4035296,4035328,4035816,4035881,4035980,4035998,4036134,4036435,4036485,4036534,4036539,4036794,4036798,4036896,4037339,4037538,8500394,8500973,8501247,8501280,8501295,8501350,8501407,8501489,8501497,10200083,10201090,10201180', authuser: 0, j: {en: 1, bv: 21, pm: 'p', u: '559f8324', qbp: 0, rre: false}, kSID: '559f8324_21'};
                google.kHL = 'en';
            })();
            (function () {
                google.lc = [];
                google.li = 0;
                google.getEI = function (a) {
                    for (var b; a && (!a.getAttribute || !(b = a.getAttribute("eid"))); )
                        a = a.parentNode;
                    return b || google.kEI
                };
                google.getLEI = function (a) {
                    for (var b = null; a && (!a.getAttribute || !(b = a.getAttribute("leid"))); )
                        a = a.parentNode;
                    return b
                };
                google.https = function () {
                    return"https:" == window.location.protocol
                };
                google.ml = function () {
                };
                google.time = function () {
                    return(new Date).getTime()
                };
                google.log = function (a, b, e, f, l) {
                    var d = new Image, h = google.lc, g = google.li, c = "", m = google.ls || "";
                    d.onerror = d.onload = d.onabort = function () {
                        delete h[g]
                    };
                    h[g] = d;
                    if (!e && -1 == b.search("&ei=")) {
                        var k = google.getEI(f), c = "&ei=" + k;
                        -1 == b.search("&lei=") && ((f = google.getLEI(f)) ? c += "&lei=" + f : k != google.kEI && (c += "&lei=" + google.kEI))
                    }
                    a = e || "/" + (l || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + b + c + m + "&zx=" + google.time();
                    /^http:/i.test(a) && google.https() ? (google.ml(Error("a"), !1, {src: a, glmm: 1}), delete h[g]) : (window.google && window.google.vel &&
                            window.google.vel.lu && window.google.vel.lu(a), d.src = a, google.li = g + 1)
                };
                google.y = {};
                google.x = function (a, b) {
                    google.y[a.id] = [a, b];
                    return!1
                };
                google.load = function (a, b, e) {
                    google.x({id: a + n++}, function () {
                        google.load(a, b, e)
                    })
                };
                var n = 0;
            })();
            google.kCSI = {};
            google.j.b = (!!location.hash && !!location.hash.match('[#&]((q|fp)=|tbs=rimg|tbs=simg|tbs=sbi)'))
                    || (google.j.qbp == 1);
            (function () {
                window.google.sn = 'webhp';
                google.timers = {};
                google.startTick = function (a, b) {
                    google.timers[a] = {t: {start: google.time()}, bfr: !!b, b: {}};
                    window.performance && window.performance.now && (google.timers[a].wsrt = Math.floor(window.performance.now()))
                };
                google.tick = function (a, b, c) {
                    google.timers[a] || google.startTick(a);
                    google.timers[a].t[b] = c || google.time()
                };
                google.blockCSI = function (a, b) {
                    google.timers[a].b[b] = !0
                };
                google.unblockCSI = function (a, b, c) {
                    if (a = google.timers[a]) {
                        a = a.b;
                        a[b] = !1;
                        for (var d in a)
                            if (a.hasOwnProperty(d) && a[d])
                                return;
                        google.csiReport && google.csiReport(void 0, void 0, c)
                    }
                };
                google.startTick("load", !0);
                google.blockCSI("load", "ol");
                google.blockCSI("load", "xjs");
                google.iml = function (a, b) {
                    google.tick("iml", a.id || a.src || a.name, b)
                };
            })();
            google.aft = function () {
            };
            try {
                google['pt'] = window['chrome'] && window['chrome']['csi'] && Math.floor(window['chrome']['csi']()['pageT']);
            } catch (e) {
            }
            (function () {
                'use strict';
                var g = this, aa = function (a) {
                    var d = typeof a;
                    if ("object" == d)
                        if (a) {
                            if (a instanceof Array)
                                return"array";
                            if (a instanceof Object)
                                return d;
                            var b = Object.prototype.toString.call(a);
                            if ("[object Window]" == b)
                                return"object";
                            if ("[object Array]" == b || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice"))
                                return"array";
                            if ("[object Function]" == b || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call"))
                                return"function"
                        } else
                            return"null";
                    else if ("function" == d && "undefined" == typeof a.call)
                        return"object";
                    return d
                }, h = Date.now || function () {
                    return+new Date
                };
                var l = {};
                var ba = function (a, d) {
                    if (null === d)
                        return!1;
                    if ("contains"in a && 1 == d.nodeType)
                        return a.contains(d);
                    if ("compareDocumentPosition"in a)
                        return a == d || Boolean(a.compareDocumentPosition(d) & 16);
                    for (; d && a != d; )
                        d = d.parentNode;
                    return d == a
                };
                var ca = function (a, d) {
                    return function (b) {
                        b || (b = window.event);
                        return d.call(a, b)
                    }
                }, u = function (a) {
                    a = a.target || a.srcElement;
                    !a.getAttribute && a.parentNode && (a = a.parentNode);
                    return a
                }, v = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent), da = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent), fa = function (a) {
                    var d = a.which || a.keyCode || a.key;
                    da && 3 == d && (d = 13);
                    if (13 != d && 32 != d)
                        return!1;
                    var b = u(a), c = (b.getAttribute("role") || b.type || b.tagName).toUpperCase(), e;
                    (e = "keydown" != a.type) || ("getAttribute"in b ? (e = (b.getAttribute("role") || b.type || b.tagName).toUpperCase(), e = "TEXT" != e && "TEXTAREA" != e && "PASSWORD" != e && "SEARCH" != e && ("COMBOBOX" != e || "INPUT" != b.tagName.toUpperCase()) && !b.isContentEditable) : e = !1, e = !e);
                    if (e || a.ctrlKey || a.shiftKey || a.altKey || a.metaKey || "INPUT" == b.tagName.toUpperCase() && b.type && b.type.toUpperCase()in w && 32 == d)
                        return!1;
                    if (a.originalTarget &&
                            a.originalTarget != b)
                        return!0;
                    (a = b.tagName in ea) || (a = b.getAttributeNode("tabindex"), a = null != a && a.specified);
                    if (!(a && 0 <= b.tabIndex) || b.disabled)
                        return!1;
                    b = "INPUT" != b.tagName.toUpperCase() || b.type;
                    a = !(c in z) && 13 == d;
                    return(0 == z[c] % d || a) && !!b
                }, ea = {A: 1, INPUT: 1, TEXTAREA: 1, SELECT: 1, BUTTON: 1}, ga = function () {
                    this._mouseEventsPrevented = !0
                }, z = {A: 13, BUTTON: 0, CHECKBOX: 32, COMBOBOX: 13, LINK: 13, LISTBOX: 13, MENU: 0, MENUBAR: 0, MENUITEM: 0, MENUITEMCHECKBOX: 0, MENUITEMRADIO: 0, OPTION: 32, RADIO: 32, RADIOGROUP: 32, RESET: 0, SUBMIT: 0, TAB: 0, TREE: 13, TREEITEM: 13}, w = {CHECKBOX: 1, OPTION: 1, RADIO: 1};
                var A = function () {
                    this.s = this.i = null
                }, C = function (a, d) {
                    var b = B;
                    b.i = a;
                    b.s = d;
                    return b
                };
                A.prototype.o = function () {
                    var a = this.i;
                    this.i && this.i != this.s ? this.i = this.i.__owner || this.i.parentNode : this.i = null;
                    return a
                };
                var G = function () {
                    this.v = [];
                    this.i = 0;
                    this.s = null;
                    this.w = !1
                };
                G.prototype.o = function () {
                    if (this.w)
                        return B.o();
                    if (this.i != this.v.length) {
                        var a = this.v[this.i];
                        this.i++;
                        a != this.s && a && a.__owner && (this.w = !0, C(a.__owner, this.s));
                        return a
                    }
                    return null
                };
                var B = new A, H = new G;
                var I;
                a:{
                    var J = g.navigator;
                    if (J) {
                        var K = J.userAgent;
                        if (K) {
                            I = K;
                            break a
                        }
                    }
                    I = ""
                }
                var L = function (a) {
                    return-1 != I.indexOf(a)
                };
                var M = function () {
                    return L("Opera") || L("OPR")
                }, N = function () {
                    return L("Edge") || L("Trident") || L("MSIE")
                }, O = function () {
                    return(L("Chrome") || L("CriOS")) && !M() && !N()
                };
                var ha = M(), P = N(), ia = L("Gecko") && !(-1 != I.toLowerCase().indexOf("webkit") && !L("Edge")) && !(L("Trident") || L("MSIE")) && !L("Edge"), ja = -1 != I.toLowerCase().indexOf("webkit") && !L("Edge"), ka = function () {
                    var a = I;
                    if (ia)
                        return/rv\:([^\);]+)(\)|;)/.exec(a);
                    if (P && L("Edge"))
                        return/Edge\/([\d\.]+)/.exec(a);
                    if (P)
                        return/\b(?:MSIE|rv)[:]([^\);]+)(\)|;)/.exec(a);
                    if (ja)
                        return/WebKit\/(\S+)/.exec(a)
                };
                (function () {
                    if (ha && g.opera) {
                        var a = g.opera.version;
                        return"function" == aa(a) ? a() : a
                    }
                    var a = "", d = ka();
                    d && (a = d ? d[1] : "");
                    return P && !L("Edge") && (d = (d = g.document) ? d.documentMode : void 0, d > parseFloat(a)) ? String(d) : a
                })();
                !L("Android") || O() || L("Firefox") || M();
                O();
                var R = function () {
                    this.C = [];
                    this.i = [];
                    this.o = [];
                    this.w = {};
                    this.s = null;
                    this.v = [];
                    Q(this, "_custom")
                }, la = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent), S = String.prototype.trim ? function (a) {
                    return a.trim()
                } : function (a) {
                    return a.replace(/^\s+/, "").replace(/\s+$/, "")
                }, ma = /\s*;\s*/, oa = function (a, d) {
                    return function (b) {
                        var c = d;
                        if ("_custom" == c) {
                            c = b.detail;
                            if (!c || !c._type)
                                return;
                            c = c._type
                        }
                        var e;
                        var f = c;
                        "click" == f && (v && b.metaKey || !v && b.ctrlKey || 2 == b.which || null == b.which && 4 == b.button || b.shiftKey) ? f = "clickmod" : fa(b) && (f = "clickkey");
                        var k = b.srcElement || b.target, c = T(f, b, k, "", null), m, q;
                        b.path ? (H.v = b.path, H.i = 0, H.s = this, H.w = !1, q = H) : q = C(k, this);
                        for (var r; r = q.o(); ) {
                            m = e = r;
                            r = f;
                            var n = m.__jsaction;
                            if (!n) {
                                var x = void 0, n = null;
                                "getAttribute"in m && (n = m.getAttribute("jsaction"));
                                if (x = n) {
                                    n = l[x];
                                    if (!n) {
                                        for (var n = {}, D = x.split(ma), E = 0, pa = D ? D.length : 0; E < pa; E++) {
                                            var t = D[E];
                                            if (t) {
                                                var F = t.indexOf(":"), V = -1 != F, qa = V ? S(t.substr(0, F)) : "click", t = V ? S(t.substr(F + 1)) : t;
                                                n[qa] = t
                                            }
                                        }
                                        l[x] = n
                                    }
                                    m.__jsaction = n
                                } else
                                    n = na, m.__jsaction = n
                            }
                            "clickkey" == r ? r = "click" : "click" != r || n.click || (r = "clickonly");
                            m = {B: r, action: n[r] || "", event: null, G: !1};
                            c = T(m.B, m.event || b, k, m.action || "", e, c.timeStamp);
                            if (m.G || m.action)
                                break
                        }
                        c && "touchend" == c.eventType && (c.event._preventMouseEvents = ga);
                        if (m && m.action) {
                            if (k = "clickkey" == f)
                                k = u(b), k = (k.type || k.tagName).toUpperCase(), (k = 32 == (b.which || b.keyCode ||
                                        b.key) && "CHECKBOX" != k) || (q = u(b), k = (q.getAttribute("role") || q.tagName).toUpperCase(), q = q.type, k = "BUTTON" == k || !!q && !(q.toUpperCase()in w));
                            k && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                            if ("mouseenter" == f || "mouseleave" == f)
                                if (k = b.relatedTarget, !("mouseover" == b.type && "mouseenter" == f || "mouseout" == b.type && "mouseleave" == f) || k && (k === e || ba(e, k)))
                                    c.action = "", c.actionElement = null;
                                else {
                                    var f = {}, p;
                                    for (p in b)
                                        "function" !== typeof b[p] && "srcElement" !== p && "target" !== p && (f[p] = b[p]);
                                    f.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                                    f.target = f.srcElement = e;
                                    f.bubbles = !1;
                                    c.event = f;
                                    c.targetElement = e
                                }
                        } else
                            c.action = "", c.actionElement = null;
                        e = c;
                        a.s && (p = T(e.eventType, e.event, e.targetElement, e.action, e.actionElement, e.timeStamp), "clickonly" == p.eventType && (p.eventType = "click"), a.s(p, !0));
                        if (e.actionElement) {
                            "A" != e.actionElement.tagName || "click" != e.eventType && "clickmod" != e.eventType || (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                            if (a.s)
                                a.s(e);
                            else {
                                var y;
                                if ((p = g.document) && !p.createEvent && p.createEventObject)
                                    try {
                                        y =
                                                p.createEventObject(b)
                                    } catch (va) {
                                        y = b
                                    }
                                else
                                    y = b;
                                e.event = y;
                                a.v.push(e)
                            }
                            if ("touchend" == e.event.type && e.event._mouseEventsPrevented) {
                                b = e.event;
                                for (var wa in b)
                                    ;
                                h()
                            }
                        }
                    }
                }, T = function (a, d, b, c, e, f) {
                    return{eventType: a, event: d, targetElement: b, action: c, actionElement: e, timeStamp: f || h()}
                }, na = {}, ra = function (a, d) {
                    return function (b) {
                        var c = a, e = d, f = !1;
                        "mouseenter" == c ? c = "mouseover" : "mouseleave" == c && (c = "mouseout");
                        if (b.addEventListener) {
                            if ("focus" == c || "blur" == c || "error" == c || "load" == c)
                                f = !0;
                            b.addEventListener(c, e, f)
                        } else
                            b.attachEvent && ("focus" == c ? c = "focusin" : "blur" == c && (c = "focusout"), e = ca(b, e), b.attachEvent("on" + c, e));
                        return{B: c, D: e, F: f}
                    }
                }, Q = function (a, d) {
                    if (!a.w.hasOwnProperty(d)) {
                        var b = oa(a, d), c = ra(d, b);
                        a.w[d] = b;
                        a.C.push(c);
                        for (b = 0; b < a.i.length; ++b) {
                            var e = a.i[b];
                            e.o.push(c.call(null, e.i))
                        }
                        "click" == d && Q(a, "keydown")
                    }
                };
                R.prototype.D = function (a) {
                    return this.w[a]
                };
                var Y = function (a, d) {
                    var b = new sa(d), c;
                    a:{
                        for (c = 0; c < a.i.length; c++)
                            if (U(a.i[c], d)) {
                                c = !0;
                                break a
                            }
                        c = !1
                    }
                    if (c)
                        return a.o.push(b), b;
                    W(a, b);
                    a.i.push(b);
                    X(a);
                    return b
                }, X = function (a) {
                    for (var d = a.o.concat(a.i), b = [], c = [], e = 0; e < a.i.length; ++e) {
                        var f = a.i[e];
                        ta(f, d) ? (b.push(f), ua(f)) : c.push(f)
                    }
                    for (e = 0; e < a.o.length; ++e)
                        f = a.o[e], ta(f, d) ? b.push(f) : (c.push(f), W(a, f));
                    a.i = c;
                    a.o = b
                }, W = function (a, d) {
                    var b = d.i;
                    la && (b.style.cursor = "pointer");
                    for (b = 0; b < a.C.length; ++b)
                        d.o.push(a.C[b].call(null, d.i))
                }, sa = function (a) {
                    this.i = a;
                    this.o = []
                }, U = function (a, d) {
                    for (var b = a.i, c = d; b != c && c.parentNode; )
                        c = c.parentNode;
                    return b == c
                }, ta = function (a, d) {
                    for (var b = 0; b < d.length; ++b)
                        if (d[b].i != a.i && U(d[b], a.i))
                            return!0;
                    return!1
                }, ua = function (a) {
                    for (var d = 0; d < a.o.length; ++d) {
                        var b = a.i, c = a.o[d];
                        b.removeEventListener ? b.removeEventListener(c.B, c.D, c.F) : b.detachEvent && b.detachEvent("on" + c.B, c.D)
                    }
                    a.o = []
                };
                var Z = new R;
                Y(Z, window.document.documentElement);
                Q(Z, "click");
                Q(Z, "focus");
                Q(Z, "focusin");
                Q(Z, "blur");
                Q(Z, "focusout");
                Q(Z, "error");
                Q(Z, "load");
                Q(Z, "change");
                Q(Z, "dblclick");
                Q(Z, "input");
                Q(Z, "keyup");
                Q(Z, "keydown");
                Q(Z, "keypress");
                Q(Z, "mousedown");
                Q(Z, "mouseenter");
                Q(Z, "mouseleave");
                Q(Z, "mouseout");
                Q(Z, "mouseover");
                Q(Z, "mouseup");
                Q(Z, "touchstart");
                Q(Z, "touchend");
                Q(Z, "touchcancel");
                Q(Z, "speech");
                (function (a) {
                    window.google.jsad = function (d) {
                        a.s = d;
                        a.v && (0 < a.v.length && d(a.v), a.v = null)
                    };
                    window.google.jsaac = function (d) {
                        return Y(a, d)
                    };
                    window.google.jsarc = function (d) {
                        ua(d);
                        for (var b = !1, c = 0; c < a.i.length; ++c)
                            if (a.i[c] === d) {
                                a.i.splice(c, 1);
                                b = !0;
                                break
                            }
                        if (!b)
                            for (c = 0; c < a.o.length; ++c)
                                if (a.o[c] === d) {
                                    a.o.splice(c, 1);
                                    break
                                }
                        X(a)
                    }
                })(Z);
            }).call(window);
            (function () {
                'use strict';
                var f = this, g = function (d, e) {
                    var b = d.split("."), a = f;
                    b[0]in a || !a.execScript || a.execScript("var " + b[0]);
                    for (var c; b.length && (c = b.shift()); )
                        b.length || void 0 === e ? a[c] ? a = a[c] : a = a[c] = {} : a[c] = e
                };
                var h = [];
                g("google.jsc.xx", h);
                g("google.jsc.x", function (d) {
                    h.push(d)
                });
            }).call(window);
            google.arwt = function (a) {
                a.href = document.getElementById(a.id.substring(1)).href;
                return!0
            };</script><style>[dir='ltr'],[dir='rtl']{unicode-bidi:-webkit-isolate;unicode-bidi:isolate}bdo[dir='ltr'],bdo[dir='rtl']{unicode-bidi:bidi-override;unicode-bidi:-webkit-isolate-override;unicode-bidi:isolate-override}#logo{display:block;height:37px;margin:0;overflow:hidden;position:relative;width:95px}#logo img{border:0;left:0;position:absolute;top:-41px}#logo span{background:url(/images/nav_logo195.png) no-repeat;cursor:pointer;overflow:hidden}#logocont{z-index:1;padding-left:13px;padding-right:10px;}.big #logocont{padding-left:13px;padding-right:12px}.sbibod{background-color:#fff;border:1px solid #d9d9d9;border-top-color:#c0c0c0;height:28px;vertical-align:top;}.srp.vasq .sbibod{border-right:0}.lst{border:0;margin-top:5px;margin-bottom:0}.lst:focus{outline:none}.gsfi,.lst{font:16px arial,sans-serif;line-height:1.2em !important;height:1.2em !important;}.gsfs{font:16px arial,sans-serif}.lsb{background:transparent;border:0;font-size:0;height:30px;outline:0;width:100%}.sbico{background:url(/images/nav_logo195.png) no-repeat -113px -61px;color:transparent;display:inline-block;height:18px;margin:0 auto 2px;width:18px}#sblsbb{border-bottom-left-radius:0;border-top-left-radius:0;text-align:center;height:28px;margin:0;padding:0;width:58px}#sbds{border:0;margin-left:0}.hp .nojsb,.srp .jsb{display:none}.kpbb,.kprb,.kpgb,.kpgrb{-webkit-border-radius:2px;border-radius:2px;color:#fff}.kpbb:hover,.kprb:hover,.kpgb:hover,.kpgrb:hover{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);color:#fff}.kpbb:active,.kprb:active,.kpgb:active,.kpgrb:active{-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);box-shadow:inset 0 1px 2px rgba(0,0,0,0.3)}.kpbb{background-image:-webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#4787ed));background-color:#4d90fe;background-image:-webkit-linear-gradient(top,#4d90fe,#4787ed);background-image:linear-gradient(top,#4d90fe,#4787ed);border:1px solid #3079ed}.kpbb:hover{background-image:-webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));background-color:#357ae8;background-image:-webkit-linear-gradient(top,#4d90fe,#357ae8);background-image:linear-gradient(top,#4d90fe,#357ae8);border:1px solid #2f5bb7}a.kpbb:link,a.kpbb:visited{color:#fff}.kprb{background-image:-webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#d14836));background-color:#dd4b39;background-image:-webkit-linear-gradient(top,#dd4b39,#d14836);background-image:linear-gradient(top,#dd4b39,#d14836);border:1px solid #dd4b39}.kprb:hover{background-image:-webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#c53727));background-color:#c53727;background-image:-webkit-linear-gradient(top,#dd4b39,#c53727);background-image:linear-gradient(top,#dd4b39,#c53727);border:1px solid #b0281a;border-bottom-color:#af301f}.kprb:active{background-image:-webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#b0281a));background-color:#b0281a;background-image:-webkit-linear-gradient(top,#dd4b39,#b0281a);background-image:linear-gradient(top,#dd4b39,#b0281a)}.kpgb{background-image:-webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#398a00));background-color:#3d9400;background-image:-webkit-linear-gradient(top,#3d9400,#398a00);background-image:linear-gradient(top,#3d9400,#398a00);border:1px solid #29691d}.kpgb:hover{background-image:-webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#368200));background-color:#368200;background-image:-webkit-linear-gradient(top,#3d9400,#368200);background-image:linear-gradient(top,#3d9400,#368200);border:1px solid #2d6200}.kpgrb{background-image:-webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));background-color:#f5f5f5;background-image:-webkit-linear-gradient(top,#f5f5f5,#f1f1f1);background-image:linear-gradient(top,#f5f5f5,#f1f1f1);border:1px solid #dcdcdc;color:#555}.kpgrb:hover{background-image:-webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));background-color:#f8f8f8;background-image:-webkit-linear-gradient(top,#f8f8f8,#f1f1f1);background-image:linear-gradient(top,#f8f8f8,#f1f1f1);border:1px solid #dcdcdc;color:#333}a.kpgrb:link,a.kpgrb:visited{color:#555}#sfopt{display:inline-block;float:right;line-height:normal}.lsd{font-size:11px;position:absolute;top:3px;left:16px}.sbsb_g{margin:3px 0 4px}.jhp input[type="submit"],.sbdd_a input,.gbqfba{background-image:-webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));background-image:-webkit-linear-gradient(top,#f5f5f5,#f1f1f1);-webkit-border-radius:2px;-webkit-user-select:none;background-color:#f5f5f5;background-image:linear-gradient(top,#f5f5f5,#f1f1f1);background-image:-o-linear-gradient(top,#f5f5f5,#f1f1f1);border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.1);border-radius:2px;color:#444;cursor:default;font-family:arial,sans-serif;font-size:11px;font-weight:bold;margin:11px 8px;min-width:54px;padding:0 8px;text-align:center}.jhp input[type="submit"],.gbqfba{height:29px;line-height:27px}.sbdd_a input{height:100%}.jhp input[type="submit"]:hover,.sbdd_a input:hover,.gbqfba:hover{background-image:-webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));background-image:-webkit-linear-gradient(top,#f8f8f8,#f1f1f1);-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);background-color:#f8f8f8;background-image:linear-gradient(top,#f8f8f8,#f1f1f1);background-image:-o-linear-gradient(top,#f8f8f8,#f1f1f1);border:1px solid #c6c6c6;box-shadow:0 1px 1px rgba(0,0,0,0.1);color:#222}.jhp input[type="submit"]:focus,.sbdd_a input:focus{border:1px solid #4d90fe;outline:none}.sbdd_a input{margin:6px;}span.lsbb,.lsb input{-webkit-transition:all 0.18s}@media only screen and (max-height:650px){span.lsbb{height:17px}}.tsf{background:none}.tsf-p{position:relative;}.logocont{left:0;position:absolute;}.sfibbbc{padding-bottom:2px;padding-top:3px}.sbtc{position:relative}.sbibtd{line-height:0;max-width:650px;overflow:visible;white-space:nowrap}.sbibps{padding:0px 9px 0;width:466px;}.big .sbibps{width:550px}.sfopt{height:28px;position:relative}#sform{height:34px}.hp .sfsbc{display:none}#searchform{width:100%}.hp #searchform{position:absolute;top:310px}.srp #searchform{position:absolute;top:15px}#sfdiv{max-width:484px}.hp .big #sfdiv{max-width:568px}.srp #sfdiv{max-width:600px;overflow:hidden}.srp #tsf{position:relative;top:-2px}.sfsbc{display:inline-block;float:right;margin-right:1px;vertical-align:top}.sfbg{background:#f1f1f1;height:69px;left:0;position:absolute;width:100%}.sfbgg{background-color:#f1f1f1;border-bottom:1px solid #666;border-color:#e5e5e5;height:69px}#pocs{background:#fff1a8;color:#000;font-size:10pt;margin:0;padding:5px 7px}#pocs.sft{background:transparent;color:#777}#pocs a{color:#11c}#pocs.sft a{color:#36c}#pocs>div{margin:0;padding:0}#cnt{padding-top:15px;}#subform_ctrl{min-height:11px}.gb_ea{display:inline-block;padding:0 0 0 15px;vertical-align:middle}.gb_ea:first-child,#gbsfw:first-child+.gb_ea{padding-left:0}.gb_fa{position:relative}.gb_ga{display:inline-block;outline:none;vertical-align:middle;-webkit-border-radius:2px;border-radius:2px;-webkit-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px}#gb#gb a.gb_ga{color:#404040;cursor:default;text-decoration:none}#gb#gb a.gb_ga:hover,#gb#gb a.gb_ga:focus{color:#000}.gb_u{border-color:transparent;border-bottom-color:#fff;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;top:37px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s}.gb_v{border-color:transparent;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s;border-bottom-color:#ccc;border-bottom-color:rgba(0,0,0,.2);top:36px}x:-o-prefocus,div.gb_v{border-bottom-color:#ccc}.gb_ba{background:#fff;border:1px solid #ccc;border-color:rgba(0,0,0,.2);-webkit-box-shadow:0 2px 10px rgba(0,0,0,.2);box-shadow:0 2px 10px rgba(0,0,0,.2);display:none;outline:none;overflow:hidden;position:absolute;right:0;top:44px;-webkit-animation:gb__a .2s;animation:gb__a .2s;-webkit-border-radius:2px;border-radius:2px;-webkit-user-select:text}.gb_ea.gb_ha .gb_u,.gb_ea.gb_ha .gb_v,.gb_ea.gb_ha .gb_ba{display:block}.gb_ia{position:absolute;right:0;top:44px;z-index:-1}.gb_i .gb_u,.gb_i .gb_v,.gb_i .gb_ba{margin-top:-10px}.gb_d{-webkit-background-size:32px 32px;background-size:32px 32px;-webkit-border-radius:50%;border-radius:50%;display:block;margin:-1px;height:32px;width:32px}.gb_d:hover,.gb_d:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_d:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15)}.gb_d:active::after{background:rgba(0,0,0,.1);-webkit-border-radius:50%;border-radius:50%;content:'';display:block;height:100%}.gb_e:not(.gb_f) .gb_d::before,.gb_e:not(.gb_f) .gb_g::before{content:none}.gb_h{cursor:pointer;line-height:30px;min-width:30px;overflow:hidden;vertical-align:middle;width:auto;text-overflow:ellipsis}.gb_i .gb_h,.gb_i .gb_j{line-height:26px}#gb#gb.gb_i a.gb_h,.gb_i .gb_j{color:#666;font-size:11px;height:auto}#gb#gb.gb_i a.gb_h:hover,#gb#gb.gb_i a.gb_h:focus{color:#000}.gb_k{border-top:4px solid #404040;border-left:4px dashed transparent;border-right:4px dashed transparent;display:inline-block;margin-left:6px;vertical-align:middle}.gb_i .gb_k{border-top-color:#999}.gb_l:hover .gb_k{border-top-color:#000}.gb_m .gb_h{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_h{font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}#gb#gb.gb_n.gb_n a.gb_h{color:#fff}.gb_n.gb_n .gb_k{border-top-color:#fff}.gb_m .gb_d,.gb_n .gb_d{-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_m .gb_d:hover,.gb_n .gb_d:hover,.gb_m .gb_d:focus,.gb_n .gb_d:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_o .gb_p,.gb_q .gb_p{position:absolute;right:1px}.gb_p.gb_r,.gb_s.gb_r,.gb_l.gb_r{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size}.gb_e.gb_t .gb_h{width:30px!important}.gb_h~.gb_u,.gb_h~.gb_v{left:auto;right:6.5px}.gb_w{outline:none}#gb a.gb_x.gb_x,#gb .gb_y.gb_y a{color:#36c;text-decoration:none}#gb a.gb_x:active,#gb a.gb_x:hover,#gb .gb_y a:active,#gb .gb_y a:hover{text-decoration:underline}.gb_z{margin:20px}.gb_A,.gb_B{display:inline-block;vertical-align:top}.gb_A{margin-right:20px;position:relative}.gb_g{-webkit-background-size:96px 96px;background-size:96px 96px;border:none;vertical-align:top;height:96px;width:96px}.gb_C{background:rgba(78,144,254,.7);bottom:0;color:#fff;font-size:9px;font-weight:bold;left:0;line-height:9px;position:absolute;padding:7px 0;text-align:center;width:96px}.gb_D{font-weight:bold;margin:-4px 0 1px 0}.gb_E{color:#666}.gb_y{color:#ccc;margin:6px 0}.gb_y a{margin:0 10px}.gb_y a:first-child{margin-left:0}.gb_y a:last-child{margin-right:0}.gb_B .gb_a{background:#4d90fe;border-color:#3079ed;font-weight:bold;margin:10px 0 0 0}#gb .gb_B a.gb_a.gb_a{color:#fff}.gb_B .gb_a:hover{background:#357ae8;border-color:#2f5bb7}.gb_F{background:#f5f5f5;border-top:1px solid #ccc;border-color:rgba(0,0,0,.2);padding:10px 0;width:100%;display:table}.gb_F .gb_a{margin:0 20px}.gb_F>div{display:table-cell;text-align:right}.gb_F>div:first-child{text-align:left}.gb_F .gb_H{display:block;text-align:center}.gb_I .gb_u{border-bottom-color:#fef9db}.gb_J{background:#fef9db;font-size:11px;padding:10px 20px;white-space:normal}.gb_J b,.gb_x{white-space:nowrap}.gb_K{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);max-height:230px;overflow:auto}.gb_L{border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;padding:10px 20px}.gb_M .gb_L:focus .gb_N{outline:1px dotted #fff}.gb_L:hover{background:#eee}.gb_L:first-child,.gb_O:first-child+.gb_L{border-top:0}.gb_O{display:none}.gb_P{cursor:default}.gb_P:hover{background:transparent}.gb_Q{border:none;vertical-align:top;height:48px;width:48px}.gb_N{display:inline-block;margin:6px 0 0 10px}.gb_P .gb_Q,.gb_P .gb_N{opacity:.4}.gb_R{color:#000}.gb_P .gb_R{color:#666}.gb_S{color:#666}.gb_T{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;padding:10px 20px}.gb_U{background-position:-281px -73px;display:inline-block;margin:1px 0;vertical-align:middle;height:25px;width:25px}.gb_f .gb_U::before{left:-281px;top:-73px}.gb_V{color:#427fed;display:inline-block;padding:0 25px 0 10px;vertical-align:middle;white-space:normal}.gb_T:hover .gb_V{text-decoration:underline}.gb_f .gbqfi::before{left:-56px;top:-35px}.gb_M .gbqfb:focus .gbqfi{outline:1px dotted #fff}#gb#gb a.gb_ka,#gb#gb a.gb_la{color:#404040;text-decoration:none}#gb#gb a.gb_la:hover,#gb#gb a.gb_la:focus{color:#000;text-decoration:underline}.gb_ma.gb_r{display:none;padding-left:15px;vertical-align:middle}.gb_ma.gb_r:first-child{padding-left:0}.gb_na.gb_r{display:inline-block}.gb_oa .gb_na.gb_r{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size;display:-webkit-flex;display:flex}.gb_pa .gb_na.gb_r{display:none}.gb_ma .gb_la{display:inline-block;line-height:24px;outline:none;vertical-align:middle}.gb_na .gb_la{min-width:60px;overflow:hidden;-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size;text-overflow:ellipsis}.gb_qa .gb_na .gb_la{min-width:0}.gb_t .gb_na .gb_la{width:0!important}.gb_m .gb_la{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_la{font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}#gb#gb.gb_n a.gb_la{color:#fff}.gb_Ea .gb_ga{background-position:-326px -52px;opacity:.55}.gb_m .gb_Ea .gb_ga{background-position:-97px -57px;opacity:.7}.gb_n .gb_Ea .gb_ga{background-position:-214px 0;opacity:1}.gb_c{display:none!important}@-webkit-keyframes gb__a{0%{opacity:0}50%{opacity:1}}@keyframes gb__a{0%{opacity:0}50%{opacity:1}}.gb_a{background:#f8f8f8;border:1px solid #c6c6c6;display:inline-block;line-height:28px;padding:0 12px;-webkit-border-radius:2px;border-radius:2px}#gb a.gb_a.gb_a{color:#666;cursor:default;text-decoration:none}.gb_b{border:1px solid #4285f4;font-weight:bold;outline:none;background:#4285f4;background:-webkit-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=0)}#gb a.gb_b.gb_b{color:#fff}.gb_b:hover{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_b:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-webkit-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=0)}.gb_W{min-width:127px;overflow:hidden;position:relative;z-index:987}.gb_X{position:absolute;padding:0 20px 0 15px}.gb_Z .gb_X{right:100%;margin-right:-127px}.gb_0{display:inline-block;outline:none;vertical-align:middle}.gb_1 .gb_0{position:relative;top:2px}.gb_0 .gb_2,.gb_3{display:block}.gb_4{border:none;display:block;visibility:hidden}.gb_0 .gb_2{background-position:0 -105px;height:33px;width:92px}.gb_3{background-repeat:no-repeat}.gb_n .gb_0 .gb_2{background-position:-97px -92px;margin:-3px 0 0 -10px;height:52px;width:112px}.gb_m .gb_0 .gb_2{margin:-3px 0 0 -10px;height:52px;width:112px;background-position:-97px 0}.gb_Xa{display:inline-block;line-height:normal;position:relative;z-index:987}#gbsfw{min-width:400px;overflow:visible}.gb_4a,#gbsfw.gb_ha{display:block;outline:none}#gbsfw.gb_Oa iframe{display:none}.gb_5a{padding:118px 0;text-align:center}.gb_6a{background:no-repeat center 0;color:#aaa;font-size:13px;line-height:20px;padding-top:76px;background-image:-webkit-image-set(url('//ssl.gstatic.com/gb/images/a/f5cdd88b65.png') 1x,url('//ssl.gstatic.com/gb/images/a/133fc21e88.png') 2x)}.gb_6a a{color:#4285f4;text-decoration:none}@-webkit-keyframes gb__nb{0%{-webkit-transform:scale(0,0);transform:scale(0,0)}20%{-webkit-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-webkit-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-webkit-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-webkit-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}@keyframes gb__nb{0%{-webkit-transform:scale(0,0);transform:scale(0,0)}20%{-webkit-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-webkit-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-webkit-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-webkit-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}.gb_8a .gb_fa{font-size:14px;font-weight:bold;top:0;right:0}.gb_8a .gb_ga{display:inline-block;vertical-align:middle;-webkit-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px}.gb_9a{background-position:-56px 0;opacity:.55;height:100%;width:100%}.gb_ga:hover .gb_9a,.gb_ga:focus .gb_9a{opacity:.85}.gb_ab .gb_9a{background-position:-291px -103px}.gb_bb{background-color:#cb4437;-webkit-border-radius:8px;border-radius:8px;font:bold 11px Arial;color:#fff;line-height:16px;min-width:14px;padding:0 1px;position:absolute;right:0;text-align:center;text-shadow:0 1px 0 rgba(0,0,0,0.1);top:0;visibility:hidden;z-index:990}.gb_cb .gb_bb,.gb_cb .gb_db,.gb_cb .gb_db.gb_eb{visibility:visible}.gb_db{padding:0 2px;visibility:hidden}.gb_8a:not(.gb_fb) .gb_v,.gb_8a:not(.gb_fb) .gb_u{left:3px}.gb_8a .gb_u{border-bottom-color:#e5e5e5}.gb_bb.gb_gb{-webkit-animation:gb__nb .6s 1s both ease-in-out;animation:gb__nb .6s 1s both ease-in-out;-webkit-perspective-origin:top right;perspective-origin:top right;-webkit-transform:scale(1,1);transform:scale(1,1);-webkit-transform-origin:top right;transform-origin:top right}.gb_gb .gb_db{visibility:visible}.gb_hb{background-color:rgba(0,0,0,.55);color:#fff;font-size:12px;font-weight:bold;line-height:20px;margin:5px;padding:0 2px;text-align:center;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:50%;border-radius:50%;height:20px;width:20px}.gb_hb.gb_ib{background-position:-214px -117px}.gb_hb.gb_jb{background-position:-256px -73px}.gb_ga:hover .gb_hb,.gb_ga:focus .gb_hb{background-color:rgba(0,0,0,.85)}#gbsfw.gb_kb{background:#e5e5e5;border-color:#ccc}.gb_m .gb_ga .gb_9a{background-position:-167px -57px;opacity:.7}.gb_m .gb_ab .gb_9a{background-position:-132px -57px}.gb_m .gb_ga:hover .gb_9a,.gb_m .gb_ga:focus .gb_9a{opacity:.85}.gb_n .gb_ga .gb_9a{background-position:-326px -87px;opacity:1}.gb_n .gb_ab .gb_9a{background-position:0 -70px}.gb_m .gb_bb,.gb_n .gb_bb{border:none;-webkit-box-shadow:-1px 1px 1px rgba(0,0,0,.2);box-shadow:-1px 1px 1px rgba(0,0,0,.2)}.gb_m .gb_hb{background-color:rgba(0,0,0,.7);-webkit-box-shadow:0 1px 2px rgba(255,255,255,.9);box-shadow:0 1px 2px rgba(255,255,255,.9)}.gb_n .gb_hb.gb_hb{background-color:#fff;color:#404040;-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_n .gb_hb.gb_ib{background-position:-326px -122px}.gb_n .gb_hb.gb_jb{background-position:-214px -92px}.gb_cb .gb_hb.gb_hb{background-color:#db4437;color:#fff}.gb_cb .gb_ga:hover .gb_hb,.gb_cb .gb_ga:focus .gb_hb{background-color:#a52714}.gb_cb .gb_hb.gb_jb{background-position:-256px -73px}.gb_1b .gb_ga{background-position:-326px -17px;opacity:.55;height:30px;width:30px}.gb_1b .gb_ga:hover,.gb_1b .gb_ga:focus{opacity:.85}.gb_1b .gb_u{border-bottom-color:#f5f5f5}#gbsfw.gb_2b{background:#f5f5f5;border-color:#ccc}.gb_n .gb_1b .gb_ga{background-position:0 -35px;opacity:1}.gb_m .gb_1b .gb_ga{background-position:-256px -103px;opacity:.7}.gb_m .gb_1b .gb_ga:hover,.gb_m .gb_1b .gb_ga:focus{opacity:.85}.gb_Vc{color:#000;left:0;min-width:1152px;position:absolute;top:0;-webkit-user-select:none;width:100%}.gb_5b{font:13px/27px Arial,sans-serif;position:relative;height:60px;width:100%}.gb_i .gb_5b{height:28px}#gba{height:60px}#gba.gb_i{height:28px}#gba.gb_Wc{height:90px}#gba.gb_Wc.gb_i{height:58px}.gb_5b>.gb_r{height:60px;line-height:58px;vertical-align:middle}.gb_i .gb_5b>.gb_r{height:28px;line-height:26px}.gb_5b::before{background:#e5e5e5;bottom:0;content:'';display:none;height:1px;left:0;position:absolute;right:0}.gb_5b{background:#f1f1f1}.gb_Xc .gb_5b{background:#fff}.gb_Xc .gb_5b::before,.gb_i .gb_5b::before{display:none}.gb_m .gb_5b,.gb_n .gb_5b,.gb_i .gb_5b{background:transparent}.gb_m .gb_5b::before{background:#e1e1e1;background:rgba(0,0,0,.12)}.gb_n .gb_5b::before{background:#333;background:rgba(255,255,255,.2)}.gb_r{display:inline-block;-webkit-flex:0 0 auto;flex:0 0 auto;-webkit-flex:0 0 main-size;flex:0 0 main-size}.gb_r.gb_Zc{float:right;-webkit-order:1;order:1}.gb_0c{white-space:nowrap}.gb_oa .gb_0c{display:-webkit-flex;display:flex}.gb_0c,.gb_r{margin-left:0!important;margin-right:0!important}.gb_2{background-image:url('//ssl.gstatic.com/gb/images/i1_71651352.png');-webkit-background-size:356px 144px;background-size:356px 144px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_2{background-image:url('//ssl.gstatic.com/gb/images/i2_9ef0f6fa.png')}}.gb_e{min-width:315px;padding-left:30px;padding-right:30px;position:relative;text-align:right;z-index:986;-webkit-align-items:center;align-items:center;-webkit-justify-content:flex-end;justify-content:flex-end}.gb_i .gb_e{min-width:0}.gb_e.gb_r{-webkit-flex:1 1 auto;flex:1 1 auto;-webkit-flex:1 1 main-size;flex:1 1 main-size}.gb_Kc{line-height:normal;position:relative;text-align:left}.gb_Kc.gb_r,.gb_Lc.gb_r,.gb_j.gb_r{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size}.gb_Mc,.gb_Nc{display:inline-block;padding:0 0 0 15px;position:relative;vertical-align:middle}.gb_Lc{line-height:normal;padding-right:15px}.gb_e .gb_Lc.gb_pa{padding-right:0}.gb_j{color:#404040;line-height:30px;min-width:30px;overflow:hidden;vertical-align:middle;text-overflow:ellipsis}#gb.gb_i.gb_i .gb_hc,#gb.gb_i.gb_i .gb_Kc>.gb_Nc .gb_ic{background:none;border:none;color:#36c;cursor:pointer;filter:none;font-size:11px;line-height:26px;padding:0;-webkit-box-shadow:none;box-shadow:none}#gb.gb_i.gb_n .gb_hc,#gb.gb_i.gb_n .gb_Kc>.gb_Nc .gb_ic{color:#fff}.gb_i .gb_hc{text-transform:uppercase}.gb_e.gb_qa{padding-left:0;padding-right:29px}.gb_e.gb_Oc{max-width:400px}.gb_Pc{background-clip:content-box;background-origin:content-box;opacity:.27;padding:22px;height:16px;width:16px}.gb_Pc.gb_r{display:none}.gb_Pc:hover,.gb_Pc:focus{opacity:.55}.gb_Qc{background-position:-35px 0}.gb_Rc{background-position:-291px -17px;padding-left:30px;padding-right:14px;position:absolute;right:0;top:0;z-index:990}.gb_o:not(.gb_q) .gb_Rc,.gb_qa .gb_Qc{display:inline-block}.gb_o .gb_Qc{padding-left:30px;padding-right:0;width:0}.gb_o:not(.gb_q) .gb_Sc{display:none}.gb_e.gb_r.gb_qa,.gb_qa:not(.gb_q) .gb_Kc{-webkit-flex:0 0 auto;flex:0 0 auto;-webkit-flex:0 0 main-size;flex:0 0 main-size}.gb_Pc,.gb_qa .gb_Lc,.gb_q .gb_Kc{overflow:hidden}.gb_o .gb_Lc{padding-right:0}.gb_qa .gb_Kc{padding:1px 1px 1px 0}.gb_o .gb_Kc{width:75px}.gb_e.gb_Tc,.gb_e.gb_Tc .gb_Qc,.gb_e.gb_Tc .gb_Qc::before,.gb_e.gb_Tc .gb_Lc,.gb_e.gb_Tc .gb_Kc{-webkit-transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out;transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out}.gb_oa .gb_e{min-width:0}.gb_e.gb_t,.gb_e.gb_t .gb_Kc,.gb_e.gb_Uc,.gb_e.gb_Uc .gb_Kc{min-width:0!important}.gb_e.gb_t,.gb_e.gb_t .gb_r{-webkit-flex:0 0 auto!important;-webkit-flex:0 0 auto!important;flex:0 0 auto!important}.gb_e.gb_t .gb_j{width:30px!important}.gb_m .gb_j{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_j{color:#fff;font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}.gb_5b ::-webkit-scrollbar{height:15px;width:15px}.gb_5b ::-webkit-scrollbar-button{height:0;width:0}.gb_5b ::-webkit-scrollbar-thumb{background-clip:padding-box;background-color:rgba(0,0,0,.3);border:5px solid transparent;-webkit-border-radius:10px;border-radius:10px;min-height:20px;min-width:20px;height:5px;width:5px}.gb_5b ::-webkit-scrollbar-thumb:hover,.gb_5b ::-webkit-scrollbar-thumb:active{background-color:rgba(0,0,0,.4)}#gb.gb_3c{min-width:980px}#gb.gb_3c .gb_Ob{min-width:0;position:static;width:0}.gb_3c .gb_5b{background:transparent;border-bottom-color:transparent}.gb_3c .gb_5b::before{display:none}.gb_3c.gb_3c .gb_ma{display:inline-block}.gb_3c.gb_e .gb_Lc.gb_pa{padding-right:15px}.gb_oa.gb_3c .gb_na.gb_r{display:-webkit-flex;display:flex}.gb_3c.gb_oa #gbqf{display:block}.gb_3c #gbq{height:0;position:absolute}.gb_3c.gb_e{z-index:987}.gb_X.gb_4c{padding-left:30px}.gb_Z .gb_4c{margin-right:-142px}sentinel{}#gbq .gbgt-hvr,#gbq .gbgt:focus{background-color:transparent;background-image:none}.gbqfh#gbq1{display:none}.gbxx{display:none !important}#gbq{line-height:normal;position:relative;top:0px;white-space:nowrap}#gbq{left:0;width:100%}#gbq2{top:0px;z-index:986}#gbq4{display:inline-block;max-height:29px;overflow:hidden;position:relative}.gbqfh#gbq2{z-index:985}.gbqfh#gbq2{margin:0;margin-left:0 !important;padding-top:0;position:relative;top:310px}.gbqfh #gbqf{margin:auto;min-width:534px;padding:0 !important}.gbqfh #gbqfbw{display:none}.gbqfh #gbqfbwa{display:block}.gbqfh #gbqf{max-width:572px;min-width:572px}.gbqfh .gbqfqw{border-right-width:1px}.gbii{background-image:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s32-c/photo.jpg)}.gbip{background-image:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s96-c/photo.jpg)}.gbii::before{content:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s32-c/photo.jpg);position:absolute}.gbip::before{content:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s96-c/photo.jpg);position:absolute}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gbii{background-image:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s64-c/photo.jpg)}.gbii::before{content:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s64-c/photo.jpg)}.gbip{background-image:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s192-c/photo.jpg)}.gbip::before{content:url(//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s192-c/photo.jpg)}.gbii::before,.gbip::before{-webkit-transform:scale(.5);-moz-transform:scale(.5);-ms-transform:scale(.5);-o-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;-moz-transform-origin:0 0;-ms-transform-origin:0 0;-o-transform-origin:0 0;transform-origin:0 0}}</style><style data-jiis="cc" id="gstyle">html,body{height:100%;margin:0}#viewport{min-height:100%;position:relative;width:100%}.content{padding-bottom:35px}#footer{bottom:0;font-size:10pt;height:35px;position:absolute;width:100%}#gog{padding:3px 8px 0}.gac_m td{line-height:17px}body,td,a,p,.h{font-family:arial,sans-serif}.h{color:#12c;font-size:20px}.q{color:#00c}.ts td{padding:0}.ts{border-collapse:collapse}em{font-weight:bold;font-style:normal}.ds{display:inline-block;}span.ds{margin:3px 0 4px;margin-left:4px}.ctr-p{margin:0 auto;min-width:980px}a.gb1,a.gb2,a.gb3,a.gb4{color:#11c !important}body{background:#fff;color:#222}a{color:#12c;text-decoration:none}a:hover,a:active{text-decoration:underline}.fl a{color:#12c}a:visited{color:#609}a.gb1,a.gb4{text-decoration:underline}a.gb3:hover{text-decoration:none}#ghead a.gb2:hover{color:#fff !important}.sblc{padding-top:5px}.sblc a{display:block;margin:2px 0;margin-left:13px;font-size:11px}.lsbb{height:30px;display:block}.ftl,#footer a{color:#666;margin:2px 10px 0}#footer a:active{color:#dd4b39}.lsb{border:none;color:#000;cursor:pointer;height:30px;margin:0;outline:0;vertical-align:top}.lst:focus{outline:none}body,html{font-size:small}h1,ol,ul,li{margin:0;padding:0}.nojsv{visibility:hidden}.hp #logocont.nojsv{display:none}#body,#footer{display:block}.igehp{display:none}#flci{float:left;margin-left:0;text-align:left;width:0}#fll{float:right;text-align:right;width:100%}#ftby{padding-left:0}#ftby>div,#fll>div,#footer a{display:inline-block}@media only screen and (min-width:1222px){#ftby{margin:0 44px}}</style><style>#ss-box{background:#fff;border:1px solid;border-color:#c9d7f1 #36c #36c #a2bae7;left:0;margin-top:.1em;position:absolute;visibility:hidden;z-index:103}#ss-box a{display:block;padding:.2em .31em;text-decoration:none}#ss-box a:hover{background:#4d90fe;color:#fff !important}a.ss-selected{color:#222 !important;font-weight:bold}a.ss-unselected{color:#12c !important}.ss-selected .mark{display:inline}.ss-unselected .mark{visibility:hidden}#ss-barframe{background:#fff;left:0;position:absolute;visibility:hidden;z-index:100}.gl{white-space:nowrap}.big .tsf-p{padding-left:126px;padding-right:352px}.hp .tsf-p{padding-left:173px;padding-right:173px}.hp #tsf{margin:0 auto;width:833px}#tsf{width:833px}.big #tsf,.hp .big #tsf{width:1139px}.tsf-p{padding-left:126px;padding-right:46px}.hp .big .tsf-p{padding-left:284px;padding-right:284px}#fkbx-tchm{}.fkbx-chm{}.fkbx-chme{}#fkbx-chmer{}#fkbx-chmed{}.fkbx-chmt{}#fkbx-chmtr{}.chw-oc{}#chw-o{}#fkbx-tchm{display:none}.fkbx-chm{line-height:22px;text-align:center}.fkbx-chm a{color:#2518b5;cursor:pointer;margin:5px}._gSc{background:url(data:image/gif;base64,R0lGODlhEAAQAKIHAPzu7PfT0Oh5cfGtqONbUuBLQeBKP////yH5BAEAAAcALAAAAAAQABAAAANKeLrcfkAI8NowZtQFCCbUJmCYsAWFAQBGEVSjyhqmc2HBnDUdGQQkEOOGA5I0CkCKxMQUQjEnAMU0GUkuZTPgaRaWTEK0Sa5tGgkAOw==) no-repeat center;display:inline-block;height:16px;width:16px}#chw-o{display:none}#chw-o a{color:#4285F4;line-height:31px}.chw-oc{font-size:13px;padding:20px !important;text-align:left;width:400px}._mSc{color:#000;font-size:16px;font-weight:bold}._kSc{color:#555}._dKb{border-radius:2px;cursor:pointer;font-size:12px;line-height:27px;margin:0;padding-left:14px;padding-right:14px}#chw-o ._dKb{float:right;margin-left:10px}._k3{background-color:#f9f9f9;border:1px solid #bdbdbd;color:#000}._k3:hover{background-color:#fcfcfc}._k3:active,._k3:hover,._k3:focus{border-color:#3e7ef8}._k3:active{background-color:#e6e6e6}._WW{background-color:#5a97ff;border:1px solid #2558b0;color:#fff}._WW:hover{background-color:#629cff}._WW:hover,._WW:focus{box-shadow:inset 0 0 1px}._WW:active,._qyd:focus,._WW:hover{border-color:#2352a2}._WW:active{background-color:#4279d8}</style><script>var _gjwl = location;
                function _gjuc() {
                    var a = _gjwl.href.indexOf("#");
                    return 0 <= a && (a = _gjwl.href.substring(a + 1), /(^|&)q=/.test(a) && -1 == a.indexOf("#") && !/(^|&)cad=h($|&)/.test(a)) ? (_gjwl.replace("/search?" + a.replace(/(^|&)fp=[^&]*/g, "") + "&cad=h"), 1) : 0
                }
                function _gjh() {
                    !_gjuc() && google.x({id: "GJH"}, function () {
                        google.nav && google.nav.gjh && google.nav.gjh()
                    })
                }
                ;
                (function () {
                    window.google.dcl = !1;
                    window.google.dclc = [];
                    function b() {
                        google.dcl = !0;
                        google.dclc.forEach(function (a) {
                            a()
                        });
                        google.dclc = {push: function (a) {
                                a()
                            }};
                        document.removeEventListener("DOMContentLoaded", b)
                    }
                    document.addEventListener("DOMContentLoaded", b);
                })();
                window.rwt = function (a, g, h, n, o, i, c, p, j, d) {
                    return true
                };
                (window['gbar'] = window['gbar'] || {})._CONFIG = [[[0, "www.gstatic.com", "og.og2.en_US.c-UeqftFRws.O", "com", "en", "1", 0, [3, 2, ".40.64.", "r_cp.", "31216,3700366", "1432002524", "0"], "40400", "EvtcVeOOKsrmoATOmYGYBw", 0, 0, "og.og2.-25vy5fcjs0m9.L.W.O", "AItRSTMmI6OjUE8bLN1ypXr0PVVywbs1nw", "AItRSTMgHUKjABVi_ikVWD_72LsN2IZNFA", "", 2, 0, 200, "USA"], ["", "https", "plus.google.com", "", "/u/0/_/notifications/frame", "sourceid=1", "pid=1", "en", 5, "https://accounts.google.com/ServiceLogin?hl=en\u0026continue=https://www.google.com/", 0, 30000, null, "%1$s Reload the page %2$s and try again."], 0, ["m;/_/scs/abc-static/_/js/k=gapi.gapi.en.dPxK-DAj_pE.O/m=__features__/am=AAQ/rt=j/d=1/rs=AItRSTN0fuoBkyFaoHWfzWWLct0BxZgQSQ", "https://apis.google.com", "", "1", "1", "", "APfa0bon26_NvWSt4T0pUfkCS-zGIOKjVAE0e136-ztegaPhOq8PoN2CXkBIJK-ip0ByijBG1UZ9-3w1Fxz-Map6Brvo7HOkyQ==", 1, "es_plusone_gc_20150512.0_p0", "en"], ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js", "googleapis.client:plusone:gapi.iframes", "0", "en"], ["1", "iframes-styles-slide-menu", "https", "plus.google.com", "", "/u/0/_/socialgraph/circlepicker/menu", "hl=en"], [100, "Notifications", 1, "https", "plus.google.com", "", 0, "", "POST", "/u/0/_/n/gcosuc", 3000, "%1$s Unread notifications", 1, "There was an error loading notifications."], [100, "Share", "There was an error loading Google+ share."], [0.009999999776482582, "com", "1", [null, "", "w", null, 1, 5184000, 1, 0], null, [["", "", "", 0, 0, -1]], [null, 0, 0], 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]], ["%1$s (default)", "Google+ page", 0, "%1$s (delegated)", 1, null, 96, "https://www.google.com/webhp?authuser=$authuser", "", null, null, 1, "https://accounts.google.com/ListAccounts?listPages=0", 0, "dashboard/overview", null, "Business account you own", "Business account you manage", "Business account icon", "Google+ Profile Icon", "", 0], [1, 1, 0, null, "0", "robbiebise@gmail.com", ""], [1, 0.001000000047497451, 1], [1, 0.1000000014901161, 2, 1], [0, "", null, "", 0, "There was an error loading your Marketplace apps.", "You have no Marketplace apps.", 1, [1, "https://www.google.com/webhp?tab=ww", "Search", "", "0 -414px", null, 0], 0, 1, 1], [1], [0, 1, ["lg"], 1, ["lat"]], [["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "drt", "def", "", "", "", ""], [""]], null, null, [1, null, null, "[[]]", ["https", "plus.google.com", 0, "/u/0", "rt=j\u0026sourceid=1", ["/u/0/_/og/storage/get", ""], ["/u/0/_/og/storage/set", ""], ["/u/0/_/og/storage/remove", ""]]], [30, 127, 1, 0, 60], null, null, null, ["https", "clients5.google.com", "", "pagead/drt/dn/"], null, [1, 0]]];
                (window['gbar'] = window['gbar'] || {})._DPG = [{'_fdm_': ['_r'], 'dbg': ['sy4', 'sy7', 'sy8'], 'def': ['sy10', 'sy11', 'sy13', 'sy14', 'sy18', 'sy4', 'sy5', 'sy7', 'sy8', 'sy9'], 'drt': ['sy4', 'sy5', 'sy6'], 'fg': ['sy18'], 'fot': ['sy10', 'sy11', 'sy13', 'sy18', 'sy4', 'sy7', 'sy9'], 'ig': ['sy13', 'sy18', 'sy4', 'sy7', 'sy9'], 'in': ['_r'], 'jb': ['sy4', 'sy5', 'sy6'], 'lat': ['sy10', 'sy14', 'sy18', 'sy4', 'sy5', 'sy7', 'sy8', 'sy9'], 'lg': ['sy18', 'sy4', 'sy7', 'sy9'], 'sg': ['sy18'], 'sy10': ['sy4', 'sy9'], 'sy11': ['sy10', 'sy13', 'sy4', 'sy7', 'sy9'], 'sy13': ['sy7', 'sy9'], 'sy14': ['sy10', 'sy4', 'sy5', 'sy7', 'sy8', 'sy9'], 'sy18': ['_r'], 'sy4': ['_r'], 'sy5': ['sy4'], 'sy6': ['sy4', 'sy5'], 'sy7': ['sy4'], 'sy8': ['sy4', 'sy7'], 'sy9': ['sy4', 'sy7']}];
                (window['gbar'] = window['gbar'] || {})._LDD = ["in", "fot"];
                this.gbar_ = this.gbar_ || {};
                (function (_) {
                    var window = this;
                    try {
                        var ga, ha;
                        _.aa = _.aa || {};
                        _.m = this;
                        _.n = function (a) {
                            return void 0 !== a
                        };
                        _.p = function (a, c) {
                            for (var d = a.split("."), e = c || _.m, f; f = d.shift(); )
                                if (null != e[f])
                                    e = e[f];
                                else
                                    return null;
                            return e
                        };
                        _.ba = function (a) {
                            a.T = function () {
                                return a.Je ? a.Je : a.Je = new a
                            }
                        };
                        _.ca = function (a) {
                            var c = typeof a;
                            if ("object" == c)
                                if (a) {
                                    if (a instanceof Array)
                                        return"array";
                                    if (a instanceof Object)
                                        return c;
                                    var d = Object.prototype.toString.call(a);
                                    if ("[object Window]" == d)
                                        return"object";
                                    if ("[object Array]" == d || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice"))
                                        return"array";
                                    if ("[object Function]" == d || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call"))
                                        return"function"
                                } else
                                    return"null";
                            else if ("function" == c && "undefined" == typeof a.call)
                                return"object";
                            return c
                        };
                        _.da = function (a) {
                            return"array" == _.ca(a)
                        };
                        _.t = function (a) {
                            return"string" == typeof a
                        };
                        _.ea = function (a) {
                            return"function" == _.ca(a)
                        };
                        _.fa = "closure_uid_" + (1E9 * Math.random() >>> 0);
                        ga = function (a, c, d) {
                            return a.call.apply(a.bind, arguments)
                        };
                        ha = function (a, c, d) {
                            if (!a)
                                throw Error();
                            if (2 < arguments.length) {
                                var e = Array.prototype.slice.call(arguments, 2);
                                return function () {
                                    var d = Array.prototype.slice.call(arguments);
                                    Array.prototype.unshift.apply(d, e);
                                    return a.apply(c, d)
                                }
                            }
                            return function () {
                                return a.apply(c, arguments)
                            }
                        };
                        _.u = function (a, c, d) {
                            _.u = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? ga : ha;
                            return _.u.apply(null, arguments)
                        };
                        _.ia = Date.now || function () {
                            return+new Date
                        };
                        _.v = function (a, c) {
                            var d = a.split("."), e = _.m;
                            d[0]in e || !e.execScript || e.execScript("var " + d[0]);
                            for (var f; d.length && (f = d.shift()); )
                                !d.length && _.n(c) ? e[f] = c : e[f] ? e = e[f] : e = e[f] = {}
                        };
                        _.x = function (a, c) {
                            function d() {
                            }
                            d.prototype = c.prototype;
                            a.J = c.prototype;
                            a.prototype = new d;
                            a.prototype.constructor = a;
                            a.mi = function (a, d, g) {
                                for (var h = Array(arguments.length - 2), l = 2; l < arguments.length; l++)
                                    h[l - 2] = arguments[l];
                                return c.prototype[d].apply(a, h)
                            }
                        };
                        _.y = function () {
                            this.Ta = this.Ta;
                            this.Sa = this.Sa
                        };
                        _.y.prototype.Ta = !1;
                        _.y.prototype.isDisposed = function () {
                            return this.Ta
                        };
                        _.y.prototype.aa = function () {
                            this.Ta || (this.Ta = !0, this.N())
                        };
                        _.y.prototype.N = function () {
                            if (this.Sa)
                                for (; this.Sa.length; )
                                    this.Sa.shift()()
                        };
                        _.ja = function (a) {
                            if (Error.captureStackTrace)
                                Error.captureStackTrace(this, _.ja);
                            else {
                                var c = Error().stack;
                                c && (this.stack = c)
                            }
                            a && (this.message = String(a))
                        };
                        _.x(_.ja, Error);
                        _.ja.prototype.name = "CustomError";
                        var la;
                        _.ka = String.prototype.trim ? function (a) {
                            return a.trim()
                        } : function (a) {
                            return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")
                        };
                        _.ma = function (a, c) {
                            for (var d = 0, e = (0, _.ka)(String(a)).split("."), f = (0, _.ka)(String(c)).split("."), g = Math.max(e.length, f.length), h = 0; 0 == d && h < g; h++) {
                                var l = e[h] || "", q = f[h] || "", r = RegExp("(\\d*)(\\D*)", "g"), w = RegExp("(\\d*)(\\D*)", "g");
                                do {
                                    var B = r.exec(l) || ["", "", ""], N = w.exec(q) || ["", "", ""];
                                    if (0 == B[0].length && 0 == N[0].length)
                                        break;
                                    d = la(0 == B[1].length ? 0 : (0, window.parseInt)(B[1], 10), 0 == N[1].length ? 0 : (0, window.parseInt)(N[1], 10)) || la(0 == B[2].length, 0 == N[2].length) || la(B[2], N[2])
                                } while (0 == d)
                            }
                            return d
                        };
                        la = function (a, c) {
                            return a < c ? -1 : a > c ? 1 : 0
                        };
                        _.na = Array.prototype;
                        _.oa = _.na.indexOf ? function (a, c, d) {
                            return _.na.indexOf.call(a, c, d)
                        } : function (a, c, d) {
                            d = null == d ? 0 : 0 > d ? Math.max(0, a.length + d) : d;
                            if (_.t(a))
                                return _.t(c) && 1 == c.length ? a.indexOf(c, d) : -1;
                            for (; d < a.length; d++)
                                if (d in a && a[d] === c)
                                    return d;
                            return-1
                        };
                        _.pa = _.na.forEach ? function (a, c, d) {
                            _.na.forEach.call(a, c, d)
                        } : function (a, c, d) {
                            for (var e = a.length, f = _.t(a) ? a.split("") : a, g = 0; g < e; g++)
                                g in f && c.call(d, f[g], g, a)
                        };
                        _.qa = _.na.filter ? function (a, c, d) {
                            return _.na.filter.call(a, c, d)
                        } : function (a, c, d) {
                            for (var e = a.length, f = [], g = 0, h = _.t(a) ? a.split("") : a, l = 0; l < e; l++)
                                if (l in h) {
                                    var q = h[l];
                                    c.call(d, q, l, a) && (f[g++] = q)
                                }
                            return f
                        };
                        _.ra = _.na.map ? function (a, c, d) {
                            return _.na.map.call(a, c, d)
                        } : function (a, c, d) {
                            for (var e = a.length, f = Array(e), g = _.t(a) ? a.split("") : a, h = 0; h < e; h++)
                                h in g && (f[h] = c.call(d, g[h], h, a));
                            return f
                        };
                        _.sa = _.na.reduce ? function (a, c, d, e) {
                            e && (c = (0, _.u)(c, e));
                            return _.na.reduce.call(a, c, d)
                        } : function (a, c, d, e) {
                            var f = d;
                            (0, _.pa)(a, function (d, h) {
                                f = c.call(e, f, d, h, a)
                            });
                            return f
                        };
                        _.ta = _.na.some ? function (a, c, d) {
                            return _.na.some.call(a, c, d)
                        } : function (a, c, d) {
                            for (var e = a.length, f = _.t(a) ? a.split("") : a, g = 0; g < e; g++)
                                if (g in f && c.call(d, f[g], g, a))
                                    return!0;
                            return!1
                        };
                        _.ua = /\uffff/.test("\uffff") ? /[\\\"\x00-\x1f\x7f-\uffff]/g : /[\\\"\x00-\x1f\x7f-\xff]/g;
                        var va = function (a) {
                            var c = arguments.length;
                            if (1 == c && _.da(arguments[0]))
                                return va.apply(null, arguments[0]);
                            for (var d = {}, e = 0; e < c; e++)
                                d[arguments[e]] = !0;
                            return d
                        };
                        _.z = function () {
                        };
                        _.A = function (a, c, d, e) {
                            a.b = null;
                            c || (c = d ? [d] : []);
                            a.C = d ? String(d) : void 0;
                            a.B = 0 === d ? -1 : 0;
                            a.o = c;
                            a:{
                                if (a.o.length && (c = a.o.length - 1, (d = a.o[c]) && "object" == typeof d && !_.da(d))) {
                                    a.A = c - a.B;
                                    a.w = d;
                                    break a
                                }
                                a.A = Number.MAX_VALUE
                            }
                            if (e)
                                for (c = 0; c < e.length; c++)
                                    d = e[c], d < a.A ? (d += a.B, a.o[d] = a.o[d] || _.wa) : a.w[d] = a.w[d] || _.wa
                        };
                        _.wa = [];
                        _.C = function (a, c) {
                            if (c < a.A) {
                                var d = c + a.B, e = a.o[d];
                                return e === _.wa ? a.o[d] = [] : e
                            }
                            e = a.w[c];
                            return e === _.wa ? a.w[c] = [] : e
                        };
                        _.D = function (a, c, d) {
                            a.b || (a.b = {});
                            if (!a.b[d]) {
                                var e = _.C(a, d);
                                e && (a.b[d] = new c(e))
                            }
                            return a.b[d]
                        };
                        _.z.prototype.gb = function () {
                            return this.o
                        };
                        _.z.prototype.toString = function () {
                            return this.o.toString()
                        };
                        _.xa = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.xa, _.z);
                        var ya = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(ya, _.z);
                        var Fa;
                        _.za = function () {
                            this.b = {};
                            this.o = {}
                        };
                        _.ba(_.za);
                        _.Ba = function (a, c) {
                            a.T = function () {
                                return _.Aa(_.za.T(), c)
                            };
                            a.Oh = function () {
                                return _.za.T().b[c] || null
                            }
                        };
                        _.E = function (a) {
                            return _.Aa(_.za.T(), a)
                        };
                        _.Da = function (a, c) {
                            var d = _.za.T();
                            if (a in d.b) {
                                if (d.b[a] != c)
                                    throw new Ca(a);
                            } else {
                                d.b[a] = c;
                                var e = d.o[a];
                                if (e)
                                    for (var f = 0, g = e.length; f < g; f++)
                                        e[f].b(d.b, a);
                                delete d.o[a]
                            }
                        };
                        _.Aa = function (a, c) {
                            if (c in a.b)
                                return a.b[c];
                            throw new Ea(c);
                        };
                        Fa = function (a) {
                            _.ja.call(this);
                            this.da = a
                        };
                        _.x(Fa, _.ja);
                        var Ca = function (a) {
                            Fa.call(this, a)
                        };
                        _.x(Ca, Fa);
                        var Ea = function (a) {
                            Fa.call(this, a)
                        };
                        _.x(Ea, Fa);
                        _.Ga = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.Ga, _.z);
                        var Ha = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(Ha, _.z);
                        Ha.prototype.zc = function () {
                            return _.D(this, _.Ga, 14)
                        };
                        _.F = function (a, c) {
                            return null != a ? a : !!c
                        };
                        _.G = function (a) {
                            var c;
                            void 0 == c && (c = "");
                            return null != a ? a : c
                        };
                        _.H = function (a, c) {
                            void 0 == c && (c = 0);
                            return null != a ? a : c
                        };
                        var Ia = new Ha(window.gbar && window.gbar._CONFIG ? window.gbar._CONFIG[0] : [[, , , , , , , []], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []]), Ja;
                        Ja = _.C(Ia, 3);
                        _.Ka = _.F(Ja);
                        _.I = function () {
                        };
                        _.v("gbar_._DumpException", function (a) {
                            if (_.Ka)
                                throw a;
                            _.I(a)
                        });
                        var La = function () {
                            this.o = !1;
                            this.b = []
                        };
                        La.prototype.w = function (a) {
                            if (!this.o) {
                                this.o = !0;
                                for (var c = 0; c < this.b.length; c++)
                                    try {
                                        this.b[c]()
                                    } catch (d) {
                                        a(d)
                                    }
                                this.b = null;
                                try {
                                    _.E("api").Ya()
                                } catch (e) {
                                }
                            }
                        };
                        _.Ma = new La;
                        var Na = function () {
                            _.y.call(this);
                            this.jh = Ia
                        };
                        _.x(Na, _.y);
                        _.Ba(Na, "cs");
                        _.J = function () {
                            return Na.T().jh
                        };
                        _.Oa = function () {
                            return _.D(_.J(), ya, 1) || new ya
                        };
                        _.Da("cs", new Na);
                        var Pa;
                        a:{
                            var Qa = _.m.navigator;
                            if (Qa) {
                                var Ra = Qa.userAgent;
                                if (Ra) {
                                    Pa = Ra;
                                    break a
                                }
                            }
                            Pa = ""
                        }
                        _.Sa = function (a) {
                            return-1 != Pa.indexOf(a)
                        };
                        _.Ta = function () {
                            return _.Sa("Opera") || _.Sa("OPR")
                        };
                        _.Ua = function () {
                            return _.Sa("Edge") || _.Sa("Trident") || _.Sa("MSIE")
                        };
                        var Va = function () {
                            return _.Sa("Edge")
                        };
                        var $a, eb, fb, hb, kb, lb, ib;
                        _.Wa = _.Ta();
                        _.K = _.Ua();
                        _.Xa = _.Sa("Gecko") && !(-1 != Pa.toLowerCase().indexOf("webkit") && !Va()) && !(_.Sa("Trident") || _.Sa("MSIE")) && !Va();
                        _.Ya = -1 != Pa.toLowerCase().indexOf("webkit") && !Va();
                        _.Za = _.Ya && _.Sa("Mobile");
                        $a = _.m.navigator || null;
                        _.ab = $a && $a.platform || "";
                        _.bb = _.Sa("Macintosh");
                        _.cb = _.Sa("Windows");
                        _.db = _.Sa("Linux") || _.Sa("CrOS");
                        eb = function () {
                            var a = Pa;
                            if (_.Xa)
                                return/rv\:([^\);]+)(\)|;)/.exec(a);
                            if (_.K && Va())
                                return/Edge\/([\d\.]+)/.exec(a);
                            if (_.K)
                                return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
                            if (_.Ya)
                                return/WebKit\/(\S+)/.exec(a)
                        };
                        fb = function () {
                            var a = _.m.document;
                            return a ? a.documentMode : void 0
                        };
                        _.gb = function () {
                            if (_.Wa && _.m.opera) {
                                var a = _.m.opera.version;
                                return _.ea(a) ? a() : a
                            }
                            var a = "", c = eb();
                            c && (a = c ? c[1] : "");
                            return _.K && !Va() && (c = fb(), c > (0, window.parseFloat)(a)) ? String(c) : a
                        }();
                        hb = {};
                        _.L = function (a) {
                            return hb[a] || (hb[a] = 0 <= _.ma(_.gb, a))
                        };
                        _.jb = function (a) {
                            return _.K && (Va() || ib >= a)
                        };
                        kb = _.m.document;
                        lb = fb();
                        ib = !kb || !_.K || !lb && Va() ? void 0 : lb || ("CSS1Compat" == kb.compatMode ? (0, window.parseInt)(_.gb, 10) : 5);
                        _.mb = !_.K || _.jb(9);
                        _.nb = !_.Xa && !_.K || _.K && _.jb(9) || _.Xa && _.L("1.9.1");
                        _.ob = _.K && !_.L("9");
                        _.pb = _.K || _.Wa || _.Ya;
                        _.rb = va("area base br col command embed hr img input keygen link meta param source track wbr".split(" "));
                        _.tb = function () {
                            this.b = "";
                            this.o = _.sb
                        };
                        _.tb.prototype.vb = !0;
                        _.sb = {};
                        _.tb.prototype.nb = function () {
                            return this.b
                        };
                        _.ub = function (a) {
                            var c = new _.tb;
                            c.b = a;
                            return c
                        };
                        _.vb = _.ub("");
                        _.xb = function () {
                            this.b = "";
                            this.w = _.wb;
                            this.o = null
                        };
                        _.xb.prototype.zd = !0;
                        _.xb.prototype.Xb = function () {
                            return this.o
                        };
                        _.xb.prototype.vb = !0;
                        _.xb.prototype.nb = function () {
                            return this.b
                        };
                        _.wb = {};
                        _.yb = function (a, c) {
                            var d = new _.xb;
                            d.b = a;
                            d.o = c;
                            return d
                        };
                        _.yb("<!DOCTYPE html>", 0);
                        _.zb = _.yb("", 0);
                        var Ab = function (a, c, d) {
                            this.B = a;
                            this.o = !1;
                            this.b = c;
                            this.w = d
                        };
                        Ab.prototype.Ya = function (a) {
                            if (this.o)
                                throw Error("t`" + this.b);
                            try {
                                a.apply(this.B, this.w), this.o = !0
                            } catch (c) {
                            }
                        };
                        var Bb = function (a) {
                            _.y.call(this);
                            this.w = a;
                            this.b = [];
                            this.o = {}
                        };
                        _.x(Bb, _.y);
                        Bb.prototype.B = function (a) {
                            var c = (0, _.u)(function () {
                                this.b.push(new Ab(this.w, a, Array.prototype.slice.call(arguments)))
                            }, this);
                            return this.o[a] = c
                        };
                        Bb.prototype.Ya = function () {
                            for (var a = this.b.length, c = this.b, d = [], e = 0; e < a; ++e) {
                                var f = c[e].b, g;
                                a:{
                                    g = this.w;
                                    for (var h = f.split("."), l = h.length, q = 0; q < l; ++q)
                                        if (g[h[q]])
                                            g = g[h[q]];
                                        else {
                                            g = null;
                                            break a
                                        }
                                    g = g instanceof Function ? g : null
                                }
                                if (g && g != this.o[f])
                                    try {
                                        c[e].Ya(g)
                                    } catch (r) {
                                    }
                                else
                                    d.push(c[e])
                            }
                            this.b = d.concat(c.slice(a))
                        };
                        var Db;
                        _.Cb = "bbh bbr bbs has prm sngw so".split(" ");
                        Db = new Bb(_.m);
                        _.Da("api", Db);
                        for (var Eb = "addExtraLink addLink aomc asmc close cp.c cp.l cp.me cp.ml cp.rc cp.rel ela elc elh gpca gpcr lGC lPWF ldb mls noam paa pc pca pcm pw.clk pw.hvr qfaae qfaas qfaau qfae qfas qfau qfhi qm qs qsi rtl sa setContinueCb snaw sncw som sp spd spn spp sps tsl tst up.aeh up.aop up.dpc up.iic up.nap up.r up.sl up.spd up.tp upel upes upet".split(" ").concat(_.Cb), Fb = (0, _.u)(Db.B, Db), Gb = 0; Gb < Eb.length; Gb++) {
                            var Hb = "gbar." + Eb[Gb];
                            null == _.p(Hb, window) && _.v(Hb, Fb(Hb))
                        }
                        _.v("gbar.up.gpd", function () {
                            return""
                        });
                        var Ib = _.Oa(), Jb = _.D(Ib, _.xa, 8) || new _.xa, Kb;
                        Kb = _.C(Jb, 2);
                        var Lb = _.H(Kb), Mb;
                        Mb = _.C(Jb, 4);
                        var Nb = _.G(Mb), Ob = _.G(_.C(Jb, 3)), Pb;
                        Pb = _.C(Jb, 5);
                        var Qb = _.G(Pb), Rb;
                        Rb = null != _.C(Jb, 1) ? _.C(Jb, 1) : 1;
                        var Sb = _.H(Rb, 1);
                        _.C(Jb, 6);
                        _.C(Jb, 7);
                        _.v("gbar.bv", {n: Lb, r: Nb, f: Ob, e: Qb, m: Sb});
                        _.v("gbar.kn", function () {
                            return!0
                        });
                        _.v("gbar.sb", function () {
                            return!1
                        });
                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        _.v("gbar.elr", function () {
                            return{es: {f: 152, h: 60, m: 30}, mo: "md", vh: window.innerHeight || 0, vw: window.innerWidth || 0}
                        });
                    } catch (e) {
                        _._DumpException(e)
                    }
                })(this.gbar_);
// Google Inc.
        </script></head><body class="hp vasq" onload="try {
                    if (!google.j.b) {
                        document.f & amp; & amp; document.f.q.focus(); document.gbqf & amp; & amp; document.gbqf.q.focus(); }
                } catch (e) {
                }
                if (document.images)
                    new Image().src = '/images/nav_logo195.png'" alink="#dd4b39" bgcolor="#fff" id="gsr" link="#12c" text="#222" vlink="#61c"><div class="ctr-p" id="viewport"><div data-jiis="cc" id="doc-info"></div><div data-jiis="cc" id="cst"><style>.fade #center_col,.fade #rhs,.fade #leftnav,.fade #brs,.fade #footcnt{filter:alpha(opacity=33.3);opacity:0.333}.fade-hidden #center_col,.fade-hidden #rhs,.fade-hidden #leftnav{visibility:hidden}.flyr-o,.flyr-w{position:absolute;background-color:#fff;z-index:3;display:block;}.flyr-o{filter:alpha(opacity=66.6);opacity:0.666}.flyr-w{filter:alpha(opacity=20.0);opacity:0.2}.flyr-h{filter:alpha(opacity=0);opacity:0}.flyr-c{display:none}.flt,.flt u,a.fl{text-decoration:none}.flt:hover,.flt:hover u,a.fl:hover{text-decoration:underline}#knavm{color:#4273db;display:inline;font:11px arial,sans-serif !important;left:-13px;position:absolute;top:2px;z-index:2}#pnprev #knavm{bottom:1px;top:auto}#pnnext #knavm{bottom:1px;left:40px;top:auto}a.noline{outline:0}.y.yp{display:none}.y.yf,.y.ys{display:block}.yi{}.s2er{}.s2fp{}.s2fp-h{}.s2ml{}.s2ra{}.s2tb{}.s2tb-h{}.spch{}.spchc{}.spch{background:#fff;height:100%;left:0;opacity:0;overflow:hidden;position:fixed;text-align:left;top:0;visibility:hidden;width:100%;z-index:10000;transition:visibility 0s linear 0.218s,opacity 0.218s,background-color 0.218s}.s2fp.spch{opacity:1;visibility:visible;transition-delay:0s}.s2tb-h.spch{background:rgba(255,255,255,0);opacity:0;visibility:hidden}.s2tb.spch{background:rgba(255,255,255,0);opacity:1;visibility:visible;transition-delay:0s}.close-button{color:#777;cursor:pointer;font-size:26px;right:0;height:11px;line-height:15px;margin:15px;opacity:.6;padding:0;position:absolute;top:0;width:15px}.close-button:hover{opacity:.8}.close-button:active{opacity:1}.google-logo{background:url(data:image/gif;base64,R0lGODlhxABEAMIGALGzsMPFwtHT0N/h3u3v7P3//P///////yH5BAEKAAcALAAAAADEAEQAAAP+WLrc/jDKSau9OJcBuveCJo5kaZ7oJHwsMKSwQsx0bN84M+zDygY5DaEXaH0CggEhyGwKWyGnhCAoGq+ewEvK7cpaW++C+lMuZUOrUXAWu20E8Lvg62grAzUrOu+X4ixhXYAebRYcV4J+ixaEHopOdQB8GpIgjJiNcl16lCKIj5miE44dkEF6pxqgqqOupS5ckp4kgK2uo7C3MKAAQClFhrjDX4FOpcK1ycTDuk56v8zScJtBvQDL09ojzkx6ALlEVgFIuxdU5EXkSdmD1RRDVepI7aW0c3lYWe2k30Z33Ijoq9ZtQj599yyZc9KL3YyDR/g5IKBGCw2IHxbq8Df+cFKDghAoguBhqYOwFotEdrhXQGVGC3UCLHN5CU8WMxgf8XgA0kGdhC3awPLjSKI/lgzU7CoZLYKaZNd81XvX4GmEkmcsNRVTtIK/W2qQMmAqwSrPFlsZ9FygdMK3X2/nONIICxuEiheO3g0VIWraYi8dgPr7UU7cN3owRAXn84NEtUagfqDw9ayxwoUqoC2w2U3DDHohT8ZAtsEReJ0xB046msLm1F4uX1hc9YNYy7LpnKYcdCJVR4TVdjpjxDOLxw6MhCmlkfUP5ytt5gbMd8EsCRABLigu5puI0rpXz+be8rnmPb6nd+I5a1lkMShXkf/WnIFy6r4sfKPVE73+8JtlQeHFUE/0xtl0+gm4QXwUKJSeeKVEAxEbDcLGkIGgybFWBSVFAQtyDqpWXXkRxdQcbV1gJUJlsNwGgV/4eUTBNbiN+OEMItRVH0889OijEuGJd0FJL8AS3BSpkSeBJH+B9GEJHNVS0hoKdPiJhkqeo2CQNQWY2YM2UpXBYju2xBSVCsAo33EksjDCO+9JYFtIVFmowRVC4NiAijEyNiaD993JpnV2jtUlmKbUNugIU7oIE4YHIjijeQX4c2QEDLJV6ILRRdCTlbVcgVyFi1a6KXayoYiBPQ8wJQgZiSI5XV2jQjClXSaUJOKXQ7ppn5gGlarDFeQIW2Osv1L+OgJHl3KYqQKh5SUkeI9mYRBHQtKJ4JRlinZqta2NEWcFwD0QaIK8wtOmB5pImsgfxNbamK97fltvuuJCiuqIhzzrKbCLxUJCwAJX4i+0W8qK7Ly7uXZor8YeW/C9CU8h8T4G0+tAZQpP3Kq9pna6ZkSoSYrwu55SyBO2UpF2sKb+1YicX9m45Ki2+iKan1P6WHSRFRIR7IvKIeXUQbBgGJJdrTStZAisLUN5hVjMJgEkxR3ZMeqtPwjgtdeWsgPuDz/Iu4DR/3RrLrEvdnRK01iUiXZH5QxcRdonoPMP0TnuIE/PPNEguOCk3I33H+L8gIRDN+iZQw2Is4yFTI+RE77N5VO8xXiVbGPuOVfQ3FKXjJ+XzgRz5EZp+uqNR3wVsKzHXiC+zjYs++0aQLOs7bj3XjK/Wlrr+/AquH6eHcQnv5djJISl/PPQLZyhSdBXf5gI4VaffFRmA6a29pdniW6z4Mc+pbw+kF9+7Bw5qpL667NP7NVqTRh/+ULbYWn397PO9Rr865/s4hE2+rkiAQA7) no-repeat center;background-size:98px 34px;float:right;height:34px;left:255px;opacity:0;pointer-events:none;position:relative;top:6px;width:98px;transition:opacity .5s ease-in,left .5s ease-in}.s2tb .google-logo{opacity:1;left:270px;transition:opacity .5s ease-out,left .5s ease-out}.spchc{display:block;height:27px;position:absolute;pointer-events:none}.s2fp .spchc,.s2fp-h .spchc{margin:auto;margin-top:312px;max-width:572px;min-width:534px;padding:0 223px;position:relative;top:0}.s2tb .spchc,.s2tb-h .spchc{background:#fff;box-shadow:0 2px 6px rgba(0,0,0,0.2);margin:0;min-width:100%;overflow:hidden;padding:51px 0 65px 126px;position:absolute}._o3{height:100%;opacity:.1;pointer-events:none;width:100%;transition:opacity .318s ease-in}.s2tb-h ._o3,.s2tb ._o3{height:100%;width:572px;transition:opacity .318s ease-in}.s2ml ._o3,.s2ra ._o3,.s2er ._o3{opacity:1;transition:opacity 0s}.button{background-color:#fff;border:1px solid #eee;border-radius:100%;bottom:0;box-shadow:0 2px 5px rgba(0,0,0,.1);cursor:pointer;display:inline-block;left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:background-color 0.218s,border 0.218s,box-shadow 0.218s}.s2tb-h .button{left:-83px;opacity:0;pointer-events:none;position:absolute;top:-83px;transition-delay:0}.s2fp-h .button{opacity:0;pointer-events:none;position:absolute;transition-delay:0}.s2fp .button,.s2tb .button{opacity:1;pointer-events:auto;position:absolute;-webkit-transform:scale(1);transition-delay:0}.s2ra .button{background-color:#ff4444;border:0;box-shadow:none}._CMb{background-color:#dbdbdb;border-radius:100%;display:inline-block;height:301px;left:-69px;opacity:1;pointer-events:none;position:absolute;top:-69px;width:301px;-webkit-transform:scale(.01);transition:opacity 0.218s}.s2tb-h ._CMb,.s2tb ._CMb{height:151px;left:-28px;top:-28px;width:151px}._AM{float:right;pointer-events:none;position:relative;transition:-webkit-transform 0.218s,opacity 0.218s ease-in}.s2fp-h ._AM,.s2fp ._AM{height:165px;right:-70px;top:-70px;width:165px}.s2fp-h ._AM,.s2tb-h ._AM{-webkit-transform:scale(.1)}.s2fp ._AM,.s2tb ._AM{-webkit-transform:scale(1)}.s2tb-h ._AM,.s2tb ._AM{height:95px;right:-31px;top:-27px;width:95px}.s2ra .button:active{background-color:#cd0000}.button:active{background-color:#eee}._wPb{height:87px;left:43px;pointer-events:none;position:absolute;top:47px;width:42px;-webkit-transform:scale(1)}.s2tb-h ._wPb,.s2tb ._wPb{left:17px;top:7px;-webkit-transform:scale(.53)}._AUb{background-color:#999;border-radius:30px;height:46px;left:25px;pointer-events:none;position:absolute;width:24px}._Fjd{bottom:0;height:53px;left:11px;overflow:hidden;pointer-events:none;position:absolute;width:52px}._oXb{background-color:#999;bottom:14px;height:14px;left:22px;pointer-events:none;position:absolute;width:9px;z-index:1}._dWb{border:7px solid #999;border-radius:28px;bottom:27px;height:57px;pointer-events:none;position:absolute;width:38px;z-index:0}.s2ml ._AUb,.s2ml ._oXb{background-color:#f44}.s2ml ._dWb{border-color:#f44}.s2ra ._AUb,.s2ra ._oXb{background-color:#fff}.s2ra ._dWb{border-color:#fff}.spcht{}.spchta{}.spch-2l{}.spch-3l{}.spch-4l{}.spch-5l{}._gjb{pointer-events:none}.s2fp-h ._gjb,.s2fp ._gjb{position:absolute}.s2tb-h ._gjb,.s2tb ._gjb{position:relative}.spcht{font-weight:normal;line-height:1.2;opacity:0;pointer-events:none;position:absolute;text-align:left;-webkit-font-smoothing:antialiased;transition:opacity .1s ease-in,margin-left .5s ease-in,top 0s linear 0.218s}.s2fp-h .spcht{margin-left:44px}.s2tb-h .spcht{margin-left:32px}.s2fp-h .spcht,.s2fp .spcht{font-size:32px;left:-44px;top:-.2em;width:460px}.s2tb-h .spcht,.s2tb .spcht{font-size:27px;left:7px;top:.2em;width:490px}.s2fp .spcht,.s2tb .spcht{margin-left:0;opacity:1;transition:opacity .5s ease-out,margin-left .5s ease-out}.spchta{color:#1155cc;cursor:pointer;font-size:18px;font-weight:500;pointer-events:auto;text-decoration:underline}.spch-2l.spcht,.spch-3l.spcht,.spch-4l.spcht{transition:top 0.218s ease-out}.spch-2l.spcht{top:-.6em}.spch-3l.spcht{top:-1.3em}.spch-4l.spcht{top:-1.7em}.s2fp .spch-5l.spcht{top:-2.5em}.s2tb .spch-5l.spcht{font-size:24px;top:-1.7em;transition:font-size 0.218s ease-out}.s2wfp{}._ypc{margin-top:-100px;opacity:0;pointer-events:none;position:absolute;width:500px;transition:opacity 0.218s ease-in,margin-top .4s ease-in}.s2wfp ._ypc{margin-top:-300px;opacity:1;transition:opacity .5s ease-out 0.218s,margin-top 0.218s ease-out 0.218s}._zpc{box-shadow:0 1px 0px #4285F4;height:80px;left:0;margin:0;opacity:0;pointer-events:none;position:fixed;right:0;top:-80px;transition:opacity 0.218s,box-shadow 0.218s}.s2wfp ._zpc{box-shadow:0 1px 80px #4285F4;opacity:1;pointer-events:none;-webkit-animation:allow-alert .75s 0 infinite;-webkit-animation-direction:alternate;-webkit-animation-timing-function:ease-out;transition:opacity 0.218s,box-shadow 0.218s}@-webkit-keyframes allow-alert {from{opacity:1}to{opacity:.35}}</style></div> <a href="/setprefs?suggon=2&amp;prev=https://www.google.com/&amp;sig=0_jVJDpwrqYEpqqK_cxLaUCOVL60s%3D" style="left:-1000em;position:absolute">Screen reader users, click here to turn off Google Instant.</a>  <textarea name="csi" id="csi" style="display:none"></textarea><script>if (google.j.b)
                            document.body.style.visibility = 'hidden';</script><div class="jhp" id="searchform"><script>(function () {
                        var _j = 1250;
                        try {
                            var s = document.getElementById('searchform');
                            var w = document['body'] && document.body['offsetWidth'];
                            if (s && w && w >= _j) {
                                s.className += ' big';
                            }
                        } catch (e) {
                        }
                    })();</script>   <style>div#searchform{min-width:980px;z-index:103}div.sfbg,div.sfbgg{height:59px}.big form#tsf,form#tsf{width:auto;max-width:784px;overflow:hidden}#searchform.big>#tsf{max-width:784px}.big div.tsf-p,form>div.tsf-p{margin:-1px 0 0;padding-right:0}#gb{font-size:13px}div#viewport{position:absolute;top:0;width:100%}div#searchform.jhp{margin-top:0}#searchform.big.jhp>#tsf{max-width:none}.jhp>#gb{position:absolute;top:-295px;right:0;width:100%}.jhp>#tsf{max-width:none}</style> <div id="gb"> <div id="gbw">   <div style="top:0;width:100%">  <div class="gb_e gb_0c gb_r gb_Zc gb_3c"><div class="gb_Lc gb_r gb_0c gb_Sc"><div class="gb_ma gb_r gb_na gb_0c"><a class="gb_la gb_r" href="https://plus.google.com/u/0/?tab=wX" data-pid="119" data-ved="0CBIQwi4oAA">+Robbie</a></div><div class="gb_ma gb_r"><a class="gb_la" href="https://mail.google.com/mail/?tab=wm" data-pid="23" data-ved="0CBMQwi4oAQ">Gmail</a></div><div class="gb_ma gb_r"><a class="gb_la" href="https://www.google.com/imghp?hl=en&amp;tab=wi&amp;ei=EvtcVeOOKsrmoATOmYGYBw&amp;ved=0CBQQqi4oAg" data-pid="2">Images</a></div></div><div class="gb_Kc gb_0c gb_r"><div class="gb_ba" id="gbsfw"></div><div class="gb_Ea gb_ea gb_r" id="gbwa"><div class="gb_fa"><a class="gb_ga gb_2" href="http://www.google.com/intl/en/options/" title="Apps" aria-haspopup="true" aria-expanded="false" data-ved="0CBUQvSc"></a><div class="gb_v"></div><div class="gb_u"></div></div></div><div class="gb_8a gb_ea gb_r gb_fb"><div class="gb_fa"><a class="gb_ga" aria-haspopup="true" tabindex="0"><div class="gb_hb gb_2 gb_ib"></div></a><div class="gb_v"></div><div class="gb_u"></div></div><div class="gb_ba" aria-hidden="true" aria-live="assertive"></div></div><div class="gb_1b gb_ea gb_r gb_Sc"><div class="gb_fa"><a class="gb_ga gb_2" href="https://plus.google.com/u/0/stream/all?hl=en" title="Google+ Share" aria-haspopup="true"></a><div class="gb_v"></div><div class="gb_u"></div></div><div class="gb_ba" aria-hidden="true"></div></div><div class="gb_p gb_ea gb_0c gb_r"><div class="gb_fa gb_s gb_0c gb_r"><a class="gb_ga gb_l gb_r" href="https://plus.google.com/u/0/me?tab=wX" title="Account: Robbie Bise  &#10;(robbiebise@gmail.com)" aria-haspopup="true"><span class="gb_d gbii"></span></a><div class="gb_v"></div><div class="gb_u"></div></div></div></div></div>  </div> </div> </div>      <div class="sfbg nojsv" style="margin-top:-15px"><div class="sfbgg"></div></div><form class="tsf" action="/search" style="overflow:visible" id="tsf" method="GET" name="f" onsubmit="return q.value != ''" role="search"><input value="psy-ab" name="sclient" type="hidden"><div data-jibp="" data-jiis="uc" id="tophf"><input type=hidden name=site value=""><input name="source" type="hidden" value="hp"></div><div class="tsf-p"><div class="nojsv logocont" id="logocont"><h1><a id=logo href="https://www.google.com/webhp?hl=en" title="Go to Google Home"><img width=167 height=373 src="/images/nav_logo195.png" alt="Google"></a></h1></div><div class="sfibbbc"><div class="sbtc" id="sbtc"><div class="sbibtd"><div class="nojsv sfopt" id="sfopt"><div class="lsd"><div id=ss-bar style=white-space:nowrap;z-index:98 data-jiis=uc></div></div></div><div class="sfsbc"><div class="nojsb"> <div class="ds" id="sbds"> <div class="lsbb kpbb" id="sblsbb">  <button class="lsb" value="Search" aria-label="Google Search" name="btnG" type="submit"> <span class="sbico"></span> </button> </div> </div> </div></div><div class="sbibod" id="sfdiv">   <input class="lst lst-tbb sbibps" id="lst-ib" maxlength="2048" name="q" autocomplete="off" title="Search" type="text" value="" aria-label="Search"> </div></div></div><div><div id="pocs" style="display:none;left:0px;white-space:nowrap;position:absolute"><div id="pocs0"><span><span>Google</span> Instant is unavailable. Press Enter to search.</span>&nbsp;<a href="/support/websearch/bin/answer.py?answer=186645&amp;form=bb&amp;hl=en">Learn more</a></div><div id="pocs1"><span>Google</span> Instant is off due to connection speed. Press Enter to search.</div><div id="pocs2">Press Enter to search.</div></div></div></div><div class="jsb" style="padding-top:2px"><center><input value="Google Search" aria-label="Google Search" name="btnK" type="submit" jsaction="sf.chk"><input value="I'm Feeling Lucky" aria-label="I'm Feeling Lucky" id="gbqfbb" name="btnI" type="submit"></center></div></div></form></div><div id="gac_scont"></div><div class="spch s2fp-h" style="display:none" id="spch"><div class="spchc" id="spchc"><div class="_o3"><div class="_AM"><span class="_CMb" id="spchl"></span><span class="button" id="spchb"><div class="_wPb"><span class="_AUb"></span><div class="_Fjd"><span class="_oXb"></span><span class="_dWb"></span></div></div></span></div><div class="_gjb"><span class="spcht" id="spchi" style="color:#777"></span><span class="spcht" id="spchf" style="color:#000"></span></div><div class="google-logo"></div></div><div class="_ypc"><div class="_zpc"></div></div></div><div class="close-button" id="spchx">&times;</div></div><div class="content" data-jiis="cc" id="main"><span class="ctr-p" data-jiis="bp" id="body"><center><div style="height:231px;margin-top:80px" id="lga"><img alt="Google" height="95" id="hplogo" src="/images/srpr/logo11w.png" style="padding-top:112px" width="269" onload="window.lol && lol()"></div><div style="height:102px"><div id="chw-o" data-ved="0CAQQuzY"><div class="_mSc">Say "Ok Google" to start a voice search.</div><p class="_kSc">Search without lifting a finger. When you say "Ok Google," Chrome will search for what you say next.</p><div><a href="https://support.google.com/chrome/?p=ui_hotword_search" target="_blank" onmousedown="return rwt(this, '', '', '', '', 'AFQjCNHyNmNOmnFoJjpgISA7IEqNETP_hw', 'IAhta11dQ9Rc3yOrIh6B8A', '0CAUQgDY', '', '', event)">Learn more</a><button class="_dKb _k3" href="#" id="hotword__chw-on" data-noload="" jsaction="chw.optInNoThanksButtonClicked" data-ved="0CAYQ_jU">No thanks</button><button class="_dKb _WW" href="#" id="hotword__chw-oe" data-noload="" jsaction="chw.optInEnableButtonClicked" data-ved="0CAcQ_zU">Enable "Ok Google"</button></div></div></div><div id="prm-pt" style="margin-top:12px"><script>window.gbar && gbar.up && gbar.up.tp && gbar.up.tp();</script></div></center></span><div class="ctr-p" data-jiis="bp" id="footer"> <div id="footcnt"> <style>.fmulti{}._dQc{bottom:0;left:0;position:absolute;right:0}._GR{background:#f2f2f2;left:0;right:0;-webkit-text-size-adjust:none}.fbar p{display:inline}.fbar a,#fsettl{text-decoration:none;white-space:nowrap}.fbar{margin-left:-27px}._Gs{padding-left:27px;margin:0 !important}._eA{padding:0 !important;margin:0 !important}#fbarcnt{display:block}._E2 a:hover{text-decoration:underline}._HR img{margin-right:4px}._HR a,._GR #swml a{text-decoration:none}.fmulti{text-align:center}.fmulti #fsr{display:block;float:none}.fmulti #fuser{display:block;float:none}#fuserm{line-height:25px}#fsr{float:right;white-space:nowrap}#fsl{white-space:nowrap}#fsett{background:#fff;border:1px solid #999;bottom:30px;padding:10px 0;position:absolute;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);text-align:left;z-index:104}#fsett a{display:block;line-height:44px;padding:0 20px;text-decoration:none;white-space:nowrap}._E2 #fsettl:hover{text-decoration:underline}._E2 #fsett a:hover{text-decoration:underline}._mk{color:#777}._Nh{color:#222;font-size:14px;font-weight:normal;-webkit-tap-highlight-color:rgba(0,0,0,0)}._Nh:hover,._Nh:active{color:#444}._Mo{display:inline-block;position:relative}._Nh ._Mo ._cuf{opacity:0.55}a._Nh:hover ._Mo ._cuf,a._Nh:active ._Mo ._cuf{opacity:1.0}._ri,._Wk{height:13px;width:8px}._cuf{border:8px solid rgba(255,255,255,0);border-radius:8px;position:absolute}._ri ._cuf{border-left:8px solid #777;left:1px}._Wk ._cuf{border-right:8px solid #777;left:-9px}._ri ._duf,._Wk ._duf{border:12px solid rgba(255,255,255,0);position:absolute;top:-4px}._ri ._duf{border-left:10px solid #f6f6f6;left:-4px}._Wk ._duf{border-right:10px solid #f6f6f6;left:-10px}._Nh{padding:8px 16px;margin-right:10px}._mk{margin:40px 0}._dD{margin-right:10px}._nW{margin-left:135px}#fbar{background:#f2f2f2;border-top:1px solid #e4e4e4;line-height:40px;min-width:980px}._xac{margin-left:135px}.fbar p,.fbar a,#fsettl,#fsett a{color:#777}.fbar a:hover,#fsett a:hover{color:#333}.fbar{font-size:small}#fuser{float:right}._HR{margin-left:135px;line-height:15px;}</style> <style>#fsl{margin-left:30px}#fsr{margin-right:30px}.fmulti #fsl{margin-left:0}.fmulti #fsr{margin-right:0}</style> <div class="_dQc _E2" id="fbar">  <div class="fbar"> <span id="fsr">  <a class="_Gs" href="//www.google.com/intl/en/policies/privacy/?fg=1">Privacy</a> <a class="_Gs" href="//www.google.com/intl/en/policies/terms/?fg=1">Terms</a>    <span style="display:inline-block;position:relative"> <a class="_Gs" href="https://www.google.com/preferences?hl=en" id="fsettl" aria-controls="fsett" aria-expanded="false" role="button" jsaction="foot.cst">Settings</a> <span id="fsett" style="display:none"> <a href="https://www.google.com/preferences?hl=en&amp;fg=1">Search settings</a> <span data-jibp="h" data-jiis="uc" id="advsl"> <a href="/advanced_search?hl=en&amp;fg=1">Advanced search</a> </span> <a href="/history?hl=en&amp;fg=1">  History </a> <a href="//support.google.com/websearch/?p=ws_results_help&amp;hl=en&amp;fg=1">Search Help</a>  <a href="javascript:void(0)" data-bucket="websearch" id="_Yvd" target="_blank" jsaction="gf.sf" data-ved="0CAoQLg">  Send feedback </a>  </span> </span>   </span> <span id="fsl"> <a class="_Gs" href="//www.google.com/intl/en/ads/?fg=1">Advertising</a> <a class="_Gs" href="//www.google.com/services/?fg=1">Business</a> <a class="_Gs" href="//www.google.com/intl/en/about.html?fg=1">About</a> </span> </div>  </div> </div>   </div></div><script>(function () {
                            var _mstr = '\74span class\75ctr-p id\75body data-jiis\75bp\76\74/span\76\74span class\75ctr-p id\75footer data-jiis\75bp\76\74/span\76\74span id\75xjsi\76\74/span\076';
                            var commands = [];
                            var index = 0;
                            var gstyle = document.getElementById('gstyle');
                            if (gstyle) {
                                commands[index++] =
                                        {'n': 'pcs', 'i': 'gstyle', 'css': gstyle.innerHTML, 'is': '', 'r': true, 'sc': true};
                            }
                            commands[index++] =
                                    {'n': 'pc', 'i': 'cst', 'h': document.getElementById('cst').innerHTML, 'is': '', 'r': true, 'sc': true};
                            commands[index] =
                                    {'n': 'pc', 'i': 'main', 'h': _mstr, 'is': '', 'r': true, 'sc': true};
                            google.j[1] = {cmds: commands};
                        })();</script>
            <script data-url="/extern_chrome/594c7f47e2071e47.js?bav=or." id="ecs">
            </script>
            <script>
                this.gbar_ = this.gbar_ || {};
                (function (_) {
                    var window = this;
                    try {
                        var Zb, $b, ac, bc, cc, dc, ec, hc, ic, jc, oc, uc;
                        _.Wb = function (a) {
                            a && "function" == typeof a.aa && a.aa()
                        };
                        _.Xb = function (a) {
                            var c = _.Ma;
                            c.o ? a() : c.b.push(a)
                        };
                        _.Yb = function (a, c, d) {
                            c < a.A ? a.o[c + a.B] = d : a.w[c] = d
                        };
                        Zb = /[\x00&<>"']/;
                        $b = /\x00/g;
                        ac = /'/g;
                        bc = /"/g;
                        cc = />/g;
                        dc = /</g;
                        ec = /&/g;
                        _.fc = function (a) {
                            if (!Zb.test(a))
                                return a;
                            -1 != a.indexOf("&") && (a = a.replace(ec, "&amp;"));
                            -1 != a.indexOf("<") && (a = a.replace(dc, "&lt;"));
                            -1 != a.indexOf(">") && (a = a.replace(cc, "&gt;"));
                            -1 != a.indexOf('"') && (a = a.replace(bc, "&quot;"));
                            -1 != a.indexOf("'") && (a = a.replace(ac, "&#39;"));
                            -1 != a.indexOf("\x00") && (a = a.replace($b, "&#0;"));
                            return a
                        };
                        _.gc = function (a) {
                            var c = typeof a;
                            return"object" == c && null != a || "function" == c
                        };
                        hc = function (a) {
                            if (a && "number" == typeof a.length) {
                                if (_.gc(a))
                                    return"function" == typeof a.item || "string" == typeof a.item;
                                if (_.ea(a))
                                    return"function" == typeof a.item
                            }
                            return!1
                        };
                        ic = {cellpadding: "cellPadding", cellspacing: "cellSpacing", colspan: "colSpan", frameborder: "frameBorder", height: "height", maxlength: "maxLength", role: "role", rowspan: "rowSpan", type: "type", usemap: "useMap", valign: "vAlign", width: "width"};
                        jc = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");
                        _.kc = function (a, c, d) {
                            for (var e in a)
                                c.call(d, a[e], e, a)
                        };
                        _.lc = function (a) {
                            var c = a.length;
                            if (0 < c) {
                                for (var d = Array(c), e = 0; e < c; e++)
                                    d[e] = a[e];
                                return d
                            }
                            return[]
                        };
                        _.mc = function (a, c) {
                            return 0 <= (0, _.oa)(a, c)
                        };
                        _.nc = function (a) {
                            var c = _.ca(a);
                            return"array" == c || "object" == c && "number" == typeof a.length
                        };
                        oc = function (a, c, d) {
                            function e(d) {
                                d && c.appendChild(_.t(d) ? a.createTextNode(d) : d)
                            }
                            for (var f = 2; f < d.length; f++) {
                                var g = d[f];
                                !_.nc(g) || _.gc(g) && 0 < g.nodeType ? e(g) : (0, _.pa)(hc(g) ? _.lc(g) : g, e)
                            }
                        };
                        _.pc = function (a, c) {
                            _.kc(c, function (c, e) {
                                "style" == e ? a.style.cssText = c : "class" == e ? a.className = c : "for" == e ? a.htmlFor = c : e in ic ? a.setAttribute(ic[e], c) : 0 == e.lastIndexOf("aria-", 0) || 0 == e.lastIndexOf("data-", 0) ? a.setAttribute(e, c) : a[e] = c
                            })
                        };
                        _.qc = function (a, c) {
                            for (var d, e, f = 1; f < arguments.length; f++) {
                                e = arguments[f];
                                for (d in e)
                                    a[d] = e[d];
                                for (var g = 0; g < jc.length; g++)
                                    d = jc[g], Object.prototype.hasOwnProperty.call(e, d) && (a[d] = e[d])
                            }
                        };
                        _.rc = function (a) {
                            return"number" == typeof a
                        };
                        _.sc = function (a, c) {
                            var d = c[0], e = c[1];
                            if (!_.mb && e && (e.name || e.type)) {
                                d = ["<", d];
                                e.name && d.push(' name="', _.fc(e.name), '"');
                                if (e.type) {
                                    d.push(' type="', _.fc(e.type), '"');
                                    var f = {};
                                    _.qc(f, e);
                                    delete f.type;
                                    e = f
                                }
                                d.push(">");
                                d = d.join("")
                            }
                            d = a.createElement(d);
                            e && (_.t(e) ? d.className = e : _.da(e) ? d.className = e.join(" ") : _.pc(d, e));
                            2 < c.length && oc(a, d, c);
                            return d
                        };
                        _.tc = function (a) {
                            return/^[\s\xa0]*$/.test(a)
                        };
                        uc = function (a) {
                            var c = [], d = 0, e;
                            for (e in a)
                                c[d++] = e;
                            return c
                        };
                        _.vc = function (a) {
                            var c = [], d = 0, e;
                            for (e in a)
                                c[d++] = a[e];
                            return c
                        };
                        _.wc = function (a) {
                            return _.na.concat.apply(_.na, arguments)
                        };
                        _.xc = function (a, c) {
                            var d = (0, _.oa)(a, c), e;
                            (e = 0 <= d) && _.na.splice.call(a, d, 1);
                            return e
                        };
                        _.yc = function () {
                        };
                        _.zc = function (a) {
                            _.zc[" "](a);
                            return a
                        };
                        _.zc[" "] = _.yc;
                        _.Ac = function (a, c) {
                            try {
                                return _.zc(a[c]), !0
                            } catch (d) {
                            }
                            return!1
                        };
                        var Cc, Dc;
                        _.Bc = !_.K || _.jb(9);
                        Cc = !_.K || _.jb(9);
                        Dc = _.K && !_.L("9");
                        !_.Ya || _.L("528");
                        _.Xa && _.L("1.9b") || _.K && _.L("8") || _.Wa && _.L("9.5") || _.Ya && _.L("528");
                        _.Xa && !_.L("8") || _.K && _.L("9");
                        _.Ec = function (a, c) {
                            this.type = a;
                            this.o = this.target = c;
                            this.C = !1;
                            this.Xe = !0
                        };
                        _.Ec.prototype.stopPropagation = function () {
                            this.C = !0
                        };
                        _.Ec.prototype.preventDefault = function () {
                            this.Xe = !1
                        };
                        _.Fc = _.K ? "focusin" : "DOMFocusIn";
                        _.Gc = _.Ya ? "webkitTransitionEnd" : _.Wa ? "otransitionend" : "transitionend";
                        _.Jc = function (a, c) {
                            _.Ec.call(this, a ? a.type : "");
                            this.B = this.o = this.target = null;
                            this.F = this.keyCode = this.button = this.clientY = this.clientX = 0;
                            this.H = this.D = this.w = this.A = !1;
                            this.b = this.state = null;
                            a && this.init(a, c)
                        };
                        _.x(_.Jc, _.Ec);
                        _.Jc.prototype.init = function (a, c) {
                            var d = this.type = a.type;
                            this.target = a.target || a.srcElement;
                            this.o = c;
                            var e = a.relatedTarget;
                            e ? _.Xa && (_.Ac(e, "nodeName") || (e = null)) : "mouseover" == d ? e = a.fromElement : "mouseout" == d && (e = a.toElement);
                            this.B = e;
                            this.clientX = void 0 !== a.clientX ? a.clientX : a.pageX;
                            this.clientY = void 0 !== a.clientY ? a.clientY : a.pageY;
                            this.button = a.button;
                            this.keyCode = a.keyCode || 0;
                            this.F = a.charCode || ("keypress" == d ? a.keyCode : 0);
                            this.A = a.ctrlKey;
                            this.w = a.altKey;
                            this.D = a.shiftKey;
                            this.H = a.metaKey;
                            this.state =
                                    a.state;
                            this.b = a;
                            a.defaultPrevented && this.preventDefault()
                        };
                        _.Jc.prototype.stopPropagation = function () {
                            _.Jc.J.stopPropagation.call(this);
                            this.b.stopPropagation ? this.b.stopPropagation() : this.b.cancelBubble = !0
                        };
                        _.Jc.prototype.preventDefault = function () {
                            _.Jc.J.preventDefault.call(this);
                            var a = this.b;
                            if (a.preventDefault)
                                a.preventDefault();
                            else if (a.returnValue = !1, Dc)
                                try {
                                    if (a.ctrlKey || 112 <= a.keyCode && 123 >= a.keyCode)
                                        a.keyCode = -1
                                } catch (c) {
                                }
                        };
                        _.Jc.prototype.O = function () {
                            return this.b
                        };
                        var Mc;
                        _.Kc = "closure_listenable_" + (1E6 * Math.random() | 0);
                        _.Lc = function (a) {
                            return!(!a || !a[_.Kc])
                        };
                        Mc = 0;
                        var Nc = function (a, c, d, e, f) {
                            this.listener = a;
                            this.b = null;
                            this.src = c;
                            this.type = d;
                            this.oc = !!e;
                            this.Ic = f;
                            this.key = ++Mc;
                            this.Jb = this.nc = !1
                        }, Oc = function (a) {
                            a.Jb = !0;
                            a.listener = null;
                            a.b = null;
                            a.src = null;
                            a.Ic = null
                        };
                        var Pc = function (a) {
                            this.src = a;
                            this.b = {};
                            this.o = 0
                        }, Rc, Qc;
                        Pc.prototype.add = function (a, c, d, e, f) {
                            var g = a.toString();
                            a = this.b[g];
                            a || (a = this.b[g] = [], this.o++);
                            var h = Qc(a, c, e, f);
                            -1 < h ? (c = a[h], d || (c.nc = !1)) : (c = new Nc(c, this.src, g, !!e, f), c.nc = d, a.push(c));
                            return c
                        };
                        Pc.prototype.remove = function (a, c, d, e) {
                            a = a.toString();
                            if (!(a in this.b))
                                return!1;
                            var f = this.b[a];
                            c = Qc(f, c, d, e);
                            return-1 < c ? (Oc(f[c]), _.na.splice.call(f, c, 1), 0 == f.length && (delete this.b[a], this.o--), !0) : !1
                        };
                        Rc = function (a, c) {
                            var d = c.type;
                            if (!(d in a.b))
                                return!1;
                            var e = _.xc(a.b[d], c);
                            e && (Oc(c), 0 == a.b[d].length && (delete a.b[d], a.o--));
                            return e
                        };
                        _.Sc = function (a, c, d, e, f) {
                            a = a.b[c.toString()];
                            c = -1;
                            a && (c = Qc(a, d, e, f));
                            return-1 < c ? a[c] : null
                        };
                        Qc = function (a, c, d, e) {
                            for (var f = 0; f < a.length; ++f) {
                                var g = a[f];
                                if (!g.Jb && g.listener == c && g.oc == !!d && g.Ic == e)
                                    return f
                            }
                            return-1
                        };
                        var Tc, Uc, Vc, Xc, Zc, $c, fd, ed, ad, gd;
                        Tc = "closure_lm_" + (1E6 * Math.random() | 0);
                        Uc = {};
                        Vc = 0;
                        _.M = function (a, c, d, e, f) {
                            if (_.da(c)) {
                                for (var g = 0; g < c.length; g++)
                                    _.M(a, c[g], d, e, f);
                                return null
                            }
                            d = _.Wc(d);
                            return _.Lc(a) ? a.ab(c, d, e, f) : Xc(a, c, d, !1, e, f)
                        };
                        Xc = function (a, c, d, e, f, g) {
                            if (!c)
                                throw Error("w");
                            var h = !!f, l = _.Yc(a);
                            l || (a[Tc] = l = new Pc(a));
                            d = l.add(c, d, e, f, g);
                            if (d.b)
                                return d;
                            e = Zc();
                            d.b = e;
                            e.src = a;
                            e.listener = d;
                            a.addEventListener ? a.addEventListener(c.toString(), e, h) : a.attachEvent($c(c.toString()), e);
                            Vc++;
                            return d
                        };
                        Zc = function () {
                            var a = ad, c = Cc ? function (d) {
                                return a.call(c.src, c.listener, d)
                            } : function (d) {
                                d = a.call(c.src, c.listener, d);
                                if (!d)
                                    return d
                            };
                            return c
                        };
                        _.bd = function (a, c, d, e, f) {
                            if (_.da(c)) {
                                for (var g = 0; g < c.length; g++)
                                    _.bd(a, c[g], d, e, f);
                                return null
                            }
                            d = _.Wc(d);
                            return _.Lc(a) ? a.Ec(c, d, e, f) : Xc(a, c, d, !0, e, f)
                        };
                        _.cd = function (a, c, d, e, f) {
                            if (_.da(c))
                                for (var g = 0; g < c.length; g++)
                                    _.cd(a, c[g], d, e, f);
                            else
                                d = _.Wc(d), _.Lc(a) ? a.pd(c, d, e, f) : a && (a = _.Yc(a)) && (c = _.Sc(a, c, d, !!e, f)) && _.dd(c)
                        };
                        _.dd = function (a) {
                            if (_.rc(a) || !a || a.Jb)
                                return!1;
                            var c = a.src;
                            if (_.Lc(c))
                                return c.lc(a);
                            var d = a.type, e = a.b;
                            c.removeEventListener ? c.removeEventListener(d, e, a.oc) : c.detachEvent && c.detachEvent($c(d), e);
                            Vc--;
                            (d = _.Yc(c)) ? (Rc(d, a), 0 == d.o && (d.src = null, c[Tc] = null)) : Oc(a);
                            return!0
                        };
                        $c = function (a) {
                            return a in Uc ? Uc[a] : Uc[a] = "on" + a
                        };
                        fd = function (a, c, d, e) {
                            var f = !0;
                            if (a = _.Yc(a))
                                if (c = a.b[c.toString()])
                                    for (c = c.concat(), a = 0; a < c.length; a++) {
                                        var g = c[a];
                                        g && g.oc == d && !g.Jb && (g = ed(g, e), f = f && !1 !== g)
                                    }
                            return f
                        };
                        ed = function (a, c) {
                            var d = a.listener, e = a.Ic || a.src;
                            a.nc && _.dd(a);
                            return d.call(e, c)
                        };
                        ad = function (a, c) {
                            if (a.Jb)
                                return!0;
                            if (!Cc) {
                                var d = c || _.p("window.event"), e = new _.Jc(d, this), f = !0;
                                if (!(0 > d.keyCode || void 0 != d.returnValue)) {
                                    a:{
                                        var g = !1;
                                        if (0 == d.keyCode)
                                            try {
                                                d.keyCode = -1;
                                                break a
                                            } catch (h) {
                                                g = !0
                                            }
                                        if (g || void 0 == d.returnValue)
                                            d.returnValue = !0
                                    }
                                    d = [];
                                    for (g = e.o; g; g = g.parentNode)
                                        d.push(g);
                                    for (var g = a.type, l = d.length - 1; !e.C && 0 <= l; l--) {
                                        e.o = d[l];
                                        var q = fd(d[l], g, !0, e), f = f && q
                                    }
                                    for (l = 0; !e.C && l < d.length; l++)
                                        e.o = d[l], q = fd(d[l], g, !1, e), f = f && q
                                }
                                return f
                            }
                            return ed(a, new _.Jc(c, this))
                        };
                        _.Yc = function (a) {
                            a = a[Tc];
                            return a instanceof Pc ? a : null
                        };
                        gd = "__closure_events_fn_" + (1E9 * Math.random() >>> 0);
                        _.Wc = function (a) {
                            if (_.ea(a))
                                return a;
                            a[gd] || (a[gd] = function (c) {
                                return a.handleEvent(c)
                            });
                            return a[gd]
                        };
                        var kd;
                        _.hd = function (a) {
                            _.y.call(this);
                            this.X = a;
                            this.Y = {}
                        };
                        _.x(_.hd, _.y);
                        var id = [];
                        _.hd.prototype.b = function (a, c, d, e) {
                            return jd(this, a, c, d, e)
                        };
                        _.hd.prototype.O = function (a, c, d, e, f) {
                            return jd(this, a, c, d, e, f)
                        };
                        var jd = function (a, c, d, e, f, g) {
                            _.da(d) || (d && (id[0] = d.toString()), d = id);
                            for (var h = 0; h < d.length; h++) {
                                var l = _.M(c, d[h], e || a.handleEvent, f || !1, g || a.X || a);
                                if (!l)
                                    break;
                                a.Y[l.key] = l
                            }
                            return a
                        };
                        _.hd.prototype.H = function (a, c, d, e) {
                            return kd(this, a, c, d, e)
                        };
                        kd = function (a, c, d, e, f, g) {
                            if (_.da(d))
                                for (var h = 0; h < d.length; h++)
                                    kd(a, c, d[h], e, f, g);
                            else {
                                c = _.bd(c, d, e || a.handleEvent, f, g || a.X || a);
                                if (!c)
                                    return a;
                                a.Y[c.key] = c
                            }
                            return a
                        };
                        _.ld = function (a) {
                            _.kc(a.Y, _.dd);
                            a.Y = {}
                        };
                        _.hd.prototype.N = function () {
                            _.hd.J.N.call(this);
                            _.ld(this)
                        };
                        _.hd.prototype.handleEvent = function () {
                            throw Error("x");
                        };
                        _.md = "StopIteration"in _.m ? _.m.StopIteration : {message: "StopIteration", stack: ""};
                        _.nd = function () {
                        };
                        _.nd.prototype.next = function () {
                            throw _.md;
                        };
                        _.nd.prototype.Ob = function () {
                            return this
                        };
                        _.od = function (a, c) {
                            this.o = {};
                            this.b = [];
                            this.B = this.w = 0;
                            var d = arguments.length;
                            if (1 < d) {
                                if (d % 2)
                                    throw Error("d");
                                for (var e = 0; e < d; e += 2)
                                    this.set(arguments[e], arguments[e + 1])
                            } else if (a) {
                                a instanceof _.od ? (d = a.La(), e = a.Ma()) : (d = uc(a), e = _.vc(a));
                                for (var f = 0; f < d.length; f++)
                                    this.set(d[f], e[f])
                            }
                        };
                        _.k = _.od.prototype;
                        _.k.Ma = function () {
                            pd(this);
                            for (var a = [], c = 0; c < this.b.length; c++)
                                a.push(this.o[this.b[c]]);
                            return a
                        };
                        _.k.La = function () {
                            pd(this);
                            return this.b.concat()
                        };
                        _.k.ec = function () {
                            return 0 == this.w
                        };
                        _.k.clear = function () {
                            this.o = {};
                            this.B = this.w = this.b.length = 0
                        };
                        _.k.remove = function (a) {
                            return qd(this.o, a) ? (delete this.o[a], this.w--, this.B++, this.b.length > 2 * this.w && pd(this), !0) : !1
                        };
                        var pd = function (a) {
                            if (a.w != a.b.length) {
                                for (var c = 0, d = 0; c < a.b.length; ) {
                                    var e = a.b[c];
                                    qd(a.o, e) && (a.b[d++] = e);
                                    c++
                                }
                                a.b.length = d
                            }
                            if (a.w != a.b.length) {
                                for (var f = {}, d = c = 0; c < a.b.length; )
                                    e = a.b[c], qd(f, e) || (a.b[d++] = e, f[e] = 1), c++;
                                a.b.length = d
                            }
                        };
                        _.k = _.od.prototype;
                        _.k.get = function (a, c) {
                            return qd(this.o, a) ? this.o[a] : c
                        };
                        _.k.set = function (a, c) {
                            qd(this.o, a) || (this.w++, this.b.push(a), this.B++);
                            this.o[a] = c
                        };
                        _.k.forEach = function (a, c) {
                            for (var d = this.La(), e = 0; e < d.length; e++) {
                                var f = d[e], g = this.get(f);
                                a.call(c, g, f, this)
                            }
                        };
                        _.k.clone = function () {
                            return new _.od(this)
                        };
                        _.k.Ob = function (a) {
                            pd(this);
                            var c = 0, d = this.B, e = this, f = new _.nd;
                            f.next = function () {
                                if (d != e.B)
                                    throw Error("z");
                                if (c >= e.b.length)
                                    throw _.md;
                                var f = e.b[c++];
                                return a ? f : e.o[f]
                            };
                            return f
                        };
                        var qd = function (a, c) {
                            return Object.prototype.hasOwnProperty.call(a, c)
                        };
                        _.rd = function (a) {
                            if ("function" == typeof a.Ma)
                                return a.Ma();
                            if (_.t(a))
                                return a.split("");
                            if (_.nc(a)) {
                                for (var c = [], d = a.length, e = 0; e < d; e++)
                                    c.push(a[e]);
                                return c
                            }
                            return _.vc(a)
                        };
                        _.sd = function (a) {
                            if ("function" == typeof a.La)
                                return a.La();
                            if ("function" != typeof a.Ma) {
                                if (_.nc(a) || _.t(a)) {
                                    var c = [];
                                    a = a.length;
                                    for (var d = 0; d < a; d++)
                                        c.push(d);
                                    return c
                                }
                                return uc(a)
                            }
                        };
                        _.O = function () {
                            _.y.call(this);
                            this.M = new Pc(this);
                            this.Ka = this;
                            this.la = null
                        };
                        _.x(_.O, _.y);
                        _.O.prototype[_.Kc] = !0;
                        _.k = _.O.prototype;
                        _.k.Dc = function () {
                            return this.la
                        };
                        _.k.Ud = function (a) {
                            this.la = a
                        };
                        _.k.addEventListener = function (a, c, d, e) {
                            _.M(this, a, c, d, e)
                        };
                        _.k.removeEventListener = function (a, c, d, e) {
                            _.cd(this, a, c, d, e)
                        };
                        _.k.dispatchEvent = function (a) {
                            var c, d = this.Dc();
                            if (d)
                                for (c = []; d; d = d.Dc())
                                    c.push(d);
                            var d = this.Ka, e = a.type || a;
                            if (_.t(a))
                                a = new _.Ec(a, d);
                            else if (a instanceof _.Ec)
                                a.target = a.target || d;
                            else {
                                var f = a;
                                a = new _.Ec(e, d);
                                _.qc(a, f)
                            }
                            var f = !0, g;
                            if (c)
                                for (var h = c.length - 1; !a.C && 0 <= h; h--)
                                    g = a.o = c[h], f = g.Cb(e, !0, a) && f;
                            a.C || (g = a.o = d, f = g.Cb(e, !0, a) && f, a.C || (f = g.Cb(e, !1, a) && f));
                            if (c)
                                for (h = 0; !a.C && h < c.length; h++)
                                    g = a.o = c[h], f = g.Cb(e, !1, a) && f;
                            return f
                        };
                        _.k.N = function () {
                            _.O.J.N.call(this);
                            this.Sc();
                            this.la = null
                        };
                        _.k.ab = function (a, c, d, e) {
                            return this.M.add(String(a), c, !1, d, e)
                        };
                        _.k.Ec = function (a, c, d, e) {
                            return this.M.add(String(a), c, !0, d, e)
                        };
                        _.k.pd = function (a, c, d, e) {
                            return this.M.remove(String(a), c, d, e)
                        };
                        _.k.lc = function (a) {
                            return Rc(this.M, a)
                        };
                        _.k.Sc = function (a) {
                            var c;
                            if (this.M) {
                                c = this.M;
                                a = a && a.toString();
                                var d = 0, e;
                                for (e in c.b)
                                    if (!a || e == a) {
                                        for (var f = c.b[e], g = 0; g < f.length; g++)
                                            ++d, Oc(f[g]);
                                        delete c.b[e];
                                        c.o--
                                    }
                                c = d
                            } else
                                c = 0;
                            return c
                        };
                        _.k.Cb = function (a, c, d) {
                            a = this.M.b[String(a)];
                            if (!a)
                                return!0;
                            a = a.concat();
                            for (var e = !0, f = 0; f < a.length; ++f) {
                                var g = a[f];
                                if (g && !g.Jb && g.oc == c) {
                                    var h = g.listener, l = g.Ic || g.src;
                                    g.nc && this.lc(g);
                                    e = !1 !== h.call(l, d) && e
                                }
                            }
                            return e && 0 != d.Xe
                        };
                        _.k.od = function (a, c, d, e) {
                            return _.Sc(this.M, String(a), c, d, e)
                        };
                        var td = function (a, c, d) {
                            this.B = d;
                            this.w = a;
                            this.A = c;
                            this.o = 0;
                            this.b = null
                        };
                        td.prototype.get = function () {
                            var a;
                            0 < this.o ? (this.o--, a = this.b, this.b = a.next, a.next = null) : a = this.w();
                            return a
                        };
                        var ud = function (a, c) {
                            a.A(c);
                            a.o < a.B && (a.o++, c.next = a.b, a.b = c)
                        };
                        var vd = function (a) {
                            _.m.setTimeout(function () {
                                throw a;
                            }, 0)
                        }, wd, xd = function () {
                            var a = _.m.MessageChannel;
                            "undefined" === typeof a && "undefined" !== typeof window && window.postMessage && window.addEventListener && !_.Sa("Presto") && (a = function () {
                                var a = window.document.createElement("IFRAME");
                                a.style.display = "none";
                                a.src = "";
                                window.document.documentElement.appendChild(a);
                                var c = a.contentWindow, a = c.document;
                                a.open();
                                a.write("");
                                a.close();
                                var d = "callImmediate" + Math.random(), e = "file:" == c.location.protocol ? "*" : c.location.protocol +
                                        "//" + c.location.host, a = (0, _.u)(function (a) {
                                    if (("*" == e || a.origin == e) && a.data == d)
                                        this.port1.onmessage()
                                }, this);
                                c.addEventListener("message", a, !1);
                                this.port1 = {};
                                this.port2 = {postMessage: function () {
                                        c.postMessage(d, e)
                                    }}
                            });
                            if ("undefined" !== typeof a && !_.Ua()) {
                                var c = new a, d = {}, e = d;
                                c.port1.onmessage = function () {
                                    if (_.n(d.next)) {
                                        d = d.next;
                                        var a = d.he;
                                        d.he = null;
                                        a()
                                    }
                                };
                                return function (a) {
                                    e.next = {he: a};
                                    e = e.next;
                                    c.port2.postMessage(0)
                                }
                            }
                            return"undefined" !== typeof window.document && "onreadystatechange"in window.document.createElement("SCRIPT") ? function (a) {
                                var c = window.document.createElement("SCRIPT");
                                c.onreadystatechange = function () {
                                    c.onreadystatechange = null;
                                    c.parentNode.removeChild(c);
                                    c = null;
                                    a();
                                    a = null
                                };
                                window.document.documentElement.appendChild(c)
                            } : function (a) {
                                _.m.setTimeout(a, 0)
                            }
                        };
                        var yd = function () {
                            this.o = this.b = null
                        }, Ad = new td(function () {
                            return new zd
                        }, function (a) {
                            a.reset()
                        }, 100);
                        yd.prototype.add = function (a, c) {
                            var d = Ad.get();
                            d.set(a, c);
                            this.o ? this.o.next = d : this.b = d;
                            this.o = d
                        };
                        yd.prototype.remove = function () {
                            var a = null;
                            this.b && (a = this.b, this.b = this.b.next, this.b || (this.o = null), a.next = null);
                            return a
                        };
                        var zd = function () {
                            this.next = this.scope = this.b = null
                        };
                        zd.prototype.set = function (a, c) {
                            this.b = a;
                            this.scope = c;
                            this.next = null
                        };
                        zd.prototype.reset = function () {
                            this.next = this.scope = this.b = null
                        };
                        var Fd = function (a, c) {
                            Bd || Cd();
                            Dd || (Bd(), Dd = !0);
                            Ed.add(a, c)
                        }, Bd, Cd = function () {
                            if (_.m.Promise && _.m.Promise.resolve) {
                                var a = _.m.Promise.resolve();
                                Bd = function () {
                                    a.then(Gd)
                                }
                            } else
                                Bd = function () {
                                    var a = Gd;
                                    !_.ea(_.m.setImmediate) || _.m.Window && _.m.Window.prototype && _.m.Window.prototype.setImmediate == _.m.setImmediate ? (wd || (wd = xd()), wd(a)) : _.m.setImmediate(a)
                                }
                        }, Dd = !1, Ed = new yd, Gd = function () {
                            for (var a = null; a = Ed.remove(); ) {
                                try {
                                    a.b.call(a.scope)
                                } catch (c) {
                                    vd(c)
                                }
                                ud(Ad, a)
                            }
                            Dd = !1
                        };
                        _.Hd = function (a) {
                            a.prototype.then = a.prototype.then;
                            a.prototype.$goog_Thenable = !0
                        };
                        _.Id = function (a) {
                            if (!a)
                                return!1;
                            try {
                                return!!a.$goog_Thenable
                            } catch (c) {
                                return!1
                            }
                        };
                        var Md;
                        _.Ld = function (a, c) {
                            this.b = 0;
                            this.F = void 0;
                            this.w = this.o = this.B = null;
                            this.A = this.C = !1;
                            if (a == Jd)
                                Kd(this, 2, c);
                            else
                                try {
                                    var d = this;
                                    a.call(c, function (a) {
                                        Kd(d, 2, a)
                                    }, function (a) {
                                        Kd(d, 3, a)
                                    })
                                } catch (e) {
                                    Kd(this, 3, e)
                                }
                        };
                        Md = function () {
                            this.next = this.context = this.o = this.w = this.b = null;
                            this.B = !1
                        };
                        Md.prototype.reset = function () {
                            this.context = this.o = this.w = this.b = null;
                            this.B = !1
                        };
                        var Nd = new td(function () {
                            return new Md
                        }, function (a) {
                            a.reset()
                        }, 100), Od = function (a, c, d) {
                            var e = Nd.get();
                            e.w = a;
                            e.o = c;
                            e.context = d;
                            return e
                        }, Jd = function () {
                        };
                        _.Ld.prototype.then = function (a, c, d) {
                            return Pd(this, _.ea(a) ? a : null, _.ea(c) ? c : null, d)
                        };
                        _.Hd(_.Ld);
                        var Rd = function (a, c) {
                            a.o || 2 != a.b && 3 != a.b || Qd(a);
                            a.w ? a.w.next = c : a.o = c;
                            a.w = c
                        }, Pd = function (a, c, d, e) {
                            var f = Od(null, null, null);
                            f.b = new _.Ld(function (a, h) {
                                f.w = c ? function (d) {
                                    try {
                                        var f = c.call(e, d);
                                        a(f)
                                    } catch (r) {
                                        h(r)
                                    }
                                } : a;
                                f.o = d ? function (c) {
                                    try {
                                        var f = d.call(e, c);
                                        !_.n(f) && "undefined" != typeof Sd && c instanceof Sd ? h(c) : a(f)
                                    } catch (r) {
                                        h(r)
                                    }
                                } : h
                            });
                            f.b.B = a;
                            Rd(a, f);
                            return f.b
                        };
                        _.Ld.prototype.D = function (a) {
                            this.b = 0;
                            Kd(this, 2, a)
                        };
                        _.Ld.prototype.M = function (a) {
                            this.b = 0;
                            Kd(this, 3, a)
                        };
                        var Kd = function (a, c, d) {
                            if (0 == a.b) {
                                if (a == d)
                                    c = 3, d = new TypeError("Promise cannot resolve to itself");
                                else {
                                    if (_.Id(d)) {
                                        a.b = 1;
                                        c = d;
                                        d = a.D;
                                        var e = a.M;
                                        c instanceof _.Ld ? Rd(c, Od(d || _.yc, e || null, a)) : c.then(d, e, a);
                                        return
                                    }
                                    if (_.gc(d))
                                        try {
                                            if (e = d.then, _.ea(e)) {
                                                Td(a, d, e);
                                                return
                                            }
                                        } catch (f) {
                                            c = 3, d = f
                                        }
                                }
                                a.F = d;
                                a.b = c;
                                a.B = null;
                                Qd(a);
                                3 != c || "undefined" != typeof Sd && d instanceof Sd || Ud(a, d)
                            }
                        }, Td = function (a, c, d) {
                            a.b = 1;
                            var e = !1, f = function (c) {
                                e || (e = !0, a.D(c))
                            }, g = function (c) {
                                e || (e = !0, a.M(c))
                            };
                            try {
                                d.call(c, f, g)
                            } catch (h) {
                                g(h)
                            }
                        }, Qd = function (a) {
                            a.C ||
                                    (a.C = !0, Fd(a.H, a))
                        }, Vd = function (a) {
                            var c = null;
                            a.o && (c = a.o, a.o = c.next, c.next = null);
                            a.o || (a.w = null);
                            return c
                        };
                        _.Ld.prototype.H = function () {
                            for (var a = null; a = Vd(this); ) {
                                var c = this.b, d = this.F;
                                if (3 == c && a.o && !a.B)
                                    for (var e = void 0, e = this; e && e.A; e = e.B)
                                        e.A = !1;
                                if (a.b)
                                    a.b.B = null, Wd(a, c, d);
                                else
                                    try {
                                        a.B ? a.w.call(a.context) : Wd(a, c, d)
                                    } catch (f) {
                                        Xd.call(null, f)
                                    }
                                ud(Nd, a)
                            }
                            this.C = !1
                        };
                        var Wd = function (a, c, d) {
                            2 == c ? a.w.call(a.context, d) : a.o && a.o.call(a.context, d)
                        }, Ud = function (a, c) {
                            a.A = !0;
                            Fd(function () {
                                a.A && Xd.call(null, c)
                            })
                        }, Xd = vd, Sd = function (a) {
                            _.ja.call(this, a)
                        };
                        _.x(Sd, _.ja);
                        Sd.prototype.name = "cancel";
                        _.Yd = function (a, c) {
                            _.O.call(this);
                            this.w = a || 1;
                            this.o = c || _.m;
                            this.B = (0, _.u)(this.C, this);
                            this.A = (0, _.ia)()
                        };
                        _.x(_.Yd, _.O);
                        _.Yd.prototype.enabled = !1;
                        _.Yd.prototype.b = null;
                        _.Yd.prototype.C = function () {
                            if (this.enabled) {
                                var a = (0, _.ia)() - this.A;
                                0 < a && a < .8 * this.w ? this.b = this.o.setTimeout(this.B, this.w - a) : (this.b && (this.o.clearTimeout(this.b), this.b = null), this.dispatchEvent("tick"), this.enabled && (this.b = this.o.setTimeout(this.B, this.w), this.A = (0, _.ia)()))
                            }
                        };
                        _.Zd = function (a) {
                            a.enabled = !0;
                            a.b || (a.b = a.o.setTimeout(a.B, a.w), a.A = (0, _.ia)())
                        };
                        _.$d = function (a) {
                            a.enabled = !1;
                            a.b && (a.o.clearTimeout(a.b), a.b = null)
                        };
                        _.Yd.prototype.N = function () {
                            _.Yd.J.N.call(this);
                            _.$d(this);
                            delete this.o
                        };
                        _.ae = function (a, c, d) {
                            if (_.ea(a))
                                d && (a = (0, _.u)(a, d));
                            else if (a && "function" == typeof a.handleEvent)
                                a = (0, _.u)(a.handleEvent, a);
                            else
                                throw Error("A");
                            return 2147483647 < c ? -1 : _.m.setTimeout(a, c || 0)
                        };
                        var be, ce, ee;
                        be = /^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/;
                        _.de = function (a) {
                            if (ce) {
                                ce = !1;
                                var c = _.m.location;
                                if (c) {
                                    var d = c.href;
                                    if (d && (d = (d = _.de(d)[3] || null) ? (0, window.decodeURI)(d) : d) && d != c.hostname)
                                        throw ce = !0, Error();
                                }
                            }
                            return a.match(be)
                        };
                        ce = _.Ya;
                        ee = function (a, c) {
                            for (var d = a.split("&"), e = 0; e < d.length; e++) {
                                var f = d[e].indexOf("="), g = null, h = null;
                                0 <= f ? (g = d[e].substring(0, f), h = d[e].substring(f + 1)) : g = d[e];
                                c(g, h ? (0, window.decodeURIComponent)(h.replace(/\+/g, " ")) : "")
                            }
                        };
                        var le, ne, ue, oe, qe, pe, te, re, me, ve;
                        _.fe = function (a, c) {
                            this.ob = this.A = this.o = "";
                            this.B = null;
                            this.w = this.C = "";
                            this.b = !1;
                            var d;
                            a instanceof _.fe ? (this.b = _.n(c) ? c : a.b, _.ge(this, a.o), this.A = a.A, _.he(this, a.ob), _.ie(this, a.B), _.je(this, a.Va()), _.ke(this, a.Ga.clone()), this.w = a.w) : a && (d = _.de(String(a))) ? (this.b = !!c, _.ge(this, d[1] || "", !0), this.A = le(d[2] || ""), _.he(this, d[3] || "", !0), _.ie(this, d[4]), _.je(this, d[5] || "", !0), _.ke(this, d[6] || "", !0), this.w = le(d[7] || "")) : (this.b = !!c, this.Ga = new me(null, 0, this.b))
                        };
                        _.fe.prototype.toString = function () {
                            var a = [], c = this.o;
                            c && a.push(ne(c, oe, !0), ":");
                            if (c = this.ob) {
                                a.push("//");
                                var d = this.A;
                                d && a.push(ne(d, oe, !0), "@");
                                a.push((0, window.encodeURIComponent)(String(c)).replace(/%25([0-9a-fA-F]{2})/g, "%$1"));
                                c = this.B;
                                null != c && a.push(":", String(c))
                            }
                            if (c = this.Va())
                                this.ob && "/" != c.charAt(0) && a.push("/"), a.push(ne(c, "/" == c.charAt(0) ? pe : qe, !0));
                            (c = this.Ga.toString()) && a.push("?", c);
                            (c = this.w) && a.push("#", ne(c, re));
                            return a.join("")
                        };
                        _.fe.prototype.clone = function () {
                            return new _.fe(this)
                        };
                        _.ge = function (a, c, d) {
                            a.o = d ? le(c, !0) : c;
                            a.o && (a.o = a.o.replace(/:$/, ""));
                            return a
                        };
                        _.he = function (a, c, d) {
                            a.ob = d ? le(c, !0) : c;
                            return a
                        };
                        _.ie = function (a, c) {
                            if (c) {
                                c = Number(c);
                                if ((0, window.isNaN)(c) || 0 > c)
                                    throw Error("B`" + c);
                                a.B = c
                            } else
                                a.B = null;
                            return a
                        };
                        _.fe.prototype.Va = function () {
                            return this.C
                        };
                        _.je = function (a, c, d) {
                            a.C = d ? le(c, !0) : c;
                            return a
                        };
                        _.ke = function (a, c, d) {
                            c instanceof me ? (a.Ga = c, se(a.Ga, a.b)) : (d || (c = ne(c, te)), a.Ga = new me(c, 0, a.b));
                            return a
                        };
                        le = function (a, c) {
                            return a ? c ? (0, window.decodeURI)(a.replace(/%25/g, "%2525")) : (0, window.decodeURIComponent)(a) : ""
                        };
                        ne = function (a, c, d) {
                            return _.t(a) ? (a = (0, window.encodeURI)(a).replace(c, ue), d && (a = a.replace(/%25([0-9a-fA-F]{2})/g, "%$1")), a) : null
                        };
                        ue = function (a) {
                            a = a.charCodeAt(0);
                            return"%" + (a >> 4 & 15).toString(16) + (a & 15).toString(16)
                        };
                        oe = /[#\/\?@]/g;
                        qe = /[\#\?:]/g;
                        pe = /[\#\?]/g;
                        te = /[\#\?@]/g;
                        re = /#/g;
                        me = function (a, c, d) {
                            this.w = this.b = null;
                            this.o = a || null;
                            this.B = !!d
                        };
                        ve = function (a) {
                            a.b || (a.b = new _.od, a.w = 0, a.o && ee(a.o, function (c, d) {
                                a.add((0, window.decodeURIComponent)(c.replace(/\+/g, " ")), d)
                            }))
                        };
                        me.prototype.add = function (a, c) {
                            ve(this);
                            this.o = null;
                            a = we(this, a);
                            var d = this.b.get(a);
                            d || this.b.set(a, d = []);
                            d.push(c);
                            this.w++;
                            return this
                        };
                        me.prototype.remove = function (a) {
                            ve(this);
                            a = we(this, a);
                            return qd(this.b.o, a) ? (this.o = null, this.w -= this.b.get(a).length, this.b.remove(a)) : !1
                        };
                        me.prototype.clear = function () {
                            this.b = this.o = null;
                            this.w = 0
                        };
                        me.prototype.ec = function () {
                            ve(this);
                            return 0 == this.w
                        };
                        var xe = function (a, c) {
                            ve(a);
                            c = we(a, c);
                            return qd(a.b.o, c)
                        };
                        _.k = me.prototype;
                        _.k.La = function () {
                            ve(this);
                            for (var a = this.b.Ma(), c = this.b.La(), d = [], e = 0; e < c.length; e++)
                                for (var f = a[e], g = 0; g < f.length; g++)
                                    d.push(c[e]);
                            return d
                        };
                        _.k.Ma = function (a) {
                            ve(this);
                            var c = [];
                            if (_.t(a))
                                xe(this, a) && (c = _.wc(c, this.b.get(we(this, a))));
                            else {
                                a = this.b.Ma();
                                for (var d = 0; d < a.length; d++)
                                    c = _.wc(c, a[d])
                            }
                            return c
                        };
                        _.k.set = function (a, c) {
                            ve(this);
                            this.o = null;
                            a = we(this, a);
                            xe(this, a) && (this.w -= this.b.get(a).length);
                            this.b.set(a, [c]);
                            this.w++;
                            return this
                        };
                        _.k.get = function (a, c) {
                            var d = a ? this.Ma(a) : [];
                            return 0 < d.length ? String(d[0]) : c
                        };
                        _.k.toString = function () {
                            if (this.o)
                                return this.o;
                            if (!this.b)
                                return"";
                            for (var a = [], c = this.b.La(), d = 0; d < c.length; d++)
                                for (var e = c[d], f = (0, window.encodeURIComponent)(String(e)), e = this.Ma(e), g = 0; g < e.length; g++) {
                                    var h = f;
                                    "" !== e[g] && (h += "=" + (0, window.encodeURIComponent)(String(e[g])));
                                    a.push(h)
                                }
                            return this.o = a.join("&")
                        };
                        _.k.clone = function () {
                            var a = new me;
                            a.o = this.o;
                            this.b && (a.b = this.b.clone(), a.w = this.w);
                            return a
                        };
                        var we = function (a, c) {
                            var d = String(c);
                            a.B && (d = d.toLowerCase());
                            return d
                        }, se = function (a, c) {
                            c && !a.B && (ve(a), a.o = null, a.b.forEach(function (a, c) {
                                var f = c.toLowerCase();
                                c != f && (this.remove(c), this.remove(f), 0 < a.length && (this.o = null, this.b.set(we(this, f), _.lc(a)), this.w += a.length))
                            }, a));
                            a.B = c
                        };

                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        var Tf, Uf, Vf, Xf;
                        _.Jf = function (a) {
                            return a instanceof _.xb && a.constructor === _.xb && a.w === _.wb ? a.b : "type_error:SafeHtml"
                        };
                        _.Kf = function (a, c) {
                            a.innerHTML = _.Jf(c)
                        };
                        _.Lf = function (a, c) {
                            if (a.contains && 1 == c.nodeType)
                                return a == c || a.contains(c);
                            if ("undefined" != typeof a.compareDocumentPosition)
                                return a == c || Boolean(a.compareDocumentPosition(c) & 16);
                            for (; c && a != c; )
                                c = c.parentNode;
                            return c == a
                        };
                        _.Mf = function (a) {
                            return a && a.parentNode ? a.parentNode.removeChild(a) : null
                        };
                        _.Nf = function (a) {
                            for (var c; c = a.firstChild; )
                                a.removeChild(c)
                        };
                        _.Of = function (a, c, d) {
                            return 2 >= arguments.length ? _.na.slice.call(a, c) : _.na.slice.call(a, c, d)
                        };
                        _.Pf = function (a) {
                            this.b = a || _.m.document || window.document
                        };
                        _.k = _.Pf.prototype;
                        _.k.P = function (a) {
                            return _.t(a) ? this.b.getElementById(a) : a
                        };
                        _.k.ya = function (a, c, d) {
                            return _.sc(this.b, arguments)
                        };
                        _.k.createElement = function (a) {
                            return this.b.createElement(a)
                        };
                        _.k.appendChild = function (a, c) {
                            a.appendChild(c)
                        };
                        _.k.ve = _.Nf;
                        _.k.removeNode = _.Mf;
                        _.k.contains = _.Lf;
                        _.Qf = function (a) {
                            return 9 == a.nodeType ? a : a.ownerDocument || a.document
                        };
                        _.Rf = function (a) {
                            return _.gc(a) && 1 == a.nodeType
                        };
                        _.Sf = function () {
                            return _.Sa("iPhone") && !_.Sa("iPod") && !_.Sa("iPad")
                        };
                        Tf = function () {
                            return(_.Sa("Chrome") || _.Sa("CriOS")) && !_.Ta() && !_.Ua()
                        };
                        Uf = function (a, c, d, e) {
                            _.na.splice.apply(a, _.Of(arguments, 1))
                        };
                        _.Wf = function (a) {
                            return a ? new _.Pf(_.Qf(a)) : Vf || (Vf = new _.Pf)
                        };
                        Xf = function (a, c) {
                            return c in a ? a[c] : void 0
                        };
                        _.Yf = function () {
                        };
                        _.ba(_.Yf);
                        _.Yf.prototype.b = 0;
                        _.Zf = function (a) {
                            return":" + (a.b++).toString(36)
                        };
                        _.$f = function (a) {
                            if (a.classList)
                                return a.classList;
                            a = a.className;
                            return _.t(a) && a.match(/\S+/g) || []
                        };
                        _.ag = function (a, c) {
                            return a.classList ? a.classList.contains(c) : _.mc(_.$f(a), c)
                        };
                        _.Q = function (a, c) {
                            a.classList ? a.classList.add(c) : _.ag(a, c) || (a.className += 0 < a.className.length ? " " + c : c)
                        };
                        _.R = function (a, c) {
                            a.classList ? a.classList.remove(c) : _.ag(a, c) && (a.className = (0, _.qa)(_.$f(a), function (a) {
                                return a != c
                            }).join(" "))
                        };
                        _.bg = function (a, c) {
                            a.classList ? (0, _.pa)(c, function (c) {
                                _.R(a, c)
                            }) : a.className = (0, _.qa)(_.$f(a), function (a) {
                                return!_.mc(c, a)
                            }).join(" ")
                        };
                        _.cg = _.Sa("Firefox");
                        _.dg = _.Sf() || _.Sa("iPod");
                        _.eg = _.Sa("iPad");
                        !_.Sa("Android") || Tf() || _.Sa("Firefox") || _.Ta();
                        _.fg = Tf();
                        _.gg = _.Xa ? "MozUserSelect" : _.Ya ? "WebkitUserSelect" : null;
                        _.K && _.L(12);
                        _.S = function (a) {
                            _.O.call(this);
                            this.o = a || _.Wf();
                            this.Z = hg;
                            this.da = null;
                            this.ia = !1;
                            this.G = null;
                            this.O = void 0;
                            this.F = this.B = this.b = this.A = null;
                            this.oa = !1
                        };
                        _.x(_.S, _.O);
                        _.S.prototype.za = _.Yf.T();
                        var hg = null;
                        _.S.prototype.getId = function () {
                            return this.da || (this.da = _.Zf(this.za))
                        };
                        _.S.prototype.P = function () {
                            return this.G
                        };
                        var ig = function (a, c) {
                            if (a == c)
                                throw Error("I");
                            var d;
                            if (d = c && a.b && a.da) {
                                d = a.b;
                                var e = a.da;
                                d = d.F && e ? Xf(d.F, e) || null : null
                            }
                            if (d && a.b != c)
                                throw Error("I");
                            a.b = c;
                            _.S.J.Ud.call(a, c)
                        };
                        _.S.prototype.Ud = function (a) {
                            if (this.b && this.b != a)
                                throw Error("J");
                            _.S.J.Ud.call(this, a)
                        };
                        _.S.prototype.rb = function () {
                            this.G = this.o.createElement("DIV")
                        };
                        _.S.prototype.xb = function (a) {
                            jg(this, a)
                        };
                        var jg = function (a, c, d) {
                            if (a.ia)
                                throw Error("K");
                            a.G || a.rb();
                            c ? c.insertBefore(a.G, d || null) : a.o.b.body.appendChild(a.G);
                            a.b && !a.b.ia || a.ka()
                        };
                        _.k = _.S.prototype;
                        _.k.Xa = function (a) {
                            this.G = a
                        };
                        _.k.ka = function () {
                            this.ia = !0;
                            _.kg(this, function (a) {
                                !a.ia && a.P() && a.ka()
                            })
                        };
                        _.k.wa = function () {
                            _.kg(this, function (a) {
                                a.ia && a.wa()
                            });
                            this.O && _.ld(this.O);
                            this.ia = !1
                        };
                        _.k.N = function () {
                            this.ia && this.wa();
                            this.O && (this.O.aa(), delete this.O);
                            _.kg(this, function (a) {
                                a.aa()
                            });
                            !this.oa && this.G && _.Mf(this.G);
                            this.b = this.A = this.G = this.F = this.B = null;
                            _.S.J.N.call(this)
                        };
                        _.k.ib = function (a, c, d) {
                            if (a.ia && (d || !this.ia))
                                throw Error("K");
                            if (0 > c || c > _.lg(this))
                                throw Error("M");
                            this.F && this.B || (this.F = {}, this.B = []);
                            if (a.b == this) {
                                var e = a.getId();
                                this.F[e] = a;
                                _.xc(this.B, a)
                            } else {
                                var e = this.F, f = a.getId();
                                if (f in e)
                                    throw Error("c`" + f);
                                e[f] = a
                            }
                            ig(a, this);
                            Uf(this.B, c, 0, a);
                            a.ia && this.ia && a.b == this ? (d = this.G, c = d.childNodes[c] || null, c != a.P() && d.insertBefore(a.P(), c)) : d ? (this.G || this.rb(), c = _.mg(this, c + 1), jg(a, this.G, c ? c.G : null)) : this.ia && !a.ia && a.G && a.G.parentNode && 1 == a.G.parentNode.nodeType &&
                                    a.ka()
                        };
                        _.lg = function (a) {
                            return a.B ? a.B.length : 0
                        };
                        _.mg = function (a, c) {
                            return a.B ? a.B[c] || null : null
                        };
                        _.kg = function (a, c, d) {
                            a.B && (0, _.pa)(a.B, c, d)
                        };
                        _.S.prototype.removeChild = function (a, c) {
                            if (a) {
                                var d = _.t(a) ? a : a.getId();
                                a = this.F && d ? Xf(this.F, d) || null : null;
                                if (d && a) {
                                    var e = this.F;
                                    d in e && delete e[d];
                                    _.xc(this.B, a);
                                    c && (a.wa(), a.G && _.Mf(a.G));
                                    ig(a, null)
                                }
                            }
                            if (!a)
                                throw Error("N");
                            return a
                        };

                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        var Yj;
                        Yj = [1, 4, 2];
                        _.Zj = function (a) {
                            return(_.Bc ? 0 == a.b.button : "click" == a.type ? !0 : !!(a.b.button & Yj[0])) && !(_.Ya && _.bb && a.A)
                        };
                        _.ak = function () {
                            _.y.call(this);
                            this.o = new _.O
                        };
                        _.x(_.ak, _.y);
                        _.ak.prototype[_.Kc] = !0;
                        _.k = _.ak.prototype;
                        _.k.ab = function (a, c, d, e) {
                            return this.o.ab(a, c, d, e)
                        };
                        _.k.Ec = function (a, c, d, e) {
                            return this.o.Ec(a, c, d, e)
                        };
                        _.k.pd = function (a, c, d, e) {
                            return this.o.pd(a, c, d, e)
                        };
                        _.k.lc = function (a) {
                            return this.o.lc(a)
                        };
                        _.k.dispatchEvent = function (a) {
                            return this.o.dispatchEvent(a)
                        };
                        _.k.Sc = function (a) {
                            return this.o.Sc(a)
                        };
                        _.k.Dc = function () {
                            return this.o.Dc()
                        };
                        _.k.Cb = function (a, c, d) {
                            return this.o.Cb(a, c, d)
                        };
                        _.k.od = function (a, c, d, e) {
                            return this.o.od(a, c, d, e)
                        };
                        var bk, dk;
                        bk = function () {
                        };
                        _.ck = new bk;
                        dk = ["click", _.Xa ? "keypress" : "keydown", "keyup"];
                        bk.prototype.b = function (a, c, d, e, f) {
                            var g = function (a) {
                                var d = _.Wc(c), f = _.Rf(a.target) ? a.target.getAttribute("role") || null : null;
                                "click" == a.type && _.Zj(a) ? d.call(e, a) : 13 != a.keyCode && 3 != a.keyCode || "keyup" == a.type ? 32 != a.keyCode || "keyup" != a.type || "button" != f && "tab" != f || (d.call(e, a), a.preventDefault()) : (a.type = "keypress", d.call(e, a))
                            };
                            g.o = c;
                            g.b = e;
                            f ? f.b(a, dk, g, d) : _.M(a, dk, g, d)
                        };
                        var ek = !1, fk = "", gk = function (a) {
                            a = a.match(/[\d]+/g);
                            if (!a)
                                return"";
                            a.length = 3;
                            return a.join(".")
                        };
                        if (window.navigator.plugins && window.navigator.plugins.length) {
                            var hk = window.navigator.plugins["Shockwave Flash"];
                            hk && (ek = !0, hk.description && (fk = gk(hk.description)));
                            window.navigator.plugins["Shockwave Flash 2.0"] && (ek = !0, fk = "2.0.0.11")
                        } else if (window.navigator.mimeTypes && window.navigator.mimeTypes.length) {
                            var ik = window.navigator.mimeTypes["application/x-shockwave-flash"];
                            (ek = ik && ik.enabledPlugin) && (fk = gk(ik.enabledPlugin.description))
                        } else
                            try {
                                var jk = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"),
                                        ek = !0, fk = gk(jk.GetVariable("$version"))
                            } catch (kk) {
                                try {
                                    jk = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.6"), ek = !0, fk = "6.0.21"
                                } catch (lk) {
                                    try {
                                        jk = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash"), ek = !0, fk = gk(jk.GetVariable("$version"))
                                    } catch (mk) {
                                    }
                                }
                            }
                        _.nk = fk;
                        _.ok = _.K && !_.L("12") || _.Xa && _.L("1.9.3");
                        var pk = function (a) {
                            a || _.Wf();
                            _.od.call(this)
                        };
                        _.x(pk, _.od);
                        pk.prototype.A = null;
                        pk.prototype.G = null;
                        pk.prototype.set = function (a, c, d) {
                            _.od.prototype.set.call(this, a, c);
                            d && (this.A = a);
                            return this
                        };
                        var qk = function (a, c, d, e) {
                            return a.set(c.key, c.caption, d, e)
                        };
                        pk.prototype.xb = function () {
                            if (this.G) {
                                _.Kf(this.G, _.zb);
                                var a = _.Wf(this.G);
                                this.forEach(function (c, d) {
                                    var e = a.ya("BUTTON", {name: d}, c);
                                    d == this.A && (e.className = "gb_3a-buttonset-default");
                                    this.G.appendChild(e)
                                }, this)
                            }
                        };
                        pk.prototype.P = function () {
                            return this.G
                        };
                        var rk = {key: "ok", caption: "OK"}, sk = {key: "cancel", caption: "Cancel"}, tk = {key: "yes", caption: "Yes"}, uk = {key: "no", caption: "No"}, vk = {key: "save", caption: "Save"}, wk = {key: "continue", caption: "Continue"};
                        "undefined" != typeof window.document && (qk(new pk, rk, !0, !0), qk(qk(new pk, rk, !0), sk, !1, !0), qk(qk(new pk, tk, !0), uk, !1, !0), qk(qk(qk(new pk, tk), uk, !0), sk, !1, !0), qk(qk(qk(new pk, wk), vk), sk, !0, !0));

                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        var Hk, Kk, Lk, Nk, Pk, Rk, Sk, Tk;
                        _.xk = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.xk, _.z);
                        _.yk = function () {
                            return _.D(_.J(), _.xk, 11)
                        };
                        _.zk = function (a) {
                            return null != _.C(a, 2) ? _.C(a, 2) : .001
                        };
                        _.Ak = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.Ak, _.z);
                        var Bk = function (a) {
                            return null != _.C(a, 3) ? _.C(a, 3) : 1
                        }, Ck = function (a) {
                            return null != _.C(a, 2) ? _.C(a, 2) : 1E-4
                        }, Dk = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(Dk, _.z);
                        _.Ek = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.Ek, _.z);
                        _.Gk = function () {
                            var a = _.Fk();
                            return _.C(a, 9)
                        };
                        Hk = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(Hk, _.z);
                        _.Ik = function (a) {
                            return _.C(a, 10)
                        };
                        _.Jk = function (a) {
                            return _.C(a, 5)
                        };
                        Kk = 0;
                        Lk = [];
                        _.Mk = function () {
                            this.data = {}
                        };
                        _.Mk.prototype.b = function () {
                            window.console && window.console.log && window.console.log("Log data: ", this.data)
                        };
                        _.Mk.prototype.o = function (a) {
                            var c = [], d;
                            for (d in this.data)
                                c.push((0, window.encodeURIComponent)(d) + "=" + (0, window.encodeURIComponent)(String(this.data[d])));
                            return("atyp=i&zx=" + (new Date).getTime() + "&" + c.join("&")).substr(0, a)
                        };
                        Nk = function (a) {
                            var c = new window.Image, d = Kk;
                            c.onerror = c.onload = c.onabort = function () {
                                d in Lk && delete Lk[d]
                            };
                            Lk[Kk++] = c;
                            c.src = a
                        };
                        _.Ok = function (a, c, d) {
                            return function () {
                                try {
                                    return c.apply(d, arguments)
                                } catch (e) {
                                    a.log(e)
                                }
                            }
                        };
                        Pk = function (a, c) {
                            this.data = {};
                            var d = _.D(a, _.xa, 8) || new _.xa;
                            this.data.ei = _.G(_.Ik(a));
                            this.data.ogf = _.G(_.C(d, 3));
                            var e;
                            e = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.F(_.C(a, 7));
                            this.data.ogrp = e ? "1" : "";
                            this.data.ogv = _.G(_.C(d, 6)) + "." + _.G(_.C(d, 7));
                            this.data.ogd = _.G(_.C(a, 21));
                            this.data.ogc = _.G(_.C(a, 20));
                            this.data.ogl = _.G(_.Jk(a));
                            c && (this.data.oggv = c)
                        };
                        _.x(Pk, _.Mk);
                        _.Qk = function (a) {
                            var c = "//www.google.com/gen_204?", c = c + a.o(2040 - c.length);
                            Nk(c)
                        };
                        Rk = null;
                        Sk = function (a) {
                            return(a + "").replace(".", "%2E").replace(",", "%2C")
                        };
                        Tk = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 41, 42, 43, 48, 49, 50, 51, 52, 53, 500];
                        _.Uk = function (a, c, d, e, f) {
                            Pk.call(this, a, c);
                            _.qc(this.data, {jexpid: _.G(_.C(a, 9)), srcpg: "prop=" + _.G(_.C(a, 6)), jsr: Math.round(1 / e), emsg: d.name + ":" + d.message});
                            if (f) {
                                f._sn && (f._sn = "og." + f._sn);
                                for (var g in f)
                                    this.data[(0, window.encodeURIComponent)(g)] = f[g]
                            }
                        };
                        _.x(_.Uk, Pk);
                        var Vk = function (a) {
                            if (!Rk) {
                                Rk = {};
                                for (var c = 0; c < Tk.length; c++)
                                    Rk[Tk[c]] = !0
                            }
                            return!!Rk[a]
                        }, Wk = function (a) {
                            this.b = a
                        };
                        Wk.prototype.log = function (a, c) {
                            try {
                                if (this.C(a)) {
                                    var d = this.w(a, c);
                                    this.o(d)
                                }
                            } catch (e) {
                            }
                        };
                        Wk.prototype.o = function (a) {
                            this.b ? a.b() : _.Qk(a)
                        };
                        var Xk = function (a, c, d, e) {
                            this.b = e;
                            this.H = c;
                            this.O = d;
                            this.A = _.H(_.zk(a), .001);
                            this.M = _.F(_.C(a, 1)) && Math.random() < this.A;
                            c = null != _.C(a, 3) ? _.C(a, 3) : 1;
                            this.F = _.H(c, 1);
                            this.B = 0;
                            a = null != _.C(a, 4) ? _.C(a, 4) : !0;
                            this.D = _.F(a, !0)
                        };
                        _.x(Xk, Wk);
                        Xk.prototype.log = function (a, c) {
                            Xk.J.log.call(this, a, c);
                            if (this.b && this.D)
                                throw a;
                        };
                        Xk.prototype.C = function () {
                            return this.b || this.M && this.B < this.F
                        };
                        Xk.prototype.w = function (a, c) {
                            try {
                                return _.Aa(_.za.T(), "lm").tf(a, c)
                            } catch (d) {
                                return new _.Uk(this.H, this.O, a, this.A, c)
                            }
                        };
                        Xk.prototype.o = function (a) {
                            Xk.J.o.call(this, a);
                            this.B++
                        };
                        var Yk = function (a, c, d, e, f, g) {
                            Pk.call(this, a, c);
                            _.qc(this.data, {oge: e, ogex: _.G(_.C(a, 9)), ogp: _.G(_.C(a, 6)), ogsr: Math.round(1 / (Vk(e) ? _.H(Bk(d)) : _.H(Ck(d)))), ogus: f});
                            if (g) {
                                "ogw"in g && (this.data.ogw = g.ogw, delete g.ogw);
                                "ved"in g && (this.data.ved = g.ved, delete g.ved);
                                a = [];
                                for (var h in g)
                                    0 != a.length && a.push(","), a.push(Sk(h)), a.push("."), a.push(Sk(g[h]));
                                g = a.join("");
                                "" != g && (this.data.ogad = g)
                            }
                        };
                        _.x(Yk, Pk);
                        _.Fk = function () {
                            return _.D(_.J(), Hk, 4) || new Hk
                        };
                        var Zk = function (a, c, d, e, f) {
                            this.b = f;
                            this.H = a;
                            this.M = c;
                            this.O = e;
                            this.D = _.H(Ck(a), 1E-4);
                            this.A = _.H(Bk(a), 1);
                            c = Math.random();
                            this.F = _.F(_.C(a, 1)) && c < this.D;
                            this.B = _.F(_.C(a, 1)) && c < this.A;
                            a = 0;
                            _.F(_.C(d, 1)) && (a |= 1);
                            _.F(_.C(d, 2)) && (a |= 2);
                            _.F(_.C(d, 3)) && (a |= 4);
                            this.S = a
                        };
                        _.x(Zk, Wk);
                        Zk.prototype.C = function (a) {
                            return this.b || (Vk(a) ? this.B : this.F)
                        };
                        Zk.prototype.w = function (a, c) {
                            return new Yk(this.M, this.O, this.H, a, this.S, c)
                        };
                        var $k;
                        $k = null;
                        _.U = function () {
                            if (!$k) {
                                var a = _.D(_.J(), _.Ak, 13) || new _.Ak, c = _.Oa(), d = _.Gk();
                                $k = new Xk(a, c, d, _.Ka)
                            }
                            return $k
                        };
                        _.I = function (a, c) {
                            _.U().log(a, c)
                        };
                        var al;
                        al = null;
                        _.bl = function () {
                            if (!al) {
                                var a = _.D(_.J(), Dk, 12) || new Dk, c = _.Oa(), d = _.yk() || new _.xk, e = _.Gk();
                                al = new Zk(a, c, d, e, _.Ka)
                            }
                            return al
                        };
                        _.cl = function (a, c) {
                            _.bl().log(a, c)
                        };
                        _.cl(8, {m: "BackCompat" == window.document.compatMode ? "q" : "s"});/*
                         Portions of this code are from MochiKit, received by
                         The Closure Authors under the MIT license. All other code is Copyright
                         2005-2009 The Closure Authors. All Rights Reserved.
                         */
                        _.dl = function (a, c) {
                            this.B = [];
                            this.S = c || null;
                            this.b = this.o = !1;
                            this.w = void 0;
                            this.M = this.H = this.C = !1;
                            this.A = 0;
                            this.F = null;
                            this.O = 0
                        };
                        _.dl.prototype.D = function (a, c) {
                            this.C = !1;
                            this.o = !0;
                            this.w = c;
                            this.b = !a;
                            el(this)
                        };
                        _.dl.prototype.jb = function (a) {
                            if (this.o) {
                                if (!this.M)
                                    throw new fl;
                                this.M = !1
                            }
                            this.o = !0;
                            this.w = a;
                            this.b = !1;
                            el(this)
                        };
                        _.dl.prototype.addCallback = function (a, c) {
                            return gl(this, a, null, c)
                        };
                        var gl = function (a, c, d, e) {
                            a.B.push([c, d, e]);
                            a.o && el(a);
                            return a
                        };
                        _.dl.prototype.then = function (a, c, d) {
                            var e, f, g = new _.Ld(function (a, c) {
                                e = a;
                                f = c
                            });
                            gl(this, e, function (a) {
                                f(a)
                            });
                            return g.then(a, c, d)
                        };
                        _.Hd(_.dl);
                        var hl = function (a) {
                            return(0, _.ta)(a.B, function (a) {
                                return _.ea(a[1])
                            })
                        }, el = function (a) {
                            if (a.A && a.o && hl(a)) {
                                var c = a.A, d = il[c];
                                d && (_.m.clearTimeout(d.da), delete il[c]);
                                a.A = 0
                            }
                            a.F && (a.F.O--, delete a.F);
                            for (var c = a.w, e = d = !1; a.B.length && !a.C; ) {
                                var f = a.B.shift(), g = f[0], h = f[1], f = f[2];
                                if (g = a.b ? h : g)
                                    try {
                                        var l = g.call(f || a.S, c);
                                        _.n(l) && (a.b = a.b && (l == c || l instanceof Error), a.w = c = l);
                                        if (_.Id(c) || "function" === typeof _.m.Promise && c instanceof _.m.Promise)
                                            e = !0, a.C = !0
                                    } catch (q) {
                                        c = q, a.b = !0, hl(a) || (d = !0)
                                    }
                            }
                            a.w = c;
                            e && (l = (0, _.u)(a.D,
                                    a, !0), e = (0, _.u)(a.D, a, !1), c instanceof _.dl ? (gl(c, l, e), c.H = !0) : c.then(l, e));
                            d && (c = new jl(c), il[c.da] = c, a.A = c.da)
                        }, fl = function () {
                            _.ja.call(this)
                        };
                        _.x(fl, _.ja);
                        fl.prototype.message = "Deferred has already fired";
                        fl.prototype.name = "AlreadyCalledError";
                        var jl = function (a) {
                            this.da = _.m.setTimeout((0, _.u)(this.o, this), 0);
                            this.b = a
                        };
                        jl.prototype.o = function () {
                            delete il[this.da];
                            throw this.b;
                        };
                        var il = {};

                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        var kl, ol, ql;
                        kl = [3, 5];
                        _.ll = function (a) {
                            _.A(this, a, 0, kl)
                        };
                        _.x(_.ll, _.z);
                        var ml = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(ml, _.z);
                        _.nl = function (a) {
                            _.A(this, a, 0, null)
                        };
                        _.x(_.nl, _.z);
                        _.nl.prototype.Va = function () {
                            return _.C(this, 6)
                        };
                        _.pl = function (a, c, d, e, f, g) {
                            _.y.call(this);
                            this.H = c;
                            this.Y = f;
                            this.F = g;
                            this.O = !1;
                            this.w = {"": !0};
                            this.S = {"": !0};
                            this.A = [];
                            this.B = [];
                            this.U = ["//" + _.G(_.C(a, 2)), "og/_/js", "k=" + _.G(_.C(a, 3)), "rt=j", "t=zcms"];
                            this.M = "" == _.G(_.C(a, 14)) ? null : _.C(a, 14);
                            this.L = ["//" + _.G(_.C(a, 2)), "og/_/ss", "k=" + _.G(_.C(a, 13))];
                            this.D = "" == _.G(_.C(a, 15)) ? null : _.C(a, 15);
                            this.R = _.F(_.C(a, 1)) ? "?host=www.gstatic.com&bust=" + _.G(_.C(a, 16)) : "";
                            this.K = _.F(_.C(a, 1)) ? "?host=www.gstatic.com&bust=" + 1E11 * Math.random() : "";
                            this.o = d;
                            _.C(a, 19);
                            a = null != _.C(a, 17) ? _.C(a, 17) : 1;
                            this.b = _.H(a, 1);
                            a = 0;
                            for (c = e[a]; a < e.length; a++, c = e[a])
                                ol(this, c, !0)
                        };
                        _.x(_.pl, _.y);
                        _.Ba(_.pl, "m");
                        ol = function (a, c, d) {
                            if (!a.w[c] && (a.w[c] = !0, d && a.o[c]))
                                for (var e = 0; e < a.o[c].length; e++)
                                    ol(a, a.o[c][e], d)
                        };
                        ql = function (a, c) {
                            for (var d = [], e = 0; e < c.length; e++) {
                                var f = c[e];
                                if (!a.w[f]) {
                                    var g = a.o[f];
                                    g && (g = ql(a, g), d = d.concat(g));
                                    d.push(f);
                                    a.w[f] = !0
                                }
                            }
                            return d
                        };
                        _.sl = function (a, c, d) {
                            c = ql(a, c);
                            0 < c.length && (c = a.U.join("/") + "/" + ("m=" + c.join(",")), a.M && (c += "/rs=" + a.M), c = c + a.R, rl(a, c, (0, _.u)(a.X, a, d)), a.A.push(c))
                        };
                        _.pl.prototype.X = function (a) {
                            for (var c = 0; c < this.B.length; c++)
                                this.B[c].call(null);
                            a && a.call(null)
                        };
                        var rl = function (a, c, d, e) {
                            var f = window.document.createElement("SCRIPT");
                            f.async = !0;
                            f.type = "text/javascript";
                            f.charset = "UTF-8";
                            f.src = c;
                            var g = !0, h = e || 1;
                            e = (0, _.u)(function () {
                                g = !1;
                                this.F.log(47, {att: h, max: a.b, url: c});
                                h < a.b ? rl(a, c, d, h + 1) : this.Y.log(Error("$`" + h + "`" + a.b), {url: c})
                            }, a);
                            var l = (0, _.u)(function () {
                                g && (this.F.log(46, {att: h, max: a.b, url: c}), g = !1, d && d.call(null))
                            }, a), q = function (a) {
                                "loaded" == a.readyState || "complete" == a.readyState ? l() : g && window.setTimeout(function () {
                                    q(a)
                                }, 100)
                            };
                            "undefined" !== typeof f.addEventListener ?
                                    f.onload = function () {
                                        l()
                                    } : f.onreadystatechange = function () {
                                f.onreadystatechange = null;
                                q(f)
                            };
                            f.onerror = e;
                            a.F.log(45, {att: h, max: a.b, url: c});
                            window.document.getElementsByTagName("HEAD")[0].appendChild(f)
                        };
                        _.pl.prototype.Gd = function (a, c) {
                            for (var d = [], e = 0, f = a[e]; e < a.length; e++, f = a[e])
                                this.S[f] || (d.push(f), this.S[f] = !0);
                            0 < d.length && (d = this.L.join("/") + "/" + ("m=" + d.join(",")), this.D && (d += "/rs=" + this.D), d += this.K, tl(d, c))
                        };
                        var tl = function (a, c) {
                            var d = window.document.createElement("LINK");
                            d.setAttribute("rel", "stylesheet");
                            d.setAttribute("type", "text/css");
                            d.setAttribute("href", a);
                            d.onload = d.onreadystatechange = function () {
                                d.readyState && "loaded" != d.readyState && "complete" != d.readyState || c && c.call(null)
                            };
                            window.document.getElementsByTagName("HEAD")[0].appendChild(d)
                        };
                        _.pl.prototype.C = function (a, c) {
                            this.O || (void 0 != c ? window.setTimeout((0, _.u)(this.C, this, a, void 0), c) : (_.sl(this, _.C(this.H, 1), a), this.Gd(_.C(this.H, 2)), this.O = !0))
                        };
                        var ul = function (a, c) {
                            var d = {};
                            d._sn = ["v.gas", c].join(".");
                            _.I(a, d)
                        };
                        var vl = ["gbq1", "gbq2", "gbqfbwa"], wl = function (a) {
                            var c = window.document.getElementById("gbqld");
                            c && (c.style.display = a ? "none" : "block", c = window.document.getElementById("gbql")) && (c.style.display = a ? "block" : "none")
                        };
                        var xl = function () {
                        };
                        var yl = function (a, c, d) {
                            this.o = a;
                            this.w = c;
                            this.b = d || _.m
                        };
                        var zl = function () {
                            this.b = []
                        };
                        zl.prototype.C = function (a, c, d) {
                            this.H(a, c, d);
                            this.b.push(new yl(a, c, d))
                        };
                        zl.prototype.H = function (a, c, d) {
                            d = d || _.m;
                            for (var e = 0, f = this.b.length; e < f; e++) {
                                var g = this.b[e];
                                if (g.o == a && g.w == c && g.b == d) {
                                    this.b.splice(e, 1);
                                    break
                                }
                            }
                        };
                        zl.prototype.A = function (a) {
                            for (var c = 0, d = this.b.length; c < d; c++) {
                                var e = this.b[c];
                                "hrc" == e.o && e.w.call(e.b, a)
                            }
                        };
                        var Al, Cl, Dl, El, Fl;
                        Al = null;
                        _.Bl = function () {
                            if (null != Al)
                                return Al;
                            var a = window.document.body.style;
                            if (!(a = "flexGrow"in a || "webkitFlexGrow"in a))
                                a:{
                                    if (a = window.navigator.userAgent) {
                                        var c = /Trident\/(\d+)/.exec(a);
                                        if (c && 7 <= Number(c[1])) {
                                            a = /\bMSIE (\d+)/.exec(a);
                                            a = !a || "10" == a[1];
                                            break a
                                        }
                                    }
                                    a = !1
                                }
                            return Al = a
                        };
                        Cl = function (a, c, d) {
                            var e = window.NaN;
                            window.getComputedStyle && (a = window.getComputedStyle(a, null).getPropertyValue(c)) && "px" == a.substr(a.length - 2) && (e = d ? (0, window.parseFloat)(a.substr(0, a.length - 2)) : (0, window.parseInt)(a.substr(0, a.length - 2), 10));
                            return e
                        };
                        Dl = function (a) {
                            var c = a.offsetWidth, d = Cl(a, "width");
                            if (!(0, window.isNaN)(d))
                                return c - d;
                            var e = a.style.padding, f = a.style.paddingLeft, g = a.style.paddingRight;
                            a.style.padding = a.style.paddingLeft = a.style.paddingRight = 0;
                            d = a.clientWidth;
                            a.style.padding = e;
                            a.style.paddingLeft = f;
                            a.style.paddingRight = g;
                            return c - d
                        };
                        El = function (a) {
                            var c = Cl(a, "min-width");
                            if (!(0, window.isNaN)(c))
                                return c;
                            var d = a.style.width, e = a.style.padding, f = a.style.paddingLeft, g = a.style.paddingRight;
                            a.style.width = a.style.padding = a.style.paddingLeft = a.style.paddingRight = 0;
                            c = a.clientWidth;
                            a.style.width = d;
                            a.style.padding = e;
                            a.style.paddingLeft = f;
                            a.style.paddingRight = g;
                            return c
                        };
                        Fl = function (a, c) {
                            c || -.5 != a - Math.round(a) || (a -= .5);
                            return Math.round(a)
                        };
                        _.Gl = function (a) {
                            if (a) {
                                var c = a.style.opacity;
                                a.style.opacity = ".99";
                                _.zc(a.offsetWidth);
                                a.style.opacity = c
                            }
                        };
                        var Hl = function (a) {
                            _.y.call(this);
                            this.b = a;
                            this.o = [];
                            this.w = []
                        };
                        _.x(Hl, _.y);
                        Hl.prototype.N = function () {
                            Hl.J.N.call(this);
                            this.b = null;
                            for (var a = 0; a < this.o.length; a++)
                                this.o[a].aa();
                            for (a = 0; a < this.w.length; a++)
                                this.w[a].aa();
                            this.o = this.w = null
                        };
                        Hl.prototype.Qa = function (a) {
                            void 0 == a && (a = this.b.offsetWidth);
                            for (var c = Dl(this.b), d = [], e = 0, f = 0, g = 0, h = 0, l = 0; l < this.o.length; l++) {
                                var q = this.o[l], r = Il(q), w = Dl(q.b);
                                d.push({item: q, mb: r, th: w, vc: 0});
                                e += r.Gc;
                                f += r.Vc;
                                g += r.Tb;
                                h += w
                            }
                            a = a - h - c - g;
                            e = 0 < a ? e : f;
                            f = a;
                            c = d;
                            do {
                                g = !0;
                                h = [];
                                for (l = q = 0; l < c.length; l++) {
                                    var r = c[l], w = 0 < f ? r.mb.Gc : r.mb.Vc, B = 0 == e ? 0 : w / e * f + r.vc, B = Fl(B, g), g = !g;
                                    r.vc = Jl(r.item, B, r.th, r.mb.Tb);
                                    0 < w && B == r.vc && (h.push(r), q += w)
                                }
                                c = h;
                                f = a - (0, _.sa)(d, function (a, c) {
                                    return a + c.vc
                                }, 0);
                                e = q
                            } while (0 != f && 0 != c.length);
                            for (l = 0; l < this.w.length; l++)
                                this.w[l].Qa()
                        };
                        var Ll = function (a) {
                            var c = {};
                            c.items = (0, _.ra)(a.o, function (a) {
                                return Kl(a)
                            });
                            c.children = (0, _.ra)(a.w, function (a) {
                                return Ll(a)
                            });
                            return c
                        }, Ml = function (a, c) {
                            for (var d = 0; d < a.o.length; d++)
                                a.o[d].b.style.width = c.items[d];
                            for (d = 0; d < a.w.length; d++)
                                Ml(a.w[d], c.children[d])
                        };
                        Hl.prototype.P = function () {
                            return this.b
                        };
                        var Nl = function (a, c, d, e) {
                            Hl.call(this, a);
                            this.A = c;
                            this.C = d;
                            this.B = e
                        };
                        _.x(Nl, Hl);
                        var Il = function (a, c) {
                            var d = a.A, e = a.C, f;
                            if (-1 == a.B) {
                                var g = c;
                                void 0 == g && (g = Dl(a.b));
                                f = Kl(a);
                                var h = Ll(a), l = Cl(a.b, "width", !0);
                                (0, window.isNaN)(l) && (l = a.b.offsetWidth - g);
                                g = Math.ceil(l);
                                a.b.style.width = f;
                                Ml(a, h);
                                f = g
                            } else
                                f = a.B;
                            return{Gc: d, Vc: e, Tb: f}
                        }, Jl = function (a, c, d, e) {
                            void 0 == d && (d = Dl(a.b));
                            void 0 == e && (e = Il(a, d).Tb);
                            c = e + c;
                            0 > c && (c = 0);
                            a.b.style.width = c + "px";
                            d = a.b.offsetWidth - d;
                            a.b.style.width = d + "px";
                            return d - e
                        }, Kl = function (a) {
                            var c = a.b.style.width;
                            a.b.style.width = "";
                            return c
                        };
                        var Ol = function (a, c, d) {
                            var e;
                            void 0 == e && (e = -1);
                            return{className: a, mb: {Gc: c || 0, Vc: d || 0, Tb: e}}
                        }, Pl = {className: "gb_5b", items: [Ol("gb_W"), Ol("gb_jc"), Ol("gb_Ob", 0, 2), Ol("gb_kc"), Ol("gb_e", 1, 1)], kb: [{className: "gb_e", items: [Ol("gb_Lc", 0, 1), Ol("gb_Kc", 0, 1)], kb: [function (a) {
                                            a = a.gb_Lc;
                                            var c;
                                            if (a)
                                                c = a.P();
                                            else {
                                                c = window.document.querySelector(".gb_Lc");
                                                if (!c)
                                                    return null;
                                                a = new Hl(c)
                                            }
                                            c = c.querySelectorAll(".gb_ma");
                                            for (var d = 0; d < c.length; d++) {
                                                var e;
                                                if (_.ag(c[d], "gb_na")) {
                                                    e = new Nl(c[d], 0, 1, -1);
                                                    var f = c[d].querySelector(".gb_la");
                                                    f && (f = new Nl(f, 0, 1, -1), e.o.push(f), a.w.push(e))
                                                } else
                                                    e = new Nl(c[d], 0, 0, -1);
                                                a.o.push(e)
                                            }
                                            return a
                                        }, {className: "gb_Kc", items: [Ol("gb_Ea"), Ol("gb_8a"), Ol("gb_1b"), Ol("gb_p", 0, 1), Ol("gb_Mc"), Ol("gb_j", 0, 1), Ol("gb_Nc"), Ol("gb_mc")], kb: [{className: "gb_p", items: [Ol("gb_s", 0, 1)], kb: [{className: "gb_s", items: [Ol("gb_l", 0, 1)], kb: []}]}]}]}, {className: "gb_gc", items: [Ol("gbqff", 1, 1), Ol("gb_fc")], kb: []}]}, Ql = function (a, c) {
                            var d = c;
                            if (!d) {
                                d = window.document.querySelector("." + a.className);
                                if (!d)
                                    return null;
                                d = new Hl(d)
                            }
                            for (var e =
                                    {}, f = 0; f < a.items.length; f++) {
                                var g = a.items[f], h;
                                h = g;
                                var l = window.document.querySelector("." + h.className);
                                if (h = l ? new Nl(l, h.mb.Gc, h.mb.Vc, h.mb.Tb) : null)
                                    d.o.push(h), e[g.className] = h
                            }
                            for (f = 0; f < a.kb.length; f++) {
                                var g = a.kb[f], q;
                                "function" == typeof g ? q = g(e) : q = Ql(g, e[g.className]);
                                q && d.w.push(q)
                            }
                            return d
                        };
                        _.Tl = function (a, c) {
                            _.y.call(this);
                            this.K = c;
                            this.D = new zl;
                            this.o = window.document.getElementById("gb");
                            this.M = (this.b = window.document.querySelector(".gb_e")) ? this.b.querySelector(".gb_Kc") : null;
                            this.F = [];
                            this.ge = _.H(_.C(a, 5), 60);
                            this.O = _.C(a, 4);
                            this.Dh = _.H(_.C(a, 2), 152);
                            this.Hf = _.H(_.C(a, 1), 30);
                            this.w = null;
                            this.Ke = _.F(_.C(a, 3), !0);
                            this.B = 1;
                            this.o && this.O && (this.o.style.minWidth = this.O + "px");
                            _.Rl(this);
                            this.Ke && (this.o && (Sl(this), _.Q(this.o, "gb_oa"), this.b && _.Q(this.b, "gb_oa"), _.Bl() || (this.w = Ql(Pl))),
                                    this.Qa(), window.setTimeout((0, _.u)(this.Qa, this), 0));
                            _.v("gbar.elc", (0, _.u)(this.U, this));
                            _.v("gbar.ela", _.yc);
                            _.v("gbar.elh", (0, _.u)(this.S, this))
                        };
                        _.x(_.Tl, _.y);
                        _.Ba(_.Tl, "el");
                        var Ul = function () {
                            var a = _.Tl.Oh();
                            return{es: a ? {f: a.Dh, h: a.ge, m: a.Hf} : {f: 152, h: 60, m: 30}, mo: "md", vh: window.innerHeight || 0, vw: window.innerWidth || 0}
                        };
                        _.Tl.prototype.N = function () {
                            _.Tl.J.N.call(this)
                        };
                        _.Tl.prototype.Qa = function (a) {
                            a && Sl(this);
                            this.w && this.w.Qa(Math.max(window.document.documentElement.clientWidth, El(this.o)));
                            _.Gl(this.b)
                        };
                        _.Tl.prototype.L = function () {
                            try {
                                var a = window.document.getElementById("gb"), c = a.querySelector(".gb_e");
                                _.R(a, "gb_3c");
                                c && _.R(c, "gb_3c");
                                for (var a = 0, d; d = vl[a]; a++) {
                                    var e = window.document.getElementById(d);
                                    e && _.R(e, "gbqfh")
                                }
                                wl(!1)
                            } catch (f) {
                                ul(f, "rhcc")
                            }
                            this.Qa(!0)
                        };
                        _.Tl.prototype.R = function () {
                            try {
                                var a = window.document.getElementById("gb"), c = a.querySelector(".gb_e");
                                _.Q(a, "gb_3c");
                                c && _.Q(c, "gb_3c");
                                for (var a = 0, d; d = vl[a]; a++) {
                                    var e = window.document.getElementById(d);
                                    e && _.Q(e, "gbqfh")
                                }
                                wl(!0)
                            } catch (f) {
                                ul(f, "ahcc")
                            }
                            this.Qa(!0)
                        };
                        _.Rl = function (a) {
                            if (a.o) {
                                var c = a.o.offsetWidth;
                                0 == a.B ? 900 <= c && (a.B = 1, a.A(new xl)) : 900 > c && (a.B = 0, a.A(new xl))
                            }
                        };
                        _.Tl.prototype.U = function (a) {
                            this.F.push(a)
                        };
                        _.Tl.prototype.S = function (a) {
                            var c = Ul().es.h;
                            this.ge = c + a;
                            for (a = 0; a < this.F.length; a++)
                                try {
                                    this.F[a](Ul())
                                } catch (d) {
                                    this.K.log(d)
                                }
                        };
                        var Sl = function (a) {
                            if (a.b) {
                                var c;
                                a.w && (c = Ll(a.w));
                                _.Q(a.b, "gb_t");
                                a.b.style.minWidth = a.b.offsetWidth - Dl(a.b) + "px";
                                a.M.style.minWidth = a.M.offsetWidth - Dl(a.M) + "px";
                                _.R(a.b, "gb_t");
                                c && Ml(a.w, c)
                            }
                        };
                        _.Tl.prototype.C = function (a, c, d) {
                            this.D.C(a, c, d)
                        };
                        _.Tl.prototype.H = function (a, c) {
                            this.D.H(a, c)
                        };
                        _.Tl.prototype.A = function (a) {
                            this.D.A(a)
                        };
                        _.Xb(function () {
                            var a = _.D(_.J(), ml, 21) || new ml, c = _.U(), a = new _.Tl(a, c);
                            _.Da("el", a);
                            _.v("gbar.gpca", (0, _.u)(a.R, a));
                            _.v("gbar.gpcr", (0, _.u)(a.L, a))
                        });
                        _.v("gbar.elr", Ul);
                        _.Vl = function (a) {
                            this.w = _.Tl.T();
                            this.o = a
                        };
                        _.Vl.prototype.b = function (a, c) {
                            0 == this.w.B ? (_.Q(a, "gb_qa"), c ? (_.R(a, "gb_o"), _.Q(a, "gb_Oc")) : (_.R(a, "gb_Oc"), _.Q(a, "gb_o"))) : _.bg(a, ["gb_qa", "gb_o", "gb_Oc"])
                        };
                        _.v("gbar.sos", function () {
                            return window.document.querySelectorAll(".gb_ic")
                        });
                        _.v("gbar.si", function () {
                            return window.document.querySelector(".gb_hc")
                        });
                        _.Xb(function () {
                            if (_.D(_.J(), _.ll, 16)) {
                                var a = window.document.querySelector(".gb_e"), c = _.D(_.J(), _.ll, 16) || new _.ll, c = _.F(_.C(c, 1), !1), c = new _.Vl(c);
                                a && c.o && c.b(a, !1)
                            }
                        });
                    } catch (e) {
                        _._DumpException(e)
                    }
                    try {
                        var Wl = function () {
                            _.Ma.w(_.I)
                        };
                        var Xl = function (a, c) {
                            var d = _.U(), d = _.Ok(d, Wl);
                            a.addEventListener ? a.addEventListener(c, d) : a.attachEvent && a.attachEvent("on" + c, d)
                        };
                        var Yl = [1, 2], Zl = function (a, c) {
                            a.B.push(c)
                        }, $l = function (a) {
                            _.A(this, a, 0, Yl)
                        };
                        _.x($l, _.z);
                        var am = function () {
                            _.y.call(this);
                            this.o = [];
                            this.b = []
                        };
                        _.x(am, _.y);
                        am.prototype.w = function (a, c) {
                            this.o.push({wc: a, options: c})
                        };
                        am.prototype.init = function (a, c, d) {
                            window.gapi = {};
                            var e = window.___jsl = {};
                            e.h = _.G(_.C(a, 1));
                            e.ms = _.G(_.C(a, 2));
                            e.m = _.G(_.C(a, 3));
                            e.l = [];
                            _.C(c, 1) && (a = _.C(c, 3)) && this.b.push(a);
                            _.C(d, 1) && (d = _.C(d, 2)) && this.b.push(d);
                            _.v("gapi.load", (0, _.u)(this.w, this));
                            return this
                        };
                        var bm = function (a) {
                            _.y.call(this);
                            this.C = a;
                            this.w = this.b = null;
                            this.F = 0;
                            this.A = {};
                            this.o = !1;
                            a = window.navigator.userAgent;
                            0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a)) && a[1] && 9 > (0, window.parseFloat)(a[1]) && (this.o = !0)
                        };
                        _.x(bm, _.y);
                        var cm = function (a, c, d) {
                            if (!a.o)
                                if (d instanceof Array)
                                    for (var e in d)
                                        cm(a, c, d[e]);
                                else {
                                    e = (0, _.u)(a.D, a, c);
                                    var f = a.F + d;
                                    a.F++;
                                    c.setAttribute("data-eqid", f);
                                    a.A[f] = e;
                                    c && c.addEventListener ? c.addEventListener(d, e, !1) : c && c.attachEvent ? c.attachEvent("on" + d, e) : a.C.log(Error("Y`" + c))
                                }
                        };
                        bm.prototype.B = function (a, c) {
                            if (this.o)
                                return null;
                            if (c instanceof Array) {
                                var d = null, e;
                                for (e in c) {
                                    var f = this.B(a, c[e]);
                                    f && (d = f)
                                }
                                return d
                            }
                            d = null;
                            this.b && this.b.type == c && this.w == a && (d = this.b, this.b = null);
                            if (e = a.getAttribute("data-eqid"))
                                a.removeAttribute("data-eqid"), (e = this.A[e]) ? a.removeEventListener ? a.removeEventListener(c, e, !1) : a.detachEvent && a.detachEvent("on" + c, e) : this.C.log(Error("Z`" + a));
                            return d
                        };
                        bm.prototype.D = function (a, c) {
                            this.b = c;
                            this.w = a;
                            c.preventDefault ? c.preventDefault() : c.returnValue = !1
                        };
                        var dm = function (a) {
                            _.y.call(this);
                            this.C = a;
                            this.B = this.b = null;
                            this.o = {};
                            this.A = {};
                            this.w = {}
                        };
                        _.x(dm, _.y);
                        _.k = dm.prototype;
                        _.k.Ye = function (a) {
                            a && this.b && a != this.b && this.b.close();
                            this.b = a
                        };
                        _.k.Me = function (a) {
                            a = this.w[a] || a;
                            return this.b == a
                        };
                        _.k.Hh = function (a) {
                            this.B = a
                        };
                        _.k.Le = function (a) {
                            return this.B == a
                        };
                        _.k.gd = function () {
                            this.b && this.b.close();
                            this.b = null
                        };
                        _.k.sf = function (a) {
                            this.b && this.b.getId() == a && this.gd()
                        };
                        _.k.Qb = function (a, c, d) {
                            this.o[a] = this.o[a] || {};
                            this.o[a][c] = this.o[a][c] || [];
                            this.o[a][c].push(d)
                        };
                        _.k.ed = function (a, c) {
                            var d = c.getId();
                            if (this.o[a] && this.o[a][d])
                                for (var e = 0; e < this.o[a][d].length; e++)
                                    try {
                                        this.o[a][d][e]()
                                    } catch (f) {
                                        this.C.log(f)
                                    }
                        };
                        _.k.Jh = function (a, c) {
                            this.A[a] = c
                        };
                        _.k.qf = function (a) {
                            return!this.A[a.getId()]
                        };
                        _.k.Wg = function () {
                            return!!this.b && this.b.$
                        };
                        _.k.pf = function () {
                            return!!this.b
                        };
                        _.k.Qe = function () {
                            this.b && this.b.ra()
                        };
                        _.k.bf = function (a) {
                            this.w[a] && (this.b && this.b.getId() == a || this.w[a].open())
                        };
                        _.k.kh = function (a) {
                            this.w[a.getId()] = a
                        };
                        (function () {
                            var a;
                            window.gbar && window.gbar._DPG ? a = window.gbar._DPG[0] || {} : a = {};
                            var c;
                            window.gbar && window.gbar._LDD ? c = window.gbar._LDD : c = [];
                            var d = _.Oa(), e = _.U();
                            a = new _.pl(d, _.D(_.J(), $l, 17) || new $l, a, c, e, _.bl());
                            _.Da("m", a);
                            c = function () {
                                _.v("gbar.qm", (0, _.u)(function (a) {
                                    try {
                                        a()
                                    } catch (c) {
                                        e.log(c)
                                    }
                                }, this));
                                _.E("api").Ya()
                            };
                            _.F(_.C(d, 18), !0) ? a.C(c) : (d = _.H(_.C(d, 19), 200), d = (0, _.u)(a.C, a, c, d), _.Xb(d))
                        })();
                        Xl(window.document, "DOMContentLoaded");
                        Xl(window, "load");
                        _.v("gbar.ldb", (0, _.u)(_.Ma.w, _.Ma));
                        _.v("gbar.mls", function () {
                        });
                        _.Da("eq", new bm(_.U()));
                        var em = window, fm, gm = _.Fk();
                        fm = _.C(gm, 7);
                        em.__PVT = _.G(fm);
                        _.Da("gs", (new am).init(_.Fk(), _.D(_.J(), _.Ek, 5) || new _.Ek, _.D(_.J(), _.nl, 6) || new _.nl));
                        (function () {
                            for (var a = function (a) {
                                return function () {
                                    _.cl(44, {n: a})
                                }
                            }, c = 0; c < _.Cb.length; c++) {
                                var d = "gbar." + _.Cb[c];
                                _.v(d, a(d))
                            }
                            var e = _.za.T();
                            _.Aa(e, "api").Ya();
                            Zl(_.Aa(e, "m"), function () {
                                _.Aa(e, "api").Ya()
                            })
                        })();
                        var hm = function (a) {
                            _.Xb(function () {
                                var c = window.document.querySelector("." + a);
                                c && (c = c.querySelector(".gb_ga")) && cm(_.E("eq"), c, "click")
                            })
                        };
                        var im = window.document.querySelector(".gb_Ea"), jm = /(\s+|^)gb_ec(\s+|$)/;
                        im && !jm.test(im.className) && hm("gb_Ea");
                        var km = new dm(_.U());
                        _.Da("dd", km);
                        _.v("gbar.close", (0, _.u)(km.gd, km));
                        _.v("gbar.cls", (0, _.u)(km.sf, km));
                        _.v("gbar.abh", (0, _.u)(km.Qb, km, 0));
                        _.v("gbar.adh", (0, _.u)(km.Qb, km, 1));
                        _.v("gbar.ach", (0, _.u)(km.Qb, km, 2));
                        _.v("gbar.aeh", (0, _.u)(km.Jh, km));
                        _.v("gbar.bsy", (0, _.u)(km.Wg, km));
                        _.v("gbar.op", (0, _.u)(km.pf, km));
                        hm("gb_p");
                        _.Xb(function () {
                            var a = window.document.querySelector(".gb_0");
                            a && cm(_.E("eq"), a, "click")
                        });
                        hm("gb_8a");
                        _.v("gbar.qfgw", (0, _.u)(window.document.getElementById, window.document, "gbqfqw"));
                        _.v("gbar.qfgq", (0, _.u)(window.document.getElementById, window.document, "gbqfq"));
                        _.v("gbar.qfgf", (0, _.u)(window.document.getElementById, window.document, "gbqf"));
                        _.v("gbar.qfsb", (0, _.u)(window.document.getElementById, window.document, "gbqfb"));
                        hm("gb_1b");
                        hm("gb_mc");
                    } catch (e) {
                        _._DumpException(e)
                    }
                })(this.gbar_);
// Google Inc.
            </script><div class="gb_c"><div class="gb_6b gb_ba gb_Pa gb_Va" aria-label="Apps" role="region" aria-hidden="true" tabindex="0"><ul class="gb_Ia gb_Ca" aria-dropeffect="move"><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb119" href="https://plus.google.com/u/0/?tab=wX" data-pid="119" data-ved="0CAAQwS4oAA"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -207px"></span><span class="gb_wa">+Robbie</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb1" href="https://www.google.com/webhp?tab=ww&amp;ei=EvtcVeOOKsrmoATOmYGYBw&amp;ved=0CAEQqS4oAQ" data-pid="1"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -414px"></span><span class="gb_wa">Search</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb36" href="https://www.youtube.com/" data-pid="36" data-ved="0CAIQwS4oAg"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1449px"></span><span class="gb_wa">YouTube</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb8" href="https://maps.google.com/maps?hl=en&amp;tab=wl" data-pid="8" data-ved="0CAMQwS4oAw"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -828px"></span><span class="gb_wa">Maps</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb78" href="https://play.google.com/?hl=en&amp;tab=w8" data-pid="78" data-ved="0CAQQwS4oBA"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1725px"></span><span class="gb_wa">Play</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb5" href="https://news.google.com/nwshp?hl=en&amp;tab=wn&amp;ei=EvtcVeOOKsrmoATOmYGYBw&amp;ved=0CAUQqS4oBQ" data-pid="5"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1656px"></span><span class="gb_wa">News</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb23" href="https://mail.google.com/mail/?tab=wm" data-pid="23" data-ved="0CAYQwS4oBg"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -690px"></span><span class="gb_wa">Gmail</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb49" href="https://drive.google.com/?tab=wo&amp;authuser=0" data-pid="49" data-ved="0CAcQwS4oBw"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1242px"></span><span class="gb_wa">Drive</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb24" href="https://www.google.com/calendar?tab=wc" data-pid="24" data-ved="0CAgQwS4oCA"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1518px"></span><span class="gb_wa">Calendar</span></a></li></ul><div class="gb_Ra gb_c"><div class="gb_xa gb_va" style="background-position:0 -414px"></div><div class="gb_Sa"><div class="gb_Ta">Search</div><a class="gb_Ua gb_dc" href="#">Add a shortcut</a></div></div><a class="gb_Fa gb_dc" href="http://www.google.com/intl/en/options/">More</a><span class="gb_Ja"></span><ul class="gb_Ia gb_Da" aria-dropeffect="move"><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb51" href="https://translate.google.com/?hl=en&amp;tab=wT" data-pid="51" data-ved="0CAkQwS4oCQ"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1587px"></span><span class="gb_wa">Translate</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb10" href="https://books.google.com/bkshp?hl=en&amp;tab=wp&amp;ei=EvtcVeOOKsrmoATOmYGYBw&amp;ved=0CAoQqS4oCg" data-pid="10"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -138px"></span><span class="gb_wa">Books</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb212" href="https://wallet.google.com/manage/?tab=wa" data-pid="212" data-ved="0CAsQwS4oCw"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -621px"></span><span class="gb_wa">Wallet</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb6" href="http://www.google.com/shopping?hl=en&amp;tab=wf&amp;ei=EvtcVeOOKsrmoATOmYGYBw&amp;ved=0CAwQqS4oDA" data-pid="6"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1380px"></span><span class="gb_wa">Shopping</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb30" href="https://www.blogger.com/?tab=wj" data-pid="30" data-ved="0CA0QwS4oDQ"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1311px"></span><span class="gb_wa">Blogger</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb27" href="https://www.google.com/finance?tab=we" data-pid="27" data-ved="0CA4QwS4oDg"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -1035px"></span><span class="gb_wa">Finance</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb31" href="https://photos.google.com/?tab=wq" data-pid="31" data-ved="0CA8QwS4oDw"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -966px"></span><span class="gb_wa">Photos</span></a></li><li class="gb_ra" aria-grabbed="false"><a class="gb_ka" id="gb25" href="https://docs.google.com/document/?usp=docs_alc&amp;authuser=0" data-pid="25" data-ved="0CBAQwS4oEA"><div class="gb_Aa"></div><div class="gb_Ba"></div><span class="gb_va" style="background-position:0 -483px"></span><span class="gb_wa">Docs</span></a></li></ul><a class="gb_Ja gb_7b" href="http://www.google.com/intl/en/options/">Even more from Google</a></div><div class="gb_w gb_ba" aria-label="Account Information" aria-hidden="true" tabindex="0"><div class="gb_z"><a class="gb_A gb_dc" href="https://plus.google.com/u/0/me?tab=wX"><div class="gb_g gbip" title="Google+ Profile Icon"></div><span class="gb_C">Change photo</span></a><div class="gb_B"><div class="gb_D">Robbie Bise</div><div class="gb_E">robbiebise@gmail.com</div><div class="gb_y"><a href="https://www.google.com/settings?ref=home">Account</a>&ndash;<a href="http://www.google.com/intl/en/policies/privacy/">Privacy</a></div><a class="gb_ac gbp1 gb_a" href="https://plus.google.com/u/0/me?tab=wX">View profile</a></div></div><div class="gb_K gb_c" aria-hidden="true"><a class="gb_L gb_O" href="https://www.google.com/webhp?authuser=0"><img class="gb_Q" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="//lh5.googleusercontent.com/-ER4ldoli-Ic/AAAAAAAAAAI/AAAAAAAAAAA/W2FFxR75jWo/s48-c/photo.jpg" alt="Google+ Profile Icon"><div class="gb_N"><div class="gb_R">Robbie Bise</div><div class="gb_S">robbiebise@gmail.com (default)</div></div></a></div><a class="gb_T gb_c" href="https://plus.google.com/u/0/dashboard" aria-hidden="true"><span class="gb_U gb_2"></span><div class="gb_V">All your Google+ pages &rsaquo;</div></a><div class="gb_F"><div><a class="gb_8b gb_a" href="https://accounts.google.com/AddSession?hl=en&amp;continue=https://www.google.com/">Add account</a></div><div><a class="gb_bc gb_ic gb_a" id="gb_71" href="https://accounts.google.com/Logout?hl=en&amp;continue=https://www.google.com/&amp;timeStmp=1432156946&amp;secTok=.AG5fkS_Bql94MjVP5FzqaaQ0v6A0bxg3Jw" target="_top">Sign out</a></div></div></div></div><style>.gb_f .gbqfi::before{left:-56px;top:-35px}.gb_M .gbqfb:focus .gbqfi{outline:1px dotted #fff}#gb#gb a.gb_ka,#gb#gb a.gb_la{color:#404040;text-decoration:none}#gb#gb a.gb_la:hover,#gb#gb a.gb_la:focus{color:#000;text-decoration:underline}.gb_ma.gb_r{display:none;padding-left:15px;vertical-align:middle}.gb_ma.gb_r:first-child{padding-left:0}.gb_na.gb_r{display:inline-block}.gb_oa .gb_na.gb_r{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size;display:-webkit-flex;display:flex}.gb_pa .gb_na.gb_r{display:none}.gb_ma .gb_la{display:inline-block;line-height:24px;outline:none;vertical-align:middle}.gb_na .gb_la{min-width:60px;overflow:hidden;-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size;text-overflow:ellipsis}.gb_qa .gb_na .gb_la{min-width:0}.gb_t .gb_na .gb_la{width:0!important}.gb_m .gb_la{font-weight:bold;text-shadow:0 1px 1px rgba(255,255,255,.9)}.gb_n .gb_la{font-weight:bold;text-shadow:0 1px 1px rgba(0,0,0,.6)}#gb#gb.gb_n a.gb_la{color:#fff}.gb_Ea .gb_ga{background-position:-326px -52px;opacity:.55}.gb_m .gb_Ea .gb_ga{background-position:-97px -57px;opacity:.7}.gb_n .gb_Ea .gb_ga{background-position:-214px 0;opacity:1}.gb_c{display:none!important}@-webkit-keyframes gb__a{0%{opacity:0}50%{opacity:1}}@keyframes gb__a{0%{opacity:0}50%{opacity:1}}.gb_f .gb_Ea .gb_ga::before{left:-326px;top:-52px}.gb_f.gb_m .gb_Ea .gb_ga::before{left:-97px;top:-57px}.gb_f.gb_n .gb_Ea .gb_ga::before{left:-214px;top:0}.gb_M .gb_Fa{position:relative}.gb_f .gb_0 .gb_2::before{left:0;top:-105px}.gb_f.gb_n .gb_0 .gb_2::before{left:-97px;top:-92px}.gb_f.gb_m .gb_0 .gb_2::before{left:-97px;top:0}.gb_f .gb_3{background-image:none!important}.gb_f .gb_4{visibility:visible}.gb_M .gb_7a span{background:transparent}.gb_f .gb_9a::before{left:-56px;top:0}.gb_f .gb_ab .gb_9a::before{left:-291px;top:-103px}.gb_f.gb_m .gb_ga .gb_9a::before{left:-167px;top:-57px}.gb_f.gb_m .gb_ab .gb_9a::before{left:-132px;top:-57px}.gb_f.gb_n .gb_ga .gb_9a::before{left:-326px;top:-87px}.gb_f.gb_n .gb_ab .gb_9a::before{left:0;top:-70px}.gb_M .gb_hb{border:1px solid #fff;color:#fff}.gb_M.gb_m .gb_hb{border-color:#000;color:#000}.gb_f .gb_hb.gb_ib::before,.gb_M.gb_f.gb_n .gb_hb.gb_ib::before{left:-214px;top:-117px}.gb_f .gb_hb.gb_jb::before,.gb_M.gb_f.gb_n .gb_hb.gb_jb::before{left:-256px;top:-73px}.gb_f.gb_n .gb_hb.gb_ib::before,.gb_M.gb_f.gb_m .gb_hb.gb_ib::before{left:-326px;top:-122px}.gb_f.gb_n .gb_hb.gb_jb::before,.gb_M.gb_f.gb_m .gb_hb.gb_jb::before{left:-214px;top:-92px}.gb_mb{display:none;margin:28px;margin-bottom:-12px;outline:none;position:relative;width:264px;z-index:1;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1)}.gb_mb.gb_ha{display:block}.gb_lb{-webkit-background-size:64px 64px;background-size:64px 64px;display:inline-block;margin:12px;vertical-align:top;height:64px;width:64px}.gb_ob{display:inline-block;padding:16px 16px 16px 0;vertical-align:top;white-space:normal}.gb_lb~.gb_ob{margin-right:88px}.gb_ob:first-child{padding-left:16px}.gb_pb{color:#262626;font:16px/24px Arial,sans-serif}.gb_qb{color:#737373;font:13px/18px Arial,sans-serif}#gb#gb .gb_mb .gb_rb{color:#427fed;text-decoration:none}#gb#gb .gb_mb .gb_rb:hover{text-decoration:underline}.gb_mb .gb_nb{background-position:-256px 0;cursor:pointer;opacity:.27;outline:none;position:absolute;right:4px;top:4px;height:12px;width:12px}.gb_mb .gb_nb:hover{opacity:.55}.gb_ea.gb_tb{padding:0}.gb_tb .gb_ba{padding:26px 26px 22px 13px;background:#ffffff}.gb_ub.gb_tb .gb_ba{background:#4d90fe}a.gb_vb{color:#666666!important;font-size:22px;height:9px;opacity:.8;position:absolute;right:14px;top:4px;text-decoration:none!important;width:9px}.gb_ub a.gb_vb{color:#c1d1f4!important}a.gb_vb:hover,a.gb_vb:active{opacity:1}.gb_wb{padding:0;width:258px;white-space:normal;display:table}.gb_ub .gb_wb{width:200px}.gb_xb{color:#333333;font-size:16px;line-height:20px;margin:0;margin-bottom:16px}.gb_ub .gb_xb{color:#ffffff}.gb_yb{color:#666666;line-height:17px;margin:0;margin-bottom:5px}.gb_ub .gb_yb{color:#ffffff}.gb_zb{position:absolute;background:transparent;top:-999px;z-index:-1;visibility:hidden;margin-top:1px;margin-left:1px}#gb .gb_tb{margin:0}.gb_tb .gb_a{background:#4d90fe;border-color:#3079ed;margin-top:15px}#gb .gb_tb a.gb_a.gb_a{color:#ffffff}.gb_tb .gb_a:hover{background:#357ae8;border-color:#2f5bb7}.gb_Ab .gb_fa .gb_u{border-bottom-color:#ffffff;display:block}.gb_Bb .gb_fa .gb_u{border-bottom-color:#4d90fe;display:block}.gb_Ab .gb_fa .gb_v,.gb_Bb .gb_fa .gb_v{display:block}.gb_Cb,.gb_Db{display:table-cell}.gb_Cb{vertical-align:middle}.gb_Db{padding-left:13px;width:100%}.gb_Eb{margin-bottom:32px;font-size:small}.gb_Eb .gb_Fb{margin-right:5px}.gb_Eb .gb_Hb{color:red}.gb_Ib{color:#ffffff;font-size:13px;font-weight:bold;height:25px;line-height:19px;padding-top:5px;padding-left:12px;position:relative;background-color:#4d90fe}.gb_Ib .gb_nb{color:#ffffff;cursor:default;font-size:22px;font-weight:normal;position:absolute;right:12px;top:5px}.gb_Ib .gb_rb,.gb_Ib .gb_Jb{color:#ffffff;display:inline-block;font-size:11px;margin-left:16px;padding:0 8px;white-space:nowrap}.gb_Kb{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.16)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));border-radius:2px;border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.1);cursor:default!important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff,endColorstr=#220000ff);text-decoration:none!important;-webkit-border-radius:2px}.gb_Kb:hover{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.14)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));border:1px solid rgba(0,0,0,0.2);box-shadow:0 1px 1px rgba(0,0,0,0.1);-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000,endColorstr=#22000000)}.gb_Kb:active{box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3)}.gb_sb{display:none}.gb_sb.gb_ha{display:block}.gb_f .gb_lb{background-image:none!important}.gb_f .gb_lb::before{display:inline-block;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0}.gb_f .gb_mb .gb_nb{position:absolute}.gb_f .gb_mb .gb_nb::before{left:-256px;top:0}.gb_f .gb_1b .gb_ga::before{left:-326px;top:-17px}.gb_f.gb_m .gb_1b .gb_ga::before{left:-256px;top:-103px}.gb_f.gb_n .gb_1b .gb_ga::before{left:0;top:-35px}.gb_M .gb_v{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.gb_M .gb_u{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-color:#fff;background:#fff}.gb_f .gb_Qc::before{clip:rect(-0 51px 16px 35px);left:-13px;top:22px}.gb_f .gb_2.gb_Rc{position:absolute}.gb_f .gb_Rc::before{clip:rect(17px 307px 33px 291px);left:-261px;top:5px}.gb_f .gb_o .gb_Qc::before{left:-5px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_f .gb_Qc::before{clip:rect(-0 102px 32px 70px)}.gb_f .gb_Rc::before{clip:rect(34px 614px 66px 582px)}}.gb_f .gb_2,.gb_f .gbii,.gb_f .gbip{background-image:none;overflow:hidden;position:relative}.gb_f .gb_2::before{content:url('//ssl.gstatic.com/gb/images/i1_71651352.png');position:absolute}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_f .gb_2::before{content:url('//ssl.gstatic.com/gb/images/i2_9ef0f6fa.png');-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0}}.gb_M a:focus{outline:1px dotted #fff!important}sentinel{}</style><script>(function () {
                var ctx = []
                        ;
                google.jsc.x(ctx);
            })();</script><div id="xjsd"></div><div id="xjsi" data-jiis="bp"><script>(function () {
                        function c(b) {
                            window.setTimeout(function () {
                                var a = document.createElement("script");
                                a.src = b;
                                document.getElementById("xjsd").appendChild(a)
                            }, 0)
                        }
                        google.dljp = function (b, a) {
                            google.xjsu = b;
                            c(a)
                        };
                        google.dlj = c;
                    })();
                    (function () {
                        window.google.xjsrm = [];
                    })();
                    if (google.y)
                        google.y.first = [];
                    if (!google.xjs) {
                        window._ = window._ || {};
                        window._._DumpException = function (e) {
                            throw e
                        };
                        if (google.timers && google.timers.load.t) {
                            google.timers.load.t.xjsls = new Date().getTime();
                        }
                        google.dljp('/xjs/_/js/sdch\x3dd/k\x3dxjs.s.en_US.I8qceIQGkxY.O/m\x3dsx,c,sb,cdos,cr,elog,jsa,r,hsm,j,p,d,csi/am\x3dpJII8TcMhMGkoJoQ6g/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oG1rRKw5Y1lyB8LtOdi_wYCJvu9hw', '/xjs/_/js/sdch\x3dd/k\x3dxjs.s.en_US.mYud2KEQwNg.O/m\x3dsx,c,sb,cdos,cr,elog,jsa,r,hsm,j,p,d,csi/am\x3dpJII8TcMhMGkoJoQ6g/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oGOA5n94pmqDNHZAuNumo5Tl2jD-A');
                        google.xjs = 1;
                    }
                    google.pmc = {"sx": {}, "c": {"mcr": 5}, "sb": {"agen": false, "cgen": true, "client": "hp", "dh": true, "ds": "", "exp": "msedr", "fl": true, "fpol": true, "host": "google.com", "jam": 1, "msgs": {"che": "Not listening. Something went wrong.", "ched": "Help", "cher": "Restart listening", "chh": "Say \"Ok Google\"", "cht": "Hotword detection is off.", "chtr": "Start listening for \"Ok Google\"", "chtt": "Listening for \"Ok Google\"", "cibl": "Clear Search", "dym": "Did you mean:", "lcky": "I\u0026#39;m Feeling Lucky", "lml": "Learn more", "oskt": "Input tools", "psrc": "This search was removed from your \u003Ca href=\"/history\"\u003EWeb History\u003C/a\u003E", "psrl": "Remove", "sbit": "Search by image", "srch": "Google Search", "srtt": "Search by voice"}, "ovr": {}, "pfof": true, "pq": "", "psy": "p", "refoq": true, "refpd": true, "rfs": [], "scd": 10, "sce": 4, "sre": true, "stok": "9t1RckT4y7d0DGGfey7dLB_mv_Q", "token": "7Ex9rySAKwfj7bm5V6PUpA"}, "abd": {"abd": false, "dabp": false, "deb": false, "der": false, "det": false, "psa": false, "sup": false}, "aldd": {}, "async": {}, "cdos": {"bih": 754, "biw": 790, "dpr": "1"}, "cr": {"eup": false, "qir": false, "rctj": true, "ref": false, "uff": false}, "ddls": {}, "elog": {}, "erh": {}, "foot": {"pf": true, "po": false, "qe": false}, "fpe": {"js": true}, "gf": {"pid": 196, "si": true}, "hv": {}, "idck": {}, "ifl": {"opts": [{"href": "/url?url=/doodles/jules-vernes-183rd-birthday", "id": "doodley", "msg": "I'm Feeling Doodley"}, {"href": "/url?url=http://www.googleartproject.com/collection/musee-dorsay-paris/artwork/dancers-edgar-degas/484111/\u0026sa=t\u0026usg=AFQjCNFvuPd-FAaZasCyDYcccCCOr4NcPw", "id": "artistic", "msg": "I'm Feeling Artistic"}, {"href": "/search?q=restaurants", "id": "hungry", "msg": "I'm Feeling Hungry"}, {"href": "/url?url=http://agoogleaday.com/%23date%3D2012-01-19\u0026sa=t\u0026usg=AFQjCNH4uOAvdBFnSR2cdquCknLiNgI-lg", "id": "puzzled", "msg": "I'm Feeling Puzzled"}, {"href": "/url?url=/trends/hottrends", "id": "trendy", "msg": "I'm Feeling Trendy"}, {"href": "/url?url=/earth/explore/showcase/hubble20th.html%23tab%3Dngc-6302", "id": "stellar", "msg": "I'm Feeling Stellar"}, {"href": "/url?url=/logos/lem/", "id": "playful", "msg": "I'm Feeling Playful"}, {"href": "/url?url=/culturalinstitute/entity/%252Fm%252F02yn3g?hl%3Den%26projectId%3Dworld-wonders", "id": "wonderful", "msg": "I'm Feeling Wonderful"}, {"href": "/url?url=/onetoday/", "id": "generous", "msg": "I'm Feeling Generous"}]}, "ipv6": {}, "jsa": {}, "jsaleg": {}, "lc": {}, "llc": {}, "lu": {}, "m": {"ab": {"on": true}, "ajax": {"gl": "us", "hl": "en", "q": ""}, "css": {"showTopNav": true}, "exp": {"lrb": true, "tnav": true}, "msgs": {"details": "Result details", "hPers": "Hide private results", "hPersD": "Currently hiding private results", "loading": "Still loading...", "mute": "Mute", "noPreview": "Preview not available", "sPers": "Show all results", "sPersD": "Currently showing private results", "unmute": "Unmute"}, "time": {"hUnit": 1500}}, "r": {}, "rk": {"bl": "Feedback", "db": "Reported", "di": "Thank you.", "dl": "Report another problem", "efe": true, "rb": "Wrong?", "ri": "Please report the problem.", "rl": "Cancel"}, "rkab": {}, "rmcl": {"bl": "Feedback", "db": "Reported", "di": "Thank you.", "dl": "Report another problem", "rb": "Wrong?", "ri": "Please report the problem.", "rl": "Cancel"}, "sf": {}, "spch": {"ae": "Please check your microphone.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003ELearn more\u003C/a\u003E", "hen": true, "hl": "en-US", "htt": "Listening for \"Ok Google\"", "im": "Click \u003Cb\u003EAllow\u003C/b\u003E to start voice search", "iw": "Waiting...", "lm": "Listening...", "lu": "%1$s voice search not available", "ne": "No Internet connection", "nt": "Didn't get that. \u003Cspan\u003ETry again\u003C/span\u003E", "nv": "Please check your microphone and audio levels.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003ELearn more\u003C/a\u003E", "pe": "Voice search has been turned off.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003EDetails\u003C/a\u003E", "rm": "Speak now"}, "st": {}, "vm": {"bv": 93990622, "d": "cGU", "tc": true, "te": true, "tk": true, "ts": true}, "hsm": {}, "j": {"ajrp": true, "cmt": true, "icmt": false, "lbtfdr": 10000, "lcuwl": true, "mcr": 5, "miml": true, "prwnj": true, "scmt": true, "tct": " \\u3000?", "tlh": true, "witu": false}, "p": {"ae": true, "avgTtfc": 2000, "brba": false, "dlen": 24, "dper": 3, "eae": true, "fbdc": 500, "fbdu": -1, "fbh": true, "fd": 1000000, "focus": true, "gpsj": true, "hiue": true, "hpt": 310, "iavgTtfc": 2000, "knrt": true, "maxCbt": 1500, "mds": "prc,sp,mbl_he,mbl_hs,mbl_re,mbl_rs,mbl_sv", "msg": {"dym": "Did you mean:", "gs": "Google Search", "kntt": "Use the up and down arrow keys to select each result. Press Enter to go to the selection.", "pcnt": "New Tab", "sif": "Search instead for", "srf": "Showing results for"}, "nprr": 1, "ohpt": false, "ophe": true, "pmt": 250, "pq": true, "rpt": 15, "sc": "psy-ab", "tdur": 50, "ufl": true}, "d": {}, "csi": {"acsi": true}, "TG8rFw": {"sd": "1"}, "hLaaFQ": {"ed": "Please enter a description.", "eu": "Please enter a valid URL."}, "oAaJvQ": {}, "q1cupA": {}, "s5PRGg": {}, "RFbX/Q": {}, "bnhGTQ": {}, "4RZUyg": {}, "/nNC3A": {}, "CjL7kw": {}, "ITl3wQ": {}, "l6UIRQ": {}, "2kDaKA": {}, "FmbnUA": {}, "c+PT4g": {}, "/1S6iw": {}, "GqeGtQ": {}, "+idT0Q": {}, "NpA8BQ": {}, "ADSBcg": {}, "BwDLOw": {}, "C+zmgA": {}, "A/Ucpg": {}, "63G1zA": {}, "cm4D8w": {}, "GfrcvQ": {}};
                    google.y.first.push(function () {
                        google.loadAll(['abd', 'async', 'erh', 'foot', 'fpe', 'hv', 'idck', 'ifl', 'ipv6', 'lc', 'lu', 'm', 'sf', 'spch', 'vm'].concat(google.xjsrm || []));
                        if (google.med) {
                            google.med('init');
                            google.initHistory();
                            google.med('history');
                        }
                    });
                    if (google.j && google.j.en && google.j.xi) {
                        window.setTimeout(google.j.xi, 0);
                    }
                </script></div><script>(function () {
                        var cfd = {a: false, d: false, i: false, m: true};
                        if (google.timers && google.timers.load.t) {
                            var e = function () {
                                google.tick("load", "ol");
                                google.kCSI.imc = b;
                                google.kCSI.imn = c;
                                google.kCSI.imp = d;
                                google.stt && (google.kCSI.stt = google.stt);
                                if (google.cbdl && google.timers.cbdl && google.timers.cbdl.t.end) {
                                    var a = google.cbdl();
                                    google.kCSI.cb_dur = a.cb_dur;
                                    google.kCSI.cb_iml = a.cb_iml
                                }
                                google.unblockCSI("load", "ol")
                            }, h = function (a) {
                                var g = google.time();
                                google.tick("load", "iml", g);
                                ++b;
                                a = a || window.event;
                                a = a.target || a.srcElement;
                                var f = h;
                                a.removeEventListener ? (a.removeEventListener("load", f, !1), a.removeEventListener("error", f, !1)) : (a.detachEvent("onload", f), a.detachEvent("onerror", f));
                                google.iml(a, g);
                                cfd.a && google.aft(a, g, !0)
                            }, c, b, d;
                            cfd.a && (google.tick("aft", "start"), google.afte = !1);
                            var k = document.getElementsByTagName("img");
                            c = k.length;
                            for (var l = b = 0, m; l < c; ++l)
                                if (m = k[l], cfd.i && "none" == m.style.display)
                                    ++b;
                                else {
                                    var n = "string" != typeof m.src || !m.src, p = n || m.complete;
                                    cfd.m && n && m.getAttribute("data-bsrc") && (p = !1);
                                    cfd.d && m.getAttribute("data-deferred") && (p = !1, m.removeAttribute("data-deferred"));
                                    p ? ++b : m.addEventListener ? (m.addEventListener("load", h, !1), m.addEventListener("error", h, !1)) : (m.attachEvent("onload", h), m.attachEvent("onerror", h))
                                }
                            d = c - b;
                            window.addEventListener ? window.addEventListener("load", e, !1) : window.attachEvent && window.attachEvent("onload", e);
                            google.timers.load.t.prt = google.time();
                            google.tick("load", "iml", google.timers.load.t.prt)
                        }
                        ;
                    })();</script></div></body></html>

