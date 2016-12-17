<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\AbTestController;

class TrackPageViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('get'))
        {
            AbTestController::track($request, 'pageview', $request->path());
        }else{
            if($this->event($request)){
                AbTestController::track($request, 'conversion', $request->path());
            }
        }
        return $next($request);
    }

    /**
     * Use the path to decide what other event may have occured
     * Essentially naming conversions for lazy tracking
     * @param $request
     */
    private function event($request)
    {
        $path = $request->path();
        switch($path)
        {
            case strpos('/5-secrets-thank-you', $path):
                $key = 'download';
                $value = '5 Secrets';
                break;
            case strpos('/general-price-increase-thank-you', $path):
                $key = 'download';
                $value = 'GPI';
                break;
            case strpos('/fuel-surcharge-thank-you', $path):
                $key = 'download';
                $value = 'GPI';
                break;
            case strpos('/create', $path) && strpos('/instant-parcel-audit', $path):
                $key = 'audisee';
                $value = 'ran';
                break;
            case strpos('/shipping-software/sign-up/create', $path):
                $key = 'intelliship';
                $value = 'signup';
                break;
            // Add things to this list (below) if you want a $_POST that doesn't get
            // tracked as a conversion
            case strpos('slack', $path):
            case strpos('/shipping-software/sign-up/email', $path):
            case strpos('/shipping-software', $path) && strpos('/validate', $path):
            case strpos('/track', $path): // let's let the controller handle this
            default:
                return false;
        }

        AbTestController::track($request, $key, $value);
        return true; // allows for "conversion" event to be tracked as well
    }
}
