<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function indexDashboard()
    {
        $pemasukan_hari_ini = Pemasukan::whereDate('created_at', Carbon::now())->sum('nominal_pemasukan');
        $pemasukan_minggu_ini = Pemasukan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pemasukan');
        $pemasukan_bulan_ini = Pemasukan::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pemasukan');
        $pemasukan_tahun_ini = Pemasukan::whereYear('created_at', Carbon::now()->year)->sum('nominal_pemasukan');

        $pengeluaran_hari_ini = Pengeluaran::whereDate('created_at', Carbon::now())->sum('nominal_pengeluaran');
        $pengeluaran_minggu_ini = Pengeluaran::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pengeluaran');
        $pengeluaran_bulan_ini = Pengeluaran::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pengeluaran');
        $pengeluaran_tahun_ini = Pengeluaran::whereYear('created_at', Carbon::now()->year)->sum('nominal_pengeluaran');

        $pemasukan = Pemasukan::sum('nominal_pemasukan');
        $pengeluaran = Pengeluaran::sum('nominal_pengeluaran');

        return view('pages.dashboard', [
            'pemasukan_hari_ini' => $pemasukan_hari_ini,
            'pemasukan_minggu_ini' => $pemasukan_minggu_ini,
            'pemasukan_bulan_ini' => $pemasukan_bulan_ini,
            'pemasukan_tahun_ini' => $pemasukan_tahun_ini,
            'pengeluaran_hari_ini' => $pengeluaran_hari_ini,
            'pengeluaran_minggu_ini' => $pengeluaran_minggu_ini,
            'pengeluaran_bulan_ini' => $pengeluaran_bulan_ini,
            'pengeluaran_tahun_ini' => $pengeluaran_tahun_ini,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
        ]);
    }

    public function indexPemasukan(Request $request)
    {
        // dd($request->all());
        if ($request['tanggal_mulai'] && $request['tanggal_selesai']) {
            $data = Pemasukan::whereBetween('created_at', [$request['tanggal_mulai'] . " 00:00:00", $request['tanggal_selesai'] . " 23:59:59"])->get();

            // dd($data);
            $hari_ini = Pemasukan::whereDate('created_at', Carbon::now())->sum('nominal_pemasukan');
            $minggu_ini = Pemasukan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pemasukan');
            $bulan_ini = Pemasukan::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pemasukan');
            $tahun_ini = Pemasukan::whereYear('created_at', Carbon::now()->year)->sum('nominal_pemasukan');

            $total_pemasukan = Pemasukan::whereBetween('created_at', [$request['tanggal_mulai'] . " 00:00:00", $request['tanggal_selesai'] . " 23:59:59"])->sum('nominal_pemasukan');

            // dd($minggu_ini);
            return view('pages.pemasukan', [
                'hari_ini' => $hari_ini,
                'minggu_ini' => $minggu_ini,
                'bulan_ini' => $bulan_ini,
                'tahun_ini' => $tahun_ini,
                'total_pemasukan' => $total_pemasukan,
                'data' => $data
            ]);
        }

        $data = Pemasukan::whereDate('created_at', Carbon::now())->get();

        $hari_ini = Pemasukan::whereDate('created_at', Carbon::now())->sum('nominal_pemasukan');
        $minggu_ini = Pemasukan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pemasukan');
        $bulan_ini = Pemasukan::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pemasukan');
        $tahun_ini = Pemasukan::whereYear('created_at', Carbon::now()->year)->sum('nominal_pemasukan');

        // dd($minggu_ini);
        return view('pages.pemasukan', [
            'hari_ini' => $hari_ini,
            'minggu_ini' => $minggu_ini,
            'bulan_ini' => $bulan_ini,
            'tahun_ini' => $tahun_ini,
            'total_pemasukan' => 0,
            'data' => $data
        ]);
    }

    public function storePemasukan(Request $request)
    {
        // dd($request->all());

        if ($request['tipe_pemasukan'] == 'Playstation') {
            Pemasukan::create([
                'tipe_pemasukan' => $request['tipe_pemasukan'],
                'tipe_ps' => $request['tipe_ps'],
                'jam_mulai' => $request['jam_mulai'],
                'jam_selesai' => $request['jam_selesai'],
                'nominal_pemasukan' => $request['nominal']
            ]);
        } else {
            Pemasukan::create([
                'tipe_pemasukan' => $request['tipe_pemasukan'],
                'nama_pemasukan' => $request['nama_pemasukan'],
                'nominal_pemasukan' => $request['nominal_pemasukan']
            ]);
        }

        return back()->withSuccess('Berhasil Menambahkan Pemasukan ' . $request['tipe_pemasukan']);
    }
    public function indexPengeluaran(Request $request)
    {

        if ($request['tanggal_mulai'] && $request['tanggal_selesai']) {
            $data = Pengeluaran::whereBetween('created_at', [$request['tanggal_mulai'] . " 00:00:00", $request['tanggal_selesai'] . " 23:59:59"])->get();

            // dd($data);
            $hari_ini = Pengeluaran::whereDate('created_at', Carbon::now())->sum('nominal_pengeluaran');
            $minggu_ini = Pengeluaran::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pengeluaran');
            $bulan_ini = Pengeluaran::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pengeluaran');
            $tahun_ini = Pengeluaran::whereYear('created_at', Carbon::now()->year)->sum('nominal_pengeluaran');

            $total_pengeluaran = Pengeluaran::whereBetween('created_at', [$request['tanggal_mulai'] . " 00:00:00", $request['tanggal_selesai'] . " 23:59:59"])->sum('nominal_pengeluaran');

            // dd($minggu_ini);
            return view('pages.pengeluaran', [
                'hari_ini' => $hari_ini,
                'minggu_ini' => $minggu_ini,
                'bulan_ini' => $bulan_ini,
                'tahun_ini' => $tahun_ini,
                'total_pengeluaran' => $total_pengeluaran,
                'data' => $data
            ]);
        }

        $data = Pengeluaran::whereDate('created_at', Carbon::now())->get();
        $hari_ini = Pengeluaran::whereDate('created_at', Carbon::now())->sum('nominal_pengeluaran');
        $minggu_ini = Pengeluaran::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('nominal_pengeluaran');
        $bulan_ini = Pengeluaran::whereMonth('created_at', Carbon::now()->month)->sum('nominal_pengeluaran');
        $tahun_ini = Pengeluaran::whereYear('created_at', Carbon::now()->year)->sum('nominal_pengeluaran');

        return view('pages.pengeluaran', [
            'hari_ini' => $hari_ini,
            'minggu_ini' => $minggu_ini,
            'bulan_ini' => $bulan_ini,
            'tahun_ini' => $tahun_ini,
            'total_pengeluaran' => 0,
            'data' => $data
        ]);
    }
    public function storePengeluaran(Request $request)
    {
        // dd($request->all());
        if ($request['bukti_pengeluaran']) {
            $foto = $request['bukti_pengeluaran'];
            $foto_name = time() . $foto->getClientOriginalName();
            $foto->move('images/pengeluaran', $foto_name);

            $fotoName = $foto_name;
        }

        $data = Pengeluaran::create([
            'nama_pengeluaran' => $request['nama_pengeluaran'],
            'nominal_pengeluaran' => $request['nominal_pengeluaran'],
            'bukti_pengeluaran' => $fotoName
        ]);

        return back()->withSuccess('Berhasil Menambahkan Data Pengeluaran');
    }
}
