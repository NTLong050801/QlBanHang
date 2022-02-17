
<?php
class BaseController
{
    const VIEW_FOLDER = 'Views';
    const MODEL_FOLDER ='Models';
    /*
     Description : path name :" folder.file.name
     lấy từ sau thư mục view 
    */
    protected function view($viewPath , array $data = [], array $data2 = []) 
    {
        foreach ($data as $key => $value)
        {
            $$key  = $value;
        }

        foreach ($data2 as $key => $value)
        {
            $$key  = $value;
        }
        // echo '<pre>';
        // print_r($categories);
        // die;
       require (self::VIEW_FOLDER .'/' . str_replace('.','/',$viewPath) . '.php');
    }
    protected function loadModel($modelPath)
    {
        require (self::MODEL_FOLDER .'/' . $modelPath . '.php');
    }
}