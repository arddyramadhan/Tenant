<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Tenant;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::get();
        // dd($data);
        return view('central.pengguna.index', compact('data'));
    }

    public function create()
    {
        return view('central.pengguna.create');
    }

    public function store(Request $request)
    {
        $user = Pengguna::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'domain'=> $request->domain,
            'password'=> \Hash::make($request->password),
        ]);
        $tenant1 = Tenant::create(['id' => $user->domain]);
        $tenant1->domains()->create(['domain' => $user->domain . '.' . env('APP_CENTRAL_DOMAIN')]);
        return redirect('/pengguna');
    }
}
