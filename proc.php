<?php 
$id=$_GET[ 'id']; 
$name=$_GET[ 'name']; 
$phone=$_GET[ 'phone']; 
$school=$_GET[ 'school'];
$score=$_GET[ 'score' ]; 
$msg="\n 姓名:" .$name. "\r\n ID:" .$id. "\r\n 手机号码:" .$phone. "\r\n 学院:" .$school. "\r\n 分数：" .$score. "\r\n";
file_put_contents("result.txt",$msg,FILE_APPEND); 
?>


<html>

<head>
    <title>Message Received</title>
</head>

<body>
    <script type="text/javascript">
        alert("恭喜 <?php echo($name); ?> 已成功提交!");
        window.location.href = "../../../";
    </script>

</body>

</html>