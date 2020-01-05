<main class="wrap">
    <?PHP

    if (isset($_GET['page'])) {

        $page = $_GET['page'];
    } else {

        $page = 'accueil';
    }

    $list = glob("./includes/*.inc.php");
    $page = "./includes/" . $page . ".inc.php";

    if (in_array($page, $list)) {

        include_once $page;
    } else {

        include_once "./includes/accueil.inc.php";
    }


    ?>


</main>