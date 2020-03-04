<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function add_category(Request $request) {
      $this->validate($request, [
        'cat_name' => 'required|min:2|max:50'
      ]);

      $category = new Category();
      $category->cat_name = $request->cat_name;
      $category->save();

      return ['message' => 'Ok'];
    }

    public function all_category()
    {
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ], 200);
    }


    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_category ($id)
    {
        $category = Category::find($id);
        return response()->json([
            'category' => $category
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_category(Request $request, $id)
    {
        $this->validate($request, [
          'cat_name' => 'required|min:2|max:50'
        ]);

        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->save();
    }

}
