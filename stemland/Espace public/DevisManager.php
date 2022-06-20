<?php
 include 'Devis.php';
class DevisManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'streamland-sarl');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($devis){

       $nom =  $devis->getNom();
       $prenom =$devis->getPrenom();
       $email= $devis->getEmail();
       $tel= $devis->getTel();
       $description =$devis->getDescription();
        // requête SQL
        $insertRow="INSERT INTO Devis(Nom,Prenom,Email,Tel,`Description`) 
                                VALUES('$nom','$prenom','$email','$tel','$description')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_devis(){
        $SelctRow = 'SELECT Id_devis,Nom,Prenom,Email,Tel,`Description` FROM devis';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $devis = new Devis();
            $devis->setId_devis($value_Data['Id_devis']);
            $devis->setNom($value_Data['Nom']);
            $devis->setPrenom($value_Data['Prenom']);
            $devis->setEmail($value_Data['Email']);
            $devis->setTel($value_Data['Tel']);
            $devis->setDescription($value_Data['Description']);
            array_push($TableData, $devis);
        }
          return $TableData;
    }

// pour afficher dans input
    public function edit($id){
        $SelectRowId = "SELECT * FROM Hotels WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $value_Data = mysqli_fetch_assoc($result);
        $hotel = new Hotels();
        $hotel->setId($value_Data['Id']);
        $hotel->setNom_Hotel($value_Data['Nom_Hotel']);
        $hotel->setDescription ($value_Data['Description']);
        $hotel->setPhoto($value_Data['Photo']);
        $hotel->setAdress($value_Data['Adress']);
        
        return $hotel;
    }

    public function Supprimer($id){
        $RowDelet = "DELETE FROM Hotels WHERE id='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$Nom_Hotel,$Description,$Photo,$Adress){
        // Requête SQL
        $RowUpdate = "UPDATE Hotels SET 
        Nom_Hotel='$Nom_Hotel', Description='$Description', Photo='$Photo',Adress='$Adress'
        WHERE id='$id'";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

}
?>