<?php
namespace Webkul\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Customer\Contracts\CustomerAudio as CustomerAudioContract;

class CustomerAudio extends Model
{
    protected $table = 'customer_audios';

    protected $fillable = ['audios', 'is_seen'];

    /**
     * Get the customer for this group.
    */
    public function customer()
    {
        return $this->hasMany(CustomerProxy::modelClass());
    }
}
