<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::latest()->paginate(10);

        return view('admin.service-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.service-categories.form', [
            'category' => new ServiceCategory()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'nullable|image',
        ]);

        $image = null;

        if($request->hasFile('image')){
            $image = $request->file('image')
                ->store('service-categories','public');
        }

        ServiceCategory::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'image'=>$image,
            'description'=>$request->description,
            'sort_order'=>$request->sort_order ?? 0,
            'is_active'=>$request->has('is_active')
        ]);

        return redirect()
            ->route('admin.service-categories.index')
            ->with('success','Kategori berhasil ditambahkan.');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.service-categories.form',[
            'category'=>$serviceCategory
        ]);
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'nullable|image',
        ]);

        $image = $serviceCategory->image;

        if($request->hasFile('image')){

            if($image){
                Storage::disk('public')->delete($image);
            }

            $image = $request->file('image')
                ->store('service-categories','public');
        }

        $serviceCategory->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'image'=>$image,
            'description'=>$request->description,
            'sort_order'=>$request->sort_order ?? 0,
            'is_active'=>$request->has('is_active')
        ]);

        return redirect()
            ->route('admin.service-categories.index')
            ->with('success','Kategori berhasil diupdate.');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        if($serviceCategory->image){
            Storage::disk('public')->delete($serviceCategory->image);
        }

        $serviceCategory->delete();

        return back()->with('success','Kategori berhasil dihapus.');
    }
}
