<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CsiUserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class OnePageController extends Controller
{
    // protected $csiUserRepository;

    // public function __construct(CsiUserRepositoryInterface $csiUserRepository)
    // {
    //     $this->csiUserRepository = $csiUserRepository;
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email_user' => [
    //             'required',
    //             'email',
    //             'unique:csi_user,email_user',
    //         ],
    //         'password' => 'required|min:6',
    //     ], [
    //         'email_user.unique' => 'Email sudah terdaftar, gunakan email lain!',
    //         'email_user.required' => 'Email wajib diisi!',
    //         'email_user.email' => 'Masukkan email yang valid!',
    //         'password.required' => 'Password wajib diisi!',
    //         'password.min' => 'Password minimal 6 karakter!',
    //     ]);

    //     $this->csiUserRepository->create([
    //         'email_user' => $request->email_user,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     return redirect()->route('user.create')->with('success', 'User berhasil ditambahkan!');
    // }

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
        return view('OnePage/onepage_eight');
    }
}
