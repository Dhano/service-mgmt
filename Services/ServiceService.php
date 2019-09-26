
<?php
/**
 * Created by PhpStorm.
 * User: Dhananjay
 * Date: 6/24/2019
 * Time: 11:49 AM
 */

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
