<?php
namespace TicketManager\Entities;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'TM_User';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = array('username','FullName','email','password');

    public function profile()
    {
        return $this->hasOne('TicketManager\Entities\Profile', 'User_id', 'id');
    }

    public function History()
    {
        return $this->hasOne('TicketManager\Entities\History', 'User_id', 'id');
    }


    public function getProfile()
    {
        $profile = $this->profile;
        if (is_null ($profile))
        {
            $profile = new profile();
            $profile->User_id = $this->id;
        }
        return $profile;
    }

    public function setPasswordAttribute($value)
    {
        if ( ! empty ($value))
        {
            $this->attributes['password'] = \Hash::make($value);
        }
    }

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
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
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

    public function getStatusTitleAttribute()
    {
        $StatusTitle = \Auth::user()->Status;
        if($StatusTitle==true)
        {
            return 'Activo';
        }
        else
        {
            return 'Inactivo';
        }


}
}
