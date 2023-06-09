<?php

namespace App\Helpers;

use App\Models\Order;
use App\Models\ParcelOrder;
use App\Models\Settings;

class NotificationHelper
{
    public function deliveryManOrder(Order $order, ?string $language = null, string $type = 'deliveryman'): array
    {
        $km = (new Utility)->getDistance(
            optional($order->shop)->location,
            $order->location,
        );

        $second = Settings::adminSettings()->where('key', 'deliveryman_order_acceptance_time')->first();

        return [
            'second'    => data_get($second, 'value', 30),
            'order'     => [
                'id'        => $order->id,
                'status'    => $order->status,
                'km'        => $km,
                'type'      => $type
            ],
        ];
    }
    public function deliveryManParcelOrder(ParcelOrder $parcelOrder, string $type = 'deliveryman'): array
    {
        $km = (new Utility)->getDistance(
            $parcelOrder->address_from,
            $parcelOrder->address_to,
        );

        $second = Settings::adminSettings()->where('key', 'deliveryman_order_acceptance_time')->first();

        return [
            'second'    => data_get($second, 'value', 30),
            'order'     => [
                'id'        => $parcelOrder->id,
                'status'    => $parcelOrder->status,
                'km'        => $km,
                'type'      => $type
            ],
        ];
    }
}
