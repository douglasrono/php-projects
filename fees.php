
<?php
include(fees.php);
if(isset($_POST['submit'])=='submit')
{
$date=$_POST['date'];
$name=$_POST['name'];
$rno=$_POST['rno'];
$course=$_POST['course'];
$type=$_POST['type'];
$cno=$_POST['cno'];
$cdate=$_POST['cdate'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$bal=$_POST['bal'];
$x=$_POST['x'];
$insert="insert into fees set date='$date',name='$name',rno='$rno',
course='$course',type='$type',cno='$cno',cdate='$cdate',
a='$a',b='$b',c='$c',bal='$bal',total='$x'";
$query=mysql_query($insert);
}
?>
