<?php


function yeniAd( string $ad ): int {
    $myFile = fopen( 'names.txt', 'a+' ) or die( 'Unable to open file!' );
    $lines = array_filter(file( 'names.txt' ));

    $new_array = $lines;
    array_push($new_array, $ad);

    if ( in_array( $ad . "\n", $lines ) ) {
        return 0;
    }

    sort( $new_array );

    file_put_contents('names.txt', '');

    foreach ( $new_array as $new ) {
        fwrite( $myFile, explode( "\n", $new )[0] . "\n" );
    }

    fclose( $myFile );

    return array_search( $ad, $new_array ) + 1;

}





echo yeniAd( 'Todd' ) . "\n";
echo yeniAd( 'Sophie' ) . "\n";
echo yeniAd( 'Gunay' ) . "\n";
echo yeniAd( 'Vincent' ) . "\n";
echo yeniAd( 'Ulrich' ) . "\n";
echo yeniAd( 'Aytac' ) . "\n";
echo yeniAd( 'Asker' ) . "\n";
echo yeniAd( 'Anna' ) . "\n";

