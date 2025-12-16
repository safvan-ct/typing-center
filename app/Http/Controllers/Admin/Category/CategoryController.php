<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => "required|string|max:255",
            'description' => "nullable|string",
        ]);

        Category::create([
            'name'        => $request->name,
            'slug'        => str()->slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Category created successfully']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => "required|string|max:255",
            'description' => "nullable|string",
        ]);

        Category::findOrFail($id)->update([
            'name'        => $request->name,
            'slug'        => str()->slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Category updated successfully']);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }

    public function form($id = null)
    {
        $data = $id ? Category::findOrFail($id) : null;
        return view('admin.category.form', compact('data'));
    }

    public function toggleStatus(Request $request, $id)
    {
        $column = $request->column ?? 'is_active';
        $item   = Category::findOrFail($id);

        $item->$column = ! $item->$column;
        $item->save();

        return response()->json(['message' => $item->is_active ? 'Updated successfully' : 'Updated successfully']);
    }

    public function dataTable(Request $request)
    {
        return DataTables::of(Category::withCount('subCategories'))->make(true);
    }
}
