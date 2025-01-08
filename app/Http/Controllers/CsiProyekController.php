<?php

namespace App\Http\Controllers;

use App\Repositories\CsiProyekRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;


class ProyekController extends Controller
{
    protected $csiproyekRepository;

    public function __construct(CsiProyekRepository $csiproyekRepository)
    {
        $this->csiproyekRepository = $csiproyekRepository;
    }

    public function index()
    {
        $proyek = $this->csiproyekRepository->getAll();
        return view('OnePage.proyek.index', compact('proyek'));
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

        // Generate uid_proyek, assign id_user, and set tgl_upload
        $validated['uid_proyek'] = Str::uuid();
        $validated['id_user'] = auth()->id(); // Automatically assign the user who is logged in
        $validated['tgl_upload'] = Carbon::now();

        // Handle file uploads if present
        if ($request->hasFile('file_proyek')) {
            $validated['file_proyek'] = $this->handleFileUpload($request->file('file_proyek'), 'files');
        }

        if ($request->hasFile('bukti_proyek')) {
            $validated['bukti_proyek'] = $this->handleFileUpload($request->file('bukti_proyek'), 'images');
        }

        // Create the project
        $this->csiproyekRepository->create($validated);

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dibuat!');
    }

    /**
     * Handle file uploads, compress, and store in respective folder.
     *
     * @param  array  $files
     * @param  string  $folder
     * @return string
     */
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
            $path = $file->storeAs("uploads/{$folder}", $filename, 'public'); // Store in public disk

            // If it's an image, compress it
            if ($folder == 'images') {
                $image = Image::make(Storage::path($path));
                $image->save(Storage::path($path), 50); // Compress to 50% quality
            }

            // Add file path to the array
            $uploadedFiles[] = "uploads/{$folder}/" . $filename;
        }
        return json_encode($uploadedFiles); // Return the array of file paths as JSON
    }
}
