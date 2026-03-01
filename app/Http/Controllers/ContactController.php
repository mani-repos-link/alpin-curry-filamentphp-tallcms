<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMessageAdminMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $data = $request->safe()->only([
            'contact_name',
            'contact_email',
            'contact_phone',
            'contact_message',
        ]);

        $notifyEmail = (string) config('services.reservations.notify_email', '');

        try {
            if ($notifyEmail !== '') {
                Mail::to($notifyEmail)->send(new ContactMessageAdminMail($data));
            }
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->withErrors(['form' => __('site.contact.error')], 'contact');
        }

        return back()->with('contact_success', __('site.contact.success'));
    }
}
