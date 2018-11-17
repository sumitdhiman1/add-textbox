<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

</style>
</head>
<body>



<button type = "button" style = 'margin:5px 0 0 5px;' onclick = "fun()">Click me</button>


<script>
function fun(){
    document.write("<button type ='button' style = 'padding:5px 5px;'   onclick='fun1()' >Click me</button><br><br>");
	document.write("<br><input type ='text' id = 'my1' name = 'text'><button type ='button' id = 'my' onclick='remove()' >Remove</button><br><br>");
	document.write("<input type ='text' id = 'my1' name = 'text'><button  type ='button' id = 'my' onclick='remove()'>Remove</button><br>");
	
}


function fun1(){

	document.write("<br><input type ='text' id = 'my1' name = 'text'><button type ='button' id = 'my' onclick='remove()'>Remove</button><br><br>");
	document.write("<input type ='text' id = 'my1' name = 'text'><button type ='button' id = 'my' onclick='remove()'>Remove</button><br>");
	document.write("<button type ='button' style = 'padding:5px 5px;'  >Click me</button><br><br>");
}

function remove(){
	    var x = document.getElementById("my");
    x.remove();
	  var y = document.getElementById("my1");
    y.remove();
	 
}

	
</script>

</body>
</html>

