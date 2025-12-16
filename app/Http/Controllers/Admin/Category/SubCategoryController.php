<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.sub-category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => "required|exists:categories,id",
            'name'        => "required|string|max:255",
            'description' => "nullable|string",
            'image'       => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $this->uploadFile($request->file('image'), 'subcategories');
        }

        SubCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => str()->slug($request->name),
            'description' => $request->description,
            'image'       => $image,
        ]);

        return response()->json(['message' => 'Sub Category created successfully']);
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        $data = $request->validate([
            'category_id' => "required|exists:categories,id",
            'name'        => "required|string|max:255",
            'description' => "nullable|string",
            'image'       => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        //$data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old file (senior-level cleanup)
            if ($subcategory->image && Storage::disk('public')->exists($subcategory->image)) {
                Storage::disk('public')->delete($subcategory->image);
            }

            $data['image'] = $this->uploadFile($request->file('image'), 'subcategories');
        }

        $data['slug'] = str()->slug($request->name);

        $subcategory->update($data);

        return response()->json(['message' => 'Sub Category updated successfully']);
    }

    public function destroy($id)
    {
        SubCategory::findOrFail($id)->delete();
        return response()->json(['message' => 'Sub Category deleted successfully']);
    }

    public function form($id = null)
    {
        $data       = $id ? SubCategory::findOrFail($id) : null;
        $categories = Category::all();
        return view('admin.sub-category.form', compact('data', 'categories'));
    }

    public function toggleStatus(Request $request, $id)
    {
        $column = $request->column ?? 'is_active';
        $item   = SubCategory::findOrFail($id);

        $item->$column = ! $item->$column;
        $item->save();

        return response()->json(['message' => $item->is_active ? 'Updated successfully' : 'Updated successfully']);
    }

    public function dataTable(Request $request)
    {
        $query = SubCategory::with('category')
            ->when($request->filter && $request->filter != 'all', function ($q) use ($request) {
                $q->where('category_id', $request->filter);
            });
        return DataTables::of($query)->make(true);
    }

    private function uploadFile($file, string $folder)
    {
        $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();

        return $file->storeAs($folder, $filename, 'public');
    }
}
