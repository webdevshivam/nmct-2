<?php

namespace App\Models;

use CodeIgniter\Model;

class DonationModel extends Model
{
    protected $table = 'donations';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'donor_name',
        'donor_email',
        'donor_phone',
        'amount',
        'donation_type',
        'purpose',
        'payment_method',
        'transaction_id',
        'status'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    public function getTotalDonations()
    {
        return $this->selectSum('amount')->where('status', 'completed')->first();
    }
}
