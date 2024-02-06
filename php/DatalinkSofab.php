<?php

require_once 'HyQuery.php';

class DatalinkSofab extends HyQuery {

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

}
