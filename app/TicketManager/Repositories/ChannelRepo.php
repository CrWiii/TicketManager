<?php
namespace TicketManager\Repositories;

use TicketManager\Entities\Channel;

class ChannelRepo extends BaseRepo {

    public function getModel()
    {
        return new Channel;
    }

    public function getList()
    {
        return Channel::where('Status', true)->lists('Description', 'id');
    }

} 