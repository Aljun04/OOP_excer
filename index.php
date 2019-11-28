<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style >
body{
	background-image: url(car3.png);
	background-size: cover;

}
	
</style>

<h1 style="border-style: solid; width: 250px;border-color: red; background-image: url(red.png);">VEHICLE TYPE</h1>


<div style="border-style: solid; border-width: 5px; border-radius: 5px; width: 800px; border-right: : 1000px; ">
<br>

<?php

		class Vehicle{
			//declaring member variablke here
			var $model;
			var $fuel;
			var $capacity;
			var $speed;

			//declaring member function here
			function setModel($modl){
				$this->model=$modl;
			}
			function getModel(){
				echo "Model:". $this->model."<br/> <br/>";
			}
			function setFuel($fuel){
				$this->fuel=$fuel;
			}
				function getFuel(){
					echo "Fuel:". $this->fuel."<br/> <br/>";
				}	
				function setCapacity($name){
				$this->capacity=$name;
			}
				function getCapacity(){
					echo "Capacity:". $this->capacity."<br/> <br/>";
				}
				function setSpeed($speed){
				$this->speed=$speed;
			}
				function getSpeed(){
					echo "Speed:". $this->speed."<br/> <br/> <br/> <br/>";
				}




				function setModel1($modl){
				$this->model=$modl;
			}
			function getModel1(){
				echo "Model:". $this->model."<br/> <br/>";
			}
			function setFuel1($fuel){
				$this->fuel=$fuel;
			}
				function getFuel1(){
					echo "Fuel:". $this->fuel."<br/> <br/>";
				}	
				function setCapacity1($name){
				$this->capacity=$name;
			}
				function getCapacity1(){
					echo "Capacity:". $this->capacity."<br/> <br/>";
				}
				function setSpeed1($speed){
				$this->speed=$speed;
			}
				function getSpeed1(){
					echo "Speed:". $this->speed."<br/> <br/>";
				}




		}


				$type= new Vehicle();
				$type ->setModel("Honda Civic");
				$type->getModel();
				$physics = new Vehicle();
				$physics ->setFuel("Diesel");
				$physics->getFuel();
				$physics = new Vehicle();
				$physics ->setCapacity("4");
				$physics->getCapacity();
				$physics = new Vehicle();
				$physics ->setSpeed("200km/h");
				$physics->getSpeed();





				$type= new Vehicle();
				$type ->setModel1("Ceres Bus");
				$type->getModel1();
				$physics = new Vehicle();
				$physics ->setFuel1("Diesel");
				$physics->getFuel1();
				$physics = new Vehicle();
				$physics ->setCapacity1("100");
				$physics->getCapacity1();
				$physics = new Vehicle();
				$physics ->setSpeed1("150km/h");
				$physics->getSpeed1();








		?>
</div>
</center>

</body>
</html>