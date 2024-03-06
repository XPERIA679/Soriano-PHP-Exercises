<?php

namespace src\Models;

class ContactDetails {
    public function processContact($name, $email, $messages) {

        $processedData = [
            'name' => $name,
            'email' => $email,
            'messages' => $messages,
        ];

        return $processedData;
    }
}
