<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AdminInterface;
use App\Models\Admin;
use Illuminate\Http\Request;



class AdminRepository implements AdminInterface
{

    public function index()
    {
        $superAdmin = Admin::find(1);
        if (auth()->guard('admin')->user()->email == $superAdmin->email) {
            $admins = Admin::all();
            return view('aPanal/Admin/viewAdmin', ['admins' => $admins]);
        } else {
            return redirect("/dashboard");
        }
    }
    public function create()
    {
        $superAdmin = Admin::find(1);
        if (auth()->guard('admin')->user()->email == $superAdmin->email) {
            return view('aPanal/Admin/addAdmin');
        } else {
            return redirect("/dashboard");
        }
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        $superAdmin = Admin::find(1);
        if (auth()->guard('admin')->user()->email == $superAdmin->email) {
            return view('aPanal/Admin/editAdmin', ['admin' => $admin]);
        } else {
            return redirect("/dashboard");
        }
    }

    public function store($request)
    {
        $data = request()->all();

        $data['password'] = bcrypt($data['password']);
        Admin::create($data);
        session()->flash('Add_success', 'Add About Done');
        return back();
    }

    public function update($request, $adminId)
    {
        $data = request()->all();
        
        $admin = Admin::find($adminId);
        if ($request->password == null) {
            $data['password'] = $admin->password;
        } else {
            $data['password'] = bcrypt($request->password);
        }
        $admin->update($data);
        session()->flash('Update_success', 'Update Admin Done');
        return back();
    }
    public function delete($adminId)
    {
        $superAdmin = Admin::find(1);
        if (auth()->user()->email == $superAdmin->email) {
            Admin::find($adminId)->delete();
            return back();
        } else {
            return redirect("/dashboard");
        }
    }

    function is_login($request)
    {
        $is_admin = auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($is_admin)
            return redirect(url('/dashboard'));
        else
            return redirect(url('/login'));
    }
    public function logout()
    {
        if (auth()->guard('admin')->user()) {
            auth()->guard('admin')->logout();
        }
        return redirect(url('/login'));
    }
}
