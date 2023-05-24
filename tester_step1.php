<?php

display_event([
    'name'=>'RDV Client Smith',
    'date'=>'20191231',
    'location'=>'Nantes'
]);

function display_event(array $event)
{
    echo "The \"".$event["name"]."\" event will take place on ".substr($event["date"],-2,strlen($event["date"])-1)."-".substr($event["date"],4,-2)."-".substr($event["date"],0,4)." in ".$event["location"];
}
