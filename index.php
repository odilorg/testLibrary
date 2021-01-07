<!DOCTYPE html>
<html>
 <head>
  <title>Lesson 15</title>
<?php
 function db_store($f,$i,$o,$age,$salary)
 {
  $db_name="db.txt";
  $ff=fopen($db_name,"a+");
   $str=$f.";".$i.";".$o.";".$age.";".$salary."\n";
   fwrite($ff,$str);
  fclose($ff);
 }

 function db_search($minage,$maxage,$minsalary,$maxsalary)
 {
  $db_name="db.txt";
  if ($maxage==0) {$maxage=10000;}
  if ($maxsalary==0) {$maxsalary=10000000;}
  $a=file($db_name);
  foreach ($a as $kk=>$vv)
  {
   $c=explode(";",$vv);
   if (
       ($c[3]>=$minage)&&
       ($c[3]<=$maxage)&&
       ($c[4]>=$minsalary)&&
       ($c[4]<=$maxsalary)
      )
   {
     $d['f']=$c[0];
     $d['i']=$c[1];
     $d['o']=$c[2];
     $d['age']=$c[3];
     $d['salary']=$c[4];
     $b[]=$d;
    }
  }
  return $b;
 }

?>
 </head>
 <body>

<form action="" method=POST>
 F: <input type=text name=f><br>
 I: <input type=text name=i><br>
 O: <input type=text name=o><br>
 Age: <input type=text name=age><br>
 Salary: <input type=text name=salary><br> 
 <input type=hidden name=tp value="store">
 <input type=submit value="Store"><br>
</form>
<hr>

<form action="" method=POST>
 Min age: <input type=text name=minage><br>
 Max age: <input type=text name=maxage><br>
 Min salary: <input type=text name=minsalary><br>
 Max salary: <input type=text name=maxsalary><br>
 <input type=hidden name=tp value="search">
 <input type=submit value="Search"><br>
</form>

<?php
 
//db_store("Petrov", "Sergey", "Olegovich", "22", "33000");

if ($_POST['tp']=="store")
{
 db_store($_POST['f'],$_POST['i'],$_POST['o'],$_POST['age'],$_POST['salary']);
}
else if ($_POST['tp']=="search")
{
 $b=
 db_search($_POST['minage'],$_POST['maxage'],$_POST['minsalary'],$_POST['maxsalary']);
echo "<br><hr><br>";
 foreach($b as $kk=>$vv)
 {
  echo $kk.": ".$vv['f']." ".$vv['i']." ".$vv['age']."/".$vv['salary']."<br>";
 }
}



?>

 </body>
</html>