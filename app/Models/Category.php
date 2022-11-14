<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App
 *
 * @property-read $id
 * @property-read $title
 * @property-read $description
 */
class Category extends Model
{

    use HasFactory;
}
