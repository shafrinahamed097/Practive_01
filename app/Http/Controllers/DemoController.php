<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request){
      $name = $request->header('name');
      $age = $request->header('age');
      $nationality = $request->header('nationality');
      $fcolor = $request->header('fColor');
      $fSport1 = $request->header('fSport1');
      $fSport2 = $request->header('fSport2');
      $fMovie = $request->header('fMovie');
      $leisureTime = $request->header('leisureTime');




      return "Hello dear audience!
        My name is {$name}. I'm {$nationality}. I'm {$age} years old.
        My Favourite color is {$fcolor}. My favourite sports are {$fSport1} and {$fSport2} . 
        My Favourite movie is {$fMovie} . I enjoy {$leisureTime} during my leisure time.

        That's all about my introduction. I hope to be friends with all of you. Thank you so much
        for your patience!
      ";
    }

    // function DemoAction1(Request $request){
    //   $photoFile = $request->file('photo');
    //   $FileSize = filesize($photoFile);
    //   $FileType = filetype($photoFile);
    //   $FileOriginalName = $photoFile->getClientOriginalName();
    //   $FileTempName = $photoFile->getFilename();
    //   $FileExtension = $photoFile->extension();
      
    //   return array(
    //     'FileSize'=>$FileSize,
    //     'FileType'=>$FileType,
    //     'FileOriginalName' =>$FileOriginalName,
    //     'FileTempName'=>$FileTempName,
    //     'FileExtension'=>$FileExtension

    //   );
    // }


     function DemoAction1(Request $request){
     
      $photoFile = $request->file('photo');
      // $photoFile->move(public_path('upload'), $photoFile->getClientOriginalName());
      $photoFile->storeAs('upload', $photoFile->getClientOriginalName());
      return true;

     }


  }