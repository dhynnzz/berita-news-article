<?php

namespace App\Http\Controllers;

use App\Models\Sudut;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SudutController extends Controller
{
    public function informasi()
    {
        $sudut = Sudut::all();
        return view('informasi.informasi', compact('sudut'));
    }

    public function create()
    {
        return view('informasi.informasi-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'judul_informasi' => 'required',
            'sumber_informasi' => 'required',
            'deskripsi' => 'required',
        ]);

        Sudut::create([
            'tanggal' => $request->tanggal,
            'judul_informasi' => $request->judul_informasi,
            'sumber_informasi' => $request->sumber_informasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('informasi');
    }

    public function edit($id_informasi)
    {
        // Temukan data berdasarkan ID
        $sudut = Sudut::findOrFail($id_informasi);
    
        // Kirimkan data ke tampilan
        return view('informasi.informasi-edit', compact('sudut'));
    }
    

    public function update(Request $request, $id_informasi)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'judul_informasi' => 'required',
            'sumber_informasi' => 'required',
            'deskripsi' => 'required',
        ]);
        $sudut = Sudut::findOrFail($id_informasi);

        $sudut->update([
            'tanggal' => $request->tanggal,
            'judul_informasi' => $request->judul_informasi,
            'sumber_informasi' => $request->sumber_informasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('informasi');
    }

    public function delete($id_informasi)
    {
        $sudut = Sudut::find($id_informasi);
        if (!$sudut){
            return redirect()->route('informasi.informasi')->with('error', 'informasi tidak ditemukan');
        }
        return view('informasi.informasi-hapus', compact('sudut'));
    }

    public function destroy($id_informasi)
    {
        $sudut = Sudut::find($id_informasi);
        if (!$sudut){
            return redirect()->route('informasi');
            }
            $sudut->delete();
        return redirect()->route ('informasi')->with ('success', 'informasi berhasil dihapus');
    }

    public function cetak()
{
    $sudut = Sudut::all(); // Ambil semua data dari model Sudut
    $pdf = Pdf::loadview('informasi.informasi-cetak', compact('sudut'));
    return $pdf->download('informasi.pdf') ;// Kirim ke view
}



}
