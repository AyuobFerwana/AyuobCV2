<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        return response()->view('dashboard.technicalSkills.creatskills', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|min:3|max:50',
            'name_ar' => 'required|string|min:3|max:50',
            'skills' => 'required|string|min:0|max:100',
        ]);
        if (!$validator->fails()) {
            $skills = new Skill();
            $skills->name_en = $request->input('name_en');
            $skills->name_ar = $request->input('name_ar');
            $skills->skills = $request->input('skills');
            $isSaved = $skills->save();
            return response()->json([
                'message' => $isSaved ? 'Create Skills Successfully' : 'Create Skills Failed'
            ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $user)
    {
        return response()->view('dashboard.technicalSkills.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|string|min:3|max:50',
            'name_ar' => 'required|string|min:3|max:50',

            'skills' => 'required|string|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = Skill::findOrFail($id);
        $user->name_en = $request->input('name_en');
        $user->name_ar = $request->input('name_ar');

        $user->skills = $request->input('skills');
        $isSaved = $user->save();

        return response()->json([
            'message' => $isSaved ? 'Update Skill Successfully' : 'Update Skill Failed'
        ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $user)
    {
        $isDelete = $user->delete();
        return response()->json(
            ['message' => $isDelete ? ' Delete Successfully!' : 'Deleted Failed!'],
            $isDelete ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
