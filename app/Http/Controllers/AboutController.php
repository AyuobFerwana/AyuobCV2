<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\AboutMe;
use App\Models\About;
use App\Services\DashboardAbout;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    public function __construct(protected DashboardAbout $about)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return response()->view('dashboard.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return response()->view('dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutMe $request)
    {
        $created = $this->about->CreateAbout($request->validated());
        return $created ? parent::createAbout() : parent::failedAbout();
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);

        return response()->view('dashboard.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutMe $request, $id)
    {
        $updated = $this->about->UpdateAbout($id, $request->validated());
        return $updated ? parent::updatedAbout() : parent::updatedFailedAbout();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $isDelete = $about->delete();
        return response()->json(
            ['message' => $isDelete ? 'Delete Successfully' : 'Delete failed'],
            $isDelete ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
