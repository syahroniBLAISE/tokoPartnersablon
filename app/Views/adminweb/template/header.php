<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />      
 <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
  
 <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
  
  <link rel="stylesheet" type="text/css" href="/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
  <link rel="stylesheet" type="text/css" href="/assets/plugins/select2/select2_metro.css" />
  <link rel="stylesheet" type="text/css" href="/assets/plugins/clockface/css/clockface.css" />
  <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
  
  <link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
  <link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
  
  <link rel="stylesheet" type="text/css" href="/assets/plugins/select2/select2_metro.css" />
  <link rel="stylesheet" href="/assets/plugins/data-tables/DT_bootstrap.css" />

  <link href="/assets/css/pages/inbox.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
<style>
 .adminLogo{
    width: 50%; 
  }
</style>

  <!-- END PAGE LEVEL STYLES -->
  <link rel="shortcut icon" href="favicon.ico" />

  <script src="/assets/scripts/jquery-1.8.3.js"></script>  
</head>
<body class="page-header-fixed">
  <!-- BEGIN HEADER -->   
  <div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
      <div class="container-fluid">
        <!-- BEGIN LOGO -->
        <a class="brand" href="/adminToko/home">
          <?php
          // var_dump($logo);
          // die;
          // $query = $this->db->query("select * from tbl_logo");
          // foreach ($query->result_array() as $value) {
            // $logo = $logo['gambar'];
          // }
          ?>
        <img class='adminLogo' src="/images/logo/<?php echo $logo['gambar'];?>" alt="logo" />
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img  src="/assets/img/menu-toggler.png" alt="" />
        </a>          
        <!-- END RESPONSIVE MENU TOGGLER -->            
        <!-- BEGIN TOP NAVIGATION MENU -->              
        <ul class="nav pull-right">
          
        <li class="dropdown" id="header_inbox_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-envelope"></i>
            <?php
            // $query = $this->db->query("select count(status) as stts from tbl_hubungikami where status='0'");
            // foreach ($query->result_array() as $tampil) {
              $status = $status['stts'];
            // }
            ?>
            <?php
            if ($status!="0") { ?>
            <span class="badge"><?php echo $status;?></span>  
            <?php
            }
            else { ?>
              <span class="badge"></span> 
            <?php
            }
            ?>
            
            </a>
            <ul class="dropdown-menu extended inbox">
             
              <li class="external">
                <a href="/adminToko/buku_tamu">See all messages <i class="m-icon-swapright"></i></a>
              </li>
            </ul>
          </li>

          <li class="dropdown" id="header_inbox_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-globe"></i>
            <?php
            // $query = $this->db->query("select count(status) as stts from tbl_transaksi_header where status='0'");
            // foreach ($query->result_array() as $tampil) {
            //   $status = $tampil['stts'];
            // }
            ?>
            <?php
            if ($status!="0") { ?>
            <span class="badge"><?php echo $status_transaksi['stts'];?></span>  
            <?php
            }
            else { ?>
              <span class="badge"></span> 
            <?php
            }
            ?>
            
            </a>
            <ul class="dropdown-menu extended inbox">
             
              <li class="external">
                <a href="/adminToko/transaksi">See all Transaksi <i class="m-icon-swapright"></i></a>
              </li>
            </ul>
          </li>
                     
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" src="/assets/img/avatar_small.png" />
              <span class="username"><?php 
              // echo $this->session->userdata('nama_admin');
              ?></span>
            <i class="icon-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
              <li class="divider"></li> -->
              <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
              <li><a href="/adminToko/logout"><i class="icon-key"></i> Log Out</a></li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU --> 
      </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
  </div>
  <!-- END HEADER -->
  <!-- BEGIN CONTAINER -->
  <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
      <!-- BEGIN SIDEBAR MENU -->        
      <ul class="page-sidebar-menu">
        
        <li class="start active">
          <a href="/adminToko/home">
          <i class="icon-home"></i> 
          <span class="title">Dashboard</span>
          <span class="selected"></span>
          </a>
        </li>

         <li >
          <a href="javascript:;">
          <i class="icon-bookmark-empty"></i> 
          <span class="title">Transaksi</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
             <li >
              <a href="/adminToko/transaksi">
              Transaksi Belum Diproses</a>
            </li>
            <li >
              <a href="/adminToko/semua_transaksi">
              Transaksi Sudah DiProses</a>
            </li>
            
            
          </ul>
        </li>
        
        <li >
          <a href="javascript:;">
          <i class="icon-bookmark-empty"></i> 
          <span class="title">Produk</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
             <li >
              <a href="/adminToko/brand">
              Brand</a>
            </li>
            <li >
              <a href="/adminToko/kategori">
              Kategori</a>
            </li>
             <li >
              <a href="/adminToko/produk">
              Produk</a>
            </li>
           
            
          </ul>
        </li>

        <!-- <li >
          <a href="javascript:;">
          <i class="icon-bookmark-empty"></i> 
          <span class="title">Gallery</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
            <li >
              <a href="/adminToko/kategorigaleri">
              Album</a>
            </li>
            <li >
              <a href="/adminToko/galeri">
              Gallery</a>
            </li>
            
          </ul>
        </li> -->
        
        <li>
          <a class="active" href="javascript:;">
          <i class="icon-sitemap"></i> 
          <span class="title">Setting</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="/adminToko/tentangkami">
              Tentang Kami
              </a>
            </li>
            <li>
              <a href="/adminToko/carabelanja">
              Cara Belanja
              </a>
            </li>
            <!--  <li>
              <a href="/adminToko/sambutan">
              Sambutan
              </a>
            </li> -->
            <li>
              <a href="/adminToko/slider">
              Slider
              </a>
            </li>
            <li>
              <a href="/adminToko/kontak">
              Contact
              </a>
            </li>
            <li>
              <a href="/adminToko/logo">
              Logo
              </a>
            </li>
            <li>
              <a href="/adminToko/sosial_media">
              Sosial Media
              </a>
            </li>
            <li>
              <a href="/adminToko/seo">
              Seo
              </a>
            </li>
            <li>
              <a href="/adminToko/kota">
              Kota
              </a>
            </li>
             <li>
              <a href="/adminToko/bank">
              Bank
              </a>
            </li>
            <li>
              <a href="/adminToko/jasapengiriman">
              Jasa Pengiriman
              </a>
            </li>
            <li>
              <a href="/adminToko/admin">
              Admin
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a class="active" href="javascript:;">
            <i class="icon-sitemap"></i> 
            <span class="title">Set Home</span>
            <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
            <li><a href="/adminHome/services">Services</a></li>
            <li><a href="/adminHome/produkGalery">Produk Galery</a></li>
            <li><a href="/adminHome/tanyaJawab">Tanya Jawab</a></li>
          </ul>
        </li>
        
        
        
        
        
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div id="portlet-config" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button"></button>
          <h3>Widget Settings</h3>
        </div>
        <div class="modal-body">
          Widget settings form goes here
        </div>
      </div>
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
          <div class="span12">
               





            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
              Dashboard
            </h3>
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="/adminToko/home">Home</a> 
                <i class="icon-angle-right"></i>
              </li>
             <!--  <li><a href="#">Dashboard</a></li> -->
              <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                  <i class="icon-calendar"></i>
                  <span></span>
                  <i class="icon-angle-down"></i>
                </div>
              </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
          </div>
        </div>
        <!-- END PAGE HEADER-->
        <div id="dashboard">
          
          
            
          <?php 
          // echo 'ok';
        //   echo $contents; ?> 
          
          
         