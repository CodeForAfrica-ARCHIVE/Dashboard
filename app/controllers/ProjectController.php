<?php 

class ProjectController extends BaseController {
 	
	public function getIndex()
    {
        //
        $title = "List Projects";
		
        $projects = Project::all();
		
		return View::make('projects', compact('projects', 'title'));	
    }
	public function getAddProject($message = "", $error = 0){
		$title = "Add Project";
		
		return View::make('add_project', compact('title', 'message', 'error'));
	}
	public function postProcessAdd(){
		$validator = Validator::make(
		    array('title' => $_POST['title'],
				  'description' => $_POST['description']
				  ),
		    array('title' => array('required'),
		    	  'description'=>array('required'),
			)
		);
		
		if ($validator->fails()){
		    // The given data did not pass validation
		    $message = $validator->messages();
			$error = 1;
		}else{
			$message = "Added successfully!";
			$error = 0;
		}
		
		return $this->getAddProject($message, $error);
	}
}
?>