<?php

namespace App\Repositories\ParcelOrderRepository;

use App\Models\ParcelOrder;
use App\Repositories\CoreRepository;
use App\Traits\SetCurrency;
use Illuminate\Contracts\Pagination\Paginator;

class ParcelOrderRepository extends CoreRepository
{
    use SetCurrency;

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ParcelOrder::class;
    }


    /**
     * This is only for users route
     * @param array $filter
     * @return Paginator
     */
    public function paginate(array $filter = []): Paginator
    {
        /** @var ParcelOrder $parcelOrder */
        $parcelOrder = $this->model();

        return $parcelOrder
            ->filter($filter)
            ->with([
                'user:id,lastname,firstname,img,email,phone',
                'deliveryman:id,lastname,firstname',
                'transaction:id,payable_type,payable_id,payment_sys_id',
                'transaction.paymentSystem:id,tag',
                'currency',
            ])
            ->orderBy(data_get($filter, 'column', 'id'), data_get($filter, 'sort', 'desc'))
            ->paginate(data_get($filter, 'perPage', 10));
    }

    /**
     * @param int $id
     * @return ParcelOrder|null
     */
    public function show(int $id): ?ParcelOrder
    {
        return $this->model()
            ->withTrashed()
            ->with([
                'user',
                'currency' => fn($c) => $c->select('id', 'title', 'symbol'),
                'deliveryman.deliveryManSetting',
                'coupon',
                'transaction.paymentSystem',
                'galleries',
            ])
            ->find($id);
    }
}
