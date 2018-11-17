
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<form action = "next.php" method="post" name = "form" enctype = "multipart/form-data" onsubmit= "return validate()"  >

<input id="btnAdd" type="button" value="Add" class = "btn btn-info" />

</br><div id="a"  ></div>

<input name = "submit" type="submit" value="submit" class = "btn btn-info"  />


</form>

<script>


    $(document).ready(function() {
  $("#btnAdd").click(function() {
    $("#a").append('<div class="con"><input style = "margin:10px 0;" type="text" id="text" class ="sum" name = "hello[]"  value="" />'+'<span id = "hey"></span>' +'<input type="text" id="Text1" name = "hell1[]" value="" />'+'<input type="file" id="Text1" name = "file[]" value="" />'+'<input type="button" class="btnRemove"  value="Remove"/></div>');
  });

 
  $('body').on('click','.btnRemove',function() {
    $(this).parent('div.con').remove()

  });
});

function validate(){
	document.getElementById('hey').innerHTML = "";
	var x = document.getElementById('text').value;
	if(x == ""){
		
		document.getElementById('hey').innerHTML = "this field is required";
		document.getElementById('hey').style.color = "red";
		
		return false;
	}
}




</script>


</body>
</html>
