<?php
require_once __DIR__ . '/Query.php';

class Sample
{
    public function getFullname($userid)
    {
        $query = new Query();
        $user = $query->find($userid);
        $fullname = $user['lastname'] . ' ' . $user['firstname'];
        return $fullname;
    }
}
