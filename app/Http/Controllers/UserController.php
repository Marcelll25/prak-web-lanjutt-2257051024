<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $userModel;
    public $kelasModel;


    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create(){
        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

        public function store(Request $request)
        {

        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
            'foto' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'nama.required' => 'Nama perlu diisi.',
            'npm.required' => 'NPM perlu diisi.',
            'kelas_id.required' => 'Kelas perlu dipilih.',
        ]);


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');


            $this->userModel->create([
                'nama' => $request->input('nama'),
                'npm' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
                'foto' => $filePath,
            ]);
        }

        return redirect()->to('/');
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if ($request->hasFile('foto')) {

            $oldFilename = $user->foto;

            if ($oldFilename) {
                $oldFilePath = public_path('storage/uploads/' . $oldFilename);

                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $file = $request->file('foto');
            $newFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $newFilename, 'public');
            $user->foto = $newFilename;
        }

            $user->save();

            return redirect()->route('user.list')->with('success', 'User Berhasil di Update');
        }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/')->with('success', 'User Berhasil di Hapus');
    }


    public function show($id) {
       $user = UserModel::findOrFail($id);
    $kelas = Kelas::find($user->kelas_id);

    return view('show_user', [
        'title' => 'Show User',
        'user' => $user,
        'nama_kelas' => $kelas ? $kelas->nama_kelas : null,
    ]);
    }
}
