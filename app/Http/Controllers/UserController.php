<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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

        return view('/profile', [
          'resetMessage' => 'Your password has been updated.'
        ]);
}

public function update(Request $request)
{

      $user = Auth::user();
      $user->name=$request->input('name');
      $user->email=$request->input('email');
      $user->language=$request->input('language');
      $user->location=$request->input('location');

      $user->save();
      return view('/profile', [
        'resetMessage' => 'Your information has been updated.'
      ]);

}


}
