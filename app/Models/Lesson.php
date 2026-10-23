<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Lesson extends Model
{
    protected $fillable = [
        'course_module_id',
        'title',
        'slug',          // Added slug
        'content',
        'sort_order',
    ];

    // Auto-generate slug when creating/updating
    protected static function booted(): void
    {
        static::saving(function (Lesson $lesson) {
            if (empty($lesson->slug)) {
                $lesson->slug = Str::slug($lesson->title);
            }
        });
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(CourseModule::class, 'course_module_id');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    /* ==========================================================
     | CONTENT HELPERS (HTML-based)
     |==========================================================*/

    public function contentHtml(): string
    {
        return (string) $this->content;
    }

    public function contentSnippet(int $limit = 100): string
    {
        $plain = $this->contentToPlainText();
        if ($plain === '') return '';
        return Str::limit($plain, $limit);
    }

    public function primaryHeading(): ?string
    {
        if (! $this->content) return null;

        foreach (['h1', 'h2', 'h3'] as $tag) {
            if (preg_match('#<' . $tag . '\b[^>]*>(.*?)</' . $tag . '>#is', $this->content, $m)) {
                $text = trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
                if ($text !== '') return Str::limit($text, 120);
            }
        }
        return null;
    }

    public function blockCount(): int
    {
        if (! $this->content) return 0;

        $count  = preg_match_all('#<h[1-6]\b#i',    $this->content);
        $count += preg_match_all('#<p\b#i',         $this->content);
        $count += preg_match_all('#<li\b#i',        $this->content);
        $count += preg_match_all('#<blockquote\b#i',$this->content);

        return (int) $count;
    }

    public function contentToPlainText(): string
    {
        if (! $this->content) return '';

        $html = preg_replace(
            ['#</(p|div|h[1-6]|li|br|tr)>#i', '#<br\s*/?>#i'],
            ["$0\n", "\n"],
            $this->content
        );

        $text = strip_tags((string) $html);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/\s+/u', ' ', $text);

        return trim($text);
    }
}
