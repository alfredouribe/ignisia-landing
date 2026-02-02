<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    public function send(ContactRequest $request)
    {
        if (!app()->environment('local')) {
            $captcha = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => env('RECAPTCHA_SECRET'),
                    'response' => $request->recaptcha_token,
                    'remoteip' => $request->ip(),
                ]
            )->json();

            if (!($captcha['success'] ?? false) || ($captcha['score'] ?? 0) < 0.5) {
                return response()->json([
                    'message' => 'Captcha inválido'
                ], 422);
            }
        }

        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactMail($request->validated()));
        } catch (Exception $e) {
            Log::error('Mail error', [
                'message' => $e->getMessage(),
            ]);
            return response()->json([
                'message' => 'Error al enviar el correo'
            ], 500);
        }

        // 3️⃣ RESPUESTA FINAL (ESTO FALTABA)
        return response()->json([
            'message' => 'Mensaje enviado correctamente'
        ]);
    }
}
