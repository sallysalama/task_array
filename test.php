
<?php
$ind_arr =array(40,"","sally",null,'5.5', "meka7");
$arrlength = count($ind_arr);

function ind_ass($ind_arr , $arrlength)   
{
   $ass_arr = array(); 
   $val =5;  
   for($x = 0; $x < $arrlength; $x++) 
     {
    if(is_numeric($ind_arr[$x]))
        {
         $ass_arr[$ind_arr[$x]] = $ind_arr[$x] + $val;
        } 
      elseif(is_null($ind_arr[$x]))
         {
         $ass_arr[$ind_arr[$x]] = $val;
        }
     elseif(is_string($ind_arr[$x]))
        {
         if((int) filter_var($ind_arr[$x], FILTER_SANITIZE_NUMBER_INT) == "")
         {
            $ass_arr[$ind_arr[$x]] = $ind_arr[$x] . $val;
         }
         else
         {
            $ass_arr[$ind_arr[$x]] = (int) filter_var($ind_arr[$x], FILTER_SANITIZE_NUMBER_INT) + $val;
         }
        
        }
        elseif(is_float($ind_arr[$x]))
        {
           $ass_arr[$ind_arr[$x]] = $ind_arr[$x] + $val;
        }
        
      else
         {
            continue;
         }
     }
   
     return $ass_arr;
}

print_r (ind_ass($ind_arr , $arrlength));


