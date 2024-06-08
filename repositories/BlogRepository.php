<?php

namespace repositories;

use dao\BlogDao;

class BlogRepository implements BlogDao
{

    function Insert()
    {
        // TODO: Implement Insert() method.
    }

    function Update()
    {
        // TODO: Implement Update() method.
    }

    function Delete()
    {
        // TODO: Implement Delete() method.
    }

    function Select($id = null)
    {
        $query = "SELECT * FROM blog";
        if($id != null) {
            $query .= " WHERE id = :id";
        }
    }
}