<?php

namespace Reloquent\Test;

use Reloquent\Model;

class TestModel extends Model
{
    /**
     * The fillable fields names of the model. When leaved blank
     * it allows any field.
     *
     * @var array
     */
    protected $fields = [
        'id',
        'username',
        'password',
        'created_at'
    ];

    /**
     * This fields are not gonna appear in the json represenation
     * of the model.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * This whitelist fields to appear on the json representation
     * of the model. When leaved blank all fields will be show.
     *
     * @var array
     */
    protected $visible = [];

    /**
     * The prefix for the model keys. You can see it as  the model table.
     *
     * @var string
     */
    protected $prefix = 'tests';

    /**
     * The name of the identification field.
     *
     * @var string
     */
    protected $key = 'id';
}
