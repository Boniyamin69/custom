<!DOCTYPE html>
<html>

<head>
    <title>YAMIN SMS SENDER</title>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="theme-color" content="#283437">
    <style>
    *{
    margin:0;
    padding:0;
    }
    body{
    background:#636363;
    color:white ;
    }
    #main-header{
    background:#333;
    padding:15px;
    display:flex ;
    justify-content: space-between;
    align-items: center;
    color:#9a9a9a;
    }
    .custom-header i{
    font-size:23px;
    }
    .custom-header1{
    font-family:Arial block ;
    font-weight:200;
    text-transform:uppercase ;
    margin-left:19px;
    }
    
    
    .custom-header2 {
    margin-left:auto ;
    order:2;
    
    }
    .visitor-coun
    font-family:Arial block;
    font-weight:200;
    text-transfrom:uppercase ;
    margin-left:19px;
    }
    
    .dropdown{
    width:180px;
    position:absolute ;
    left:-15px;
    top:35px;
    background:#373737;
    display:none ;
    
    }
    .dropdown:last-child{
    border-bottom:none ;
    }
    .dropdown ul{
    list-style:none ;
    margin:0px;
    padding:0px;
    }
    .dropdown ul li a{
    text-decoration:none ;
    font-size:16px;
    display:block ;
    padding-left:15px;
    padding-top:12px;
    padding-bottom:12px;
    border-bottom:1px solid black ;
    color:#9a9a9a;
    font-family:Arial block ;
    font-weight:350;
    }
    .dropdown ul li a:hover{
    border-radius:50px;
    background:#515d58;
    margin:5px;
    transition:2s;
    }
    .custom-header i:hover .dropdown{
    display:block;
    }
    
    #index-box{
    background:#333;
    height: 100%;
    margin:8px;
    }
    #index-box h6{
    background:#393e3f;
    padding:10px;
    font-family:Arial block ;
    font-weight:500;
    letter-spacing: 0.1em;
    color:#9a9a9a;
    }
    img{
    width:80px;
    height:75px;
    }
    .img-box {
    margin-top:120px;
    text-align:center ;
    }
    .img-box1 img{
    border:4px solid #9a9a9a;
    padding:12px;
    border-radius:100px;
    }
    .titlebd{
    margin-bottom:10px;
    }
    .titlebd p{
    margin:12px;
    font-family:Arial block ;
    color:#9a9a9a;
    }
    .titlebd span{
    margin-bottom:22px; 
    color:#9a9a9a;
    font-family:Arial block ;
    font-weight:450;
    text-transform:uppercase ;
    }
    
    #input-box {
    overflow:hidden ;
    }
    .single-box{
    overflow:hidden ;
    text-align:center ;
    }
    .single-box input{
    padding:15px 100px 15px 20px;
    margin:12px;
    outline:none ;
    border:none ;
    background:#333;
    box-shadow: 1px 1px 8px 1px #ddd;
    border-radius:70px;
    font-weight:1000;
    color:white ;
    letter-spacing: 0.1em;
    text-transform:uppercase ;
    }
    .submit-box {
    text-align:center ;
    }
    .submit-box input{
    padding:13px 45px;
    margin:12px;
    border:none ;
    box-shadow: 1px 1px 8px 1px #ddd;
    background:none ;
    border-radius:18px;
    color:#9a9a9a;
    font-weight:800;
    letter-spacing: 0.1em;
    font-family:Arial block ;
    text-transform:uppercase ;
    }
    #divbtn{
    border-top: 1px solid black ;
    margin-top:25px;
    padding-top:15px;
    margin-bottom:10px;
    text-align:center ;
    
    }
    #divbtn span{
    font-family:Arial block ;
    font-weight:600;
    letter-spacing: 0.1em;
    color:#9a9a9a;
    }
    #divbtn a{
    text-decoration:none ;
    text-transform:uppercase ;
    font-family:Arial block ;
    font-weight:200;
    letter-spacing: 0.1em;
    color:#9a9a9a;
    }
    </style>
    <link/>
    <script src="https://kit.fontawesome.com/5fee557e8c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="custom-header1">
        YAMIN NAME OF BRAND
    </div>

    <div id="index-box">
        <h6>YAMIN CUSTOM SMS </h6>
        <div class="img-box">
        <div class="img-box1">
        <img src="https://telegra.ph/file/37dc73e4cebc19b694268.jpg" alt="" />
        </div>
        <div class="titlebd">
        <p>BANGLADESHI FREE CUSTOM SMS SENDER</p>
        <span>BONI YAMIN CUSTOM SMS SENDER FREE,WORKING ONLY ROBI AIRTEL .NOW HARM ANYONE</span>
    </div>

    <div id="input-box">
        <div class="single-box">
            <form method="POST" action="">
                <input type="number" name="number" placeholder="Target Number" autocomplete="on">
                <input type="text" name="msg" placeholder="Your MESSAGE" autocomplete="on">
        </div>
        <div class="submit-box">
            <input type="submit" name="submit" value="SEND NOW" class="button">
        </div>
        </form>
    </div>
    
    <div id="divbtn">
    <span class='visitor-count'>Total Visitors: <strong>
    <?php
    $visitorCount = intval(file_get_contents('visitor_count.txt'));
    echo $visitorCount;
    ?>
    </strong></span>
    
    <div id="divbtn">
    <span>@COPYRIGHT  BY FUCKING DAD:</span><br>
    <a class="" href="https://t.me/Boniyamin69">YAMIN</a>
    </div>
    </div>
    
    <?php
    
    $visitorCount++;
    file_put_contents('visitor_count.txt', $visitorCount);
    
    if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $msg = $_POST['msg'];
    
    $apiUrl = "https://team.com/customsms.php?number=" . urlencode($number) . "&msg=" . urlencode($msg);
    $response = file_get_contents($apiUrl);
    
    if ($response === false) {
    echo '<script>alert("Failed to send SMS.");</script>';
    } else {
    echo '<script>alert("SMS sent successfully!");</script>';
    }
    }
    ?>
</body>

</html>
