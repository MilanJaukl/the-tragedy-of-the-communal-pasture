<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Lobby extends Model
{
    use HasFactory;

    public function gameSession()
    {
        return $this->hasOne(GameSession::class, 'lobby_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lobby) {
            do {
                $code = Str::random(5);
            } while (Lobby::where('code', $code)->exists());

            $lobby->code = $code;
        });
    }

    public function hasSession(): bool
    {
        return $this->gameSession()->exists();
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function registerNewuser() {}
}
