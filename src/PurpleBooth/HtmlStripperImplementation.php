<?php

namespace PurpleBooth;

/**
 * Parse HTML to plain text.
 */
class HtmlStripperImplementation implements HtmlStripper
{
    /**
     * Parse the text.
     *
     * The actual logic of this function is to setup the XML parsing extension.
     *
     * @param string $html
     *
     * @return string
     */
    public function toText($html)
    {
        $parser = new Parser();

        $xmlParser = xml_parser_create();
        xml_set_element_handler($xmlParser, [$parser, 'startElement'], [$parser, 'endElement']);
        xml_set_character_data_handler($xmlParser, [$parser, 'characterData']);

        $wrappedHtml = "<root>$html</root>";
        $returnStatus = xml_parse($xmlParser, $wrappedHtml, true);

        if (!$returnStatus) {
            return $html;
        }

        return $parser->getText();
    }
}
