<?php

trait TitleTrait
{
    public function getTitle()
    {

        if (is_numeric($this->title)) {
            throw new Exception('the product cannot be a number!');
        }

        return $this->title;
    }
}
