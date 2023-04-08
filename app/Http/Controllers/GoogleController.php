<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Exception\ClientException;
use Laravel\Socialite\Two\GoogleProvider;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
//     $user = User::find($id_user);
//         $validasi = $request->validate([
//         'name' => 'required|string|min:3|max:30|unique:user,username,'.$id_user,
//         'email' => 'required|email|string|max:255|unique:user,email,'.$id_user,
// ]);

        try{
            $user = Socialite::driver('google')->user();
        } 
        catch (Exception $e){
            return redirect('/homepage');
        // catch (Exception $exception) {
        //     return response()->json(['error' => 'Invalid credentials provided.'], 422);
        }
        // $existingUser = User::where('google_id', $user->id)->first();
        // if($existingUser){
        //     Auth::login($existingUser, true);
        // }
        // else{
            // $usercreated = User::firstOrCreate(
            //     [
            //         'email' => $user->getEmail(),
            //         'name' => $user->getName(),
            //         'email_verified_at' => now(),
            //         'google_id' => $user ->google_id,
            //         'id_roles' => 4,
            //     ]);
                $usercreated = User::firstOrCreate(
                    [
                        'email' => $user->getEmail()
                    ],
                    [
                        'email_verified_at' => now(),
                        'name' => $user->getName(),
                        'google_id' => $user->getId(),
                        'id_roles' => 4
                    ]);
                // $token = $usercreated->createToken('token-name')->plainTextToken;
                // return redirect('/home-page');\
                Auth::login($usercreated);
                return view('home-page');
        }
          
        // $finduser = User::where('google_id', $user->id)->first();
        // if($finduser){
        //     Auth::login($finduser);
        //     return redirect()->view('home-page');
        // }
        // else{
        //     $newUser = User::updatedOrCreate(
        //     ['Email' => $user->getEmail()],
        // [
        //     'name' => $user ->getname(),
        //     'google_id' => $user ->id_user,
        //     'password' => Hash::make('password')
        // ]);
        
        // Auth::login($newUser);
        // return redirect()->view('home-page');
        // }

    }