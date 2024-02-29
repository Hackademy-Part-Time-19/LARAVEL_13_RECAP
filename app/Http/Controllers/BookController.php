<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated=$request->validated();
        Book::create(['author'=>auth()->user()->name,'title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price']]);
        //if($request->hasFile('image') && $request->file('image')->isValid()){
        //}
            return redirect()->back()->with(['succes'=>'Libro inserito con successo']); 
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, book $book)
    {
        $validated=$request->validated();
        $book->update(['title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price']]);
        //if($request->hasFile('image') && $request->file('image')->isValid()){
        //}
            return redirect()->back()->with(['succes'=>'Libro aggiornato con successo']); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        //book::destroy($book->id);
    }
}
