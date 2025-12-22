<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\DocumentCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DocumentGroupController extends Controller
{
    public function index(SubCategory $category)
    {
        return view('admin.document-group.index', compact('category'));
    }

    public function dataTable(Request $request)
    {
        $query = DocumentCategory::with('category')->where('sub_category_id', $request->filter);

        return DataTables::of($query)
            ->addColumn('category', function ($row) {
                return $row->category?->name ?? '-';
            })
            ->make(true);
    }

    public function toggleStatus(Request $request, $id)
    {
        $column = $request->column ?? 'is_active';
        $item   = DocumentCategory::findOrFail($id);

        $item->$column = ! $item->$column;
        $item->save();

        return response()->json(['message' => $item->is_active ? 'Updated successfully' : 'Updated successfully']);
    }

    public function form($id = null)
    {
        $data = $id ? DocumentCategory::findOrFail($id) : null;
        return view('admin.document-group.form', compact('data'));
    }

    public function store(Request $request, SubCategory $category)
    {
        if (! $category) {
            return response()->json(['message' => 'Sub Category not found']);
        }

        $request->validate([
            'name'  => "required|string",
            'notes' => "nullable|string",
        ]);

        DocumentCategory::create([
            'sub_category_id' => $category->id,
            'name'            => $request->name,
            'notes'           => $request->notes,
            'slug'            => str()->slug($request->name),
        ]);

        return response()->json(['message' => 'Document group created successfully']);
    }

    public function update(Request $request, DocumentCategory $categoryService)
    {
        $data = $request->validate([
            'name'  => "required|string",
            'notes' => "nullable|string",
        ]);

        $data['slug'] = str()->slug($request->name);

        $categoryService->update($data);

        return response()->json(['message' => 'Document group updated successfully']);
    }
}
