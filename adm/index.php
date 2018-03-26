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
                if(empty($_GET['page'])||($_GET['page']=="login")){
                    include "login.php";
                } else if ($_GET['page']=="home") {
                    include "home.php";
                } else if ($_GET['page']=="datapendaftaran") {
                    include "datapendaftaran.php";
                } else if ($_GET['page']=="progdi") {
                    include "progdi.php";
                } else if ($_GET['page']=="info") {
                    include "info.php";
                } else if ($_GET['page']=="metadata") {
                    include "metadata.php";
                } else if ($_GET['page']=="slideshow") {
                    include "slideshow.php";
                } else if ($_GET['page']=="faq") {
                    include "faq.php";
                } else if ($_GET['page']=="setting") {
                    include "setting.php";
                } else if ($_GET['page']=="detailpendaftar") {
                    include "detailpendaftar.php";
                } else if ($_GET['page']=="inputprogdi") {
                    include "inputprogdi.php";
                } else if ($_GET['page']=="inputslideshow") {
                    include "inputslideshow.php";
                } else if ($_GET['page']=="inputfaq") {
                    include "inputfaq.php";
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
