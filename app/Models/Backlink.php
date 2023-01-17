<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Backlink
 * @package App\Models
 * @author Vladyslav Hychka <vlad.hychka@gmail.com>
 * @property int $id
 * @property string $target
 * @property string $url_from
 * @property string $url_to
 * @property string $rank
 */
class Backlink extends Model
{
    use HasFactory;

    public const TABLE = 'backlinks';

    protected $table = self::TABLE;

    protected $fillable = [
        'target',
        'url_from',
        'url_to',
        'rank'
    ];
}
