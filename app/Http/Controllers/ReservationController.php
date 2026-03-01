<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Mail\ReservationCreatedAdminMail;
use App\Mail\ReservationCreatedGuestMail;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ReservationController extends Controller
{
    public function store(StoreReservationRequest $request): RedirectResponse
    {
        $data = $request->safe()->only([
            'name',
            'email',
            'phone',
            'guests',
            'reservation_date',
            'reservation_time',
            'message',
        ]);

        $reservation = Reservation::create([
            ...$data,
            'status' => 'pending',
            'source' => 'website',
        ]);

        $notifyEmail = (string) config('services.reservations.notify_email', '');

        try {
            if ($notifyEmail !== '') {
                Mail::to($notifyEmail)->send(new ReservationCreatedAdminMail($reservation));
            }

            Mail::to($reservation->email)->send(new ReservationCreatedGuestMail($reservation));
        } catch (Throwable $exception) {
            report($exception);
        }

        return back()->with('reservation_success', __('site.reservation.success'));
    }
}
