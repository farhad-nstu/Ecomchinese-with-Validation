<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Intervention\Image\ImageManagerStatic as Images;

use Illuminate\Http\Request;

class SliderController extends Controller {
    public function index() {
        $sliders = Image::where( 'image_type', 'slider' )->get();
        return view( 'dashboard.slider.index', compact( 'sliders' ) );
    }

    public function create() {
        return view( 'dashboard.slider.add' );
    }

    public function store( Request $request ) {
        $image = $request->file( 'images' );

        $filename    = $image->getClientOriginalName();

        $image_resize = Images::make( $image->getRealPath() );

        $image_resize->resize( 800, 800 );
        $image_resize->save( public_path( 'images/' .$filename ) );
        $imageToSave = new Image;
        $imageToSave->image_type = 'slider';

        $imageToSave->image = 'images/' .$filename;
        $imageToSave->save();

        return redirect()->route( 'sliders.index' )->with( 'success', 'Slider added successfully' );
    }

    public function destroy( $id ) {
        $slider = Image::find( $id );
        $slider->delete();
        return redirect()->back()->with( 'success', 'Slider deleted successfully' );
    }

}
