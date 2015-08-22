<?php


?>
<form method="get" action="">
    请输入代号:<input type="text" name="val">
    <br>
    <input type="submit" name="sub" value="开始比大小">
</form>

<?php
    if($_GET['val']!=""){
        if($_GET['val']==1){
            $zxy =rand(1,100000);
            $mony1 = rand(0.5,5);
            ?>
<?php
            echo"<font color=\"red\" size=\"28\"> 张馨元的大小:$zxy</font>";
            echo"<br>";
            echo"<font color=\"red\" size=\"28\">钱数为: $mony1</font>";
        }else{
            $zhm =rand(1,100000);
            $mony = rand(0.5,5);
            echo"<font color=\"red\" size=\"28\">张洪明的大小:$zhm</font>";
            echo"<br>";
           echo"<font color=\"red\" size=\"28\">  钱数为:$mony</font>";
        }


        if($zxy > $zhm){
            ?>
            <script language="JavaScript">
                alert('张辛苑赢了');
            </script>
<?php
            echo"赢了$mony元";
        }


        if($zxy == $zhm){
            ?>
            <script language="JavaScript">
                alert('平局');
            </script>
            <?php
            echo"赢了0元";
        }


        if($zxy < $zhm){
            ?>
            <script language="JavaScript">
                alert('张洪明赢了');
            </script>
            <?php
            echo"赢了$mony1元";
        }


    }
?>



