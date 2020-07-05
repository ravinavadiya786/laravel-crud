<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empolyee;
/**
 * App\Company
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string|null $website
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Empolyee[] $empolyee
 * @property-read int|null $empolyee_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereWebsite($value)
 * @mixin \Eloquent
 */
class Company extends Model
{
    //
    protected $table = "company";

    protected $fillable = ['name','email','website','image_url','address'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empolyee()
    {
        return $this->hasMany(Empolyee::class);
    }



}
