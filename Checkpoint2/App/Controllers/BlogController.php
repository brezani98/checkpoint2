<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;


class BlogController extends AControllerBase
{


    public function index()
    {
        return Article::getAll();
    }

    public function add()
    {

        if (!isset($_POST['title'])) return null;
//        if(!isset($_POST['text'])) return "";

        $art = new Article($_POST['title'], $_POST['text']);
        $art->save();

        $this->redirectToIndex();
    }

    public function delete()
    {

        if (isset($_GET['id'])) {

            $art = Article::getOne($_GET['id']);
            $art->delete();
        }

        $this->redirectToIndex();

    }

    public function edit()
    {

        $val = null;

        if (isset($_POST['id'])) {
            $val = $this->validate($_POST['title'], $_POST['text']);

            $art = Article::getOne($_POST['id']);
            $art->setTitle($_POST['title']);
            $art->setText($_POST['text']);

            if ($val == null) {
                $art->save();
                $this->redirectToIndex();
            }
        } else {
            $art = Article::getOne($_GET['id']);
        }

        return [
            'model' => $art,
            'err' => $val,
        ];

    }

    public function redirectToIndex()
    {
        header("location: http://localhost/Checkpoint2?c=Blog");
        die();
    }

    public function validate($title, $text)
    {
        $titleErrors = [];
        if (strlen($title) < 4) {
            $titleErrors[] = "Nazov je prilis kratky, min 4 znaky";
        }
        if (is_numeric($title[0])) {
            $titleErrors[] = "Nazov nesmie zacinat cislom";
        }

        $textErrors = [];
        if (strlen($text) < 10) {
            $textErrors[] = "Text musí obsahovať aspoň 20 znakov ";
        }

        return count($titleErrors) > 0 || count($textErrors) > 0 ? [$titleErrors, $textErrors] : null;

    }
}