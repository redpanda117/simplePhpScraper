<?php
include('simple_html_dom.php');
// //base url
// $base = 'https://www.newsmax.com/newsfront/';

/*no error occured when using curl 
  did not to have remove $offset in file simple_html_dom.php on line 75  */

  // //initilizing
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $base);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
// $str = curl_exec($curl);
// curl_close($curl);

// // Create a DOM object
// $html_base = new simple_html_dom();
// // Load HTML from a string
// $html_base->load($str);

//get all category links
// foreach($html_base->getElementById("copy_small") as $element) {
//     echo "<pre>";
//     var_dump($element);
//     //var_dump( "https://www.newsmax.com/newsfront" . $element->href);
//     echo "</pre>";
// }

// $html_base->clear(); 
// unset($html_base);




 //gettting the website url
 /*error occur had to  remove $offset in file simple_html_dom.php on line 75
 for file_get_html to work */
  $html = file_get_html("https://www.newsmax.com/newsfront/");
// echo($html);
foreach($html->find('li[class="article_link"]') as $postDiv){
    
     foreach($postDiv->find('a') as $element) {
        $title = strip_tags($element->plaintext);
        $links= $element->href;
     //   echo($title . "<br>" . "https://www.newsmax.com/newsfront".$links . "<br>");
    }
 }