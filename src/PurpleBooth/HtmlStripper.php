<?php

/*
 * Copyright (C) 2016 Billie Thompson
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace PurpleBooth;

/**
 * This is sets up the twig extension.
 */
interface HtmlStripper
{
    /**
     * Parse html into text.
     *
     * @param string $html
     *
     * @return string
     */
    public function toText($html);
}
