<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
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
            <a href="/add_news">Добавить новость</a>
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
        $category = $this->getNewsById($id);
        
        if (!empty($category)) {
            $html = <<<php
            <h1>{$category['title']}</h1>
            <div>{$category['inform']}</div>
            <hr>
            <a href="/news/">Назад</a>
php;
            return $html;
        }
        return redirect('/news/');
    }
    private function getNewsById($id)
    {
        foreach ($this->category as $category) {
            if ($category['id'] == $id) {
                return $category;
            }
        }
        return [];
    }
    
    
    
    
    
     private $economy = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'inform' => 'Краткий текст',
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'inform' => 'Краткий текст',
        ],
        [
            'id' => 3,
            'title' => 'Новость 3',
            'inform' => 'Краткий текст',
        ],
        [
            'id' => 4,
            'title' => 'Новость 4',
            'inform' => 'Краткий текст',
        ],
    ];

}
