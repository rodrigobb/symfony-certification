<?php

/*
Parameters in the interface's method declaration do not have to have 
the same names as those in any of its implementations.
*/

/*
Default argument values may be supplied for interface method parameters, 
and they have to be if you want to use default argument values in
 the implemented classes
 */


interface payable
{
    public function pay($min=5);
}

class Cheap implements payable
{
	//Declaring 'public function pay($min)' will result in a
	//	PHP Fatal error: Declaration of Cheap::pay() must be 
	//  compatible with payable::pay($min = 5)
    public function pay($amount = 5)
    {
    	echo $amount;
        // ....
    }
}

class Expensive implements payable
{
	public function pay($myMoney = 20) {
		echo "[$myMoney]";
	}
}

$a = new Cheap();
$a->pay();

$b = new Expensive();
$b->pay();

echo "\n\n";

