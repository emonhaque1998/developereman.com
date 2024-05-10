<?php

namespace App\Filament\Resources\GlobalClientTitleResource\Pages;

use App\Filament\Resources\GlobalClientTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGlobalClientTitle extends EditRecord
{
    protected static string $resource = GlobalClientTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
