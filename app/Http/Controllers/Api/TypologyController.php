<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Typology;
use Illuminate\Http\Request;

class TypologyController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typology = Typology::select('id', 'color', 'name')
            ->where('id', $id)
            ->first();

        return response()->json($typology);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}