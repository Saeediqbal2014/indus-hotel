<?php

namespace App\Console\Commands;

use App\Http\Controllers\EmailConfigController;
use Illuminate\Console\Command;

class SetEmailConfig extends Command
{
    protected $signature = 'email:config';

    protected $description = 'Set email configuration from the database';

    public function handle(EmailConfigController $emailConfigController)
    {
        $emailConfigController->setConfig();
        $this->info('Email configuration set successfully!');
    }
}
