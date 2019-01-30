#### Any Laravel Model Can Have An Address

**Installation**
1. `composer require clean-code-studio/addressable`
2. `php artisan vendor:publish`
3. `select clean-code-studio/addressable`
4. `php artisan migrate`

**Example Usage**

`SetUp Model (Ex: App\User.php)`
```
class User extends Model
{
    use CleanCodeStudio\Addressable;
}
```

Go to terminal and run: `php artisan tinker`
5. `App\User::find(1)->address`
