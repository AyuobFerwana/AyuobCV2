<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Education $education)
    {
        $education = Education::all();
        return response()->view('dashboard.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'expertise_en' => 'required|string|min:3|max:50',
            'educaName_en' => 'required|string|min:3|max:50',
            'year_en' => 'required|string|min:3|max:50',
            'link_en' => 'required|string|min:3|max:5000',
            'summernote_en' => 'required|string|min:10',


            'expertise_ar' => 'required|string|min:3|max:50',
            'educaName_ar' => 'required|string|min:3|max:50',
            'year_ar' => 'required|string|min:3|max:50',
            'link_ar' => 'required|string|min:3|max:5000',
            'summernote_ar' => 'required|string|min:10',


        ]);
        if (!$validator->fails()) {
            $educat = new Education();
            $educat->expertise_en = $request->input('expertise_en');
            $educat->educaName_en = $request->input('educaName_en');
            $educat->year_en = $request->input('year_en');
            $educat->link_en = $request->input('link_en');
            $educat->summernote_en = $request->input('summernote_en');


            $educat->expertise_ar = $request->input('expertise_ar');
            $educat->educaName_ar = $request->input('educaName_ar');
            $educat->year_ar = $request->input('year_ar');
            $educat->link_ar = $request->input('link_ar');
            $educat->summernote_ar = $request->input('summernote_ar');


            $isSaved = $educat->save();
            return response()->json([
                'message' => $isSaved ? 'Create Education Successfully' : 'Create Education Failed'
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
    public function edit(Education $educat, $id)
    {

        $educat = Education::findOrFail($id);
        return response()->view('dashboard.education.edit', compact('educat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $educat, $id)
    {
        $validator = Validator($request->all(), [
            'expertise_en' => 'required|string|min:3|max:50',
            'educaName_en' => 'required|string|min:3|max:50',
            'year_en' => 'required|string|min:3|max:50',
            'link_en' => 'required|string|min:3|max:5000',
            'summernote_en' => 'required|string|min:10',

            // arabic
            'expertise_ar' => 'required|string|min:3|max:50',
            'educaName_ar' => 'required|string|min:3|max:50',
            'year_ar' => 'required|string|min:3|max:50',
            'link_ar' => 'required|string|min:3|max:5000',
            'summernote_ar' => 'required|string|min:10'

        ]);
        if (!$validator->fails()) {
            $educat = Education::findOrFail($id);
            $educat->expertise_en = $request->input('expertise_en');
            $educat->educaName_en = $request->input('educaName_en');
            $educat->year_en = $request->input('year_en');
            $educat->link_en = $request->input('link_en');
            $educat->summernote_en = $request->input('summernote_en');

            // arabic
            $educat->expertise_ar = $request->input('expertise_ar');
            $educat->educaName_ar = $request->input('educaName_ar');
            $educat->year_ar = $request->input('year_ar');
            $educat->link_ar= $request->input('link_ar');
            $educat->summernote_ar = $request->input('summernote_ar');

            $isSaved = $educat->save();
            return response()->json([
                'message' => $isSaved ? 'Update Education Successfully' : 'Update Education Failed'
            ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $isDeleted = $education->delete();
        return response()->json(
            ['message' => $isDeleted ? 'Delete Success' : 'Delete Failed'],
            $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
