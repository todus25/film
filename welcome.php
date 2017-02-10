<html>
<body>


 <?php 
  
 
 if ($_POST["name"]=="a" && $_POST["email"]=="3") {
    
	header("Location:http://localhost/m.html");
   exit;
}
else
{   



 header("Location:http://localhost/lo.php?x=1");//redirect kortesi and data pathaitesi
 exit; }
?>


</body>
</html>