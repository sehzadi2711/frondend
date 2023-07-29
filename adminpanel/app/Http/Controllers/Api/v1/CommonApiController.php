<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class CommonApiController extends Controller
{
    public function endRequest($status, $responseCode, $responseMessage, $data = '')
    {
        $response['responseStatus'] = $status;
        $response['responseCode'] = $responseCode;
        $response['responseMessage'] = $responseMessage;
        $response['data'] = $data;

        return json_encode($response);
    }
    public function isJsonRequest($request)
    {
        if (!$request->isJson()) {
            //NOT VALID INPUT
            $response['status'] = 0;
            $response['responseCode'] = 205;
            $response['responseMessage'] = "No direct script access allowed.";
            return json_encode($response);
        }
    }
    public function checkValidation($validator)
    {
        if ($validator->fails()) {
            $message = $validator->errors()->first();
            $this->endRequest(false, 205, $message);
        }
    }
    public function checkvalidateUser($userid)
    {
        $user = auth()->user();

        if ($userid != $user->userid) {
            CommonApiController::endRequest(true, 200, 'No user found.', array());
        }
    }
}
