<?php
namespace App\Services;

use App\Service;

class ServiceService {

    public function store($validatedData, $user_id) {
        Service::create([
            'name' => $validatedData['name'],
            'created_by' => $user_id
        ]);
    }
}
