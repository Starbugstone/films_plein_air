<?php
/*
"key" => array(
  "title" => "",
  "image" => "", //in images/films/
  "showDate" => "",
  "showTime" => "",
  "filmDuration" => "",
  "filmDate" => "",
  "filmAge" => "",
  "shortDescription" =>"<p></p>"  //With html
*/
$films = array(
  "slumdog" => array(
    "title" => "Slumdog Millionaire",
    "image" => "slumdog.jpg",
    "showDate" => "05 Aout",
    "showTime" => "18h00",
    "filmDuration" => "2h00",
    "filmDate" => "2008",
    "filmAge" => "13+",
    "shortDescription" => "<p>Jamal Malik (Dev Patel), un jeune Indien issu des bidonvilles de Juhu, est finaliste de la version indienne du jeu télévisé Qui veut gagner des millions ? Il subit l'interrogatoire musclé du sergent de police Srinivas (Saurabh Shukla) ; une question est alors posée au spectateur : « Comment Jamal Malik a-t-il atteint la question à 20 millions de roupies ?</p>
      <ul>
        <li>(A) Il a triché.</li>
        <li>(B) Il est chanceux.</li>
        <li>(C) C'est un génie.</li>
        <li>(D) C'était écrit. »</li>
      </ul>"
  ),
  "wrathOfKhan" => array(
    "title" => "Star trek 2- The wrath of khan",
    "image" => "Khan.jpg",
    "showDate" => "05 Aout",
    "showTime" => "20h30",
    "filmDuration" => "01:53:00",
    "filmDate" => "1982",
    "filmAge" => "13+",
    "shortDescription" =>"<p>L’USS Enterprise reçoit un appel de détresse venant d'un vaisseau terrien, le Kobayashi Maru, provenant de l'intérieur de la zone neutre. Le commandant de l’Enterprise, le lieutenant Saavik, décide d'enfreindre le traité de paix avec les Klingons pour sauver l'équipage en péril. Il s'avère que l'appel de détresse était un piège, et des vaisseaux de guerre klingons attaquent l’Enterprise et finissent par le détruire.</p>"
  )
);


function shorten_string($string, $wordsreturned=55)
/*  Returns the first $wordsreturned out of $string.  If string
contains fewer words than $wordsreturned, the entire string
is returned.
*/
{
$retval = $string;      //  Just in case of a problem

$array = explode(" ", $string);
if (count($array)<=$wordsreturned)
/*  Already short enough, return the whole thing
*/
{
$retval = $string;
}
else
/*  Need to chop of some words
*/
{
array_splice($array, $wordsreturned);
$retval = implode(" ", $array)." ...";
}
return $retval;
}
