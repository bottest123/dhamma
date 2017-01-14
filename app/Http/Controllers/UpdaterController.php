<?php

namespace App\Http\Controllers;

use Telegram;

class UpdaterController extends Controller
{


    public function webhook()
    {
        $updates = Telegram::getWebhookUpdates();

        return 'ok';
    }
}
