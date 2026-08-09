<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.form',[
            'testimonial'=>new Testimonial()
        ]);
    }

    public function store(Request $request)
    {
        $photo = null;

        if($request->hasFile('photo')){
            $photo = $request->file('photo')
                ->store('testimonials','public');
        }

        Testimonial::create([
            'name'=>$request->name,
            'company'=>$request->company,
            'position'=>$request->position,
            'photo'=>$photo,
            'rating'=>$request->rating ?? 5,
            'message'=>$request->message,
            'is_active'=>$request->has('is_active'),
        ]);

        return redirect()->route('admin.testimonials.index');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form',compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $photo = $testimonial->photo;

        if($request->hasFile('photo')){

            if($photo){
                Storage::disk('public')->delete($photo);
            }

            $photo = $request->file('photo')
                ->store('testimonials','public');
        }

        $testimonial->update([
            'name'=>$request->name,
            'company'=>$request->company,
            'position'=>$request->position,
            'photo'=>$photo,
            'rating'=>$request->rating,
            'message'=>$request->message,
            'is_active'=>$request->has('is_active'),
        ]);

        return redirect()->route('admin.testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        if($testimonial->photo){
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();

        return back();
    }
}
