<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form method="post" >
<title>Schema Creator</title>
</head>
<?php
$message=NULL;
function __autoload($class_name) {
include $class_name . '.php';
}
if (empty($_POST["RecipeName"]) && empty($_POST["Description"]) && empty($_POST["ImageName"]) && empty($_POST["URLName"]))
{
 echo 'Please Enter Recipe Name and Hit Search.' ;
}
else
{
$thing=new Recipe();
$result=$thing->SearchThing("name", $_POST["RecipeName"]);
if($result==1)
{
 echo $thing->SearchCreativeWork();
 echo $thing->SearchRecipeWork(); 
}
else
{
  $message="Recipe does not exist";
}
}
?>

<body>
<div style="border-style: outset; width: 450px" align="left">
<h2 style="color: red" align="center">Welcome to Recipe System</h2>
<h4 align="center"><label id=questionLabel ><? echo $message; ?></label></h4>
<table width="400" border="0">
<tr align="center">
<td align="right"><strong>Name :</strong></td>
<td align="left"><input id="recipeID" type="text" name="RecipeName" /></td>
</tr>
<tr align="center">
<td align="right"><strong>Description:</strong></td>
<td align="left"><input id="descid" type="text" name="Description" /></td>
</tr>
<tr align="center">
<td align="right"><strong>Image :</strong></td>
<td align="left"><input id="imgid" type="text" name="ImageName" /></td>
</tr>
<tr align="center">
<td align="right"><strong>URL:</strong></td>
<td align="left"><input id="URLID" type="text" name="URLName" /></td>
</tr>
<tr align="center" >
<td  colspan="3"><input type="submit" name="Check" title="Check" value="Search Recipe"/>
    <h4><a href='Add.php'>Add</a></h4><h4><a href='UpdateRecipe.php'>Update</a></h4><h4><a href='DeleteRecipe.php'>Delete</a></h4></td>
</tr>
</table>
</div>
</body>
</form>
</html>