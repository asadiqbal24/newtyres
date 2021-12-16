! function(a, b) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = b() : "function" == typeof define && define.amd ? define(b) : a.moment = b()
}(this, function() {
    "use strict";

    function a() {
        return zb.apply(null, arguments)
    }

    function b(a) {
        return a instanceof Array || "[object Array]" === Object.prototype.toString.call(a)
    }

    function c(a) {
        return null != a && "[object Object]" === Object.prototype.toString.call(a)
    }

    function d(a) {
        if (Object.getOwnPropertyNames) return 0 === Object.getOwnPropertyNames(a).length;
        var b;
        for (b in a)
            if (a.hasOwnProperty(b)) return !1;
        return !0
    }

    function e(a) {
        return void 0 === a
    }

    function f(a) {
        return "number" == typeof a || "[object Number]" === Object.prototype.toString.call(a)
    }

    function g(a) {
        return a instanceof Date || "[object Date]" === Object.prototype.toString.call(a)
    }

    function h(a, b) {
        var c, d = [];
        for (c = 0; c < a.length; ++c) d.push(b(a[c], c));
        return d
    }

    function i(a, b) {
        return Object.prototype.hasOwnProperty.call(a, b)
    }

    function j(a, b) {
        for (var c in b) i(b, c) && (a[c] = b[c]);
        return i(b, "toString") && (a.toString = b.toString), i(b, "valueOf") && (a.valueOf = b.valueOf), a
    }

    function k(a, b, c, d) {
        return Pa(a, b, c, d, !0).utc()
    }

    function l() {
        return {
            empty: !1,
            unusedTokens: [],
            unusedInput: [],
            overflow: -2,
            charsLeftOver: 0,
            nullInput: !1,
            invalidMonth: null,
            invalidFormat: !1,
            userInvalidated: !1,
            iso: !1,
            parsedDateParts: [],
            meridiem: null,
            rfc2822: !1,
            weekdayMismatch: !1
        }
    }

    function m(a) {
        return null == a._pf && (a._pf = l()), a._pf
    }

    function n(a) {
        if (null == a._isValid) {
            var b = m(a),
                c = Ab.call(b.parsedDateParts, function(a) {
                    return null != a
                }),
                d = !isNaN(a._d.getTime()) && b.overflow < 0 && !b.empty && !b.invalidMonth && !b.invalidWeekday && !b.weekdayMismatch && !b.nullInput && !b.invalidFormat && !b.userInvalidated && (!b.meridiem || b.meridiem && c);
            if (a._strict && (d = d && 0 === b.charsLeftOver && 0 === b.unusedTokens.length && void 0 === b.bigHour), null != Object.isFrozen && Object.isFrozen(a)) return d;
            a._isValid = d
        }
        return a._isValid
    }

    function o(a) {
        var b = k(NaN);
        return null != a ? j(m(b), a) : m(b).userInvalidated = !0, b
    }

    function p(a, b) {
        var c, d, f;
        if (e(b._isAMomentObject) || (a._isAMomentObject = b._isAMomentObject), e(b._i) || (a._i = b._i), e(b._f) || (a._f = b._f), e(b._l) || (a._l = b._l), e(b._strict) || (a._strict = b._strict), e(b._tzm) || (a._tzm = b._tzm), e(b._isUTC) || (a._isUTC = b._isUTC), e(b._offset) || (a._offset = b._offset), e(b._pf) || (a._pf = m(b)), e(b._locale) || (a._locale = b._locale), Bb.length > 0)
            for (c = 0; c < Bb.length; c++) e(f = b[d = Bb[c]]) || (a[d] = f);
        return a
    }

    function q(b) {
        p(this, b), this._d = new Date(null != b._d ? b._d.getTime() : NaN), this.isValid() || (this._d = new Date(NaN)), !1 === Cb && (Cb = !0, a.updateOffset(this), Cb = !1)
    }

    function r(a) {
        return a instanceof q || null != a && null != a._isAMomentObject
    }

    function s(a) {
        return a < 0 ? Math.ceil(a) || 0 : Math.floor(a)
    }

    function t(a) {
        var b = +a,
            c = 0;
        return 0 !== b && isFinite(b) && (c = s(b)), c
    }

    function u(a, b, c) {
        var d, e = Math.min(a.length, b.length),
            f = Math.abs(a.length - b.length),
            g = 0;
        for (d = 0; d < e; d++)(c && a[d] !== b[d] || !c && t(a[d]) !== t(b[d])) && g++;
        return g + f
    }

    function v(b) {
        !1 === a.suppressDeprecationWarnings && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + b)
    }

    function w(b, c) {
        var d = !0;
        return j(function() {
            if (null != a.deprecationHandler && a.deprecationHandler(null, b), d) {
                for (var e, f = [], g = 0; g < arguments.length; g++) {
                    if (e = "", "object" == typeof arguments[g]) {
                        e += "\n[" + g + "] ";
                        for (var h in arguments[0]) e += h + ": " + arguments[0][h] + ", ";
                        e = e.slice(0, -2)
                    } else e = arguments[g];
                    f.push(e)
                }
                v(b + "\nArguments: " + Array.prototype.slice.call(f).join("") + "\n" + (new Error).stack), d = !1
            }
            return c.apply(this, arguments)
        }, c)
    }

    function x(b, c) {
        null != a.deprecationHandler && a.deprecationHandler(b, c), Db[b] || (v(c), Db[b] = !0)
    }

    function y(a) {
        return a instanceof Function || "[object Function]" === Object.prototype.toString.call(a)
    }

    function z(a, b) {
        var d, e = j({}, a);
        for (d in b) i(b, d) && (c(a[d]) && c(b[d]) ? (e[d] = {}, j(e[d], a[d]), j(e[d], b[d])) : null != b[d] ? e[d] = b[d] : delete e[d]);
        for (d in a) i(a, d) && !i(b, d) && c(a[d]) && (e[d] = j({}, e[d]));
        return e
    }

    function A(a) {
        null != a && this.set(a)
    }

    function B(a, b) {
        var c = a.toLowerCase();
        Jb[c] = Jb[c + "s"] = Jb[b] = a
    }

    function C(a) {
        return "string" == typeof a ? Jb[a] || Jb[a.toLowerCase()] : void 0
    }

    function D(a) {
        var b, c, d = {};
        for (c in a) i(a, c) && (b = C(c)) && (d[b] = a[c]);
        return d
    }

    function E(a, b) {
        Kb[a] = b
    }

    function F(a) {
        var b = [];
        for (var c in a) b.push({
            unit: c,
            priority: Kb[c]
        });
        return b.sort(function(a, b) {
            return a.priority - b.priority
        }), b
    }

    function G(a, b, c) {
        var d = "" + Math.abs(a),
            e = b - d.length;
        return (a >= 0 ? c ? "+" : "" : "-") + Math.pow(10, Math.max(0, e)).toString().substr(1) + d
    }

    function H(a, b, c, d) {
        var e = d;
        "string" == typeof d && (e = function() {
            return this[d]()
        }), a && (Ob[a] = e), b && (Ob[b[0]] = function() {
            return G(e.apply(this, arguments), b[1], b[2])
        }), c && (Ob[c] = function() {
            return this.localeData().ordinal(e.apply(this, arguments), a)
        })
    }

    function I(a) {
        return a.match(/\[[\s\S]/) ? a.replace(/^\[|\]$/g, "") : a.replace(/\\/g, "")
    }

    function J(a) {
        var b, c, d = a.match(Lb);
        for (b = 0, c = d.length; b < c; b++) Ob[d[b]] ? d[b] = Ob[d[b]] : d[b] = I(d[b]);
        return function(b) {
            var e, f = "";
            for (e = 0; e < c; e++) f += y(d[e]) ? d[e].call(b, a) : d[e];
            return f
        }
    }

    function K(a, b) {
        return a.isValid() ? (b = L(b, a.localeData()), Nb[b] = Nb[b] || J(b), Nb[b](a)) : a.localeData().invalidDate()
    }

    function L(a, b) {
        var c = 5;
        for (Mb.lastIndex = 0; c >= 0 && Mb.test(a);) a = a.replace(Mb, function(a) {
            return b.longDateFormat(a) || a
        }), Mb.lastIndex = 0, c -= 1;
        return a
    }

    function M(a, b, c) {
        ec[a] = y(b) ? b : function(a, d) {
            return a && c ? c : b
        }
    }

    function N(a, b) {
        return i(ec, a) ? ec[a](b._strict, b._locale) : new RegExp(O(a))
    }

    function O(a) {
        return P(a.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function(a, b, c, d, e) {
            return b || c || d || e
        }))
    }

    function P(a) {
        return a.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
    }

    function Q(a, b) {
        var c, d = b;
        for ("string" == typeof a && (a = [a]), f(b) && (d = function(a, c) {
                c[b] = t(a)
            }), c = 0; c < a.length; c++) fc[a[c]] = d
    }

    function R(a, b) {
        Q(a, function(a, c, d, e) {
            d._w = d._w || {}, b(a, d._w, d, e)
        })
    }

    function S(a, b, c) {
        null != b && i(fc, a) && fc[a](b, c._a, c, a)
    }

    function T(a) {
        return U(a) ? 366 : 365
    }

    function U(a) {
        return a % 4 == 0 && a % 100 != 0 || a % 400 == 0
    }

    function V(b, c) {
        return function(d) {
            return null != d ? (X(this, b, d), a.updateOffset(this, c), this) : W(this, b)
        }
    }

    function W(a, b) {
        return a.isValid() ? a._d["get" + (a._isUTC ? "UTC" : "") + b]() : NaN
    }

    function X(a, b, c) {
        a.isValid() && !isNaN(c) && ("FullYear" === b && U(a.year()) && 1 === a.month() && 29 === a.date() ? a._d["set" + (a._isUTC ? "UTC" : "") + b](c, a.month(), Z(c, a.month())) : a._d["set" + (a._isUTC ? "UTC" : "") + b](c))
    }

    function Y(a, b) {
        return (a % b + b) % b
    }

    function Z(a, b) {
        if (isNaN(a) || isNaN(b)) return NaN;
        var c = Y(b, 12);
        return a += (b - c) / 12, 1 === c ? U(a) ? 29 : 28 : 31 - c % 7 % 2
    }

    function $(a, b, c) {
        var d, e, f, g = a.toLocaleLowerCase();
        if (!this._monthsParse)
            for (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = [], d = 0; d < 12; ++d) f = k([2e3, d]), this._shortMonthsParse[d] = this.monthsShort(f, "").toLocaleLowerCase(), this._longMonthsParse[d] = this.months(f, "").toLocaleLowerCase();
        return c ? "MMM" === b ? -1 !== (e = pc.call(this._shortMonthsParse, g)) ? e : null : -1 !== (e = pc.call(this._longMonthsParse, g)) ? e : null : "MMM" === b ? -1 !== (e = pc.call(this._shortMonthsParse, g)) ? e : -1 !== (e = pc.call(this._longMonthsParse, g)) ? e : null : -1 !== (e = pc.call(this._longMonthsParse, g)) ? e : -1 !== (e = pc.call(this._shortMonthsParse, g)) ? e : null
    }

    function _(a, b) {
        var c;
        if (!a.isValid()) return a;
        if ("string" == typeof b)
            if (/^\d+$/.test(b)) b = t(b);
            else if (b = a.localeData().monthsParse(b), !f(b)) return a;
        return c = Math.min(a.date(), Z(a.year(), b)), a._d["set" + (a._isUTC ? "UTC" : "") + "Month"](b, c), a
    }

    function aa(b) {
        return null != b ? (_(this, b), a.updateOffset(this, !0), this) : W(this, "Month")
    }

    function ba() {
        function a(a, b) {
            return b.length - a.length
        }
        var b, c, d = [],
            e = [],
            f = [];
        for (b = 0; b < 12; b++) c = k([2e3, b]), d.push(this.monthsShort(c, "")), e.push(this.months(c, "")), f.push(this.months(c, "")), f.push(this.monthsShort(c, ""));
        for (d.sort(a), e.sort(a), f.sort(a), b = 0; b < 12; b++) d[b] = P(d[b]), e[b] = P(e[b]);
        for (b = 0; b < 24; b++) f[b] = P(f[b]);
        this._monthsRegex = new RegExp("^(" + f.join("|") + ")", "i"), this._monthsShortRegex = this._monthsRegex, this._monthsStrictRegex = new RegExp("^(" + e.join("|") + ")", "i"), this._monthsShortStrictRegex = new RegExp("^(" + d.join("|") + ")", "i")
    }

    function ca(a, b, c, d, e, f, g) {
        var h = new Date(a, b, c, d, e, f, g);
        return a < 100 && a >= 0 && isFinite(h.getFullYear()) && h.setFullYear(a), h
    }

    function da(a) {
        var b = new Date(Date.UTC.apply(null, arguments));
        return a < 100 && a >= 0 && isFinite(b.getUTCFullYear()) && b.setUTCFullYear(a), b
    }

    function ea(a, b, c) {
        var d = 7 + b - c;
        return -(7 + da(a, 0, d).getUTCDay() - b) % 7 + d - 1
    }

    function fa(a, b, c, d, e) {
        var f, g, h = 1 + 7 * (b - 1) + (7 + c - d) % 7 + ea(a, d, e);
        return h <= 0 ? g = T(f = a - 1) + h : h > T(a) ? (f = a + 1, g = h - T(a)) : (f = a, g = h), {
            year: f,
            dayOfYear: g
        }
    }

    function ga(a, b, c) {
        var d, e, f = ea(a.year(), b, c),
            g = Math.floor((a.dayOfYear() - f - 1) / 7) + 1;
        return g < 1 ? d = g + ha(e = a.year() - 1, b, c) : g > ha(a.year(), b, c) ? (d = g - ha(a.year(), b, c), e = a.year() + 1) : (e = a.year(), d = g), {
            week: d,
            year: e
        }
    }

    function ha(a, b, c) {
        var d = ea(a, b, c),
            e = ea(a + 1, b, c);
        return (T(a) - d + e) / 7
    }

    function ia(a, b) {
        return "string" != typeof a ? a : isNaN(a) ? "number" == typeof(a = b.weekdaysParse(a)) ? a : null : parseInt(a, 10)
    }

    function ja(a, b) {
        return "string" == typeof a ? b.weekdaysParse(a) % 7 || 7 : isNaN(a) ? null : a
    }

    function ka(a, b, c) {
        var d, e, f, g = a.toLocaleLowerCase();
        if (!this._weekdaysParse)
            for (this._weekdaysParse = [], this._shortWeekdaysParse = [], this._minWeekdaysParse = [], d = 0; d < 7; ++d) f = k([2e3, 1]).day(d), this._minWeekdaysParse[d] = this.weekdaysMin(f, "").toLocaleLowerCase(), this._shortWeekdaysParse[d] = this.weekdaysShort(f, "").toLocaleLowerCase(), this._weekdaysParse[d] = this.weekdays(f, "").toLocaleLowerCase();
        return c ? "dddd" === b ? -1 !== (e = pc.call(this._weekdaysParse, g)) ? e : null : "ddd" === b ? -1 !== (e = pc.call(this._shortWeekdaysParse, g)) ? e : null : -1 !== (e = pc.call(this._minWeekdaysParse, g)) ? e : null : "dddd" === b ? -1 !== (e = pc.call(this._weekdaysParse, g)) ? e : -1 !== (e = pc.call(this._shortWeekdaysParse, g)) ? e : -1 !== (e = pc.call(this._minWeekdaysParse, g)) ? e : null : "ddd" === b ? -1 !== (e = pc.call(this._shortWeekdaysParse, g)) ? e : -1 !== (e = pc.call(this._weekdaysParse, g)) ? e : -1 !== (e = pc.call(this._minWeekdaysParse, g)) ? e : null : -1 !== (e = pc.call(this._minWeekdaysParse, g)) ? e : -1 !== (e = pc.call(this._weekdaysParse, g)) ? e : -1 !== (e = pc.call(this._shortWeekdaysParse, g)) ? e : null
    }

    function la() {
        function a(a, b) {
            return b.length - a.length
        }
        var b, c, d, e, f, g = [],
            h = [],
            i = [],
            j = [];
        for (b = 0; b < 7; b++) c = k([2e3, 1]).day(b), d = this.weekdaysMin(c, ""), e = this.weekdaysShort(c, ""), f = this.weekdays(c, ""), g.push(d), h.push(e), i.push(f), j.push(d), j.push(e), j.push(f);
        for (g.sort(a), h.sort(a), i.sort(a), j.sort(a), b = 0; b < 7; b++) h[b] = P(h[b]), i[b] = P(i[b]), j[b] = P(j[b]);
        this._weekdaysRegex = new RegExp("^(" + j.join("|") + ")", "i"), this._weekdaysShortRegex = this._weekdaysRegex, this._weekdaysMinRegex = this._weekdaysRegex, this._weekdaysStrictRegex = new RegExp("^(" + i.join("|") + ")", "i"), this._weekdaysShortStrictRegex = new RegExp("^(" + h.join("|") + ")", "i"), this._weekdaysMinStrictRegex = new RegExp("^(" + g.join("|") + ")", "i")
    }

    function ma() {
        return this.hours() % 12 || 12
    }

    function na(a, b) {
        H(a, 0, 0, function() {
            return this.localeData().meridiem(this.hours(), this.minutes(), b)
        })
    }

    function oa(a, b) {
        return b._meridiemParse
    }

    function pa(a) {
        return a ? a.toLowerCase().replace("_", "-") : a
    }

    function qa(a) {
        for (var b, c, d, e, f = 0; f < a.length;) {
            for (b = (e = pa(a[f]).split("-")).length, c = (c = pa(a[f + 1])) ? c.split("-") : null; b > 0;) {
                if (d = ra(e.slice(0, b).join("-"))) return d;
                if (c && c.length >= b && u(e, c, !0) >= b - 1) break;
                b--
            }
            f++
        }
        return null
    }

    function ra(a) {
        var b = null;
        if (!Hc[a] && "undefined" != typeof module && module && module.exports) try {
            b = Dc._abbr, require("./locale/" + a), sa(b)
        } catch (a) {}
        return Hc[a]
    }

    function sa(a, b) {
        var c;
        return a && (c = e(b) ? ua(a) : ta(a, b)) && (Dc = c), Dc._abbr
    }

    function ta(a, b) {
        if (null !== b) {
            var c = Gc;
            if (b.abbr = a, null != Hc[a]) x("defineLocaleOverride", "use moment.updateLocale(localeName, config) to change an existing locale. moment.defineLocale(localeName, config) should only be used for creating a new locale See http://momentjs.com/guides/#/warnings/define-locale/ for more info."), c = Hc[a]._config;
            else if (null != b.parentLocale) {
                if (null == Hc[b.parentLocale]) return Ic[b.parentLocale] || (Ic[b.parentLocale] = []), Ic[b.parentLocale].push({
                    name: a,
                    config: b
                }), null;
                c = Hc[b.parentLocale]._config
            }
            return Hc[a] = new A(z(c, b)), Ic[a] && Ic[a].forEach(function(a) {
                ta(a.name, a.config)
            }), sa(a), Hc[a]
        }
        return delete Hc[a], null
    }

    function ua(a) {
        var c;
        if (a && a._locale && a._locale._abbr && (a = a._locale._abbr), !a) return Dc;
        if (!b(a)) {
            if (c = ra(a)) return c;
            a = [a]
        }
        return qa(a)
    }

    function va(a) {
        var b, c = a._a;
        return c && -2 === m(a).overflow && (b = c[hc] < 0 || c[hc] > 11 ? hc : c[ic] < 1 || c[ic] > Z(c[gc], c[hc]) ? ic : c[jc] < 0 || c[jc] > 24 || 24 === c[jc] && (0 !== c[kc] || 0 !== c[lc] || 0 !== c[mc]) ? jc : c[kc] < 0 || c[kc] > 59 ? kc : c[lc] < 0 || c[lc] > 59 ? lc : c[mc] < 0 || c[mc] > 999 ? mc : -1, m(a)._overflowDayOfYear && (b < gc || b > ic) && (b = ic), m(a)._overflowWeeks && -1 === b && (b = nc), m(a)._overflowWeekday && -1 === b && (b = oc), m(a).overflow = b), a
    }

    function wa(a, b, c) {
        return null != a ? a : null != b ? b : c
    }

    function xa(b) {
        var c = new Date(a.now());
        return b._useUTC ? [c.getUTCFullYear(), c.getUTCMonth(), c.getUTCDate()] : [c.getFullYear(), c.getMonth(), c.getDate()]
    }

    function ya(a) {
        var b, c, d, e, f = [];
        if (!a._d) {
            for (d = xa(a), a._w && null == a._a[ic] && null == a._a[hc] && za(a), null != a._dayOfYear && (e = wa(a._a[gc], d[gc]), (a._dayOfYear > T(e) || 0 === a._dayOfYear) && (m(a)._overflowDayOfYear = !0), c = da(e, 0, a._dayOfYear), a._a[hc] = c.getUTCMonth(), a._a[ic] = c.getUTCDate()), b = 0; b < 3 && null == a._a[b]; ++b) a._a[b] = f[b] = d[b];
            for (; b < 7; b++) a._a[b] = f[b] = null == a._a[b] ? 2 === b ? 1 : 0 : a._a[b];
            24 === a._a[jc] && 0 === a._a[kc] && 0 === a._a[lc] && 0 === a._a[mc] && (a._nextDay = !0, a._a[jc] = 0), a._d = (a._useUTC ? da : ca).apply(null, f), null != a._tzm && a._d.setUTCMinutes(a._d.getUTCMinutes() - a._tzm), a._nextDay && (a._a[jc] = 24), a._w && void 0 !== a._w.d && a._w.d !== a._d.getDay() && (m(a).weekdayMismatch = !0)
        }
    }

    function za(a) {
        var b, c, d, e, f, g, h, i;
        if (null != (b = a._w).GG || null != b.W || null != b.E) f = 1, g = 4, c = wa(b.GG, a._a[gc], ga(Qa(), 1, 4).year), d = wa(b.W, 1), ((e = wa(b.E, 1)) < 1 || e > 7) && (i = !0);
        else {
            f = a._locale._week.dow, g = a._locale._week.doy;
            var j = ga(Qa(), f, g);
            c = wa(b.gg, a._a[gc], j.year), d = wa(b.w, j.week), null != b.d ? ((e = b.d) < 0 || e > 6) && (i = !0) : null != b.e ? (e = b.e + f, (b.e < 0 || b.e > 6) && (i = !0)) : e = f
        }
        d < 1 || d > ha(c, f, g) ? m(a)._overflowWeeks = !0 : null != i ? m(a)._overflowWeekday = !0 : (h = fa(c, d, e, f, g), a._a[gc] = h.year, a._dayOfYear = h.dayOfYear)
    }

    function Aa(a) {
        var b, c, d, e, f, g, h = a._i,
            i = Jc.exec(h) || Kc.exec(h);
        if (i) {
            for (m(a).iso = !0, b = 0, c = Mc.length; b < c; b++)
                if (Mc[b][1].exec(i[1])) {
                    e = Mc[b][0], d = !1 !== Mc[b][2];
                    break
                }
            if (null == e) return void(a._isValid = !1);
            if (i[3]) {
                for (b = 0, c = Nc.length; b < c; b++)
                    if (Nc[b][1].exec(i[3])) {
                        f = (i[2] || " ") + Nc[b][0];
                        break
                    }
                if (null == f) return void(a._isValid = !1)
            }
            if (!d && null != f) return void(a._isValid = !1);
            if (i[4]) {
                if (!Lc.exec(i[4])) return void(a._isValid = !1);
                g = "Z"
            }
            a._f = e + (f || "") + (g || ""), Ia(a)
        } else a._isValid = !1
    }

    function Ba(a, b, c, d, e, f) {
        var g = [Ca(a), tc.indexOf(b), parseInt(c, 10), parseInt(d, 10), parseInt(e, 10)];
        return f && g.push(parseInt(f, 10)), g
    }

    function Ca(a) {
        var b = parseInt(a, 10);
        return b <= 49 ? 2e3 + b : b <= 999 ? 1900 + b : b
    }

    function Da(a) {
        return a.replace(/\([^)]*\)|[\n\t]/g, " ").replace(/(\s\s+)/g, " ").trim()
    }

    function Ea(a, b, c) {
        return !a || yc.indexOf(a) === new Date(b[0], b[1], b[2]).getDay() || (m(c).weekdayMismatch = !0, c._isValid = !1, !1)
    }

    function Fa(a, b, c) {
        if (a) return Qc[a];
        if (b) return 0;
        var d = parseInt(c, 10),
            e = d % 100;
        return (d - e) / 100 * 60 + e
    }

    function Ga(a) {
        var b = Pc.exec(Da(a._i));
        if (b) {
            var c = Ba(b[4], b[3], b[2], b[5], b[6], b[7]);
            if (!Ea(b[1], c, a)) return;
            a._a = c, a._tzm = Fa(b[8], b[9], b[10]), a._d = da.apply(null, a._a), a._d.setUTCMinutes(a._d.getUTCMinutes() - a._tzm), m(a).rfc2822 = !0
        } else a._isValid = !1
    }

    function Ha(b) {
        var c = Oc.exec(b._i);
        null === c ? (Aa(b), !1 === b._isValid && (delete b._isValid, Ga(b), !1 === b._isValid && (delete b._isValid, a.createFromInputFallback(b)))) : b._d = new Date(+c[1])
    }

    function Ia(b) {
        if (b._f !== a.ISO_8601)
            if (b._f !== a.RFC_2822) {
                b._a = [], m(b).empty = !0;
                var c, d, e, f, g, h = "" + b._i,
                    i = h.length,
                    j = 0;
                for (e = L(b._f, b._locale).match(Lb) || [], c = 0; c < e.length; c++) f = e[c], (d = (h.match(N(f, b)) || [])[0]) && ((g = h.substr(0, h.indexOf(d))).length > 0 && m(b).unusedInput.push(g), h = h.slice(h.indexOf(d) + d.length), j += d.length), Ob[f] ? (d ? m(b).empty = !1 : m(b).unusedTokens.push(f), S(f, d, b)) : b._strict && !d && m(b).unusedTokens.push(f);
                m(b).charsLeftOver = i - j, h.length > 0 && m(b).unusedInput.push(h), b._a[jc] <= 12 && !0 === m(b).bigHour && b._a[jc] > 0 && (m(b).bigHour = void 0), m(b).parsedDateParts = b._a.slice(0), m(b).meridiem = b._meridiem, b._a[jc] = Ja(b._locale, b._a[jc], b._meridiem), ya(b), va(b)
            } else Ga(b);
        else Aa(b)
    }

    function Ja(a, b, c) {
        var d;
        return null == c ? b : null != a.meridiemHour ? a.meridiemHour(b, c) : null != a.isPM ? ((d = a.isPM(c)) && b < 12 && (b += 12), d || 12 !== b || (b = 0), b) : b
    }

    function Ka(a) {
        var b, c, d, e, f;
        if (0 === a._f.length) return m(a).invalidFormat = !0, void(a._d = new Date(NaN));
        for (e = 0; e < a._f.length; e++) f = 0, b = p({}, a), null != a._useUTC && (b._useUTC = a._useUTC), b._f = a._f[e], Ia(b), n(b) && (f += m(b).charsLeftOver, f += 10 * m(b).unusedTokens.length, m(b).score = f, (null == d || f < d) && (d = f, c = b));
        j(a, c || b)
    }

    function La(a) {
        if (!a._d) {
            var b = D(a._i);
            a._a = h([b.year, b.month, b.day || b.date, b.hour, b.minute, b.second, b.millisecond], function(a) {
                return a && parseInt(a, 10)
            }), ya(a)
        }
    }

    function Ma(a) {
        var b = new q(va(Na(a)));
        return b._nextDay && (b.add(1, "d"), b._nextDay = void 0), b
    }

    function Na(a) {
        var c = a._i,
            d = a._f;
        return a._locale = a._locale || ua(a._l), null === c || void 0 === d && "" === c ? o({
            nullInput: !0
        }) : ("string" == typeof c && (a._i = c = a._locale.preparse(c)), r(c) ? new q(va(c)) : (g(c) ? a._d = c : b(d) ? Ka(a) : d ? Ia(a) : Oa(a), n(a) || (a._d = null), a))
    }

    function Oa(d) {
        var i = d._i;
        e(i) ? d._d = new Date(a.now()) : g(i) ? d._d = new Date(i.valueOf()) : "string" == typeof i ? Ha(d) : b(i) ? (d._a = h(i.slice(0), function(a) {
            return parseInt(a, 10)
        }), ya(d)) : c(i) ? La(d) : f(i) ? d._d = new Date(i) : a.createFromInputFallback(d)
    }

    function Pa(a, e, f, g, h) {
        var i = {};
        return !0 !== f && !1 !== f || (g = f, f = void 0), (c(a) && d(a) || b(a) && 0 === a.length) && (a = void 0), i._isAMomentObject = !0, i._useUTC = i._isUTC = h, i._l = f, i._i = a, i._f = e, i._strict = g, Ma(i)
    }

    function Qa(a, b, c, d) {
        return Pa(a, b, c, d, !1)
    }

    function Ra(a, c) {
        var d, e;
        if (1 === c.length && b(c[0]) && (c = c[0]), !c.length) return Qa();
        for (d = c[0], e = 1; e < c.length; ++e) c[e].isValid() && !c[e][a](d) || (d = c[e]);
        return d
    }

    function Sa(a) {
        for (var b in a)
            if (-1 === pc.call(Tc, b) || null != a[b] && isNaN(a[b])) return !1;
        for (var c = !1, d = 0; d < Tc.length; ++d)
            if (a[Tc[d]]) {
                if (c) return !1;
                parseFloat(a[Tc[d]]) !== t(a[Tc[d]]) && (c = !0)
            }
        return !0
    }

    function Ta(a) {
        var b = D(a),
            c = b.year || 0,
            d = b.quarter || 0,
            e = b.month || 0,
            f = b.week || 0,
            g = b.day || 0,
            h = b.hour || 0,
            i = b.minute || 0,
            j = b.second || 0,
            k = b.millisecond || 0;
        this._isValid = Sa(b), this._milliseconds = +k + 1e3 * j + 6e4 * i + 1e3 * h * 60 * 60, this._days = +g + 7 * f, this._months = +e + 3 * d + 12 * c, this._data = {}, this._locale = ua(), this._bubble()
    }

    function Ua(a) {
        return a instanceof Ta
    }

    function Va(a) {
        return a < 0 ? -1 * Math.round(-1 * a) : Math.round(a)
    }

    function Wa(a, b) {
        H(a, 0, 0, function() {
            var a = this.utcOffset(),
                c = "+";
            return a < 0 && (a = -a, c = "-"), c + G(~~(a / 60), 2) + b + G(~~a % 60, 2)
        })
    }

    function Xa(a, b) {
        var c = (b || "").match(a);
        if (null === c) return null;
        var d = ((c[c.length - 1] || []) + "").match(Uc) || ["-", 0, 0],
            e = 60 * d[1] + t(d[2]);
        return 0 === e ? 0 : "+" === d[0] ? e : -e
    }

    function Ya(b, c) {
        var d, e;
        return c._isUTC ? (d = c.clone(), e = (r(b) || g(b) ? b.valueOf() : Qa(b).valueOf()) - d.valueOf(), d._d.setTime(d._d.valueOf() + e), a.updateOffset(d, !1), d) : Qa(b).local()
    }

    function Za(a) {
        return 15 * -Math.round(a._d.getTimezoneOffset() / 15)
    }

    function $a() {
        return !!this.isValid() && this._isUTC && 0 === this._offset
    }

    function _a(a, b) {
        var c, d, e, g = a,
            h = null;
        return Ua(a) ? g = {
            ms: a._milliseconds,
            d: a._days,
            M: a._months
        } : f(a) ? (g = {}, b ? g[b] = a : g.milliseconds = a) : (h = Vc.exec(a)) ? (c = "-" === h[1] ? -1 : 1, g = {
            y: 0,
            d: t(h[ic]) * c,
            h: t(h[jc]) * c,
            m: t(h[kc]) * c,
            s: t(h[lc]) * c,
            ms: t(Va(1e3 * h[mc])) * c
        }) : (h = Wc.exec(a)) ? (c = "-" === h[1] ? -1 : (h[1], 1), g = {
            y: ab(h[2], c),
            M: ab(h[3], c),
            w: ab(h[4], c),
            d: ab(h[5], c),
            h: ab(h[6], c),
            m: ab(h[7], c),
            s: ab(h[8], c)
        }) : null == g ? g = {} : "object" == typeof g && ("from" in g || "to" in g) && (e = cb(Qa(g.from), Qa(g.to)), (g = {}).ms = e.milliseconds, g.M = e.months), d = new Ta(g), Ua(a) && i(a, "_locale") && (d._locale = a._locale), d
    }

    function ab(a, b) {
        var c = a && parseFloat(a.replace(",", "."));
        return (isNaN(c) ? 0 : c) * b
    }

    function bb(a, b) {
        var c = {
            milliseconds: 0,
            months: 0
        };
        return c.months = b.month() - a.month() + 12 * (b.year() - a.year()), a.clone().add(c.months, "M").isAfter(b) && --c.months, c.milliseconds = +b - +a.clone().add(c.months, "M"), c
    }

    function cb(a, b) {
        var c;
        return a.isValid() && b.isValid() ? (b = Ya(b, a), a.isBefore(b) ? c = bb(a, b) : ((c = bb(b, a)).milliseconds = -c.milliseconds, c.months = -c.months), c) : {
            milliseconds: 0,
            months: 0
        }
    }

    function db(a, b) {
        return function(c, d) {
            var e, f;
            return null === d || isNaN(+d) || (x(b, "moment()." + b + "(period, number) is deprecated. Please use moment()." + b + "(number, period). See http://momentjs.com/guides/#/warnings/add-inverted-param/ for more info."), f = c, c = d, d = f), c = "string" == typeof c ? +c : c, e = _a(c, d), eb(this, e, a), this
        }
    }

    function eb(b, c, d, e) {
        var f = c._milliseconds,
            g = Va(c._days),
            h = Va(c._months);
        b.isValid() && (e = null == e || e, h && _(b, W(b, "Month") + h * d), g && X(b, "Date", W(b, "Date") + g * d), f && b._d.setTime(b._d.valueOf() + f * d), e && a.updateOffset(b, g || h))
    }

    function fb(a, b) {
        var c, d = 12 * (b.year() - a.year()) + (b.month() - a.month()),
            e = a.clone().add(d, "months");
        return c = b - e < 0 ? (b - e) / (e - a.clone().add(d - 1, "months")) : (b - e) / (a.clone().add(d + 1, "months") - e), -(d + c) || 0
    }

    function gb(a) {
        var b;
        return void 0 === a ? this._locale._abbr : (null != (b = ua(a)) && (this._locale = b), this)
    }

    function hb() {
        return this._locale
    }

    function ib(a, b) {
        H(0, [a, a.length], 0, b)
    }

    function jb(a, b, c, d, e) {
        var f;
        return null == a ? ga(this, d, e).year : (f = ha(a, d, e), b > f && (b = f), kb.call(this, a, b, c, d, e))
    }

    function kb(a, b, c, d, e) {
        var f = fa(a, b, c, d, e),
            g = da(f.year, 0, f.dayOfYear);
        return this.year(g.getUTCFullYear()), this.month(g.getUTCMonth()), this.date(g.getUTCDate()), this
    }

    function lb(a) {
        return a
    }

    function mb(a, b, c, d) {
        var e = ua(),
            f = k().set(d, b);
        return e[c](f, a)
    }

    function nb(a, b, c) {
        if (f(a) && (b = a, a = void 0), a = a || "", null != b) return mb(a, b, c, "month");
        var d, e = [];
        for (d = 0; d < 12; d++) e[d] = mb(a, d, c, "month");
        return e
    }

    function ob(a, b, c, d) {
        "boolean" == typeof a ? (f(b) && (c = b, b = void 0), b = b || "") : (c = b = a, a = !1, f(b) && (c = b, b = void 0), b = b || "");
        var e = ua(),
            g = a ? e._week.dow : 0;
        if (null != c) return mb(b, (c + g) % 7, d, "day");
        var h, i = [];
        for (h = 0; h < 7; h++) i[h] = mb(b, (h + g) % 7, d, "day");
        return i
    }

    function pb(a, b, c, d) {
        var e = _a(b, c);
        return a._milliseconds += d * e._milliseconds, a._days += d * e._days, a._months += d * e._months, a._bubble()
    }

    function qb(a) {
        return a < 0 ? Math.floor(a) : Math.ceil(a)
    }

    function rb(a) {
        return 4800 * a / 146097
    }

    function sb(a) {
        return 146097 * a / 4800
    }

    function tb(a) {
        return function() {
            return this.as(a)
        }
    }

    function ub(a) {
        return function() {
            return this.isValid() ? this._data[a] : NaN
        }
    }

    function vb(a, b, c, d, e) {
        return e.relativeTime(b || 1, !!c, a, d)
    }

    function wb(a, b, c) {
        var d = _a(a).abs(),
            e = vd(d.as("s")),
            f = vd(d.as("m")),
            g = vd(d.as("h")),
            h = vd(d.as("d")),
            i = vd(d.as("M")),
            j = vd(d.as("y")),
            k = e <= wd.ss && ["s", e] || e < wd.s && ["ss", e] || f <= 1 && ["m"] || f < wd.m && ["mm", f] || g <= 1 && ["h"] || g < wd.h && ["hh", g] || h <= 1 && ["d"] || h < wd.d && ["dd", h] || i <= 1 && ["M"] || i < wd.M && ["MM", i] || j <= 1 && ["y"] || ["yy", j];
        return k[2] = b, k[3] = +a > 0, k[4] = c, vb.apply(null, k)
    }

    function xb(a) {
        return (a > 0) - (a < 0) || +a
    }

    function yb() {
        if (!this.isValid()) return this.localeData().invalidDate();
        var a, b, c, d = xd(this._milliseconds) / 1e3,
            e = xd(this._days),
            f = xd(this._months);
        b = s((a = s(d / 60)) / 60), d %= 60, a %= 60;
        var g = c = s(f / 12),
            h = f %= 12,
            i = e,
            j = b,
            k = a,
            l = d ? d.toFixed(3).replace(/\.?0+$/, "") : "",
            m = this.asSeconds();
        if (!m) return "P0D";
        var n = m < 0 ? "-" : "",
            o = xb(this._months) !== xb(m) ? "-" : "",
            p = xb(this._days) !== xb(m) ? "-" : "",
            q = xb(this._milliseconds) !== xb(m) ? "-" : "";
        return n + "P" + (g ? o + g + "Y" : "") + (h ? o + h + "M" : "") + (i ? p + i + "D" : "") + (j || k || l ? "T" : "") + (j ? q + j + "H" : "") + (k ? q + k + "M" : "") + (l ? q + l + "S" : "")
    }
    var zb, Ab;
    Ab = Array.prototype.some ? Array.prototype.some : function(a) {
        for (var b = Object(this), c = b.length >>> 0, d = 0; d < c; d++)
            if (d in b && a.call(this, b[d], d, b)) return !0;
        return !1
    };
    var Bb = a.momentProperties = [],
        Cb = !1,
        Db = {};
    a.suppressDeprecationWarnings = !1, a.deprecationHandler = null;
    var Eb;
    Eb = Object.keys ? Object.keys : function(a) {
        var b, c = [];
        for (b in a) i(a, b) && c.push(b);
        return c
    };
    var Fb = {
            sameDay: "[Today at] LT",
            nextDay: "[Tomorrow at] LT",
            nextWeek: "dddd [at] LT",
            lastDay: "[Yesterday at] LT",
            lastWeek: "[Last] dddd [at] LT",
            sameElse: "L"
        },
        Gb = {
            LTS: "h:mm:ss A",
            LT: "h:mm A",
            L: "MM/DD/YYYY",
            LL: "MMMM D, YYYY",
            LLL: "MMMM D, YYYY h:mm A",
            LLLL: "dddd, MMMM D, YYYY h:mm A"
        },
        Hb = /\d{1,2}/,
        Ib = {
            future: "in %s",
            past: "%s ago",
            s: "a few seconds",
            ss: "%d seconds",
            m: "a minute",
            mm: "%d minutes",
            h: "an hour",
            hh: "%d hours",
            d: "a day",
            dd: "%d days",
            M: "a month",
            MM: "%d months",
            y: "a year",
            yy: "%d years"
        },
        Jb = {},
        Kb = {},
        Lb = /(\[[^\[]*\])|(\\)?([Hh]mm(ss)?|Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Qo?|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|kk?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,
        Mb = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g,
        Nb = {},
        Ob = {},
        Pb = /\d/,
        Qb = /\d\d/,
        Rb = /\d{3}/,
        Sb = /\d{4}/,
        Tb = /[+-]?\d{6}/,
        Ub = /\d\d?/,
        Vb = /\d\d\d\d?/,
        Wb = /\d\d\d\d\d\d?/,
        Xb = /\d{1,3}/,
        Yb = /\d{1,4}/,
        Zb = /[+-]?\d{1,6}/,
        $b = /\d+/,
        _b = /[+-]?\d+/,
        ac = /Z|[+-]\d\d:?\d\d/gi,
        bc = /Z|[+-]\d\d(?::?\d\d)?/gi,
        cc = /[+-]?\d+(\.\d{1,3})?/,
        dc = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i,
        ec = {},
        fc = {},
        gc = 0,
        hc = 1,
        ic = 2,
        jc = 3,
        kc = 4,
        lc = 5,
        mc = 6,
        nc = 7,
        oc = 8;
    H("Y", 0, 0, function() {
        var a = this.year();
        return a <= 9999 ? "" + a : "+" + a
    }), H(0, ["YY", 2], 0, function() {
        return this.year() % 100
    }), H(0, ["YYYY", 4], 0, "year"), H(0, ["YYYYY", 5], 0, "year"), H(0, ["YYYYYY", 6, !0], 0, "year"), B("year", "y"), E("year", 1), M("Y", _b), M("YY", Ub, Qb), M("YYYY", Yb, Sb), M("YYYYY", Zb, Tb), M("YYYYYY", Zb, Tb), Q(["YYYYY", "YYYYYY"], gc), Q("YYYY", function(b, c) {
        c[gc] = 2 === b.length ? a.parseTwoDigitYear(b) : t(b)
    }), Q("YY", function(b, c) {
        c[gc] = a.parseTwoDigitYear(b)
    }), Q("Y", function(a, b) {
        b[gc] = parseInt(a, 10)
    }), a.parseTwoDigitYear = function(a) {
        return t(a) + (t(a) > 68 ? 1900 : 2e3)
    };
    var pc, qc = V("FullYear", !0);
    pc = Array.prototype.indexOf ? Array.prototype.indexOf : function(a) {
        var b;
        for (b = 0; b < this.length; ++b)
            if (this[b] === a) return b;
        return -1
    }, H("M", ["MM", 2], "Mo", function() {
        return this.month() + 1
    }), H("MMM", 0, 0, function(a) {
        return this.localeData().monthsShort(this, a)
    }), H("MMMM", 0, 0, function(a) {
        return this.localeData().months(this, a)
    }), B("month", "M"), E("month", 8), M("M", Ub), M("MM", Ub, Qb), M("MMM", function(a, b) {
        return b.monthsShortRegex(a)
    }), M("MMMM", function(a, b) {
        return b.monthsRegex(a)
    }), Q(["M", "MM"], function(a, b) {
        b[hc] = t(a) - 1
    }), Q(["MMM", "MMMM"], function(a, b, c, d) {
        var e = c._locale.monthsParse(a, d, c._strict);
        null != e ? b[hc] = e : m(c).invalidMonth = a
    });
    var rc = /D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/,
        sc = "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
        tc = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
        uc = dc,
        vc = dc;
    H("w", ["ww", 2], "wo", "week"), H("W", ["WW", 2], "Wo", "isoWeek"), B("week", "w"), B("isoWeek", "W"), E("week", 5), E("isoWeek", 5), M("w", Ub), M("ww", Ub, Qb), M("W", Ub), M("WW", Ub, Qb), R(["w", "ww", "W", "WW"], function(a, b, c, d) {
        b[d.substr(0, 1)] = t(a)
    });
    var wc = {
        dow: 0,
        doy: 6
    };
    H("d", 0, "do", "day"), H("dd", 0, 0, function(a) {
        return this.localeData().weekdaysMin(this, a)
    }), H("ddd", 0, 0, function(a) {
        return this.localeData().weekdaysShort(this, a)
    }), H("dddd", 0, 0, function(a) {
        return this.localeData().weekdays(this, a)
    }), H("e", 0, 0, "weekday"), H("E", 0, 0, "isoWeekday"), B("day", "d"), B("weekday", "e"), B("isoWeekday", "E"), E("day", 11), E("weekday", 11), E("isoWeekday", 11), M("d", Ub), M("e", Ub), M("E", Ub), M("dd", function(a, b) {
        return b.weekdaysMinRegex(a)
    }), M("ddd", function(a, b) {
        return b.weekdaysShortRegex(a)
    }), M("dddd", function(a, b) {
        return b.weekdaysRegex(a)
    }), R(["dd", "ddd", "dddd"], function(a, b, c, d) {
        var e = c._locale.weekdaysParse(a, d, c._strict);
        null != e ? b.d = e : m(c).invalidWeekday = a
    }), R(["d", "e", "E"], function(a, b, c, d) {
        b[d] = t(a)
    });
    var xc = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
        yc = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
        zc = "Su_Mo_Tu_We_Th_Fr_Sa".split("_"),
        Ac = dc,
        Bc = dc,
        Cc = dc;
    H("H", ["HH", 2], 0, "hour"), H("h", ["hh", 2], 0, ma), H("k", ["kk", 2], 0, function() {
        return this.hours() || 24
    }), H("hmm", 0, 0, function() {
        return "" + ma.apply(this) + G(this.minutes(), 2)
    }), H("hmmss", 0, 0, function() {
        return "" + ma.apply(this) + G(this.minutes(), 2) + G(this.seconds(), 2)
    }), H("Hmm", 0, 0, function() {
        return "" + this.hours() + G(this.minutes(), 2)
    }), H("Hmmss", 0, 0, function() {
        return "" + this.hours() + G(this.minutes(), 2) + G(this.seconds(), 2)
    }), na("a", !0), na("A", !1), B("hour", "h"), E("hour", 13), M("a", oa), M("A", oa), M("H", Ub), M("h", Ub), M("k", Ub), M("HH", Ub, Qb), M("hh", Ub, Qb), M("kk", Ub, Qb), M("hmm", Vb), M("hmmss", Wb), M("Hmm", Vb), M("Hmmss", Wb), Q(["H", "HH"], jc), Q(["k", "kk"], function(a, b, c) {
        var d = t(a);
        b[jc] = 24 === d ? 0 : d
    }), Q(["a", "A"], function(a, b, c) {
        c._isPm = c._locale.isPM(a), c._meridiem = a
    }), Q(["h", "hh"], function(a, b, c) {
        b[jc] = t(a), m(c).bigHour = !0
    }), Q("hmm", function(a, b, c) {
        var d = a.length - 2;
        b[jc] = t(a.substr(0, d)), b[kc] = t(a.substr(d)), m(c).bigHour = !0
    }), Q("hmmss", function(a, b, c) {
        var d = a.length - 4,
            e = a.length - 2;
        b[jc] = t(a.substr(0, d)), b[kc] = t(a.substr(d, 2)), b[lc] = t(a.substr(e)), m(c).bigHour = !0
    }), Q("Hmm", function(a, b, c) {
        var d = a.length - 2;
        b[jc] = t(a.substr(0, d)), b[kc] = t(a.substr(d))
    }), Q("Hmmss", function(a, b, c) {
        var d = a.length - 4,
            e = a.length - 2;
        b[jc] = t(a.substr(0, d)), b[kc] = t(a.substr(d, 2)), b[lc] = t(a.substr(e))
    });
    var Dc, Ec = /[ap]\.?m?\.?/i,
        Fc = V("Hours", !0),
        Gc = {
            calendar: Fb,
            longDateFormat: Gb,
            invalidDate: "Invalid date",
            ordinal: "%d",
            dayOfMonthOrdinalParse: Hb,
            relativeTime: Ib,
            months: sc,
            monthsShort: tc,
            week: wc,
            weekdays: xc,
            weekdaysMin: zc,
            weekdaysShort: yc,
            meridiemParse: Ec
        },
        Hc = {},
        Ic = {},
        Jc = /^\s*((?:[+-]\d{6}|\d{4})-(?:\d\d-\d\d|W\d\d-\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?::\d\d(?::\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        Kc = /^\s*((?:[+-]\d{6}|\d{4})(?:\d\d\d\d|W\d\d\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?:\d\d(?:\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        Lc = /Z|[+-]\d\d(?::?\d\d)?/,
        Mc = [
            ["YYYYYY-MM-DD", /[+-]\d{6}-\d\d-\d\d/],
            ["YYYY-MM-DD", /\d{4}-\d\d-\d\d/],
            ["GGGG-[W]WW-E", /\d{4}-W\d\d-\d/],
            ["GGGG-[W]WW", /\d{4}-W\d\d/, !1],
            ["YYYY-DDD", /\d{4}-\d{3}/],
            ["YYYY-MM", /\d{4}-\d\d/, !1],
            ["YYYYYYMMDD", /[+-]\d{10}/],
            ["YYYYMMDD", /\d{8}/],
            ["GGGG[W]WWE", /\d{4}W\d{3}/],
            ["GGGG[W]WW", /\d{4}W\d{2}/, !1],
            ["YYYYDDD", /\d{7}/]
        ],
        Nc = [
            ["HH:mm:ss.SSSS", /\d\d:\d\d:\d\d\.\d+/],
            ["HH:mm:ss,SSSS", /\d\d:\d\d:\d\d,\d+/],
            ["HH:mm:ss", /\d\d:\d\d:\d\d/],
            ["HH:mm", /\d\d:\d\d/],
            ["HHmmss.SSSS", /\d\d\d\d\d\d\.\d+/],
            ["HHmmss,SSSS", /\d\d\d\d\d\d,\d+/],
            ["HHmmss", /\d\d\d\d\d\d/],
            ["HHmm", /\d\d\d\d/],
            ["HH", /\d\d/]
        ],
        Oc = /^\/?Date\((\-?\d+)/i,
        Pc = /^(?:(Mon|Tue|Wed|Thu|Fri|Sat|Sun),?\s)?(\d{1,2})\s(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s(\d{2,4})\s(\d\d):(\d\d)(?::(\d\d))?\s(?:(UT|GMT|[ECMP][SD]T)|([Zz])|([+-]\d{4}))$/,
        Qc = {
            UT: 0,
            GMT: 0,
            EDT: -240,
            EST: -300,
            CDT: -300,
            CST: -360,
            MDT: -360,
            MST: -420,
            PDT: -420,
            PST: -480
        };
    a.createFromInputFallback = w("value provided is not in a recognized RFC2822 or ISO format. moment construction falls back to js Date(), which is not reliable across all browsers and versions. Non RFC2822/ISO date formats are discouraged and will be removed in an upcoming major release. Please refer to http://momentjs.com/guides/#/warnings/js-date/ for more info.", function(a) {
        a._d = new Date(a._i + (a._useUTC ? " UTC" : ""))
    }), a.ISO_8601 = function() {}, a.RFC_2822 = function() {};
    var Rc = w("moment().min is deprecated, use moment.max instead. http://momentjs.com/guides/#/warnings/min-max/", function() {
            var a = Qa.apply(null, arguments);
            return this.isValid() && a.isValid() ? a < this ? this : a : o()
        }),
        Sc = w("moment().max is deprecated, use moment.min instead. http://momentjs.com/guides/#/warnings/min-max/", function() {
            var a = Qa.apply(null, arguments);
            return this.isValid() && a.isValid() ? a > this ? this : a : o()
        }),
        Tc = ["year", "quarter", "month", "week", "day", "hour", "minute", "second", "millisecond"];
    Wa("Z", ":"), Wa("ZZ", ""), M("Z", bc), M("ZZ", bc), Q(["Z", "ZZ"], function(a, b, c) {
        c._useUTC = !0, c._tzm = Xa(bc, a)
    });
    var Uc = /([\+\-]|\d\d)/gi;
    a.updateOffset = function() {};
    var Vc = /^(\-|\+)?(?:(\d*)[. ])?(\d+)\:(\d+)(?:\:(\d+)(\.\d*)?)?$/,
        Wc = /^(-|\+)?P(?:([-+]?[0-9,.]*)Y)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)W)?(?:([-+]?[0-9,.]*)D)?(?:T(?:([-+]?[0-9,.]*)H)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)S)?)?$/;
    _a.fn = Ta.prototype, _a.invalid = function() {
        return _a(NaN)
    };
    var Xc = db(1, "add"),
        Yc = db(-1, "subtract");
    a.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ", a.defaultFormatUtc = "YYYY-MM-DDTHH:mm:ss[Z]";
    var Zc = w("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function(a) {
        return void 0 === a ? this.localeData() : this.locale(a)
    });
    H(0, ["gg", 2], 0, function() {
            return this.weekYear() % 100
        }), H(0, ["GG", 2], 0, function() {
            return this.isoWeekYear() % 100
        }), ib("gggg", "weekYear"), ib("ggggg", "weekYear"), ib("GGGG", "isoWeekYear"), ib("GGGGG", "isoWeekYear"), B("weekYear", "gg"), B("isoWeekYear", "GG"), E("weekYear", 1), E("isoWeekYear", 1), M("G", _b), M("g", _b), M("GG", Ub, Qb), M("gg", Ub, Qb), M("GGGG", Yb, Sb), M("gggg", Yb, Sb), M("GGGGG", Zb, Tb), M("ggggg", Zb, Tb), R(["gggg", "ggggg", "GGGG", "GGGGG"], function(a, b, c, d) {
            b[d.substr(0, 2)] = t(a)
        }), R(["gg", "GG"], function(b, c, d, e) {
            c[e] = a.parseTwoDigitYear(b)
        }), H("Q", 0, "Qo", "quarter"), B("quarter", "Q"), E("quarter", 7), M("Q", Pb), Q("Q", function(a, b) {
            b[hc] = 3 * (t(a) - 1)
        }), H("D", ["DD", 2], "Do", "date"), B("date", "D"), E("date", 9),
        M("D", Ub), M("DD", Ub, Qb), M("Do", function(a, b) {
            return a ? b._dayOfMonthOrdinalParse || b._ordinalParse : b._dayOfMonthOrdinalParseLenient
        }), Q(["D", "DD"], ic), Q("Do", function(a, b) {
            b[ic] = t(a.match(Ub)[0], 10)
        });
    var $c = V("Date", !0);
    H("DDD", ["DDDD", 3], "DDDo", "dayOfYear"), B("dayOfYear", "DDD"), E("dayOfYear", 4), M("DDD", Xb), M("DDDD", Rb), Q(["DDD", "DDDD"], function(a, b, c) {
        c._dayOfYear = t(a)
    }), H("m", ["mm", 2], 0, "minute"), B("minute", "m"), E("minute", 14), M("m", Ub), M("mm", Ub, Qb), Q(["m", "mm"], kc);
    var _c = V("Minutes", !1);
    H("s", ["ss", 2], 0, "second"), B("second", "s"), E("second", 15), M("s", Ub), M("ss", Ub, Qb), Q(["s", "ss"], lc);
    var ad = V("Seconds", !1);
    H("S", 0, 0, function() {
        return ~~(this.millisecond() / 100)
    }), H(0, ["SS", 2], 0, function() {
        return ~~(this.millisecond() / 10)
    }), H(0, ["SSS", 3], 0, "millisecond"), H(0, ["SSSS", 4], 0, function() {
        return 10 * this.millisecond()
    }), H(0, ["SSSSS", 5], 0, function() {
        return 100 * this.millisecond()
    }), H(0, ["SSSSSS", 6], 0, function() {
        return 1e3 * this.millisecond()
    }), H(0, ["SSSSSSS", 7], 0, function() {
        return 1e4 * this.millisecond()
    }), H(0, ["SSSSSSSS", 8], 0, function() {
        return 1e5 * this.millisecond()
    }), H(0, ["SSSSSSSSS", 9], 0, function() {
        return 1e6 * this.millisecond()
    }), B("millisecond", "ms"), E("millisecond", 16), M("S", Xb, Pb), M("SS", Xb, Qb), M("SSS", Xb, Rb);
    var bd;
    for (bd = "SSSS"; bd.length <= 9; bd += "S") M(bd, $b);
    for (bd = "S"; bd.length <= 9; bd += "S") Q(bd, function(a, b) {
        b[mc] = t(1e3 * ("0." + a))
    });
    var cd = V("Milliseconds", !1);
    H("z", 0, 0, "zoneAbbr"), H("zz", 0, 0, "zoneName");
    var dd = q.prototype;
    dd.add = Xc, dd.calendar = function(b, c) {
        var d = b || Qa(),
            e = Ya(d, this).startOf("day"),
            f = a.calendarFormat(this, e) || "sameElse",
            g = c && (y(c[f]) ? c[f].call(this, d) : c[f]);
        return this.format(g || this.localeData().calendar(f, this, Qa(d)))
    }, dd.clone = function() {
        return new q(this)
    }, dd.diff = function(a, b, c) {
        var d, e, f;
        if (!this.isValid()) return NaN;
        if (!(d = Ya(a, this)).isValid()) return NaN;
        switch (e = 6e4 * (d.utcOffset() - this.utcOffset()), b = C(b)) {
            case "year":
                f = fb(this, d) / 12;
                break;
            case "month":
                f = fb(this, d);
                break;
            case "quarter":
                f = fb(this, d) / 3;
                break;
            case "second":
                f = (this - d) / 1e3;
                break;
            case "minute":
                f = (this - d) / 6e4;
                break;
            case "hour":
                f = (this - d) / 36e5;
                break;
            case "day":
                f = (this - d - e) / 864e5;
                break;
            case "week":
                f = (this - d - e) / 6048e5;
                break;
            default:
                f = this - d
        }
        return c ? f : s(f)
    }, dd.endOf = function(a) {
        return void 0 === (a = C(a)) || "millisecond" === a ? this : ("date" === a && (a = "day"), this.startOf(a).add(1, "isoWeek" === a ? "week" : a).subtract(1, "ms"))
    }, dd.format = function(b) {
        b || (b = this.isUtc() ? a.defaultFormatUtc : a.defaultFormat);
        var c = K(this, b);
        return this.localeData().postformat(c)
    }, dd.from = function(a, b) {
        return this.isValid() && (r(a) && a.isValid() || Qa(a).isValid()) ? _a({
            to: this,
            from: a
        }).locale(this.locale()).humanize(!b) : this.localeData().invalidDate()
    }, dd.fromNow = function(a) {
        return this.from(Qa(), a)
    }, dd.to = function(a, b) {
        return this.isValid() && (r(a) && a.isValid() || Qa(a).isValid()) ? _a({
            from: this,
            to: a
        }).locale(this.locale()).humanize(!b) : this.localeData().invalidDate()
    }, dd.toNow = function(a) {
        return this.to(Qa(), a)
    }, dd.get = function(a) {
        return a = C(a), y(this[a]) ? this[a]() : this
    }, dd.invalidAt = function() {
        return m(this).overflow
    }, dd.isAfter = function(a, b) {
        var c = r(a) ? a : Qa(a);
        return !(!this.isValid() || !c.isValid()) && ("millisecond" === (b = C(e(b) ? "millisecond" : b)) ? this.valueOf() > c.valueOf() : c.valueOf() < this.clone().startOf(b).valueOf())
    }, dd.isBefore = function(a, b) {
        var c = r(a) ? a : Qa(a);
        return !(!this.isValid() || !c.isValid()) && ("millisecond" === (b = C(e(b) ? "millisecond" : b)) ? this.valueOf() < c.valueOf() : this.clone().endOf(b).valueOf() < c.valueOf())
    }, dd.isBetween = function(a, b, c, d) {
        return ("(" === (d = d || "()")[0] ? this.isAfter(a, c) : !this.isBefore(a, c)) && (")" === d[1] ? this.isBefore(b, c) : !this.isAfter(b, c))
    }, dd.isSame = function(a, b) {
        var c, d = r(a) ? a : Qa(a);
        return !(!this.isValid() || !d.isValid()) && ("millisecond" === (b = C(b || "millisecond")) ? this.valueOf() === d.valueOf() : (c = d.valueOf(), this.clone().startOf(b).valueOf() <= c && c <= this.clone().endOf(b).valueOf()))
    }, dd.isSameOrAfter = function(a, b) {
        return this.isSame(a, b) || this.isAfter(a, b)
    }, dd.isSameOrBefore = function(a, b) {
        return this.isSame(a, b) || this.isBefore(a, b)
    }, dd.isValid = function() {
        return n(this)
    }, dd.lang = Zc, dd.locale = gb, dd.localeData = hb, dd.max = Sc, dd.min = Rc, dd.parsingFlags = function() {
        return j({}, m(this))
    }, dd.set = function(a, b) {
        if ("object" == typeof a)
            for (var c = F(a = D(a)), d = 0; d < c.length; d++) this[c[d].unit](a[c[d].unit]);
        else if (a = C(a), y(this[a])) return this[a](b);
        return this
    }, dd.startOf = function(a) {
        switch (a = C(a)) {
            case "year":
                this.month(0);
            case "quarter":
            case "month":
                this.date(1);
            case "week":
            case "isoWeek":
            case "day":
            case "date":
                this.hours(0);
            case "hour":
                this.minutes(0);
            case "minute":
                this.seconds(0);
            case "second":
                this.milliseconds(0)
        }
        return "week" === a && this.weekday(0), "isoWeek" === a && this.isoWeekday(1), "quarter" === a && this.month(3 * Math.floor(this.month() / 3)), this
    }, dd.subtract = Yc, dd.toArray = function() {
        var a = this;
        return [a.year(), a.month(), a.date(), a.hour(), a.minute(), a.second(), a.millisecond()]
    }, dd.toObject = function() {
        var a = this;
        return {
            years: a.year(),
            months: a.month(),
            date: a.date(),
            hours: a.hours(),
            minutes: a.minutes(),
            seconds: a.seconds(),
            milliseconds: a.milliseconds()
        }
    }, dd.toDate = function() {
        return new Date(this.valueOf())
    }, dd.toISOString = function() {
        if (!this.isValid()) return null;
        var a = this.clone().utc();
        return a.year() < 0 || a.year() > 9999 ? K(a, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : y(Date.prototype.toISOString) ? this.toDate().toISOString() : K(a, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]")
    }, dd.inspect = function() {
        if (!this.isValid()) return "moment.invalid(/* " + this._i + " */)";
        var a = "moment",
            b = "";
        this.isLocal() || (a = 0 === this.utcOffset() ? "moment.utc" : "moment.parseZone", b = "Z");
        var c = "[" + a + '("]',
            d = 0 <= this.year() && this.year() <= 9999 ? "YYYY" : "YYYYYY",
            e = b + '[")]';
        return this.format(c + d + "-MM-DD[T]HH:mm:ss.SSS" + e)
    }, dd.toJSON = function() {
        return this.isValid() ? this.toISOString() : null
    }, dd.toString = function() {
        return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")
    }, dd.unix = function() {
        return Math.floor(this.valueOf() / 1e3)
    }, dd.valueOf = function() {
        return this._d.valueOf() - 6e4 * (this._offset || 0)
    }, dd.creationData = function() {
        return {
            input: this._i,
            format: this._f,
            locale: this._locale,
            isUTC: this._isUTC,
            strict: this._strict
        }
    }, dd.year = qc, dd.isLeapYear = function() {
        return U(this.year())
    }, dd.weekYear = function(a) {
        return jb.call(this, a, this.week(), this.weekday(), this.localeData()._week.dow, this.localeData()._week.doy)
    }, dd.isoWeekYear = function(a) {
        return jb.call(this, a, this.isoWeek(), this.isoWeekday(), 1, 4)
    }, dd.quarter = dd.quarters = function(a) {
        return null == a ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (a - 1) + this.month() % 3)
    }, dd.month = aa, dd.daysInMonth = function() {
        return Z(this.year(), this.month())
    }, dd.week = dd.weeks = function(a) {
        var b = this.localeData().week(this);
        return null == a ? b : this.add(7 * (a - b), "d")
    }, dd.isoWeek = dd.isoWeeks = function(a) {
        var b = ga(this, 1, 4).week;
        return null == a ? b : this.add(7 * (a - b), "d")
    }, dd.weeksInYear = function() {
        var a = this.localeData()._week;
        return ha(this.year(), a.dow, a.doy)
    }, dd.isoWeeksInYear = function() {
        return ha(this.year(), 1, 4)
    }, dd.date = $c, dd.day = dd.days = function(a) {
        if (!this.isValid()) return null != a ? this : NaN;
        var b = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
        return null != a ? (a = ia(a, this.localeData()), this.add(a - b, "d")) : b
    }, dd.weekday = function(a) {
        if (!this.isValid()) return null != a ? this : NaN;
        var b = (this.day() + 7 - this.localeData()._week.dow) % 7;
        return null == a ? b : this.add(a - b, "d")
    }, dd.isoWeekday = function(a) {
        if (!this.isValid()) return null != a ? this : NaN;
        if (null != a) {
            var b = ja(a, this.localeData());
            return this.day(this.day() % 7 ? b : b - 7)
        }
        return this.day() || 7
    }, dd.dayOfYear = function(a) {
        var b = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 864e5) + 1;
        return null == a ? b : this.add(a - b, "d")
    }, dd.hour = dd.hours = Fc, dd.minute = dd.minutes = _c, dd.second = dd.seconds = ad, dd.millisecond = dd.milliseconds = cd, dd.utcOffset = function(b, c, d) {
        var e, f = this._offset || 0;
        if (!this.isValid()) return null != b ? this : NaN;
        if (null != b) {
            if ("string" == typeof b) {
                if (null === (b = Xa(bc, b))) return this
            } else Math.abs(b) < 16 && !d && (b *= 60);
            return !this._isUTC && c && (e = Za(this)), this._offset = b, this._isUTC = !0, null != e && this.add(e, "m"), f !== b && (!c || this._changeInProgress ? eb(this, _a(b - f, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, a.updateOffset(this, !0), this._changeInProgress = null)), this
        }
        return this._isUTC ? f : Za(this)
    }, dd.utc = function(a) {
        return this.utcOffset(0, a)
    }, dd.local = function(a) {
        return this._isUTC && (this.utcOffset(0, a), this._isUTC = !1, a && this.subtract(Za(this), "m")), this
    }, dd.parseZone = function() {
        if (null != this._tzm) this.utcOffset(this._tzm, !1, !0);
        else if ("string" == typeof this._i) {
            var a = Xa(ac, this._i);
            null != a ? this.utcOffset(a) : this.utcOffset(0, !0)
        }
        return this
    }, dd.hasAlignedHourOffset = function(a) {
        return !!this.isValid() && (a = a ? Qa(a).utcOffset() : 0, (this.utcOffset() - a) % 60 == 0)
    }, dd.isDST = function() {
        return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset()
    }, dd.isLocal = function() {
        return !!this.isValid() && !this._isUTC
    }, dd.isUtcOffset = function() {
        return !!this.isValid() && this._isUTC
    }, dd.isUtc = $a, dd.isUTC = $a, dd.zoneAbbr = function() {
        return this._isUTC ? "UTC" : ""
    }, dd.zoneName = function() {
        return this._isUTC ? "Coordinated Universal Time" : ""
    }, dd.dates = w("dates accessor is deprecated. Use date instead.", $c), dd.months = w("months accessor is deprecated. Use month instead", aa), dd.years = w("years accessor is deprecated. Use year instead", qc), dd.zone = w("moment().zone is deprecated, use moment().utcOffset instead. http://momentjs.com/guides/#/warnings/zone/", function(a, b) {
        return null != a ? ("string" != typeof a && (a = -a), this.utcOffset(a, b), this) : -this.utcOffset()
    }), dd.isDSTShifted = w("isDSTShifted is deprecated. See http://momentjs.com/guides/#/warnings/dst-shifted/ for more information", function() {
        if (!e(this._isDSTShifted)) return this._isDSTShifted;
        var a = {};
        if (p(a, this), (a = Na(a))._a) {
            var b = a._isUTC ? k(a._a) : Qa(a._a);
            this._isDSTShifted = this.isValid() && u(a._a, b.toArray()) > 0
        } else this._isDSTShifted = !1;
        return this._isDSTShifted
    });
    var ed = A.prototype;
    ed.calendar = function(a, b, c) {
        var d = this._calendar[a] || this._calendar.sameElse;
        return y(d) ? d.call(b, c) : d
    }, ed.longDateFormat = function(a) {
        var b = this._longDateFormat[a],
            c = this._longDateFormat[a.toUpperCase()];
        return b || !c ? b : (this._longDateFormat[a] = c.replace(/MMMM|MM|DD|dddd/g, function(a) {
            return a.slice(1)
        }), this._longDateFormat[a])
    }, ed.invalidDate = function() {
        return this._invalidDate
    }, ed.ordinal = function(a) {
        return this._ordinal.replace("%d", a)
    }, ed.preparse = lb, ed.postformat = lb, ed.relativeTime = function(a, b, c, d) {
        var e = this._relativeTime[c];
        return y(e) ? e(a, b, c, d) : e.replace(/%d/i, a)
    }, ed.pastFuture = function(a, b) {
        var c = this._relativeTime[a > 0 ? "future" : "past"];
        return y(c) ? c(b) : c.replace(/%s/i, b)
    }, ed.set = function(a) {
        var b, c;
        for (c in a) y(b = a[c]) ? this[c] = b : this["_" + c] = b;
        this._config = a, this._dayOfMonthOrdinalParseLenient = new RegExp((this._dayOfMonthOrdinalParse.source || this._ordinalParse.source) + "|" + /\d{1,2}/.source)
    }, ed.months = function(a, c) {
        return a ? b(this._months) ? this._months[a.month()] : this._months[(this._months.isFormat || rc).test(c) ? "format" : "standalone"][a.month()] : b(this._months) ? this._months : this._months.standalone
    }, ed.monthsShort = function(a, c) {
        return a ? b(this._monthsShort) ? this._monthsShort[a.month()] : this._monthsShort[rc.test(c) ? "format" : "standalone"][a.month()] : b(this._monthsShort) ? this._monthsShort : this._monthsShort.standalone
    }, ed.monthsParse = function(a, b, c) {
        var d, e, f;
        if (this._monthsParseExact) return $.call(this, a, b, c);
        for (this._monthsParse || (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = []), d = 0; d < 12; d++) {
            if (e = k([2e3, d]), c && !this._longMonthsParse[d] && (this._longMonthsParse[d] = new RegExp("^" + this.months(e, "").replace(".", "") + "$", "i"), this._shortMonthsParse[d] = new RegExp("^" + this.monthsShort(e, "").replace(".", "") + "$", "i")), c || this._monthsParse[d] || (f = "^" + this.months(e, "") + "|^" + this.monthsShort(e, ""), this._monthsParse[d] = new RegExp(f.replace(".", ""), "i")), c && "MMMM" === b && this._longMonthsParse[d].test(a)) return d;
            if (c && "MMM" === b && this._shortMonthsParse[d].test(a)) return d;
            if (!c && this._monthsParse[d].test(a)) return d
        }
    }, ed.monthsRegex = function(a) {
        return this._monthsParseExact ? (i(this, "_monthsRegex") || ba.call(this), a ? this._monthsStrictRegex : this._monthsRegex) : (i(this, "_monthsRegex") || (this._monthsRegex = vc), this._monthsStrictRegex && a ? this._monthsStrictRegex : this._monthsRegex)
    }, ed.monthsShortRegex = function(a) {
        return this._monthsParseExact ? (i(this, "_monthsRegex") || ba.call(this), a ? this._monthsShortStrictRegex : this._monthsShortRegex) : (i(this, "_monthsShortRegex") || (this._monthsShortRegex = uc), this._monthsShortStrictRegex && a ? this._monthsShortStrictRegex : this._monthsShortRegex)
    }, ed.week = function(a) {
        return ga(a, this._week.dow, this._week.doy).week
    }, ed.firstDayOfYear = function() {
        return this._week.doy
    }, ed.firstDayOfWeek = function() {
        return this._week.dow
    }, ed.weekdays = function(a, c) {
        return a ? b(this._weekdays) ? this._weekdays[a.day()] : this._weekdays[this._weekdays.isFormat.test(c) ? "format" : "standalone"][a.day()] : b(this._weekdays) ? this._weekdays : this._weekdays.standalone
    }, ed.weekdaysMin = function(a) {
        return a ? this._weekdaysMin[a.day()] : this._weekdaysMin
    }, ed.weekdaysShort = function(a) {
        return a ? this._weekdaysShort[a.day()] : this._weekdaysShort
    }, ed.weekdaysParse = function(a, b, c) {
        var d, e, f;
        if (this._weekdaysParseExact) return ka.call(this, a, b, c);
        for (this._weekdaysParse || (this._weekdaysParse = [], this._minWeekdaysParse = [], this._shortWeekdaysParse = [], this._fullWeekdaysParse = []), d = 0; d < 7; d++) {
            if (e = k([2e3, 1]).day(d), c && !this._fullWeekdaysParse[d] && (this._fullWeekdaysParse[d] = new RegExp("^" + this.weekdays(e, "").replace(".", ".?") + "$", "i"), this._shortWeekdaysParse[d] = new RegExp("^" + this.weekdaysShort(e, "").replace(".", ".?") + "$", "i"), this._minWeekdaysParse[d] = new RegExp("^" + this.weekdaysMin(e, "").replace(".", ".?") + "$", "i")), this._weekdaysParse[d] || (f = "^" + this.weekdays(e, "") + "|^" + this.weekdaysShort(e, "") + "|^" + this.weekdaysMin(e, ""), this._weekdaysParse[d] = new RegExp(f.replace(".", ""), "i")), c && "dddd" === b && this._fullWeekdaysParse[d].test(a)) return d;
            if (c && "ddd" === b && this._shortWeekdaysParse[d].test(a)) return d;
            if (c && "dd" === b && this._minWeekdaysParse[d].test(a)) return d;
            if (!c && this._weekdaysParse[d].test(a)) return d
        }
    }, ed.weekdaysRegex = function(a) {
        return this._weekdaysParseExact ? (i(this, "_weekdaysRegex") || la.call(this), a ? this._weekdaysStrictRegex : this._weekdaysRegex) : (i(this, "_weekdaysRegex") || (this._weekdaysRegex = Ac), this._weekdaysStrictRegex && a ? this._weekdaysStrictRegex : this._weekdaysRegex)
    }, ed.weekdaysShortRegex = function(a) {
        return this._weekdaysParseExact ? (i(this, "_weekdaysRegex") || la.call(this), a ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex) : (i(this, "_weekdaysShortRegex") || (this._weekdaysShortRegex = Bc), this._weekdaysShortStrictRegex && a ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex)
    }, ed.weekdaysMinRegex = function(a) {
        return this._weekdaysParseExact ? (i(this, "_weekdaysRegex") || la.call(this), a ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex) : (i(this, "_weekdaysMinRegex") || (this._weekdaysMinRegex = Cc), this._weekdaysMinStrictRegex && a ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex)
    }, ed.isPM = function(a) {
        return "p" === (a + "").toLowerCase().charAt(0)
    }, ed.meridiem = function(a, b, c) {
        return a > 11 ? c ? "pm" : "PM" : c ? "am" : "AM"
    }, sa("en", {
        dayOfMonthOrdinalParse: /\d{1,2}(th|st|nd|rd)/,
        ordinal: function(a) {
            var b = a % 10;
            return a + (1 === t(a % 100 / 10) ? "th" : 1 === b ? "st" : 2 === b ? "nd" : 3 === b ? "rd" : "th")
        }
    }), a.lang = w("moment.lang is deprecated. Use moment.locale instead.", sa), a.langData = w("moment.langData is deprecated. Use moment.localeData instead.", ua);
    var fd = Math.abs,
        gd = tb("ms"),
        hd = tb("s"),
        id = tb("m"),
        jd = tb("h"),
        kd = tb("d"),
        ld = tb("w"),
        md = tb("M"),
        nd = tb("y"),
        od = ub("milliseconds"),
        pd = ub("seconds"),
        qd = ub("minutes"),
        rd = ub("hours"),
        sd = ub("days"),
        td = ub("months"),
        ud = ub("years"),
        vd = Math.round,
        wd = {
            ss: 44,
            s: 45,
            m: 45,
            h: 22,
            d: 26,
            M: 11
        },
        xd = Math.abs,
        yd = Ta.prototype;
    return yd.isValid = function() {
            return this._isValid
        }, yd.abs = function() {
            var a = this._data;
            return this._milliseconds = fd(this._milliseconds), this._days = fd(this._days), this._months = fd(this._months), a.milliseconds = fd(a.milliseconds), a.seconds = fd(a.seconds), a.minutes = fd(a.minutes), a.hours = fd(a.hours), a.months = fd(a.months), a.years = fd(a.years), this
        }, yd.add = function(a, b) {
            return pb(this, a, b, 1)
        }, yd.subtract = function(a, b) {
            return pb(this, a, b, -1)
        }, yd.as = function(a) {
            if (!this.isValid()) return NaN;
            var b, c, d = this._milliseconds;
            if ("month" === (a = C(a)) || "year" === a) return b = this._days + d / 864e5, c = this._months + rb(b), "month" === a ? c : c / 12;
            switch (b = this._days + Math.round(sb(this._months)), a) {
                case "week":
                    return b / 7 + d / 6048e5;
                case "day":
                    return b + d / 864e5;
                case "hour":
                    return 24 * b + d / 36e5;
                case "minute":
                    return 1440 * b + d / 6e4;
                case "second":
                    return 86400 * b + d / 1e3;
                case "millisecond":
                    return Math.floor(864e5 * b) + d;
                default:
                    throw new Error("Unknown unit " + a)
            }
        }, yd.asMilliseconds = gd, yd.asSeconds = hd, yd.asMinutes = id, yd.asHours = jd, yd.asDays = kd, yd.asWeeks = ld, yd.asMonths = md, yd.asYears = nd, yd.valueOf = function() {
            return this.isValid() ? this._milliseconds + 864e5 * this._days + this._months % 12 * 2592e6 + 31536e6 * t(this._months / 12) : NaN
        }, yd._bubble = function() {
            var a, b, c, d, e, f = this._milliseconds,
                g = this._days,
                h = this._months,
                i = this._data;
            return f >= 0 && g >= 0 && h >= 0 || f <= 0 && g <= 0 && h <= 0 || (f += 864e5 * qb(sb(h) + g), g = 0, h = 0), i.milliseconds = f % 1e3, a = s(f / 1e3), i.seconds = a % 60, b = s(a / 60), i.minutes = b % 60, c = s(b / 60), i.hours = c % 24, g += s(c / 24), e = s(rb(g)), h += e, g -= qb(sb(e)), d = s(h / 12), h %= 12, i.days = g, i.months = h, i.years = d, this
        }, yd.clone = function() {
            return _a(this)
        }, yd.get = function(a) {
            return a = C(a), this.isValid() ? this[a + "s"]() : NaN
        }, yd.milliseconds = od, yd.seconds = pd, yd.minutes = qd, yd.hours = rd, yd.days = sd, yd.weeks = function() {
            return s(this.days() / 7)
        }, yd.months = td, yd.years = ud, yd.humanize = function(a) {
            if (!this.isValid()) return this.localeData().invalidDate();
            var b = this.localeData(),
                c = wb(this, !a, b);
            return a && (c = b.pastFuture(+this, c)), b.postformat(c)
        }, yd.toISOString = yb, yd.toString = yb, yd.toJSON = yb, yd.locale = gb, yd.localeData = hb, yd.toIsoString = w("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", yb), yd.lang = Zc, H("X", 0, 0, "unix"), H("x", 0, 0, "valueOf"), M("x", _b), M("X", cc), Q("X", function(a, b, c) {
            c._d = new Date(1e3 * parseFloat(a, 10))
        }), Q("x", function(a, b, c) {
            c._d = new Date(t(a))
        }), a.version = "2.19.2",
        function(a) {
            zb = a
        }(Qa), a.fn = dd, a.min = function() {
            return Ra("isBefore", [].slice.call(arguments, 0))
        }, a.max = function() {
            return Ra("isAfter", [].slice.call(arguments, 0))
        }, a.now = function() {
            return Date.now ? Date.now() : +new Date
        }, a.utc = k, a.unix = function(a) {
            return Qa(1e3 * a)
        }, a.months = function(a, b) {
            return nb(a, b, "months")
        }, a.isDate = g, a.locale = sa, a.invalid = o, a.duration = _a, a.isMoment = r, a.weekdays = function(a, b, c) {
            return ob(a, b, c, "weekdays")
        }, a.parseZone = function() {
            return Qa.apply(null, arguments).parseZone()
        }, a.localeData = ua, a.isDuration = Ua, a.monthsShort = function(a, b) {
            return nb(a, b, "monthsShort")
        }, a.weekdaysMin = function(a, b, c) {
            return ob(a, b, c, "weekdaysMin")
        }, a.defineLocale = ta, a.updateLocale = function(a, b) {
            if (null != b) {
                var c, d, e = Gc;
                null != (d = ra(a)) && (e = d._config), (c = new A(b = z(e, b))).parentLocale = Hc[a], Hc[a] = c, sa(a)
            } else null != Hc[a] && (null != Hc[a].parentLocale ? Hc[a] = Hc[a].parentLocale : null != Hc[a] && delete Hc[a]);
            return Hc[a]
        }, a.locales = function() {
            return Eb(Hc)
        }, a.weekdaysShort = function(a, b, c) {
            return ob(a, b, c, "weekdaysShort")
        }, a.normalizeUnits = C, a.relativeTimeRounding = function(a) {
            return void 0 === a ? vd : "function" == typeof a && (vd = a, !0)
        }, a.relativeTimeThreshold = function(a, b) {
            return void 0 !== wd[a] && (void 0 === b ? wd[a] : (wd[a] = b, "s" === a && (wd.ss = b - 1), !0))
        }, a.calendarFormat = function(a, b) {
            var c = a.diff(b, "days", !0);
            return c < -6 ? "sameElse" : c < -1 ? "lastWeek" : c < 0 ? "lastDay" : c < 1 ? "sameDay" : c < 2 ? "nextDay" : c < 7 ? "nextWeek" : "sameElse"
        }, a.prototype = dd, a
}),
function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
}(function(a) {
    function b(b, d) {
        var e, f, g, h = b.nodeName.toLowerCase();
        return "area" === h ? (e = b.parentNode, f = e.name, !(!b.href || !f || "map" !== e.nodeName.toLowerCase()) && (!!(g = a("img[usemap='#" + f + "']")[0]) && c(g))) : (/input|select|textarea|button|object/.test(h) ? !b.disabled : "a" === h ? b.href || d : d) && c(b)
    }

    function c(b) {
        return a.expr.filters.visible(b) && !a(b).parents().addBack().filter(function() {
            return "hidden" === a.css(this, "visibility")
        }).length
    }
    a.ui = a.ui || {}, a.extend(a.ui, {
        version: "1.11.2",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), a.fn.extend({
        scrollParent: function(b) {
            var c = this.css("position"),
                d = "absolute" === c,
                e = b ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
                f = this.parents().filter(function() {
                    var b = a(this);
                    return (!d || "static" !== b.css("position")) && e.test(b.css("overflow") + b.css("overflow-y") + b.css("overflow-x"))
                }).eq(0);
            return "fixed" !== c && f.length ? f : a(this[0].ownerDocument || document)
        },
        uniqueId: function() {
            var a = 0;
            return function() {
                return this.each(function() {
                    this.id || (this.id = "ui-id-" + ++a)
                })
            }
        }(),
        removeUniqueId: function() {
            return this.each(function() {
                /^ui-id-\d+$/.test(this.id) && a(this).removeAttr("id")
            })
        }
    }), a.extend(a.expr[":"], {
        data: a.expr.createPseudo ? a.expr.createPseudo(function(b) {
            return function(c) {
                return !!a.data(c, b)
            }
        }) : function(b, c, d) {
            return !!a.data(b, d[3])
        },
        focusable: function(c) {
            return b(c, !isNaN(a.attr(c, "tabindex")))
        },
        tabbable: function(c) {
            var d = a.attr(c, "tabindex"),
                e = isNaN(d);
            return (e || d >= 0) && b(c, !e)
        }
    }), a("<a>").outerWidth(1).jquery || a.each(["Width", "Height"], function(b, c) {
        function d(b, c, d, f) {
            return a.each(e, function() {
                c -= parseFloat(a.css(b, "padding" + this)) || 0, d && (c -= parseFloat(a.css(b, "border" + this + "Width")) || 0), f && (c -= parseFloat(a.css(b, "margin" + this)) || 0)
            }), c
        }
        var e = "Width" === c ? ["Left", "Right"] : ["Top", "Bottom"],
            f = c.toLowerCase(),
            g = {
                innerWidth: a.fn.innerWidth,
                innerHeight: a.fn.innerHeight,
                outerWidth: a.fn.outerWidth,
                outerHeight: a.fn.outerHeight
            };
        a.fn["inner" + c] = function(b) {
            return void 0 === b ? g["inner" + c].call(this) : this.each(function() {
                a(this).css(f, d(this, b) + "px")
            })
        }, a.fn["outer" + c] = function(b, e) {
            return "number" != typeof b ? g["outer" + c].call(this, b) : this.each(function() {
                a(this).css(f, d(this, b, !0, e) + "px")
            })
        }
    }), a.fn.addBack || (a.fn.addBack = function(a) {
        return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
    }), a("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (a.fn.removeData = function(b) {
        return function(c) {
            return arguments.length ? b.call(this, a.camelCase(c)) : b.call(this)
        }
    }(a.fn.removeData)), a.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), a.fn.extend({
        focus: function(b) {
            return function(c, d) {
                return "number" == typeof c ? this.each(function() {
                    var b = this;
                    setTimeout(function() {
                        a(b).focus(), d && d.call(b)
                    }, c)
                }) : b.apply(this, arguments)
            }
        }(a.fn.focus),
        disableSelection: function() {
            var a = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown";
            return function() {
                return this.bind(a + ".ui-disableSelection", function(a) {
                    a.preventDefault()
                })
            }
        }(),
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        },
        zIndex: function(b) {
            if (void 0 !== b) return this.css("zIndex", b);
            if (this.length)
                for (var c, d, e = a(this[0]); e.length && e[0] !== document;) {
                    if (("absolute" === (c = e.css("position")) || "relative" === c || "fixed" === c) && (d = parseInt(e.css("zIndex"), 10), !isNaN(d) && 0 !== d)) return d;
                    e = e.parent()
                }
            return 0
        }
    }), a.ui.plugin = {
        add: function(b, c, d) {
            var e, f = a.ui[b].prototype;
            for (e in d) f.plugins[e] = f.plugins[e] || [], f.plugins[e].push([c, d[e]])
        },
        call: function(a, b, c, d) {
            var e, f = a.plugins[b];
            if (f && (d || a.element[0].parentNode && 11 !== a.element[0].parentNode.nodeType))
                for (e = 0; f.length > e; e++) a.options[f[e][0]] && f[e][1].apply(a.element, c)
        }
    }
}),
function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
}(function(a) {
    var b = 0,
        c = Array.prototype.slice;
    return a.cleanData = function(b) {
        return function(c) {
            var d, e, f;
            for (f = 0; null != (e = c[f]); f++) try {
                (d = a._data(e, "events")) && d.remove && a(e).triggerHandler("remove")
            } catch (a) {}
            b(c)
        }
    }(a.cleanData), a.widget = function(b, c, d) {
        var e, f, g, h, i = {},
            j = b.split(".")[0];
        return b = b.split(".")[1], e = j + "-" + b, d || (d = c, c = a.Widget), a.expr[":"][e.toLowerCase()] = function(b) {
            return !!a.data(b, e)
        }, a[j] = a[j] || {}, f = a[j][b], g = a[j][b] = function(a, b) {
            return this._createWidget ? void(arguments.length && this._createWidget(a, b)) : new g(a, b)
        }, a.extend(g, f, {
            version: d.version,
            _proto: a.extend({}, d),
            _childConstructors: []
        }), h = new c, h.options = a.widget.extend({}, h.options), a.each(d, function(b, d) {
            return a.isFunction(d) ? void(i[b] = function() {
                var a = function() {
                        return c.prototype[b].apply(this, arguments)
                    },
                    e = function(a) {
                        return c.prototype[b].apply(this, a)
                    };
                return function() {
                    var b, c = this._super,
                        f = this._superApply;
                    return this._super = a, this._superApply = e, b = d.apply(this, arguments), this._super = c, this._superApply = f, b
                }
            }()) : void(i[b] = d)
        }), g.prototype = a.widget.extend(h, {
            widgetEventPrefix: f ? h.widgetEventPrefix || b : b
        }, i, {
            constructor: g,
            namespace: j,
            widgetName: b,
            widgetFullName: e
        }), f ? (a.each(f._childConstructors, function(b, c) {
            var d = c.prototype;
            a.widget(d.namespace + "." + d.widgetName, g, c._proto)
        }), delete f._childConstructors) : c._childConstructors.push(g), a.widget.bridge(b, g), g
    }, a.widget.extend = function(b) {
        for (var d, e, f = c.call(arguments, 1), g = 0, h = f.length; h > g; g++)
            for (d in f[g]) e = f[g][d], f[g].hasOwnProperty(d) && void 0 !== e && (b[d] = a.isPlainObject(e) ? a.isPlainObject(b[d]) ? a.widget.extend({}, b[d], e) : a.widget.extend({}, e) : e);
        return b
    }, a.widget.bridge = function(b, d) {
        var e = d.prototype.widgetFullName || b;
        a.fn[b] = function(f) {
            var g = "string" == typeof f,
                h = c.call(arguments, 1),
                i = this;
            return f = !g && h.length ? a.widget.extend.apply(null, [f].concat(h)) : f, g ? this.each(function() {
                var c, d = a.data(this, e);
                return "instance" === f ? (i = d, !1) : d ? a.isFunction(d[f]) && "_" !== f.charAt(0) ? (c = d[f].apply(d, h), c !== d && void 0 !== c ? (i = c && c.jquery ? i.pushStack(c.get()) : c, !1) : void 0) : a.error("no such method '" + f + "' for " + b + " widget instance") : a.error("cannot call methods on " + b + " prior to initialization; attempted to call method '" + f + "'")
            }) : this.each(function() {
                var b = a.data(this, e);
                b ? (b.option(f || {}), b._init && b._init()) : a.data(this, e, new d(f, this))
            }), i
        }
    }, a.Widget = function() {}, a.Widget._childConstructors = [], a.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {
            disabled: !1,
            create: null
        },
        _createWidget: function(c, d) {
            d = a(d || this.defaultElement || this)[0], this.element = a(d), this.uuid = b++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = a(), this.hoverable = a(), this.focusable = a(), d !== this && (a.data(d, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function(a) {
                    a.target === d && this.destroy()
                }
            }), this.document = a(d.style ? d.ownerDocument : d.document || d), this.window = a(this.document[0].defaultView || this.document[0].parentWindow)), this.options = a.widget.extend({}, this.options, this._getCreateOptions(), c), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: a.noop,
        _getCreateEventData: a.noop,
        _create: a.noop,
        _init: a.noop,
        destroy: function() {
            this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(a.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
        },
        _destroy: a.noop,
        widget: function() {
            return this.element
        },
        option: function(b, c) {
            var d, e, f, g = b;
            if (0 === arguments.length) return a.widget.extend({}, this.options);
            if ("string" == typeof b)
                if (g = {}, d = b.split("."), b = d.shift(), d.length) {
                    for (e = g[b] = a.widget.extend({}, this.options[b]), f = 0; d.length - 1 > f; f++) e[d[f]] = e[d[f]] || {}, e = e[d[f]];
                    if (b = d.pop(), 1 === arguments.length) return void 0 === e[b] ? null : e[b];
                    e[b] = c
                } else {
                    if (1 === arguments.length) return void 0 === this.options[b] ? null : this.options[b];
                    g[b] = c
                }
            return this._setOptions(g), this
        },
        _setOptions: function(a) {
            var b;
            for (b in a) this._setOption(b, a[b]);
            return this
        },
        _setOption: function(a, b) {
            return this.options[a] = b, "disabled" === a && (this.widget().toggleClass(this.widgetFullName + "-disabled", !!b), b && (this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus"))), this
        },
        enable: function() {
            return this._setOptions({
                disabled: !1
            })
        },
        disable: function() {
            return this._setOptions({
                disabled: !0
            })
        },
        _on: function(b, c, d) {
            var e, f = this;
            "boolean" != typeof b && (d = c, c = b, b = !1), d ? (c = e = a(c), this.bindings = this.bindings.add(c)) : (d = c, c = this.element, e = this.widget()), a.each(d, function(d, g) {
                function h() {
                    return b || !0 !== f.options.disabled && !a(this).hasClass("ui-state-disabled") ? ("string" == typeof g ? f[g] : g).apply(f, arguments) : void 0
                }
                "string" != typeof g && (h.guid = g.guid = g.guid || h.guid || a.guid++);
                var i = d.match(/^([\w:-]*)\s*(.*)$/),
                    j = i[1] + f.eventNamespace,
                    k = i[2];
                k ? e.delegate(k, j, h) : c.bind(j, h)
            })
        },
        _off: function(b, c) {
            c = (c || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, b.unbind(c).undelegate(c), this.bindings = a(this.bindings.not(b).get()), this.focusable = a(this.focusable.not(b).get()), this.hoverable = a(this.hoverable.not(b).get())
        },
        _delay: function(a, b) {
            function c() {
                return ("string" == typeof a ? d[a] : a).apply(d, arguments)
            }
            var d = this;
            return setTimeout(c, b || 0)
        },
        _hoverable: function(b) {
            this.hoverable = this.hoverable.add(b), this._on(b, {
                mouseenter: function(b) {
                    a(b.currentTarget).addClass("ui-state-hover")
                },
                mouseleave: function(b) {
                    a(b.currentTarget).removeClass("ui-state-hover")
                }
            })
        },
        _focusable: function(b) {
            this.focusable = this.focusable.add(b), this._on(b, {
                focusin: function(b) {
                    a(b.currentTarget).addClass("ui-state-focus")
                },
                focusout: function(b) {
                    a(b.currentTarget).removeClass("ui-state-focus")
                }
            })
        },
        _trigger: function(b, c, d) {
            var e, f, g = this.options[b];
            if (d = d || {}, c = a.Event(c), c.type = (b === this.widgetEventPrefix ? b : this.widgetEventPrefix + b).toLowerCase(), c.target = this.element[0], f = c.originalEvent)
                for (e in f) e in c || (c[e] = f[e]);
            return this.element.trigger(c, d), !(a.isFunction(g) && !1 === g.apply(this.element[0], [c].concat(d)) || c.isDefaultPrevented())
        }
    }, a.each({
        show: "fadeIn",
        hide: "fadeOut"
    }, function(b, c) {
        a.Widget.prototype["_" + b] = function(d, e, f) {
            "string" == typeof e && (e = {
                effect: e
            });
            var g, h = e ? !0 === e || "number" == typeof e ? c : e.effect || c : b;
            e = e || {}, "number" == typeof e && (e = {
                duration: e
            }), g = !a.isEmptyObject(e), e.complete = f, e.delay && d.delay(e.delay), g && a.effects && a.effects.effect[h] ? d[b](e) : h !== b && d[h] ? d[h](e.duration, e.easing, f) : d.queue(function(c) {
                a(this)[b](), f && f.call(d[0]), c()
            })
        }
    }), a.widget
}),
function(a) {
    "function" == typeof define && define.amd ? define(["jquery", "./widget"], a) : a(jQuery)
}(function(a) {
    var b = !1;
    return a(document).mouseup(function() {
        b = !1
    }), a.widget("ui.mouse", {
        version: "1.11.2",
        options: {
            cancel: "input,textarea,button,select,option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var b = this;
            this.element.bind("mousedown." + this.widgetName, function(a) {
                return b._mouseDown(a)
            }).bind("click." + this.widgetName, function(c) {
                return !0 === a.data(c.target, b.widgetName + ".preventClickEvent") ? (a.removeData(c.target, b.widgetName + ".preventClickEvent"), c.stopImmediatePropagation(), !1) : void 0
            }), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function(c) {
            if (!b) {
                this._mouseMoved = !1, this._mouseStarted && this._mouseUp(c), this._mouseDownEvent = c;
                var d = this,
                    e = 1 === c.which,
                    f = !("string" != typeof this.options.cancel || !c.target.nodeName) && a(c.target).closest(this.options.cancel).length;
                return !(e && !f && this._mouseCapture(c)) || (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                    d.mouseDelayMet = !0
                }, this.options.delay)), this._mouseDistanceMet(c) && this._mouseDelayMet(c) && (this._mouseStarted = !1 !== this._mouseStart(c), !this._mouseStarted) ? (c.preventDefault(), !0) : (!0 === a.data(c.target, this.widgetName + ".preventClickEvent") && a.removeData(c.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(a) {
                    return d._mouseMove(a)
                }, this._mouseUpDelegate = function(a) {
                    return d._mouseUp(a)
                }, this.document.bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), c.preventDefault(), b = !0, !0))
            }
        },
        _mouseMove: function(b) {
            if (this._mouseMoved) {
                if (a.ui.ie && (!document.documentMode || 9 > document.documentMode) && !b.button) return this._mouseUp(b);
                if (!b.which) return this._mouseUp(b)
            }
            return (b.which || b.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(b), b.preventDefault()) : (this._mouseDistanceMet(b) && this._mouseDelayMet(b) && (this._mouseStarted = !1 !== this._mouseStart(this._mouseDownEvent, b),
                this._mouseStarted ? this._mouseDrag(b) : this._mouseUp(b)), !this._mouseStarted)
        },
        _mouseUp: function(c) {
            return this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, c.target === this._mouseDownEvent.target && a.data(c.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(c)), b = !1, !1
        },
        _mouseDistanceMet: function(a) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - a.pageX), Math.abs(this._mouseDownEvent.pageY - a.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function() {
            return this.mouseDelayMet
        },
        _mouseStart: function() {},
        _mouseDrag: function() {},
        _mouseStop: function() {},
        _mouseCapture: function() {
            return !0
        }
    })
}),
function(a) {
    "function" == typeof define && define.amd ? define(["jquery", "./core", "./mouse", "./widget"], a) : a(jQuery)
}(function(a) {
    return a.widget("ui.draggable", a.ui.mouse, {
        version: "1.11.2",
        widgetEventPrefix: "drag",
        options: {
            addClasses: !0,
            appendTo: "parent",
            axis: !1,
            connectToSortable: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            iframeFix: !1,
            opacity: !1,
            refreshPositions: !1,
            revert: !1,
            revertDuration: 500,
            scope: "default",
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            snap: !1,
            snapMode: "both",
            snapTolerance: 20,
            stack: !1,
            zIndex: !1,
            drag: null,
            start: null,
            stop: null
        },
        _create: function() {
            "original" === this.options.helper && this._setPositionRelative(), this.options.addClasses && this.element.addClass("ui-draggable"), this.options.disabled && this.element.addClass("ui-draggable-disabled"), this._setHandleClassName(), this._mouseInit()
        },
        _setOption: function(a, b) {
            this._super(a, b), "handle" === a && (this._removeHandleClassName(), this._setHandleClassName())
        },
        _destroy: function() {
            return (this.helper || this.element).is(".ui-draggable-dragging") ? void(this.destroyOnClear = !0) : (this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._removeHandleClassName(), void this._mouseDestroy())
        },
        _mouseCapture: function(b) {
            var c = this.options;
            return this._blurActiveElement(b), !(this.helper || c.disabled || a(b.target).closest(".ui-resizable-handle").length > 0) && (this.handle = this._getHandle(b), !!this.handle && (this._blockFrames(!0 === c.iframeFix ? "iframe" : c.iframeFix), !0))
        },
        _blockFrames: function(b) {
            this.iframeBlocks = this.document.find(b).map(function() {
                var b = a(this);
                return a("<div>").css("position", "absolute").appendTo(b.parent()).outerWidth(b.outerWidth()).outerHeight(b.outerHeight()).offset(b.offset())[0]
            })
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _blurActiveElement: function(b) {
            var c = this.document[0];
            if (this.handleElement.is(b.target)) try {
                c.activeElement && "body" !== c.activeElement.nodeName.toLowerCase() && a(c.activeElement).blur()
            } catch (a) {}
        },
        _mouseStart: function(b) {
            var c = this.options;
            return this.helper = this._createHelper(b), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), a.ui.ddmanager && (a.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(!0), this.offsetParent = this.helper.offsetParent(), this.hasFixedAncestor = this.helper.parents().filter(function() {
                return "fixed" === a(this).css("position")
            }).length > 0, this.positionAbs = this.element.offset(), this._refreshOffsets(b), this.originalPosition = this.position = this._generatePosition(b, !1), this.originalPageX = b.pageX, this.originalPageY = b.pageY, c.cursorAt && this._adjustOffsetFromHelper(c.cursorAt), this._setContainment(), !1 === this._trigger("start", b) ? (this._clear(), !1) : (this._cacheHelperProportions(), a.ui.ddmanager && !c.dropBehaviour && a.ui.ddmanager.prepareOffsets(this, b), this._normalizeRightBottom(), this._mouseDrag(b, !0), a.ui.ddmanager && a.ui.ddmanager.dragStart(this, b), !0)
        },
        _refreshOffsets: function(a) {
            this.offset = {
                top: this.positionAbs.top - this.margins.top,
                left: this.positionAbs.left - this.margins.left,
                scroll: !1,
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }, this.offset.click = {
                left: a.pageX - this.offset.left,
                top: a.pageY - this.offset.top
            }
        },
        _mouseDrag: function(b, c) {
            if (this.hasFixedAncestor && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(b, !0), this.positionAbs = this._convertPositionTo("absolute"), !c) {
                var d = this._uiHash();
                if (!1 === this._trigger("drag", b, d)) return this._mouseUp({}), !1;
                this.position = d.position
            }
            return this.helper[0].style.left = this.position.left + "px", this.helper[0].style.top = this.position.top + "px", a.ui.ddmanager && a.ui.ddmanager.drag(this, b), !1
        },
        _mouseStop: function(b) {
            var c = this,
                d = !1;
            return a.ui.ddmanager && !this.options.dropBehaviour && (d = a.ui.ddmanager.drop(this, b)), this.dropped && (d = this.dropped, this.dropped = !1), "invalid" === this.options.revert && !d || "valid" === this.options.revert && d || !0 === this.options.revert || a.isFunction(this.options.revert) && this.options.revert.call(this.element, d) ? a(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function() {
                !1 !== c._trigger("stop", b) && c._clear()
            }) : !1 !== this._trigger("stop", b) && this._clear(), !1
        },
        _mouseUp: function(b) {
            return this._unblockFrames(), a.ui.ddmanager && a.ui.ddmanager.dragStop(this, b), this.handleElement.is(b.target) && this.element.focus(), a.ui.mouse.prototype._mouseUp.call(this, b)
        },
        cancel: function() {
            return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
        },
        _getHandle: function(b) {
            return !this.options.handle || !!a(b.target).closest(this.element.find(this.options.handle)).length
        },
        _setHandleClassName: function() {
            this.handleElement = this.options.handle ? this.element.find(this.options.handle) : this.element, this.handleElement.addClass("ui-draggable-handle")
        },
        _removeHandleClassName: function() {
            this.handleElement.removeClass("ui-draggable-handle")
        },
        _createHelper: function(b) {
            var c = this.options,
                d = a.isFunction(c.helper),
                e = d ? a(c.helper.apply(this.element[0], [b])) : "clone" === c.helper ? this.element.clone().removeAttr("id") : this.element;
            return e.parents("body").length || e.appendTo("parent" === c.appendTo ? this.element[0].parentNode : c.appendTo), d && e[0] === this.element[0] && this._setPositionRelative(), e[0] === this.element[0] || /(fixed|absolute)/.test(e.css("position")) || e.css("position", "absolute"), e
        },
        _setPositionRelative: function() {
            /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative")
        },
        _adjustOffsetFromHelper: function(b) {
            "string" == typeof b && (b = b.split(" ")), a.isArray(b) && (b = {
                left: +b[0],
                top: +b[1] || 0
            }), "left" in b && (this.offset.click.left = b.left + this.margins.left), "right" in b && (this.offset.click.left = this.helperProportions.width - b.right + this.margins.left), "top" in b && (this.offset.click.top = b.top + this.margins.top), "bottom" in b && (this.offset.click.top = this.helperProportions.height - b.bottom + this.margins.top)
        },
        _isRootNode: function(a) {
            return /(html|body)/i.test(a.tagName) || a === this.document[0]
        },
        _getParentOffset: function() {
            var b = this.offsetParent.offset(),
                c = this.document[0];
            return "absolute" === this.cssPosition && this.scrollParent[0] !== c && a.contains(this.scrollParent[0], this.offsetParent[0]) && (b.left += this.scrollParent.scrollLeft(), b.top += this.scrollParent.scrollTop()), this._isRootNode(this.offsetParent[0]) && (b = {
                top: 0,
                left: 0
            }), {
                top: b.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: b.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" !== this.cssPosition) return {
                top: 0,
                left: 0
            };
            var a = this.element.position(),
                b = this._isRootNode(this.scrollParent[0]);
            return {
                top: a.top - (parseInt(this.helper.css("top"), 10) || 0) + (b ? 0 : this.scrollParent.scrollTop()),
                left: a.left - (parseInt(this.helper.css("left"), 10) || 0) + (b ? 0 : this.scrollParent.scrollLeft())
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.element.css("marginLeft"), 10) || 0,
                top: parseInt(this.element.css("marginTop"), 10) || 0,
                right: parseInt(this.element.css("marginRight"), 10) || 0,
                bottom: parseInt(this.element.css("marginBottom"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var b, c, d, e = this.options,
                f = this.document[0];
            return this.relativeContainer = null, e.containment ? "window" === e.containment ? void(this.containment = [a(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, a(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, a(window).scrollLeft() + a(window).width() - this.helperProportions.width - this.margins.left, a(window).scrollTop() + (a(window).height() || f.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]) : "document" === e.containment ? void(this.containment = [0, 0, a(f).width() - this.helperProportions.width - this.margins.left, (a(f).height() || f.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]) : e.containment.constructor === Array ? void(this.containment = e.containment) : ("parent" === e.containment && (e.containment = this.helper[0].parentNode), c = a(e.containment), void((d = c[0]) && (b = /(scroll|auto)/.test(c.css("overflow")), this.containment = [(parseInt(c.css("borderLeftWidth"), 10) || 0) + (parseInt(c.css("paddingLeft"), 10) || 0), (parseInt(c.css("borderTopWidth"), 10) || 0) + (parseInt(c.css("paddingTop"), 10) || 0), (b ? Math.max(d.scrollWidth, d.offsetWidth) : d.offsetWidth) - (parseInt(c.css("borderRightWidth"), 10) || 0) - (parseInt(c.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (b ? Math.max(d.scrollHeight, d.offsetHeight) : d.offsetHeight) - (parseInt(c.css("borderBottomWidth"), 10) || 0) - (parseInt(c.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relativeContainer = c))) : void(this.containment = null)
        },
        _convertPositionTo: function(a, b) {
            b || (b = this.position);
            var c = "absolute" === a ? 1 : -1,
                d = this._isRootNode(this.scrollParent[0]);
            return {
                top: b.top + this.offset.relative.top * c + this.offset.parent.top * c - ("fixed" === this.cssPosition ? -this.offset.scroll.top : d ? 0 : this.offset.scroll.top) * c,
                left: b.left + this.offset.relative.left * c + this.offset.parent.left * c - ("fixed" === this.cssPosition ? -this.offset.scroll.left : d ? 0 : this.offset.scroll.left) * c
            }
        },
        _generatePosition: function(a, b) {
            var c, d, e, f, g = this.options,
                h = this._isRootNode(this.scrollParent[0]),
                i = a.pageX,
                j = a.pageY;
            return h && this.offset.scroll || (this.offset.scroll = {
                top: this.scrollParent.scrollTop(),
                left: this.scrollParent.scrollLeft()
            }), b && (this.containment && (this.relativeContainer ? (d = this.relativeContainer.offset(), c = [this.containment[0] + d.left, this.containment[1] + d.top, this.containment[2] + d.left, this.containment[3] + d.top]) : c = this.containment, a.pageX - this.offset.click.left < c[0] && (i = c[0] + this.offset.click.left), a.pageY - this.offset.click.top < c[1] && (j = c[1] + this.offset.click.top), a.pageX - this.offset.click.left > c[2] && (i = c[2] + this.offset.click.left), a.pageY - this.offset.click.top > c[3] && (j = c[3] + this.offset.click.top)), g.grid && (e = g.grid[1] ? this.originalPageY + Math.round((j - this.originalPageY) / g.grid[1]) * g.grid[1] : this.originalPageY, j = c ? e - this.offset.click.top >= c[1] || e - this.offset.click.top > c[3] ? e : e - this.offset.click.top >= c[1] ? e - g.grid[1] : e + g.grid[1] : e, f = g.grid[0] ? this.originalPageX + Math.round((i - this.originalPageX) / g.grid[0]) * g.grid[0] : this.originalPageX, i = c ? f - this.offset.click.left >= c[0] || f - this.offset.click.left > c[2] ? f : f - this.offset.click.left >= c[0] ? f - g.grid[0] : f + g.grid[0] : f), "y" === g.axis && (i = this.originalPageX), "x" === g.axis && (j = this.originalPageY)), {
                top: j - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.offset.scroll.top : h ? 0 : this.offset.scroll.top),
                left: i - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.offset.scroll.left : h ? 0 : this.offset.scroll.left)
            }
        },
        _clear: function() {
            this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1, this.destroyOnClear && this.destroy()
        },
        _normalizeRightBottom: function() {
            "y" !== this.options.axis && "auto" !== this.helper.css("right") && (this.helper.width(this.helper.width()), this.helper.css("right", "auto")), "x" !== this.options.axis && "auto" !== this.helper.css("bottom") && (this.helper.height(this.helper.height()), this.helper.css("bottom", "auto"))
        },
        _trigger: function(b, c, d) {
            return d = d || this._uiHash(), a.ui.plugin.call(this, b, [c, d, this], !0), /^(drag|start|stop)/.test(b) && (this.positionAbs = this._convertPositionTo("absolute"), d.offset = this.positionAbs), a.Widget.prototype._trigger.call(this, b, c, d)
        },
        plugins: {},
        _uiHash: function() {
            return {
                helper: this.helper,
                position: this.position,
                originalPosition: this.originalPosition,
                offset: this.positionAbs
            }
        }
    }), a.ui.plugin.add("draggable", "connectToSortable", {
        start: function(b, c, d) {
            var e = a.extend({}, c, {
                item: d.element
            });
            d.sortables = [], a(d.options.connectToSortable).each(function() {
                var c = a(this).sortable("instance");
                c && !c.options.disabled && (d.sortables.push(c), c.refreshPositions(), c._trigger("activate", b, e))
            })
        },
        stop: function(b, c, d) {
            var e = a.extend({}, c, {
                item: d.element
            });
            d.cancelHelperRemoval = !1, a.each(d.sortables, function() {
                var a = this;
                a.isOver ? (a.isOver = 0, d.cancelHelperRemoval = !0, a.cancelHelperRemoval = !1, a._storedCSS = {
                    position: a.placeholder.css("position"),
                    top: a.placeholder.css("top"),
                    left: a.placeholder.css("left")
                }, a._mouseStop(b), a.options.helper = a.options._helper) : (a.cancelHelperRemoval = !0, a._trigger("deactivate", b, e))
            })
        },
        drag: function(b, c, d) {
            a.each(d.sortables, function() {
                var e = !1,
                    f = this;
                f.positionAbs = d.positionAbs, f.helperProportions = d.helperProportions, f.offset.click = d.offset.click, f._intersectsWith(f.containerCache) && (e = !0, a.each(d.sortables, function() {
                    return this.positionAbs = d.positionAbs, this.helperProportions = d.helperProportions, this.offset.click = d.offset.click, this !== f && this._intersectsWith(this.containerCache) && a.contains(f.element[0], this.element[0]) && (e = !1), e
                })), e ? (f.isOver || (f.isOver = 1, f.currentItem = c.helper.appendTo(f.element).data("ui-sortable-item", !0), f.options._helper = f.options.helper, f.options.helper = function() {
                    return c.helper[0]
                }, b.target = f.currentItem[0], f._mouseCapture(b, !0), f._mouseStart(b, !0, !0), f.offset.click.top = d.offset.click.top, f.offset.click.left = d.offset.click.left, f.offset.parent.left -= d.offset.parent.left - f.offset.parent.left, f.offset.parent.top -= d.offset.parent.top - f.offset.parent.top, d._trigger("toSortable", b), d.dropped = f.element, a.each(d.sortables, function() {
                    this.refreshPositions()
                }), d.currentItem = d.element, f.fromOutside = d), f.currentItem && (f._mouseDrag(b), c.position = f.position)) : f.isOver && (f.isOver = 0, f.cancelHelperRemoval = !0, f.options._revert = f.options.revert, f.options.revert = !1, f._trigger("out", b, f._uiHash(f)), f._mouseStop(b, !0), f.options.revert = f.options._revert, f.options.helper = f.options._helper, f.placeholder && f.placeholder.remove(), d._refreshOffsets(b), c.position = d._generatePosition(b, !0), d._trigger("fromSortable", b), d.dropped = !1, a.each(d.sortables, function() {
                    this.refreshPositions()
                }))
            })
        }
    }), a.ui.plugin.add("draggable", "cursor", {
        start: function(b, c, d) {
            var e = a("body"),
                f = d.options;
            e.css("cursor") && (f._cursor = e.css("cursor")), e.css("cursor", f.cursor)
        },
        stop: function(b, c, d) {
            var e = d.options;
            e._cursor && a("body").css("cursor", e._cursor)
        }
    }), a.ui.plugin.add("draggable", "opacity", {
        start: function(b, c, d) {
            var e = a(c.helper),
                f = d.options;
            e.css("opacity") && (f._opacity = e.css("opacity")), e.css("opacity", f.opacity)
        },
        stop: function(b, c, d) {
            var e = d.options;
            e._opacity && a(c.helper).css("opacity", e._opacity)
        }
    }), a.ui.plugin.add("draggable", "scroll", {
        start: function(a, b, c) {
            c.scrollParentNotHidden || (c.scrollParentNotHidden = c.helper.scrollParent(!1)), c.scrollParentNotHidden[0] !== c.document[0] && "HTML" !== c.scrollParentNotHidden[0].tagName && (c.overflowOffset = c.scrollParentNotHidden.offset())
        },
        drag: function(b, c, d) {
            var e = d.options,
                f = !1,
                g = d.scrollParentNotHidden[0],
                h = d.document[0];
            g !== h && "HTML" !== g.tagName ? (e.axis && "x" === e.axis || (d.overflowOffset.top + g.offsetHeight - b.pageY < e.scrollSensitivity ? g.scrollTop = f = g.scrollTop + e.scrollSpeed : b.pageY - d.overflowOffset.top < e.scrollSensitivity && (g.scrollTop = f = g.scrollTop - e.scrollSpeed)), e.axis && "y" === e.axis || (d.overflowOffset.left + g.offsetWidth - b.pageX < e.scrollSensitivity ? g.scrollLeft = f = g.scrollLeft + e.scrollSpeed : b.pageX - d.overflowOffset.left < e.scrollSensitivity && (g.scrollLeft = f = g.scrollLeft - e.scrollSpeed))) : (e.axis && "x" === e.axis || (b.pageY - a(h).scrollTop() < e.scrollSensitivity ? f = a(h).scrollTop(a(h).scrollTop() - e.scrollSpeed) : a(window).height() - (b.pageY - a(h).scrollTop()) < e.scrollSensitivity && (f = a(h).scrollTop(a(h).scrollTop() + e.scrollSpeed))), e.axis && "y" === e.axis || (b.pageX - a(h).scrollLeft() < e.scrollSensitivity ? f = a(h).scrollLeft(a(h).scrollLeft() - e.scrollSpeed) : a(window).width() - (b.pageX - a(h).scrollLeft()) < e.scrollSensitivity && (f = a(h).scrollLeft(a(h).scrollLeft() + e.scrollSpeed)))), !1 !== f && a.ui.ddmanager && !e.dropBehaviour && a.ui.ddmanager.prepareOffsets(d, b)
        }
    }), a.ui.plugin.add("draggable", "snap", {
        start: function(b, c, d) {
            var e = d.options;
            d.snapElements = [], a(e.snap.constructor !== String ? e.snap.items || ":data(ui-draggable)" : e.snap).each(function() {
                var b = a(this),
                    c = b.offset();
                this !== d.element[0] && d.snapElements.push({
                    item: this,
                    width: b.outerWidth(),
                    height: b.outerHeight(),
                    top: c.top,
                    left: c.left
                })
            })
        },
        drag: function(b, c, d) {
            var e, f, g, h, i, j, k, l, m, n, o = d.options,
                p = o.snapTolerance,
                q = c.offset.left,
                r = q + d.helperProportions.width,
                s = c.offset.top,
                t = s + d.helperProportions.height;
            for (m = d.snapElements.length - 1; m >= 0; m--) i = d.snapElements[m].left - d.margins.left, j = i + d.snapElements[m].width, k = d.snapElements[m].top - d.margins.top, l = k + d.snapElements[m].height, i - p > r || q > j + p || k - p > t || s > l + p || !a.contains(d.snapElements[m].item.ownerDocument, d.snapElements[m].item) ? (d.snapElements[m].snapping && d.options.snap.release && d.options.snap.release.call(d.element, b, a.extend(d._uiHash(), {
                snapItem: d.snapElements[m].item
            })), d.snapElements[m].snapping = !1) : ("inner" !== o.snapMode && (e = p >= Math.abs(k - t), f = p >= Math.abs(l - s), g = p >= Math.abs(i - r), h = p >= Math.abs(j - q), e && (c.position.top = d._convertPositionTo("relative", {
                top: k - d.helperProportions.height,
                left: 0
            }).top), f && (c.position.top = d._convertPositionTo("relative", {
                top: l,
                left: 0
            }).top), g && (c.position.left = d._convertPositionTo("relative", {
                top: 0,
                left: i - d.helperProportions.width
            }).left), h && (c.position.left = d._convertPositionTo("relative", {
                top: 0,
                left: j
            }).left)), n = e || f || g || h, "outer" !== o.snapMode && (e = p >= Math.abs(k - s), f = p >= Math.abs(l - t), g = p >= Math.abs(i - q), h = p >= Math.abs(j - r), e && (c.position.top = d._convertPositionTo("relative", {
                top: k,
                left: 0
            }).top), f && (c.position.top = d._convertPositionTo("relative", {
                top: l - d.helperProportions.height,
                left: 0
            }).top), g && (c.position.left = d._convertPositionTo("relative", {
                top: 0,
                left: i
            }).left), h && (c.position.left = d._convertPositionTo("relative", {
                top: 0,
                left: j - d.helperProportions.width
            }).left)), !d.snapElements[m].snapping && (e || f || g || h || n) && d.options.snap.snap && d.options.snap.snap.call(d.element, b, a.extend(d._uiHash(), {
                snapItem: d.snapElements[m].item
            })), d.snapElements[m].snapping = e || f || g || h || n)
        }
    }), a.ui.plugin.add("draggable", "stack", {
        start: function(b, c, d) {
            var e, f = d.options,
                g = a.makeArray(a(f.stack)).sort(function(b, c) {
                    return (parseInt(a(b).css("zIndex"), 10) || 0) - (parseInt(a(c).css("zIndex"), 10) || 0)
                });
            g.length && (e = parseInt(a(g[0]).css("zIndex"), 10) || 0, a(g).each(function(b) {
                a(this).css("zIndex", e + b)
            }), this.css("zIndex", e + g.length))
        }
    }), a.ui.plugin.add("draggable", "zIndex", {
        start: function(b, c, d) {
            var e = a(c.helper),
                f = d.options;
            e.css("zIndex") && (f._zIndex = e.css("zIndex")), e.css("zIndex", f.zIndex)
        },
        stop: function(b, c, d) {
            var e = d.options;
            e._zIndex && a(c.helper).css("zIndex", e._zIndex)
        }
    }), a.ui.draggable
}),
function(a, b) {
    if ("object" == typeof exports && "object" == typeof module) module.exports = b(require("jquery"), require("moment"));
    else if ("function" == typeof define && define.amd) define(["jquery", "moment"], b);
    else {
        var c = "object" == typeof exports ? b(require("jquery"), require("moment")) : b(a.jQuery, a.moment);
        for (var d in c)("object" == typeof exports ? exports : a)[d] = c[d]
    }
}(this, function(a, b) {
    return function(a) {
        function b(d) {
            if (c[d]) return c[d].exports;
            var e = c[d] = {
                i: d,
                l: !1,
                exports: {}
            };
            return a[d].call(e.exports, e, e.exports, b), e.l = !0, e.exports
        }
        var c = {};
        return b.m = a, b.c = c, b.d = function(a, c, d) {
            b.o(a, c) || Object.defineProperty(a, c, {
                configurable: !1,
                enumerable: !0,
                get: d
            })
        }, b.n = function(a) {
            var c = a && a.__esModule ? function() {
                return a.default
            } : function() {
                return a
            };
            return b.d(c, "a", c), c
        }, b.o = function(a, b) {
            return Object.prototype.hasOwnProperty.call(a, b)
        }, b.p = "", b(b.s = 72)
    }([function(a, b) {
        var c = function(a, b) {
            for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c])
        };
        b.__extends = function(a, b) {
            function d() {
                this.constructor = a
            }
            c(a, b), a.prototype = null === b ? Object.create(b) : (d.prototype = b.prototype, new d)
        }
    }, function(b, c) {
        b.exports = a
    }, function(a, b, c) {
        function d(a, b) {
            b.left && a.css({
                "border-left-width": 1,
                "margin-left": b.left - 1
            }), b.right && a.css({
                "border-right-width": 1,
                "margin-right": b.right - 1
            })
        }

        function e(a) {
            a.css({
                "margin-left": "",
                "margin-right": "",
                "border-left-width": "",
                "border-right-width": ""
            })
        }

        function f() {
            na("body").addClass("fc-not-allowed")
        }

        function g() {
            na("body").removeClass("fc-not-allowed")
        }

        function h(a, b, c) {
            var d = Math.floor(b / a.length),
                e = Math.floor(b - d * (a.length - 1)),
                f = [],
                g = [],
                h = [],
                j = 0;
            i(a), a.each(function(b, c) {
                var i = b === a.length - 1 ? e : d,
                    k = na(c).outerHeight(!0);
                k < i ? (f.push(c), g.push(k), h.push(na(c).height())) : j += k
            }), c && (b -= j, d = Math.floor(b / f.length), e = Math.floor(b - d * (f.length - 1))), na(f).each(function(a, b) {
                var c = a === f.length - 1 ? e : d,
                    i = g[a],
                    j = h[a],
                    k = c - (i - j);
                i < c && na(b).height(k)
            })
        }

        function i(a) {
            a.height("")
        }

        function j(a) {
            var b = 0;
            return a.find("> *").each(function(a, c) {
                var d = na(c).outerWidth();
                d > b && (b = d)
            }), b++, a.width(b), b
        }

        function k(a, b) {
            var c, d = a.add(b);
            return d.css({
                position: "relative",
                left: -1
            }), c = a.outerHeight() - b.outerHeight(), d.css({
                position: "",
                left: ""
            }), c
        }

        function l(a) {
            var b = a.css("position"),
                c = a.parents().filter(function() {
                    var a = na(this);
                    return /(auto|scroll)/.test(a.css("overflow") + a.css("overflow-y") + a.css("overflow-x"))
                }).eq(0);
            return "fixed" !== b && c.length ? c : na(a[0].ownerDocument || document)
        }

        function m(a, b) {
            var c = a.offset(),
                d = c.left - (b ? b.left : 0),
                e = c.top - (b ? b.top : 0);
            return {
                left: d,
                right: d + a.outerWidth(),
                top: e,
                bottom: e + a.outerHeight()
            }
        }

        function n(a, b) {
            var c = a.offset(),
                d = p(a),
                e = c.left + t(a, "border-left-width") + d.left - (b ? b.left : 0),
                f = c.top + t(a, "border-top-width") + d.top - (b ? b.top : 0);
            return {
                left: e,
                right: e + a[0].clientWidth,
                top: f,
                bottom: f + a[0].clientHeight
            }
        }

        function o(a, b) {
            var c = a.offset(),
                d = c.left + t(a, "border-left-width") + t(a, "padding-left") - (b ? b.left : 0),
                e = c.top + t(a, "border-top-width") + t(a, "padding-top") - (b ? b.top : 0);
            return {
                left: d,
                right: d + a.width(),
                top: e,
                bottom: e + a.height()
            }
        }

        function p(a) {
            var b, c = a[0].offsetWidth - a[0].clientWidth,
                d = a[0].offsetHeight - a[0].clientHeight;
            return c = q(c), d = q(d), b = {
                left: 0,
                right: 0,
                top: 0,
                bottom: d
            }, r() && "rtl" == a.css("direction") ? b.left = c : b.right = c, b
        }

        function q(a) {
            return a = Math.max(0, a), a = Math.round(a)
        }

        function r() {
            return null === oa && (oa = s()), oa
        }

        function s() {
            var a = na("<div><div/></div>").css({
                    position: "absolute",
                    top: -1e3,
                    left: 0,
                    border: 0,
                    padding: 0,
                    overflow: "scroll",
                    direction: "rtl"
                }).appendTo("body"),
                b = a.children(),
                c = b.offset().left > a.offset().left;
            return a.remove(), c
        }

        function t(a, b) {
            return parseFloat(a.css(b)) || 0
        }

        function u(a) {
            return 1 == a.which && !a.ctrlKey
        }

        function v(a) {
            var b = a.originalEvent.touches;
            return b && b.length ? b[0].pageX : a.pageX
        }

        function w(a) {
            var b = a.originalEvent.touches;
            return b && b.length ? b[0].pageY : a.pageY
        }

        function x(a) {
            return /^touch/.test(a.type)
        }

        function y(a) {
            a.addClass("fc-unselectable").on("selectstart", A)
        }

        function z(a) {
            a.removeClass("fc-unselectable").off("selectstart", A)
        }

        function A(a) {
            a.preventDefault()
        }

        function B(a, b) {
            var c = {
                left: Math.max(a.left, b.left),
                right: Math.min(a.right, b.right),
                top: Math.max(a.top, b.top),
                bottom: Math.min(a.bottom, b.bottom)
            };
            return c.left < c.right && c.top < c.bottom && c
        }

        function C(a, b) {
            return {
                left: Math.min(Math.max(a.left, b.left), b.right),
                top: Math.min(Math.max(a.top, b.top), b.bottom)
            }
        }

        function D(a) {
            return {
                left: (a.left + a.right) / 2,
                top: (a.top + a.bottom) / 2
            }
        }

        function E(a, b) {
            return {
                left: a.left - b.left,
                top: a.top - b.top
            }
        }

        function F(a) {
            var b, c, d = [],
                e = [];
            for ("string" == typeof a ? e = a.split(/\s*,\s*/) : "function" == typeof a ? e = [a] : na.isArray(a) && (e = a), b = 0; b < e.length; b++) c = e[b], "string" == typeof c ? d.push("-" == c.charAt(0) ? {
                field: c.substring(1),
                order: -1
            } : {
                field: c,
                order: 1
            }) : "function" == typeof c && d.push({
                func: c
            });
            return d
        }

        function G(a, b, c) {
            var d, e;
            for (d = 0; d < c.length; d++)
                if (e = H(a, b, c[d])) return e;
            return 0
        }

        function H(a, b, c) {
            return c.func ? c.func(a, b) : I(a[c.field], b[c.field]) * (c.order || 1)
        }

        function I(a, b) {
            return a || b ? null == b ? -1 : null == a ? 1 : "string" === na.type(a) || "string" === na.type(b) ? String(a).localeCompare(String(b)) : a - b : 0
        }

        function J(a, b) {
            return ma.duration({
                days: a.clone().stripTime().diff(b.clone().stripTime(), "days"),
                ms: a.time() - b.time()
            })
        }

        function K(a, b) {
            return ma.duration({
                days: a.clone().stripTime().diff(b.clone().stripTime(), "days")
            })
        }

        function L(a, b, c) {
            return ma.duration(Math.round(a.diff(b, c, !0)), c)
        }

        function M(a, c) {
            var d, e, f;
            for (d = 0; d < b.unitsDesc.length && (e = b.unitsDesc[d], !((f = O(e, a, c)) >= 1 && ja(f))); d++);
            return e
        }

        function N(a, b) {
            var c = M(a);
            return "week" === c && "object" == typeof b && b.days && (c = "day"), c
        }

        function O(a, b, c) {
            return null != c ? c.diff(b, a, !0) : ma.isDuration(b) ? b.as(a) : b.end.diff(b.start, a, !0)
        }

        function P(a, b, c) {
            var d;
            return S(c) ? (b - a) / c : (d = c.asMonths(), Math.abs(d) >= 1 && ja(d) ? b.diff(a, "months", !0) / d : b.diff(a, "days", !0) / c.asDays())
        }

        function Q(a, b) {
            var c, d;
            return S(a) || S(b) ? a / b : (c = a.asMonths(), d = b.asMonths(), Math.abs(c) >= 1 && ja(c) && Math.abs(d) >= 1 && ja(d) ? c / d : a.asDays() / b.asDays())
        }

        function R(a, b) {
            var c;
            return S(a) ? ma.duration(a * b) : (c = a.asMonths(), Math.abs(c) >= 1 && ja(c) ? ma.duration({
                months: c * b
            }) : ma.duration({
                days: a.asDays() * b
            }))
        }

        function S(a) {
            return Boolean(a.hours() || a.minutes() || a.seconds() || a.milliseconds())
        }

        function T(a) {
            return "[object Date]" === Object.prototype.toString.call(a) || a instanceof Date
        }

        function U(a) {
            return "string" == typeof a && /^\d+\:\d+(?:\:\d+\.?(?:\d{3})?)?$/.test(a)
        }

        function V() {
            for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
            var c = window.console;
            if (c && c.log) return c.log.apply(c, a)
        }

        function W() {
            for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
            var c = window.console;
            return c && c.warn ? c.warn.apply(c, a) : V.apply(null, a)
        }

        function X(a, b) {
            var c, d, e, f, g, h, i = {};
            if (b)
                for (c = 0; c < b.length; c++) {
                    for (d = b[c], e = [], f = a.length - 1; f >= 0; f--)
                        if ("object" == typeof(g = a[f][d])) e.unshift(g);
                        else if (void 0 !== g) {
                        i[d] = g;
                        break
                    }
                    e.length && (i[d] = X(e))
                }
            for (c = a.length - 1; c >= 0; c--) {
                h = a[c];
                for (d in h) d in i || (i[d] = h[d])
            }
            return i
        }

        function Y(a, b) {
            for (var c in a) Z(a, c) && (b[c] = a[c])
        }

        function Z(a, b) {
            return pa.call(a, b)
        }

        function $(a, b, c) {
            if (na.isFunction(a) && (a = [a]), a) {
                var d, e;
                for (d = 0; d < a.length; d++) e = a[d].apply(b, c) || e;
                return e
            }
        }

        function _(a, b) {
            for (var c = 0, d = 0; d < a.length;) b(a[d]) ? (a.splice(d, 1), c++) : d++;
            return c
        }

        function aa(a, b) {
            for (var c = 0, d = 0; d < a.length;) a[d] === b ? (a.splice(d, 1), c++) : d++;
            return c
        }

        function ba(a, b) {
            var c, d = a.length;
            if (null == d || d !== b.length) return !1;
            for (c = 0; c < d; c++)
                if (a[c] !== b[c]) return !1;
            return !0
        }

        function ca() {
            for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
            for (var c = 0; c < a.length; c++)
                if (void 0 !== a[c]) return a[c]
        }

        function da(a) {
            return (a + "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#039;").replace(/"/g, "&quot;").replace(/\n/g, "<br />")
        }

        function ea(a) {
            return a.replace(/&.*?;/g, "")
        }

        function fa(a) {
            var b = [];
            return na.each(a, function(a, c) {
                null != c && b.push(a + ":" + c)
            }), b.join(";")
        }

        function ga(a) {
            var b = [];
            return na.each(a, function(a, c) {
                null != c && b.push(a + '="' + da(c) + '"')
            }), b.join(" ")
        }

        function ha(a) {
            return a.charAt(0).toUpperCase() + a.slice(1)
        }

        function ia(a, b) {
            return a - b
        }

        function ja(a) {
            return a % 1 == 0
        }

        function ka(a, b) {
            var c = a[b];
            return function() {
                return c.apply(a, arguments)
            }
        }

        function la(a, b, c) {
            void 0 === c && (c = !1);
            var d, e, f, g, h, i = function() {
                var j = +new Date - g;
                j < b ? d = setTimeout(i, b - j) : (d = null, c || (h = a.apply(f, e), f = e = null))
            };
            return function() {
                f = this, e = arguments, g = +new Date;
                var j = c && !d;
                return d || (d = setTimeout(i, b)), j && (h = a.apply(f, e), f = e = null), h
            }
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var ma = c(3),
            na = c(1);
        b.compensateScroll = d, b.uncompensateScroll = e, b.disableCursor = f, b.enableCursor = g, b.distributeHeight = h, b.undistributeHeight = i, b.matchCellWidths = j, b.subtractInnerElHeight = k, b.getScrollParent = l, b.getOuterRect = m, b.getClientRect = n, b.getContentRect = o, b.getScrollbarWidths = p;
        var oa = null;
        b.isPrimaryMouseButton = u, b.getEvX = v, b.getEvY = w, b.getEvIsTouch = x, b.preventSelection = y, b.allowSelection = z, b.preventDefault = A, b.intersectRects = B, b.constrainPoint = C, b.getRectCenter = D, b.diffPoints = E, b.parseFieldSpecs = F, b.compareByFieldSpecs = G, b.compareByFieldSpec = H, b.flexibleCompare = I, b.dayIDs = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"], b.unitsDesc = ["year", "month", "week", "day", "hour", "minute", "second", "millisecond"], b.diffDayTime = J, b.diffDay = K, b.diffByUnit = L, b.computeGreatestUnit = M, b.computeDurationGreatestUnit = N, b.divideRangeByDuration = P, b.divideDurationByDuration = Q, b.multiplyDuration = R, b.durationHasTime = S, b.isNativeDate = T, b.isTimeString = U, b.log = V, b.warn = W;
        var pa = {}.hasOwnProperty;
        b.mergeProps = X, b.copyOwnProps = Y, b.hasOwnProp = Z, b.applyAll = $, b.removeMatching = _, b.removeExact = aa, b.isArraysEqual = ba, b.firstDefined = ca, b.htmlEscape = da, b.stripHtmlEntities = ea, b.cssToStr = fa, b.attrsToStr = ga, b.capitaliseFirstLetter = ha, b.compareNumbers = ia, b.isInt = ja, b.proxy = ka, b.debounce = la
    }, function(a, c) {
        a.exports = b
    }, function(a, b, c) {
        function d(a, b) {
            return a.startMs - b.startMs
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(3),
            f = c(9),
            g = function() {
                function a(a, b) {
                    this.isStart = !0, this.isEnd = !0, e.isMoment(a) && (a = a.clone().stripZone()), e.isMoment(b) && (b = b.clone().stripZone()), a && (this.startMs = a.valueOf()), b && (this.endMs = b.valueOf())
                }
                return a.prototype.intersect = function(b) {
                    var c = this.startMs,
                        d = this.endMs,
                        e = null;
                    return null != b.startMs && (c = null == c ? b.startMs : Math.max(c, b.startMs)), null != b.endMs && (d = null == d ? b.endMs : Math.min(d, b.endMs)), (null == c || null == d || c < d) && (e = new a(c, d), e.isStart = this.isStart && c === this.startMs, e.isEnd = this.isEnd && d === this.endMs), e
                }, a.prototype.intersectsWith = function(a) {
                    return (null == this.endMs || null == a.startMs || this.endMs > a.startMs) && (null == this.startMs || null == a.endMs || this.startMs < a.endMs)
                }, a.prototype.containsRange = function(a) {
                    return (null == this.startMs || null != a.startMs && a.startMs >= this.startMs) && (null == this.endMs || null != a.endMs && a.endMs <= this.endMs)
                }, a.prototype.containsDate = function(a) {
                    var b = a.valueOf();
                    return (null == this.startMs || b >= this.startMs) && (null == this.endMs || b < this.endMs)
                }, a.prototype.constrainDate = function(a) {
                    var b = a.valueOf();
                    return null != this.startMs && b < this.startMs && (b = this.startMs), null != this.endMs && b >= this.endMs && (b = this.endMs - 1), b
                }, a.prototype.equals = function(a) {
                    return this.startMs === a.startMs && this.endMs === a.endMs
                }, a.prototype.clone = function() {
                    var b = new a(this.startMs, this.endMs);
                    return b.isStart = this.isStart, b.isEnd = this.isEnd, b
                }, a.prototype.getStart = function() {
                    return null != this.startMs ? f.default.utc(this.startMs).stripZone() : null
                }, a.prototype.getEnd = function() {
                    return null != this.endMs ? f.default.utc(this.endMs).stripZone() : null
                }, a.prototype.as = function(a) {
                    return e.utc(this.endMs).diff(e.utc(this.startMs), a, !0)
                }, a.invertRanges = function(b, c) {
                    var e, f, g = [],
                        h = c.startMs;
                    for (b.sort(d), e = 0; e < b.length; e++) f = b[e], f.startMs > h && g.push(new a(h, f.startMs)), f.endMs > h && (h = f.endMs);
                    return h < c.endMs && g.push(new a(h, c.endMs)), g
                }, a
            }();
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(50),
            g = c(21),
            h = c(33),
            i = function(a) {
                function b(c) {
                    var d = a.call(this) || this;
                    return d.calendar = c, d.className = [], d.uid = String(b.uuid++), d
                }
                return d.__extends(b, a), b.prototype.fetch = function(a, b, c) {}, b.prototype.removeEventDefsById = function(a) {}, b.prototype.removeAllEventDefs = function() {}, b.prototype.getPrimitive = function(a) {}, b.prototype.parseEventDefs = function(a) {
                        var b, c, d = [];
                        for (b = 0; b < a.length; b++)(c = this.parseEventDef(a[b])) && d.push(c);
                        return d
                    }, b.prototype.parseEventDef = function(a) {
                        var b = this.calendar.opt("eventDataTransform"),
                            c = this.eventDataTransform;
                        return b && (a = b(a)), c && (a = c(a)), h.default.parse(a, this)
                    }, b.prototype.applyManualStandardProps = function(a) {
                        return null != a.id && (this.id = b.normalizeId(a.id)), e.isArray(a.className) ? this.className = a.className : "string" == typeof a.className && (this.className = a.className.split(/\s+/)), !0
                    }, b.parse = function(a, b) {
                        var c = new this(b);
                        return !("object" != typeof a || !c.applyProps(a)) && c
                    },
                    b.normalizeId = function(a) {
                        return a ? String(a) : null
                    }, b.defineStandardProps = f.default.defineStandardProps, b.copyVerbatimStandardProps = f.default.copyVerbatimStandardProps, b.uuid = 0, b
            }(g.default);
        b.default = i, f.default.mixInto(i), i.defineStandardProps({
            id: !1,
            className: !1,
            color: !0,
            backgroundColor: !0,
            borderColor: !0,
            textColor: !0,
            editable: !0,
            startEditable: !0,
            durationEditable: !0,
            rendering: !0,
            overlap: !0,
            constraint: !0,
            allDayDefault: !0,
            eventDataTransform: !0
        })
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(12),
            g = 0,
            h = function(a) {
                function b() {
                    var b = null !== a && a.apply(this, arguments) || this;
                    return b.listenerId = null, b
                }
                return d.__extends(b, a), b.prototype.listenTo = function(a, b, c) {
                    if ("object" == typeof b)
                        for (var d in b) b.hasOwnProperty(d) && this.listenTo(a, d, b[d]);
                    else "string" == typeof b && a.on(b + "." + this.getListenerNamespace(), e.proxy(c, this))
                }, b.prototype.stopListeningTo = function(a, b) {
                    a.off((b || "") + "." + this.getListenerNamespace())
                }, b.prototype.getListenerNamespace = function() {
                    return null == this.listenerId && (this.listenerId = g++), "_listener" + this.listenerId
                }, b
            }(f.default);
        b.default = h
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        }), b.default = {
            version: "<%= version %>",
            internalApiVersion: 12,
            touchMouseIgnoreWait: 500,
            dataAttrPrefix: "",
            views: {},
            locales: {}
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(12),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.on = function(a, b) {
                    return e(this).on(a, this._prepareIntercept(b)), this
                }, b.prototype.one = function(a, b) {
                    return e(this).one(a, this._prepareIntercept(b)), this
                }, b.prototype._prepareIntercept = function(a) {
                    var b = function(b, c) {
                        return a.apply(c.context || this, c.args || [])
                    };
                    return a.guid || (a.guid = e.guid++), b.guid = a.guid, b
                }, b.prototype.off = function(a, b) {
                    return e(this).off(a, b), this
                }, b.prototype.trigger = function(a) {
                    for (var b = [], c = 1; c < arguments.length; c++) b[c - 1] = arguments[c];
                    return e(this).triggerHandler(a, {
                        args: b
                    }), this
                }, b.prototype.triggerWith = function(a, b, c) {
                    return e(this).triggerHandler(a, {
                        context: b,
                        args: c
                    }), this
                }, b.prototype.hasHandlers = function(a) {
                    var b = e._data(this, "events");
                    return b && b[a] && b[a].length > 0
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        function d(a, b) {
            return l.format.call(a, b)
        }

        function e(a, b, c) {
            void 0 === b && (b = !1), void 0 === c && (c = !1);
            var d, e, k, l, m = a[0],
                n = 1 == a.length && "string" == typeof m;
            return f.isMoment(m) || h.isNativeDate(m) || void 0 === m ? l = f.apply(null, a) : (d = !1, e = !1, n ? i.test(m) ? (m += "-01", a = [m], d = !0, e = !0) : (k = j.exec(m)) && (d = !k[5], e = !0) : g.isArray(m) && (e = !0), l = b || d ? f.utc.apply(f, a) : f.apply(null, a), d ? (l._ambigTime = !0, l._ambigZone = !0) : c && (e ? l._ambigZone = !0 : n && l.utcOffset(m))), l._fullCalendar = !0, l
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var f = c(3),
            g = c(1),
            h = c(2),
            i = /^\s*\d{4}-\d\d$/,
            j = /^\s*\d{4}-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?)?$/,
            k = f.fn;
        b.newMomentProto = k;
        var l = g.extend({}, k);
        b.oldMomentProto = l;
        var m = f.momentProperties;
        m.push("_fullCalendar"), m.push("_ambigTime"), m.push("_ambigZone"), b.oldMomentFormat = d;
        var n = function() {
            return e(arguments)
        };
        b.default = n, n.utc = function() {
            var a = e(arguments, !0);
            return a.hasTime() && a.utc(), a
        }, n.parseZone = function() {
            return e(arguments, !0, !0)
        }, k.week = k.weeks = function(a) {
            var b = this._locale._fullCalendar_weekCalc;
            return null == a && "function" == typeof b ? b(this) : "ISO" === b ? l.isoWeek.apply(this, arguments) : l.week.apply(this, arguments)
        }, k.time = function(a) {
            if (!this._fullCalendar) return l.time.apply(this, arguments);
            if (null == a) return f.duration({
                hours: this.hours(),
                minutes: this.minutes(),
                seconds: this.seconds(),
                milliseconds: this.milliseconds()
            });
            this._ambigTime = !1, f.isDuration(a) || f.isMoment(a) || (a = f.duration(a));
            var b = 0;
            return f.isDuration(a) && (b = 24 * Math.floor(a.asDays())), this.hours(b + a.hours()).minutes(a.minutes()).seconds(a.seconds()).milliseconds(a.milliseconds())
        }, k.stripTime = function() {
            return this._ambigTime || (this.utc(!0), this.set({
                hours: 0,
                minutes: 0,
                seconds: 0,
                ms: 0
            }), this._ambigTime = !0, this._ambigZone = !0), this
        }, k.hasTime = function() {
            return !this._ambigTime
        }, k.stripZone = function() {
            var a;
            return this._ambigZone || (a = this._ambigTime, this.utc(!0), this._ambigTime = a || !1, this._ambigZone = !0), this
        }, k.hasZone = function() {
            return !this._ambigZone
        }, k.local = function(a) {
            return l.local.call(this, this._ambigZone || a), this._ambigTime = !1, this._ambigZone = !1, this
        }, k.utc = function(a) {
            return l.utc.call(this, a), this._ambigTime = !1, this._ambigZone = !1, this
        }, k.utcOffset = function(a) {
            return null != a && (this._ambigTime = !1, this._ambigZone = !1), l.utcOffset.apply(this, arguments)
        }
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a, b) {
                this.isAllDay = !1, this.unzonedRange = a, this.isAllDay = b
            }
            return a.prototype.toLegacy = function(a) {
                return {
                    start: a.msToMoment(this.unzonedRange.startMs, this.isAllDay),
                    end: a.msToMoment(this.unzonedRange.endMs, this.isAllDay)
                }
            }, a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(22),
            f = c(51),
            g = c(15),
            h = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.buildInstances = function() {
                    return [this.buildInstance()]
                }, b.prototype.buildInstance = function() {
                    return new f.default(this, this.dateProfile)
                }, b.prototype.isAllDay = function() {
                    return this.dateProfile.isAllDay()
                }, b.prototype.clone = function() {
                    var b = a.prototype.clone.call(this);
                    return b.dateProfile = this.dateProfile, b
                }, b.prototype.rezone = function() {
                    var a = this.source.calendar,
                        b = this.dateProfile;
                    this.dateProfile = new g.default(a.moment(b.start), b.end ? a.moment(b.end) : null, a)
                }, b.prototype.applyManualStandardProps = function(b) {
                    var c = a.prototype.applyManualStandardProps.call(this, b),
                        d = g.default.parse(b, this.source);
                    return !!d && (this.dateProfile = d, null != b.date && (this.miscProps.date = b.date), c)
                }, b
            }(e.default);
        b.default = h, h.defineStandardProps({
            start: !1,
            date: !1,
            end: !1,
            allDay: !1
        })
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a() {}
            return a.mixInto = function(a) {
                var b = this;
                Object.getOwnPropertyNames(this.prototype).forEach(function(c) {
                    a.prototype[c] || (a.prototype[c] = b.prototype[c])
                })
            }, a.mixOver = function(a) {
                var b = this;
                Object.getOwnPropertyNames(this.prototype).forEach(function(c) {
                    a.prototype[c] = b.prototype[c]
                })
            }, a
        }();
        b.default = c
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a) {
                this.view = a._getView(), this.component = a
            }
            return a.prototype.opt = function(a) {
                return this.view.opt(a)
            }, a.prototype.end = function() {}, a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(7),
            f = c(8),
            g = c(6),
            h = null,
            i = 0,
            j = function() {
                function a() {
                    this.isTouching = !1, this.mouseIgnoreDepth = 0
                }
                return a.prototype.bind = function() {
                    var a = this;
                    this.listenTo(d(document), {
                        touchstart: this.handleTouchStart,
                        touchcancel: this.handleTouchCancel,
                        touchend: this.handleTouchEnd,
                        mousedown: this.handleMouseDown,
                        mousemove: this.handleMouseMove,
                        mouseup: this.handleMouseUp,
                        click: this.handleClick,
                        selectstart: this.handleSelectStart,
                        contextmenu: this.handleContextMenu
                    }), window.addEventListener("touchmove", this.handleTouchMoveProxy = function(b) {
                        a.handleTouchMove(d.Event(b))
                    }, {
                        passive: !1
                    }), window.addEventListener("scroll", this.handleScrollProxy = function(b) {
                        a.handleScroll(d.Event(b))
                    }, !0)
                }, a.prototype.unbind = function() {
                    this.stopListeningTo(d(document)), window.removeEventListener("touchmove", this.handleTouchMoveProxy), window.removeEventListener("scroll", this.handleScrollProxy, !0)
                }, a.prototype.handleTouchStart = function(a) {
                    this.stopTouch(a, !0), this.isTouching = !0, this.trigger("touchstart", a)
                }, a.prototype.handleTouchMove = function(a) {
                    this.isTouching && this.trigger("touchmove", a)
                }, a.prototype.handleTouchCancel = function(a) {
                    this.isTouching && (this.trigger("touchcancel", a), this.stopTouch(a))
                }, a.prototype.handleTouchEnd = function(a) {
                    this.stopTouch(a)
                }, a.prototype.handleMouseDown = function(a) {
                    this.shouldIgnoreMouse() || this.trigger("mousedown", a)
                }, a.prototype.handleMouseMove = function(a) {
                    this.shouldIgnoreMouse() || this.trigger("mousemove", a)
                }, a.prototype.handleMouseUp = function(a) {
                    this.shouldIgnoreMouse() || this.trigger("mouseup", a)
                }, a.prototype.handleClick = function(a) {
                    this.shouldIgnoreMouse() || this.trigger("click", a)
                }, a.prototype.handleSelectStart = function(a) {
                    this.trigger("selectstart", a)
                }, a.prototype.handleContextMenu = function(a) {
                    this.trigger("contextmenu", a)
                }, a.prototype.handleScroll = function(a) {
                    this.trigger("scroll", a)
                }, a.prototype.stopTouch = function(a, b) {
                    void 0 === b && (b = !1), this.isTouching && (this.isTouching = !1, this.trigger("touchend", a), b || this.startTouchMouseIgnore())
                }, a.prototype.startTouchMouseIgnore = function() {
                    var a = this,
                        b = e.default.touchMouseIgnoreWait;
                    b && (this.mouseIgnoreDepth++, setTimeout(function() {
                        a.mouseIgnoreDepth--
                    }, b))
                }, a.prototype.shouldIgnoreMouse = function() {
                    return this.isTouching || Boolean(this.mouseIgnoreDepth)
                }, a.get = function() {
                    return h || (h = new a, h.bind()), h
                }, a.needed = function() {
                    a.get(), i++
                }, a.unneeded = function() {
                    --i || (h.unbind(), h = null)
                }, a
            }();
        b.default = j, g.default.mixInto(j), f.default.mixInto(j)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(4),
            e = function() {
                function a(a, b, c) {
                    this.start = a, this.end = b || null, this.unzonedRange = this.buildUnzonedRange(c)
                }
                return a.prototype.isAllDay = function() {
                    return !(this.start.hasTime() || this.end && this.end.hasTime())
                }, a.prototype.buildUnzonedRange = function(a) {
                    var b = this.start.clone().stripZone().valueOf(),
                        c = this.getEnd(a).stripZone().valueOf();
                    return new d.default(b, c)
                }, a.prototype.getEnd = function(a) {
                    return this.end ? this.end.clone() : a.getDefaultEventEnd(this.isAllDay(), this.start)
                }, a.isStandardProp = function(a) {
                    return "start" === a || "date" === a || "end" === a || "allDay" === a
                }, a.parse = function(b, c) {
                    var d = b.start || b.date,
                        e = b.end;
                    if (!d) return !1;
                    var f = c.calendar,
                        g = f.moment(d),
                        h = e ? f.moment(e) : null,
                        i = b.allDay,
                        j = f.opt("forceEventDuration");
                    return !!g.isValid() && (!h || h.isValid() && h.isAfter(g) || (h = null), null == i && null == (i = c.allDayDefault) && (i = f.opt("allDayDefault")), !0 === i ? (g.stripTime(), h && h.stripTime()) : !1 === i && (g.hasTime() || g.time(0), h && !h.hasTime() && h.time(0)), !h && j && (h = f.getDefaultEventEnd(!g.hasTime(), g)), new a(g, h, f))
                }, a
            }();
        b.default = e
    }, function(a, b, c) {
        function d(a, b) {
            a.then = function(c) {
                return "function" == typeof c ? g.resolve(c(b)) : a
            }
        }

        function e(a) {
            a.then = function(b, c) {
                return "function" == typeof c && c(), a
            }
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var f = c(1),
            g = {
                construct: function(a) {
                    var b = f.Deferred(),
                        c = b.promise();
                    return "function" == typeof a && a(function(a) {
                        b.resolve(a), d(c, a)
                    }, function() {
                        b.reject(), e(c)
                    }), c
                },
                resolve: function(a) {
                    var b = f.Deferred().resolve(a),
                        c = b.promise();
                    return d(c, a), c
                },
                reject: function() {
                    var a = f.Deferred().reject(),
                        b = a.promise();
                    return e(b), b
                }
            };
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(4),
            e = c(23),
            f = c(53),
            g = function() {
                function a(a) {
                    this.eventInstances = a || []
                }
                return a.prototype.getAllEventRanges = function(a) {
                    return a ? this.sliceNormalRenderRanges(a) : this.eventInstances.map(e.eventInstanceToEventRange)
                }, a.prototype.sliceRenderRanges = function(a) {
                    return this.isInverse() ? this.sliceInverseRenderRanges(a) : this.sliceNormalRenderRanges(a)
                }, a.prototype.sliceNormalRenderRanges = function(a) {
                    var b, c, d, e = this.eventInstances,
                        g = [];
                    for (b = 0; b < e.length; b++) c = e[b], (d = c.dateProfile.unzonedRange.intersect(a)) && g.push(new f.default(d, c.def, c));
                    return g
                }, a.prototype.sliceInverseRenderRanges = function(a) {
                    var b = this.eventInstances.map(e.eventInstanceToUnzonedRange),
                        c = this.getEventDef();
                    return b = d.default.invertRanges(b, a), b.map(function(a) {
                        return new f.default(a, c)
                    })
                }, a.prototype.isInverse = function() {
                    return this.getEventDef().hasInverseRendering()
                }, a.prototype.getEventDef = function() {
                    return this.explicitEventDef || this.eventInstances[0].def
                }, a
            }();
        b.default = g
    }, function(a, b, c) {
        function d(a, b) {
            return !a && !b || !(!a || !b) && a.component === b.component && e(a, b) && e(b, a)
        }

        function e(a, b) {
            for (var c in a)
                if (!/^(component|left|right|top|bottom)$/.test(c) && a[c] !== b[c]) return !1;
            return !0
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var f = c(0),
            g = c(2),
            h = c(39),
            i = function(a) {
                function b(b, c) {
                    var d = a.call(this, c) || this;
                    return d.component = b, d
                }
                return f.__extends(b, a), b.prototype.handleInteractionStart = function(b) {
                    var c, d, e, f = this.subjectEl;
                    this.component.hitsNeeded(), this.computeScrollBounds(), b ? (d = {
                        left: g.getEvX(b),
                        top: g.getEvY(b)
                    }, e = d, f && (c = g.getOuterRect(f), e = g.constrainPoint(e, c)), this.origHit = this.queryHit(e.left, e.top), f && this.options.subjectCenter && (this.origHit && (c = g.intersectRects(this.origHit, c) || c), e = g.getRectCenter(c)), this.coordAdjust = g.diffPoints(e, d)) : (this.origHit = null, this.coordAdjust = null), a.prototype.handleInteractionStart.call(this, b)
                }, b.prototype.handleDragStart = function(b) {
                    var c;
                    a.prototype.handleDragStart.call(this, b), (c = this.queryHit(g.getEvX(b), g.getEvY(b))) && this.handleHitOver(c)
                }, b.prototype.handleDrag = function(b, c, e) {
                    var f;
                    a.prototype.handleDrag.call(this, b, c, e), f = this.queryHit(g.getEvX(e), g.getEvY(e)), d(f, this.hit) || (this.hit && this.handleHitOut(), f && this.handleHitOver(f))
                }, b.prototype.handleDragEnd = function(b) {
                    this.handleHitDone(), a.prototype.handleDragEnd.call(this, b)
                }, b.prototype.handleHitOver = function(a) {
                    var b = d(a, this.origHit);
                    this.hit = a, this.trigger("hitOver", this.hit, b, this.origHit)
                }, b.prototype.handleHitOut = function() {
                    this.hit && (this.trigger("hitOut", this.hit), this.handleHitDone(), this.hit = null)
                }, b.prototype.handleHitDone = function() {
                    this.hit && this.trigger("hitDone", this.hit)
                }, b.prototype.handleInteractionEnd = function(b, c) {
                    a.prototype.handleInteractionEnd.call(this, b, c), this.origHit = null, this.hit = null, this.component.hitsNotNeeded()
                }, b.prototype.handleScrollEnd = function() {
                    a.prototype.handleScrollEnd.call(this), this.isDragging && (this.component.releaseHits(), this.component.prepareHits())
                }, b.prototype.queryHit = function(a, b) {
                    return this.coordAdjust && (a += this.coordAdjust.left, b += this.coordAdjust.top), this.component.queryHit(a, b)
                }, b
            }(h.default);
        b.default = i
    }, function(a, b, c) {
        function d(a) {
            return e.mergeProps(a, f)
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(2);
        b.globalDefaults = {
            titleRangeSeparator: " – ",
            monthYearFormat: "MMMM YYYY",
            defaultTimedEventDuration: "02:00:00",
            defaultAllDayEventDuration: {
                days: 1
            },
            forceEventDuration: !1,
            nextDayThreshold: "09:00:00",
            columnHeader: !0,
            defaultView: "month",
            aspectRatio: 1.35,
            header: {
                left: "title",
                center: "",
                right: "today prev,next"
            },
            weekends: !0,
            weekNumbers: !1,
            weekNumberTitle: "W",
            weekNumberCalculation: "local",
            scrollTime: "06:00:00",
            minTime: "00:00:00",
            maxTime: "24:00:00",
            showNonCurrentDates: !0,
            lazyFetching: !0,
            startParam: "start",
            endParam: "end",
            timezoneParam: "timezone",
            timezone: !1,
            locale: null,
            isRTL: !1,
            buttonText: {
                prev: "prev",
                next: "next",
                prevYear: "prev year",
                nextYear: "next year",
                year: "year",
                today: "today",
                month: "month",
                week: "week",
                day: "day"
            },
            allDayText: "All Day",
            agendaEventMinHeight: 0,
            theme: !1,
            dragOpacity: .75,
            dragRevertDuration: 500,
            dragScroll: !0,
            unselectAuto: !0,
            dropAccept: "*",
            eventOrder: "title",
            eventLimit: !1,
            eventLimitText: "more",
            eventLimitClick: "popover",
            dayPopoverFormat: "LL",
            handleWindowResize: !0,
            windowResizeDelay: 100,
            longPressDelay: 1e3
        }, b.englishDefaults = {
            dayPopoverFormat: "dddd, MMMM D"
        }, b.rtlDefaults = {
            header: {
                left: "next,prev today",
                center: "",
                right: "title"
            },
            buttonIcons: {
                prev: "right-single-arrow",
                next: "left-single-arrow",
                prevYear: "right-double-arrow",
                nextYear: "left-double-arrow"
            },
            themeButtonIcons: {
                prev: "circle-triangle-e",
                next: "circle-triangle-w",
                nextYear: "seek-prev",
                prevYear: "seek-next"
            }
        };
        var f = ["header", "footer", "buttonText", "buttonIcons", "themeButtonIcons"];
        b.mergeOptions = d
    }, function(a, b, c) {
        function d(a, b, c) {
            var d = m[a] || (m[a] = {});
            d.isRTL = c.isRTL, d.weekNumberTitle = c.weekHeader, h.each(n, function(a, b) {
                d[a] = b(c)
            });
            var e = h.datepicker;
            e && (e.regional[b] = e.regional[a] = c, e.regional.en = e.regional[""], e.setDefaults(c))
        }

        function e(a, b) {
            var c, d;
            c = m[a] || (m[a] = {}), b && (c = m[a] = k.mergeOptions([c, b])), d = g(a), h.each(o, function(a, b) {
                null == c[a] && (c[a] = b(d, c))
            }), k.globalDefaults.locale = a
        }

        function f(a) {
            h.each(p, function(b, c) {
                null == a[b] && (a[b] = c(a))
            })
        }

        function g(a) {
            return i.localeData(a) || i.localeData("en")
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var h = c(1),
            i = c(3),
            j = c(7),
            k = c(19),
            l = c(2),
            m = j.default.locales;
        b.localeOptionHash = m, b.datepickerLocale = d, b.locale = e;
        var n = {
                buttonText: function(a) {
                    return {
                        prev: l.stripHtmlEntities(a.prevText),
                        next: l.stripHtmlEntities(a.nextText),
                        today: l.stripHtmlEntities(a.currentText)
                    }
                },
                monthYearFormat: function(a) {
                    return a.showMonthAfterYear ? "YYYY[" + a.yearSuffix + "] MMMM" : "MMMM YYYY[" + a.yearSuffix + "]"
                }
            },
            o = {
                dayOfMonthFormat: function(a, b) {
                    var c = a.longDateFormat("l");
                    return c = c.replace(/^Y+[^\w\s]*|[^\w\s]*Y+$/g, ""), b.isRTL ? c += " ddd" : c = "ddd " + c, c
                },
                mediumTimeFormat: function(a) {
                    return a.longDateFormat("LT").replace(/\s*a$/i, "a")
                },
                smallTimeFormat: function(a) {
                    return a.longDateFormat("LT").replace(":mm", "(:mm)").replace(/(\Wmm)$/, "($1)").replace(/\s*a$/i, "a")
                },
                extraSmallTimeFormat: function(a) {
                    return a.longDateFormat("LT").replace(":mm", "(:mm)").replace(/(\Wmm)$/, "($1)").replace(/\s*a$/i, "t")
                },
                hourFormat: function(a) {
                    return a.longDateFormat("LT").replace(":mm", "").replace(/(\Wmm)$/, "").replace(/\s*a$/i, "a")
                },
                noMeridiemTimeFormat: function(a) {
                    return a.longDateFormat("LT").replace(/\s*a$/i, "")
                }
            },
            p = {
                smallDayDateFormat: function(a) {
                    return a.isRTL ? "D dd" : "dd D"
                },
                weekFormat: function(a) {
                    return a.isRTL ? "w[ " + a.weekNumberTitle + "]" : "[" + a.weekNumberTitle + " ]w"
                },
                smallWeekFormat: function(a) {
                    return a.isRTL ? "w[" + a.weekNumberTitle + "]" : "[" + a.weekNumberTitle + "]w"
                }
            };
        b.populateInstanceComputableOptions = f, b.getMomentLocaleData = g, e("en", k.englishDefaults)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = function() {
                function a() {}
                return a.extend = function(a) {
                    var b = function(a) {
                        function b() {
                            return null !== a && a.apply(this, arguments) || this
                        }
                        return d.__extends(b, a), b
                    }(this);
                    return e.copyOwnProps(a, b.prototype), b
                }, a.mixin = function(a) {
                    e.copyOwnProps(a, this.prototype)
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(50),
            f = function() {
                function a(a) {
                    this.source = a, this.className = [], this.miscProps = {}
                }
                return a.prototype.clone = function() {
                    var b = new this.constructor(this.source);
                    return b.id = this.id, b.rawId = this.rawId, b.uid = this.uid, a.copyVerbatimStandardProps(this, b), b.className = this.className.slice(), b.miscProps = d.extend({}, this.miscProps), b
                }, a.prototype.hasInverseRendering = function() {
                    return "inverse-background" === this.getRendering()
                }, a.prototype.hasBgRendering = function() {
                    var a = this.getRendering();
                    return "inverse-background" === a || "background" === a
                }, a.prototype.getRendering = function() {
                    return null != this.rendering ? this.rendering : this.source.rendering
                }, a.prototype.getConstraint = function() {
                    return null != this.constraint ? this.constraint : null != this.source.constraint ? this.source.constraint : this.source.calendar.opt("eventConstraint")
                }, a.prototype.getOverlap = function() {
                    return null != this.overlap ? this.overlap : null != this.source.overlap ? this.source.overlap : this.source.calendar.opt("eventOverlap")
                }, a.prototype.isStartExplicitlyEditable = function() {
                    return null != this.startEditable ? this.startEditable : this.source.startEditable
                }, a.prototype.isDurationExplicitlyEditable = function() {
                    return null != this.durationEditable ? this.durationEditable : this.source.durationEditable
                }, a.prototype.isExplicitlyEditable = function() {
                    return null != this.editable ? this.editable : this.source.editable
                }, a.prototype.toLegacy = function() {
                    var b = d.extend({}, this.miscProps);
                    return b._id = this.uid, b.source = this.source, b.className = this.className.slice(), b.allDay = this.isAllDay(), null != this.rawId && (b.id = this.rawId), a.copyVerbatimStandardProps(this, b), b
                }, a.prototype.applyManualStandardProps = function(b) {
                    return null != b.id ? this.id = a.normalizeId(this.rawId = b.id) : this.id = a.generateId(), null != b._id ? this.uid = String(b._id) : this.uid = a.generateId(), d.isArray(b.className) && (this.className = b.className), "string" == typeof b.className && (this.className = b.className.split(/\s+/)), !0
                }, a.prototype.applyMiscProps = function(a) {
                    d.extend(this.miscProps, a)
                }, a.parse = function(a, b) {
                    var c = new this(b);
                    return !!c.applyProps(a) && c
                }, a.normalizeId = function(a) {
                    return String(a)
                }, a.generateId = function() {
                    return "_fc" + a.uuid++
                }, a.defineStandardProps = e.default.defineStandardProps, a.copyVerbatimStandardProps = e.default.copyVerbatimStandardProps, a.uuid = 0, a
            }();
        b.default = f, e.default.mixInto(f), f.defineStandardProps({
            _id: !1,
            id: !1,
            className: !1,
            source: !1,
            title: !0,
            url: !0,
            rendering: !0,
            constraint: !0,
            overlap: !0,
            editable: !0,
            startEditable: !0,
            durationEditable: !0,
            color: !0,
            backgroundColor: !0,
            borderColor: !0,
            textColor: !0
        })
    }, function(a, b, c) {
        function d(a, b) {
            var c, d = [];
            for (c = 0; c < a.length; c++) d.push.apply(d, a[c].buildInstances(b));
            return d
        }

        function e(a) {
            return new i.default(a.dateProfile.unzonedRange, a.def, a)
        }

        function f(a) {
            return new j.default(new k.default(a.unzonedRange, a.eventDef.isAllDay()), a.eventDef, a.eventInstance)
        }

        function g(a) {
            return a.dateProfile.unzonedRange
        }

        function h(a) {
            return a.componentFootprint
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var i = c(53),
            j = c(24),
            k = c(10);
        b.eventDefsToEventInstances = d, b.eventInstanceToEventRange = e, b.eventRangeToEventFootprint = f, b.eventInstanceToUnzonedRange = g, b.eventFootprintToComponentFootprint = h
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a, b, c) {
                this.componentFootprint = a, this.eventDef = b, c && (this.eventInstance = c)
            }
            return a.prototype.getEventLegacy = function() {
                return (this.eventInstance || this.eventDef).toLegacy()
            }, a
        }();
        b.default = c
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        }), b.default = {
            sourceClasses: [],
            registerClass: function(a) {
                this.sourceClasses.unshift(a)
            },
            parse: function(a, b) {
                var c, d, e = this.sourceClasses;
                for (c = 0; c < e.length; c++)
                    if (d = e[c].parse(a, b)) return d
            }
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(2),
            e = c(15),
            f = c(22),
            g = c(35),
            h = c(11),
            i = function() {
                function a() {}
                return a.prototype.mutateSingle = function(a) {
                    var b;
                    return this.dateMutation && (b = a.dateProfile, a.dateProfile = this.dateMutation.buildNewDateProfile(b, a.source.calendar)), null != this.eventDefId && (a.id = f.default.normalizeId(a.rawId = this.eventDefId)), this.className && (a.className = this.className), this.verbatimStandardProps && h.default.copyVerbatimStandardProps(this.verbatimStandardProps, a), this.miscProps && a.applyMiscProps(this.miscProps), b ? function() {
                        a.dateProfile = b
                    } : function() {}
                }, a.prototype.setDateMutation = function(a) {
                    a && !a.isEmpty() ? this.dateMutation = a : this.dateMutation = null
                }, a.prototype.isEmpty = function() {
                    return !this.dateMutation
                }, a.createFromRawProps = function(b, c, h) {
                    var i, j, k, l, m = b.def,
                        n = {},
                        o = {},
                        p = {},
                        q = {},
                        r = null,
                        s = null;
                    for (i in c) e.default.isStandardProp(i) ? n[i] = c[i] : m.isStandardProp(i) ? o[i] = c[i] : m.miscProps[i] !== c[i] && (p[i] = c[i]);
                    return j = e.default.parse(n, m.source), j && (k = g.default.createFromDiff(b.dateProfile, j, h)), o.id !== m.id && (r = o.id), d.isArraysEqual(o.className, m.className) || (s = o.className), f.default.copyVerbatimStandardProps(o, q), l = new a, l.eventDefId = r, l.className = s, l.verbatimStandardProps = q, l.miscProps = p, k && (l.dateMutation = k), l
                }, a
            }();
        b.default = i
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = function() {
                function a(a) {
                    this.optionsManager = a, this.processIconOverride()
                }
                return a.prototype.processIconOverride = function() {
                    this.iconOverrideOption && this.setIconOverride(this.optionsManager.get(this.iconOverrideOption))
                }, a.prototype.setIconOverride = function(a) {
                    var b, c;
                    if (d.isPlainObject(a)) {
                        b = d.extend({}, this.iconClasses);
                        for (c in a) b[c] = this.applyIconOverridePrefix(a[c]);
                        this.iconClasses = b
                    } else !1 === a && (this.iconClasses = {})
                }, a.prototype.applyIconOverridePrefix = function(a) {
                    var b = this.iconOverridePrefix;
                    return b && 0 !== a.indexOf(b) && (a = b + a), a
                }, a.prototype.getClass = function(a) {
                    return this.classes[a] || ""
                }, a.prototype.getIconClass = function(a) {
                    var b = this.iconClasses[a];
                    return b ? this.baseIconClass + " " + b : ""
                }, a.prototype.getCustomButtonIconClass = function(a) {
                    var b;
                    return this.iconOverrideCustomButtonOption && (b = a[this.iconOverrideCustomButtonOption]) ? this.baseIconClass + " " + this.applyIconOverridePrefix(b) : ""
                }, a
            }();
        b.default = e, e.prototype.classes = {}, e.prototype.iconClasses = {}, e.prototype.baseIconClass = "", e.prototype.iconOverridePrefix = ""
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(21),
            h = function(a) {
                function b(b) {
                    var c = a.call(this) || this;
                    return b = b || {}, c.overflowX = b.overflowX || b.overflow || "auto", c.overflowY = b.overflowY || b.overflow || "auto", c
                }
                return d.__extends(b, a), b.prototype.render = function() {
                    this.el = this.renderEl(), this.applyOverflow()
                }, b.prototype.renderEl = function() {
                    return this.scrollEl = e('<div class="fc-scroller"></div>')
                }, b.prototype.clear = function() {
                    this.setHeight("auto"), this.applyOverflow()
                }, b.prototype.destroy = function() {
                    this.el.remove()
                }, b.prototype.applyOverflow = function() {
                    this.scrollEl.css({
                        "overflow-x": this.overflowX,
                        "overflow-y": this.overflowY
                    })
                }, b.prototype.lockOverflow = function(a) {
                    var b = this.overflowX,
                        c = this.overflowY;
                    a = a || this.getScrollbarWidths(), "auto" === b && (b = a.top || a.bottom || this.scrollEl[0].scrollWidth - 1 > this.scrollEl[0].clientWidth ? "scroll" : "hidden"), "auto" === c && (c = a.left || a.right || this.scrollEl[0].scrollHeight - 1 > this.scrollEl[0].clientHeight ? "scroll" : "hidden"), this.scrollEl.css({
                        "overflow-x": b,
                        "overflow-y": c
                    })
                }, b.prototype.setHeight = function(a) {
                    this.scrollEl.height(a)
                }, b.prototype.getScrollTop = function() {
                    return this.scrollEl.scrollTop()
                }, b.prototype.setScrollTop = function(a) {
                    this.scrollEl.scrollTop(a)
                }, b.prototype.getClientWidth = function() {
                    return this.scrollEl[0].clientWidth
                }, b.prototype.getClientHeight = function() {
                    return this.scrollEl[0].clientHeight
                }, b.prototype.getScrollbarWidths = function() {
                    return f.getScrollbarWidths(this.scrollEl)
                }, b
            }(g.default);
        b.default = h
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(61),
            h = c(14),
            i = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.segSelector = ".fc-event-container > *", d.dateSelectingClass && (d.dateClicking = new d.dateClickingClass(d)), d.dateSelectingClass && (d.dateSelecting = new d.dateSelectingClass(d)), d.eventPointingClass && (d.eventPointing = new d.eventPointingClass(d)), d.eventDraggingClass && d.eventPointing && (d.eventDragging = new d.eventDraggingClass(d, d.eventPointing)), d.eventResizingClass && d.eventPointing && (d.eventResizing = new d.eventResizingClass(d, d.eventPointing)), d.externalDroppingClass && (d.externalDropping = new d.externalDroppingClass(d)), d
                }
                return d.__extends(b, a), b.prototype.setElement = function(b) {
                    a.prototype.setElement.call(this, b), this.dateClicking && this.dateClicking.bindToEl(b), this.dateSelecting && this.dateSelecting.bindToEl(b), this.bindAllSegHandlersToEl(b)
                }, b.prototype.removeElement = function() {
                    this.endInteractions(), a.prototype.removeElement.call(this)
                }, b.prototype.executeEventUnrender = function() {
                    this.endInteractions(), a.prototype.executeEventUnrender.call(this)
                }, b.prototype.bindGlobalHandlers = function() {
                    a.prototype.bindGlobalHandlers.call(this), this.externalDropping && this.externalDropping.bindToDocument()
                }, b.prototype.unbindGlobalHandlers = function() {
                    a.prototype.unbindGlobalHandlers.call(this), this.externalDropping && this.externalDropping.unbindFromDocument()
                }, b.prototype.bindDateHandlerToEl = function(a, b, c) {
                    var d = this;
                    this.el.on(b, function(a) {
                        if (!e(a.target).is(d.segSelector + "," + d.segSelector + " *,.fc-more,a[data-goto]")) return c.call(d, a)
                    })
                }, b.prototype.bindAllSegHandlersToEl = function(a) {
                    [this.eventPointing, this.eventDragging, this.eventResizing].forEach(function(b) {
                        b && b.bindToEl(a)
                    })
                }, b.prototype.bindSegHandlerToEl = function(a, b, c) {
                    var d = this;
                    a.on(b, this.segSelector, function(a) {
                        var b = e(a.currentTarget).data("fc-seg");
                        if (b && !d.shouldIgnoreEventPointing()) return c.call(d, b, a)
                    })
                }, b.prototype.shouldIgnoreMouse = function() {
                    return h.default.get().shouldIgnoreMouse()
                }, b.prototype.shouldIgnoreTouch = function() {
                    var a = this._getView();
                    return a.isSelected || a.selectedEvent
                }, b.prototype.shouldIgnoreEventPointing = function() {
                    return this.eventDragging && this.eventDragging.isDragging || this.eventResizing && this.eventResizing.isResizing
                }, b.prototype.canStartSelection = function(a, b) {
                    return f.getEvIsTouch(b) && !this.canStartResize(a, b) && (this.isEventDefDraggable(a.footprint.eventDef) || this.isEventDefResizable(a.footprint.eventDef))
                }, b.prototype.canStartDrag = function(a, b) {
                    return !this.canStartResize(a, b) && this.isEventDefDraggable(a.footprint.eventDef)
                }, b.prototype.canStartResize = function(a, b) {
                    var c = this._getView(),
                        d = a.footprint.eventDef;
                    return (!f.getEvIsTouch(b) || c.isEventDefSelected(d)) && this.isEventDefResizable(d) && e(b.target).is(".fc-resizer")
                }, b.prototype.endInteractions = function() {
                    [this.dateClicking, this.dateSelecting, this.eventPointing, this.eventDragging, this.eventResizing].forEach(function(a) {
                        a && a.end()
                    })
                }, b.prototype.isEventDefDraggable = function(a) {
                    return this.isEventDefStartEditable(a)
                }, b.prototype.isEventDefStartEditable = function(a) {
                    var b = a.isStartExplicitlyEditable();
                    return null == b && null == (b = this.opt("eventStartEditable")) && (b = this.isEventDefGenerallyEditable(a)), b
                }, b.prototype.isEventDefGenerallyEditable = function(a) {
                    var b = a.isExplicitlyEditable();
                    return null == b && (b = this.opt("editable")), b
                }, b.prototype.isEventDefResizableFromStart = function(a) {
                    return this.opt("eventResizableFromStart") && this.isEventDefResizable(a)
                }, b.prototype.isEventDefResizableFromEnd = function(a) {
                    return this.isEventDefResizable(a)
                }, b.prototype.isEventDefResizable = function(a) {
                    var b = a.isDurationExplicitlyEditable();
                    return null == b && null == (b = this.opt("eventDurationEditable")) && (b = this.isEventDefGenerallyEditable(a)), b
                }, b.prototype.diffDates = function(a, b) {
                    return this.largeUnit ? f.diffByUnit(a, b, this.largeUnit) : f.diffDayTime(a, b)
                }, b.prototype.isEventInstanceGroupAllowed = function(a) {
                    var b, c = this._getView(),
                        d = this.dateProfile,
                        e = this.eventRangesToEventFootprints(a.getAllEventRanges());
                    for (b = 0; b < e.length; b++)
                        if (!d.validUnzonedRange.containsRange(e[b].componentFootprint.unzonedRange)) return !1;
                    return c.calendar.constraints.isEventInstanceGroupAllowed(a)
                }, b.prototype.isExternalInstanceGroupAllowed = function(a) {
                    var b, c = this._getView(),
                        d = this.dateProfile,
                        e = this.eventRangesToEventFootprints(a.getAllEventRanges());
                    for (b = 0; b < e.length; b++)
                        if (!d.validUnzonedRange.containsRange(e[b].componentFootprint.unzonedRange)) return !1;
                    for (b = 0; b < e.length; b++)
                        if (!c.calendar.constraints.isSelectionFootprintAllowed(e[b].componentFootprint)) return !1;
                    return !0
                }, b
            }(g.default);
        b.default = i
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(3),
            g = c(2),
            h = c(60),
            i = c(62),
            j = c(29),
            k = c(14),
            l = c(4),
            m = function(a) {
                function b(b, c) {
                    var d = a.call(this, null, c.options) || this;
                    return d.batchRenderDepth = 0, d.isSelected = !1, d.calendar = b, d.viewSpec = c, d.type = c.type, d.name = d.type, d.initRenderQueue(), d.initHiddenDays(), d.dateProfileGenerator = new d.dateProfileGeneratorClass(d), d.bindBaseRenderHandlers(), d.eventOrderSpecs = g.parseFieldSpecs(d.opt("eventOrder")), d.initialize && d.initialize(), d
                }
                return d.__extends(b, a), b.prototype._getView = function() {
                    return this
                }, b.prototype.opt = function(a) {
                    return this.options[a]
                }, b.prototype.initRenderQueue = function() {
                    this.renderQueue = new h.default({
                        event: this.opt("eventRenderWait")
                    }), this.renderQueue.on("start", this.onRenderQueueStart.bind(this)), this.renderQueue.on("stop", this.onRenderQueueStop.bind(this)), this.on("before:change", this.startBatchRender), this.on("change", this.stopBatchRender)
                }, b.prototype.onRenderQueueStart = function() {
                    this.calendar.freezeContentHeight(), this.addScroll(this.queryScroll())
                }, b.prototype.onRenderQueueStop = function() {
                    this.calendar.updateViewSize() && this.popScroll(), this.calendar.thawContentHeight()
                }, b.prototype.startBatchRender = function() {
                    this.batchRenderDepth++ || this.renderQueue.pause()
                }, b.prototype.stopBatchRender = function() {
                    --this.batchRenderDepth || this.renderQueue.resume()
                }, b.prototype.requestRender = function(a, b, c) {
                    this.renderQueue.queue(a, b, c)
                }, b.prototype.whenSizeUpdated = function(a) {
                    this.renderQueue.isRunning ? this.renderQueue.one("stop", a.bind(this)) : a.call(this)
                }, b.prototype.computeTitle = function(a) {
                    var b;
                    return b = /^(year|month)$/.test(a.currentRangeUnit) ? a.currentUnzonedRange : a.activeUnzonedRange, this.formatRange({
                        start: this.calendar.msToMoment(b.startMs, a.isRangeAllDay),
                        end: this.calendar.msToMoment(b.endMs, a.isRangeAllDay)
                    }, a.isRangeAllDay, this.opt("titleFormat") || this.computeTitleFormat(a), this.opt("titleRangeSeparator"))
                }, b.prototype.computeTitleFormat = function(a) {
                    var b = a.currentRangeUnit;
                    return "year" == b ? "YYYY" : "month" == b ? this.opt("monthYearFormat") : a.currentUnzonedRange.as("days") > 1 ? "ll" : "LL"
                }, b.prototype.setDate = function(a) {
                    var b = this.get("dateProfile"),
                        c = this.dateProfileGenerator.build(a, void 0, !0);
                    b && b.activeUnzonedRange.equals(c.activeUnzonedRange) || this.set("dateProfile", c)
                }, b.prototype.unsetDate = function() {
                    this.unset("dateProfile")
                }, b.prototype.fetchInitialEvents = function(a) {
                    var b = this.calendar,
                        c = a.isRangeAllDay && !this.usesMinMaxTime;
                    return b.requestEvents(b.msToMoment(a.activeUnzonedRange.startMs, c), b.msToMoment(a.activeUnzonedRange.endMs, c))
                }, b.prototype.bindEventChanges = function() {
                    this.listenTo(this.calendar, "eventsReset", this.resetEvents)
                }, b.prototype.unbindEventChanges = function() {
                    this.stopListeningTo(this.calendar, "eventsReset")
                }, b.prototype.setEvents = function(a) {
                    this.set("currentEvents", a), this.set("hasEvents", !0)
                }, b.prototype.unsetEvents = function() {
                    this.unset("currentEvents"), this.unset("hasEvents")
                }, b.prototype.resetEvents = function(a) {
                    this.startBatchRender(), this.unsetEvents(), this.setEvents(a), this.stopBatchRender()
                }, b.prototype.requestDateRender = function(a) {
                    var b = this;
                    this.requestRender(function() {
                        b.executeDateRender(a)
                    }, "date", "init")
                }, b.prototype.requestDateUnrender = function() {
                    var a = this;
                    this.requestRender(function() {
                        a.executeDateUnrender()
                    }, "date", "destroy")
                }, b.prototype.executeDateRender = function(b) {
                    a.prototype.executeDateRender.call(this, b), this.render && this.render(), this.trigger("datesRendered"), this.addScroll({
                        isDateInit: !0
                    }), this.startNowIndicator()
                }, b.prototype.executeDateUnrender = function() {
                    this.unselect(), this.stopNowIndicator(), this.trigger("before:datesUnrendered"), this.destroy && this.destroy(), a.prototype.executeDateUnrender.call(this)
                }, b.prototype.bindBaseRenderHandlers = function() {
                    var a = this;
                    this.on("datesRendered", function() {
                        a.whenSizeUpdated(a.triggerViewRender)
                    }), this.on("before:datesUnrendered", function() {
                        a.triggerViewDestroy()
                    })
                }, b.prototype.triggerViewRender = function() {
                    this.publiclyTrigger("viewRender", {
                        context: this,
                        args: [this, this.el]
                    })
                }, b.prototype.triggerViewDestroy = function() {
                    this.publiclyTrigger("viewDestroy", {
                        context: this,
                        args: [this, this.el]
                    })
                }, b.prototype.requestEventsRender = function(a) {
                    var b = this;
                    this.requestRender(function() {
                        b.executeEventRender(a), b.whenSizeUpdated(b.triggerAfterEventsRendered)
                    }, "event", "init")
                }, b.prototype.requestEventsUnrender = function() {
                    var a = this;
                    this.requestRender(function() {
                        a.triggerBeforeEventsDestroyed(), a.executeEventUnrender()
                    }, "event", "destroy")
                }, b.prototype.requestBusinessHoursRender = function(a) {
                    var b = this;
                    this.requestRender(function() {
                        b.renderBusinessHours(a)
                    }, "businessHours", "init")
                }, b.prototype.requestBusinessHoursUnrender = function() {
                    var a = this;
                    this.requestRender(function() {
                        a.unrenderBusinessHours()
                    }, "businessHours", "destroy")
                }, b.prototype.bindGlobalHandlers = function() {
                    a.prototype.bindGlobalHandlers.call(this), this.listenTo(k.default.get(), {
                        touchstart: this.processUnselect,
                        mousedown: this.handleDocumentMousedown
                    })
                }, b.prototype.unbindGlobalHandlers = function() {
                    a.prototype.unbindGlobalHandlers.call(this), this.stopListeningTo(k.default.get())
                }, b.prototype.startNowIndicator = function() {
                    var a, b, c, d = this;
                    this.opt("nowIndicator") && (a = this.getNowIndicatorUnit()) && (b = g.proxy(this, "updateNowIndicator"), this.initialNowDate = this.calendar.getNow(), this.initialNowQueriedMs = +new Date, c = this.initialNowDate.clone().startOf(a).add(1, a) - this.initialNowDate, this.nowIndicatorTimeoutID = setTimeout(function() {
                        d.nowIndicatorTimeoutID = null, b(), c = +f.duration(1, a), c = Math.max(100, c), d.nowIndicatorIntervalID = setInterval(b, c)
                    }, c))
                }, b.prototype.updateNowIndicator = function() {
                    this.isDatesRendered && this.initialNowDate && (this.unrenderNowIndicator(), this.renderNowIndicator(this.initialNowDate.clone().add((new Date).valueOf() - this.initialNowQueriedMs)), this.isNowIndicatorRendered = !0)
                }, b.prototype.stopNowIndicator = function() {
                    this.isNowIndicatorRendered && (this.nowIndicatorTimeoutID && (clearTimeout(this.nowIndicatorTimeoutID), this.nowIndicatorTimeoutID = null), this.nowIndicatorIntervalID && (clearInterval(this.nowIndicatorIntervalID), this.nowIndicatorIntervalID = null), this.unrenderNowIndicator(), this.isNowIndicatorRendered = !1)
                }, b.prototype.updateSize = function(b, c, d) {
                    this.setHeight ? this.setHeight(b, c) : a.prototype.updateSize.call(this, b, c, d), this.updateNowIndicator()
                }, b.prototype.addScroll = function(a) {
                    var b = this.queuedScroll || (this.queuedScroll = {});
                    e.extend(b, a)
                }, b.prototype.popScroll = function() {
                    this.applyQueuedScroll(), this.queuedScroll = null
                }, b.prototype.applyQueuedScroll = function() {
                    this.queuedScroll && this.applyScroll(this.queuedScroll)
                }, b.prototype.queryScroll = function() {
                    var a = {};
                    return this.isDatesRendered && e.extend(a, this.queryDateScroll()), a
                }, b.prototype.applyScroll = function(a) {
                    a.isDateInit && this.isDatesRendered && e.extend(a, this.computeInitialDateScroll()), this.isDatesRendered && this.applyDateScroll(a)
                }, b.prototype.computeInitialDateScroll = function() {
                    return {}
                }, b.prototype.queryDateScroll = function() {
                    return {}
                }, b.prototype.applyDateScroll = function(a) {}, b.prototype.reportEventDrop = function(a, b, c, d) {
                    var e = this.calendar.eventManager,
                        g = e.mutateEventsWithId(a.def.id, b, this.calendar),
                        h = b.dateMutation;
                    h && (a.dateProfile = h.buildNewDateProfile(a.dateProfile, this.calendar)), this.triggerEventDrop(a, h && h.dateDelta || f.duration(), g, c, d)
                }, b.prototype.triggerEventDrop = function(a, b, c, d, e) {
                    this.publiclyTrigger("eventDrop", {
                        context: d[0],
                        args: [a.toLegacy(), b, c, e, {}, this]
                    })
                }, b.prototype.reportExternalDrop = function(a, b, c, d, e, f) {
                    b && this.calendar.eventManager.addEventDef(a, c), this.triggerExternalDrop(a, b, d, e, f)
                }, b.prototype.triggerExternalDrop = function(a, b, c, d, e) {
                    this.publiclyTrigger("drop", {
                        context: c[0],
                        args: [a.dateProfile.start.clone(), d, e, this]
                    }), b && this.publiclyTrigger("eventReceive", {
                        context: this,
                        args: [a.buildInstance().toLegacy(), this]
                    })
                }, b.prototype.reportEventResize = function(a, b, c, d) {
                    var e = this.calendar.eventManager,
                        f = e.mutateEventsWithId(a.def.id, b, this.calendar);
                    a.dateProfile = b.dateMutation.buildNewDateProfile(a.dateProfile, this.calendar), this.triggerEventResize(a, b.dateMutation.endDelta, f, c, d)
                }, b.prototype.triggerEventResize = function(a, b, c, d, e) {
                    this.publiclyTrigger("eventResize", {
                        context: d[0],
                        args: [a.toLegacy(), b, c, e, {}, this]
                    })
                }, b.prototype.select = function(a, b) {
                    this.unselect(b), this.renderSelectionFootprint(a), this.reportSelection(a, b)
                }, b.prototype.renderSelectionFootprint = function(b) {
                    this.renderSelection ? this.renderSelection(b.toLegacy(this.calendar)) : a.prototype.renderSelectionFootprint.call(this, b)
                }, b.prototype.reportSelection = function(a, b) {
                    this.isSelected = !0, this.triggerSelect(a, b)
                }, b.prototype.triggerSelect = function(a, b) {
                    var c = this.calendar.footprintToDateProfile(a);
                    this.publiclyTrigger("select", {
                        context: this,
                        args: [c.start, c.end, b, this]
                    })
                }, b.prototype.unselect = function(a) {
                    void 0 === a && (a = null), this.isSelected && (this.isSelected = !1, this.destroySelection && this.destroySelection(), this.unrenderSelection(), this.publiclyTrigger("unselect", {
                        context: this,
                        args: [a, this]
                    }))
                }, b.prototype.selectEventInstance = function(a) {
                    this.selectedEventInstance && this.selectedEventInstance === a || (this.unselectEventInstance(), this.getEventSegs().forEach(function(b) {
                        b.footprint.eventInstance === a && b.el && b.el.addClass("fc-selected")
                    }), this.selectedEventInstance = a)
                }, b.prototype.unselectEventInstance = function() {
                    this.selectedEventInstance && (this.getEventSegs().forEach(function(a) {
                        a.el && a.el.removeClass("fc-selected")
                    }), this.selectedEventInstance = null)
                }, b.prototype.isEventDefSelected = function(a) {
                    return this.selectedEventInstance && this.selectedEventInstance.def.id === a.id
                }, b.prototype.handleDocumentMousedown = function(a) {
                    g.isPrimaryMouseButton(a) && this.processUnselect(a)
                }, b.prototype.processUnselect = function(a) {
                    this.processRangeUnselect(a), this.processEventUnselect(a)
                }, b.prototype.processRangeUnselect = function(a) {
                    var b;
                    this.isSelected && this.opt("unselectAuto") && ((b = this.opt("unselectCancel")) && e(a.target).closest(b).length || this.unselect(a))
                }, b.prototype.processEventUnselect = function(a) {
                    this.selectedEventInstance && (e(a.target).closest(".fc-selected").length || this.unselectEventInstance())
                }, b.prototype.triggerBaseRendered = function() {
                    this.publiclyTrigger("viewRender", {
                        context: this,
                        args: [this, this.el]
                    })
                }, b.prototype.triggerBaseUnrendered = function() {
                    this.publiclyTrigger("viewDestroy", {
                        context: this,
                        args: [this, this.el]
                    })
                }, b.prototype.triggerDayClick = function(a, b, c) {
                    var d = this.calendar.footprintToDateProfile(a);
                    this.publiclyTrigger("dayClick", {
                        context: b,
                        args: [d.start, c, this]
                    })
                }, b.prototype.isDateInOtherMonth = function(a, b) {
                    return !1
                }, b.prototype.getUnzonedRangeOption = function(a) {
                    var b = this.opt(a);
                    if ("function" == typeof b && (b = b.apply(null, Array.prototype.slice.call(arguments, 1))), b) return this.calendar.parseUnzonedRange(b)
                }, b.prototype.initHiddenDays = function() {
                    var a, b = this.opt("hiddenDays") || [],
                        c = [],
                        d = 0;
                    for (!1 === this.opt("weekends") && b.push(0, 6), a = 0; a < 7; a++)(c[a] = -1 !== e.inArray(a, b)) || d++;
                    if (!d) throw "invalid hiddenDays";
                    this.isHiddenDayHash = c
                }, b.prototype.trimHiddenDays = function(a) {
                    var b = a.getStart(),
                        c = a.getEnd();
                    return b && (b = this.skipHiddenDays(b)), c && (c = this.skipHiddenDays(c, -1, !0)), null === b || null === c || b < c ? new l.default(b, c) : null
                }, b.prototype.isHiddenDay = function(a) {
                    return f.isMoment(a) && (a = a.day()), this.isHiddenDayHash[a]
                }, b.prototype.skipHiddenDays = function(a, b, c) {
                    void 0 === b && (b = 1), void 0 === c && (c = !1);
                    for (var d = a.clone(); this.isHiddenDayHash[(d.day() + (c ? b : 0) + 7) % 7];) d.add(b, "days");
                    return d
                }, b
            }(j.default);
        b.default = m, m.prototype.usesMinMaxTime = !1, m.prototype.dateProfileGeneratorClass = i.default, m.watch("displayingDates", ["isInDom", "dateProfile"], function(a) {
            this.requestDateRender(a.dateProfile)
        }, function() {
            this.requestDateUnrender()
        }), m.watch("displayingBusinessHours", ["displayingDates", "businessHourGenerator"], function(a) {
            this.requestBusinessHoursRender(a.businessHourGenerator)
        }, function() {
            this.requestBusinessHoursUnrender()
        }), m.watch("initialEvents", ["dateProfile"], function(a) {
            return this.fetchInitialEvents(a.dateProfile)
        }), m.watch("bindingEvents", ["initialEvents"], function(a) {
            this.setEvents(a.initialEvents), this.bindEventChanges()
        }, function() {
            this.unbindEventChanges(), this.unsetEvents()
        }), m.watch("displayingEvents", ["displayingDates", "hasEvents"], function() {
            this.requestEventsRender(this.get("currentEvents"))
        }, function() {
            this.requestEventsUnrender()
        }), m.watch("title", ["dateProfile"], function(a) {
            return this.title = this.computeTitle(a.dateProfile)
        }), m.watch("legacyDateProps", ["dateProfile"], function(a) {
            var b = this.calendar,
                c = a.dateProfile;
            this.start = b.msToMoment(c.activeUnzonedRange.startMs, c.isRangeAllDay), this.end = b.msToMoment(c.activeUnzonedRange.endMs, c.isRangeAllDay), this.intervalStart = b.msToMoment(c.currentUnzonedRange.startMs, c.isRangeAllDay), this.intervalEnd = b.msToMoment(c.currentUnzonedRange.endMs, c.isRangeAllDay)
        })
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = function() {
                function a(a, b) {
                    this.view = a._getView(), this.component = a, this.fillRenderer = b
                }
                return a.prototype.opt = function(a) {
                    return this.view.opt(a)
                }, a.prototype.rangeUpdated = function() {
                    var a, b;
                    this.eventTimeFormat = this.opt("eventTimeFormat") || this.opt("timeFormat") || this.computeEventTimeFormat(), a = this.opt("displayEventTime"), null == a && (a = this.computeDisplayEventTime()), b = this.opt("displayEventEnd"), null == b && (b = this.computeDisplayEventEnd()), this.displayEventTime = a, this.displayEventEnd = b
                }, a.prototype.render = function(a) {
                    var b, c, d, e = this.component._getDateProfile(),
                        f = [],
                        g = [];
                    for (b in a) c = a[b], d = c.sliceRenderRanges(e.activeUnzonedRange), c.getEventDef().hasBgRendering() ? f.push.apply(f, d) : g.push.apply(g, d);
                    this.renderBgRanges(f), this.renderFgRanges(g)
                }, a.prototype.unrender = function() {
                    this.unrenderBgRanges(), this.unrenderFgRanges()
                }, a.prototype.renderFgRanges = function(a) {
                    var b = this.component.eventRangesToEventFootprints(a),
                        c = this.component.eventFootprintsToSegs(b);
                    c = this.renderFgSegEls(c), !1 !== this.renderFgSegs(c) && (this.fgSegs = c)
                }, a.prototype.unrenderFgRanges = function() {
                    this.unrenderFgSegs(this.fgSegs || []), this.fgSegs = null
                }, a.prototype.renderBgRanges = function(a) {
                    var b = this.component.eventRangesToEventFootprints(a),
                        c = this.component.eventFootprintsToSegs(b);
                    !1 !== this.renderBgSegs(c) && (this.bgSegs = c)
                }, a.prototype.unrenderBgRanges = function() {
                    this.unrenderBgSegs(), this.bgSegs = null
                }, a.prototype.getSegs = function() {
                    return (this.bgSegs || []).concat(this.fgSegs || [])
                }, a.prototype.renderFgSegs = function(a) {
                    return !1
                }, a.prototype.unrenderFgSegs = function(a) {}, a.prototype.renderBgSegs = function(a) {
                    var b = this;
                    if (!this.fillRenderer) return !1;
                    this.fillRenderer.renderSegs("bgEvent", a, {
                        getClasses: function(a) {
                            return b.getBgClasses(a.footprint.eventDef)
                        },
                        getCss: function(a) {
                            return {
                                "background-color": b.getBgColor(a.footprint.eventDef)
                            }
                        },
                        filterEl: function(a, c) {
                            return b.filterEventRenderEl(a.footprint, c)
                        }
                    })
                }, a.prototype.unrenderBgSegs = function() {
                    this.fillRenderer && this.fillRenderer.unrender("bgEvent")
                }, a.prototype.renderFgSegEls = function(a, b) {
                    var c = this;
                    void 0 === b && (b = !1);
                    var e, f = this.view.hasPublicHandlers("eventRender"),
                        g = "",
                        h = [];
                    if (a.length) {
                        for (e = 0; e < a.length; e++) this.beforeFgSegHtml(a[e]), g += this.fgSegHtml(a[e], b);
                        d(g).each(function(b, e) {
                            var g = a[b],
                                i = d(e);
                            f && (i = c.filterEventRenderEl(g.footprint, i)), i && (i.data("fc-seg", g), g.el = i, h.push(g))
                        })
                    }
                    return h
                }, a.prototype.beforeFgSegHtml = function(a) {}, a.prototype.fgSegHtml = function(a, b) {}, a.prototype.getSegClasses = function(a, b, c) {
                    var d = ["fc-event", a.isStart ? "fc-start" : "fc-not-start", a.isEnd ? "fc-end" : "fc-not-end"].concat(this.getClasses(a.footprint.eventDef));
                    return b && d.push("fc-draggable"), c && d.push("fc-resizable"), this.view.isEventDefSelected(a.footprint.eventDef) && d.push("fc-selected"), d
                }, a.prototype.filterEventRenderEl = function(a, b) {
                    var c = a.getEventLegacy(),
                        e = this.view.publiclyTrigger("eventRender", {
                            context: c,
                            args: [c, b, this.view]
                        });
                    return !1 === e ? b = null : e && !0 !== e && (b = d(e)), b
                }, a.prototype.getTimeText = function(a, b, c) {
                    return this._getTimeText(a.eventInstance.dateProfile.start, a.eventInstance.dateProfile.end, a.componentFootprint.isAllDay, b, c)
                }, a.prototype._getTimeText = function(a, b, c, d, e) {
                    return null == d && (d = this.eventTimeFormat), null == e && (e = this.displayEventEnd), this.displayEventTime && !c ? e && b ? this.view.formatRange({
                        start: a,
                        end: b
                    }, !1, d) : a.format(d) : ""
                }, a.prototype.computeEventTimeFormat = function() {
                    return this.opt("smallTimeFormat")
                }, a.prototype.computeDisplayEventTime = function() {
                    return !0
                }, a.prototype.computeDisplayEventEnd = function() {
                    return !0
                }, a.prototype.getBgClasses = function(a) {
                    var b = this.getClasses(a);
                    return b.push("fc-bgevent"), b
                }, a.prototype.getClasses = function(a) {
                    var b, c = this.getStylingObjs(a),
                        d = [];
                    for (b = 0; b < c.length; b++) d.push.apply(d, c[b].eventClassName || c[b].className || []);
                    return d
                }, a.prototype.getSkinCss = function(a) {
                    return {
                        "background-color": this.getBgColor(a),
                        "border-color": this.getBorderColor(a),
                        color: this.getTextColor(a)
                    }
                }, a.prototype.getBgColor = function(a) {
                    var b, c, d = this.getStylingObjs(a);
                    for (b = 0; b < d.length && !c; b++) c = d[b].eventBackgroundColor || d[b].eventColor || d[b].backgroundColor || d[b].color;
                    return c || (c = this.opt("eventBackgroundColor") || this.opt("eventColor")), c
                }, a.prototype.getBorderColor = function(a) {
                    var b, c, d = this.getStylingObjs(a);
                    for (b = 0; b < d.length && !c; b++) c = d[b].eventBorderColor || d[b].eventColor || d[b].borderColor || d[b].color;
                    return c || (c = this.opt("eventBorderColor") || this.opt("eventColor")), c
                }, a.prototype.getTextColor = function(a) {
                    var b, c, d = this.getStylingObjs(a);
                    for (b = 0; b < d.length && !c; b++) c = d[b].eventTextColor || d[b].textColor;
                    return c || (c = this.opt("eventTextColor")), c
                }, a.prototype.getStylingObjs = function(a) {
                    var b = this.getFallbackStylingObjs(a);
                    return b.unshift(a), b
                }, a.prototype.getFallbackStylingObjs = function(a) {
                    return [a.source]
                }, a.prototype.sortEventSegs = function(a) {
                    a.sort(e.proxy(this, "compareEventSegs"))
                }, a.prototype.compareEventSegs = function(a, b) {
                    var c = a.footprint.componentFootprint,
                        d = c.unzonedRange,
                        f = b.footprint.componentFootprint,
                        g = f.unzonedRange;
                    return d.startMs - g.startMs || g.endMs - g.startMs - (d.endMs - d.startMs) || f.isAllDay - c.isAllDay || e.compareByFieldSpecs(a.footprint.eventDef, b.footprint.eventDef, this.view.eventOrderSpecs)
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(21),
            f = c(8),
            g = c(6),
            h = function(a) {
                function b() {
                    var b = a.call(this) || this;
                    return b._watchers = {}, b._props = {}, b.applyGlobalWatchers(), b.constructed(), b
                }
                return d.__extends(b, a), b.prototype.constructed = function() {}, b.prototype.applyGlobalWatchers = function() {
                    var a, b = this._globalWatchArgs;
                    for (a in b) this.watch.apply(this, [a].concat(b[a]))
                }, b.prototype.has = function(a) {
                    return a in this._props
                }, b.prototype.get = function(a) {
                    return void 0 === a ? this._props : this._props[a]
                }, b.prototype.set = function(a, b) {
                    var c;
                    "string" == typeof a ? (c = {}, c[a] = void 0 === b ? null : b) : c = a, this.setProps(c)
                }, b.prototype.reset = function(a) {
                    var b, c = this._props,
                        d = {};
                    for (b in c) d[b] = void 0;
                    for (b in a) d[b] = a[b];
                    this.setProps(d)
                }, b.prototype.unset = function(a) {
                    var b, c, d = {};
                    for (b = "string" == typeof a ? [a] : a, c = 0; c < b.length; c++) d[b[c]] = void 0;
                    this.setProps(d)
                }, b.prototype.setProps = function(a) {
                    var b, c, d = {},
                        e = 0;
                    for (b in a) "object" != typeof(c = a[b]) && c === this._props[b] || (d[b] = c, e++);
                    if (e) {
                        this.trigger("before:batchChange", d);
                        for (b in d) c = d[b], this.trigger("before:change", b, c), this.trigger("before:change:" + b, c);
                        for (b in d) c = d[b], void 0 === c ? delete this._props[b] : this._props[b] = c, this.trigger("change:" + b, c), this.trigger("change", b, c);
                        this.trigger("batchChange", d)
                    }
                }, b.prototype.watch = function(a, b, c, d) {
                    var e = this;
                    this.unwatch(a), this._watchers[a] = this._watchDeps(b, function(b) {
                        var d = c.call(e, b);
                        d && d.then ? (e.unset(a), d.then(function(b) {
                            e.set(a, b)
                        })) : e.set(a, d)
                    }, function(b) {
                        e.unset(a), d && d.call(e, b)
                    })
                }, b.prototype.unwatch = function(a) {
                    var b = this._watchers[a];
                    b && (delete this._watchers[a], b.teardown())
                }, b.prototype._watchDeps = function(a, b, c) {
                    var d = this,
                        e = 0,
                        f = a.length,
                        g = 0,
                        h = {},
                        i = [],
                        j = !1,
                        k = function(a, b, d) {
                            1 == ++e && g === f && (j = !0, c(h), j = !1)
                        },
                        l = function(a, c, d) {
                            void 0 === c ? (d || void 0 === h[a] || g--, delete h[a]) : (d || void 0 !== h[a] || g++, h[a] = c), --e || g === f && (j || b(h))
                        },
                        m = function(a, b) {
                            d.on(a, b), i.push([a, b])
                        };
                    return a.forEach(function(a) {
                        var b = !1;
                        "?" === a.charAt(0) && (a = a.substring(1), b = !0), m("before:change:" + a, function(a) {
                            k()
                        }), m("change:" + a, function(c) {
                            l(a, c, b)
                        })
                    }), a.forEach(function(a) {
                        var b = !1;
                        "?" === a.charAt(0) && (a = a.substring(1), b = !0), d.has(a) ? (h[a] = d.get(a), g++) : b && g++
                    }), g === f && b(h), {
                        teardown: function() {
                            for (var a = 0; a < i.length; a++) d.off(i[a][0], i[a][1]);
                            i = null, g === f && c()
                        },
                        flash: function() {
                            g === f && (c(), b(h))
                        }
                    }
                }, b.prototype.flash = function(a) {
                    var b = this._watchers[a];
                    b && b.flash()
                }, b.watch = function(a) {
                    for (var b = [], c = 1; c < arguments.length; c++) b[c - 1] = arguments[c];
                    this.prototype.hasOwnProperty("_globalWatchArgs") || (this.prototype._globalWatchArgs = Object.create(this.prototype._globalWatchArgs)), this.prototype._globalWatchArgs[a] = b
                }, b
            }(e.default);
        b.default = h, h.prototype._globalWatchArgs = {}, f.default.mixInto(h), g.default.mixInto(h)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(3),
            e = c(2),
            f = c(11),
            g = c(52);
        b.default = {
            parse: function(a, b) {
                return e.isTimeString(a.start) || d.isDuration(a.start) || e.isTimeString(a.end) || d.isDuration(a.end) ? g.default.parse(a, b) : f.default.parse(a, b)
            }
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(16),
            h = c(5),
            i = c(11),
            j = function(a) {
                function b(b) {
                    var c = a.call(this, b) || this;
                    return c.eventDefs = [], c
                }
                return d.__extends(b, a), b.prototype.setRawEventDefs = function(a) {
                    this.rawEventDefs = a, this.eventDefs = this.parseEventDefs(a)
                }, b.prototype.fetch = function(a, b, c) {
                    var d, e = this.eventDefs;
                    if (null != this.currentTimezone && this.currentTimezone !== c)
                        for (d = 0; d < e.length; d++) e[d] instanceof i.default && e[d].rezone();
                    return this.currentTimezone = c, g.default.resolve(e)
                }, b.prototype.addEventDef = function(a) {
                    this.eventDefs.push(a)
                }, b.prototype.removeEventDefsById = function(a) {
                    return f.removeMatching(this.eventDefs, function(b) {
                        return b.id === a
                    })
                }, b.prototype.removeAllEventDefs = function() {
                    this.eventDefs = []
                }, b.prototype.getPrimitive = function() {
                    return this.rawEventDefs
                }, b.prototype.applyManualStandardProps = function(b) {
                    var c = a.prototype.applyManualStandardProps.call(this, b);
                    return this.setRawEventDefs(b.events), c
                }, b.parse = function(a, b) {
                    var c;
                    return e.isArray(a.events) ? c = a : e.isArray(a) && (c = {
                        events: a
                    }), !!c && h.default.parse.call(this, c, b)
                }, b
            }(h.default);
        b.default = j, j.defineStandardProps({
            events: !1
        })
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(2),
            e = c(15),
            f = function() {
                function a() {
                    this.clearEnd = !1, this.forceTimed = !1, this.forceAllDay = !1
                }
                return a.prototype.buildNewDateProfile = function(a, b) {
                    var c = a.start.clone(),
                        d = null,
                        f = !1;
                    return a.end && !this.clearEnd ? d = a.end.clone() : this.endDelta && !d && (d = b.getDefaultEventEnd(a.isAllDay(), c)), this.forceTimed ? (f = !0, c.hasTime() || c.time(0), d && !d.hasTime() && d.time(0)) : this.forceAllDay && (c.hasTime() && c.stripTime(), d && d.hasTime() && d.stripTime()), this.dateDelta && (f = !0, c.add(this.dateDelta), d && d.add(this.dateDelta)), this.endDelta && (f = !0, d.add(this.endDelta)), this.startDelta && (f = !0, c.add(this.startDelta)), f && (c = b.applyTimezone(c), d && (d = b.applyTimezone(d))), !d && b.opt("forceEventDuration") && (d = b.getDefaultEventEnd(a.isAllDay(), c)), new e.default(c, d, b)
                }, a.prototype.setDateDelta = function(a) {
                    a && a.valueOf() ? this.dateDelta = a : this.dateDelta = null
                }, a.prototype.setStartDelta = function(a) {
                    a && a.valueOf() ? this.startDelta = a : this.startDelta = null
                }, a.prototype.setEndDelta = function(a) {
                    a && a.valueOf() ? this.endDelta = a : this.endDelta = null
                }, a.prototype.isEmpty = function() {
                    return !(this.clearEnd || this.forceTimed || this.forceAllDay || this.dateDelta || this.startDelta || this.endDelta)
                }, a.createFromDiff = function(b, c, e) {
                    function f(a, b) {
                        return e ? d.diffByUnit(a, b, e) : c.isAllDay() ? d.diffDay(a, b) : d.diffDayTime(a, b)
                    }
                    var g, h, i, j, k = b.end && !c.end,
                        l = b.isAllDay() && !c.isAllDay(),
                        m = !b.isAllDay() && c.isAllDay();
                    return g = f(c.start, b.start), c.end && (h = f(c.unzonedRange.getEnd(), b.unzonedRange.getEnd()), i = h.subtract(g)), j = new a, j.clearEnd = k, j.forceTimed = l, j.forceAllDay = m, j.setDateDelta(g), j.setEndDelta(i), j
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(55),
            e = c(56);
        b.default = {
            themeClassHash: {},
            register: function(a, b) {
                this.themeClassHash[a] = b
            },
            getThemeClass: function(a) {
                return a ? !0 === a ? e.default : this.themeClassHash[a] : d.default
            }
        }
    }, function(a, b, c) {
        function d(a) {
            return "en" !== a.locale() ? a.clone().locale("en") : a
        }

        function e(a, b) {
            return n(h(b).fakeFormatString, a)
        }

        function f(a, b, c, d, e) {
            var f;
            return a = r.default.parseZone(a), b = r.default.parseZone(b), f = a.localeData(), c = f.longDateFormat(c) || c, g(h(c), a, b, d || " - ", e)
        }

        function g(a, b, c, d, e) {
            var f, g, h, i = a.sameUnits,
                j = b.clone().stripZone(),
                k = c.clone().stripZone(),
                l = o(a.fakeFormatString, b),
                m = o(a.fakeFormatString, c),
                n = "",
                q = "",
                r = "",
                s = "",
                t = "";
            for (f = 0; f < i.length && (!i[f] || j.isSame(k, i[f])); f++) n += l[f];
            for (g = i.length - 1; g > f && (!i[g] || j.isSame(k, i[g])) && (g - 1 !== f || "." !== l[g]); g--) q = l[g] + q;
            for (h = f; h <= g; h++) r += l[h], s += m[h];
            return (r || s) && (t = e ? s + d + r : r + d + s), p(n + t + q)
        }

        function h(a) {
            return y[a] || (y[a] = i(a))
        }

        function i(a) {
            var b = j(a);
            return {
                fakeFormatString: l(b),
                sameUnits: m(b)
            }
        }

        function j(a) {
            for (var b, c = [], d = /\[([^\]]*)\]|\(([^\)]*)\)|(LTS|LT|(\w)\4*o?)|([^\w\[\(]+)/g; b = d.exec(a);) b[1] ? c.push.apply(c, k(b[1])) : b[2] ? c.push({
                maybe: j(b[2])
            }) : b[3] ? c.push({
                token: b[3]
            }) : b[5] && c.push.apply(c, k(b[5]));
            return c
        }

        function k(a) {
            return ". " === a ? [".", " "] : [a]
        }

        function l(a) {
            var b, c, d = [];
            for (b = 0; b < a.length; b++) c = a[b], "string" == typeof c ? d.push("[" + c + "]") : c.token ? c.token in w ? d.push(t + "[" + c.token + "]") : d.push(c.token) : c.maybe && d.push(u + l(c.maybe) + u);
            return d.join(s)
        }

        function m(a) {
            var b, c, d, e = [];
            for (b = 0; b < a.length; b++) c = a[b], c.token ? (d = x[c.token.charAt(0)], e.push(d ? d.unit : "second")) : c.maybe ? e.push.apply(e, m(c.maybe)) : e.push(null);
            return e
        }

        function n(a, b) {
            return p(o(a, b).join(""))
        }

        function o(a, b) {
            var c, d, e = [],
                f = r.oldMomentFormat(b, a),
                g = f.split(s);
            for (c = 0; c < g.length; c++) d = g[c], d.charAt(0) === t ? e.push(w[d.substring(1)](b)) : e.push(d);
            return e
        }

        function p(a) {
            return a.replace(v, function(a, b) {
                return b.match(/[1-9]/) ? b : ""
            })
        }

        function q(a) {
            var b, c, d, e, f = j(a);
            for (b = 0; b < f.length; b++) c = f[b], c.token && (d = x[c.token.charAt(0)]) && (!e || d.value > e.value) && (e = d);
            return e ? e.unit : null
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var r = c(9);
        r.newMomentProto.format = function() {
            return this._fullCalendar && arguments[0] ? e(this, arguments[0]) : this._ambigTime ? r.oldMomentFormat(d(this), "YYYY-MM-DD") : this._ambigZone ? r.oldMomentFormat(d(this), "YYYY-MM-DD[T]HH:mm:ss") : this._fullCalendar ? r.oldMomentFormat(d(this)) : r.oldMomentProto.format.apply(this, arguments)
        }, r.newMomentProto.toISOString = function() {
            return this._ambigTime ? r.oldMomentFormat(d(this), "YYYY-MM-DD") : this._ambigZone ? r.oldMomentFormat(d(this), "YYYY-MM-DD[T]HH:mm:ss") : this._fullCalendar ? r.oldMomentProto.toISOString.apply(d(this), arguments) : r.oldMomentProto.toISOString.apply(this, arguments)
        };
        var s = "\v",
            t = "",
            u = "",
            v = new RegExp(u + "([^" + u + "]*)" + u, "g"),
            w = {
                t: function(a) {
                    return r.oldMomentFormat(a, "a").charAt(0)
                },
                T: function(a) {
                    return r.oldMomentFormat(a, "A").charAt(0)
                }
            },
            x = {
                Y: {
                    value: 1,
                    unit: "year"
                },
                M: {
                    value: 2,
                    unit: "month"
                },
                W: {
                    value: 3,
                    unit: "week"
                },
                w: {
                    value: 3,
                    unit: "week"
                },
                D: {
                    value: 4,
                    unit: "day"
                },
                d: {
                    value: 4,
                    unit: "day"
                }
            };
        b.formatDate = e, b.formatRange = f;
        var y = {};
        b.queryMostGranularFormatUnit = q
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = function() {
                function a(a) {
                    this.isHorizontal = !1, this.isVertical = !1, this.els = d(a.els), this.isHorizontal = a.isHorizontal, this.isVertical = a.isVertical, this.forcedOffsetParentEl = a.offsetParent ? d(a.offsetParent) : null
                }
                return a.prototype.build = function() {
                    var a = this.forcedOffsetParentEl;
                    !a && this.els.length > 0 && (a = this.els.eq(0).offsetParent()), this.origin = a ? a.offset() : null, this.boundingRect = this.queryBoundingRect(), this.isHorizontal && this.buildElHorizontals(), this.isVertical && this.buildElVerticals()
                }, a.prototype.clear = function() {
                    this.origin = null, this.boundingRect = null, this.lefts = null, this.rights = null, this.tops = null, this.bottoms = null
                }, a.prototype.ensureBuilt = function() {
                    this.origin || this.build()
                }, a.prototype.buildElHorizontals = function() {
                    var a = [],
                        b = [];
                    this.els.each(function(c, e) {
                        var f = d(e),
                            g = f.offset().left,
                            h = f.outerWidth();
                        a.push(g), b.push(g + h)
                    }), this.lefts = a, this.rights = b
                }, a.prototype.buildElVerticals = function() {
                    var a = [],
                        b = [];
                    this.els.each(function(c, e) {
                        var f = d(e),
                            g = f.offset().top,
                            h = f.outerHeight();
                        a.push(g), b.push(g + h)
                    }), this.tops = a, this.bottoms = b
                }, a.prototype.getHorizontalIndex = function(a) {
                    this.ensureBuilt();
                    var b, c = this.lefts,
                        d = this.rights,
                        e = c.length;
                    for (b = 0; b < e; b++)
                        if (a >= c[b] && a < d[b]) return b
                }, a.prototype.getVerticalIndex = function(a) {
                    this.ensureBuilt();
                    var b, c = this.tops,
                        d = this.bottoms,
                        e = c.length;
                    for (b = 0; b < e; b++)
                        if (a >= c[b] && a < d[b]) return b
                }, a.prototype.getLeftOffset = function(a) {
                    return this.ensureBuilt(), this.lefts[a]
                }, a.prototype.getLeftPosition = function(a) {
                    return this.ensureBuilt(), this.lefts[a] - this.origin.left
                }, a.prototype.getRightOffset = function(a) {
                    return this.ensureBuilt(), this.rights[a]
                }, a.prototype.getRightPosition = function(a) {
                    return this.ensureBuilt(), this.rights[a] - this.origin.left
                }, a.prototype.getWidth = function(a) {
                    return this.ensureBuilt(), this.rights[a] - this.lefts[a]
                }, a.prototype.getTopOffset = function(a) {
                    return this.ensureBuilt(), this.tops[a]
                }, a.prototype.getTopPosition = function(a) {
                    return this.ensureBuilt(), this.tops[a] - this.origin.top
                }, a.prototype.getBottomOffset = function(a) {
                    return this.ensureBuilt(), this.bottoms[a]
                }, a.prototype.getBottomPosition = function(a) {
                    return this.ensureBuilt(), this.bottoms[a] - this.origin.top
                }, a.prototype.getHeight = function(a) {
                    return this.ensureBuilt(), this.bottoms[a] - this.tops[a]
                }, a.prototype.queryBoundingRect = function() {
                    var a;
                    return this.els.length > 0 && (a = e.getScrollParent(this.els.eq(0)), !a.is(document)) ? e.getClientRect(a) : null
                }, a.prototype.isPointInBounds = function(a, b) {
                    return this.isLeftInBounds(a) && this.isTopInBounds(b)
                }, a.prototype.isLeftInBounds = function(a) {
                    return !this.boundingRect || a >= this.boundingRect.left && a < this.boundingRect.right
                }, a.prototype.isTopInBounds = function(a) {
                    return !this.boundingRect || a >= this.boundingRect.top && a < this.boundingRect.bottom
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = c(6),
            g = c(14),
            h = function() {
                function a(a) {
                    this.isInteracting = !1, this.isDistanceSurpassed = !1, this.isDelayEnded = !1, this.isDragging = !1, this.isTouch = !1, this.isGeneric = !1, this.shouldCancelTouchScroll = !0, this.scrollAlwaysKills = !1, this.isAutoScroll = !1, this.scrollSensitivity = 30, this.scrollSpeed = 200, this.scrollIntervalMs = 50, this.options = a || {}
                }
                return a.prototype.startInteraction = function(a, b) {
                    if (void 0 === b && (b = {}), "mousedown" === a.type) {
                        if (g.default.get().shouldIgnoreMouse()) return;
                        if (!e.isPrimaryMouseButton(a)) return;
                        a.preventDefault()
                    }
                    this.isInteracting || (this.delay = e.firstDefined(b.delay, this.options.delay, 0), this.minDistance = e.firstDefined(b.distance, this.options.distance, 0), this.subjectEl = this.options.subjectEl, e.preventSelection(d("body")), this.isInteracting = !0, this.isTouch = e.getEvIsTouch(a), this.isGeneric = "dragstart" === a.type, this.isDelayEnded = !1, this.isDistanceSurpassed = !1, this.originX = e.getEvX(a), this.originY = e.getEvY(a), this.scrollEl = e.getScrollParent(d(a.target)), this.bindHandlers(), this.initAutoScroll(), this.handleInteractionStart(a), this.startDelay(a), this.minDistance || this.handleDistanceSurpassed(a))
                }, a.prototype.handleInteractionStart = function(a) {
                    this.trigger("interactionStart", a)
                }, a.prototype.endInteraction = function(a, b) {
                    this.isInteracting && (this.endDrag(a), this.delayTimeoutId && (clearTimeout(this.delayTimeoutId), this.delayTimeoutId = null), this.destroyAutoScroll(), this.unbindHandlers(), this.isInteracting = !1, this.handleInteractionEnd(a, b), e.allowSelection(d("body")))
                }, a.prototype.handleInteractionEnd = function(a, b) {
                    this.trigger("interactionEnd", a, b || !1)
                }, a.prototype.bindHandlers = function() {
                    var a = g.default.get();
                    this.isGeneric ? this.listenTo(d(document), {
                        drag: this.handleMove,
                        dragstop: this.endInteraction
                    }) : this.isTouch ? this.listenTo(a, {
                        touchmove: this.handleTouchMove,
                        touchend: this.endInteraction,
                        scroll: this.handleTouchScroll
                    }) : this.listenTo(a, {
                        mousemove: this.handleMouseMove,
                        mouseup: this.endInteraction
                    }), this.listenTo(a, {
                        selectstart: e.preventDefault,
                        contextmenu: e.preventDefault
                    })
                }, a.prototype.unbindHandlers = function() {
                    this.stopListeningTo(g.default.get()), this.stopListeningTo(d(document))
                }, a.prototype.startDrag = function(a, b) {
                    this.startInteraction(a, b), this.isDragging || (this.isDragging = !0, this.handleDragStart(a))
                }, a.prototype.handleDragStart = function(a) {
                    this.trigger("dragStart", a)
                }, a.prototype.handleMove = function(a) {
                    var b = e.getEvX(a) - this.originX,
                        c = e.getEvY(a) - this.originY,
                        d = this.minDistance;
                    this.isDistanceSurpassed || b * b + c * c >= d * d && this.handleDistanceSurpassed(a), this.isDragging && this.handleDrag(b, c, a)
                }, a.prototype.handleDrag = function(a, b, c) {
                    this.trigger("drag", a, b, c), this.updateAutoScroll(c)
                }, a.prototype.endDrag = function(a) {
                    this.isDragging && (this.isDragging = !1, this.handleDragEnd(a))
                }, a.prototype.handleDragEnd = function(a) {
                    this.trigger("dragEnd", a)
                }, a.prototype.startDelay = function(a) {
                    var b = this;
                    this.delay ? this.delayTimeoutId = setTimeout(function() {
                        b.handleDelayEnd(a)
                    }, this.delay) : this.handleDelayEnd(a)
                }, a.prototype.handleDelayEnd = function(a) {
                    this.isDelayEnded = !0, this.isDistanceSurpassed && this.startDrag(a)
                }, a.prototype.handleDistanceSurpassed = function(a) {
                    this.isDistanceSurpassed = !0, this.isDelayEnded && this.startDrag(a)
                }, a.prototype.handleTouchMove = function(a) {
                    this.isDragging && this.shouldCancelTouchScroll && a.preventDefault(), this.handleMove(a)
                }, a.prototype.handleMouseMove = function(a) {
                    this.handleMove(a)
                }, a.prototype.handleTouchScroll = function(a) {
                    this.isDragging && !this.scrollAlwaysKills || this.endInteraction(a, !0)
                }, a.prototype.trigger = function(a) {
                    for (var b = [], c = 1; c < arguments.length; c++) b[c - 1] = arguments[c];
                    this.options[a] && this.options[a].apply(this, b), this["_" + a] && this["_" + a].apply(this, b)
                }, a.prototype.initAutoScroll = function() {
                    var a = this.scrollEl;
                    this.isAutoScroll = this.options.scroll && a && !a.is(window) && !a.is(document), this.isAutoScroll && this.listenTo(a, "scroll", e.debounce(this.handleDebouncedScroll, 100))
                }, a.prototype.destroyAutoScroll = function() {
                    this.endAutoScroll(), this.isAutoScroll && this.stopListeningTo(this.scrollEl, "scroll")
                }, a.prototype.computeScrollBounds = function() {
                    this.isAutoScroll && (this.scrollBounds = e.getOuterRect(this.scrollEl))
                }, a.prototype.updateAutoScroll = function(a) {
                    var b, c, d, f, g = this.scrollSensitivity,
                        h = this.scrollBounds,
                        i = 0,
                        j = 0;
                    h && (b = (g - (e.getEvY(a) - h.top)) / g, c = (g - (h.bottom - e.getEvY(a))) / g, d = (g - (e.getEvX(a) - h.left)) / g, f = (g - (h.right - e.getEvX(a))) / g, b >= 0 && b <= 1 ? i = b * this.scrollSpeed * -1 : c >= 0 && c <= 1 && (i = c * this.scrollSpeed), d >= 0 && d <= 1 ? j = d * this.scrollSpeed * -1 : f >= 0 && f <= 1 && (j = f * this.scrollSpeed)), this.setScrollVel(i, j)
                }, a.prototype.setScrollVel = function(a, b) {
                    this.scrollTopVel = a, this.scrollLeftVel = b, this.constrainScrollVel(), !this.scrollTopVel && !this.scrollLeftVel || this.scrollIntervalId || (this.scrollIntervalId = setInterval(e.proxy(this, "scrollIntervalFunc"), this.scrollIntervalMs))
                }, a.prototype.constrainScrollVel = function() {
                    var a = this.scrollEl;
                    this.scrollTopVel < 0 ? a.scrollTop() <= 0 && (this.scrollTopVel = 0) : this.scrollTopVel > 0 && a.scrollTop() + a[0].clientHeight >= a[0].scrollHeight && (this.scrollTopVel = 0), this.scrollLeftVel < 0 ? a.scrollLeft() <= 0 && (this.scrollLeftVel = 0) : this.scrollLeftVel > 0 && a.scrollLeft() + a[0].clientWidth >= a[0].scrollWidth && (this.scrollLeftVel = 0)
                }, a.prototype.scrollIntervalFunc = function() {
                    var a = this.scrollEl,
                        b = this.scrollIntervalMs / 1e3;
                    this.scrollTopVel && a.scrollTop(a.scrollTop() + this.scrollTopVel * b), this.scrollLeftVel && a.scrollLeft(a.scrollLeft() + this.scrollLeftVel * b), this.constrainScrollVel(), this.scrollTopVel || this.scrollLeftVel || this.endAutoScroll()
                }, a.prototype.endAutoScroll = function() {
                    this.scrollIntervalId && (clearInterval(this.scrollIntervalId), this.scrollIntervalId = null, this.handleScrollEnd())
                }, a.prototype.handleDebouncedScroll = function() {
                    this.scrollIntervalId || this.handleScrollEnd()
                }, a.prototype.handleScrollEnd = function() {}, a
            }();
        b.default = h, f.default.mixInto(h)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = c(12),
            g = function(a) {
                function b() {
                    var b = null !== a && a.apply(this, arguments) || this;
                    return b.breakOnWeeks = !1, b
                }
                return d.__extends(b, a), b.prototype.updateDayTable = function() {
                    for (var a, b, c, d = this, e = d.view, f = e.calendar, g = f.msToUtcMoment(d.dateProfile.renderUnzonedRange.startMs, !0), h = f.msToUtcMoment(d.dateProfile.renderUnzonedRange.endMs, !0), i = -1, j = [], k = []; g.isBefore(h);) e.isHiddenDay(g) ? j.push(i + .5) : (i++, j.push(i), k.push(g.clone())), g.add(1, "days");
                    if (this.breakOnWeeks) {
                        for (b = k[0].day(), a = 1; a < k.length && k[a].day() != b; a++);
                        c = Math.ceil(k.length / a)
                    } else c = 1, a = k.length;
                    this.dayDates = k, this.dayIndices = j, this.daysPerRow = a, this.rowCnt = c, this.updateDayTableCols()
                }, b.prototype.updateDayTableCols = function() {
                    this.colCnt = this.computeColCnt(), this.colHeadFormat = this.opt("columnFormat") || this.computeColHeadFormat()
                }, b.prototype.computeColCnt = function() {
                    return this.daysPerRow
                }, b.prototype.getCellDate = function(a, b) {
                    return this.dayDates[this.getCellDayIndex(a, b)].clone()
                }, b.prototype.getCellRange = function(a, b) {
                    var c = this.getCellDate(a, b);
                    return {
                        start: c,
                        end: c.clone().add(1, "days")
                    }
                }, b.prototype.getCellDayIndex = function(a, b) {
                    return a * this.daysPerRow + this.getColDayIndex(b)
                }, b.prototype.getColDayIndex = function(a) {
                    return this.isRTL ? this.colCnt - 1 - a : a
                }, b.prototype.getDateDayIndex = function(a) {
                    var b = this.dayIndices,
                        c = a.diff(this.dayDates[0], "days");
                    return c < 0 ? b[0] - 1 : c >= b.length ? b[b.length - 1] + 1 : b[c]
                }, b.prototype.computeColHeadFormat = function() {
                    return this.rowCnt > 1 || this.colCnt > 10 ? "ddd" : this.colCnt > 1 ? this.opt("dayOfMonthFormat") : "dddd"
                }, b.prototype.sliceRangeByRow = function(a) {
                    var b, c, d, e, f, g = this.daysPerRow,
                        h = this.view.computeDayRange(a),
                        i = this.getDateDayIndex(h.start),
                        j = this.getDateDayIndex(h.end.clone().subtract(1, "days")),
                        k = [];
                    for (b = 0; b < this.rowCnt; b++) c = b * g, d = c + g - 1, e = Math.max(i, c), f = Math.min(j, d), e = Math.ceil(e), f = Math.floor(f), e <= f && k.push({
                        row: b,
                        firstRowDayIndex: e - c,
                        lastRowDayIndex: f - c,
                        isStart: e === i,
                        isEnd: f === j
                    });
                    return k
                }, b.prototype.sliceRangeByDay = function(a) {
                    var b, c, d, e, f, g, h = this.daysPerRow,
                        i = this.view.computeDayRange(a),
                        j = this.getDateDayIndex(i.start),
                        k = this.getDateDayIndex(i.end.clone().subtract(1, "days")),
                        l = [];
                    for (b = 0; b < this.rowCnt; b++)
                        for (c = b * h, d = c + h - 1, e = c; e <= d; e++) f = Math.max(j, e), g = Math.min(k, e), f = Math.ceil(f), g = Math.floor(g), f <= g && l.push({
                            row: b,
                            firstRowDayIndex: f - c,
                            lastRowDayIndex: g - c,
                            isStart: f === j,
                            isEnd: g === k
                        });
                    return l
                }, b.prototype.renderHeadHtml = function() {
                    var a = this.view.calendar.theme;
                    return '<div class="fc-row ' + a.getClass("headerRow") + '"><table class="' + a.getClass("tableGrid") + '"><thead>' + this.renderHeadTrHtml() + "</thead></table></div>"
                }, b.prototype.renderHeadIntroHtml = function() {
                    return this.renderIntroHtml()
                }, b.prototype.renderHeadTrHtml = function() {
                    return "<tr>" + (this.isRTL ? "" : this.renderHeadIntroHtml()) + this.renderHeadDateCellsHtml() + (this.isRTL ? this.renderHeadIntroHtml() : "") + "</tr>"
                }, b.prototype.renderHeadDateCellsHtml = function() {
                    var a, b, c = [];
                    for (a = 0; a < this.colCnt; a++) b = this.getCellDate(0, a), c.push(this.renderHeadDateCellHtml(b));
                    return c.join("")
                }, b.prototype.renderHeadDateCellHtml = function(a, b, c) {
                    var d = this,
                        f = d.view,
                        g = d.dateProfile.activeUnzonedRange.containsDate(a),
                        h = ["fc-day-header", f.calendar.theme.getClass("widgetHeader")],
                        i = e.htmlEscape(a.format(d.colHeadFormat));
                    return 1 === d.rowCnt ? h = h.concat(d.getDayClasses(a, !0)) : h.push("fc-" + e.dayIDs[a.day()]), '<th class="' + h.join(" ") + '"' + (1 === (g && d.rowCnt) ? ' data-date="' + a.format("YYYY-MM-DD") + '"' : "") + (b > 1 ? ' colspan="' + b + '"' : "") + (c ? " " + c : "") + ">" + (g ? f.buildGotoAnchorHtml({
                        date: a,
                        forceOff: d.rowCnt > 1 || 1 === d.colCnt
                    }, i) : i) + "</th>"
                }, b.prototype.renderBgTrHtml = function(a,tr) {
                    return "<tr class='main_tr"+tr+"'>" + (this.isRTL ? "" : this.renderBgIntroHtml(a)) + this.renderBgCellsHtml(a) + (this.isRTL ? this.renderBgIntroHtml(a) : "") + "</tr>"
                }, b.prototype.renderBgIntroHtml = function(a) {
                    return this.renderIntroHtml()
                }, b.prototype.renderBgCellsHtml = function(a) {
                    var b, c, d = [];
                    for (b = 0; b < this.colCnt; b++) c = this.getCellDate(a, b), d.push(this.renderBgCellHtml(c));
                    return d.join("")
                }, b.prototype.renderBgCellHtml = function(a, b) {
                    var c = this,
                        d = c.view,
                        e = c.dateProfile.activeUnzonedRange.containsDate(a),
                        f = c.getDayClasses(a);
                    return f.unshift("fc-day", d.calendar.theme.getClass("widgetContent")), '<td class="' + f.join(" ") + '"' + (e ? ' data-date="' + a.format("YYYY-MM-DD") + '"' : "") + (b ? " " + b : "") + "></td>"
                }, b.prototype.renderIntroHtml = function() {}, b.prototype.bookendCells = function(a) {
                    var b = this.renderIntroHtml();
                    b && (this.isRTL ? a.append(b) : a.prepend(b))
                }, b
            }(f.default);
        b.default = g
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a, b) {
                this.component = a, this.fillRenderer = b
            }
            return a.prototype.render = function(a) {
                var b = this.component,
                    c = b._getDateProfile().activeUnzonedRange,
                    d = a.buildEventInstanceGroup(b.hasAllDayBusinessHours, c),
                    e = d ? b.eventRangesToEventFootprints(d.sliceRenderRanges(c)) : [];
                this.renderEventFootprints(e)
            }, a.prototype.renderEventFootprints = function(a) {
                var b = this.component.eventFootprintsToSegs(a);
                this.renderSegs(b), this.segs = b
            }, a.prototype.renderSegs = function(a) {
                this.fillRenderer && this.fillRenderer.renderSegs("businessHours", a, {
                    getClasses: function(a) {
                        return ["fc-nonbusiness", "fc-bgevent"]
                    }
                })
            }, a.prototype.unrender = function() {
                this.fillRenderer && this.fillRenderer.unrender("businessHours"), this.segs = null
            }, a.prototype.getSegs = function() {
                return this.segs || []
            }, a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = function() {
                function a(a) {
                    this.fillSegTag = "div", this.component = a, this.elsByFill = {}
                }
                return a.prototype.renderFootprint = function(a, b, c) {
                    this.renderSegs(a, this.component.componentFootprintToSegs(b), c)
                }, a.prototype.renderSegs = function(a, b, c) {
                    var d;
                    return b = this.buildSegEls(a, b, c), d = this.attachSegEls(a, b), d && this.reportEls(a, d), b
                }, a.prototype.unrender = function(a) {
                    var b = this.elsByFill[a];
                    b && (b.remove(), delete this.elsByFill[a])
                }, a.prototype.buildSegEls = function(a, b, c) {
                    var e, f = this,
                        g = "",
                        h = [];
                    if (b.length) {
                        for (e = 0; e < b.length; e++) g += this.buildSegHtml(a, b[e], c);
                        d(g).each(function(a, e) {
                            var g = b[a],
                                i = d(e);
                            c.filterEl && (i = c.filterEl(g, i)), i && (i = d(i), i.is(f.fillSegTag) && (g.el = i, h.push(g)))
                        })
                    }
                    return h
                }, a.prototype.buildSegHtml = function(a, b, c) {
                    var d = c.getClasses ? c.getClasses(b) : [],
                        f = e.cssToStr(c.getCss ? c.getCss(b) : {});
                    return "<" + this.fillSegTag + (d.length ? ' class="' + d.join(" ") + '"' : "") + (f ? ' style="' + f + '"' : "") + " />"
                }, a.prototype.attachSegEls = function(a, b) {}, a.prototype.reportEls = function(a, b) {
                    this.elsByFill[a] ? this.elsByFill[a] = this.elsByFill[a].add(b) : this.elsByFill[a] = d(b)
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(11),
            e = c(24),
            f = c(5),
            g = function() {
                function a(a, b) {
                    this.view = a._getView(), this.component = a, this.eventRenderer = b
                }
                return a.prototype.renderComponentFootprint = function(a) {
                    this.renderEventFootprints([this.fabricateEventFootprint(a)])
                }, a.prototype.renderEventDraggingFootprints = function(a, b, c) {
                    this.renderEventFootprints(a, b, "fc-dragging", c ? null : this.view.opt("dragOpacity"))
                }, a.prototype.renderEventResizingFootprints = function(a, b, c) {
                    this.renderEventFootprints(a, b, "fc-resizing")
                }, a.prototype.renderEventFootprints = function(a, b, c, d) {
                    var e, f = this.component.eventFootprintsToSegs(a),
                        g = "fc-helper " + (c || "");
                    for (f = this.eventRenderer.renderFgSegEls(f), e = 0; e < f.length; e++) f[e].el.addClass(g);
                    if (null != d)
                        for (e = 0; e < f.length; e++) f[e].el.css("opacity", d);
                    this.helperEls = this.renderSegs(f, b)
                }, a.prototype.renderSegs = function(a, b) {}, a.prototype.unrender = function() {
                    this.helperEls && (this.helperEls.remove(), this.helperEls = null)
                }, a.prototype.fabricateEventFootprint = function(a) {
                    var b, c = this.view.calendar,
                        g = c.footprintToDateProfile(a),
                        h = new d.default(new f.default(c));
                    return h.dateProfile = g, b = h.buildInstance(), new e.default(a, h, b)
                }, a
            }();
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(14),
            f = c(13),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.bindToEl = function(a) {
                    var b = this.component;
                    b.bindSegHandlerToEl(a, "click", this.handleClick.bind(this)), b.bindSegHandlerToEl(a, "mouseenter", this.handleMouseover.bind(this)), b.bindSegHandlerToEl(a, "mouseleave", this.handleMouseout.bind(this))
                }, b.prototype.handleClick = function(a, b) {
                    !1 === this.component.publiclyTrigger("eventClick", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, this.view]
                    }) && b.preventDefault()
                }, b.prototype.handleMouseover = function(a, b) {
                    e.default.get().shouldIgnoreMouse() || this.mousedOverSeg || (this.mousedOverSeg = a, this.view.isEventDefResizable(a.footprint.eventDef) && a.el.addClass("fc-allow-mouse-resize"), this.component.publiclyTrigger("eventMouseover", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, this.view]
                    }))
                }, b.prototype.handleMouseout = function(a, b) {
                    this.mousedOverSeg && (this.mousedOverSeg = null, this.view.isEventDefResizable(a.footprint.eventDef) && a.el.removeClass("fc-allow-mouse-resize"), this.component.publiclyTrigger("eventMouseout", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b || {}, this.view]
                    }))
                }, b.prototype.end = function() {
                    this.mousedOverSeg && this.handleMouseout(this.mousedOverSeg)
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(12),
            f = c(82),
            g = c(66),
            h = c(44),
            i = c(65),
            j = c(64),
            k = c(63),
            l = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b
            }(e.default);
        b.default = l, l.prototype.dateClickingClass = f.default, l.prototype.dateSelectingClass = g.default, l.prototype.eventPointingClass = h.default, l.prototype.eventDraggingClass = i.default, l.prototype.eventResizingClass = j.default, l.prototype.externalDroppingClass = k.default
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(38),
            h = c(86),
            i = c(4),
            j = c(10),
            k = c(24),
            l = c(41),
            m = c(45),
            n = c(29),
            o = c(40),
            p = c(87),
            q = c(88),
            r = c(89),
            s = function(a) {
                function b(b) {
                    var c = a.call(this, b) || this;
                    return c.cellWeekNumbersVisible = !1, c.bottomCoordPadding = 0, c.isRigid = !1, c.hasAllDayBusinessHours = !0, c
                }
                return d.__extends(b, a), b.prototype.componentFootprintToSegs = function(a) {
                    var b, c, d = this.sliceRangeByRow(a.unzonedRange);
                    for (b = 0; b < d.length; b++) c = d[b], this.isRTL ? (c.leftCol = this.daysPerRow - 1 - c.lastRowDayIndex, c.rightCol = this.daysPerRow - 1 - c.firstRowDayIndex) : (c.leftCol = c.firstRowDayIndex, c.rightCol = c.lastRowDayIndex);
                    return d
                }, b.prototype.renderDates = function(a) {
                    this.dateProfile = a, this.updateDayTable(), this.renderGrid()
                }, b.prototype.unrenderDates = function() {
                    this.removeSegPopover()
                }, b.prototype.renderGrid = function() {
                    var a, b, c = this.view,
                        d = this.rowCnt,
                        e = this.colCnt,
                        f = "";
                    for (this.headContainerEl && this.headContainerEl.html(this.renderHeadHtml()), a = 0; a < d; a++) f += this.renderDayRowHtml(a, this.isRigid);
                    for (this.el.html(f), this.rowEls = this.el.find(".fc-row"), this.cellEls = this.el.find(".fc-day, .fc-disabled-day"), this.rowCoordCache = new g.default({
                            els: this.rowEls,
                            isVertical: !0
                        }), this.colCoordCache = new g.default({
                            els: this.cellEls.slice(0, this.colCnt),
                            isHorizontal: !0
                        }), a = 0; a < d; a++)
                        for (b = 0; b < e; b++) this.publiclyTrigger("dayRender", {
                            context: c,
                            args: [this.getCellDate(a, b), this.getCellEl(a, b), c]
                        })
                }, b.prototype.renderDayRowHtml = function(a, b) {
                    var c = this.view.calendar.theme,
                        d = ["fc-row", "fc-week", c.getClass("dayRow")];
                    return b && d.push("fc-rigid"), '<div class="' + d.join(" ") + '"><div class="fc-bg"><table class="' + c.getClass("tableGrid") + '">' + this.renderBgTrHtml(a,0) + '</table></div><div class="fc-content-skeleton"><table>' + (this.getIsNumbersVisible() ? "<thead>" + this.renderNumberTrHtml(a) + "</thead>" : "") + "</table></div></div>"
                }, b.prototype.getIsNumbersVisible = function() {
                    return this.getIsDayNumbersVisible() || this.cellWeekNumbersVisible
                }, b.prototype.getIsDayNumbersVisible = function() {
                    return this.rowCnt > 1
                }, b.prototype.renderNumberTrHtml = function(a) {
                    return "<tr>" + (this.isRTL ? "" : this.renderNumberIntroHtml(a)) + this.renderNumberCellsHtml(a) + (this.isRTL ? this.renderNumberIntroHtml(a) : "") + "</tr>"
                }, b.prototype.renderNumberIntroHtml = function(a) {
                    return this.renderIntroHtml()
                }, b.prototype.renderNumberCellsHtml = function(a) {
                    var b, c, d = [];
                    for (b = 0; b < this.colCnt; b++) c = this.getCellDate(a, b), d.push(this.renderNumberCellHtml(c));
                    return d.join("")
                }, b.prototype.renderNumberCellHtml = function(a) {
                    var b, c, d = this.view,
                        e = "",
                        f = this.dateProfile.activeUnzonedRange.containsDate(a),
                        g = this.getIsDayNumbersVisible() && f;
                    return g || this.cellWeekNumbersVisible ? (b = this.getDayClasses(a), b.unshift("fc-day-top"), this.cellWeekNumbersVisible && (c = "ISO" === a._locale._fullCalendar_weekCalc ? 1 : a._locale.firstDayOfWeek()), e += '<td class="' + b.join(" ") + '"' + (f ? ' data-date="' + a.format() + '"' : "") + ">", this.cellWeekNumbersVisible && a.day() == c && (e += d.buildGotoAnchorHtml({
                        date: a,
                        type: "week"
                    }, {
                        class: "fc-week-number"
                    }, a.format("w"))), g && (e += d.buildGotoAnchorHtml(a, {
                        class: "fc-day-number"
                    }, a.date())), e += "</td>") : "<td/>"
                }, b.prototype.prepareHits = function() {
                    this.colCoordCache.build(), this.rowCoordCache.build(), this.rowCoordCache.bottoms[this.rowCnt - 1] += this.bottomCoordPadding
                }, b.prototype.releaseHits = function() {
                    this.colCoordCache.clear(), this.rowCoordCache.clear()
                }, b.prototype.queryHit = function(a, b) {
                    if (this.colCoordCache.isLeftInBounds(a) && this.rowCoordCache.isTopInBounds(b)) {
                        var c = this.colCoordCache.getHorizontalIndex(a),
                            d = this.rowCoordCache.getVerticalIndex(b);
                        if (null != d && null != c) return this.getCellHit(d, c)
                    }
                }, b.prototype.getHitFootprint = function(a) {
                    var b = this.getCellRange(a.row, a.col);
                    return new j.default(new i.default(b.start, b.end), !0)
                }, b.prototype.getHitEl = function(a) {
                    return this.getCellEl(a.row, a.col)
                }, b.prototype.getCellHit = function(a, b) {
                    return {
                        row: a,
                        col: b,
                        component: this,
                        left: this.colCoordCache.getLeftOffset(b),
                        right: this.colCoordCache.getRightOffset(b),
                        top: this.rowCoordCache.getTopOffset(a),
                        bottom: this.rowCoordCache.getBottomOffset(a)
                    }
                }, b.prototype.getCellEl = function(a, b) {
                    return this.cellEls.eq(a * this.colCnt + b)
                }, b.prototype.executeEventUnrender = function() {
                    this.removeSegPopover(), a.prototype.executeEventUnrender.call(this)
                }, b.prototype.getOwnEventSegs = function() {
                    return a.prototype.getOwnEventSegs.call(this).concat(this.popoverSegs || [])
                }, b.prototype.renderDrag = function(a, b, c) {
                    var d;
                    for (d = 0; d < a.length; d++) this.renderHighlight(a[d].componentFootprint);
                    if (a.length && b && b.component !== this) return this.helperRenderer.renderEventDraggingFootprints(a, b, c), !0
                }, b.prototype.unrenderDrag = function() {
                    this.unrenderHighlight(), this.helperRenderer.unrender()
                }, b.prototype.renderEventResize = function(a, b, c) {
                    var d;
                    for (d = 0; d < a.length; d++) this.renderHighlight(a[d].componentFootprint);
                    this.helperRenderer.renderEventResizingFootprints(a, b, c)
                }, b.prototype.unrenderEventResize = function() {
                    this.unrenderHighlight(), this.helperRenderer.unrender()
                }, b.prototype.removeSegPopover = function() {
                    this.segPopover && this.segPopover.hide()
                }, b.prototype.limitRows = function(a) {
                    var b, c, d = this.eventRenderer.rowStructs || [];
                    for (b = 0; b < d.length; b++) this.unlimitRow(b), !1 !== (c = !!a && ("number" == typeof a ? a : this.computeRowLevelLimit(b))) && this.limitRow(b, c)
                }, b.prototype.computeRowLevelLimit = function(a) {
                    function b(a, b) {
                        f = Math.max(f, e(b).outerHeight())
                    }
                    var c, d, f, g = this.rowEls.eq(a),
                        h = g.height(),
                        i = this.eventRenderer.rowStructs[a].tbodyEl.children();
                    for (c = 0; c < i.length; c++)
                        if (d = i.eq(c).removeClass("fc-limited"), f = 0, d.find("> td > :first-child").each(b), d.position().top + f > h) return c;
                    return !1
                }, b.prototype.limitRow = function(a, b) {
                    var c, d, f, g, h, i, j, k, l, m, n, o, p, q, r, s = this,
                        t = this.eventRenderer.rowStructs[a],
                        u = [],
                        v = 0,
                        w = function(c) {
                            for (; v < c;) i = s.getCellSegs(a, v, b), i.length && (l = d[b - 1][v], r = s.renderMoreLink(a, v, i), q = e("<div/>").append(r), l.append(q), u.push(q[0])), v++
                        };
                    if (b && b < t.segLevels.length) {
                        for (c = t.segLevels[b - 1], d = t.cellMatrix, f = t.tbodyEl.children().slice(b).addClass("fc-limited").get(), g = 0; g < c.length; g++) {
                            for (h = c[g], w(h.leftCol), k = [], j = 0; v <= h.rightCol;) i = this.getCellSegs(a, v, b), k.push(i), j += i.length, v++;
                            if (j) {
                                for (l = d[b - 1][h.leftCol], m = l.attr("rowspan") || 1, n = [], o = 0; o < k.length; o++) p = e('<td class="fc-more-cell"/>').attr("rowspan", m), i = k[o], r = this.renderMoreLink(a, h.leftCol + o, [h].concat(i)), q = e("<div/>").append(r), p.append(q), n.push(p[0]), u.push(p[0]);
                                l.addClass("fc-limited").after(e(n)), f.push(l[0])
                            }
                        }
                        w(this.colCnt), t.moreEls = e(u), t.limitedEls = e(f)
                    }
                }, b.prototype.unlimitRow = function(a) {
                    var b = this.eventRenderer.rowStructs[a];
                    b.moreEls && (b.moreEls.remove(), b.moreEls = null), b.limitedEls && (b.limitedEls.removeClass("fc-limited"), b.limitedEls = null)
                }, b.prototype.renderMoreLink = function(a, b, c) {
                    var d = this,
                        f = this.view;
                    return e('<a class="fc-more"/>').text(this.getMoreLinkText(c.length)).on("click", function(g) {
                        var h = d.opt("eventLimitClick"),
                            i = d.getCellDate(a, b),
                            j = e(g.currentTarget),
                            k = d.getCellEl(a, b),
                            l = d.getCellSegs(a, b),
                            m = d.resliceDaySegs(l, i),
                            n = d.resliceDaySegs(c, i);
                        "function" == typeof h && (h = d.publiclyTrigger("eventLimitClick", {
                            context: f,
                            args: [{
                                date: i.clone(),
                                dayEl: k,
                                moreEl: j,
                                segs: m,
                                hiddenSegs: n
                            }, g, f]
                        })), "popover" === h ? d.showSegPopover(a, b, j, m) : "string" == typeof h && f.calendar.zoomTo(i, h)
                    })
                }, b.prototype.showSegPopover = function(a, b, c, d) {
                    var e, f, g = this,
                        i = this.view,
                        j = c.parent();
                    e = 1 == this.rowCnt ? i.el : this.rowEls.eq(a), f = {
                        className: "fc-more-popover " + i.calendar.theme.getClass("popover"),
                        content: this.renderSegPopoverContent(a, b, d),
                        parentEl: i.el,
                        top: e.offset().top,
                        autoHide: !0,
                        viewportConstrain: this.opt("popoverViewportConstrain"),
                        hide: function() {
                            g.popoverSegs && g.triggerBeforeEventSegsDestroyed(g.popoverSegs), g.segPopover.removeElement(), g.segPopover = null, g.popoverSegs = null
                        }
                    }, this.isRTL ? f.right = j.offset().left + j.outerWidth() + 1 : f.left = j.offset().left - 1, this.segPopover = new h.default(f), this.segPopover.show(), this.bindAllSegHandlersToEl(this.segPopover.el), this.triggerAfterEventSegsRendered(d)
                }, b.prototype.renderSegPopoverContent = function(a, b, c) {
                    var d, g = this.view,
                        h = g.calendar.theme,
                        i = this.getCellDate(a, b).format(this.opt("dayPopoverFormat")),
                        j = e('<div class="fc-header ' + h.getClass("popoverHeader") + '"><span class="fc-close ' + h.getIconClass("close") + '"></span><span class="fc-title">' + f.htmlEscape(i) + '</span><div class="fc-clear"/></div><div class="fc-body ' + h.getClass("popoverContent") + '"><div class="fc-event-container"></div></div>'),
                        k = j.find(".fc-event-container");
                    for (c = this.eventRenderer.renderFgSegEls(c, !0), this.popoverSegs = c, d = 0; d < c.length; d++) this.hitsNeeded(), c[d].hit = this.getCellHit(a, b), this.hitsNotNeeded(), k.append(c[d].el);
                    return j
                }, b.prototype.resliceDaySegs = function(a, b) {
                    var c, d, f, g = b.clone(),
                        h = g.clone().add(1, "days"),
                        l = new i.default(g, h),
                        m = [];
                    for (c = 0; c < a.length; c++) d = a[c], (f = d.footprint.componentFootprint.unzonedRange.intersect(l)) && m.push(e.extend({}, d, {
                        footprint: new k.default(new j.default(f, d.footprint.componentFootprint.isAllDay), d.footprint.eventDef, d.footprint.eventInstance),
                        isStart: d.isStart && f.isStart,
                        isEnd: d.isEnd && f.isEnd
                    }));
                    return this.eventRenderer.sortEventSegs(m), m
                }, b.prototype.getMoreLinkText = function(a) {
                    var b = this.opt("eventLimitText");
                    return "function" == typeof b ? b(a) : "+" + a + " " + b
                }, b.prototype.getCellSegs = function(a, b, c) {
                    for (var d, e = this.eventRenderer.rowStructs[a].segMatrix, f = c || 0, g = []; f < e.length;) d = e[f][b], d && g.push(d), f++;
                    return g
                }, b
            }(n.default);
        b.default = s, s.prototype.eventRendererClass = p.default, s.prototype.businessHourRendererClass = l.default, s.prototype.helperRendererClass = q.default, s.prototype.fillRendererClass = r.default, m.default.mixInto(s), o.default.mixInto(s)
    }, function(a, b, c) {
        function d(a) {
            return function(a) {
                function b() {
                    var b = null !== a && a.apply(this, arguments) || this;
                    return b.colWeekNumbersVisible = !1, b
                }
                return e.__extends(b, a), b.prototype.renderHeadIntroHtml = function() {
                    var a = this.view;
                    return this.colWeekNumbersVisible ? '<th class="fc-week-number ' + a.calendar.theme.getClass("widgetHeader") + '" ' + a.weekNumberStyleAttr() + "><span>" + g.htmlEscape(this.opt("weekNumberTitle")) + "</span></th>" : ""
                }, b.prototype.renderNumberIntroHtml = function(a) {
                    var b = this.view,
                        c = this.getCellDate(a, 0);
                    return this.colWeekNumbersVisible ? '<td class="fc-week-number" ' + b.weekNumberStyleAttr() + ">" + b.buildGotoAnchorHtml({
                        date: c,
                        type: "week",
                        forceOff: 1 === this.colCnt
                    }, c.format("w")) + "</td>" : ""
                }, b.prototype.renderBgIntroHtml = function() {
                    var a = this.view;
                    return this.colWeekNumbersVisible ? '<td class="fc-week-number ' + a.calendar.theme.getClass("widgetContent") + '" ' + a.weekNumberStyleAttr() + "></td>" : ""
                }, b.prototype.renderIntroHtml = function() {
                    var a = this.view;
                    return this.colWeekNumbersVisible ? '<td class="fc-week-number" ' + a.weekNumberStyleAttr() + "></td>" : ""
                }, b.prototype.getIsNumbersVisible = function() {
                    return k.default.prototype.getIsNumbersVisible.apply(this, arguments) || this.colWeekNumbersVisible
                }, b
            }(a)
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(0),
            f = c(1),
            g = c(2),
            h = c(28),
            i = c(30),
            j = c(69),
            k = c(46),
            l = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.dayGrid = d.instantiateDayGrid(), d.dayGrid.isRigid = d.hasRigidRows(), d.opt("weekNumbers") && (d.opt("weekNumbersWithinDays") ? (d.dayGrid.cellWeekNumbersVisible = !0, d.dayGrid.colWeekNumbersVisible = !1) : (d.dayGrid.cellWeekNumbersVisible = !1, d.dayGrid.colWeekNumbersVisible = !0)), d.addChild(d.dayGrid), d.scroller = new h.default({
                        overflowX: "hidden",
                        overflowY: "auto"
                    }), d
                }
                return e.__extends(b, a), b.prototype.instantiateDayGrid = function() {
                    return new(d(this.dayGridClass))(this)
                }, b.prototype.executeDateRender = function(b) {
                    this.dayGrid.breakOnWeeks = /year|month|week/.test(b.currentRangeUnit), a.prototype.executeDateRender.call(this, b)
                }, b.prototype.renderSkeleton = function() {
                    var a, b;
                    this.el.addClass("fc-basic-view").html(this.renderSkeletonHtml()), this.scroller.render(), a = this.scroller.el.addClass("fc-day-grid-container"), b = f('<div class="fc-day-grid" />').appendTo(a), this.el.find(".fc-body > tr > td").append(a), this.dayGrid.headContainerEl = this.el.find(".fc-head-container"), this.dayGrid.setElement(b)
                }, b.prototype.unrenderSkeleton = function() {
                    this.dayGrid.removeElement(), this.scroller.destroy()
                }, b.prototype.renderSkeletonHtml = function() {
                    var a = this.calendar.theme;
                    return '<table class="' + a.getClass("tableGrid") + '">' + (this.opt("columnHeader") ? '<thead class="fc-head"><tr><td class="fc-head-container ' + a.getClass("widgetHeader") + '">&nbsp;</td></tr></thead>' : "") + '<tbody class="fc-body"><tr><td class="' + a.getClass("widgetContent") + '"></td></tr></tbody></table>'
                }, b.prototype.weekNumberStyleAttr = function() {
                    return null != this.weekNumberWidth ? 'style="width:' + this.weekNumberWidth + 'px"' : ""
                }, b.prototype.hasRigidRows = function() {
                    var a = this.opt("eventLimit");
                    return a && "number" != typeof a
                }, b.prototype.updateSize = function(b, c, d) {
                    var e, f, h = this.opt("eventLimit"),
                        i = this.dayGrid.headContainerEl.find(".fc-row");
                    if (!this.dayGrid.rowEls) return void(c || (e = this.computeScrollerHeight(b), this.scroller.setHeight(e)));
                    a.prototype.updateSize.call(this, b, c, d), this.dayGrid.colWeekNumbersVisible && (this.weekNumberWidth = g.matchCellWidths(this.el.find(".fc-week-number"))), this.scroller.clear(), g.uncompensateScroll(i), this.dayGrid.removeSegPopover(), h && "number" == typeof h && this.dayGrid.limitRows(h), e = this.computeScrollerHeight(b), this.setGridHeight(e, c), h && "number" != typeof h && this.dayGrid.limitRows(h), c || (this.scroller.setHeight(e), f = this.scroller.getScrollbarWidths(), (f.left || f.right) && (g.compensateScroll(i, f), e = this.computeScrollerHeight(b), this.scroller.setHeight(e)), this.scroller.lockOverflow(f))
                }, b.prototype.computeScrollerHeight = function(a) {
                    return a - g.subtractInnerElHeight(this.el, this.scroller.el)
                }, b.prototype.setGridHeight = function(a, b) {
                    b ? g.undistributeHeight(this.dayGrid.rowEls) : g.distributeHeight(this.dayGrid.rowEls, a, !0)
                }, b.prototype.computeInitialDateScroll = function() {
                    return {
                        top: 0
                    }
                }, b.prototype.queryDateScroll = function() {
                    return {
                        top: this.scroller.getScrollTop()
                    }
                }, b.prototype.applyDateScroll = function(a) {
                    void 0 !== a.top && this.scroller.setScrollTop(a.top)
                }, b
            }(i.default);
        b.default = l, l.prototype.dateProfileGeneratorClass = j.default, l.prototype.dayGridClass = k.default
    }, function(a, b, c) {
        function d(a, b) {
            return null == b ? a : e.isFunction(b) ? a.filter(b) : (b += "", a.filter(function(a) {
                return a.id == b || a._id === b
            }))
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(1),
            f = c(3),
            g = c(2),
            h = c(74),
            i = c(14),
            j = c(8),
            k = c(6),
            l = c(75),
            m = c(76),
            n = c(77),
            o = c(49),
            p = c(20),
            q = c(9),
            r = c(4),
            s = c(10),
            t = c(15),
            u = c(78),
            v = c(54),
            w = c(25),
            x = c(33),
            y = c(11),
            z = c(26),
            A = c(5),
            B = c(36),
            C = function() {
                function a(a, b) {
                    this.loadingLevel = 0, this.ignoreUpdateViewSize = 0, this.freezeContentHeightDepth = 0, i.default.needed(), this.el = a, this.viewsByType = {}, this.optionsManager = new m.default(this, b), this.viewSpecManager = new n.default(this.optionsManager, this), this.initMomentInternals(), this.initCurrentDate(), this.initEventManager(), this.constraints = new o.default(this.eventManager, this), this.constructed()
                }
                return a.prototype.constructed = function() {}, a.prototype.getView = function() {
                    return this.view
                }, a.prototype.publiclyTrigger = function(a, b) {
                    var c, d, f = this.opt(a);
                    if (e.isPlainObject(b) ? (c = b.context, d = b.args) : e.isArray(b) && (d = b), null == c && (c = this.el[0]), d || (d = []), this.triggerWith(a, c, d), f) return f.apply(c, d)
                }, a.prototype.hasPublicHandlers = function(a) {
                    return this.hasHandlers(a) || this.opt(a)
                }, a.prototype.option = function(a, b) {
                    var c;
                    if ("string" == typeof a) {
                        if (void 0 === b) return this.optionsManager.get(a);
                        c = {}, c[a] = b, this.optionsManager.add(c)
                    } else "object" == typeof a && this.optionsManager.add(a)
                }, a.prototype.opt = function(a) {
                    return this.optionsManager.get(a)
                }, a.prototype.instantiateView = function(a) {
                    var b = this.viewSpecManager.getViewSpec(a);
                    return new b.class(this, b)
                }, a.prototype.isValidViewType = function(a) {
                    return Boolean(this.viewSpecManager.getViewSpec(a))
                }, a.prototype.changeView = function(a, b) {
                    b && (b.start && b.end ? this.optionsManager.recordOverrides({
                        visibleRange: b
                    }) : this.currentDate = this.moment(b).stripZone()), this.renderView(a)
                }, a.prototype.zoomTo = function(a, b) {
                    var c;
                    b = b || "day", c = this.viewSpecManager.getViewSpec(b) || this.viewSpecManager.getUnitViewSpec(b), this.currentDate = a.clone(), this.renderView(c ? c.type : null)
                }, a.prototype.initCurrentDate = function() {
                    var a = this.opt("defaultDate");
                    this.currentDate = null != a ? this.moment(a).stripZone() : this.getNow()
                }, a.prototype.prev = function() {
                    var a = this.view,
                        b = a.dateProfileGenerator.buildPrev(a.get("dateProfile"));
                    b.isValid && (this.currentDate = b.date, this.renderView())
                }, a.prototype.next = function() {
                    var a = this.view,
                        b = a.dateProfileGenerator.buildNext(a.get("dateProfile"));
                    b.isValid && (this.currentDate = b.date, this.renderView())
                }, a.prototype.prevYear = function() {
                    this.currentDate.add(-1, "years"), this.renderView()
                }, a.prototype.nextYear = function() {
                    this.currentDate.add(1, "years"), this.renderView()
                }, a.prototype.today = function() {
                    this.currentDate = this.getNow(), this.renderView()
                }, a.prototype.gotoDate = function(a) {
                    this.currentDate = this.moment(a).stripZone(), this.renderView()
                }, a.prototype.incrementDate = function(a) {
                    this.currentDate.add(f.duration(a)), this.renderView()
                }, a.prototype.getDate = function() {
                    return this.applyTimezone(this.currentDate)
                }, a.prototype.pushLoading = function() {
                    this.loadingLevel++ || this.publiclyTrigger("loading", [!0, this.view])
                }, a.prototype.popLoading = function() {
                    --this.loadingLevel || this.publiclyTrigger("loading", [!1, this.view])
                }, a.prototype.render = function() {
                    this.contentEl ? this.elementVisible() && (this.calcSize(), this.updateViewSize()) : this.initialRender()
                }, a.prototype.initialRender = function() {
                    var a = this,
                        b = this.el;
                    b.addClass("fc"), b.on("click.fc", "a[data-goto]", function(b) {
                        var c = e(b.currentTarget),
                            d = c.data("goto"),
                            f = a.moment(d.date),
                            h = d.type,
                            i = a.view.opt("navLink" + g.capitaliseFirstLetter(h) + "Click");
                        "function" == typeof i ? i(f, b) : ("string" == typeof i && (h = i), a.zoomTo(f, h))
                    }), this.optionsManager.watch("settingTheme", ["?theme", "?themeSystem"], function(c) {
                        var d = B.default.getThemeClass(c.themeSystem || c.theme),
                            e = new d(a.optionsManager),
                            f = e.getClass("widget");
                        a.theme = e, f && b.addClass(f)
                    }, function() {
                        var c = a.theme.getClass("widget");
                        a.theme = null, c && b.removeClass(c)
                    }), this.optionsManager.watch("settingBusinessHourGenerator", ["?businessHours"], function(b) {
                        a.businessHourGenerator = new v.default(b.businessHours, a), a.view && a.view.set("businessHourGenerator", a.businessHourGenerator)
                    }, function() {
                        a.businessHourGenerator = null
                    }), this.optionsManager.watch("applyingDirClasses", ["?isRTL", "?locale"], function(a) {
                        b.toggleClass("fc-ltr", !a.isRTL), b.toggleClass("fc-rtl", a.isRTL)
                    }), this.contentEl = e("<div class='fc-view-container'/>").prependTo(b), this.initToolbars(), this.renderHeader(), this.renderFooter(), this.renderView(this.opt("defaultView")), this.opt("handleWindowResize") && e(window).resize(this.windowResizeProxy = g.debounce(this.windowResize.bind(this), this.opt("windowResizeDelay")))
                }, a.prototype.destroy = function() {
                    this.view && this.clearView(), this.toolbarsManager.proxyCall("removeElement"), this.contentEl.remove(), this.el.removeClass("fc fc-ltr fc-rtl"), this.optionsManager.unwatch("settingTheme"), this.optionsManager.unwatch("settingBusinessHourGenerator"), this.el.off(".fc"), this.windowResizeProxy && (e(window).unbind("resize", this.windowResizeProxy), this.windowResizeProxy = null), i.default.unneeded()
                }, a.prototype.elementVisible = function() {
                    return this.el.is(":visible")
                }, a.prototype.bindViewHandlers = function(a) {
                    var b = this;
                    a.watch("titleForCalendar", ["title"], function(c) {
                        a === b.view && b.setToolbarsTitle(c.title)
                    }), a.watch("dateProfileForCalendar", ["dateProfile"], function(c) {
                        a === b.view && (b.currentDate = c.dateProfile.date, b.updateToolbarButtons(c.dateProfile))
                    })
                }, a.prototype.unbindViewHandlers = function(a) {
                    a.unwatch("titleForCalendar"), a.unwatch("dateProfileForCalendar")
                }, a.prototype.renderView = function(a) {
                    var b, c = this.view;
                    this.freezeContentHeight(), c && a && c.type !== a && this.clearView(), !this.view && a && (b = this.view = this.viewsByType[a] || (this.viewsByType[a] = this.instantiateView(a)), this.bindViewHandlers(b), b.startBatchRender(), b.setElement(e("<div class='fc-view fc-" + a + "-view' />").appendTo(this.contentEl)), this.toolbarsManager.proxyCall("activateButton", a)), this.view && (this.view.get("businessHourGenerator") !== this.businessHourGenerator && this.view.set("businessHourGenerator", this.businessHourGenerator), this.view.setDate(this.currentDate), b && b.stopBatchRender()), this.thawContentHeight()
                }, a.prototype.clearView = function() {
                    var a = this.view;
                    this.toolbarsManager.proxyCall("deactivateButton", a.type), this.unbindViewHandlers(a), a.removeElement(), a.unsetDate(), this.view = null
                }, a.prototype.reinitView = function() {
                    var a = this.view,
                        b = a.queryScroll();
                    this.freezeContentHeight(), this.clearView(), this.calcSize(), this.renderView(a.type), this.view.applyScroll(b), this.thawContentHeight()
                }, a.prototype.getSuggestedViewHeight = function() {
                    return null == this.suggestedViewHeight && this.calcSize(), this.suggestedViewHeight
                }, a.prototype.isHeightAuto = function() {
                    return "auto" === this.opt("contentHeight") || "auto" === this.opt("height")
                }, a.prototype.updateViewSize = function(a) {
                    void 0 === a && (a = !1);
                    var b, c = this.view;
                    if (!this.ignoreUpdateViewSize && c) return a && (this.calcSize(), b = c.queryScroll()), this.ignoreUpdateViewSize++, c.updateSize(this.getSuggestedViewHeight(), this.isHeightAuto(), a), this.ignoreUpdateViewSize--, a && c.applyScroll(b), !0
                }, a.prototype.calcSize = function() {
                    this.elementVisible() && this._calcSize()
                }, a.prototype._calcSize = function() {
                    var a = this.opt("contentHeight"),
                        b = this.opt("height");
                    this.suggestedViewHeight = "number" == typeof a ? a : "function" == typeof a ? a() : "number" == typeof b ? b - this.queryToolbarsHeight() : "function" == typeof b ? b() - this.queryToolbarsHeight() : "parent" === b ? this.el.parent().height() - this.queryToolbarsHeight() : Math.round(this.contentEl.width() / Math.max(this.opt("aspectRatio"), .5))
                }, a.prototype.windowResize = function(a) {
                    a.target === window && this.view && this.view.isDatesRendered && this.updateViewSize(!0) && this.publiclyTrigger("windowResize", [this.view])
                }, a.prototype.freezeContentHeight = function() {
                    this.freezeContentHeightDepth++ || this.forceFreezeContentHeight()
                }, a.prototype.forceFreezeContentHeight = function() {
                    this.contentEl.css({
                        width: "100%",
                        height: this.contentEl.height(),
                        overflow: "hidden"
                    })
                }, a.prototype.thawContentHeight = function() {
                    this.freezeContentHeightDepth--, this.contentEl.css({
                        width: "",
                        height: "",
                        overflow: ""
                    }), this.freezeContentHeightDepth && this.forceFreezeContentHeight()
                }, a.prototype.initToolbars = function() {
                    this.header = new l.default(this, this.computeHeaderOptions()), this.footer = new l.default(this, this.computeFooterOptions()), this.toolbarsManager = new h.default([this.header, this.footer])
                }, a.prototype.computeHeaderOptions = function() {
                    return {
                        extraClasses: "fc-header-toolbar",
                        layout: this.opt("header")
                    }
                }, a.prototype.computeFooterOptions = function() {
                    return {
                        extraClasses: "fc-footer-toolbar",
                        layout: this.opt("footer")
                    }
                }, a.prototype.renderHeader = function() {
                    var a = this.header;
                    a.setToolbarOptions(this.computeHeaderOptions()), a.render(), a.el && this.el.prepend(a.el)
                }, a.prototype.renderFooter = function() {
                    var a = this.footer;
                    a.setToolbarOptions(this.computeFooterOptions()), a.render(), a.el && this.el.append(a.el)
                }, a.prototype.setToolbarsTitle = function(a) {
                    this.toolbarsManager.proxyCall("updateTitle", a)
                }, a.prototype.updateToolbarButtons = function(a) {
                    var b = this.getNow(),
                        c = this.view,
                        d = c.dateProfileGenerator.build(b),
                        e = c.dateProfileGenerator.buildPrev(c.get("dateProfile")),
                        f = c.dateProfileGenerator.buildNext(c.get("dateProfile"));
                    this.toolbarsManager.proxyCall(d.isValid && !a.currentUnzonedRange.containsDate(b) ? "enableButton" : "disableButton", "today"), this.toolbarsManager.proxyCall(e.isValid ? "enableButton" : "disableButton", "prev"), this.toolbarsManager.proxyCall(f.isValid ? "enableButton" : "disableButton", "next")
                }, a.prototype.queryToolbarsHeight = function() {
                    return this.toolbarsManager.items.reduce(function(a, b) {
                        return a + (b.el ? b.el.outerHeight(!0) : 0)
                    }, 0)
                }, a.prototype.select = function(a, b) {
                    this.view.select(this.buildSelectFootprint.apply(this, arguments))
                }, a.prototype.unselect = function() {
                    this.view && this.view.unselect()
                }, a.prototype.buildSelectFootprint = function(a, b) {
                    var c, d = this.moment(a).stripZone();
                    return c = b ? this.moment(b).stripZone() : d.hasTime() ? d.clone().add(this.defaultTimedEventDuration) : d.clone().add(this.defaultAllDayEventDuration), new s.default(new r.default(d, c), !d.hasTime())
                }, a.prototype.initMomentInternals = function() {
                    var a = this;
                    this.defaultAllDayEventDuration = f.duration(this.opt("defaultAllDayEventDuration")), this.defaultTimedEventDuration = f.duration(this.opt("defaultTimedEventDuration")), this.optionsManager.watch("buildingMomentLocale", ["?locale", "?monthNames", "?monthNamesShort", "?dayNames", "?dayNamesShort", "?firstDay", "?weekNumberCalculation"], function(b) {
                        var c, d = b.weekNumberCalculation,
                            e = b.firstDay;
                        "iso" === d && (d = "ISO");
                        var f = Object.create(p.getMomentLocaleData(b.locale));
                        b.monthNames && (f._months = b.monthNames), b.monthNamesShort && (f._monthsShort = b.monthNamesShort), b.dayNames && (f._weekdays = b.dayNames), b.dayNamesShort && (f._weekdaysShort = b.dayNamesShort), null == e && "ISO" === d && (e = 1), null != e && (c = Object.create(f._week), c.dow = e, f._week = c), "ISO" !== d && "local" !== d && "function" != typeof d || (f._fullCalendar_weekCalc = d), a.localeData = f, a.currentDate && a.localizeMoment(a.currentDate)
                    })
                }, a.prototype.moment = function() {
                    for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
                    var c;
                    return "local" === this.opt("timezone") ? (c = q.default.apply(null, a), c.hasTime() && c.local()) : c = "UTC" === this.opt("timezone") ? q.default.utc.apply(null, a) : q.default.parseZone.apply(null, a), this.localizeMoment(c), c
                }, a.prototype.msToMoment = function(a, b) {
                    var c = q.default.utc(a);
                    return b ? c.stripTime() : c = this.applyTimezone(c), this.localizeMoment(c), c
                }, a.prototype.msToUtcMoment = function(a, b) {
                    var c = q.default.utc(a);
                    return b && c.stripTime(), this.localizeMoment(c), c
                }, a.prototype.localizeMoment = function(a) {
                    a._locale = this.localeData
                }, a.prototype.getIsAmbigTimezone = function() {
                    return "local" !== this.opt("timezone") && "UTC" !== this.opt("timezone")
                }, a.prototype.applyTimezone = function(a) {
                    if (!a.hasTime()) return a.clone();
                    var b, c = this.moment(a.toArray()),
                        d = a.time() - c.time();
                    return d && (b = c.clone().add(d), a.time() - b.time() == 0 && (c = b)), c
                }, a.prototype.footprintToDateProfile = function(a, b) {
                    var c, d = q.default.utc(a.unzonedRange.startMs);
                    return b || (c = q.default.utc(a.unzonedRange.endMs)), a.isAllDay ? (d.stripTime(), c && c.stripTime()) : (d = this.applyTimezone(d), c && (c = this.applyTimezone(c))), new t.default(d, c, this)
                }, a.prototype.getNow = function() {
                    var a = this.opt("now");
                    return "function" == typeof a && (a = a()), this.moment(a).stripZone()
                }, a.prototype.humanizeDuration = function(a) {
                    return a.locale(this.opt("locale")).humanize()
                }, a.prototype.parseUnzonedRange = function(a) {
                    var b = null,
                        c = null;
                    return a.start && (b = this.moment(a.start).stripZone()), a.end && (c = this.moment(a.end).stripZone()), b || c ? b && c && c.isBefore(b) ? null : new r.default(b, c) : null
                }, a.prototype.initEventManager = function() {
                    var a = this,
                        b = new u.default(this),
                        c = this.opt("eventSources") || [],
                        d = this.opt("events");
                    this.eventManager = b, d && c.unshift(d), b.on("release", function(b) {
                        a.trigger("eventsReset", b)
                    }), b.freeze(), c.forEach(function(c) {
                        var d = w.default.parse(c, a);
                        d && b.addSource(d)
                    }), b.thaw()
                }, a.prototype.requestEvents = function(a, b) {
                    return this.eventManager.requestEvents(a, b, this.opt("timezone"), !this.opt("lazyFetching"))
                }, a.prototype.getEventEnd = function(a) {
                    return a.end ? a.end.clone() : this.getDefaultEventEnd(a.allDay, a.start)
                }, a.prototype.getDefaultEventEnd = function(a, b) {
                    var c = b.clone();
                    return a ? c.stripTime().add(this.defaultAllDayEventDuration) : c.add(this.defaultTimedEventDuration), this.getIsAmbigTimezone() && c.stripZone(), c
                }, a.prototype.rerenderEvents = function() {
                    this.view.flash("displayingEvents")
                }, a.prototype.refetchEvents = function() {
                    this.eventManager.refetchAllSources()
                }, a.prototype.renderEvents = function(a, b) {
                    this.eventManager.freeze();
                    for (var c = 0; c < a.length; c++) this.renderEvent(a[c], b);
                    this.eventManager.thaw()
                }, a.prototype.renderEvent = function(a, b) {
                    var c = this.eventManager,
                        d = x.default.parse(a, a.source || c.stickySource);
                    d && c.addEventDef(d, b)
                }, a.prototype.removeEvents = function(a) {
                    var b, c, e = this.eventManager,
                        f = [],
                        g = {};
                    if (null == a) e.removeAllEventDefs(!0);
                    else {
                        for (e.getEventInstances().forEach(function(a) {
                                f.push(a.toLegacy())
                            }), f = d(f, a), c = 0; c < f.length; c++) b = this.eventManager.getEventDefByUid(f[c]._id), g[b.id] = !0;
                        e.freeze();
                        for (c in g) e.removeEventDefsById(c, !0);
                        e.thaw()
                    }
                }, a.prototype.clientEvents = function(a) {
                    var b = [];
                    return this.eventManager.getEventInstances().forEach(function(a) {
                        b.push(a.toLegacy())
                    }), d(b, a)
                }, a.prototype.updateEvents = function(a) {
                    this.eventManager.freeze();
                    for (var b = 0; b < a.length; b++) this.updateEvent(a[b]);
                    this.eventManager.thaw()
                }, a.prototype.updateEvent = function(a) {
                    var b, c, d = this.eventManager.getEventDefByUid(a._id);
                    d instanceof y.default && (b = d.buildInstance(), c = z.default.createFromRawProps(b, a, null), this.eventManager.mutateEventsWithId(d.id, c))
                }, a.prototype.getEventSources = function() {
                    return this.eventManager.otherSources.slice()
                }, a.prototype.getEventSourceById = function(a) {
                    return this.eventManager.getSourceById(A.default.normalizeId(a))
                }, a.prototype.addEventSource = function(a) {
                    var b = w.default.parse(a, this);
                    b && this.eventManager.addSource(b)
                }, a.prototype.removeEventSources = function(a) {
                    var b, c, d = this.eventManager;
                    if (null == a) this.eventManager.removeAllSources();
                    else {
                        for (b = d.multiQuerySources(a), d.freeze(), c = 0; c < b.length; c++) d.removeSource(b[c]);
                        d.thaw()
                    }
                }, a.prototype.removeEventSource = function(a) {
                    var b, c = this.eventManager,
                        d = c.querySources(a);
                    for (c.freeze(), b = 0; b < d.length; b++) c.removeSource(d[b]);
                    c.thaw()
                }, a.prototype.refetchEventSources = function(a) {
                    var b, c = this.eventManager,
                        d = c.multiQuerySources(a);
                    for (c.freeze(), b = 0; b < d.length; b++) c.refetchSource(d[b]);
                    c.thaw()
                }, a
            }();
        b.default = C, j.default.mixInto(C), k.default.mixInto(C)
    }, function(a, b, c) {
        function d(a, b, c) {
            var d;
            for (d = 0; d < a.length; d++)
                if (!b(a[d].eventInstance.toLegacy(), c ? c.toLegacy() : null)) return !1;
            return !0
        }

        function e(a, b) {
            var c, d, e, f, g = b.toLegacy();
            for (c = 0; c < a.length; c++) {
                if (d = a[c].eventInstance, e = d.def, !1 === (f = e.getOverlap())) return !1;
                if ("function" == typeof f && !f(d.toLegacy(), g)) return !1
            }
            return !0
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var f = c(4),
            g = c(10),
            h = c(33),
            i = c(5),
            j = c(23),
            k = function() {
                function a(a, b) {
                    this.eventManager = a, this._calendar = b
                }
                return a.prototype.opt = function(a) {
                    return this._calendar.opt(a)
                }, a.prototype.isEventInstanceGroupAllowed = function(a) {
                    var b, c = a.getEventDef(),
                        d = this.eventRangesToEventFootprints(a.getAllEventRanges()),
                        e = this.getPeerEventInstances(c),
                        f = e.map(j.eventInstanceToEventRange),
                        g = this.eventRangesToEventFootprints(f),
                        h = c.getConstraint(),
                        i = c.getOverlap(),
                        k = this.opt("eventAllow");
                    for (b = 0; b < d.length; b++)
                        if (!this.isFootprintAllowed(d[b].componentFootprint, g, h, i, d[b].eventInstance)) return !1;
                    if (k)
                        for (b = 0; b < d.length; b++)
                            if (!1 === k(d[b].componentFootprint.toLegacy(this._calendar), d[b].getEventLegacy())) return !1;
                    return !0
                }, a.prototype.getPeerEventInstances = function(a) {
                    return this.eventManager.getEventInstancesWithoutId(a.id)
                }, a.prototype.isSelectionFootprintAllowed = function(a) {
                    var b, c = this.eventManager.getEventInstances(),
                        d = c.map(j.eventInstanceToEventRange),
                        e = this.eventRangesToEventFootprints(d);
                    return !(!this.isFootprintAllowed(a, e, this.opt("selectConstraint"), this.opt("selectOverlap")) || (b = this.opt("selectAllow")) && !1 === b(a.toLegacy(this._calendar)))
                }, a.prototype.isFootprintAllowed = function(a, b, c, f, g) {
                    var h, i;
                    if (null != c && (h = this.constraintValToFootprints(c, a.isAllDay), !this.isFootprintWithinConstraints(a, h))) return !1;
                    if (i = this.collectOverlapEventFootprints(b, a), !1 === f) {
                        if (i.length) return !1
                    } else if ("function" == typeof f && !d(i, f, g)) return !1;
                    return !(g && !e(i, g))
                }, a.prototype.isFootprintWithinConstraints = function(a, b) {
                    var c;
                    for (c = 0; c < b.length; c++)
                        if (this.footprintContainsFootprint(b[c], a)) return !0;
                    return !1
                }, a.prototype.constraintValToFootprints = function(a, b) {
                    var c;
                    return "businessHours" === a ? this.buildCurrentBusinessFootprints(b) : "object" == typeof a ? (c = this.parseEventDefToInstances(a), c ? this.eventInstancesToFootprints(c) : this.parseFootprints(a)) : null != a ? (c = this.eventManager.getEventInstancesWithId(a), this.eventInstancesToFootprints(c)) : void 0
                }, a.prototype.buildCurrentBusinessFootprints = function(a) {
                    var b = this._calendar.view,
                        c = b.get("businessHourGenerator"),
                        d = b.dateProfile.activeUnzonedRange,
                        e = c.buildEventInstanceGroup(a, d);
                    return e ? this.eventInstancesToFootprints(e.eventInstances) : []
                }, a.prototype.eventInstancesToFootprints = function(a) {
                    var b = a.map(j.eventInstanceToEventRange);
                    return this.eventRangesToEventFootprints(b).map(j.eventFootprintToComponentFootprint)
                }, a.prototype.collectOverlapEventFootprints = function(a, b) {
                    var c, d = [];
                    for (c = 0; c < a.length; c++) this.footprintsIntersect(b, a[c].componentFootprint) && d.push(a[c]);
                    return d
                }, a.prototype.parseEventDefToInstances = function(a) {
                    var b = this.eventManager,
                        c = h.default.parse(a, new i.default(this._calendar));
                    return !!c && c.buildInstances(b.currentPeriod.unzonedRange)
                }, a.prototype.eventRangesToEventFootprints = function(a) {
                    var b, c = [];
                    for (b = 0; b < a.length; b++) c.push.apply(c, this.eventRangeToEventFootprints(a[b]));
                    return c
                }, a.prototype.eventRangeToEventFootprints = function(a) {
                    return [j.eventRangeToEventFootprint(a)]
                }, a.prototype.parseFootprints = function(a) {
                    var b, c;
                    return a.start && (b = this._calendar.moment(a.start), b.isValid() || (b = null)), a.end && (c = this._calendar.moment(a.end), c.isValid() || (c = null)), [new g.default(new f.default(b, c), b && !b.hasTime() || c && !c.hasTime())]
                }, a.prototype.footprintContainsFootprint = function(a, b) {
                    return a.unzonedRange.containsRange(b.unzonedRange)
                }, a.prototype.footprintsIntersect = function(a, b) {
                    return a.unzonedRange.intersectsWith(b.unzonedRange)
                }, a
            }();
        b.default = k
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = c(12),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.applyProps = function(a) {
                    var b, c = this.standardPropMap,
                        d = {},
                        e = {};
                    for (b in a) !0 === c[b] ? this[b] = a[b] : !1 === c[b] ? d[b] = a[b] : e[b] = a[b];
                    return this.applyMiscProps(e), this.applyManualStandardProps(d)
                }, b.prototype.applyManualStandardProps = function(a) {
                    return !0
                }, b.prototype.applyMiscProps = function(a) {}, b.prototype.isStandardProp = function(a) {
                    return a in this.standardPropMap
                }, b.defineStandardProps = function(a) {
                    var b = this.prototype;
                    b.hasOwnProperty("standardPropMap") || (b.standardPropMap = Object.create(b.standardPropMap)), e.copyOwnProps(a, b.standardPropMap)
                }, b.copyVerbatimStandardProps = function(a, b) {
                    var c, d = this.prototype.standardPropMap;
                    for (c in d) null != a[c] && !0 === d[c] && (b[c] = a[c])
                }, b
            }(f.default);
        b.default = g, g.prototype.standardPropMap = {}
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a, b) {
                this.def = a, this.dateProfile = b
            }
            return a.prototype.toLegacy = function() {
                var a = this.dateProfile,
                    b = this.def.toLegacy();
                return b.start = a.start.clone(), b.end = a.end ? a.end.clone() : null, b
            }, a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(3),
            g = c(22),
            h = c(51),
            i = c(15),
            j = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.isAllDay = function() {
                    return !this.startTime && !this.endTime
                }, b.prototype.buildInstances = function(a) {
                    for (var b, c, d, e = this.source.calendar, f = a.getStart(), g = a.getEnd(), j = []; f.isBefore(g);) this.dowHash && !this.dowHash[f.day()] || (b = e.applyTimezone(f), c = b.clone(), d = null, this.startTime ? c.time(this.startTime) : c.stripTime(), this.endTime && (d = b.clone().time(this.endTime)), j.push(new h.default(this, new i.default(c, d, e)))), f.add(1, "days");
                    return j
                }, b.prototype.setDow = function(a) {
                    this.dowHash || (this.dowHash = {});
                    for (var b = 0; b < a.length; b++) this.dowHash[a[b]] = !0
                }, b.prototype.clone = function() {
                    var b = a.prototype.clone.call(this);
                    return b.startTime && (b.startTime = f.duration(this.startTime)), b.endTime && (b.endTime = f.duration(this.endTime)), this.dowHash && (b.dowHash = e.extend({}, this.dowHash)), b
                }, b
            }(g.default);
        b.default = j, j.prototype.applyProps = function(a) {
            var b = g.default.prototype.applyProps.call(this, a);
            return a.start && (this.startTime = f.duration(a.start)), a.end && (this.endTime = f.duration(a.end)), a.dow && this.setDow(a.dow), b
        }, j.defineStandardProps({
            start: !1,
            end: !1,
            dow: !1
        })
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a, b, c) {
                this.unzonedRange = a, this.eventDef = b, c && (this.eventInstance = c)
            }
            return a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(23),
            f = c(17),
            g = c(52),
            h = c(5),
            i = {
                start: "09:00",
                end: "17:00",
                dow: [1, 2, 3, 4, 5],
                rendering: "inverse-background"
            },
            j = function() {
                function a(a, b) {
                    this.rawComplexDef = a, this.calendar = b
                }
                return a.prototype.buildEventInstanceGroup = function(a, b) {
                    var c, d = this.buildEventDefs(a);
                    if (d.length) return c = new f.default(e.eventDefsToEventInstances(d, b)), c.explicitEventDef = d[0], c
                }, a.prototype.buildEventDefs = function(a) {
                    var b, c = this.rawComplexDef,
                        e = [],
                        f = !1,
                        g = [];
                    for (!0 === c ? e = [{}] : d.isPlainObject(c) ? e = [c] : d.isArray(c) && (e = c, f = !0), b = 0; b < e.length; b++) f && !e[b].dow || g.push(this.buildEventDef(a, e[b]));
                    return g
                }, a.prototype.buildEventDef = function(a, b) {
                    var c = d.extend({}, i, b);
                    return a && (c.start = null, c.end = null), g.default.parse(c, new h.default(this.calendar))
                }, a
            }();
        b.default = j
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(27),
            f = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b
            }(e.default);
        b.default = f, f.prototype.classes = {
            widget: "fc-unthemed",
            widgetHeader: "fc-widget-header",
            widgetContent: "fc-widget-content",
            buttonGroup: "fc-button-group",
            button: "fc-button",
            cornerLeft: "fc-corner-left",
            cornerRight: "fc-corner-right",
            stateDefault: "fc-state-default",
            stateActive: "fc-state-active",
            stateDisabled: "fc-state-disabled",
            stateHover: "fc-state-hover",
            stateDown: "fc-state-down",
            popoverHeader: "fc-widget-header",
            popoverContent: "fc-widget-content",
            headerRow: "fc-widget-header",
            dayRow: "fc-widget-content",
            listView: "fc-widget-content"
        }, f.prototype.baseIconClass = "fc-icon", f.prototype.iconClasses = {
            close: "fc-icon-x",
            prev: "fc-icon-left-single-arrow",
            next: "fc-icon-right-single-arrow",
            prevYear: "fc-icon-left-double-arrow",
            nextYear: "fc-icon-right-double-arrow"
        }, f.prototype.iconOverrideOption = "buttonIcons", f.prototype.iconOverrideCustomButtonOption = "icon", f.prototype.iconOverridePrefix = "fc-icon-"
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(27),
            f = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b
            }(e.default);
        b.default = f, f.prototype.classes = {
            widget: "ui-widget",
            widgetHeader: "ui-widget-header",
            widgetContent: "ui-widget-content",
            buttonGroup: "fc-button-group",
            button: "ui-button",
            cornerLeft: "ui-corner-left",
            cornerRight: "ui-corner-right",
            stateDefault: "ui-state-default",
            stateActive: "ui-state-active",
            stateDisabled: "ui-state-disabled",
            stateHover: "ui-state-hover",
            stateDown: "ui-state-down",
            today: "ui-state-highlight",
            popoverHeader: "ui-widget-header",
            popoverContent: "ui-widget-content",
            headerRow: "ui-widget-header",
            dayRow: "ui-widget-content",
            listView: "ui-widget-content"
        }, f.prototype.baseIconClass = "ui-icon", f.prototype.iconClasses = {
            close: "ui-icon-closethick",
            prev: "ui-icon-circle-triangle-w",
            next: "ui-icon-circle-triangle-e",
            prevYear: "ui-icon-seek-prev",
            nextYear: "ui-icon-seek-next"
        }, f.prototype.iconOverrideOption = "themeButtonIcons", f.prototype.iconOverrideCustomButtonOption = "themeIcon", f.prototype.iconOverridePrefix = "ui-icon-"
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(16),
            g = c(5),
            h = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.fetch = function(a, b, c) {
                    var d = this;
                    return this.calendar.pushLoading(), f.default.construct(function(e) {
                        d.func.call(d.calendar, a.clone(), b.clone(), c, function(a) {
                            d.calendar.popLoading(), e(d.parseEventDefs(a))
                        })
                    })
                }, b.prototype.getPrimitive = function() {
                    return this.func
                }, b.prototype.applyManualStandardProps = function(b) {
                    var c = a.prototype.applyManualStandardProps.call(this, b);
                    return this.func = b.events, c
                }, b.parse = function(a, b) {
                    var c;
                    return e.isFunction(a.events) ? c = a : e.isFunction(a) && (c = {
                        events: a
                    }), !!c && g.default.parse.call(this, c, b)
                }, b
            }(g.default);
        b.default = h, h.defineStandardProps({
            events: !1
        })
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(16),
            h = c(5),
            i = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.fetch = function(a, c, d) {
                    var h = this,
                        i = this.ajaxSettings,
                        j = i.success,
                        k = i.error,
                        l = this.buildRequestParams(a, c, d);
                    return this.calendar.pushLoading(), g.default.construct(function(a, c) {
                        e.ajax(e.extend({}, b.AJAX_DEFAULTS, i, {
                            url: h.url,
                            data: l,
                            success: function(b, d, g) {
                                var i;
                                h.calendar.popLoading(), b ? (i = f.applyAll(j, h, [b, d, g]), e.isArray(i) && (b = i), a(h.parseEventDefs(b))) : c()
                            },
                            error: function(a, b, d) {
                                h.calendar.popLoading(), f.applyAll(k, h, [a, b, d]), c()
                            }
                        }))
                    })
                }, b.prototype.buildRequestParams = function(a, b, c) {
                    var d, f, g, h, i = this.calendar,
                        j = this.ajaxSettings,
                        k = {};
                    return d = this.startParam, null == d && (d = i.opt("startParam")), f = this.endParam, null == f && (f = i.opt("endParam")), g = this.timezoneParam, null == g && (g = i.opt("timezoneParam")), h = e.isFunction(j.data) ? j.data() : j.data || {}, e.extend(k, h), k[d] = a.format(), k[f] = b.format(), c && "local" !== c && (k[g] = c), k
                }, b.prototype.getPrimitive = function() {
                    return this.url
                }, b.prototype.applyMiscProps = function(a) {
                    this.ajaxSettings = a
                }, b.parse = function(a, b) {
                    var c;
                    return "string" == typeof a.url ? c = a : "string" == typeof a && (c = {
                        url: a
                    }), !!c && h.default.parse.call(this, c, b)
                }, b.AJAX_DEFAULTS = {
                    dataType: "json",
                    cache: !1
                }, b
            }(h.default);
        b.default = i, i.defineStandardProps({
            url: !0,
            startParam: !0,
            endParam: !0,
            timezoneParam: !0
        })
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(8),
            e = function() {
                function a() {
                    this.q = [], this.isPaused = !1, this.isRunning = !1
                }
                return a.prototype.queue = function() {
                    for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
                    this.q.push.apply(this.q, a), this.tryStart()
                }, a.prototype.pause = function() {
                    this.isPaused = !0
                }, a.prototype.resume = function() {
                    this.isPaused = !1, this.tryStart()
                }, a.prototype.getIsIdle = function() {
                    return !this.isRunning && !this.isPaused
                }, a.prototype.tryStart = function() {
                    !this.isRunning && this.canRunNext() && (this.isRunning = !0, this.trigger("start"), this.runRemaining())
                }, a.prototype.canRunNext = function() {
                    return !this.isPaused && this.q.length
                }, a.prototype.runRemaining = function() {
                    var a, b, c = this;
                    do {
                        if (a = this.q.shift(), (b = this.runTask(a)) && b.then) return void b.then(function() {
                            c.canRunNext() && c.runRemaining()
                        })
                    } while (this.canRunNext());
                    this.trigger("stop"), this.isRunning = !1, this.tryStart()
                }, a.prototype.runTask = function(a) {
                    return a()
                }, a
            }();
        b.default = e, d.default.mixInto(e)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(59),
            f = function(a) {
                function b(b) {
                    var c = a.call(this) || this;
                    return c.waitsByNamespace = b || {}, c
                }
                return d.__extends(b, a), b.prototype.queue = function(a, b, c) {
                    var d, e = {
                        func: a,
                        namespace: b,
                        type: c
                    };
                    b && (d = this.waitsByNamespace[b]), this.waitNamespace && (b === this.waitNamespace && null != d ? this.delayWait(d) : (this.clearWait(), this.tryStart())), this.compoundTask(e) && (this.waitNamespace || null == d ? this.tryStart() : this.startWait(b, d))
                }, b.prototype.startWait = function(a, b) {
                    this.waitNamespace = a, this.spawnWait(b)
                }, b.prototype.delayWait = function(a) {
                    clearTimeout(this.waitId), this.spawnWait(a)
                }, b.prototype.spawnWait = function(a) {
                    var b = this;
                    this.waitId = setTimeout(function() {
                        b.waitNamespace = null, b.tryStart()
                    }, a)
                }, b.prototype.clearWait = function() {
                    this.waitNamespace && (clearTimeout(this.waitId), this.waitId = null, this.waitNamespace = null)
                }, b.prototype.canRunNext = function() {
                    if (!a.prototype.canRunNext.call(this)) return !1;
                    if (this.waitNamespace) {
                        for (var b = this.q, c = 0; c < b.length; c++)
                            if (b[c].namespace !== this.waitNamespace) return !0;
                        return !1
                    }
                    return !0
                }, b.prototype.runTask = function(a) {
                    a.func()
                }, b.prototype.compoundTask = function(a) {
                    var b, c, d = this.q,
                        e = !0;
                    if (a.namespace && "destroy" === a.type)
                        for (b = d.length - 1; b >= 0; b--) switch (c = d[b], c.type) {
                            case "init":
                                e = !1;
                            case "add":
                            case "remove":
                                d.splice(b, 1)
                        }
                    return e && d.push(a), e
                }, b
            }(e.default);
        b.default = f
    }, function(a, b, c) {
        function d(a) {
            var b, c, d, e = [];
            for (b in a)
                for (c = a[b].eventInstances, d = 0; d < c.length; d++) e.push(c[d].toLegacy());
            return e
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(0),
            f = c(1),
            g = c(3),
            h = c(2),
            i = c(9),
            j = c(37),
            k = c(80),
            l = c(23),
            m = function(a) {
                function b(c, d) {
                    var e = a.call(this) || this;
                    return e.isRTL = !1, e.hitsNeededDepth = 0, e.hasAllDayBusinessHours = !1, e.isDatesRendered = !1, c && (e.view = c), d && (e.options = d), e.uid = String(b.guid++), e.childrenByUid = {}, e.nextDayThreshold = g.duration(e.opt("nextDayThreshold")), e.isRTL = e.opt("isRTL"), e.fillRendererClass && (e.fillRenderer = new e.fillRendererClass(e)), e.eventRendererClass && (e.eventRenderer = new e.eventRendererClass(e, e.fillRenderer)), e.helperRendererClass && e.eventRenderer && (e.helperRenderer = new e.helperRendererClass(e, e.eventRenderer)), e.businessHourRendererClass && e.fillRenderer && (e.businessHourRenderer = new e.businessHourRendererClass(e, e.fillRenderer)), e
                }
                return e.__extends(b, a), b.prototype.addChild = function(a) {
                    return !this.childrenByUid[a.uid] && (this.childrenByUid[a.uid] = a, !0)
                }, b.prototype.removeChild = function(a) {
                    return !!this.childrenByUid[a.uid] && (delete this.childrenByUid[a.uid], !0)
                }, b.prototype.updateSize = function(a, b, c) {
                    this.callChildren("updateSize", arguments)
                }, b.prototype.opt = function(a) {
                    return this._getView().opt(a)
                }, b.prototype.publiclyTrigger = function() {
                    for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
                    var c = this._getCalendar();
                    return c.publiclyTrigger.apply(c, a)
                }, b.prototype.hasPublicHandlers = function() {
                    for (var a = [], b = 0; b < arguments.length; b++) a[b] = arguments[b];
                    var c = this._getCalendar();
                    return c.hasPublicHandlers.apply(c, a)
                }, b.prototype.executeDateRender = function(a) {
                    this.dateProfile = a, this.renderDates(a), this.isDatesRendered = !0, this.callChildren("executeDateRender", arguments)
                }, b.prototype.executeDateUnrender = function() {
                    this.callChildren("executeDateUnrender", arguments), this.dateProfile = null, this.unrenderDates(), this.isDatesRendered = !1
                }, b.prototype.renderDates = function(a) {}, b.prototype.unrenderDates = function() {}, b.prototype.getNowIndicatorUnit = function() {}, b.prototype.renderNowIndicator = function(a) {
                    this.callChildren("renderNowIndicator", arguments)
                }, b.prototype.unrenderNowIndicator = function() {
                    this.callChildren("unrenderNowIndicator", arguments)
                }, b.prototype.renderBusinessHours = function(a) {
                    this.businessHourRenderer && this.businessHourRenderer.render(a), this.callChildren("renderBusinessHours", arguments)
                }, b.prototype.unrenderBusinessHours = function() {
                    this.callChildren("unrenderBusinessHours", arguments), this.businessHourRenderer && this.businessHourRenderer.unrender()
                }, b.prototype.executeEventRender = function(a) {
                    this.eventRenderer ? (this.eventRenderer.rangeUpdated(), this.eventRenderer.render(a)) : this.renderEvents && this.renderEvents(d(a)), this.callChildren("executeEventRender", arguments)
                }, b.prototype.executeEventUnrender = function() {
                    this.callChildren("executeEventUnrender", arguments), this.eventRenderer ? this.eventRenderer.unrender() : this.destroyEvents && this.destroyEvents()
                }, b.prototype.getBusinessHourSegs = function() {
                    var a = this.getOwnBusinessHourSegs();
                    return this.iterChildren(function(b) {
                        a.push.apply(a, b.getBusinessHourSegs())
                    }), a
                }, b.prototype.getOwnBusinessHourSegs = function() {
                    return this.businessHourRenderer ? this.businessHourRenderer.getSegs() : []
                }, b.prototype.getEventSegs = function() {
                    var a = this.getOwnEventSegs();
                    return this.iterChildren(function(b) {
                        a.push.apply(a, b.getEventSegs())
                    }), a
                }, b.prototype.getOwnEventSegs = function() {
                    return this.eventRenderer ? this.eventRenderer.getSegs() : []
                }, b.prototype.triggerAfterEventsRendered = function() {
                    this.triggerAfterEventSegsRendered(this.getEventSegs()), this.publiclyTrigger("eventAfterAllRender", {
                        context: this,
                        args: [this]
                    })
                }, b.prototype.triggerAfterEventSegsRendered = function(a) {
                    var b = this;
                    this.hasPublicHandlers("eventAfterRender") && a.forEach(function(a) {
                        var c;
                        a.el && (c = a.footprint.getEventLegacy(), b.publiclyTrigger("eventAfterRender", {
                            context: c,
                            args: [c, a.el, b]
                        }))
                    })
                }, b.prototype.triggerBeforeEventsDestroyed = function() {
                    this.triggerBeforeEventSegsDestroyed(this.getEventSegs())
                }, b.prototype.triggerBeforeEventSegsDestroyed = function(a) {
                    var b = this;
                    this.hasPublicHandlers("eventDestroy") && a.forEach(function(a) {
                        var c;
                        a.el && (c = a.footprint.getEventLegacy(), b.publiclyTrigger("eventDestroy", {
                            context: c,
                            args: [c, a.el, b]
                        }))
                    })
                }, b.prototype.showEventsWithId = function(a) {
                    this.getEventSegs().forEach(function(b) {
                        b.footprint.eventDef.id === a && b.el && b.el.css("visibility", "")
                    }), this.callChildren("showEventsWithId", arguments)
                }, b.prototype.hideEventsWithId = function(a) {
                    this.getEventSegs().forEach(function(b) {
                        b.footprint.eventDef.id === a && b.el && b.el.css("visibility", "hidden")
                    }), this.callChildren("hideEventsWithId", arguments)
                }, b.prototype.renderDrag = function(a, b, c) {
                    var d = !1;
                    return this.iterChildren(function(e) {
                        e.renderDrag(a, b, c) && (d = !0)
                    }), d
                }, b.prototype.unrenderDrag = function() {
                    this.callChildren("unrenderDrag", arguments)
                }, b.prototype.renderEventResize = function(a, b, c) {
                    this.callChildren("renderEventResize", arguments)
                }, b.prototype.unrenderEventResize = function() {
                    this.callChildren("unrenderEventResize", arguments)
                }, b.prototype.renderSelectionFootprint = function(a) {
                    this.renderHighlight(a), this.callChildren("renderSelectionFootprint", arguments)
                }, b.prototype.unrenderSelection = function() {
                    this.unrenderHighlight(), this.callChildren("unrenderSelection", arguments)
                }, b.prototype.renderHighlight = function(a) {
                    this.fillRenderer && this.fillRenderer.renderFootprint("highlight", a, {
                        getClasses: function() {
                            return ["fc-highlight"]
                        }
                    }), this.callChildren("renderHighlight", arguments)
                }, b.prototype.unrenderHighlight = function() {
                    this.fillRenderer && this.fillRenderer.unrender("highlight"), this.callChildren("unrenderHighlight", arguments)
                }, b.prototype.hitsNeeded = function() {
                    this.hitsNeededDepth++ || this.prepareHits(), this.callChildren("hitsNeeded", arguments)
                }, b.prototype.hitsNotNeeded = function() {
                    this.hitsNeededDepth && !--this.hitsNeededDepth && this.releaseHits(), this.callChildren("hitsNotNeeded", arguments)
                }, b.prototype.prepareHits = function() {}, b.prototype.releaseHits = function() {}, b.prototype.queryHit = function(a, b) {
                    var c, d, e = this.childrenByUid;
                    for (c in e)
                        if (d = e[c].queryHit(a, b)) break;
                    return d
                }, b.prototype.getSafeHitFootprint = function(a) {
                    var b = this.getHitFootprint(a);
                    return this.dateProfile.activeUnzonedRange.containsRange(b.unzonedRange) ? b : null
                }, b.prototype.getHitFootprint = function(a) {}, b.prototype.getHitEl = function(a) {}, b.prototype.eventRangesToEventFootprints = function(a) {
                    var b, c = [];
                    for (b = 0; b < a.length; b++) c.push.apply(c, this.eventRangeToEventFootprints(a[b]));
                    return c
                }, b.prototype.eventRangeToEventFootprints = function(a) {
                    return [l.eventRangeToEventFootprint(a)]
                }, b.prototype.eventFootprintsToSegs = function(a) {
                    var b, c = [];
                    for (b = 0; b < a.length; b++) c.push.apply(c, this.eventFootprintToSegs(a[b]));
                    return c
                }, b.prototype.eventFootprintToSegs = function(a) {
                    var b, c, d, e = a.componentFootprint.unzonedRange;
                    for (b = this.componentFootprintToSegs(a.componentFootprint), c = 0; c < b.length; c++) d = b[c], e.isStart || (d.isStart = !1), e.isEnd || (d.isEnd = !1), d.footprint = a;
                    return b
                }, b.prototype.componentFootprintToSegs = function(a) {
                    return []
                }, b.prototype.callChildren = function(a, b) {
                    this.iterChildren(function(c) {
                        c[a].apply(c, b)
                    })
                }, b.prototype.iterChildren = function(a) {
                    var b, c = this.childrenByUid;
                    for (b in c) a(c[b])
                }, b.prototype._getCalendar = function() {
                    var a = this;
                    return a.calendar || a.view.calendar
                }, b.prototype._getView = function() {
                    return this.view
                }, b.prototype._getDateProfile = function() {
                    return this._getView().get("dateProfile")
                }, b.prototype.buildGotoAnchorHtml = function(a, b, c) {
                    var d, e, g, j;
                    return f.isPlainObject(a) ? (d = a.date, e = a.type, g = a.forceOff) : d = a, d = i.default(d), j = {
                        date: d.format("YYYY-MM-DD"),
                        type: e || "day"
                    }, "string" == typeof b && (c = b, b = null), b = b ? " " + h.attrsToStr(b) : "", c = c || "", !g && this.opt("navLinks") ? "<a" + b + ' data-goto="' + h.htmlEscape(JSON.stringify(j)) + '">' + c + "</a>" : "<span" + b + ">" + c + "</span>"
                }, b.prototype.getAllDayHtml = function() {
                    return this.opt("allDayHtml") || h.htmlEscape(this.opt("allDayText"))
                }, b.prototype.getDayClasses = function(a, b) {
                    var c, d = this._getView(),
                        e = [];
                    return this.dateProfile.activeUnzonedRange.containsDate(a) ? (e.push("fc-" + h.dayIDs[a.day()]), d.isDateInOtherMonth(a, this.dateProfile) && e.push("fc-other-month"), c = d.calendar.getNow(), a.isSame(c, "day") ? (e.push("fc-today"), !0 !== b && e.push(d.calendar.theme.getClass("today"))) : a < c ? e.push("fc-past") : e.push("fc-future")) : e.push("fc-disabled-day"), e
                }, b.prototype.formatRange = function(a, b, c, d) {
                    var e = a.end;
                    return b && (e = e.clone().subtract(1)), j.formatRange(a.start, e, c, d, this.isRTL)
                }, b.prototype.currentRangeAs = function(a) {
                    return this._getDateProfile().currentUnzonedRange.as(a)
                }, b.prototype.computeDayRange = function(a) {
                    var b = this._getCalendar(),
                        c = b.msToUtcMoment(a.startMs, !0),
                        d = b.msToUtcMoment(a.endMs),
                        e = +d.time(),
                        f = d.clone().stripTime();
                    return e && e >= this.nextDayThreshold && f.add(1, "days"), f <= c && (f = c.clone().add(1, "days")), {
                        start: c,
                        end: f
                    }
                }, b.prototype.isMultiDayRange = function(a) {
                    var b = this.computeDayRange(a);
                    return b.end.diff(b.start, "days") > 1
                }, b.guid = 0, b
            }(k.default);
        b.default = m
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(3),
            e = c(2),
            f = c(4),
            g = function() {
                function a(a) {
                    this._view = a
                }
                return a.prototype.opt = function(a) {
                    return this._view.opt(a)
                }, a.prototype.trimHiddenDays = function(a) {
                    return this._view.trimHiddenDays(a)
                }, a.prototype.msToUtcMoment = function(a, b) {
                    return this._view.calendar.msToUtcMoment(a, b)
                }, a.prototype.buildPrev = function(a) {
                    var b = a.date.clone().startOf(a.currentRangeUnit).subtract(a.dateIncrement);
                    return this.build(b, -1)
                }, a.prototype.buildNext = function(a) {
                    var b = a.date.clone().startOf(a.currentRangeUnit).add(a.dateIncrement);
                    return this.build(b, 1)
                }, a.prototype.build = function(a, b, c) {
                    void 0 === c && (c = !1);
                    var e, f, g, h, i, j, k = !a.hasTime(),
                        l = null,
                        m = null;
                    return e = this.buildValidRange(), e = this.trimHiddenDays(e), c && (a = this.msToUtcMoment(e.constrainDate(a), k)), f = this.buildCurrentRangeInfo(a, b), g = /^(year|month|week|day)$/.test(f.unit), h = this.buildRenderRange(this.trimHiddenDays(f.unzonedRange), f.unit, g), h = this.trimHiddenDays(h), i = h.clone(), this.opt("showNonCurrentDates") || (i = i.intersect(f.unzonedRange)), l = d.duration(this.opt("minTime")), m = d.duration(this.opt("maxTime")), i = this.adjustActiveRange(i, l, m), i = i.intersect(e), i && (a = this.msToUtcMoment(i.constrainDate(a), k)), j = f.unzonedRange.intersectsWith(e), {
                        validUnzonedRange: e,
                        currentUnzonedRange: f.unzonedRange,
                        currentRangeUnit: f.unit,
                        isRangeAllDay: g,
                        activeUnzonedRange: i,
                        renderUnzonedRange: h,
                        minTime: l,
                        maxTime: m,
                        isValid: j,
                        date: a,
                        dateIncrement: this.buildDateIncrement(f.duration)
                    }
                }, a.prototype.buildValidRange = function() {
                    return this._view.getUnzonedRangeOption("validRange", this._view.calendar.getNow()) || new f.default
                }, a.prototype.buildCurrentRangeInfo = function(a, b) {
                    var c, d = this._view.viewSpec,
                        f = null,
                        g = null,
                        h = null;
                    return d.duration ? (f = d.duration, g = d.durationUnit, h = this.buildRangeFromDuration(a, b, f, g)) : (c = this.opt("dayCount")) ? (g = "day", h = this.buildRangeFromDayCount(a, b, c)) : (h = this.buildCustomVisibleRange(a)) ? g = e.computeGreatestUnit(h.getStart(), h.getEnd()) : (f = this.getFallbackDuration(), g = e.computeGreatestUnit(f), h = this.buildRangeFromDuration(a, b, f, g)), {
                        duration: f,
                        unit: g,
                        unzonedRange: h
                    }
                }, a.prototype.getFallbackDuration = function() {
                    return d.duration({
                        days: 1
                    })
                }, a.prototype.adjustActiveRange = function(a, b, c) {
                    var d = a.getStart(),
                        e = a.getEnd();
                    return this._view.usesMinMaxTime && (b < 0 && d.time(0).add(b), c > 864e5 && e.time(c - 864e5)), new f.default(d, e)
                }, a.prototype.buildRangeFromDuration = function(a, b, c, g) {
                    function h() {
                        k = a.clone().startOf(n), l = k.clone().add(c), m = new f.default(k, l)
                    }
                    var i, j, k, l, m, n = this.opt("dateAlignment");
                    return n || (i = this.opt("dateIncrement"), i ? (j = d.duration(i), n = j < c ? e.computeDurationGreatestUnit(j, i) : g) : n = g), c.as("days") <= 1 && this._view.isHiddenDay(k) && (k = this._view.skipHiddenDays(k, b), k.startOf("day")), h(), this.trimHiddenDays(m) || (a = this._view.skipHiddenDays(a, b), h()), m
                }, a.prototype.buildRangeFromDayCount = function(a, b, c) {
                    var d, e = this.opt("dateAlignment"),
                        g = 0,
                        h = a.clone();
                    e && h.startOf(e), h.startOf("day"), h = this._view.skipHiddenDays(h, b), d = h.clone();
                    do {
                        d.add(1, "day"), this._view.isHiddenDay(d) || g++
                    } while (g < c);
                    return new f.default(h, d)
                }, a.prototype.buildCustomVisibleRange = function(a) {
                    var b = this._view.getUnzonedRangeOption("visibleRange", this._view.calendar.applyTimezone(a));
                    return !b || null != b.startMs && null != b.endMs ? b : null
                }, a.prototype.buildRenderRange = function(a, b, c) {
                    return a.clone()
                }, a.prototype.buildDateIncrement = function(a) {
                    var b, c = this.opt("dateIncrement");
                    return c ? d.duration(c) : (b = this.opt("dateAlignment")) ? d.duration(1, b) : a || d.duration({
                        days: 1
                    })
                }, a
            }();
        b.default = g
    }, function(a, b, c) {
        function d(a) {
            var b, c, d, e, i = h.default.dataAttrPrefix;
            return i && (i += "-"), b = a.data(i + "event") || null, b && (b = "object" == typeof b ? f.extend({}, b) : {}, c = b.start, null == c && (c = b.time), d = b.duration, e = b.stick, delete b.start, delete b.time, delete b.duration, delete b.stick), null == c && (c = a.data(i + "start")), null == c && (c = a.data(i + "time")), null == d && (d = a.data(i + "duration")), null == e && (e = a.data(i + "stick")), c = null != c ? g.duration(c) : null, d = null != d ? g.duration(d) : null, e = Boolean(e), {
                eventProps: b,
                startTime: c,
                duration: d,
                stick: e
            }
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(0),
            f = c(1),
            g = c(3),
            h = c(7),
            i = c(2),
            j = c(9),
            k = c(6),
            l = c(18),
            m = c(11),
            n = c(17),
            o = c(5),
            p = c(13),
            q = function(a) {
                function b() {
                    var b = null !== a && a.apply(this, arguments) || this;
                    return b.isDragging = !1, b
                }
                return e.__extends(b, a), b.prototype.end = function() {
                    this.dragListener && this.dragListener.endInteraction()
                }, b.prototype.bindToDocument = function() {
                    this.listenTo(f(document), {
                        dragstart: this.handleDragStart,
                        sortstart: this.handleDragStart
                    })
                }, b.prototype.unbindFromDocument = function() {
                    this.stopListeningTo(f(document))
                }, b.prototype.handleDragStart = function(a, b) {
                    var c, d;
                    this.opt("droppable") && (c = f((b ? b.item : null) || a.target), d = this.opt("dropAccept"), (f.isFunction(d) ? d.call(c[0], c) : c.is(d)) && (this.isDragging || this.listenToExternalDrag(c, a, b)))
                }, b.prototype.listenToExternalDrag = function(a, b, c) {
                    var e, f = this,
                        g = this.component,
                        h = this.view,
                        j = d(a);
                    (this.dragListener = new l.default(g, {
                        interactionStart: function() {
                            f.isDragging = !0
                        },
                        hitOver: function(a) {
                            var b, c = !0,
                                d = a.component.getSafeHitFootprint(a);
                            d ? (e = f.computeExternalDrop(d, j), e ? (b = new n.default(e.buildInstances()), c = j.eventProps ? g.isEventInstanceGroupAllowed(b) : g.isExternalInstanceGroupAllowed(b)) : c = !1) : c = !1, c || (e = null, i.disableCursor()), e && g.renderDrag(g.eventRangesToEventFootprints(b.sliceRenderRanges(g.dateProfile.renderUnzonedRange, h.calendar)))
                        },
                        hitOut: function() {
                            e = null
                        },
                        hitDone: function() {
                            i.enableCursor(), g.unrenderDrag()
                        },
                        interactionEnd: function(b) {
                            e && h.reportExternalDrop(e, Boolean(j.eventProps), Boolean(j.stick), a, b, c), f.isDragging = !1, f.dragListener = null
                        }
                    })).startDrag(b)
                }, b.prototype.computeExternalDrop = function(a, b) {
                    var c, d = this.view.calendar,
                        e = j.default.utc(a.unzonedRange.startMs).stripZone();
                    return a.isAllDay && (b.startTime ? e.time(b.startTime) : e.stripTime()), b.duration && (c = e.clone().add(b.duration)), e = d.applyTimezone(e), c && (c = d.applyTimezone(c)), m.default.parse(f.extend({}, b.eventProps, {
                        start: e,
                        end: c
                    }), new o.default(d))
                }, b
            }(p.default);
        b.default = q, k.default.mixInto(q)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(26),
            h = c(35),
            i = c(18),
            j = c(13),
            k = function(a) {
                function b(b, c) {
                    var d = a.call(this, b) || this;
                    return d.isResizing = !1, d.eventPointing = c, d
                }
                return d.__extends(b, a), b.prototype.end = function() {
                    this.dragListener && this.dragListener.endInteraction()
                }, b.prototype.bindToEl = function(a) {
                    var b = this.component;
                    b.bindSegHandlerToEl(a, "mousedown", this.handleMouseDown.bind(this)), b.bindSegHandlerToEl(a, "touchstart", this.handleTouchStart.bind(this))
                }, b.prototype.handleMouseDown = function(a, b) {
                    this.component.canStartResize(a, b) && this.buildDragListener(a, e(b.target).is(".fc-start-resizer")).startInteraction(b, {
                        distance: 5
                    })
                }, b.prototype.handleTouchStart = function(a, b) {
                    this.component.canStartResize(a, b) && this.buildDragListener(a, e(b.target).is(".fc-start-resizer")).startInteraction(b)
                }, b.prototype.buildDragListener = function(a, b) {
                    var c, d, e = this,
                        g = this.component,
                        h = this.view,
                        j = h.calendar,
                        k = j.eventManager,
                        l = a.el,
                        m = a.footprint.eventDef,
                        n = a.footprint.eventInstance;
                    return this.dragListener = new i.default(g, {
                        scroll: this.opt("dragScroll"),
                        subjectEl: l,
                        interactionStart: function() {
                            c = !1
                        },
                        dragStart: function(b) {
                            c = !0, e.eventPointing.handleMouseout(a, b), e.segResizeStart(a, b)
                        },
                        hitOver: function(c, i, l) {
                            var n, o = !0,
                                p = g.getSafeHitFootprint(l),
                                q = g.getSafeHitFootprint(c);
                            p && q ? (d = b ? e.computeEventStartResizeMutation(p, q, a.footprint) : e.computeEventEndResizeMutation(p, q, a.footprint), d ? (n = k.buildMutatedEventInstanceGroup(m.id, d), o = g.isEventInstanceGroupAllowed(n)) : o = !1) : o = !1, o ? d.isEmpty() && (d = null) : (d = null, f.disableCursor()), d && (h.hideEventsWithId(a.footprint.eventDef.id), h.renderEventResize(g.eventRangesToEventFootprints(n.sliceRenderRanges(g.dateProfile.renderUnzonedRange, j)), a))
                        },
                        hitOut: function() {
                            d = null
                        },
                        hitDone: function() {
                            h.unrenderEventResize(a), h.showEventsWithId(a.footprint.eventDef.id), f.enableCursor()
                        },
                        interactionEnd: function(b) {
                            c && e.segResizeStop(a, b), d && h.reportEventResize(n, d, l, b), e.dragListener = null
                        }
                    })
                }, b.prototype.segResizeStart = function(a, b) {
                    this.isResizing = !0, this.component.publiclyTrigger("eventResizeStart", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, {}, this.view]
                    })
                }, b.prototype.segResizeStop = function(a, b) {
                    this.isResizing = !1, this.component.publiclyTrigger("eventResizeStop", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, {}, this.view]
                    })
                }, b.prototype.computeEventStartResizeMutation = function(a, b, c) {
                    var d, e, f = c.componentFootprint.unzonedRange,
                        i = this.component.diffDates(b.unzonedRange.getStart(), a.unzonedRange.getStart());
                    return f.getStart().add(i) < f.getEnd() && (d = new h.default, d.setStartDelta(i), e = new g.default, e.setDateMutation(d), e)
                }, b.prototype.computeEventEndResizeMutation = function(a, b, c) {
                    var d, e, f = c.componentFootprint.unzonedRange,
                        i = this.component.diffDates(b.unzonedRange.getEnd(), a.unzonedRange.getEnd());
                    return f.getEnd().add(i) > f.getStart() && (d = new h.default, d.setEndDelta(i), e = new g.default, e.setDateMutation(d), e)
                }, b
            }(j.default);
        b.default = k
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = c(26),
            g = c(35),
            h = c(39),
            i = c(18),
            j = c(81),
            k = c(13),
            l = function(a) {
                function b(b, c) {
                    var d = a.call(this, b) || this;
                    return d.isDragging = !1, d.eventPointing = c, d
                }
                return d.__extends(b, a), b.prototype.end = function() {
                    this.dragListener && this.dragListener.endInteraction()
                }, b.prototype.getSelectionDelay = function() {
                    var a = this.opt("eventLongPressDelay");
                    return null == a && (a = this.opt("longPressDelay")), a
                }, b.prototype.bindToEl = function(a) {
                    var b = this.component;
                    b.bindSegHandlerToEl(a, "mousedown", this.handleMousedown.bind(this)), b.bindSegHandlerToEl(a, "touchstart", this.handleTouchStart.bind(this))
                }, b.prototype.handleMousedown = function(a, b) {
                    this.component.canStartDrag(a, b) && this.buildDragListener(a).startInteraction(b, {
                        distance: 5
                    })
                }, b.prototype.handleTouchStart = function(a, b) {
                    var c = this.component,
                        d = {
                            delay: this.view.isEventDefSelected(a.footprint.eventDef) ? 0 : this.getSelectionDelay()
                        };
                    c.canStartDrag(a, b) ? this.buildDragListener(a).startInteraction(b, d) : c.canStartSelection(a, b) && this.buildSelectListener(a).startInteraction(b, d)
                }, b.prototype.buildSelectListener = function(a) {
                    var b = this,
                        c = this.view,
                        d = a.footprint.eventDef,
                        e = a.footprint.eventInstance;
                    if (this.dragListener) return this.dragListener;
                    var f = this.dragListener = new h.default({
                        dragStart: function(a) {
                            f.isTouch && !c.isEventDefSelected(d) && e && c.selectEventInstance(e)
                        },
                        interactionEnd: function(a) {
                            b.dragListener = null
                        }
                    });
                    return f
                }, b.prototype.buildDragListener = function(a) {
                    var b, c, d, f = this,
                        g = this.component,
                        h = this.view,
                        k = h.calendar,
                        l = k.eventManager,
                        m = a.el,
                        n = a.footprint.eventDef,
                        o = a.footprint.eventInstance;
                    if (this.dragListener) return this.dragListener;
                    var p = this.dragListener = new i.default(h, {
                        scroll: this.opt("dragScroll"),
                        subjectEl: m,
                        subjectCenter: !0,
                        interactionStart: function(d) {
                            a.component = g, b = !1, c = new j.default(a.el, {
                                additionalClass: "fc-dragging",
                                parentEl: h.el,
                                opacity: p.isTouch ? null : f.opt("dragOpacity"),
                                revertDuration: f.opt("dragRevertDuration"),
                                zIndex: 2
                            }), c.hide(), c.start(d)
                        },
                        dragStart: function(c) {
                            p.isTouch && !h.isEventDefSelected(n) && o && h.selectEventInstance(o), b = !0, f.eventPointing.handleMouseout(a, c), f.segDragStart(a, c), h.hideEventsWithId(a.footprint.eventDef.id)
                        },
                        hitOver: function(b, i, j) {
                            var m, o, q, r = !0;
                            a.hit && (j = a.hit), m = j.component.getSafeHitFootprint(j), o = b.component.getSafeHitFootprint(b), m && o ? (d = f.computeEventDropMutation(m, o, n), d ? (q = l.buildMutatedEventInstanceGroup(n.id, d), r = g.isEventInstanceGroupAllowed(q)) : r = !1) : r = !1, r || (d = null, e.disableCursor()), d && h.renderDrag(g.eventRangesToEventFootprints(q.sliceRenderRanges(g.dateProfile.renderUnzonedRange, k)), a, p.isTouch) ? c.hide() : c.show(), i && (d = null)
                        },
                        hitOut: function() {
                            h.unrenderDrag(a), c.show(), d = null
                        },
                        hitDone: function() {
                            e.enableCursor()
                        },
                        interactionEnd: function(e) {
                            delete a.component, c.stop(!d, function() {
                                b && (h.unrenderDrag(a), f.segDragStop(a, e)), h.showEventsWithId(a.footprint.eventDef.id), d && h.reportEventDrop(o, d, m, e)
                            }), f.dragListener = null
                        }
                    });
                    return p
                }, b.prototype.segDragStart = function(a, b) {
                    this.isDragging = !0, this.component.publiclyTrigger("eventDragStart", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, {}, this.view]
                    })
                }, b.prototype.segDragStop = function(a, b) {
                    this.isDragging = !1, this.component.publiclyTrigger("eventDragStop", {
                        context: a.el[0],
                        args: [a.footprint.getEventLegacy(), b, {}, this.view]
                    })
                }, b.prototype.computeEventDropMutation = function(a, b, c) {
                    var d = new f.default;
                    return d.setDateMutation(this.computeEventDateMutation(a, b)), d
                }, b.prototype.computeEventDateMutation = function(a, b) {
                    var c, d, e = a.unzonedRange.getStart(),
                        f = b.unzonedRange.getStart(),
                        h = !1,
                        i = !1,
                        j = !1;
                    return a.isAllDay !== b.isAllDay && (h = !0, b.isAllDay ? (j = !0, e.stripTime()) : i = !0), c = this.component.diffDates(f, e), d = new g.default, d.clearEnd = h, d.forceTimed = i, d.forceAllDay = j, d.setDateDelta(c), d
                }, b
            }(k.default);
        b.default = l
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = c(18),
            g = c(10),
            h = c(4),
            i = c(13),
            j = function(a) {
                function b(b) {
                    var c = a.call(this, b) || this;
                    return c.dragListener = c.buildDragListener(), c
                }
                return d.__extends(b, a), b.prototype.end = function() {
                    this.dragListener.endInteraction()
                }, b.prototype.getDelay = function() {
                    var a = this.opt("selectLongPressDelay");
                    return null == a && (a = this.opt("longPressDelay")), a
                }, b.prototype.bindToEl = function(a) {
                    var b = this,
                        c = this.component,
                        d = this.dragListener;
                    c.bindDateHandlerToEl(a, "mousedown", function(a) {
                        b.opt("selectable") && !c.shouldIgnoreMouse() && d.startInteraction(a, {
                            distance: b.opt("selectMinDistance")
                        })
                    }), c.bindDateHandlerToEl(a, "touchstart", function(a) {
                        b.opt("selectable") && !c.shouldIgnoreTouch() && d.startInteraction(a, {
                            delay: b.getDelay()
                        })
                    }), e.preventSelection(a)
                }, b.prototype.buildDragListener = function() {
                    var a, b = this,
                        c = this.component;
                    return new f.default(c, {
                        scroll: this.opt("dragScroll"),
                        interactionStart: function() {
                            a = null
                        },
                        dragStart: function(a) {
                            b.view.unselect(a)
                        },
                        hitOver: function(d, f, g) {
                            var h, i;
                            g && (h = c.getSafeHitFootprint(g), i = c.getSafeHitFootprint(d), a = h && i ? b.computeSelection(h, i) : null, a ? c.renderSelectionFootprint(a) : !1 === a && e.disableCursor())
                        },
                        hitOut: function() {
                            a = null, c.unrenderSelection()
                        },
                        hitDone: function() {
                            e.enableCursor()
                        },
                        interactionEnd: function(c, d) {
                            !d && a && b.view.reportSelection(a, c)
                        }
                    })
                }, b.prototype.computeSelection = function(a, b) {
                    var c = this.computeSelectionFootprint(a, b);
                    return !(c && !this.isSelectionFootprintAllowed(c)) && c
                }, b.prototype.computeSelectionFootprint = function(a, b) {
                    var c = [a.unzonedRange.startMs, a.unzonedRange.endMs, b.unzonedRange.startMs, b.unzonedRange.endMs];
                    return c.sort(e.compareNumbers), new g.default(new h.default(c[0], c[3]), a.isAllDay)
                }, b.prototype.isSelectionFootprintAllowed = function(a) {
                    return this.component.dateProfile.validUnzonedRange.containsRange(a.unzonedRange) && this.view.calendar.constraints.isSelectionFootprintAllowed(a)
                }, b
            }(i.default);
        b.default = j
    }, function(a, b, c) {
        function d(a) {
            return function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return g.__extends(b, a), b.prototype.renderHeadIntroHtml = function() {
                    var a, b = this.view,
                        c = b.calendar,
                        d = c.msToUtcMoment(this.dateProfile.renderUnzonedRange.startMs, !0);
                    return this.opt("weekNumbers") ? (a = d.format(this.opt("smallWeekFormat")), '<th class="fc-axis fc-week-number ' + c.theme.getClass("widgetHeader") + '" ' + b.axisStyleAttr() + ">" + b.buildGotoAnchorHtml({
                        date: d,
                        type: "week",
                        forceOff: this.colCnt > 1
                    }, j.htmlEscape(a)) + "</th>") : '<th class="fc-axis ' + c.theme.getClass("widgetHeader") + '" ' + b.axisStyleAttr() + "></th>"
                }, b.prototype.renderBgIntroHtml = function() {
                    var a = this.view;
                    return '<td class="fc-axis ' + a.calendar.theme.getClass("widgetContent") + '" ' + a.axisStyleAttr() + "></td>"
                }, b.prototype.renderIntroHtml = function() {
                    return '<td class="fc-axis" ' + this.view.axisStyleAttr() + "></td>"
                }, b
            }(a)
        }

        function e(a) {
            return function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return g.__extends(b, a), b.prototype.renderBgIntroHtml = function() {
                    var a = this.view;
                    return '<td class="fc-axis ' + a.calendar.theme.getClass("widgetContent") + '" ' + a.axisStyleAttr() + "><span>" + a.getAllDayHtml() + "</span></td>"
                }, b.prototype.renderIntroHtml = function() {
                    return '<td class="fc-axis" ' + this.view.axisStyleAttr() + "></td>"
                }, b
            }(a)
        }

        function f(a) {
            var b, c = [],
                d = [];
            for (b = 0; b < a.length; b++) a[b].componentFootprint.isAllDay ? c.push(a[b]) : d.push(a[b]);
            return {
                allDay: c,
                timed: d
            }
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var g = c(0),
            h = c(3),
            i = c(1),
            j = c(2),
            k = c(28),
            l = c(30),
            m = c(68),
            n = c(46),
            o = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.usesMinMaxTime = !0, d.timeGrid = d.instantiateTimeGrid(), d.addChild(d.timeGrid), d.opt("allDaySlot") && (d.dayGrid = d.instantiateDayGrid(), d.addChild(d.dayGrid)), d.scroller = new k.default({
                        overflowX: "hidden",
                        overflowY: "auto"
                    }), d
                }
                return g.__extends(b, a), b.prototype.instantiateTimeGrid = function() {
                    return new(d(this.timeGridClass))(this)
                }, b.prototype.instantiateDayGrid = function() {
                    return new(e(this.dayGridClass))(this)
                }, b.prototype.renderSkeleton = function() {
                    var a, b;
                    this.el.addClass("fc-agenda-view").html(this.renderSkeletonHtml()), this.scroller.render(), a = this.scroller.el.addClass("fc-time-grid-container"), b = i('<div class="fc-time-grid" />').appendTo(a), this.el.find(".fc-body > tr > td").append(a), this.timeGrid.headContainerEl = this.el.find(".fc-head-container"), this.timeGrid.setElement(b), this.dayGrid && (this.dayGrid.setElement(this.el.find(".fc-day-grid")), this.dayGrid.bottomCoordPadding = this.dayGrid.el.next("hr").outerHeight())
                }, b.prototype.unrenderSkeleton = function() {
                    this.timeGrid.removeElement(), this.dayGrid && this.dayGrid.removeElement(), this.scroller.destroy()
                }, b.prototype.renderSkeletonHtml = function() {
                    var a = this.calendar.theme;
                    return '<table class="' + a.getClass("tableGrid") + '">' + (this.opt("columnHeader") ? '<thead class="fc-head"><tr><td class="fc-head-container ' + a.getClass("widgetHeader") + '">&nbsp;</td></tr></thead>' : "") + '<tbody class="fc-body"><tr><td class="' + a.getClass("widgetContent") + '">' + (this.dayGrid ? '<div class="fc-day-grid"/><hr class="fc-divider ' + a.getClass("widgetHeader") + '"/>' : "") + "</td></tr></tbody></table>"
                }, b.prototype.axisStyleAttr = function() {
                    return null != this.axisWidth ? 'style="width:' + this.axisWidth + 'px"' : ""
                }, b.prototype.getNowIndicatorUnit = function() {
                    return this.timeGrid.getNowIndicatorUnit()
                }, b.prototype.updateSize = function(b, c, d) {
                    var e, f, g;
                    if (a.prototype.updateSize.call(this, b, c, d), this.axisWidth = j.matchCellWidths(this.el.find(".fc-axis")), !this.timeGrid.colEls) return void(c || (f = this.computeScrollerHeight(b), this.scroller.setHeight(f)));
                    var h = this.el.find(".fc-row:not(.fc-scroller *)");
                    this.timeGrid.bottomRuleEl.hide(), this.scroller.clear(), j.uncompensateScroll(h), this.dayGrid && (this.dayGrid.removeSegPopover(), e = this.opt("eventLimit"), e && "number" != typeof e && (e = 5), e && this.dayGrid.limitRows(e)), c || (f = this.computeScrollerHeight(b), this.scroller.setHeight(f), g = this.scroller.getScrollbarWidths(), (g.left || g.right) && (j.compensateScroll(h, g), f = this.computeScrollerHeight(b), this.scroller.setHeight(f)), this.scroller.lockOverflow(g), this.timeGrid.getTotalSlatHeight() < f && this.timeGrid.bottomRuleEl.show())
                }, b.prototype.computeScrollerHeight = function(a) {
                    return a - j.subtractInnerElHeight(this.el, this.scroller.el)
                }, b.prototype.computeInitialDateScroll = function() {
                    var a = h.duration(this.opt("scrollTime")),
                        b = this.timeGrid.computeTimeTop(a);
                    return b = Math.ceil(b), b && b++, {
                        top: b
                    }
                }, b.prototype.queryDateScroll = function() {
                    return {
                        top: this.scroller.getScrollTop()
                    }
                }, b.prototype.applyDateScroll = function(a) {
                    void 0 !== a.top && this.scroller.setScrollTop(a.top)
                }, b.prototype.getHitFootprint = function(a) {
                    return a.component.getHitFootprint(a)
                }, b.prototype.getHitEl = function(a) {
                    return a.component.getHitEl(a)
                }, b.prototype.executeEventRender = function(a) {
                    var b, c, d = {},
                        e = {};
                    for (b in a) c = a[b], c.getEventDef().isAllDay() ? d[b] = c : e[b] = c;
                    this.timeGrid.executeEventRender(e), this.dayGrid && this.dayGrid.executeEventRender(d)
                }, b.prototype.renderDrag = function(a, b, c) {
                    var d = f(a),
                        e = !1;
                    return e = this.timeGrid.renderDrag(d.timed, b, c), this.dayGrid && (e = this.dayGrid.renderDrag(d.allDay, b, c) || e), e
                }, b.prototype.renderEventResize = function(a, b, c) {
                    var d = f(a);
                    this.timeGrid.renderEventResize(d.timed, b, c), this.dayGrid && this.dayGrid.renderEventResize(d.allDay, b, c)
                }, b.prototype.renderSelectionFootprint = function(a) {
                    a.isAllDay ? this.dayGrid && this.dayGrid.renderSelectionFootprint(a) : this.timeGrid.renderSelectionFootprint(a)
                }, b
            }(l.default);
        b.default = o, o.prototype.timeGridClass = m.default, o.prototype.dayGridClass = n.default
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(3),
            g = c(2),
            h = c(29),
            i = c(41),
            j = c(45),
            k = c(40),
            l = c(38),
            m = c(4),
            n = c(10),
            o = c(83),
            p = c(84),
            q = c(85),
            r = [{
                hours: 1
            }, {
                minutes: 30
            }, {
                minutes: 15
            }, {
                seconds: 30
            }, {
                seconds: 15
            }],
            s = function(a) {
                function b(b) {
                    var c = a.call(this, b) || this;
                    return c.processOptions(), c
                }
                return d.__extends(b, a), b.prototype.componentFootprintToSegs = function(a) {
                    var b, c = this.sliceRangeByTimes(a.unzonedRange);
                    for (b = 0; b < c.length; b++) this.isRTL ? c[b].col = this.daysPerRow - 1 - c[b].dayIndex : c[b].col = c[b].dayIndex;
                    return c
                }, b.prototype.sliceRangeByTimes = function(a) {
                    var b, c, d = [];
                    for (c = 0; c < this.daysPerRow; c++)(b = a.intersect(this.dayRanges[c])) && d.push({
                        startMs: b.startMs,
                        endMs: b.endMs,
                        isStart: b.isStart,
                        isEnd: b.isEnd,
                        dayIndex: c
                    });
                    return d
                }, b.prototype.processOptions = function() {
                    var a, b = this.opt("slotDuration"),
                        c = this.opt("snapDuration");
                    b = f.duration(b), c = c ? f.duration(c) : b, this.slotDuration = b, this.snapDuration = c, this.snapsPerSlot = b / c, a = this.opt("slotLabelFormat"), e.isArray(a) && (a = a[a.length - 1]), this.labelFormat = a || this.opt("smallTimeFormat"), a = this.opt("slotLabelInterval"), this.labelInterval = a ? f.duration(a) : this.computeLabelInterval(b)
                }, b.prototype.computeLabelInterval = function(a) {
                    var b, c, d;
                    for (b = r.length - 1; b >= 0; b--)
                        if (c = f.duration(r[b]), d = g.divideDurationByDuration(c, a), g.isInt(d) && d > 1) return c;
                    return f.duration(a)
                }, b.prototype.renderDates = function(a) {
                    this.dateProfile = a, this.updateDayTable(), this.renderSlats(), this.renderColumns()
                }, b.prototype.unrenderDates = function() {
                    this.unrenderColumns()
                }, b.prototype.renderSkeleton = function() {
                    var a = this.view.calendar.theme;
                    this.el.html('<div class="fc-bg"></div><div class="fc-slats"></div><hr class="fc-divider ' + a.getClass("widgetHeader") + '" style="display:none" />'), this.bottomRuleEl = this.el.find("hr")
                }, b.prototype.renderSlats = function() {
                    var a = this.view.calendar.theme;
                    this.slatContainerEl = this.el.find("> .fc-slats").html('<table class="' + a.getClass("tableGrid") + '">' + this.renderSlatRowHtml() + "</table>"), this.slatEls = this.slatContainerEl.find("tr"), this.slatCoordCache = new l.default({
                        els: this.slatEls,
                        isVertical: !0
                    })
                }, b.prototype.renderSlatRowHtml = function() {
                    for (var a, b, c, d = this.view, e = d.calendar, h = e.theme, i = this.isRTL, j = this.dateProfile, k = "", l = f.duration(+j.minTime), m = f.duration(0); l < j.maxTime;) a = e.msToUtcMoment(j.renderUnzonedRange.startMs).time(l), b = g.isInt(g.divideDurationByDuration(m, this.labelInterval)), c = '<td class="fc-axis fc-time ' + h.getClass("widgetContent") + '" ' + d.axisStyleAttr() + ">" + (b ? "<span>" + g.htmlEscape(a.format(this.labelFormat)) + "</span>" : "") + "</td>", k += '<tr data-time="' + a.format("HH:mm:ss") + '"' + (b ? "" : ' class="fc-minor"') + ">" + (i ? "" : c) + '<td class="' + h.getClass("widgetContent") + '"/>' + (i ? c : "") + "</tr>", l.add(this.slotDuration), m.add(this.slotDuration);
                    return k
                }, b.prototype.renderColumns = function() {
                    var a = this.dateProfile,
                        b = this.view.calendar.theme;
                    this.dayRanges = this.dayDates.map(function(b) {
                        return new m.default(b.clone().add(a.minTime), b.clone().add(a.maxTime))
                    }), this.headContainerEl && this.headContainerEl.html(this.renderHeadHtml()), this.el.find("> .fc-bg").html('<table class="' + b.getClass("tableGrid") + '">' + this.renderBgTrHtml(0,1) + "</table>"), this.colEls = this.el.find(".fc-day, .fc-disabled-day"), this.colCoordCache = new l.default({
                        els: this.colEls,
                        isHorizontal: !0
                    }), this.renderContentSkeleton()
                }, b.prototype.unrenderColumns = function() {
                    this.unrenderContentSkeleton()
                }, b.prototype.renderContentSkeleton = function() {
                    var a, b, c = "";
                    for (a = 0; a < this.colCnt; a++) c += '<td><div class="fc-content-col"><div class="fc-event-container fc-helper-container"></div><div class="fc-event-container"></div><div class="fc-highlight-container"></div><div class="fc-bgevent-container"></div><div class="fc-business-container"></div></div></td>';
                    b = this.contentSkeletonEl = e('<div class="fc-content-skeleton"><table><tr>' + c + "</tr></table></div>"), this.colContainerEls = b.find(".fc-content-col"), this.helperContainerEls = b.find(".fc-helper-container"), this.fgContainerEls = b.find(".fc-event-container:not(.fc-helper-container)"), this.bgContainerEls = b.find(".fc-bgevent-container"), this.highlightContainerEls = b.find(".fc-highlight-container"), this.businessContainerEls = b.find(".fc-business-container"), this.bookendCells(b.find("tr")), this.el.append(b)
                }, b.prototype.unrenderContentSkeleton = function() {
                    this.contentSkeletonEl.remove(), this.contentSkeletonEl = null, this.colContainerEls = null, this.helperContainerEls = null, this.fgContainerEls = null, this.bgContainerEls = null, this.highlightContainerEls = null, this.businessContainerEls = null
                }, b.prototype.groupSegsByCol = function(a) {
                    var b, c = [];
                    for (b = 0; b < this.colCnt; b++) c.push([]);
                    for (b = 0; b < a.length; b++) c[a[b].col].push(a[b]);
                    return c
                }, b.prototype.attachSegsByCol = function(a, b) {
                    var c, d, e;
                    for (c = 0; c < this.colCnt; c++)
                        for (d = a[c], e = 0; e < d.length; e++) b.eq(c).append(d[e].el)
                }, b.prototype.getNowIndicatorUnit = function() {
                    return "minute"
                }, b.prototype.renderNowIndicator = function(a) {
                    if (this.colContainerEls) {
                        var b, c = this.componentFootprintToSegs(new n.default(new m.default(a, a.valueOf() + 1), !1)),
                            d = this.computeDateTop(a, a),
                            f = [];
                        for (b = 0; b < c.length; b++) f.push(e('<div class="fc-now-indicator fc-now-indicator-line"></div>').css("top", d).appendTo(this.colContainerEls.eq(c[b].col))[0]);
                        c.length > 0 && f.push(e('<div class="fc-now-indicator fc-now-indicator-arrow"></div>').css("top", d).appendTo(this.el.find(".fc-content-skeleton"))[0]), this.nowIndicatorEls = e(f)
                    }
                }, b.prototype.unrenderNowIndicator = function() {
                    this.nowIndicatorEls && (this.nowIndicatorEls.remove(), this.nowIndicatorEls = null)
                }, b.prototype.updateSize = function(b, c, d) {
                    a.prototype.updateSize.call(this, b, c, d), this.slatCoordCache.build(), d && this.updateSegVerticals([].concat(this.eventRenderer.getSegs(), this.businessSegs || []))
                }, b.prototype.getTotalSlatHeight = function() {
                    return this.slatContainerEl.outerHeight()
                }, b.prototype.computeDateTop = function(a, b) {
                    return this.computeTimeTop(f.duration(a - b.clone().stripTime()))
                }, b.prototype.computeTimeTop = function(a) {
                    var b, c, d = this.slatEls.length,
                        e = this.dateProfile,
                        f = (a - e.minTime) / this.slotDuration;
                    return f = Math.max(0, f), f = Math.min(d, f), b = Math.floor(f), b = Math.min(b, d - 1), c = f - b, this.slatCoordCache.getTopPosition(b) + this.slatCoordCache.getHeight(b) * c
                }, b.prototype.updateSegVerticals = function(a) {
                    this.computeSegVerticals(a), this.assignSegVerticals(a)
                }, b.prototype.computeSegVerticals = function(a) {
                    var b, c, d, e = this.opt("agendaEventMinHeight");
                    for (b = 0; b < a.length; b++) c = a[b], d = this.dayDates[c.dayIndex], c.top = this.computeDateTop(c.startMs, d), c.bottom = Math.max(c.top + e, this.computeDateTop(c.endMs, d))
                }, b.prototype.assignSegVerticals = function(a) {
                    var b, c;
                    for (b = 0; b < a.length; b++) c = a[b], c.el.css(this.generateSegVerticalCss(c))
                }, b.prototype.generateSegVerticalCss = function(a) {
                    return {
                        top: a.top,
                        bottom: -a.bottom
                    }
                }, b.prototype.prepareHits = function() {
                    this.colCoordCache.build(), this.slatCoordCache.build()
                }, b.prototype.releaseHits = function() {
                    this.colCoordCache.clear()
                }, b.prototype.queryHit = function(a, b) {
                    var c = this.snapsPerSlot,
                        d = this.colCoordCache,
                        e = this.slatCoordCache;
                    if (d.isLeftInBounds(a) && e.isTopInBounds(b)) {
                        var f = d.getHorizontalIndex(a),
                            g = e.getVerticalIndex(b);
                        if (null != f && null != g) {
                            var h = e.getTopOffset(g),
                                i = e.getHeight(g),
                                j = (b - h) / i,
                                k = Math.floor(j * c),
                                l = g * c + k,
                                m = h + k / c * i,
                                n = h + (k + 1) / c * i;
                            return {
                                col: f,
                                snap: l,
                                component: this,
                                left: d.getLeftOffset(f),
                                right: d.getRightOffset(f),
                                top: m,
                                bottom: n
                            }
                        }
                    }
                }, b.prototype.getHitFootprint = function(a) {
                    var b, c = this.getCellDate(0, a.col),
                        d = this.computeSnapTime(a.snap);
                    return c.time(d), b = c.clone().add(this.snapDuration), new n.default(new m.default(c, b), !1)
                }, b.prototype.computeSnapTime = function(a) {
                    return f.duration(this.dateProfile.minTime + this.snapDuration * a)
                }, b.prototype.getHitEl = function(a) {
                    return this.colEls.eq(a.col)
                }, b.prototype.renderDrag = function(a, b, c) {
                    var d;
                    if (b) {
                        if (a.length) return this.helperRenderer.renderEventDraggingFootprints(a, b, c), !0
                    } else
                        for (d = 0; d < a.length; d++) this.renderHighlight(a[d].componentFootprint)
                }, b.prototype.unrenderDrag = function() {
                    this.unrenderHighlight(), this.helperRenderer.unrender()
                }, b.prototype.renderEventResize = function(a, b, c) {
                    this.helperRenderer.renderEventResizingFootprints(a, b, c)
                }, b.prototype.unrenderEventResize = function() {
                    this.helperRenderer.unrender()
                }, b.prototype.renderSelectionFootprint = function(a) {
                    this.opt("selectHelper") ? this.helperRenderer.renderComponentFootprint(a) : this.renderHighlight(a)
                }, b.prototype.unrenderSelection = function() {
                    this.helperRenderer.unrender(), this.unrenderHighlight()
                }, b
            }(h.default);
        b.default = s, s.prototype.eventRendererClass = o.default, s.prototype.businessHourRendererClass = i.default, s.prototype.helperRendererClass = p.default, s.prototype.fillRendererClass = q.default, j.default.mixInto(s), k.default.mixInto(s)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(4),
            f = c(62),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.buildRenderRange = function(b, c, d) {
                    var f = a.prototype.buildRenderRange.call(this, b, c, d),
                        g = this.msToUtcMoment(f.startMs, d),
                        h = this.msToUtcMoment(f.endMs, d);
                    return /^(year|month)$/.test(c) && (g.startOf("week"), h.weekday() && h.add(1, "week").startOf("week")), new e.default(g, h)
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(3),
            f = c(2),
            g = c(4),
            h = c(47),
            i = c(69),
            j = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.buildRenderRange = function(b, c, d) {
                    var e, f = a.prototype.buildRenderRange.call(this, b, c, d),
                        h = this.msToUtcMoment(f.startMs, d),
                        i = this.msToUtcMoment(f.endMs, d);
                    return this.opt("fixedWeekCount") && (e = Math.ceil(i.diff(h, "weeks", !0)), i.add(6 - e, "weeks")), new g.default(h, i)
                }, b
            }(i.default),
            k = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.setGridHeight = function(a, b) {
                    b && (a *= this.dayGrid.rowCnt / 6), f.distributeHeight(this.dayGrid.rowEls, a, !b)
                }, b.prototype.isDateInOtherMonth = function(a, b) {
                    return a.month() !== e.utc(b.currentUnzonedRange.startMs).month()
                }, b
            }(h.default);
        b.default = k, k.prototype.dateProfileGeneratorClass = j
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(4),
            h = c(30),
            i = c(28),
            j = c(90),
            k = c(91),
            l = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.segSelector = ".fc-list-item", d.scroller = new i.default({
                        overflowX: "hidden",
                        overflowY: "auto"
                    }), d
                }
                return d.__extends(b, a), b.prototype.renderSkeleton = function() {
                    this.el.addClass("fc-list-view " + this.calendar.theme.getClass("listView")), this.scroller.render(), this.scroller.el.appendTo(this.el), this.contentEl = this.scroller.scrollEl
                }, b.prototype.unrenderSkeleton = function() {
                    this.scroller.destroy()
                }, b.prototype.updateSize = function(a, b, c) {
                    this.scroller.setHeight(this.computeScrollerHeight(a))
                }, b.prototype.computeScrollerHeight = function(a) {
                    return a - f.subtractInnerElHeight(this.el, this.scroller.el)
                }, b.prototype.renderDates = function(a) {
                    for (var b = this.calendar, c = b.msToUtcMoment(a.renderUnzonedRange.startMs, !0), d = b.msToUtcMoment(a.renderUnzonedRange.endMs, !0), e = [], f = []; c < d;) e.push(c.clone()), f.push(new g.default(c, c.clone().add(1, "day"))), c.add(1, "day");
                    this.dayDates = e, this.dayRanges = f
                }, b.prototype.componentFootprintToSegs = function(a) {
                    var b, c, d, e = this.dayRanges,
                        f = [];
                    for (b = 0; b < e.length; b++)
                        if ((c = a.unzonedRange.intersect(e[b])) && (d = {
                                startMs: c.startMs,
                                endMs: c.endMs,
                                isStart: c.isStart,
                                isEnd: c.isEnd,
                                dayIndex: b
                            }, f.push(d), !d.isEnd && !a.isAllDay && b + 1 < e.length && a.unzonedRange.endMs < e[b + 1].startMs + this.nextDayThreshold)) {
                            d.endMs = a.unzonedRange.endMs, d.isEnd = !0;
                            break
                        }
                    return f
                }, b.prototype.renderEmptyMessage = function() {
                    this.contentEl.html('<div class="fc-list-empty-wrap2"><div class="fc-list-empty-wrap1"><div class="fc-list-empty">' + f.htmlEscape(this.opt("noEventsMessage")) + "</div></div></div>")
                }, b.prototype.renderSegList = function(a) {
                    var b, c, d, f = this.groupSegsByDay(a),
                        g = e('<table class="fc-list-table ' + this.calendar.theme.getClass("tableList") + '"><tbody/></table>'),
                        h = g.find("tbody");
                    for (b = 0; b < f.length; b++)
                        if (c = f[b])
                            for (h.append(this.dayHeaderHtml(this.dayDates[b])), this.eventRenderer.sortEventSegs(c), d = 0; d < c.length; d++) h.append(c[d].el);
                    this.contentEl.empty().append(g)
                }, b.prototype.groupSegsByDay = function(a) {
                    var b, c, d = [];
                    for (b = 0; b < a.length; b++) c = a[b], (d[c.dayIndex] || (d[c.dayIndex] = [])).push(c);
                    return d
                }, b.prototype.dayHeaderHtml = function(a) {
                    var b = this.opt("listDayFormat"),
                        c = this.opt("listDayAltFormat");
                    return '<tr class="fc-list-heading" data-date="' + a.format("YYYY-MM-DD") + '"><td class="' + this.calendar.theme.getClass("widgetHeader") + '" colspan="3">' + (b ? this.buildGotoAnchorHtml(a, {
                        class: "fc-list-heading-main"
                    }, f.htmlEscape(a.format(b))) : "") + (c ? this.buildGotoAnchorHtml(a, {
                        class: "fc-list-heading-alt"
                    }, f.htmlEscape(a.format(c))) : "") + "</td></tr>"
                }, b
            }(h.default);
        b.default = l, l.prototype.eventRendererClass = j.default, l.prototype.eventPointingClass = k.default
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(7),
            f = c(73),
            g = c(2),
            h = c(48);
        c(9), c(37), c(92), c(93), c(95), c(96), c(97), d.fullCalendar = d.extend(e.default, f), d.fn.fullCalendar = function(a) {
            var b = Array.prototype.slice.call(arguments, 1),
                c = this;
            return this.each(function(e, f) {
                var i, j = d(f),
                    k = j.data("fullCalendar");
                "string" == typeof a ? "getCalendar" === a ? e || (c = k) : "destroy" === a ? k && (k.destroy(), j.removeData("fullCalendar")) : k ? d.isFunction(k[a]) ? (i = k[a].apply(k, b), e || (c = i), "destroy" === a && j.removeData("fullCalendar")) : g.warn("'" + a + "' is an unknown FullCalendar method.") : g.warn("Attempting to call a FullCalendar method on an element with no calendar.") : k || (k = new h.default(j, a), j.data("fullCalendar", k), k.render())
            }), c
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(48);
        b.Calendar = d.default;
        var e = c(19);
        d.default.defaults = e.globalDefaults, d.default.englishDefaults = e.englishDefaults, d.default.rtlDefaults = e.rtlDefaults;
        var f = c(2);
        b.applyAll = f.applyAll, b.debounce = f.debounce, b.isInt = f.isInt, b.htmlEscape = f.htmlEscape, b.cssToStr = f.cssToStr, b.proxy = f.proxy, b.capitaliseFirstLetter = f.capitaliseFirstLetter, b.getOuterRect = f.getOuterRect, b.getClientRect = f.getClientRect, b.getContentRect = f.getContentRect, b.getScrollbarWidths = f.getScrollbarWidths, b.preventDefault = f.preventDefault, b.parseFieldSpecs = f.parseFieldSpecs, b.compareByFieldSpecs = f.compareByFieldSpecs, b.compareByFieldSpec = f.compareByFieldSpec, b.flexibleCompare = f.flexibleCompare, b.computeGreatestUnit = f.computeGreatestUnit, b.divideRangeByDuration = f.divideRangeByDuration, b.divideDurationByDuration = f.divideDurationByDuration, b.multiplyDuration = f.multiplyDuration, b.durationHasTime = f.durationHasTime, b.log = f.log, b.warn = f.warn, b.removeExact = f.removeExact, b.intersectRects = f.intersectRects;
        var g = c(37);
        b.formatDate = g.formatDate, b.formatRange = g.formatRange, b.queryMostGranularFormatUnit = g.queryMostGranularFormatUnit;
        var h = c(20);
        b.datepickerLocale = h.datepickerLocale, b.locale = h.locale;
        var i = c(9);
        b.moment = i.default;
        var j = c(8);
        b.EmitterMixin = j.default;
        var k = c(6);
        b.ListenerMixin = k.default;
        var l = c(32);
        b.Model = l.default;
        var m = c(49);
        b.Constraints = m.default;
        var n = c(4);
        b.UnzonedRange = n.default;
        var o = c(10);
        b.ComponentFootprint = o.default;
        var p = c(54);
        b.BusinessHourGenerator = p.default;
        var q = c(22);
        b.EventDef = q.default;
        var r = c(26);
        b.EventDefMutation = r.default;
        var s = c(25);
        b.EventSourceParser = s.default;
        var t = c(5);
        b.EventSource = t.default;
        var u = c(36);
        b.ThemeRegistry = u.default;
        var v = c(17);
        b.EventInstanceGroup = v.default;
        var w = c(34);
        b.ArrayEventSource = w.default;
        var x = c(57);
        b.FuncEventSource = x.default;
        var y = c(58);
        b.JsonFeedEventSource = y.default;
        var z = c(24);
        b.EventFootprint = z.default;
        var A = c(21);
        b.Class = A.default;
        var B = c(12);
        b.Mixin = B.default;
        var C = c(38);
        b.CoordCache = C.default;
        var D = c(39);
        b.DragListener = D.default;
        var E = c(16);
        b.Promise = E.default;
        var F = c(59);
        b.TaskQueue = F.default;
        var G = c(60);
        b.RenderQueue = G.default;
        var H = c(28);
        b.Scroller = H.default;
        var I = c(27);
        b.Theme = I.default;
        var J = c(61);
        b.DateComponent = J.default;
        var K = c(29);
        b.InteractiveDateComponent = K.default;
        var L = c(30);
        b.View = L.default;
        var M = c(40);
        b.DayTableMixin = M.default;
        var N = c(41);
        b.BusinessHourRenderer = N.default;
        var O = c(31);
        b.EventRenderer = O.default;
        var P = c(42);
        b.FillRenderer = P.default;
        var Q = c(43);
        b.HelperRenderer = Q.default;
        var R = c(63);
        b.ExternalDropping = R.default;
        var S = c(64);
        b.EventResizing = S.default;
        var T = c(44);
        b.EventPointing = T.default;
        var U = c(65);
        b.EventDragging = U.default;
        var V = c(66);
        b.DateSelecting = V.default;
        var W = c(45);
        b.StandardInteractionsMixin = W.default;
        var X = c(67);
        b.AgendaView = X.default;
        var Y = c(68);
        b.TimeGrid = Y.default;
        var Z = c(46);
        b.DayGrid = Z.default;
        var $ = c(47);
        b.BasicView = $.default;
        var _ = c(70);
        b.MonthView = _.default;
        var aa = c(71);
        b.ListView = aa.default
    }, function(a, b) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var c = function() {
            function a(a) {
                this.items = a || []
            }
            return a.prototype.proxyCall = function(a) {
                for (var b = [], c = 1; c < arguments.length; c++) b[c - 1] = arguments[c];
                var d = [];
                return this.items.forEach(function(c) {
                    d.push(c[a].apply(c, b))
                }), d
            }, a
        }();
        b.default = c
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = function() {
                function a(a, b) {
                    this.el = null, this.viewsWithButtons = [], this.calendar = a, this.toolbarOptions = b
                }
                return a.prototype.setToolbarOptions = function(a) {
                    this.toolbarOptions = a
                }, a.prototype.render = function() {
                    var a = this.toolbarOptions.layout,
                        b = this.el;
                    a ? (b ? b.empty() : b = this.el = d("<div class='fc-toolbar " + this.toolbarOptions.extraClasses + "'/>"), b.append(this.renderSection("left")).append(this.renderSection("right")).append(this.renderSection("center")).append('<div class="fc-clear"/>')) : this.removeElement()
                }, a.prototype.removeElement = function() {
                    this.el && (this.el.remove(), this.el = null)
                }, a.prototype.renderSection = function(a) {
                    var b = this,
                        c = this.calendar,
                        f = c.theme,
                        g = c.optionsManager,
                        h = c.viewSpecManager,
                        i = d('<div class="fc-' + a + '"/>'),
                        j = this.toolbarOptions.layout[a],
                        k = g.get("customButtons") || {},
                        l = g.overrides.buttonText || {},
                        m = g.get("buttonText") || {};
                    return j && d.each(j.split(" "), function(a, g) {
                        var j, n = d(),
                            o = !0;
                        d.each(g.split(","), function(a, g) {
                            var i, j, p, q, r, s, t, u;
                            "title" == g ? (n = n.add(d("<h2>&nbsp;</h2>")), o = !1) : ((i = k[g]) ? (p = function(a) {
                                i.click && i.click.call(u[0], a)
                            }, (q = f.getCustomButtonIconClass(i)) || (q = f.getIconClass(g)) || (r = i.text)) : (j = h.getViewSpec(g)) ? (b.viewsWithButtons.push(g), p = function() {
                                c.changeView(g)
                            }, (r = j.buttonTextOverride) || (q = f.getIconClass(g)) || (r = j.buttonTextDefault)) : c[g] && (p = function() {
                                c[g]()
                            }, (r = l[g]) || (q = f.getIconClass(g)) || (r = m[g])), p && (t = ["fc-" + g + "-button", f.getClass("button"), f.getClass("stateDefault")], r ? s = e.htmlEscape(r) : q && (s = "<span class='" + q + "'></span>"), u = d('<button type="button" class="' + t.join(" ") + '">' + s + "</button>").click(function(a) {
                                u.hasClass(f.getClass("stateDisabled")) || (p(a), (u.hasClass(f.getClass("stateActive")) || u.hasClass(f.getClass("stateDisabled"))) && u.removeClass(f.getClass("stateHover")))
                            }).mousedown(function() {
                                u.not("." + f.getClass("stateActive")).not("." + f.getClass("stateDisabled")).addClass(f.getClass("stateDown"))
                            }).mouseup(function() {
                                u.removeClass(f.getClass("stateDown"))
                            }).hover(function() {
                                u.not("." + f.getClass("stateActive")).not("." + f.getClass("stateDisabled")).addClass(f.getClass("stateHover"))
                            }, function() {
                                u.removeClass(f.getClass("stateHover")).removeClass(f.getClass("stateDown"))
                            }), n = n.add(u)))
                        }), o && n.first().addClass(f.getClass("cornerLeft")).end().last().addClass(f.getClass("cornerRight")).end(), n.length > 1 ? (j = d("<div/>"), o && j.addClass(f.getClass("buttonGroup")), j.append(n), i.append(j)) : i.append(n)
                    }), i
                }, a.prototype.updateTitle = function(a) {
                    this.el && this.el.find("h2").text(a)
                }, a.prototype.activateButton = function(a) {
                    this.el && this.el.find(".fc-" + a + "-button").addClass(this.calendar.theme.getClass("stateActive"))
                }, a.prototype.deactivateButton = function(a) {
                    this.el && this.el.find(".fc-" + a + "-button").removeClass(this.calendar.theme.getClass("stateActive"))
                }, a.prototype.disableButton = function(a) {
                    this.el && this.el.find(".fc-" + a + "-button").prop("disabled", !0).addClass(this.calendar.theme.getClass("stateDisabled"))
                }, a.prototype.enableButton = function(a) {
                    this.el && this.el.find(".fc-" + a + "-button").prop("disabled", !1).removeClass(this.calendar.theme.getClass("stateDisabled"))
                }, a.prototype.getViewsWithButtons = function() {
                    return this.viewsWithButtons
                }, a
            }();
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(2),
            g = c(19),
            h = c(20),
            i = c(32),
            j = function(a) {
                function b(b, c) {
                    var d = a.call(this) || this;
                    return d._calendar = b, d.overrides = e.extend({}, c), d.dynamicOverrides = {}, d.compute(), d
                }
                return d.__extends(b, a), b.prototype.add = function(a) {
                    var b, c = 0;
                    this.recordOverrides(a);
                    for (b in a) c++;
                    if (1 === c) {
                        if ("height" === b || "contentHeight" === b || "aspectRatio" === b) return void this._calendar.updateViewSize(!0);
                        if ("defaultDate" === b) return;
                        if ("businessHours" === b) return;
                        if ("timezone" === b) return void this._calendar.view.flash("initialEvents")
                    }
                    this._calendar.renderHeader(), this._calendar.renderFooter(), this._calendar.viewsByType = {}, this._calendar.reinitView()
                }, b.prototype.compute = function() {
                    var a, b, c, d, e;
                    a = f.firstDefined(this.dynamicOverrides.locale, this.overrides.locale), b = h.localeOptionHash[a], b || (a = g.globalDefaults.locale, b = h.localeOptionHash[a] || {}), c = f.firstDefined(this.dynamicOverrides.isRTL, this.overrides.isRTL, b.isRTL, g.globalDefaults.isRTL), d = c ? g.rtlDefaults : {}, this.dirDefaults = d, this.localeDefaults = b, e = g.mergeOptions([g.globalDefaults, d, b, this.overrides, this.dynamicOverrides]), h.populateInstanceComputableOptions(e), this.reset(e)
                }, b.prototype.recordOverrides = function(a) {
                    var b;
                    for (b in a) this.dynamicOverrides[b] = a[b];
                    this._calendar.viewSpecManager.clearCache(), this.compute()
                }, b
            }(i.default);
        b.default = j
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(3),
            e = c(1),
            f = c(7),
            g = c(2),
            h = c(19),
            i = c(20),
            j = function() {
                function a(a, b) {
                    this.optionsManager = a, this._calendar = b, this.clearCache()
                }
                return a.prototype.clearCache = function() {
                    this.viewSpecCache = {}
                }, a.prototype.getViewSpec = function(a) {
                    var b = this.viewSpecCache;
                    return b[a] || (b[a] = this.buildViewSpec(a))
                }, a.prototype.getUnitViewSpec = function(a) {
                    var b, c, d;
                    if (-1 != e.inArray(a, g.unitsDesc))
                        for (b = this._calendar.header.getViewsWithButtons(), e.each(f.default.views, function(a) {
                                b.push(a)
                            }), c = 0; c < b.length; c++)
                            if ((d = this.getViewSpec(b[c])) && d.singleUnit == a) return d
                }, a.prototype.buildViewSpec = function(a) {
                    for (var b, c, e, i, j, k = this.optionsManager.overrides.views || {}, l = [], m = [], n = [], o = a; o;) b = f.default.views[o], c = k[o], o = null, "function" == typeof b && (b = {
                        class: b
                    }), b && (l.unshift(b), m.unshift(b.defaults || {}), e = e || b.duration, o = o || b.type), c && (n.unshift(c), e = e || c.duration, o = o || c.type);
                    return b = g.mergeProps(l), b.type = a, !!b.class && (e = e || this.optionsManager.dynamicOverrides.duration || this.optionsManager.overrides.duration, e && (i = d.duration(e), i.valueOf() && (j = g.computeDurationGreatestUnit(i, e), b.duration = i, b.durationUnit = j, 1 === i.as(j) && (b.singleUnit = j, n.unshift(k[j] || {})))), b.defaults = h.mergeOptions(m), b.overrides = h.mergeOptions(n), this.buildViewSpecOptions(b), this.buildViewSpecButtonText(b, a), b)
                }, a.prototype.buildViewSpecOptions = function(a) {
                    var b = this.optionsManager;
                    a.options = h.mergeOptions([h.globalDefaults, a.defaults, b.dirDefaults, b.localeDefaults, b.overrides, a.overrides, b.dynamicOverrides]), i.populateInstanceComputableOptions(a.options)
                }, a.prototype.buildViewSpecButtonText = function(a, b) {
                    function c(c) {
                        var d = c.buttonText || {};
                        return d[b] || (a.buttonTextKey ? d[a.buttonTextKey] : null) || (a.singleUnit ? d[a.singleUnit] : null)
                    }
                    var d = this.optionsManager;
                    a.buttonTextOverride = c(d.dynamicOverrides) || c(d.overrides) || a.overrides.buttonText, a.buttonTextDefault = c(d.localeDefaults) || c(d.dirDefaults) || a.defaults.buttonText || c(h.globalDefaults) || (a.duration ? this._calendar.humanizeDuration(a.duration) : null) || b
                }, a
            }();
        b.default = j
    }, function(a, b, c) {
        function d(a, b) {
            return a.getPrimitive() == b.getPrimitive()
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var e = c(1),
            f = c(2),
            g = c(79),
            h = c(34),
            i = c(5),
            j = c(25),
            k = c(11),
            l = c(17),
            m = c(8),
            n = c(6),
            o = function() {
                function a(a) {
                    this.calendar = a, this.stickySource = new h.default(a), this.otherSources = []
                }
                return a.prototype.requestEvents = function(a, b, c, d) {
                    return !d && this.currentPeriod && this.currentPeriod.isWithinRange(a, b) && c === this.currentPeriod.timezone || this.setPeriod(new g.default(a, b, c)), this.currentPeriod.whenReleased()
                }, a.prototype.addSource = function(a) {
                    this.otherSources.push(a), this.currentPeriod && this.currentPeriod.requestSource(a)
                }, a.prototype.removeSource = function(a) {
                    f.removeExact(this.otherSources, a), this.currentPeriod && this.currentPeriod.purgeSource(a)
                }, a.prototype.removeAllSources = function() {
                    this.otherSources = [], this.currentPeriod && this.currentPeriod.purgeAllSources()
                }, a.prototype.refetchSource = function(a) {
                    var b = this.currentPeriod;
                    b && (b.freeze(), b.purgeSource(a), b.requestSource(a), b.thaw())
                }, a.prototype.refetchAllSources = function() {
                    var a = this.currentPeriod;
                    a && (a.freeze(), a.purgeAllSources(), a.requestSources(this.getSources()), a.thaw())
                }, a.prototype.getSources = function() {
                    return [this.stickySource].concat(this.otherSources)
                }, a.prototype.multiQuerySources = function(a) {
                    a ? e.isArray(a) || (a = [a]) : a = [];
                    var b, c = [];
                    for (b = 0; b < a.length; b++) c.push.apply(c, this.querySources(a[b]));
                    return c
                }, a.prototype.querySources = function(a) {
                    var b, c, f = this.otherSources;
                    for (b = 0; b < f.length; b++)
                        if ((c = f[b]) === a) return [c];
                    return (c = this.getSourceById(i.default.normalizeId(a))) ? [c] : (a = j.default.parse(a, this.calendar), a ? e.grep(f, function(b) {
                        return d(a, b)
                    }) : void 0)
                }, a.prototype.getSourceById = function(a) {
                    return e.grep(this.otherSources, function(b) {
                        return b.id && b.id === a
                    })[0]
                }, a.prototype.setPeriod = function(a) {
                    this.currentPeriod && (this.unbindPeriod(this.currentPeriod), this.currentPeriod = null), this.currentPeriod = a, this.bindPeriod(a), a.requestSources(this.getSources())
                }, a.prototype.bindPeriod = function(a) {
                    this.listenTo(a, "release", function(a) {
                        this.trigger("release", a)
                    })
                }, a.prototype.unbindPeriod = function(a) {
                    this.stopListeningTo(a)
                }, a.prototype.getEventDefByUid = function(a) {
                    if (this.currentPeriod) return this.currentPeriod.getEventDefByUid(a)
                }, a.prototype.addEventDef = function(a, b) {
                    b && this.stickySource.addEventDef(a), this.currentPeriod && this.currentPeriod.addEventDef(a)
                }, a.prototype.removeEventDefsById = function(a) {
                    this.getSources().forEach(function(b) {
                        b.removeEventDefsById(a)
                    }), this.currentPeriod && this.currentPeriod.removeEventDefsById(a)
                }, a.prototype.removeAllEventDefs = function() {
                    this.getSources().forEach(function(a) {
                        a.removeAllEventDefs()
                    }), this.currentPeriod && this.currentPeriod.removeAllEventDefs()
                }, a.prototype.mutateEventsWithId = function(a, b) {
                    var c, d = this.currentPeriod,
                        e = [];
                    return d ? (d.freeze(), c = d.getEventDefsById(a), c.forEach(function(a) {
                        d.removeEventDef(a), e.push(b.mutateSingle(a)), d.addEventDef(a)
                    }), d.thaw(), function() {
                        d.freeze();
                        for (var a = 0; a < c.length; a++) d.removeEventDef(c[a]), e[a](), d.addEventDef(c[a]);
                        d.thaw()
                    }) : function() {}
                }, a.prototype.buildMutatedEventInstanceGroup = function(a, b) {
                    var c, d, e = this.getEventDefsById(a),
                        f = [];
                    for (c = 0; c < e.length; c++)(d = e[c].clone()) instanceof k.default && (b.mutateSingle(d), f.push.apply(f, d.buildInstances()));
                    return new l.default(f)
                }, a.prototype.freeze = function() {
                    this.currentPeriod && this.currentPeriod.freeze()
                }, a.prototype.thaw = function() {
                    this.currentPeriod && this.currentPeriod.thaw()
                }, a.prototype.getEventDefsById = function(a) {
                    return this.currentPeriod.getEventDefsById(a)
                }, a.prototype.getEventInstances = function() {
                    return this.currentPeriod.getEventInstances()
                }, a.prototype.getEventInstancesWithId = function(a) {
                    return this.currentPeriod.getEventInstancesWithId(a)
                }, a.prototype.getEventInstancesWithoutId = function(a) {
                    return this.currentPeriod.getEventInstancesWithoutId(a)
                }, a
            }();
        b.default = o, m.default.mixInto(o), n.default.mixInto(o)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = c(16),
            g = c(8),
            h = c(4),
            i = c(17),
            j = function() {
                function a(a, b, c) {
                    this.pendingCnt = 0, this.freezeDepth = 0, this.stuntedReleaseCnt = 0, this.releaseCnt = 0, this.start = a, this.end = b, this.timezone = c, this.unzonedRange = new h.default(a.clone().stripZone(), b.clone().stripZone()), this.requestsByUid = {}, this.eventDefsByUid = {}, this.eventDefsById = {}, this.eventInstanceGroupsById = {}
                }
                return a.prototype.isWithinRange = function(a, b) {
                    return !a.isBefore(this.start) && !b.isAfter(this.end)
                }, a.prototype.requestSources = function(a) {
                    this.freeze();
                    for (var b = 0; b < a.length; b++) this.requestSource(a[b]);
                    this.thaw()
                }, a.prototype.requestSource = function(a) {
                    var b = this,
                        c = {
                            source: a,
                            status: "pending",
                            eventDefs: null
                        };
                    this.requestsByUid[a.uid] = c, this.pendingCnt += 1, a.fetch(this.start, this.end, this.timezone).then(function(a) {
                        "cancelled" !== c.status && (c.status = "completed", c.eventDefs = a, b.addEventDefs(a), b.pendingCnt--, b.tryRelease())
                    }, function() {
                        "cancelled" !== c.status && (c.status = "failed", b.pendingCnt--, b.tryRelease())
                    })
                }, a.prototype.purgeSource = function(a) {
                    var b = this.requestsByUid[a.uid];
                    b && (delete this.requestsByUid[a.uid], "pending" === b.status ? (b.status = "cancelled", this.pendingCnt--, this.tryRelease()) : "completed" === b.status && b.eventDefs.forEach(this.removeEventDef.bind(this)))
                }, a.prototype.purgeAllSources = function() {
                    var a, b, c = this.requestsByUid,
                        d = 0;
                    for (a in c) b = c[a], "pending" === b.status ? b.status = "cancelled" : "completed" === b.status && d++;
                    this.requestsByUid = {}, this.pendingCnt = 0, d && this.removeAllEventDefs()
                }, a.prototype.getEventDefByUid = function(a) {
                    return this.eventDefsByUid[a]
                }, a.prototype.getEventDefsById = function(a) {
                    var b = this.eventDefsById[a];
                    return b ? b.slice() : []
                }, a.prototype.addEventDefs = function(a) {
                    for (var b = 0; b < a.length; b++) this.addEventDef(a[b])
                }, a.prototype.addEventDef = function(a) {
                    var b, c = this.eventDefsById,
                        d = a.id,
                        e = c[d] || (c[d] = []),
                        f = a.buildInstances(this.unzonedRange);
                    for (e.push(a), this.eventDefsByUid[a.uid] = a, b = 0; b < f.length; b++) this.addEventInstance(f[b], d)
                }, a.prototype.removeEventDefsById = function(a) {
                    var b = this;
                    this.getEventDefsById(a).forEach(function(a) {
                        b.removeEventDef(a)
                    })
                }, a.prototype.removeAllEventDefs = function() {
                    var a = d.isEmptyObject(this.eventDefsByUid);
                    this.eventDefsByUid = {}, this.eventDefsById = {}, this.eventInstanceGroupsById = {}, a || this.tryRelease()
                }, a.prototype.removeEventDef = function(a) {
                    var b = this.eventDefsById,
                        c = b[a.id];
                    delete this.eventDefsByUid[a.uid], c && (e.removeExact(c, a), c.length || delete b[a.id], this.removeEventInstancesForDef(a))
                }, a.prototype.getEventInstances = function() {
                    var a, b = this.eventInstanceGroupsById,
                        c = [];
                    for (a in b) c.push.apply(c, b[a].eventInstances);
                    return c
                }, a.prototype.getEventInstancesWithId = function(a) {
                    var b = this.eventInstanceGroupsById[a];
                    return b ? b.eventInstances.slice() : []
                }, a.prototype.getEventInstancesWithoutId = function(a) {
                    var b, c = this.eventInstanceGroupsById,
                        d = [];
                    for (b in c) b !== a && d.push.apply(d, c[b].eventInstances);
                    return d
                }, a.prototype.addEventInstance = function(a, b) {
                    var c = this.eventInstanceGroupsById;
                    (c[b] || (c[b] = new i.default)).eventInstances.push(a), this.tryRelease()
                }, a.prototype.removeEventInstancesForDef = function(a) {
                    var b, c = this.eventInstanceGroupsById,
                        d = c[a.id];
                    d && (b = e.removeMatching(d.eventInstances, function(b) {
                        return b.def === a
                    }), d.eventInstances.length || delete c[a.id], b && this.tryRelease())
                }, a.prototype.tryRelease = function() {
                    this.pendingCnt || (this.freezeDepth ? this.stuntedReleaseCnt++ : this.release())
                }, a.prototype.release = function() {
                    this.releaseCnt++, this.trigger("release", this.eventInstanceGroupsById)
                }, a.prototype.whenReleased = function() {
                    var a = this;
                    return this.releaseCnt ? f.default.resolve(this.eventInstanceGroupsById) : f.default.construct(function(b) {
                        a.one("release", b)
                    })
                }, a.prototype.freeze = function() {
                    this.freezeDepth++ || (this.stuntedReleaseCnt = 0)
                }, a.prototype.thaw = function() {
                    --this.freezeDepth || !this.stuntedReleaseCnt || this.pendingCnt || this.release()
                }, a
            }();
        b.default = j, g.default.mixInto(j)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(32),
            f = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.setElement = function(a) {
                    this.el = a, this.bindGlobalHandlers(), this.renderSkeleton(), this.set("isInDom", !0)
                }, b.prototype.removeElement = function() {
                    this.unset("isInDom"), this.unrenderSkeleton(), this.unbindGlobalHandlers(), this.el.remove()
                }, b.prototype.bindGlobalHandlers = function() {}, b.prototype.unbindGlobalHandlers = function() {}, b.prototype.renderSkeleton = function() {}, b.prototype.unrenderSkeleton = function() {}, b
            }(e.default);
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = c(6),
            g = function() {
                function a(a, b) {
                    this.isFollowing = !1, this.isHidden = !1, this.isAnimating = !1, this.options = b = b || {}, this.sourceEl = a, this.parentEl = b.parentEl ? d(b.parentEl) : a.parent()
                }
                return a.prototype.start = function(a) {
                    this.isFollowing || (this.isFollowing = !0, this.y0 = e.getEvY(a), this.x0 = e.getEvX(a), this.topDelta = 0, this.leftDelta = 0, this.isHidden || this.updatePosition(), e.getEvIsTouch(a) ? this.listenTo(d(document), "touchmove", this.handleMove) : this.listenTo(d(document), "mousemove", this.handleMove))
                }, a.prototype.stop = function(a, b) {
                    var c = this,
                        e = this.options.revertDuration,
                        f = function() {
                            c.isAnimating = !1, c.removeElement(), c.top0 = c.left0 = null, b && b()
                        };
                    this.isFollowing && !this.isAnimating && (this.isFollowing = !1, this.stopListeningTo(d(document)), a && e && !this.isHidden ? (this.isAnimating = !0, this.el.animate({
                        top: this.top0,
                        left: this.left0
                    }, {
                        duration: e,
                        complete: f
                    })) : f())
                }, a.prototype.getEl = function() {
                    var a = this.el;
                    return a || (a = this.el = this.sourceEl.clone().addClass(this.options.additionalClass || "").css({
                        position: "absolute",
                        visibility: "",
                        display: this.isHidden ? "none" : "",
                        margin: 0,
                        right: "auto",
                        bottom: "auto",
                        width: this.sourceEl.width(),
                        height: this.sourceEl.height(),
                        opacity: this.options.opacity || "",
                        zIndex: this.options.zIndex
                    }), a.addClass("fc-unselectable"), a.appendTo(this.parentEl)), a
                }, a.prototype.removeElement = function() {
                    this.el && (this.el.remove(), this.el = null)
                }, a.prototype.updatePosition = function() {
                    var a, b;
                    this.getEl(), null == this.top0 && (a = this.sourceEl.offset(), b = this.el.offsetParent().offset(), this.top0 = a.top - b.top, this.left0 = a.left - b.left), this.el.css({
                        top: this.top0 + this.topDelta,
                        left: this.left0 + this.leftDelta
                    })
                }, a.prototype.handleMove = function(a) {
                    this.topDelta = e.getEvY(a) - this.y0, this.leftDelta = e.getEvX(a) - this.x0, this.isHidden || this.updatePosition()
                }, a.prototype.hide = function() {
                    this.isHidden || (this.isHidden = !0, this.el && this.el.hide())
                }, a.prototype.show = function() {
                    this.isHidden && (this.isHidden = !1, this.updatePosition(), this.getEl().show())
                }, a
            }();
        b.default = g, f.default.mixInto(g)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(18),
            f = c(13),
            g = function(a) {
                function b(b) {
                    var c = a.call(this, b) || this;
                    return c.dragListener = c.buildDragListener(), c
                }
                return d.__extends(b, a), b.prototype.end = function() {
                    this.dragListener.endInteraction()
                }, b.prototype.bindToEl = function(a) {
                    var b = this.component,
                        c = this.dragListener;
                    b.bindDateHandlerToEl(a, "mousedown", function(a) {
                        b.shouldIgnoreMouse() || c.startInteraction(a)
                    }), b.bindDateHandlerToEl(a, "touchstart", function(a) {
                        b.shouldIgnoreTouch() || c.startInteraction(a)
                    })
                }, b.prototype.buildDragListener = function() {
                    var a, b = this,
                        c = this.component,
                        d = new e.default(c, {
                            scroll: this.opt("dragScroll"),
                            interactionStart: function() {
                                a = d.origHit
                            },
                            hitOver: function(b, c, d) {
                                c || (a = null)
                            },
                            hitOut: function() {
                                a = null
                            },
                            interactionEnd: function(d, e) {
                                var f;
                                !e && a && (f = c.getSafeHitFootprint(a)) && b.view.triggerDayClick(f, c.getHitEl(a), d)
                            }
                        });
                    return d.shouldCancelTouchScroll = !1, d.scrollAlwaysKills = !0, d
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        function d(a) {
            var b, c, d, e = [];
            for (b = 0; b < a.length; b++) {
                for (c = a[b], d = 0; d < e.length && g(c, e[d]).length; d++);
                c.level = d, (e[d] || (e[d] = [])).push(c)
            }
            return e
        }

        function e(a) {
            var b, c, d, e, f;
            for (b = 0; b < a.length; b++)
                for (c = a[b], d = 0; d < c.length; d++)
                    for (e = c[d], e.forwardSegs = [], f = b + 1; f < a.length; f++) g(e, a[f], e.forwardSegs)
        }

        function f(a) {
            var b, c, d = a.forwardSegs,
                e = 0;
            if (void 0 === a.forwardPressure) {
                for (b = 0; b < d.length; b++) c = d[b], f(c), e = Math.max(e, 1 + c.forwardPressure);
                a.forwardPressure = e
            }
        }

        function g(a, b, c) {
            void 0 === c && (c = []);
            for (var d = 0; d < b.length; d++) h(a, b[d]) && c.push(b[d]);
            return c
        }

        function h(a, b) {
            return a.bottom > b.top && a.top < b.bottom
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var i = c(0),
            j = c(2),
            k = c(31),
            l = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.timeGrid = b, d
                }
                return i.__extends(b, a), b.prototype.renderFgSegs = function(a) {
                    this.renderFgSegsIntoContainers(a, this.timeGrid.fgContainerEls)
                }, b.prototype.renderFgSegsIntoContainers = function(a, b) {
                    var c, d;
                    for (c = this.timeGrid.groupSegsByCol(a), d = 0; d < this.timeGrid.colCnt; d++) this.updateFgSegCoords(c[d]);
                    this.timeGrid.attachSegsByCol(c, b)
                }, b.prototype.unrenderFgSegs = function() {
                    this.fgSegs && this.fgSegs.forEach(function(a) {
                        a.el.remove()
                    })
                }, b.prototype.computeEventTimeFormat = function() {
                    return this.opt("noMeridiemTimeFormat")
                }, b.prototype.computeDisplayEventEnd = function() {
                    return !0
                }, b.prototype.fgSegHtml = function(a, b) {
                    var c, d, e, f = this.view,
                        g = f.calendar,
                        h = a.footprint.componentFootprint,
                        i = h.isAllDay,
                        k = a.footprint.eventDef,
                        l = f.isEventDefDraggable(k),
                        m = !b && a.isStart && f.isEventDefResizableFromStart(k),
                        n = !b && a.isEnd && f.isEventDefResizableFromEnd(k),
                        o = this.getSegClasses(a, l, m || n),
                        p = j.cssToStr(this.getSkinCss(k));
                    if (o.unshift("fc-time-grid-event", "fc-v-event"), f.isMultiDayRange(h.unzonedRange)) {
                        if (a.isStart || a.isEnd) {
                            var q = g.msToMoment(a.startMs),
                                r = g.msToMoment(a.endMs);
                            c = this._getTimeText(q, r, i), d = this._getTimeText(q, r, i, "LT"), e = this._getTimeText(q, r, i, null, !1)
                        }
                    } else c = this.getTimeText(a.footprint), d = this.getTimeText(a.footprint, "LT"), e = this.getTimeText(a.footprint, null, !1);
                    return '<a class="' + o.join(" ") + '"' + (k.url ? ' href="' + j.htmlEscape(k.url) + '"' : "") + (p ? ' style="' + p + '"' : "") + '><div class="fc-content">' + (c ? '<div class="fc-time" data-start="' + j.htmlEscape(e) + '" data-full="' + j.htmlEscape(d) + '"><span>' + j.htmlEscape(c) + "</span></div>" : "") + (k.title ? '<div class="fc-title">' + j.htmlEscape(k.title) + "</div>" : "") + '</div><div class="fc-bg"/>' + (n ? '<div class="fc-resizer fc-end-resizer" />' : "") + "</a>"
                }, b.prototype.updateFgSegCoords = function(a) {
                    this.timeGrid.computeSegVerticals(a), this.computeFgSegHorizontals(a), this.timeGrid.assignSegVerticals(a), this.assignFgSegHorizontals(a)
                }, b.prototype.computeFgSegHorizontals = function(a) {
                    var b, c, g;
                    if (this.sortEventSegs(a), b = d(a), e(b), c = b[0]) {
                        for (g = 0; g < c.length; g++) f(c[g]);
                        for (g = 0; g < c.length; g++) this.computeFgSegForwardBack(c[g], 0, 0)
                    }
                }, b.prototype.computeFgSegForwardBack = function(a, b, c) {
                    var d, e = a.forwardSegs;
                    if (void 0 === a.forwardCoord)
                        for (e.length ? (this.sortForwardSegs(e), this.computeFgSegForwardBack(e[0], b + 1, c), a.forwardCoord = e[0].backwardCoord) : a.forwardCoord = 1, a.backwardCoord = a.forwardCoord - (a.forwardCoord - c) / (b + 1), d = 0; d < e.length; d++) this.computeFgSegForwardBack(e[d], 0, a.forwardCoord)
                }, b.prototype.sortForwardSegs = function(a) {
                    a.sort(j.proxy(this, "compareForwardSegs"))
                }, b.prototype.compareForwardSegs = function(a, b) {
                    return b.forwardPressure - a.forwardPressure || (a.backwardCoord || 0) - (b.backwardCoord || 0) || this.compareEventSegs(a, b)
                }, b.prototype.assignFgSegHorizontals = function(a) {
                    var b, c;
                    for (b = 0; b < a.length; b++) c = a[b], c.el.css(this.generateFgSegHorizontalCss(c)), c.bottom - c.top < 30 && c.el.addClass("fc-short")
                }, b.prototype.generateFgSegHorizontalCss = function(a) {
                    var b, c, d = this.opt("slotEventOverlap"),
                        e = a.backwardCoord,
                        f = a.forwardCoord,
                        g = this.timeGrid.generateSegVerticalCss(a),
                        h = this.timeGrid.isRTL;
                    return d && (f = Math.min(1, e + 2 * (f - e))), h ? (b = 1 - f, c = e) : (b = e, c = 1 - f), g.zIndex = a.level + 1, g.left = 100 * b + "%", g.right = 100 * c + "%", d && a.forwardPressure && (g[h ? "marginLeft" : "marginRight"] = 20), g
                }, b
            }(k.default);
        b.default = l
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(43),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.renderSegs = function(a, b) {
                    var c, d, f, g = [];
                    for (this.eventRenderer.renderFgSegsIntoContainers(a, this.component.helperContainerEls), c = 0; c < a.length; c++) d = a[c], b && b.col === d.col && (f = b.el, d.el.css({
                        left: f.css("left"),
                        right: f.css("right"),
                        "margin-left": f.css("margin-left"),
                        "margin-right": f.css("margin-right")
                    })), g.push(d.el[0]);
                    return e(g)
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(42),
            f = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.attachSegEls = function(a, b) {
                    var c, d = this.component;
                    return "bgEvent" === a ? c = d.bgContainerEls : "businessHours" === a ? c = d.businessContainerEls : "highlight" === a && (c = d.highlightContainerEls), d.updateSegVerticals(b), d.attachSegsByCol(d.groupSegsByCol(b), c), b.map(function(a) {
                        return a.el[0]
                    })
                }, b
            }(e.default);
        b.default = f
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(1),
            e = c(2),
            f = c(6),
            g = function() {
                function a(a) {
                    this.isHidden = !0, this.margin = 10, this.options = a || {}
                }
                return a.prototype.show = function() {
                    this.isHidden && (this.el || this.render(), this.el.show(), this.position(), this.isHidden = !1, this.trigger("show"))
                }, a.prototype.hide = function() {
                    this.isHidden || (this.el.hide(), this.isHidden = !0, this.trigger("hide"))
                }, a.prototype.render = function() {
                    var a = this,
                        b = this.options;
                    this.el = d('<div class="fc-popover"/>').addClass(b.className || "").css({
                        top: 0,
                        left: 0
                    }).append(b.content).appendTo(b.parentEl), this.el.on("click", ".fc-close", function() {
                        a.hide()
                    }), b.autoHide && this.listenTo(d(document), "mousedown", this.documentMousedown)
                }, a.prototype.documentMousedown = function(a) {
                    this.el && !d(a.target).closest(this.el).length && this.hide()
                }, a.prototype.removeElement = function() {
                    this.hide(), this.el && (this.el.remove(), this.el = null), this.stopListeningTo(d(document), "mousedown")
                }, a.prototype.position = function() {
                    var a, b, c, f, g, h = this.options,
                        i = this.el.offsetParent().offset(),
                        j = this.el.outerWidth(),
                        k = this.el.outerHeight(),
                        l = d(window),
                        m = e.getScrollParent(this.el);
                    f = h.top || 0, g = void 0 !== h.left ? h.left : void 0 !== h.right ? h.right - j : 0, m.is(window) || m.is(document) ? (m = l, a = 0, b = 0) : (c = m.offset(), a = c.top, b = c.left), a += l.scrollTop(), b += l.scrollLeft(), !1 !== h.viewportConstrain && (f = Math.min(f, a + m.outerHeight() - k - this.margin), f = Math.max(f, a + this.margin), g = Math.min(g, b + m.outerWidth() - j - this.margin), g = Math.max(g, b + this.margin)), this.el.css({
                        top: f - i.top,
                        left: g - i.left
                    })
                }, a.prototype.trigger = function(a) {
                    this.options[a] && this.options[a].apply(this, Array.prototype.slice.call(arguments, 1))
                }, a
            }();
        b.default = g, f.default.mixInto(g)
    }, function(a, b, c) {
        function d(a, b) {
            var c, d;
            for (c = 0; c < b.length; c++)
                if (d = b[c], d.leftCol <= a.rightCol && d.rightCol >= a.leftCol) return !0;
            return !1
        }

        function e(a, b) {
            return a.leftCol - b.leftCol
        }
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var f = c(0),
            g = c(1),
            h = c(2),
            i = c(31),
            j = function(a) {
                function b(b, c) {
                    var d = a.call(this, b, c) || this;
                    return d.dayGrid = b, d
                }
                return f.__extends(b, a), b.prototype.renderBgRanges = function(b) {
                    b = g.grep(b, function(a) {
                        return a.eventDef.isAllDay()
                    }), a.prototype.renderBgRanges.call(this, b)
                }, b.prototype.renderFgSegs = function(a) {
                    var b = this.rowStructs = this.renderSegRows(a);
                    this.dayGrid.rowEls.each(function(a, c) {
                        g(c).find(".fc-content-skeleton > table").append(b[a].tbodyEl)
                    })
                }, b.prototype.unrenderFgSegs = function() {
                    for (var a, b = this.rowStructs || []; a = b.pop();) a.tbodyEl.remove();
                    this.rowStructs = null
                }, b.prototype.renderSegRows = function(a) {
                    var b, c, d = [];
                    for (b = this.groupSegRows(a), c = 0; c < b.length; c++) d.push(this.renderSegRow(c, b[c]));
                    return d
                }, b.prototype.renderSegRow = function(a, b) {
                    function c(a) {
                        for (; f < a;) k = (r[d - 1] || [])[f], k ? k.attr("rowspan", parseInt(k.attr("rowspan") || 1, 10) + 1) : (k = g("<td/>"), h.append(k)), q[d][f] = k, r[d][f] = k, f++
                    }
                    var d, e, f, h, i, j, k, l = this.dayGrid.colCnt,
                        m = this.buildSegLevels(b),
                        n = Math.max(1, m.length),
                        o = g("<tbody/>"),
                        p = [],
                        q = [],
                        r = [];
                    for (d = 0; d < n; d++) {
                        if (e = m[d], f = 0, h = g("<tr/>"), p.push([]), q.push([]), r.push([]), e)
                            for (i = 0; i < e.length; i++) {
                                for (j = e[i], c(j.leftCol), k = g('<td class="fc-event-container"/>').append(j.el), j.leftCol != j.rightCol ? k.attr("colspan", j.rightCol - j.leftCol + 1) : r[d][f] = k; f <= j.rightCol;) q[d][f] = k, p[d][f] = j, f++;
                                h.append(k)
                            }
                        c(l), this.dayGrid.bookendCells(h), o.append(h)
                    }
                    return {
                        row: a,
                        tbodyEl: o,
                        cellMatrix: q,
                        segMatrix: p,
                        segLevels: m,
                        segs: b
                    }
                }, b.prototype.buildSegLevels = function(a) {
                    var b, c, f, g = [];
                    for (this.sortEventSegs(a), b = 0; b < a.length; b++) {
                        for (c = a[b], f = 0; f < g.length && d(c, g[f]); f++);
                        c.level = f, (g[f] || (g[f] = [])).push(c)
                    }
                    for (f = 0; f < g.length; f++) g[f].sort(e);
                    return g
                }, b.prototype.groupSegRows = function(a) {
                    var b, c = [];
                    for (b = 0; b < this.dayGrid.rowCnt; b++) c.push([]);
                    for (b = 0; b < a.length; b++) c[a[b].row].push(a[b]);
                    return c
                }, b.prototype.computeEventTimeFormat = function() {
                    return this.opt("extraSmallTimeFormat")
                }, b.prototype.computeDisplayEventEnd = function() {
                    return 1 === this.dayGrid.colCnt
                }, b.prototype.fgSegHtml = function(a, b) {
                    var c, d, e = this.view,
                        f = a.footprint.eventDef,
                        g = a.footprint.componentFootprint.isAllDay,
                        i = e.isEventDefDraggable(f),
                        j = !b && g && a.isStart && e.isEventDefResizableFromStart(f),
                        k = !b && g && a.isEnd && e.isEventDefResizableFromEnd(f),
                        l = this.getSegClasses(a, i, j || k),
                        m = h.cssToStr(this.getSkinCss(f)),
                        n = "";
                    return l.unshift("fc-day-grid-event", "fc-h-event"), a.isStart && (c = this.getTimeText(a.footprint)) && (n = '<span class="fc-time">' + h.htmlEscape(c) + "</span>"), d = '<span class="fc-title">' + (h.htmlEscape(f.title || "") || "&nbsp;") + "</span>", '<a class="' + l.join(" ") + '"' + (f.url ? ' href="' + h.htmlEscape(f.url) + '"' : "") + (m ? ' style="' + m + '"' : "") + '><div class="fc-content">' + (this.dayGrid.isRTL ? d + " " + n : n + " " + d) + "</div>" + (j ? '<div class="fc-resizer fc-start-resizer" />' : "") + (k ? '<div class="fc-resizer fc-end-resizer" />' : "") + "</a>"
                }, b
            }(i.default);
        b.default = j
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(43),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.renderSegs = function(a, b) {
                    var c, d = [];
                    return c = this.eventRenderer.renderSegRows(a), this.component.rowEls.each(function(a, f) {
                        var g, h, i = e(f),
                            j = e('<div class="fc-helper-skeleton"><table/></div>');
                        b && b.row === a ? h = b.el.position().top : (g = i.find(".fc-content-skeleton tbody"), g.length || (g = i.find(".fc-content-skeleton table")), h = g.position().top), j.css("top", h).find("table").append(c[a].tbodyEl), i.append(j), d.push(j[0])
                    }), e(d)
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(42),
            g = function(a) {
                function b() {
                    var b = null !== a && a.apply(this, arguments) || this;
                    return b.fillSegTag = "td", b
                }
                return d.__extends(b, a), b.prototype.attachSegEls = function(a, b) {
                    var c, d, e, f = [];
                    for (c = 0; c < b.length; c++) d = b[c], e = this.renderFillRow(a, d), this.component.rowEls.eq(d.row).append(e), f.push(e[0]);
                    return f
                }, b.prototype.renderFillRow = function(a, b) {
                    var c, d, f, g = this.component.colCnt,
                        h = b.leftCol,
                        i = b.rightCol + 1;
                    return c = "businessHours" === a ? "bgevent" : a.toLowerCase(), d = e('<div class="fc-' + c + '-skeleton"><table><tr/></table></div>'), f = d.find("tr"), h > 0 && f.append('<td colspan="' + h + '"/>'), f.append(b.el.attr("colspan", i - h)), i < g && f.append('<td colspan="' + (g - i) + '"/>'), this.component.bookendCells(f), d
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(2),
            f = c(31),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.renderFgSegs = function(a) {
                    a.length ? this.component.renderSegList(a) : this.component.renderEmptyMessage()
                }, b.prototype.fgSegHtml = function(a) {
                    var b, c = this.view,
                        d = c.calendar,
                        f = d.theme,
                        g = a.footprint,
                        h = g.eventDef,
                        i = g.componentFootprint,
                        j = h.url,
                        k = ["fc-list-item"].concat(this.getClasses(h)),
                        l = this.getBgColor(h);
                    return b = i.isAllDay ? c.getAllDayHtml() : c.isMultiDayRange(i.unzonedRange) ? a.isStart || a.isEnd ? e.htmlEscape(this._getTimeText(d.msToMoment(a.startMs), d.msToMoment(a.endMs), i.isAllDay)) : c.getAllDayHtml() : e.htmlEscape(this.getTimeText(g)), j && k.push("fc-has-url"), '<tr class="' + k.join(" ") + '">' + (this.displayEventTime ? '<td class="fc-list-item-time ' + f.getClass("widgetContent") + '">' + (b || "") + "</td>" : "") + '<td class="fc-list-item-marker ' + f.getClass("widgetContent") + '"><span class="fc-event-dot"' + (l ? ' style="background-color:' + l + '"' : "") + '></span></td><td class="fc-list-item-title ' + f.getClass("widgetContent") + '"><a' + (j ? ' href="' + e.htmlEscape(j) + '"' : "") + ">" + e.htmlEscape(h.title || "") + "</a></td></tr>"
                }, b.prototype.computeEventTimeFormat = function() {
                    return this.opt("mediumTimeFormat")
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(1),
            f = c(44),
            g = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b.prototype.handleClick = function(b, c) {
                    var d;
                    a.prototype.handleClick.call(this, b, c), e(c.target).closest("a[href]").length || (d = b.footprint.eventDef.url) && !c.isDefaultPrevented() && (window.location.href = d)
                }, b
            }(f.default);
        b.default = g
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(25),
            e = c(34),
            f = c(57),
            g = c(58);
        d.default.registerClass(e.default), d.default.registerClass(f.default), d.default.registerClass(g.default)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(36),
            e = c(55),
            f = c(56),
            g = c(94);
        d.default.register("standard", e.default), d.default.register("jquery-ui", f.default), d.default.register("bootstrap3", g.default)
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(0),
            e = c(27),
            f = function(a) {
                function b() {
                    return null !== a && a.apply(this, arguments) || this
                }
                return d.__extends(b, a), b
            }(e.default);
        b.default = f, f.prototype.classes = {
            widget: "fc-bootstrap3",
            tableGrid: "table-bordered",
            tableList: "table table-striped",
            buttonGroup: "btn-group",
            button: "btn btn-default",
            stateActive: "active",
            stateDisabled: "disabled",
            today: "alert alert-info",
            popover: "panel panel-default",
            popoverHeader: "panel-heading",
            popoverContent: "panel-body",
            headerRow: "panel-default",
            dayRow: "panel-default",
            listView: "panel panel-default"
        }, f.prototype.baseIconClass = "glyphicon", f.prototype.iconClasses = {
            close: "glyphicon-remove",
            prev: "glyphicon-chevron-left",
            next: "glyphicon-chevron-right",
            prevYear: "glyphicon-backward",
            nextYear: "glyphicon-forward"
        }, f.prototype.iconOverrideOption = "bootstrapGlyphicons", f.prototype.iconOverrideCustomButtonOption = "bootstrapGlyphicon", f.prototype.iconOverridePrefix = "glyphicon-"
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(7),
            e = c(47),
            f = c(70),
            g = d.default.views;
        g.basic = {
            class: e.default
        }, g.basicDay = {
            type: "basic",
            duration: {
                days: 1
            }
        }, g.basicWeek = {
            type: "basic",
            duration: {
                weeks: 1
            }
        }, g.month = {
            class: f.default,
            duration: {
                months: 1
            },
            defaults: {
                fixedWeekCount: !0
            }
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(7),
            e = c(67),
            f = d.default.views;
        f.agenda = {
            class: e.default,
            defaults: {
                allDaySlot: !0,
                slotDuration: "00:30:00",
                slotEventOverlap: !0
            }
        }, f.agendaDay = {
            type: "agenda",
            duration: {
                days: 1
            }
        }, f.agendaWeek = {
            type: "agenda",
            duration: {
                weeks: 1
            }
        }
    }, function(a, b, c) {
        Object.defineProperty(b, "__esModule", {
            value: !0
        });
        var d = c(7),
            e = c(71),
            f = d.default.views;
        f.list = {
            class: e.default,
            buttonTextKey: "list",
            defaults: {
                buttonText: "list",
                listDayFormat: "LL",
                noEventsMessage: "No events to display"
            }
        }, f.listDay = {
            type: "list",
            duration: {
                days: 1
            },
            defaults: {
                listDayFormat: "dddd"
            }
        }, f.listWeek = {
            type: "list",
            duration: {
                weeks: 1
            },
            defaults: {
                listDayFormat: "dddd",
                listDayAltFormat: "LL"
            }
        }, f.listMonth = {
            type: "list",
            duration: {
                month: 1
            },
            defaults: {
                listDayAltFormat: "dddd"
            }
        }, f.listYear = {
            type: "list",
            duration: {
                year: 1
            },
            defaults: {
                listDayAltFormat: "dddd"
            }
        }
    }])
});