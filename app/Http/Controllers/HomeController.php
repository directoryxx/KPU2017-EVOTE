<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Crypt;
use DB;
use DateTime;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $sudah = Crypt::encrypt('sudah');
      $belum = Crypt::encrypt('belum');
      $votesema = DB::connection('kpuadmin')
      ->table('votesema')
      ->where('nimpemilih','=',Auth::user()->username)
      ->count();
      $votedema = DB::connection('kpuadmin')
      ->table('votedema')
      ->where('nimpemilih','=',Auth::user()->username)
      ->count();
      if (Auth::user()->status == "A" && ($votesema == 0 OR $votedema == 0)) {
        if ($request->session()->has('sema')) {
              if ($request->session()->has('dema')) {
                $request->session()->flush();
                Auth::logout();
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Terima Kasih Telah Berpartisipasi');
                return redirect('/login');
              } else {
                $datad = DB::connection('kpuadmin')->table('dema')
                ->get();
                // dd($datas);
                return view('dema',compact('datad'));
              }
        } else {
              $datas = DB::connection('kpuadmin')->table('sema')
              ->get();
              // dd($datas);
              return view('sema',compact('datas'));
        }
      } elseif (Auth::user()->status == "A" && $votesema == 1 && $votedema == 1) {
        $request->session()->flush();
        Auth::logout();
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Terima Kasih Telah Berpartisipasi');
        return redirect('/login');
      } else {
        Auth::logout();
        return redirect('/login');
      }

    }

    public function store(Request $request)
    {
      $sudah = Crypt::encrypt('sudah');
      if ($request['organisasi'] == "sema") {
        $nimpemilih = Auth::user()->username;
        $dipilih = $request['yangdipilih'];
        $votesema = DB::connection('kpuadmin')
        ->table('votesema')
        ->where('nimpemilih','=',Auth::user()->username)
        ->count();
        $votedema1 = DB::connection('kpuadmin')
        ->table('votedema')
        ->where('nimpemilih','=',Auth::user()->username)
        ->count();
        if ($votesema == 0) {
          DB::connection('kpuadmin')->table('votesema')->insert(
              ['nimpemilih' => $nimpemilih, 'dipilih' => $dipilih, 'created_at' => new \dateTime , 'updated_at' => new \dateTime ]
          );
          DB::connection('kpudo')->table('votesema')->insert(
              ['nimpemilih' => $nimpemilih, 'dipilih' => $dipilih, 'created_at' => new \dateTime , 'updated_at' => new \dateTime ]
          );
          $request->session()->put('sema', $sudah);
          return redirect('home');
        } else {
          $request->session()->put('sema', $sudah);
          return redirect('home');
        }
      } elseif ($request['organisasi'] == "dema") {
        $nimpemilih = Auth::user()->username;
        $dipilih = $request['yangdipilih'];
<<<<<<< Updated upstream
        DB::connection('kpuadmin')->table('votedema')->insert(
            ['nimpemilih' => $nimpemilih, 'dipilih' => $dipilih ]
        );
        $request->session()->put('dema', $sudah);
        $datad = DB::connection('kpuadmin')->table('sema')->join('votesema','sema.id','=','votesema.dipilih')->get();
        $datas = DB::connection('kpuadmin')->table('dema')->join('votedema','dema.id','=','votedema.dipilih')->get();

        return redirect('home',compact('datad','datas'));
=======
        $votedema1 = DB::connection('kpuadmin')
        ->table('votedema')
        ->where('nimpemilih','=',Auth::user()->username)
        ->count();
        if ($votedema1 == 0) {
          DB::connection('kpuadmin')->table('votedema')->insert(
              ['nimpemilih' => $nimpemilih, 'dipilih' => $dipilih, 'created_at' => new \dateTime , 'updated_at' => new \dateTime ]
          );
          DB::connection('kpudo')->table('votedema')->insert(
              ['nimpemilih' => $nimpemilih, 'dipilih' => $dipilih, 'created_at' => new \dateTime , 'updated_at' => new \dateTime ]
          );
          $request->session()->put('dema', $sudah);
          return redirect('home');
        } else {
          echo "Error";
        }
>>>>>>> Stashed changes
      }
    }
}
