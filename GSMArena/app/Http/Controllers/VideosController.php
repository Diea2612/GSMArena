<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideosController extends Controller
{
    // Method to get all videos
    public function index()
    {
        $videos = Videos::getAllVideos();
        return response()->json($videos);
    }

    // Method to get videos by a specific user
    public function getVideosByUser($userId)
    {
        $videos = Videos::getVideosByUser($userId);
        return response()->json($videos);
    }

    // Method to search videos by title
    public function searchVideosByTitle(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $videos = Videos::searchVideosByTitle($searchTerm);
        return response()->json($videos);
    }

    // Method to get videos by duration range
    public function getVideosByDuration(Request $request)
    {
        $minDuration = $request->input('min_duration');
        $maxDuration = $request->input('max_duration');
        $videos = Videos::getVideosByDuration($minDuration, $maxDuration);
        return response()->json($videos);
    }

    // Method to create a new video
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string',
            'duration' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id',
        ]);

        $video = Videos::create($validatedData);
        return response()->json($video, 201);
    }

    // Method to update an existing video
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'file_path' => 'sometimes|required|string',
            'duration' => 'sometimes|required|integer|min:1',
        ]);

        $video = Videos::find($id);
        if ($video) {
            $video->update($validatedData);
            return response()->json($video);
        }

        return response()->json(['message' => 'Video not found'], 404);
    }

    // Method to delete a video
    public function destroy($id)
    {
        $video = Videos::find($id);
        if ($video) {
            $video->delete();
            return response()->json(['message' => 'Video deleted successfully']);
        }

        return response()->json(['message' => 'Video not found'], 404);
    }
}
