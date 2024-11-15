<?php

namespace App\Filament\Admin\Resources\LoyaltiResource\Pages;

use App\Filament\Admin\Resources\LoyaltiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoyaltis extends ListRecords
{
    protected static string $resource = LoyaltiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
