<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Adminstrative;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class AdminstrativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Adminstrative::all();
        return response()->view('dashboard.adminstrative.index', [
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
        return response()->view('dashboard.adminstrative.create');

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


            $adminstrative = new Adminstrative();
            $adminstrative->title = $request->input('title');




            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $adminstrative->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/adminstratives', $imageName, ['disk' => 'public']);
                $adminstrative->file = 'adminstratives/' . $imageName;
            }
            $isSaved = $adminstrative->save();
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
     * @param  \App\Models\Adminstrative  $adminstrative
     * @return \Illuminate\Http\Response
     */
    public function show(Adminstrative $adminstrative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminstrative  $adminstrative
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminstrative $adminstrative)
    {
        //
        return response()->view('dashboard.adminstrative.edit',compact('adminstrative'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminstrative  $adminstrative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminstrative $adminstrative)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {


           
            $adminstrative->title = $request->input('title');




            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $adminstrative->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/adminstratives', $imageName, ['disk' => 'public']);
                $adminstrative->file = 'adminstratives/' . $imageName;
            }
            $isSaved = $adminstrative->save();
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
     * @param  \App\Models\Adminstrative  $adminstrative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminstrative $adminstrative)
    {
        //
        $imageName = $adminstrative->value;
        $deleted = $adminstrative->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
