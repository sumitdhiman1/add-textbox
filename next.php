<?php 
if(isset($_POST['submit'])){
	
	$name = $_POST['hello'];
	
	
	$name1 = $_POST['hell1'];
	$b = implode(',',$name);
    $c = implode(',',$name1);
	echo  "<br><h1>$b</h1><br>";
    echo  "<br><h1>$c</h1><br>";
	
	for($i = 0;$i<count($file = $_FILES['file']['name']);$i++){
	$file = $_FILES['file']['name'][$i];
	$tmp = $_FILES['file']['tmp_name'][$i];
	move_uploaded_file($tmp,"images/$file");
	echo "<img src ='images/$file' height = '100' width = '100' >";
	
	
		
	}
}
global $name;
if($name == ""){
	
		$msg = "this is required";
		
		echo "<h1>$msg</h1>";

}


   ?>
   
   