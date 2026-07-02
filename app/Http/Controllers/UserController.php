<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    title: "User API",
    description: "API for managing users"
)]

#[OA\Server(
    url: "http://localhost:8000",
    description: "Local Server"
)]

#[OA\SecurityScheme(
    securityScheme: "bearerAuth",
    type: "http",
    scheme: "bearer",
    bearerFormat: "JWT"
)]

class UserController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/users",
     *     summary="Get a list of users",
     *     tags={"Users"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     * )
    */
    #[OA\Get(
    path: "/users",
    summary: "Get users",
    tags: ["Users"],
    responses: [
        new OA\Response(
            response: 200,
            description: "Success"
        )
    ]
)]
   public function welcome(){ 
    return response()->json(['message' => 'Welcome to the UserController!'], 200);
   }
    // Annotations
    /**
     * @SWG\Get(
     *     path="/users",
     *     summary="Get a list of users",
     *     tags={"Users"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     * )
    */
     #[OA\Get(
    path: "/index",
    summary: "Get users",
    tags: ["Users"],
    responses: [
        new OA\Response(
            response: 200,
            description: "Success"
        )
    ]
)]
   public function index(){ 
    return response()->json(['message' => 'this is the index page'], 200); 
   }


   #[OA\POST(
    path: "/users/create", 
    summary: "Create a new user", 
    tags: ["users"], 
    response: [ 
        new OA\Response(
            response: 200, 
            description: "Success"
        )
    ]
    )]
   public function createUser(){ 
    return response()->json(['message' => 'this is the create user page'], 200); 
   }
}
