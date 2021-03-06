! function() {
    var e = function(e) {
            var t = {
                exports: {}
            };
            return e.call(t.exports, t, t.exports), t.exports
        },
        i = function() {
            function r(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(e, t, n) {
                return t && r(e.prototype, t), n && r(e, n), e
            }
        }(),
        d = function(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        },
        p = function(e) {
            if (Array.isArray(e)) {
                for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                return n
            }
            return Array.from(e)
        };
    e(function(e, t) {
        "use strict";

        function u(e, t, n) {
            if (e.length != t.length) throw Error("Payload body and response have different number of items");
            for (var r = 0; r < t.length; r++) {
                var a = 1,
                    o = t[r],
                    i = e[r];
                if (o.id != i.id) throw Error("Inconsistent IDs between server response and request payload");
                o.quantity && (a = o.quantity), y(i, a, n)
            }
        }

        function s(e, t) {
            for (var n = new Array(t), r = 0; r < t; r++) n[r] = {};
            var a = !0,
                o = !1,
                i = undefined;
            try {
                for (var s, d = decodeURI(e).split("&")[Symbol.iterator](); !(a = (s = d.next()).done); a = !0) {
                    var c = s.value.split("="),
                        u = c[0].match(/items\[(\d+)\]\[(\w+)\].*/);
                    if (u) {
                        var l = u[1],
                            y = u[2];
                        "quantity" === y ? n[l].quantity = c[1] : "id" === y && (n[l].id = c[1])
                    }
                }
            } catch (h) {
                o = !0, i = h
            } finally {
                try {
                    !a && d["return"] && d["return"]()
                } finally {
                    if (o) throw i
                }
            }
            return n
        }

        function l(e) {
            if (!e) return 1;
            try {
                return JSON.parse(e).quantity || 1
            } catch (a) {
                if (e instanceof FormData) {
                    if (e.has("quantity")) return e.get("quantity")
                } else
                    for (var t = e.split("&"), n = 0; n < t.length; n++) {
                        var r = t[n].split("=");
                        if ("quantity" === r[0]) return r[1]
                    }
            }
            return 1
        }

        function y(e, t, n) {
            var r = h({
                variantId: String(e.id),
                productId: e.product_id,
                currency: window.ShopifyAnalytics.meta.currency,
                quantity: String(t || 1),
                price: e.price / 100,
                name: e.title,
                sku: e.sku,
                brand: e.vendor,
                variant: e.variant_title,
                category: e.product_type
            }, c());
            window.ShopifyAnalytics.lib.track("Added Product", r, n);
            var a = h({
                referer: window.location.href
            }, r);
            window.ShopifyAnalytics.lib.track("monorail://trekkie_storefront_track_added_product/1.1", a)
        }

        function c() {
            var e = {};
            return window.ShopifyAnalytics.meta.page && (e = {
                pageType: window.ShopifyAnalytics.meta.page.pageType,
                resourceType: window.ShopifyAnalytics.meta.page.resourceType,
                resourceId: window.ShopifyAnalytics.meta.page.resourceId
            }), e
        }

        function h(e, t) {
            for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
            return e
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var n, r, a, f = function() {
            function a(e, t, n, r) {
                d(this, a), this.xhr = e, this.url = t, this.method = n, this.body = r
            }
            return i(a, null, [{
                key: "handleXhrOpen",
                value: function e() {}
            }]), i(a, [{
                key: "onReadyStateChange",
                value: function t() {
                    this.xhr.readyState === XMLHttpRequest.DONE && a.handleXhrDone({
                        method: this.method,
                        url: this.url,
                        body: this.body,
                        xhr: this.xhr
                    }), this.oldOnReadyStateChange && this.oldOnReadyStateChange()
                }
            }], [{
                key: "handleXhrDone",
                value: function r(i) {
                    try {
                        var e = document.createElement("a");
                        e.href = i.url;
                        var t = e.pathname ? e.pathname : i.url;
                        a.ADD_TO_CART_REGEX.test(t) && a._parsePayloadResponse(i, function(e) {
                            var t = Object.keys(e),
                                n = i.xhr.getResponseHeader("x-shopify-customer-event-id");
                            if (1 === t.length && "items" === t[0]) {
                                var r = e.items,
                                    a = void 0;
                                try {
                                    a = JSON.parse(i.body).items
                                } catch (o) {
                                    a = s(i.body, r.length)
                                }
                                u(r, a, n)
                            } else y(e, l(i.body), n)
                        })
                    } catch (n) {
                        console && console.warn && console.warn("[shop_events_listener] Error in handleXhrDone:  " + n.message)
                    }
                }
            }, {
                key: "parseBlobToJson",
                value: function o(e, t) {
                    var n = new FileReader;
                    n.addEventListener("loadend", function() {
                        return t(JSON.parse(String.fromCharCode.apply(String, p(new Uint8Array(n.result)))))
                    }), n.readAsArrayBuffer(e)
                }
            }, {
                key: "_parsePayloadResponse",
                value: function n(e, t) {
                    e.xhr.response instanceof Blob ? a.parseBlobToJson(e.xhr.response, t) : e.xhr.responseText && t(JSON.parse(e.xhr.responseText))
                }
            }]), a
        }();
        f.ADD_TO_CART_REGEX = /^(?:\/[a-zA-Z]+(?:\-[a-zA-Z]+)?)?\/cart\/add(?:\.js|\.json)?$/, t["default"] = f,
            function() {
                function r(e, t, n) {
                    window.jQuery && window.jQuery(e).bind ? window.jQuery(e).bind(t, n) : e.addEventListener ? e.addEventListener(t, n) : e.attachEvent && e.attachEvent("on" + t, n)
                }

                function a(e) {
                    if (!((e = e || window.event).defaultPrevented || e.isDefaultPrevented && e.isDefaultPrevented())) {
                        var t = e.target || e.srcElement;
                        if (t && (t.getAttribute("action") || t.getAttribute("href"))) try {
                            var n = d((t.id.options ? t.id.options[t.id.selectedIndex] : t.id).value);
                            n.quantity = String(t.quantity ? t.quantity.value : 1), window.ShopifyAnalytics.lib.track("Added Product", n, window.ShopifyAnalytics.meta.cart_event_id);
                            var r = h({
                                referer: window.location.href
                            }, n);
                            window.ShopifyAnalytics.lib.track("monorail://trekkie_storefront_track_added_product/1.1", r)
                        } catch (a) {
                            console && console.warn && console.warn("[shop_events_listener] Error in handleSubmitCartAdd: " + a.message)
                        }
                    }
                }

                function o(e) {
                    var t = (e = e || window.event).target || e.srcElement;
                    if (t && t.getAttribute("action")) try {
                        window.ShopifyAnalytics.lib.track("Added Payment", {
                            currency: window.ShopifyAnalytics.meta.currency,
                            total: window.ShopifyAnalytics.meta.checkout.payment_due / 100
                        }, window.ShopifyAnalytics.meta.checkout.payment_event_id)
                    } catch (n) {
                        console && console.warn && console.warn("[shop_events_listener] Error in handleSubmitToPaymentAdd: " + n.message)
                    }
                }

                function i(e) {
                    s((e = e || window.event).currentTarget)
                }

                function s(e) {
                    try {
                        var t = void 0;
                        if (!(t = e.id.options && e.id.options[e.id.selectedIndex] ? e.id.options[e.id.selectedIndex] : e.id)) return;
                        var n = t.value;
                        if (window.ShopifyAnalytics.meta.selectedVariantId && window.ShopifyAnalytics.meta.selectedVariantId == n) return;
                        var r = d(window.ShopifyAnalytics.meta.selectedVariantId = n);
                        window.ShopifyAnalytics.lib.track("Viewed Product Variant", r)
                    } catch (a) {
                        console && console.warn && console.warn("[shop_events_listener] Error in trackViewedProductVariant: " + a.message)
                    }
                }

                function d(e) {
                    var t = h(n(e), c());
                    return t.currency = window.ShopifyAnalytics.meta.currency, t
                }

                function n(e) {
                    var t = void 0,
                        n = window.ShopifyAnalytics.meta.product;
                    if (n) {
                        t = {
                            productId: n.id,
                            productGid: n.gid,
                            brand: n.vendor,
                            category: n.type
                        };
                        for (var r = 0; r < n.variants.length; r++)
                            if (n.variants[r].id == e) {
                                var a = n.variants[r];
                                t = h(t, {
                                    variantId: e,
                                    price: a.price / 100,
                                    name: a.name,
                                    sku: a.sku,
                                    variant: a.public_title
                                })
                            }
                    } else t = {
                        variantId: e
                    };
                    return t
                }
                r(window, "load", function() {
                    for (var e = 0; e < document.forms.length; e++) {
                        var t = document.forms[e].getAttribute("action");
                        t && 0 <= t.indexOf("/cart/add") && (r(document.forms[e], "submit", a), r(document.forms[e], "change", i), s(document.forms[e]));
                        var n = document.forms[e].elements.previous_step;
                        n && "payment_method" === n.value && r(document.forms[e], "submit", o)
                    }
                })
            }(), n = XMLHttpRequest, r = n.prototype.open, a = n.prototype.send, n.prototype.open = function(e, t) {
                this._url = t, this._method = e, f.handleXhrOpen(), r.apply(this, arguments)
            }, n.prototype.send = function(e) {
                var t = new f(this, this._url, this._method, e);
                this.addEventListener ? this.addEventListener("readystatechange", t.onReadyStateChange.bind(t), !1) : (t.oldOnReadyStateChange = this.onreadystatechange, this.onreadystatechange = t.onReadyStateChange), a.call(this, e)
            },
            function(e, t) {
                function s(e, n) {
                    var r = e.headers.get("x-shopify-customer-event-id");
                    e.clone().json().then(function(e) {
                        var t = n.items;
                        return u(e.items, t, r), e
                    })["catch"](c)
                }

                function d(e, t) {
                    var n = e.headers.get("x-shopify-customer-event-id"),
                        r = l(t);
                    e.clone().json().then(function(e) {
                        return y(e, r, n)
                    })["catch"](c)
                }

                function c(e) {
                    console && console.warn && console.warn("[shop_events_listener] Error in handleFetchRequest:  " + e.message)
                }
                "function" == typeof t && (e.fetch = function() {
                    var i = arguments;
                    return t.apply(this, Array.prototype.slice.call(arguments)).then(function(e) {
                        if (!e.ok) return e;
                        var t = document.createElement("a");
                        t.href = e.url;
                        var n = t.pathname ? t.pathname : e.url;
                        try {
                            if (f.ADD_TO_CART_REGEX.test(n)) {
                                try {
                                    var r = JSON.parse(i[1].body),
                                        a = Object.keys(r);
                                    if (1 === a.length && "items" === a[0]) return s(e, r), e
                                } catch (o) {}
                                d(e, i[1].body)
                            }
                        } catch (o) {
                            c(o)
                        }
                        return e
                    })
                })
            }(window, window.fetch)
    })
}("undefined" != typeof global ? global : "undefined" != typeof window && window);