<?php

namespace App\Filament\Resources\CallToActionResource\Pages;

use App\Filament\Resources\CallToActionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCallToAction extends CreateRecord
{
    protected static string $resource = CallToActionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
?>
