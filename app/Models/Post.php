<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [
        'id'
    ];

    protected $with = ['category'];

    /**
     * Summary of category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('titleFromTablePost', 'like', '%' . $search . '%')
                ->orWhere('bodyFromTablePost', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slugFromTableCategory', $category);
            });
        });    
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName() {
        return "slugFromTablePost";
    }

    public function sluggable(): array
    {
        return [
            'slugFromTablePost' => [
                'source' => 'titleFromTablePost'
            ]
        ];
    }

   
}
