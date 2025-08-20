<?php

class Router
{
    private array $routes = [];
    private string $basePath;

    public function __construct($basePath = '')
    {
        // Remove leading/trailing slashes for consistency
        $this->basePath = trim($basePath, '/');
    }


    public function get(string $path, callable $callback): void
    {
        $this->addRoute('GET', $path, $callback);
    }

    public function post(string $path, callable $callback): void
    {
        $this->addRoute('POST', $path, $callback);
    }

    private function addRoute(string $method, string $path, callable $callback): void
    {
        // Convert {param} into regex pattern (e.g., /blog/{id} -> /blog/([^/]+))
        $pattern = preg_replace('#\{([^}]+)\}#', '([^/]+)', $path);

        // Add 'i' flag for case-insensitive match
        $pattern = "#^" . trim($pattern, '/') . "$#i";

        $this->routes[$method][] = [
            'pattern' => $pattern,
            'callback' => $callback
        ];
    }


    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Make base path stripping case-insensitive
        $uri = trim(preg_replace("#^/?" . preg_quote($this->basePath, '#') . "/?#i", '', $uri), '/');

        if (!isset($this->routes[$method])) {
            $this->notFound();
            return;
        }

        foreach ($this->routes[$method] as $route) {
            if (preg_match($route['pattern'], $uri, $matches)) {
                array_shift($matches); // Remove full match
                call_user_func_array($route['callback'], $matches);
                return;
            }
        }

        $this->notFound();
    }

    private function notFound(): void
    {
        http_response_code(404);
        echo "404 Not Found 💔";
    }
}
