<?php

namespace App\Filament\Resources\PaymentResource\Pages;

use App\Filament\Resources\PaymentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayments extends ListRecords
{
    protected static string $resource = PaymentResource::class;

    protected function getActions(): array
    {
        return [];
    }

    protected function getTableContentFooter(): View
    {
        return view('filament/payments/footer');
    }resources/views/filament/payments/footer.blade.php
}
