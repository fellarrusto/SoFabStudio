<?php

require_once __DIR__ . '/../BaseComponent.php';

class ProjectData extends BaseComponent {
    private $data;
    private $slug;

    public function __construct($url, $token, $slug) {
      parent::__construct($url, $token);
    
      $this->data = [];
      $this->slug = $slug;
      try {
          $this->data = $this->queryData();
      } catch (Exception $e) {
          echo $e->getMessage();
      }

  }

    public function queryData() {
        $query = [
            "query" => "query ProjectData {
                progetti(where: {slug: \"". $this->slug ."\"}) {
                  categoria
                  descrizione {
                    html
                  }
                  nome
                  fotoInterna {
                    url
                  }
                  collaborators {
                    name
                    jobTitle
                  }
                }
              }
              ",
            "variables" => null,
            "operationName" => "ProjectData"
        ];
        $result = $this->sendQuery($query);
        return $result["data"]["progetti"]; // Specify data example ["collaborators"];
    }

    public function getData() {
        return $this->data;
    }
}
