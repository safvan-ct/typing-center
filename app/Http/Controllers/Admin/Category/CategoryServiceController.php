<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryServiceController extends Controller
{
    public function index(SubCategory $category)
    {
        return view('admin.category-service.index', compact('category'));
    }

    public function dataTable(Request $request)
    {
        $query = CategoryService::with('subCategory')->where('sub_category_id', $request->filter);

        return DataTables::of($query)
            ->addColumn('sub_category', function ($row) {
                return $row->subCategory?->name ?? '-';
            })
            ->make(true);
    }

    public function toggleStatus(Request $request, $id)
    {
        $column = $request->column ?? 'is_active';
        $item   = CategoryService::findOrFail($id);

        $item->$column = ! $item->$column;
        $item->save();

        return response()->json(['message' => $item->is_active ? 'Updated successfully' : 'Updated successfully']);
    }

    public function form($id = null)
    {
        $data = $id ? CategoryService::findOrFail($id) : null;
        return view('admin.category-service.form', compact('data'));
    }

    public function store(Request $request, SubCategory $category)
    {
        if (! $category) {
            return response()->json(['message' => 'Sub Category not found']);
        }

        $request->validate([
            'name'        => "required|string",
            'description' => "nullable|string",
            'documents'   => "nullable|string",
        ]);

        CategoryService::create([
            'sub_category_id' => $category->id,
            'name'            => $request->name,
            'description'     => $request->description,
            'documents'       => $request->documents,
        ]);

        return response()->json(['message' => 'Service created successfully']);
    }

    public function update(Request $request, CategoryService $categoryService)
    {
        $data = $request->validate([
            'name'        => "required|string",
            'description' => "nullable|string",
            'documents'   => "nullable|string",
        ]);

        $categoryService->update($data);

        return response()->json(['message' => 'Service updated successfully']);
    }
}
