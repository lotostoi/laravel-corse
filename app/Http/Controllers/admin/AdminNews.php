<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogNew;
use App\Models\ConectionNewAndCategories;
use App\Models\NewCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news', ['news' => BlogNew::paginate(config('pagination.news'))]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.add-new', ['categories' => NewCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isCategoryId = false;
        $categoryId = [];

        $rules = [
            'title' => ['required', 'string', 'max:20'],
            'text' => ['required', 'string', 'max:500'],
            'load-image' => ['required', 'image'],
        ];

        foreach ($request->all() as $key => $val) {

            if (strripos($key, 'category-id') === 0) {
                $isCategoryId = true;
                $rules[$key] = ['required'];
                $categoryId[] = $val;
            }
        }

        if (!$isCategoryId) {
            $rules['category-id'] = ['required'];
        }

        $request->validate($rules);
        if ($request->file('load-image')->isValid()) {
            $ext = $request->file('load-image')->extension();
            $name = preg_split("/ /", $request->title)[0] . "_" . uniqid() . '.' . "$ext";
            $upload_folder = 'public';
            $file = Storage::putFileAs($upload_folder, $request->file('load-image')->path(), $name);
        }
        if ($file) {
            $id = BlogNew::create([
                'title' => $request->title,
                'content' => $request->text,
                'img' => Storage::url($name),
            ])->id;

            if ($id) {

                if (count($categoryId)) {
                    foreach ($categoryId as $cat_id) {
                        ConectionNewAndCategories::create([
                            'new_id' => "$id",
                            'new_category_id' => "$cat_id",
                        ]);
                    }
                }

                return redirect()->route('admin-news')
                    ->with('success', 'Новость успешно добавлена');
            }
            return back()->withInput()->with('error', 'Не удалось добавть новость');
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
