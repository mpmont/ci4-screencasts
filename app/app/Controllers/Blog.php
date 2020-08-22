<?php namespace App\Controllers;

use App\Models\ArticleModel;

class Blog extends BaseController
{

    protected $helpers = ['form'];

    public function index()
    {
        $article = new ArticleModel();
        $data['articles'] = $article->findAll();
        return view('blog/index', $data);
    }

    public function create()
    {
        if ($_POST) {
            $article = new ArticleModel();
            if ($article->skipValidation(true)->insert($this->request->getPost())) {
                return redirect()->to('/blog/index');
            } else {
                dd($article->errors());
            }
        }
        return view('blog/create');
    }

    public function update($id = null)
    {
        $article = new ArticleModel();
        if ($_POST) {
            if ($article->update($id, $this->request->getPost())) {
                return redirect()->to('/blog/index');
            } else {
                dd($article->errors());
            }
        }
        $data['article'] = $article->find($id);
        return view('blog/update', $data);
    }

    public function delete($id = null)
    {
        $article = new ArticleModel();
        $article->delete($id);
        return redirect()->to('/blog/index');
    }

}
