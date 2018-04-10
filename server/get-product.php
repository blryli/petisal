<?php  
    header("Access-Control-Allow-Origin: *");//这个必写，否则报错  
    $mysqli=new mysqli('http://kp8ay2yh.hk1031lan.dnstoo.com','petisal_f','lzl6485166','petisal', '3306');//根据自己的数据库填写  
  
    $id  = $_POST['id'];
    $sql="select * from product where id=$id";  

    $mysqli->query('set names utf8');
    $res=$mysqli->query($sql);  
  
    $arr=array();  
    while ($row=$res->fetch_assoc()) {  
        $arr[]=$row;  
    }  
    $res->free();  
    //关闭连接  
    $mysqli->close();  
      
    echo(json_encode($arr));//这里用echo而不是return  
  
?>