<?php

namespace App\Models\Traits;

trait UserMethods {
    
    /**
     * data store method 
     * 
     * @param array $data
     * @param $id
     * @return bool
     * @throws \Exception
     */
    public function store(Array $data, $id)
    {
        if ($user = $this->findOrNew($id)) {
            if ($user->fill($data) && $user->save()) {
                return true;
            }
            throw new \Exception('Woops!! It seems some problem');
        }
    }
}