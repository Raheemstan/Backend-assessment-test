<?php

namespace DMO\SavingsBond\Models;

use Hasob\FoundationCore\Traits\GuidId;
use Hasob\FoundationCore\Traits\Ledgerable;
use Hasob\FoundationCore\Traits\Artifactable;
use Hasob\FoundationCore\Traits\OrganizationalConstraint;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Offer
 * @package DMO\SavingsBond\Models
 * @version April 12, 2022, 7:27 pm UTC
 *
 * @property string $organization_id
 * @property string $status
 * @property string $offer_title
 * @property number $price_per_unit
 * @property integer $max_units_per_investor
 * @property number $interest_rate_pct
 * @property string $offer_start_date
 * @property string $offer_end_date
 * @property string $offer_settlement_date
 * @property string $offer_maturity_date
 * @property integer $tenor_years
 */
class Offer extends Model
{
    use GuidId;
    use OrganizationalConstraint;
    
    use SoftDeletes;

    use HasFactory;

    public $table = 'sb_offers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'organization_id',
        'status',
        'offer_title',
        'price_per_unit',
        'max_units_per_investor',
        'interest_rate_pct',
        'offer_start_date',
        'offer_end_date',
        'offer_settlement_date',
        'offer_maturity_date',
        'tenor_years'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'display_ordinal' => 'integer',
        'status' => 'string',
        'wf_status' => 'string',
        'wf_meta_data' => 'string',
        'offer_title' => 'string',
        'price_per_unit' => 'decimal:2',
        'max_units_per_investor' => 'integer',
        'interest_rate_pct' => 'decimal:2',
        'tenor_years' => 'integer'
    ];


    

}
