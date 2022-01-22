<?php

use Illuminate\Support\Facades\Route;
Route::post('ckeditor/upload',function (\Illuminate\Http\Request $request){
     $path = SewidanField\App\Traits\Attachment\Attachment::addAttachment($request->image,'ck-editor-images');
    return response()->json(['url' => asset($path)]);
})->name('ckeditor.upload');