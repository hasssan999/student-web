save.php
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$email=$_POST['email'];
$student=$_POST['student-id'];
$course=$_POST['course'];
$batch=$_POST['batch'];
//تجمع البيانات في سطر واحد مع اضافة سطر جديد في نهاية
$data=$name.",".$email.",".$batch.",".$course.",";
file_put_contents("students.txt",$data,FILE_APPEND);
echo"تم تسجيل الطالب بنجاح";
}
?>