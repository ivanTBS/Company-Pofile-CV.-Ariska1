<!DOCTYPE html>
<html>

<head>
    <?php
        include "head.php";
    ?>
</head>

<body>
    <header>
        <?php 
            include "header.php";
        ?>
    </header>
    <main>
        <?php
                if(empty($_GET['page']) || $_GET['page']=="home"){
                    include "home.php";
                } else if ($_GET['page']=="info") {
                    include "info.php";
                } else if ($_GET['page']=="pendaftaran") {
                    include "pemesanan.php";   
                } else if ($_GET['page']=="Testimoni") {
                    include "Testimoni.php";
                } else if ($_GET['page']=="login") {
                    include "login.php";
                } else if ($_GET['page']=="tersimpan") {
                    include "tersimpan.php";
                } 
        ?>
    </main>
    <footer class="page-footer">
        <?php 
            include "footer.php";
        ?>
    </footer>
    <?php
        include "javascript.php";
    ?>
</body>

</html>
