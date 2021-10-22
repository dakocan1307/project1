<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

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
    public function indexRedirect()
    {
        $user = Auth::user();

        if ($user->can('admin')) {
            return redirect()->route('indexRoot');
        } elseif ($user->can('manager')) {
            return redirect()->route('indexRoot');
        } elseif ($user->can('spv')) {
            return redirect()->route('indexSPV');
        } elseif ($user->can('cs_leader')) {
            return redirect()->route('indexCS');
        } elseif ($user->can('cs_staff')) {
            return redirect()->route('indexCS');
        } elseif ($user->can('ts_leader')) {
            return redirect()->route('indexTS');
        } elseif ($user->can('ts_staff')) {
            return redirect()->route('indexTS');
        }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexRoot()
    {
        $data['PARENTTAG'] = 'dashboard';

        return view('dashboard.root', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexSPV()
    {
        $data['PARENTTAG'] = 'dashboard';

        return view('dashboard.spv', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexCS()
    {
        $data['PARENTTAG'] = 'dashboard';

        return view('dashboard.cs', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexTS()
    {
        $data['PARENTTAG'] = 'dashboard';

        return view('dashboard.ts', $data);
    }
}
