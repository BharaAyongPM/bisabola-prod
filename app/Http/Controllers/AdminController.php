<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Club;
use App\Models\League;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $totalPlayers = Player::count();
        $totalclub = Club::count();
        $players = Player::all();
        $totalliga = League::count();
        return view('admin.dashboard', compact('user', 'totalPlayers', 'totalclub', 'totalliga'));
    }
}
