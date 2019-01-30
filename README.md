#### Any Laravel Model Can Have An Address

**Installation**
1. `composer require clean-code-studio/addressable`
2. `php artisan migrate`

**Example Usage**

`SetUp Model (Ex: App\User.php)`
```
use CleanCodeStudio\LaravelAddresses\CanHaveAddress;


class User extends Model
{
    use CanHaveAddress;
}
```

Go to terminal and run: `php artisan tinker`

1. `App\User::find(1)->address()->create(['city' => 'Kansas City', 'state' => 'Missouri', 'postal_code' => '53423', 'latitude' => '43534534']);`
2. `App\User::find(1)->address` // returns address created by user
3. `App\Address::find(1)->owner` //returns user who created address

**All Address Properties**

```
city
state
country
postal_code
latitude
longitude
address_line_1
address_line_2
```
