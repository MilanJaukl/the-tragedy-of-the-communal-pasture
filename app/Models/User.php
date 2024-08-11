<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function lobbies(): HasMany
    {
        return $this->hasMany(Lobby::class, 'owner_id', 'id');
    }


    public function gameSessions(): array
    {
        $lobbies = $this->lobbies;
        $gameSessions = [];
        foreach ($lobbies as $lobby) {
            $gameSessions = array_merge($gameSessions, $lobby->gameSessions->toArray());
        }
        return $gameSessions;
    }

    public function hasOpenGameSession(): bool
    {
        $gameSessions = $this->gameSessions();
        foreach ($gameSessions as $gameSession) {
            if ($gameSession['is_active']) {
                return true;
            }
        }
        return false;
    }
}
