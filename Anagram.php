<?php
/*PHP version 5.3.10*/

/*to keep the value of input field empty when browser loads it for the first time*/
$word1="";
$word2="";

/*check if submit button is clicked or not*/
if(isset($_POST['submit']))
{
/*passing the input value in post method*/	
$word1=$_POST['word1'];
$word2=$_POST['word2'];

/*create a function and pass two parameters*/
function isAnagram($word1,$word2)
/*count_chars are used to determines how many times each letter is used*/
    {
    return (count_chars($word1,1)==count_chars($word2,1));
    }
/*create another variable to put the parametarized function*/
	$check_anagram=isAnagram($word1,$word2);
	
/*if the return value is equal to 1,means similar characters either organised or random characters*/	
    if($check_anagram == 1){
	        echo "True";
	}else{
	        echo "False";
	}
	
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <label>First Word <br>
  <input name="word1" type="text" id="name" style="text-transform:uppercase" pattern=".{2,1000}" title="between 2 to 1000">
  </label>
  <label><br>
  <br>
  Second Word <br>
  <input name="word2" type="text" id="email" style="text-transform:uppercase" pattern=".{2,1000}" title="between 2 to 1000">
  </label>  <label><br>
  <br>
  <label>
    <input type="submit" name="submit" id="submit" value="Submit">
  </label>
</form>