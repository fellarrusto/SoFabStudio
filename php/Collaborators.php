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
                  url
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
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="card border-0 shadow-none" style="background: transparent;">
              <div class="collaborators-text card-body d-flex flex-column p-0">
                  <img class="rounded border mb-3" src="<?= htmlspecialchars($img) ?>" style="width:100%; aspect-ratio:1;">
                  <h5 class="fw-bold mb-0"><?= htmlspecialchars($name) ?></h5>
                  <p class="text-muted mb-2"><?= htmlspecialchars($role) ?></p>
                  <?php if ($url): ?>
                  <p class="text-muted mb-2 collaborators-text-small"><?= htmlspecialchars($url) ?></p>
                  <?php endif; ?>
              </div>
          </div>
      </div>

      <?php
      return ob_get_clean(); // Restituisce l'output e termina l'output buffering
  }

  function render(){
    foreach ($this->collaborators as $collaborator) {
      echo $this->getTemplate($collaborator["id"], $collaborator["name"], $collaborator["jobTitle"], $collaborator["foto"]["url"], $collaborator["url"]);
    }
  }

}
