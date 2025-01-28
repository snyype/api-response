**# Snype API Response

A lightweight Laravel package for consistent and elegant JSON API responses. Simplify your controllers with `ApiResponse::success()` and `ApiResponse::error()` methods for structured and reusable response formats.

## Installation

You can install the package via Composer:

```bash
composer require snype/api-response
```

## Usage

### Success Response

Use the ApiResponse::success() method to return a successful response.

```php
use Snype\ApiResponse\ApiResponse;

public function index()
{
    $data = ['message' => 'Data retrieved successfully'];

    return ApiResponse::success($data, 'Success', 200);
}
```
This will return a structured JSON response with a success status.

### Error Response

Use the ApiResponse::error() method to return an error response.

```php
use Snype\ApiResponse\ApiResponse;

public function store(Request $request)
{
    // Assuming validation fails
    $errors = ['field' => 'This field is required'];

    return ApiResponse::error($errors, 'Validation Error', 422);
}
```

This will return a structured JSON response with an error status.

### Customization

You can easily customize the success and error response structure by extending the ApiResponse class.

### Requirements

- PHP 8.0 or higher
- Laravel 9.x or 10.x

### License

This package is licensed under the MIT License.
**