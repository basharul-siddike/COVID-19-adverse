<?php

namespace App\Services\Auth;

use App\Providers\RouteServiceProvider;
use function event;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use function redirect;

class VerifyEmailService
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  EmailVerificationRequest  $request
     * @return RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
