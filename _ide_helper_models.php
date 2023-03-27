<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Birthday
 *
 * @property-read \App\Models\Zodiac|null $zodiac
 * @method static \Illuminate\Database\Eloquent\Builder|Birthday newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Birthday newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Birthday query()
 */
	class Birthday extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Zodiac
 *
 * @property int $id
 * @property string $name
 * @property string $personality
 * @property string $lucky_numbers
 * @property string $lucky_colors
 * @property string $lucky_flowers
 * @property string $pic
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac whereLuckyColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac whereLuckyFlowers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac whereLuckyNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac wherePersonality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zodiac wherePic($value)
 */
	class Zodiac extends \Eloquent {}
}

