<?php
/*
 * Aplikasi AKSIOMA (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0
 * Copyright (c) 2014
 *
 * file   : base/jaminan.php
 * author : Edi Suwoto S.Komp
 * email  : edi.suwoto@gmail.com
 */
/*----------------------------------------------------------*/
?>
 <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>BMT</title>
    <link rel="icon" href="../assets/images/favicon.png" type="image/jpg" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/style-responsive.css" rel="stylesheet" />
	<link href="../assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="../assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="../assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="../assets/plugins/chosen-bootstrap/chosen/chosen.css" />
    
    <script src="../assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>	
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	
	<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>		
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="../assets/plugins/excanvas.js"></script>
	<script src="../assets/plugins/respond.js"></script>	
	<![endif]-->	
	<script src="../assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>	
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../assets/plugins/jquery.blockui.js" type="text/javascript"></script>	
	<script src="../assets/plugins/jquery.cookie.js" type="text/javascript"></script>
	<script src="../assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>	
	<script src="../assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="../assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="../assets/plugins/jquery.peity.min.js" type="text/javascript"></script>	
	<script src="../assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>	
    <script type="text/javascript" src="../assets/js/jq/jquery.jclock.js"></script>
    
   <script type="text/javascript" src="../assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="../assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   <script type="text/javascript" src="../assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
   
   <script type="text/javascript" src="../assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/jquery.pulsate.min.js"></script>
	<script type="text/javascript" src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="../assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   
    <script src="../assets/scripts/app.js" type="text/javascript"></script>
	<script src="../assets/scripts/form-components.js"></script>     
   <script src="../assets/scripts/form-wizard.js"></script> 
   <script src="../assets/scripts/ui-general.js"></script>
   <script src="../assets/scripts/form-validationjaminan.js"></script> 
	<script>
		jQuery(document).ready(function() {		
			App.init(); // initlayout and core plugins
            FormComponents.init();
            FormWizard.init();
            UIGeneral.init();
            FormValidation.init();
		});
	</script>
    <?php $this -> load -> view( 'header' );?>
    <link rel="stylesheet" href="assets/css/autocomplete.css" type="text/css" media="screen" />
    <script type="text/javascript" src="assets/js/base/jaminan.js"></script>
    <script type="text/javascript" src="assets/js/jq/jquery.autocomplete.js"></script>
    
</head>
<body class="fixed-top">
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="."><img src="assets/img/logoc.png" alt="MES"/></a>
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          			
				<div class="top-nav">
					<span class="jclock"></span>				
					<ul class="nav pull-right" id="top_menu">
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="profile" class="logut"><i class="icon-user"></i> Profile</a></li>
								<li><a href="auth/logout" class="logut"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse">
			<div class="sidebar-toggler hidden-phone"></div>     	
			<?php foreach($menunya as $item) {echo $item;}?>
		</div>
		<div id="body">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">		
						<h3 class="page-title">
							Base
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="..">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Base</a></li>
						</ul>
					</div>
				</div>
				<div id="page" class="dashboard">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="tabbable tabbable-custom boxless">
                                <ul class="nav nav-tabs">
                                   <li class="active"><a href="#tabs-1" data-toggle="tab">Data Jaminan</a></li>
                                   <li><a href="#tabs-2" data-toggle="tab">Jaminan Baru</a></li>
                                   <li><a href="#tabs-3" data-toggle="tab">Search Pembiayaan</a></li>
                                   <li><a href="#tabs-4" data-toggle="tab">Search Rekening Tabungan</a></li>
                                   <li><a href="#tabs-5" data-toggle="tab">Search Rekening Deposito</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Data Jaminan</h4>
                                            </div>
                                            <div id="table_datajaminan">
                                                <?php
                                                $jaminan['option'][] = array("nama","Nama Nasabah"); // value,title
                                                $jaminan['tombol'] = '<button id="addjaminan" class="fg-button ui-state-default ui-corner-all"><img src="assets/images/addicon.png" />Tambah jaminan</button>';
                                                $jaminan['tabel_head'][] = array("","5%","No"); // id,width,title
                                                $jaminan['tabel_head'][] = array("nomor_jaminan","12%","Nomor Jaminan");
                                                $jaminan['tabel_head'][] = array("nomor_rekening","12%","Nomor Rekening");
                                                $jaminan['tabel_head'][] = array("","20%","Nama Nasabah");
                                                $jaminan['tabel_head'][] = array("","25%","Jenis Jaminan");
                                                $jaminan['tabel_head'][] = array("","10%","Nilai Jaminan");
                                                $jaminan['tabel_head'][] = array("","5%","Manage");
                                                $jaminan['tabel_head'][] = array("jaminan_id","5%","ID");
                                                $this -> load -> view( 'filter_layout',$jaminan );
                                                $this -> load -> view( 'table_layout',$jaminan );
                                                $this -> load -> view( 'paging_layout',$jaminan );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2">
                                        <div class="widget-body form">
                                            <form action="#" id="form_jamin" class="form-horizontal">
                                               <div class="alert alert-error hide">
                                                  <button class="close" data-dismiss="alert">??</button>
                                                  You have some form errors. Please check below.
                                               </div>
                                               <div class="alert alert-success hide">
                                                  <button class="close" data-dismiss="alert">??</button>
                                                  Your form validation is successful!
                                               </div>
                                               <div class="control-group">
                                                    <label class="control-label">No. Jaminan<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nomor_jaminan" type="text" class="input-large" readonly>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Cari Nama Nasabah<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nama" type="text" class="input-large">
                                                        <input name="nomor_rekening" type="hidden" class="input-large"> <a class="btn searchnasabah"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label"></label>
                                                    <div class="controls">
                                                        <input type="text" name="alamat" disabled="" placeholder="Alamat..." class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label"></label>
                                                    <div class="controls">
                                                        <input type="text" name="kota" disabled="" placeholder="Kota..." class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Jenis Jaminan</label>
                                                    <div class="controls">
                                                        <select class="input-xlarge" name="Jenis_jaminan">
                                                             <option value="">--------------------------</option>
                                                             <option value="01">TABUNGAN</option>
                                                            <option value="02">DEPOSITO</option>
                                                            <option value="03">PERHIASAN EMAS DAN LOGAM MULIA</option>
                                                            <option value="04">TANAH DAN BANGUNAN</option>
                                                            <option value="05">KENDARAAN BERMOTOR</option>
                                                             <option value="06">DAN LAIN - LAIN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Rekening Tabungan/Deposito</label>
                                                    <div class="controls">
                                                        <input name="rekening_tab_deposito" type="text" class="input-large"> <a class="btn searchrek"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Pemilik</label>
                                                    <div class="controls">
                                                        <input name="pemilik" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">No. Rek/BPKB/Sert.</label>
                                                    <div class="controls">
                                                        <input name="no_rek_bpkb_sert" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">STNK/HGB</label>
                                                    <div class="controls">
                                                        <input name="stnk_hgb" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Luas Tanah</label>
                                                    <div class="controls">
                                                        <input name="luas_tanah" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Lain - lain</label>
                                                    <div class="controls">
                                                        <input name="lain_lain" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Nilai Jaminan<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nilai_jaminan" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Inspeksi Terakhir</label>
                                                    <div class="controls">
                                                        <input name="inspeksi_terakhir" type="text" size="16" class="m-wrap m-ctrl-medium date-picker">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Oleh</label>
                                                    <div class="controls">
                                                        <input name="inspeksi_oleh" type="text" class="input-large"> 
                                                    </div>
                                                </div>
                                                <div id="info_nisbah" class="control-group">
                                                    <label class="control-label">Keterangan</label>
                                                    <div class="controls">
                                                        <textarea name="keterangan" rows="3" class="input-large"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Nasabah</h4>
                                            </div>
                                            <div id="table_datanasabah">
                                                <?php
                                                $nasabah['option'][] = array("nama","Nama"); // value,title
                                                $nasabah['option'][] = array("nomor_rekening","Nomor"); // value,title
                                                $nasabah['tombol'] = false;
                                                $nasabah['tabel_head'][] = array("","5%","No"); // id,width,title
                                                $nasabah['tabel_head'][] = array("nomor_rekening","12%","Nomor Rekening");
                                                $nasabah['tabel_head'][] = array("","15%","Jumlah");
                                                $nasabah['tabel_head'][] = array("","20%","Nama nasabah");
                                                $nasabah['tabel_head'][] = array("","25%","Alamat");
                                                $nasabah['tabel_head'][] = array("","5%","Manage");
                                                $nasabah['tabel_head'][] = array("nasabah_id","5%","ID");
                                                $this -> load -> view( 'filter_layout',$nasabah );
                                                $this -> load -> view( 'table_layout',$nasabah );
                                                $this -> load -> view( 'paging_layout',$nasabah );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-4">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Rekening Tabungan</h4>
                                            </div>
                                            <div id="table_datatabungan">
                                                <?php
                                                $tabungan['option'][] = array("nama","Nama Nasabah"); // value,title
                                                $tabungan['option'][] = array("nomor_rekening","Nomor Rekening"); // value,title
                                                $tabungan['tabel_head'][] = array("","5%","No"); // id,width,title
                                                $tabungan['tabel_head'][] = array("nomor_nasabah","12%","Nomor Rekening");
                                                $tabungan['tabel_head'][] = array("","20%","Nama nasabah");
                                                $tabungan['tabel_head'][] = array("","25%","Alamat");
                                                $tabungan['tabel_head'][] = array("","10%","Kota");
                                                $tabungan['tabel_head'][] = array("","5%","Manage");
                                                $tabungan['tabel_head'][] = array("nasabah_id","5%","ID");
                                                $this -> load -> view( 'filter_layout',$tabungan );
                                                $this -> load -> view( 'table_layout',$tabungan );
                                                $this -> load -> view( 'paging_layout',$tabungan );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-5">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Rekening Deposito</h4>
                                            </div>
                                            <div id="table_deposito">
                                                <?php
                                                $deposito['option'][] = array("nama","Nama Nasabah"); // value,title
                                                $deposito['option'][] = array("nomor_rekening","Nomor Rekening"); // value,title
                                                $deposito['tabel_head'][] = array("","5%","No"); // id,width,title
                                                $deposito['tabel_head'][] = array("nomor_nasabah","10%","No. Rekening");
                                                $deposito['tabel_head'][] = array("","18%","Nama nasabah");
                                                $deposito['tabel_head'][] = array("","20%","Produk deposito");
                                                $deposito['tabel_head'][] = array("","15%","Nominal");
                                                $deposito['tabel_head'][] = array("","10%","Jatuh tempo");
                                                $deposito['tabel_head'][] = array("","5%","Manage");
                                                $deposito['tabel_head'][] = array("deposito_id","5%","ID");
                                                $this -> load -> view( 'filter_layout',$deposito );
                                                $this -> load -> view( 'table_layout',$deposito );
                                                $this -> load -> view( 'paging_layout',$deposito );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div id="footer">
		<br>Keuangan Syariah  oleh <img src="assets/img/logoc.png" alt="pegadaian" class="center" />
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
</body>
</html>
