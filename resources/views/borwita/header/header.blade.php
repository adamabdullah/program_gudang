<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Kasir</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="_token" content="{!! csrf_token() !!}" />
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/easyui/themes/default/easyui-custom.css">
  <link rel="stylesheet" type="text/css" href="/easyui/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="/css/app2.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="/easyui/jquery.easyui.min.js"></script>
    <script src="/easyui/plugins/datagrid-filter.js"></script>
<script src="/easyui/plugins/datagrid-groupview.js"></script>
<script src="/easyui/plugins/datagrid-cellediting.js"></script>
    <script src="/easyui/plugins/datagrid-detailview.js"></script>
    <script src="/js/Chart.min.js"></script>
    <script src="/js/moment-with-locales.min.js"></script>
    <!-- <script src="/js/default.js'"></script> -->
	<!-- <script src="/js/app.js'"></script> -->
    </head>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 header">
                    <!-- @if($jabatan_session == 'administrator') -->
                     <a href="#" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-help'">Master</a>
                    <a href="#" class="easyui-menubutton" data-options="menu:'#mm3',iconCls:'icon-help'">Transaksi</a>
                    <a href="#" class="easyui-menubutton" data-options="menu:'#mm4',iconCls:'icon-help'">Laporan</a>
                    <!-- @elseif($jabatan_session =='logistik' ||$jabatan_session =='fakturis') -->
                    <!-- <a href="#" class="easyui-menubutton" data-options="menu:'#mm3',iconCls:'icon-help'">Transaksi</a>
                    <a href="#" class="easyui-menubutton" data-options="menu:'#mm4',iconCls:'icon-help'">Laporan</a> -->
                    <!-- @endif -->

                    <a href="http://localhost:8000/hapus_session" style=" position: relative; float: right;">Logout</a>
                </div>
            </div>
        </div>
    </div>

                <!-- <div class="container-fluid">
                <div class="row">
                    <h3 align="center" id="nama_menu">Kasir PT. Kencana Muda</h3>


                </div>
            </div> -->
     
    <!-- @if($jabatan_session == 'administrator') -->
        <div id="mm2" style="width:100px;">
            <div id='master_user_tombol'>Master User</div>
            <div id='master_pelanggan_tombol'>Master Pelanggan</div>
            <div id='master_barang_tombol'>Master Barang</div>
            <div id='master_supplier_tombol'>Master Supplier</div>
        </div>
        <div id="mm3" style="width:100px;">
            <div id='pembelian_tombol'>Pembelian</div>
            <div  id='penjualan_tombol'>Penjualan</div>
        </div>
        <div id="mm4" style="width:100px;">
            <div id='forecasting'>Forecasting</div>
        </div>
    <!-- @elseif($jabatan_session =='logistik')
        <div id="mm3" style="width:100px;">
            <div id='pembelian_tombol'>Pembelian</div>
        </div>
        <div id="mm4" style="width:100px;">
            <div>Mutasi Stok</div>
        </div>
    @elseif($jabatan_session =='fakturis')
     <div id="mm3" style="width:100px;">
            <div>Penjualan</div>
        </div>
        <div id="mm4" style="width:100px;">
            <div>Mutasi Stok</div>
        </div>
    @endif -->
    
