<?php
$zxy = round(10000);
?>
<form method="get" action="">
    请输入代号:<input type="text" name="val">
    <br>
    <input type="submit" name="sub" value="开始比大小">
</form>

<?php
    if($_GET['val']!=""){
        if($_GET['val']==1){
            ?>
            <script language="JavaScript">
                alert('张馨元');
            </script>
<?php
            echo"<font color=\"red\" size=\"28\"> 张馨元的大小:$zxy</font>";
        }else{
            echo"<font color=\"red\" size=\"28\">张洪明的大小:$zxy</font>";
        }
    }
?>



