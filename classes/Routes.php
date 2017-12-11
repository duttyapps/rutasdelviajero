<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 27/11/2017
 * Time: 02:19
 */
class Routes
{
    public function init()
    {
        $base_url = $this->getCurrentUri();
        if($base_url == '/') $base_url = '/main';
        $routes = explode('/', $base_url);
        foreach ($routes as $route) {
            if (trim($route) != '')
                array_push($routes, $route);
        }

        if (count($routes) > 0) {
            if (count($routes) == 1) {
                $result = $this->includeIfExists("../views/$routes[0]/app.php");
                if ($result == false) {
                    die("Not found.");
                } else {
                    return $result;
                }
            } else {
                $result = $this->includeIfExists("views$base_url/app.php");
                if ($result == false) {
                    die("Not found.");
                } else {
                    return $result;
                }
            }
        } else {
            return;
        }
    }

    private function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');
        return $uri;
    }

    private function includeIfExists($file)
    {
        if (file_exists($file)) {
            return $file;
        } else {
            return false;
        }
    }

    public function test()
    {
        return $this->getCurrentUri();
    }
}