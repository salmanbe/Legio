<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Controllers\Controller;
use Validator;

class IndexController extends Controller
{

    /**
     * The class constructor
     * @return void
     */
    public function __construct()
    {
        app()->setLocale('nl');
    }

    /**
     * Function returns the only page view
     * @return Illuminate\View\View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Function submits the contact form
     * @param Illuminate\Http\Request $request
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function submitForm(Request $request): JsonResponse
    {

        $validator = Validator::make($request->all(), [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|max:255',
                    'message' => 'required|max:255',
                    'g_recaptcha_response' => 'required|recaptcha'
        ]);

        if ($validator->fails()) {

            $errors = array_map('ucfirst', $validator->errors()->all());

            return response()->json(['errors' => implode('<br />', $errors)]);
        }

        return response()->json(['success' => 'formulier succesvol ingediend']);
    }

}
