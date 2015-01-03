<?php
namespace Shop;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Presenter\PresentableTrait;

class User extends \Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait , SoftDeletingTrait, PresentableTrait;

    /**
     * @var Shop\Presenters\UserPresenter
     */
    protected $presenter = 'Shop\Presenters\UserPresenter';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
                        'username','email','fullname','password',
                        'phone','mobile','street_address','area_location',
                        'city','country'
                    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

    /**
     * Morph Many-many images
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function photos()
    {
       return $this->morphMany('Shop\Images\Image', 'imageable');
    }

    public function isAdmin()
    {
        return false;
    }
}