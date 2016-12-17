<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbTest;
class AbTestController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // when posting to a Route::resource, you should use the model name as
        // the key in the array. So in this case, your post array would look something like:
        // $_POST = [ Model => [column => 'val', col2 => 'val2]];
        return AbTest::create([
            'key' => $request->input("AbTest.key"),
            'value' => $request->input("AbTest.value"),
            'hubspotutk' => $request->cookie('hubspotutk')
        ]);
    }
    public static function track($request, $key, $val)
    {
        return AbTest::create([
            'key' => $key,
            'hubspotutk' => $request->cookie('hubspotutk'),
            'value' => $val,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}