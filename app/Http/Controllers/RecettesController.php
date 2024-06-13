<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecettesRequest;
use App\Models\recettes;
use App\Models\Category;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recettes = recettes::all(); // Retrieve all records
        return view('Recettes.index', compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //CategCategory
        $categorys = Category::all();  
        $recette = new recettes();
        $isUpdate = false;
        return view('Recettes.form', compact('recette', 'categorys', 'isUpdate'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecettesRequest $request)
    {
            $formsData = $request->validated();
            if ($request->hasFile('image')) {
                $formsData['image'] = $request->file('image')->store('recette', 'public');
                
            }
            //  dd($formsData['image']);

            
            recettes::create($formsData);
            return to_route(route:'recettes.index')->with('success', 'recette created successfully');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(recettes $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recettes $recette)
    {
        //
        $categorys = Category::all();
        // $recette = new recettes();
        $isUpdate = true;

        return view('Recettes.form', compact('recette', 'categorys', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(recettesRequest $request, recettes $recette)
    {
        //
        $modifyedObj = recettes::find($recette->id);
        // dd($modifyedObj);
        $formsData = $request->validated();
        if ($request->hasFile(key: 'image')) {
            $formsData['image'] = $request->file(key: 'image')->store(path:'recette', options:'public');
        }
        // $recette->fill($request->validated())->save();
        // dd($request->validated());
        $modifyedObj->name = $formsData['name'];
        $modifyedObj->description = $formsData['description'];
        $modifyedObj->image = $formsData['image'];
        $modifyedObj->category_id = $formsData['category_id'];

        $modifyedObj->save();


        
        return to_route(route:'recettes.index')->with('success', 'recette updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recettes $recette)
    {
        //
        $recette->delete();
        return to_route(route:'recettes.index')->with('success', 'recette Deleted successfully');


    }

    public function recipes_for_search(Request $request) {
        $search = $request->search;
        $recettes = recettes::join('categories', 'recettes.category_id', '=', 'categories.id')
        ->where('recettes.name', 'like', '%' . $search . '%')
        ->orWhere('categories.categoryName', 'like', '%'. $search . '%')
        ->get();


        return view('recettes.index', compact('recettes'));
     }

     public function showOne($id) {
        $recipe = recettes::findOrFail($id); 
        $category = $recipe->category;
        // dd($category);
        return view('recettes.showOne', compact('recipe', 'category'));
    }
    
}
