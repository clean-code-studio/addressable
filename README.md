#### Any Laravel Model Can Have An Address

**Installation**
1. `composer require clean-code-studio/addressable`
2. `php artisan vendor:publish`
3. `select clean-code-studio/addressable`
4. `php artisan migrate`

**Example Usage**

`SetUp Model (Ex: App\User.php)`
```
use CleanCodeStudio\CanHaveAddress;

class User extends Model
{
    use CanHaveAddress;
}
```

Go to terminal and run: `php artisan tinker`
5. `App\User::find(1)->address()->create(['city' => 'Kansas City', 'state' => 'Missouri', 'postal_code' => '53423', 'latitude' => '43534534']);`
6. `App\User::find(1)->address` // returns address created by user
7. `App\Address::find(1)->owner` //returns user who created address
