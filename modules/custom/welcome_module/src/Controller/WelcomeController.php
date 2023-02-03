<?php 

namespace Drupal\welcome_module\Controller;

class WelcomeController{
    public function welcome(){
        return array(
            '#markup' => 'Welcome to our Website.'
          );
    }
}

// This is a comment to update this file and check status in git bash....