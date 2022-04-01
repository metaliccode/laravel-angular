<?php

namespace App\Http\Controllers;
    

use App\Models\Category;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function showAll(){
        $members = Member::with('category')->get();
        return view('members.showAll', compact('members'));
    }

    public function index(){
        // $members = Member::all();
        // $members = Member::with('category')->get();
        $members = Category::with('members')->get();
        return response()->json(['message' => 'Sukses', 'data' => $members], 200);
    }

    public function show($id){
        $members = Member::find($id);
        return response()->json(['message' => 'Sukses', 'data' => $members], 200);
    }

    public function store( Request $request ){
        $member = Member::create($request->all());
        return response()->json(['message' => 'Sukses ditambahkan', 'data' => $member], 200);
    }

    public function update(Request $request, $id){
        $member = Member::find($id);
        $member->update($request->all());
        return response()->json(['message' => 'Sukses diubah', 'data' => $member], 200);
    }

    public function destroy($id){
        $member = Member::find($id);
        $member->delete();
        return response()->json(['message' => 'Sukses dihapus'], 200);
    }

}
