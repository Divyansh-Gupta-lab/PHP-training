<?php 
	class person 
	{
		var $name; 
		function __construct($name) 
		{ 
			$this->name = $name;  
 		}
 
   		function get_name() {
			return $this->name;
		}
	} 
	class employee extends person 
	{
		function __construct($employee_name)
		{
			$this->set_name($employee_name);
		}
	}
	echo "few";
?>