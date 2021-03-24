<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Fire

class FirebaseController extends Controller
{
    public function Index2(){
        $serviceAccount = ServiceAccount::fromJsonFile( filePath: __DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        
        $database = $firebase->getDatabase();

        $ref = $database->getReference( path: 'Subjects');
        $key = $ref->push()->getkey();
    
        $ref->getChild($key).set([
            
        ])
    }
}
