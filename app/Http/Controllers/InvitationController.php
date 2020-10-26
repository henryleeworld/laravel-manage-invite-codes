<?php

namespace App\Http\Controllers;

use Junges\InviteCodes\Facades\InviteCodes;

class InvitationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLink()
    {
        $inviteCode = InviteCodes::create()->save();
        return view('profile/invitation', compact('inviteCode'));
    }
}
