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

    function getTemplate($name, $role, $img, $url) {
      ob_start(); // Avvia l'output buffering
      ?>
      <div class="col">
          <div class="card border-0 shadow-none">
              <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="<?= htmlspecialchars($img) ?>" style="border-radius: 0%;">
                  <h5 class="fw-bold text-primary card-title mb-0" style="font-family: 'Palmer Lake Print';font-size: 40px;text-align: left;color: var(--bs-emphasis-color);padding-bottom: 0px;height: 35px;"><strong><?= htmlspecialchars($name) ?></strong></h5>
                  <p class="text-muted card-text mb-2" style="font-family: 'Space Grotesk', sans-serif;text-align: left;color: var(--bs-emphasis-color);"><?= htmlspecialchars($role) ?></p>
                  <?php if ($url): ?>
                      <p class="text-muted card-text mb-2" style="font-family: 'Space Grotesk', sans-serif;text-align: left;color: var(--bs-emphasis-color);"><a href="<?= htmlspecialchars($url) ?>" target="_blank;" style="text-decoration:none"><span style="color: rgb(0, 0, 0);"><?= htmlspecialchars($url) ?></span></a></p>
                  <?php endif; ?>
              </div>
          </div>
      </div>
      <?php
      return ob_get_clean(); // Restituisce l'output e termina l'output buffering
  }

  function render(){
    foreach ($this->collaborators as $collaborator) {
      echo $this->getTemplate($collaborator["name"], $collaborator["jobTitle"], $collaborator["foto"]["url"], $collaborator["url"]);
    }
  }

}
