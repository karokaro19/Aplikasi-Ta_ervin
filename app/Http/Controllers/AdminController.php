<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\kategori_artikel;
use App\Models\artikel;
use App\Models\sekolah;
use App\Models\lowongan;

class AdminController extends Controller
{
    //
	
	public function Home(){
		$datasekolah = sekolah::all();	
		return view('layouts.admin.home', compact('datasekolah'));
	}

	//mulai kategori
	
	public function tampilkategori(){
		$kategori_artikel = kategori_artikel::all();
		return view('layouts.admin.tampilkategori', compact('kategori_artikel'));
	}	
	
	public function tambahkategori(){
		return view('layouts.admin.tambahkategori');
	}		
	
	public function prosestambahkategori(Request $request){
			$kategori_artikel = new kategori_artikel();
			$kategori_artikel->nama_kategori = $request->input('nama_kategori');
			$kategori_artikel->hastag_kategori = $request->input('hastag_kategori');
			$kategori_artikel->save();
			return redirect()->route('kategori.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editkategori($id)
   {
       $kategori_artikel = kategori_artikel::find($id);
       return view('layouts.admin.editkategori', compact('kategori_artikel'));		
   }  	
	
   public function prosesupdatekategori(Request $request, $id)
   {
       $ubh = kategori_artikel::findorfail($id);
           $dt = [
               'nama_kategori' => $request['nama_kategori'],
               'hastag_kategori' => $request['hastag_kategori'],
           ];	
           $ubh->update($dt);
           return redirect()->route('kategori.home')->with('success', 'Data Berhasil di ubah');	
   } 	
   
	public function hapuskategori($id){
		$kategori_artikel = kategori_artikel::find($id);
		$kategori_artikel->delete(); 		
		return redirect()->route('kategori.home')->with('success', 'Data Berhasil di hapus');
	}

	// Mulai artikel
	
	public function tampilartikel(){
		$artikel = artikel::with('foreign_kategori')->get();
		return view('layouts.admin.tampilartikel', compact('artikel'));
	}	
	
	public function tambahartikel(){
		$kategori_artikel = kategori_artikel::all();
		return view('layouts.admin.tambahartikel', compact('kategori_artikel'));
	}		
	
	public function prosestambahartikel(Request $request){
		
			$datauser_aktif = Auth::user()->id;
			
			$request->validate([
				'gambar_artikel' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$nama_file = $request->gambar_artikel;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalName();			
		
			$artikel = new artikel();
			$artikel->judul_artikel = $request->input('judul_artikel');
			$artikel->isi_artikel = $request->input('isi_artikel');
			$artikel->users = $datauser_aktif;
			$artikel->gambar_artikel = $filegambar;
			$artikel->kategori = $request->input('kategori');
			$artikel->save();
			
			$nama_file->move(public_path().'/gambarartikel/', $filegambar);
			return redirect()->route('artikel.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editartikel($id)
   {
       $artikel = artikel::with('foreign_kategori')->find($id);
	   $kategori_artikel = kategori_artikel::all();
       return view('layouts.admin.editartikel', compact('artikel','kategori_artikel'));		
   }  	
	
   public function prosesupdateartikel(Request $request, $id)
   {
       $ubh = artikel::findorfail($id);
	   $data_awal = $ubh->gambar_artikel;
		if ($request->gambar_artikel == '')
		{	   
           $dt = [
               'judul_artikel' => $request['judul_artikel'],
               'isi_artikel' => $request['isi_artikel'],
               'kategori' => $request['kategori'],
           ];	
           $ubh->update($dt);
           return redirect()->route('artikel.home')->with('success', 'Data Berhasil di ubah');	
		}
		else {
		   
			$request->validate([
				'gambar_artikel' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);				   
		   			
           $dt = [
               'judul_artikel' => $request['judul_artikel'],
               'isi_artikel' => $request['isi_artikel'],
               'gambar_artikel' => $data_awal,
               'kategori' => $request['kategori'],
           ];	
		   $request->gambar_artikel->move(public_path().'/gambarartikel/', $data_awal);
           $ubh->update($dt);
           return redirect()->route('artikel.home')->with('success', 'Data Berhasil di ubah');				
		}
   } 	
   
	public function hapusartikel($id){
		$artikel = artikel::find($id);
		$artikel->delete(); 		
		return redirect()->route('artikel.home')->with('success', 'Data Berhasil di hapus');
	}	
	
	//mulai sekolah

	
	public function tampilsekolah(){
		$sekolah = sekolah::all();
		return view('layouts.admin.tampilsekolah', compact('sekolah'));
	}	
	
	public function tambahsekolah(){
		return view('layouts.admin.tambahsekolah');
	}		
	
	public function prosestambahsekolah(Request $request){
		
			$request->validate([
				'sekolah' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$nama_file = $request->gambar;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalName();			
		
			$sekolah = new sekolah();
			$sekolah->nama_sekolah = $request->input('nama_sekolah');
			$sekolah ->jurusan = $request->input('jurusan');
			$sekolah->alamat_sekolah = $request->input('alamat_sekolah');
			$sekolah->koordinat_gps = $request->input('koordinat_gps');
			$sekolah->kebutuhan_tenagakerja = $request->input('kebutuhan_tenagakerja');
			$sekolah->informasi_lainnya = $request->input('informasi_lainnya');
			$sekolah->status = $request->input('status');
			$sekolah->gambar = $filegambar;
			$sekolah->save();
			
			$nama_file->move(public_path().'/gambarsekolah/', $filegambar);
			return redirect()->route('sekolah.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editsekolah($id)
   {
       $sekolah = sekolah::find($id);
       return view('layouts.admin.editsekolah', compact('sekolah'));		
   }  	
	
   public function prosesupdatesekolah(Request $request, $id)
   {
       $ubh = sekolah::findorfail($id);
	   $data_awal = $ubh->gambar;
		if ($request->gambar == '')
		{	   
           $dt = [
               'nama_sekolah' => $request['nama_sekolah'],
               'alamat_sekolah' => $request['alamat_sekolah'],
               'koordinat_gps' => $request['koordinat_gps'],
               'jurusan' => $request['jurusan'],
               'kebutuhan_tenagakerja' => $request['kebutuhan_tenagakerja'],
               'informasi_lainnya' => $request['informasi_lainnya'],
               'status' => $request['status'],
           ];	
           $ubh->update($dt);
           return redirect()->route('sekolah.home')->with('success', 'Data Berhasil di ubah');	
		}
		else {
		   
			$request->validate([
				'gambar' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);				   
		   			
           $dt = [
               'nama_sekolah' => $request['nama_sekolah'],
               'alamat_sekolah' => $request['alamat_sekolah'],
               'jurusan' => $request['jurusan'],			   
               'koordinat_gps' => $request['koordinat_gps'],
               'kebutuhan_tenagakerja' => $request['kebutuhan_tenagakerja'],
               'informasi_lainnya' => $request['informasi_lainnya'],
               'status' => $request['status'],
               'gambar' => $data_awal,
           ];	
		   $request->gambar->move(public_path().'/gambarsekolah/', $data_awal);
           $ubh->update($dt);
           return redirect()->route('sekolah.home')->with('success', 'Data Berhasil di ubah');				
		}
   } 	
   
	public function hapussekolah($id){
		$sekolah = sekolah::find($id);
		$sekolah->delete(); 		
		return redirect()->route('sekolah.home')->with('success', 'Data Berhasil di hapus');
	}
	

	//mulai lowongan

	public function tampillowongan(){
		$lowongan = lowongan::with('foreign_sekolah')->get();
		return view('layouts.admin.tampillowongan', compact('lowongan'));
	}	
	
	public function tambahlowongan(){
		$sekolahs = sekolah::all();
		return view('layouts.admin.tambahlowongan', compact('sekolahs'));
	}	
	
	public function prosestambahlowongan(Request $request){

			$validatedData = $request->validate([
				'nama_sekolah' => 'required',
				'matapel' => 'required|unique:lowongans,matapel,NULL,id,nama_sekolah,' . request()->input('nama_sekolah'),
				'kebutuhan' => 'required',
				'status' => 'required',
			
			],[
				'nama_sekolah.required' => 'Nama sekolah tidak boleh kosong!!!',
				'matapel.required' => 'Mata pelajaran tidak boleh kosong!!!',
				'matapel.unique' => 'Mata pelajaran sudah ada silahkan edit kembali!!!',
				'kebutuhan.require' => 'Kebutuhan tenaga kerja tidak boleh kosong!!!',
				'status.requires' => 'Status tidak boleh kosong!!!',
			]);		
			$lowongan = new lowongan();
			$lowongan->nama_sekolah = $request->input('nama_sekolah');
			$lowongan->matapel = $request->input('matapel');
			$lowongan->kebutuhan = $request->input('kebutuhan');
			$lowongan->status = $request->input('status');
			$lowongan->save();
			
			
			return redirect()->route('lowongan.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editlowongan($id)
   {
       $lowongan = lowongan::find($id);
	   $sekolahs = sekolah::all();
       return view('layouts.admin.editlowongan', compact('lowongan','sekolahs'));		
   }  	
	
   public function prosesupdatelowongan(Request $request, $id)
   {
       $ubh = lowongan::findorfail($id);
	   $data_awal = $ubh->gambar;
		if ($request->gambar == '')
		{	   
           $dt = [
               'nama_sekolah' => $request['nama_sekolah'],
               'matapel' => $request['matapel'],
               'kebutuhan' => $request['kebutuhan'],
			   'status' => $request['status'],
           ];	
           $ubh->update($dt);
           return redirect()->route('lowongan.home')->with('success', 'Data Berhasil di ubah');	
		}
		else {
		   
			$request->validate([

			]);				   
		   			
           $dt = [
               'nama_sekolah' => $request['nama_sekolah'],
               'matapel' => $request['matapel'],		   
               'kebutuhan' => $request['kebutuhan'],
			   'status' => $request['status'],
           ];	
		   
           $ubh->update($dt);
           return redirect()->route('lowongan.home')->with('success', 'Data Berhasil di ubah');				
		}
   } 	
   public function hapuslowongan($id){
	$lowongan = lowongan::find($id);
	$lowongan->delete(); 		
	return redirect()->route('lowongan.home')->with('success', 'Data Berhasil di hapus');
}
	
	
}
