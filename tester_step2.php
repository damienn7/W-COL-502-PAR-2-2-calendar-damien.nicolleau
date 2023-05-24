<?php


display_events_by_month([
    [
        'name' => 'Reunion Client',
        'date' => '20200505',
        'location' => 'Nantes'
    ],
    [
        'name' => 'Affinage sprint 2',
        'date' => '20200705',
        'location' => 'Nantes'
    ],
    [
        'name' => 'RDV Pro',
        'date' => '20200705',
        'location' => 'Paris'
    ],
    [
        'name' => 'Brainstorming',
        'date' => '20190705',
        'location' => 'Lyon'
    ],
    [
        'name' => 'Demonstration client',
        'date' => '20200205',
        'location' => 'Lille'
    ]
]);



function display_events_by_month(array $events)
{
    usort(
        $events,
        function ($x, $y) {
            return strtotime($x["date"]) > strtotime($y["date"]);
        }
    );
    foreach ($events as $key => $event) {
        if ($key == 0) {
            echo substr($event["date"], 0, 4) . "-" . substr($event["date"], 4, -2) . "\n";
        }
        if ($key != count($events) - 1 && $key > 0) {
            if (strtotime(substr($event["date"], 5, strlen($event["date"]) - 1) . "01") == strtotime(substr($events[$key - 1]["date"], 5, strlen($events[$key - 1]["date"]) - 1) . "01")) {
                echo substr($event["date"], 0, 4) . "-" . substr($event["date"], 4, -2) . "\n";
            }
        }
        display_event($event);
    }
}

function display_event(array $event)
{
    echo "  The \"" . $event["name"] . "\" event will take place on " . substr($event["date"], -2, strlen($event["date"]) - 1) . "-" . substr($event["date"], 4, -2) . "-" . substr($event["date"], 0, 4) . " in " . $event["location"] . "\n";
}
