<?php
  namespace App\Trait;

  Trait saveimage {

    function Uploadphoto ($photo,$dit)  {
        $extention    = $photo->getClientOriginalExtension();
        $filename     = time() . '.' . $extention;
        $path         = $dit;
        $photo->move($path,$filename);
        return $filename;
    }

}
