<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Courses::all();
        return response()->view('dashboard.course.index', [
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
         return response()->view('dashboard.course.create');
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
            'descriptions' => 'required',
            'type' => 'required',

        ]);
        if (!$validator->fails()) {


            $course = new Courses();
            $course->title = $request->input('title');
            $course->descriptions = $request->input('descriptions');
            $course->type = $request->input('type');




            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $course->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/course', $imageName, ['disk' => 'public']);
                $course->image = 'course/' . $imageName;
            }
            $isSaved = $course->save();
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
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $courses = Courses::findOrFail($id);

        return response()->view('dashboard.course.edit',compact('courses'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'image' => 'required',
            'descriptions' => 'required',
            'type' => 'required',

        ]);
        if (!$validator->fails()) {


            $course = Courses::findOrFail($id);

            $course->title = $request->input('title');
            $course->descriptions = $request->input('descriptions');
            $course->type = $request->input('type');




            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $course->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/course', $imageName, ['disk' => 'public']);
                $course->image = 'course/' . $imageName;
            }
            $isSaved = $course->save();
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
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $courses = Courses::findOrFail($id);
        $imageName = $courses->value;
        $deleted = $courses->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);

    }
}
