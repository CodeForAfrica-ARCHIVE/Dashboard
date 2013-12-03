<?php 

class ProjectController extends BaseController {
 	
	public function getIndex()
    {
        //
        $projects = Project::all();
		return View::make('projects')->with('projects', $projects);	
    }
	public function getAddProject(){
		return View::make('add_project');
	}
}
?>