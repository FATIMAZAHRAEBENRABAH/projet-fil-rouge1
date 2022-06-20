<?php
 include 'Realisations.php';
class RealisationsManager{

    private $Connection = Null;

    private function getConnection(){
      
        $this->Connection = mysqli_connect('localhost','root','','streamland-sarl');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($realisations){

     $titre =  $realisations->getTitre();
     $image= $realisations->getImage();
     $description =$realisations->getDescription();

        // requête SQL
        $insertRow="INSERT INTO realisations(Titre,`Image`,`Description`) 
                                VALUES('$titre','$image','$description')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_realisations(){
        $SelctRow = 'SELECT Id_realisations,Titre,`Image`,`Description` FROM realisations';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $realisations = new Realisations();
            $realisations->setId_realisations($value_Data['Id_realisations']);
            $realisations->setTitre($value_Data['Titre']);
            $realisations->setImage($value_Data['Image']);
            $realisations->setDescription($value_Data['Description']);
            array_push($TableData, $realisations);
        }
          return $TableData;
    }

    public function Supprimer($Id_realisations){
        $RowDelet = "DELETE FROM realisations WHERE Id_realisations='$Id_realisations'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

}
?>