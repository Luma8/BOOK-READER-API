<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
  public function index()
  {

    $books = Books::all();

    return view('book', ['books' => $books]);
  }

  public function create()
  {
    return view('createbook');
  }

  public function store(Request $request)
  {
    $books = new Books();
    $books->title = $request->title;
    $books->description = $request->description;
    $books->type = $request->type;

    // Image Upload
    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      $requestImage = $request->image;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

      $requestImage->move(public_path('img/bookThumbnail'), $imageName);

      $books->image = $imageName;
      // 98 centavos
    }

    $books->save();

    return redirect('/books');
  }
}
