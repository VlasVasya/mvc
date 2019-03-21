<?php
class BlogController extends AbstractController
{
    public function blog()
    {
        $model = $this->getModel(Model::class);
        $admin = $model->getArticles();
        $this->render('view/blog.php', compact('admin'));
    }

    public function article()
    {
        $id = filter_input(INPUT_GET, 'id');
        $model = $this->getModel(Model::class);
        $article = $model->getArticle($id);

        if (!$article) {
            return $this->render('view/404.php');
        }

        $this->render('view/article.php', compact('article'));
    }

}