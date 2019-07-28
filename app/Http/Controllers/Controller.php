<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

use DateTime;
use Auth;
use Response;
use Datatables;
use Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $username_session = $request->session()->get('username');
        $jabatan_session = $request->session()->get('jabatan');
        if($request->session()->has('username')){
             $user = DB::table('master_user')->where(['username'=>$username, 'password'=>$password])->get()->first();
             
             return view('borwita/index',['username_session' => $username_session, 'jabatan_session' => $jabatan_session]);
            // return Redirect::route('/borwita');
            
		}else{
			return view('login/index');
		}
    }

    public function hapus_session(Request $request)
    {
        $request->session()->forget('username');
        return view('login/index');
    }

    public function login(Request $request)
    {
        $username_session = $request->session()->get('username');
        $password_session = $request->session()->get('password');
        $jabatan_session = $request->session()->get('jabatan');
        if($request->session()->has('username')){
             $user = DB::table('master_user')->where(['username'=>$username_session, 'password'=>$password_session])->get()->first();
             
             return view('borwita/index',['username_session' => $username_session, 'jabatan_session' => $jabatan_session]);
            // return Redirect::route('/borwita');
            
        }else
        {
			return view('login/index');
		}
        // return view('login/index');
    }

    public function proses_login(Request $request)
    {
        $input = request()->all();
        $username = $request->username;
        $password = $request->password;
        $checkLogin = DB::table('master_user')->where(['username'=>$username, 'password'=>$password])->get();
        if (count($checkLogin) >0)
        {
            $user = DB::table('master_user')->where(['username'=>$username, 'password'=>$password])->get()->first();
            
            Session::put('username', $username);
            Session::put('password', $password);
            Session::put('jabatan', $user->jabatan);
            Session::put('login', true);
            $data = array(
					'success' => true,
					'msg' => 'Success'
				);
        } else {
            $data = array(
					'success' => true,
					'msg' => 'Failed'
				);
        }
        return json_encode($data);
    }

    public function create_or_update_user(Request $request)
    {
        $username = $request->username_form;
        $username_rahasia = $request->username_rahasia;
        $password = $request->password_form;
        $jabatan = $request->jabatan_form;
        if (!empty($username_rahasia))
		{
            // update_user($fields['username_form']);
            $exec = DB::table('master_user')->where('username', $username_rahasia )->update([
                'username' => $username,
                'password' => $password,
                'jabatan' => $jabatan
            ]);
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
		} 
		
		else 
		{

            $exec = DB::table('master_user')->insert(['username' =>$username, 'password' =>$password, 'jabatan' => $jabatan]);
            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		}
    }

    public function create_or_update_pelanggan(Request $request)
    {
        $kode_pelanggan_rahasia = $request->kode_pelanggan_rahasia;
        $kode_pelanggan = $request->kode_form;
        $nama_pelanggan = $request->nama_pelanggan;
        $no_telp_pelanggan = $request->no_telp_pelanggan;
        $alamat_pelanggan = $request->alamat_pelanggan;
        if (!empty($kode_pelanggan_rahasia))
		{
            // update_user($fields['username_form']);
            $exec = DB::table('master_pelanggan')->where('kode_pelanggan', $kode_pelanggan_rahasia )->update([
              'kode_pelanggan' =>$kode_pelanggan, 
              'nama_pelanggan' =>$nama_pelanggan, 
              'no_telp_pelanggan' => $no_telp_pelanggan, 
              'alamat_pelanggan' => $alamat_pelanggan
            ]);
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
		} 
		
		else 
		{

            $exec = DB::table('master_pelanggan')->insert(['kode_pelanggan' =>$kode_pelanggan, 'nama_pelanggan' =>$nama_pelanggan, 'no_telp_pelanggan' => $no_telp_pelanggan, 'alamat_pelanggan' => $alamat_pelanggan]);
            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		}
    }

     public function create_or_update_barang(Request $request)
    {
        $kode_barang_rahasia = $request->kode_barang_rahasia;
        $kode_barang = $request->kode_barang;
        $nama_barang = $request->nama_barang;
        $deskripsi_barang = $request->deskripsi_barang;
        $harga_satuan = $request->harga_satuan;
        $stok = $request->stok;
        if (!empty($kode_barang_rahasia))
		{
            // update_user($fields['username_form']);
            $exec = DB::table('master_barang')->where('kode_barang', $kode_barang_rahasia )->update([
              'kode_barang' =>$kode_barang, 
              'nama_barang' =>$nama_barang, 
              'deskripsi_barang' => $deskripsi_barang, 
              'harga_satuan' => $harga_satuan,
              'stok'=> $stok
            ]);
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
		} 
		
		else 
		{
            $exec = DB::table('master_barang')->insert(
                [   
                    'kode_barang' =>$kode_barang, 
                    'nama_barang' =>$nama_barang, 
                    'deskripsi_barang' => $deskripsi_barang, 
                    'harga_satuan' => $harga_satuan,
                    'stok'=> $stok
                ]);
            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		}
    }

    public function create_or_update_pembelian(Request $request)
    {
        $kode_pembelian_rahasia = $request->kode_pembelian_rahasia;        
        $kode_pembelian = $request->kode_pembelian;
        $kode_barang = $request->barang;
        $tanggal = $request->tanggal;
       
        $date = DateTime::createFromFormat('m-Y-d', $tanggal);
        $tanggal_awal= date('Y-m-d ', strtotime($tanggal));
        $kode_supplier = $request->kode_supplier;
        $harga_satuan = $request->harga_satuan_pembelian;
        $qty = $request->jumlah;
        $total_biaya = $request->harga;
        if (!empty($kode_pembelian_rahasia))
		{
            //untuk mengurangi stok barang asal
            $data_pembelian_detail = DB::table('detail_pembelian')->where('kode_pembelian', $kode_pembelian_rahasia )->get()->first();
            $data_barang_detail = DB::table('master_barang')->where('kode_barang', $data_pembelian_detail->kode_barang )->get()->first();
            $hasil_lawas = (int)$data_barang_detail->stok - (int)$data_pembelian_detail->jumlah;
            
            $exec3 = DB::table('master_barang')->where('kode_barang', $kode_barang )->update([
              'stok' =>$hasil_lawas
            ]);

            //untuk menambahkan stok barang baru
            $data_barang_jumlahkan = DB::table('master_barang')->where('kode_barang', $kode_barang )->get()->first();
            $hasil_jumlahkan = (int)$data_barang_jumlahkan->stok + (int)$qty;
            
            $exec3 = DB::table('master_barang')->where('kode_barang', $kode_barang )->update([
              'stok' =>$hasil_jumlahkan
            ]);
                 $exec2 = DB::table('detail_pembelian')->where('kode_pembelian', $kode_pembelian_rahasia )->update([
              'kode_pembelian' =>$kode_pembelian, 
              'kode_barang' =>$kode_barang, 
              'harga_satuan' => $harga_satuan, 
              'jumlah' => $qty,
            ]);


            $exec = DB::table('pembelian')->where('kode_pembelian', $kode_pembelian_rahasia )->update([
              'kode_pembelian' =>$kode_pembelian, 
              'tanggal_pembelian' =>$tanggal_awal, 
              'kode_supplier' => $kode_supplier, 
              'total_biaya' => $total_biaya,
              'tanggal_dibuat'=> date('Y-m-d H:i:s'),
              'dibuat_oleh'=> $request->session()->get('username'),
            ]);

           
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
		} 
		
		else 
		{
            $data_barang_jumlahkan = DB::table('master_barang')->where('kode_barang', $kode_barang )->get()->first();
            $hasil_jumlahkan = (int)$data_barang_jumlahkan->stok + (int)$qty;
            
            $exec3 = DB::table('master_barang')->where('kode_barang', $kode_barang )->update([
              'stok' =>$hasil_jumlahkan
            ]);

            $exec = DB::table('pembelian')->insert(
                [   
                    'kode_pembelian' =>$kode_pembelian, 
                    'tanggal_pembelian' =>$tanggal_awal, 
                    'kode_supplier' => $kode_supplier, 
                    'total_biaya' => $total_biaya,
                    'tanggal_dibuat'=> date('Y-m-d H:i:s'),
                    'dibuat_oleh'=> $request->session()->get('username'),
                ]);

            $exec2 = DB::table('detail_pembelian')->insert([
              'kode_pembelian' =>$kode_pembelian, 
              'kode_barang' =>$kode_barang, 
              'harga_satuan' => $harga_satuan, 
              'jumlah' => $qty,
            ]);
            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		}
    }

    public function create_or_update_penjualan(Request $request)
    {
        $kode_penjualan_rahasia = $request->kode_penjualan_rahasia;        
        $kode_penjualan = $request->kode_penjualan;
        $kode_barang = $request->barang;
        $tanggal = $request->tanggal;
       
        $date = DateTime::createFromFormat('m-Y-d', $tanggal);
        $tanggal_awal= date('Y-m-d ', strtotime($tanggal));
        $kode_pelanggan = $request->kode_pelanggan;
        $harga_satuan = $request->harga_satuan_penjualan;
        $qty = $request->jumlah;
        $total_biaya = $request->harga;

        if (!empty($kode_penjualan_rahasia))
		{
            $exec2 = DB::table('detail_penjualan')->where('kode_penjualan', $kode_penjualan_rahasia )->update([
              'kode_penjualan' =>$kode_penjualan, 
              'kode_barang' =>$kode_barang, 
              'harga_satuan' => $harga_satuan, 
              'jumlah' => $qty,
            ]);


            $exec = DB::table('penjualan')->where('kode_penjualan', $kode_penjualan_rahasia )->update([
              'kode_penjualan' =>$kode_penjualan, 
              'tanggal_penjualan' =>$tanggal_awal, 
              'kode_pelanggan' => $kode_pelanggan, 
              'total_biaya' => $total_biaya,
              'tanggal_dibuat'=> date('Y-m-d H:i:s'),
              'dibuat_oleh'=> $request->session()->get('username'),
            ]);

           
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
        }
        else 
		{
            $exec = DB::table('penjualan')->insert(
                [   
                    'kode_penjualan' =>$kode_penjualan, 
                    'tanggal_penjualan' =>$tanggal_awal, 
                    'kode_pelanggan' => $kode_pelanggan, 
                    'total_biaya' => $total_biaya,
                    'tanggal_dibuat'=> date('Y-m-d H:i:s'),
                    'dibuat_oleh'=> $request->session()->get('username'),
                ]);

            $exec2 = DB::table('detail_penjualan')->insert([
              'kode_penjualan' =>$kode_penjualan, 
              'kode_barang' =>$kode_barang, 
              'harga_satuan' => $harga_satuan, 
              'jumlah' => $qty,
            ]);
            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		} 
    }

    public function create_or_update_supplier(Request $request)
    {
        $kode_supplier = $request->kode_supplier;
        $supplier_rahasia = $request->supplier_rahasia;
        $nama_supplier = $request->nama_supplier;
        $no_telp_supplier = $request->no_telp_supplier;
        $alamat_supplier = $request->alamat_supplier;



        if (!empty($supplier_rahasia))
		{
            // update_user($fields['username_form']);
            $exec = DB::table('master_supplier')->where('kode_supplier', $supplier_rahasia )->update([
              'kode_supplier' =>$kode_supplier, 
              'nama_supplier' =>$nama_supplier, 
              'no_telp_supplier' => $no_telp_supplier, 
              'alamat_supplier' => $alamat_supplier
            ]);
             if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil diupdate'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal diupdate'
                );
            }
            echo json_encode($data);
		    return;
		} 
		
		else 
		{
            $exec = DB::table('master_supplier')->insert(
            [
              'kode_supplier' =>$kode_supplier, 
              'nama_supplier' =>$nama_supplier, 
              'no_telp_supplier' => $no_telp_supplier, 
              'alamat_supplier' => $alamat_supplier
            ]);

            if ($exec) {
                $data = array(
                'success' => true,
                'msg' => ' berhasil disimpan'
                );
            } else {
                $data = array(
                'success' => false,
                'msg' => ' gagal disimpan'
                );
            }
            echo json_encode($data);
		    return;
		}
    }

    public function delete(Request $request)
    {
        $username = $request->dataUser;

        $exec = DB::delete("DELETE FROM master_user WHERE username = '".$username."'; ");
        if ($exec) {
            $data = array(
            'success' => true,
            'msg' => ' berhasil dihapus'
            );
        } else {
            $data = array(
            'success' => false,
            'msg' => ' gagal dihapus'
            );
        }
        echo json_encode($data);
        return;
    }

    public function delete_pelanggan(Request $request)
    {
        $dataPelanggan = $request->dataPelanggan;
        $exec = DB::delete("DELETE FROM master_pelanggan WHERE kode_pelanggan = '".$dataPelanggan."'; ");
        if ($exec) {
            $data = array(
            'success' => true,
            'msg' => ' berhasil dihapus'
            );
        } else {
            $data = array(
            'success' => false,
            'msg' => ' gagal dihapus'
            );
        }
        echo json_encode($data);
        return;
    }

    public function delete_pembelian(Request $request)
    {
        $dataId = $request->dataId;
        
        $data_pembelian = DB::table('detail_pembelian')->where('kode_pembelian', $dataId )->get()->first();
        $data_barang = DB::table('master_barang')->where('kode_barang', $data_pembelian->kode_barang )->get()->first();
        $hasil_semua_qty = (int)$data_barang->stok - (int)$data_pembelian->jumlah;

        $exec3 = DB::table('master_barang')->where('kode_barang', $data_barang->kode_barang )->update([
              'stok' =>$hasil_semua_qty
            ]);
        $exec = DB::delete("DELETE FROM detail_pembelian WHERE kode_pembelian = '".$dataId."'; ");
        $exec = DB::delete("DELETE FROM pembelian WHERE kode_pembelian = '".$dataId."'; ");
        if ($exec) {
            $data = array(
            'success' => true,
            'msg' => ' berhasil dihapus'
            );
        } else {
            $data = array(
            'success' => false,
            'msg' => ' gagal dihapus'
            );
        }
        echo json_encode($data);
        return;
    }

    public function lists(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_user');
        
        if (isset($q)) {
            $this_table->where('username','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();
        $data['total'] = count($data['rows']);

      

        echo json_encode($data);
        return;
    }

    public function lists_pelanggan(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_pelanggan');
        
        if (isset($q)) {
            $this_table->where('nama_pelanggan','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();
        $data['total'] = count($data['rows']);

      

        echo json_encode($data);
        return;
    }

    

    public function lists_barang(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_barang');
        
        if (isset($q)) {
            $this_table->where('nama_barang','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();

        $data['total'] = count($data['rows']);

      

        echo json_encode($data);
        return;
    }

    public function lists_supplier(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_supplier');
        
        if (isset($q)) {
            $this_table->where('nama_supplier','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();

        $data['total'] = count($data['rows']);

      

        echo json_encode($data);
        return;
    }

    

    public function lists_pembelian(Request $request)
    {
        $q = $request->q;
        $page = ($request->page) ? $request->page : 1;
        $rows = ($request->rows) ? ($request->rows) : 10;
        $start = 0; // set start
        if (isset($page) && $page > 1) { // if page >1 update start
            $start = ((int)$page - 1) * $rows;
        }
        $end = $rows;
        $this_table = DB::table('pembelian')
                        ->leftJoin('detail_pembelian', 'pembelian.kode_pembelian', '=', 'detail_pembelian.kode_pembelian')
                        ->offset($start)->limit($end);
        
        $count = DB::table('pembelian')
                        ->leftJoin('detail_pembelian', 'pembelian.kode_pembelian', '=', 'detail_pembelian.kode_pembelian');

        if (isset($q)) {
            $this_table->where('kode_pembelian','like','%'.$q.'%');
        }
        $data['rows'] = $this_table->get();

        $data['total'] = count($count->get());

      

        echo json_encode($data);
        return;
    }

    public function lists_penjualan(Request $request)
    {
        $q = $request->q;
        $page = ($request->page) ? $request->page : 1;
        $rows = ($request->rows) ? ($request->rows) : 10;
        $start = 0; // set start
        if (isset($page) && $page > 1) { // if page >1 update start
            $start = ((int)$page - 1) * $rows;
        }
        $end = $rows;
        $this_table = DB::table('penjualan')
                        ->leftJoin('detail_penjualan', 'penjualan.kode_penjualan', '=', 'detail_penjualan.kode_penjualan')
                        ->offset($start)->limit($end);
        
        $count = DB::table('penjualan')
                        ->leftJoin('detail_penjualan', 'penjualan.kode_penjualan', '=', 'detail_penjualan.kode_penjualan');

        if (isset($q)) {
            $this_table->where('kode_penjualan','like','%'.$q.'%');
        }
        $data['rows'] = $this_table->get();

        $data['total'] = count($count->get());

      

        echo json_encode($data);
        return;
    }

    public function lists_penjualan_forecasting(Request $request)
    {
        $q = $request->q;
        $page = ($request->page) ? $request->page : 1;
        $rows = ($request->rows) ? ($request->rows) : 10;
        $start = 0; // set start
        if (isset($page) && $page > 1) { // if page >1 update start
            $start = ((int)$page - 1) * $rows;
        }
        $end = $rows;
        $this_table = DB::table('penjualan')
                        ->leftJoin('detail_penjualan', 'penjualan.kode_penjualan', '=', 'detail_penjualan.kode_penjualan');
        
        $count = DB::table('penjualan')
                        ->leftJoin('detail_penjualan', 'penjualan.kode_penjualan', '=', 'detail_penjualan.kode_penjualan');

        $wadah = $this_table->get();
        $kunci_1 = null;
        $kunci_2 = null;
        $panjang_ramal = count($wadah) + (int)$q;
        $med = 0;
        $jumlah_yang_diramal = 0;
        for ($i=0; $i < $panjang_ramal; $i++) { 
            if ($i == 0) 
            {
                $wadah[$i]->ramal_exp = $wadah[$i]->jumlah;
            }
            else 
            {
                if ($i > count($this_table->get())-1) {

                }
                else {
                    $kunci_2 = (int)$i-1;    
                    $hasil_hitung_exp = (float)$wadah[$kunci_2]->ramal_exp+0.3*((int)$wadah[$kunci_2]->jumlah - (float)$wadah[$kunci_2]->ramal_exp);
                    
                    
                    $wadah[$i]->ramal_exp = round((float)$hasil_hitung_exp,2,PHP_ROUND_HALF_DOWN);
                    
                    $hasil_ramal = round($wadah[$i]->ramal_exp,2,PHP_ROUND_HALF_DOWN );
                    $error = (int)$wadah[$i]->jumlah-(float)$hasil_ramal;
                    $wadah[$i]->error_exp = round($error,2,PHP_ROUND_HALF_DOWN);
                    $wadah[$i]->abs_error_exp = round(abs($error),2,PHP_ROUND_HALF_DOWN);
                    $wadah[$i]->pangkat_error_exp = round((float)$error*(float)$error,2,PHP_ROUND_HALF_DOWN);
                    $wadah[$i]->persen_error_exp = round((abs($error)/(int)$wadah[$i]->jumlah)*100,2,PHP_ROUND_HALF_DOWN);
                }
                }
            }

        for ($i=0; $i < $panjang_ramal ; $i++) 
        { 
            if($i != 0 && $i != 1)
            { 
                if ($i > count($this_table->get())-1) {
                    $kunci_1 = (int)$i-2;
                    $kunci_2 = (int)$i-1;                     
                    
                    $wadah[$i] = (object) ["ramal_ma" => round(($wadah[$kunci_1]->jumlah + $wadah[$kunci_2]->jumlah)/2,2),
                "ramal_exp" => round((float)$wadah[$kunci_2]->ramal_exp,2)+0.3*round(($wadah[$kunci_2]->jumlah - (float)$wadah[$kunci_2]->ramal_exp),0,PHP_ROUND_HALF_DOWN)];
             
                }
                
                else {
                    $jumlah_yang_diramal = $jumlah_yang_diramal + 1;
                    $kunci_1 = (int)$i-2;
                    $kunci_2 = (int)$i-1;    
                    $wadah[$i]->ramal_ma =round(($wadah[$kunci_1]->jumlah + $wadah[$kunci_2]->jumlah)/2,2);
                    $hasil_ramal =round($wadah[$i]->ramal_ma,2);
                    $error = (int)$wadah[$i]->jumlah-(float)$hasil_ramal;
                    $wadah[$i]->error_ma = round($error,2);
                    $wadah[$i]->abs_error_ma = round(abs($error),2);
                    $wadah[$i]->pangkat_error_ma = (float)$error*(float)$error;
                    $wadah[$i]->persen_error_ma = round((abs($error)/(int)$wadah[$i]->jumlah)*100,2);
                    $med = round($med + abs($error),2);
                }
            }
        }
        $data['rows'] = $this_table->get();
        $data['total'] = count($count->get());
        echo json_encode($wadah);
        return;
    }



    public function awal_akhir_bulan()
    {
        $this_table = DB::table('penjualan')
                        ->selectRaw("MIN(tanggal_penjualan) AS awal_bulan , MAX(tanggal_penjualan) AS akhir_bulan")->get();
        echo json_encode($this_table);
        return;
    }

    

    public function lists_barang_combobox(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_barang');

        if (isset($q)) {
            $this_table->where('nama_barang','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();
        $data['total'] = count($data['rows']);
      

        echo json_encode($data['rows']);
        return;
    }

    public function lists_kode_supplier(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_supplier');
        
        if (isset($q)) {
            $this_table->where('nama_supplier','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();
        $data['total'] = count($data['rows']);
      

        echo json_encode($data['rows']);
        return;
    }
    
    public function lists_kode_pelanggan(Request $request)
    {
        $q = $request->q;
        $this_table = DB::table('master_pelanggan');
        
        if (isset($q)) {
            $this_table->where('nama_pelanggan','like','%'.$q.'%');
        }
       
        $data['rows'] = $this_table->get();

        $data['total'] = count($data['rows']);

      

        echo json_encode($data['rows']);
        return;
    }
    

    
    public function get_user(Request $request)
    {
        $username = $request->dataUser;
        $data = DB::table('master_user')->where(['username'=>$username])->get()->first();
        echo json_encode($data);
        return;
    }

    public function get_pelanggan(Request $request)
    {
        $kode_pelanggan = $request->datapelanggan;
        $data = DB::table('master_pelanggan')->where(['kode_pelanggan'=>$kode_pelanggan])->get()->first();
        echo json_encode($data);
        return;
    }

    public function get_barang(Request $request)
    {
        $kode_barang = $request->databarang;
        $data = DB::table('master_barang')->where(['kode_barang'=>$kode_barang])->get()->first();
        echo json_encode($data);
        return;
    }

    public function get_supplier(Request $request)
    {
        $kode_barang = $request->dataSupplier;
        $data = DB::table('master_supplier')->where(['kode_supplier'=>$kode_barang])->get()->first();
        echo json_encode($data);
        return;
    }

    public function get_pembelian(Request $request)
    {
        $kode_pembelian = $request->dataPembelian;
        $data = DB::table('pembelian')
                    ->leftJoin('detail_pembelian', 'pembelian.kode_pembelian', '=', 'detail_pembelian.kode_pembelian')
                    ->where(['pembelian.kode_pembelian'=>$kode_pembelian])->get()->first();
        echo json_encode($data);
        return;
    }

    public function get_penjualan(Request $request)
    {
        $kode_penjualan = $request->dataPenjualan;
        $data = DB::table('penjualan')
                    ->leftJoin('detail_penjualan', 'penjualan.kode_penjualan', '=', 'detail_penjualan.kode_penjualan')
                    ->where(['penjualan.kode_penjualan'=>$kode_penjualan])->get()->first();
        echo json_encode($data);
        return;
    }

    
    
}


 