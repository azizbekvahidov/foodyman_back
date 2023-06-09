<?php

namespace App\Http\Controllers\API\v1\Rest;

use App\Helpers\ResponseError;
use App\Http\Controllers\Controller;
use App\Models\ParcelOrder;
use App\Traits\ApiResponse;

class ParcelController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return $this->successResponse(
            __('errors.' . ResponseError::SUCCESS, locale: $this->language),
            ParcelOrder::LISTS
        );
    }
}
