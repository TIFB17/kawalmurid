<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <?php $this->load->view("admin/_partials/head.php")?>
</head>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
         <?php $this->load->view("admin/_partials/headermobile.php")?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
         <?php $this->load->view("admin/_partials/sidebar.php")?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
              <?php $this->load->view("admin/_partials/headerdekstop.php")?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                
                        <!--Footer-->
                        <?php $this->load->view("admin/_partials/footer.php")?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php")?>

</body>

</html>
<!-- end document-->
