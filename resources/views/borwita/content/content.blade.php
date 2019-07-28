		<div id="page-content" >
            <!-- panel-supplier-user -->
            <!-- group-supplier-form -->
            <!-- supplier_rahasia -->
             <div style="width:50%; padding-top: 15px" id="panel-supplier-user">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                        <form id="group-supplier-form" class="easyui-form" method="post" data-options="novalidate:true">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                               <input type="hidden" name="supplier_rahasia" id="supplier_rahasia"></input>
                            <div class="form-group">
                                <label for="" class="col-sm-4">Kode<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="kode_supplier_master" class="easyui-textbox" name="kode_supplier" style="width:350px;" data-options="required:true,prompt:'Kode'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Nama <font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="nama_supplier" id="nama_supplier" style="width:350px;"  data-options="required:true, prompt:'Nama'"/>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">No. Telp <font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="no_telp_supplier" id="no_telp_supplier" style="width:350px;"  data-options="required:true, prompt:'No. Telp'"/>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Alamat<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="alamat_supplier" class="easyui-textbox" name="alamat_supplier" style="width:350px;" data-options="required:true,prompt:'Alamat'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <div style="text-align:right;padding:5px 0">
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_supplier()" style="width:80px">Simpan</a>
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                        </div>
                    </div>
            </div>

            <!-- group-user-form -->
            <!-- panel-group-user -->
            <!-- username_rahasia -->
            <div style="width:50%; padding-top: 15px" id="panel-group-user">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                    <form id="group-user-form" class="easyui-form" method="post" data-options="novalidate:true">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                            <input type="hidden" name="username_rahasia" id="username_rahasia" ></input>
                        <div class="form-group">
                            <label for="" class="col-sm-4">Username <font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input class="easyui-textbox" name="username_form" id="username_form" style="width:350px;"  data-options="required:true, prompt:'Username'"/>
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-4">Password<font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input id="password_form" class="easyui-passwordbox" name="password_form" style="width:350px;" data-options="required:true,prompt:'Password'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                            <div class="form-group">
                            <label for="" class="col-sm-4">Jabatan<font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input id="jabatan_form" class="easyui-combobox" name="jabatan_form" style="width:350px;" data-options="required:true,prompt:'Jabatan'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div style="text-align:right;padding:5px 0">
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_user()" style="width:80px">Simpan</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                    </div>
                </div>
            </div>
            <!-- group-pelanggan-form -->
            <!-- panel-group-pelanggan -->
            <!-- kode_pelanggan_rahasia -->
            <div style="width:50%; padding-top: 15px" id="panel-group-pelanggan">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                        <form id="group-pelanggan-form" class="easyui-form" method="post" data-options="novalidate:true">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                               <input type="hidden" name="kode_pelanggan_rahasia" id="kode_pelanggan_rahasia" ></input>
                            <div class="form-group">
                                <label for="" class="col-sm-4">Kode <font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="kode_form" id="kode_form" style="width:350px;"  data-options="required:true, prompt:'Kode'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Nama Pelanggan<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="nama_pelanggan" class="easyui-textbox" name="nama_pelanggan" style="width:350px;" data-options="required:true,prompt:'Nama Pelanggan'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">No. Telp Pelanggan<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="no_telp_pelanggan" class="easyui-textbox" name="no_telp_pelanggan" style="width:350px;" data-options="required:true,prompt:'No. Telp Pelanggan'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Alamat Pelanggan<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="alamat_pelanggan" class="easyui-textbox" name="alamat_pelanggan" style="width:350px;" data-options="required:true,prompt:'Alamat Pelanggan'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <div style="text-align:right;padding:5px 0">
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_pelanggan()" style="width:80px">Simpan</a>
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                        </div>
                    </div>
            </div>
            <!-- group-barang-form -->
            <!-- panel-group-barang -->
            <!-- kode_barang_rahasia -->
            <div style="width:50%; padding-top: 15px" id="panel-group-barang">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                        <form id="group-barang-form" class="easyui-form" method="post" data-options="novalidate:true">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                               <input type="hidden" name="kode_barang_rahasia" id="kode_barang_rahasia" ></input>
                            <div class="form-group">
                                <label for="" class="col-sm-4">Kode <font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="kode_barang" id="kode_barang" style="width:350px;"  data-options="required:true, prompt:'Kode'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Nama Barang<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="nama_barang" class="easyui-textbox" name="nama_barang" style="width:350px;" data-options="required:true,prompt:'Nama Barang'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Deskripsi Barang<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="deskripsi_barang" class="easyui-textbox" name="deskripsi_barang" style="width:350px;" data-options="required:true,prompt:'Deskripsi Barang'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Harga Satuan<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="harga_satuan" class="easyui-textbox" name="harga_satuan" style="width:350px;" data-options="required:true,prompt:'Harga Satuan'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                             <div class="form-group">
                                <label for="" class="col-sm-4">Stok<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="stok" class="easyui-textbox" name="stok" style="width:350px;" data-options="required:true,prompt:'Stok'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <div style="text-align:right;padding:5px 0">
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_barang()" style="width:80px">Simpan</a>
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                        </div>
                    </div>
            </div>
            <!-- group-pembelian-form -->
            <!-- panel-group-pembelian -->
            <!-- kode_barang_pembelian -->
            <div style="width:50%; padding-top: 15px" id="panel-group-pembelian">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                        <form id="group-pembelian-form" class="easyui-form" method="post" data-options="novalidate:true">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                               <input type="hidden" name="kode_pembelian_rahasia" id="kode_barang_pembelian" ></input>
                            <div class="form-group">
                                <label for="" class="col-sm-4">Kode <font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="kode_pembelian" id="kode_pembelian" style="width:350px;"  data-options="required:true, prompt:'Kode'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Tanggal<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="tanggal" class="easyui-datebox" name="tanggal" style="width:350px;" data-options="required:true,prompt:'Tanggal'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Kode Supplier<font color=red> *</font></label>
                                <div class="col-sm-8">
                                    <input id="kode_supplier" class="easyui-combobox" name="kode_supplier" style="width:350px;" data-options="required:true,prompt:'Kode Suplier'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-4">Harga</label>
                                <div class="col-sm-8">
                                    <input id="harga_pembelian" class="easyui-textbox" name="harga" style="width:350px;" data-options="readonly:true,prompt:'Harga'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm-4">Barang<font color=red> *</font></label>
                                <label for="" class="col-sm-4">Harga Satuan<font color=red> *</font></label>
                                <label for="" class="col-sm-4">Jumlah<font color=red> *</font></label>
                               
                                <div class="col-sm-3">
                                    <input id="barang" class="easyui-combobox" name="barang" style="width:150px;" data-options="required:true,prompt:'Nama Barang'"/>
                                </div>
                                <div class = 'col-sm-1'>
                                </div>
                                <div class="col-sm-3">
                                    <input id="harga_satuan_pembelian" class="easyui-numberbox" name="harga_satuan_pembelian" style="width:150px;" data-options="readonly:true,prompt:'Harga Satuan'"/>
                                </div>
                                <div class = 'col-sm-1'>
                                </div>
                                <div class="col-sm-3">
                                    <input id="jumlah_pembelian" class="easyui-numberbox" name="jumlah" style="width:150px;" data-options="required:true,prompt:'Jumlah'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <div style="text-align:right;padding:5px 0">
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_pembelian()" style="width:80px">Simpan</a>
                            <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                        </div>
                    </div>
            </div>
            <!-- panel-group-penjualan -->
            <!-- group-penjualan-form -->
            <div style="width:50%; padding-top: 15px" id="panel-group-penjualan">
                <div class="easyui-panel"  style="width:100%;padding:30px 60px;">
                    <form id="group-penjualan-form" class="easyui-form" method="post" data-options="novalidate:true">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                            <input type="hidden" name="kode_penjualan_rahasia" id="kode_penjualan_rahasia" ></input>
                        <div class="form-group">
                            <label for="" class="col-sm-4">Kode <font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input class="easyui-textbox" name="kode_penjualan" id="kode_penjualan" style="width:350px;"  data-options="required:true, prompt:'Kode'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-4">Tanggal<font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input id="tanggal" class="easyui-datebox" name="tanggal" style="width:350px;" data-options="required:true,prompt:'Tanggal'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-4">Kode Pelanggan<font color=red> *</font></label>
                            <div class="col-sm-8">
                                <input id="kode_pelanggan" class="easyui-combobox" name="kode_pelanggan" style="width:350px;" data-options="required:true,prompt:'Kode Pelanggan'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-4">Harga</label>
                            <div class="col-sm-8">
                                <input id="harga_penjualan" class="easyui-textbox" name="harga" style="width:350px;" data-options="readonly:true,prompt:'Harga'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="col-sm-4">Barang<font color=red> *</font></label>
                            <label for="" class="col-sm-4">Harga Satuan<font color=red> *</font></label>
                            <label for="" class="col-sm-4">Jumlah<font color=red> *</font></label>
                            
                            <div class="col-sm-3">
                                <input id="barang_penjualan" class="easyui-combobox" name="barang" style="width:150px;" data-options="required:true,prompt:'Nama Barang'"/>
                            </div>
                            <div class = 'col-sm-1'>
                            </div>
                            <div class="col-sm-3">
                                <input id="harga_satuan_penjualan" class="easyui-numberbox" name="harga_satuan_penjualan" style="width:150px;" data-options="readonly:true,prompt:'Harga Satuan'"/>
                            </div>
                            <div class = 'col-sm-1'>
                            </div>
                            <div class="col-sm-3">
                                <input id="jumlah_penjualan" class="easyui-numberbox" name="jumlah" style="width:150px;" data-options="required:true,prompt:'Jumlah'"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div style="text-align:right;padding:5px 0">
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_penjualan()" style="width:80px">Simpan</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                    </div>
                </div>
            </div>

            <!-- 
                master_user_table
                master_user_tb
             -->
            <div style="width:800px; padding-top: 15px" id='master_user'>
                <table style="width:800px; padding-top: 15px" id="master_user_table" class="easyui-datagrid"></table>
                    <div  id="master_user_tb">
                        <a href="#" class="easyui-linkbutton" id="add_user" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit-user" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete-user" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox-user" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh-user" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
            <!-- 
                master_pelanggan_table 
                master_user_pelanggan
            -->
            <div style="width:800px; padding-top: 15px" id='master_pelanggan'>
                <table style="width:800px; padding-top: 15px" id="master_pelanggan_table" class="easyui-datagrid"></table>
                    <div id="master_user_pelanggan">
                        <a href="#" class="easyui-linkbutton" id="add_pelanggan" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit_pelanggan" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete_pelanggan" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox_pelanggan" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh_pelanggan" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
            <!-- 
                master_barang_table
                master_barang_tb
            -->
             <div style="width:800px; padding-top: 15px" id='master_barang'>
                <table style="width:800px; padding-top: 15px" id="master_barang_table" class="easyui-datagrid"></table>
                    <div id="master_barang_tb">
                        <a href="#" class="easyui-linkbutton" id="add_barang" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit_barang" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete_barang" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox_barang" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh_barang" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
            <!-- 
                master_pembelian_tabel 
                master_pembelian_tb
            -->
            <div style="width:800px; padding-top: 15px" id='pembelian_panel'>
                <table style="width:800px; padding-top: 15px" id="master_pembelian_tabel" class="easyui-datagrid"></table>
                    <div id="master_pembelian_tb">
                        <a href="#" class="easyui-linkbutton" id="add_pembelian" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit_pembelian" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete_pembelian" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox_pembelian" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh_pembelian" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
            <div style="width:800px; padding-top: 15px" id='penjualan_panel'>
                <table style="width:800px; padding-top: 15px" id="master_penjualan_tabel" class="easyui-datagrid"></table>
                    <div id="master_penjualan_tb">
                        <a href="#" class="easyui-linkbutton" id="add_penjualan" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit_penjualan" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete_penjualan" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox_penjualan" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh_penjualan" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
            <!-- master_supplier_tabel 
                master_supplier_tb
            -->
            <div style="width:800px; padding-top: 15px" id='supplier_panel'>
                <table style="width:800px; padding-top: 15px" id="master_supplier_tabel" class="easyui-datagrid"></table>
                    <div id="master_supplier_tb">
                        <a href="#" class="easyui-linkbutton" id="add_supplier" iconCls="icon-add" plain="true">Tambah</a>
                        <a href="#" class="easyui-linkbutton" id="edit_supplier" iconCls="icon-edit" plain="true">Ubah</a>
                        <a href="#" class="easyui-linkbutton" id="delete_supplier" iconCls="icon-remove" plain="true">Hapus</a>
                        <input class="easyui-searchbox" id="searchbox_supplier" style="width:180px" data-option="prompt:'Pencarian'">
                        <a href="#" class="easyui-linkbutton easyui-tooltip" title="Refresh" id="refresh_supplier" iconCls="icon-reload" plain="true"></a>
                    </div>  
            </div>
             
            <div style="width:800px; padding-top: 15px" id='forecasting_panel'>
                <div class="easyui-panel"  style="width:100%;padding:10px 5px;">
                    <form id="forecasting-form" class="easyui-form" method="post" data-options="novalidate:true">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                            <div class="form-group"align='center'>
                                <label for="" class="col-sm-4">Awal Data</label>
                                <div class="col-sm-8">
                                    <input class="easyui-textbox" name="awal_data" id="awal_data" style="width:350px;"  data-options="readonly:true, prompt:'Awal Data'"/>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group"align='center'>
                                <label for="" class="col-sm-4">Akhir Data</label>
                                <div class="col-sm-8">
                                    <input id="akhir_data" class="easyui-textbox" name="akhir_data" style="width:350px;" data-options="readonly:true, prompt:'Akhir Data'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <!-- <div class="form-group"align='center'>
                                <label for="" class="col-sm-4">Ramal Berapa Bulan</label>
                                <div class="col-sm-8">
                                    <input id="ramal_berapa_bulan" class="easyui-textbox" name="ramal_berapa_bulan" style="width:350px;" data-options="prompt:'Input Berapa Bulan'"/>
                                </div>
                                <div class="clearfix"></div>
                            </div> -->

                            <div class="form-group" align='center'>
                                <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="ramal()" style="width:80px">Ramal</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group"align='center' id='hasil_error' >
                                <label for="" class="col-sm-6">Moving Average</label>
                                <label for="" class="col-sm-6">Exponential Smoothing</label>
                                <div class="col-sm-6">
                                    <input id="mse_ma" class="easyui-textbox" name="mse_ma" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                <div class="col-sm-6">
                                    <input id="mse_exp" class="easyui-textbox" name="mse_exp" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                <div class="col-sm-6">
                                    <input id="mape_ma" class="easyui-textbox" name="man_ma" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                
                                <div class="col-sm-6">
                                    <input id="mape_exp" class="easyui-textbox" name="man_exp" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                <div class="col-sm-6">
                                    <input id="mad_ma" class="easyui-textbox" name="mad_ma" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                <div class="col-sm-6">
                                    <input id="mad_exp" class="easyui-textbox" name="mad_exp" style="width:350px;" data-options="readonly:true"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group" align='center' id='wadah_forecasting_tabel'>
                                <table style="width:500px; padding-top: 15px" id="forecasting_tabel" class="easyui-datagrid"></table>
                                <canvas id="forecasting_chart" width="150" height="150"></canvas>
                            </div>
                    </form>
                    <!-- <div style="text-align:right;padding:5px 0">
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group" onclick="submitForm_user()" style="width:80px">Simpan</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group" onclick="clearForm(true,false)" style="width:80px">Batal</a>
                    </div> -->
                </div>
            </div>

            <div id ='home'>
            Welcome
            </div>
            </div>
 <!-- style="max-width:500px;margin:auto;"
 kalo pengen ditaruh ke tengah
 
  -->
            
<script>

$.ajaxSetup({
    headers:
    {
        'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
    }
});

function ramal()
{
    var ramal_bulan = $("#ramal_berapa_bulan").val();
    console.log(ramal_bulan);
    $("#hasil_error").show()
    $("#wadah_forecasting_tabel").show();
    $("#forecasting_tabel").datagrid({
     url: 'http://localhost:8000/lists_penjualan_forecasting',
     queryParams :
     {
        q : 1
     },
    method :'get',
   singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
	columns: [[
		{field: 'jumlah', title: 'Jumlah Aktual', width: '40%'},
		{field: 'ramal_ma', title: 'Moving Average', width: '30%'},
        // {field: 'error_ma', title: 'Error', width: '10%'},
        // {field: 'abs_error_ma', title: 'Abs Error', width: '10%'},
        // {field: 'pangkat_error_ma', title: 'Pangkat Error', width: '10%'},
        // {field: 'persen_error_ma', title: 'Persen Error', width: '20%'},
        // {field: '', title: '       ', width: '10%'},
        {field: 'ramal_exp', title: 'Exponential Smoothing', width: '30%'},
        // {field: 'error_exp', title: 'Error', width: '10%'},
        // {field: 'abs_error_exp', title: 'Abs Error', width: '10%'},
        // {field: 'pangkat_error_exp', title: 'Pangkat Error', width: '10%'},
        // {field: 'persen_error_exp', title: 'Persen Error', width: '20%'}
	    ]]
    }).datagrid('autoSizeColumn');

    var fore_baru = $("#forecasting_tabel").datagrid('getRows');
    console.log(fore_baru,'fore_baru');
    var moving_average = [];
    var exponential_smoothing = [];
    var aktual = [];
    var tanggal = [];
    var mse_exp = 0;
    var sum_abs_error_exp = 0;
    var lenght_abs_error_exp = 0;

    var mse_ma = 0;
    var sum_abs_error_ma = 0;
    var lenght_abs_error_ma = 0;

    var mad_ma = 0;
    var sum_error_2_ma = 0;
    var lenght_error_2_ma = 0;

    var mad_exp = 0;
    var sum_error_2_exp = 0;
    var lenght_error_2_exp = 0;

    var mape_exp = 0;
    var sum_error_persen_exp = 0;

    var mape_ma = 0;
    var sum_error_persen_ma = 0;
    $.each(fore_baru, function( key, value ) {
        moving_average[key] = value.ramal_ma;
        exponential_smoothing[key] = value.ramal_exp;
        aktual[key] = value.jumlah;
        tanggal[key]=value.tanggal_penjualan;
        //untuk mencari nama object didalam array
        if(value.hasOwnProperty('abs_error_exp'))
        {
            sum_abs_error_exp = sum_abs_error_exp + value.abs_error_exp;
            
            lenght_abs_error_exp++;
        }

        if(value.hasOwnProperty('abs_error_ma'))
        {
            sum_abs_error_ma =sum_abs_error_ma + value.abs_error_ma;
            
            lenght_abs_error_ma++;
        }

        if (value.hasOwnProperty('pangkat_error_ma')) {
            sum_error_2_ma = sum_error_2_ma + value.pangkat_error_ma;
            lenght_error_2_ma++;
        }

        if (value.hasOwnProperty('pangkat_error_exp')) {
            sum_error_2_exp = parseFloat(sum_error_2_exp) + parseFloat(value.pangkat_error_exp);
            lenght_error_2_exp++;
        }

        if (value.hasOwnProperty('persen_error_exp')) {
            sum_error_persen_exp = parseFloat(sum_error_persen_exp) + parseFloat(value.persen_error_exp);
        }

        if (value.hasOwnProperty('persen_error_ma')) {
            sum_error_persen_ma = parseFloat(sum_error_persen_ma) + parseFloat(value.persen_error_ma);
        }

    });
    // console.log(lenght_abs_error_exp,'lenght_abs_error_exp');
    // console.log(sum_abs_error_exp,'sum_abs_error_exp');
    // console.log(sum_error_2_ma);
    mse_exp = parseFloat(sum_error_2_exp)/parseFloat(lenght_abs_error_exp);
    mse_ma = parseFloat(sum_error_2_ma)/parseFloat(lenght_abs_error_ma);

    mad_ma = parseFloat(sum_abs_error_ma)/parseFloat(lenght_abs_error_ma);
    mad_exp = parseFloat(sum_abs_error_exp) /parseFloat(lenght_abs_error_exp);
    
   

    mape_exp = parseFloat(sum_error_persen_exp) / parseFloat(lenght_error_2_exp);
    mape_ma = parseFloat(sum_error_persen_ma) / parseFloat(lenght_error_2_ma);
    var hasil_pembulatan_mad_exp = Math.round(mad_exp);
    var hasil_pembulatan_mse_exp = Math.round(mse_exp);
    var hasil_pembulatan_mape_exp = Math.round(mape_exp);
    
    var hasil_pembulatan_mse_ma = Math.round(mse_ma);
    var hasil_pembulatan_mad_ma = Math.round(mad_ma);
    var hasil_pembulatan_mape_ma = Math.round(mape_ma);
    $("#mse_ma").textbox('setText', 'MSE = '+hasil_pembulatan_mse_ma);
    $("#mse_exp").textbox('setText', 'MSE = '+hasil_pembulatan_mse_exp);
    $("#mape_ma").textbox('setText', 'MAPE = '+hasil_pembulatan_mape_ma);
    $("#mape_exp").textbox('setText', 'MAPE = '+hasil_pembulatan_mape_exp);
    $("#mad_ma").textbox('setText', 'MAD = '+hasil_pembulatan_mad_ma);
    $("#mad_exp").textbox('setText', 'MAD = '+hasil_pembulatan_mad_exp);
    // console.log(mse_ma,'mse_ma');
    
    // console.log(mad_exp,'mad_exp');
    var ctx = document.getElementById("forecasting_chart");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: tanggal,
          datasets: [{
              fill:false,
              lineTension:0.1,
              label: 'Moving Average Produk XL',
              data: moving_average,
              backgroundColor: [
             'rgba(75, 192, 192, 0.4)'
         ],
              borderColor: [
                  'rgba(75, 192, 192, 1)'
              ],
              borderCapStyle:'butt',
              borderDash:[],
              borderDashOffset:0.0,
              borderJoinStyle:'niter',
              pointBorderColor:'rgba(75,192,192,1)',
              pointBackgroundColor:'#fff',
              pointBorderWidth:1,
              pointHoverRadius:5,
              pointHoverBackgroundColor:'rgba(75,192,192,1)',
              pointHoverBorderColor:'rgba(220,220,220,1)',
              pointHoverBorderWidth:2,
              pointRadius:1,
              pointHitRadius:10,
              borderWidth: 0
          },
        {
            fill:false,
            lineTension:0.1,
            data:aktual,
            backgroundColor: [
              'rgba(255, 10, 10, 1)'
            ],
            label: 'Data Aktual Produk XL',
            borderColor: [
                'rgba(255, 92, 92, 1)'
            ],
            borderCapStyle:'butt',
            borderDash:[],
            borderDashOffset:0.0,
            borderJoinStyle:'niter',
            pointBorderColor:'rgba(255, 10, 10, 1)',
            pointBackgroundColor:'#fff',
            pointBorderWidth:1,
            pointHoverRadius:5,
            pointHoverBackgroundColor:'rgba(255, 10, 10, 1)',
            pointHoverBorderColor:'rgba(255, 10, 10, 1)',
            pointHoverBorderWidth:2,
            pointRadius:1,
            pointHitRadius:10,
            borderWidth: 0
        },
        {
            fill:false,
            lineTension:0.1,
            data:exponential_smoothing,
            backgroundColor: [
              'rgba(0, 230, 64, 1)'
            ],
            label: 'Exponential Smoothing Produk XL',
            borderColor: [
                'rgba(0, 230, 64, 1)'
            ],
            borderCapStyle:'butt',
            borderDash:[],
            borderDashOffset:0.0,
            borderJoinStyle:'niter',
            pointBorderColor:'rgba(0, 230, 64, 1)',
            pointBackgroundColor:'rgba(0, 230, 64, 1)',
            pointBorderWidth:1,
            pointHoverRadius:5,
            pointHoverBackgroundColor:'rgba(0, 230, 64, 1)',
            pointHoverBorderColor:'rgba(0, 230, 64, 1)',
            pointHoverBorderWidth:2,
            pointRadius:1,
            pointHitRadius:10,
            borderWidth: 0
        }
    ]
      },

      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          },
          animation:{duration:3000,easing:'linear'}
      }
  });
}

function set_data_forecasting()
{
    $.ajax({
        url: 'http://localhost:8000/awal_akhir_bulan',
        method: 'post',
        dataType: 'json',
        success: function (data) {
        // parseData = JSON.parse(data);
        parseData = data;
        },
        complete: function (data) 
        {
            // var parse = data.responseJSON.length
            // var hasil = parseInt()
            $("#forecasting-form").form('load',
            {
                awal_data : data.responseJSON[0].awal_bulan,
                akhir_data : data.responseJSON[0].akhir_bulan
            });
            console.log(data,'dataaaa');

        }
    });
}




$("#wadah_forecasting_tabel").hide(200);
$("#master_user").hide(200);
$("#master_pelanggan").hide(200);
$("#master_barang").hide(200);
$("#pembelian_panel").hide(200);
$("#supplier_panel").hide(200);
$("#home").show(200);
$("#forecasting_panel").hide(200);
$("#panel-group-pembelian").hide(200);
$("#panel-group-penjualan").hide(200);
$("#penjualan_panel").hide(200);
$("#hasil_error").hide(200);
$(document).on('click','#master_user_tombol',function(e)
{
    e.preventDefault();
    $('#master_user_table').datagrid('reload');
    $("#master_user").show();
    $("#master_pelanggan").hide();
    $("#master_barang").hide();
    $("#pembelian_panel").hide();
    $("#supplier_panel").hide();
    $("#forecasting_panel").hide();
    $("#home").hide(200);
    $("#penjualan_panel").hide();
    clearForm();
});

$(document).on('click','#master_supplier_tombol', function(e)
{
     e.preventDefault();
    $('#master_user_table').datagrid('reload');
    $("#master_user").hide();
    $("#master_pelanggan").hide();
    $("#master_barang").hide();
    $("#pembelian_panel").hide();
    $("#supplier_panel").show();
    $("#forecasting_panel").hide();
    $("#home").hide(200);
    $("#penjualan_panel").hide();
    clearForm();
});

$("#barang").combobox({
    mode: 'remote',
    url: 'http://localhost:8000/lists_barang_combobox',
    method :'get',
    valueField: 'kode_barang',
    textField: 'nama_barang',
    onSelect: function(rec)
    {
        console.log(rec);
        $('#harga_satuan_pembelian').numberbox('setValue',rec.harga_satuan);
        
    }
});

$("#barang_penjualan").combobox({
    mode: 'remote',
    url: 'http://localhost:8000/lists_barang_combobox',
    method :'get',
    valueField: 'kode_barang',
    textField: 'nama_barang',
    onSelect: function(rec)
    {
        console.log(rec);
        $('#harga_satuan_penjualan').numberbox('setValue',rec.harga_satuan);
        
    }
});

$("#kode_supplier").combobox({
    mode: 'remote',
    url: 'http://localhost:8000/lists_kode_supplier',
    method :'get',
    valueField: 'kode_supplier',
    textField: 'nama_supplier',
    formatter : function(row)
    {
        var opts = $(this).combobox('options');
        return  '['+row[opts.valueField]+'] - '+row[opts.textField];
    }
});

$("#kode_pelanggan").combobox({
    mode: 'remote',
    url: 'http://localhost:8000/lists_kode_pelanggan',
    method :'get',
    valueField: 'kode_pelanggan',
    textField: 'nama_pelanggan',
    formatter : function(row)
    {
        var opts = $(this).combobox('options');
        return  '['+row[opts.valueField]+'] - '+row[opts.textField];
    }
});

$(document).on('click','#master_pelanggan_tombol',function(e)
{
    e.preventDefault();
    $('#master_pelanggan_table').datagrid('reload');
     $("#master_pelanggan").show();
     $("#master_user").hide();
     $("#master_barang").hide();
     $("#supplier_panel").hide(200);
    $("#home").hide(200);
    $("#forecasting_panel").hide();
    $("#pembelian_panel").hide();
    $("#penjualan_panel").hide();
    clearForm();
});

$(document).on('click','#master_barang_tombol',function(e)
{
    e.preventDefault();
    $('#master_barang_table').datagrid('reload');
     $("#master_pelanggan").hide();
     $("#supplier_panel").hide(200);
     $("#master_user").hide();
     $("#master_barang").show();
     $("#pembelian_panel").hide();
     $("#forecasting_panel").hide();
     $("#penjualan_panel").hide();
    $("#home").hide(200);
    clearForm();
});

$(document).on('click','#pembelian_tombol',function(e)
{
    e.preventDefault();
    $('#master_user_table').datagrid('reload');
    $("#master_user").hide();
    $("#supplier_panel").hide(200);
    $("#master_pelanggan").hide();
    $("#master_barang").hide();
    $("#pembelian_panel").show();
    $("#forecasting_panel").hide();
    $("#penjualan_panel").hide();
    $("#home").hide(200);
    clearForm();
});

$(document).on('click','#penjualan_tombol',function (e) 
{
    e.preventDefault();
    $('#master_user_table').datagrid('reload');
    $("#master_user").hide();
    $("#supplier_panel").hide(200);
    $("#master_pelanggan").hide();
    $("#master_barang").hide();
    $("#pembelian_panel").hide();
    $("#forecasting_panel").hide();
    $("#penjualan_panel").show();
    $("#home").hide(200);
    clearForm();
})

$(document).on('click','#forecasting',function(e)
{
    e.preventDefault();
    $('#master_user_table').datagrid('reload');
    $("#master_user").hide();
    $("#supplier_panel").hide(200);
    $("#master_pelanggan").hide();
    $("#master_barang").hide();
    $("#pembelian_panel").hide();
    $("#penjualan_panel").hide();
    $("#forecasting_panel").show();
    $("#panel-group-penjualan").hide();
    $("#home").hide(200);
    clearForm();
});

$('#searchbox-user').searchbox({
        searcher: function(value) {
            // search datagrid
            $('#master_user_table').datagrid('load', {
                q: value,
            });
        },
        prompt:'Nama Username'
    });

$("#refresh-user").click(function()
{
    $('#searchbox-user').searchbox('setValue','');
    $('#master_user_table').datagrid('load', {
        q: '',
    });
});

$("#delete-user").click(function()
{
    let selectedRow = $('#master_user_table').datagrid('getSelected');
    if(!selectedRow) 
    { // if no selected row
        messager_alert('Info', 'Tidak ada record yang dipilih!', 'info');
        return false;
    }

    delete_user(selectedRow.username);
});

$("#delete_pelanggan").click(function()
{
    let selectedRow = $('#master_pelanggan_table').datagrid('getSelected');
    if(!selectedRow) 
    { // if no selected row
        messager_alert('Info', 'Tidak ada record yang dipilih!', 'info');
        return false;
    }

    delete_pelanggan(selectedRow.kode_pelanggan);
});

$("#delete_pembelian").click(function()
{
    let selectedRow = $('#master_pembelian_tabel').datagrid('getSelected');
    if(!selectedRow) 
    { // if no selected row
        messager_alert('Info', 'Tidak ada record yang dipilih!', 'info');
        return false;
    }

    delete_pembelian(selectedRow.kode_pembelian);
});

function delete_pelanggan(dataPelanggan)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.confirm('Info', 'Apakah anda yakin ?', function (r) {
	    if (r) {
		$.messager.progress();	// display the progress bar
		// alert('confirmed: '+r+ ' ' +id);
		$.ajax({
                url: 'http://localhost:8000/delete_pelanggan',
                method: 'post',
                data:{dataPelanggan:dataPelanggan},
                dataType: 'json',
                success: function (data) {
                // parseData = JSON.parse(data);
                parseData = data;
                },
                complete: function (data) {
                $.messager.progress('close');	// hide progress bar while submit successfully
                //console.log(parseData);
                $.messager.alert('Info', parseData.msg, 'info');
                // clear form
                clearForm_pelanggan();
                }
            })
	    }
	});
}

function delete_user(dataUser)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.confirm('Info', 'Apakah anda yakin ?', function (r) {
	    if (r) {
		$.messager.progress();	// display the progress bar
		// alert('confirmed: '+r+ ' ' +id);
		$.ajax({
		    url: 'http://localhost:8000/delete',
		    method: 'post',
            data:{dataUser:dataUser},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
			$.messager.progress('close');	// hide progress bar while submit successfully
			//console.log(parseData);
			$.messager.alert('Info', parseData.msg, 'info');
			// clear form
			clearForm_user();
		    }
		})
	    }
	});
}

function delete_pembelian(dataId)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.confirm('Info', 'Apakah anda yakin ?', function (r) {
	    if (r) {
		$.messager.progress();	// display the progress bar
		// alert('confirmed: '+r+ ' ' +id);
		$.ajax({
		    url: 'http://localhost:8000/delete_pembelian',
		    method: 'post',
            data:{dataId:dataId},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
			$.messager.progress('close');	// hide progress bar while submit successfully
			//console.log(parseData);
			$.messager.alert('Info', parseData.msg, 'info');
            $("#master_pembelian_tabel").datagrid('reload');
			// clear form
			clearForm_user();
		    }
		})
	    }
	});
}

$("#jumlah_pembelian").numberbox({
    onChange: function (newval, oldval)
    {
        var harga_satuan = $("#harga_satuan_pembelian").numberbox('getValue');
        var jumlah = parseInt(harga_satuan)*parseInt(newval);
        $("#harga_pembelian").textbox('setValue', jumlah);
        $("#harga_pembelian").textbox('setText', jumlah);
    }
})

$("#jumlah_penjualan").numberbox({
    onChange: function (newval, oldval)
    {
        var harga_satuan = $("#harga_satuan_penjualan").numberbox('getValue');
        var jumlah = parseInt(harga_satuan)*parseInt(newval);
        $("#harga_penjualan").textbox('setValue', jumlah);
        $("#harga_penjualan").textbox('setText', jumlah);
    }
})

 $('#jabatan_form').combobox({       
        data:[
        {
            jabatan : 'pegawai',
            text : 'Pegawai'
        }
        ],
        valueField: 'jabatan',
        textField: 'text'
        // queryParams: {otherField: 'test'}
    });
$('#panel-group-user').hide(200);
$("#panel-group-pelanggan").hide(200);
$("#panel-group-barang").hide(200);
$("#panel-group-pembelian").hide(200);
$("#panel-supplier-user").hide(200);
$("#add_user").click(function()
{
    $('#panel-group-user').slideDown();
});

$("#add_supplier").click(function()
{
    $('#panel-supplier-user').slideDown();
});

$("#add_pelanggan").click(function()
{
    $('#panel-group-pelanggan').slideDown();
});

$("#add_barang").click(function()
{
    $('#panel-group-barang').slideDown();
});

$("#add_pembelian").click(function()
{
    $('#panel-group-pembelian').slideDown();
});

$("#add_penjualan").click(function()
{
    $('#panel-group-penjualan').slideDown();
})



$("#edit-user").click(function()
{
    let selectedRow = $('#master_user_table').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_user(selectedRow.username);
});

$("#edit_pelanggan").click(function()
{
    let selectedRow = $('#master_pelanggan_table').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_pelanggan(selectedRow.kode_pelanggan);
});

$("#edit_barang").click(function()
{
    let selectedRow = $('#master_barang_table').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_barang(selectedRow.kode_barang);
});

$("#edit_supplier").click(function()
{
    let selectedRow = $('#master_supplier_tabel').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_supplier(selectedRow.kode_supplier);
});

$("#edit_pembelian").click(function()
{
    let selectedRow = $('#master_pembelian_tabel').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_pembelian(selectedRow.kode_pembelian);
});

$("#edit_penjualan").click(function()
{
    let selectedRow = $('#master_penjualan_tabel').datagrid('getSelected');
    console.log(selectedRow,'selectedRow');
    datashow_penjualan(selectedRow.kode_penjualan);
});

function datashow_user(dataUser)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
     $.messager.progress();
	    var parseData;
	    if (dataUser != undefined && dataUser != '') {
		$.ajax({
		    url: 'http://localhost:8000/get_user',
		    method: 'post',
            data:{dataUser:dataUser},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
            $.messager.progress('close');
			// console.log(parseData);
			// set form field
			$('#group-user-form').form('load', {
			    username_rahasia: parseData.username,
			    username_form: parseData.username,
			    password_form: parseData.password,
			    jabatan_form: parseData.jabatan,
			});

			// show form
			$('#panel-group-user').slideDown();

		    }
		});
	    } else {
		$.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
	    }
}

function datashow_pembelian(dataPembelian)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
     $.messager.progress();
	    var parseData;
	    if (dataPembelian != undefined && dataPembelian != '') {
		$.ajax({
		    url: 'http://localhost:8000/get_pembelian',
		    method: 'post',
            data:{dataPembelian:dataPembelian},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
            $.messager.progress('close');
			// console.log(parseData);
			// set form field
			$('#group-pembelian-form').form('load', {
                kode_pembelian_rahasia: parseData.kode_pembelian,
                kode_pembelian : parseData.kode_pembelian,
                tanggal : parseData.kode_pembelian,
                kode_supplier : parseData.kode_supplier,
                harga : parseData.total_biaya,
                barang : parseData.kode_barang,
                harga_satuan_pembelian : parseData.harga_satuan,
                jumlah : parseData.jumlah
			});

			// show form
			$('#panel-group-pembelian').slideDown();

		    }
		});
	    } else {
		$.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
	    }
}

function datashow_penjualan(dataPembelian)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
     $.messager.progress();
	    var parseData;
	    if (dataPembelian != undefined && dataPembelian != '') {
		$.ajax({
		    url: 'http://localhost:8000/get_penjualan',
		    method: 'post',
            data:{dataPenjualan:dataPembelian},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
            $.messager.progress('close');
			// console.log(parseData);
			// set form field
			$('#group-penjualan-form').form('load', {
                kode_penjualan_rahasia: parseData.kode_penjualan,
                kode_penjualan : parseData.kode_penjualan,
                tanggal : parseData.tanggal_penjualan,
                kode_pelanggan : parseData.kode_pelanggan,
                harga : parseData.total_biaya,
                barang : parseData.kode_barang,
                harga_satuan_penjualan : parseData.harga_satuan,
                jumlah : parseData.jumlah
			});

			// show form
			$('#panel-group-penjualan').slideDown();

		    }
		});
	    } else {
		$.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
	    }
}



function datashow_supplier(dataSupplier)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();
    var parseData;
    if (dataSupplier != undefined && dataSupplier != '') {
    $.ajax({
        url: 'http://localhost:8000/get_supplier',
        method: 'post',
        data:{dataSupplier:dataSupplier},
        dataType: 'json',
        success: function (data) {
        // parseData = JSON.parse(data);
        parseData = data;
        },
        complete: function (data) {
        $.messager.progress('close');
        // console.log(parseData);
        // set form field
        $('#group-supplier-form').form('load', {
            supplier_rahasia : parseData.kode_supplier,
            kode_supplier : parseData.kode_supplier,
            nama_supplier :parseData.nama_supplier,
            no_telp_supplier : parseData.no_telp_supplier,
            alamat_supplier : parseData.alamat_supplier
        });

        // show form
        $('#panel-supplier-user').slideDown();

        }
    });
    } else {
    $.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
    }
}

function datashow_pelanggan(dataUser)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
     $.messager.progress();
	    var parseData;
	    if (dataUser != undefined && dataUser != '') {
		$.ajax({
		    url: 'http://localhost:8000/get_pelanggan',
		    method: 'post',
            data:{datapelanggan:dataUser},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
            $.messager.progress('close');
			// console.log(parseData);
			// set form field
			$('#group-pelanggan-form').form('load', {
			    kode_pelanggan_rahasia: parseData.kode_pelanggan,
			    kode_form: parseData.kode_pelanggan,
			    nama_pelanggan: parseData.nama_pelanggan,
			    no_telp_pelanggan: parseData.no_telp_pelanggan,
                alamat_pelanggan: parseData.alamat_pelanggan,
			});

			// show form
			$('#panel-group-pelanggan').slideDown();

		    }
		});
	    } else {
		$.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
	    }
}

function datashow_barang(databarang)
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
     $.messager.progress();
	    var parseData;
	    if (databarang != undefined && databarang != '') {
		$.ajax({
		    url: 'http://localhost:8000/get_barang',
		    method: 'post',
            data:{databarang:databarang},
		    dataType: 'json',
		    success: function (data) {
			// parseData = JSON.parse(data);
			parseData = data;
		    },
		    complete: function (data) {
            $.messager.progress('close');
			// console.log(parseData);
			// set form field
			$('#group-barang-form').form('load', {
			    kode_barang_rahasia: parseData.kode_barang,
			    kode_barang: parseData.kode_barang,
			    nama_barang: parseData.nama_barang,
			    deskripsi_barang: parseData.deskripsi_barang,
                alamat_pelanggan: parseData.alamat_pelanggan,
                harga_satuan : parseData.harga_satuan,
                stok : parseData.stok
			});

			// show form
			$('#panel-group-barang').slideDown();

		    }
		});
	    } else {
		$.messager.alert('Info', 'Tidak ada record yang dipilih!', 'info');
	    }
}

function submitForm_user()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-user-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_user',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-user-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}

function submitForm_pelanggan()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-pelanggan-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_pelanggan',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-pelanggan-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}

function submitForm_barang()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-barang-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_barang',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-barang-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}

function submitForm_pembelian()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-pembelian-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_pembelian',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-pembelian-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}

function submitForm_penjualan()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-penjualan-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_penjualan',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-penjualan-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}

function submitForm_supplier()
{
    $.ajaxSetup({
        headers:
        {
            'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
        }
    });
    $.messager.progress();	// display the progress bar
	$('#group-supplier-form').form('submit', {
	    url: 'http://localhost:8000/create_or_update_supplier',
	    onSubmit: function (param) {
        param._token = $("meta[name='csrf-token'").attr('content');
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#group-supplier-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) {
        $("#kode_supplier").combobox('reload');
		$.messager.progress('close');	// hide progress bar while submit successfully
		var parseData = JSON.parse(data);
		$.messager.alert('Info', parseData.msg, 'info');
        
		// clear form
		clearForm();
	    }
	});
}



function clearForm(hideForm = true, reloadGrid = true) 
{
        // disable validation
        $('#group-barang-form').form('disableValidation').form('validate');
        $('#group-user-form').form('disableValidation').form('validate');
        $('#group-pelanggan-form').form('disableValidation').form('validate');
        $('#group-pembelian-form').form('disableValidation').form('validate');
        $('#group-penjualan-form').form('disableValidation').form('validate');
        // clear form
        $('#group-barang-form').form('clear');
        $("#group-user-form").form('clear');
        $("#group-pelanggan-form").form('clear');
        $("#group-pembelian-form").form('clear');
        $("#group-penjualan-form").form('clear');
        $("#group-supplier-form").form('clear');
        set_data_forecasting();
        // reload grid
        if (reloadGrid) {
            $('#master_barang_table').datagrid('reload');
            $('#master_pelanggan_table').datagrid('reload');
            $('#master_user_table').datagrid('reload');
            $('#master_pembelian_tabel').datagrid('reload');
            $('#master_penjualan_tabel').datagrid('reload');
            $("#master_supplier_tabel").datagrid('reload');
        }

        // hide form
        if (hideForm) {
            $('#panel-group-barang').slideUp();
            $("#panel-supplier-user").slideUp();
            $("#panel-group-user").slideUp();
            $("#panel-group-pelanggan").slideUp();
            $("#panel-group-pembelian").slideUp();
            $("#panel-group-penjualan").slideUp();
        }

        $('#kode_barang_rahasia').val('');
        $("#username_rahasia").val('');
        $("#kode_pelanggan_rahasia").val('');
        $("#kode_barang_rahasia").val('');
        $("#kode_barang_pembelian").val('');
        $("#kode_barang_penjualan").val('');
        $("#supplier_rahasia").val('');
}



// $('#master_user_table').edatagrid();
$('#master_user_table').datagrid({
    url: 'http://localhost:8000/lists',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
    columns: [[
        {field: 'username', title: 'Nama Akun', width: '29.6%'},
        {field: 'jabatan', title: 'Kode Akun', width: '23.6%'}
        ]],
    toolbar: '#master_user_tb',
}).datagrid('autoSizeColumn');



$('#master_supplier_tabel').datagrid({
    url: 'http://localhost:8000/lists_supplier',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
    columns: [[
        {field: 'kode_supplier', title: 'Kode Supplier', width: '25%'},
        {field: 'nama_supplier', title: 'Nama Supplier', width: '25%'},
        {field: 'no_telp_supplier', title: 'No. Telp Supplier', width: '25%'},
        {field: 'alamat_supplier', title: 'Alamat Supplier', width: '25%'}
        ]],
    toolbar: '#master_supplier_tb',
}).datagrid('autoSizeColumn');

$("#master_pelanggan_table").datagrid({
    url: 'http://localhost:8000/lists_pelanggan',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
	columns: [[
		{field: 'kode_pelanggan', title: 'Kode', width: '24%'},
		{field: 'nama_pelanggan', title: 'Nama', width: '24%'},
        {field: 'no_telp_pelanggan', title: 'No. Telp', width: '24%'},
        {field: 'alamat_pelanggan', title: 'Alamat Pelanggan', width: '24%'}
	    ]],
    toolbar: '#master_user_pelanggan',
    }).datagrid('autoSizeColumn');

$("#master_barang_table").datagrid({
    url: 'http://localhost:8000/lists_barang',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
	columns: [[
		{field: 'kode_barang', title: 'Kode', width: '20%'},
		{field: 'nama_barang', title: 'Nama', width: '20%'},
        {field: 'deskripsi_barang', title: 'Deskripsi Barang', width: '20%'},
        {field: 'harga_satuan', title: 'Harga Satuan', width: '20%'},
        {field: 'stok', title: 'Stok', width: '20%'}
	    ]],
    toolbar: '#master_barang_tb',
    }).datagrid('autoSizeColumn');

$("#master_pembelian_tabel").datagrid({
    url: 'http://localhost:8000/lists_pembelian',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
	columns: [[
		{field: 'kode_pembelian', title: 'Kode', width: '20%'},
		{field: 'tanggal_pembelian', title: 'Tanggal Pembelian', width: '20%'},
        {field: 'kode_supplier', title: 'Kode Supplier', width: '10%'},
        {field: 'jumlah', title: 'Jumlah', width: '10%'},
        
        {field: 'total_biaya', title: 'Total Biaya', width: '10%'},
        {field: 'tanggal_dibuat', title: 'Tanggal Dibuat', width: '20%'},
        {field: 'dibuat_oleh', title: 'Dibuat Oleh', width: '10%'}
	    ]],
    toolbar: '#master_pembelian_tb',
    }).datagrid('autoSizeColumn');

$("#master_penjualan_tabel").datagrid({
     url: 'http://localhost:8000/lists_penjualan',
    method :'get',
    singleSelect: true,
    collapsible: true,
    fitColumns: true,
    pagination: true,
    remoteFilter: true,
    clientPaging: false,
    filterDelay: 500,
    loadMsg: 'Sek jim',
	columns: [[
		{field: 'kode_penjualan', title: 'Kode', width: '20%'},
		{field: 'tanggal_penjualan', title: 'Tanggal Penjualan', width: '20%'},
        {field: 'kode_pelanggan', title: 'Kode Pelanggan', width: '10%'},
        {field: 'jumlah', title: 'Jumlah', width: '10%'},
        
        {field: 'total_biaya', title: 'Total Biaya', width: '10%'},
        {field: 'tanggal_dibuat', title: 'Tanggal Dibuat', width: '20%'},
        {field: 'dibuat_oleh', title: 'Dibuat Oleh', width: '10%'}
	    ]],
    toolbar: '#master_penjualan_tb',
    }).datagrid('autoSizeColumn');
    

</script>
