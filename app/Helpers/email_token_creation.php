<?php

use Illuminate\Support\Facades\Http;

function createCpanelEmail(string $username, string $password, string $domain, int $quota = 250)
{
    $cpanelUser = 'theaxbzr';
    $cpanelHost = 'thearible.com';
    $apiToken   = '3984VLGALBDTXWFQHL1LV4DI6AITQCK5';

    $endpoint = "https://{$cpanelHost}:2083/execute/Email/add_pop";

    $response = Http::withHeaders([
        'Authorization' => "cpanel {$cpanelUser}:{$apiToken}"
    ])->get($endpoint, [
        'email' => $username,   // e.g., 'staff1'
        'domain' => $domain,
        'password' => $password,
        'quota' => $quota, // in MB (use 0 for unlimited)
    ]);

    return $response->json();
}


