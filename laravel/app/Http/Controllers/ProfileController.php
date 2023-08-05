<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\UserService;
use Hash;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function changePassword(Request $request) {

        if (UserService::getUserManager()->getResetPasswordValidate($request)) {
            

            $status = UserService::getUserManager()->resetPassword($request);
            
            if ($status) {
                return redirect()->back()->with('success.pass', 'Password updated');
            }

            
            return redirect()->back()->with('error.pass', 'failed to update');

        }
        
        return redirect()->back()->with('error.pass', 'Your current password is not matched');

    }

    public function editProfile(Request $request) {

        if (UserService::getUserManager()->getEditProfileValidate($request)) {
            
            $status = UserService::getUserManager()->editProfile($request);
            
            if ($status) {
                return redirect()->back()->with('success.info', 'information updated');
            }
            
            return redirect()->back()->with('error.info', 'failed to update');

        }
        
        return redirect()->back()->with('error.info', 'Your current password is not matched');

    }


    public function getSettingPage() {
        return view('profile.setting');
    }
}
