<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    //
public function industries($category = 'All')
{
    $items = [
        ['cat' => 'Automotive', 'img' => 'img/automotive/BMWM42025.png', 'name' => 'Automotive Systems BMW'],
        ['cat' => 'Automotive', 'img' => 'img/automotive/MB2025.png', 'name' => 'Automotive Systems Mercedes'],
        ['cat' => 'Automotive', 'img' => 'img/carros electronicos.png', 'name' => 'Automotive Systems Electronic Vehicles'],

        ['cat' => 'Appliance', 'img' => 'img/homeAppliance/subzero-Appliance.png', 'name' => 'Home Appliance Sub-Zero'],
        ['cat' => 'Appliance', 'img' => 'img/homeAppliance/SZWC_SHW_AZ_09.png', 'name' => 'Sub-Zero Wolf Cove'],


        ['cat' => 'Commercial', 'img' => 'img/commercialVehicle/BUSYellow.png', 'name' => 'Bus Harness'],
        ['cat' => 'Commercial', 'img' => 'img/commercialVehicle/dump truck.png', 'name' => 'Dump Truck Systems'],
    ];

    if ($category !== 'All') {
        $items = array_filter($items, fn($item) => $item['cat'] === ucfirst($category));
    }

    return view('web.industriesServe', [
        'items' => $items,
        'category' => ucfirst($category)
    ]);
}
}
