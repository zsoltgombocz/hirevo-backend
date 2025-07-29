<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GenerateReadonlyApiToken extends Command
{
    /**
     * @var string
     */
    protected $signature = 'app:generate-readonly-api-token';

    /**
     * @var string
     */
    protected $description = 'Generate an API token for public, readonly routes.';

    public function handle(): void
    {
        /** @var User $user */
        $user = User::query()->where('email', config('api.public_user.email'))->first();

        $token = $user->createToken('api', ['read'])->plainTextToken;

        $this->info("Public API token generated: $token");
    }
}
