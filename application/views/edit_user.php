

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
                                    <h3 class="box-title">Form Edit Data User</h3>
                                </div>
                                <?php foreach($user as $u){ ?>
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>user/update_user">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">User Id</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="User Id" name="user_id" id="tiga" value="<?php echo $u->user_id ?>" maxlength="16" pattern="[0-9]{16}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="user_name" id="tiga" value="<?php echo $u->user_name ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">E-mail</label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control" placeholder="E-mail" name="user_email" id="tiga" value="<?php echo $u->user_email ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control" placeholder="Password" name="user_password" id="tiga" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">Umur</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Umur" name="user_age" id="tiga" value="<?php echo $u->user_age ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiga" class="col-sm-2 control-label">No. Telfon</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="No. Telfon" name="user_mobile" id="tiga" value="<?php echo $u->user_mobile ?>" required>
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
    