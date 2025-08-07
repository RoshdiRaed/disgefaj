<?php

namespace App\Filament\Resources\CallToActionResource\Pages;

use App\Filament\Resources\CallToActionResource;
use Filament\Resources\Pages\ListRecords;

class ListCallToActions extends ListRecords
{
    protected static string $resource = CallToActionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()->label('إنشاء نداء للعمل'),
        ];
    }
}
?>
