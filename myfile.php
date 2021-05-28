<?php
// $a = readfile("kapil.txt");
// echo $a;

// readfile("kapil.txt")   #just only for open to read file

// readfile("img.png") #read as txt file
// readfile("file.html")


// $fptr = fopen("kapil.txt", "r" , ); # return a resourse pointer if avilable otherwise return false
// // echo (var_dump($fptr));
// if (!$fptr)
// {
//   die("unable to open file");
// }
// $content = fread($fptr, filesize("kapil.txt"));
// echo $content;
//
// fclose($fptr);
//
//


// $fptr = fopen("kapil.txt", "r" );
// echo (fgets($fptr)); #it reads one line and send pointer to the next line
// echo (var_dump(fgets($fptr)));



//Reading a file line by line
/*
while($a = fgets($fptr)){
  echo $a ;
}
echo "end of file has been reached";
*/

// Read a file character by character
/*
echo fgetc($fptr);
while($a = fgetc($fptr)){
  echo $a ;

}
echo "<br>";
echo "end of file has been reached";

*/

//write a program which reads the content of file character by character until a full stop encountered

// $fptr = fopen("kapil.txt", "r" );
// while(($a = fgetc($fptr)) != '.'){
//   echo $a;
// }
// fclose($fptr);

//writing file in php

// $fptr = fopen("kapil2.txt", "w" );
// fwrite($fptr,"This is the file created in php and \nnow it is here in your local Directory \nwhich is /home/kapil/codes/php .");
// fwrite($fptr,"\nTHis is another content line by php in you text file .");
// fwrite($fptr,"\nTHis is another content line by php in you text file .");
// fwrite($fptr,"\nTHis is another content line by php in you text file .");
// fwrite($fptr,"\nTHis is another content line by php in you text file .");
// fwrite($fptr,"\nTHis is another content line by php in you text file .");

// $fptr = fopen("kapil2.txt", "a" );
// fwrite($fptr,"\nthis is beeing appended to the file");
// fclose();













?>
