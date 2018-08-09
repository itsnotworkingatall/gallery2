<?php
/**
 * Created at:
 * Date: 09.08.2018
 * Time: 00:22
 */

class User
{
    public static function findAllUsers() {
        return self::findThisQuery("SELECT * FROM users");

    }

    /**
     * @param $userId
     * @return array|null
     */
    public static function getUserById($userId) {
        $resultSet = self::findThisQuery("SELECT * FROM users WHERE id=$userId LIMIT 1");
        $userArray = mysqli_fetch_array($resultSet);
        return $userArray;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public static function findThisQuery($sql) {
        global $database;
        $resultSet = $database->query($sql);
        return $resultSet;
    }
}