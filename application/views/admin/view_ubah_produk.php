<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Capricorn Roller</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'gentelella/'?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'gentelella/'?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url().'gentelella/'?>vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'gentelella/'?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Capricorn System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-tasks"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="<?php echo site_url('produk/index')?>">Data Produk</a></li>
                      <li><a href="<?php echo site_url('promosi/index')?>">Data Promosi</a></li>
                      <li><a href="<?php echo site_url('stok/index')?>">Data Stok Produk</a></li>
                      <li><a href="<?php echo site_url('kategori_produk/index')?>">Data Kategori Produk</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Pelaporan Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="<?php echo site_url('laporan_data_produk/index')?>">Pelaporan Data Produk</a></li>
                      <li><a href="<?php echo site_url('laporan_data_promosi/index')?>">Pelaporan Data Promosi</a></li>
                      <li><a href="<?php echo site_url('laporan_data_stok/index')?>">Pelaporan Data Stok Produk</a></li>
                    </ul>
                  </li>
                 <li><a href="<?php echo site_url('pengguna/index')?>"><i class="fa fa-users"></i> Manajemen Pengguna </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'gentelella/production/'?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Master</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Ubah Produk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <?php echo validation_errors(); ?>
                    <?php foreach($edit_produk as $produk){?>
                      <form action="<?php echo base_url(). 'index.php/produk/update_produk'; ?>" method="post">
                       <table class="table table-striped" height="450px">
                         <tr>
                          <td>
                            <div class=form-group-row>
                              <label for="example-text-input" class="col-xs-2 col-form-label">Nama Produk</label>
                                  <div class="col-xs-10">
                                      <div class="right-inner-addon">
                                      <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>">
                                     <input type="text" name="nama_produk" placeholder="Masukkan nama produk" class="form-control" value="<?php echo $produk->nama_produk?>" required>
                                  </div>
                                </div>
                            </div>
                          </td>
                        </tr>
                         <tr>
                          <td>
                            <div class="form-group-row">
                               <label for="example-text-input" class="col-xs-2 col-form-label">Harga Produk</label>
                                <div class="col-xs-10">
                                  <div class="right-inner-addon">
                                   <input type="number" name="harga_produk" class="form-control" placeholder="Masukkan harga produk" value="<?php echo $produk->harga_produk?>" required>
                               </div> 
                              </div>
                            </div>
                            </td>
                         </tr>
                         <tr>
                          <td>
                            <div class="form-group-row">
                               <label for="example-text-input" class="col-xs-2 col-form-label">Deskripsi Produk</label>
                                <div class="col-xs-10">
                                  <div class="right-inner-addon">
                                   <input type="text" name="deskripsi_produk" class="form-control" placeholder="Masukkan deskripsi produk" value="<?php echo $produk->deskripsi_produk?>" required>
                               </div> 
                              </div>
                            </div>
                            </td>
                         </tr>
                            <tr>
                            <td>
                              <label for="example-text-input" class="col-xs-2 col-form-label" required>Nama Promosi</label>
                              <div class="col-xs-10">
                                  <div class="form-group">
                                        <select class="selectpicker form-control" name="id_promosi" required>
                                        <?php 
                                            foreach ($promosi as $key) { ?>
                                              <option value='<?php echo $key->id_promosi?>'><?php echo $key->nama_promosi?></option>
                          
                                          <?php
                                            }

                                          ?>
                                        </select>
                                  </div>
                              </div>
                            </td>
                           </tr>
                           <tr>
                            <td>
                              <label for="example-text-input" class="col-xs-2 col-form-label" required>Nama Kategori Produk</label>
                              <div class="col-xs-10">
                                  <div class="form-group">
                                        <select class="selectpicker form-control" name="id_kategori_produk" required>
                                        <?php 
                                            foreach ($kategori as $key) { ?>
                                              <option value='<?php echo $key->id_kategori_produk?>'><?php echo $key->nama_kategori_produk?></option>
                          
                                          <?php
                                            }

                                          ?>
                                        </select>
                                  </div>
                              </div>
                            </td>
                           </tr>
                       </div>
                     </div>
                   </div>
                         <tr>
                          <td>
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <button type="reset" class="btn btn-default">Batal</button>
                          </div>
                          </td>
                         </tr>
                       </div>
                       </table>
                     </form>
                     <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->
    
    

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'gentelella/'?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'gentelella/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'gentelella/'?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'gentelella/'?>vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'gentelella/'?>build/js/custom.min.js"></script>
  </body>
</html>
