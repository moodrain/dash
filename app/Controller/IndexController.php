<?php

namespace App\Controller;

class IndexController {

    public function index() {
        return $this->help();
    }

    public function user($req) {
        $name = $req['name'] ?? null;
        return dbQuery('SELECT * FROM user' . ($name ? " WHERE NAME LIKE '%$name%'" : ''));
    }

    public function help() {
        return json_decode(file_get_contents(ROOT . 'help.json'));
    }

    public function h() {
        return $this->help();
    }

}