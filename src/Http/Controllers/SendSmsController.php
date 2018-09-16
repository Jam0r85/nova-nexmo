<?php
namespace Jam0r85\NovaNexmo\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;
use Nexmo\Laravel\Facade\Nexmo;

class SendSmsController extends Controller
{
    /**
     * Send a SMS to the given phone number.
     *
     * @param  \Laravel\Nova\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(NovaRequest $request)
    {
        try {
            $message = Nexmo::message()->send([
                'to' => phone($request->to, $request->country),
                'from' => env('NEXMO_FROM'),
                'text' => $request->text
            ]);

            return response()->json(['message' => $message]);
        } catch (\ErrorException $e) {
            return response()->json(['error' => $e->getMessage()], 503);
        }
    }
}
