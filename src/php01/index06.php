<?php
for($i=1;$i<=50;$i++){if($i % 15 === 0){echo "FizzBuzz"."<br/>";}elseif($i % 5===0){echo "Buzz"."<br/>";}elseif($i % 3 === 0){echo "Fizz"."<br/>";}else{echo $i."<br/>";}}