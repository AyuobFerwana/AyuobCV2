<?php

namespace App\Http\Controllers;

use App\Models\ProSkill;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProSkill $professional)
    {
        $professional = ProSkill::all();
        return response()->view('dashboard.professionalSkills.skills' ,compact('professional'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name_en' => 'required|string|min:3|max:50',
            'name_ar' => 'required|string|min:3|max:50',
            'skills' => 'required|string|min:0|max:100',
        ]);
        if (!$validator->fails()) {
            $proSkill = new ProSkill();
            $proSkill->name_en = $request->input('name_en');
            $proSkill->name_ar = $request->input('name_ar');

            $proSkill->skills = $request->input('skills');
            $isSaved = $proSkill->save();
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
    public function show(ProSkill $proSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProSkill $proSkill , $id)
    {
        $proSkill = ProSkill::findOrFail($id);
        return response()->view('dashboard.professionalSkills.edit', compact('proSkill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  ProSkill $proSkill , $id)
    {
        $validator = Validator($request->all(), [
            'name_en' => 'required|string|min:3|max:50',
            'name_ar' => 'required|string|min:3|max:50',
            'skills' => 'required|string|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
        $proSkill = ProSkill::findOrFail($id);
        $proSkill->name_en = $request->input('name_en');
        $proSkill->name_ar = $request->input('name_ar');
        $proSkill->skills = $request->input('skills');
        $isSaved = $proSkill->save();

        return response()->json([
            'message' => $isSaved ? 'Update Skill Successfully' : 'Update Skill Failed'
        ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProSkill $professional)
    {
        $isDelete = $professional->delete();
        return response()->json(
            ['message' => $isDelete ? ' Delete Successfully!' : 'Deleted Failed!'],
            $isDelete ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
