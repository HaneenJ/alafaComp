<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = News::all();
        return response()->view('dashboard.news.index', [
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
        return response()->view('dashboard.news.create');

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

        ]);
        if (!$validator->fails()) {


            $news = new News();
            $news->title = $request->input('title');
            $news->descriptions = $request->input('descriptions');




            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $news->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/news', $imageName, ['disk' => 'public']);
                $news->image = 'news/' . $imageName;
            }
            $isSaved = $news->save();
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        return response()->view('dashboard.news.edit',compact('news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'image' => 'required',
            'kt_docs_ckeditor_classic' => 'required|string'
        ]);
        if (!$validator->fails()) {



            $news->title = $request->input('title');
            $news->descriptions = $request->input('kt_docs_ckeditor_classic');




            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $news->title . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/news', $imageName, ['disk' => 'public']);
                $news->image = 'news/' . $imageName;
            }
            $isSaved = $news->save();
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $imageName = $news->value;
        $deleted = $news->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
