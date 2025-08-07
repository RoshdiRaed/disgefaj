<?php

namespace App\Filament\Resources\CallToActionResource\Pages;

use App\Filament\Resources\CallToActionResource;
use Filament\Resources\Pages\EditRecord;

class EditCallToAction extends EditRecord
{
    protected static string $resource = CallToActionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
?>
