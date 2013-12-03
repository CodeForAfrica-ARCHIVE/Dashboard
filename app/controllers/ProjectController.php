<?php 

class ProjectController extends BaseController {
 	
	public function getIndex()
    {
        //
        $title = "List Projects";
		
        $projects = Project::all();
		
		return View::make('projects', compact('projects', 'title'));	
    }
	public function getAddProject(){
		$title = "Add Project";
		
		return View::make('add_project', compact('title'));
	}
}
?>