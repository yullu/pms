<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Medicine;
use App\Models\MedicinesStock;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $title = 'Dashboard';
        $totalcustomers = Customer::count();
        $totalmedicine = Medicine::count();
        $totalmedicinestock = MedicinesStock::count();
        $totalsuppliers = Supplier::count();
        $totalinvoices = Invoice::count();
        $totalpurchases = Purchase::count();
        return view('admin.dashboard.dashboard', compact('title','totalcustomers', 'totalmedicine','totalmedicinestock','totalsuppliers','totalinvoices','totalpurchases'));
    }
    public function my_account()
    {
        $user = User::find(Auth::user()->id);
        return view('admin.my_account.update',compact('user'));
    }
    public function my_account_save(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if(!empty($request->file('profile_photo')))
        {
            if(!empty($user->profile_photo) && file_exists('uploads/profile_photo/'.$user->profile_photo))
            {
                unlink('uploads/profile_photo/'.$user->profile_photo);
            }
            $file = $request->file('profile_photo');
            $randomStr = Str::random(30);
            $filename   = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('uploads/profile_photo',$filename);
            $user->profile_photo = $filename;


        }
        $user->update();
        return redirect('admin/dashboard/my_account');

    }
}
