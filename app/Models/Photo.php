<?php
namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    /** @use HasFactory<\Database\Factories\PhotoFactory> */
    use HasFactory;

    protected $appends = [
        'url',
    ];

    protected $fillable = [
        'user_id',
        'image_path',
        'original_filename',
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getUrlAttribute(): string
    {
        if (! Storage::exists($this->image_path)) {
            return 'https://picsum.photos/seed/' . $this->id . '/400/400';
        }
        return Storage::url($this->image_path);
    }
    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Photo::class);
    }

}
