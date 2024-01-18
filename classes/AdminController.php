<?php

    class AdminController
    {
        protected $db;

        public function __construct(AdminController $db)
        {
            // Assign the provided AdminController instance to the db property
            $this->db = $db;
        }

        #public function IsAdminCheck()
        #{
            #$query = "SELECT * FROM users WHERE IsAdmin = 1";
            #$stmt = $pdo->prepare($query);
            #$stmt->bindParam(':username', $form_username, PDO::PARAM_STR);
            #$stmt->execute();
            #$user = $stmt->fetch(PDO::FETCH_ASSOC);
            #var_dump($user);
        #}

    }

?>