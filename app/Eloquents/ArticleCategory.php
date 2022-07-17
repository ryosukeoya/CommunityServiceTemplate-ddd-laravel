<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Eloquents\ArticleArticleCategory;

class ArticleCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['article_category_name'];

    public function articleArticleCategory(): BelongsToMany
    {
        return $this->belongsToMany(ArticleArticleCategory::class);
    }
}