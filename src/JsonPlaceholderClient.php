<?php

namespace JsonPlaceholderClient;

class JsonPlaceholderClient
{
    public function getTodo($todoId) {
        return $this->sendRequest("todos/$todoId");
    }

    public function getAllTodos() {
        return $this->sendRequest("todos");
    }

    public function nieuweDingen() {
        echo "hoi";
    }

    private function sendRequest($method)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/$method");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        return json_decode($result);
    }
}