<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
    <div class="btn btn-primary btn-hilang">Hilang</div>
    <div class="btn btn-success btn-muncul">Muncul</div>
    <div class="btn btn-warning btn-third">Third</div>
    <div class="btn btn-danger btn-animate">Animate</div>
    <h1>Ini adalah Judul</h1>
    <div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
    <!-- Ini file import jquery dan js -->
    <script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".btn-hilang").click(function(){
                $("h1").slideUp(500);
            })
            $(".btn-muncul").click(function(){
                $("h1").slideDown(1000);
            })
            $(".btn-third").click(function(){
                $("h1").toggle(1000);
            })
            $(".btn-animate").click(function(){
                $("div").animate({left: '250px'});
            })
        })
    </script>
</body>
</html>