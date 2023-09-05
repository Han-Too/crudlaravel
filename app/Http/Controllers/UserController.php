<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $data = User::all();

        return view('admin.user.user', compact('data'));
    }

    public function showadd(){
        return view('admin.user.tambah');
    }
    public function adduser(Request $request){
        $cek = User::where('email', $request->email)->first();
        // dd($password);

        if (!empty($cek)) {
            echo "<script>alert('Email Sudah Ada')</script>";
            return redirect('/');
        } else {
            $tambah = User::insert([
                'name' => $request->nama,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'password' => Hash::make($request->password),
                'role' => '0',
            ]);
            echo "<script>alert('Berhasil Membuat Akun')</script>";
            return redirect('useradmin');
        }
    }
    public function showupdate($id){
        $data = User::where('id',$id)->first();
        return view('admin.user.update',compact('data'));
    }
    public function updateuser(Request $request){
        $cek = User::where('email', $request->email)->first();
        
        if (empty($cek)) {
            echo "<script>alert('Data Tidak Ada')</script>";
            return redirect('/');
        } else {
            $update = User::where('id',$request->id)->update([
                'name' => $request->nama,
                'email' => $request->email,
                'telepon' => $request->telepon,
            ]);
            // dd($tambah);
            echo "<script>alert('Berhasil Update Akun')</script>";
            return redirect('useradmin');
        }
    }

    public function deleteuser($id){
        $delete = User::where('id',$id)->delete();
        echo "<script>alert('Berhasil Update Akun')</script>";
        return redirect('useradmin');
    }
    public function login()
    {
        $cek = User::where('email', request('email'))->first();
        $password = Hash::check(request('password'), $cek->password);
        // dd($password);

        if (empty($cek)) {
            echo "<script>alert('Email dan Password Anda Salah')</script>";
            return redirect('/');
        } else {
            if ($cek->role == '1') {

                session()->put('login', 'login');
                echo "<script>alert('Berhasil Login')</script>";
                return redirect('adminindex');
            } else {
                session()->put('login', 'login');
                echo "<script>alert('Berhasil Login')</script>";
                return redirect('userindex');
            }
        }
    }

    public function register(Request $request)
    {
        $cek = User::where('email', $request->email)->first();
        // dd($password);

        if (!empty($cek)) {
            echo "<script>alert('Email Sudah Ada')</script>";
            return redirect('/');
        } else {
            $tambah = User::insert([
                'name' => $request->nama,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'password' => Hash::make($request->password),
                'role' => '0',
            ]);
            echo "<script>alert('Berhasil Membuat Akun')</script>";
            return redirect('adminindex');
        }
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/');
    }

    public function adminindex()
    {
        return view('admin.admin');
    }

    public function userindex()
    {
        return view('user.user');
    }
}