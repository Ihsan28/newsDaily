function getNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var title = document.getElementById("title");
        var body = document.getElementById("body");
        var image = document.getElementById("image");
        var l = Object.keys(res).length;
        console.log(l);
        var d;
        for (i = 0; i < l; i++) {
          title.innerHTML=res[i].title;
          body.innerHTML=res[i].body;
          image.setAttribute("src",res[i].images);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getnews.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }

  function getApprovedNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnewscheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].rid +`</p>
          </div>
          <div class="">
          <p>` + res[i].title + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].catagory + `</p>
          </div>
          <div class="view">
          <input type="submit" value="view" name="viewApproved" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
          <input type="hidden" name="rid" id="rid" value ="`+ res[i].rid +`">
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getApprovedNews.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }
  
  function getPendingNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnewscheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].rid +`</p>
          </div>
          <div class="">
          <p>` + res[i].title + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].catagory + `</p>
          </div>
          <div class="view">
          <input type="submit" value="view" name="view" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
          <input type="hidden" name="rid" id="rid" value ="`+ res[i].rid +`">
          </div>
          </form>
          `;

          //console.log(res[i].id);

          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getpendingnews.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }

  function getHiddenNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnewscheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].rid +`</p>
          </div>
          <div class="">
          <p>` + res[i].title + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].catagory + `</p>
          </div>
          <div class="view">
          <input type="submit" value="view" name="viewhidden" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
          <input type="hidden" name="rid" id="rid" value ="`+ res[i].rid +`">
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getHiddenNews.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }


  function getAllNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnewscheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].rid +`</p>
          </div>
          <div class="">
          <p>` + res[i].title + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].catagory + `</p>
          </div>
          <div class="text-bold">
          <p>` + res[i].status + `</p>
          </div>
          <div class="view">
          <input type="submit" value="view" name="viewall" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
          <input type="hidden" name="rid" id="rid" value ="`+ res[i].rid +`">
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getSearchNews.php", true);
    let find = document.getElementById("find").value;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("data="+ find);
  }

  function findNews() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        maincontainer.innerHTML="";
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnewscheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].rid +`</p>
          </div>
          <div class="">
          <p>` + res[i].title + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].catagory + `</p>
          </div>
          <div class="view">
          <input type="submit" value="view" name="viewall" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
          <input type="hidden" name="rid" id="rid" value ="`+ res[i].rid +`">
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getSearchNews.php", true);
    let find = document.getElementById("find").value;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("data="+ find);
  }
