<?php

namespace App\Filament\Resources\HomepageAboutResource\Pages;

use App\Filament\Resources\HomepageAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepageAbout extends EditRecord
{
    protected static string $resource = HomepageAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
