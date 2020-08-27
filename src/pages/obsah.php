<main>
    <?php                     
    if (isset($_GET['page'])) {
            include('pages/' . $_GET['page'] . '.html');
    
    }else {
        include('pages/domu.html');
    }
    ?>

</main>