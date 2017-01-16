<?php

  require_once "Model.php";

  /**
   * Classe permettant l'interaction avec la table "prom"
   * Hérite de la classe Model
   * @author JohanBrunet
   */
  class PromModel extends Model {

    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_prom';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'prom';

    public function createProm($prom) {
      try {
        $sql = "INSERT INTO ".$this->table." (department, year_prom, graduation_year) VALUES (:dep, :year, :grad)";
        $req = $this->query($sql, array(':dep' => $prom['department'],
                                        ':year' => $prom['year'],
                                        ':grad' => $prom['graduation']));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    public function deleteProm($promID) {
      $sql = "DELETE FROM ".$this->table." WHERE ".$pk_key." = :promID";
      $req = $this->query($sql, array(':promID' => $promID));
    }

    public function checkProm($promo) {
      $proms = $this->getAll();

      foreach ($proms as $prom) {
        if (($prom['department'] == $promo['department']) && ($prom['year_prom'] == $promo['year']) && $prom['graduation_year'] == $promo['graduation']) {
          $res = $prom['ID_prom'];
          break;
        }
        else {
          $res = false;
        }
      }
      return $res;
    }
  }
?>
