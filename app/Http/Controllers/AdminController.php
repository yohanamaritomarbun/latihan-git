<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_postingansatu()
    {
        return view('admin.postingansatu');
    }

    public function show_postingandua()
    {
        return view('admin.postingandua');
    }

    public function show_postingantiga()
    {
        return view('admin.postingantiga');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
