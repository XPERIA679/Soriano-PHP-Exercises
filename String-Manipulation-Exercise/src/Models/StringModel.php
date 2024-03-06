<?php

namespace src\Models;

class StringModel
{
  public static function getMessage()
  {
    $name = "World";
    $greeting = "Hello, ";

    $fullMessage = $greeting . $name . "!";

    $subMessage = substr($fullMessage, 0, 7);

    $replacedMessage = str_replace("World", "Everyone", $fullMessage);

    return
    [
      "fullMessage" => $fullMessage,
      "subMessage" => $subMessage,
      "replacedMessage" => $replacedMessage,
    ];
  }
}
