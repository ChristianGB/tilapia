
<?php
class EliminarController extends BaseController{
   public function destroy($id)
   {
$Contenido = Contenido::find($id);
        
        if (is_null ($Contenido))
        {
            App::abort(404);
        }
        
        $Contenido->delete();
        echo $Contenido->Titulo." ah sido borrado";
}
}
?>