<?php  
    header("Access-Control-Allow-Origin: *"); 
    $mysqli = new mysqli('http://kp8ay2yh.hk1031lan.dnstoo.com','petisal_f','lzl6485166','petisal', '3306');
  
    $sql="select * from productlist";  

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