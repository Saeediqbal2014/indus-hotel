<?php

namespace App\Http\Controllers;

use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class EmailConfigController extends Controller
{



    
    public function setConfig()
    {
        $config = EmailConfiguration::first();

        if ($config) {
            config([
                'mail.host' => $config->email_host,
                'mail.port' => $config->email_port,
                'mail.username' => $config->email_username,
                'mail.password' => $config->email_password,
            ]);

            return response()->json(['message' => 'Email configuration set successfully'], 200);
        } else {
            return response()->json(['error' => 'Unable to fetch email configuration from the database'], 500);
        }
    }
}
