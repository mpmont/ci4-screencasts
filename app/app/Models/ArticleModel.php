<?php namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'intro', 'content'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'title' => 'required',
        'intro' => 'required|min_length[4]',
    ];
    protected $validationMessages = [
        'title' => [
            'required' => 'The title is required so please fill it with content!',
        ],
        'intro' => [
            'required' => 'Please fill the intro',
            'min_length' => 'Please write an intro with more than 4 chars.',
        ],
    ];

    protected $skipValidation = false;
}
