<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ArchiveController extends Controller
{
    public function archive(Request $request)
    {
        try {
            $post = Posts::findOrFail($request->input('postId'));
            $post->archive = true;
            $post->save();
            return response()->json(['success' => true, 'is_archive' => $post->archive]);
        } catch (\Exception $e) {
            Log::error('Error archiving post: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to archive post'], 500);
        }
    }

    public function unarchive(Request $request)
    {
        try {
            $post = Posts::findOrFail($request->input('postId'));
            $post->archive = false;
            $post->save();
            return response()->json(['success' => true, 'is_archive' => $post->archive]);
        } catch (\Exception $e) {
            Log::error('Error unarchiving post: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to unarchive post'], 500);
        }
    }
}
