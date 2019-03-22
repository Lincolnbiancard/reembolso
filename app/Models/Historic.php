<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class Historic extends Model
{
    protected $fillable = ['type', 'cliente', 'valor', 'comprovante', 'user_id', 'date'];
}