<?php

namespace App\Http\Controllers;

use App\Repositories\CsiProyekRepository;
use App\Repositories\Contracts\CsiProyekRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Laravel\Facades\Image;
use Spatie\Image\Image;


class CsiProyekController extends Controller
{
    protected $csiProyekRepository;

    public function __construct(CsiProyekRepositoryInterface $csiProyekRepository)
    {
        $this->csiProyekRepository = $csiProyekRepository;
    }

    public function index(Request $request)
    {
        // $proyek = $this->csiProyekRepository->getAll();
        $searchTerm = $request->input('search', '');
        $proyek = $this->csiProyekRepository->getProyekValidasi($searchTerm);

        return view('OnePage.proyek.index', compact('proyek', 'searchTerm'));
    }

    public function indexPublik(Request $request)
    {
        // if (Auth::user()->id_role != 1) {
        //     return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke menu ini!');
        // }
        $searchTerm = $request->input('search', '');
        $proyek = $this->csiProyekRepository->getProyekPublik($searchTerm);

        return view('OnePage.proyek.indexPublik', compact('proyek', 'searchTerm'));
    }

    public function indexPublikHome()
    {
        $proyek = $this->csiProyekRepository->getProyekPublikHome();
        dd($proyek);

        return view('OnePage.onepage_eight', compact('proyek'));
    }

    public function create()
    {
        return view('OnePage.proyek.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_proyek' => 'required|string|max:255',
            'deskripsi_proyek' => 'required',
            'file_proyek.*' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // Max 5MB for PDF, Word
            'bukti_proyek.*' => 'nullable|file|mimes:jpeg,jpg,png|max:5120', // Max 5MB for images
            'partner_proyek' => 'nullable|string|max:255',
            'tgl_mulai' => 'nullable|date',
            'tgl_selesai' => 'nullable|date',
            'status' => 'nullable|in:P,I',
        ]);

        // Handle file uploads if present
        if ($request->hasFile('file_proyek')) {
            $validated['file_proyek'] = $this->handleFileUpload($request->file('file_proyek'), 'files');
        }

        if ($request->hasFile('bukti_proyek')) {
            $validated['bukti_proyek'] = $this->handleFileUpload($request->file('bukti_proyek'), 'images');
        }

        // Save only the file paths in the database
        $validated['file_proyek'] = implode(',', $validated['file_proyek'] ?? []);
        $validated['bukti_proyek'] = implode(',', $validated['bukti_proyek'] ?? []);

        // Generate uid_proyek, assign id_user, and set tgl_upload
        $validated['uid_proyek'] = Str::uuid();
        $validated['id_user'] = auth()->id(); // Automatically assign the user who is logged in
        $validated['tgl_upload'] = Carbon::now();

        // Create the project
        $this->csiProyekRepository->create($validated);

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dibuat!');
    }


    private function handleFileUpload($files, $folder)
    {
        $uploadedFiles = [];
        foreach ($files as $file) {
            // Check file size
            if ($file->getSize() > 5120 * 1024) { // 5MB limit
                return redirect()->back()->with('error', 'File terlalu besar, kompres hingga kurang dari 5MB.');
            }

            // Validate file type based on folder
            if ($folder == 'files' && !in_array($file->getClientOriginalExtension(), ['pdf', 'doc', 'docx'])) {
                return redirect()->back()->with('error', 'Tipe file untuk Proyek hanya bisa PDF atau Word.');
            } elseif ($folder == 'images' && !in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])) {
                return redirect()->back()->with('error', 'Tipe file untuk Bukti hanya bisa JPEG, JPG, atau PNG.');
            }

            // Generate unique file name
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs("public/{$folder}", $filename); // Store in public disk

            // Add file path to the array
            $uploadedFiles[] = "storage/{$folder}/" . $filename;
        }
        return $uploadedFiles; // Return the array of file paths
    }


    // private function handleFileUpload($files, $folder)
    // {
    //     $uploadedFiles = [];
    //     foreach ($files as $file) {
    //         // Check file size
    //         if ($file->getSize() > 5120 * 1024) { // 5MB limit
    //             return redirect()->back()->with('error', 'File terlalu besar, kompres hingga kurang dari 5MB.');
    //         }

    //         // Validate file type based on folder
    //         if ($folder == 'files' && !in_array($file->getClientOriginalExtension(), ['pdf', 'doc', 'docx'])) {
    //             return redirect()->back()->with('error', 'Tipe file untuk Proyek hanya bisa PDF atau Word.');
    //         } elseif ($folder == 'images' && !in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])) {
    //             return redirect()->back()->with('error', 'Tipe file untuk Bukti hanya bisa JPEG, JPG, atau PNG.');
    //         }

    //         // Generate unique file name
    //         $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
    //         $path = $file->storeAs("uploads/{$folder}", $filename, 'public'); // Store in public disk
    //         if ($folder === 'images') {
    //             // Path ke gambar yang akan dikompres
    //             $imagePath = Storage::path($path);

    //             // Kompres gambar menggunakan Spatie Image
    //             Image::load($imagePath)
    //                 ->quality(50) // Set kualitas ke 50%
    //                 ->save($imagePath); // Simpan hasil kompresi di lokasi yang sama
    //         }
    //         // Add file path to the array
    //         $uploadedFiles[] = "uploads/{$folder}/" . $filename;
    //     }
    //     return json_encode($uploadedFiles); // Return the array of file paths as JSON
    // }



    public function show(string $uid_proyek)
    {
        $proyek = $this->csiProyekRepository->getByUid($uid_proyek); // Memanggil metode getByUid
        if (!$proyek) {
            return redirect()->route('proyek.index')->with('error', 'Proyek tidak ditemukan.');
        }
        return view('OnePage.proyek.show', compact('proyek'));
    }

    public function edit(string $uid_proyek)
    {
        $proyek = $this->csiProyekRepository->getByUid($uid_proyek); // Memanggil metode getByUid
        if (!$proyek) {
            return redirect()->route('proyek.index')->with('error', 'Proyek tidak ditemukan.');
        }
        return view('OnePage.proyek.edit', compact('proyek'));
    }

    /**
     * Mengupdate proyek berdasarkan uid_proyek
     */
    public function update(Request $request, string $uid_proyek)
    {
        $validated = $request->validate([
            'judul_proyek' => 'required|string|max:255',
            'deskripsi_proyek' => 'required',
            'file_proyek.*' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // Max 5MB for PDF, Word
            'bukti_proyek.*' => 'nullable|file|mimes:jpeg,jpg,png|max:5120', // Max 5MB for images
            'partner_proyek' => 'nullable|string|max:255',
            'tgl_mulai' => 'nullable|date',
            'tgl_selesai' => 'nullable|date',
            'status' => 'nullable|in:P,I',
        ]);

        // Handle file uploads if present
        if ($request->hasFile('file_proyek')) {
            $validated['file_proyek'] = $this->handleFileUpload($request->file('file_proyek'), 'files');
        }

        if ($request->hasFile('bukti_proyek')) {
            $validated['bukti_proyek'] = $this->handleFileUpload($request->file('bukti_proyek'), 'images');
        }

        // Update the project
        $updated = $this->csiProyekRepository->update($uid_proyek, $validated);

        if (!$updated) {
            return redirect()->route('proyek.index')->with('error', 'Proyek gagal diperbarui.');
        }

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil diperbarui!');
    }

    /**
     * Menghapus proyek berdasarkan uid_proyek
     */
    public function destroy(string $uid_proyek)
    {
        $deleted = $this->csiProyekRepository->delete($uid_proyek);

        if (!$deleted) {
            return redirect()->route('proyek.index')->with('error', 'Proyek gagal dihapus.');
        }

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dihapus!');
    }

    // public function showValidasiProyek()
    // {
    //     // Mengambil semua proyek dengan status 'I'
    //     $proyekValidasi = $this->csiProyekRepository->getProyekValidasi();

    //     // Menampilkan proyek yang validasi (status 'I')
    //     return view('proyek.validasi', compact('proyekValidasi'));
    // }
}
