<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Financially;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class FinanciallyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Financially::all();
        return response()->view('dashboard.financially.index', [
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
        return response()->view('dashboard.financially.create');
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
            'year' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {


            $financially = new Financially();
            $financially->title = $request->input('title');
            $financially->year = $request->input('year');



            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $financially->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/financiallys', $imageName, ['disk' => 'public']);
                $financially->file = 'financiallys/' . $imageName;
            }
            $isSaved = $financially->save();
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
     * @param  \App\Models\Financially  $financially
     * @return \Illuminate\Http\Response
     */
    public function show(Financially $financially)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Financially  $financially
     * @return \Illuminate\Http\Response
     */
    public function edit(Financially $financially)
    {
        //
        return response()->view('dashboard.financially.edit',compact('financially'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Financially  $financially
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financially $financially)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'year' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {


            
            $financially->title = $request->input('title');
            $financially->year = $request->input('year');



            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $financially->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/financiallys', $imageName, ['disk' => 'public']);
                $financially->file = 'financiallys/' . $imageName;
            }
            $isSaved = $financially->save();
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
     * @param  \App\Models\Financially  $financially
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financially $financially)
    {
        //
        $imageName = $financially->value;
        $deleted = $financially->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
