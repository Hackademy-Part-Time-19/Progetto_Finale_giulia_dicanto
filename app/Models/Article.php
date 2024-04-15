<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id',
        'is_accepted',
    ];
    public $asYouType = true;
    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle'=> $this->subtitle,
            'body'=> $this->body,
            'category' => $category,
        ];
        return $array;
    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }
    public function category()
    {

        return $this->belongsTo(Category::class);

    }
    public function tags()
    {

        return $this->belongsToMany(Tag::class);

    }

    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";

        return Storage::url($file);

    }
    public function getUrl($w = null, $h = null)
    {
        return Article::getUrlByFilePath($this->image, $w, $h);
    }

}

