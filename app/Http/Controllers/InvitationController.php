<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Junges\InviteCodes\Facades\InviteCodes;

class InvitationController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request): View
    {
        $inviteCode = InviteCodes::create()->expiresAt(today())->save();
        return view('invitation.edit', [
            'inviteCode' => $inviteCode,
            'user' => $request->user(),
        ]);
    }
}
