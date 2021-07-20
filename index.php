<?php

// $data = "estudio PHP";
// echo $data[0];

// $post = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem aut dolores soluta eaque impedit consequuntur dolore architecto neque ab repellendus, animi at facere eius, sunt autem provident optio nemo eum!";
// $extract = substr($post, 0, 60);

// echo "$extract... [chupapimuñaño]";

//pasar de un string a un array
$data = "javas, php, elguebo, chapulin"; //campo tags
$tags = explode(",", $data); //array
echo "<pre>";
var_dump($tags);

//pasasr de un array a un string
$courses = ["javas", "guebo","xyz"];
echo implode(",", $courses);


//example real

$course = "   course de PHP   ";
$course = trim($course);
echo "<pre>";
echo "quiero aprender $course , sdnfoisdjfposd";