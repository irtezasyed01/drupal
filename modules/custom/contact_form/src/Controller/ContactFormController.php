<?php 

    namespace Drupal\contact_form\Controller;

    class ContactFormController{
        public function sendMessage(){
            return array(
                '#markup'=>'This is my custom contact form...'
            );
        }
    }