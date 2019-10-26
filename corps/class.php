<!-- <?php   
 //database.php 
    
 class Databases{  
      public $con;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  
      public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->con, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->con);  
           }  
      }  
      public function select($table_name)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name.""; 
           
           $result = mysqli_query($this->con, $query);
          
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           
            return $array;
      }
      
      public function find($table_name, $label, $value)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name." WHERE ".$label." = '".$value."'"; 
           
           
           $result = mysqli_query($this->con, $query);
          
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           
            return $array;
      }
      
//SELECTE NOM
public function affichenom($table_name1,$table_name2, $condition1,$condition2){
     $array = array();  
     $query = "SELECT *FROM ".$table_name1.",".$table_name2." WHERE ".$condition1."=".$condition2." ";
     
     
     $result = mysqli_query($this->con, $query);
    
     while($row = mysqli_fetch_assoc($result))  
     {  
          $array[] = $row;  
     }  
     
      return $array;


}

//DELED
      public function delete($tab1,$id1,$id2)  
            {    
                $query = "DELETE FROM ".$tab1." WHERE ".$id1."=".$id2."";
                $result = mysqli_query($this->con, $query); 
                if (mysqli_query($this->con, $query)) {
                    echo "Record deleted successfully";
                  } else {
                    echo "Error deleting record: " . mysqli_error($this->con);
                  }
                  
                  
                          
              
   }  
    //ADDITION TABLE

 
    public function ListeRV()  
            {    
     $array = array();  
     $query = "SELECT id_RV,nom_patient,nom_medcin,nom_specialite,date_planning,heure_rendezvous,date_rendezvous,duree_rendezvous
     FROM rendezvous,patient,medcin,specialite,planning
     WHERE rendezvous.id_patient = patient.id_patient AND rendezvous.id_planning =planning.id_planning
     AND  rendezvous.id_medcin = medcin.id_medcin AND rendezvous.id_specialite = specialite.id_specialite";
     
     
     $result = mysqli_query($this->con, $query);
    
     while($row = mysqli_fetch_assoc($result))  
     {  
          $array[] = $row;  
     }  
     
      return $array;
                  
                     
              
   }  

   //SELECT PLUS ID
   public function SelectId($id)  
            {    
     $array = array();  
     $query = "SELECT id_RV,nom_patient,nom_medcin,nom_specialite,date_planning,heure_rendezvous,date_rendezvous,duree_rendezvous,nom_secretaire
     FROM rendezvous,patient,medcin,specialite,planning,secretaire
     WHERE rendezvous.id_patient = patient.id_patient AND rendezvous.id_planning =planning.id_planning
     AND  rendezvous.id_medcin = medcin.id_medcin AND rendezvous.id_specialite = specialite.id_specialite
     AND rendezvous.id_secretaire = secretaire.id_secretaire
     AND id_RV=".$id."";
    
     
     $result = mysqli_query($this->con, $query);
    
     while($row = mysqli_fetch_assoc($result))  
     {  
          $array[] = $row;  
     }  
     
      return $array;
                  
                     
              
   }  


    
//function selection dans la base  verification
public function verif($tablev1,$conditionv1,$nom)
{ 
    
     $query = "SELECT * FROM ".$tablev1." WHERE ".$conditionv1."=".$nom."";
     $result =$result = mysqli_query( $this->con, $query);  
     
      return $result;
     $this->con->close();
     
 }
 

 //CLASS CONNEXION
}
 
 ?> 
  
//       public function select_where($table_name, $where_condition)  
//       {  
//            $condition = '';  
//            $array = array();  
//            foreach($where_condition as $key => $value)  
//            {  
//                 $condition .= $key . " = '".$value."' AND ";  
//            }  
//            $condition = substr($condition, 0, -5);  
//            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
//            $result = mysqli_query($this->con, $query);  
//            while($row = mysqli_fetch_array($result))  
//            {  
//                 $array[] = $row;  
//            }  
//            return $array;  
//       }  
//       public function update($table_name, $fields, $where_condition)  
//       {  
//            $query = '';  
//            $condition = '';  
//            foreach($fields as $key => $value)  
//            {  
//                 $query .= $key . "='".$value."', ";  
//            }  
//            $query = substr($query, 0, -2);  
//            /*This code will convert array to string like this-  
//            input - array(  
//                 'key1'     =>     'value1',  
//                 'key2'     =>     'value2'  
//            )  
//            output = key1 = 'value1', key2 = 'value2'*/  
//            foreach($where_condition as $key => $value)  
//            {  
//                 $condition .= $key . "='".$value."' AND ";  
//            }  
//            $condition = substr($condition, 0, -5);  
//            /*This code will convert array to string like this-  
//            input - array(  
//                 'id'     =>     '5'  
//            )  
//            output = id = '5'*/  
//            $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
//            if(mysqli_query($this->con, $query))  
//            {  
//                 return true;  
//            }  
//       }  
//       public function delete($table_name, $where_condition)  
//       {  
//            $condition = '';  
//            foreach($where_condition as $key => $value)  
//            {  
//                 $condition .= $key . " = '".$value."' AND ";  
//                 /*This code will convert array to string like this-  
//                 input - array(  
//                      'id'     =>     '5'  
//                 )  
//                 output = id = '5'*/  
//                 $condition = substr($condition, 0, -5);  
//                 $query = "DELETE FROM ".$table_name." WHERE ".$condition."";  
//                 if(mysqli_query($this->con, $query))  
//                 {  
//                      return true;  
//                 }  
//            }  
//       }  
//  } 
 
  
 

//  //CLASS FORMULAIR

// // PHP Form Class
// // www.dyn-web.com/code/form_builder/
// // version date: May 2013

// class HTML_Form {
    
//     private $tag;
//     private $xhtml;
    
//     function __construct($xhtml = true) {
//         $this->xhtml = $xhtml;
//     }
    
//     function startForm($action = '#', $method = 'post', $id = '', $attr_ar = array() ) {
//         $str = "<form action=\"$action\" method=\"$method\"";
//         if ( !empty($id) ) {
//             $str .= " id=\"$id\"";
//         }
//         $str .= $attr_ar? $this->addAttributes( $attr_ar ) . '>': '>';
//         return $str;
//     }
    
//     private function addAttributes( $attr_ar ) {
//         $str = '';
//         // check minimized (boolean) attributes
//         $min_atts = array('checked', 'disabled', 'readonly', 'multiple',
//                 'required', 'autofocus', 'novalidate', 'formnovalidate'); // html5
//         foreach( $attr_ar as $key=>$val ) {
//             if ( in_array($key, $min_atts) ) {
//                 if ( !empty($val) ) { 
//                     $str .= $this->xhtml? " $key=\"$key\"": " $key";
//                 }
//             } else {
//                 $str .= " $key=\"$val\"";
//             }
//         }
//         return $str;
//     }
    
//     function addInput($type, $name, $value, $attr_ar = array() ) {
//         $str = "<input type=\"$type\" name=\"$name\" value=\"$value\"";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= $this->xhtml? ' />': '>';
//         return $str;
//     }
    
//     function addTextarea($name, $rows = 4, $cols = 30, $value = '', $attr_ar = array() ) {
//         $str = "<textarea name=\"$name\" rows=\"$rows\" cols=\"$cols\"";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= ">$value</textarea>";
//         return $str;
//     }
    
//     // for attribute refers to id of associated form element
//     function addLabelFor($forID, $text, $attr_ar = array() ) {
//         $str = "<label for=\"$forID\"";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= ">$text</label>";
//         return $str;
//     }
    
//     // from parallel arrays for option values and text
//     function addSelectListArrays($name, $val_list, $txt_list, $selected_value = NULL,
//             $header = NULL, $attr_ar = array() ) {
//         $option_list = array_combine( $val_list, $txt_list );
//         $str = $this->addSelectList($name, $option_list, true, $selected_value, $header, $attr_ar );
//         return $str;
//     }
    
//     // option values and text come from one array (can be assoc)
//     // $bVal false if text serves as value (no value attr)
//     function addSelectList($name, $option_list, $bVal = true, $selected_value = NULL,
//             $header = NULL, $attr_ar = array() ) {
//         $str = "<select name=\"$name\"";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= ">\n";
//         if ( isset($header) ) {
//             $str .= "  <option value=\"\">$header</option>\n";
//         }
//         foreach ( $option_list as $val => $text ) {
//             $str .= $bVal? "  <option value=\"$val\"": "  <option";
//             if ( isset($selected_value) && ( $selected_value === $val || $selected_value === $text) ) {
//                 $str .= $this->xhtml? ' selected="selected"': ' selected';
//             }
//             $str .= ">$text</option>\n";
//         }
//         $str .= "</select>";
//         return $str;
//     }
    
//     function endForm() {
//         return "</form>";
//     }
    
//     function startTag($tag, $attr_ar = array() ) {
//         $this->tag = $tag;
//         $str = "<$tag";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= '>';
//         return $str;
//     }
    
//     function endTag($tag = '') {
//         $str = $tag? "</$tag>": "</$this->tag>";
//         $this->tag = '';
//         return $str;
//     }
    
//     function addEmptyTag($tag, $attr_ar = array() ) {
//         $str = "<$tag";
//         if ($attr_ar) {
//             $str .= $this->addAttributes( $attr_ar );
//         }
//         $str .= $this->xhtml? ' />': '>';
//         return $str;
//     }
    
// } -->


   