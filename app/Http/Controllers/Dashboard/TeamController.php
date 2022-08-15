<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Team::all();
        return response()->view('dashboard.team.index',[
            'datas' =>$data,
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
        return response()->view('dashboard.team.create');
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
            'name' => 'required|string|min:3|max:45',
            'image' => 'required',
            'team' => 'required',
            'position' => 'required',
        ]);
        if (!$validator->fails()) {


            $team = new Team();
            $team->name = $request->input('name');
            $team->team = $request->input('team');
            $team->position = $request->input('position');


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $team->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $team->image = 'teams/' . $imageName;
            }
            $isSaved = $team->save();
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
        return response()->view('dashboard.team.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:45',
            'image' => 'required',
            'team' => 'required',
            'position' => 'required',
        ]);
        if (!$validator->fails()) {



            $team->name = $request->input('name');
            $team->team = $request->input('team');
            $team->position = $request->input('position');


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i_s') . '_' . $team->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/teams', $imageName, ['disk' => 'public']);
                $team->image = 'teams/' . $imageName;
            }
            $isSaved = $team->save();
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        $imageName = $team->value;
        $deleted = $team->delete();
        if ($deleted) Storage::disk('public')->delete($imageName);
        return response()->json([
            'title' => $deleted ? 'تم الحذف بنجاح' : "فشل الحذف",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}

 