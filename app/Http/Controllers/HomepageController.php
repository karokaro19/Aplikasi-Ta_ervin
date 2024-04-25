<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kategori_artikel;
use App\Models\artikel;
use App\Models\sekolah;
use App\Models\lowongan;

class HomepageController extends Controller
{
    //

	public function index(){
		$artikelterbaru = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->limit(5)->get();
		$sekolahterbaru = sekolah::where('status','DICARI')->orderBy('created_at', 'DESC')->limit(1)->get();
        $countkategori = kategori_artikel::count();
        $countartikel = artikel::count();		
        $countsekolah = sekolah::count();		
        $datasekolah = sekolah::all();		
        $tenagakerja = sekolah::sum('kebutuhan_tenagakerja');		
        return view('layouts.homepage.index', compact('datasekolah','sekolahterbaru','tenagakerja','countsekolah','countkategori','countartikel','artikelterbaru'));
	}
	public function detailartikel($id){
		$artikelterbaru = artikel::orderBy('id','DESC')->limit(5)->get();
		$artikel = artikel::with('foreign_kategori')->find($id);
		return view('layouts.homepage.detailartikel', compact('artikel','artikelterbaru'));
	}

	public function detailsekolah($id){
		$sekolah = sekolah::find($id);
		return view('layouts.homepage.detailsekolah', compact('sekolah'));
	}	

	public function artikel(){
        $artikel = artikel::all();
		return view('layouts.homepage.artikel', compact('artikel'));    
	}  

	public function sekolah(){
        $sekolah = sekolah::all();
		return view('layouts.homepage.sekolah', compact('sekolah'));    
	}
	
	public function lowongan(){
        $lowongan = lowongan::all();
		return view('layouts.homepage.carilowongan', compact('lowongan'));    
	}  

	public function job(){
        $sekolah = sekolah::where('status','DICARI')->get();
		return view('layouts.homepage.job', compact('sekolah'));    
	}      
	
	public function cariartikel(Request $request){
//        $modul = modul::paginate(2);
		$datacari = $request->input('cari');
		$artikel = artikel::where('judul_artikel','like',"%".$datacari."%")->get();
		return view('layouts.homepage.artikel', compact('artikel'));    
	} 
	
	public function carijob(Request $request){
//        $modul = modul::paginate(2);
		$datapendidikan = $request->input('pendidikan_terakhir');
		$datamatapel = $request->input('matapel');
				$lowongan = lowongan::where('matapel', $datamatapel)->get();
		return view('layouts.homepage.carijob', compact('lowongan','datamatapel'));    
	} 
	
	public function carilowongan(Request $request){
		//        $modul = modul::paginate(2);
		
				$datapendidikan = $request->input('pendidikan_terakhir');
				$datamatapel = $request->input('matapel');
				$lowongan = lowongan::where('matapel', $datamatapel)->get();
				return view('layouts.homepage.carilowongan', compact('lowongan','datamatapel'));    
			} 
	
	public function carisekolah(Request $request){
		//        $modul = modul::paginate(2);
				$datacari = $request->input('cari');
				$sekolah = sekolah::where('nama_sekolah','like',"%".$datacari."%")->get();
				return view('layouts.homepage.sekolah', compact('sekolah'));    
			}  	

}
