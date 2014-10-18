<?php

namespace TicketManager\Entities;

class Category extends \Eloquent {

    protected $fillable = ['Description','Status','RegisterBy','LastUser'];

    protected $table = 'TM_Category';


    public function Ticket()
    {
        return $this->belongsTo('TicketManager\Entities\Ticket');
    }
    public function SubCategoryChildren()
    {
        return $this->has_many('Category','Sub_Id');
    }
    public function SubCategoryFather()
    {
        return $this->belongs_to('Category','Sub_id');
    }

}
