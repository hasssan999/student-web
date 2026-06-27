index.php
<DOCTYPE html!>
<html lang='ar'dir='rtl'>
    <head>
        <meta charset="UTF-8">
        <title>تسجيل الطلاب </title>
        <link rel ='stylesheet'href.'style.css'>
    </head>
    <body>
        <div class='container'>
<h1>نموذج تسجيل الطلاب</h1>
<form action='save.php'method='post'>
    <label>اسم الطالب</label>
    <input type="text"name="name"required>
    <label>البريد الالكتروني</label>
<input type="email"name="email"required>
<label>رقم الطالب</label>
<input type="text"name="student-id"required>
<label>اسم الدراسة</label>
<input type="text"name="course"required>
<label>اسم الدفعة </label>
<input type="text"name="batch"required>
<button type="submit">تسجيل</button> 
</form>
<a href="student.php">عرض الطلاب المسجلين</a>
</div>
    </body>
</html>
