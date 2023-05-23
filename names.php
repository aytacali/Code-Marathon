<?php


function yeniAd( string $ad ): int {
    $lines = array_filter( file( 'names.txt', FILE_IGNORE_NEW_LINES ) );

    if ( in_array( $ad, $lines ) )
        return 0;

    array_push( $lines, $ad );

    //1
    usort( $lines, 'strnatcasecmp' );

    //2  BUT WITH -> //strtolower( $ad ) in return
    // $x = 0;
    // foreach ( $lines as $line ) {
    //     $lines[ $x ] = strtolower( $line );

    //     $x++;
    // }

    // sort( $lines );

    file_put_contents('names.txt', implode( "\n", $lines ) );

    return array_search( $ad, $lines ) + 1;

}


echo yeniAd( 'Todd' ) . "\n";
echo yeniAd( 'Asker' ) . "\n";
echo yeniAd( 'Gunay' ) . "\n";
echo yeniAd( 'Vincent' ) . "\n";
echo yeniAd( 'Aytac' ) . "\n";
echo yeniAd( 'Ulrich' ) . "\n";
echo yeniAd( 'Anna' ) . "\n";
echo yeniAd( 'Sophie' ) . "\n";
echo yeniAd( 'aanna' ) . "\n";
