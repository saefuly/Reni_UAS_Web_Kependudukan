

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
        <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/summernote.css">
        <script src="<?=base_url()?>assets/dist/js/summernote.js"></script>

        <style>
            #image-holder {
                margin-top: 8px;
            }
        
            #image-holder img {
                border: 8px solid #DDD;
                max-width:100%;
            }
    </style>
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-lg"><b>DATA PENDUDUK</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">                    
                     <a href="<?=base_url()?>user/user_logout" class="sidebar-toggle" style="float:right;">
                       Logout
                    </a>  
                </nav>
            </header>
            <?php include'menu.php'; ?>
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Edit Data Penduduk</h3>
                                </div>
                                <?php foreach($penduduk as $p){ ?>
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>user/update_penduduk">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">NIK (*)</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Nomor Induk KTP" name="nik" id="tiga" value="<?php echo $p->nik ?>" maxlength="16" pattern="[0-9]{16}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" id="tiga" value="<?php echo $p->nama_lengkap ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Tempat & Tanggal Lahir</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tiga" value="<?php echo $p->tempat_lahir ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="date" class="form-control" name="tgl_lahir" id="tiga" value="<?php echo $p->tgl_lahir ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label><input type="radio" name="jk" value="l" <?php echo ($p->jk) == 'l' ? "checked" : ""; ?>>Laki-laki</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="jk" value="p" <?php echo ($p->jk) == 'p' ? "checked" : ""; ?>>Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="tiga" value="<?php echo $p->alamat?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" placeholder="RT" class="form-control" name="rt" id="tiga" value="<?php echo $p->rt?>" >
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" placeholder="RW" class="form-control" name="rw" id="tiga" value="<?php echo $p->rw?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="Kel/Desa" name="kelurahan" id="tiga" value="<?php echo $p->kelurahan ?>">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" placeholder="Kecamatan" class="form-control" name="kecamatan" id="tiga" value="<?php echo $p->kecamatan ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Agama</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="agama">
                                                    <option value="" <?php echo ($p->agama) == '' ? "selected" : ""; ?>></option>
                                                    <option value="Islam" <?php echo ($p->agama) == 'Islam' ? "selected" : ""; ?>>Islam</option>
                                                    <option value="Kristen" <?php echo ($p->agama) == 'Kristen' ? "selected" : ""; ?>>Kristen</option>
                                                    <option value="Hindu" <?php echo ($p->agama) == 'Hindu' ? "selected" : ""; ?>>Hindu</option>
                                                    <option value="Budha" <?php echo ($p->agama) == 'Budha' ? "selected" : ""; ?>>Budha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Status Perkawinan</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label><input type="radio" name="status" value="kawin" <?php echo ($p->status) == 'kawin' ? "checked" : ""; ?>>Kawin</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="status" value="belum" <?php echo ($p->status) == 'belum' ? "checked" : ""; ?>>Belum Kawin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Pekerjaan</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="pekerjaan">
                                                    <option value="" <?php echo ($p->pekerjaan) == '' ? "selected" : ""; ?>></option>
                                                    <option value="Pelajar/Mahasiswa" <?php echo ($p->pekerjaan) == 'Pelajar/Mahasiswa' ? "selected" : ""; ?>>Pelajar/Mahasiswa</option>
                                                    <option value="Swasta" <?php echo ($p->pekerjaan) == 'Swasta' ? "selected" : ""; ?>>Swasta</option>
                                                    <option value="Wiraswasta" <?php echo ($p->pekerjaan) == 'Wiraswasta' ? "selected" : ""; ?>>Wiraswasta</option>
                                                    <option value="BUMN" <?php echo ($p->pekerjaan) == 'BUMN' ? "selected" : ""; ?>>BUMN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Kewarganegaraan</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label><input type="radio" name="kewarganegaraan" value="WNA" <?php echo ($p->kewarganegaraan) == 'WNA' ? "checked" : ""; ?>>WNA</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="kewarganegaraan" value="WNI" <?php echo ($p->kewarganegaraan) == 'WNI' ? "checked" : ""; ?>>WNI</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Foto</label>
                                            <div class="col-sm-10">
                                                <input type="file" accept="image/*" name="userfile" class="form-control" id="foto">
                                                <div id="image-holder">
                                                   <?php
                                                    if(isset($_GET['id']))
                                                        echo "<img src='../img/$data[2].'?rand='".rand()."' alt=''>";
                                                    ?>
                                                </div>
                                                <script>
                                                    $("#foto").on('change', function () {

                                                        //Get count of selected files
                                                        var countFiles = $(this)[0].files.length;

                                                        var imgPath = $(this)[0].value;
                                                        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                                                        var image_holder = $("#image-holder");
                                                        image_holder.empty();

                                                        var x = document.getElementById("foto");
                                                        var file = x.files[0];

                                                        if (extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "gif") {
                                                            if (typeof (FileReader) != "undefined") {

                                                                //loop for each file selected for uploaded.
                                                                for (var i = 0; i < countFiles; i++) {

                                                                    var reader = new FileReader();
                                                                    reader.onload = function (e) {
                                                                        $("<img />", {
                                                                            "src": e.target.result,
                                                                            "class": "thumb-image"
                                                                        }).appendTo(image_holder);
                                                                    }

                                                                    image_holder.show();
                                                                    reader.readAsDataURL($(this)[0].files[i]);
                                                                }

                                                            } else {
                                                                alert("This browser does not support FileReader.");
                                                            }
                                                        } else {
                                                            alert("Hanya boleh foto bertype PNG, JPG dan GIF");
                                                            var control = $("#foto");
                                                            control.replaceWith(control.val('').clone(true));
                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="main-footer">
                    <strong>Copyright &copy; 2017. Reni Andayani - SI B2. All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>
        <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
    </body>
    </html>
    