<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram;

class SetWebhook extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webhook:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set webhook for telegram updates';


    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Setting webhook...');
        $host = env('APP_HOST');
        $token = env('TELEGRAM_BOT_TOKEN');
        $url = "{$host}/{$token}/webhook";
        Telegram::setWebhook(['url' => $url]);
    }
}
