<?php

namespace briyanadityatama\laravelphp2step\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use briyanadityatama\laravelphp2step\App\Traits\Laravel2StepTrait;

class LaravelPHP2step
{
    use LaravelPHP2StepTrait;

    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param \Closure $response
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $uri = $request->path();
        $nextUri = config('app.url').'/'.$uri;

        switch ($uri) {
            case 'verification/needed':
            case 'password/reset':
            case 'register':
            case 'logout':
            case 'login':
            case '/':
                break;

            default:
                session(['nextUri' => $nextUri]);

                if (config('laravelphp2step.laravelphp2stepEnabled')) {
                    if ($this->twoStepVerification($request) !== true) {
                        return redirect('verification/needed');
                    }
                }
                break;
        }

        return $response;
    }
}
