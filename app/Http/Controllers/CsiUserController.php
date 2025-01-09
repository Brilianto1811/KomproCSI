<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CsiUserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CsiUserController extends Controller
{
    protected $csiUserRepository;

    public function __construct(CsiUserRepositoryInterface $csiUserRepository)
    {
        $this->csiUserRepository = $csiUserRepository;
    }
    public function index()
    {
        // Cek apakah user yang sedang login memiliki role id_role == 1
        if (Auth::user()->id_role != 1) {
            // Jika tidak, arahkan mereka ke halaman dashboard dengan pesan error
            return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke menu ini!');
        }

        // Ambil data user menggunakan repository
        $users = $this->csiUserRepository->getAll();

        // Kembalikan ke view dengan data users
        return view('OnePage.user.index', compact('users'));
    }

    public function create()
    {
        return view('OnePage.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username_user' => 'required|string|max:255',
            'email_user' => 'required|email|max:255',
            'password' => 'required|string',
        ]);

        $validated['id_role'] = 2;
        $validated['password'] = bcrypt($validated['password']);

        $this->csiUserRepository->createUser($validated);

        return redirect()->route('user.index')->with('success', 'User created successfully!');
    }

    public function show($id)
    {
        $user = $this->csiUserRepository->getById($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->csiUserRepository->update($id, $request->all());
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    public function editPassword($id)
    {
        $user = $this->csiUserRepository->getAllUsers()->find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found!');
        }

        return view('OnePage.user.edit-password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => 'required|string',
        ]);

        $this->csiUserRepository->updatePassword($id, $validated['password']);

        return redirect()->route('user.index')->with('success', 'Password updated successfully!');
    }


    public function destroy($id)
    {
        $deleted = $this->csiUserRepository->delete($id);
        if (!$deleted) {
            return redirect()->route('user.index')->with('error', 'User not found');
        }
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
}
