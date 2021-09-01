<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorageNewsRequest;
use App\Http\Requests\UpdateNewRequest;
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
    public function store(StorageNewsRequest $request)
    {

        $fields = $request->validated();

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

                foreach ($request->input() as $key => $cat_id) {
                    if (str_contains($key, "category-id")) {
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

        $changedCategories = BlogNew::find($id)->categories()->get();

        $categories = NewCategory::all();

        $categories->map(function ($_cat) use ($changedCategories) {

            foreach ($changedCategories as $cat) {
                if ($cat->id === $_cat->id) {
                    $_cat['isSelected'] = true;
                    return $_cat;
                }
            }

        });

        return view('admin.update-new', [
            'new' => BlogNew::find($id),
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewRequest $request)
    {
        $fields = $request->validated();
        $id = $fields['id'];
        
        $name = null;

        if (array_key_exists('load-image', $fields) && $request->file('load-image')->isValid()) {
            $ext = $request->file('load-image')->extension();
            $name = preg_split("/ /", $request->title)[0] . "_" . uniqid() . '.' . "$ext";
            $upload_folder = 'public';
            $file = Storage::putFileAs($upload_folder, $request->file('load-image')->path(), $name);
            return $name;
        }

        ConectionNewAndCategories::where('new_id', $id)->delete();

        $data = [
            'title' => $fields['title'],
            'content' => $fields['content'],
        ];

        if ($name) {

            $data['img'] = Storage::url($name);

        }

        BlogNew::where("id", $id)->update($data);

        foreach ($request->input() as $key => $cat_id) {
            if (str_contains($key, "category-id")) {
                ConectionNewAndCategories::create([
                    'new_id' => "$id",
                    'new_category_id' => "$cat_id",
                ]);
            }
        }

        return redirect()->route('admin-news')
            ->with('success', 'Новость успешно добавлена');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        ConectionNewAndCategories::where('new_id', $id)->delete();

        $new = BlogNew::find($id);

        $new->delete();

        return response()->json([
            'message' => 'Data deleted successfully!',
            'id' => 'tt',
        ]);

    }
}
