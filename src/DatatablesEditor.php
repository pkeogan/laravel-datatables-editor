<?php

namespace Pkeogan\DatatablesEditor;

use Illuminate\Support\Collection;

/**
 * Class DatatablesEditor.
 *
 * @package Pkeogan\DatatablesEditor
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
class DatatablesEditor
{
    /**
     * DatatablesEditor request object.
     *
     * @var \Pkeogan\DatatablesEditor\Request
     */
    protected $request;

    /**
     * DatatablesEditor constructor.
     *
     * @param \Pkeogan\DatatablesEditor\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get request object.
     *
     * @return \Pkeogan\DatatablesEditor\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

 }
