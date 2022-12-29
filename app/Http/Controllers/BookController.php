<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StorePostRequest;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(3);
        return view('books.index', compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(StorePostRequest $request)
    {
        // dd(1);
        $books = new Book();
        // dd($books);
        $books->name = $request->name;
        $books->code = $request->code;
        $books->category = $request->category;
        $books->author = $request->author;
        $books->pages = $request->pages;
        $books->year = $request->year;
        try {
            if ($books->save()) {
                return redirect()->route('books.index')->with('status', 'Thêm thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1', 'Thêm không thành công');
        }
    }
    public function edit($id)
    {
        $books = Book::find($id);
        return view('books.edit', compact('books'));
    }
    public function update(Request $request, $id)
    {
        $books = Book::find($id);
        $books->name = $request->name;
        $books->code = $request->code;
        $books->category = $request->category;
        $books->author = $request->author;
        $books->pages = $request->pages;
        $books->year = $request->year;
        try {
            if ($books->save()) {
                return redirect()->route('books.index')->with('status', 'chỉnh sửa thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1', 'chỉnh sửa thất bại');
        }
    }
    public function delete($id)
    {
        $books = Book::find($id);
        try {
            if ($books->delete()) {
                return redirect()->route('books.index')->with('status', 'Xóa thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1', 'xóa thất bại');
        }
    }
}
