
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
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List Data User</h3>
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan='5' align='right'><input type='button' class="btn btn-success pull-right" value='Export PDF' onclick="window.open('http://localhost/DATA_PENDUDUK_REAL/index.php/export_pdf/cetakpdf');"/></th>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Umur (Th)</th>
                                                <th>Nomor HP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach ($user as $u) {
                                                echo "<tr>
                                                <td>$u->user_name</td>
                                                <td>$u->user_email</td>
                                                <td>$u->user_age</td>
                                                <td>$u->user_mobile</td>
                                                <td><a href='".base_url()."user/edit_user/".$u->user_id."'><input type='button' class='btn btn-warning' value='Edit'></a> <a href='".base_url()."user/hapus_user/".$u->user_id."'><input type='button' class='btn btn-danger' value='Delete'></a></td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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










