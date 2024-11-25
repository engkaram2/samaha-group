<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\IssueFile;
use App\Models\Translation;
use Illuminate\Http\Request;


class ViewFilesController extends Controller
{
    public function view($id) {

        $file=IssueFile::find($id);

        return view('Front.view_file',compact('file'));
    }

    public function view_file($id){
        $translation=Translation::find($id);
        $file=$translation->file;
        $file_path=$translation->file_path;
        return view('View_file.view_file',compact('file','file_path'));
    }


    public function view_file_translation($id){
        $translation=Translation::find($id);

        $file=$translation->file_translation;
        $file_path=$translation->file_translation_path;
        return view('View_file.view_file',compact('file','file_path'));
    }

}
