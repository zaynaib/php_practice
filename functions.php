<?php
function hello($name){
  if($name === 'Mike'){
 return 'Hello, Mike!';
  }
  
  else{
    return 'Hello stranger.';
    
  }
  
}

$greeting = hello('Chris');

echo $greeting;

?>
