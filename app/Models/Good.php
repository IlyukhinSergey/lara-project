<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 *
 * @package App
 *
 * @property-read $id
 * @property-read $title
 * @property-read $description
 * @property-read $category_id
 * @property-read $price
 * @property-read $created_at
 * @property-read $updated_at
 */
class Good extends Model
{

    use HasFactory;

    public function getImageId()
    {
        return $this->id % 9 + 1;
    }

}
