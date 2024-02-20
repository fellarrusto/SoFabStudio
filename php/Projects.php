<?php

require_once 'BaseComponent.php';

class Projects extends BaseComponent {
    private $data;

    public function __construct($url, $token) {
      parent::__construct($url, $token);

      $this->data = [];
      try {
          $this->data = $this->getData();
      } catch (Exception $e) {
          echo $e->getMessage();
      }

  }

    public function getData() {
        $query = [
            "query" => "query QueryProgetti {
                                      progettis {
                                        nome
                                        id
                                        descrizione {
                                          html
                                        }
                                        descrizioneBreve
                                        foto {
                                          url
                                        }
                                        categoria
                                        slug
                                      }
                                    }",
            "variables" => null,
            "operationName" => "QueryProgetti"
        ];

        $result = $this->sendQuery($query);
        return $result["data"]["progettis"]; // Specify data example ["collaborators"];
    }

    function getTemplate($id, $nome, $categoria, $descrizioneBreve, $url, $slug) {
      ob_start(); // Avvia l'output buffering
      ?>
      <div id="project-<?= htmlspecialchars($id) ?>" class="column">
          <div class="foto-progetto"><a href="?page=project&project=<?= htmlspecialchars($slug) ?>" target="_blank"><img src="<?= htmlspecialchars($url) ?>" width="100%" alt="Mountains"></a></div>
          <div class="content">
              <h6 style="padding-top: -0px;font-family: 'Space Grotesk', sans-serif;text-decoration:  underline;"><?= htmlspecialchars($categoria) ?></h6>
              <h3 style="font-family: 'Space Grotesk', sans-serif;font-size: x-large;"><strong><a href="?page=project&project=<?= htmlspecialchars($slug) ?>" target="_blank"><?= htmlspecialchars($nome) ?></a></strong></h3>
              <p style="font-family: 'Space Grotesk', sans-serif;font-size: small;"><?= htmlspecialchars($descrizioneBreve) ?></p>
          </div>
      </div>
      <?php
      return ob_get_clean(); // Restituisce l'output e termina l'output buffering
  }

  function render(){
    foreach ($this->data as $d) {
      echo $this->getTemplate($d["id"], $d["nome"], $d["categoria"], $d["descrizioneBreve"], $d["foto"]["url"], $d["slug"]);
    }
  }

}
