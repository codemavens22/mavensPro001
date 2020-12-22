<?php 



/**
 * 
 */
class car
{
	public  $car="benx";
	public  $model="dge435";
	public  $price=345;
	
	public function show()
	{
		echo "hello ";
	}

	function __construct(argument)
	{
		# code...
	}
}

$obj = car();

echo $obj.show();



 ?>