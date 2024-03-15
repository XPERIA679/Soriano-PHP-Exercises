<?php

namespace src\Controllers;

use src\Models\ContactDetails;

class ContactController {
    private $contactModel;
    private $data;
    private $errors = [];
    private static $fields = ['name', 'email', 'messages'];

    public function __construct($post_data) {
        $this->data = $post_data;
        $this->contactModel = new ContactDetails();
    }

    public function handleContact() {
        $result = ['success' => false, 'message' => ''];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $formErrors = $this->validateForm();
    
            if (empty($formErrors)) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $messages = $_POST['messages'];
    
                $processedData = $this->contactModel->processContact($name, $email, $messages);
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Message: $messages<br>";
    
                $result['success'] = true;
            } else {

                $result['message'] = 'Form has errors. Please check and try again.';
            }
        }
    
        return $result;
    }

    public function validateForm() {
        foreach (self::$fields as $field) {
            if (!isset($this->data[$field])) {
                // trigger_error("$field is not present in data");
                return;
            }
        }
    
        $this->validateName();
        $this->validateEmail();
        $this->validateMessage();
        return $this->errors;
    }

    private function validateName() {

        $val = trim($this->data['name']);

        if(empty($val)) {
            $this->addError('name', 'Name cannot be empty'); 
        }

    }

    private function validateEmail() {

        $val = trim($this->data['email']);

        if(empty($val)) {
            $this->addError('email', 'Email cannot be empty'); 
        }

    }

    private function validateMessage() {

        $val = trim($this->data['messages']);

        if(empty($val)) {
            $this->addError('messages', 'Message cannot be empty'); 
        }

    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }
}
