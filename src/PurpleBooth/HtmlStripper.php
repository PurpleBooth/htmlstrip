<?php

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
