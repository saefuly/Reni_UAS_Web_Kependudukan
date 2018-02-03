
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

        <!--jquery-->
        <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/summernote.css">
        <script src="<?=base_url()?>assets/dist/js/summernote.js"></script>

    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Administrator</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>

                    </a> 

                    <a href="<?=base_url()?>user/user_logout" class="sidebar-toggle" style="float:right;">
                        Logout
                    </a>                  
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include'menu.php'; ?>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <div class="jumbotron jumbotron-fluid">
					  <div class="container">
						<h1 class="display-3">Selamat Datang!</h1>
						<p class="lead">Ini adalah halaman untuk memanage data kependudukan.</p>
					  </div>
					</div>
                   
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <strong>Copyright &copy; 2017. Reni Andayani - SI B2. All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- Bootstrap 3.3.5 -->
        <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.konten').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'hr']],
                        ['view', ['fullscreen', 'codeview']]
                    ],
                    
					onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        setTimeout(function () {
                            document.execCommand('insertText', false, bufferText);
                        }, 10);
					 }
					
					
					
                });
				
				
            });
        </script>
        <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?=base_url()?>assets/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?=base_url()?>assets/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?=base_url()?>assets/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
    </body>
    </html>