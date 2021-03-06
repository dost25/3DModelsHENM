<?php
    $fields = ["Medicine", "Archeology", "Games", ""];
    $items = ["Skull", "Helmet", "Knight", "Ball", "Heart"];

    $handle = fopen(__DIR__."/large_dataset.xml", "w");

    // Write header
    fwrite($handle, 
"<?xml version='1.0' encoding='utf-8'?>
<!-- Generated with large_dataset_script.php -->

<dataset>
    <table name='models_test'>
        <column>id</column>
        <column>name</column>
        <column>description</column>
        <column>classification</column>
        <column>upload_date</column>
        <column>size</column>
        <column>data_url</column>
        <column>preview_url</column>
        <column>uploaded_by</column>\n");

    // Generate rows and write them to file
    for($i=1; $i <= 10000; $i++) {

        $percentage = rand(1,100);
        $field = rand(0, count($fields)-1);
        $item = rand(0, count($items)-1);
        $time = date("Y-m-d H:i:s");
        $size =  number_format((float) rand()/(float) getrandmax() * 50,1);

        // For testing purposes
        if($i == 5) {
            $percentage = 75;
            $item = 1;
        } else if($i == 7) {
            continue;
        }

        fwrite($handle,
         "\t\t<row>
            <value>$i</value>
            <value>$items[$item] down to $percentage%</value>
            <value>Scanned $items[$item], downscaled to $percentage%</value>
            <value>$fields[$field]</value>
            <value>$time</value>
            <value>$size MB</value>
            <value>models/$i/$i.x3d</value>
            <value>models/$i/preview/$i.png</value>
            <value>NULL</value>
        </row>\n"
        );
    }

    // Write footer
    fwrite($handle, 
"\t</table>
</dataset>");
    fclose($handle);

?>
