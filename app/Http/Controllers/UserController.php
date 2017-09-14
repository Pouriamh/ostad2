<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
     * Show a form so the current user can reset it's password.
     *
     * @return \Illuminate\View\View
     */
    public function password()
    {
        return view('password-reset');
    }

    /**
     * Reset the password of the current user.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
public function resetPassword(Request $request)
{
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = $request->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return view('/profile');
}
}
