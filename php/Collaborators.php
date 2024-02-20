<?php

require_once 'BaseComponent.php';

class Collaborators extends BaseComponent {
    private $collaborators;

    public function __construct($url, $token) {
      parent::__construct($url, $token);

      $this->collaborators = [];
      try {
          $this->collaborators = $this->getCollaborators();
      } catch (Exception $e) {
          echo $e->getMessage();
      }

  }

    public function getCollaborators() {
        $query = [
            "query" => "query GetCollaborators {
                collaborators {
                  id
                  name
                  jobTitle
                  url{
                    html
                  }
                  foto {
                    url
                  }
                }
              }",
            "variables" => null,
            "operationName" => "GetCollaborators"
        ];

        $result = $this->sendQuery($query);
        return $result["data"]["collaborators"];
    }

    function getTemplate($id, $name, $role, $img, $url) {
      ob_start(); // Avvia l'output buffering
      ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-4 collaborator">
          <div class="card border-0 shadow-none" style="background: transparent;">
              <div class="collaborators-text card-body d-flex flex-column p-0">
                  <?php if ($img): ?>
                  <img class="rounded mb-3" src="<?= htmlspecialchars($img) ?>" style="width:100%; aspect-ratio:1;">
                  <?php endif; ?>
                  <h5 class="fw-bold mb-0"><?= htmlspecialchars($name) ?></h5>
                  <p class="text-muted mb-2"><?= htmlspecialchars($role) ?></p>
                  <?php if ($url): ?>
                    <?= $url ?>
                  <?php endif; ?>
              </div>
          </div>
      </div>

      <?php
      return ob_get_clean(); // Restituisce l'output e termina l'output buffering
  }

  function render(){
    foreach ($this->collaborators as $collaborator) {
      $id = isset($collaborator["id"]) ? $collaborator["id"] : "";
      $name = isset($collaborator["name"]) ? $collaborator["name"] : "";
      $jobTitle = isset($collaborator["jobTitle"]) ? $collaborator["jobTitle"] : "";
      $fotoUrl = isset($collaborator["foto"]["url"]) ? $collaborator["foto"]["url"] : "assets/img/placeholder_avatar.jpg";
      $url = isset($collaborator["url"]["html"]) ? $collaborator["url"]["html"] : "";
  
      echo $this->getTemplate($id, $name, $jobTitle, $fotoUrl, $url);
    }
  }

}
