<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];

    return view('list_user', $data);
    }


    public function create(){
        $kelasModel = new Kelas();

        // Mengambil data kelas menggunakan method getKelas
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:255',
        'kelas_id' => 'required|integer',
        'foto' =>
        'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Meng-handle upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename); // Simpan file ke storage disk public
        
            // Simpan data user ke database
            $this->userModel->create([
                'nama' => $request->input('nama'),
                'npm' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
                'foto' => $filename, // Simpan nama file di database
            ]);
        }        
        return redirect()->to('/user')->with('success', 'User
        berhasil ditambahkan');
    }
    public function show($id)
    {

        $user = UserModel::findOrFail($id);
        $kelas = Kelas::find($user->kelas_id); // Jika ingin menampilkan nama kelas

        return view('profile', [
            'title' => 'Show User',
            'user' => $user,
            'nama_kelas' => $kelas ? $kelas->nama_kelas : null, // Pastikan nama kelas ada, jika tidak tampilkan null
        ]);
    }
    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';

        return view('layouts.edit_user', compact('user', 'kelas', 'title'));
    }
    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);

        // Update data user lainnya
        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        // Cek apakah ada file foto yang di-upload
        if ($request->hasFile('foto')) {
            // Ambil nama file foto lama dari database
            $oldFilename = $user->foto;

            // Hapus foto lama jika ada
            if ($oldFilename) {
                $oldFilePath = public_path('storage/uploads/' . $oldFilename);
                // Cek apakah file lama ada dan hapus
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath); // Hapus foto lama dari folder
                }
            }

            // Simpan file baru dengan storeAs
            $file = $request->file('foto');
            $newFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $newFilename, 'public'); // Simpan ke folder storage/public/uploads

            // Update nama file di database
            $user->foto = $newFilename;
        }

        // Simpan perubahan pada user
        $user->save();

        return redirect()->route('user.list')->with('success', 'User Berhasil di Update');
    }
    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();
    
        return redirect()->to('/user/list')->with('success', 'User Berhasil di Hapus');
    }
    
}