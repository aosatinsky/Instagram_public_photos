 $html = file_get_contents('https://www.instagram.com/explore/tags/YOURHASHTAG/'); //get the web
                        preg_match_all("/(https)(:).*?(jpg)/", $html, $output_array); //get the pictures

                        $matriz_fl = preg_grep("/(https).*?(480)(x)(480).*?(jpg)/", $output_array[0]); //get the 480 x 480 

						// print it
						
                        $i = 1;
                        foreach ($matriz_fl as $valor){
                            if ($i==1){
                                echo "<div class=\"item active\">
                <img src='$valor' alt=\"\">
            </div>";
                            }
                            if ($i!=1){
                                echo "<div class=\"item\">
                <img src='$valor' alt=\"\">
            </div>";
                            }
                            $i++;
                        }
