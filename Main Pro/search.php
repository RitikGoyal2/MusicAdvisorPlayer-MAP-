<!DOCTYPE html>
<html>
<head>
<script>
function showResult(str) {
    if (str.length == 0) { 
        document.getElementById("search").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search").innerHTML = this.responseText;
 
            }
        };
        xmlhttp.open("GET", "getresult.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<style>
    body{
        background-image: url("ab.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        

    }
   
    </style>
</head>
<body>

<form> 
<h1 align="center" style="color: red;">Song Name: <input type="text"  onkeyup="showResult(this.value)" style="font-size: 30px;">
<br><br>
Results Found<br> <br><hr></h1><h2 style="color: white;"><div id="search"></div>
</form>
 
</body>
</html>
