<?php

/**
 * A class that parses the attributes of a block and returns the anchor and classes.
 */

namespace App\Classes;

class BlockAttributesParser
{
    /**
     * @var array An array of block attributes.
     */
    private array $attrs = [];

    /**
     * @var string A string of classes.
     */
    private string $classes = '';

    /**
     * @var string A string of anchor.
     */
    private string $anchor = '';

    /**
     * Parses the attributes of a block and returns the anchor and classes.
     *
     * @param array $attrs An array of block attributes.
     *
     * @return array An array containing the anchor and classes.
     */
    public function attributes(array $attrs): array
    {
        // Store the attributes and reset the classes string.
        $this->attrs   = $attrs;
        $this->classes = '';

        // Parse the supports array.
        $this->parseSupports();

        // Return an array containing the anchor and classes.
        return [
            'anchor'  => $this->anchor,
            'classes' => $this->classes,
        ];
    }

    /**
     * Parses the 'supports' array in the block attributes.
     *
     * Loops through the 'supports' array and calls arrayKeyExists() method for each active support.
     */
    private function parseSupports(): void
    {
        // Check if 'supports' key exists and it is an array.
        if (!isset($this->attrs['supports']) || !is_array($this->attrs['supports'])) {
            return;
        }

        // Loop through each active support and call arrayKeyExists() method.
        foreach ($this->attrs['supports'] as $key => $active) {
            if ($active) {
                $this->arrayKeyExists($key);
            }
        }
    }

    /**
     * Checks if the key exists in the block attributes and updates the classes and anchor.
     *
     * @param string $key The key to check.
     *
     * @return string|null The value of the key or null if the key doesn't exist.
     */
    private function arrayKeyExists(string $key): ?string
    {
        // Check if the key exists in the attributes array.
        if (!isset($this->attrs[$key])) {
            return null;
        }

        // Get the value of the key and cast it to a string.
        $value = (string)$this->attrs[$key];

        // Concatenate the classes if the key is 'align' or 'className'.
        $this->concatenateClasses($key, $value);

        // Set the anchor if the key is 'anchor'.
        $this->setAnchor($key, $value);

        // Return the value of the key.
        return $value;
    }

    /**
     * Concatenates the classes if the key is 'align' or 'className'.
     *
     * @param string $key The key to check.
     * @param string $value The value of the key.
     */
    private function concatenateClasses(string $key, string $value): void
    {
        switch ($key) {
            // If the key is 'align', concatenate the key and value to the classes string.
            case 'align':
                $this->classes .= $key . $value; // WP classes e.g. alignleft, alignright, aligncenter
                break;

            // If the key is 'className', concatenate a space and the value to the classes string.
            case 'className':
                $this->classes .= ' ' . $value;
                break;

            // If the key is not 'align' or 'className', do nothing.
            default:
                break;
        }
    }

    /**
     * Sets the anchor if the key is 'anchor'.
     *
     * @param string $key The key to check.
     * @param string $value The value of the key.
     */
    private function setAnchor(string $key, string $value): void
    {
        // If the key is 'anchor', set the anchor to the value.
        if ($key === 'anchor') {
            $this->anchor = $value;
        }
    }
}
