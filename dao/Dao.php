<?php

namespace dao;

interface Dao
{
    function Insert();
    function Update();
    function Delete();
    function Select($id = null);

}