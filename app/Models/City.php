<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'name',
    ];
    protected $hidden = [
        'id',
    ];

    /**
     * get All Cities for menu by input subdomain
     * @param string $subdomain
     * @return array
     */
    public static function getAllCitiesWithBaseCurrentSubdomain(string $subdomain): array
    {
        $cities['hidden'] = self::all(['name','code'])->keyBy('code')->toArray();
        if (!isset($cities['hidden'][$subdomain])){
            $cities['show'] = $cities['hidden']['krasnoyarsk'];
            unset($cities['hidden']['krasnoyarsk']);
            return $cities;
        }
        $cities['show'] = $cities['hidden'][$subdomain];
        unset($cities['hidden'][$subdomain]);
        return $cities;
    }
}
