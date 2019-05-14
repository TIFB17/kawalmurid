<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/header");?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php $this->load->view("_partials/main_navbar");?>

        <!-- HEADER MOBILE-->
        <?php $this->load->view("_partials/mobile_navbar");?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <?php //$this->load->view("_partials/breadcrumb"); ?>

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Absen
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- JADWAL HTML BODY -->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-lihat-absen" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h3 class="title-5 m-b-35">Tabel Absen</h3>
                                    <div class="table-data__tool">
                                        <form class="table-data__tool-left" action="" method="">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="tahunAjaran">
                                                    <option value="0" selected="selected">Tahun Ajaran</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="semester">
                                                    <option value="0" selected="selected">Semester</option>
                                                    <option value="1">Ganjil</option>
                                                    <option value="2">Genap</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="kelas">
                                                    <option value="0" selected="selected">Kelas</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <button class="au-btn-filter">
                                                <i class="zmdi zmdi-filter-list"></i>cari</button>
                                        </form>
                                    </div>
                                  <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th><center>Id Hadir</center></th>
                                                    <th><center>Nis</center></th>
                                                    <th><center>Tanggal</center></th>
                                                    <th><center>Id Pelajaran</center></th>
                                                    <th><center>Nip</center></th>
                                                    <th><center>Id Kelas</center></th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($kehadiran as $jd) {?>
                                                <tr>
                                                    <td><center><?php echo $jd->id_hadir; ?></center></td>
                                                    <td><center><?php echo $jd->nis; ?></center></td>
                                                    <td><center><?php echo $jd->tanggal; ?></center></td>
                                                    <td><center><?php echo $jd->id_pelajaran; ?></center></td>
                                                    <td><center><?php echo $jd->nip; ?></center></td>
                                                    <td><center><?php echo $jd->id_kelas; ?></center></td>
                                                    <td><center><button class="btn btn-success" type="button">
                                                        <i class="fa fa-edit"> Edit</i></button>
                                                    <button> <a href="<?php echo site_url('admin/Absen/hapus/'.$jd->id_hadir);?>">Hapus  
                                                </button>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                </div>
                                <div class="tab-pane fade" id="nav-buat-jadwal" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <h3 class="title-5 m-b-35">Form Jadwal Baru</h3>
                                </div>
                                <div class="tab-pane fade" id="nav-ubah-jadwal" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <h3 class="title-5 m-b-35">Ubah Jadwal</h3>
                                    <div class="table-data__tool">
                                        <form class="table-data__tool-left" action="" method="">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="tahunAjaran">
                                                    <option value="" selected="selected">Tahun Ajaran</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="semester">
                                                    <option value="" selected="selected">Semester</option>
                                                    <option value="ganjil">Ganjil</option>
                                                    <option value="genap">Genap</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="kelas">
                                                    <option value="" selected="selected">Kelas</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <button class="au-btn-filter">
                                                <i class="zmdi zmdi-filter-list"></i>cari</button>
                                        </form>
                                    </div>
                                   
                                <div class="tab-pane fade" id="nav-hapus-jadwal" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <h3 class="title-5 m-b-35">Hapus Jadwal</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END JADWAL HTML BODY -->

            <!-- COPYRIGHT-->
            <?php $this->load->view('_partials/copyright'); ?>
        </div>

    </div>
    <!-- FOOTER -->
    <?php $this->load->view('_partials/footer'); ?>

</body>

</html>
<!-- end document-->