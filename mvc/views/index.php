<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>

    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/project/public/css/style.css">
    <link rel="stylesheet" href="/project/public/css/<?=$view?>/header.css">
    <link rel="stylesheet" href="/project/public/css/<?=$view?>/home.css">
    <link rel="icon" href="https://vnje.com/wp-content/uploads/2021/05/VNJE-logo.png">


    <?php
        if($view == 'user'){
            echo '<link rel="stylesheet" href="/project/public/css/'.$view.'/footer.css">';

            if($data['component'] == 'home' || $data['component'] == 'product' || $data['component'] == 'product-detail' || $data['component'] == 'cart'){

                echo '<link rel="stylesheet" href="/project/public/css/user/home.css">';
            }
        }
    ?>

    <link rel="stylesheet" href="/project/public/css/<?=$view?>/<?=$data['component']?>.css">
    

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- Icon -->
    <link rel="stylesheet" href="/project/public/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel='stylesheet' href='/project/public/font/font-awesome.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="/project/public/css/slider/owl.carousel.min.css">
    <link rel="stylesheet" href="/project/public/css/slider/owl.theme.default.min.css">
</head>

<body id="page-top">
    <?php
    require_once('./mvc/views/' . $view . '/' . $data['component'] . '.component.php');
    ?>
    <script src="/project/public/js/slider/jquery.min.js"></script>
    <script src="/project/public/js/slider/owl.carousel.js"></script>
    <script src="/project/public/js/slider/slider.js"></script>
    <script>
        $('.count').countUp({
            delay: 10,
            time: 1500
        });
    </script>
    <script scr="/project/public/js/main/main.js"></script>
</body>

</html>