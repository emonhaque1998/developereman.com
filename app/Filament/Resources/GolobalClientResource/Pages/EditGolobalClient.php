<?php

namespace App\Filament\Resources\GolobalClientResource\Pages;

use App\Filament\Resources\GolobalClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGolobalClient extends EditRecord
{
    protected static string $resource = GolobalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
