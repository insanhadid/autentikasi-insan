<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mahasiswa.home');
    }


    public function dosenHome()
    {
        return view('dosen.home');
    }


    public function superAdminHome()
    {
        return view('superadmin.home');
    }


    public function adminHome()
    {
        return view('admin.home');
    }


    public function tendikHome()
    {
        return view('tendik.home');
    }


    public function akademikHome()
    {
        return view('akademik.home');
    }


    public function keuanganHome()
    {
        return view('keuangan.home');
    }


    public function direkturHome()
    {
        return view('direktur.home');
    }


    public function wakil1Home()
    {
        return view('wd1.home');
    }


    public function wakil2Home()
    {
        return view('wd2.home');
    }


    public function wakil3Home()
    {
        return view('wd3.home');
    }


    public function lppmHome()
    {
        return view('lppm.home');
    }


    public function sdmHome()
    {
        return view('sdm.home');
    }
}