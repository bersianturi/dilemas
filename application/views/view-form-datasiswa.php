<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Form Input Data Siswa</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url('assets') ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets') ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets') ?>/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Input Data Siswa</h2>
                    <form action="<?= base_url() ?>Datasiswa/cetak" method="POST">
                        <div class="input-group">
                            <label class="label">Nama Siswa</label>
                            <input class="input--style-4" type="text" name="namasiswa" id="namasiswa">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="input-group">
                                        <label class="label">NIS</label>
                                        <input class="input--style-4" type="number" name="nis" id="nis">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kelas</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="kelas" id="kelas">
                                            <option disabled selected hidden>Pilih Kelas</option>
                                            <option value="12.3A.21">12.3A.21</option>
                                            <option value="12.3B.21">12.3B.21</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Lahir</label>
                                    <input class="input--style-4" type="text" name="tmplahir" id="tmplahir">
                                </div>
                            </div>
                            <div class=" col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tgllahir" id="tgllahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Alamat</label>
                            <input class="input--style-4" type="textarea" name="alamat" id="alamat">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Agama</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="agama" id="agama">
                                            <option disabled selected hidden>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Khonghucu">Khonghucu</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="label">Jenis Kelamin</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Laki-laki
                                        <input type="radio" checked="checked" name="jnskelamin" value="Laki-laki">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Perempuan
                                        <input type="radio" name="Jenis Kelamin" value="Perempuan">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url('assets') ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets') ?>/js/global.js"></script>

</body>

</html>