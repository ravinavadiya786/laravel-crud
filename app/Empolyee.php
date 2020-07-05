<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Empolyee
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property int|null $salary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empolyee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Empolyee extends Model
{
    //
    protected $table = "empolyee";
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
