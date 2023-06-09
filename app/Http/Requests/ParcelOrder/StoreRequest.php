<?php

namespace App\Http\Requests\ParcelOrder;

use App\Http\Requests\BaseRequest;
use App\Models\ParcelOrder;
use Illuminate\Validation\Rule;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_id'                   => [
                'required',
                'integer',
                Rule::exists('users', 'id')->whereNull('deleted_at')
            ],
            'currency_id'               => 'required|integer|exists:currencies,id',
            'type'                      => ['required', Rule::in(ParcelOrder::LISTS)],
            'rate'                      => 'numeric',
            'deliveryman_id'            => [
                'nullable',
                Rule::exists('users', 'id')->whereNull('deleted_at')
            ],
            'phone_from'                => 'required|string',
            'username_from'             => 'required|string',
            'address_from'              => 'required|array',
            'address_from.longitude'    => 'required|numeric',
            'address_from.latitude'     => 'required|numeric',

            'phone_to'                  => 'required|string',
            'username_to'               => 'required|string',
            'address_to'                => 'required|array',
            'address_to.latitude'       => 'required|numeric',
            'address_to.longitude'      => 'required|numeric',

            'delivery_date'             => 'date|date_format:Y-m-d',
            'delivery_time'             => 'nullable|string',
            'note'                      => 'nullable|string|max:191',
            'images'                    => 'array',
            'images.*'                  => 'string',
        ];
    }
}
