<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.form', [
            'portfolio' => new Portfolio(),
            'categories' => ServiceCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'thumbnail'=>'required|image',
        ]);

        $thumbnail = $request->file('thumbnail')
            ->store('portfolios','public');

        $portfolio = Portfolio::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'thumbnail'=>$thumbnail,
            'client_name'=>$request->client_name,
            'location'=>$request->location,
            'project_year'=>$request->project_year,
            'description'=>$request->description,
            'featured'=>$request->has('featured'),
            'sort_order'=>$request->sort_order ?? 0,
            'is_active'=>$request->has('is_active'),
        ]);

        $portfolio->categories()->sync($request->categories);

        return redirect()->route('admin.portfolios.index');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.form',[
            'portfolio'=>$portfolio,
            'categories'=>ServiceCategory::all()
        ]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $thumbnail = $portfolio->thumbnail;

        if($request->hasFile('thumbnail')){

            Storage::disk('public')->delete($thumbnail);

            $thumbnail = $request->file('thumbnail')
                ->store('portfolios','public');
        }

        $portfolio->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'thumbnail'=>$thumbnail,
            'client_name'=>$request->client_name,
            'location'=>$request->location,
            'project_year'=>$request->project_year,
            'description'=>$request->description,
            'featured'=>$request->has('featured'),
            'sort_order'=>$request->sort_order,
            'is_active'=>$request->has('is_active'),
        ]);

        $portfolio->categories()->sync($request->categories);

        return redirect()->route('admin.portfolios.index');
    }

    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete($portfolio->thumbnail);

        $portfolio->delete();

        return back();
    }
}
