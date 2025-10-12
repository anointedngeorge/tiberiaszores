<?php

use App\Models\Contents;
use Illuminate\Mail\Mailables\Content;

if (!function_exists('decode_concat_json')) {
    /**
     * Decode concatenated JSON objects into a valid PHP array.
     *
     * Example Input:
     * {"a":1}{"b":2}{"c":3}
     * Output:
     * [
     *   ["a" => 1],
     *   ["b" => 2],
     *   ["c" => 3]
     * ]
     *
     * @param string|null $jsonString
     * @return array
     */
    function decode_concat_json(?string $jsonString): array
    {
        if (empty($jsonString)) {
            return [];
        }

        // Normalize by adding commas between JSON objects
        $formatted = '[' . str_replace('}{', '},{', trim($jsonString)) . ']';

        // Decode to associative array
        $decoded = json_decode($formatted, true);

        // If invalid JSON, return empty array instead of breaking
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [];
        }

        return $decoded ?? [];
    }

}






if (!function_exists('loaddata')) {
    /**
     * Load and decode JSON content from the Contents table.
     *
     * @param string $page_name
     * @param string $type_name
     * @return array<object>
     */
    function loaddata(string $page_name, string $type_name): array
    {
        $records = Contents::where('type', $page_name)
            ->where('title', $type_name)
            ->get();

        $result = [];

        foreach ($records as $record) {
            $jsonString = $record->description;

            // 🩹 Fix concatenated JSON like {}{}{}
            if (!str_contains($jsonString, ',')) {
                $jsonString = preg_replace('/}\s*{/', '},{', $jsonString);
                $jsonString = '[' . $jsonString . ']';
            }

            $decoded = json_decode($jsonString, true);

            // Normalize single-object JSON to array
            if (is_array($decoded)) {
                if (array_is_list($decoded)) {
                    foreach ($decoded as $item) {
                        $result[] = (object) $item;
                    }
                } else {
                    $result[] = (object) $decoded;
                }
            }
        }

        return $result;
    }
}






if (!function_exists('loadSingleData')) {
   
    function loadSingleData(string $page_name, string $type_name): mixed
    {
        $obj = Contents::where('type', $page_name)
                ->where('title', $type_name)
                ->first();
            // Return single object
            $context = $obj ? json_decode($obj->description) : null;

            return $context;
    }

}


