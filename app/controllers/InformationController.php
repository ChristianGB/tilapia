<?php
class InformationController extends BaseController{
	
	public function ajaxrequest($id)
{
        $varwithinfo = Contenido::find($id);
        
        if (is_null ($varwithinfo))
        {
            App::abort(404);
        }
        
       

       echo $varwithinfo->Titulo;
}
}

