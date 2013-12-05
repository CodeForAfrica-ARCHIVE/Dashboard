<?php 

class ProjectController extends BaseController {
 	
	public function getIndex(){
		//check if user exists, update, else redirect to login and access denied
		$email = Auth::user()->email;			
		if($this->user_exists($email)){			
			//
        	$title = "List Projects";
		
        	$projects = Project::all();
		
			return View::make('projects', compact('projects', 'title'));
		}else{
			return View::make('login', array('title'=>'Login', 'access_denied'=>'1', 'authUrl' => Auth::getProvider()->getAuthUrl()));
		}
        	
    }
	public function user_exists($email){
		$count = DB::table('users')->where('email', $email)->count();
		if($count>0){
			//update profile
			DB::table('users')->where('email', $email)->update(array('name'=>Auth::user()->name, 'picture'=>Auth::user()->picture, 'link'=>Auth::user()->link));
			//
			return true;
		}else{
			return false;
		}
	}
	public function getAddProject($message = "", $error = 0){
		$title = "Add Project";
		
		return View::make('add_project', compact('title', 'message', 'error'));
	}
	public function postProcessAdd(){
		//put on model later
		$file = Input::file('logo'); 
		$resultarray = Project::process($_POST, $file);
		//
		$message = $resultarray[0];
		$error = $resultarray[1];
		return $this->getAddProject($message, $error);
	}
	public function getViewProject(){
		$project = Project::singleproject($_GET['id']);
		
		$title = $project->p_title;
		return View::make('view_project', compact('title', 'project'));
	}
	public function postProcessEdit(){
		
		$file = Input::file('logo'); 
		$resultarray = Project::edit($_POST, $file);
		//
		$message = $resultarray[0];
		$error = $resultarray[1];
		return $this->getEditProject($message, $error, $_POST['id']);
	}
	public function getEditProject($message="", $error=0, $id=0){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		$project = Project::singleproject($id);
		
		$title = $project->p_title;
		return View::make('edit_project', compact('title', 'project', 'message', 'error'));
	}
	public function getDeleteProject(){
		if(Project::deleteproject($_GET['id']))
		{
			$result = "Deleted succesfully!";
		}else{
			$result = "Problem deleting!";
		}
		$title = "Delete Project";
		return View::make('delete_project', compact('title', 'result'));
	}
	
}
?>