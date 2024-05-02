<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function handleWebhook(Request $request)
    {
        // Log the request data for debugging purposes
        info('Webhook received:', $request->all());

        // Return a response to acknowledge receipt of the webhook
        return response()->json(['status' => 'success', 'message' => 'Webhook processed successfully.']);
    }
}
