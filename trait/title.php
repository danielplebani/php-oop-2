<?php

trait TitleTrait
{
    public function getTitle()
    {

        if ($this->title == '') {
            throw new Exception('the product must have a title!');
        } elseif (is_numeric($this->title)) {
            throw new Exception('the product cannot be a number!');
        }

        return $this->title;
    }
}
