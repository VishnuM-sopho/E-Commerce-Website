function vE(e) {
    var n, a, l;
    return n = e.value, a = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, l = a.test(n), l ? $(e).css("color", "green") : $(e).css("color", "red"), l
}

function vN(e) {
    var n, a, l;
    return n = e.value, a = /^[A-Za-z ]{2,30}$/, l = a.test(n), l ? $(e).css("color", "green") : $(e).css("color", "red"), l
}

function vPM() {
    var e, n, a;
    return e = !1, n = $("input[name=pwd]"), a = $("input[name=rpwd]"), n.val() && (e = n.val() === a.val(), e ? ($("input[name=pwd]").css("color", "green"), $("input[name=rpwd]").css("color", "green")) : ($("input[name=pwd]").css("color", "red"), $("input[name=rpwd]").css("color", "red"))), e
}

function vRF(e) {
    var n;
    return $("#msg").html(""), n = !0, vE(e.email) || ($("#msg").append("<li>Invalid Email</li>"), n = !1), vN(e.name) || ($("#msg").append("<li>Invalid Name</li>"), n = !1), vPM() || ($("#msg").append("<li>Password does not match</li>"), n = !1), (e.pwd.value.length < 6 || e.pwd.value.length > 30) && ($("#msg").append("<li>Password must contain 6 to 30 characters</li>"), n = !1), "0" === e.cid.value && ($("#msg").append("<li>No College selected</li>"), n = !1), e.sex.value || ($("#msg").append("<li>No Gender selected</li>"), n = !1), n
}