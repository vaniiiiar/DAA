<?php

namespace App\Filament\Admin\Resources\LoyaltiResource\Pages;

use App\Filament\Admin\Resources\LoyaltiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoyalti extends EditRecord
{
    protected static string $resource = LoyaltiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
