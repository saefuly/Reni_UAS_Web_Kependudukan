
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


    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">List Data User</h3>
                            </div>
                            <div class="box-body">
                                <table width="100%" border='1'>
                                    <thead>
                                       
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($user as $u) {
                                                echo "<tr>
                                                <td>$u->nik</td>
                                                <td>$u->nama_lengkap</td>
                                                <td><img src='http://localhost/DATA_PENDUDUK_REAL/images/".$u->foto_wajah."' width='100' height='100'></td>
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
        </div>
  
    </body>
    </html>










