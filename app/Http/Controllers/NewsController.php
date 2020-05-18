<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /*private $news = [
        [
            'id' => 1,
            'title' => 'Новость',
            'inform' => 'Новость 1 Подробнее',
        ],
    ];
    
    public function news()
    {
        $html = "<h1>Новости</h1>";
        foreach ($this->news as $news) {
            $html .= <<<php
            <h2>
                <a href="/news/{$news['id']}">
                    {$news['title']}
                    </a>
                    </h2>
                    <div>{$news['inform']}</div>
                    <hr>
php;
        }
        return $html;
    }*/
            private $category = [
        [
            'id' => 1,
            'title' => 'Экономика',
            'inform' => 'Новости по экономике',
        ],
        [
            'id' => 2,
            'title' => 'Спорт',
            'inform' => 'Спортивные новости',
        ],
        [
            'id' => 3,
            'title' => 'Авто',
            'inform' => 'Автомобильные новости',
        ],
        [
            'id' => 4,
            'title' => 'Hi-Tech',
            'inform' => 'Новости в мире Hi-Tech',
        ],
        [
            'id' => 5,
            'title' => 'Кино',
            'inform' => 'Новости кино',
        ],
    ];
    public function category()
    {
        $html = "<h1>Новости</h1>";
        foreach ($this->category as $category) {
            $html .= <<<php
            <h2>
                <a href="/news/{$category['id']}">
                    {$category['title']}
                    </a>
                    </h2>
                    <div>{$category['inform']}</div>
                    <hr>
php;
        }
        return $html;
    }
    
    public function newsOne($id){
        $news = $this->getNewsById($id);
        
        if (!empty($news)) {
            $html = <<<php
            <h1>{$news['title']}</h1>
            <div>{$news['inform']}</div>
            <hr>
            <a href="/news">Назад</a>
php;
            return $html;
        }
        return redirect('/news');
    }
    private function getNewsById($id)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return [];
    }
}
