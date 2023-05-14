<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
    }

    public function index(){
        $todos= $this->user->todos()->get([
            'title', 'body', 'completed', 'created_by'
        ]);

    return  response()->json( $todos->toArray() );
    }

    public function store(Request $request){
        $validator = Validator::make( $request->all(),[
            'title' => 'required|string',
            'body' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        if( $validator->fails() ){
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->completed = $request->completed;

        if( $this->user->todos()->save( $todo )){
            return response()->json([
                'status' =>true,
                'todo' => $todo
            ]);
        } else{
            return response()->json([
                'status' => false,
                'message' => 'Oops, the todos could not be saved.'
            ]);
        }
    }

    public function show(Todo $todo){
        return $todo;
    }

    public function update(Request $request, Todo $todo){
        $validator = Validator::make( $request->all(),[
            'title' => 'required|string',
            'body' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        if( $validator->fails() ){
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->completed = $request->completed;

        if( $this->user->todos()->save( $todo )){
            return response()->json([
                'status' =>true,
                'todo' => $todo
            ]);
        } else{
            return response()->json([
                'status' => false,
                'message' => 'Oops, the todos could not be updated.'
            ]);
        }

    }

    public function destroy(Todo $todo){
        if($todo->delete()){
            return response()->json([
                'status' =>true,
                'todo' => $todo
            ]);
        } else{
            return response()->json([
                'status' =>false,
                'message' => 'Oops, the todos could not be deleted.'
            ]);
        }
    }

    public function guard(){
        return Auth::guard();
    }

    /* public function todos(){

    } */
}
