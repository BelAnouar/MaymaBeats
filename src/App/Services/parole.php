<?php
declare (strict_types=1);

namespace app\Services;  
use Framework\Database;


class parole {

    public function __construct(private Database $db)
    {
            
    }

    public function addlyrics($parole) {
        $this->db->query(
          "INSERT INTO parole (parole) VALUES (:parole)",
          [
               'parole'=>$parole,
    
          ]
          );
       
}
    
public function deletelyrics($idP) {
    $this->db->query(
        "DELETE FROM parole WHERE id = :idP",
        
      [
           'id'=>$idP,

      ]
      );
   
}
}


?>