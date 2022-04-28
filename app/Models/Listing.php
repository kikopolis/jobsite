<?php

namespace App\Models;

use Database\Factories\ListingFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use function explode;

/**
 * App\Models\Listing
 * @property int         $id
 * @property string      $title
 * @property string      $tags
 * @property string      $company
 * @property string      $logo
 * @property string      $location
 * @property string      $email
 * @property string      $website
 * @property string      $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ListingFactory factory(...$parameters)
 * @method static Builder|Listing newModelQuery()
 * @method static Builder|Listing newQuery()
 * @method static Builder|Listing query()
 * @method static Builder|Listing whereCompany($value)
 * @method static Builder|Listing whereCreatedAt($value)
 * @method static Builder|Listing whereDescription($value)
 * @method static Builder|Listing whereEmail($value)
 * @method static Builder|Listing whereId($value)
 * @method static Builder|Listing whereLocation($value)
 * @method static Builder|Listing whereLogo($value)
 * @method static Builder|Listing whereTags($value)
 * @method static Builder|Listing whereTitle($value)
 * @method static Builder|Listing whereUpdatedAt($value)
 * @method static Builder|Listing whereWebsite($value)
 * @mixin Eloquent
 */
class Listing extends Model {
	use HasFactory;
	
	protected function tags(): Attribute {
		return Attribute::make(
			get: static fn($value) => explode(',', $value),
			set: static fn(array $value) => implode(',', $value)
		);
	}
	
	protected function logo(): Attribute {
		return Attribute::make(
			get: static fn($value) => $value ?: 'images/no-image.png'
		);
	}
}
