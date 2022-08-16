<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Conditions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Conditions::all();
        return response()->view('dashboard.condition.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('dashboard.condition.create');
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
            'condition' => 'required'
        ]);
        if (!$validator->fails()) {
            $condition = new Conditions();
            $condition->title = $request->input('title');
            $condition->condition = $request->input('condition');
            $isSaved = $condition->save();
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
     * @param  \App\Models\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function show(Conditions $conditions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $conditions = Conditions::find($id);

        return response()->view('dashboard.condition.edit',compact('conditions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conditions $conditions)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'condition' => 'required'
        ]);
        if (!$validator->fails()) {
            $conditions->title = $request->input('title');
            $conditions->condition = $request->input('condition');
            $isSaved = $conditions->save();
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
     * @param  \App\Models\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $conditions = Conditions::find($id);
        $deleted = $conditions->delete();

        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
