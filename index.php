<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
?>

 <h1>Best Movies in 2019<h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
   $mov_title = $data->getElementsByTagName("mov_title")->item(0)->nodeValue;
     $mov_director = $data->getElementsByTagName("mov_director")->item(0)->nodeValue;
     $mov_writer = $data->getElementsByTagName("mov_writer")->item(0)->nodeValue;
     $mov_artist = $data->getElementsByTagName("mov_artist")->item(0)->nodeValue;
     $mov_genre = $data->getElementsByTagName("mov_genre")->item(0)->nodeValue;
 
 echo "<ul>
            <h2>$mov_title</h2>
              <ul>
                  <li>Director: $mov_director </li>
                  <li>Writer: $mov_writer</li>
                  <li>Artist: $mov_artist </li>
                  <li>Genre: $mov_genre </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
