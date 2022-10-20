<?php

namespace App\Service;

class MenuBuilder
{
    public function getMenuData(): array
    {
        return [
            'list' => [
                'link' => '',
                'icon' => 'fa-building-o',
                'label' => 'Home',
            ],
            [
                'link' => '',
                'icon' => 'fa-file-o',
                'label' => 'Buy',
            ],
            [
                'link' => '',
                'icon' => 'fa-file-o',
                'label' => 'Sell',
            ]
        ];
    }
}
