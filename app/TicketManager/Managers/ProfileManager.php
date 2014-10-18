<?php namespace TicketManager\Managers;


class ProfileManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'description'   => 'required|max:100',
            'Charge_Id'        => 'required|exists:TM_Charge,id',
            'Area_Id'          => 'required|exists:TM_Area,id',
            'Group_Id'         => 'required|exists:TM_Group,id',
            'available'     => 'in:1,0'

        ];

        return $rules;
    }

    public function prepareData($data)
    {
        if ( ! isset ($data['available']) )
        {
            $data['available'] = 0;
        }
        return $data;
    }


}