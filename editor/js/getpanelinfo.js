function pendingnewsrequestcount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let nwsRequest = document.getElementById("pendingnews-count");
            nwsRequest.innerHTML = l.toString();
        }
    };

    xhttp.open("POST","/newsDaily/editor/control/getpendingnews.php",true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function hiddennewsrequestcount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let nwsRequest = document.getElementById("hiddennews-count");
            nwsRequest.innerHTML = l.toString();
        }
    };

    xhttp.open("POST","/newsDaily/editor/control/getHiddenNews.php",true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function activeReporterCount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let usercount = document.getElementById("ac-reporter-count");
            usercount.innerHTML = l.toString();
        }
    };

    xhttp.open(
        "POST",
        "/newsDaily/editor/control/getActiveReporter.php",
        true
    );

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function suspendedReporterCount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            console.log(l);
            let usercount = document.getElementById("ac-suspend-count");
            usercount.innerHTML = l.toString();
        }
    };

    xhttp.open(
        "POST",
        "/newsDaily/editor/control/getSuspendedReporter.php",
        true
    );

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function activeEditorCount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let usercount = document.getElementById("ac-editor-count");
            usercount.innerHTML = l.toString();
        }
    };

    xhttp.open("POST","/newsDaily/editor/control/getActiveEditor.php",true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function activeUserCount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let usercount = document.getElementById("ac-user-count");
            usercount.innerHTML = l.toString();
        }
    };

    xhttp.open("POST","/newsDaily/editor/control/getActiveUser.php",true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function newsCount() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = JSON.parse(this.responseText);
            console.log(res);
            var l = Object.keys(res).length;
            let usercount = document.getElementById("total-news-count");
            usercount.innerHTML = l.toString();
        }
    };

    xhttp.open("POST","/newsDaily/editor/control/getAllNews.php",true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function MyAjaxFunc() {
    pendingnewsrequestcount();
    suspendedReporterCount();
    hiddennewsrequestcount();
    activeReporterCount();
    activeEditorCount();
    newsCount();
}


