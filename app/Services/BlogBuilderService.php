<?php

namespace App\Services;

use Illuminate\Support\Collection;

class BlogBuilderService
{
    private Collection $data;

    public function setData(array $data)
    {
        $this->data = collect($data);
    }

    public function createTag()
    {
        $this->data->if($this->data->contains('tags'), function(){
            //create tag
        });
    }
}
