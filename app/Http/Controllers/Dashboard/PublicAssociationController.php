<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\publicAssociation;
use Carbon\Carbon;
use Database\Seeders\PublicAssociationSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class PublicAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PublicAssociation::all();
        return response()->view('dashboard.publicAssociation.index', [
            'datas' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('dashboard.publicAssociation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',

            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {


            $association = new publicAssociation();
            $association->title = $request->input('title');
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $association->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/association', $imageName, ['disk' => 'public']);
                $association->file = 'association/' . $imageName;
            }
            $isSaved = $association->save();
            return response()->json([
                'message' => $isSaved ? 'Created successfully' : 'Create Failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function show(publicAssociation $publicAssociation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function edit(publicAssociation $publicAssociation)
    {
        //
        return response()->view('dashboard.publicAssociation.edit', compact('publicAssociation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicAssociation $publicAssociation)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {



            $publicAssociation->title = $request->input('title');

            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $publicAssociation->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/association', $imageName, ['disk' => 'public']);
                $publicAssociation->file = 'association/' . $imageName;
            }
            $isSaved = $publicAssociation->save();
            return response()->json([
                'message' => $isSaved ? 'Created successfully' : 'Create Failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicAssociation $publicAssociation)
    {
        //
        $imageName = $publicAssociation->value;
        $deleted = $publicAssociation->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
