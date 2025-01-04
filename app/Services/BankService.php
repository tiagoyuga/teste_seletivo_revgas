<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Bank;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class BankService
{

    private function buildQuery(): Builder
    {

        $query = Bank::query();

        $query->when(request('id'), function ($query, $id) {

            return $query->whereId($id);
        });

        $query->when(request('code'), function ($query, $code) {

            return $query->whereCode($code);
        });

        $query->when(request('search'), function ($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%');
        });

        return $query->orderByDesc('id');
    }

    public function paginate(int $limit): LengthAwarePaginator
    {

        return $this->buildQuery()->paginate($limit);
    }

    public function all(): Collection
    {

        return $this->buildQuery()->get();
    }

    public function find(int $id): ?Bank
    {
        return Bank::find($id);
    }

    public function create(array $data): Bank
    {

        return DB::transaction(function () use ($data) {

            $model = new Bank();
            $model->fill($data);
            $model->save();

            return $model;
        });
    }

    public function update(array $data, Bank $model): Bank
    {
        $model->fill($data);
        $model->save();

        return $model;
    }


    public function delete(Bank $model): ?bool
    {
        $model->save();
        return $model->delete();
    }

    public function lists(): array
    {
        return Bank::orderBy('name')
            ->pluck('name', 'code', 'id')
            ->toArray();
    }
}
