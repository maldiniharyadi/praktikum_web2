<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($request->pasword);
        $input['role'] = 'mahasiswa';
        if ($request->foto) {
            $name_file = $request->npm . '_' . $request->foto->getClientOriginalName();
            $input['foto'] = $name_file;
            $request->file('foto')->move('storage/foto/', $name_file);
        }
        $user = User::create($input);
        $input['user_id'] = $user->id;
        $mahasiswa = Mahasiswa::create($input);
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil disimpan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $user = $mahasiswa->user;
        $input = $request->all();
        if ($request->foto) {
            if ($mahasiswa->foto) {
                Storage::delete('public/foto/' . $mahasiswa->foto);
            }
            $name_file = $request->npm . '_' . $request->foto->getClientOriginalName();
            $input['foto'] = $name_file;
            $request->file('foto')->move('storage/foto', $name_file);
        }
        if ($request->password) {
            $input['password'] = Hash::make($request->password);
        } else {
            $input['password'] = $user->password;
        }
        $mahasiswa->update($input);
        $user->update($input);
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil diubah');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findOrfail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $request->flash();
        if (isset($request->keyword)) {
            $mahasiswa = Mahasiswa::where('npm', 'LIKE', '%' . $request->keyword . '%')->latest()->get();
            return view('mahasiswa.index', compact('mahasiswa.index'));
        } else {
            return redirect()->route('mahasiswa.index');
        }
    }

    public function print()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.print', compact('mahasiswa'));
    }
}
