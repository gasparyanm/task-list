<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    public const LABEL_BUG = 'Bug';
    public const LABEL_FEATURE = 'Feature';
    public const LABEL_TO_DO = 'To Do';
    public const LABEL_DESIGN = 'Design';
    public const LABEL_BACKEND = 'Backend';
    public const LABEL_FRONTEND = 'Frontend';
    public const LABEL_QA = 'QA';

    public const BADGE_BUG = 'danger';
    public const BADGE_FEATURE = 'secondary';
    public const BADGE_TO_DO = 'success';
    public const BADGE_DESIGN = 'warning';
    public const BADGE_BACKEND = 'info';
    public const BADGE_FRONTEND = 'primary';
    public const BADGE_QA = 'dark';

    public const LABELS = [
        self::LABEL_BACKEND,
        self::LABEL_FRONTEND,
        self::LABEL_QA,
        self::LABEL_BUG,
        self::LABEL_DESIGN,
        self::LABEL_TO_DO,
        self::LABEL_FEATURE,
    ];

    public const BADGES = [
        self::LABEL_BACKEND => self::BADGE_BACKEND,
        self::LABEL_FRONTEND => self::BADGE_FRONTEND,
        self::LABEL_QA => self::BADGE_QA,
        self::LABEL_BUG => self::BADGE_BUG,
        self::LABEL_DESIGN => self::BADGE_DESIGN,
        self::LABEL_TO_DO => self::BADGE_TO_DO,
        self::LABEL_FEATURE => self::BADGE_FEATURE,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
