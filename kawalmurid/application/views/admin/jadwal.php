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
                            <h1 class="title-4">Jadwal Pelajaran
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
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-lihat-tab" data-toggle="tab" href="#nav-lihat-jadwal" role="tab" aria-controls="nav-home"
                                     aria-selected="true"><i class="fas fa-table"></i> Lihat Jadwal</a>
                                    <a class="nav-item nav-link" id="nav-buat-tab" data-toggle="tab" href="#nav-buat-jadwal" role="tab" aria-controls="nav-profile"
                                     aria-selected="false"><i class="fas fa-plus"></i> Buat Jadwal Baru</a>
                                    <a class="nav-item nav-link" id="nav-ubah-tab" data-toggle="tab" href="#nav-ubah-jadwal" role="tab" aria-controls="nav-contact"
                                     aria-selected="false"><i class="fas fa-edit"></i> Pengubahan Jadwal</a>
                                     <a class="nav-item nav-link" id="nav-hapus-tab" data-toggle="tab" href="#nav-hapus-jadwal" role="tab" aria-controls="nav-contact"
                                     aria-selected="false"><i class="fas fa-trash"></i> Hapus Jadwal</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-lihat-jadwal" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h3 class="title-5 m-b-35">Tabel Jadwal</h3>
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
                                    <div class="table-responsive m-b-40">
                                        <?php $this->load->view('admin/tabel_jadwal'); ?>
                                    </div>
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
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>description</th>
                                                    <th>date</th>
                                                    <th>status</th>
                                                    <th>price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="tr-shadow">
                                                    <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">lori@example.com</span>
                                                    </td>
                                                    <td class="desc">Samsung S8 Black</td>
                                                    <td>2018-09-27 02:12</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$679.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                <i class="zmdi zmdi-more"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">
                                                    <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">john@example.com</span>
                                                    </td>
                                                    <td class="desc">iPhone X 64Gb Grey</td>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$999.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                <i class="zmdi zmdi-more"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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