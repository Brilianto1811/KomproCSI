<?php

namespace App\Http\Controllers;

use App\Models\CsiProyek;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CsiProyekRepositoryInterface;
use App\Repositories\Contracts\CsiUserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class OnePageController extends Controller
{
    protected $csiProyekRepository;

    public function __construct(CsiProyekRepositoryInterface $csiProyekRepository)
    {
        $this->csiProyekRepository = $csiProyekRepository;
    }

    // public function indexPublikHome()
    // {
    //     $proyek = $this->csiProyekRepository->getProyekPublikHome();
    //     dd($proyek);

    //     return view('OnePage/onepage_eight', compact('proyek'));
    // }

    public function getIndexPublikHome()
    {
        // Mengambil semua data proyek dengan status 'I' dari model CsiProyek
        $proyek = CsiProyek::where('status', 'I')->get();  // Menambahkan kondisi untuk status = 'I'

        // Mengirim data proyek ke tampilan
        return view('OnePage/onepage_eight', compact('proyek'));
    }


    public function onePage_one()
    {
        return view('OnePage/onepage_one');
    }

    public function onePage_two()
    {
        return view('OnePage/onepage_two');
    }

    public function onePage_three()
    {
        return view('OnePage/onepage_three');
    }

    public function onePage_four()
    {
        return view('OnePage/onepage_four');
    }

    public function onePage_five()
    {
        return view('OnePage/onepage_five');
    }

    public function onePage_six()
    {
        return view('OnePage/onepage_six');
    }

    public function onePage_seven()
    {
        return view('OnePage/onepage_seven');
    }

    public function onePage_eight()
    {
        $proyek = CsiProyek::where('status', 'P')->get();  // Menambahkan kondisi untuk status = 'I'

        // Mengirim data proyek ke tampilan
        return view('OnePage/onepage_eight', compact('proyek'));
    }

    // public function show(string $uid_proyek)
    // {
    //     $proyek : CsiProyek::
    //     return view('OnePage/showproyek', compact('proyek'));
    // }

    public function showIndexPublik(string $uid_proyek)
    {
        $proyek = CsiProyek::where('uid_proyek', $uid_proyek)->first();
        if (!$proyek) {
            return redirect()->route('proyek.index')->with('error', 'Proyek tidak ditemukan.');
        }

        // Mengirim data proyek ke tampilan
        return view('OnePage/showproyek', compact('proyek'));
    }
}
