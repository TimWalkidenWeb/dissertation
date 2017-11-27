<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Symfony\Component\Console\Tests\Command\createClosure;
use App\file;

class FileController extends Controller
{
   public function showUploadForm(){
        return view('upload');
   }

   public function storeFile(request $request){
        if ($request->hasFile('file')){

            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/', $filename);
            $filesave = new File;
            $filesave->name = $filename;
            $filesave->size = $filesize;
            $filesave->save();
            return 'yes';
        }
        return $request->all();
   }

   public function show(){
   }

   }
