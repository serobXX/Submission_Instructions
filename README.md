# Submission API

## Setup Instructions

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Set up your `.env` file.
4. Run `php artisan key:generate` to generate the application key.
5. Configure your database settings in the `.env` file.
6. Create the database.
7. Run `php artisan migrate` to set up the database schema.
8. Start the queue worker: `php artisan queue:work`.

## Testing the API

To test the `/submit` endpoint, you can use tools like Postman or curl. Send a POST request to `/api/submit` with the following JSON payload:

```json
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
```

## Running Tests

To run the unit and feature tests, use the following command:

```sh
php artisan test
```