<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        // Todo: auth
        
        $review = new Review(3);
        $lists = $review->getList();
        dd($lists);
//        return view('product.show', ['lists' => $lists]);
    }

    public function store()
    {
        // Todo: auth


    }

}

class Review
{
    private $idx;

    public function __construct($idx)
    {
        $this->idx = $idx;
    }

    public function getList()
    {
        return [
            'title' => '제목입니다',
            'content' => '내용입니다',
            'date' => '2018-01-01',
            'star' => 5,
        ];
    }
}

class Write
{
    
}