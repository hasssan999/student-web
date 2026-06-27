students.php
<DOCTYPE html!>
<html lang ='ar'>
    <head>
        <meta charset ='UTF-8'>
        <title> الطلاب المسجلين</title>
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
        <div class="container">
            <h1>الطلاب المسجلين</h1>
            <table border="1" width ='100%'>
                <tr>
                    <th>الاسم</th>
                    <th>البريد</th>
                    <th>الرقم</th>
                    <th>السنة</th>
                    <th>الدفعة</th>
                </tr>
                <?php
            if (file_exists('students.text')) {
                $students =file('students.text');
            foreach($students as $student) {
                $data =explode('|', $student);
            echo "<tr>" ;
        foreach($data as $item){
        echo "<td>" .trim($item) ."</td>";
}
        echo "</tr>"; //الطالب الحالي
}
                }            
               ?>
            </table>
        </div>
    </body>
</html>