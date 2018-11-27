<?php
    mysql_connect("localhost","username","");
    mysql_select_db("nnn");
    $search=$_POST["search"];
    $result = mysql_query("SELECT * FROM new WHERE title LIKE '%$search%'");
    while($row=mysql_fetch_array($result))
    {
        $title=$row["title"];
        $message=$row["message"];
        $who=$row["who"];
        $date=$row["date"];  
        $time=$row["time"];
        $id=$row["id"];
        echo "$title </br> $message </br> $who </br> $date $time </br>";
    }
?>
