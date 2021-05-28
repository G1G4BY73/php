<?php
// $data = file_get_contents("kapil.txt");
# it will sotre file as string and you can use string function on data
// $new_data =str_replace("\n","<br>","$data")


// echo $new_data ;



// $data = file("kapil.txt");
# it will store file as a araay nd you can use array function on data


// $data = fopen("kapil.txt");#MOST POWERFULL

#check wheater a file is existing or not in directory #file_exists() fucnction


// if(file_exists("kapil.txt")){
//   echo("file is present in directory \n");
//   }
// else {
//   echo("file is not presnet in the directory \n");
// }


# to check the size of the file


// echo(filesize("kkapil.txt"));
// echo "bytes\n"


# to check the complet information of the file
// device Number
// inode number
// n-links
// userID
// groupID
// size of file
// .............total 13 informations

// $detail = stat("kapil.txt");
// print_r($detail);

// to copy a file
// copy("kapil.txt","kk.txt") #return true and false

//to delete a file
// echo(unlink("kapil.txt"))



?>
