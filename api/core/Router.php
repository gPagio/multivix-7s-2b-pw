<?php
class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->addRoute('GET', $path, $callback);
    }

    public function post($path, $callback) {
        $this->addRoute('POST', $path, $callback);
    }

    public function patch($path, $callback) {
        $this->addRoute('PATCH', $path, $callback);
    }

    public function delete($path, $callback) {
        $this->addRoute('DELETE', $path, $callback);
    }

    private function addRoute($method, $path, $callback) {
        $basePath = '/multivix-7s-2b-pw';
        $fullPath = $basePath . $path;
        $this->routes[] = compact('method', 'fullPath', 'callback');
    }

    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $route['fullPath']);
            $pattern = '#^' . $pattern . '$#';

            if ($route['method'] === $method && preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                call_user_func_array($route['callback'], $matches);
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['error' => 'Not found']);
    }
}
?>
