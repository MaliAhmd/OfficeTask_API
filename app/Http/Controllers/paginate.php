<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class paginate extends Controller
{
    public function index()
    {
        $ideas =$this->games();
       

        // $data = $this->getData();
        // dd($ideas);

        return view('dashboard', ['ideas' => $ideas]);
    }

    // public function getData()
    // {
    //     $baseUrl = 'http://192.168.1.73:5000/getbalance';
    //     $token = 'vxzxanmeiemaouglvxzxanmeiemaougl'; 
    
    //     try {
    //         $response = Http::withToken($token)->get($baseUrl);
            
    //         if ($response->successful()) {
    //             $data = $response->json();
    //             // dd($data);
    //             return $data;
    //         } else {
    //             return response()->json([
    //                 'error' => 'Failed to retrieve data',
    //                 'message' => $response->body(),
    //             ], $response->status());
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'error' => 'Failed to retrieve data',
    //             'message' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    public function games()
    {
        $baseUrl = 'http://192.168.1.73:5000/games';
        $token = 'vxzxanmeiemaouglvxzxanmeiemaougl'; 
    
        try {
            $response = Http::withToken($token)->get($baseUrl);
            
            if ($response->successful()) {
                $ideas = $response->json();
                // dd($data);
                return $ideas;
            } else {
                return response()->json([
                    'error' => 'Failed to retrieve data',
                    'message' => $response->body(),
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve data',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}

