# Laravel Action Command

A simple Laravel package that adds a `make:action` Artisan command to scaffold Action classes.

## Installation

```bash
composer require frankliniwobi/laravel-action-command
```

Laravel's auto-discovery will register the service provider automatically.

## Usage

```bash
# Creates app/Actions/UserStoreAction.php
php artisan make:action UserStore

# Also works with the full name
php artisan make:action UserStoreAction

```

### Generated file

```php
<?php

namespace App\Actions;
use Illuminate\Support\Facades\DB;

final readonly class UserStoreAction
{
    /**
     * Execute the action.
     */
    public function handle(): void
    {
        DB::transaction(function (): void {
            // action
        });
    }
}
```

## Customizing the Stub

Publish the stub to your project so you can tailor the generated file to your needs:

```bash
php artisan vendor:publish --tag=laravel-action-stubs
```

This copies `laravel-action.stub` to your project's `stubs/` directory. Edit it freely — the command will use your published version automatically.

## License

**Laravel Action Command** was created by **[Iwobi Okwudili Frank](https://x.com/OkwudiliTweet)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
