<?php

namespace Edumad\Models;

use Botble\Media\Models\MediaFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always capitalize the first name when we retrieve it
     * @param string $value
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Always capitalize the last name when we retrieve it
     * @param string $value
     * @return string
     */
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function avatar()
    {
        return $this->belongsTo(MediaFile::class)->withDefault();
    }

    /**
     * pivot table role_users fore
     */
    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }

    /**
     * Checks if User has access to $permissions.
     */
    public function hasAccess($permissions){
        if($this->super_user == 1){
            return true;
        }
        // check if the permission is available in any role
        if (!$this->roles){
            foreach ($this->roles as $role) {
                if($role->hasAccess($permissions)) {
                    return true;
                }
            }
        }
    }

    /**
     * Checks if the user belongs to role.
     */
    public function inRole($roleSlug = '')
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}
