<?php

namespace App\Http\Controllers;

use App\Models\ImUser;
use Illuminate\Http\Request;

class IMController extends Controller
{
    public function create(Request $request, int $user_id)
    {
        $ImUser = new ImUser();
        $user = $ImUser->usersPost(['uid' => $user_id, 'name' => '测试用户'.date('YmdHis')]);
        dump($user);
        if ($user === false) {
            dump($ImUser->getError());
        }
        exit;
        if ($user === false) {
            echo $ImUser->getError();
        } else {
            dump($user);
            exit;
        }
    }

    public function delete(Request $request, int $user_id)
    {
        $ImUser = new Imuser();
        $user = $ImUser->deleteUser();
    }
}
