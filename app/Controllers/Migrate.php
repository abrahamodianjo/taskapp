<?php

namespace App\Controllers;

class Migrate extends BaseController
{
    public function index()
    {
       $migrate = \config\Services::migrations();
       
       try {
        $migrate->latest();
        echo "migrated";
       }
       catch (\Exception $e){
        echo $e->getMessage();
       }
    }
}
