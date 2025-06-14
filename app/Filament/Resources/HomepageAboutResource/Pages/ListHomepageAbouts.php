<?php

namespace App\Filament\Resources\HomepageAboutResource\Pages;

use App\Filament\Resources\HomepageAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepageAbouts extends ListRecords
{
    protected static string $resource = HomepageAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
