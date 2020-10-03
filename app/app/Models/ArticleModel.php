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

    protected $afterFind = ['fullText', 'setNewProperty'];
    protected $beforeUpdate = ['addFoo'];
    protected $afterUpdate = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function search($searchTerm)
    {
        $this->like('title', $searchTerm);
        return $this;
    }

    protected function fullText($article)
    {
        if (!empty($article['data'])) {
            $article['data']->fullText = $article['data']->intro . ' ' . $article['data']->content;
        }
        return $article;
    }

    protected function setNewProperty($article)
    {
        if (!empty($article['data'])) {
            $article['data']->fooo = 'bar';
        }
        return $article;
    }

    protected function addFoo($article)
    {
        $article['data']['intro'] = $article['data']['intro'] . '5000';
        dd($article);
        return $article;
    }

}
