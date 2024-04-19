<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NewNotification;

class AuthController extends Controller
{
    public function index() {

        $user = User::find(1);
        $user->notify(new NewNotification);

        return 'Via mail was sent recently, Check inbox.';
    }
}
