<?php


display_calendar([
    [
        'name' => 'Reunion Client',
        'date' => '20200505',
        'location' => 'Nantes'
    ],
    [
        'name' => 'Affinage sprint 2',
        'date' => '20200718',
        'location' => 'Nantes'
    ],
    [
        'name' => 'RDV Pro',
        'date' => '20200705',
        'location' => 'Paris'
    ],
    [
        'name' => ' Brainstorming',
        'date' => '20190705',
        'location' => 'Lyon'
    ],
    [
        'name' => 'Demonstration client',
        'date' => '20200205',
        'location' => 'Lille'
    ]
], '202005', '202007');

function display_calendar(array $events, string $dateBegin, string $dateEnd)
{
    $value = $dateBegin . "01";
    $format = substr($value, 0, 4) . "-" . substr($value, 4, -2) . "-" . substr($value, -2, strlen($value) - 1);
    $date = DateTime::createFromFormat('Y-m-d', $format);
    $dateDay = $date->format('D');
    $dateMonth = $date->format('M');
    $head = "$dateMonth 2020\nSun Mon Tue Wed Thu Fri Sat\n";
    $body = " o   o   o   o   o   o   o \n";

    echo $head;

    /**
     * 1 --> 2 = SUN
     */
    /**
     * 5 --> 6 = MON
     */
    /**
     * 9 --> 10 = TUE 
     */
    /**
     * 13 --> 14 = WED
     */
    /**
     * 17 --> 18 = THU
     */
    /**
     * 21 --> 22 = FRI
     */
    /**
     * 25 --> 26 = SAT
     */
    $body = substr($body, 0, 17) . "x" . substr($body, 18, strlen($body));


    echo $body;
    $month_number =  intval(substr($dateEnd . "01", 4, -2)) - intval(substr($value, 4, -2)) + 1;
}
