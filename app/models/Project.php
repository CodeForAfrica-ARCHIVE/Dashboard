<?php

class Project extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';
	
	public static function singleproject($id){
		$project = DB::table('projects')->where('p_id', $id)->first();
		return $project;
	}
	public static function deleteproject($id){
		if(DB::table('projects')->where('p_id', $id)->delete()){
			return true;
		}else{
			return false;
		}
	}

	public static function edit($post, $file){
		//form validation	
		$validator = Validator::make(
		    array('title' => $post['title'],
				  'description' => $post['description']
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
			
			if($file==null){
				$newfilename=$post['old_logo'];
			}else{
				$extension =$file->getClientOriginalExtension();
				$newfilename = sha1(time().time()).".".$extension;
				$destinationPath = 'uploads/';
				$uploadSuccess = $file->move($destinationPath, $newfilename);
			}			
			//db update
			
			DB::table('projects')->where('p_id', $post['id'])->update(
   			 array('p_title' => $post['title'], 'p_description' => $post['description'], 'p_logo'=>$newfilename, 'p_link'=>$post['link'])
			);
			
			$message = "Edited successfully!";
			$error = 0;
		}
		return array($message, $error);
	}
	public static function process($post, $file){
		//form validation	
		$validator = Validator::make(
		    array('title' => $post['title'],
				  'description' => $post['description']
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
			
			if($file==null){
				$newfilename='default.jpg';
			}else{
				$extension =$file->getClientOriginalExtension();
				$newfilename = sha1(time().time()).".".$extension;
				$destinationPath = 'uploads/';
				$uploadSuccess = $file->move($destinationPath, $newfilename);
			}			
			//db insert
			DB::table('projects')->insert(
   			 array('p_title' => $post['title'], 'p_description' => $post['description'], 'p_logo'=>$newfilename, 'p_link'=>$post['link'])
			);
			
			$message = "Added successfully!";
			$error = 0;
		}
		return array($message, $error);
	}
}
