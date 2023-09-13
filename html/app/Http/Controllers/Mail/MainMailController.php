<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mail\MainMailRequest;
use App\Mail\MainFormMail;
use Illuminate\Support\Facades\Mail;

class MainMailController extends Controller
{
    public function __invoke(MainMailRequest $request)
    {
        $message_data = $request->validated();
        Mail::to('mohamed.machta@webeit.fr')->send(new MainFormMail($message_data));
        // Send message functionality
        return redirect()->back();
    }
}
