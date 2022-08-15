<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Meeting::all();
        return response()->view('dashboard.meeting.index', [
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
        return response()->view('dashboard.meeting.create');
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
            'image' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {


            $meeting = new Meeting();
            $meeting->title = $request->input('title');


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $meeting->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $meeting->image = 'teams/' . $imageName;
            }
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $meeting->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $meeting->file = 'teams/' . $imageName;
            }
            $isSaved = $meeting->save();
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
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        //
        return response()->view('dashboard.meeting.edit', compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {



            $meeting->title = $request->input('title');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $meeting->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $meeting->image = 'teams/' . $imageName;
            }
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $meeting->title . '.' . $image->getClientOriginalExtension();
                $request->file('file')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $meeting->file = 'teams/' . $imageName;
            }
            $isSaved = $meeting->save();
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
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
        $imageName = $meeting->value;
        $deleted = $meeting->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
