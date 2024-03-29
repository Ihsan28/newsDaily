function getActiveEditor() {
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
          <p>`+ res[i].name +`</p>
          </div>
          <div class="">
          <p>` + res[i].email + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].gender + `</p>
          </div>
          <div class="view">
          <p>` + res[i].doj + `</p>
          </div>
        
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getActiveEditor.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }


  function getActiveReporter() {
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
          <p>`+ res[i].name +`</p>
          </div>
          <div class="">
          <p>` + res[i].email + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].gender + `</p>
          </div>
          <div class="view">
          <p>` + res[i].doj + `</p>
          </div>
        
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getActiveReporter.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }


  function getSuspendedReporter() {
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
          <form action="../control/suspendReportercheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].name +`</p>
          </div>
          <div class="">
          <p>` + res[i].email + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].gender + `</p>
          </div>
          <div class="view">
          <p>` + res[i].doj + `</p>
          </div>
          <div class="suspend">
          <input type="submit" value="Revoke" name="approved" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
        
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getSuspendedReporter.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }


  function suspendReporter() {
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
          <form action="../control/suspendReportercheck.php" method="post" > 
          <div class="header-container">
          <div class="text-bold">
          <p>`+ res[i].id +`</p>
          </div>
          <div class="text-bold">
          <p>`+ res[i].name +`</p>
          </div>
          <div class="">
          <p>` + res[i].email + `<p>
          </div>
          <div class="text-bold">
          <p>` + res[i].gender + `</p>
          </div>
          <div class="view">
          <p>` + res[i].doj + `</p>
          </div>
          <div class="suspend">
          <input type="submit" value="Suspend" name="suspend" >
          </div>
          <input type="hidden" name="id" id="id" value ="`+ res[i].id +`">
        
          </div>
          </form>
          `;
          maincontainer.appendChild(d);
        }
      }
    };

    xhttp.open("POST", "/newsDaily/editor/control/getActiveReporter.php", true);
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }