<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Category;

class CategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new Category;
    }

    public function findLatest($take = 10)
    {
        return Category::with([
            'candidates' => function ($q) use ($take) {
                    $q->take($take);
                    $q->orderBy('created_at', 'DESC');
                },
            'candidates.user'
        ])->get();
    }

    public function getList()
    {
        return Category::where('Status', true)->lists('Description', 'id');
    }

    public function getCategory($Class)
    {
        return Category::where('Class_Id', $Class)->where('Status', true)->where('Level', 2)->orderBy('Description', 'DESC')->lists('Description', 'id');

    }
    public function getSubCategory($Category)
    {
        return Category::where('Sub_Id', $Category)->where('Status', true)->where('Level', 3)->orderBy('Description', 'ASC')->lists('Description', 'id');
    }
    public function getSpecify($SubCategory)
    {
        return Category::where('Sub_Id', $SubCategory)->where('Status', true)->where('Level', 4)->orderBy('Description', 'ASC')->lists('Description', 'id');
    }








} 