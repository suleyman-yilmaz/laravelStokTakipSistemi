<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ProductsIn;
use App\Models\ProductsOut;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserControlelr extends Controller
{
    use AuthorizesRequests; // Bu satırı ekleyin
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $aboutTitle1 = About::where('id', 1)->first();
            $aboutTitle2 = About::where('id', 2)->first();
            $aboutTitle3 = About::where('id', 3)->first();
            $aboutTitle4 = About::where('id', 4)->first();
            $aboutTitle5 = About::where('id', 5)->first();
            $aboutTitle6 = About::where('id', 6)->first();

            $aboutDescription1 = About::where('id', 1)->first();
            $aboutDescription2 = About::where('id', 2)->first();
            $aboutDescription3 = About::where('id', 3)->first();
            $aboutDescription4 = About::where('id', 4)->first();
            $aboutDescription5 = About::where('id', 5)->first();
            $aboutDescription6 = About::where('id', 6)->first();

            return view('auth.profile', compact(
                'user',
                'aboutTitle1',
                'aboutTitle2',
                'aboutTitle3',
                'aboutTitle4',
                'aboutTitle5',
                'aboutTitle6',
                'aboutDescription1',
                'aboutDescription2',
                'aboutDescription3',
                'aboutDescription4',
                'aboutDescription5',
                'aboutDescription6'
            ));
        }
    }


    /**
     * Update the specified resource in storage.
     */
    // Request $request, string $id
    public function update()
    {
        $user = Auth::user(); // Giriş yapmış kullanıcıyı alıyoruz.
        $this->authorize('update', $user);

        return view('auth.updateProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'old_password' => 'required',
            'new_password' => 'nullable|min:8|confirmed',
            'gender' => 'required|in:0,1',
        ]);

        $user = User::find(Auth::id());

        // Eski şifreyi doğrula
        if (!Hash::check($request->old_password, $user->password)) {
            throw ValidationException::withMessages([
                'old_password' => 'Eski şifre doğru değil.',
            ]);
        }

        // İsim ve e-posta güncelleme
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;

        // Yeni şifre varsa güncelle
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profil başarıyla güncellendi.');
    }
}
