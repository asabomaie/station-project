<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <?php
        $ua=$_SERVER['HTTP_USER_AGENT'];
        $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
        if ($browser == true){
        $browser = 'sp';
        }
        ?>
        <?php if($browser == 'sp'){ ?>
        <link rel="stylesheet" type="text/css" href="css/sp_style.css"/>
        <?php }else{ ?>
        <link rel="stylesheet" type="text/css" href="css/pc_style.css" />
    <?php } ?>
</head>

<body>
    @yield('content')
</body>

</html>