<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nav = config("navBar");
        $other = config("moreLink");
        $comics = Comic::all();
        return view('comics.index', compact("comics", "nav", "other"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = config("navBar");

        return view("comics.create", compact("nav"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $data["title"];
        $new_comic->description = $data["description"];
        $new_comic->thumb = $data["thumb"];
        $new_comic->price = $data["price"];
        $new_comic->series = $data["series"];
        $new_comic->sale_date = $data["sale_date"];
        $new_comic->type = $data["type"];
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nav = config("navBar");
        $fumetto = Comic::find($id);

        return view("comics.show", compact("nav", "fumetto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $nav = config("navBar");
        return view('comics.edit', compact("comic", "nav"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        $comic->update();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
