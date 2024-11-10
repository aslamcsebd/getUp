<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContentController extends Controller
{
    use ApiResponse;
    
    public function manageContent()
    {
        // This method is restricted to 'Admin' users
        if (!Gate::allows('manage-all-content')) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        // Logic for managing all content
        // return response()->json(['message' => 'Content management access granted']);

        return $this->successResponse(            
            'Content management access granted'
        );
    }

    public function updateArticle($id)
    {
        // This method is accessible by both 'Admin' and 'Editor' users
        if (!Gate::allows('update-articles')) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        // Logic to update an article by ID
        // return response()->json(['message' => "Article with ID $id updated successfully"]);

        return $this->successResponse(            
            "Article with ID $id updated successfully"
        );
    }
}
