
<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title', 'description', 'activity_date', 'location', 
        'participants_count', 'photo_url', 'status'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getRecentActivities($limit = 5)
    {
        return $this->orderBy('activity_date', 'DESC')->limit($limit)->findAll();
    }
}
