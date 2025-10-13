<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CpanelEmailService
{
    protected $cpanelUrl;
    protected $cpanelUser;
    protected $cpanelToken;
    protected $domain;

    public function __construct()
    {
        $this->cpanelUrl = config('cpanel.url');
        $this->cpanelUser = config('cpanel.user');
        $this->cpanelToken = config('cpanel.token');
        // $this->domain = config('cpanel.domain');
    }

    public function createCpanelEmail(string $user_email, string $user_password, string $domain, ?int $quota = 250)
    {
        $endpoint = "{$this->cpanelUrl}/execute/Email/add_pop";
        
        $response = Http::withHeaders([
            'Authorization' => "cpanel {$this->cpanelUser}:{$this->cpanelToken}",
        ])->get($endpoint, [
            'email' => $user_email,
            'password' => $user_password,
            'quota' => $quota,
            'domain' => $domain,
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to create email: ' . $response->body());
        }

        return $response->json();
    }
}

