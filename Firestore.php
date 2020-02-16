<?php

require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;


class Firestore{


	protected $db;
	protected $name;
	public function __construct(string $collection)
	{
		$this->db = new FirestoreClient([
			'projectId' => 'schoolbus-ca38d'
		]);

		$this->name = $collection;

	}	


	public function getDocument(string $name){

		
		if($this->db->collection($this->name)->document($name)->snapshot()->exists()){
		$arr[] = $this->db->collection($this->name)->document($name)->snapshot()->data();
		//print_r($arr);	
	
	echo $arr[0]['PMob'];
	echo $arr[0]['PFname'];
	echo $arr[0]['PLname'];
		//echo "<html><table border='1'>";
		 // echo "<td>".$arr[0]['PMob']."</td>";
		 // echo "<td>".$arr[0]['PFname']."</td>";
		 // echo "<td>".$arr[0]['PLname']."</td>";
		 // echo "</table></html>"
		 // //
		// foreach($arr as $k=>$v){
			
		// 	foreach ($v as $sub_key => $sub_val){
				
		// 		if (is_array($sub_val)) { 


  //        			   foreach ($sub_val as $ke => $ve) { 
  //             			  echo $ve . "\n"; 
  //           		} 
  //     		  }

  //     		   else { 
      		   
  //           echo $sub_val;
  //       } 


		// }
		// }
		 
		}
	
		else{
			throw new Exception("Not found");

		} 
	
}

	public function addParent(string $name, array $data = []){

		$this->db->collection($this->name)->document($name)->set($data);

	}


	public function addDriver(string $name, array $data = []){

		$this->db->collection($this->name)->document($name)->set($data);

	}
	// public function getDocument(){


	// 		$usersRef = $this->db->collection('Parent');
	// 		$snapshot = $usersRef->document('9409809197')->snapshot()->data();

	// 		//return $snapshot;
	// 		foreach($snapshot as $user){
	// 			//printf('User: %s'.PHP_EOL.$user->id());
	// 			echo $user;
	// 		}
	// 	}

}


?>