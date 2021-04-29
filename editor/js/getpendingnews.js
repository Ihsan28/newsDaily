function MyAjaxFunc() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var title;
        var l = Object.keys(res).length;
        console.log(l);
        var d;

        for (var i = 0; i < l; i++) {
          title = document.createElement("p");
          title.innerHTML = res[i].title;
          title.classList.add("name1");
          maincontainer.appendChild(title);
        }
        // ../control/verifynewscheck.php
        for (i = 0; i < l; i++) {
          d = document.createElement("div");
          d.innerHTML = `
          <form action="../control/viewpendingnews.php" method="post" > 
          <input type="text" name="id" id="id" value ="`+ res[i].id +`">
          <input type="text" name="title" value ="` + res[i].title + `">
          <input type="submit" value="view" name="view" >
          </form>
          `;

          //console.log(res[i].id);

          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsdaily/editor/control/getpendingnews.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }