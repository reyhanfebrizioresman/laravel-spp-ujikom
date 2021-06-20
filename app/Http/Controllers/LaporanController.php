<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function cetakPetugas()
    {
        $petugas = User::orderby('name','ASC')->get();
        return view('laporan.cetakPetugas',compact('petugas'));
    }

    public function cetakSpp()
    {
        $spp = User::orderby('tahun','ASC')->get();
        return view('laporan.cetakSpp',compact('spp'));
    }
    public function cetakKelas()
    {
        $kelas = kelas::orderby('nama_kelas','ASC')->get();
        return view('laporan.cetakKelas',compact('kelas'));
    }
    public function cetakSiswa()
    {
        // $siswa = Siswa::orderby('nama','ASC')->get();
        $siswa = DB::table('siswa')->join('kelas','siswa.id_kelas','=','kelas.id')->get();
        return view('laporan.cetakSiswa',compact('siswa'));
    }
    public function cetakPembayaran()
    {
        $pembayaran = DB::table('pembayarans')->join('users','pembayarans.id_petugas','=','users.id')->get();
        return view('laporan.cetakPembayaran',compact('pembayaran'));
    }
    public function cetakHistori()
    {
        $pembayaran = DB::table('pembayarans')->join('users','pembayarans.id_petugas','=','users.id')->get();
        return view('laporan.cetakHistori',compact('pembayaran'));
    }

    public function sppPdf()
    {
        $spp = Spp::all();
        $pdf = PDF::loadView('pdf.invoice', $spp);
        return $pdf->download('invoice.pdf');   
    }
}
