<div>
<table class="rwd-table">
  <?php  
     echo '<thead><tr>';
       for ($i=0; $i < sizeof($datafields); $i++) 
       { 
         $columnname = preg_replace('/(?<!\ )[A-Z]/', ' $0', $datafields[$i]);
         echo '<th>'.$columnname.'</th>';
        }
     echo '</tr></thead>';
   ?>
    <tbody>
  <?php  
     for ($i=0; $i < sizeof($data); $i++) { 
         echo '<tr>';
           for ($j=0; $j < sizeof($datafields); $j++) 
           {
             echo '<td data-th="'.$datafields[$j].'">'.$data[$i][$datafields[$j]].'</td>';
            }
           echo '</tr>';
     }
   ?>
   </tbody>
</table>
</div>